<?php
$this->load->view('layout/header');
?>


<style>
    .order_box{
        padding: 10px;
        padding-bottom: 11px!important;
        height: 110px;
    }
    .order_box li{
        line-height: 19px!important;
        padding: 7px!important;
        border: none!important;
    }

    .order_box li i{
        float: left!important;
        line-height: 19px!important;
        margin-right: 13px!important;
    }

    .blog-posts article {
        margin-bottom: 10px;
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
    <section class="new-main blog-posts ">
        <div class="container"> 

            <!-- News Post -->
            <div class="news-post">
                <div class="row"> 

                    <?php
                    $this->load->view('Account/sidebar');
                    ?>


                    <div class="col-md-9">
                        <h2>Newsletters Preferences</h2>
                        <p>
                            Would you like to subscribe to our newsletter?  
                        </p>
                        <div class="btn-group" role="group" aria-label="...">
                            <button type="button" class="btn btn-default">Yes</button>
                            <button type="button" class="btn btn-default" disabled="">No</button>
                        </div>
                    </div>



                </div>
                </section>
            </div>
            <!-- End Content --> 



            <?php
            $this->load->view('layout/footer');
            ?>

            <script>
                $(function () {
                    $(".woocommerce-MyAccount-navigation-link--dashboard").removeClass("active");
                    $(".orderlist_page").addClass("active");
                })
            </script>