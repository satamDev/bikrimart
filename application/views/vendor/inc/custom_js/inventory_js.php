<script>
    $(document).ready(function() {
        display_inventory();
        // display_inventory_mobile();
    });

    // function display_inventory() {
    //     $.ajax({
    //         type: "GET",
    //         url: "<?= base_url('vendor/display_product') ?>",
    //         error: function(response) {
    //             console.log(response);
    //         },
    //         success: function(response) {
    //             console.log("Inventory: "+response);

    //             var product = response.details;
    //             var data = '';

    //             $.each(product, function(i, product) {

    //                 if (product != null) {

    //                     data += `<tr>
    //                         <td>${i+1}</td>
    //                         <td><img src="<?= base_url() ?>assets/images/dal.png" alt="" width="30" class="mr-2 img-thumbnail">${product[i].product_name}</td>
    //                         <td>${product[i].sale_price}</td>
    //                         <td>${product[i].sale_price}</td>
                            
    //                         <td>${product[i].min_stock_qty}</td>
    //                         <td>
    //                             <button type="button" class="btn btn-sm btnoutnile">
    //                                 <img src="<?= base_url() ?>assets/images/edit.svg" alt="" width="16">
    //                             </button>
    //                             <button type="button" class="btn btn-sm btnoutnile">
    //                                 <img src="<?= base_url() ?>assets/images/delete.svg" alt="" width="16">
    //                             </button>
    //                         </td>
    //                     </tr>`;
    //                 }
    //             });
    //             $('#table_details').html(data);
    //             $('#table').dataTable();
    //         }
    //     });
    // }

    function display_inventory() {
        $.ajax({
            type: "GET",
            url: "<?= base_url('display_inventory_items') ?>",
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                console.log(response);

                var product = response.data;
                var image = response.image;
                var data = '';

                $.each(product, function(i, product) {

                    if (product != null) {

                        data = `<tr>
                            <td>${i+1}</td>
                            <td><img src="<?= base_url() ?>${image[i].path}" alt="" width="50" class="mr-2 img-thumbnail">${product.master_name}</td>
                            <td>${product.sale_price}</td>
                            <td>${product.sale_price}</td>
                            
                            <td>${product.min_stock_qty}</td>
                            <td>
                            <button class="btn btn-f1f1f1 btn-sm mr-2 p-2"  type="button" data-toggle="modal" data-target="#editproduct" data-dismiss="modal" aria-label="Close" onclick="edit(this, '${product.product_id}')">
                                    <img src="<?= base_url() ?>assets/images/edit.svg" width="16" alt="">
                                </button>
                                <button class="btn btn-f1f1f1 btn-sm p-2" type="button" onclick="delete_product(this, '${product.product_id}')">
                                    <img src="<?= base_url() ?>assets/images/delete.svg" width="14" alt="">
                                </button>
                            </td>
                        </tr>`;
                    }
                    $('#table_details').append(data);
                });
                $('#table').dataTable();
            }
        });
    }

    function edit(state, product_id) {
        // console.log('id: '+ product_id);
        $.ajax({
            type: "POST",
            url: "<?= base_url('edit_inventory_product') ?>",
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
        });
    }

    $('#form_update_product_details').submit(function(e) {
        e.preventDefault();
        var form = $(this);

        $.ajax({
            type: "POST",
            url: "<?= base_url('update_inventory_product') ?>",
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
            url: "<?= base_url('delete_inventory_product') ?>",
            data: {
                "id": product_id
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // console.log(response);
                toast(response.message);
                display_inventory();
            }
        });
    }
    
</script>