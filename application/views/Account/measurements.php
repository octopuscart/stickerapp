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
            <div class="">
                <div class="row"> 

                    <?php
                    $this->load->view('Account/sidebar');
                    ?>


                    <div class="col-md-9">
                        <?php
                        foreach ($measurements as $key => $value) {
                            ?>
                            <div class="measurementbox  "> 
                                <div class="pricing">

                                    <article class="row" style="padding: 10px">
                                        <div class="col-md-12">
                                            <div class="col-md-12">
                                                <h6 class="pull-left">
                                                    Profile. #<?php echo $value['profile']; ?> <small> <?php echo $value['datetime']; ?></small>
                                                </h6>
                                                <a role="button" class="btn btn-xs btn-default  btn-xs pull-right" data-toggle="collapse" data-parent="#accordion" href="#collapsemeasurements<?php echo $value['id']; ?>" aria-expanded="true" aria-controls="collapseOne" style="    margin: 5px 0px;
                                                   padding: 4px;">
                                                    View Measurement
                                                </a>
                                            </div>
                                            <div id="collapsemeasurements<?php echo $value['id']; ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="panel-body" style="padding:10px 0px;">
                                                            <?php
                                                            echo "<ul class='list-group'>";
                                                            $measurements_items = $value['measurements'];
                                                            foreach ($measurements_items as $keym => $valuem) {

                                                                echo "<li class='list-group-item'>" . $keym . " <span class='badge'>" . $valuem . "</span></li>";
                                                            }
                                                            echo "</ul>";
                                                            ?>                             
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>

                                </div>
                            </div>
                            <?php
                        }
                        ?>
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