<?php
$this->load->view('layout/headerAdmin');
?>

<style>
    
    .small_table{
        width: 100%;
    }
    .small_table td, .small_table th {
    padding: 0px 5px;
    line-height: 18px;
}
</style>
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
                        
                        <th style="width:50px">Booking No.</th>
                        <th style="width:300px">Customer Information</th>
                        <th style="width:300px">Services</th>
                        <th style="width: 300px">Booking Type</th>
                        <th style="width:300px">Message</th>
                        <th style="width:150px">Date/Time</th>
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

                                    <?php echo $value->id; ?>


                                </td>

                                <td>

                                
                                    <table class="small_table" >
                                         <tr>
                                            <th><i class="fa fa-user"></i> &nbsp; </th>
                                            <td class="overtext">  <?php echo $value->name; ?></td>
                                        </tr>
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
                                    echo $value->select_table . "<br/>";
                                    ?>
                                </td>
                                
                                
                                
                                <td>
                                    <?php
                                    echo $value->booking_type . "<br/>";
                                    ?>
                                </td>
                                
                                <td>
                                    <?php
                                    echo $value->extra_remark . "<br/>";
                                    ?>
                                </td>


                                <td>
                                    <?php
                                    echo $value->select_date . "<br/>". $value->select_time;
                                    ?>
                                </td>
                                <td>
                                    <a href="<?php echo site_url("Admin/bookingDelete/" . $value->id); ?>" class="btn btn-danger btn-sm" style="    margin-top: 20%;">Delete <i class="fa fa-trash"></i></a>
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




<?php
$this->load->view('layout/footerAdmin');
?>