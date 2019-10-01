<?php
$this->load->view('layout/headerAdmin');
?>


<section class="sub-bnr" data-stellar-background-ratio="0.5" style="margin-bottom: 10px;">
    <div class="position-center-center">
        <div class="container">
            <h4>Booking Reports</h4>

        </div>
    </div>
</section>


<!-- Inner Page Banner Area End Here -->
<!-- Login Registration Page Area Start Here -->
<div class="login-registration-page-area" style="padding: 20px 0;">
    <div class="container">
        <div class="row">
            <table id="tableDataOrder" class="table table-bordered  tableDataOrder">
                <thead>
                    <tr>
                        <th style="width: 70px">S. No.</th>
                        <th style="width:250px">Booking Information</th>
                        <th style="width:300px">Customer Information</th>

                        <th>Status</th>
                        <th style="width:100px"></th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (count($bookinglist)) {
                        $count = 1;
                        foreach ($bookinglist as $key => $value) {
                            ?>
                            <tr style="border-bottom: 1px solid #000;"  class="<?php echo $value->people > 9 ? 'highlightpeople' : ''; ?>">
                                <td>
                                    <?php echo $count; ?>
                                </td>
                                <td>

                                    <table class="small_table">
                                        <tr>
                                            <th>Booking No.</th>
                                            <td>: <?php echo $value->id; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Guest(s)</th>
                                            <td>: <?php echo $value->people; ?></td>
                                        </tr>
                                        <tr>
                                            <th>Table No.</th>
                                            <td>: <?php echo $value->select_table; ?></td>
                                        </tr>
                                    </table>

                                </td>

                                <td>

                                    <b> <?php echo $value->first_name . " " . $value->last_name; ?></b>
                                    <table class="small_table">
                                        <tr>
                                            <th><i class="fa fa-envelope"></i> &nbsp; </th>
                                            <td class="overtext"> <a href="#" title="<?php echo $value->email; ?>"><?php echo $value->email; ?></a></td>
                                        </tr>
                                        <tr>
                                            <th><i class="fa fa-phone"></i>  &nbsp;</th>
                                            <td> <?php echo $value->contact; ?></td>
                                        </tr>

                                    </table>

                                </td>



                                <td>
                                    <?php
                                    echo $value->order_source . "<br/>";
                                    ?>
                                </td>
                                <td>
                                    <a href="<?php echo site_url("order/orderdetails/" . $value->id); ?>" class="btn btn-primary btn-sm" style="    margin-top: 20%;">Update <i class="fa fa-arrow-circle-right"></i></a>
                                </td>
                            </tr>
        <?php
        $count++;
    }
} else {
    ?>
                    <h4><i class="fa fa-warning"></i> No order found</h4>
                        <?php
                    }
                    ?>

                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- Login Registration Page Area End Here -->

<!--angular controllers-->
<script src="<?php echo base_url(); ?>assets/theme/angular/productController.js"></script>


<?php
$this->load->view('layout/footerAdmin');
?>