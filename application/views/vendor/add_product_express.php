<div class="dashinr">
    <div class="container p-4">
        <h1 class="mb-4 h4">Add Product Express</h1>
        <!-- <div class="d-flex justify-content-end mb-3 mr-3">
            <button class="btn btn-success">Next</button>
        </div> -->
        <div class="card" id="total_products" style="display:block">

            <!-- <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group m-0">
                            <small class="d-block">Category:</small>
                            <select class="form-control" id="select-state">

                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group m-0">
                            <small class="d-block">Subcategory:</small>
                            <select class="form-control">
                                <option>All</option>
                                <option>Sona Mug</option>
                                <option>Baskati</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div> -->
            
            <div class="card-body">
                <table id="table" class="table table-striped table-bordered display nowrap" style="width:100%">
                    <thead>
                        <tr role="row">
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Select</th>
                        </tr>
                    </thead>
                    <tbody id="table_details">
                        <!-- <tr>
                            <td>1</td>
                            <td><img src="<?= base_url() ?>assets/images/dal.png" alt="" width="50" class="mr-2 img-thumbnail"></td>
                            <td>Chakki Atta</td>
                            <td>
                                <div class="swatch">
                                    <input class="" type="checkbox" onclick="delivery(this, '')">
                                </div>
                            </td>
                        </tr> -->
                    </tbody>
                    <tfoot>
                        <tr role="row">
                            <th>#</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Select</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="d-flex justify-content-end mb-3 mr-3">
                <button class="btn btn-success" id="btn_express_next">Next</button>
            </div>
        </div>

        <div id="">
            <form id="form_express_add" style="display:none" class="selected_products">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Product Name" name="product_name" id="product_name" list="product_list" autocomplete="off">
                                    <input type="hidden" class="form-control" id="master-product-id">
                                </div>
                                <div class="form-group product_list" list="product_list"></div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Weight" name="product_weight" id="product_weight">
                                </div>

                                <div class="form-group">
                                    <select class="form-control" id="select-units" placeholder="Choose Unit..." name="product_unit">
                                        <option value="0">Choose Unit</option>
                                    </select>
                                </div>


                                <div class="form-group masterCategory">
                                    <input type="hidden" class="form-control" name="master_category" id="master_category" value="" disabled>
                                    <input type="hidden" class="form-control" name="master_category" id="master_category_id" value="">
                                </div>

                                <div class="form-group">
                                    <select class="form-control select-brand" placeholder="Choose Brand" name="product_brand[]">
                                        <option value="0">Choose Brand</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Description" rows="3" name="product_description"></textarea>
                                </div>

                            </div>
                            <div class="col-md-7">
                                <div class="tab-content p-2 bg-white mb-3 border-left border-top border-right border-bottom" id="myTabContent">
                                    <div class="tab-pane fade active show" id="desk-home" role="tabpanel" aria-labelledby="desk-home-tab">
                                        <div class="normlprc">
                                            <div class="form-control d-flex align-items-center w-100 p-2 mb-3">
                                                <input type="number" class="whiteinput w-50" placeholder="Sale Price" name="sale_price">
                                            </div>
                                            <div class="form-control d-flex align-items-center w-100 p-2 mb-2">
                                                <input type="number" class="whiteinput w-50" placeholder="Discount on Sale Price" name="discount">
                                            </div>

                                            <div class="form-control d-flex align-items-center w-100 p-2 mb-2">
                                                <input type="number" class="whiteinput w-50" placeholder="Discount on Sale Price" name="discount">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-field w-100">
                            <div class="input-images-1">
                                <!-- <input type="file" id="images-1665645209285" name="images[]" multiple="multiple"> -->
                            </div>
                        </div>

                    </div>
                </div>
            </form>

            <div class="d-flex justify-content-end mt-2">
                <button type="submit" form="form_express_add" class="btn btn-success btn_express_add" id="btn_add_express_product" style="display:none;">
                    Save
                </button>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?= base_url() ?>assets/js/image-uploader.min.js"></script>
    <script>
        $('.input-images-1').imageUploader();
    </script>


    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">
                    </script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
                    <script type="text/javascript" src="js/image-uploader.min.js"></script>
                    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
                    <script src="js/custom.js"></script> -->

    <!-- <script>
    
    window.onload = function() {

        //Better to construct options first and then pass it as a parameter
        var options = {
            title: {
                text: "Column Chart in jQuery CanvasJS"
            },
            data: [{
                // Change type to "doughnut", "line", "splineArea", etc.
                type: "column",
                dataPoints: [{
                        label: "apple",
                        y: 10
                    },
                    {
                        label: "orange",
                        y: 15
                    },
                    {
                        label: "banana",
                        y: 25
                    },
                    {
                        label: "mango",
                        y: 30
                    },
                    {
                        label: "grape",
                        y: 28
                    }
                ]
            }]
        };

        $("#chartContainer").CanvasJSChart(options);
    }

    function openPopup() {
        $('#addnewunit').modal('show');
        $('#addproddtls').modal('hide');
    }

    $('#neworderstable').DataTable({
        scrollX: true,
    });
    $('#cancelledorderstable').DataTable({
        scrollX: true,
    });
    $('#completedorderstable').DataTable({
        scrollX: true,
    });
</script> -->
    </body>

    </html>