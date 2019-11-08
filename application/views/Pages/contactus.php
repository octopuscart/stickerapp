<?php
$this->load->view('layout/header');
?>
<style>
    .modal-backdrop {
        opacity: 1;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1040;
        width: 20px;
        height: 20px;
        background-color: #fff;
    }
</style>
<!--contannt section-->
<app-contact-us _nghost-c15="" class="ng-star-inserted">
    <section _ngcontent-c15="" class="sbPageTopSec servicesPgSec">
        <div _ngcontent-c15="" class="container">
            <h2 _ngcontent-c15="">Contact Us</h2>
        </div>
    </section>

    <section _ngcontent-c15="" class="cntctFrmCntSec">
        <div _ngcontent-c15="" class="container">
            <div _ngcontent-c15="" class="cntctFrmCnt">
                <div _ngcontent-c15="" class="cntctAddress leftcontact">
                    <h3 _ngcontent-c15="">Madhu Vihar Branch</h3>
                    <p _ngcontent-c15=""> Reach us out for Bookings, queries, feedback and concerns -</p>
                    <ul _ngcontent-c15="" class="adrsCnt">
                        <li _ngcontent-c15="">
                            <i _ngcontent-c15="" class="fas fa-map-marker-alt"></i>
                            <p _ngcontent-c15="">C-44,Shop No.2,<br _ngcontent-c15="">Street no. 15, Mabhu Vihar <br/>New Delhi,  110092 India</p>
                        </li>

                        <li _ngcontent-c15=""><i _ngcontent-c15="" class="fas fa-envelope"></i><a _ngcontent-c15="" href="mailto:support@styletreatstudio.com">support@styletreatstudio.com</a></li>
                        <li _ngcontent-c15="">
                            <i _ngcontent-c15="" class="fas fa-mobile-alt"></i>
                            <p _ngcontent-c15="">098736 77954</p>
                        </li>
                    </ul>
                    <ul _ngcontent-c15="" class="scialAccnts">
                        <p _ngcontent-c15="">Follow Us</p>
                        <li _ngcontent-c15="" class="fb"><a _ngcontent-c15="" href="#"><i _ngcontent-c15="" class="fab fa-facebook-f"></i></a></li>
                        <li _ngcontent-c15="" class="tw"><a _ngcontent-c15="" href="#"><i _ngcontent-c15="" class="fab fa-twitter"></i></a></li>
                        <li _ngcontent-c15="" class="inst"><a _ngcontent-c15="" href="#"><i _ngcontent-c15="" class="fab fa-instagram"></i></a></li>
                        <li _ngcontent-c15="" class="pint"><a _ngcontent-c15="" href="#"><i _ngcontent-c15="" class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
                <div _ngcontent-c15="" class="cntctFrmsCnt">
                    <div _ngcontent-c15="" class="cntctFrmsSbCnt">
                        <h3 _ngcontent-c15="">Book Now!</h3>
                        <form _ngcontent-c15="" method="post" action="#" novalidate="" class="ng-untouched ng-pristine ng-invalid contactform ">
                            <label>Booking Type</label>
                            <select class="bookingtype" name="book_type">
                                <option value="At The Studio">At the Studio</option>
                                <option value="Home Visits">Home Visits</option>
                                <option value="Home Pick ups">Home Pick ups</option>
                            </select>
                            <div class="row">
                                <div class="col-md-5">
                                    <label> Time</label>


                                    <select class="bookingtype" name="select_time" >
                                        <?php
                                        $timeslot = ["10:00 AM", "11:00 AM", "12:00 PM", "01:00 PM", "02:00 PM", "03:00 PM", "04:00 PM", "05:00 PM", "06:00 PM", "08:00 PM"];
                                        foreach ($timeslot as $key => $value) {
                                            ?>
                                            <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>

                                </div>


                                <div class="col-md-7">
                                    <label> Date</label>
                                    <input _ngcontent-c15="" formcontrolname="name" min="<?php echo date("Y-m-d"); ?>" name="select_date" placeholder="<?php echo date("Y-m-d"); ?>" type="date" class="ng-untouched ng-pristine ng-invalid" value="<?php echo date("Y-m-d"); ?>"><!---->

                                </div>
                            </div>

                            <div class="row" style="margin: 0px;">
                                <div class="form-group col-md-9" style="    margin-bottom: 0;    padding-left: 0;">

                                    <textarea _ngcontent-c15="" formcontrolname="query" name="select_table" placeholder="Select Services" class="ng-untouched ng-pristine ng-invalid" style="height: 60px;padding: 0 9px;white-space: normal;font-size: 13px;">{{selectServicesText}}</textarea>
                                </div>
                                <button type="button" class="btn btn-danger col-md-3" data-toggle="modal" data-target=".serviceModal" style="    height: 60px;background: #f97080;">Select</button>
                            </div>


                            <input _ngcontent-c15="" formcontrolname="name" name="name" placeholder="Enter your full name" type="text" class="ng-untouched ng-pristine ng-invalid"><!---->
                            <input _ngcontent-c15="" formcontrolname="email" name="email" placeholder="Enter your email" type="email" value="" class="ng-untouched ng-pristine ng-invalid"><!---->
                            <input _ngcontent-c15="" formcontrolname="contact_no" name="contact_no" placeholder="Enter your phone" type="text" value="" class="ng-untouched ng-pristine ng-invalid"><!---->
                            <textarea _ngcontent-c15="" formcontrolname="query" name="message" placeholder="Enter your query" class="ng-untouched ng-pristine ng-invalid"></textarea>
                            <button _ngcontent-c15="" class="sendBtn" type="submit" name="booking">Send</button>
                        </form>
                    </div>
                </div>
                <div _ngcontent-c15="" class="cntctAddress">
                    <h3 _ngcontent-c15="">Mayur Vihar II Branch</h3>
                    <p _ngcontent-c15=""> Reach us out for Bookings, queries, feedback and concerns -</p>
                    <ul _ngcontent-c15="" class="adrsCnt">

                        <li _ngcontent-c15="">
                            <i _ngcontent-c15="" class="fas fa-map-marker-alt"></i>
                            <p _ngcontent-c15="">Pocket B, 218, Mayur Vihar <br _ngcontent-c15="">New Delhi, 110091 India</p>
                        </li>
                        <li _ngcontent-c15=""><i _ngcontent-c15="" class="fas fa-envelope"></i><a _ngcontent-c15="" href="mailto:support@styletreatstudio.com">support@styletreatstudio.com</a></li>
                        <li _ngcontent-c15="">
                            <i _ngcontent-c15="" class="fas fa-mobile-alt"></i>
                            <p _ngcontent-c15="">098736 77954</p>
                        </li>
                    </ul>
                    <ul _ngcontent-c15="" class="scialAccnts">
                        <p _ngcontent-c15="">Follow Us</p>
                        <li _ngcontent-c15="" class="fb"><a _ngcontent-c15="" href="#"><i _ngcontent-c15="" class="fab fa-facebook-f"></i></a></li>
                        <li _ngcontent-c15="" class="tw"><a _ngcontent-c15="" href="#"><i _ngcontent-c15="" class="fab fa-twitter"></i></a></li>
                        <li _ngcontent-c15="" class="inst"><a _ngcontent-c15="" href="#"><i _ngcontent-c15="" class="fab fa-instagram"></i></a></li>
                        <li _ngcontent-c15="" class="pint"><a _ngcontent-c15="" href="#"><i _ngcontent-c15="" class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section _ngcontent-c15="" class="cntctFrmCntSec" style="    padding: 20px;">
        <div _ngcontent-c15="" class="">
            <div _ngcontent-c15="" class="">
                <div class="row">
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1750.895155662416!2d77.30241889323167!3d28.63604602902372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfb0ef8ed0cc1%3A0xb516b15b6e60fb8a!2sStyle%20Treat%20Studios!5e0!3m2!1sen!2sin!4v1569857352830!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14009.434517814725!2d77.306801!3d28.6190118!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xce43ae7cc83edc8c!2sStyle%20Treat%20Studios!5e0!3m2!1sen!2sin!4v1569857637922!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div class="modal fade serviceModal" id="serviceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Select Services</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="accordion" id="accordionService">
                        <div class="col-md-4" ng-repeat="service in selectService" style="text-align: left;">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                        {{service.title}}
                                </div>
                                <div id="serv{{service.id}}" class="" >
                                    <div class="card-body">
                                        <div class="form-group form-check" ng-repeat="srv in service.service">
                                            <input type="checkbox" class="form-check-input" ng-model="srv.checked"  ng-click="chooseServices(srv)" style=" height: 20px;;width: 20px;position: relative;">
                                            <label class="form-check-label" >{{srv.title}}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


</app-contact-us>
<!--end of contant section-->

<?php
$this->load->view('layout/footer');
?>