<script>
    $(function() {
        $.ajax({
            url: "<?= base_url() ?>vendor_api/v1/Api/printCategoryTree",
            cache: false,

            success: function(response) {

                $("#select-state").html('<option value="0">Choose Category</option>');
                $("#select-state").append(response);
                $('#select-state').selectize({
                    maxItems: 3,
                    onChange: function(value, isOnInitialize) {
                        fetch_brand_according_to_categoy(value);
                    }
                });
                $("#select-state")[0].selectize.clear();
            }
        });
    });

    function get_units() {
        $.ajax({
            url: "<?= base_url() ?>vendor_api/v1/Api/getUnits",
            cache: false,
            success: function(response) {
                var data = JSON.parse(response);
                $('.select-units').find('option:not(:first)').remove();
                $.each(data, function(i) {
                    $('.select-units')
                        .append($("<option></option>")
                            .attr("value", data[i].uid)
                            .text(data[i].name));
                });
            }
        });
    }

    function get_brands() {
        var id = $('#master_category_id').val();

        $.ajax({
            type: "POST",
            url: "<?= base_url('get_brand_by_category') ?>",
            data: {
                "id": id
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // console.log(response);
                var data = response.data;
                var details = '<option value="0">Choose Brand</option>';
                $.each(data, function(i, data) {
                    details += `<option value="${data.uid}">${data.name}</option>`;
                });
                $('.select-brand').html(details)
            }
        });
    }


    $.ajax({
        type: "POST",
        url: "<?= base_url('vendor/get_products_from_master_table') ?>",
        error: function(response) {
            console.log(response);
        },
        success: function(response) {
            // console.log(response);
            var data = response.data;
            var image = response.image;
            var details = '';
            $.each(data, function(i, data) {
                details = `<tr>
                            <td>${i+1}</td>
                            <td><img src="<?= base_url() ?>${image[i].path}" alt="" width="50" class="mr-2 img-thumbnail"></td>
                            <td>${data.name}</td>
                            <td>
                                <div class="swatch">
                                    <input class="checkbtn p-2 ml-3" type="checkbox"  data=${data.master_id}>
                                </div>
                            </td>
                        </tr>`;
                        $("#table_details").append(details);
            });
            $("#table").dataTable();
        }
    });


    $("#select-state").change(function() {
        var category = $("#select-state").val();
        // console.log("category: " + category);
        $.ajax({
            type: "POST",
            url: "<?= base_url('get_master_product_by_category') ?>",
            data: {
                "category": category
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // console.log(response);
                var data = response.data;
                var image = response.image;
                var details = '';
                $("#table_details").html('');
                $.each(data, function(i, data) {
                    details = `<tr>
                            <td>${i+1}</td>
                            <td><img src="<?= base_url() ?>${image[i].path}" alt="" width="50" class="mr-2 img-thumbnail"></td>
                            <td>${data.name}</td>
                            <td>
                                <div class="swatch ">
                                    <input class="checkbtn p-2 ml-3"  type="checkbox"  data=${data.master_id}>
                                </div>
                            </td>
                        </tr>`;
                        $("#table_details").append(details);
                });
                $("#table").dataTable();
            }

        });
    });

    $('#btn_express_next').click(function() {
        let array = []; // master_ids
        $('.checkbtn:checked').each(function(i) {
            array[i] = $(this).attr('data');
        });
        // console.log(array);
        $.ajax({
            type: "POST",
            url: "<?= base_url('get_selected_express_product') ?>",
            data: {
                "id": array
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                if (response.success) {
                    $('#total_products').hide();
                    $('.selected_products').show();
                    $('#btn_add_express_product').show();
                    // console.log(response);

                    var data = response.data;
                    var details = '';
                    var collasp = '';
                    var total = data.length;

                    $.each(data, function(i, data) {

                        details += `
                        
                        <div class="card mb-3">
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-md-5">
                                                                        
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Product Name" name="product_name" id="product_name" value="Product ${i+1} : ${data[0].name}" disabled>
                                        <input type="hidden" class="form-control" id="master-product-id" name="master_product_id[]" value="${data[0].master_id}">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Weight" name="product_weight[]" id="product_weight">
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control select-units" placeholder="Choose Unit..." name="product_unit[]">
                                            <option value="0">Choose Unit</option>
                                        </select>
                                    </div>

                                    <input type="hidden" class="form-control" name="master_category_id[]" id="master_category_id" value="${data[0].category_id}">
                                 
                                    <div class="form-group">
                                        <select class="form-control select-brand" placeholder="Choose Brand" name="product_brand[]">
                                            <option value="0">Choose Brand</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Description" rows="3" name="description[]"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    
                                    <div class="tab-content p-2 bg-white mb-3 border-left border-top border-right border-bottom" id="myTabContent">
                                        <div class="tab-pane fade active show" id="desk-home" role="tabpanel" aria-labelledby="desk-home-tab">
                                            <div class="normlprc">
                                                <div class="form-control d-flex align-items-center w-100 p-2 mb-3">
                                                    <input type="number" class="whiteinput w-50" placeholder="Sale Price" name="sale_price[]">
                                                </div>
                                                <div class="form-control d-flex align-items-center w-100 p-2 mb-2">
                                                    <input type="number" class="whiteinput w-50" placeholder="Offer Price(%)" name="discount[]">
                                                </div>

                                                <div class="form-control d-flex align-items-center w-100 p-2 mb-2">
                                                    <input type="number" class="whiteinput w-50" placeholder="Stock" name="min_stock_qty[]">
                                                </div>
                                            </div>
                                        </div>
                                        
                                       <input type="file" class="form-control" name="images_${i}[]" multiple>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                        `;
                    });
                    var image = '';

                    $('.input-images-1').imageUploader();;

                    $('.selected_products').html(details);
                    get_units();
                    get_brands();
                } else {
                    toast(response.message);
                }
            }
        });
    });

    $('#form_express_add').submit(function(e) {
        // console.log('click');
        e.preventDefault();
        let form = document.getElementById('form_express_add');
        var form_data = new FormData(form);

        $.ajax({
            type: "post",
            url: "<?= base_url('add_product_express') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(response) {
                if (response.success) {
                    toast(response.message, 'center');
                    $('#form_express_add')[0].reset();
                } else {
                    // console.log(response);
                    toast(response.message, 'center');
                }
            }
        });
    });
</script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/image-uploader.min.js"></script>