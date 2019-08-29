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
    .table th, .table td {
    padding: 0px;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
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
                        <?php
                        foreach ($orderslist as $key => $value) {
                            ?>
                            <div class="row  "> 
                                <div class="pricing" style="width: 100%">

                                    <article class="order_box" style="padding: 10px">

                                        <table class="table">
                                            <tr>
                                                <td colspan="2">
                                                    <h6>
                                                        Order No. #<?php echo $value->id; ?>
                                                        <span style="float: right;margin: 0px">
                                                            <i class="fa fa-calendar"></i><?php echo $value->select_date; ?>  <?php echo $value->select_time; ?>
                                                        </span>
                                                    </h6>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width: 100px;">
                                                    Guest(s)
                                                </td>
                                                <td>
                                                    <?php echo $value->people; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Table No.
                                                </td>
                                                <td>
                                                    <?php echo $value->select_table; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Status
                                                </td>
                                                <td>
                                                    <?php echo $value->booking_type; ?>
                                                </td>
                                            </tr>
                                        </table>




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