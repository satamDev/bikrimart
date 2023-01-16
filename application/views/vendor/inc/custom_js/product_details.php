<div class="dashinr">
  <div class="container p-4">
    <div class="card p-3 mb-3">

      <div class="d-flex align-items-center mb-4">
        <h1 class="h4">Display Product</h1>
      </div>
      <input type="hidden" value="<?= $product_id ?>" id="product_id">

      <div>
        <div class="table-responsive">
          <table class="table table-bordered  table_product_details">
            <thead>
              <tr class="text-center">
                <th>Name</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Product Unit</th>
                <th>Description</th>
              </tr>
              
            </thead>
            <tbody id="table_product_details">

            </tbody>
          </table>
        </div>

        <div class="table-responsive">
          <table class="table table-bordered table-striped table_product_price_details">
            <thead>
              <tr class="text-center">
                <th>Sale Price</th>
                <th>Purchase Price</th>
                <th>Wholesale Price</th>
                <th>Discount </th>
                <th>Discount Type</th>
                <th>Stock</th>
                <th>Opening Stock</th>
                <th>Price / Unit</th>

                <th>Actions</th>

              </tr>
            </thead>
            <tbody id="table_product_price_details">
            </tbody>
          </table>
        </div>

      </div>

      <div id="div_table_variant">
        <div class="table-responsive">
          <table class="table table-bordered table-striped " id="table_variant" style="width:100%">
            <thead>
              <tr class="text-center">
                <th>Colour</th>
                <th>Size</th>
                <th>Sale Price</th>
                <th>Purchase Price</th>
                <th>Wholesale Price</th>
                <th>Discount </th>
                <th>Discount Type</th>
                <th>Stock</th>
                <th>Opening Stock</th>
                <th>Price / Unit</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody id="variant">
            </tbody>
          </table>
        </div>

      </div>

    </div>

    <div class="image d-flex flex-column justify-content-between p-3">

    </div>
    
  </div>
</div>


<!-- add image modal start -->

<div class="modal fade custmmodl" id="addNewImg" tabindex="-1" role="dialog" aria-labelledby="addNewImgTitle" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add New Images</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add_image_form">

          <div class="row">
            <div class="col">
              <div class="form-group">
                <input class="form-control" type="file" id='product_image' name="product_image" required="required">
                <i class="uploadicon"></i>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <input class="form-control" type="hidden" id='product_variant_id' name="variant_id" required="required">
              </div>
            </div>
          </div>

          <div class="d-flex flex-row align-items-center justify-content-center">
            <button type="submit" form="add_image_form" class="btn btn-sm btn-success mr-2" id="btn_add_data">Add</button>
            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal" id="close_add_modal">Close</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- add image modal end -->


<!-- delete image modal start -->

<div class="modal fade custmmodl" id="delImg" tabindex="-1" role="dialog" aria-labelledby="delImgTitle" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
        <p class="text-center">Want to delete this image ?</p>
        <input class="form-control" type="hidden" id='image_id' name="image_id" required="required"> <!-- image id -->

        <div class="d-flex flex-row align-items-center justify-content-center">

          <button type="submit" class="btn btn-sm btn-danger mr-2" id="btn_delete_image">Delete</button>
          <button type="button" class="btn btn-sm btn-secondary " data-dismiss="modal" id="close_delete_modal">Close</button>
        </div>
      </div>

    </div>
  </div>
</div>



</div>