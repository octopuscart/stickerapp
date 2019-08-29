<?php
$this->load->view('layout/header');
?>
<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
<link href="<?php echo base_url(); ?>assets/wizard/css/style.css" rel="stylesheet" />
<!-- ================== END PAGE LEVEL STYLE ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="<?php echo base_url(); ?>assets/wizard/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/wizard/js/jquery.steps.js"></script>
<script src="<?php echo base_url(); ?>assets/wizard/js/main.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<!--daterange picker-->
<link href="<?php echo base_url(); ?>assets/wizard/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/wizard/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/wizard/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/wizard/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" />




<script src="<?php echo base_url(); ?>assets/wizard/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/wizard/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/wizard/bootstrap-daterangepicker/moment.js"></script>
<script src="<?php echo base_url(); ?>assets/wizard/bootstrap-daterangepicker/daterangepicker.js"></script>

<script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js"></script>



<style>
    .datepicker-inline {
        /*width: 450px;*/
    }
    .datepicker table{
        /*width:100%;*/
    }
    .datepicker td, .datepicker th {
        padding: 5px;
        color: black;
    }
    .datepicker table tr td.active:hover, .datepicker table tr td.active:hover:hover, .datepicker table tr td.active.disabled:hover, .datepicker table tr td.active.disabled:hover:hover, .datepicker table tr td.active:focus, .datepicker table tr td.active:hover:focus, .datepicker table tr td.active.disabled:focus, .datepicker table tr td.active.disabled:hover:focus, .datepicker table tr td.active:active, .datepicker table tr td.active:hover:active, .datepicker table tr td.active.disabled:active, .datepicker table tr td.active.disabled:hover:active, .datepicker table tr td.active.active, .datepicker table tr td.active:hover.active, .datepicker table tr td.active.disabled.active, .datepicker table tr td.active.disabled:hover.active, .open .dropdown-toggle.datepicker table tr td.active, .open .dropdown-toggle.datepicker table tr td.active:hover, .open .dropdown-toggle.datepicker table tr td.active.disabled, .open .dropdown-toggle.datepicker table tr td.active.disabled:hover {
        color: #ffffff;
        background-color: #000000;
        border-color: #151515;
    }

    .btnbooking{
        background: black!important;
        border-color: black!important;
        border-radius: 15px;
    }
    .button_plus{
        border-radius: 15px;
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        background: black!important;
        border-color: black!important;
    }

    .button_minus{
        border-radius: 15px;
        border-top-right-radius:  0;
        border-bottom-right-radius: 0;
        background: black!important;
        border-color: black!important;
    }

    span.booking_lable {
        font-size: 16px;
        color: black;
    }

    .form-row{
        /*        border-bottom: 1px solid #000;
                padding-bottom: 15px;*/
    }

    .stimeslot .btn {
        float: left;
        padding: 5px;
        margin: 5px;
        background: black;
        color: white;
        border-radius: 15px;
        font-size: 12px;
    }

    .tabimage{
        height: 40px;
    }

    .tabtitle{
        margin-bottom: 0px;
        font-size: 12px;
        color: black
    }
    .titleblockwix {
        float: left;
        width: 100%;
        background: black;
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        margin-top: 20px;
    }

    .tableimg{
        height: 40px;
    }
    .tabletop {
        padding: 5px;
        background: #ececec;
        display:  inline-block;
        margin: 5px;
        text-align: center;
        border: 3px solid #ececec;
    }

    .tabletop:hover{
        border: 3px solid black;
    }

    .tabletop.active {
        border: 3px solid #000000;
    }

    .nav-tabs {
        border-bottom: 1px solid #000000;
    }
    .nav-tabs .nav-link.active, .nav-tabs .nav-item.show .nav-link {
        color: #495057;
        background-color: #fff;
        border-color: #000000 #000000 #fff;
    }

    .userloginform{
        padding: 10px 40px;
        background: #f6f6f6;
        border-radius: 32px;
        margin:20px 50px;
    }
    .registrationblock{
            padding: 10px;
    background: #db0000;
    margin-bottom: 20px;
    border-radius: 20px;
    }
    .registrationblock label {
    color: white;
}

