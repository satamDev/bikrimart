<?php
if ($this->session->userdata('openChekModal')) {
    $modal = "style='display:block;'";
} else {
    $modal = "style=''";
}
?>

<!-- cart list modal -->
<div class="modal fade cartlistfxd" id="cartlistfxd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-0">
            <div class="modal-body p-0">
                <div class="cartlistfxdwrp">
                    <div class="cartlistfxdhdr py-2 px-3 border-bottom bg-light">
                        <div class="d-flex alogn-items-center">
                            <button class="hdrbtn" type="button" data-dismiss="modal">
                                <svg fill="#333333" width="16" height="16" version="1.1" id="lni_lni-chevron-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                    <path d="M45,62.8c-0.5,0-0.9-0.2-1.3-0.6L18.6,35.4c-1.7-1.9-1.7-4.9,0-6.7L43.7,1.8c0.7-0.7,1.8-0.7,2.5-0.1
                                      c0.7,0.7,0.7,1.8,0.1,2.5L21.1,31c-0.5,0.5-0.5,1.4,0,2l25.2,26.8c0.7,0.7,0.6,1.8-0.1,2.5C45.9,62.6,45.4,62.8,45,62.8z" />
                                </svg>
                            </button>
                            <big class="ml-2">MY CART</big>
                            <button class="ml-auto hdrbtn" type="button" data-dismiss="modal">
                                <svg height="14" width="14" fill="#333333" version="1.1" id="lni_lni-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                    <path d="M34.5,32L62.2,4.2c0.7-0.7,0.7-1.8,0-2.5c-0.7-0.7-1.8-0.7-2.5,0L32,29.5L4.2,1.8c-0.7-0.7-1.8-0.7-2.5,0
                                  c-0.7,0.7-0.7,1.8,0,2.5L29.5,32L1.8,59.8c-0.7,0.7-0.7,1.8,0,2.5c0.3,0.3,0.8,0.5,1.2,0.5s0.9-0.2,1.2-0.5L32,34.5l27.7,27.8
                                  c0.3,0.3,0.8,0.5,1.2,0.5c0.4,0,0.9-0.2,1.2-0.5c0.7-0.7,0.7-1.8,0-2.5L34.5,32z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="cartlistfxdinr">
                        <div class="coupnsec">
                            <div class="coupbtn" data-toggle="collapse" data-target="#coup" aria-expanded="false" aria-controls="collapseExample">
                                <div class="d-flex align-items-center">
                                    <div class="coutit">
                                        <h4>My Coupons (8)</h4>
                                        <div>Use your saved coupons to save your money</div>
                                    </div>
                                    <div class="ml-auto">
                                        <svg height="20" width="20" version="1.1" id="lni_lni-chevron-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                            <path d="M19,62.8c-0.4,0-0.9-0.2-1.2-0.5c-0.7-0.7-0.7-1.8-0.1-2.5L42.9,33c0.5-0.5,0.5-1.4,0-2L17.7,4.2c-0.7-0.7-0.6-1.8,0.1-2.5
                                              c0.7-0.7,1.8-0.6,2.5,0.1l25.2,26.8c1.7,1.9,1.7,4.9,0,6.7L20.3,62.2C19.9,62.6,19.5,62.8,19,62.8z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="coup">
                                <div class="card card-body p-3 mt-2">
                                    Anim pariatur cliche reprehenderit
                                </div>
                                <div class="card card-body p-3 mt-2">
                                    Anim pariatur cliche reprehenderit
                                </div>
                                <div class="card card-body p-3 mt-2">
                                    Anim pariatur cliche reprehenderit
                                </div>
                                <div class="card card-body p-3 mt-2">
                                    Anim pariatur cliche reprehenderit
                                </div>
                            </div>
                        </div>
                        <div class="prodlistwwrp" id="display_cart_items">



                        </div>
                    </div>
                    <div class="billdtls p-3 proceed_to_checkout">
                        <h3 class="mb-3">Total</h3>
                        <div class="d-flex mb-2">
                            <span>Price</span>
                            <span class="ml-auto ">₹ <span class="cart_price">00</span></span>
                        </div>
                        <div class="d-flex mb-2">
                            <span>Delivery Charge
                                <span>
                                    <i class="fas fa-info-circle ml-2" id="delivery_charge_info" data-container="body" data-toggle="popover" data-placement="top" data-content="" style="cursor:pointer"></i>
                                </span>


                            </span>
                            <span class="ml-auto" id="">₹ <span id="delivery_charge">0.00</span> </span>
                        </div>
                        <div class="d-flex mb-2">
                            <span>Total Price</span>
                            <strong class="ml-auto" id="">₹ <span id="pay_price">0.00</span> </strong>
                        </div>
                    </div>
                    <div class="checkoutbtnfxd proceed_to_checkout">
                        <div class="d-flex align-items-center">
                            <svg fill="#ffffff" width="40" height="40" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 189.948 189.948" style="enable-background:new 0 0 189.948 189.948;" xml:space="preserve">
                                <path d="M164.613,56.66L132.259,9.34c-2.371-3.467-7.106-4.357-10.576-1.986c-3.469,2.374-4.357,7.106-1.986,10.576
                                  l26.437,38.659H43.815L70.247,17.93c2.374-3.469,1.484-8.202-1.986-10.576C64.792,4.98,60.057,5.873,57.688,9.34L25.334,56.66
                                  C11.248,57.375,0,69.026,0,83.29c0,7.033,2.787,13.69,7.74,18.682l10.708,63.311c0.378,10.343,8.91,18.641,19.341,18.641h114.367
                                  c10.431,0,18.963-8.296,19.341-18.641l10.708-63.308c4.953-4.994,7.743-11.651,7.743-18.684
                                  C189.947,69.029,178.699,57.375,164.613,56.66z M170.373,92.179l-2.252,1.811l-11.722,69.306l-0.107,1.268
                                  c0,2.28-1.854,4.139-4.137,4.139H37.789c-2.283,0-4.139-1.856-4.139-4.139L21.821,93.992l-2.25-1.811
                                  c-2.77-2.229-4.357-5.471-4.357-8.894c0-6.333,5.148-11.481,11.476-11.481h136.558c6.328,0,11.476,5.151,11.476,11.481
                                  C174.73,86.713,173.143,89.955,170.373,92.179z" />
                            </svg>
                            <div class="checkitem ml-3">
                                <div class="mb-1">
                                    <strong><span id="chkproduct">0</span></strong> Items
                                </div>
                                <strong class="d-block">&#8377; <span id="chkprice">00.00</span> </strong>
                            </div>
                            <button class="ml-auto checkoutbtn" type="button" data-toggle="modal" data-target="#chkout" data-dismiss="modal" aria-label="Close">
                                Proceed to Checkout
                                <svg class="ml-3" fill="#fff" width="30" version="1.1" id="lni_lni-arrow-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                    <path d="M61.5,28.5l-6.9-8.2c-0.6-0.7-1.7-0.8-2.5-0.2c-0.7,0.6-0.8,1.7-0.2,2.5l6.5,7.7H3c-1,0-1.8,0.8-1.8,1.8
                                  c0,1,0.8,1.8,1.8,1.8h55.4l-6.5,7.7c-0.6,0.7-0.5,1.8,0.2,2.5c0.3,0.3,0.7,0.4,1.1,0.4c0.5,0,1-0.2,1.3-0.6l6.9-8.2
                                  C63.2,33.5,63.2,30.5,61.5,28.5z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- checkout modal -->
