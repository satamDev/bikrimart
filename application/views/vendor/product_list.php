<div class="dashinr">
    <div class="container p-4">
        <div class="d-flex align-items-center mb-4">
            <h1 class="h4">Products</h1>
            <div class="ml-auto">
                <a href="<?= base_url('vendor/product/add') ?>" class="btn btn-dark">
                    Add Product
                </a>
                <a href="" class="btn btn-success">
                    Download CSV
                </a>
            </div>
        </div>
        <div class="card p-3">



            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Images </th>
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Brand</th>
                            <!-- <th class="text-center">Has Variant </th> -->

                        </tr>
                    </thead>
                    <tbody id="table_details">

                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Images </th>
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Brand</th>
                            <!-- <th class="text-center">Has Variant </th> -->

                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
    </div>
</div>
</div>