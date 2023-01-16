<div class="dashwrp">
    <div class="dashhdr">
        <div class="dashhdrinr">
            <div class="d-flex align-items-center">
                <button type="button" class="mnutog mr-3 d-md-none d-block">
                    <svg width="30" height="30" fill="#fff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 384.97 384.97" style="enable-background:new 0 0 384.97 384.97;" xml:space="preserve">
                        <path d="M12.03,84.212h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03
                                    C5.39,60.152,0,65.541,0,72.182C0,78.823,5.39,84.212,12.03,84.212z" />
                        <path d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03
                                    S379.58,180.455,372.939,180.455z" />
                        <path d="M372.939,300.758H12.03c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h360.909
                                    c6.641,0,12.03-5.39,12.03-12.03C384.97,306.147,379.58,300.758,372.939,300.758z" />
                    </svg>
                </button>
                <a href="" class="logo-round"><img src="<?= base_url() ?>assets/images/logo-round.svg" alt=""></a>
                <div class="ml-auto">
                    <div class="d-flex align-items-center">
                        <div class="swatch mr-3">
                            <input type="checkbox" checked id="cbx" />
                            <label for="cbx" class="toggle"><span></span></label>
                            <small>Live</small>
                        </div>
                        <button type="button" class="notfbtn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="26.534" height="30.142" viewBox="0 0 26.534 30.142">
                                <g id="Layer_2" data-name="Layer 2" transform="translate(0.014 0.014)">
                                    <g id="Bell" transform="translate(-0.014 -0.014)">
                                        <path id="Path_4" data-name="Path 4" d="M20.629,41v.6a1.808,1.808,0,0,1-3.616,0V41H14v.6a4.821,4.821,0,1,0,9.643,0V41Z" transform="translate(-5.554 -16.282)" fill="#fff" />
                                        <path id="Path_5" data-name="Path 5" d="M24.921,21.691A1.422,1.422,0,0,1,23.5,20.268V13.253A10.245,10.245,0,0,0,14.76,3.128V1.586A1.567,1.567,0,0,0,13.41-.005,1.507,1.507,0,0,0,11.747,1.5V3.128A10.245,10.245,0,0,0,3.008,13.253v7.015a1.422,1.422,0,0,1-1.422,1.422,1.567,1.567,0,0,0-1.591,1.35A1.507,1.507,0,0,0,1.5,24.7h23.5a1.507,1.507,0,0,0,1.507-1.663A1.567,1.567,0,0,0,24.921,21.691Zm-18.9,0V13.464a7.383,7.383,0,0,1,6.533-7.413,7.232,7.232,0,0,1,7.931,7.2v8.437Z" transform="translate(0.014 0.014)" fill="#fff" />
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <nav class="nav">
            <div class="menu-main-menu-container">
                <div class="d-lg-none">
                    <div class="dashhdrinr">
                        <div class="d-flex align-items-center">
                            <a href="" class="logo-store"><img src="<?= base_url() ?>assets/images/store.svg" alt=""></a>
                            <div class="pl-3">
                                <h5 class="text-white">Swarup Roy</h5>
                                <small class="text-white d-block">swarup@v-xplore.com</small>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="primary-menu mnuaccordion" id="mnuaccordion">
                    <li>
                        <a href="<?=base_url('vendor/dashboard')?>">
                            <i><img src="<?= base_url() ?>assets/images/Business-Dashboard.svg" alt=""></i>
                            Business Dashboard
                        </a>
                    </li>
                    <li>
                        <a class="collapsed hassub mob-v" data-toggle="collapse" data-parent="#mnuaccordion" href="<?=base_url('Vendor/view_orders')?>">
                            <i><img src="<?= base_url() ?>assets/images/Orders.svg" alt=""></i>
                            Orders
                        </a>


                        <a class="desk-v" href="<?=base_url('Vendor/view_orders')?>">
                            <div class="d-flex align-items-center">
                                <i><img src="<?= base_url() ?>assets/images/Orders.svg" alt=""></i>
                                Orders
                                <span class="ml-auto collapsed arwsub" data-toggle="collapse" data-parent="#mnuaccordion" href="#hassuborder">
                                    <img src="<?= base_url() ?>assets/images/down-arw.svg" alt="" width="20">
                                </span>
                            </div>
                        </a>
                        <div id="hassuborder" class="submenu collapse" data-parent="#mnuaccordion">
                            <ul>
                                <li>
                                    <a href="" data-toggle="modal" data-target="#neworder" class="mob-v">
                                        <i><img src="<?= base_url() ?>assets/images/New-Order.svg" alt=""></i>
                                        New Order
                                    </a>
                                    <a href="<?=base_url('Vendor/view_new_orders')?>" class="desk-v">
                                        <i><img src="<?= base_url() ?>assets/images/New-Order.svg" alt=""></i>
                                        New Order
                                    </a>
                                </li>
                                <li>
                                    <a href="" data-toggle="modal" data-target="#completeorder" class="mob-v">
                                        <i><img src="<?= base_url() ?>assets/images/Completed-Order.svg" alt=""></i>
                                        Completed
                                    </a>
                                    <a href="<?=base_url('Vendor/view_completed_orders')?>" class="desk-v">
                                        <i><img src="<?= base_url() ?>assets/images/Completed-Order.svg" alt=""></i>
                                        Completed
                                    </a>
                                </li>
                                <li>
                                    <a href="" data-toggle="modal" data-target="#cancelorder" class="mob-v">
                                        <i><img src="<?= base_url() ?>assets/images/Cancelled-Order.svg" alt=""></i>
                                        Cancelled
                                    </a>
                                    <a href="<?=base_url('Vendor/view_cancelled_orders')?>" class="desk-v">
                                        <i><img src="<?= base_url() ?>assets/images/Cancelled-Order.svg" alt=""></i>
                                        Cancelled
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="" data-toggle="modal" data-target="#inventory" class="mob-v">
                            <i><img src="<?= base_url() ?>assets/images/Inventory-Management.svg" alt=""></i>
                            Inventory
                        </a>
                        <a href="<?=base_url('vendor/inventory')?>" class="desk-v">
                            <i><img src="<?= base_url() ?>assets/images/Inventory-Management.svg" alt=""></i>
                            Inventory
                        </a>
                    </li>
                    <li>
                        <a href="" data-toggle="modal" data-target="#StoreSettings" class="mob-v">
                            <i><img src="<?= base_url() ?>assets/images/Settings.svg" alt=""></i>
                            Store Setting
                        </a>
                        <a href="<?=base_url('vendor/store')?>" class="desk-v">
                            <i><img src="<?= base_url() ?>assets/images/Settings.svg" alt=""></i>
                            Store Setting
                        </a>
                    </li>
                    <li>
                        <a href="" data-toggle="modal" data-target="#addprod" class="mob-v">
                            <i><img src="<?= base_url() ?>assets/images/Add-Products-Express.svg" alt=""></i>
                            Add Products (Express)
                        </a>
                        <a href="<?=base_url('vendor/product/express')?>" class="desk-v">
                            <i><img src="<?= base_url() ?>assets/images/Add-Products-Express.svg" alt=""></i>
                            Add Products (Express)
                        </a>
                    </li>
                    <li>
                        <a href="" data-toggle="modal" data-target="#addprodcat2" class="mob-v">
                            <i><img src="<?= base_url() ?>assets/images/Add-Products.svg" alt=""></i>
                            Add Products
                        </a>
                        <a href="<?=base_url('vendor/product/add')?>" class="desk-v">
                            <i><img src="<?= base_url() ?>assets/images/Add-Products.svg" alt=""></i>
                            Add Products
                        </a>
                    </li>
                    <li>
                        <a href="" data-toggle="modal" data-target="#productlst" class="mob-v">
                            <i><img src="<?= base_url() ?>assets/images/Products.svg" alt=""></i>
                            Products List
                        </a>
                        <a href="<?=base_url('vendor/product/list')?>" class="desk-v">
                            <i><img src="<?= base_url() ?>assets/images/Products.svg" alt=""></i>
                            Products List
                        </a>
                    </li>
                    <!--
                    <li>
                        <a href="" data-toggle="modal" data-target="#addprodcat" class="mob-v">
                            <i><img src="<?= base_url() ?>assets/images/Categories.svg" alt=""></i>
                            Categories
                        </a>
                        <a href="categories.html" class="desk-v">
                            <i><img src="<?= base_url() ?>assets/images/Categories.svg" alt=""></i>
                            Categories
                        </a>
                    </li>
                    <li>
                        <a class="collapsed hassub mob-v" data-toggle="collapse" data-parent="#mnuaccordion" href="#hassubpromotions">
                            <i><img src="<?= base_url() ?>assets/images/Promotions.svg" alt=""></i>
                            Promotions
                        </a>
                        <a class="desk-v" href="promotions.html">
                            <div class="d-flex align-items-center">
                                <i><img src="<?= base_url() ?>assets/images/Promotions.svg" alt=""></i>
                                Promotions
                                <span class="ml-auto collapsed arwsub" data-toggle="collapse" data-parent="#mnuaccordion" href="#hassubpromotions">
                                    <img src="<?= base_url() ?>assets/images/down-arw.svg" alt="" width="20">
                                </span>
                            </div>
                        </a>
                        <div id="hassubpromotions" class="submenu collapse" data-parent="#mnuaccordion">
                            <ul>
                                <li>
                                    <a href="" data-toggle="modal" data-target="#promCashback" class="mob-v">
                                        <i><img src="<?= base_url() ?>assets/images/Cashback.svg" alt=""></i>
                                        Cashback
                                    </a>
                                    <a href="cashback.html" class="desk-v">
                                        <i><img src="<?= base_url() ?>assets/images/Cashback.svg" alt=""></i>
                                        Cashback
                                    </a>
                                </li>
                                <li>
                                    <a href="" data-toggle="modal" data-target="#promScratch" class="mob-v">
                                        <i><img src="<?= base_url() ?>assets/images/Scratch-Card.svg" alt=""></i>
                                        Scratch Card
                                    </a>
                                    <a href="scratch-card.html" class="desk-v">
                                        <i><img src="<?= base_url() ?>assets/images/Scratch-Card.svg" alt=""></i>
                                        Scratch Card
                                    </a>
                                </li>
                                <li>
                                    <a href="" data-toggle="modal" data-target="#promOffers" class="mob-v">
                                        <i><img src="<?= base_url() ?>assets/images/Offers.svg" alt=""></i>
                                        Offers
                                    </a>
                                    <a href="offers.html" class="desk-v">
                                        <i><img src="<?= base_url() ?>assets/images/Offers.svg" alt=""></i>
                                        Offers
                                    </a>
                                </li>
                                <li>
                                    <a href="" data-toggle="modal" data-target="#OfferAnnounce" class="mob-v">
                                        <i><img src="<?= base_url() ?>assets/images/announcement.svg" alt=""></i>
                                        Offer Announcement
                                    </a>
                                    <a href="offer-announcement.html" class="desk-v">
                                        <i><img src="<?= base_url() ?>assets/images/announcement.svg" alt=""></i>
                                        Offer Announcement
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="customers.html">
                            <i><img src="<?= base_url() ?>assets/images/Customers.svg" alt=""></i>
                            Customers
                        </a>
                    </li>
                    <li>
                        <a href="" data-toggle="modal" data-target="#salepop" class="mob-v">
                            <i><img src="<?= base_url() ?>assets/images/Sale.svg" alt=""></i>
                            Sale
                        </a>
                        <a href="sale.html" class="desk-v">
                            <i><img src="<?= base_url() ?>assets/images/Sale.svg" alt=""></i>
                            Sale
                        </a>
                    </li>
                    <li>
                        <a href="purchase.html">
                            <i><img src="<?= base_url() ?>assets/images/Purchase.svg" alt=""></i>
                            Purchase
                        </a>
                    </li>
                    <li>
                        <a href="" data-toggle="modal" data-target="#expensepop" class="mob-v">
                            <i><img src="<?= base_url() ?>assets/images/Expenses.svg" alt=""></i>
                            Expenses
                        </a>
                        <a href="expenses.html" class="desk-v">
                            <i><img src="<?= base_url() ?>assets/images/Expenses.svg" alt=""></i>
                            Expenses
                        </a>
                    </li>
                    <li>
                        <a href="reports.html">
                            <i><img src="<?= base_url() ?>assets/images/Reports.svg" alt=""></i>
                            Reports
                        </a>
                    </li>
                    <li>
                        <a href="chats.html">
                            <i><img src="<?= base_url() ?>assets/images/Chats.svg" alt=""></i>
                            Chats
                        </a>
                    </li>
                    <li>
                        <a href="subscription.html">
                            <i><img src="<?= base_url() ?>assets/images/Subscription.svg" alt=""></i>
                            Subscription
                        </a>
                    </li>
                    <li>
                        <a href="support.html">
                            <i><img src="<?= base_url() ?>assets/images/Support.svg" alt=""></i>
                            Support
                        </a>
                    </li>
                    <li>
                        <a href="share-earn.html">
                            <i><img src="<?= base_url() ?>assets/images/Share-Earn.svg" alt=""></i>
                            Share & Earn
                        </a>
                    </li>
                    <li>
                        <a href="rate.html">
                            <i><img src="<?= base_url() ?>assets/images/Rate.svg" alt=""></i>
                            Rate
                        </a>
                    </li>
                    <li>
                        <a href="settings.html">
                            <i><img src="<?= base_url() ?>assets/images/Settings.svg" alt=""></i>
                            Settings
                        </a>
                    </li>
                    -->
                    <li>
                        <a href="<?=base_url('Vendor/logout')?>">
                            <i><img src="<?= base_url() ?>assets/images/Settings.svg" alt=""></i>
                            Logout
                        </a>
                    </li>
                
                </ul>
            </div>
            <div class="mnucls"></div>
        </nav>
    </div>