<div class="modal fade cartlistfxd" id="chkout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-0">
            <div class="modal-body p-0">
                <div class="cartlistfxdwrp">
                    <div class="cartlistfxdhdr py-2 px-3 border-bottom bg-dark">
                        <div class="d-flex alogn-items-center">
                            <button class="hdrbtn p-0" type="button" data-toggle="modal" data-target="#cartlistfxd" data-dismiss="modal" aria-label="Close">
                                <svg width="26" height="26" fill="#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 386.242 386.242" style="enable-background:new 0 0 386.242 386.242;" xml:space="preserve">
                                    <path id="Arrow_Back" d="M374.212,182.3H39.432l100.152-99.767c4.704-4.704,4.704-12.319,0-17.011
                                        c-4.704-4.704-12.319-4.704-17.011,0L3.474,184.61c-4.632,4.632-4.632,12.379,0,17.011l119.1,119.1
                                        c4.704,4.704,12.319,4.704,17.011,0c4.704-4.704,4.704-12.319,0-17.011L39.432,206.36h334.779c6.641,0,12.03-5.39,12.03-12.03
                                        S380.852,182.3,374.212,182.3z" />
                                </svg>
                            </button>
                            <big class="ml-4 text-white">Checkout</big>
                        </div>
                    </div>
                    <div class="bg-light chkscroll">
                        <div class="p-4">
                            <div class="ordrdtlswrp">
                                <strong class="d-block">Order Details</strong>
                                <div class="bg-white ordrdtlswrpsec shadow border mb-4">
                                    <div class="ordrdtlslist">
                                        <small class="d-block pl-3 pt-3">Products</small>
                                        <div class="d-flex align-items-center border-bottom w-100 px-3 pb-3">
                                            <div class="chkprodoption">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13.628" height="12.946" viewBox="0 0 13.628 12.946">
                                                            <g id="Page-1" transform="translate(0 0)">
                                                                <g id="Dribbble-Light-Preview">
                                                                    <g id="icons">
                                                                        <path id="shopping_cart-_1136_" data-name="shopping_cart-[#1136]" d="M134.429,2971.584H127.2l-.908-5.465h9.171Zm1.154-6.834-2.741-4.742-1.18.674,2.348,4.068h-6.392l2.348-4.061-1.18-.688-2.742,4.749H124v1.37h.909l1.135,6.828h9.54l1.136-6.828h.908v-1.37Z" transform="translate(-124 -2960)" fill="#9f9f9f" fill-rule="evenodd" />
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <div class="pl-4">
                                                        <small>
                                                            <strong class="d-block"> <span class="checkout_product">0</span> Items</strong>
                                                            <strong class="d-block">₹ <span class="checkout_price">00</span></strong>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="icobtn ml-auto" type="button">
                                                <svg width="24px" height="24px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="#444444" fill-rule="evenodd" d="M7.05307007,2.15808105 L14.2962587,9.41418482 C14.4320862,9.5496827 14.5,9.71077067 14.5,9.89744874 C14.5,10.0841268 14.4320862,10.2497803 14.2962587,10.3944092 C11.6760845,12.9498393 9.15095523,15.4168071 6.72087106,17.7953128 C6.5962677,17.912323 6.09560574,18.2032928 5.70989407,17.7705688 C5.3241824,17.3378448 5.55848694,16.9602509 5.70989407,16.8045692 C7.97174895,14.594209 10.3279004,12.2918355 12.7783485,9.89744874 L6.03100586,3.13816833 C5.78524099,2.79925826 5.80526899,2.48632792 6.09108986,2.19937732 C6.37691073,1.91242672 6.6975708,1.8986613 7.05307007,2.15808105 Z" />
                                                </svg>
                                            </button>
                                        </div>
                                        <small class="d-block pl-3 pt-3">Delivery Location</small>
                                        <div class="d-flex align-items-center border-bottom w-100 px-3 pb-3">
                                            <div class="chkprodoption">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <svg width="15" height="15" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 362.13 362.13" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 362.13 362.13" fill="#9f9f9f">
                                                            <path d="m181.065,0c-75.532,0-136.981,61.45-136.981,136.981 0,31.155 21.475,76.714 63.827,135.411 30.619,42.436 60.744,75.965 62.011,77.372l11.144,12.367 11.144-12.367c1.267-1.406 31.392-34.936 62.011-77.372 42.352-58.697 63.827-104.255 63.827-135.411-0.001-75.531-61.451-136.981-136.983-136.981zm0,316.958c-37.733-44.112-106.981-134.472-106.981-179.977 0-58.989 47.991-106.981 106.981-106.981s106.981,47.992 106.981,106.981c0.001,45.505-69.248,135.865-106.981,179.977z" />
                                                            <circle cx="181.065" cy="136.982" r="49.696" />
                                                        </svg>
                                                    </div>
                                                    <div class="pl-4">
                                                        <small>
                                                            <strong class="d-block customer_address mb-1">Vikash Singh (8100461999) - Home Anand Raj Nagar, Sapuipara, Howrah, West Bengal - 711227</strong>
                                                        </small>
                                                        
                                                        <small>
                                                            <label class="d-block"><b>Apartment/Road/Area : </b>
                                                                <span class="detail_address_road">
                                                                    Not Available
                                                                </span></label>
                                                        </small>

                                                        <small>
                                                            <label class="d-block"><b>House/Flat/Block Number : </b>
                                                                <span class="detail_address_number">
                                                                    Not Available
                                                                </span></label>
                                                        </small>

                                                    </div>
                                                </div>
                                            </div>
                                            <a class="icobtn ml-auto" type="button" href="<?= base_url('customer/details') ?>">
                                                <svg width="24px" height="24px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="#20c997" fill-rule="evenodd" d="M7.05307007,2.15808105 L14.2962587,9.41418482 C14.4320862,9.5496827 14.5,9.71077067 14.5,9.89744874 C14.5,10.0841268 14.4320862,10.2497803 14.2962587,10.3944092 C11.6760845,12.9498393 9.15095523,15.4168071 6.72087106,17.7953128 C6.5962677,17.912323 6.09560574,18.2032928 5.70989407,17.7705688 C5.3241824,17.3378448 5.55848694,16.9602509 5.70989407,16.8045692 C7.97174895,14.594209 10.3279004,12.2918355 12.7783485,9.89744874 L6.03100586,3.13816833 C5.78524099,2.79925826 5.80526899,2.48632792 6.09108986,2.19937732 C6.37691073,1.91242672 6.6975708,1.8986613 7.05307007,2.15808105 Z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <small class="d-block pl-3 pt-3">Get it by</small>
                                        <div class="d-flex align-items-center border-bottom w-100 px-3 pb-3">
                                            <div class="chkprodoption">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <svg fill="#9f9f9f" width="15" height="15" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 254.215 254.215" style="enable-background:new 0 0 254.215 254.215;" xml:space="preserve">
                                                            <path d="M253.521,120.354l-19.709-42.577c-1.229-2.652-3.885-4.35-6.807-4.35h-61.982V36.312c0-4.142-3.357-7.5-7.5-7.5H7.5
		c-4.143,0-7.5,3.358-7.5,7.5v126.221c0,4.142,3.357,7.5,7.5,7.5h14.691c-1.256,2.75-2.205,5.667-2.799,8.712H7.5
		c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h11.893c3.51,18.016,19.406,31.659,38.436,31.659
		c19.027,0,34.922-13.644,38.432-31.659h62.596c3.51,18.016,19.405,31.659,38.434,31.659c19.026,0,34.92-13.644,38.43-31.659h10.996
		c4.143,0,7.5-3.358,7.5-7.5v-62.74C254.215,122.416,253.979,121.341,253.521,120.354z M158.855,178.744H96.26
		c-0.593-3.045-1.543-5.962-2.799-8.712h64.063c1.988,0,3.791-0.779,5.133-2.042C160.893,171.321,159.598,174.934,158.855,178.744z
		 M15,43.812h135.023v111.221H81.447c-6.571-4.985-14.754-7.95-23.619-7.95s-17.05,2.965-23.621,7.95H15V43.812z M57.828,210.403
		c-13.324,0-24.164-10.838-24.164-24.159c0-13.323,10.84-24.162,24.164-24.162c13.322,0,24.16,10.839,24.16,24.162
		C81.988,199.565,71.15,210.403,57.828,210.403z M197.289,210.403c-13.323,0-24.162-10.838-24.162-24.159
		c0-13.323,10.839-24.162,24.162-24.162c13.321,0,24.158,10.839,24.158,24.162C221.447,199.565,210.61,210.403,197.289,210.403z
		 M239.215,178.744h-3.496c-3.51-18.018-19.402-31.662-38.43-31.662c-13.535,0-25.486,6.904-32.523,17.374
		c0.162-0.615,0.258-1.257,0.258-1.923V88.427h57.189l17.002,36.729V178.744z" />
                                                            <path d="M211.066,95.302h-31.537c-4.143,0-7.5,3.358-7.5,7.5v20.85c0,4.142,3.357,7.5,7.5,7.5h41.428c0.011,0,0.015,0,0.02,0
		c4.143,0,7.5-3.358,7.5-7.5c0-1.343-0.353-2.603-0.971-3.693l-9.663-20.371C216.601,96.97,213.963,95.302,211.066,95.302z
		 M187.029,116.151v-5.85h19.294l2.774,5.85H187.029z" />
                                                        </svg>
                                                    </div>
                                                    <div class="pl-4">
                                                        <small>
                                                            <strong class="mb-2">When would you like your Delivery ?</strong>
                                                        </small>
                                                        <!-- <small>
                                                            <strong class="d-block">Today </strong>
                                                            <strong class="d-block">
                                                                6 PM</strong>
                                                        </small> -->
                                                        <div class="d-flex justify-content-between mt-2">
                                                            <input type="date" name="" id="delivery_date" class="form-control mr-3">

                                                            <select name="" id="delivery_time" class="form-control">
                                                                <option value="">Delivery Time</option>

                                                            </select>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <button class="icobtn ml-auto" type="button">
                                                <svg width="24px" height="24px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="#444444" fill-rule="evenodd" d="M7.05307007,2.15808105 L14.2962587,9.41418482 C14.4320862,9.5496827 14.5,9.71077067 14.5,9.89744874 C14.5,10.0841268 14.4320862,10.2497803 14.2962587,10.3944092 C11.6760845,12.9498393 9.15095523,15.4168071 6.72087106,17.7953128 C6.5962677,17.912323 6.09560574,18.2032928 5.70989407,17.7705688 C5.3241824,17.3378448 5.55848694,16.9602509 5.70989407,16.8045692 C7.97174895,14.594209 10.3279004,12.2918355 12.7783485,9.89744874 L6.03100586,3.13816833 C5.78524099,2.79925826 5.80526899,2.48632792 6.09108986,2.19937732 C6.37691073,1.91242672 6.6975708,1.8986613 7.05307007,2.15808105 Z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <strong class="d-block">Payment Option</strong>
                                <div class="bg-white ordrdtlswrpsec shadow border mb-4">
                                    <div class="ordrdtlslist">
                                        <div class="d-flex align-items-center border-bottom w-100 p-3">
                                            <div class="chkprodoption">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <svg height="15" width="15" fill="#9f9f9f" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                            <path d="M460.8,153.6H51.2C22.921,153.6,0,176.52,0,204.8v230.4c0,28.279,22.921,51.2,51.2,51.2h409.6
                                                            c28.279,0,51.2-22.921,51.2-51.2V204.8C512,176.52,489.079,153.6,460.8,153.6z M486.4,435.2c0,14.114-11.486,25.6-25.6,25.6H51.2
                                                            c-14.114,0-25.6-11.486-25.6-25.6V204.8c0-14.114,11.486-25.6,25.6-25.6h409.6c14.114,0,25.6,11.486,25.6,25.6V435.2z" />
                                                            <path d="M392.038,55.176c-11.955-25.634-42.411-36.719-68.045-24.764L114.714,128h60.57l159.531-74.385
                                                            c12.791-5.965,28.058-0.41,34.022,12.382L397.756,128h28.245L392.038,55.176z" />
                                                            <path d="M153.6,204.8H76.8c-14.14,0-25.6,11.46-25.6,25.6v51.2c0,14.14,11.46,25.6,25.6,25.6h76.8c14.14,0,25.6-11.46,25.6-25.6
                                                            v-51.2C179.2,216.26,167.74,204.8,153.6,204.8z M153.6,281.6H76.8v-51.2h76.8V281.6z" />
                                                            <rect x="51.2" y="384" width="256" height="25.6" />
                                                            <path d="M422.4,358.4c-9.882,0-18.799,3.84-25.6,9.967c-6.801-6.127-15.718-9.967-25.6-9.967c-21.205,0-38.4,17.195-38.4,38.4
                                                            c0,21.205,17.195,38.4,38.4,38.4c9.882,0,18.799-3.84,25.6-9.967c6.801,6.127,15.718,9.967,25.6,9.967
                                                            c21.205,0,38.4-17.195,38.4-38.4C460.8,375.595,443.605,358.4,422.4,358.4z M371.2,409.6c-7.057,0-12.8-5.743-12.8-12.8
                                                            c0-7.057,5.743-12.8,12.8-12.8s12.8,5.743,12.8,12.8C384,403.857,378.257,409.6,371.2,409.6z M422.4,409.6
                                                            c-7.057,0-12.8-5.743-12.8-12.8c0-7.057,5.743-12.8,12.8-12.8s12.8,5.743,12.8,12.8C435.2,403.857,429.457,409.6,422.4,409.6z" />
                                                        </svg>
                                                    </div>
                                                    <div class="pl-4">
                                                        <small>
                                                            <strong class="d-block">Online Payment</strong>
                                                            <small class="d-block">UPI / Debit Cart / Internet Banking / Credit Cart</small>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="icobtn ml-auto" type="button">
                                                <svg width="24px" height="24px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="#444444" fill-rule="evenodd" d="M7.05307007,2.15808105 L14.2962587,9.41418482 C14.4320862,9.5496827 14.5,9.71077067 14.5,9.89744874 C14.5,10.0841268 14.4320862,10.2497803 14.2962587,10.3944092 C11.6760845,12.9498393 9.15095523,15.4168071 6.72087106,17.7953128 C6.5962677,17.912323 6.09560574,18.2032928 5.70989407,17.7705688 C5.3241824,17.3378448 5.55848694,16.9602509 5.70989407,16.8045692 C7.97174895,14.594209 10.3279004,12.2918355 12.7783485,9.89744874 L6.03100586,3.13816833 C5.78524099,2.79925826 5.80526899,2.48632792 6.09108986,2.19937732 C6.37691073,1.91242672 6.6975708,1.8986613 7.05307007,2.15808105 Z" />
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="d-flex align-items-center border-bottom w-100 p-3">
                                            <div class="chkprodoption">
                                                <div class="d-flex">
                                                    <div class="">
                                                        <svg width="15" height="15" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 362.13 362.13" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 362.13 362.13" fill="#9f9f9f">
                                                            <path d="m181.065,0c-75.532,0-136.981,61.45-136.981,136.981 0,31.155 21.475,76.714 63.827,135.411 30.619,42.436 60.744,75.965 62.011,77.372l11.144,12.367 11.144-12.367c1.267-1.406 31.392-34.936 62.011-77.372 42.352-58.697 63.827-104.255 63.827-135.411-0.001-75.531-61.451-136.981-136.983-136.981zm0,316.958c-37.733-44.112-106.981-134.472-106.981-179.977 0-58.989 47.991-106.981 106.981-106.981s106.981,47.992 106.981,106.981c0.001,45.505-69.248,135.865-106.981,179.977z" />
                                                            <circle cx="181.065" cy="136.982" r="49.696" />
                                                        </svg>
                                                    </div>
                                                    <div class="pl-4">
                                                        <small>
                                                            <strong class="d-block">Pay on Delivery</strong>
                                                            <small class="d-block">You can choose to pay on delivery.</small>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="icobtn ml-auto" type="button">
                                                <svg width="24px" height="24px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill="#444444" fill-rule="evenodd" d="M7.05307007,2.15808105 L14.2962587,9.41418482 C14.4320862,9.5496827 14.5,9.71077067 14.5,9.89744874 C14.5,10.0841268 14.4320862,10.2497803 14.2962587,10.3944092 C11.6760845,12.9498393 9.15095523,15.4168071 6.72087106,17.7953128 C6.5962677,17.912323 6.09560574,18.2032928 5.70989407,17.7705688 C5.3241824,17.3378448 5.55848694,16.9602509 5.70989407,16.8045692 C7.97174895,14.594209 10.3279004,12.2918355 12.7783485,9.89744874 L6.03100586,3.13816833 C5.78524099,2.79925826 5.80526899,2.48632792 6.09108986,2.19937732 C6.37691073,1.91242672 6.6975708,1.8986613 7.05307007,2.15808105 Z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="btmfxxd">
                        <div class="checkoutbtnfxd">
                            <div class="d-flex align-items-center">
                                <svg fill="#ffffff" width="40" height="40" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 189.948 189.948" style="enable-background:new 0 0 189.948 189.948;" xml:space="preserve">
                                    <path d="M164.613,56.66L132.259,9.34c-2.371-3.467-7.106-4.357-10.576-1.986c-3.469,2.374-4.357,7.106-1.986,10.576
                                  l26.437,38.659H43.815L70.247,17.93c2.374-3.469,1.484-8.202-1.986-10.576C64.792,4.98,60.057,5.873,57.688,9.34L25.334,56.66
                                  C11.248,57.375,0,69.026,0,83.29c0,7.033,2.787,13.69,7.74,18.682l10.708,63.311c0.378,10.343,8.91,18.641,19.341,18.641h114.367
                                  c10.431,0,18.963-8.296,19.341-18.641l10.708-63.308c4.953-4.994,7.743-11.651,7.743-18.684
                                  C189.947,69.029,178.699,57.375,164.613,56.66z M170.373,92.179l-2.252,1.811l-11.722,69.306l-0.107,1.268
                                  c0,2.28-1.854,4.139-4.137,4.139H37.789c-2.283,0-4.139-1.856-4.139-4.139L21.821,93.992l-2.25-1.811
                                  c-2.77-2.229-4.357-5.471-4.357-8.894c0-6.333,5.148-11.481,11.476-11.481h136.558c6.328,0,11.476,5.151,11.476,11.481
                                  C174.73,86.713,173.143,89.955,170.373,92.179z" />
                                </svg>
                                <div class="checkitem ml-3">
                                    <div class="mb-1">
                                        <strong><span class="checkout_product">0</span></strong> Items
                                    </div>
                                    <strong class="d-block">&#8377; <span class="checkout_price">00.00</span></strong>
                                </div>

                                <a href="<?= base_url('customer/view_add_name_address') ?>" class="ml-auto checkoutbtn" type="button" data-dismis="modal" style="color:#fff">
                                    Proceed to Checkout
                                    <svg class="ml-3" fill="#fff" width="30" version="1.1" id="lni_lni-arrow-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                        <path d="M61.5,28.5l-6.9-8.2c-0.6-0.7-1.7-0.8-2.5-0.2c-0.7,0.6-0.8,1.7-0.2,2.5l6.5,7.7H3c-1,0-1.8,0.8-1.8,1.8
                                  c0,1,0.8,1.8,1.8,1.8h55.4l-6.5,7.7c-0.6,0.7-0.5,1.8,0.2,2.5c0.3,0.3,0.7,0.4,1.1,0.4c0.5,0,1-0.2,1.3-0.6l6.9-8.2
                                  C63.2,33.5,63.2,30.5,61.5,28.5z" />
                                    </svg>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- checkout modal end -->


