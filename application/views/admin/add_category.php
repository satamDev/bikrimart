    <div class="container-fluid mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" style="display:inline-block;">Category</h6>
            </div>

            <div class="form-group my-4 category" style="padding: 0 10rem;">

            </div>

            <div>
                <button class="btn btn-primary mr-5 mb-5" data-toggle="modal" data-target="#product-details" id="btn_add" style="float: right;">Add</button>
                <input type="hidden" id="parent_id">
                <input type="hidden" id="category_level">
            </div>
        </div>
    </div>

    <div class="modal fade modalbottom" id="product-details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Categories</h5>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Category Name" id="category_name">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success savebtn w-100 d-block" data-dismiss="modal" aria-label="Close" id="btn_add_product_category" data="">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>