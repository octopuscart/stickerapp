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
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-2246837719135984",
                    enable_page_level_ads: true
            });</script>



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

            <section _ngcontent-c0="" class="web_homePage" style="overflow: hidden">

                <app-pages _nghost-c1="" class="ng-star-inserted">
                    <div _ngcontent-c1="">
                        <app-header _ngcontent-c1="" _nghost-c2="">
                            <header  class="animated fadeInDown" id="navbar">

                                <div  class="container">


                                    <ul _ngcontent-c12="" class="appLink headerdownloadlogo hideonmobile">
                                        <li _ngcontent-c12="">
                                            <a _ngcontent-c12="" href="#" target="_blank"><img _ngcontent-c12="" alt="" src="<?php echo base_url(); ?>assets/assets/imgs/google-play.png"></a>
                                        </li>

                                        <li _ngcontent-c12="">
                                            <a _ngcontent-c12="" href="#" target="_blank"><img _ngcontent-c12="" alt="" src="<?php echo base_url(); ?>assets/assets/imgs/apple-icon.png"></a>
                                        </li>
                                    </ul>

                                    <div  class="">
                                        <div  class="logo_cont hidden_mobile">
                                            <a  href="<?php echo site_url("/") ?>"><img  alt="" src="<?php echo base_url(); ?>assets/images/logo.png" style="width: 211px;"></a>
                                        </div>
                                    </div>
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
                                                        <li ><a href="<?php echo site_url("/") ?>"><i  class="fas fa-home"></i> Home </a></li>
                                                        <li ><a href="<?php echo site_url("aboutus") ?>"><i  class="fab fa-readme"></i> About Us </a></li>
                                                        <li ><a href="<?php echo site_url("contact-us") ?>"><i  class="fas fa-mobile-alt"></i> Contact Us </a></li>
                                                        <li ><a href="<?php echo site_url("faqs") ?>"><i  class="fas fa-question"></i> FAQ's </a></li>
                                                        <!---->
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <!---->
                                        <nav  class="mainMenu hidden_mobile">
                                            <ul >
                                                <li  class="loggedIn logIn" id="mainMenuLi">
                                                    <!----><a  href="<?php echo site_url("contact-us") ?>" id="loginSignup" class="ng-star-inserted btn btn-danger gradiantback booking_button" style="color:white"><i class="fa fa-edit"></i> Book Now </a>
                                                    <!---->
                                                    <div  class="logOutBtnCnt"><span  class="logOutBtn">Logout</span></div>
                                                </li>
                                            </ul>
                                        </nav>



                                    </div>
                                </div>
                                <!--                                <div  class="cart mobileicon showinmobile hidden_mobile">
                                                                    <a  href="https://goo.gl/UYD13P">
                                                                        <svg  xmlns:xlink="http://www.w3.org/1999/xlink" height="32" style=" fill:#fff;" version="1.1" viewBox="0 0 32 32" width="32" xmlns="http://www.w3.org/2000/svg">
                                                                        <g  id="surface1">
                                                                        <path  d="M 15 4 L 15 20.5625 L 9.71875 15.28125 L 8.28125 16.71875 L 15.28125 23.71875 L 16 24.40625 L 16.71875 23.71875 L 23.71875 16.71875 L 22.28125 15.28125 L 17 20.5625 L 17 4 Z M 7 26 L 7 28 L 25 28 L 25 26 Z "></path>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                    <a  href="https://api.whatsapp.com/send?phone=+919797639797&amp;text=Hi, I contacted you Through your website.">
                                                                        <svg  height="32" style=" fill:#fff;" viewBox="0 0 32 32" width="32" x="0px" xmlns="http://www.w3.org/2000/svg" y="0px">
                                                                        <g  id="surface1">
                                                                        <path  d="M 24.503906 7.503906 C 22.246094 5.246094 19.246094 4 16.050781 4 C 9.464844 4 4.101563 9.359375 4.101563 15.945313 C 4.097656 18.050781 4.648438 20.105469 5.695313 21.917969 L 4 28.109375 L 10.335938 26.445313 C 12.078125 27.398438 14.046875 27.898438 16.046875 27.902344 L 16.050781 27.902344 C 22.636719 27.902344 27.996094 22.542969 28 15.953125 C 28 12.761719 26.757813 9.761719 24.503906 7.503906 Z M 16.050781 25.882813 L 16.046875 25.882813 C 14.265625 25.882813 12.515625 25.402344 10.992188 24.5 L 10.628906 24.285156 L 6.867188 25.269531 L 7.871094 21.605469 L 7.636719 21.230469 C 6.640625 19.648438 6.117188 17.820313 6.117188 15.945313 C 6.117188 10.472656 10.574219 6.019531 16.054688 6.019531 C 18.707031 6.019531 21.199219 7.054688 23.074219 8.929688 C 24.949219 10.808594 25.980469 13.300781 25.980469 15.953125 C 25.980469 21.429688 21.523438 25.882813 16.050781 25.882813 Z M 21.496094 18.445313 C 21.199219 18.296875 19.730469 17.574219 19.457031 17.476563 C 19.183594 17.375 18.984375 17.328125 18.785156 17.625 C 18.585938 17.925781 18.015625 18.597656 17.839844 18.796875 C 17.667969 18.992188 17.492188 19.019531 17.195313 18.871094 C 16.894531 18.722656 15.933594 18.40625 14.792969 17.386719 C 13.90625 16.597656 13.304688 15.617188 13.132813 15.320313 C 12.957031 15.019531 13.113281 14.859375 13.261719 14.710938 C 13.398438 14.578125 13.5625 14.363281 13.710938 14.1875 C 13.859375 14.015625 13.910156 13.890625 14.011719 13.691406 C 14.109375 13.492188 14.058594 13.316406 13.984375 13.167969 C 13.910156 13.019531 13.3125 11.546875 13.0625 10.949219 C 12.820313 10.367188 12.574219 10.449219 12.390625 10.4375 C 12.21875 10.429688 12.019531 10.429688 11.820313 10.429688 C 11.621094 10.429688 11.296875 10.503906 11.023438 10.804688 C 10.75 11.101563 9.980469 11.824219 9.980469 13.292969 C 9.980469 14.761719 11.050781 16.183594 11.199219 16.382813 C 11.347656 16.578125 13.304688 19.59375 16.300781 20.886719 C 17.011719 21.195313 17.566406 21.378906 18 21.515625 C 18.714844 21.742188 19.367188 21.710938 19.882813 21.636719 C 20.457031 21.550781 21.648438 20.914063 21.898438 20.214844 C 22.144531 19.519531 22.144531 18.921875 22.070313 18.796875 C 21.996094 18.671875 21.796875 18.597656 21.496094 18.445313 Z " style=" fill-rule:evenodd;"></path>
                                                                        </g>
                                                                        </svg>
                                                                    </a>
                                                                    <a  href="">
                                                                        <svg  style=" fill:#fff;" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                                        <path  d="M 19 0 L 19 2 C 25.065 2 30 6.935 30 13 L 32 13 C 32 5.832 26.168 0 19 0 z M 8.6503906 3.0058594 C 8.1255067 3.0058594 7.6010996 3.1771036 7.1738281 3.5214844 L 7.125 3.5605469 L 3.9804688 6.8046875 L 4.046875 6.7421875 C 3.0062406 7.6384134 2.7194504 9.0541178 3.1660156 10.244141 C 4.0086833 12.674074 6.1568506 17.372953 10.394531 21.605469 C 14.641274 25.857394 19.389499 27.91343 21.738281 28.830078 L 21.761719 28.837891 L 21.785156 28.845703 C 22.999558 29.252758 24.311449 28.962441 25.251953 28.158203 L 25.28125 28.132812 L 28.40625 25.007812 C 29.235762 24.178301 29.235762 22.724043 28.40625 21.894531 L 24.308594 17.792969 C 23.476725 16.9611 22.023275 16.9611 21.191406 17.792969 L 19.207031 19.777344 C 18.496637 19.438281 16.74879 18.558644 15.087891 16.974609 C 13.448585 15.411343 12.61169 13.604382 12.308594 12.90625 L 14.308594 10.90625 C 15.186189 10.028655 15.236115 8.5219515 14.224609 7.7167969 L 14.316406 7.8007812 L 10.173828 3.5605469 L 10.126953 3.5214844 C 9.6996708 3.1771284 9.1752746 3.0058594 8.6503906 3.0058594 z M 19 4 L 19 6 C 22.859 6 26 9.14 26 13 L 28 13 C 28 8.038 23.963 4 19 4 z M 8.6523438 5 C 8.7236064 4.9998777 8.7939074 5.026734 8.8632812 5.0800781 L 12.929688 9.2441406 L 12.978516 9.2832031 C 12.967016 9.2740531 13.016941 9.3697821 12.894531 9.4921875 L 9.9375 12.449219 L 10.166016 13.052734 C 10.166016 13.052734 11.294663 16.121404 13.707031 18.421875 C 16.079259 20.684317 19.003906 21.919922 19.003906 21.919922 L 19.626953 22.185547 L 22.605469 19.207031 C 22.7736 19.0389 22.7264 19.0389 22.894531 19.207031 L 26.992188 23.308594 C 27.162675 23.479082 27.162676 23.423262 26.992188 23.59375 L 23.945312 26.640625 C 23.481361 27.034971 23.00205 27.13833 22.425781 26.947266 C 20.163651 26.062686 15.739269 24.126878 11.808594 20.191406 C 7.8506547 16.238292 5.7997308 11.746595 5.046875 9.5703125 L 5.0429688 9.5585938 L 5.0371094 9.5449219 C 4.8856915 9.1444833 4.9963719 8.5637134 5.3515625 8.2578125 L 5.3847656 8.2285156 L 8.4394531 5.0800781 C 8.508857 5.0272234 8.5810811 5.0001223 8.6523438 5 z M 19 8 L 19 10 C 20.654 10 22 11.346 22 13 L 24 13 C 24 10.243 21.757 8 19 8 z"></path>
                                                                        </svg>
                                                                    </a>
                                                                    <a  class="cardicon">
                                                                        <svg  xmlns:xlink="http://www.w3.org/1999/xlink" style=" fill:#fff;" version="1.1" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                                        <g  id="surface1">
                                                                        <path  d="M 16 3.09375 L 7.09375 12 L 2 12 L 2 18 L 3.25 18 L 6.03125 27.28125 L 6.25 28 L 25.75 28 L 25.96875 27.28125 L 28.75 18 L 30 18 L 30 12 L 24.90625 12 Z M 16 5.9375 L 22.0625 12 L 9.9375 12 Z M 4 14 L 28 14 L 28 16 L 27.25 16 L 27.03125 16.71875 L 24.25 26 L 7.75 26 L 4.96875 16.71875 L 4.75 16 L 4 16 Z M 11 17 L 11 24 L 13 24 L 13 17 Z M 15 17 L 15 24 L 17 24 L 17 17 Z M 19 17 L 19 24 L 21 24 L 21 17 Z " style=" "></path>
                                                                        </g>
                                                                        </svg><sup >0</sup></a>
                                                                </div>-->
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
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo site_url("aboutus") ?>">Know Our Story</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Academy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">E-Shop</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo site_url("contact-us") ?>">Contact</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo site_url("faqs") ?>">FAQ's</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Our Portfolio</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </app-header>