<!-- mobile cart list modal -->
<div class="modal fade cartlistfxd" id="cart_mobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-0">
            <div class="modal-body p-0">
                <div class="cartlistfxdwrp">
                    <div class="cartlistfxdhdr py-2 px-3 border-bottom bg-light">
                        <div class="d-flex alogn-items-center">
                            <button class="hdrbtn" type="button" data-dismiss="modal">
                                <svg fill="#333333" width="16" height="16" version="1.1" id="lni_lni-chevron-left" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                    <path d="M45,62.8c-0.5,0-0.9-0.2-1.3-0.6L18.6,35.4c-1.7-1.9-1.7-4.9,0-6.7L43.7,1.8c0.7-0.7,1.8-0.7,2.5-0.1
                                      c0.7,0.7,0.7,1.8,0.1,2.5L21.1,31c-0.5,0.5-0.5,1.4,0,2l25.2,26.8c0.7,0.7,0.6,1.8-0.1,2.5C45.9,62.6,45.4,62.8,45,62.8z" />
                                </svg>
                            </button>
                            <big class="ml-2">MY CART</big>
                            <button class="ml-auto hdrbtn" type="button" data-dismiss="modal">
                                <svg height="14" width="14" fill="#333333" version="1.1" id="lni_lni-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                    <path d="M34.5,32L62.2,4.2c0.7-0.7,0.7-1.8,0-2.5c-0.7-0.7-1.8-0.7-2.5,0L32,29.5L4.2,1.8c-0.7-0.7-1.8-0.7-2.5,0
                                  c-0.7,0.7-0.7,1.8,0,2.5L29.5,32L1.8,59.8c-0.7,0.7-0.7,1.8,0,2.5c0.3,0.3,0.8,0.5,1.2,0.5s0.9-0.2,1.2-0.5L32,34.5l27.7,27.8
                                  c0.3,0.3,0.8,0.5,1.2,0.5c0.4,0,0.9-0.2,1.2-0.5c0.7-0.7,0.7-1.8,0-2.5L34.5,32z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="cartlistfxdinr">
                        <div class="coupnsec">
                            <div class="coupbtn" data-toggle="collapse" data-target="#coup" aria-expanded="false" aria-controls="collapseExample">
                                <div class="d-flex align-items-center">
                                    <div class="coutit">
                                        <h4>My Coupons (8)</h4>
                                        <div>Use your saved coupons to save your money</div>
                                    </div>
                                    <div class="ml-auto">
                                        <svg height="20" width="20" version="1.1" id="lni_lni-chevron-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                            <path d="M19,62.8c-0.4,0-0.9-0.2-1.2-0.5c-0.7-0.7-0.7-1.8-0.1-2.5L42.9,33c0.5-0.5,0.5-1.4,0-2L17.7,4.2c-0.7-0.7-0.6-1.8,0.1-2.5
                                              c0.7-0.7,1.8-0.6,2.5,0.1l25.2,26.8c1.7,1.9,1.7,4.9,0,6.7L20.3,62.2C19.9,62.6,19.5,62.8,19,62.8z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="collapse" id="coup">
                                <div class="card card-body p-3 mt-2">
                                    Anim pariatur cliche reprehenderit
                                </div>
                                <div class="card card-body p-3 mt-2">
                                    Anim pariatur cliche reprehenderit
                                </div>
                                <div class="card card-body p-3 mt-2">
                                    Anim pariatur cliche reprehenderit
                                </div>
                                <div class="card card-body p-3 mt-2">
                                    Anim pariatur cliche reprehenderit
                                </div>
                            </div>
                        </div>
                        <div class="prodlistwwrp" id="display_cart_items_mobile">

                        </div>
                    </div>
                    <div class="billdtls p-3 proceed_to_checkout_mobile">
                        <h3 class="mb-3">Total</h3>
                        <div class="d-flex mb-2">
                            <span>Price</span>
                            <span class="ml-auto ">₹ <span class="cart_price_mobile">00</span></span>
                        </div>
                        <div class="d-flex mb-2">
                            <span>Delivery Charge
                                <span>
                                    <i class="fas fa-info-circle ml-2" id="delivery_charge_info_mobile" data-container="body" data-toggle="popover" data-placement="top" data-content="" style="cursor:pointer"></i>
                                </span>


                            </span>
                            <span class="ml-auto" id="">₹ <span id="delivery_charge_mobile">0.00</span> </span>
                        </div>
                        <div class="d-flex mb-2">
                            <span>Total Price</span>
                            <strong class="ml-auto" id="">₹ <span id="pay_price_mobile">0.00</span> </strong>
                        </div>
                    </div>
                    <div class="checkoutbtnfxd proceed_to_checkout_mobile">
                        <div class="d-flex align-items-center">
                            <svg fill="#ffffff" width="40" height="40" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 189.948 189.948" style="enable-background:new 0 0 189.948 189.948;" xml:space="preserve">
                                <path d="M164.613,56.66L132.259,9.34c-2.371-3.467-7.106-4.357-10.576-1.986c-3.469,2.374-4.357,7.106-1.986,10.576
                                  l26.437,38.659H43.815L70.247,17.93c2.374-3.469,1.484-8.202-1.986-10.576C64.792,4.98,60.057,5.873,57.688,9.34L25.334,56.66
                                  C11.248,57.375,0,69.026,0,83.29c0,7.033,2.787,13.69,7.74,18.682l10.708,63.311c0.378,10.343,8.91,18.641,19.341,18.641h114.367
                                  c10.431,0,18.963-8.296,19.341-18.641l10.708-63.308c4.953-4.994,7.743-11.651,7.743-18.684
                                  C189.947,69.029,178.699,57.375,164.613,56.66z M170.373,92.179l-2.252,1.811l-11.722,69.306l-0.107,1.268
                                  c0,2.28-1.854,4.139-4.137,4.139H37.789c-2.283,0-4.139-1.856-4.139-4.139L21.821,93.992l-2.25-1.811
                                  c-2.77-2.229-4.357-5.471-4.357-8.894c0-6.333,5.148-11.481,11.476-11.481h136.558c6.328,0,11.476,5.151,11.476,11.481
                                  C174.73,86.713,173.143,89.955,170.373,92.179z" />
                            </svg>
                            <div class="checkitem ml-3">
                                <div class="mb-1">
                                    <strong><span id="chkproduct_mobile">0</span></strong> Items
                                </div>
                                <strong class="d-block">&#8377; <span id="chkprice_mobile">00.00</span> </strong>
                            </div>
                            <button class="ml-auto checkoutbtn" type="button" data-toggle="modal" data-target="#chkout" data-dismiss="modal" aria-label="Close">
                                Proceed to Checkout
                                <svg class="ml-3" fill="#fff" width="30" version="1.1" id="lni_lni-arrow-right" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                                    <path d="M61.5,28.5l-6.9-8.2c-0.6-0.7-1.7-0.8-2.5-0.2c-0.7,0.6-0.8,1.7-0.2,2.5l6.5,7.7H3c-1,0-1.8,0.8-1.8,1.8
                                  c0,1,0.8,1.8,1.8,1.8h55.4l-6.5,7.7c-0.6,0.7-0.5,1.8,0.2,2.5c0.3,0.3,0.7,0.4,1.1,0.4c0.5,0,1-0.2,1.3-0.6l6.9-8.2
                                  C63.2,33.5,63.2,30.5,61.5,28.5z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Mobile footer starts -->

