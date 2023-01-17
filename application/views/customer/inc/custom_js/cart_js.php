<script>
    // display_shop_product();
    display_product_price();
    display_cart_items();
    display_delivery_charges();

    var pageSize;
    var pageNo;
    var vendorId = $('#vendor_id').val();

    $(document).ready(function() {
        pageSize = 10;
        pageNo = 0;

        display_shop_product(pageSize, pageNo, vendorId);

    });


    function display_shop_product(pageSize, pageNo, vendorId) {
        if (vendorId == undefined) {
            vendorId = '';
            var url = '';
        }

        // console.log(vendorId);

        $.ajax({
            type: "GET",
            url: `<?= base_url('customer/display_product_for_shop') ?>?pageSize=${pageSize}&pageNo=${pageNo}&vendorId=${vendorId}`,
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // console.log(response);
                if (response.success) {
                    var data = response.data;

                    var details = '';

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
                                                            <button onclick="decrease(this, '${data.sale_price}', '${data.product_id}', '${data.master_id}', '${data.vendor_id}', '${data.brand_id}')" class="qtyboxbtn" type="button">
                                                                <i class="fas fa-minus"></i>
                                                            </button>
                                                            <input class="text-center mobile_quantity_${data.product_id}" name="qtymob1" type="text" value="0" disabled>
                                                            <button onclick="increase(this, '${data.sale_price}', '${data.product_id}', '${data.master_id}', '${data.vendor_id}', '${data.brand_id}')" class="qtyboxbtn" type="button">
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
                                                <button type="button" class="button btn-cart" onclick="add_to_bag(this, '${data.sale_price}', '${data.product_id}', '${data.master_id}', '${data.vendor_id}', '${data.brand_id}')">
                                                    <span>
                                                        <i class="fas fa-bolt"></i>

                                                        <span>Add to Bag</span>
                                                    </span>
                                                    <div class="spinner"></div>
                                                </button>
                                                <div class="prodthmbqty">
                                                    <div class="d-flex align-items-center text-center">
                                                        <button class="qty">
                                                            <div onclick="dec(this, '${data.sale_price}', '${data.product_id}', '${data.master_id}', '${data.vendor_id}', '${data.brand_id}')"> <i class="fas fa-minus"></i></div>
                                                        </button>
                                                        <input name="qtydesk1" type="text" value="0" class="quantity_${data.product_id}" disabled>
                                                        <button class="qty">
                                                            <div onclick="inc(this, '${data.sale_price}', '${data.product_id}', '${data.master_id}', '${data.vendor_id}', '${data.brand_id}')"><i class="fas fa-plus"></i></div>
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



    $(window).scroll(function() {
        if ((($(window)).scrollTop()) >= ($(document).height() - $(window).height())) {
            pageNo++;
            display_shop_product(pageSize, pageNo, vendorId);
        }
    });


    function add_to_bag(btn, sale_price, product_id, master_id, vendor_id, brand_id) {

        var product_qty = 1;
        $('.quantity_' + product_id).val('1');

        btn = $(btn);
        btn.addClass('loader');
        setTimeout(function() {
            btn.removeClass('loader');
            btn.parent().addClass('bought');
        }, 500);

        add_product_to_cart(product_qty, product_id, master_id, vendor_id, brand_id);
    }

    function add_product_to_cart(product_qty, product_id, master_id, vendor_id, brand_id) {

        // let selected_vendor_id= '';
        // let checked_vendor_id = $('#checked_vendor_id').val();
        // if(checked_vendor_id ==''){
        //     selected_vendor_id = vendor_id;        // default vendor of a product
        // }
        // else{
        //     selected_vendor_id = checked_vendor_id;    // vendor selected by customer
        // }

        let session_id = '';
        if (localStorage.getItem("session_id") && localStorage.getItem("session_id") != 'undefined') {
            session_id = localStorage.getItem("session_id");
        } else {
            session_id = '';
        }

        $.ajax({
            type: "POST",
            url: "<?= base_url('customer/add_product_to_cart') ?>",
            data: {
                "qty": product_qty,
                "product_id": product_id,
                "master_id": master_id,
                "vendor_id": vendor_id, 
                "brand_id": brand_id,
                "session_id": session_id,
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // console.log(response);
                if (response.success) {
                    var session_id = response.data;
                    remember_user_session_id(session_id);

                    display_product_price();
                    display_delivery_charges();
                    display_cart_items();
                    

                    // Mobile View //
                    display_cart_items_mobile();
                } else {
                    toast(response.message, "center");
                }
            }
        });
    }

    function remember_user_session_id(session_id) {
        localStorage.setItem("session_id", session_id);
    }

    function inc(element, sale_price, product_id, master_id, vendor_id, brand_id) {
        let quantity = $('.quantity_' + product_id).val();
        let product_qty = parseInt(quantity) + 1;
        $('.quantity_' + product_id).val(parseInt(quantity) + 1);
        $('#product_details_qty').val(parseInt(quantity) + 1);

        add_product_to_cart(product_qty, product_id, master_id, vendor_id, brand_id);
    }


    function dec(element, sale_price, product_id, master_id, vendor_id, brand_id) {
        let quantity = $('.quantity_' + product_id).val();
        let product_qty = parseInt(quantity) - 1;
        if (product_qty == 0) {
            $('.default_btn_' + product_id).removeClass('bought');
            delete_product(product_id, vendor_id);
            $('#product_detail_dec_btn').attr('disabled', 'disabled');

        } else {
            $('.quantity_' + product_id).val(parseInt(quantity) - 1);
            $('#product_details_qty').val(parseInt(quantity) - 1);
            add_product_to_cart(product_qty, product_id, master_id, vendor_id, brand_id);
        }
    }


    function delete_product(product_id, vendor_id) {
        let session_id = '';
        if (localStorage.getItem("session_id")) {
            session_id = localStorage.getItem("session_id");
        } else {
            session_id = '';
        }
        $.ajax({
            type: "POST",
            url: "<?= base_url('customer/delete_product_from_cart') ?>",
            data: {
                "session_id": session_id,
                "product_id": product_id,
                "vendor_id": vendor_id
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // console.log(response);
                if (response.success) {
                    display_product_price();
                    display_shop_product();
                    display_cart_items();
                    display_delivery_charges();

                    $('.quantity_' + product_id).val(0);
                    $('.cart_quantity_' + product_id).val(0);
                    $('.mobile_quantity_' + product_id).val(0);

                } else {
                    toast(response.message, "center");
                }
            }
        });
    }

    function delete_item(element, cart_id) {

        $.ajax({
            type: "POST",
            url: "<?= base_url('customer/delete_cart_item') ?>",
            data: {
                "id": cart_id
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // console.log(response);
                if (response.success) {
                    display_shop_product();
                    display_product_price();
                    display_cart_items();
                    display_delivery_charges();

                    // mobile view
                    display_cart_items_mobile();

                    $('.product_qty').val(0); // for product details page
                }
            }
        });
    }


    // display added product of customer in cart

    function get_user_cart_product() {
        let session_id = '';
        if (localStorage.getItem("session_id")) {
            session_id = localStorage.getItem("session_id");
        } else {
            session_id = '';
        }

        $.ajax({
            type: "POST",
            url: "<?= base_url('customer/get_user_cart_product_id') ?>",
            data: {
                "session_id": session_id
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // console.log(response);
                if (response.success) {
                    let data = response.data;
                    $.each(data, function(i, data) {

                        $('.default_btn_' + data.product_id).addClass('bought');
                        $('.quantity_' + data.product_id).val(data.product_qty);
                        $('.mobile_quantity_' + data.product_id).val(data.product_qty);
                    });
                } else {
                    $('.productQty').val(1);
                }


                    $('.default_btn_' + data.product_id).addClass('bought');

                    $('.quantity_' + data.product_id).val(data.product_qty);
                    $('.mobile_quantity_' + data.product_id).val(data.product_qty);
                });
            }
        })
    }


    // display popUp
    function display_product_price() {
        let session_id = '';
        if (localStorage.getItem("session_id")) {
            session_id = localStorage.getItem("session_id");
        } else {
            session_id = '';
        }

        $.ajax({
            type: "POST",
            url: "<?= base_url('customer/get_price_and_product_default') ?>",
            data: {
                "session_id": session_id
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // console.log(response);

                if (response.success) {
                    var product = response.product;
                    var price = response.price;
                    var qty = response.qty;

                    var total_price = 0;

                    $.each(price, function(i) {
                        total_price = total_price + (parseInt(price[i]) * (qty[i]));
                    });

                    $('#total_product').text(product);
                    $('#total_price').text(total_price);

                    $('.cart_price').text(total_price);
                    $('.cart_price_mobile').text(total_price);

                    $('.checkout_product').text(product);

                    $('#chkproduct').text(product);
                    $('#chkproduct_mobile').text(product);

                    $('#footer_product_count').text(product);




                } else {
                    $('#total_product').html('0');
                    $('#total_price').html('000');

                    $('.cart_price').html('0');

                    $('.checkout_product').html('0');
                    $('.checkout_price').html('0');

                    $('#chkproduct').html('0');
                    $('#chkprice').html('000');
                }
            }
        });
    }

    var empty_cart = `
    <div class="d-flex flex-column justify-content-center align-items-center">
        <img src="<?= base_url('assets/customer/images/empty.webp') ?>" alt="" class="my-3" width="200px">
        <h4><strong class="text-secondary">Your shopping bag is empty. Start shopping</strong></h4>
    </div>
    `;


    // display cart products

    function display_cart_items() {
        let session_id = '';
        if (localStorage.getItem("session_id")) {
            session_id = localStorage.getItem("session_id");
        } else {
            session_id = '';
        }

        $.ajax({
            type: "POST",
            url: "<?= base_url('customer/display_cart_items') ?>",
            data: {
                "session_id": session_id
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // console.log(response);
                if (response.success) {

                    var data = response.data;

                    var detail = response.details;
                    var cart_total_price = 0;
                    var details = '';
                    var btn_disabled = '';

                    // $('#display_cart_items').html('');
                    $.each(data, function(i, data) {
                        var price = parseInt(detail[i].sale_price) * parseInt(data.product_qty);

                        if (data.product_qty == 1) {
                            btn_disabled = "disabled";
                        } else {
                            btn_disabled = "";
                        }

                        details += `
                        <div class="prodlist2 mb-3 shadow-sm p-2 bg-light">
                            <div class="row row5">
                                <div class="col-3">
                                    <a href="" class="prodlistimg d-block">
                                        <img src="<?= base_url() ?>${detail[i].path}" alt="" class="w-100">
                                    </a>
                                </div>
                                <div class="col-9">
                                    <div class="prodlistcon">
                                        <div class="d-flex prodlistcontit mb-2">
                                            <a href="">
                                                <h4>${detail[i].name}</h4>
                                            </a>
                                            <button class="trashbtn" type="button" onclick="delete_item(this, '${data.cart_id}')" style="cursor:pointer;">

                                                <svg width="15" height="15" version="1.1" id="lni_lni-trash-can" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                                    <path d="M50.7,8.6H41V5c0-2.1-1.7-3.8-3.8-3.8H26.8C24.7,1.3,23,2.9,23,5v3.6h-9.7c-2.1,0-3.8,1.7-3.8,3.8v7.3c0,1,0.8,1.8,1.8,1.8
                                                        h1.5v33.9c0,4.1,3.4,7.5,7.5,7.5h23.5c4.1,0,7.5-3.4,7.5-7.5V21.3h1.5c1,0,1.8-0.8,1.8-1.8v-7.3C54.4,10.2,52.8,8.6,50.7,8.6z
                                                        M26.5,5c0-0.1,0.1-0.3,0.3-0.3h10.4c0.1,0,0.3,0.1,0.3,0.3v3.6H26.5V5z M13.1,12.3c0-0.1,0.1-0.3,0.3-0.3h11.5h14.4h11.5
                                                        c0.1,0,0.3,0.1,0.3,0.3v5.5H13.1V12.3z M47.7,55.3c0,2.2-1.8,4-4,4H20.3c-2.2,0-4-1.8-4-4V21.3h31.5V55.3z" />
                                                    <path d="M32,48.3c1,0,1.8-0.8,1.8-1.8V33.4c0-1-0.8-1.8-1.8-1.8s-1.8,0.8-1.8,1.8v13.2C30.3,47.6,31,48.3,32,48.3z" />
                                                    <path d="M40.4,48.3c1,0,1.8-0.8,1.8-1.8V33.4c0-1-0.8-1.8-1.8-1.8s-1.8,0.8-1.8,1.8v13.2C38.7,47.6,39.5,48.3,40.4,48.3z" />
                                                    <path d="M23.6,48.3c1,0,1.8-0.8,1.8-1.8V33.4c0-1-0.8-1.8-1.8-1.8s-1.8,0.8-1.8,1.8v13.2C21.8,47.6,22.6,48.3,23.6,48.3z" />
                                                </svg>
                                            </button>
                                        </div>

                                        <strong class="d-block mb-2">&#8377; ${price}</strong>
                                        <div class="d-flex align-items-center">
                                            <span class="productunit"> ₹ ${parseInt(detail[i].sale_price)} / ${detail[i].weight} ${detail[i].unit_name}</span>
                                            <div class="ml-auto">
                                                <div class="d-flex qtybox text-center">

                                                    <button class="qtyboxbtn dec_cart_btn_${detail[i].pid}" type="button" onclick="dec(this, '${detail[i].sale_price}', '${detail[i].pid}', '${data.product_id}', '${detail[i].vendor_id}', '${detail[i].brand_id}')" ${btn_disabled}>
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <input type="text" value="${data.product_qty}" class="text-center  quantity_${detail[i].pid}">

                                                    <button class="qtyboxbtn" type="button" onclick="inc(this, '${detail[i].sale_price}', '${detail[i].pid}', '${data.product_id}', '${detail[i].vendor_id}', '${detail[i].brand_id}')">
                                                        <i class="fas fa-plus"></i>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    });

                    $('#display_cart_items').html(details);
                    $('.proceed_to_checkout').show();

                } else {
                    $('#display_cart_items').html(empty_cart);
                    $('.proceed_to_checkout').hide();
                }
            }
        });
    }


    $.ajax({
        type: "GET",
        url: "<?= base_url('customer/get_customer_address') ?>",
        error: function(response) {
            console.log(response);
        },
        success: function(response) {
            // console.log(response);
            if (response.success) {
                var data = response.data;
                if (data.house_number == null || data.house_number == '') data.house_number = 'Not Available';
                $('.customer_address').html(data.address + ' ' + data.pincode).addClass('title');

                $('.detail_address_road').text(data.road).addClass('title');
                $('.detail_address_number').text(data.house_number).addClass('title');
            } else {

                $('.customer_address').html(response.message);
                $('.detail_customer_address_1').text('Not Available')
                $('.detail_customer_address_2').text('Not Available')

            }
        }
    });

    /// Delivery Charges starts ///

    function display_delivery_charges() {
        let session_id = '';
        if (localStorage.getItem("session_id")) {
            session_id = localStorage.getItem("session_id");
        } else {
            session_id = '';
        }

        $.ajax({
            type: "POST",
            url: "<?= base_url('customer/display_delivery_details') ?>",
            data: {
                "session_id": session_id
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {

                let data = response.data;

                let delivery_charge = 0;
                $.each(data, function(i, data) {
                    delivery_charge += parseInt(data);
                });

                let cart_price = parseInt($('.cart_price').text());

                let subTotalPrice = cart_price + parseInt(delivery_charge);


                $('#delivery_charge').text(delivery_charge);
                $('#delivery_charge_mobile').text(delivery_charge);

                $('#pay_price').text(subTotalPrice);
                $('#pay_price_mobile').text(subTotalPrice);

                $('#chkprice').text(subTotalPrice);
                $('#chkprice_mobile').text(subTotalPrice);

                $('.checkout_price').text(subTotalPrice);
            }
        });
    }



    // Get product by date & time

    $('#delivery_date').change(function() {
        var delivery_date = $('#delivery_date').val();
        $.ajax({
            type: "POST",
            url: "<?= base_url('customer/get_deliver_time_accroding_date') ?>",
            data: {
                "delivery_date": delivery_date
            },
            error: function(response) {
                // console.log(response);
            },
            success: function(response) {
                // console.log(response);
                var data = response.data;
                var current_date = response.date;
                var max_date = response.max_date;
                let deliver_time = response.time;

                var details = '';
                $.each(data, function(i, data) {
                    details += `<option data="${data.value}" value="${data.uid}">${data.time}</option>`;
                });
                $('#delivery_time').html(details);

                document.getElementById("delivery_date").min = current_date;
                document.getElementById("delivery_date").max = max_date;

                $('#delivery_time').attr('selected', true);

            }
        })
    });

    $.ajax({
        type: "POST",
        url: "<?= base_url('customer/get_deliver_schedule_time') ?>",
        error: function(response) {
            // console.log(response);
        },
        success: function(response) {
            // console.log(response);
            var data = response.data;
            var current_date = response.date;
            var max_date = response.max_date;
            var details = '';
            $.each(data, function(i, data) {

                details += `<option class="form-control" value="${data.uid}">${data.time}</option>`;
            });
            $('#delivery_time').html(details);
            $('#delivery_date').val(current_date);

            document.getElementById("delivery_date").min = current_date;
            document.getElementById("delivery_date").max = max_date;
        }
    });


    //////////////////////////////// Mobile View Starts////////////////////////////////////////////////////////////////////

    display_cart_items_mobile();

    function increase(element, sale_price, product_id, master_id, vendor_id, brand_id) {
        let quantity = $('.mobile_quantity_' + product_id).val();
        let product_qty = parseInt(quantity) + 1;
        $('.mobile_quantity_' + product_id).val(parseInt(quantity) + 1);
        add_product_to_cart(product_qty, product_id, master_id, vendor_id, brand_id);
    }


    function decrease(element, sale_price, product_id, master_id, vendor_id, brand_id) {
        let quantity = $('.mobile_quantity_' + product_id).val();
        let product_qty = parseInt(quantity) - 1;
        if (product_qty == 0) {

            delete_product(product_id, vendor_id);
        } else {
            $('.mobile_quantity_' + product_id).val(parseInt(quantity) - 1);
            add_product_to_cart(product_qty, product_id, master_id, vendor_id, brand_id);
        }
    }

    function display_cart_items_mobile() {
        let session_id = '';
        if (localStorage.getItem("session_id")) {
            session_id = localStorage.getItem("session_id");
        } else {
            session_id = '';
        }

        $.ajax({
            type: "POST",
            url: "<?= base_url('customer/display_cart_items') ?>",
            data: {
                "session_id": session_id
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // console.log(response);
                if (response.success) {

                    var data = response.data;

                    var detail = response.details;
                    var cart_total_price = 0;
                    var details = '';
                    var btn_disabled = '';

                    // $('#display_cart_items').html('');
                    $.each(data, function(i, data) {
                        var price = parseInt(detail[i].sale_price) * parseInt(data.product_qty);

                        if (data.product_qty == 1) {
                            btn_disabled = "disabled";
                        } else {
                            btn_disabled = "";
                        }

                        details += `
                        <div class="prodlist2 mb-3 shadow-sm p-2 bg-light">
                            <div class="row row5">
                                <div class="col-3">
                                    <a href="" class="prodlistimg d-block">
                                        <img src="<?= base_url() ?>${detail[i].path}" alt="" class="w-100">
                                    </a>
                                </div>
                                <div class="col-9">
                                    <div class="prodlistcon">
                                        <div class="d-flex prodlistcontit mb-2">
                                            <a href="">
                                                <h4>${detail[i].name}</h4>
                                            </a>
                                            <button class="trashbtn" type="button" onclick="delete_item(this, '${data.cart_id}')" style="cursor:pointer;">

                                                <svg width="15" height="15" version="1.1" id="lni_lni-trash-can" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                                    <path d="M50.7,8.6H41V5c0-2.1-1.7-3.8-3.8-3.8H26.8C24.7,1.3,23,2.9,23,5v3.6h-9.7c-2.1,0-3.8,1.7-3.8,3.8v7.3c0,1,0.8,1.8,1.8,1.8
                                                        h1.5v33.9c0,4.1,3.4,7.5,7.5,7.5h23.5c4.1,0,7.5-3.4,7.5-7.5V21.3h1.5c1,0,1.8-0.8,1.8-1.8v-7.3C54.4,10.2,52.8,8.6,50.7,8.6z
                                                        M26.5,5c0-0.1,0.1-0.3,0.3-0.3h10.4c0.1,0,0.3,0.1,0.3,0.3v3.6H26.5V5z M13.1,12.3c0-0.1,0.1-0.3,0.3-0.3h11.5h14.4h11.5
                                                        c0.1,0,0.3,0.1,0.3,0.3v5.5H13.1V12.3z M47.7,55.3c0,2.2-1.8,4-4,4H20.3c-2.2,0-4-1.8-4-4V21.3h31.5V55.3z" />
                                                    <path d="M32,48.3c1,0,1.8-0.8,1.8-1.8V33.4c0-1-0.8-1.8-1.8-1.8s-1.8,0.8-1.8,1.8v13.2C30.3,47.6,31,48.3,32,48.3z" />
                                                    <path d="M40.4,48.3c1,0,1.8-0.8,1.8-1.8V33.4c0-1-0.8-1.8-1.8-1.8s-1.8,0.8-1.8,1.8v13.2C38.7,47.6,39.5,48.3,40.4,48.3z" />
                                                    <path d="M23.6,48.3c1,0,1.8-0.8,1.8-1.8V33.4c0-1-0.8-1.8-1.8-1.8s-1.8,0.8-1.8,1.8v13.2C21.8,47.6,22.6,48.3,23.6,48.3z" />
                                                </svg>
                                            </button>
                                        </div>

                                        <strong class="d-block mb-2">&#8377; ${price}</strong>
                                        <div class="d-flex align-items-center">
                                            <span class="productunit"> ₹ ${parseInt(detail[i].sale_price)} / ${detail[i].weight} ${detail[i].unit_name}</span>
                                            <div class="ml-auto">
                                                <div class="d-flex qtybox text-center">

                                                    <button class="qtyboxbtn dec_cart_btn_${detail[i].pid}" type="button" onclick="decrease(this, '${detail[i].sale_price}', '${detail[i].pid}', '${data.product_id}', '${detail[i].vendor_id}')" ${btn_disabled}>
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                    <input type="text" value="${data.product_qty}" class="text-center mobile_quantity_${detail[i].pid}">

                                                    <button class="qtyboxbtn" type="button" onclick="increase(this, '${detail[i].sale_price}', '${detail[i].pid}', '${data.product_id}', '${detail[i].vendor_id}')">
                                                        <i class="fas fa-plus"></i>
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                    });

                    $('#display_cart_items_mobile').html(details);
                    $('.proceed_to_checkout_mobile').show();

                } else {
                    $('#display_cart_items_mobile').html(empty_cart);
                    $('.proceed_to_checkout_mobile').hide();
                }
            }
        });
    }
</script>

<style>
    .title {
        text-transform: capitalize;
    }
</style>