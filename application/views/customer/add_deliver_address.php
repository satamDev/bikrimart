<style>
  #map{
    height: 75vh;
  }
</style>
<body class="m-0 p-0">

  <section class="LoginSection LoginSectionads">
    <div class="row align-items-center m-0">
      <div class="col-md-6 px-5 sh-desktop">
        <div class="d-block text-center mb-4 "><img src="<?=base_url('assets/customer/images/bikrimart-logo.png')?>" alt=""></div>
      </div>
      <div class="col-md-6 p-0 p-0">

        <div id="map">

          <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1461.339243991096!2d88.31775721877007!3d22.640961375301686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882c955555555%3A0x6c8e24dbe5187b2b!2sJagadishpur%2C%20Hat%2C%20Debir%20Para%2C%20Howrah%2C%20West%20Bengal%20711114!5e0!3m2!1sen!2sin!4v1652689445260!5m2!1sen!2sin" width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
            
        </div>

        <div class="pt-4 px-4">
          <div class="dlvryloc">SELECT DELIVERY LOCATIONS</div>

          <div class="d-flex align-items-center justify-content-between mt-3">
            <div class="adrsdtls">
              <div class="d-flex align-items-center mb-2">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="23px" fill="#FB641B" height="23px" viewBox="0 0 395.71 395.71" style="enable-background:new 0 0 395.71 395.71;" xml:space="preserve">
                  <g>
                    <path d="M197.849,0C122.131,0,60.531,61.609,60.531,137.329c0,72.887,124.591,243.177,129.896,250.388l4.951,6.738
                               c0.579,0.792,1.501,1.255,2.471,1.255c0.985,0,1.901-0.463,2.486-1.255l4.948-6.738c5.308-7.211,129.896-177.501,129.896-250.388
                               C335.179,61.609,273.569,0,197.849,0z M197.849,88.138c27.13,0,49.191,22.062,49.191,49.191c0,27.115-22.062,49.191-49.191,49.191
                               c-27.114,0-49.191-22.076-49.191-49.191C148.658,110.2,170.734,88.138,197.849,88.138z" />
                  </g>

                </svg>
                <h3 class="ml-2" id="text_main_address"></h3>
              </div>

              <div id="text_address"></div>
            </div>
            <button class="btn btnchng ml-3" data-toggle="collapse" data-target="#adrschng">Enter Manually</button>
          </div>
          <div class="collapse" id="adrschng">
            <div class="card card-body p-2 mt-3 row">
              <div class="form-group mb-2">
                <input type="text" class="form-control" placeholder="Enter Your Address" id="txt_address">
              </div>
              <div class="form-group mb-2">
                <input type="number" class="form-control" placeholder="Latitude" id="txt_lat" >
                <input type="number" class="form-control" placeholder="Longitude" id="txt_lng" >
              </div>
            </div>
          </div>
          <div class="bmcsingup mt-4">
            <button class="btn grnbtn rounded w-100 text-white" type="button" id="btn_add_deliver_address">Add Delivery Address</button>
            
          </div>
        </div>
      </div>
    </div>
  </section>














  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="js/slick.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html> -->