<footer class="footerMobile">
    <div class="container">
        <div class="d-flex align-items-center justify-content-around">
            <button type="button" class="ftrbtn profbtn" data-toggle="modal" data-target="#profilenav">
                <svg width="26" height="26" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            fill: none;
                            stroke: #FB7C6A;
                            stroke-width: 2;
                            stroke-linecap: round;
                            stroke-linejoin: round;
                            stroke-miterlimit: 10;
                        }

                        .st1 {
                            fill: none;
                            stroke: #FB7C6A;
                            stroke-width: 2;
                            stroke-linejoin: round;
                            stroke-miterlimit: 10;
                        }
                    </style>
                    <circle class="st0" cx="16" cy="16" r="14" />
                    <circle class="st0" cx="16" cy="13" r="5" />
                    <path class="st0" d="M5.4,25.1c1.8-4.1,5.8-7,10.6-7c4.8,0,8.9,2.9,10.6,7" />
                </svg>
            </button>
            <button type="button" class="ftrbtn catbtn">
                <svg fill="#FB7C6A" width="26" height="26" version="1.1" id="lni_lni-grid-alt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                    <path d="M19.7,26.2H7c-3.2,0-5.8-2.6-5.8-5.8V7.7c0-3.2,2.6-5.8,5.8-5.8h12.7c3.2,0,5.8,2.6,5.8,5.8v12.7
                            C25.5,23.6,22.9,26.2,19.7,26.2z M7,5.4c-1.2,0-2.3,1-2.3,2.3v12.7c0,1.2,1,2.3,2.3,2.3h12.7c1.2,0,2.3-1,2.3-2.3V7.7
                            c0-1.2-1-2.3-2.3-2.3H7z" />
                    <path d="M57,26.2H44.3c-3.2,0-5.8-2.6-5.8-5.8V7.7c0-3.2,2.6-5.8,5.8-5.8H57c3.2,0,5.8,2.6,5.8,5.8v12.7
                            C62.8,23.6,60.2,26.2,57,26.2z M44.3,5.4c-1.2,0-2.3,1-2.3,2.3v12.7c0,1.2,1,2.3,2.3,2.3H57c1.2,0,2.3-1,2.3-2.3V7.7
                            c0-1.2-1-2.3-2.3-2.3H44.3z" />
                    <path d="M19.7,62.1H7c-3.2,0-5.8-2.6-5.8-5.8V43.6c0-3.2,2.6-5.8,5.8-5.8h12.7c3.2,0,5.8,2.6,5.8,5.8v12.7
                            C25.5,59.5,22.9,62.1,19.7,62.1z M7,41.3c-1.2,0-2.3,1-2.3,2.3v12.7c0,1.2,1,2.3,2.3,2.3h12.7c1.2,0,2.3-1,2.3-2.3V43.6
                            c0-1.2-1-2.3-2.3-2.3H7z" />
                    <path d="M57,62.1H44.3c-3.2,0-5.8-2.6-5.8-5.8V43.6c0-3.2,2.6-5.8,5.8-5.8H57c3.2,0,5.8,2.6,5.8,5.8v12.7
                            C62.8,59.5,60.2,62.1,57,62.1z M44.3,41.3c-1.2,0-2.3,1-2.3,2.3v12.7c0,1.2,1,2.3,2.3,2.3H57c1.2,0,2.3-1,2.3-2.3V43.6
                            c0-1.2-1-2.3-2.3-2.3H44.3z" />
                </svg>
            </button>
            <button type="button" class="ftrbtn ofrbtn">
                <svg fill="#FB7C6A" width="26" height="26" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 122.88 122.88">
                    <path d="M13.7,49.54,8,33.63a3.47,3.47,0,0,1,2.1-4.44,3.93,3.93,0,0,1,.81-.18L27.3,27.3,29,10.79a3.47,3.47,0,0,1,3.81-3.1,2.9,2.9,0,0,1,.71.15l16,4.11L58.8,1.21A3.49,3.49,0,0,1,63.7.83a3.91,3.91,0,0,1,.61.68l9,12.17,15.91-5.8A3.48,3.48,0,0,1,93.69,10a3.44,3.44,0,0,1,.19.83l1.7,16.51L112.09,29a3.47,3.47,0,0,1,2.71,5.09l-7.3,13.77,14,10.83a3.46,3.46,0,0,1,.62,4.87,3.18,3.18,0,0,1-.72.7L109.2,73.33,115,89.24a3.48,3.48,0,0,1-2.08,4.45,3.44,3.44,0,0,1-.83.19l-16.51,1.7L93.88,112a3.48,3.48,0,0,1-3.81,3.1,3.61,3.61,0,0,1-1.27-.38L75,107.49l-10.85,14a3.46,3.46,0,0,1-5.57-.1l-9.08-12.25-15.91,5.74A3.47,3.47,0,0,1,29,112.05L27.3,97.29,10.53,93.82a3.46,3.46,0,0,1-2.7-4.09A2.62,2.62,0,0,1,8,89.11L13.7,73.34,1.4,64.23a3.48,3.48,0,0,1-.72-4.86,3.42,3.42,0,0,1,.77-.75L13.7,49.54Zm62.39-6.2L55.66,78.86a6.86,6.86,0,0,1-.67,1,2.76,2.76,0,0,1-.82.71,3.14,3.14,0,0,1-1.1.31,10.25,10.25,0,0,1-1.31.07H47.9a1.16,1.16,0,0,1-1.16-1.15,1.18,1.18,0,0,1,.21-.67L67.39,43.57a7.2,7.2,0,0,1,.65-1l0-.06a2.84,2.84,0,0,1,.78-.65A3.15,3.15,0,0,1,70,41.59h0a10,10,0,0,1,1.29-.07h3.85a1.16,1.16,0,0,1,1.16,1.15,1.18,1.18,0,0,1-.21.67Zm-7.4,36.07c-1.72-1.8-2.59-4.56-2.59-8.28s.87-6.48,2.59-8.28,4.52-2.7,8.4-2.7,6.68.9,8.4,2.7,2.58,4.56,2.58,8.28-.86,6.48-2.58,8.28-4.52,2.7-8.4,2.7-6.68-.9-8.4-2.7Zm6-11.44v8h1.3a16.21,16.21,0,0,0,3.27-.26c.22-.18.33-.67.33-1.46v-8h-3a3,3,0,0,0-1.58.26c-.21.18-.32.67-.32,1.46ZM37.39,60q-2.58-2.7-2.58-8.28t2.58-8.28q2.58-2.7,8.4-2.7t8.4,2.7q2.58,2.7,2.58,8.28T54.19,60q-2.58,2.7-8.4,2.7T37.39,60Zm6-11.44v8h3a2.93,2.93,0,0,0,1.57-.27c.22-.18.33-.67.33-1.46v-8H46.93a15.28,15.28,0,0,0-3.26.27c-.22.17-.33.66-.33,1.45ZM16,35.46l5,14a3.48,3.48,0,0,1-1.14,4.13L9.3,61.44,19.9,69.3a3.48,3.48,0,0,1,1.2,4L15.84,87.84,31,91a3.48,3.48,0,0,1,3,3.05l1.49,12.9,14.05-5.06A3.47,3.47,0,0,1,53.59,103l7.91,10.68,9.74-12.61A3.48,3.48,0,0,1,75.69,100l11.81,6.21L89,92.1A3.47,3.47,0,0,1,92.06,89L107,87.43,101.8,73.32a3.46,3.46,0,0,1,1.18-4l10.67-7.92-12.52-9.67A3.5,3.5,0,0,1,100,47.18l6.26-11.8L92.1,33.93A3.48,3.48,0,0,1,89,30.82L87.43,15.93,73.32,21.08a3.48,3.48,0,0,1-4-1.18L61.24,9l-7.8,9.07a3.48,3.48,0,0,1-3.5,1.1L35.5,15.5,33.92,30.78a3.47,3.47,0,0,1-3.1,3.14L16,35.46Z" />
                </svg>
            </button>
            <button type="button" class="ftrbtn cartbtn" data-toggle="modal" data-target="#cart_mobile">
                <svg fill="#FB7C6A" width="26" height="26" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 189.948 189.948" style="enable-background:new 0 0 189.948 189.948;" xml:space="preserve">
                    <path d="M164.613,56.66L132.259,9.34c-2.371-3.467-7.106-4.357-10.576-1.986c-3.469,2.374-4.357,7.106-1.986,10.576
                        l26.437,38.659H43.815L70.247,17.93c2.374-3.469,1.484-8.202-1.986-10.576C64.792,4.98,60.057,5.873,57.688,9.34L25.334,56.66
                        C11.248,57.375,0,69.026,0,83.29c0,7.033,2.787,13.69,7.74,18.682l10.708,63.311c0.378,10.343,8.91,18.641,19.341,18.641h114.367
                        c10.431,0,18.963-8.296,19.341-18.641l10.708-63.308c4.953-4.994,7.743-11.651,7.743-18.684
                        C189.947,69.029,178.699,57.375,164.613,56.66z M170.373,92.179l-2.252,1.811l-11.722,69.306l-0.107,1.268
                        c0,2.28-1.854,4.139-4.137,4.139H37.789c-2.283,0-4.139-1.856-4.139-4.139L21.821,93.992l-2.25-1.811
                        c-2.77-2.229-4.357-5.471-4.357-8.894c0-6.333,5.148-11.481,11.476-11.481h136.558c6.328,0,11.476,5.151,11.476,11.481
                        C174.73,86.713,173.143,89.955,170.373,92.179z" />
                </svg>
                <span id="footer_product_count">0</span>
            </button>
            <button type="button" class="ftrbtn navbtn mnutogmbl">
                <svg fill="#FB7C6A" width="26" height="26" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 384.97 384.97" style="enable-background:new 0 0 384.97 384.97;" xml:space="preserve">
                    <path d="M12.03,84.212h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03
                            C5.39,60.152,0,65.541,0,72.182C0,78.823,5.39,84.212,12.03,84.212z" />
                    <path d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03
                            S379.58,180.455,372.939,180.455z" />
                    <path d="M372.939,300.758H12.03c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h360.909
                            c6.641,0,12.03-5.39,12.03-12.03C384.97,306.147,379.58,300.758,372.939,300.758z" />
                </svg>
            </button>
        </div>
    </div>
