<style>
    .propercase {
        text-transform: capitalize;
    }

    .uppercase {
        text-transform: uppercase;
    }
</style>
<script>
    $(document).ready(function() {
        display_inventory_mobile();

    });

    function ImgUpload() {
        var imgWrap = "";
        var imgArray = [];
        $('.upload__inputfile').each(function() {
            $(this).on('change', function(e) {
                imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                var maxLength = $(this).attr('data-max_length');
                var files = e.target.files;
                var filesArr = Array.prototype.slice.call(files);
                var iterator = 0;
                filesArr.forEach(function(f, index) {
                    if (!f.type.match('image.*')) {
                        return;
                    }
                    if (imgArray.length > maxLength) {
                        return false
                    } else {
                        var len = 0;
                        for (var i = 0; i < imgArray.length; i++) {
                            if (imgArray[i] !== undefined) {
                                len++;
                            }
                        }
                        if (len > maxLength) {
                            return false;
                        } else {
                            imgArray.push(f);
                            var reader = new FileReader();
                            reader.onload = function(e) {
                                var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                imgWrap.append(html);
                                iterator++;
                            }
                            reader.readAsDataURL(f);
                        }
                    }
                });
            });
        });
        
        $('body').on('click', ".upload__img-close", function(e) {
            var file = $(this).parent().data("file");
            for (var i = 0; i < imgArray.length; i++) {
                if (imgArray[i].name === file) {
                    imgArray.splice(i, 1);
                    break;
                }
            }
            $(this).parent().parent().remove();
        });
    }


    // Inventory

    function display_inventory_mobile() {
        $.ajax({
            type: "GET",
            url: "<?= base_url('vendor/display_inventory_items') ?>",
            error: function(response) {
                console.log("Inventory Mobile: " + response);
            },
            success: function(response) {
                // console.log(response);

                var product = response.data;
                var image = response.image;
                var data = '';

                $.each(product, function(i, product) {
                    if (product.colour == 'null') {
                        product.colour = '';
                    }
                    if (product.size == 'null') {
                        product.size = '';
                    }

                    data = `<div class="card mb-3 shadow">
                        <div class="card-header p-2 ">
                                <div class="d-flex align-items-center">
                                    <div class="properCase">${product.brand_name} ${product.master_name}<span class="uppercase"> ${product.colour} ${product.size} </span></div>
                                    <div class="ml-auto">
                                        <div class="d-flex">
                                            <button class="btn btn-f1f1f1 btn-sm mr-2 p-2"  type="button" data-toggle="modal" data-target="#editproduct" data-dismiss="modal" aria-label="Close" onclick="edit(this, '${product.product_id}')">
                                                <img src="<?= base_url() ?>assets/images/edit.svg" width="16" alt="">
                                            </button>
                                            <button class="btn btn-f1f1f1 btn-sm p-2" type="button" onclick="delete_product(this, '${product.product_id}')">
                                                <img src="<?= base_url() ?>assets/images/delete.svg" width="14" alt="">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-2 mb-3">
                                <div class="row row5">
                                    <div class="col-2">
                                        <img src="<?= base_url() ?>${image[i].path}" alt="" width="100%">
                                    </div>
                                    <div class="col-8">
                                        <div class="row row5">
                                            <div class="col-6">
                                                <div class="form-group m-0">
                                                    <small class="d-block">Price</small>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">₹</div>
                                                        </div>
                                                        <input type="text" class="form-control" value="${product.purchase_price }">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group m-0">
                                                    <small class="d-block">Offer Price</small>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">₹</div>
                                                        </div>
                                                        <input type="text" class="form-control" value="${product.sale_price}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group m-0">
                                            <small class="d-block">Stock</small>
                                            <input type="number" class="form-control" value="${product.min_stock_qty}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                        $('#inventory_items').append(data);
                });
            }
        });
    }


    function edit(state, product_id) {
        // console.log('id: '+ product_id);
        $.ajax({
            type: "POST",
            url: "<?= base_url('vendor/fetch_product_details_for_edit') ?>",
            data: {
                "id": product_id
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // console.log(response);
                var data = response.data;

                $('#edit_id').val(data.product_id);
                $('#edit_name').val(data.master_name);
                $('#edit_sku').val(data.sku);

                $('#edit_description').val(data.description);
                $('#edit_sale_price').val(data.sale_price);
                $('#edit_sales_tax').val(data.sale_price_tax_type);
                $('#edit_discount').val(data.discount);
                $('#edit_discount_type').val(data.discount_type);
                $('#edit_wholesale_price').val(data.wholesale_price);
                $('#edit_wholesale_tax').val(data.wholesale_price_tax_type);
                $('#edit_wholesale_qty').val(data.wholesale_minimum_quantity);
                $('#edit_purchase_price').val(data.purchase_price);
                $('#edit_purchase_tax').val(data.purchase_price_tax_type);
                $('#edit_opening_stock').val(data.opening_stock);
                $('#edit_date').val(data.date_as_of_stock);
                $('#edit_price_per_unit').val(data.price_per_unit);
                $('#edit_min_stock_qty').val(data.min_stock_qty);
                $('#edit_location').val(data.location);
                $('#edit_tax_rates').val(data.tax_rate_id);

                $('#edit_category').val(data.category);
                $('#edit_brand').val(data.brand_name);
            }
        })
    }


    $('#form_update_product_details').submit(function(e) {
        e.preventDefault();
        var form = $(this);
        // var actionUrl = form.attr('action');

        $.ajax({
            type: "POST",
            url: "<?= base_url('Vendor/update_inventory_product_details') ?>",
            data: form.serialize(),
            success: function(response) {
                if (response.success) {
                    // console.log(response);
                    toast(response.message, 'center');
                    $('#form_update_product_details')[0].reset();

                } else {
                    console.log(response);
                    toast(response.message, 'center');
                }
            },
            error: function(response) {
                console.log(response);
            }
        });
    });

    function delete_product(state, product_id) {
        $.ajax({
            type: "POST",
            url: "<?= base_url('Vendor/delete_inventory_product') ?>",
            data: {
                "id": product_id
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // console.log(response);
                toast(response.message);
                $('inventory').modal('hide');
            }
        });
    }


    /////////////////////// store settings //////////////////////////////

    $('#btn_delivery').hide();

    function delivery(state, user_id) {

        if (state.checked == true) {
            $.ajax({
                url: "<?= base_url('active_free_delivery') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                success: function(response) {
                    state.removeAttribute("checked");
                    toast(response.message);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        } else {
            $.ajax({
                url: "<?= base_url('deactive_free_delivery') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                error: function(response) {
                    console.log(response);
                },
                success: function(response) {
                    if (response.success) {
                        toast(response.message);
                    } else {
                        toast(response.message);
                    }
                }
            });
        }
    }

    function home_delivery(state, user_id) {
        if (state.checked == true) {
            $.ajax({
                url: "<?= base_url('active_home_delivery') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                success: function(response) {
                    state.removeAttribute("checked");
                    toast(response.message);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        } else {
            $.ajax({
                url: "<?= base_url('deactive_home_delivery') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                error: function(response) {
                    console.log(response);
                },
                success: function(response) {
                    if (response.success) {
                        toast(response.message);
                    } else {
                        toast(response.message);
                    }
                }
            });
        }
    }


    function pickup_from_store(state, user_id) {
        if (state.checked == true) {
            $.ajax({
                url: "<?= base_url('active_pickup_from_store') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                success: function(response) {
                    state.removeAttribute("checked");
                    toast(response.message);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        } else {
            $.ajax({
                url: "<?= base_url('deactive_pickup_from_store') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                error: function(response) {
                    console.log(response);
                },
                success: function(response) {
                    if (response.success) {
                        toast(response.message);
                    } else {
                        toast(response.message);
                    }
                }
            });
        }
    }

    function stock_management(state, user_id) {
        if (state.checked == true) {
            $.ajax({
                url: "<?= base_url('active_stock_management') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                success: function(response) {
                    state.removeAttribute("checked");
                    toast(response.message);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        } else {
            $.ajax({
                url: "<?= base_url('deactive_stock_management') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                error: function(response) {
                    console.log(response);
                },
                success: function(response) {
                    if (response.success) {
                        toast(response.message);
                    } else {
                        toast(response.message);
                    }
                }
            });
        }
    }


    function cod(state, user_id) {
        if (state.checked == true) {
            $.ajax({
                url: "<?= base_url('active_cash_on_delivery') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                success: function(response) {
                    state.removeAttribute("checked");
                    toast(response.message);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        } else {
            $.ajax({
                url: "<?= base_url('deactive_cash_on_delivery') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                error: function(response) {
                    console.log(response);
                },
                success: function(response) {
                    if (response.success) {
                        toast(response.message);
                    } else {
                        toast(response.message);
                    }
                }
            });
        }
    }

    function online_payment(state, user_id) {
        if (state.checked == true) {
            $.ajax({
                url: "<?= base_url('active_online_payment') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                success: function(response) {
                    state.removeAttribute("checked");
                    toast(response.message);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        } else {
            $.ajax({
                url: "<?= base_url('deactive_online_payment') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                error: function(response) {
                    console.log(response);
                },
                success: function(response) {
                    if (response.success) {
                        toast(response.message);
                    } else {
                        toast(response.message);
                    }
                }
            });
        }
    }


    $('#minimum_order_value').keyup(function() {
        $('#btn_delivery').show();
    });

    $('#delivery_charges').keyup(function() {
        $('#btn_delivery').show();
    });

    $('#btn_delivery').click(function() {
        var value = $('#minimum_order_value').val();
        var charge = $('#delivery_charges').val();

        console.log(value)
        console.log(charge)

        $.ajax({
            type: "POST",
            url: "<?= base_url('update_delivery_charges') ?>",
            data: {
                "value": value,
                "charge": charge
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                if (response.success) {
                    console.log(response);
                    $('#btn_delivery').hide();
                } else {
                    console.log(response);
                }
            }
        })
    })


    $('#account_name').keyup(function() {
        $('#btn_bank_details').show();
    });

    $('#account_number').keyup(function() {
        $('#btn_bank_details').show();
    });

    $('#ifsc').keyup(function() {
        $('#btn_bank_details').show();
    });

    $('#btn_bank_details').click(function() {

        var name = $('#account_name').val();
        var number = $('#account_number').val();
        var ifsc = $('#ifsc').val();

        $.ajax({
            type: "POST",
            url: "<?= base_url('update_bank_details') ?>",
            data: {
                "name": name,
                "number": number,
                "ifsc": ifsc
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                if (response.success) {
                    toast(response.message);
                    $('#btn_bank_details').hide();
                } else {
                    toast(response.message);
                }
            }
        });
    });

    ///////////////// Add product express Mobile /////////////////////////////

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
            $('#express_product_list').html('');
            $.each(data, function(i, data) {

                details = `
                <div class="prodlist d-flex align-items-center w-100 shadow-sm mb-3">
                    <div class="prodlistimg">
                        <img width="60" src="<?= base_url() ?>${image[i].path}" alt="">
                    </div>
                    <h5 class="ml-3">${data.name}</h5>
                    <input type="checkbox" name="Moong-Dal" class="checkbtn" data=${data.master_id}>
                    <span class="ml-auto"></span>
                </div>`;
                $('#express_product_list').append(details);
            });
        }
    });


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



    $('#btn_mobile_express_details').click(function() {
        let array = []; // master_ids
        $('.checkbtn:checked').each(function(i) {
            array[i] = $(this).attr('data');
        });

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
                    // $('#total_products').hide();
                    // $('.selected_products').show();

                    // $('#addprod').slideUp();
                    // $('#addproddtls').slideDown();

                    // console.log(response);
                    var data = response.data;
                    var total = data.length;
                    var details = '';
                    var collasp = '';

                    $.each(data, function(i, data) {
                        
                        details += `

                            <div class="mb-2">
                                <div class="form-group">
                                    <div class="hdrcountprod">
                                        <span>${i+1}</span>
                                        <small>of ${total}</small>
                                    </div>
                                </div>
                                                        
                                    
                                <div class="form-group">
                                    <label>Product Name</label>
                                    <input type="text" class="form-control" value="${data[0].name}" name="" disabled>
                                    <input type="hidden" class="form-control" value="${data[0].master_id}" name="master_product_id[]">
                                </div>
                            
                                <input type="hidden" class="form-control" id="master_category_id" value="${data[0].category_id}">
                               
                                <div class="form-group">
                                    <label>Brand</label>
                                    <select class="form-control select-brand" name="product_brand[]">
                                        <option value="">Choose Brand</option>
                                    </select>
                                </div>

                                <div class="row row5">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Weight</label>
                                            <input type="number" class="form-control" value="" name="product_weight[]">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Select Unit</label>
                                            <select class="form-control select-units" name="product_unit[]">
                                                <option value="">Select Unit</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row row5">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Price</label>
                                            <input type="number" class="form-control" value="" name="sale_price[]">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Offer Price</label>
                                            <input type="number" class="form-control" value="" name="discount[]">
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="number" class="form-control" value="" name="min_stock_qty[]">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="description[]">

                                    </textarea>
                                </div>

                                <div class="upload__box prodimgsec">
                                    <div class="upload__btn-box prodimginr">
                                        <label class="upload__btn">
                                            <img src="<?= base_url() ?>assets/images/imgplus.svg" alt="">
                                            <input type="file" multiple="" data-max_length="20" class="upload__inputfile" name="images_${i}[]">
                                        </label>
                                    </div>
                                    <div class="upload__img-wrap" id="preview"></div>
                                </div>  
                            </div>  
                            
                        `;
                    });

                    $('#mobile_selected_express_product').html(details);
                    get_units();
                    get_brands();
                    ImgUpload();
                } else {
                    toast(response.message);
                }
            }
        });
    });


    $("#select-category").keyup(function() {
        var category = $("#select-category").val();
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
                var details = '';
                $.each(data, function(i, data) {
                    details += `<tr>
                            <td>${i+1}</td>
                            <td><img src="<?= base_url() ?>assets/images/dal.png" alt="" width="50" class="mr-2 img-thumbnail"></td>
                            <td>${data.name}</td>
                            <td>
                                <div class="swatch ">
                                    <input class="checkbtn p-2 ml-3"  type="checkbox"  data=${data.master_id}">
                                </div>
                            </td>
                        </tr>`;
                });
                $("#table_details").html(details);
                $("#table").dataTable();
            }
        });
    });


    $('#form_mobile_express_add_product').submit(function(e) {
        e.preventDefault();
        var form = document.getElementById('form_mobile_express_add_product');
        var formData = new FormData(form);

        $.ajax({
            type: "post",
            url: "<?= base_url('add_product_express') ?>",
            data: formData,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(response) {
                if (response.success) {
                    // console.log(response);
                    $('#addproddtls').modal('hide');
                    toast(response.message, 'center');
                } else {
                    // console.log(response);
                    toast(response.message, 'center');
                }
            }
        });
    })
</script>