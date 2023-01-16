
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- <h1 class="h3 mb-4 text-gray-800">Brands</h1> -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary" style="display:inline-block;">Brands</h6>    
            <button class="btn btn-success" id="btn_add" data-toggle="modal" data-target="#addNewBrand" style="float: right;"> Add Brand</button>        
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                        </tr>
                    </thead>
                    <tbody class="" id="table_details">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <!-- <div class="card py-2 px-3">
            <div class="table-responsive">
                <table class="table table-bordered" id="table">
                    <thead class="thead-light">
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Category Name</th>
                            <th class="text-center">Brand Name</th>
                        </tr>
                    </thead>
                    <tbody class="text-center" id="table_details">

                    </tbody>
                </table>

            </div>
        </div> -->
        <!-- brands table end -->
         <!-- Page Heading -->
                    

    </div>

        <!-- Add new user modal -->

        <div class="modal fade custmmodl" id="addNewBrand" tabindex="-1" role="dialog" aria-labelledby="addNewBrandTitle" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Brand</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <form id="add_data_form">
                            <div class="cloumn">

                                <div class="form-group">
                                    <select name="" id="category_id" class="form-control">
                                        <option value="">Choose Category</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Brand Name" id='brand_name' name="brand_name">
                                </div>

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close_add_modal">Close</button>
                        <button type="submit" class="btn btn-success" id="btn_add_data">Add Brand</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add brand modal end -->

    </div>    

</body>

</html>