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
            <h4><?php echo $title;?></h4>

        </div>
    </div>
</section>

<!-- begin #content -->
<div id="content" class="content" ng-controller="ServiceController">
    <!-- begin breadcrumb -->


    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="form-stuff-5" style="    margin-bottom: 15px;">

        <div class="panel-body">
            <button type="button" class="btn btn-default"  data-toggle="modal" data-target="#addModal"><i class="fa fa-plus"></i> Add Images</button>

        </div>
    </div>
    <div class="panel panel-inverse">

        <div class="panel-body">

            <div >
                <div class="row">
                    <?php
                    foreach ($slider_images as $key => $value) {
                        ?>
                        <div class="col-md-4" style="margin-bottom: 20px">
                            <img src="<?php echo base_url(); ?>assets/<?php echo $folder. "/". $value['image']; ?>" class="img-fluid" alt="Responsive image" style="height: 200px">
                            <form method="post" action="#">
                                <input type="hidden" name="slider_id" value="<?php echo $value['id']; ?>">
                                <button type="submit" class="btn btn-default btn-sm" name="deleteImage"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>


        </div>
    </div>




    <div class="modal fade" tabindex="-1" role="dialog" id="addModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">


                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-6 col-form-label">Display Order</label>
                            <div class="col-sm-6">
                                <input type="number"  class="form-control" name="display_index" value="">
                            </div>
                        </div>
                        <div class="btn-group" role="group" aria-label="..." >
                            <span class="btn btn-success col fileinput-button" ">
                                <i class="fa fa-plus"></i>
                                <span>Add files...</span>
                                <input type="file" name="file"  file-model="filemodel" accept="image/*">
                            </span>
                        </div>

                        <div class="col-md-12">
                            <span style="font-size: 10px;">  Attach File From Here (JPG, PNG Allowed)</span>

                            <h2 style="    font-size: 12px;">{{filemodel.name}}</h2>
                            <input type="hidden" name="file_real_name" value="{{filemodel.name}}"/>
                        </div>

                        <button type="submit" name="addImage" class="btn btn-sm btn-primary m-r-5"><i class="fa fa-save"></i> Save Now</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>

                </form>
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