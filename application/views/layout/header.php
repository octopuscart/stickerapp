<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>

        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="SemiColonWeb" />
        <?php
        meta_tags();
        ?>
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">
        <link rel="icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>" type="image/x-icon">

        <link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/logof.png'; ?>"/>
        <link rel="apple-touch-icon image_src" href="<?php echo base_url() . 'assets/images/logof.png'; ?>"/>


        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lt IE 9]>
                <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->

        <link rel="icon" type="image/x-icon" href="assets/imgs/logo.ico" />
        <script  src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>

        <?php
        $styleSheetArray = array(
            "LocalStyle" => "assets/styles.cd16260f50b447b08840.css",
            "StyleMin" => "assets/assets/css/style.min.css",
            "Responsive Css" => "assets/assets/css/bootstrap.min.css",
            "slick Css" => "assets/assets/css/slick.css",
            "fonts Css" => "assets/assets/css/fonts.css",
            "focuspoint Css" => "assets/assets/css/focuspoint.css",
            "animate Css" => "assets/assets/css/animate.css",
            "nailthumb Css" => "assets/assets/css/jquery.nailthumb.1.1.css",
        );
        foreach ($styleSheetArray as $title => $stylesheet) {
            ?>                                                         <!-- ================== <?php echo $title ?> ================== -->
            <link href="<?php echo base_url(); ?><?php echo $stylesheet; ?>" rel="stylesheet" />
            <?php
        }
        ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/responsive.min.css">

        <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet"type="text/css" />
        <link  href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500|Roboto+Condensed:300,400,400i|Ubuntu+Condensed|Ubuntu:300,300i,400,400i" rel="stylesheet"/>
        <link href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  crossorigin="anonymous"/> 

        <!--sweet alert-->
        <script src="<?php echo base_url(); ?>assets/sweetalert2/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/sweetalert2/sweetalert2.min.css">
        <link href="https://unpkg.com/ionicons@4.2.2/dist/css/ionicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/style_custome.css" type="text/css" />

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/css/slick.css">
        <!--owl slider-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets/dist/assets/owl.theme.default.min.css">
        <script src="<?php echo base_url(); ?>assets/assets/dist/owl.carousel.min.js"></script>





        <!--angular js-->
        <script src="<?php echo base_url(); ?>assets/angular/angular.min.js"></script>
