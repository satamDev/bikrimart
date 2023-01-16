<style>
    .properCase {
        text-transform: capitalize;
    }

    .images {
        width: 30%;
        padding: 5px;
        margin: 2px;
        border: none;
        border-radius: 6px;
        box-shadow: inset 1px 1px 5px gray;
        transition: 0.5s ease-out;
    }

    .images:hover {
        transform: scale(1.2);
        cursor: pointer;
    }
</style>

<script>
    $(document).ready(function() {
        display_product_list();
    });

    function display_product_list() { // Display products list of vendor
        $.ajax({
            type: "POST",
            url: "<?= base_url('display_product') ?>",
            error: function(data) {
                console.log(data);
            },
            success: function(response) {

                // console.log(response);

                var products = response.data;
                // var variant = response.variant;
                var image = response.image;

                var details = '';
                var mobile = '';

                $.each(products, function(i, product) {

                    // if (product[i].has_variant == 1) {
                    //     product[i].has_variant = "Present";
                    // } else {
                    //     product[i].has_variant = "Not Present";
                    // }

                    details += `<tr class="text-center">
                    
                    <td>${i+1}</td>
                    <td><image src="<?=base_url()?>${image[i].path}" width="50px"></td>
                    <td><a class="properCase" href="<?= base_url('Vendor/fetch_product_details/') ?>${product.product_id}">${product.product_name}</a></td>                 
                    <td class="properCase">${product.category_name}</td> 
                    <td class="properCase">${product.brand_name}</td> 
                    
                   
                    </tr>`;

                    mobile += `<div class="itminr mb-2 shadow-sm p-2">
                            <div class="itminrhdr d-flex align-items-center w-100">
                                <strong>${product.product_name}</strong>
                                <div class="ml-auto">
                                    <svg width="20" height="20" viewBox="0 -2.5 29 29" xmlns="http://www.w3.org/2000/svg" fill="#999">
                                        <path d="m.408 22.528c1.873-6.758 5.672-11.533 11.216-14.094 1.678-.752 3.633-1.353 5.673-1.709l.151-.022c.462 0 .464-.014.464-3.352v-3.351l11.446 11.446-11.446 11.446v-6.702h-1.392c-3.787.088-7.34 1.007-10.51 2.58l.145-.065c-1.836 1.072-3.41 2.347-4.767 3.825l-.013.015-1.374 1.454.408-1.472z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="itminrhdr row align-items-center">
                                <div class="col-4">
                                    <small>
                                        <div style="color: #ccc">Sale Price</div>
                                        <strong style="color: #000">&#8377; ${product.sale_price}</strong>
                                    </small>
                                </div>
                                <div class="col-4 text-center">
                                    <small>
                                        <div style="color: #ccc">Purchase Price</div>
                                        <strong style="color: #000">&#8377; ${product.purchase_price}</strong>
                                    </small>
                                </div>
                                <div class="col-4 text-right">
                                    <small>
                                        <div style="color: #ccc">In Stock</div>
                                        <strong style="color: #000">${product.min_stock_qty}</strong>
                                    </small>
                                </div>
                            </div>
                        </div>`;
                });

                $('#table_details').html(details);
                $('#mobile_product_list').html(mobile);
                $('#table').dataTable();
                $('#mobile_product_list').dataTable();

            }
        });
    }

    //===================MOBILE=========================

    $('#searchbar').keyup(function() {
        let name = $('#searchbar').val();
        $.ajax({
            type: "POST",
            url: "<?= base_url('display_product_for_mobile') ?>",
            data: {
                "name": name
            },
            error: function(data) {
                console.log(data);
            },
            success: function(response) {
                // console.log(response);
                var product = response.data;
                var mobile = '';

                $.each(product, function(i, product) {

                    if (product != null) {

                        mobile += `<div class="itminr mb-2 shadow-sm p-2">
                            <div class="itminrhdr d-flex align-items-center w-100">
                                <strong>${product[i].product_name}</strong>
                                <div class="ml-auto">
                                    <svg width="20" height="20" viewBox="0 -2.5 29 29" xmlns="http://www.w3.org/2000/svg" fill="#999">
                                        <path d="m.408 22.528c1.873-6.758 5.672-11.533 11.216-14.094 1.678-.752 3.633-1.353 5.673-1.709l.151-.022c.462 0 .464-.014.464-3.352v-3.351l11.446 11.446-11.446 11.446v-6.702h-1.392c-3.787.088-7.34 1.007-10.51 2.58l.145-.065c-1.836 1.072-3.41 2.347-4.767 3.825l-.013.015-1.374 1.454.408-1.472z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="itminrhdr row align-items-center">
                                <div class="col-4">
                                    <small>
                                        <div style="color: #ccc">Sale Price</div>
                                        <strong style="color: #000">&#8377; ${product[i].sale_price}</strong>
                                    </small>
                                </div>
                                <div class="col-4 text-center">
                                    <small>
                                        <div style="color: #ccc">Purchase Price</div>
                                        <strong style="color: #000">&#8377; ${product[i].purchase_price}</strong>
                                    </small>
                                </div>
                                <div class="col-4 text-right">
                                    <small>
                                        <div style="color: #ccc">In Stock</div>
                                        <strong style="color: #000">${product[i].min_stock_qty}</strong>
                                    </small>
                                </div>
                            </div>
                        </div>`;
                    }
                });

                $('#mobile_product_list').html(mobile);
                // $('#mobile_product_list').dataTable();

            }

        });
    });
</script>