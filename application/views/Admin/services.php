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
            <h4>Services Management</h4>

        </div>
    </div>
</section>

<!-- begin #content -->
<div id="content" class="content" ng-controller="ServiceController">
    <!-- begin breadcrumb -->


    <!-- begin panel -->
    <div class="panel panel-inverse" data-sortable-id="form-stuff-5" style="    margin-bottom: 15px;">

        <div class="panel-body">
            <button type="button" class="btn btn-default"  data-toggle="modal" data-target="#addModal"><i class="fa fa-edit"></i> Add Service</button>

        </div>
    </div>
    <div class="panel panel-inverse">

        <div class="panel-body">

            <div class="table-responsive">
                <div class="" ng-repeat="servicecat in initData.resultData">
                    <table class="table">
                        <tr style="background: black;color:white;">
                            <th colspan="5">{{servicecat.title}}</th>
                        </tr>
                        <tr>
                            <th style="width:300px;">Service Name</th>
                            <th style="width:200px;">Description</th>
                            <th style="width:200px;">Image</th>
                            <th style="width:200px;"></th>
                            <th></th>
                        </tr>
                        <tr ng-repeat="service in servicecat.service">
                            <td>
                                {{service.service_name}}
                            </td>
                            <td>
                                {{service.description}}
                            </td>
                            <td>

                                <img src="<?php echo base_url(); ?>assets/serviceimage/{{service.image}}" class="img-fluid" alt="Responsive image" ng-if="service.image" style="height: 100px;">
                            </td>
                            <td>
                                {{service.display_index}}
                            </td>
                            <td>
                                <form class="form-inline" action="#" method="POST">
                                    <input type="hidden" name="service_id" value="{{service.id}}">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-default" ng-click="editService(service)" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i> Edit</button>
                                        <button type="submit" name="deleteService" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                                    </div>
                                </form>
                            </td>
                        </tr>

                    </table>
                </div>



            </div>


        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="editModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">


                        <div class="form-group">
                            <label for="exampleInputEmail1">Service Name</label>
                            <input type="text" class="form-control"  placeholder="Enter Service Name" value="{{initData.selected.service_name}}" name="service_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea name="description" class="form-control"  placeholder="Description">{{initData.selected.description}}</textarea>
                        </div>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-6 col-form-label">Display Order</label>
                            <div class="col-sm-6">
                                <input type="number"  class="form-control" name="display_index" value="{{initData.selected.display_index}}">
                            </div>
                        </div>
                        <div class="btn-group" role="group" aria-label="..." >
                            <span class="btn btn-success col fileinput-button" ">
                                <i class="fa fa-plus"></i>
                                <span>Add files...</span>
                                <input type="file" name="file"  file-model="filemodel" accept="image/*">
                            </span>
                        </div>
                        <input type="hidden" name="table_id" value="{{initData.selected.id}}">
                        <div class="col-md-12">
                            <span style="font-size: 10px;">  Attach File From Here (JPG, PNG Allowed)</span>

                            <h2 style="    font-size: 12px;">{{filemodel.name}}</h2>
                            <input type="hidden" name="file_real_name" value="{{filemodel.name}}"/>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="update_data" class="btn btn-sm btn-primary m-r-5"><i class="fa fa-save"></i> Save Now</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="addModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="#" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Service Category</label>
                            <select class="form-control"  placeholder="Enter Service Name" value="" required="" name="category_id">
                                <option value="">Select Category</option>
                                <option value="{{servicecat.id}}" ng-repeat="servicecat in initData.resultData">{{servicecat.title}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Service Name</label>
                            <input type="text" class="form-control"  placeholder="Enter Service Name" value="" required="" name="service_name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea name="description" class="form-control"  placeholder="Description"></textarea>
                        </div>
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

                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="add_data" class="btn btn-sm btn-primary m-r-5"><i class="fa fa-save"></i> Save Now</button>
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