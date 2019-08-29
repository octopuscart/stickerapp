<?php
$this->load->view('layout/header');
?>

<router-outlet _ngcontent-c1=""></router-outlet>
<div _nghost-c6="" class="ng-star-inserted slick-slider-header" style="background: white;">
    <div class="bigSlider owl-carousel  carousel center r-header r-white-bg slick-initialized r slick-dotted">
        <div class="owl-items">   <img _ngcontent-c7="" alt="" class="bannerResize" width="100%" src="https://cdn.yesmadam.com/images/live/app/banner/1564992111817.jpg"></div>
        <div class="owl-items">    <img _ngcontent-c7="" alt="" class="bannerResize" width="100%" src="https://cdn.yesmadam.com/images/live/app/banner/1564991942438.jpg"></div>
        <div class="owl-items">   <img _ngcontent-c7="" alt="" class="bannerResize" width="100%" src="https://cdn.yesmadam.com/images/live/app/banner/1564992177143.jpg"></div>
        <div class="owl-items">   <img _ngcontent-c7="" alt="" class="bannerResize" width="100%" src="https://cdn.yesmadam.com/images/live/app/banner/1565698237366.jpg"></div>
        <div class="owl-items">   <img _ngcontent-c7="" alt="" class="bannerResize" width="100%" src="https://cdn.yesmadam.com/images/live/app/banner/1565343527584.jpg"></div>
        <div class="owl-items">   <img _ngcontent-c7="" alt="" class="bannerResize" width="100%" src="https://cdn.yesmadam.com/images/live/app/banner/1565185623454.jpg"></div>
        <div class="owl-items">   <img _ngcontent-c7="" alt="" class="bannerResize" width="100%" src="https://cdn.yesmadam.com/images/live/app/banner/1565250046591.jpg"></div>
        <div class="owl-items">    <img _ngcontent-c7="" alt="" class="bannerResize" width="100%" src="https://cdn.yesmadam.com/images/live/app/banner/1564992111817.jpg"></div>
        <div class="owl-items">   <img _ngcontent-c7="" alt="" class="bannerResize" width="100%" src="https://cdn.yesmadam.com/images/live/app/banner/1564991942438.jpg"></div>

    </div>



    <section _ngcontent-c9="" class="whyYMDMSec">
        <div _ngcontent-c9="" class="container">
            <div _ngcontent-c9="" class="secHdngCnt">
                <h1 _ngcontent-c9="">Why Style Treat Studios</h1></div>
            <div _ngcontent-c9="" class="wyYMDMCnt">
                <div _ngcontent-c9="" class="wyYMDMOptn">
                    <div _ngcontent-c9="" class="wyYMDMOptnImg"><img _ngcontent-c9="" alt="" src="<?php echo base_url(); ?>assets/assets/imgs/wym-3.jpg"></div>
                    <div _ngcontent-c9="" class="wyYMDMOptnTxt">
                        <h2 _ngcontent-c9="" class="wyYMDMHdng">Genuine &amp; Sealed Products</h2>
                        <p _ngcontent-c9=""> All our beautician use only Branded and genuine products in sealed &amp; Single time use Sachet packets.We provide 100% transparency in our Products. </p>
                    </div>
                </div>
                <div _ngcontent-c9="" class="wyYMDMOptn rightImg">
                    <div _ngcontent-c9="" class="wyYMDMOptnImg"><img _ngcontent-c9="" alt="" src="<?php echo base_url(); ?>assets/assets/imgs/wym-2.jpg"></div>
                    <div _ngcontent-c9="" class="wyYMDMOptnTxt">
                        <h2 _ngcontent-c9="" class="wyYMDMHdng">Trained and Verified Beauticians</h2>
                        <p _ngcontent-c9=""> We have Experienced &amp; Premium beauty professionals in the list of Yes MADAM.All beautician come on-board after pass our standard and cosmetics test. </p>
                    </div>
                </div>
                <div _ngcontent-c9="" class="wyYMDMOptn rightImg">
                    <div _ngcontent-c9="" class="wyYMDMOptnImg"><img _ngcontent-c9="" alt="" src="<?php echo base_url(); ?>assets/assets/imgs/wym-1.jpg"></div>
                    <div _ngcontent-c9="" class="wyYMDMOptnTxt">
                        <h2 _ngcontent-c9="" class="wyYMDMHdng">Pocket Friendly and Satisfactory in Pricing</h2>
                        <p _ngcontent-c9=""> Save 40-50% of your money compared to other local Salon.You will also get assured satisfaction with our services because your hard-earned money deserves 100% satisfaction. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section  class="hwItWrksSec">
        <div  class="hwItWrksSbSec">
            <div  class="container">

            </div>
        </div>
    </section>

    <!---->
    <!---->
    <app-customer-reviews _ngcontent-c6="" _nghost-c11="">
        <section _ngcontent-c11="" class="reviewsSec">
            <div _ngcontent-c11="" class="container">
                <div _ngcontent-c11="" class="secHdngCnt">
                    <h1 _ngcontent-c11="">Hear It From The Customers</h1></div>
                <!---->
                <div class="slick-list" style="padding: 0px;">
                    <div class="owl-carousel owl-theme owl-loaded" id="reviewSlider" >

                        <div class="owl-stage-outer">
                            <div class="owl-stage max_width" style="">

                                <?php
                                $reviewItem = [
                                    array(
                                        "img" => "",
                                        "person" => "REGAR K R RAJESTHANI",
                                        "review" => "Very nice and smart oner and staff very best beauty work style treat studio remembering time in my life"
                                    ),
                                    array(
                                        "img" => "",
                                        "person" => "Bhawna Kanojiya",
                                        "review" => "I love your service's good job keep it up😊😊"
                                    ),
                                    array(
                                        "img" => "",
                                        "person" => "Jyoti Pari",
                                        "review" => "I loved the work and enjoyed being there!"
                                    ),
                                    array(
                                        "img" => "",
                                        "person" => "Sandeep Gupta",
                                        "review" => "Nice work girl.supporting staff.keep up good work"
                                    ),
                                ];
                                foreach ($reviewItem as $key => $value) {
                                    ?>

                                    <div _ngcontent-c11="" class="cstmrRvwSld owl-item" >
                                        <div _ngcontent-c11="" class="cstmrRvwBx">
                                            <div _ngcontent-c11="" class="cstmrDtl">
                                                <div _ngcontent-c11="" class="cstmrImg"><img _ngcontent-c11="" alt="" style="border-radius: 50%;    height: inherit;" src="<?php echo base_url(); ?>assets/images/logo.png"></div>
                                                <div _ngcontent-c11="" class="cstmrNmDtl">
                                                    <h3 _ngcontent-c11="" title="Sakshi Malviya"><?php echo $value['person'];?></h3><span _ngcontent-c11="" class="reviewed">Reviewed Style Treat Studios</span></div>
                                            </div>
                                            <div _ngcontent-c11="" class="rvwTxt">
                                                <p _ngcontent-c11="" style="    height: 88%;
                                                    overflow: hidden !important;">
                                                       <?php echo $value['review'];?>
                                                </p>
                                            </div>
                                            <div _ngcontent-c11="" class="cstmrBtcanRt">
                                                <div _ngcontent-c11="" class="fbRvwCnt">
                                                    <div _ngcontent-c11="" class="fbCnt"> Reviewed on: <i _ngcontent-c11="" class="fab fa-google-plus-g"></i></div>
                                                </div>
<!--                                                <div _ngcontent-c11="" class="btcianCnt"><span _ngcontent-c11="" class="prfHired">Professional Hired</span>
                                                    <div _ngcontent-c11="" class="btcianNmCnt">
                                                        <div _ngcontent-c11="" class="btcianImg"><img _ngcontent-c11="" alt="" style="    background-color: #fff" src="https://cdn.yesmadam.com/images/5_1.png"></div>
                                                        <div _ngcontent-c11="" class="btcianNm"><span _ngcontent-c11="" class="nm">Sangya</span><span _ngcontent-c11="" class="rating"><i _ngcontent-c11="" class="fas fa-star"></i><i _ngcontent-c11="" class="fas fa-star"></i><i _ngcontent-c11="" class="fas fa-star"></i><i _ngcontent-c11="" class="fas fa-star"></i><i _ngcontent-c11="" class="fas fa-star"></i></span></div>
                                                    </div>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </section>
    </app-customer-reviews>
    <app-welcome-rough-content _ngcontent-c6="" _nghost-c12="">
        <!---->
        <section _ngcontent-c12="" class="homeVideoSec ng-star-inserted">
            <div _ngcontent-c12="" class="container">
                <div _ngcontent-c12="" class="vdoBnr" style="background-image: url('assets/imgs/video-bg.jpg')!important; "></div>
                <div _ngcontent-c12="" class="videoCont" id="">
                    <!---->
                </div>
            </div>
        </section>
        <section _ngcontent-c12="" class="dwnlodAppSec">
            <div _ngcontent-c12="" class="container">
                <div _ngcontent-c12="" class="dwnlodAppCnt">
                    <div _ngcontent-c12="" class="appScrn left"></div>
                    <div _ngcontent-c12="" class="appDwnldBtn right">
                        <h3 _ngcontent-c12="">Download Our App</h3>
                        <p _ngcontent-c12="" class="sndLnkTxt">Click here to download our app.</p>

                        <ul _ngcontent-c12="" class="appLink">
                            <li _ngcontent-c12="">
                                <a _ngcontent-c12="" href="#" target="_blank"><img _ngcontent-c12="" alt="" src="<?php echo base_url(); ?>assets/assets/imgs/google-play.png"></a>
                            </li>

                            <li _ngcontent-c12="">
                                <a _ngcontent-c12="" href="#" target="_blank"><img _ngcontent-c12="" alt="" src="<?php echo base_url(); ?>assets/assets/imgs/apple-icon.png"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </app-welcome-rough-content>

    <!---->
    <section _ngcontent-c6="" class="ourFeatureSec ng-star-inserted">
        <div _ngcontent-c6="" class="container">
            <div _ngcontent-c6="" class="rcmddHdng">
                <h2 _ngcontent-c6="" class="left">Our Best Features</h2></div>
            <div _ngcontent-c6="" class="ourFtrCnt">
                <div _ngcontent-c6="" class="ourFtrOpt">
                    <h2 _ngcontent-c6="">USER-FRIENDLY INTERFACE</h2>
                    <p _ngcontent-c6=""> The Chic &amp; attractive landing page is designed to capture the hearts of the existing Customer's, and lure potential Customer's to convert them into regular Customer's. </p>
                </div>
                <div _ngcontent-c6="" class="ourFtrOpt">
                    <h2 _ngcontent-c6="">APPOINTMENTS</h2>
                    <p _ngcontent-c6=""> The Style Treat Studios Mobile app allows customers to easily book,Manage, and Track appointments with just a few taps and touches. Apart from this Our Customer's receive notifications for Booking and Assigned Beautician via SMS when appointment are scheduled </p>
                </div>
                <div _ngcontent-c6="" class="ourFtrOpt">
                    <h2 _ngcontent-c6="">100% TRANSPARENCY IN PRODUCTS</h2>
                    <p _ngcontent-c6=""> We have only Genuine and Branded Products for our Customer's.Beautician apply sealed and unused products in front of Customer's. </p>
                </div>
            </div>
        </div>
    </section>
    <app-media-converage _ngcontent-c6="" _nghost-c13="">
        <section _ngcontent-c13="" class="mediaCvrgSec hidden_mobile">
            <div _ngcontent-c13="" class="container">
                <div _ngcontent-c13="" class="secHdngCnt">
                    <h1 _ngcontent-c13="">Our Partners</h1></div>
                <div _ngcontent-c13="" class="mdaImgs">
                    <ul _ngcontent-c13="">
                        <li _ngcontent-c13="">
                            <a _ngcontent-c13="" href="javascript:;"><img _ngcontent-c13="" alt="" src="<?php echo base_url(); ?>assets/assets/imgs/all-about-women.png"></a>
                        </li>
                        <li _ngcontent-c13="">
                            <a _ngcontent-c13="" href="javascript:;"><img _ngcontent-c13="" alt="" src="<?php echo base_url(); ?>assets/assets/imgs/ANI.png"></a>
                        </li>
                        <li _ngcontent-c13="">
                            <a _ngcontent-c13="" href="javascript:;"><img _ngcontent-c13="" alt="" src="<?php echo base_url(); ?>assets/assets/imgs/business-standerd.png"></a>
                        </li>

                    </ul>
                </div>
            </div>
        </section>
    </app-media-converage>
    <!---->
</div>
<app-loader _ngcontent-c1="" _nghost-c3="">
    <div _ngcontent-c3="" class="hidden">
        <div _ngcontent-c3="" class="loader-overlay">
            <!---->
        </div>
    </div>
</app-loader>




<?php
$this->load->view('layout/footer');
?>