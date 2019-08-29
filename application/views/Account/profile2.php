<?php
$this->load->view('layout/header');
?>

<style>
    .editable-buttons .btn {
        background: #f2b632;
        display: inline-block;
        font-size: 12px;
        text-transform: uppercase;
        padding: 5px 10px;
        font-weight: bold;
        border-radius: 0px;
        letter-spacing: 0px;
        line-height: 14px;
        color: #010101;
        position: relative;
        overflow: hidden;
        -webkit-transition: all 0.4s ease-in-out;
        -moz-transition: all 0.4s ease-in-out;
        -o-transition: all 0.4s ease-in-out;
        -ms-transition: all 0.4s ease-in-out;
        transition: all 0.4s ease-in-out;
        font-family: 'Raleway', sans-serif;
    }

    .edit_detail {
        margin-left: 15px;
    }

</style>

<section class="sub-bnr" data-stellar-background-ratio="0.5" style="margin-bottom: 10px;">
    <div class="position-center-center">
        <div class="container">
            <h4>My Profile</h4>

            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Account</li>
            </ol>
        </div>
    </div>
</section>







<!-- Content -->
<div id="content" class="my-account-page-area"> 

    <!-- Blog -->
    <section class="woocommerce ">
        <div class="container"> 

            <!-- News Post -->
            <div class="news-post1">
                <div class="row"> 

                    <?php
                    $this->load->view('Account/sidebar');
                    ?>


                    <div class="col-md-9 checkout-form2">

                        <!-- begin profile-info -->
                        <div class="profile-info">
                            <!-- begin table -->
                            <div class="table-responsive">

                                <table class="table table-profile">
                                    <thead>
                                        <tr>
                                            <th colspan="2">
                                                <div class="col-md-6">

                                                    <div class="media">
                                                        <a class="media-left" href="javascript:;">
                                                            <img src='<?php echo base_url(); ?>assets/profile_image/<?php echo $userdata->image; ?>' alt="" class="media-object rounded-corner" style="    width: 45px;background: url(<?php echo base_url(); ?>assets/emoji/user.png);    height: 45px;background-size: cover;">
                                                        </a>
                                                        <div class="media-body">
                                                            <h4 class="media-heading"><?php echo $userdata->first_name; ?> <?php echo $userdata->last_name; ?></h4>
                                                            <p>
                                                                <?php echo $userdata->email; ?>
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="checkbox m-b-5 m-t-0" >
                                                        <label><input class="checkbox" type="checkbox" id="edit_toggle" /> Edit Profile Information</label>
                                                    </div>
                                                    <div class="checkbox m-b-0">
                                                        <button class="btn btn-xs btn-link btn-small" data-toggle="modal" data-target="#changePassword"><i class="fa fa-lock"></i> Change Your Password</button>
                                                    </div>
                                                </div>
                                                <!--                                        <h4>
                                                                                            <i class="ion-android-person"></i>
                                                <?php echo $userdata->first_name; ?> <?php echo $userdata->last_name; ?>
                                                                                            <small>
                                                <?php echo $userdata->email; ?>
                                                                                            </small>
                                                                                        </h4>-->
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr >
                                            <td class="field" style="    width: 200px;">First Name</td>
                                            <td>
                                                <span id="first_name" data-type="text" data-pk="<?php echo $userdata->id; ?>" data-name="first_name" data-value="<?php echo $userdata->first_name; ?>" data-url="<?php echo site_url("LocalApi/updateUserSession"); ?>" data-original-title="Enter First Name" class="m-l-5 editable editable-click" tabindex="-1" data-toggle="#edit_fname" > <?php echo $userdata->first_name; ?></span><button class="button edit_detail" ><i class="fa fa-pencil"></i>Edit</button>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td class="field">Last Name</td>
                                            <td>
                                                <span id="last_name" data-type="text" data-pk="<?php echo $userdata->id; ?>" data-name="last_name" data-value="<?php echo $userdata->last_name; ?>" data-url="<?php echo site_url("LocalApi/updateUserSession"); ?>" data-original-title="Enter Last Name" class="m-l-5 editable editable-click" tabindex="-1" data-toggle="#edit_lname" > <?php echo $userdata->last_name; ?></span><button  class="button edit_detail" ><i class="fa fa-pencil"></i>Edit</button>
                                            </td>
                                        </tr>


                                        <tr class="">
                                            <td class="field">Contact No.</td>
                                            <td>
                                                <i class="fa fa-mobile fa-lg m-r-5"></i> 
                                                <span id="contact_no" data-type="text" data-pk="<?php echo $userdata->id; ?>" data-name="contact_no" data-value="<?php echo $userdata->contact_no; ?>" data-url="<?php echo site_url("LocalApi/updateUserSession"); ?>" data-original-title="Enter Contact No." class="m-l-5 editable editable-click" tabindex="-1" data-toggle="#edit_contact" > <?php echo $userdata->contact_no; ?></span><button class="button edit_detail" ><i class="fa fa-pencil"></i>Edit</button>
                                            </td>
                                        </tr>


                                        <tr >
                                            <td class="field">Gender</td>
                                            <td>
                                                <span id="gender" data-type="select" data-pk="<?php echo $userdata->id; ?>" data-name="gender" data-value="<?php echo $userdata->gender; ?>" data-url="<?php echo site_url("LocalApi/updateUserSession"); ?>" data-original-title="Select Gender" class="m-l-5 editable editable-click" tabindex="-1" > <?php echo $userdata->gender; ?></span><button class="button edit_detail" ><i class="fa fa-pencil"></i>Edit</button>
                                            </td>
                                        </tr>
                                        <tr >
                                            <td class="field">Birth Date</td>
                                            <td>
                                                <a href="#" id="dob" data-type="combodate"  data-name="birth_date" data-value="<?php echo $userdata->birth_date; ?>" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="<?php echo $userdata->id; ?>" data-title="Select Date of birth" class="editable editable-click" data-original-title="" title="" style="background-color: rgba(0, 0, 0, 0);" data-url="<?php echo site_url("LocalApi/updateUserSession"); ?>"><?php echo $userdata->birth_date; ?></a>                                        
                                                <button class="button edit_detail" ><i class="fa fa-pencil"></i>Edit</button>
                                            </td>
                                        </tr>



                                        <tr class="">
                                            <td class="field">Profession</td>
                                            <td>
                                                <span id="profession" data-type="select" data-pk="<?php echo $userdata->id; ?>" data-name="profession" data-value="<?php echo $userdata->profession; ?>" data-url="<?php echo site_url("LocalApi/updateUserSession"); ?>" data-original-title="Select Profession" class="m-l-5 editable editable-click" tabindex="-1" > <?php echo $userdata->profession; ?></span><button class="button edit_detail" ><i class="fa fa-pencil"></i>Edit</button>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td class="field">Country</td>
                                            <td>
                                                <span id="country" data-type="select" data-pk="<?php echo $userdata->id; ?>" data-name="country" data-value="<?php echo $userdata->country; ?>" data-url="<?php echo site_url("LocalApi/updateUserSession"); ?>" data-original-title="Select Country" class="m-l-5 editable editable-click" tabindex="-1" > <?php echo $userdata->country; ?></span><button class="button edit_detail" ><i class="fa fa-pencil"></i>Edit</button>
                                            </td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                            <!-- end table -->
                        </div>


                        <!-- end profile-info -->
                    </div>




                </div>
                </section>
            </div>
            <!-- End Content --> 


            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="changePassword" style="    z-index: 20000000;">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <form action="#" method="post">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h5 class="modal-title" id="myModalLabel" style="font-size: 12px">Change Your Password</h5>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Current Password</label>
                                    <input type="password" name="c_password" class="form-control"  required="" placeholder="Enter Your Current Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">New Password</label>
                                    <input type="password" class="form-control" name="n_password"  required=""  placeholder="Enter Your Current Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Confirm Password</label>
                                    <input type="password" class="form-control"name="r_password" required=""  placeholder="Enter Your Current Password">
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="submit" name="changePassword" class="btn btn-primary">Save changes</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>



            <!-- Modal -->
            <div class="modal  fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="    z-index: 20000000;">
                <div class="modal-dialog modal-sm woocommerce" role="document" style="width: 300px">
                    <form action="#" method="post">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel" style="font-size: 15px">Change Password</h4>
                            </div>
                            <div class="modal-body checkout-form ">

                                <label class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                    Old Password
                                    <input type="text" name="old_password"  value="" class=" woocommerce-Input woocommerce-Input--text input-text">
                                </label>

                                <label class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                    New Password
                                    <input type="text" name="new_password"  value="" class=" woocommerce-Input woocommerce-Input--text input-text">
                                </label>
                                <br/>
                                <label class="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                                    Confirm Password
                                    <input type="text" name="re_password"  value="" class=" woocommerce-Input woocommerce-Input--text input-text">
                                </label>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="change_password" class="btn btn-primary">Change Password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

   <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-1.9.1.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
            <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>

            <?php
            $this->load->view('layout/footer');
            ?>

         

            <link href="<?php echo base_url(); ?>assets/plugins/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" />
            <script src="<?php echo base_url(); ?>assets/plugins/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
            <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet"  />
            <script src="<?php echo base_url(); ?>/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

            <script>
                $(function () {
                    $(".woocommerce-MyAccount-navigation-link--dashboard").removeClass("active");
                    $(".profile_page").addClass("active");
                })
            </script>
            <script>
                $(function () {
                    $('.edit_detail').hide();
                    $("#edit_toggle").click(function () {
                        $('.edit_detail').hide();
                        if (this.checked) {
                            $('.edit_detail').show();
                        }
                    })

                    $('.edit_detail').click(function (e) {
                        e.stopPropagation();
                        e.preventDefault();
                        $($(this).prev()).editable('toggle');
                    });

                    $('#gender').editable({
                        source: {
                            'Male': 'Male',
                            'Female': 'Female'
                        }
                    });


                    $('#profession').editable({
                        source: {
                            'Academic': 'Academic',
                            'Medicine': 'Medicine',
                            'Law': 'Law',
                            'Banking': 'Banking',
                            'IT': 'IT',
                            'Entrepreneur': 'Entrepreneur',
                            'Sales/Marketing': 'Sales/Marketing',
                            'Other': 'Other',
                        }
                    });


                    $('#country').editable({
                        source: {
<?php
foreach ($country as $key => $value) {
    $cont = $value['country_name'];
    echo "'$cont':'$cont',";
}
?>

                        }
                    });




                })
            </script>