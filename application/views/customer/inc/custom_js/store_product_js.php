<script>
    display_shop_product();

    function display_shop_product() {
        let vendor_id = $('#vendor_id').val();
        $.ajax({
            type: "post",
            url: "<?= base_url('customer/display_product_for_shop') ?>",
            data: {
                "id": vendor_id
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // console.log(response);
                if (response.success) {
                    var data = response.data;

                    var details = '';
                    $('#display_products').html('');

                    $.each(data, function(i, data) {
                        if (data.discount == 0) {
                            var display = "none";
                        }
                        details = `
                    
                    <div class="prodlist mb-3 p-2 shadow-sm">
                                <div class="row row5">
                                    <div class="col-3 col-lg-12 mb-2 product_image">
                                        <a href="<?= base_url('products/') ?>${data.product_id}" class="prodlistimg d-block">
                                            <img src="<?= base_url() ?>${data.path}" alt="" class="w-100">
                                        </a>
                                    </div>
                                    <div class="col-9 col-lg-12">
                                            
                                        <div class="prodlistcon">
                                            <a href="<?= base_url('products/') ?>${data.product_id}">
                                                <h4 class="mb-2 title">${data.brand_name} ${data.product_name}</h4>
                                            </a>
                                            
                                            <strong class="d-block mb-2 "><small>${data.weight} ${data.short_name}</small></strong>
                                            <strong class="d-block rodpprc mb-2 text-danger">₹${parseInt(data.sale_price)} <span class="d-${display}">₹${data.product_price}</span></strong>

                                            <div class="prodlistcondts ">
                                                <div class="ml-auto mx-lg-auto">
                                                    <div class="prodcrtdtls">
                                                    
                                                        <div class="d-flex qtybox text-center">
                                                            <button onclick="decrease(this, '${data.sale_price}', '${data.product_id}', '${data.master_id}', '${data.vendor_id}')" class="qtyboxbtn" type="button">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input class="text-center mobile_quantity_${data.product_id}" name="qtymob1" type="text" value="0" disabled>
                                                            <button onclick="increase(this, '${data.sale_price}', '${data.product_id}', '${data.master_id}', '${data.vendor_id}')" class="qtyboxbtn" type="button">
                                                                <i class="fas fa-plus"></i>
                                                            </button>
                                                        </div>


                                                        <button class="addtocartbtn" type="button"><span> 
                                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 338.044 338.045" style="enable-background:new 0 0 338.044 338.045;" xml:space="preserve">
                                                                    <g>
                                                                        <path d="M269.016,0h-99.652c-13.583,0-30.204,9.476-37.122,21.164L59.188,144.599c-6.917,11.688-1.513,21.164,12.07,21.164h73.511
                                                       l-78.183,56.613c-11.007,7.962-8.911,14.423,4.672,14.423h43.061l-49.11,90.049c-6.506,11.919-3.123,14.777,7.551,6.371
                                                       l125.996-99.26c10.664-8.406,8.593-15.469-4.648-15.769c-13.229-0.3-23.962-0.553-23.962-0.553l82.798-75.837
                                                       c10.016-9.176,7.127-16.369-6.456-16.066l-76.342,1.696L276.499,17.666C285.95,7.908,282.599,0,269.016,0z" />
                                                        </g>

                                                        </svg> </span> Add to Bag
                                                                
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="btn_wrapper default_btn_${data.product_id}">
                                                <button type="button" class="button btn-cart" onclick="add_to_bag(this, '${data.sale_price}', '${data.product_id}', '${data.master_id}', '${data.vendor_id}')">
                                                    <span>
                                                        <i class="fas fa-bolt"></i>

                                                        <span>Add to Bag</span>
                                                    </span>
                                                    <div class="spinner"></div>
                                                </button>
                                                <div class="prodthmbqty">
                                                    <div class="d-flex align-items-center text-center">
                                                        <button class="qty">
                                                            <div onclick="dec(this, '${data.sale_price}', '${data.product_id}', '${data.master_id}', '${data.vendor_id}')"> <i class="fas fa-minus"></i></div>
                                                        </button>
                                                        <input name="qtydesk1" type="text" value="1" class="quantity_${data.product_id}" disabled>
                                                        <button class="qty">
                                                            <div onclick="inc(this, '${data.sale_price}', '${data.product_id}', '${data.master_id}', '${data.vendor_id}')"><i class="fas fa-plus"></i></div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    `;
                        $('#display_products').append(details);
                    });

                    get_user_cart_product();
                }
            }
        });
    }
</script>