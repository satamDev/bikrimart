<style>
  #map{
    height:60vh;
  }
</style>
<body class="m-0 p-0">

  <section class="LoginSection LoginSectionads">
    <div class="row m-0 align-items-center">
      <div class="col-md-6 px-5 sh-desktop">
        <div class="d-block text-center mb-4 "><img src="<?= base_url('assets/customer/') ?>images/bikrimart-logo.png" alt=""></div>
      </div>
      <div class="col-md-6 p-0 ">
        <div>
          <div id="map">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1461.339243991096!2d88.31775721877007!3d22.640961375301686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882c955555555%3A0x6c8e24dbe5187b2b!2sNischinda%2C%20Sapuipara%2C%20Ghosh%20Para%2C%20Howrah%2C%20West%20Bengal%20711227!5e0!3m2!1sen!2sin!4v1652689445260!5m2!1sen!2sin" width="100%" height="280" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
          </div>

          <div class="pt-4 px-4">

            <div class="adrsdtls">
              <div class="d-flex align-items-center mb-2">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="18px" fill="#FB641B" height="18px" viewBox="0 0 395.71 395.71" style="enable-background:new 0 0 395.71 395.71;" xml:space="preserve">
                  <g>
                    <path d="M197.849,0C122.131,0,60.531,61.609,60.531,137.329c0,72.887,124.591,243.177,129.896,250.388l4.951,6.738
                               c0.579,0.792,1.501,1.255,2.471,1.255c0.985,0,1.901-0.463,2.486-1.255l4.948-6.738c5.308-7.211,129.896-177.501,129.896-250.388
                               C335.179,61.609,273.569,0,197.849,0z M197.849,88.138c27.13,0,49.191,22.062,49.191,49.191c0,27.115-22.062,49.191-49.191,49.191
                               c-27.114,0-49.191-22.076-49.191-49.191C148.658,110.2,170.734,88.138,197.849,88.138z" />
                  </g>

                </svg>
                <h3 class="ml-2" id="detail_main_address"></h3>
              </div>

              <div id="detail_deliver_address"></div>
            </div>

            <div class="alert alert-warning mt-3" role="alert">
              A detailed address will help our Delivery Partner reach your doorstep easily
            </div>

            <div class="mcchngadrs">
              <form id="form_detail_address">

                <div class="form-group">
                  <input type="text" class="form-control" placeholder="APARTMENT/ROAD/AREA" name="area" id="area">
                </div>

                <div class="form-group">
                  <input type="number" class="form-control" placeholder="ENTER PINCODE" name="pincode" id="pincode">
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" placeholder="HOUSE/FLAT/BLOCK NO. (OPTIONAL)" name="house_number" id="house">
                </div>
               
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="DIRECTIONS TO REACH (OPTIONAL)" name="direction" id="direction">
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="landmark" id="" rows="5" placeholder="e.g. Ring the bell on the red gate" id="landmark"></textarea>
                </div>

                <div class="form-group">
                  <div>SAVE THE ADDRESS AS</div>
                  <label class="sltcngadrs">
                    <input type="radio" id="Home" name="address_type" value="Home">
                    <span><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 26.39 26.39" width="15px" height="15px" style="enable-background:new 0 0 26.39 26.39;" xml:space="preserve">
                        <g>
                          <g id="c14_house">
                            <path d="M3.588,24.297c0,0-0.024,0.59,0.553,0.59c0.718,0,6.652-0.008,6.652-0.008l0.01-5.451c0,0-0.094-0.898,0.777-0.898h2.761
                                               c1.031,0,0.968,0.898,0.968,0.898l-0.012,5.434c0,0,5.628,0,6.512,0c0.732,0,0.699-0.734,0.699-0.734V14.076L13.33,5.913
                                               l-9.742,8.164C3.588,14.077,3.588,24.297,3.588,24.297z" />
                            <path d="M0,13.317c0,0,0.826,1.524,2.631,0l10.781-9.121l10.107,9.064c2.088,1.506,2.871,0,2.871,0L13.412,1.504L0,13.317z" />
                            <polygon points="23.273,4.175 20.674,4.175 20.685,7.328 23.273,9.525 		" />
                          </g>
                          <g id="Capa_1_216_">
                          </g>
                        </g>

                      </svg> Home</span>
                  </label>

                  <label class="sltcngadrs">
                    <input type="radio" id="Work" name="address_type" value="Work">
                    <span><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="15px" height="15px" viewBox="0 0 297 297" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 297 297">
                        <g>
                          <path d="m231,90.5v-82h-165v82h-66v198h297v-198h-66zm-132-49h99v49h-99v-49zm-16.167,115c-9.112,0-16.5-7.388-16.5-16.5s7.388-16.5 16.5-16.5c9.112,0 16.5,7.388 16.5,16.5s-7.388,16.5-16.5,16.5zm133,0c-9.112,0-16.5-7.388-16.5-16.5s7.388-16.5 16.5-16.5c9.112,0 16.5,7.388 16.5,16.5s-7.388,16.5-16.5,16.5z" />
                        </g>
                      </svg>
                      Work</span>
                  </label>

                  <label class="sltcngadrs">
                    <input type="radio" id="Other" name="address_type" value="Other">
                    <span><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="15px" height="15px" viewBox="0 0 395.71 395.71" style="enable-background:new 0 0 395.71 395.71;" xml:space="preserve">
                        <g>
                          <path d="M197.849,0C122.131,0,60.531,61.609,60.531,137.329c0,72.887,124.591,243.177,129.896,250.388l4.951,6.738
                                           c0.579,0.792,1.501,1.255,2.471,1.255c0.985,0,1.901-0.463,2.486-1.255l4.948-6.738c5.308-7.211,129.896-177.501,129.896-250.388
                                           C335.179,61.609,273.569,0,197.849,0z M197.849,88.138c27.13,0,49.191,22.062,49.191,49.191c0,27.115-22.062,49.191-49.191,49.191
                                           c-27.114,0-49.191-22.076-49.191-49.191C148.658,110.2,170.734,88.138,197.849,88.138z" />
                        </g>

                      </svg> Other</span>
                  </label>

                </div>
              </form>
            </div>

            <div class="cngbtn mt-4 mb-5 mb-lg-0">
              <button class="btn redbtn rounded w-100 text-white" type="submit" form="form_detail_address">Save Address</button>
            </div>
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