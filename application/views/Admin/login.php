<?php
$this->load->view('layout/headerAdmin');
?>
<!-- Inner Page Banner Area Start Here -->

<style>
    .bith_date_select {
        width: 30%;
        float: left;
        margin-left: 5px;
        padding: 0px 5px;
    }
    .bith_date_select_year {
        width: 30%;
        float: left;
        margin-left: 5px;
        padding: 0px 5px;
    }
</style>

<section class="sub-bnr" data-stellar-background-ratio="0.5" style="margin-bottom: 10px;">
    <div class="position-center-center">
        <div class="container">
            <h4>Login/Registration</h4>

        </div>
    </div>
</section>


<!-- Inner Page Banner Area End Here -->
<!-- Login Registration Page Area Start Here -->
<div class="login-registration-page-area" style="padding: 20px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                if ($next_link === 'checkoutInit') {
                    ?>
                    <h5  class="text-center">
                        <a href="<?php echo site_url("CartGuest/checkoutInit"); ?>" class="btn  btn btn-danger">
                            <i class=" fa fa-user"></i> Checkout As Guest <i class="fa fa-arrow-right"></i>
                        </a>
                    </h5>
                    <h3  class="text-center">Or</h3>
                    <?php
                }
                ?>
               
            </div>
            <?php
            if ($msg) {
                ?>
                <div class="col-md-12">
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i> </span></button>
                        <i class="fa fa-exclamation-triangle "></i> <?php echo $msg; ?>
                    </div>
                </div>
                <?php
            }
            ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="padding-bottom: 15px;">
                <div class="login-registration-field">
                    <h2 class="cart-area-title">Login</h2>
                    <form method="post" action="#">
                        <label>Email address *</label>
                        <input type="email"  class="form-control"name="email" placeholder="Email " required=""/>
                        <label>Password *</label>
                        <input type="password"  class="form-control"name="password" placeholder="Password *" required=""/>
                        <br/>
                        <button class="btn btn-default" name="signIn" type="submit" value="signIn">Login</button>
                        <!--<span><input type="checkbox" name="remember"/>Remember Me</span>-->
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
   
        </div>
    </div>
</div>
<!-- Login Registration Page Area End Here -->

<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footerAdmin');
?>