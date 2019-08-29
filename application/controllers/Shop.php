<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->model('User_model');

        $this->load->library('session');
        $this->user_id = $this->session->userdata('logged_in')['login_id'];
        $this->session_user = $this->session->userdata('admin_login');
    }

    public function error404() {
        $this->load->view('errors/error_404');
    }

    public function index() {
        $this->load->view('home');
    }

    public function menu() {
        $this->load->view('Pages/menu');
    }

    public function contactus() {
        $data['checksent'] = 0;


        if (isset($_POST['sendmessage'])) {
            if ($this->input->post('anti_spam') == 8) {
                
            } else {
                redirect('contact-us?error=cw');
            }
            $web_enquiry = array(
                'last_name' => "",
                'first_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'contact' => $this->input->post('contact'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('message'),
                'datetime' => date("Y-m-d H:i:s a"),
            );

            $this->db->insert('web_enquiry', $web_enquiry);

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;
            $sendernameeq = $this->input->post('full_name');


//redirect('contact-us');
        }
        $this->load->view('Pages/contactus', $data);
    }

    public function aboutus() {
        $this->load->view('Pages/aboutus');
    }

 
    public function appointment() {
        $this->load->view('Pages/appointment');
    }

    
    public function faqs() {
        $this->load->view('Pages/faqs');
    }

 


    public function subscribe() {
        if (isset($_POST['submit'])) {
            $appointment = array(
                "country" => $this->input->post('country'),
                'email' => $this->input->post('email'),
            );
// print_r($appointment);
            $this->db->insert('appointment_list', $appointment);

            $emailsender = email_sender;
            $sendername = email_sender_name;
            $email_bcc = email_bcc;

            if ($this->input->post('email')) {
                $this->email->set_newline("\r\n");
                $this->email->from(email_bcc, $sendername);
                $this->email->to($this->input->post('email'));
                $this->email->bcc(email_bcc);
                $subjectt = "Thank you for your subscription";
                $orderlog = array(
                    'log_type' => 'Thank You For Subscribing',
                    'log_datetime' => date('Y-m-d H:i:s'),
                    'user_id' => 'Subscribing User',
                    'log_detail' => $sendernameeq . "  " . $subjectt
                );
                $this->db->insert('system_log', $orderlog);
                $subject = $subjectt;
                $this->email->subject($subject);
                $appointment['appointment'] = $appointment;
                $htmlsmessage = $this->load->view('Email/subscribing', $appointment, true);
                if (REPORT_MODE == 1) {
                    $this->email->message($htmlsmessage);
                    $this->email->print_debugger();
                    $send = $this->email->send();
                    if ($send) {
                        redirect(site_url("/"));
                    } else {
                        $error = $this->email->print_debugger(array('headers'));
                        redirect(site_url("/"));
                    }
                } else {
                    echo $htmlsmessage;
                }
            }
        }
        $this->load->view('Pages/subscribe');
    }

 

   

    public function reviews() {
        $this->load->view('Pages/reviews');
    }




}
