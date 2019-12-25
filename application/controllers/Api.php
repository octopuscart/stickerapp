<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require(APPPATH . 'libraries/REST_Controller.php');

class Api extends REST_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('session');
        $this->checklogin = $this->session->userdata('logged_in');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    function updateCurd_post() {
        $fieldname = $this->post('name');
        $value = $this->post('value');
        $pk_id = $this->post('pk');
        $tablename = $this->post('tablename');
        if ($this->checklogin) {
            $data = array($fieldname => $value);
            $this->db->set($data);
            $this->db->where("id", $pk_id);
            $this->db->update($tablename, $data);
        }
    }

    //function for product list
    function loginOperation_get() {
        $userid = $this->user_id;
        $this->db->select('au.id,au.first_name,au.last_name,au.email,au.contact_no');
        $this->db->from('admin_users au');
        $this->db->where('id', $userid);
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->row();
        $this->response($result);
    }

    //Login Function 
    //function for product list
    function loginOperation_post() {
        $email = $this->post('email');
        $password = $this->post('password');
        $this->db->select('au.id,au.first_name,au.last_name,au.email,au.contact_no');
        $this->db->from('admin_users au');
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->row();

        $sess_data = array(
            'username' => $result->email,
            'first_name' => $result->first_name,
            'last_name' => $result->last_name,
            'login_id' => $result->id,
        );
        $this->session->set_userdata('logged_in', $sess_data);
        $this->response($result);
    }

    function registerMobileGuest_post() {
        $this->config->load('rest', TRUE);
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $reg_id = $this->post('reg_id');
        $model = $this->post('model');
        $manufacturer = $this->post('manufacturer');
        $uuid = $this->post('uuid');
        $regArray = array(
            "reg_id" => $reg_id,
            "manufacturer" => $manufacturer,
            "uuid" => $uuid,
            "model" => $model,
            "user_id" => "Guest",
            "user_type" => "Guest",
            "datetime" => date("Y-m-d H:i:s a")
        );
        $this->db->where('reg_id', $reg_id);
        $query = $this->db->get('gcm_registration');
        $regarray = $query->result_array();
        if ($regArray) {
            
        } else {
            $this->db->insert('gcm_registration', $regArray);
        }
        $this->response(array("status" => "done"));
    }

    //Mobile Booking APi
    function orderFromMobile_post() {
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
        header('Access-Control-Allow-Origin: *');

        $this->config->load('rest', TRUE);
        $bookingarray = $this->post();


        $cartdata = $this->post("cartdata");
        $cartjson = json_decode($cartdata);



        $web_order = array(
            'name' => $this->post('name'),
            'email' => $this->post('email'),
            'contact_no' => $this->post('contact_no'),
            'address' => $this->post('address'),
            'datetime' => date("Y-m-d H:i:s a"),
            'quantity' => $this->post('quantity'),
            'total' => $this->post('total'),
            'payment_method' => "COD",
            'order_status' => "Processing",
            'user_id' => $this->post('user_id'),
        );
        $this->db->insert('order_mobile', $web_order);

        $last_id = $this->db->insert_id();
        $oderid = $last_id;
        foreach ($cartjson as $key => $value) {
            $productobj = array(
                "product_id" => $value->id,
                "title" => $value->title,
                "image" => $value->image,
                "price" => $value->price,
                "note" => $value->note,
                "quantity" => $value->quantity,
                "total_price" => $value->total_price,
                "order_id" => $oderid
            );
            $this->db->insert('ordercart', $productobj);
        }
        $this->response(array("order_id" => $oderid));
    }

    function registration_post() {
        $this->config->load('rest', TRUE);
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $name = $this->post('name');
        $email = $this->post('email');
        $contact_no = $this->post('contact_no');
        $password = $this->post('password');
        $regArray = array(
            "name" => $name,
            "email" => $email,
            "contact_no" => $contact_no,
            "password" => $password,
            "datetime" => date("Y-m-d H:i:s a")
        );
        $this->db->where('email', $email);
        $query = $this->db->get('app_user');
        $userdata = $query->row();
        if ($userdata) {
            $this->response(array("status" => "already", "userdata" => ""));
        } else {
            $this->db->insert('app_user', $regArray);
            $this->response(array("status" => "done", "userdata" => $regArray));
        }
    }

    function loginmob_post() {
        $this->config->load('rest', TRUE);
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $email = $this->post('email');
        $password = $this->post('password');
        $regArray = array(
            "email" => $email,
            "password" => $password,
        );
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('app_user');
        $userdata = $query->row();
        if ($userdata) {
            $this->response(array("status" => "done", "userdata" => $userdata));
        } else {
            $this->response(array("status" => "error", "userdata" => ""));
        }
    }

    function updateProfile_post() {
        $this->config->load('rest', TRUE);
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $email = $this->post('email');
        $profiledata = array(
            'name' => $this->post('name'),
            'email' => $this->post('email'),
            'contact_no' => $this->post('contact_no'),
        );
        $this->db->set($profiledata);
        $this->db->where('email', $email); //set column_name and value in which row need to update
        $this->db->update("app_user");
        $this->db->order_by('name asc');

        $this->db->where('email', $email); //set column_name and value in which row need to update
        $query = $this->db->get('app_user');
        $userData = $query->row();
        $this->response(array("userdata" => $userData));
    }

    //function for product list
    function userbooking_post() {
        $this->config->load('rest', TRUE);
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        $email = $this->post('email');
        $this->db->order_by('id desc');
        $this->db->where('email', $email);
        $query = $this->db->get("web_order");
        $result = $query->result();
        $this->response($result);
    }

//
    //function for product list
    function userorder_get($user_id) {
        $this->db->where('user_id', $user_id);
        $this->db->order_by('id desc');
        $query = $this->db->get("order_mobile");
        $order_mobile = $query->result_array();
//        $orderlist = [];
//        foreach ($order_mobile as $key => $value) {
//            $orderid = $value['id'];
//            $this->db->where('order_id', $orderid);
//            $query = $this->db->get("ordercart");
//            $cartdata = $query->result_array();
//            $value['cart_data'] = $cartdata;
//            array_push($orderlist, $value);
//        }
        $this->response($order_mobile);
    }

    //function for order details list
    function userorderdetails_get($order_id) {
        $this->db->where('id', $order_id);
        $this->db->order_by('id desc');
        $query = $this->db->get("order_mobile");
        $order_mobile = $query->row();
        $orderdetails = array("order"=>$order_mobile);

        $orderid = $order_mobile->id;
        $this->db->where('order_id', $orderid);
        $query = $this->db->get("ordercart");
        $cartdata = $query->result_array();
        $orderdetails['cart_data'] = $cartdata;


        $this->response($orderdetails);
    }

    //-----------
    //function for product list
    function services3_get() {
        $services = $this->Product_model->serviceModel3();
        $this->response($services);
    }

//-----------

    function servicesAdmin_get() {
        $services = $this->Product_model->serviceModel2();
        $this->response($services);
    }

    function sliderImages_get() {
        $query = $this->db->get("slider_images");
        $sliderimages = $query->result();
        $this->response($sliderimages);
    }

    function reviews_get() {
        $reviews = $this->Product_model->reviews();
        $this->response($reviews);
    }

    function gallery_get() {
        $query = $this->db->get("gallery_images");
        $galleryList = $query->result();
        $this->response($galleryList);
    }

}

?>