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
            <h4>Category Management</h4>

        </div>
    </div>
</section>

<!-- begin #content -->
<div id="content" class="content">
    <!-- begin breadcrumb -->


    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="form-stuff-5">
        <div class="panel-heading">
            <h4 class="panel-title">Add Category</h4>
        </div>
        <div class="panel-body">
            <form class="form-inline" action="#" method="POST">
                <div class="form-group mb-2">
                    <input type="text" name="category_name" class="form-control" id="exampleInputEmail2" placeholder="Enter name">
                </div>
                <div class="btn-group" role="group" style="margin-left: 10px;">
                    <button type="submit" name="addCategory" class="btn  btn-primary  mb-2">Add Category</button>
                    <button type="button" class="btn  btn-default  mb-2"><i class="fa fa-times"></i></button>
                </div>
            </form>
        </div>
    </div>
    <div class="panel panel-inverse">

        <div class="panel-body">

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th style="width:300px;">Category</th>
                        <th style="width:200px;">Display Order</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                    foreach ($categories as $key => $value) {
                        ?>
                        <tr>
                            <td>
                                <span  id="cat<?php echo $value['id']; ?>" data-type="text" data-pk="<?php echo $value['id']; ?>" data-name="category_name" data-value="<?php echo $value['category_name']; ?>" data-params ={'tablename':'category'} data-url="<?php echo site_url("Api/updateCurd"); ?>" data-mode="inline" class="m-l-5 editable editable-click" > <?php echo $value['category_name']; ?></span>
                            </td>
                            <td>
                                <span  id="cad<?php echo $value['id']; ?>" data-type="text" data-pk="<?php echo $value['id']; ?>" data-name="display_index" data-value="<?php echo $value['display_index']; ?>" data-params ={'tablename':'category'} data-url="<?php echo site_url("Api/updateCurd"); ?>" data-mode="inline" class="m-l-5 editable editable-click" > <?php echo $value['display_index']; ?></span>
                            </td>
                            <td>

                            </td>
                            <td>
                                <form class="form-inline" action="#" method="POST">
                                    <input type="hidden" name="category_id" value="<?php echo $value['id']; ?>">
                                    <div class="btn-group" role="group">
                                        <a href="<?php echo site_url("Admin/services")?>" class="btn btn-success" role="button"><i class="fa fa-plus"></i> Add Services</a>
                                        <button type="submit" class="btn  btn-default " name="deleteCategory"><i class="fa fa-times"></i></button>
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