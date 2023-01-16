
<body class="m-0 p-0">

    <section class="LoginSection">
        <div class="row align-items-center">
            <div class="col-md-6 px-5 sh-desktop">
                <div class="d-block text-center mb-4 "><img src="<?= base_url('assets/customer/') ?>images/bikrimart-logo.png" alt=""></div>
            </div>
            <div class="col-md-6 p-0 p-lg-3">
                <div class=" text-center wlcm">
                    <div class=" pt-3 pb-2">
                        <a href="#">
                            <img src="<?= base_url('assets/customer/') ?>images/logo.png" alt="">
                        </a>
                    </div>
                    <small class="wedlvr mb-4 d-block">You Click. They Pack. We Deliver.</small>
                    <h2>Your name and Address</h2>
                    <div class="d-block text-dark text-left mt-3"><b>Personal Details</b></div>
                    <div class="input-group ">
                        <input type="text" class="form-control p-2 wedlvr h-100" placeholder="Name" id="user_name">
                    </div>
                    <div class="input-group mt-3">
                        <input type="email" class="form-control p-2 wedlvr h-100" placeholder="Email Address (Optional)" id="user_email">
                    </div>
                    <div class="d-block text-dark text-left mt-4"><b>Delivery Address</b></div>


                    <div class="bmcsingup mt-3">
                        <a href="<?=base_url('customer/address')?>">
                            <button class="btn graybtn rounded w-100 text-white" type="button"><b>Add Delivery Address</b></button>
                        </a>
                    </div>

                    <div class="bmcsingup mt-5">
                        <button class="btn grnbtn rounded w-100 text-white" type="button" id="btn_save_name" disabled>Next Step</button>
                    </div>

                </div>
            </div>
        </div>


    </section>
