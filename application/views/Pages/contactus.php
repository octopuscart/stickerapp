<?php
$this->load->view('layout/header');
?>
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
                <div _ngcontent-c15="" class="cntctFrmsCnt">
                    <div _ngcontent-c15="" class="cntctFrmsSbCnt">
                        <h3 _ngcontent-c15="">Booking</h3>
                        <form _ngcontent-c15="" method="post" action="#" novalidate="" class="ng-untouched ng-pristine ng-invalid contactform ">
                            <label>Booking Type</label>
                            <select class="bookingtype" name="book_type">
                                <option value="Visit Us At The Studio">Visit Us At The Studio</option>
                                <option value="For Home Visits">For Home Visits</option>
                            </select>
                            <div class="row">
                                <div class="col-md-5">
                                    <label> Time</label>
                                    <input _ngcontent-c15="" formcontrolname="name" name="select_time" placeholder="<?php echo date("H:i:s a"); ?>" value="<?php echo date("H:i:s a"); ?>" type="time" class="ng-untouched ng-pristine ng-invalid"><!---->

                                </div>
                                <div class="col-md-7">
                                    <label> Date</label>
                                    <input _ngcontent-c15="" formcontrolname="name" name="select_date" placeholder="<?php echo date("Y-m-d"); ?>" type="date" class="ng-untouched ng-pristine ng-invalid"><!---->

                                </div>
                            </div>
                            <input _ngcontent-c15="" formcontrolname="name" name="name" placeholder="Enter your full name" type="text" class="ng-untouched ng-pristine ng-invalid"><!---->
                            <input _ngcontent-c15="" formcontrolname="email" name="email" placeholder="Enter your email" type="email" value="" class="ng-untouched ng-pristine ng-invalid"><!---->
                            <input _ngcontent-c15="" formcontrolname="contact_no" name="phone" placeholder="Enter your phone" type="text" value="" class="ng-untouched ng-pristine ng-invalid"><!---->
                            <textarea _ngcontent-c15="" formcontrolname="query" name="message" placeholder="Enter your query" class="ng-untouched ng-pristine ng-invalid"></textarea>
                            <button _ngcontent-c15="" class="sendBtn" type="submit" name="booking">Send</button>
                        </form>
                    </div>
                </div>
                <div _ngcontent-c15="" class="cntctAddress">
                    <h3 _ngcontent-c15="">Drop in our Office</h3>
                    <p _ngcontent-c15=""> We would love to hear from you. Drop us a Line or Call with your queries, feedback or concerns. </p>
                    <ul _ngcontent-c15="" class="adrsCnt">
                        <li _ngcontent-c15="">
                            <i _ngcontent-c15="" class="fas fa-map-marker-alt"></i>
                            <p _ngcontent-c15="">C-44,Shop No.2,<br _ngcontent-c15="">Street no. 15, Mabhu Vihar <br/>New Delhi,  110092 India</p>
                        </li>
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



    <section _ngcontent-c15="" class="cntctFrmCntSec">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- STS Display ad 2 -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-2246837719135984"
             data-ad-slot="7359738829"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </section>
</app-contact-us>
<!--end of contant section-->

<?php
$this->load->view('layout/footer');
?>