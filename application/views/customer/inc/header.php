<div class="fxdmidcart text-center" data-toggle="modal" data-target="#cartlistfxd">
    <div class="fxdmidcartitems" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="20.01" height="24" viewBox="0 0 24.01 28">
            <g id="Shops" transform="translate(-3.995 -2)">
                <path id="Path_29" data-name="Path 29" d="M27.92,24.08l-2.24-13A4.73,4.73,0,0,0,21.14,7H21A5,5,0,1,0,11,7h-.14a4.73,4.73,0,0,0-4.54,4.08l-2.24,13a5.23,5.23,0,0,0,1.13,4.29A4.45,4.45,0,0,0,8.62,30H23.38a4.45,4.45,0,0,0,3.41-1.63A5.23,5.23,0,0,0,27.92,24.08ZM16,4a3,3,0,0,1,3,3H13a3,3,0,0,1,3-3Zm9.26,23.08a2.45,2.45,0,0,1-1.88.92H8.62a2.45,2.45,0,0,1-1.88-.92,3.21,3.21,0,0,1-.69-2.66l2.24-13A2.74,2.74,0,0,1,10.86,9H21.14a2.74,2.74,0,0,1,2.57,2.42l2.24,13a3.21,3.21,0,0,1-.69,2.66Z" fill="#fffb7e" />
            </g>
        </svg>

        <div class="mt-1"> <span id="total_product"> 0 </span> Item(s)</div>
    </div>
    <div class="fxdmidcartamt"> ₹ <span id="total_price">000</span></div>
</div>


<header class="header">
    <div class="container-fluid pr-0">
        <div class="d-flex align-items-center w-100">
            <button class="mnutog mr-3" type="button">
                <svg fill="#fff" height="26" width="26" version="1.1" id="lni_lni-menu" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                    <path d="M61,30.3H3c-1,0-1.8,0.8-1.8,1.8S2,33.8,3,33.8h58c1,0,1.8-0.8,1.8-1.8S62,30.3,61,30.3z" />
                    <path d="M61,47.9H3c-1,0-1.8,0.8-1.8,1.8S2,51.4,3,51.4h58c1,0,1.8-0.8,1.8-1.8S62,47.9,61,47.9z" />
                    <path d="M3,16.1h58c1,0,1.8-0.8,1.8-1.8S62,12.6,61,12.6H3c-1,0-1.8,0.8-1.8,1.8S2,16.1,3,16.1z" />
                </svg>
            </button>
            <a href="index.html" class="logo mr-3">
                <div class="d-flex align-items-center">
                    <img width="40" src="<?= base_url('assets/customer/') ?>images/logo.png" alt="">
                    <span class="ml-2">Bikrimart</span>
                </div>
            </a>
            <div class="hdrsrch w-100">
                <div class="form-group has-search m-0">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </div>
            <div class="pinwrp border-right">
                <button class="pinbtn" type="button" data-toggle="collapse" data-target="#pinfrm" aria-expanded="false" aria-controls="collapseExample">
                    <div class="d-flex align-items-center">
                        <span class="mr-2">Pincode</span>
                        <svg height="15" width="15" fill="#fff" version="1.1" id="lni_lni-chevron-down" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 64 64" style="enable-background:new 0 0 64 64;" xml:space="preserve">
                            <path d="M32,46.8c-1.2,0-2.4-0.4-3.4-1.3L1.8,20.3c-0.7-0.7-0.7-1.8-0.1-2.5c0.7-0.7,1.8-0.7,2.5-0.1L31,42.9c0.5,0.5,1.4,0.5,2,0
                                l26.8-25.2c0.7-0.7,1.8-0.6,2.5,0.1c0.7,0.7,0.6,1.8-0.1,2.5L35.4,45.4C34.4,46.3,33.2,46.8,32,46.8z" />
                        </svg>
                    </div>
                </button>
                <div class="collapse" id="pinfrm">
                    <div class="card card-body p-2">
                        <input type="text" class="form-control" placeholder="Enter Pincode">
                    </div>
                </div>
            </div>
            <a href="" class="hdrbtn hlps border-right">Help ?</a>
            <div class="lang">
                <a href="" class="lngclr">EN</a> | <a href="" class="">বাং</a>
            </div>

            <?php
            if ($this->session->userdata('customer_mobile')) { ?>
                <a href="<?= base_url('customer/logout') ?>" class="hdrbtn hdrsign">Log Out</a>
            <?php
            } else { ?>
                <a href="<?= base_url('customer/send_otp') ?>" class="hdrbtn hdrsign">Sign In</a>
            <?php
            }
            ?>

            <div class="noti">
                <button class="hdrbtn collapsed" type="button" data-toggle="collapse" data-target="#notilist" aria-expanded="false" aria-controls="notilist">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26.033" height="28" viewBox="0 0 26.033 28">
                        <g id="_19903299871596026813_2_" data-name="19903299871596026813 (2)" transform="translate(-2.985 -2)">
                            <path id="Path_168" data-name="Path 168" d="M27.8,23.2l-1.1-1.7A16.88,16.88,0,0,1,23.8,12a7.86,7.86,0,0,0-5.6-7.5,2.363,2.363,0,0,0-4.4,0A7.86,7.86,0,0,0,8.2,12a16.88,16.88,0,0,1-2.9,9.5L4.2,23.2a1.15,1.15,0,0,0,1,1.8H26.8A1.15,1.15,0,0,0,27.8,23.2Z" fill="none" stroke="#636363" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                            <path id="Path_169" data-name="Path 169" d="M20,25a4,4,0,0,1-8,0" fill="none" stroke="#636363" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" />
                        </g>
                    </svg>
                </button>

                <div class="collapse" id="notilist">
                    <div class="shadow p-2">
                        <div class="toast bg-light mb-2" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
                            <div class="toast-header py-1 px-2 d-flex align-items-center border-bottom">
                                <strong class="">Notification title</strong>
                                <div class="ml-auto">
                                    <small class="text-muted">just now</small>
                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            </div>
                            <div class="toast-body p-2">
                                See? Just like this.
                            </div>
                        </div>

                        <div class="toast bg-light mb-2" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
                            <div class="toast-header py-1 px-2 d-flex align-items-center border-bottom">
                                <strong class="">Notification title</strong>
                                <div class="ml-auto">
                                    <small class="text-muted">just now</small>
                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                            </div>
                            <div class="toast-body p-2">
                                See? Just like this.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