<!--        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-2246837719135984",
                    enable_page_level_ads: true
            });
                    </script>-->



    </head>  


    <style type="text/css">
        #loading {
            position: fixed;
            z-index: 50000;
            height: 500px;

            color: #fff;
            text-indent: -9999px;
            top: 0px;

        }
        .v2 #loading { display: none; }


        #loader {

            /*background:transparent url("") no-repeat center 25%;*/
            height:100%;
            display: white;
            /*opacity: 0.3;*/
            /*background: #000;*/
        }


    </style>



    <style>
        main .shell { padding: 25px 0 90px 43px; width: 917px;}
        #progress-bar{   
            width:100%;
            height:100%; 
            opacity: 1;
            background:#fff;  
            float: right;
            position: fixed;
        }
    </style>


    <body ng-app="App" class="stretched">
        <div ng-controller="ShopController" id="wrapper" class="clearfix">
            <script>
                var App = angular.module('App', []).config(function ($interpolateProvider, $httpProvider) {
                //$interpolateProvider.startSymbol('{$');
                //$interpolateProvider.endSymbol('$}');
                $httpProvider.defaults.headers.common = {};
                $httpProvider.defaults.headers.post = {};
                });
                var baseurl = "<?php echo base_url(); ?>index.php/";
                var imageurlg = "<?php echo imageserver; ?>";
                var globlecurrency = "<?php echo globle_currency; ?>";
                var avaiblecredits = 0;


            </script>
            <?php
            $arraymenu = [
                array(
                    "title" => "Home",
                    "icon" => "",
                    "link" => site_url("/"),
                ),
                array(
                    "title" => "Services",
                    "icon" => "",
                    "link" => site_url("services"),
                ),
                array(
                    "title" => "Academy",
                    "icon" => "",
                    "link" => site_url('academy'),
                ),
                array(
                    "title" => "Our Portfolio",
                    "icon" => "",
                    "link" => site_url("portfolio"),
                ),
                array(
                    "title" => "Know Our Story",
                    "icon" => "",
                    "link" => site_url("aboutus"),
                ),
                array(
                    "title" => "Contact",
                    "icon" => "",
                    "link" => site_url("contact-us"),
                ),
                array(
                    "title" => "STS League",
                    "icon" => "",
                    "link" => site_url("stsleague"),
                ),
            ];
            ?>

            <section _ngcontent-c0="" class="web_homePage" style="overflow: hidden">

                <app-pages _nghost-c1="" class="ng-star-inserted">
                    <div _ngcontent-c1="">
                        <app-header _ngcontent-c1="" _nghost-c2="">
                            <header  class="animated fadeInDown" id="navbar">

                                <div  class="container">
                                    <div  class="">
                                        <div  class="logo_cont hidden_mobile">
                                            <a  href="<?php echo site_url("/") ?>"><img  alt="" src="<?php echo base_url(); ?>assets/images/logo.png" style="    width: 330px;"></a>
                                        </div>
                                    </div>

                                    <ul _ngcontent-c12="" class="appLink headerdownloadlogo hideonmobile">
                                        <a  href="<?php echo site_url("contact-us") ?>" id="loginSignup" class="ng-star-inserted btn btn-danger gradiantback booking_button" style="color:white"><i class="fa fa-edit"></i> Book Now </a>


                                        <li _ngcontent-c12="">
                                            <a _ngcontent-c12="" href="https://play.google.com/store/apps/details?id=com.srvapps.styletreat" target="_blank"><img _ngcontent-c12="" alt="" src="<?php echo base_url(); ?>assets/assets/imgs/google-play.png"></a>
                                        </li>

                                        <li _ngcontent-c12="">
                                            <a _ngcontent-c12="" href="#" target="_blank"><img _ngcontent-c12="" alt="" src="<?php echo base_url(); ?>assets/assets/imgs/apple-icon.png"></a>
                                        </li>
                                    </ul>


                                    <div  class="logo_cont mobilelog">
                                        <a  href="<?php echo site_url("/") ?>"><img  alt="" src="<?php echo base_url(); ?>assets/images/logo.png" style="width: 120px;"></a>
                                    </div>
                                    <div  class="right mobilemenu">



                                        <div  class="hmbrgrMainMenu right ">



                                            <div  class="hmbrgrMenu">
                                                <div  class="arwCnt " ><span  class="arw1"></span><span  class="arw2"></span><span  class="arw3"></span></div>

                                            </div>

                                            <div  class="hmbrgrMenuData " style="display: none;">
                                                <!---->
                                                <div  class="hmbrgrMn">
                                                    <ul >
                                                        <?php foreach ($arraymenu as $key => $value) { ?>
                                                            <li ><a href="<?php echo $value['link']; ?>"><?php echo $value['title']; ?></a></li>
                                                        <?php } ?>
                                                        <!---->
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <nav  class="mainMenu hidden_mobile">
                                            <ul >
                                                <li  class="loggedIn logIn" id="mainMenuLi">
                                                    <!---->
                                                    <!---->
                                                    <div  class="logOutBtnCnt"><span  class="logOutBtn">Logout</span></div>
                                                </li>
                                            </ul>
                                        </nav>



                                    </div>
                                </div>

                                <!---->
                            </header>


                            <div  class="registerPpupCnt" style="display: none">
                                <div  class="registerMnCnt animated">
                                    <div  class="registerSbCnt" style=" height: 100% !important;     padding: 12px;">
                                        <div  class="loginBnr"><span  class="registerClsBtn"><i  class="fas fa-times"></i></span></div>

                                    </div>
                                </div>
                            </div>
                            <nav class="navbar navbar-expand-lg navbar-light bg-light">

                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        
                                        <?php foreach ($arraymenu as $key => $value) { ?>
                                        <li class="nav-item"  ><a class="nav-link" href="<?php echo $value['link']; ?>"><?php echo $value['title']; ?> <span class="sr-only"></span></a></li>
                                        <?php } ?>

                                    </ul>
                                </div>
                            </nav>
                        </app-header>







