<?php
$this->load->view('layout/headerAdmin');
?>

<style>
    .small_table td, .small_table th {
        padding: 0px 5px;
        line-height: 18px;
    }
</style>
<section class="sub-bnr" data-stellar-background-ratio="0.5" >
    <div class="position-center-center">
        <div class="container">
            <h4>App Users List</h4>
        </div>
    </div>
</section>

<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->

    <div class="panel panel-inverse">

        <div class="panel-body">

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th style="width:200px;">Name</th>
                        <th style="width:200px;">Email</th>
                        <th>Contact No.</th>
                        <th>Password</th>
                        <th>Reg. Date Time</th>
                    </tr>
                    <?php
                    foreach ($userdata as $key => $value) {
                        ?>
                        <tr>
                            <td>
                                <span  id="name<?php echo $value['id']; ?>" data-type="text" data-pk="<?php echo $value['id']; ?>" data-name="name" data-value="<?php echo $value['name']; ?>" data-params ={'tablename':'app_user'} data-url="<?php echo site_url("Api/updateCurd"); ?>" data-mode="inline" class="m-l-5 editable editable-click" > <?php echo $value['name']; ?></span>
                            </td>
                            
                            <td>
                                <span  id="email<?php echo $value['id']; ?>" data-type="text" data-pk="<?php echo $value['id']; ?>" data-name="email" data-value="<?php echo $value['email']; ?>" data-params ={'tablename':'app_user'} data-url="<?php echo site_url("Api/updateCurd"); ?>" data-mode="inline" class="m-l-5 editable editable-click" > <?php echo $value['email']; ?></span>
                            </td>
                            
                            <td>
                                <span  id="contact<?php echo $value['id']; ?>" data-type="text" data-pk="<?php echo $value['id']; ?>" data-name="contact_no" data-value="<?php echo $value['contact_no']; ?>" data-params ={'tablename':'app_user'} data-url="<?php echo site_url("Api/updateCurd"); ?>" data-mode="inline" class="m-l-5 editable editable-click" > <?php echo $value['contact_no']; ?></span>
                            </td>
                            <td>
                                <span  id="password<?php echo $value['id']; ?>" data-type="text" data-pk="<?php echo $value['id']; ?>" data-name="password" data-value="<?php echo $value['password']; ?>" data-params ={'tablename':'app_user'} data-url="<?php echo site_url("Api/updateCurd"); ?>" data-mode="inline" class="m-l-5 editable editable-click" > <?php echo $value['password']; ?></span>
                            </td>
                            <td>
                                <?php echo $value['datetime']; ?>
                            </td>
                            
                           
                            <td>
                                <form class="form-inline" action="#" method="POST">
                                    <input type="hidden" name="user_id" value="<?php echo $value['id']; ?>">
                                    <div class="btn-group" role="group">
                                        <button type="submit" class="btn  btn-default " name="deleteUser"><i class="fa fa-times"></i></button>
                                    </div>
                                </form>

                            </td>
                        </tr>
                    <?php } ?>
                </table>

            </div>


        </div>
    </div>
    <!-- end panel -->
</div>
<!-- end #content -->



<?php
$this->load->view('layout/footerAdmin');
?>
<script>
    $(function () {
        $(".editable").editable();
    })
</script>