</footer>

<!-- Mobile footer ends -->

<!-- Dashboard panel starts -->

<div class="modal fade mainnav" id="profilenav" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content border-0">
            <div class="modal-body p-0">
                <div class="mainnavinr">
                    <ul class="navlist">
                        <li><a href="">Dashboard</a></li>
                        <li><a href="">Orders</a></li>
                        <li><a href="">Products</a></li>
                        <li><a href="">Inventory Management</a></li>
                        <li><a href="">All Parties</a></li>
                        <li>
                            <a href="#profilesub0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">Manage Store</a>
                            <ul class="collapse list-unstyled" id="profilesub0">
                                <li><a href="#profilesub01" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">Sub</a>
                                    <ul class="collapse list-unstyled" id="profilesub01">
                                        <li><a href="">Sub</a></li>
                                        <li><a href="">Sub</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#profilesub02" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">Sub</a>
                                    <ul class="collapse list-unstyled" id="profilesub02">
                                        <li><a href="">Sub</a></li>
                                        <li><a href="">Sub</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#profilesub03" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">Sub</a>
                                    <ul class="collapse list-unstyled" id="profilesub03">
                                        <li><a href="">Sub</a></li>
                                        <li><a href="">Sub</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#profilesub04" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">Sub</a>
                                    <ul class="collapse list-unstyled" id="profilesub04">
                                        <li><a href="">Sub</a></li>
                                        <li><a href="">Sub</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#profilesub1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">Promotions</a>
                            <ul class="collapse list-unstyled" id="profilesub1">
                                <li><a href="#profilesuba1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">Offer</a>
                                    <ul class="collapse list-unstyled" id="profilesuba1">
                                        <li><a href="">Sub</a></li>
                                        <li><a href="">Sub</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#profilesuba2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">Scratch Cards</a>
                                    <ul class="collapse list-unstyled" id="profilesuba2">
                                        <li><a href="">Sub</a></li>
                                        <li><a href="">Sub</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#profilesuba3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">Cashbacks</a>
                                    <ul class="collapse list-unstyled" id="profilesuba3">
                                        <li><a href="">Sub</a></li>
                                        <li><a href="">Sub</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#profilesuba4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">Offer Announcement</a>
                                    <ul class="collapse list-unstyled" id="profilesuba4">
                                        <li><a href="">Sub</a></li>
                                        <li><a href="">Sub</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Subscription</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Help and Support</a></li>
                        <li>
                            <a href="#profilesub2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle collapsed">Settings</a>
                            <ul class="collapse list-unstyled" id="profilesub2">
                                <li>
                                    <a href="#">Sub</a>
                                </li>
                                <li>
                                    <a href="#">Sub</a>
                                </li>
                                <li>
                                    <a href="#">Sub</a>
                                </li>
                                <li>
                                    <a href="#">Sub</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Refer and Earn</a></li>
                        <li><a href="#">Customer Chats</a></li>
                        <li><a href="#">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dashboard panel ends -->