</style>

<script>




</script>


<section id="content" ng-controller="bookingController">

    <div class="content-wrap" style="padding: 0px;">

        <div class="row clearfix common-height">

            <div class=" row center col-padding" style="background: url(<?php echo base_url(); ?>assets/images/clientsbackground.jpg) center;; height: 708px;    width: 100%;    padding-top: 20px;">

                <div class="col-lg-2 center col-padding" >
                    <div>&nbsp;</div>
                </div>

                <div class="col-lg-10 center " style="    width: 100%;">
                    <div>
                        <!-- begin row -->
                        <div class=" ">
                            <!-- begin col-12 -->






                            <div id="wizard1">
                                <!--<form action="#" class="" id="wizard">-->
                                <!-- SECTION 1 -->
                                <h2></h2>
                                <section>




                                    <div class="inner">
                                        <div class="image-holder1">
                                            <div class="form-header" style="    position: absolute;top:20px;left: 8.5%;">
                                                <h3 style="background: white">Book Now</h3>
                                            </div>
                                            <img src="<?php echo base_url(); ?>assets/wizard/images/form-wizard-1.jpg" alt="">
                                        </div>
                                        <div class="form-content" >




                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                    <!--datetime-->
                                                    <a class="nav-item nav-link active" id="nav-datetime-tab"  href="#nav-datetime" role="tab" aria-controls="nav-datetime" aria-selected="true">

                                                        <figure class="figure" style="width: 150px;">
                                                            <img src="<?php echo base_url(); ?>assets/wizard/images/time.svg" class="figure-img img-fluid rounded tabimage" alt="...">
                                                            <figcaption class="figure-caption">
                                                                <p class="tabtitle">{{bookingArray.select_date}}</p>
                                                                <p class="tabtitle">{{bookingArray.select_time}}</p>
                                                            </figcaption>
                                                        </figure>

                                                    </a>

                                                    <a class="nav-item nav-link" id="nav-table-tab"  href="#nav-table" role="tab" aria-controls="nav-table" aria-selected="false">
                                                        <figure class="figure" style="width: 150px;">
                                                            <img src="<?php echo base_url(); ?>assets/wizard/images/table.png" class="figure-img img-fluid rounded tabimage" alt="...">
                                                            <figcaption class="figure-caption">
                                                                <p class="tabtitle">Table</p>
                                                                <p class="tabtitle">{{bookingArray.select_table}}</p>
                                                            </figcaption>
                                                        </figure>
                                                    </a>


                                                    <a class="nav-item nav-link" id="nav-profile-tab"  href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                                        <figure class="figure" style="width: 150px;">
                                                            <img src="<?php echo base_url(); ?>assets/wizard/images/profile.png" class="figure-img img-fluid rounded tabimage" alt="...">
                                                            <figcaption class="figure-caption">
                                                                <p class="tabtitle">{{bookingArray.book_type}}</p>
                                                                <p class="tabtitle">{{bookingArray.people}} Guest(s)</p>
                                                            </figcaption>
                                                        </figure>
                                                    </a>


                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-datetime" role="tabpanel" aria-labelledby="nav-datetime-tab">
                                                    <div style="    margin-top: 20px;">
                                                        <h4 style="    font-size: 12px;">Click here to reserve a booking or make an enquiry.</h4>
                                                        <div class="btn-group"  role="group" aria-label="Basic example">
                                                            <button type="button" class="btn btn-danger {{bookingArray.book_type == 'Reserve'?'active':''}}" ng-click="bookType('Reserve')">Reserve Now</button>
                                                            <button type="button" class="btn btn-danger {{bookingArray.book_type == 'Enquiry'?'active':''}}" ng-click="bookType('Enquiry')">Make An Enquiry</button>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-5">

                                                            <div class="">
                                                                <span class="titleblockwix">Select Date</span>
                                                                <div id="datepicker-inline"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span class="titleblockwix">Select Time</span>
                                                            <div class="stimeslot" style="    padding-left: 13px;">

                                                                <button class="btn btn-primary btn-inverse btn-sm" ng-repeat="time in initWizard.timeslot" ng-click="selectTime(time)">{{time}}</button>
                                                                <div style="clear:both"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary btnbooking btn-lg"    ng-if='bookingArray.select_time != "--:--:--"'    ng-click='changeWizardTble()'  >Select Guest(s) <i class="fa fa-arrow-right"></i></button>
                                                </div>

                                                <div class="tab-pane fade show" id="nav-table" role="tabpanel" aria-labelledby="nav-table-tab">
                                                    <div style="    margin-top: 20px;">
                                                        <h4 style="    font-size: 12px;">Click here to reserve a table or make an enquiry.</h4>
                                                    </div>

                                                    <div class="row" style="margin-bottom: 10px;">
                                                        <div class="col-md-6">
                                                            <div class="">
                                                                <span class="titleblockwix">Ground Floor</span>
                                                                <div class="tableview">
                                                                    <div class="tabletop {{bookingArray.select_table==table?'active':''}}" ng-repeat="table in initWizard.tables.zone_g" ng-click="selectTable(table)">
                                                                        <figure class="figure">
                                                                            <img src="<?php echo base_url(); ?>assets/wizard/images/dining_table.png" class="figure-img img-fluid rounded tableimg" alt="...">
                                                                            <figcaption class="figure-caption">{{table}}</figcaption>
                                                                        </figure>
                                                                    </div>
                                                                    <div style="clear:both"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <span class="titleblockwix">First Floor</span>
                                                            <div class="tableview">
                                                                <center>
                                                                    <div class="tabletop {{bookingArray.select_table==table?'active':''}}" ng-repeat="table in initWizard.tables.zone_f" ng-click="selectTable(table)">
                                                                        <figure class="figure">
                                                                            <img src="<?php echo base_url(); ?>assets/wizard/images/dining_table.png" class="figure-img img-fluid rounded tableimg" alt="...">
                                                                            <figcaption class="figure-caption">{{table}}</figcaption>
                                                                        </figure>
                                                                    </div>
                                                                </center>
                                                                <div style="clear:both"></div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <button class="btn btn-primary btnbooking btn-lg"    ng-if='bookingArray.select_table == "--"'    ng-click='changeWizardTime()'  ><i class="fa fa-arrow-left"></i> Select Date & Time</button>
                                                    <div ng-if='bookingArray.select_table != "--"'>
                                                        <button class="btn btn-primary btn-lg button_minus"  ng-click="changeWizardTime()"><i class="fa fa-arrow-left"></i> Select Date & Time</button>
                                                        <button class="btn btn-primary btnbooking btn-lg button_plus"     ng-click='changeWizardProfile()'  >Select Guest(s) <i class="fa fa-arrow-right"></i></button>
                                                    </div>                                             
                                                </div>


                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    <div class="userloginform" ng-if="initWizard.logincheck == 0">
                                                        <div class="form-row">
                                                            <div class="form-holder" style="    width: 100%;">
                                                                <input type="email" name="email" ng-model="initWizard.login.email" placeholder="Email" class="form-control" required="">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">

                                                            <div class="form-holder" style="    width: 100%;">
                                                                <input type="password" name="password" ng-model="initWizard.login.password" placeholder="Password" class="form-control" required="">
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary btn-lg button_minus" type="button" ng-click="loginFunction()"><i class="fa fa-sign-in"></i> Login Now </button>
                                                        <button class="btn btn-primary btn-lg button_plus" type="button" ng-click="continueWithoutLogin()">Book & Register<i class="fa fa-arrow-down"></i></button>
                                                        <p style="    margin-top: 20px;"><a href="#" ng-click="changeWizardTble()"><i class="fa fa-arrow-left"></i> View Tables</a>.</p>
                                                    </div>


                                                    <form action="#" method="post" ng-if="initWizard.logincheck == 2">
                                                        <input type="hidden" name="select_date" value="{{bookingArray.select_date}}"/>
                                                        <input type="hidden" name="select_time" value="{{bookingArray.select_time}}"/>
                                                        <input type="hidden" name="booking_type" value="{{bookingArray.book_type}}"/>
                                                        <input type="hidden" name="select_table" value="{{bookingArray.select_table}}"/>
                                                        <input type="hidden" name="usertype" value="{{bookingArray.usertype}}"/>

                                                        <center>
                                                            <div class="form-row" style="width:150px; ">
                                                                <span class="booking_lable" style="    float: left;
                                                                      width: 100%;">Total no. of guest(s)</span>
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-btn ">
                                                                        <button class="btn btn-primary btn-sm button_minus" type="button" ng-click="changePeople('minus')"><i class="fa fa-minus"></i></button>
                                                                    </span>
                                                                    <input type="text" name="people" class="form-control" placeholder="" value="{{bookingArray.people}}" style="height: 32px;" id="people" required="">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-primary  btn-sm  button_plus" type="button" ng-click="changePeople('plus')"><i class="fa fa-plus"></i></button>
                                                                    </span>
                                                                </div><!-- /input-group -->
                                                            </div>
                                                        </center>





                                                        <h4 style="    font-size: 12px;">  Enter Guest Details </h4>

                                                        <div class="form-row">
                                                            <div class="form-holder">
                                                                <input type="text" name="first_name" placeholder="First Name" class="form-control" required="" ng-model="bookingArray.first_name">
                                                            </div>
                                                            <div class="form-holder">
                                                                <input type="text" name="last_name" placeholder="Last Name" class="form-control" required="" ng-model="bookingArray.last_name">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-holder">
                                                                <input type="text" name="email" placeholder="Your Email" class="form-control" required="" ng-model="bookingArray.email">
                                                            </div>
                                                            <div class="form-holder">
                                                                <input type="text" name="contact_no" placeholder="Phone Number" class="form-control" required="" ng-model="bookingArray.contact_no">
                                                            </div>
                                                        </div>

                                                        <div class="form-row">

                                                            <div class="form-holder" style="    width: 100%;">
                                                                <input type="text" name="extra_remark" placeholder="Special Request (Optional)" class="form-control" >
                                                            </div>
                                                        </div>


                                                        <div class="registrationblock">
                                                            <div class="custom-control custom-checkbox" style="    text-align: left;   ">
                                                                <input type="checkbox" class="custom-control-input" name="registrationyes" checked="true" id="customCheck1" >
                                                                <label class="custom-control-label" for="customCheck1" >Register at baan thai to get free stuff(s). </label>
                                                            </div>
                                                        </div>


                                                        <button class="btn btn-primary btn-lg button_minus" type="button"  ng-click="changeWizardTble()"><i class="fa fa-arrow-left"></i></button>
                                                        <button class="btn btn-primary btn-lg button_plus" name="submit" type="submit">Confirm Now <i class="fa fa-arrow-right"></i></button>
                                                        <p><a href="#" ng-click="loginNow()">Click here</a> to login.</p>
                                                    </form>


                                                    <!--direct login-->
                                                    <form action="#" method="post" ng-if="initWizard.logincheck == 3">
                                                        <input type="hidden" name="select_date" value="{{bookingArray.select_date}}"/>
                                                        <input type="hidden" name="select_time" value="{{bookingArray.select_time}}"/>
                                                        <input type="hidden" name="booking_type" value="{{bookingArray.book_type}}"/>
                                                        <input type="hidden" name="select_table" value="{{bookingArray.select_table}}"/>
                                                        <input type="hidden" name="first_name" value="{{bookingArray.first_name}}"/>
                                                        <input type="hidden" name="last_name" value="{{bookingArray.last_name}}"/>
                                                        <input type="hidden" name="email" value="{{bookingArray.email}}"/>
                                                        <input type="hidden" name="contact_no" value="{{bookingArray.contact_no}}"/>
                                                        <input type="hidden" name="usertype" value="{{bookingArray.usertype}}"/>
                                                        <input type="hidden" name="registrationyes" value=""/>


                                                        <center>
                                                            <div class="form-row" style="width:150px; ">
                                                                <span class="booking_lable" style="    float: left;
                                                                      width: 100%;">Total no. of guest(s)</span>
                                                                <div class="input-group input-group-sm">
                                                                    <span class="input-group-btn ">
                                                                        <button class="btn btn-primary btn-sm button_minus" type="button" ng-click="changePeople('minus')"><i class="fa fa-minus"></i></button>
                                                                    </span>
                                                                    <input type="text" name="people" class="form-control" placeholder="" value="{{bookingArray.people}}" style="height: 32px;" id="people" required="">
                                                                    <span class="input-group-btn">
                                                                        <button class="btn btn-primary  btn-sm  button_plus" type="button" ng-click="changePeople('plus')"><i class="fa fa-plus"></i></button>
                                                                    </span>
                                                                </div><!-- /input-group -->
                                                            </div>
                                                        </center>



                                                        <div class="card">

                                                            <div class="card-body" style="text-align: left;">
                                                                <h5 class="card-title" style="    font-size: 25px;"><i class="fa fa-user"></i> {{bookingArray.first_name}} {{bookingArray.last_name}}</h5>
                                                                <p class="card-text" style="text-align: left;font-size: 12px;">
                                                                    <i class="fa fa-envelope"></i> {{bookingArray.email}}<br/>
                                                                    <i class="fa fa-phone"></i> {{bookingArray.contact_no?bookingArray.contact_no:'-----'}}
                                                                </p>
                                                            </div>
                                                        </div>




                                                        <div class="form-row">

                                                            <div class="form-holder" style="    width: 100%;">
                                                                <input type="text" name="extra_remark" placeholder="Special Request (Optional)" class="form-control" >
                                                            </div>
                                                        </div>


                                                        <button class="btn btn-primary btn-lg button_minus" type="button"  ng-click="changeWizardTble()"><i class="fa fa-arrow-left"></i></button>
                                                        <button class="btn btn-primary btn-lg button_plus" name="submit" type="submit">Confirm Now <i class="fa fa-arrow-right"></i></button>
                                                    </form>

                                                </div>
                                            </div>
                                            <div class="form-row">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <!-- end col-12 -->

                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end #content -->
                </div>
                <div style="clear: both"></div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="thanksModal" tabindex="-1" role="dialog" aria-labelledby="thanksModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                 <div class="modal-content" style="width: 600px;">


                        <div class="modal-body" style="padding: 0px;">
                            <button type="button" class="close" data-dismiss="modal" style="    position: absolute;
                                    right: 8px;
                                    color: #000;">&times;</button>

                            <img src="<?php echo base_url(); ?>assets/images/popupthankyou.jpg">
                        </div>
                    </div><!-- /.modal-content -->

            </div>
        </div>
    </div>

    <script>

<?php
if ($submitdata == 'yes') {
    ?>
            $(function () {
            let newmail = new Audio("<?php echo base_url(); ?>assets/sound/sendemail.mp3");
            newmail.play();
            $("#thanksModal").modal("show");
            $('#thanksModal').on('hidden.bs.modal', function (e) {
            //            window.location = "<?php echo site_url('booknow'); ?>";
            });
            })
    <?php
}
?>



    </script>



</section>





<?php
$this->load->view('layout/footer');
?>



<script>
    var today = "<?php echo date('Y-m-d'); ?>";</script>
<script src="<?php echo base_url(); ?>assets/wizard/booking.js"></script>
