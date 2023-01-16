<script>
    function get_vendor_list(category_id) {
        $.ajax({
            type: "POST",
            url: "<?= base_url(WEB_PANEL_CUSTOMER . 'Product_Api/get_all_vendor_list') ?>",
            data: {
                "id": category_id
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // console.log(response);
                if (category_id == 'Kirana') {
                    $('.category').text('Groceries');

                } else {

                    $('.category').text(category_id);
                }
                let details = '';

                if (response.success) {
                    let data = response.data;

                    $.each(data, function(i, data) {
                        details += `
                    <div class="popstrlist mb-4 shadow border" onclick="display_vedor_product(this, '${data.vendor_id}')">

                        <div class="d-flex align-items-center" id="${data.vendor_id}" onclick="get_vendor_product_list(this.id, '${data.store_name}', '${data.address}')">
                            <div class="popstrlistimg">
                                <img src="<?= base_url() ?>${data.front_image.path}" alt="">
                            </div>
                            <div class="ml-auto popstrlisttit">
                                <h5 class="title">${data.store_name}</h5>
                                <div class="d-flex align-items-center">
                                    <strong class="title">${data.address}</strong>
                                </div>
                            </div>
                        </div>
                    </div>`;
                    });

                } else {
                    details = `
                        <div class="popstrlist mb-4 shadow border">
                            <div class="d-flex align-items-center">
                                <div class="popstrlistimg">
                                    <img src="<?= base_url() ?>assets/customer/images/imagesymble.jpg" alt="">
                                </div>
                                <div class="ml-auto popstrlisttit">
                                    <h5>Store Not Found</h5>
                                    <div class="d-flex align-items-center">
                                        <strong>Not Available !</strong>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                }
                $('#vendor_list').html(details);
            }
        });
    }

    function display_vedor_product(e, vendor_id) {

        location.href = `<?= base_url('store/products/') ?>${vendor_id}`;

    }





    // function get_vendor_product_list(vendor_id, store_name, address) {
    //     $.ajax({
    //         type: "POST",
    //         url: "<?= base_url(PANEL_CUSTOMER . '/get_vendor_product_list') ?>",
    //         data: {
    //             "id": vendor_id,
    //         },
    //         error: function(response) {
    //             console.log(response);
    //         },
    //         success: function(response) {
    //             $('.store_name').text(store_name);
    //             $('.store_address').text(address);
    //             // console.log(response);
    //             if (response.success) {
    //                 let data = response.data;
    //                 let details = '';
    //                 $.each(data, function(i, data) {
    //                     details += `
    //                 <div class="storeitm px-3">
    //                     <div class="d-flex align-items-center">
    //                         <div class="dotbult"></div>
    //                         <h5 class="pl-2 title">${data.product_name}</h5>
    //                         <div class="qutyround d-flex align-items-center ml-auto qty-input">

    //                             <button class="qty-count qty-count--minus" data-action="minus" onclick="decrease(this, '${data.sale_price}', '${data.product_id}', '${data.master_id}', '${data.vendor_id}')">
    //                                 <svg viewBox="0 0 409.6 409.6">
    //                                     <path d="M392.533,187.733H17.067C7.641,187.733,0,195.374,0,204.8s7.641,17.067,17.067,17.067h375.467 c9.426,0,17.067-7.641,17.067-17.067S401.959,187.733,392.533,187.733z" />
    //                                 </svg>
    //                             </button>

    //                             <input class="product-qty mobile_quantity_${data.product_id}" type="number" name="product-qty" min="0" max="1000" value="0">

    //                             <button class="qty-count qty-count--add" data-action="add" onclick="increase(this, '${data.sale_price}', '${data.product_id}', '${data.master_id}', '${data.vendor_id}')" >
    //                                 <svg viewBox="0 0 426.66667 426.66667">
    //                                     <path d="m405.332031 192h-170.664062v-170.667969c0-11.773437-9.558594-21.332031-21.335938-21.332031-11.773437 0-21.332031 9.558594-21.332031 21.332031v170.667969h-170.667969c-11.773437 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.558594 21.335938 21.332031 21.335938h170.667969v170.664062c0 11.777344 9.558594 21.335938 21.332031 21.335938 11.777344 0 21.335938-9.558594 21.335938-21.335938v-170.664062h170.664062c11.777344 0 21.335938-9.558594 21.335938-21.335938 0-11.773437-9.558594-21.332031-21.335938-21.332031zm0 0" />
    //                                 </svg>
    //                             </button>

    //                         </div>
    //                     </div>
    //                 </div>
    //                 `;
    //                 });
    //                 $('#vendor_product_list').html(details);
    //             } else {

    //             }

    //         }
    //     });
    // }
</script>