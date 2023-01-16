<body>
    <!-- =============================== FOR DESKTOP VIEW START ================================== -->
    <div class="Showdesktop">
        <section class="registersec">
            <div class="container container-xl">
                <div class="row flex-lg-row-reverse align-items-center">
                    <div class="col-lg-6 cudtomlftpdng">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="loginbox ">
                                <!-- otp -->
                                <div id="otpbox" class="text-center">
                                    <div class="progress" style="height:4px;  background:#fff; border-radius: 0;">
                                        <div class="progress-bar" style="width:0%; height:4px;  background:#2FC99A; border-radius: 0;"></div>
                                    </div>
                                    <div class="px-2 px-lg-4 py-4">
                                        <h5 class="mb-3">Enter OTP you received on mobile</h5>
                                        <!-- <p>One OTP has been sent, to your Mobile Number</p> -->
                                        <small>Verify your OTP</small>
                                        <form class="mt-3 otpboxdesign text-center">
                                            <input class="otp" id="otp_1" type="text" onkeyup="tabChange(1)" maxlength="1" required>
                                            <input class="otp" id="otp_2" type="text" onkeyup="tabChange(2)" maxlength="1" required>
                                            <input class="otp" id="otp_3" type="text" onkeyup="tabChange(3)" maxlength="1" required>
                                            <input class="otp" id="otp_4" type="text" onkeyup="tabChange(4)" maxlength="1" required>
                                        </form>
                                        <div class="mb-3 mt-4">
                                            <button class="btn1 dsbl1" id="btn_verify_otp" disabled>Verify Otp</button>
                                        </div>
                                        <small class="d-block"><a href="" id="btn_send_otp">Resend OTP</a></small>
                                    </div>
                                </div>
                                <!-- otp -->
                                <!-- Lamguage -->
                                <div id="SelectLanguage" class="text-center" style="display:none;">
                                    <div class="progress" style="height:4px;  background:#fff; border-radius: 0;">
                                        <div class="progress-bar" style="width:35%; height:4px;  background:#2FC99A; border-radius: 0;"></div>
                                    </div>
                                    <div class="px-2 px-lg-4 py-4">
                                        <h5 class="mb-3">Select your Language</h5>
                                        <div class="frm">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="radiobtn">
                                                            <input type="radio" class="radio" name="language" value="en">
                                                            <em>EN</em>
                                                            <span>English</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="radiobtn">
                                                            <input type="radio" class="radio" name="language" value="hi">
                                                            <em>हिं</em>
                                                            <span>हिंदी</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="radiobtn">
                                                            <input type="radio" class="radio" name="language" value="bn">
                                                            <em>বা</em>
                                                            <span>বাংলা</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="radiobtn">
                                                            <input type="radio" class="radio" name="language">
                                                            <em>বা</em>
                                                            <span>Marathi</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="radiobtn">
                                                            <input type="radio" class="radio" name="language">
                                                            <em>EN</em>
                                                            <span>Telugu</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="radiobtn">
                                                            <input type="radio" class="radio" name="language">
                                                            <em>বা</em>
                                                            <span>Tamil</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="radiobtn">
                                                            <input type="radio" class="radio" name="language">
                                                            <em>EN</em>
                                                            <span>Gujarati</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="radiobtn">
                                                            <input type="radio" class="radio" name="language">
                                                            <em>বা</em>
                                                            <span>Odia</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 mt-4">
                                            <button class="btn1 dsbl1 LanguageSelected" id="btn_language" disabled>Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- work as section start -->
                                <div id="workas" class="text-center" style="display:none;">
                                    <div class="progress" style="height:4px;  background:#fff; border-radius: 0;">
                                        <div class="progress-bar" style="width:70%; height:4px;  background:#2FC99A; border-radius: 0;"></div>
                                    </div>
                                    <div class="px-2 px-lg-4 py-4">
                                        <h5 class="mb-3">What do you work as?</h5>
                                        <div class="workasfrm">
                                            <div class="row workasfrmrow">
                                                <div class="col-6 px-lg-2">
                                                    <div class="form-group">
                                                        <label class="wrkradiobtn">
                                                            <input type="radio" class="radio bussiness_type" value="BmFruitsVegetable" name="sltcatagres">
                                                            <div><svg xmlns="http://www.w3.org/2000/svg" width="78.745" height="91.163" viewBox="0 0 78.745 91.163">
                                                                    <g id="apple-svgrepo-com" transform="translate(-27.334)">
                                                                        <g id="Group_37" data-name="Group 37" transform="translate(27.334)">
                                                                            <path id="Path_229" data-name="Path 229" d="M276.687,177.005a2.272,2.272,0,1,0-2.927,3.475c6.013,5.065,6.2,14.012.464,22.264a2.272,2.272,0,0,0,3.731,2.593,25.352,25.352,0,0,0,4.956-15.4A17.6,17.6,0,0,0,276.687,177.005Z" transform="translate(-217.161 -136.387)" />
                                                                            <path id="Path_230" data-name="Path 230" d="M98.511,116.689a16.727,16.727,0,0,0-12.322-5.253c-4.392,0-8.615,1.491-12.34,2.807-2.688.949-5.229,1.847-7.143,1.906-1.913-.06-4.455-.957-7.143-1.906-3.726-1.316-7.949-2.807-12.341-2.807A16.728,16.728,0,0,0,34.9,116.689c-11.182,11.183-7.308,23.624-4.993,31.058l.119.385c2.126,6.839,10.107,29.155,23.557,29.155,7.168,0,9.584-1.245,11.348-2.154a3.776,3.776,0,0,1,1.78-.6,4.63,4.63,0,0,1,2.076.661c1.812.884,4.295,2.094,11.04,2.094,13.451,0,21.431-22.315,23.557-29.155l.119-.384C105.82,140.315,109.695,127.872,98.511,116.689Zm.656,29.709-.12.386A74.729,74.729,0,0,1,91.5,163.633c-2.657,4.157-6.839,9.111-11.672,9.111-5.7,0-7.555-.906-9.05-1.634a8.833,8.833,0,0,0-4.006-1.12l-.063,0-.063,0a8.058,8.058,0,0,0-3.795,1.105c-1.426.735-3.2,1.65-9.267,1.65-4.832,0-9.015-4.954-11.672-9.111a74.679,74.679,0,0,1-7.547-16.849l-.121-.387c-2.14-6.871-5.373-17.253,3.868-26.495a12.233,12.233,0,0,1,9.109-3.923c3.613,0,7.281,1.3,10.827,2.548,3.065,1.082,5.96,2.1,8.6,2.166h.106c2.644-.062,5.538-1.084,8.6-2.166,3.546-1.253,7.214-2.548,10.827-2.548A12.233,12.233,0,0,1,95.3,119.9C104.541,129.143,101.307,139.526,99.167,146.4Z" transform="translate(-27.334 -86.124)" />
                                                                            <path id="Path_231" data-name="Path 231" d="M196.864,26.343h0a21.073,21.073,0,0,0,14.094-6.127c5.919-5.92,7.677-15.739,4.668-18.748A6.412,6.412,0,0,0,210.961,0a21.065,21.065,0,0,0-14.083,6.136,21.833,21.833,0,0,0-5.729,10.241c-.9,3.766-.5,6.946,1.062,8.508A6.4,6.4,0,0,0,196.864,26.343Zm-1.2-9.286a17.366,17.366,0,0,1,4.429-7.709,16.544,16.544,0,0,1,10.87-4.805c.729,0,1.243,0,1.413.166,1.192,1.167-.164,7.832-4.627,12.3a16.553,16.553,0,0,1-10.882,4.8,2.929,2.929,0,0,1-1.446-.176C195.013,21.245,195.015,19.5,195.662,17.057Z" transform="translate(-153.575)" />
                                                                        </g>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <span>Fruits & Vegetable</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6 px-lg-2">
                                                    <div class="form-group">
                                                        <label class="wrkradiobtn">
                                                            <input type="radio" class="radio bussiness_type" value="BmRetailStore" name="sltcatagres">
                                                            <div><svg xmlns="http://www.w3.org/2000/svg" width="72.696" height="88.916" viewBox="0 0 72.696 88.916">
                                                                    <path id="bag-svgrepo-com_6_" data-name="bag-svgrepo-com (6)" d="M116.5,82.682l-7.718-58.658a6.58,6.58,0,0,0-2.233-4.088l-9.12-9.12a1.942,1.942,0,0,0-1.373-.569H93.2a13.374,13.374,0,0,0-26.006,0H64.339a1.942,1.942,0,0,0-1.373.569l-9.19,9.19a6.573,6.573,0,0,0-2.155,4.018L43.9,82.682a5.428,5.428,0,0,0,5.467,6.234h61.661a5.428,5.428,0,0,0,5.467-6.234ZM99.417,18.3H93.576V14.131h1.675ZM80.2,3.884a9.5,9.5,0,0,1,9.493,9.493V18.3H70.707v-4.92A9.5,9.5,0,0,1,80.2,3.884ZM65.143,14.131h1.68V18.3H60.977Zm-9.672,10.4a2.856,2.856,0,0,1,2.68-2.35h8.671v7.089a1.942,1.942,0,1,0,3.884,0V22.18H89.692v7.089a1.942,1.942,0,1,0,3.884,0V22.18h8.675a2.733,2.733,0,0,1,1.819.769l.014.014.015.014a2.679,2.679,0,0,1,.831,1.553l6.451,49.03H49.02Zm56.822,59.976a1.639,1.639,0,0,1-1.261.525H49.371a1.55,1.55,0,0,1-1.617-1.844l.756-5.744h63.384l.756,5.744A1.64,1.64,0,0,1,112.293,84.507Z" transform="translate(-43.853)" />
                                                                </svg>
                                                            </div>
                                                            <span>Retail Store</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6 px-lg-2">
                                                    <div class="form-group">
                                                        <label class="wrkradiobtn">
                                                            <input type="radio" class="radio bussiness_type" value="BmRestaurant" name="sltcatagres" id="Restaurant">
                                                            <div><svg id="_18395208121586787144" data-name="18395208121586787144" xmlns="http://www.w3.org/2000/svg" width="95.084" height="95.084" viewBox="0 0 95.084 95.084">
                                                                    <path id="Path_180" data-name="Path 180" d="M40.285,17A22.285,22.285,0,1,0,62.57,39.286,22.311,22.311,0,0,0,40.285,17Zm0,41.6A19.314,19.314,0,1,1,59.6,39.286,19.336,19.336,0,0,1,40.285,58.6Z" transform="translate(8.742 8.257)" />
                                                                    <path id="Path_181" data-name="Path 181" d="M43.685,10A32.685,32.685,0,1,0,76.37,42.686,32.722,32.722,0,0,0,43.685,10Zm0,62.4A29.714,29.714,0,1,1,73.4,42.686,29.747,29.747,0,0,1,43.685,72.4Z" transform="translate(5.342 4.857)" />
                                                                    <path id="Path_182" data-name="Path 182" d="M66.4,0a4.932,4.932,0,0,0-4.861,4.216L56.016,42.875a1.489,1.489,0,0,0,.417,1.258l2.538,2.548V90.626a4.457,4.457,0,1,0,8.914,0V1.485A1.485,1.485,0,0,0,66.4,0ZM64.914,90.628a1.486,1.486,0,0,1-2.971,0V46.068a1.486,1.486,0,0,0-.434-1.049L59.06,42.56,64.477,4.636a1.929,1.929,0,0,1,.435-.969v86.96Z" transform="translate(27.199 0)" />
                                                                    <path id="Path_183" data-name="Path 183" d="M20.8,21.935V1.487A1.486,1.486,0,0,0,17.879,1.1L14.356,14.188l-2.5-12.982a1.486,1.486,0,0,0-2.918,0l-2.5,12.982L2.919,1.1A1.485,1.485,0,0,0,0,1.487V21.936a6.824,6.824,0,0,0,3.793,6.137,3.866,3.866,0,0,1,2.15,3.478V90.469a4.579,4.579,0,0,0,3.719,4.555,4.5,4.5,0,0,0,.731.059,4.456,4.456,0,0,0,4.464-4.456V31.551a3.87,3.87,0,0,1,2.15-3.479A6.824,6.824,0,0,0,20.8,21.935Zm-5.121,3.479a6.824,6.824,0,0,0-3.793,6.137V90.628a1.478,1.478,0,0,1-.524,1.132,1.5,1.5,0,0,1-1.223.333,1.613,1.613,0,0,1-1.224-1.624V31.551a6.824,6.824,0,0,0-3.793-6.137,3.87,3.87,0,0,1-2.15-3.479V12.72L5.25,21.187a1.485,1.485,0,0,0,2.893-.105L10.4,9.354l2.255,11.728a1.487,1.487,0,0,0,1.4,1.2,1.5,1.5,0,0,0,1.489-1.1l2.281-8.467v9.216A3.87,3.87,0,0,1,15.678,25.414Z" transform="translate(0 0)" />
                                                                    <rect id="Rectangle_158" data-name="Rectangle 158" width="3.084" height="3.084" transform="translate(46.256 54.479)" />
                                                                    <rect id="Rectangle_159" data-name="Rectangle 159" width="2.056" height="3.084" transform="translate(52.423 54.479)" />
                                                                    <rect id="Rectangle_160" data-name="Rectangle 160" width="3.084" height="3.084" transform="translate(57.563 54.479)" />
                                                                </svg>
                                                            </div>
                                                            <span>Restaurant</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-6 px-lg-2">
                                                    <div class="form-group">
                                                        <label class="wrkradiobtn">
                                                            <input type="radio" class="radio bussiness_type" value="BmService" name="sltcatagres">
                                                            <div><svg xmlns="http://www.w3.org/2000/svg" width="93.406" height="93.406" viewBox="0 0 93.406 93.406">
                                                                    <g id="suitcase-svgrepo-com_1_" data-name="suitcase-svgrepo-com (1)" transform="translate(-11 -11)">
                                                                        <path id="Path_232" data-name="Path 232" d="M96.457,21.923H75.584V18.549A7.381,7.381,0,0,0,68.226,11H46.971a7.5,7.5,0,0,0-7.358,7.549v3.374H18.949A7.981,7.981,0,0,0,11,29.872V96.457a7.981,7.981,0,0,0,7.949,7.949H96.457a7.981,7.981,0,0,0,7.949-7.949V29.872A7.981,7.981,0,0,0,96.457,21.923ZM43.6,18.549a3.568,3.568,0,0,1,3.584-3.584H68.245a3.568,3.568,0,0,1,3.584,3.584v3.374H43.6V18.549ZM18.949,25.907H96.457a4,4,0,0,1,3.984,3.984V48.458L67.673,67.844a10.517,10.517,0,0,0-19.939.038L14.984,48.439V29.872a3.974,3.974,0,0,1,3.965-3.965ZM64.261,71.218A6.56,6.56,0,1,1,57.7,64.47,6.649,6.649,0,0,1,64.261,71.218Zm32.2,29.2H18.949a4,4,0,0,1-3.984-3.984V53.052L47.219,72.191a10.526,10.526,0,0,0,20.969-.038l32.235-19.082V96.457A3.962,3.962,0,0,1,96.457,100.422Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <span>Service</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 mt-4 BmFruitsVegetable btnset">
                                            <button id="BmFruitsVegetableselected" class="btn1 cmnbtn dsbl1" disabled>Next</button>
                                        </div>
                                        <div class="mb-3 mt-4 BmRetailStore btnset" style="display:none;">
                                            <button id="workasSelected" class="btn1 cmnbtn dsbl1" disabled>Next</button>
                                        </div>
                                        <div class="mb-3 mt-4 BmRestaurant btnset" style="display:none;">
                                            <button id="BmRestaurantselected" class="btn1 cmnbtn dsbl1" disabled>Next </button>
                                        </div>
                                        <div class="mb-3 mt-4 BmService btnset" style="display:none;">
                                            <button id="BmServiceselected" class="btn1 cmnbtn dsbl1" disabled>Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Retail store category select start -->
                                <div id="whatduusell" class="text-center" style="display:none;">
                                    <div class="progress" style="height:4px;  background:#fff; border-radius: 0;">
                                        <div class="progress-bar" style="width:100%; height:4px;  background:#2FC99A; border-radius: 0;"></div>
                                    </div>
                                    <div class="px-2 px-lg-4 py-4">
                                        <h5 class="mb-3">What do you sell?</h5>
                                        <div class="row row5">
                                            <div class="col-6">
                                                <div class="bustype shadow-sm mb-2">
                                                    <label class="d-flex align-items-center w-100 radio3style">
                                                        <input type="checkbox" name="Kirana" value="Kirana" class="bussiness_category" id="category_kirana">
                                                        <em></em>
                                                        <i>
                                                            <img src="<?= base_url() ?>assets/images/buscat1.png" alt="" width="30">
                                                        </i>
                                                        <span>Kirana</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bustype shadow-sm mb-2">
                                                    <label class="d-flex align-items-center w-100 radio3style">
                                                        <input type="checkbox" name="Medical" value="Medical" class="bussiness_category" id="category_medical">
                                                        <em></em>
                                                        <i>
                                                            <img src="<?= base_url() ?>assets/images/buscat2.png" alt="" width="30">
                                                        </i>
                                                        <span>Medical</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bustype shadow-sm mb-2">
                                                    <label class="d-flex align-items-center w-100 radio3style">
                                                        <input type="checkbox" name="Apparel" value="Apparel" class="bussiness_category" id="category_apparel">
                                                        <em></em>
                                                        <i>
                                                            <img src="<?= base_url() ?>assets/images/buscat3.png" alt="" width="30">
                                                        </i>
                                                        <span>Apparel</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bustype shadow-sm mb-2">
                                                    <label class="d-flex align-items-center w-100 radio3style">
                                                        <input type="checkbox" name="Electronics" value="Electronics" class="bussiness_category" id="category_electronics">
                                                        <em></em>
                                                        <i>
                                                            <img src="<?= base_url() ?>assets/images/buscat4.png" alt="" width="30">
                                                        </i>
                                                        <span>Electronics</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bustype shadow-sm mb-2">
                                                    <label class="d-flex align-items-center w-100 radio3style">
                                                        <input type="checkbox" name="Insurance" value="Insurance" class="bussiness_category" id="category_insurance">
                                                        <em></em>
                                                        <i>
                                                            <img src="<?= base_url() ?>assets/images/buscat5.png" alt="" width="30">
                                                        </i>
                                                        <span>Insurance</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bustype shadow-sm mb-2">
                                                    <label class="d-flex align-items-center w-100 radio3style">
                                                        <input type="checkbox" name="Digital" value="Digital" class="bussiness_category" id="category_digital">
                                                        <em></em>
                                                        <i>
                                                            <img src="<?= base_url() ?>assets/images/buscat6.png" alt="" width="30">
                                                        </i>
                                                        <span>Digital</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bustype shadow-sm mb-2">
                                                    <label class="d-flex align-items-center w-100 radio3style">
                                                        <input type="checkbox" name="Agriculture" value="Agriculture" class="bussiness_category" id="category_agriculture">
                                                        <em></em>
                                                        <i>
                                                            <img src="<?= base_url() ?>assets/images/buscat7.png" alt="" width="30">
                                                        </i>
                                                        <span>Agriculture</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bustype shadow-sm mb-2">
                                                    <label class="d-flex align-items-center w-100 radio3style">
                                                        <input type="checkbox" name="Education" value="Education" class="bussiness_category" id="category_education">
                                                        <em></em>
                                                        <i>
                                                            <img src="<?= base_url() ?>assets/images/buscat8.png" alt="" width="30">
                                                        </i>
                                                        <span>Education</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bustype shadow-sm mb-2">
                                                    <label class="d-flex align-items-center w-100 radio3style">
                                                        <input type="checkbox" name="Computer" value="Computer" class="bussiness_category" id="category_computer">
                                                        <em></em>
                                                        <i>
                                                            <img src="<?= base_url() ?>assets/images/buscat9.png" alt="" width="30">
                                                        </i>
                                                        <span>Computer</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bustype shadow-sm mb-2">
                                                    <label class="d-flex align-items-center w-100 radio3style">
                                                        <input type="checkbox" name="Tour-Travel" value="Tour-Travel" class="bussiness_category" id="category_travel">
                                                        <em></em>
                                                        <i>
                                                            <img src="<?= base_url() ?>assets/images/buscat10.png" alt="" width="30">
                                                        </i>
                                                        <span>Tour &amp; Travel</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="bustype shadow-sm mb-2">
                                                    <label class="d-flex align-items-center w-100 radio3style">
                                                        <input type="checkbox" name="Others" value="Others" class="bussiness_category" id="category_others">
                                                        <em></em>
                                                        <i>
                                                            <img src="<?= base_url() ?>assets/images/buscat11.png" alt="" width="30">
                                                        </i>
                                                        <span>Others</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 mt-4"><button id="whatduusellSelected" class="btn1">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- ======================================= Retail store ====================================== -->
                                <div id="profilesetep1" style="display:none;">
                                    <div class="bg-light">
                                        <div class="proavatersec pt-3 pb-3">
                                            <div class="proavaterwrp">
                                                <div class="proavater">
                                                    <img id="imgPreview" src="<?= base_url() ?>assets/images/avater.jpg" alt="pic" class="imgPreview3">
                                                    <input type="file" form="form_bank_details" name="profile_image" id="profile_image" class="photo3">
                                                </div>
                                                <div class="cameraico">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 41 41">
                                                        <g id="Group_9" data-name="Group 9" transform="translate(-218 -128)">
                                                            <circle id="Ellipse_25" data-name="Ellipse 25" cx="20.5" cy="20.5" r="20.5" transform="translate(218 128)" fill="#8a8a8a"></circle>
                                                            <g id="Layer_5" data-name="Layer 5" transform="translate(226.593 133.914)">
                                                                <path id="Path_87" data-name="Path 87" d="M15.87,15.577a3.633,3.633,0,1,1-3.633-3.633A3.633,3.633,0,0,1,15.87,15.577Zm5.944-5.614V21.191a1.981,1.981,0,0,1-1.981,1.981H3.981A1.981,1.981,0,0,1,2,21.191V9.963A1.981,1.981,0,0,1,3.981,7.981H19.832A1.981,1.981,0,0,1,21.814,9.963ZM6.623,11.284A1.321,1.321,0,1,0,5.3,12.6,1.321,1.321,0,0,0,6.623,11.284Zm10.567,4.293a4.953,4.953,0,1,0-4.953,4.953,4.953,4.953,0,0,0,4.953-4.953ZM15.539,6.66a.66.66,0,0,0-.66-.66H8.935a.66.66,0,0,0,0,1.321h5.944A.66.66,0,0,0,15.539,6.66Z" fill="#fff"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <small class="text-center d-block mt-2">Add Photo</small>
                                        </div>
                                        <div id="profilestpOn" class="profilestepOne">
                                            <div class="profileprogresswrp pb-2  mb-4">
                                                <div class="profileprogress mb-2">
                                                    <div class="active" style="width: 20%;"></div>
                                                </div>
                                                <div class="text-left px-4"> <small>Profile Completed</small></div>
                                            </div>
                                            <div class="profilesection bg-white text-left p-4">
                                                <h5>Personal Info</h5>
                                                <div class="form-group mb-3">
                                                    <label>Your Name</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18.48" height="19.367" viewBox="0 0 18.48 19.367">
                                                                    <g id="user-svgrepo-com_13_" data-name="user-svgrepo-com (13)" transform="translate(-11.2)">
                                                                        <path id="Path_233" data-name="Path 233" d="M29.68,18.016v-1.03a3.44,3.44,0,0,0-1.311-2.7,29.662,29.662,0,0,0-4.536-2.86V10.252a5.7,5.7,0,0,0,.341-1.01c.507-.182.784-.927.971-1.585.25-.875.222-1.489-.071-1.83.309-1.684.17-2.924-.408-3.688a1.814,1.814,0,0,0-.9-.646,3.318,3.318,0,0,0-1.1-.959A3.9,3.9,0,0,0,20.644,0c-.135,0-.269.008-.388.016A3.708,3.708,0,0,0,19.269.2s-.008,0-.012,0a4.388,4.388,0,0,0-1.042.531,5.492,5.492,0,0,0-1.042.864,4.335,4.335,0,0,0-1.165,2.048,3.851,3.851,0,0,0-.04,1.838.92.92,0,0,0-.19.182c-.273.36-.285.927-.044,1.787A2.793,2.793,0,0,0,16.5,8.929a5.392,5.392,0,0,0,.547,1.549v.955a29.338,29.338,0,0,0-4.536,2.86,3.434,3.434,0,0,0-1.311,2.7v1.03a1.348,1.348,0,0,0,1.347,1.347H28.333A1.352,1.352,0,0,0,29.68,18.016Zm-17.513,0v-1.03a2.454,2.454,0,0,1,.935-1.929,28.243,28.243,0,0,1,4.556-2.844.637.637,0,0,0,.36-.578V10.347a.487.487,0,0,0-.067-.246,4.38,4.38,0,0,1-.535-1.581.489.489,0,0,0-.36-.4,2.629,2.629,0,0,1-.384-.935,2.207,2.207,0,0,1-.127-.891.5.5,0,0,0,.408-.186.481.481,0,0,0,.075-.46,2.922,2.922,0,0,1-.071-1.767,3.408,3.408,0,0,1,.923-1.608,4.466,4.466,0,0,1,.872-.721l.016-.012a3.33,3.33,0,0,1,.816-.42.014.014,0,0,0,.008,0,2.636,2.636,0,0,1,.729-.135,3.092,3.092,0,0,1,1.866.392,2.275,2.275,0,0,1,.848.769.443.443,0,0,0,.384.257.783.783,0,0,1,.491.353c.234.333.566,1.188.151,3.185a.485.485,0,0,0,.269.539,1.922,1.922,0,0,1-.119.915,3.28,3.28,0,0,1-.345.879.465.465,0,0,0-.273.032.488.488,0,0,0-.289.36,4.911,4.911,0,0,1-.392,1.268.492.492,0,0,0-.048.21v1.489a.641.641,0,0,0,.36.578,28.41,28.41,0,0,1,4.552,2.844,2.454,2.454,0,0,1,.935,1.929v1.03a.379.379,0,0,1-.376.376H12.547A.375.375,0,0,1,12.167,18.016Z" transform="translate(0 0)" fill="#a8a8a8" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Enter Name" id="name">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Mobile Number</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="24" viewBox="0 0 14 24">
                                                                    <g id="_7442810861529659196" data-name="7442810861529659196" transform="translate(-5)">
                                                                        <line id="Line_42" data-name="Line 42" x1="13" transform="translate(5.5 19.5)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                                                        <path id="Path_118" data-name="Path 118" d="M12,20.75a.749.749,0,1,0,.531.219A.75.75,0,0,0,12,20.75Z" fill="#a8a8a8" />
                                                                        <rect id="Rectangle_88" data-name="Rectangle 88" width="13" height="23" rx="2" transform="translate(5.5 0.5)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" />
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" value="<?= $this->session->userdata('mobile') ?>" disabled style="background-color:#fff;">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Email ID</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="15.598" viewBox="0 0 20.8 15.598">
                                                                    <path id="Mail" d="M18.847,8H1.946A1.95,1.95,0,0,0,0,9.95v11.7a1.95,1.95,0,0,0,1.95,1.95h16.9a1.95,1.95,0,0,0,1.95-1.95V9.95A1.95,1.95,0,0,0,18.847,8Zm1.3,13.359L14,15.212l6.148-3.918ZM1.946,8.65h16.9a1.3,1.3,0,0,1,1.3,1.3v.574l-8.948,5.7A1.432,1.432,0,0,1,9.622,16.2L.646,10.1V9.95A1.3,1.3,0,0,1,1.946,8.65Zm-1.3,2.237,6.235,4.237L.646,21.359Zm18.2,12.061H1.946a1.3,1.3,0,0,1-1.195-.789L7.42,15.491,9.258,16.74a2.082,2.082,0,0,0,2.29.034l1.9-1.21,6.6,6.6A1.3,1.3,0,0,1,18.847,22.948Z" transform="translate(0.003 -8)" fill="#a8a8a8" />
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <input type="email" class="form-control" placeholder="Enter Email ID" id="email">
                                                    </div>
                                                </div>
                                                <div class="mb-3 mt-4"><button id="personalinfoSelected" class="personalinfoSelected btn1">Next</button></div>
                                            </div>
                                        </div>
                                        <!-- //// -->
                                        <div id="profilestepTo" class="profilestepTwo" style="display:none;">
                                            <div class="profileprogresswrp pb-2  mb-4">
                                                <div class="profileprogress mb-2">
                                                    <div class="active" style="width: 60%;"></div>
                                                </div>
                                                <div class="text-left px-4"> <small>Profile Completed</small></div>
                                            </div>
                                            <div class="profilesection bg-white text-left p-4">
                                                <h5>Business Info</h5>
                                                <form id="form_bussiness_details">
                                                    <div class="form-group mb-3">
                                                        <label>Business Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.816" height="18.462" viewBox="0 0 16.816 18.462">
                                                                        <g id="_3046788041543238896" data-name="3046788041543238896" transform="translate(-2 -1)">
                                                                            <path id="Path_116" data-name="Path 116" d="M3,7.762,10.408,2l7.408,5.762v9.054a1.646,1.646,0,0,1-1.646,1.646H4.646A1.646,1.646,0,0,1,3,16.816Z" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                            <path id="Path_117" data-name="Path 117" d="M9,20.231V12h4.939v8.231" transform="translate(-1.061 -1.769)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter Business Name" name="bussiness_name">
                                                        </div>
                                                    </div>
                                                    <div class="row row5">
                                                        <div class="col-md-6 px-2">
                                                            <div class="form-group mb-3">
                                                                <label>Business Category</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20.85" height="16.68" viewBox="0 0 20.85 16.68">
                                                                                <g id="_14291991451579780443" data-name="14291991451579780443" transform="translate(-5 -8)">
                                                                                    <path id="Path_119" data-name="Path 119" d="M15.425,17.43a.482.482,0,0,1-.2-.043L5.3,12.945a.528.528,0,0,1,.018-.963l9.929-3.948a.475.475,0,0,1,.353,0l9.928,3.947a.529.529,0,0,1,.019.964L15.62,17.389a.487.487,0,0,1-.2.041ZM6.825,12.5,15.4,16.333,24.024,12.5l-8.6-3.419Z" transform="translate(0)" fill="#a8a8a8"></path>
                                                                                    <path id="Path_120" data-name="Path 120" d="M5.3,20.052a.532.532,0,0,1-.261-.683.5.5,0,0,1,.458-.316.473.473,0,0,1,.2.043L15.4,23.439,25.157,19.1a.467.467,0,0,1,.2-.043.494.494,0,0,1,.456.316.531.531,0,0,1-.261.683l-10.123,4.53Z" transform="translate(0 -3.371)" fill="#a8a8a8"></path>
                                                                                    <path id="Path_121" data-name="Path 121" d="M5.3,25.042a.53.53,0,0,1-.261-.682.5.5,0,0,1,.458-.316.483.483,0,0,1,.2.042L15.4,28.431l9.756-4.344a.485.485,0,0,1,.653.273.53.53,0,0,1-.261.682L15.425,29.574Z" transform="translate(0 -4.894)" fill="#a8a8a8"></path>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <input type="text" class="form-control" value="Grocery" name="" disabled style="background-color:#fff;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 px-2">
                                                            <div class="form-group mb-3">
                                                                <label>Mobile Number</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="24" viewBox="0 0 14 24">
                                                                                <g id="_7442810861529659196" data-name="7442810861529659196" transform="translate(-5)">
                                                                                    <line id="Line_42" data-name="Line 42" x1="13" transform="translate(5.5 19.5)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></line>
                                                                                    <path id="Path_118" data-name="Path 118" d="M12,20.75a.749.749,0,1,0,.531.219A.75.75,0,0,0,12,20.75Z" fill="#a8a8a8"></path>
                                                                                    <rect id="Rectangle_88" data-name="Rectangle 88" width="13" height="23" rx="2" transform="translate(5.5 0.5)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></rect>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                    </div>
                                                                    <input type="text" class="form-control" placeholder="Enter Mobile Number" name="bussiness_mobile">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Email ID (Optional)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="15.598" viewBox="0 0 20.8 15.598">
                                                                        <path id="Mail" d="M18.847,8H1.946A1.95,1.95,0,0,0,0,9.95v11.7a1.95,1.95,0,0,0,1.95,1.95h16.9a1.95,1.95,0,0,0,1.95-1.95V9.95A1.95,1.95,0,0,0,18.847,8Zm1.3,13.359L14,15.212l6.148-3.918ZM1.946,8.65h16.9a1.3,1.3,0,0,1,1.3,1.3v.574l-8.948,5.7A1.432,1.432,0,0,1,9.622,16.2L.646,10.1V9.95A1.3,1.3,0,0,1,1.946,8.65Zm-1.3,2.237,6.235,4.237L.646,21.359Zm18.2,12.061H1.946a1.3,1.3,0,0,1-1.195-.789L7.42,15.491,9.258,16.74a2.082,2.082,0,0,0,2.29.034l1.9-1.21,6.6,6.6A1.3,1.3,0,0,1,18.847,22.948Z" transform="translate(0.003 -8)" fill="#a8a8a8"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="email" class="form-control" placeholder="Enter Email ID" name="bussiness_email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label>Business Address</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 30.23 30.23">
                                                                        <g id="Icons" transform="translate(5 2)">
                                                                            <g id="Rounded" transform="translate(-5 -2)">
                                                                                <g id="Maps">
                                                                                    <g id="_-Round-_-Maps-_-place" data-name="-Round-/-Maps-/-place">
                                                                                        <g id="Group_6" data-name="Group 6">
                                                                                            <path id="Path" d="M0,0H30.23V30.23H0Z" fill="none" fill-rule="evenodd" />
                                                                                            <path id="_-Icon-Color" data-name="🔹-Icon-Color" d="M13.817,2A8.811,8.811,0,0,0,5,10.817c0,5.252,5.567,12.5,7.86,15.254a1.251,1.251,0,0,0,1.927,0c2.28-2.758,7.847-10,7.847-15.254A8.811,8.811,0,0,0,13.817,2Zm0,11.966a3.149,3.149,0,1,1,3.149-3.149A3.15,3.15,0,0,1,13.817,13.966Z" transform="translate(1.298 0.519)" fill="#a8a8a8" fill-rule="evenodd" />
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Flat/ Building Number" name="building">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 30.23 30.23">
                                                                        <g id="Icons" transform="translate(5 2)">
                                                                            <g id="Rounded" transform="translate(-5 -2)">
                                                                                <g id="Maps">
                                                                                    <g id="_-Round-_-Maps-_-place" data-name="-Round-/-Maps-/-place">
                                                                                        <g id="Group_6" data-name="Group 6">
                                                                                            <path id="Path" d="M0,0H30.23V30.23H0Z" fill="none" fill-rule="evenodd" />
                                                                                            <path id="_-Icon-Color" data-name="🔹-Icon-Color" d="M13.817,2A8.811,8.811,0,0,0,5,10.817c0,5.252,5.567,12.5,7.86,15.254a1.251,1.251,0,0,0,1.927,0c2.28-2.758,7.847-10,7.847-15.254A8.811,8.811,0,0,0,13.817,2Zm0,11.966a3.149,3.149,0,1,1,3.149-3.149A3.15,3.15,0,0,1,13.817,13.966Z" transform="translate(1.298 0.519)" fill="#a8a8a8" fill-rule="evenodd" />
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Area / Locality, City" name="address">
                                                        </div>
                                                    </div>

                                                    <div class="form-group ">
                                                        <label>Business KYC</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.286" height="22" viewBox="0 0 17.286 22">
                                                                        <g id="_21-30" data-name="21-30" transform="translate(-5 -2)">
                                                                            <g id="Document" transform="translate(5 2)">
                                                                                <path id="Path_139" data-name="Path 139" d="M21.135,5.238,19.048,3.151A3.9,3.9,0,0,0,16.27,2H8.929A3.933,3.933,0,0,0,5,5.929V20.071A3.933,3.933,0,0,0,8.929,24h9.429a3.933,3.933,0,0,0,3.929-3.929V8.016a3.9,3.9,0,0,0-1.151-2.778ZM20.024,6.349a2.39,2.39,0,0,1,.3.365H18.357a.786.786,0,0,1-.786-.786V3.964a2.39,2.39,0,0,1,.365.3Zm-1.667,16.08H8.929a2.357,2.357,0,0,1-2.357-2.357V5.929A2.357,2.357,0,0,1,8.929,3.571H16V5.929a2.357,2.357,0,0,0,2.357,2.357h2.357V20.071a2.357,2.357,0,0,1-2.357,2.357Z" transform="translate(-5 -2)" fill="#a8a8a8" />
                                                                                <path id="Path_140" data-name="Path 140" d="M10.786,10.571h3.143a.786.786,0,1,0,0-1.571H10.786a.786.786,0,1,0,0,1.571Z" transform="translate(-6.071 -3.5)" fill="#a8a8a8" />
                                                                                <path id="Path_141" data-name="Path 141" d="M18.643,13H10.786a.786.786,0,0,0,0,1.571h7.857a.786.786,0,0,0,0-1.571Z" transform="translate(-6.071 -4.357)" fill="#a8a8a8" />
                                                                                <path id="Path_142" data-name="Path 142" d="M18.643,17H10.786a.786.786,0,1,0,0,1.571h7.857a.786.786,0,0,0,0-1.571Z" transform="translate(-6.071 -5.214)" fill="#a8a8a8" />
                                                                                <path id="Path_143" data-name="Path 143" d="M17.071,21H10.786a.786.786,0,1,0,0,1.571h6.286a.786.786,0,0,0,0-1.571Z" transform="translate(-6.071 -6.071)" fill="#a8a8a8" />
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <select class="form-control" id="" name="kyc_document">
                                                                <option value="">Select Document</option>
                                                                <option value="aadhar">Aadhar</option>
                                                                <option value="pan">Pan</option>
                                                                <option value="voter">Voter Id</option>
                                                                <!-- <option value="">Document 4</option> -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile" name="kyc_image">
                                                            <label class="custom-file-label" for="customFile">
                                                                Upload Image
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>GST (Optional)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.607" height="20.232" viewBox="0 0 17.607 20.232">
                                                                        <g id="Layer_2" data-name="Layer 2" transform="translate(0.004)">
                                                                            <g id="Layer_1" data-name="Layer 1" transform="translate(-0.004)">
                                                                                <path id="Path_128" data-name="Path 128" d="M16.8,18.724l-.332-.424-1.577,1.751h0a.426.426,0,0,1-.642,0l-1.606-1.737-1.573,1.694a.426.426,0,0,1-.639.02L8.762,18.314,7.246,20.049l-.028.033a.424.424,0,0,1-.648,0L4.982,18.314,3.343,20.051h0a.426.426,0,0,1-.639,0L1.146,18.287.823,18.7a.448.448,0,0,1-.367.206A.485.485,0,0,1,0,18.4V.508A.483.483,0,0,1,.452,0H17.143A.485.485,0,0,1,17.6.508V18.4h0a.525.525,0,0,1-.16.384.419.419,0,0,1-.641-.05ZM2.71,2.937H6.434V4.059H5.193V7.343H3.953V4.059H2.712V2.937ZM9.035,6.651H7.716l-.193.692H6.238L7.725,2.937H9.063l1.481,4.406H9.223l-.184-.69ZM8.808,5.613,8.376,4.038,7.943,5.617Zm1.836-2.676h1.349l.7,1.355.687-1.355h1.331L13.481,5.07l1.346,2.273H13.45l-.775-1.413-.782,1.413H10.53l1.364-2.295Zm2.408,11.056a.393.393,0,0,1,0,.776H3.484a.393.393,0,0,1,0-.776Zm1.913-2.506a.393.393,0,0,1,0,.778H3.385a.393.393,0,0,1,0-.778Zm.017-2.506a.385.385,0,0,1,.323.512.352.352,0,0,1-.336.266H3.385a.393.393,0,0,1,0-.778Zm1.687-7.945H.927V17.132a.42.42,0,0,1,.51.066.127.127,0,0,1,.026.028h0l1.586,1.786,1.632-1.735a.426.426,0,0,1,.639,0h0L6.893,19.03l1.524-1.749a.424.424,0,0,1,.637-.018h0L10.73,18.99l1.592-1.7a.424.424,0,0,1,.637,0l1.593,1.726,1.6-1.775a.422.422,0,0,1,.518-.1Z" transform="translate(0.004)" fill="#a8a8a8" />
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter GST Number" name="gst" id="retail_gst">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Store Verifications</label>
                                                        <div class="d-flex  mb-3">
                                                            <div class="imageholder text-center">
                                                                <div class="holder">
                                                                    <img id="imgPreview" src="<?= base_url() ?>assets/images/round-plus.jpg" alt="pic" class="imgPreview4">
                                                                    <input type="file" id="photo" class="photo4" name="front_image">
                                                                </div>
                                                                <small>Front Picture</small>
                                                            </div>
                                                            <div class="imageholder text-center">
                                                                <div class="holder">
                                                                    <img id="imgPreview" src="<?= base_url() ?>assets/images/round-plus.jpg" alt="pic" class="imgPreview5">
                                                                    <input type="file" id="photo" class="photo5" name="inside_image">
                                                                </div>
                                                                <small>Inside Picture</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 mt-4">
                                                        <button id="BusinessInfoSelected" type="submit" class="btn1">Next</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- //// -->
                                        <div id="profilestepTre" class="profilestepThree" style="display:none;">
                                            <div class="profileprogresswrp pb-2  mb-4">
                                                <div class="profileprogress mb-2">
                                                    <div class="active" style="width: 100%;"></div>
                                                </div>
                                                <div class="text-left px-4"> <small>Profile Completed</small></div>
                                            </div>
                                            <div class="profilesection bg-white text-left p-4">
                                                <h5>Financial Info</h5>
                                                <form id="form_bank_details">
                                                    <div class="form-group mb-3">
                                                        <label>Bank Account Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.48" height="19.367" viewBox="0 0 18.48 19.367">
                                                                        <g id="user-svgrepo-com_13_" data-name="user-svgrepo-com (13)" transform="translate(-11.2)">
                                                                            <path id="Path_233" data-name="Path 233" d="M29.68,18.016v-1.03a3.44,3.44,0,0,0-1.311-2.7,29.662,29.662,0,0,0-4.536-2.86V10.252a5.7,5.7,0,0,0,.341-1.01c.507-.182.784-.927.971-1.585.25-.875.222-1.489-.071-1.83.309-1.684.17-2.924-.408-3.688a1.814,1.814,0,0,0-.9-.646,3.318,3.318,0,0,0-1.1-.959A3.9,3.9,0,0,0,20.644,0c-.135,0-.269.008-.388.016A3.708,3.708,0,0,0,19.269.2s-.008,0-.012,0a4.388,4.388,0,0,0-1.042.531,5.492,5.492,0,0,0-1.042.864,4.335,4.335,0,0,0-1.165,2.048,3.851,3.851,0,0,0-.04,1.838.92.92,0,0,0-.19.182c-.273.36-.285.927-.044,1.787A2.793,2.793,0,0,0,16.5,8.929a5.392,5.392,0,0,0,.547,1.549v.955a29.338,29.338,0,0,0-4.536,2.86,3.434,3.434,0,0,0-1.311,2.7v1.03a1.348,1.348,0,0,0,1.347,1.347H28.333A1.352,1.352,0,0,0,29.68,18.016Zm-17.513,0v-1.03a2.454,2.454,0,0,1,.935-1.929,28.243,28.243,0,0,1,4.556-2.844.637.637,0,0,0,.36-.578V10.347a.487.487,0,0,0-.067-.246,4.38,4.38,0,0,1-.535-1.581.489.489,0,0,0-.36-.4,2.629,2.629,0,0,1-.384-.935,2.207,2.207,0,0,1-.127-.891.5.5,0,0,0,.408-.186.481.481,0,0,0,.075-.46,2.922,2.922,0,0,1-.071-1.767,3.408,3.408,0,0,1,.923-1.608,4.466,4.466,0,0,1,.872-.721l.016-.012a3.33,3.33,0,0,1,.816-.42.014.014,0,0,0,.008,0,2.636,2.636,0,0,1,.729-.135,3.092,3.092,0,0,1,1.866.392,2.275,2.275,0,0,1,.848.769.443.443,0,0,0,.384.257.783.783,0,0,1,.491.353c.234.333.566,1.188.151,3.185a.485.485,0,0,0,.269.539,1.922,1.922,0,0,1-.119.915,3.28,3.28,0,0,1-.345.879.465.465,0,0,0-.273.032.488.488,0,0,0-.289.36,4.911,4.911,0,0,1-.392,1.268.492.492,0,0,0-.048.21v1.489a.641.641,0,0,0,.36.578,28.41,28.41,0,0,1,4.552,2.844,2.454,2.454,0,0,1,.935,1.929v1.03a.379.379,0,0,1-.376.376H12.547A.375.375,0,0,1,12.167,18.016Z" transform="translate(0 0)" fill="#a8a8a8"></path>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter Bank Account Name" name="account_name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Bank Account</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 28 24">
                                                                        <g id="_4987286121594941299" data-name="4987286121594941299" transform="translate(-0.5 -2.5)">
                                                                            <path id="Path_136" data-name="Path 136" d="M14.5,3,3,9.192v2.654H26V9.192Z" transform="translate(-0.231)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></path>
                                                                            <rect id="Rectangle_117" data-name="Rectangle 117" width="3" height="9" transform="translate(13 12)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                            <rect id="Rectangle_118" data-name="Rectangle 118" width="4" height="9" transform="translate(20 12)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                            <rect id="Rectangle_119" data-name="Rectangle 119" width="3" height="9" transform="translate(5 12)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                            <rect id="Rectangle_120" data-name="Rectangle 120" width="23" height="2" transform="translate(3 21)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                            <rect id="Rectangle_121" data-name="Rectangle 121" width="27" height="3" transform="translate(1 23)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter Bank Account Number" name="account_number">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label> IFSC Code</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="22" height="22" fill="#a8a8a8" viewBox="0 0 92 92" enable-background="new 0 0 92 92" xml:space="preserve">
                                                                        <path id="XMLID_30_" d="M21,53c-1.8,0-3.7-0.8-5-2.1c-1.3-1.3-2-3.1-2-4.9c0-1.8,0.8-3.6,2-5c1.3-1.3,3.1-2,5-2c1.8,0,3.6,0.8,4.9,2
                                                                c1.3,1.3,2.1,3.1,2.1,5c0,1.8-0.8,3.6-2.1,4.9C24.6,52.2,22.8,53,21,53z M50.9,50.9c1.3-1.3,2.1-3.1,2.1-4.9c0-1.8-0.8-3.6-2.1-5
                                                                c-1.3-1.3-3.1-2-4.9-2c-1.8,0-3.7,0.8-5,2c-1.3,1.3-2,3.1-2,5c0,1.8,0.8,3.6,2,4.9c1.3,1.3,3.1,2.1,5,2.1
                                                                C47.8,53,49.6,52.2,50.9,50.9z M75.9,50.9c1.3-1.3,2.1-3.1,2.1-4.9c0-1.8-0.8-3.6-2.1-5c-1.3-1.3-3.1-2-4.9-2c-1.8,0-3.7,0.8-5,2
                                                                c-1.3,1.3-2,3.1-2,5c0,1.8,0.8,3.6,2,4.9c1.3,1.3,3.1,2.1,5,2.1C72.8,53,74.6,52.2,75.9,50.9z" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter IFSC Code" name="ifsc">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 mt-4">
                                                        <button type="submit" class="btn1 rtegisDone">Done</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ======================================= Retail store ====================================== -->
                                <!--  ==========================================  Fruits & Vegetables ============================= -->
                                <div id="FruitsVegetablesprofilesetep1" style="display:none;">
                                    <div class="bg-light">
                                        <div class="proavatersec pt-3 pb-3">
                                            <div class="proavaterwrp">
                                                <div class="proavater">
                                                    <img id="imgPreview" src="<?= base_url() ?>assets/images/avater.jpg" alt="pic" class="imgPreview3">
                                                    <input type="file" form="form_fruit_bank_details" name="profile_image" id="photo" class="photo3">
                                                </div>
                                                <div class="cameraico">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 41 41">
                                                        <g id="Group_9" data-name="Group 9" transform="translate(-218 -128)">
                                                            <circle id="Ellipse_25" data-name="Ellipse 25" cx="20.5" cy="20.5" r="20.5" transform="translate(218 128)" fill="#8a8a8a"></circle>
                                                            <g id="Layer_5" data-name="Layer 5" transform="translate(226.593 133.914)">
                                                                <path id="Path_87" data-name="Path 87" d="M15.87,15.577a3.633,3.633,0,1,1-3.633-3.633A3.633,3.633,0,0,1,15.87,15.577Zm5.944-5.614V21.191a1.981,1.981,0,0,1-1.981,1.981H3.981A1.981,1.981,0,0,1,2,21.191V9.963A1.981,1.981,0,0,1,3.981,7.981H19.832A1.981,1.981,0,0,1,21.814,9.963ZM6.623,11.284A1.321,1.321,0,1,0,5.3,12.6,1.321,1.321,0,0,0,6.623,11.284Zm10.567,4.293a4.953,4.953,0,1,0-4.953,4.953,4.953,4.953,0,0,0,4.953-4.953ZM15.539,6.66a.66.66,0,0,0-.66-.66H8.935a.66.66,0,0,0,0,1.321h5.944A.66.66,0,0,0,15.539,6.66Z" fill="#fff"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <small class="text-center d-block mt-2">Add Photo</small>
                                        </div>
                                        <div id="FruitsVegetablesprofilestpOn" class="profilestepOne">
                                            <div class="profileprogresswrp pb-2  mb-4">
                                                <div class="profileprogress mb-2">
                                                    <div class="active" style="width: 20%;"></div>
                                                </div>
                                                <div class="text-left px-4"> <small>Profile Completed</small></div>
                                            </div>
                                            <div class="profilesection bg-white text-left p-4">
                                                <h5>Personal Info</h5>
                                                <div class="form-group mb-3">
                                                    <label>Your Name</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18.48" height="19.367" viewBox="0 0 18.48 19.367">
                                                                    <g id="user-svgrepo-com_13_" data-name="user-svgrepo-com (13)" transform="translate(-11.2)">
                                                                        <path id="Path_233" data-name="Path 233" d="M29.68,18.016v-1.03a3.44,3.44,0,0,0-1.311-2.7,29.662,29.662,0,0,0-4.536-2.86V10.252a5.7,5.7,0,0,0,.341-1.01c.507-.182.784-.927.971-1.585.25-.875.222-1.489-.071-1.83.309-1.684.17-2.924-.408-3.688a1.814,1.814,0,0,0-.9-.646,3.318,3.318,0,0,0-1.1-.959A3.9,3.9,0,0,0,20.644,0c-.135,0-.269.008-.388.016A3.708,3.708,0,0,0,19.269.2s-.008,0-.012,0a4.388,4.388,0,0,0-1.042.531,5.492,5.492,0,0,0-1.042.864,4.335,4.335,0,0,0-1.165,2.048,3.851,3.851,0,0,0-.04,1.838.92.92,0,0,0-.19.182c-.273.36-.285.927-.044,1.787A2.793,2.793,0,0,0,16.5,8.929a5.392,5.392,0,0,0,.547,1.549v.955a29.338,29.338,0,0,0-4.536,2.86,3.434,3.434,0,0,0-1.311,2.7v1.03a1.348,1.348,0,0,0,1.347,1.347H28.333A1.352,1.352,0,0,0,29.68,18.016Zm-17.513,0v-1.03a2.454,2.454,0,0,1,.935-1.929,28.243,28.243,0,0,1,4.556-2.844.637.637,0,0,0,.36-.578V10.347a.487.487,0,0,0-.067-.246,4.38,4.38,0,0,1-.535-1.581.489.489,0,0,0-.36-.4,2.629,2.629,0,0,1-.384-.935,2.207,2.207,0,0,1-.127-.891.5.5,0,0,0,.408-.186.481.481,0,0,0,.075-.46,2.922,2.922,0,0,1-.071-1.767,3.408,3.408,0,0,1,.923-1.608,4.466,4.466,0,0,1,.872-.721l.016-.012a3.33,3.33,0,0,1,.816-.42.014.014,0,0,0,.008,0,2.636,2.636,0,0,1,.729-.135,3.092,3.092,0,0,1,1.866.392,2.275,2.275,0,0,1,.848.769.443.443,0,0,0,.384.257.783.783,0,0,1,.491.353c.234.333.566,1.188.151,3.185a.485.485,0,0,0,.269.539,1.922,1.922,0,0,1-.119.915,3.28,3.28,0,0,1-.345.879.465.465,0,0,0-.273.032.488.488,0,0,0-.289.36,4.911,4.911,0,0,1-.392,1.268.492.492,0,0,0-.048.21v1.489a.641.641,0,0,0,.36.578,28.41,28.41,0,0,1,4.552,2.844,2.454,2.454,0,0,1,.935,1.929v1.03a.379.379,0,0,1-.376.376H12.547A.375.375,0,0,1,12.167,18.016Z" transform="translate(0 0)" fill="#a8a8a8">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="Enter Name" id="fruit_name">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Mobile Number</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="24" viewBox="0 0 14 24">
                                                                    <g id="_7442810861529659196" data-name="7442810861529659196" transform="translate(-5)">
                                                                        <line id="Line_42" data-name="Line 42" x1="13" transform="translate(5.5 19.5)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></line>
                                                                        <path id="Path_118" data-name="Path 118" d="M12,20.75a.749.749,0,1,0,.531.219A.75.75,0,0,0,12,20.75Z" fill="#a8a8a8"></path>
                                                                        <rect id="Rectangle_88" data-name="Rectangle 88" width="13" height="23" rx="2" transform="translate(5.5 0.5)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></rect>
                                                                    </g>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <input type="text" class="form-control" value="<?= $this->session->userdata('mobile') ?>" disabled style="background-color:none;">
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label>Email ID</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="15.598" viewBox="0 0 20.8 15.598">
                                                                    <path id="Mail" d="M18.847,8H1.946A1.95,1.95,0,0,0,0,9.95v11.7a1.95,1.95,0,0,0,1.95,1.95h16.9a1.95,1.95,0,0,0,1.95-1.95V9.95A1.95,1.95,0,0,0,18.847,8Zm1.3,13.359L14,15.212l6.148-3.918ZM1.946,8.65h16.9a1.3,1.3,0,0,1,1.3,1.3v.574l-8.948,5.7A1.432,1.432,0,0,1,9.622,16.2L.646,10.1V9.95A1.3,1.3,0,0,1,1.946,8.65Zm-1.3,2.237,6.235,4.237L.646,21.359Zm18.2,12.061H1.946a1.3,1.3,0,0,1-1.195-.789L7.42,15.491,9.258,16.74a2.082,2.082,0,0,0,2.29.034l1.9-1.21,6.6,6.6A1.3,1.3,0,0,1,18.847,22.948Z" transform="translate(0.003 -8)" fill="#a8a8a8">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </div>
                                                        <input type="email" class="form-control" placeholder="Enter Email ID" id="fruit_email">
                                                    </div>
                                                </div>
                                                <div class="mb-3 mt-4"><button id="FruitsVegetablespersonalinfoSelected" class="btn1">Next</button></div>
                                            </div>
                                        </div>
                                        <!-- //// -->
                                        <div id="FruitsVegetablesprofilestepTo" class="profilestepTwo" style="display:none;">
                                            <div class="profileprogresswrp pb-2  mb-4">
                                                <div class="profileprogress mb-2">
                                                    <div class="active" style="width: 60%;"></div>
                                                </div>
                                                <div class="text-left px-4"> <small>Profile Completed</small></div>
                                            </div>
                                            <div class="profilesection bg-white text-left p-4">
                                                <h5>Business Info</h5>
                                                <form id="form_fruit_bussiness_details">
                                                    <div class="form-group mb-3">
                                                        <label>Owner Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.48" height="19.367" viewBox="0 0 18.48 19.367">
                                                                        <g id="user-svgrepo-com_13_" data-name="user-svgrepo-com (13)" transform="translate(-11.2)">
                                                                            <path id="Path_233" data-name="Path 233" d="M29.68,18.016v-1.03a3.44,3.44,0,0,0-1.311-2.7,29.662,29.662,0,0,0-4.536-2.86V10.252a5.7,5.7,0,0,0,.341-1.01c.507-.182.784-.927.971-1.585.25-.875.222-1.489-.071-1.83.309-1.684.17-2.924-.408-3.688a1.814,1.814,0,0,0-.9-.646,3.318,3.318,0,0,0-1.1-.959A3.9,3.9,0,0,0,20.644,0c-.135,0-.269.008-.388.016A3.708,3.708,0,0,0,19.269.2s-.008,0-.012,0a4.388,4.388,0,0,0-1.042.531,5.492,5.492,0,0,0-1.042.864,4.335,4.335,0,0,0-1.165,2.048,3.851,3.851,0,0,0-.04,1.838.92.92,0,0,0-.19.182c-.273.36-.285.927-.044,1.787A2.793,2.793,0,0,0,16.5,8.929a5.392,5.392,0,0,0,.547,1.549v.955a29.338,29.338,0,0,0-4.536,2.86,3.434,3.434,0,0,0-1.311,2.7v1.03a1.348,1.348,0,0,0,1.347,1.347H28.333A1.352,1.352,0,0,0,29.68,18.016Zm-17.513,0v-1.03a2.454,2.454,0,0,1,.935-1.929,28.243,28.243,0,0,1,4.556-2.844.637.637,0,0,0,.36-.578V10.347a.487.487,0,0,0-.067-.246,4.38,4.38,0,0,1-.535-1.581.489.489,0,0,0-.36-.4,2.629,2.629,0,0,1-.384-.935,2.207,2.207,0,0,1-.127-.891.5.5,0,0,0,.408-.186.481.481,0,0,0,.075-.46,2.922,2.922,0,0,1-.071-1.767,3.408,3.408,0,0,1,.923-1.608,4.466,4.466,0,0,1,.872-.721l.016-.012a3.33,3.33,0,0,1,.816-.42.014.014,0,0,0,.008,0,2.636,2.636,0,0,1,.729-.135,3.092,3.092,0,0,1,1.866.392,2.275,2.275,0,0,1,.848.769.443.443,0,0,0,.384.257.783.783,0,0,1,.491.353c.234.333.566,1.188.151,3.185a.485.485,0,0,0,.269.539,1.922,1.922,0,0,1-.119.915,3.28,3.28,0,0,1-.345.879.465.465,0,0,0-.273.032.488.488,0,0,0-.289.36,4.911,4.911,0,0,1-.392,1.268.492.492,0,0,0-.048.21v1.489a.641.641,0,0,0,.36.578,28.41,28.41,0,0,1,4.552,2.844,2.454,2.454,0,0,1,.935,1.929v1.03a.379.379,0,0,1-.376.376H12.547A.375.375,0,0,1,12.167,18.016Z" transform="translate(0 0)" fill="#a8a8a8">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter Owner Name" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Business Mobile Number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="24" viewBox="0 0 14 24">
                                                                        <g id="_7442810861529659196" data-name="7442810861529659196" transform="translate(-5)">
                                                                            <line id="Line_42" data-name="Line 42" x1="13" transform="translate(5.5 19.5)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></line>
                                                                            <path id="Path_118" data-name="Path 118" d="M12,20.75a.749.749,0,1,0,.531.219A.75.75,0,0,0,12,20.75Z" fill="#a8a8a8"></path>
                                                                            <rect id="Rectangle_88" data-name="Rectangle 88" width="13" height="23" rx="2" transform="translate(5.5 0.5)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></rect>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter Business Number" name="mobile">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-2">
                                                        <label>Business Address</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 30.23 30.23">
                                                                        <g id="Icons" transform="translate(5 2)">
                                                                            <g id="Rounded" transform="translate(-5 -2)">
                                                                                <g id="Maps">
                                                                                    <g id="_-Round-_-Maps-_-place" data-name="-Round-/-Maps-/-place">
                                                                                        <g id="Group_6" data-name="Group 6">
                                                                                            <path id="Path" d="M0,0H30.23V30.23H0Z" fill="none" fill-rule="evenodd">
                                                                                            </path>
                                                                                            <path id="_-Icon-Color" data-name="🔹-Icon-Color" d="M13.817,2A8.811,8.811,0,0,0,5,10.817c0,5.252,5.567,12.5,7.86,15.254a1.251,1.251,0,0,0,1.927,0c2.28-2.758,7.847-10,7.847-15.254A8.811,8.811,0,0,0,13.817,2Zm0,11.966a3.149,3.149,0,1,1,3.149-3.149A3.15,3.15,0,0,1,13.817,13.966Z" transform="translate(1.298 0.519)" fill="#a8a8a8" fill-rule="evenodd"></path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Flat/ Building Number" name="building">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 30.23 30.23">
                                                                        <g id="Icons" transform="translate(5 2)">
                                                                            <g id="Rounded" transform="translate(-5 -2)">
                                                                                <g id="Maps">
                                                                                    <g id="_-Round-_-Maps-_-place" data-name="-Round-/-Maps-/-place">
                                                                                        <g id="Group_6" data-name="Group 6">
                                                                                            <path id="Path" d="M0,0H30.23V30.23H0Z" fill="none" fill-rule="evenodd">
                                                                                            </path>
                                                                                            <path id="_-Icon-Color" data-name="🔹-Icon-Color" d="M13.817,2A8.811,8.811,0,0,0,5,10.817c0,5.252,5.567,12.5,7.86,15.254a1.251,1.251,0,0,0,1.927,0c2.28-2.758,7.847-10,7.847-15.254A8.811,8.811,0,0,0,13.817,2Zm0,11.966a3.149,3.149,0,1,1,3.149-3.149A3.15,3.15,0,0,1,13.817,13.966Z" transform="translate(1.298 0.519)" fill="#a8a8a8" fill-rule="evenodd"></path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Area / Locality, City" name="address">
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label>Personal KYC</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.286" height="22" viewBox="0 0 17.286 22">
                                                                        <g id="_21-30" data-name="21-30" transform="translate(-5 -2)">
                                                                            <g id="Document" transform="translate(5 2)">
                                                                                <path id="Path_139" data-name="Path 139" d="M21.135,5.238,19.048,3.151A3.9,3.9,0,0,0,16.27,2H8.929A3.933,3.933,0,0,0,5,5.929V20.071A3.933,3.933,0,0,0,8.929,24h9.429a3.933,3.933,0,0,0,3.929-3.929V8.016a3.9,3.9,0,0,0-1.151-2.778ZM20.024,6.349a2.39,2.39,0,0,1,.3.365H18.357a.786.786,0,0,1-.786-.786V3.964a2.39,2.39,0,0,1,.365.3Zm-1.667,16.08H8.929a2.357,2.357,0,0,1-2.357-2.357V5.929A2.357,2.357,0,0,1,8.929,3.571H16V5.929a2.357,2.357,0,0,0,2.357,2.357h2.357V20.071a2.357,2.357,0,0,1-2.357,2.357Z" transform="translate(-5 -2)" fill="#a8a8a8">
                                                                                </path>
                                                                                <path id="Path_140" data-name="Path 140" d="M10.786,10.571h3.143a.786.786,0,1,0,0-1.571H10.786a.786.786,0,1,0,0,1.571Z" transform="translate(-6.071 -3.5)" fill="#a8a8a8"></path>
                                                                                <path id="Path_141" data-name="Path 141" d="M18.643,13H10.786a.786.786,0,0,0,0,1.571h7.857a.786.786,0,0,0,0-1.571Z" transform="translate(-6.071 -4.357)" fill="#a8a8a8"></path>
                                                                                <path id="Path_142" data-name="Path 142" d="M18.643,17H10.786a.786.786,0,1,0,0,1.571h7.857a.786.786,0,0,0,0-1.571Z" transform="translate(-6.071 -5.214)" fill="#a8a8a8"></path>
                                                                                <path id="Path_143" data-name="Path 143" d="M17.071,21H10.786a.786.786,0,1,0,0,1.571h6.286a.786.786,0,0,0,0-1.571Z" transform="translate(-6.071 -6.071)" fill="#a8a8a8"></path>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <select class="form-control" name="kyc_document">
                                                                <option value="">Select</option>
                                                                <option value="aadhar">Aadhar</option>
                                                                <option value="pan">Pan</option>
                                                                <option value="voter">Voter Id</option>
                                                                <!-- <option>Document 4</option> -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile" name="kyc_image">
                                                            <label class="custom-file-label" for="customFile">Upload
                                                                Image</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 mt-4"><button type="submit" id="FruitsVegetablesBusinessInfoSelected" class="btn1">Next</button></div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- //// -->
                                        <div id="FruitsVegetablesprofilestepTre" class="profilestepThree" style="display:none;">
                                            <div class="profileprogresswrp pb-2  mb-4">
                                                <div class="profileprogress mb-2">
                                                    <div class="active" style="width: 100%;"></div>
                                                </div>
                                                <div class="text-left px-4"> <small>Profile Completed</small></div>
                                            </div>
                                            <div class="profilesection bg-white text-left p-4">
                                                <h5>Financial Info</h5>
                                                <form id="form_fruit_bank_details">
                                                    <div class="form-group mb-3">
                                                        <label>Account Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.48" height="19.367" viewBox="0 0 18.48 19.367">
                                                                        <g id="user-svgrepo-com_13_" data-name="user-svgrepo-com (13)" transform="translate(-11.2)">
                                                                            <path id="Path_233" data-name="Path 233" d="M29.68,18.016v-1.03a3.44,3.44,0,0,0-1.311-2.7,29.662,29.662,0,0,0-4.536-2.86V10.252a5.7,5.7,0,0,0,.341-1.01c.507-.182.784-.927.971-1.585.25-.875.222-1.489-.071-1.83.309-1.684.17-2.924-.408-3.688a1.814,1.814,0,0,0-.9-.646,3.318,3.318,0,0,0-1.1-.959A3.9,3.9,0,0,0,20.644,0c-.135,0-.269.008-.388.016A3.708,3.708,0,0,0,19.269.2s-.008,0-.012,0a4.388,4.388,0,0,0-1.042.531,5.492,5.492,0,0,0-1.042.864,4.335,4.335,0,0,0-1.165,2.048,3.851,3.851,0,0,0-.04,1.838.92.92,0,0,0-.19.182c-.273.36-.285.927-.044,1.787A2.793,2.793,0,0,0,16.5,8.929a5.392,5.392,0,0,0,.547,1.549v.955a29.338,29.338,0,0,0-4.536,2.86,3.434,3.434,0,0,0-1.311,2.7v1.03a1.348,1.348,0,0,0,1.347,1.347H28.333A1.352,1.352,0,0,0,29.68,18.016Zm-17.513,0v-1.03a2.454,2.454,0,0,1,.935-1.929,28.243,28.243,0,0,1,4.556-2.844.637.637,0,0,0,.36-.578V10.347a.487.487,0,0,0-.067-.246,4.38,4.38,0,0,1-.535-1.581.489.489,0,0,0-.36-.4,2.629,2.629,0,0,1-.384-.935,2.207,2.207,0,0,1-.127-.891.5.5,0,0,0,.408-.186.481.481,0,0,0,.075-.46,2.922,2.922,0,0,1-.071-1.767,3.408,3.408,0,0,1,.923-1.608,4.466,4.466,0,0,1,.872-.721l.016-.012a3.33,3.33,0,0,1,.816-.42.014.014,0,0,0,.008,0,2.636,2.636,0,0,1,.729-.135,3.092,3.092,0,0,1,1.866.392,2.275,2.275,0,0,1,.848.769.443.443,0,0,0,.384.257.783.783,0,0,1,.491.353c.234.333.566,1.188.151,3.185a.485.485,0,0,0,.269.539,1.922,1.922,0,0,1-.119.915,3.28,3.28,0,0,1-.345.879.465.465,0,0,0-.273.032.488.488,0,0,0-.289.36,4.911,4.911,0,0,1-.392,1.268.492.492,0,0,0-.048.21v1.489a.641.641,0,0,0,.36.578,28.41,28.41,0,0,1,4.552,2.844,2.454,2.454,0,0,1,.935,1.929v1.03a.379.379,0,0,1-.376.376H12.547A.375.375,0,0,1,12.167,18.016Z" transform="translate(0 0)" fill="#a8a8a8">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter Account Name" name="account_name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Bank Account Number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 28 24">
                                                                        <g id="_4987286121594941299" data-name="4987286121594941299" transform="translate(-0.5 -2.5)">
                                                                            <path id="Path_136" data-name="Path 136" d="M14.5,3,3,9.192v2.654H26V9.192Z" transform="translate(-0.231)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></path>
                                                                            <rect id="Rectangle_117" data-name="Rectangle 117" width="3" height="9" transform="translate(13 12)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                            <rect id="Rectangle_118" data-name="Rectangle 118" width="4" height="9" transform="translate(20 12)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                            <rect id="Rectangle_119" data-name="Rectangle 119" width="3" height="9" transform="translate(5 12)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                            <rect id="Rectangle_120" data-name="Rectangle 120" width="23" height="2" transform="translate(3 21)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                            <rect id="Rectangle_121" data-name="Rectangle 121" width="27" height="3" transform="translate(1 23)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter Bank Account Number" name="account_number">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>IFSC (Code)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24" height="24" fill="#a8a8a8" viewBox="0 0 92 92" enable-background="new 0 0 92 92" xml:space="preserve">
                                                                        <path id="XMLID_30_" d="M21,53c-1.8,0-3.7-0.8-5-2.1c-1.3-1.3-2-3.1-2-4.9c0-1.8,0.8-3.6,2-5c1.3-1.3,3.1-2,5-2c1.8,0,3.6,0.8,4.9,2
                                                            c1.3,1.3,2.1,3.1,2.1,5c0,1.8-0.8,3.6-2.1,4.9C24.6,52.2,22.8,53,21,53z M50.9,50.9c1.3-1.3,2.1-3.1,2.1-4.9c0-1.8-0.8-3.6-2.1-5
                                                            c-1.3-1.3-3.1-2-4.9-2c-1.8,0-3.7,0.8-5,2c-1.3,1.3-2,3.1-2,5c0,1.8,0.8,3.6,2,4.9c1.3,1.3,3.1,2.1,5,2.1
                                                            C47.8,53,49.6,52.2,50.9,50.9z M75.9,50.9c1.3-1.3,2.1-3.1,2.1-4.9c0-1.8-0.8-3.6-2.1-5c-1.3-1.3-3.1-2-4.9-2c-1.8,0-3.7,0.8-5,2
                                                            c-1.3,1.3-2,3.1-2,5c0,1.8,0.8,3.6,2,4.9c1.3,1.3,3.1,2.1,5,2.1C72.8,53,74.6,52.2,75.9,50.9z" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter IFSC (Code)" name="ifsc">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 mt-4"><button type="submit" class="btn1 rtegisDone">Done</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  ==========================================  Fruits & Vegetables ========================================= -->
                                <!--  ==========================================  Restaurant ========================================= -->
                                <div id="Restaurantprofilesetep1" style="display:none;">
                                    <!-- Restaurant -->
                                    <div class="bg-light">
                                        <div class="proavatersec pt-3 pb-3">
                                            <div class="proavaterwrp">
                                                <div class="proavater">
                                                    <img id="imgPreview" src="<?= base_url() ?>assets/images/avater.jpg" alt="pic" class="imgPreview3">
                                                    <input type="file" form="form_restaurant_banking" name="profile_image" id="photo" class="photo3">
                                                </div>
                                                <div class="cameraico">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 41 41">
                                                        <g id="Group_9" data-name="Group 9" transform="translate(-218 -128)">
                                                            <circle id="Ellipse_25" data-name="Ellipse 25" cx="20.5" cy="20.5" r="20.5" transform="translate(218 128)" fill="#8a8a8a"></circle>
                                                            <g id="Layer_5" data-name="Layer 5" transform="translate(226.593 133.914)">
                                                                <path id="Path_87" data-name="Path 87" d="M15.87,15.577a3.633,3.633,0,1,1-3.633-3.633A3.633,3.633,0,0,1,15.87,15.577Zm5.944-5.614V21.191a1.981,1.981,0,0,1-1.981,1.981H3.981A1.981,1.981,0,0,1,2,21.191V9.963A1.981,1.981,0,0,1,3.981,7.981H19.832A1.981,1.981,0,0,1,21.814,9.963ZM6.623,11.284A1.321,1.321,0,1,0,5.3,12.6,1.321,1.321,0,0,0,6.623,11.284Zm10.567,4.293a4.953,4.953,0,1,0-4.953,4.953,4.953,4.953,0,0,0,4.953-4.953ZM15.539,6.66a.66.66,0,0,0-.66-.66H8.935a.66.66,0,0,0,0,1.321h5.944A.66.66,0,0,0,15.539,6.66Z" fill="#fff"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <small class="text-center d-block mt-2">Add Photo</small>
                                        </div>
                                        <div id="RestaurantprofilestpOn" class="profilestepOne">
                                            <div class="profileprogresswrp pb-2  mb-4">
                                                <div class="profileprogress mb-2">
                                                    <div class="active" style="width: 20%;"></div>
                                                </div>
                                                <div class="text-left px-4"> <small>Profile Completed</small></div>
                                            </div>
                                            <div class="profilesection bg-white text-left p-4">
                                                <h5>Personal Info</h5>
                                                <form id="form_restaurant_basic">
                                                    <div class="form-group mb-3">
                                                        <label>Your Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.48" height="19.367" viewBox="0 0 18.48 19.367">
                                                                        <g id="user-svgrepo-com_13_" data-name="user-svgrepo-com (13)" transform="translate(-11.2)">
                                                                            <path id="Path_233" data-name="Path 233" d="M29.68,18.016v-1.03a3.44,3.44,0,0,0-1.311-2.7,29.662,29.662,0,0,0-4.536-2.86V10.252a5.7,5.7,0,0,0,.341-1.01c.507-.182.784-.927.971-1.585.25-.875.222-1.489-.071-1.83.309-1.684.17-2.924-.408-3.688a1.814,1.814,0,0,0-.9-.646,3.318,3.318,0,0,0-1.1-.959A3.9,3.9,0,0,0,20.644,0c-.135,0-.269.008-.388.016A3.708,3.708,0,0,0,19.269.2s-.008,0-.012,0a4.388,4.388,0,0,0-1.042.531,5.492,5.492,0,0,0-1.042.864,4.335,4.335,0,0,0-1.165,2.048,3.851,3.851,0,0,0-.04,1.838.92.92,0,0,0-.19.182c-.273.36-.285.927-.044,1.787A2.793,2.793,0,0,0,16.5,8.929a5.392,5.392,0,0,0,.547,1.549v.955a29.338,29.338,0,0,0-4.536,2.86,3.434,3.434,0,0,0-1.311,2.7v1.03a1.348,1.348,0,0,0,1.347,1.347H28.333A1.352,1.352,0,0,0,29.68,18.016Zm-17.513,0v-1.03a2.454,2.454,0,0,1,.935-1.929,28.243,28.243,0,0,1,4.556-2.844.637.637,0,0,0,.36-.578V10.347a.487.487,0,0,0-.067-.246,4.38,4.38,0,0,1-.535-1.581.489.489,0,0,0-.36-.4,2.629,2.629,0,0,1-.384-.935,2.207,2.207,0,0,1-.127-.891.5.5,0,0,0,.408-.186.481.481,0,0,0,.075-.46,2.922,2.922,0,0,1-.071-1.767,3.408,3.408,0,0,1,.923-1.608,4.466,4.466,0,0,1,.872-.721l.016-.012a3.33,3.33,0,0,1,.816-.42.014.014,0,0,0,.008,0,2.636,2.636,0,0,1,.729-.135,3.092,3.092,0,0,1,1.866.392,2.275,2.275,0,0,1,.848.769.443.443,0,0,0,.384.257.783.783,0,0,1,.491.353c.234.333.566,1.188.151,3.185a.485.485,0,0,0,.269.539,1.922,1.922,0,0,1-.119.915,3.28,3.28,0,0,1-.345.879.465.465,0,0,0-.273.032.488.488,0,0,0-.289.36,4.911,4.911,0,0,1-.392,1.268.492.492,0,0,0-.048.21v1.489a.641.641,0,0,0,.36.578,28.41,28.41,0,0,1,4.552,2.844,2.454,2.454,0,0,1,.935,1.929v1.03a.379.379,0,0,1-.376.376H12.547A.375.375,0,0,1,12.167,18.016Z" transform="translate(0 0)" fill="#a8a8a8">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter Name" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Mobile Number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="24" viewBox="0 0 14 24">
                                                                        <g id="_7442810861529659196" data-name="7442810861529659196" transform="translate(-5)">
                                                                            <line id="Line_42" data-name="Line 42" x1="13" transform="translate(5.5 19.5)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></line>
                                                                            <path id="Path_118" data-name="Path 118" d="M12,20.75a.749.749,0,1,0,.531.219A.75.75,0,0,0,12,20.75Z" fill="#a8a8a8"></path>
                                                                            <rect id="Rectangle_88" data-name="Rectangle 88" width="13" height="23" rx="2" transform="translate(5.5 0.5)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></rect>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" value="<?= $this->session->userdata('mobile') ?>" disabled style="background-color:none;">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Email ID</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="15.598" viewBox="0 0 20.8 15.598">
                                                                        <path id="Mail" d="M18.847,8H1.946A1.95,1.95,0,0,0,0,9.95v11.7a1.95,1.95,0,0,0,1.95,1.95h16.9a1.95,1.95,0,0,0,1.95-1.95V9.95A1.95,1.95,0,0,0,18.847,8Zm1.3,13.359L14,15.212l6.148-3.918ZM1.946,8.65h16.9a1.3,1.3,0,0,1,1.3,1.3v.574l-8.948,5.7A1.432,1.432,0,0,1,9.622,16.2L.646,10.1V9.95A1.3,1.3,0,0,1,1.946,8.65Zm-1.3,2.237,6.235,4.237L.646,21.359Zm18.2,12.061H1.946a1.3,1.3,0,0,1-1.195-.789L7.42,15.491,9.258,16.74a2.082,2.082,0,0,0,2.29.034l1.9-1.21,6.6,6.6A1.3,1.3,0,0,1,18.847,22.948Z" transform="translate(0.003 -8)" fill="#a8a8a8">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="email" class="form-control" placeholder="Enter Email ID" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 mt-4"><button type="submit" id="RestaurantpersonalinfoSelected" class="btn1">Next</button></div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- //// -->
                                        <div id="RestaurantprofilestepTo" class="profilestepTwo" style="display:none;">
                                            <div class="profileprogresswrp pb-2  mb-4">
                                                <div class="profileprogress mb-2">
                                                    <div class="active" style="width: 60%;"></div>
                                                </div>
                                                <div class="text-left px-4"> <small>Profile Completed</small></div>
                                            </div>
                                            <div class="profilesection bg-white text-left p-4">
                                                <h5>Business Info</h5>
                                                <form id="form_restaurant_bussiness">
                                                    <div class="form-group mb-3">
                                                        <label>Restaurant Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.48" height="19.367" viewBox="0 0 18.48 19.367">
                                                                        <g id="user-svgrepo-com_13_" data-name="user-svgrepo-com (13)" transform="translate(-11.2)">
                                                                            <path id="Path_233" data-name="Path 233" d="M29.68,18.016v-1.03a3.44,3.44,0,0,0-1.311-2.7,29.662,29.662,0,0,0-4.536-2.86V10.252a5.7,5.7,0,0,0,.341-1.01c.507-.182.784-.927.971-1.585.25-.875.222-1.489-.071-1.83.309-1.684.17-2.924-.408-3.688a1.814,1.814,0,0,0-.9-.646,3.318,3.318,0,0,0-1.1-.959A3.9,3.9,0,0,0,20.644,0c-.135,0-.269.008-.388.016A3.708,3.708,0,0,0,19.269.2s-.008,0-.012,0a4.388,4.388,0,0,0-1.042.531,5.492,5.492,0,0,0-1.042.864,4.335,4.335,0,0,0-1.165,2.048,3.851,3.851,0,0,0-.04,1.838.92.92,0,0,0-.19.182c-.273.36-.285.927-.044,1.787A2.793,2.793,0,0,0,16.5,8.929a5.392,5.392,0,0,0,.547,1.549v.955a29.338,29.338,0,0,0-4.536,2.86,3.434,3.434,0,0,0-1.311,2.7v1.03a1.348,1.348,0,0,0,1.347,1.347H28.333A1.352,1.352,0,0,0,29.68,18.016Zm-17.513,0v-1.03a2.454,2.454,0,0,1,.935-1.929,28.243,28.243,0,0,1,4.556-2.844.637.637,0,0,0,.36-.578V10.347a.487.487,0,0,0-.067-.246,4.38,4.38,0,0,1-.535-1.581.489.489,0,0,0-.36-.4,2.629,2.629,0,0,1-.384-.935,2.207,2.207,0,0,1-.127-.891.5.5,0,0,0,.408-.186.481.481,0,0,0,.075-.46,2.922,2.922,0,0,1-.071-1.767,3.408,3.408,0,0,1,.923-1.608,4.466,4.466,0,0,1,.872-.721l.016-.012a3.33,3.33,0,0,1,.816-.42.014.014,0,0,0,.008,0,2.636,2.636,0,0,1,.729-.135,3.092,3.092,0,0,1,1.866.392,2.275,2.275,0,0,1,.848.769.443.443,0,0,0,.384.257.783.783,0,0,1,.491.353c.234.333.566,1.188.151,3.185a.485.485,0,0,0,.269.539,1.922,1.922,0,0,1-.119.915,3.28,3.28,0,0,1-.345.879.465.465,0,0,0-.273.032.488.488,0,0,0-.289.36,4.911,4.911,0,0,1-.392,1.268.492.492,0,0,0-.048.21v1.489a.641.641,0,0,0,.36.578,28.41,28.41,0,0,1,4.552,2.844,2.454,2.454,0,0,1,.935,1.929v1.03a.379.379,0,0,1-.376.376H12.547A.375.375,0,0,1,12.167,18.016Z" transform="translate(0 0)" fill="#a8a8a8">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter Restaurant Name" name="business_name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Business Category</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.85" height="16.68" viewBox="0 0 20.85 16.68">
                                                                        <g id="_14291991451579780443" data-name="14291991451579780443" transform="translate(-5 -8)">
                                                                            <path id="Path_119" data-name="Path 119" d="M15.425,17.43a.482.482,0,0,1-.2-.043L5.3,12.945a.528.528,0,0,1,.018-.963l9.929-3.948a.475.475,0,0,1,.353,0l9.928,3.947a.529.529,0,0,1,.019.964L15.62,17.389a.487.487,0,0,1-.2.041ZM6.825,12.5,15.4,16.333,24.024,12.5l-8.6-3.419Z" transform="translate(0)" fill="#a8a8a8"></path>
                                                                            <path id="Path_120" data-name="Path 120" d="M5.3,20.052a.532.532,0,0,1-.261-.683.5.5,0,0,1,.458-.316.473.473,0,0,1,.2.043L15.4,23.439,25.157,19.1a.467.467,0,0,1,.2-.043.494.494,0,0,1,.456.316.531.531,0,0,1-.261.683l-10.123,4.53Z" transform="translate(0 -3.371)" fill="#a8a8a8"></path>
                                                                            <path id="Path_121" data-name="Path 121" d="M5.3,25.042a.53.53,0,0,1-.261-.682.5.5,0,0,1,.458-.316.483.483,0,0,1,.2.042L15.4,28.431l9.756-4.344a.485.485,0,0,1,.653.273.53.53,0,0,1-.261.682L15.425,29.574Z" transform="translate(0 -4.894)" fill="#a8a8a8"></path>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" value="Restaurant" disabled style="background-color:none;">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Business Mobile Number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="24" viewBox="0 0 14 24">
                                                                        <g id="_7442810861529659196" data-name="7442810861529659196" transform="translate(-5)">
                                                                            <line id="Line_42" data-name="Line 42" x1="13" transform="translate(5.5 19.5)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></line>
                                                                            <path id="Path_118" data-name="Path 118" d="M12,20.75a.749.749,0,1,0,.531.219A.75.75,0,0,0,12,20.75Z" fill="#a8a8a8"></path>
                                                                            <rect id="Rectangle_88" data-name="Rectangle 88" width="13" height="23" rx="2" transform="translate(5.5 0.5)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></rect>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter Business Number" name="bussiness_mobile">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Business Email ID (Optional)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="15.598" viewBox="0 0 20.8 15.598">
                                                                        <path id="Mail" d="M18.847,8H1.946A1.95,1.95,0,0,0,0,9.95v11.7a1.95,1.95,0,0,0,1.95,1.95h16.9a1.95,1.95,0,0,0,1.95-1.95V9.95A1.95,1.95,0,0,0,18.847,8Zm1.3,13.359L14,15.212l6.148-3.918ZM1.946,8.65h16.9a1.3,1.3,0,0,1,1.3,1.3v.574l-8.948,5.7A1.432,1.432,0,0,1,9.622,16.2L.646,10.1V9.95A1.3,1.3,0,0,1,1.946,8.65Zm-1.3,2.237,6.235,4.237L.646,21.359Zm18.2,12.061H1.946a1.3,1.3,0,0,1-1.195-.789L7.42,15.491,9.258,16.74a2.082,2.082,0,0,0,2.29.034l1.9-1.21,6.6,6.6A1.3,1.3,0,0,1,18.847,22.948Z" transform="translate(0.003 -8)" fill="#a8a8a8">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="email" class="form-control" placeholder="Enter Business Email ID" name="bussiness_email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label>Business KYC</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.286" height="22" viewBox="0 0 17.286 22">
                                                                        <g id="_21-30" data-name="21-30" transform="translate(-5 -2)">
                                                                            <g id="Document" transform="translate(5 2)">
                                                                                <path id="Path_139" data-name="Path 139" d="M21.135,5.238,19.048,3.151A3.9,3.9,0,0,0,16.27,2H8.929A3.933,3.933,0,0,0,5,5.929V20.071A3.933,3.933,0,0,0,8.929,24h9.429a3.933,3.933,0,0,0,3.929-3.929V8.016a3.9,3.9,0,0,0-1.151-2.778ZM20.024,6.349a2.39,2.39,0,0,1,.3.365H18.357a.786.786,0,0,1-.786-.786V3.964a2.39,2.39,0,0,1,.365.3Zm-1.667,16.08H8.929a2.357,2.357,0,0,1-2.357-2.357V5.929A2.357,2.357,0,0,1,8.929,3.571H16V5.929a2.357,2.357,0,0,0,2.357,2.357h2.357V20.071a2.357,2.357,0,0,1-2.357,2.357Z" transform="translate(-5 -2)" fill="#a8a8a8"></path>
                                                                                <path id="Path_140" data-name="Path 140" d="M10.786,10.571h3.143a.786.786,0,1,0,0-1.571H10.786a.786.786,0,1,0,0,1.571Z" transform="translate(-6.071 -3.5)" fill="#a8a8a8"></path>
                                                                                <path id="Path_141" data-name="Path 141" d="M18.643,13H10.786a.786.786,0,0,0,0,1.571h7.857a.786.786,0,0,0,0-1.571Z" transform="translate(-6.071 -4.357)" fill="#a8a8a8"></path>
                                                                                <path id="Path_142" data-name="Path 142" d="M18.643,17H10.786a.786.786,0,1,0,0,1.571h7.857a.786.786,0,0,0,0-1.571Z" transform="translate(-6.071 -5.214)" fill="#a8a8a8"></path>
                                                                                <path id="Path_143" data-name="Path 143" d="M17.071,21H10.786a.786.786,0,1,0,0,1.571h6.286a.786.786,0,0,0,0-1.571Z" transform="translate(-6.071 -6.071)" fill="#a8a8a8"></path>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <select class="form-control" name="kyc_document">
                                                                <option value="">Select</option>
                                                                <option value="aadhar">Aadhar</option>
                                                                <option value="pan">Pan</option>
                                                                <option value="voter">Voter Id</option>
                                                                <!-- <option>Document 4</option> -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile" name="kyc_image">
                                                            <label class="custom-file-label" for="customFile">Upload
                                                                Image</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>GST (Optional)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.607" height="20.232" viewBox="0 0 17.607 20.232">
                                                                        <g id="Layer_2" data-name="Layer 2" transform="translate(0.004)">
                                                                            <g id="Layer_1" data-name="Layer 1" transform="translate(-0.004)">
                                                                                <path id="Path_128" data-name="Path 128" d="M16.8,18.724l-.332-.424-1.577,1.751h0a.426.426,0,0,1-.642,0l-1.606-1.737-1.573,1.694a.426.426,0,0,1-.639.02L8.762,18.314,7.246,20.049l-.028.033a.424.424,0,0,1-.648,0L4.982,18.314,3.343,20.051h0a.426.426,0,0,1-.639,0L1.146,18.287.823,18.7a.448.448,0,0,1-.367.206A.485.485,0,0,1,0,18.4V.508A.483.483,0,0,1,.452,0H17.143A.485.485,0,0,1,17.6.508V18.4h0a.525.525,0,0,1-.16.384.419.419,0,0,1-.641-.05ZM2.71,2.937H6.434V4.059H5.193V7.343H3.953V4.059H2.712V2.937ZM9.035,6.651H7.716l-.193.692H6.238L7.725,2.937H9.063l1.481,4.406H9.223l-.184-.69ZM8.808,5.613,8.376,4.038,7.943,5.617Zm1.836-2.676h1.349l.7,1.355.687-1.355h1.331L13.481,5.07l1.346,2.273H13.45l-.775-1.413-.782,1.413H10.53l1.364-2.295Zm2.408,11.056a.393.393,0,0,1,0,.776H3.484a.393.393,0,0,1,0-.776Zm1.913-2.506a.393.393,0,0,1,0,.778H3.385a.393.393,0,0,1,0-.778Zm.017-2.506a.385.385,0,0,1,.323.512.352.352,0,0,1-.336.266H3.385a.393.393,0,0,1,0-.778Zm1.687-7.945H.927V17.132a.42.42,0,0,1,.51.066.127.127,0,0,1,.026.028h0l1.586,1.786,1.632-1.735a.426.426,0,0,1,.639,0h0L6.893,19.03l1.524-1.749a.424.424,0,0,1,.637-.018h0L10.73,18.99l1.592-1.7a.424.424,0,0,1,.637,0l1.593,1.726,1.6-1.775a.422.422,0,0,1,.518-.1Z" transform="translate(0.004)" fill="#a8a8a8"></path>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter GSTIN" name="gst">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Store Verifications</label>
                                                        <div class="d-flex  mb-3">
                                                            <div class="imageholder text-center">
                                                                <div class="holder">
                                                                    <img id="imgPreview" src="<?= base_url() ?>assets/images/round-plus.jpg" alt="pic" class="imgPreview4">
                                                                    <input type="file" name="front_image" id="photo" class="photo4">
                                                                </div>
                                                                <small>Front Picture</small>
                                                            </div>
                                                            <div class="imageholder text-center">
                                                                <div class="holder">
                                                                    <img id="imgPreview" src="<?= base_url() ?>assets/images/round-plus.jpg" alt="pic" class="imgPreview5">
                                                                    <input type="file" name="inside_image" id="photo" class="photo5">
                                                                </div>
                                                                <small>Inside Picture</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 mt-4"><button type="submit" id="RestaurantInfoSelected" class="btn1">Next</button></div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- //// -->
                                        <div id="RestaurantprofilestepTre" class="profilestepThree" style="display:none;">
                                            <div class="profileprogresswrp pb-2  mb-4">
                                                <div class="profileprogress mb-2">
                                                    <div class="active" style="width: 100%;"></div>
                                                </div>
                                                <div class="text-left px-4"> <small>Profile Completed</small></div>
                                            </div>
                                            <div class="profilesection bg-white text-left p-4">
                                                <h5>Financial Info</h5>
                                                <form id="form_restaurant_banking">
                                                    <div class="form-group mb-3">
                                                        <label>Account Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.48" height="19.367" viewBox="0 0 18.48 19.367">
                                                                        <g id="user-svgrepo-com_13_" data-name="user-svgrepo-com (13)" transform="translate(-11.2)">
                                                                            <path id="Path_233" data-name="Path 233" d="M29.68,18.016v-1.03a3.44,3.44,0,0,0-1.311-2.7,29.662,29.662,0,0,0-4.536-2.86V10.252a5.7,5.7,0,0,0,.341-1.01c.507-.182.784-.927.971-1.585.25-.875.222-1.489-.071-1.83.309-1.684.17-2.924-.408-3.688a1.814,1.814,0,0,0-.9-.646,3.318,3.318,0,0,0-1.1-.959A3.9,3.9,0,0,0,20.644,0c-.135,0-.269.008-.388.016A3.708,3.708,0,0,0,19.269.2s-.008,0-.012,0a4.388,4.388,0,0,0-1.042.531,5.492,5.492,0,0,0-1.042.864,4.335,4.335,0,0,0-1.165,2.048,3.851,3.851,0,0,0-.04,1.838.92.92,0,0,0-.19.182c-.273.36-.285.927-.044,1.787A2.793,2.793,0,0,0,16.5,8.929a5.392,5.392,0,0,0,.547,1.549v.955a29.338,29.338,0,0,0-4.536,2.86,3.434,3.434,0,0,0-1.311,2.7v1.03a1.348,1.348,0,0,0,1.347,1.347H28.333A1.352,1.352,0,0,0,29.68,18.016Zm-17.513,0v-1.03a2.454,2.454,0,0,1,.935-1.929,28.243,28.243,0,0,1,4.556-2.844.637.637,0,0,0,.36-.578V10.347a.487.487,0,0,0-.067-.246,4.38,4.38,0,0,1-.535-1.581.489.489,0,0,0-.36-.4,2.629,2.629,0,0,1-.384-.935,2.207,2.207,0,0,1-.127-.891.5.5,0,0,0,.408-.186.481.481,0,0,0,.075-.46,2.922,2.922,0,0,1-.071-1.767,3.408,3.408,0,0,1,.923-1.608,4.466,4.466,0,0,1,.872-.721l.016-.012a3.33,3.33,0,0,1,.816-.42.014.014,0,0,0,.008,0,2.636,2.636,0,0,1,.729-.135,3.092,3.092,0,0,1,1.866.392,2.275,2.275,0,0,1,.848.769.443.443,0,0,0,.384.257.783.783,0,0,1,.491.353c.234.333.566,1.188.151,3.185a.485.485,0,0,0,.269.539,1.922,1.922,0,0,1-.119.915,3.28,3.28,0,0,1-.345.879.465.465,0,0,0-.273.032.488.488,0,0,0-.289.36,4.911,4.911,0,0,1-.392,1.268.492.492,0,0,0-.048.21v1.489a.641.641,0,0,0,.36.578,28.41,28.41,0,0,1,4.552,2.844,2.454,2.454,0,0,1,.935,1.929v1.03a.379.379,0,0,1-.376.376H12.547A.375.375,0,0,1,12.167,18.016Z" transform="translate(0 0)" fill="#a8a8a8">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter Account Name" name="account_name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Bank Account Number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 28 24">
                                                                        <g id="_4987286121594941299" data-name="4987286121594941299" transform="translate(-0.5 -2.5)">
                                                                            <path id="Path_136" data-name="Path 136" d="M14.5,3,3,9.192v2.654H26V9.192Z" transform="translate(-0.231)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></path>
                                                                            <rect id="Rectangle_117" data-name="Rectangle 117" width="3" height="9" transform="translate(13 12)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                            <rect id="Rectangle_118" data-name="Rectangle 118" width="4" height="9" transform="translate(20 12)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                            <rect id="Rectangle_119" data-name="Rectangle 119" width="3" height="9" transform="translate(5 12)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                            <rect id="Rectangle_120" data-name="Rectangle 120" width="23" height="2" transform="translate(3 21)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                            <rect id="Rectangle_121" data-name="Rectangle 121" width="27" height="3" transform="translate(1 23)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter Bank Account Number" name="account_number">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>IFSC (Code)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24" height="24" fill="#a8a8a8" viewBox="0 0 92 92" enable-background="new 0 0 92 92" xml:space="preserve">
                                                                        <path id="XMLID_30_" d="M21,53c-1.8,0-3.7-0.8-5-2.1c-1.3-1.3-2-3.1-2-4.9c0-1.8,0.8-3.6,2-5c1.3-1.3,3.1-2,5-2c1.8,0,3.6,0.8,4.9,2
                                                            c1.3,1.3,2.1,3.1,2.1,5c0,1.8-0.8,3.6-2.1,4.9C24.6,52.2,22.8,53,21,53z M50.9,50.9c1.3-1.3,2.1-3.1,2.1-4.9c0-1.8-0.8-3.6-2.1-5
                                                            c-1.3-1.3-3.1-2-4.9-2c-1.8,0-3.7,0.8-5,2c-1.3,1.3-2,3.1-2,5c0,1.8,0.8,3.6,2,4.9c1.3,1.3,3.1,2.1,5,2.1
                                                            C47.8,53,49.6,52.2,50.9,50.9z M75.9,50.9c1.3-1.3,2.1-3.1,2.1-4.9c0-1.8-0.8-3.6-2.1-5c-1.3-1.3-3.1-2-4.9-2c-1.8,0-3.7,0.8-5,2
                                                            c-1.3,1.3-2,3.1-2,5c0,1.8,0.8,3.6,2,4.9c1.3,1.3,3.1,2.1,5,2.1C72.8,53,74.6,52.2,75.9,50.9z" />
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter IFSC (Code)" name="ifsc">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>UPI ID</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 28 28">
                                                                        <g id="Group_38" data-name="Group 38" transform="translate(-1211.5 -607.5)">
                                                                            <path id="Path_122" data-name="Path 122" d="M22.278,27.093H16.5V16.5H27.093V27.093" transform="translate(1196 592)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                                            <rect id="Rectangle_104" data-name="Rectangle 104" width="4.237" height="4.237" rx="0.88" transform="translate(1215.679 611.678)" fill="#a7a7a7"></rect>
                                                                            <rect id="Rectangle_105" data-name="Rectangle 105" width="4.237" height="4.237" rx="0.88" transform="translate(1231.086 611.678)" fill="#a7a7a7"></rect>
                                                                            <path id="Path_123" data-name="Path 123" d="M32.5,27.093V16.5H43.093V27.093H37.315" transform="translate(1195.407 592)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                                            <rect id="Rectangle_106" data-name="Rectangle 106" width="4.237" height="4.237" rx="0.88" transform="translate(1215.679 627.085)" fill="#a7a7a7"></rect>
                                                                            <path id="Path_124" data-name="Path 124" d="M27.093,32.5V43.093H16.5V32.5h5.778" transform="translate(1196 591.407)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                                            <path id="Path_125" data-name="Path 125" d="M35.8,32.5v3.178h7.415" transform="translate(1195.285 591.407)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                                            <line id="Line_51" data-name="Line 51" y1="10.593" transform="translate(1227.907 623.907)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                                            <path id="Path_126" data-name="Path 126" d="M43.378,32.5H40.2v3.178" transform="translate(1195.122 591.407)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                                            <path id="Path_127" data-name="Path 127" d="M43.215,43.337V39.1H35.8" transform="translate(1195.285 591.163)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                                            <line id="Line_52" data-name="Line 52" y1="1.059" transform="translate(1231.086 633.441)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                                            <line id="Line_53" data-name="Line 53" y1="1.059" transform="translate(1234.263 633.441)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter UPI ID" name="upi">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 mt-4"><button type="submit" class="btn1 rtegisDone">Done</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  ==========================================  Restaurant ========================================= -->
                                <!--  ==========================================  Service ========================================= -->
                                <div id="Serviceprofilesetep1" style="display: none;">
                                    <div class="bg-light">
                                        <div class="proavatersec pt-3 pb-3">
                                            <div class="proavaterwrp">
                                                <div class="proavater">
                                                    <img id="imgPreview" src="<?= base_url() ?>assets/images/avater.jpg" alt="pic" class="imgPreview3">
                                                    <input type="file" form="form_service_banking" name="profile_image" id="photo" class="photo3">
                                                </div>
                                                <div class="cameraico">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 41 41">
                                                        <g id="Group_9" data-name="Group 9" transform="translate(-218 -128)">
                                                            <circle id="Ellipse_25" data-name="Ellipse 25" cx="20.5" cy="20.5" r="20.5" transform="translate(218 128)" fill="#8a8a8a"></circle>
                                                            <g id="Layer_5" data-name="Layer 5" transform="translate(226.593 133.914)">
                                                                <path id="Path_87" data-name="Path 87" d="M15.87,15.577a3.633,3.633,0,1,1-3.633-3.633A3.633,3.633,0,0,1,15.87,15.577Zm5.944-5.614V21.191a1.981,1.981,0,0,1-1.981,1.981H3.981A1.981,1.981,0,0,1,2,21.191V9.963A1.981,1.981,0,0,1,3.981,7.981H19.832A1.981,1.981,0,0,1,21.814,9.963ZM6.623,11.284A1.321,1.321,0,1,0,5.3,12.6,1.321,1.321,0,0,0,6.623,11.284Zm10.567,4.293a4.953,4.953,0,1,0-4.953,4.953,4.953,4.953,0,0,0,4.953-4.953ZM15.539,6.66a.66.66,0,0,0-.66-.66H8.935a.66.66,0,0,0,0,1.321h5.944A.66.66,0,0,0,15.539,6.66Z" fill="#fff"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                            <small class="text-center d-block mt-2">Add Photo</small>
                                        </div>
                                        <div id="ServiceprofilestpOn" class="profilestepOne">
                                            <div class="profileprogresswrp pb-2  mb-4">
                                                <div class="profileprogress mb-2">
                                                    <div class="active" style="width: 20%;"></div>
                                                </div>
                                                <div class="text-left px-4"> <small>Profile Completed</small></div>
                                            </div>
                                            <div class="profilesection bg-white text-left p-4">
                                                <h5>Personal Info</h5>
                                                <form id="form_service_basic">
                                                    <div class="form-group mb-3">
                                                        <label>Your Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.48" height="19.367" viewBox="0 0 18.48 19.367">
                                                                        <g id="user-svgrepo-com_13_" data-name="user-svgrepo-com (13)" transform="translate(-11.2)">
                                                                            <path id="Path_233" data-name="Path 233" d="M29.68,18.016v-1.03a3.44,3.44,0,0,0-1.311-2.7,29.662,29.662,0,0,0-4.536-2.86V10.252a5.7,5.7,0,0,0,.341-1.01c.507-.182.784-.927.971-1.585.25-.875.222-1.489-.071-1.83.309-1.684.17-2.924-.408-3.688a1.814,1.814,0,0,0-.9-.646,3.318,3.318,0,0,0-1.1-.959A3.9,3.9,0,0,0,20.644,0c-.135,0-.269.008-.388.016A3.708,3.708,0,0,0,19.269.2s-.008,0-.012,0a4.388,4.388,0,0,0-1.042.531,5.492,5.492,0,0,0-1.042.864,4.335,4.335,0,0,0-1.165,2.048,3.851,3.851,0,0,0-.04,1.838.92.92,0,0,0-.19.182c-.273.36-.285.927-.044,1.787A2.793,2.793,0,0,0,16.5,8.929a5.392,5.392,0,0,0,.547,1.549v.955a29.338,29.338,0,0,0-4.536,2.86,3.434,3.434,0,0,0-1.311,2.7v1.03a1.348,1.348,0,0,0,1.347,1.347H28.333A1.352,1.352,0,0,0,29.68,18.016Zm-17.513,0v-1.03a2.454,2.454,0,0,1,.935-1.929,28.243,28.243,0,0,1,4.556-2.844.637.637,0,0,0,.36-.578V10.347a.487.487,0,0,0-.067-.246,4.38,4.38,0,0,1-.535-1.581.489.489,0,0,0-.36-.4,2.629,2.629,0,0,1-.384-.935,2.207,2.207,0,0,1-.127-.891.5.5,0,0,0,.408-.186.481.481,0,0,0,.075-.46,2.922,2.922,0,0,1-.071-1.767,3.408,3.408,0,0,1,.923-1.608,4.466,4.466,0,0,1,.872-.721l.016-.012a3.33,3.33,0,0,1,.816-.42.014.014,0,0,0,.008,0,2.636,2.636,0,0,1,.729-.135,3.092,3.092,0,0,1,1.866.392,2.275,2.275,0,0,1,.848.769.443.443,0,0,0,.384.257.783.783,0,0,1,.491.353c.234.333.566,1.188.151,3.185a.485.485,0,0,0,.269.539,1.922,1.922,0,0,1-.119.915,3.28,3.28,0,0,1-.345.879.465.465,0,0,0-.273.032.488.488,0,0,0-.289.36,4.911,4.911,0,0,1-.392,1.268.492.492,0,0,0-.048.21v1.489a.641.641,0,0,0,.36.578,28.41,28.41,0,0,1,4.552,2.844,2.454,2.454,0,0,1,.935,1.929v1.03a.379.379,0,0,1-.376.376H12.547A.375.375,0,0,1,12.167,18.016Z" transform="translate(0 0)" fill="#a8a8a8">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter Name" name="name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Mobile Number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="24" viewBox="0 0 14 24">
                                                                        <g id="_7442810861529659196" data-name="7442810861529659196" transform="translate(-5)">
                                                                            <line id="Line_42" data-name="Line 42" x1="13" transform="translate(5.5 19.5)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></line>
                                                                            <path id="Path_118" data-name="Path 118" d="M12,20.75a.749.749,0,1,0,.531.219A.75.75,0,0,0,12,20.75Z" fill="#a8a8a8"></path>
                                                                            <rect id="Rectangle_88" data-name="Rectangle 88" width="13" height="23" rx="2" transform="translate(5.5 0.5)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></rect>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" value="<?= $this->session->userdata('mobile') ?>" disabled style="background-color:none;">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Email ID</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20.8" height="15.598" viewBox="0 0 20.8 15.598">
                                                                        <path id="Mail" d="M18.847,8H1.946A1.95,1.95,0,0,0,0,9.95v11.7a1.95,1.95,0,0,0,1.95,1.95h16.9a1.95,1.95,0,0,0,1.95-1.95V9.95A1.95,1.95,0,0,0,18.847,8Zm1.3,13.359L14,15.212l6.148-3.918ZM1.946,8.65h16.9a1.3,1.3,0,0,1,1.3,1.3v.574l-8.948,5.7A1.432,1.432,0,0,1,9.622,16.2L.646,10.1V9.95A1.3,1.3,0,0,1,1.946,8.65Zm-1.3,2.237,6.235,4.237L.646,21.359Zm18.2,12.061H1.946a1.3,1.3,0,0,1-1.195-.789L7.42,15.491,9.258,16.74a2.082,2.082,0,0,0,2.29.034l1.9-1.21,6.6,6.6A1.3,1.3,0,0,1,18.847,22.948Z" transform="translate(0.003 -8)" fill="#a8a8a8">
                                                                        </path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="email" class="form-control" placeholder="Enter Email ID" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 mt-4"><button type="submit" id="ServicepersonalinfoSelected" class="btn1">Next</button></div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- //// -->
                                        <div id="ServiceprofilestepTo" class="profilestepTwo" style="display:none;">
                                            <div class="profileprogresswrp pb-2  mb-4">
                                                <div class="profileprogress mb-2">
                                                    <div class="active" style="width: 60%;"></div>
                                                </div>
                                                <div class="text-left px-4"> <small>Profile Completed</small></div>
                                            </div>
                                            <div class="profilesection bg-white text-left p-4">
                                                <h5>Business Info</h5>
                                                <form id="form_service_bussiness">
                                                    <div class="form-group mb-2">
                                                        <label>Business Address</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 30.23 30.23">
                                                                        <g id="Icons" transform="translate(5 2)">
                                                                            <g id="Rounded" transform="translate(-5 -2)">
                                                                                <g id="Maps">
                                                                                    <g id="_-Round-_-Maps-_-place" data-name="-Round-/-Maps-/-place">
                                                                                        <g id="Group_6" data-name="Group 6">
                                                                                            <path id="Path" d="M0,0H30.23V30.23H0Z" fill="none" fill-rule="evenodd">
                                                                                            </path>
                                                                                            <path id="_-Icon-Color" data-name="🔹-Icon-Color" d="M13.817,2A8.811,8.811,0,0,0,5,10.817c0,5.252,5.567,12.5,7.86,15.254a1.251,1.251,0,0,0,1.927,0c2.28-2.758,7.847-10,7.847-15.254A8.811,8.811,0,0,0,13.817,2Zm0,11.966a3.149,3.149,0,1,1,3.149-3.149A3.15,3.15,0,0,1,13.817,13.966Z" transform="translate(1.298 0.519)" fill="#a8a8a8" fill-rule="evenodd"></path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Flat/ Building Number" name="building">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 30.23 30.23">
                                                                        <g id="Icons" transform="translate(5 2)">
                                                                            <g id="Rounded" transform="translate(-5 -2)">
                                                                                <g id="Maps">
                                                                                    <g id="_-Round-_-Maps-_-place" data-name="-Round-/-Maps-/-place">
                                                                                        <g id="Group_6" data-name="Group 6">
                                                                                            <path id="Path" d="M0,0H30.23V30.23H0Z" fill="none" fill-rule="evenodd">
                                                                                            </path>
                                                                                            <path id="_-Icon-Color" data-name="🔹-Icon-Color" d="M13.817,2A8.811,8.811,0,0,0,5,10.817c0,5.252,5.567,12.5,7.86,15.254a1.251,1.251,0,0,0,1.927,0c2.28-2.758,7.847-10,7.847-15.254A8.811,8.811,0,0,0,13.817,2Zm0,11.966a3.149,3.149,0,1,1,3.149-3.149A3.15,3.15,0,0,1,13.817,13.966Z" transform="translate(1.298 0.519)" fill="#a8a8a8" fill-rule="evenodd"></path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Area / Locality, City" name="address">
                                                        </div>
                                                    </div>
                                                    <div class="form-group ">
                                                        <label>Personal KYC</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="17.286" height="22" viewBox="0 0 17.286 22">
                                                                        <g id="_21-30" data-name="21-30" transform="translate(-5 -2)">
                                                                            <g id="Document" transform="translate(5 2)">
                                                                                <path id="Path_139" data-name="Path 139" d="M21.135,5.238,19.048,3.151A3.9,3.9,0,0,0,16.27,2H8.929A3.933,3.933,0,0,0,5,5.929V20.071A3.933,3.933,0,0,0,8.929,24h9.429a3.933,3.933,0,0,0,3.929-3.929V8.016a3.9,3.9,0,0,0-1.151-2.778ZM20.024,6.349a2.39,2.39,0,0,1,.3.365H18.357a.786.786,0,0,1-.786-.786V3.964a2.39,2.39,0,0,1,.365.3Zm-1.667,16.08H8.929a2.357,2.357,0,0,1-2.357-2.357V5.929A2.357,2.357,0,0,1,8.929,3.571H16V5.929a2.357,2.357,0,0,0,2.357,2.357h2.357V20.071a2.357,2.357,0,0,1-2.357,2.357Z" transform="translate(-5 -2)" fill="#a8a8a8"></path>
                                                                                <path id="Path_140" data-name="Path 140" d="M10.786,10.571h3.143a.786.786,0,1,0,0-1.571H10.786a.786.786,0,1,0,0,1.571Z" transform="translate(-6.071 -3.5)" fill="#a8a8a8"></path>
                                                                                <path id="Path_141" data-name="Path 141" d="M18.643,13H10.786a.786.786,0,0,0,0,1.571h7.857a.786.786,0,0,0,0-1.571Z" transform="translate(-6.071 -4.357)" fill="#a8a8a8"></path>
                                                                                <path id="Path_142" data-name="Path 142" d="M18.643,17H10.786a.786.786,0,1,0,0,1.571h7.857a.786.786,0,0,0,0-1.571Z" transform="translate(-6.071 -5.214)" fill="#a8a8a8"></path>
                                                                                <path id="Path_143" data-name="Path 143" d="M17.071,21H10.786a.786.786,0,1,0,0,1.571h6.286a.786.786,0,0,0,0-1.571Z" transform="translate(-6.071 -6.071)" fill="#a8a8a8"></path>
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <select class="form-control" id="" name="kyc_document">
                                                                <option value="">Select Document</option>
                                                                <option value="aadhar">Aadhar</option>
                                                                <option value="pan">Pan</option>
                                                                <option value="voter">Voter Id</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile" name="kyc_image">
                                                            <label class="custom-file-label" for="customFile">Upload
                                                                Image</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 mt-4"><button type="submit" id="ServiceBusinessInfoSelected" class="btn1">Next</button></div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- //// -->
                                        <div id="ServiceprofilestepTre" class="profilestepThree" style="display:none">
                                            <div class="profileprogresswrp pb-2  mb-4">
                                                <div class="profileprogress mb-2">
                                                    <div class="active" style="width: 100%;"></div>
                                                </div>
                                                <div class="text-left px-4"> <small>Profile Completed</small></div>
                                            </div>
                                            <div class="profilesection bg-white text-left p-4">
                                                <h5>Financial Info</h5>
                                                <form id="form_service_banking">
                                                    <div class="form-group mb-3">
                                                        <label>Account Name</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18.48" height="19.367" viewBox="0 0 18.48 19.367">
                                                                        <g id="user-svgrepo-com_13_" data-name="user-svgrepo-com (13)" transform="translate(-11.2)">
                                                                            <path id="Path_233" data-name="Path 233" d="M29.68,18.016v-1.03a3.44,3.44,0,0,0-1.311-2.7,29.662,29.662,0,0,0-4.536-2.86V10.252a5.7,5.7,0,0,0,.341-1.01c.507-.182.784-.927.971-1.585.25-.875.222-1.489-.071-1.83.309-1.684.17-2.924-.408-3.688a1.814,1.814,0,0,0-.9-.646,3.318,3.318,0,0,0-1.1-.959A3.9,3.9,0,0,0,20.644,0c-.135,0-.269.008-.388.016A3.708,3.708,0,0,0,19.269.2s-.008,0-.012,0a4.388,4.388,0,0,0-1.042.531,5.492,5.492,0,0,0-1.042.864,4.335,4.335,0,0,0-1.165,2.048,3.851,3.851,0,0,0-.04,1.838.92.92,0,0,0-.19.182c-.273.36-.285.927-.044,1.787A2.793,2.793,0,0,0,16.5,8.929a5.392,5.392,0,0,0,.547,1.549v.955a29.338,29.338,0,0,0-4.536,2.86,3.434,3.434,0,0,0-1.311,2.7v1.03a1.348,1.348,0,0,0,1.347,1.347H28.333A1.352,1.352,0,0,0,29.68,18.016Zm-17.513,0v-1.03a2.454,2.454,0,0,1,.935-1.929,28.243,28.243,0,0,1,4.556-2.844.637.637,0,0,0,.36-.578V10.347a.487.487,0,0,0-.067-.246,4.38,4.38,0,0,1-.535-1.581.489.489,0,0,0-.36-.4,2.629,2.629,0,0,1-.384-.935,2.207,2.207,0,0,1-.127-.891.5.5,0,0,0,.408-.186.481.481,0,0,0,.075-.46,2.922,2.922,0,0,1-.071-1.767,3.408,3.408,0,0,1,.923-1.608,4.466,4.466,0,0,1,.872-.721l.016-.012a3.33,3.33,0,0,1,.816-.42.014.014,0,0,0,.008,0,2.636,2.636,0,0,1,.729-.135,3.092,3.092,0,0,1,1.866.392,2.275,2.275,0,0,1,.848.769.443.443,0,0,0,.384.257.783.783,0,0,1,.491.353c.234.333.566,1.188.151,3.185a.485.485,0,0,0,.269.539,1.922,1.922,0,0,1-.119.915,3.28,3.28,0,0,1-.345.879.465.465,0,0,0-.273.032.488.488,0,0,0-.289.36,4.911,4.911,0,0,1-.392,1.268.492.492,0,0,0-.048.21v1.489a.641.641,0,0,0,.36.578,28.41,28.41,0,0,1,4.552,2.844,2.454,2.454,0,0,1,.935,1.929v1.03a.379.379,0,0,1-.376.376H12.547A.375.375,0,0,1,12.167,18.016Z" transform="translate(0 0)" fill="#a8a8a8">
                                                                            </path>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter Account Name" name="account_name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>Bank Account Number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 28 24">
                                                                        <g id="_4987286121594941299" data-name="4987286121594941299" transform="translate(-0.5 -2.5)">
                                                                            <path id="Path_136" data-name="Path 136" d="M14.5,3,3,9.192v2.654H26V9.192Z" transform="translate(-0.231)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></path>
                                                                            <rect id="Rectangle_117" data-name="Rectangle 117" width="3" height="9" transform="translate(13 12)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                            <rect id="Rectangle_118" data-name="Rectangle 118" width="4" height="9" transform="translate(20 12)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                            <rect id="Rectangle_119" data-name="Rectangle 119" width="3" height="9" transform="translate(5 12)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                            <rect id="Rectangle_120" data-name="Rectangle 120" width="23" height="2" transform="translate(3 21)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                            <rect id="Rectangle_121" data-name="Rectangle 121" width="27" height="3" transform="translate(1 23)" fill="none" stroke="#a8a8a8" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter Bank Account Number" name="account_number">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>IFSC (Code)</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24" height="24" fill="#a8a8a8" viewBox="0 0 92 92" enable-background="new 0 0 92 92" xml:space="preserve">
                                                                        <path id="XMLID_30_" d="M21,53c-1.8,0-3.7-0.8-5-2.1c-1.3-1.3-2-3.1-2-4.9c0-1.8,0.8-3.6,2-5c1.3-1.3,3.1-2,5-2c1.8,0,3.6,0.8,4.9,2
                                                            c1.3,1.3,2.1,3.1,2.1,5c0,1.8-0.8,3.6-2.1,4.9C24.6,52.2,22.8,53,21,53z M50.9,50.9c1.3-1.3,2.1-3.1,2.1-4.9c0-1.8-0.8-3.6-2.1-5
                                                            c-1.3-1.3-3.1-2-4.9-2c-1.8,0-3.7,0.8-5,2c-1.3,1.3-2,3.1-2,5c0,1.8,0.8,3.6,2,4.9c1.3,1.3,3.1,2.1,5,2.1
                                                            C47.8,53,49.6,52.2,50.9,50.9z M75.9,50.9c1.3-1.3,2.1-3.1,2.1-4.9c0-1.8-0.8-3.6-2.1-5c-1.3-1.3-3.1-2-4.9-2c-1.8,0-3.7,0.8-5,2
                                                            c-1.3,1.3-2,3.1-2,5c0,1.8,0.8,3.6,2,4.9c1.3,1.3,3.1,2.1,5,2.1C72.8,53,74.6,52.2,75.9,50.9z"></path>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter IFSC (Code)" name="ifsc">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <label>UPI ID</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 28 28">
                                                                        <g id="Group_38" data-name="Group 38" transform="translate(-1211.5 -607.5)">
                                                                            <path id="Path_122" data-name="Path 122" d="M22.278,27.093H16.5V16.5H27.093V27.093" transform="translate(1196 592)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                                            <rect id="Rectangle_104" data-name="Rectangle 104" width="4.237" height="4.237" rx="0.88" transform="translate(1215.679 611.678)" fill="#a7a7a7"></rect>
                                                                            <rect id="Rectangle_105" data-name="Rectangle 105" width="4.237" height="4.237" rx="0.88" transform="translate(1231.086 611.678)" fill="#a7a7a7"></rect>
                                                                            <path id="Path_123" data-name="Path 123" d="M32.5,27.093V16.5H43.093V27.093H37.315" transform="translate(1195.407 592)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                                            <rect id="Rectangle_106" data-name="Rectangle 106" width="4.237" height="4.237" rx="0.88" transform="translate(1215.679 627.085)" fill="#a7a7a7"></rect>
                                                                            <path id="Path_124" data-name="Path 124" d="M27.093,32.5V43.093H16.5V32.5h5.778" transform="translate(1196 591.407)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                                            <path id="Path_125" data-name="Path 125" d="M35.8,32.5v3.178h7.415" transform="translate(1195.285 591.407)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                                            <line id="Line_51" data-name="Line 51" y1="10.593" transform="translate(1227.907 623.907)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                                            <path id="Path_126" data-name="Path 126" d="M43.378,32.5H40.2v3.178" transform="translate(1195.122 591.407)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                                            <path id="Path_127" data-name="Path 127" d="M43.215,43.337V39.1H35.8" transform="translate(1195.285 591.163)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                                            <line id="Line_52" data-name="Line 52" y1="1.059" transform="translate(1231.086 633.441)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                                            <line id="Line_53" data-name="Line 53" y1="1.059" transform="translate(1234.263 633.441)" fill="none" stroke="#a7a7a7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                                        </g>
                                                                    </svg>
                                                                </span>
                                                            </div>
                                                            <input type="text" class="form-control" placeholder="Enter UPI ID" name="upi">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 mt-4"><button type="submit" class="btn1 rtegisDone">Done</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  =======================================  End Service ==================================== -->
                            </div>
                            <div id="thankyousec" class="text-center" style="display:none;">
                                <h4 class="mb-3">Thank your Registration</h4>
                                <p>We will review and activate your account.
                                    Meanwhile you can complete store settings and add products.</p>
                                <a href="" class="btn1 gotodashboardbtn" id="btn_dashboard">Go To Dashboard</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 cudtomrtpdng">
                        <div class="d-block text-center mb-2">
                            <div class="bmlogo"><img src="<?= base_url() ?>assets/images/bmlogo.png" alt=""></div>
                            <div class="logotitle h3 mt-2">Bikrimart</div>
                            <span>Trusted by thousand of <b>Small Businesses</b> </span>
                        </div>
                        <div class="text-center d-bloxk mb-2">
                            <h5>Grow your business faster by selling on Bikrimart</h5>
                        </div>
                        <div class="row spotdng justify-content-between align-items-center ">
                            <div class="col-md-6 mt-3 px-lg-2">
                                <div class="lgsidebbox">
                                    <div class="lgsidebboximg"><svg xmlns="http://www.w3.org/2000/svg" width="28.69" height="28.691" viewBox="0 0 28.69 28.691">
                                            <g id="Group_29" data-name="Group 29" transform="translate(0 0)">
                                                <path id="Path_189" data-name="Path 189" d="M23.987,25.64H14.542a1.653,1.653,0,0,1-1.653-1.653V14.542a1.653,1.653,0,0,1,1.653-1.653h9.445a1.653,1.653,0,0,1,1.653,1.653v9.445a1.654,1.654,0,0,1-1.653,1.653Z" transform="translate(-12.889 -12.889)" fill="#2fc99a" />
                                                <path id="Path_190" data-name="Path 190" d="M39.927,25.64H30.481a1.653,1.653,0,0,1-1.653-1.653V14.542a1.653,1.653,0,0,1,1.653-1.653h9.446a1.653,1.653,0,0,1,1.653,1.653v9.445a1.653,1.653,0,0,1-1.653,1.653ZM23.987,41.58H14.542a1.653,1.653,0,0,1-1.653-1.653V30.482a1.653,1.653,0,0,1,1.653-1.653h9.445a1.654,1.654,0,0,1,1.653,1.653v9.449A1.653,1.653,0,0,1,23.987,41.58Z" transform="translate(-12.889 -12.889)" fill="#ededfd" />
                                                <path id="Path_191" data-name="Path 191" d="M41.889,43.542H32.443A1.653,1.653,0,0,1,30.79,41.89V32.444a1.653,1.653,0,0,1,1.653-1.653h9.446a1.653,1.653,0,0,1,1.653,1.653V41.89A1.653,1.653,0,0,1,41.889,43.542Z" transform="translate(-14.851 -14.851)" fill="#2fc99a" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5>4 lakh+</h5>
                                        <p>Suppliers are selling commission-free</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3 px-lg-2">
                                <div class="lgsidebbox">
                                    <div class="lgsidebboximg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="39.348" height="41.527" viewBox="0 0 39.348 41.527">
                                            <g id="Group_33" data-name="Group 33" transform="translate(0.5 0)">
                                                <path id="Path_192" data-name="Path 192" d="M45.037,17.219l-1.182.461-2.27,4.82-.863.137-.228,2.8H39.9L39.311,23.7l-.456-.274-.5.872-.41-1.47,1.361-1.286-2.726-.274-.773-1.1-1.319-.414-.681.414,1,1.009-1,.965.634,1.056.363,2.158-2.316.919.271,1.47-2.27,1.517-4.045,3.718L23.5,34.9l.136,3.03-.68,1.423L22.9,41.879l-.862.184-.364,1.607-2.045,1.884L17.815,43.81l-2.362-7.9-1.319-2.068-.452-4.132.68-2.021-.228-3.033-.727,1.426-1.864.872L9.181,24.432l2.045-.5-1.454-.641L8.91,22.277l3.135-.6c-.161-.321-.327-.641-.489-.962-.178-.351-.446-1.286-.84-1.417a.477.477,0,0,0,.185-.287,1.012,1.012,0,0,0,0-.361c-.02-.157-.039-.314-.062-.468a.914.914,0,0,0,.538-.163.756.756,0,0,0,.241-.18,2.778,2.778,0,0,0,.185-.407.133.133,0,0,1,.04-.05c.047-.031.109,0,.158.019.2.077.294-.037.47-.053.314-.033.641.131.948.063a1.625,1.625,0,0,0,.816-.678c.222-.3.44-.594.661-.889.139-.187.278-.374.4-.571.079-.127.152-.258.228-.384s.172-.264.261-.394c.067-.1.136-.2.2-.3.218-.32.436-.638.651-.959.178-.264.36-.528.538-.792.1-.144.2-.288.294-.434.2-.294.654-.675.36-.979-.33-.343-.539-.216-.931-.377-.02-.15-.037-.3-.057-.451-.007-.05-.02-.114-.067-.133s-.079,0-.116,0c-.132,0-.2-.17-.32-.214-.092-.033-.2.007-.291-.02-.139-.04-.2-.2-.238-.338l-.1-.354a.392.392,0,0,1-.013-.254.718.718,0,0,1,.089-.124c.083-.123.07-.294.133-.427a1.032,1.032,0,0,1,.32-.314c.549-.444.231-.931-.185-1.326a1.035,1.035,0,0,0-.585-.3c-.224-.05-.582-.1-.688-.348-.037-.083-.03-.18-.072-.26-.057-.111-.2-.2-.175-.321a.224.224,0,0,1,.185-.15.867.867,0,0,0,.241-.064.611.611,0,0,0,.106-.1.718.718,0,0,1,.432-.3,2.268,2.268,0,0,0,.945-.224c.175-.106.244-.337.413-.457.208-.15.492-.086.743-.133.535-.1.654.12,1.051.431.333.26.671.511,1.008.768l1.422,1.082,2-.32c.416-.067.9.381,1.067.682.092.17.38.414.308.654-.116.387-.611.585-.945.7a.79.79,0,0,1-.1.688.972.972,0,0,0-.116.177c-.141.334.338.692.209,1.033a.622.622,0,0,1-.284.277c-.12.073-.239.15-.361.224a.666.666,0,0,1-.4.143.283.283,0,0,0-.158,0c-.466.224.052.715.238.945.244.495.77.856,1.057,1.323.086.141.086.331.175.461.119.17.4.133.466.313a.232.232,0,0,0,.06.081c.116.11.234.22.35.327a.515.515,0,0,0,.4.2.074.074,0,0,1,.047,0c.027.014.027.047.02.077a1.847,1.847,0,0,1-.644,1.012c-.185.175-.224.147-.165.338a1.583,1.583,0,0,0,.38.437l.311.294a1.455,1.455,0,0,0,.747.464c.089.014.181.01.271.033.2.054.333.238.519.324.287.134.648.027.921.187.106.064.192.164.3.22a1.353,1.353,0,0,0,.8-.007c.472-.06.615.338.962.549.32.193.644.377.968.567l1.63.956A6.56,6.56,0,0,0,33,19.615a.981.981,0,0,0,.387-.164c.239-.174.083-.124.179-.358.037-.083.172-.1.185-.19.007-.043-.023-.086-.037-.13a.487.487,0,0,1-.007-.184,1.655,1.655,0,0,0-.067-.639c-.006-.02.12-.214.116-.287,0-.094.792-.238.892-.268-.126.037.224,1.036.241,1.142l.5.368h3.043l-.092-1.192,3.272-2.479.773.137,1.09-.5L43.7,16.06l1.319.137c.02.013.02,1.023.02,1.023Z" transform="translate(-6.19 -4.028)" fill="#ededfd" />
                                                <path id="Path_193" data-name="Path 193" d="M21.214,14.958a.364.364,0,1,0-.36-.364A.362.362,0,0,0,21.214,14.958ZM18.78,9.015a.364.364,0,1,0-.361-.364A.362.362,0,0,0,18.78,9.015Zm.35,5.578a.364.364,0,1,0-.36-.364A.362.362,0,0,0,19.13,14.594Zm2.084,6.231a.364.364,0,1,0-.36-.364A.362.362,0,0,0,21.214,20.825ZM17.081,19.19a.365.365,0,1,0-.361-.365.363.363,0,0,0,.361.365Zm2.769-1.707a.364.364,0,1,0-.361-.364A.363.363,0,0,0,19.85,17.483Zm0,10.406a.364.364,0,1,0-.361-.364A.362.362,0,0,0,19.85,27.889Zm-2.409,2.348a.364.364,0,1,0-.36-.364A.362.362,0,0,0,17.441,30.237Zm4.133,2.78a.364.364,0,1,0-.36-.364A.362.362,0,0,0,21.574,33.017ZM18.161,36.3a.365.365,0,1,0-.36-.365.362.362,0,0,0,.36.365Zm3.053.587a.364.364,0,1,0-.36-.364A.362.362,0,0,0,21.214,36.888Zm1.709,2.1a.364.364,0,1,0-.36-.364A.362.362,0,0,0,22.923,38.99Zm-3.433-.364a.364.364,0,1,0-.361-.364.362.362,0,0,0,.361.364ZM18.77,41.1a.364.364,0,1,0-.36-.364A.362.362,0,0,0,18.77,41.1Zm2.444.136a.364.364,0,1,0-.36-.364A.362.362,0,0,0,21.214,41.238Zm-.36,2.979a.364.364,0,1,0-.36-.363.361.361,0,0,0,.36.363Zm5.168-23.392a.364.364,0,1,0-.36-.364A.362.362,0,0,0,26.023,20.825ZM30.95,22.7a.364.364,0,1,0-.361-.364A.362.362,0,0,0,30.95,22.7Zm7.9-1.508a.364.364,0,1,0-.36-.364A.362.362,0,0,0,38.85,21.189Zm3.011-.364a.364.364,0,1,0-.36-.364A.362.362,0,0,0,41.861,20.825Zm0-2.612a.364.364,0,1,0-.36-.364A.363.363,0,0,0,41.861,18.212Zm-1.379,5.5a.364.364,0,1,0-.36-.364A.362.362,0,0,0,40.483,23.711Zm-7.6,1.457a.364.364,0,1,0-.36-.364A.362.362,0,0,0,32.883,25.167Zm-3.321,1.365a.364.364,0,1,0-.36-.364A.362.362,0,0,0,29.562,26.533ZM26.023,31.5a.364.364,0,1,0-.36-.364A.362.362,0,0,0,26.023,31.5Zm0-7.066a.364.364,0,1,0-.36-.364A.362.362,0,0,0,26.023,24.438Zm-8.582,0a.364.364,0,1,0-.36-.364A.362.362,0,0,0,17.441,24.438Zm-3.315-3.431a.364.364,0,1,0-.36-.364A.362.362,0,0,0,14.126,21.007Zm14.715,8.867a.364.364,0,1,0-.361-.364.362.362,0,0,0,.361.364ZM24.347,26.9a.364.364,0,1,0-.36-.364A.362.362,0,0,0,24.347,26.9ZM20.854,11.133a.364.364,0,1,0-.36-.364A.362.362,0,0,0,20.854,11.133Z" transform="translate(-7.008 -4.746)" fill="#2fc99a" />
                                                <path id="Path_194" data-name="Path 194" d="M11.674,22.726a6.1,6.1,0,1,0-6.036-6.1A6.069,6.069,0,0,0,11.674,22.726Z" transform="translate(-5.638 -5.122)" fill="#fff" stroke="#ededfd" stroke-miterlimit="10" stroke-width="1" />
                                                <path id="Path_195" data-name="Path 195" d="M13.892,16.834a2.265,2.265,0,0,1-3.6,0c-.825.414-1.314.678-1.522,1.716a5.008,5.008,0,0,0-.091.726c-.007.262-.007.5,0,.678a.307.307,0,0,0,.3.306H15.2a.306.306,0,0,0,.305-.3c0-.175,0-.416-.008-.678a4.878,4.878,0,0,0-.089-.728c-.205-1.038-.694-1.3-1.519-1.716Z" transform="translate(-6.15 -6.186)" fill="#2fc99a" />
                                                <path id="Path_196" data-name="Path 196" d="M12.369,16.785a2.082,2.082,0,0,1,0-4.164,2.028,2.028,0,0,1,1.456.61,2.086,2.086,0,0,1-1.456,3.554Z" transform="translate(-6.426 -5.476)" fill="#2fc99a" />
                                                <path id="Path_197" data-name="Path 197" d="M12.323,12.8a1.856,1.856,0,1,1-1.836,1.856A1.847,1.847,0,0,1,12.323,12.8Zm0-.454a2.31,2.31,0,1,0,2.285,2.31A2.3,2.3,0,0,0,12.323,12.348Z" transform="translate(-6.38 -5.43)" fill="#2fc99a" />
                                                <path id="Path_198" data-name="Path 198" d="M36.01,35.519a6.1,6.1,0,1,0-6.035-6.1A6.069,6.069,0,0,0,36.01,35.519Z" transform="translate(-9.74 -7.279)" fill="#fff" stroke="#ededfd" stroke-miterlimit="10" stroke-width="1" />
                                                <path id="Path_199" data-name="Path 199" d="M38.227,29.625a2.266,2.266,0,0,1-3.6,0c-.825.414-1.314.678-1.522,1.716a4.928,4.928,0,0,0-.091.726c-.008.262-.008.5-.006.678a.308.308,0,0,0,.305.306h6.225a.305.305,0,0,0,.3-.3c0-.175,0-.416-.008-.678a4.878,4.878,0,0,0-.089-.728C39.541,30.3,39.052,30.039,38.227,29.625Z" transform="translate(-10.251 -8.342)" fill="#2fc99a" />
                                                <path id="Path_200" data-name="Path 200" d="M36.7,29.576a2.082,2.082,0,0,1,0-4.164,2.026,2.026,0,0,1,1.455.61A2.086,2.086,0,0,1,36.7,29.576Z" transform="translate(-10.527 -7.632)" fill="#2fc99a" />
                                                <path id="Path_201" data-name="Path 201" d="M36.657,25.593a1.856,1.856,0,1,1-1.835,1.856,1.847,1.847,0,0,1,1.835-1.856Zm0-.454a2.31,2.31,0,1,0,2.285,2.31A2.3,2.3,0,0,0,36.657,25.139Z" transform="translate(-10.481 -7.586)" fill="#2fc99a" />
                                                <path id="Path_202" data-name="Path 202" d="M18.487,45.851a6.1,6.1,0,1,0-6.035-6.1,6.069,6.069,0,0,0,6.035,6.1Z" transform="translate(-6.787 -9.02)" fill="#fff" stroke="#ededfd" stroke-miterlimit="10" stroke-width="1" />
                                                <path id="Path_203" data-name="Path 203" d="M20.7,39.957a2.266,2.266,0,0,1-3.6,0c-.825.414-1.314.678-1.522,1.716a4.929,4.929,0,0,0-.091.726c-.008.262-.008.5-.006.678a.308.308,0,0,0,.305.306h6.225a.3.3,0,0,0,.3-.3c0-.176,0-.416-.008-.678a4.879,4.879,0,0,0-.089-.728c-.205-1.038-.693-1.3-1.519-1.716Z" transform="translate(-7.298 -10.083)" fill="#2fc99a" />
                                                <path id="Path_204" data-name="Path 204" d="M19.183,39.908a2.082,2.082,0,0,1,0-4.164,2.028,2.028,0,0,1,1.456.61,2.086,2.086,0,0,1-1.456,3.554Z" transform="translate(-7.574 -9.373)" fill="#2fc99a" />
                                                <path id="Path_205" data-name="Path 205" d="M19.136,35.925A1.856,1.856,0,1,1,17.3,37.781,1.847,1.847,0,0,1,19.136,35.925Zm0-.454a2.31,2.31,0,1,0,2.285,2.31A2.3,2.3,0,0,0,19.136,35.471Z" transform="translate(-7.528 -9.327)" fill="#2fc99a" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5>28,000 +</h5>
                                        <p>Suppliers are selling commission-free</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3 px-lg-2">
                                <div class="lgsidebbox">
                                    <div class="lgsidebboximg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32.45" height="32.448" viewBox="0 0 32.45 32.448">
                                            <g id="Pincode_icon" transform="translate(0 0)">
                                                <path id="Path_206" data-name="Path 206" d="M38.692,24.487C37.666,30.386,32.2,33.847,30.041,35A1.846,1.846,0,0,1,28.279,35c-2.387-1.294-8.821-5.428-8.821-12.469A9.676,9.676,0,0,1,29.552,12.9,9.841,9.841,0,0,1,38.692,24.487Z" transform="translate(-12.842 -12.888)" fill="#2fc99a" />
                                                <path id="Path_207" data-name="Path 207" d="M29.1,25.378a2.864,2.864,0,1,0-2.883-2.864A2.874,2.874,0,0,0,29.1,25.378Z" transform="translate(-12.795 -12.841)" fill="#fff" />
                                                <path id="Path_208" data-name="Path 208" d="M45.045,41.382a53.033,53.033,0,0,0-2.63-6.294C40.9,32.1,41.2,32.549,37.965,32.549c0,0-3.136,4.81-8.852,5.106-5.716-.3-8.852-5.106-8.852-5.106-3.237,0-2.934-.441-4.448,2.538a54.538,54.538,0,0,0-2.631,6.294S11.567,45.2,15.914,45.2H42.3c4.358,0,2.742-3.817,2.742-3.817Z" transform="translate(-12.889 -12.75)" fill="#ededfd" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5>10 Crore+</h5>
                                        <p>Suppliers are selling commission-free</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3 px-lg-2">
                                <div class="lgsidebbox">
                                    <div class="lgsidebboximg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="45.907" height="32.183" viewBox="0 0 45.907 32.183">
                                            <g id="ResellerIcon" transform="translate(0 0)">
                                                <path id="Path_209" data-name="Path 209" d="M48.218,27.566a7.2,7.2,0,0,1,1.344.542,6.421,6.421,0,0,1,2.587,4.016A2.378,2.378,0,0,1,52,33.813c-.959,1.878-6,2.455-10.07,2.455s-9.111-.577-10.07-2.455a2.353,2.353,0,0,1-.155-1.686,6.69,6.69,0,0,1,2.358-3.877,7.942,7.942,0,0,1,3.928-1,.282.282,0,0,1,.172.018.3.3,0,0,1,.11.142,3.757,3.757,0,0,0,1.495,1.839,4.831,4.831,0,0,0,3.7.292A4.97,4.97,0,0,0,45.221,28.5c.41-.371.876-1.44,1.474-1.283.5.128,1.031.192,1.523.345Z" transform="translate(-6.331 -12.4)" fill="#ededfd" />
                                                <path id="Path_210" data-name="Path 210" d="M38.837,24.777c.028-.011.053-.025.08-.036a2.97,2.97,0,0,0,1.253-1.113,2.435,2.435,0,0,0,.7.849,4.328,4.328,0,0,0,.933.532,3.121,3.121,0,0,0,2.447,0,4.938,4.938,0,0,0,1.608-1.124s.007,0,.011,0a1.282,1.282,0,0,0,1.076,1.19,12.389,12.389,0,0,0,2.509.326c-.135,0-.386-.365-.445-.475a2.335,2.335,0,0,1-.146-.369,5.048,5.048,0,0,1-.2-.873,12.162,12.162,0,0,1-.089-2.045,23.966,23.966,0,0,1,.295-3.123l.021-.135c0-8.633-5.684-7.786-5.684-7.786L43,10.59c-.07,0-.136,0-.206.011,0,0-5.684-.851-5.684,7.786a22.41,22.41,0,0,1,.323,3.608,5.927,5.927,0,0,1-.591,3.19,1.082,1.082,0,0,1,.174-.032,5.787,5.787,0,0,0,1.816-.376Zm-.54-5.539a1.376,1.376,0,0,1,.167-1.177.192.192,0,0,1,.083-.039.264.264,0,0,1,.209.071v-.018c.024-.24.334-2.925,2.29-2.739L47.03,18.5l.484-.479a.179.179,0,0,1,.048.014c.213.1.3.615.2,1.2a1.825,1.825,0,0,1-.427.976.264.264,0,0,1-.216.078.2.2,0,0,1-.108-.057A7.023,7.023,0,0,1,44.89,23.54a2.759,2.759,0,0,1-3.728-.011,7,7,0,0,1-2.113-3.3.179.179,0,0,1-.107.057.281.281,0,0,1-.251-.114A1.839,1.839,0,0,1,38.3,19.238Z" transform="translate(-6.905 -10.578)" fill="#2fc99a" />
                                                <path id="Path_211" data-name="Path 211" d="M19.822,27.566a7.2,7.2,0,0,1,1.344.542,6.413,6.413,0,0,1,2.587,4.016,2.378,2.378,0,0,1-.151,1.689c-.958,1.878-6,2.455-10.07,2.455s-9.111-.577-10.07-2.455a2.352,2.352,0,0,1-.154-1.686A6.685,6.685,0,0,1,5.666,28.25a7.942,7.942,0,0,1,3.928-1,.283.283,0,0,1,.172.018.3.3,0,0,1,.11.142,3.764,3.764,0,0,0,1.5,1.839,4.831,4.831,0,0,0,3.7.292A4.959,4.959,0,0,0,16.825,28.5c.41-.371.877-1.44,1.475-1.283.506.128,1.032.192,1.523.345Z" transform="translate(-3.219 -12.4)" fill="#ededfd" />
                                                <path id="Path_212" data-name="Path 212" d="M9.085,20.849A4,4,0,0,0,9.9,22.542a5.358,5.358,0,0,0,3.145,3.652,3.727,3.727,0,0,0,2.567,0,5.315,5.315,0,0,0,3.145-3.67,3.959,3.959,0,0,0,.815-1.692,2.768,2.768,0,0,0-.12-2.31.256.256,0,0,1-.059-.082,5.19,5.19,0,0,0-.02-2.166,4.993,4.993,0,0,0-1.292-2.352,5.688,5.688,0,0,0-1.134-.97,4.957,4.957,0,0,0-1.155-.62,4.131,4.131,0,0,0-1.093-.228,3.033,3.033,0,0,0-.44-.021,4.266,4.266,0,0,0-2.268.62A4.039,4.039,0,0,0,10.8,13.754a2.3,2.3,0,0,0-.955.742,5.213,5.213,0,0,0-.578,3.98.255.255,0,0,0-.058.082,2.72,2.72,0,0,0-.12,2.291Zm1.234-1.856h.058v-.021a1.967,1.967,0,0,1,.656-2.145,5.659,5.659,0,0,0,3.722-.516c3.2-1.422,3.5,2.683,3.5,2.683h.059c.337,0,.677.267.3,1.589-.279,1.03-.536,1.322-.735,1.34a4.311,4.311,0,0,1-2.605,3.342,2.868,2.868,0,0,1-1.911,0,4.422,4.422,0,0,1-2.605-3.342c-.2-.021-.458-.31-.736-1.34-.381-1.318-.045-1.589.3-1.589Z" transform="translate(-3.841 -10.743)" fill="#2fc99a" />
                                                <path id="Path_213" data-name="Path 213" d="M17.379,35.979a9.674,9.674,0,0,1,1.594-1.012,3.053,3.053,0,0,0,1.7-2.127c.244-1.76-.22-3.52-.116-5.28.151-2.595.642-5.748,2.691-7.54,2.268-1.988,6.025-1.522,8.263.278a5.678,5.678,0,0,1,2,3.093,18.383,18.383,0,0,1,.371,5.455c-.137,2.035-.561,4.846,1.5,6,.684.385,1.309,1.068,2.014,1.425.743.371.556,1.59.316,2.406a1.772,1.772,0,0,1-.983,1.054,4.471,4.471,0,0,1-1.419.329,65.37,65.37,0,0,1-12.792-.214,24.45,24.45,0,0,1-2.8-.343c-1.011-.2-2.919-.513-3.2-1.763-.175-.8.329-1.309.869-1.764Z" transform="translate(-4.672 -11.471)" fill="#fff" />
                                                <path id="Path_214" data-name="Path 214" d="M23.468,34.564c.028-.011.052-.025.08-.036A2.97,2.97,0,0,0,24.8,33.416a2.435,2.435,0,0,0,.7.849,4.344,4.344,0,0,0,.932.532,3.123,3.123,0,0,0,2.448,0,4.947,4.947,0,0,0,1.608-1.124s.007,0,.011,0a1.283,1.283,0,0,0,1.076,1.191,12.451,12.451,0,0,0,2.509.325c-.135,0-.386-.365-.445-.475a2.338,2.338,0,0,1-.147-.369,5.043,5.043,0,0,1-.194-.873,12.07,12.07,0,0,1-.091-2.045,23.94,23.94,0,0,1,.3-3.122l.021-.136c0-8.633-5.684-7.786-5.684-7.786l-.2-.011c-.071,0-.136,0-.207.011,0,0-5.683-.851-5.683,7.786a22.512,22.512,0,0,1,.323,3.608,5.936,5.936,0,0,1-.591,3.19,1.082,1.082,0,0,1,.174-.032,5.787,5.787,0,0,0,1.816-.376Zm-.54-5.539a1.38,1.38,0,0,1,.167-1.177.205.205,0,0,1,.084-.039.265.265,0,0,1,.209.071v-.018c.024-.24.334-2.925,2.29-2.739l5.983,3.164.484-.479a.18.18,0,0,1,.048.014c.213.1.3.615.2,1.2a1.822,1.822,0,0,1-.427.976.265.265,0,0,1-.216.079.2.2,0,0,1-.108-.058,7.023,7.023,0,0,1-2.124,3.308,2.759,2.759,0,0,1-3.728-.011,7,7,0,0,1-2.113-3.3.18.18,0,0,1-.108.058.283.283,0,0,1-.25-.115,1.839,1.839,0,0,1-.394-.933Z" transform="translate(-5.22 -11.651)" fill="#2fc99a" />
                                                <path id="Path_215" data-name="Path 215" d="M32.486,37.193A1.053,1.053,0,0,0,32.6,37c-.128.15-.247.313-.361.472C32.336,37.371,32.417,37.278,32.486,37.193Zm2.758-.154c-.028-.011-.06-.018-.087-.028l.011.011A.775.775,0,0,1,35.244,37.039Z" transform="translate(-6.4 -13.474)" />
                                                <path id="Path_216" data-name="Path 216" d="M37.051,43.124a2.357,2.357,0,0,0,.154-1.692A6.431,6.431,0,0,0,34.584,37.4a7.412,7.412,0,0,0-1.963-.708c-.515-.118-1.41-.447-1.726.223a1.053,1.053,0,0,1-.118.2,2.635,2.635,0,0,1-.247.276,3.049,3.049,0,0,1-.341.407,5.04,5.04,0,0,1-1.783,1.037,4.96,4.96,0,0,1-3.741-.294,2.737,2.737,0,0,1-.962-.873c-.3-.418-.525-.89-.783-1.337-.118-.207-.561-.014-.727.026a9.863,9.863,0,0,0-1.072.289,6.443,6.443,0,0,0-3.011,1.873,8.456,8.456,0,0,0-1.347,2.9,2.342,2.342,0,0,0,.157,1.692c.971,1.884,6.074,2.466,10.2,2.464.613,0,1.249-.014,1.889-.039,3.579-.179,7.237-.844,8.045-2.41Z" transform="translate(-4.694 -13.39)" fill="#ededfd" />
                                            </g>
                                        </svg>
                                    </div>
                                    <div>
                                        <h5>700 +</h5>
                                        <p>Suppliers are selling commission-free</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ftrlink">By continuing, you agree to our <a href="#">Privacy Policy</a> and <a href="#">Terms & Conditions</a></div>
                </div>
            </div>
    </div>
    </section>
    </div>
    <!-- =============================== FOR DESKTOP VIEW END ================================== -->
    <!-- =============================== FOR MOBILE VIEW START ================================== -->

    <div class="Showmobile">
        <section id="mobilestep1" class="mobileregistersec bg-white">
            <div class="container">
                <div class="loginbox">
                    <div id="otpbox" class="text-center">
                        <div class="px-2 px-lg-4 py-4">
                            <h5 class="mb-3">Enter OTP you received on mobile</h5>
                            <!-- <p>One OTP has been sent, to your Mobile Number </p> -->
                            <small>Verify your OTP</small>
                            <form class="mt-3 otpboxdesign text-center">
                                <input class="otp" id="motp_1" type="text" onkeyup="tabChange(1)" maxlength="1" required>
                                <input class="otp" id="motp_2" type="text" onkeyup="tabChange(2)" maxlength="1" required>
                                <input class="otp" id="motp_3" type="text" onkeyup="tabChange(3)" maxlength="1" required>
                                <input class="otp" id="motp_4" type="text" onkeyup="tabChange(4)" maxlength="1" required>
                            </form>
                            <div class="mb-3 mt-4"><button id="mbtn_verify_otp" class="btn1 dsbl1" disabled>Verify Otp</button></div>
                            <small class="d-block"><a href="#">Resend OTP</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mobileregistersec bg-white" id="mobilestep2" style="display:none;">
            <div class="p-3 pointerbtn Languagebackbtn"><svg width="24px" height="24px" fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <g data-name="Layer 2">
                        <g data-name="arrow-back">
                            <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0" />
                            <path d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="container">
                <div class="px-2 px-lg-4 py-4">
                    <h5 class="mb-3 text-center">Select your Language</h5>
                    <div class="frm">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="radiobtn">
                                        <input type="radio" class="radio" name="language">
                                        <em>EN</em>
                                        <span>English</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="radiobtn">
                                        <input type="radio" class="radio" name="language">
                                        <em>हिं</em>
                                        <span>हिंदी</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="radiobtn">
                                        <input type="radio" class="radio" name="language">
                                        <em>বা</em>
                                        <span>বাংলা</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="radiobtn">
                                        <input type="radio" class="radio" name="language">
                                        <em>বা</em>
                                        <span>Marathi</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="radiobtn">
                                        <input type="radio" class="radio" name="language">
                                        <em>EN</em>
                                        <span>Telugu</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="radiobtn">
                                        <input type="radio" class="radio" name="language">
                                        <em>বা</em>
                                        <span>Tamil</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="radiobtn">
                                        <input type="radio" class="radio" name="language">
                                        <em>EN</em>
                                        <span>Gujarati</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="radiobtn">
                                        <input type="radio" class="radio" name="language">
                                        <em>বা</em>
                                        <span>Odia</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 mt-4">
                        <button class="btn1 dsbl1 mobilestep2btn LanguageSelected" disabled>Next</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="mobileregistersec bg-white" id="mobilestep3" style="display:none;">
            <div class="p-3 pointerbtn workasbackbtn"><svg width="24px" height="24px" fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <g data-name="Layer 2">
                        <g data-name="arrow-back">
                            <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0" />
                            <path d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div id="workas" class="text-center">
                <div class="px-2 px-lg-4 py-4">
                    <h5 class="mb-3">What do you work as?</h5>
                    <div class="workasfrm">
                        <div class="row workasfrmrow">
                            <div class="col-6 px-lg-2">
                                <div class="form-group">
                                    <label class="wrkradiobtn">
                                        <input type="radio" class="radio bussiness_type" value="BmFruitsVegetable" name="sltcatagres">

                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="78.745" height="91.163" viewBox="0 0 78.745 91.163">
                                                <g id="apple-svgrepo-com" transform="translate(-27.334)">
                                                    <g id="Group_37" data-name="Group 37" transform="translate(27.334)">
                                                        <path id="Path_229" data-name="Path 229" d="M276.687,177.005a2.272,2.272,0,1,0-2.927,3.475c6.013,5.065,6.2,14.012.464,22.264a2.272,2.272,0,0,0,3.731,2.593,25.352,25.352,0,0,0,4.956-15.4A17.6,17.6,0,0,0,276.687,177.005Z" transform="translate(-217.161 -136.387)"></path>
                                                        <path id="Path_230" data-name="Path 230" d="M98.511,116.689a16.727,16.727,0,0,0-12.322-5.253c-4.392,0-8.615,1.491-12.34,2.807-2.688.949-5.229,1.847-7.143,1.906-1.913-.06-4.455-.957-7.143-1.906-3.726-1.316-7.949-2.807-12.341-2.807A16.728,16.728,0,0,0,34.9,116.689c-11.182,11.183-7.308,23.624-4.993,31.058l.119.385c2.126,6.839,10.107,29.155,23.557,29.155,7.168,0,9.584-1.245,11.348-2.154a3.776,3.776,0,0,1,1.78-.6,4.63,4.63,0,0,1,2.076.661c1.812.884,4.295,2.094,11.04,2.094,13.451,0,21.431-22.315,23.557-29.155l.119-.384C105.82,140.315,109.695,127.872,98.511,116.689Zm.656,29.709-.12.386A74.729,74.729,0,0,1,91.5,163.633c-2.657,4.157-6.839,9.111-11.672,9.111-5.7,0-7.555-.906-9.05-1.634a8.833,8.833,0,0,0-4.006-1.12l-.063,0-.063,0a8.058,8.058,0,0,0-3.795,1.105c-1.426.735-3.2,1.65-9.267,1.65-4.832,0-9.015-4.954-11.672-9.111a74.679,74.679,0,0,1-7.547-16.849l-.121-.387c-2.14-6.871-5.373-17.253,3.868-26.495a12.233,12.233,0,0,1,9.109-3.923c3.613,0,7.281,1.3,10.827,2.548,3.065,1.082,5.96,2.1,8.6,2.166h.106c2.644-.062,5.538-1.084,8.6-2.166,3.546-1.253,7.214-2.548,10.827-2.548A12.233,12.233,0,0,1,95.3,119.9C104.541,129.143,101.307,139.526,99.167,146.4Z" transform="translate(-27.334 -86.124)"></path>
                                                        <path id="Path_231" data-name="Path 231" d="M196.864,26.343h0a21.073,21.073,0,0,0,14.094-6.127c5.919-5.92,7.677-15.739,4.668-18.748A6.412,6.412,0,0,0,210.961,0a21.065,21.065,0,0,0-14.083,6.136,21.833,21.833,0,0,0-5.729,10.241c-.9,3.766-.5,6.946,1.062,8.508A6.4,6.4,0,0,0,196.864,26.343Zm-1.2-9.286a17.366,17.366,0,0,1,4.429-7.709,16.544,16.544,0,0,1,10.87-4.805c.729,0,1.243,0,1.413.166,1.192,1.167-.164,7.832-4.627,12.3a16.553,16.553,0,0,1-10.882,4.8,2.929,2.929,0,0,1-1.446-.176C195.013,21.245,195.015,19.5,195.662,17.057Z" transform="translate(-153.575)"></path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <span>Fruits &amp; Vegetable</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 px-lg-2">
                                <div class="form-group">
                                    <label class="wrkradiobtn">
                                        <input type="radio" class="radio bussiness_type" value="BmRetailStore" name="sltcatagres">
                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="72.696" height="88.916" viewBox="0 0 72.696 88.916">
                                                <path id="bag-svgrepo-com_6_" data-name="bag-svgrepo-com (6)" d="M116.5,82.682l-7.718-58.658a6.58,6.58,0,0,0-2.233-4.088l-9.12-9.12a1.942,1.942,0,0,0-1.373-.569H93.2a13.374,13.374,0,0,0-26.006,0H64.339a1.942,1.942,0,0,0-1.373.569l-9.19,9.19a6.573,6.573,0,0,0-2.155,4.018L43.9,82.682a5.428,5.428,0,0,0,5.467,6.234h61.661a5.428,5.428,0,0,0,5.467-6.234ZM99.417,18.3H93.576V14.131h1.675ZM80.2,3.884a9.5,9.5,0,0,1,9.493,9.493V18.3H70.707v-4.92A9.5,9.5,0,0,1,80.2,3.884ZM65.143,14.131h1.68V18.3H60.977Zm-9.672,10.4a2.856,2.856,0,0,1,2.68-2.35h8.671v7.089a1.942,1.942,0,1,0,3.884,0V22.18H89.692v7.089a1.942,1.942,0,1,0,3.884,0V22.18h8.675a2.733,2.733,0,0,1,1.819.769l.014.014.015.014a2.679,2.679,0,0,1,.831,1.553l6.451,49.03H49.02Zm56.822,59.976a1.639,1.639,0,0,1-1.261.525H49.371a1.55,1.55,0,0,1-1.617-1.844l.756-5.744h63.384l.756,5.744A1.64,1.64,0,0,1,112.293,84.507Z" transform="translate(-43.853)"></path>
                                            </svg>
                                        </div>
                                        <span>Retail Store</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 px-lg-2">
                                <div class="form-group">
                                    <label class="wrkradiobtn">
                                        <input type="radio" class="radio bussiness_type" value="BmRestaurant" name="sltcatagres">
                                        <div><svg id="_18395208121586787144" data-name="18395208121586787144" xmlns="http://www.w3.org/2000/svg" width="95.084" height="95.084" viewBox="0 0 95.084 95.084">
                                                <path id="Path_180" data-name="Path 180" d="M40.285,17A22.285,22.285,0,1,0,62.57,39.286,22.311,22.311,0,0,0,40.285,17Zm0,41.6A19.314,19.314,0,1,1,59.6,39.286,19.336,19.336,0,0,1,40.285,58.6Z" transform="translate(8.742 8.257)"></path>
                                                <path id="Path_181" data-name="Path 181" d="M43.685,10A32.685,32.685,0,1,0,76.37,42.686,32.722,32.722,0,0,0,43.685,10Zm0,62.4A29.714,29.714,0,1,1,73.4,42.686,29.747,29.747,0,0,1,43.685,72.4Z" transform="translate(5.342 4.857)"></path>
                                                <path id="Path_182" data-name="Path 182" d="M66.4,0a4.932,4.932,0,0,0-4.861,4.216L56.016,42.875a1.489,1.489,0,0,0,.417,1.258l2.538,2.548V90.626a4.457,4.457,0,1,0,8.914,0V1.485A1.485,1.485,0,0,0,66.4,0ZM64.914,90.628a1.486,1.486,0,0,1-2.971,0V46.068a1.486,1.486,0,0,0-.434-1.049L59.06,42.56,64.477,4.636a1.929,1.929,0,0,1,.435-.969v86.96Z" transform="translate(27.199 0)"></path>
                                                <path id="Path_183" data-name="Path 183" d="M20.8,21.935V1.487A1.486,1.486,0,0,0,17.879,1.1L14.356,14.188l-2.5-12.982a1.486,1.486,0,0,0-2.918,0l-2.5,12.982L2.919,1.1A1.485,1.485,0,0,0,0,1.487V21.936a6.824,6.824,0,0,0,3.793,6.137,3.866,3.866,0,0,1,2.15,3.478V90.469a4.579,4.579,0,0,0,3.719,4.555,4.5,4.5,0,0,0,.731.059,4.456,4.456,0,0,0,4.464-4.456V31.551a3.87,3.87,0,0,1,2.15-3.479A6.824,6.824,0,0,0,20.8,21.935Zm-5.121,3.479a6.824,6.824,0,0,0-3.793,6.137V90.628a1.478,1.478,0,0,1-.524,1.132,1.5,1.5,0,0,1-1.223.333,1.613,1.613,0,0,1-1.224-1.624V31.551a6.824,6.824,0,0,0-3.793-6.137,3.87,3.87,0,0,1-2.15-3.479V12.72L5.25,21.187a1.485,1.485,0,0,0,2.893-.105L10.4,9.354l2.255,11.728a1.487,1.487,0,0,0,1.4,1.2,1.5,1.5,0,0,0,1.489-1.1l2.281-8.467v9.216A3.87,3.87,0,0,1,15.678,25.414Z" transform="translate(0 0)"></path>
                                                <rect id="Rectangle_158" data-name="Rectangle 158" width="3.084" height="3.084" transform="translate(46.256 54.479)"></rect>
                                                <rect id="Rectangle_159" data-name="Rectangle 159" width="2.056" height="3.084" transform="translate(52.423 54.479)"></rect>
                                                <rect id="Rectangle_160" data-name="Rectangle 160" width="3.084" height="3.084" transform="translate(57.563 54.479)"></rect>
                                            </svg>
                                        </div>
                                        <span>Restaurant</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 px-lg-2">
                                <div class="form-group">
                                    <label class="wrkradiobtn">
                                        <input type="radio" class="radio bussiness_type" value="BmService" name="sltcatagres">
                                        <div><svg xmlns="http://www.w3.org/2000/svg" width="93.406" height="93.406" viewBox="0 0 93.406 93.406">
                                                <g id="suitcase-svgrepo-com_1_" data-name="suitcase-svgrepo-com (1)" transform="translate(-11 -11)">
                                                    <path id="Path_232" data-name="Path 232" d="M96.457,21.923H75.584V18.549A7.381,7.381,0,0,0,68.226,11H46.971a7.5,7.5,0,0,0-7.358,7.549v3.374H18.949A7.981,7.981,0,0,0,11,29.872V96.457a7.981,7.981,0,0,0,7.949,7.949H96.457a7.981,7.981,0,0,0,7.949-7.949V29.872A7.981,7.981,0,0,0,96.457,21.923ZM43.6,18.549a3.568,3.568,0,0,1,3.584-3.584H68.245a3.568,3.568,0,0,1,3.584,3.584v3.374H43.6V18.549ZM18.949,25.907H96.457a4,4,0,0,1,3.984,3.984V48.458L67.673,67.844a10.517,10.517,0,0,0-19.939.038L14.984,48.439V29.872a3.974,3.974,0,0,1,3.965-3.965ZM64.261,71.218A6.56,6.56,0,1,1,57.7,64.47,6.649,6.649,0,0,1,64.261,71.218Zm32.2,29.2H18.949a4,4,0,0,1-3.984-3.984V53.052L47.219,72.191a10.526,10.526,0,0,0,20.969-.038l32.235-19.082V96.457A3.962,3.962,0,0,1,96.457,100.422Z"></path>
                                                </g>
                                            </svg>
                                        </div>
                                        <span>Service</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 mt-4 BmFruitsVegetable btnset">
                        <button id="BmFruitsVegetableselected" class="btn1 mob_cmn_btn cmnbtn dsbl1 FruitsVegetablemobilestepbtn" disabled>Next</button>
                    </div>
                    <div class="mb-3 mt-4 BmRetailStore btnset" style="display:none;">
                        <button id="workasSelected" class="btn1 mob_cmn_btn cmnbtn dsbl1 RetailStoremobilestepbtn" disabled>Next</button>
                    </div>
                    <div class="mb-3 mt-4 BmRestaurant btnset" style="display:none;">
                        <button id="BmRestaurantselected" class="btn1 mob_cmn_btn cmnbtn dsbl1 Restaurantmobilestepbtn" disabled>Next </button>
                    </div>
                    <div class="mb-3 mt-4 BmService btnset" style="display:none;">
                        <button id="BmServiceselected" class="btn1 mob_cmn_btn cmnbtn dsbl1 Servicemobilestepbtn" disabled>Next</button>
                    </div>
                </div>
            </div>
        </section>
        <!-- =====================================   Fruits & Vegetable   =============================== -->
        <section class="mobileregistersec2 bg-white" id="FruitsVegetablemobilestep" style="display:none;">
            <div class="p-3 pointerbtn FruitsVegetablebackbtn"><svg width="24px" height="24px" fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <g data-name="Layer 2">
                        <g data-name="arrow-back">
                            <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0" />
                            <path d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="container">
                <div class="proavatersec text-center pt-5 pb-3">
                    <div class="proavaterwrp">
                        <div class="proavater">
                            <img id="imgPreview" src="<?= base_url() ?>assets/images/avater.jpg" alt="pic" class="imgPreview3">
                            <input type="file" form="form_fruit_Service_basic" name="profile_image" id="photo" class="photo3">
                        </div>
                        <div class="cameraico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 41 41">
                                <g id="Group_9" data-name="Group 9" transform="translate(-218 -128)">
                                    <circle id="Ellipse_25" data-name="Ellipse 25" cx="20.5" cy="20.5" r="20.5" transform="translate(218 128)" fill="#8a8a8a"></circle>
                                    <g id="Layer_5" data-name="Layer 5" transform="translate(226.593 133.914)">
                                        <path id="Path_87" data-name="Path 87" d="M15.87,15.577a3.633,3.633,0,1,1-3.633-3.633A3.633,3.633,0,0,1,15.87,15.577Zm5.944-5.614V21.191a1.981,1.981,0,0,1-1.981,1.981H3.981A1.981,1.981,0,0,1,2,21.191V9.963A1.981,1.981,0,0,1,3.981,7.981H19.832A1.981,1.981,0,0,1,21.814,9.963ZM6.623,11.284A1.321,1.321,0,1,0,5.3,12.6,1.321,1.321,0,0,0,6.623,11.284Zm10.567,4.293a4.953,4.953,0,1,0-4.953,4.953,4.953,4.953,0,0,0,4.953-4.953ZM15.539,6.66a.66.66,0,0,0-.66-.66H8.935a.66.66,0,0,0,0,1.321h5.944A.66.66,0,0,0,15.539,6.66Z" fill="#fff"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <small>Add Photo</small>
                </div>
                <div class="profileprogresswrp mb-4">
                    <div class="profileprogress">
                        <div class="active" style="width: 20%;"></div>
                    </div>
                    <small>Profile Completed</small>
                </div>
                <div class="card cardinfo mb-4 card1 done">
                    <div class="card-header">
                        Personal Information
                    </div>
                    <div class="card-body">
                        <form id="form_fruit_Service_basic">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="d-flex align-items-center w-100">
                                        <svg width="30" height="30" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256c2.581,0,5.099-0.32,7.68-0.384l0.896,0.171
                                            c0.704,0.128,1.387,0.213,2.091,0.213c0.981,0,1.984-0.128,2.923-0.405l1.195-0.341C405.056,503.509,512,392.171,512,256
                                            C512,114.837,397.163,0,256,0z M408.149,434.325c-1.003-3.264-3.264-6.016-6.549-7.104l-56.149-18.688
                                            c-19.605-8.171-28.736-39.552-30.869-52.139c14.528-13.504,27.947-33.621,27.947-51.797c0-6.187,1.749-8.555,1.408-8.619
                                            c3.328-0.832,6.037-3.2,7.317-6.379c1.045-2.624,10.24-26.069,10.24-41.877c0-0.875-0.107-1.749-0.32-2.581
                                            c-1.344-5.355-4.48-10.752-9.173-14.123v-49.664c0-30.699-9.344-43.563-19.243-51.008c-2.219-15.275-18.581-44.992-76.757-44.992
                                            c-59.477,0-96,55.915-96,96v49.664c-4.693,3.371-7.829,8.768-9.173,14.123c-0.213,0.853-0.32,1.728-0.32,2.581
                                            c0,15.808,9.195,39.253,10.24,41.877c1.28,3.179,2.965,5.205,6.293,6.037c0.683,0.405,2.432,2.795,2.432,8.96
                                            c0,18.176,13.419,38.293,27.947,51.797c-2.112,12.565-11.157,43.925-30.144,51.861l-56.896,18.965
                                            c-3.264,1.088-5.611,3.776-6.635,7.04C53.376,391.189,21.291,327.317,21.291,256c0-129.387,105.28-234.667,234.667-234.667
                                            S490.624,126.613,490.624,256C490.667,327.339,458.56,391.253,408.149,434.325z"></path>
                                        </svg>
                                        <div class="inputwithlabl">
                                            <small class="d-block">Name</small>
                                            <input class="inputtxt" type="text" placeholder="Enter Name" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="d-flex align-items-center w-100">
                                        <svg width="24" height="24" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 71.59 122.88" style="enable-background:new 0 0 71.59 122.88" xml:space="preserve">
                                            <style type="text/css">
                                                .st0 {
                                                    fill-rule: evenodd;
                                                    clip-rule: evenodd;
                                                }
                                            </style>
                                            <g>
                                                <path class="st0" d="M12.74,0h46.11c3.51,0,6.69,1.43,9,3.74c2.31,2.31,3.74,5.49,3.74,9v97.4c0,3.51-1.43,6.69-3.74,9 c-2.31,2.31-5.49,3.74-9,3.74H12.74c-3.51,0-6.69-1.43-9-3.74c-2.31-2.31-3.74-5.49-3.74-9v-97.4c0-3.51,1.43-6.69,3.74-9 C6.05,1.43,9.24,0,12.74,0L12.74,0z M35.79,107.18c2.88,0,5.22,2.34,5.22,5.22c0,2.88-2.34,5.22-5.22,5.22 c-2.88,0-5.22-2.34-5.22-5.22C30.58,109.52,32.91,107.18,35.79,107.18L35.79,107.18z M3.66,103.18h64.28V19.7H3.66V103.18 L3.66,103.18z"></path>
                                            </g>
                                        </svg>
                                        <div class="inputwithlabl">
                                            <small class="d-block">Mobile Number</small>
                                            <button class="edt" type="button">
                                                <svg width="24" height="24" fill="#999" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.337 490.337" style="enable-background:new 0 0 490.337 490.337;" xml:space="preserve">
                                                    <path d="M229.9,145.379l-47.5,47.5c-17.5,17.5-35.1,35-52.5,52.7c-4.1,4.2-7.2,9.8-8.4,15.3c-6.3,28.9-12.4,57.8-18.5,86.7
                                                        l-3.4,16c-1.6,7.8,0.5,15.6,5.8,20.9c4.1,4.1,9.8,6.4,15.8,6.4c1.7,0,3.4-0.2,5.1-0.5l17.6-3.7c28-5.9,56.1-11.9,84.1-17.7
                                                        c6.5-1.4,12-4.3,16.7-9c78.6-78.7,157.2-157.3,235.8-235.8c5.8-5.8,9-12.7,9.8-21.2c0.1-1.4,0-2.8-0.3-4.1c-0.5-2-0.9-4.1-1.4-6.1
                                                        c-1.1-5.1-2.3-10.9-4.7-16.5l0,0c-14.7-33.6-39.1-57.6-72.5-71.1c-6.7-2.7-13.8-3.6-20-4.4l-1.7-0.2c-9-1.1-17.2,1.9-24.3,9.1
                                                        C320.4,54.879,275.1,100.179,229.9,145.379z M386.4,24.679c0.2,0,0.3,0,0.5,0l1.7,0.2c5.2,0.6,10,1.2,13.8,2.8
                                                        c27.2,11,47.2,30.6,59.3,58.2c1.4,3.2,2.3,7.3,3.2,11.6c0.3,1.6,0.7,3.2,1,4.8c-0.4,1.8-1.1,3-2.5,4.3
                                                        c-78.7,78.5-157.3,157.2-235.9,235.8c-1.3,1.3-2.5,1.9-4.3,2.3c-28.1,5.9-56.1,11.8-84.2,17.7l-14.8,3.1l2.8-13.1
                                                        c6.1-28.8,12.2-57.7,18.4-86.5c0.2-0.9,1-2.3,1.9-3.3c17.4-17.6,34.8-35.1,52.3-52.5l47.5-47.5c45.3-45.3,90.6-90.6,135.8-136
                                                        C384.8,24.979,385.7,24.679,386.4,24.679z"></path>
                                                    <path d="M38.9,109.379h174.6c6.8,0,12.3-5.5,12.3-12.3s-5.5-12.3-12.3-12.3H38.9c-21.5,0-38.9,17.5-38.9,38.9v327.4
                                                        c0,21.5,17.5,38.9,38.9,38.9h327.3c21.5,0,38.9-17.5,38.9-38.9v-167.5c0-6.8-5.5-12.3-12.3-12.3s-12.3,5.5-12.3,12.3v167.5
                                                        c0,7.9-6.5,14.4-14.4,14.4H38.9c-7.9,0-14.4-6.5-14.4-14.4v-327.3C24.5,115.879,31,109.379,38.9,109.379z"></path>
                                                </svg>
                                            </button>
                                            <input class="inputtxt" type="tel" value="<?= $this->session->userdata('mobile') ?>" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="d-flex align-items-center w-100">
                                        <svg width="30" height="30" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300.412 300.412" style="enable-background:new 0 0 300.412 300.412;" xml:space="preserve">
                                            <path d="M271.262,50.041H29.15C13.153,50.041,0,63.01,0,79.191v142.03c0,16.01,13.022,29.15,29.15,29.15h242.112
                                                c16.137,0,29.15-13.152,29.15-29.15V79.191C300.412,62.995,287.246,50.041,271.262,50.041z M265.583,65.94l-115.377,74.791
                                                L34.831,65.94H265.583z M15.9,79.191c0-2.011,0.455-3.962,1.303-5.728l72.173,46.785L15.9,218.513V79.191z M271.262,234.471H29.15
                                                c-1.648,0-3.221-0.317-4.679-0.869l78.277-104.686l43.134,27.961c2.632,1.706,6.019,1.704,8.65,0l43.133-27.961l78.277,104.686
                                                C274.484,234.155,272.911,234.471,271.262,234.471z M284.512,218.513l-73.476-98.265l72.173-46.785
                                                c0.848,1.766,1.303,3.717,1.303,5.728V218.513z"></path>
                                        </svg>
                                        <div class="inputwithlabl">
                                            <small class="d-block">Email ID</small>
                                            <input class="inputtxt" type="email" placeholder="enter Email" name="email">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div align="rigth">
                                    <button class="btn btn-secondary" type="submit">Save</button>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card cardinfo mb-4 card2">
                    <div class="card-header">
                        Business Information
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path d="M498.665,213.084l-51.215-40.182V20.539c0-8.103-5.836-14.67-13.937-14.67h-58.682c-8.101,0-15.404,6.568-15.404,14.67
                                                v83.3l-93.778-73.864c-5.314-4.168-12.605-4.169-17.924-0.003L13.622,213.303C5.141,219.95,0,229.945,0,240.722v17.845
                                                c0,19.212,16.363,34.842,35.576,34.842h23.106v198.052c0,8.102,7.303,14.67,15.404,14.67h365.295
                                                c8.101,0,13.937-6.568,13.937-14.67V293.41h24.573c19.213,0,34.109-15.63,34.109-34.842v-18.07
                                                C512,229.725,507.14,219.733,498.665,213.084z M388.768,35.209h29.341v114.672l-29.341-23.021V35.209z M305.146,476.791h-99.759
                                                V316.883h99.759V476.791z M423.977,476.791h-89.49V302.212c0-8.102-5.102-14.67-13.203-14.67h-129.1
                                                c-8.101,0-16.138,6.568-16.138,14.67v174.579H88.023V266.605l168.188-131.864l167.766,131.627V476.791z M482.659,258.567
                                                c0,3.034-1.736,5.501-4.768,5.501h-24.573v-4.838c0-4.505-1.703-8.761-5.248-11.543L265.819,104.554
                                                c-5.315-4.168-12.697-4.171-18.015-0.003L64.622,247.919c-3.547,2.782-5.94,7.037-5.94,11.546v4.604H35.576
                                                c-3.032,0-6.235-2.468-6.235-5.501v-17.845c0-1.702,1.134-3.279,2.475-4.329L256.773,60.162L480.828,236.17
                                                c1.338,1.049,1.831,2.628,1.831,4.328V258.567z"></path>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Owner Name" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#business-name">Add Details</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 349.661 349.661" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 349.661 349.661">
                                        <path d="M174.831,0C102.056,0,42.849,59.207,42.849,131.981c0,30.083,21.156,74.658,62.881,132.485   c30.46,42.215,61.363,76.607,61.671,76.95l7.429,8.245l7.429-8.245c0.309-0.342,31.211-34.734,61.671-76.95   c41.725-57.828,62.881-102.402,62.881-132.485C306.812,59.207,247.605,0,174.831,0z M174.83,319.617   c-37.058-42.692-111.98-139.048-111.98-187.636C62.849,70.235,113.084,20,174.831,20s111.981,50.235,111.981,111.981   C286.812,180.54,211.888,276.915,174.83,319.617z"></path>
                                        <circle cx="174.831" cy="131.982" r="49.696"></circle>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business Address" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#business-address">Add Details</button>
                                    </div>
                                </div>
                                <!-- <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                        <path d="M512,256.001c0-10.821-6.012-20.551-15.694-25.398l-38.122-19.061l38.122-19.06c0.001-0.001,0.004-0.002,0.004-0.002
                                                c9.68-4.845,15.692-14.576,15.692-25.397c0-10.819-6.013-20.55-15.694-25.397L281.09,34.08
                                                c-15.712-7.849-34.47-7.849-50.185,0.001L15.691,141.691C6.013,146.534,0,156.264,0,167.084c0,10.821,6.012,20.551,15.694,25.398
                                                l38.121,19.06l-38.126,19.063C6.012,235.45,0,245.18,0,256.001s6.012,20.551,15.694,25.397l38.121,19.061l-38.118,19.059
                                                C6.02,324.353,0.004,334.08,0,344.902c-0.004,10.828,6.008,20.564,15.694,25.412l215.215,107.608
                                                c7.856,3.925,16.471,5.886,25.09,5.886c8.619,0,17.238-1.963,25.095-5.887l215.215-107.608
                                                c9.682-4.845,15.695-14.582,15.691-25.41c-0.004-10.822-6.02-20.549-15.694-25.381l-38.122-19.061l38.126-19.063
                                                C505.988,276.552,512,266.822,512,256.001z M26.225,171.431c-2.339-1.171-2.687-3.226-2.687-4.346s0.35-3.175,2.683-4.343
                                                L241.429,55.138c4.563-2.28,9.568-3.418,14.573-3.418c5.003,0,10.007,1.139,14.567,3.417L485.776,162.74
                                                c2.337,1.17,2.687,3.225,2.687,4.345s-0.348,3.175-2.687,4.346L270.572,279.032c-9.125,4.558-20.019,4.558-29.139,0.001
                                                L26.225,171.431z M485.783,340.575c2.33,1.164,2.679,3.215,2.679,4.336c0.001,1.123-0.348,3.182-2.683,4.35L270.571,456.865
                                                c-9.125,4.558-20.019,4.559-29.139,0.001L26.225,349.262c-2.339-1.171-2.688-3.229-2.687-4.352c0-1.119,0.348-3.171,2.683-4.337
                                                l53.912-26.956l150.776,75.387c7.856,3.925,16.471,5.886,25.089,5.886c8.619,0,17.238-1.963,25.095-5.887l150.772-75.386
                                                L485.783,340.575z M485.778,260.345L270.571,367.949c-9.125,4.558-20.019,4.559-29.139,0.001L26.225,260.347
                                                c-2.339-1.17-2.687-3.225-2.687-4.345c0-1.122,0.348-3.175,2.683-4.344l53.912-26.956l150.776,75.387
                                                c7.855,3.925,16.472,5.886,25.089,5.886c8.617,0,17.237-1.962,25.094-5.888l150.774-75.386l53.908,26.954
                                                c2.339,1.171,2.687,3.225,2.687,4.346C488.462,257.121,488.113,259.176,485.778,260.345z"></path>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business Category" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#business-category">Add Details</button>
                                    </div>
                                </div> -->
                                <!-- <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                        <path d="M497.335,284.567L272.36,59.593c-3.135-3.135-7.386-4.897-11.82-4.897c-0.018,0-0.036,0-0.053,0l-117.811,0.379
                                                c-4.414,0.014-8.645,1.774-11.766,4.897L107.261,83.62L28.537,4.896c-6.527-6.527-17.112-6.527-23.641,0s-6.528,17.112,0,23.641
                                                L83.62,107.26l-23.648,23.649c-3.135,3.135-4.897,7.388-4.897,11.821l0.009,118.2c0,4.433,1.762,8.685,4.897,11.819
                                                l224.586,224.586c9.776,9.776,22.619,14.665,35.462,14.665c12.843,0,25.685-4.889,35.461-14.665l141.845-141.845
                                                C516.887,335.936,516.887,304.12,497.335,284.567z M473.694,331.848L331.849,473.693c-6.518,6.517-17.123,6.517-23.642,0
                                                l-219.69-219.69L88.51,149.653l18.752-18.752l25.128,25.128c-14.998,25.333-11.942,58.981,10.333,81.256
                                                c26.07,26.071,68.49,26.072,94.564,0c26.131-26.133,26.136-68.428,0-94.564c-22.197-22.199-55.836-25.383-81.256-10.333
                                                l-25.128-25.128l18.774-18.774l103.962-0.335l220.055,220.056C480.211,314.726,480.211,325.33,473.694,331.848z M187.343,163.701
                                                l-5.997-5.997c11.101-2.957,23.47-0.172,32.299,8.658c13.066,13.066,13.067,34.213,0,47.282
                                                c-13.034,13.033-34.246,13.036-47.281,0c-8.79-8.791-11.629-21.143-8.658-32.3l5.997,5.997c6.528,6.528,17.112,6.528,23.641,0
                                                C193.871,180.815,193.871,170.23,187.343,163.701z"></path>
                                        <path d="M355.49,379.131l-94.564-94.564c-6.527-6.527-17.112-6.527-23.641,0s-6.528,17.112,0,23.641l94.564,94.564
                                                c6.528,6.528,17.112,6.528,23.641,0C362.018,396.244,362.018,385.659,355.49,379.131z"></path>
                                        <path d="M402.771,331.849l-94.564-94.564c-6.527-6.527-17.112-6.527-23.641,0c-6.528,6.527-6.528,17.112,0,23.641l94.564,94.564
                                                c6.528,6.528,17.112,6.528,23.641,0C409.299,348.963,409.299,338.378,402.771,331.849z"></path>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business Type" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#business-type">Add Details</button>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-md-6 border-left">
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 87.881 87.881" style="enable-background:new 0 0 87.881 87.881;" xml:space="preserve">
                                        <path d="M70.828,0H33.056C27.535,0,23.044,4.484,23.03,10.001h-2.975c-7.183,0-13.027,5.844-13.027,13.027v51.826
                                            c0,7.184,5.844,13.027,13.027,13.027h37.772c7.183,0,13.026-5.844,13.026-13.027v-2.975c5.517-0.015,10.001-4.506,10.001-10.026
                                            V10.027C80.854,4.498,76.356,0,70.828,0z M64.854,30.054v37.774v7.026c0,3.881-3.146,7.027-7.026,7.027H20.055
                                            c-3.882,0-7.027-3.146-7.027-7.027V23.028c0-3.881,3.146-7.027,7.027-7.027h37.772c3.88,0,7.026,3.146,7.026,7.027L64.854,30.054
                                            L64.854,30.054z M74.854,61.853c0,2.212-1.793,4.011-4.001,4.024V30.054v-7.026c0-7.183-5.844-13.027-13.026-13.027H29.031
                                            C29.045,7.793,30.844,6,33.056,6h37.773c2.22,0,4.026,1.807,4.026,4.027V61.853z"></path>
                                        <rect x="20.941" y="27.313" width="36" height="6"></rect>
                                        <rect x="20.941" y="40.187" width="36" height="6"></rect>
                                        <rect x="20.941" y="53.061" width="36" height="6"></rect>
                                        <rect x="20.941" y="65.935" width="36" height="6"></rect>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business KYC" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success btn_bussiness_type" data-toggle="modal" data-target="#kyc">Add Details</button>
                                    </div>
                                </div>
                                <!-- <div class="d-flex w-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                                        <g id="Image" transform="translate(-2 -2)">
                                            <path id="Path_137" data-name="Path 137" d="M25,2H7A5,5,0,0,0,2,7V25a5,5,0,0,0,5,5H25a5,5,0,0,0,5-5V7A5,5,0,0,0,25,2ZM7,4H25a3,3,0,0,1,3,3v5.59l-1.88-1.88a3,3,0,0,0-4.24,0l-7.95,8-3-2.42a3,3,0,0,0-3.8,0L4,18.86V7A3,3,0,0,1,7,4ZM25,28H7a3,3,0,0,1-3-3V21.47l4.38-3.66a1,1,0,0,1,1.27,0l3.73,3a1,1,0,0,0,1.33-.07l8.58-8.59a1,1,0,0,1,1.42,0L28,15.41V25a3,3,0,0,1-3,3Z" fill="#a8a8a8"></path>
                                            <path id="Path_138" data-name="Path 138" d="M10,13a3,3,0,1,0-3-3A3,3,0,0,0,10,13Zm0-4a1,1,0,1,1-1,1A1,1,0,0,1,10,9Z" fill="#a8a8a8"></path>
                                        </g>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Store Verifications" readonly="">
                                        <div class="d-flex">
                                            <div class="imageholder">
                                                <div class="holder">
                                                    <img id="imgPreview" src="<?= base_url() ?>assets/images/round-plus.jpg" alt="pic" class="imgPreview">
                                                    <input type="file" name="photograph" id="photo" class="photo">
                                                </div>
                                                <small>Front Picture</small>
                                            </div>
                                            <div class="imageholder">
                                                <div class="holder">
                                                    <img id="imgPreview" src="<?= base_url() ?>assets/images/round-plus.jpg" alt="pic" class="imgPreview2">
                                                    <input type="file" name="photograph" id="photo" class="photo2">
                                                </div>
                                                <small>Inside Picture</small>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card cardinfo mb-4 card3">
                    <div class="card-header">
                        Financial Information
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- <div class="d-flex align-items-center w-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22.626" height="26" viewBox="0 0 22.626 26">
                                        <g id="Layer_2" data-name="Layer 2" transform="translate(0.004)">
                                            <g id="Layer_1" data-name="Layer 1" transform="translate(-0.004)">
                                                <path id="Path_128" data-name="Path 128" d="M21.591,24.061l-.427-.545-2.026,2.25h0a.547.547,0,0,1-.826,0l-2.064-2.232-2.022,2.177a.547.547,0,0,1-.821.026l-2.144-2.2L9.312,25.764l-.035.042a.545.545,0,0,1-.833,0L6.4,23.535,4.3,25.767h0a.547.547,0,0,1-.821,0l-2-2.267-.415.535a.576.576,0,0,1-.472.264A.623.623,0,0,1,0,23.646V.653A.62.62,0,0,1,.582,0h21.45a.623.623,0,0,1,.59.653V23.641h0a.675.675,0,0,1-.205.493.538.538,0,0,1-.823-.064ZM3.483,3.774H8.27V5.216H6.675v4.22H5.08V5.216H3.486V3.774Zm8.129,4.772h-1.7l-.248.889H8.017L9.928,3.774h1.72l1.9,5.661h-1.7l-.236-.887ZM11.32,7.214,10.765,5.19l-.557,2.029Zm2.359-3.439h1.734l.9,1.741.882-1.741H18.9L17.326,6.515l1.729,2.92H17.285l-1-1.816-1,1.816H13.532l1.753-2.949Zm3.095,14.208a.5.5,0,0,1,0,1H4.479a.5.5,0,0,1,0-1Zm2.458-3.22a.5.5,0,0,1,0,1H4.352a.5.5,0,0,1,0-1Zm.021-3.22a.5.5,0,0,1,.415.658.453.453,0,0,1-.432.342H4.352a.5.5,0,0,1,0-1ZM21.421,1.333H1.193V22.016a.54.54,0,0,1,.656.085.163.163,0,0,1,.033.035h0l2.038,2.3,2.1-2.229a.547.547,0,0,1,.821,0h0l2.019,2.253,1.958-2.248a.545.545,0,0,1,.819-.024h0L13.79,24.4l2.045-2.184a.545.545,0,0,1,.819,0L18.7,24.436l2.055-2.281a.543.543,0,0,1,.665-.13Z" transform="translate(0.004)" fill="#999"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="GSTIN" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#gst">Add Details</button>
                                    </div>
                                </div> -->

                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="24" viewBox="0 0 28 24">
                                        <g id="_4987286121594941299" data-name="4987286121594941299" transform="translate(-0.5 -2.5)">
                                            <path id="Path_136" data-name="Path 136" d="M14.5,3,3,9.192v2.654H26V9.192Z" transform="translate(-0.231)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></path>
                                            <rect id="Rectangle_117" data-name="Rectangle 117" width="3" height="9" transform="translate(13 12)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                            <rect id="Rectangle_118" data-name="Rectangle 118" width="4" height="9" transform="translate(20 12)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                            <rect id="Rectangle_119" data-name="Rectangle 119" width="3" height="9" transform="translate(5 12)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                            <rect id="Rectangle_120" data-name="Rectangle 120" width="23" height="2" transform="translate(3 21)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                            <rect id="Rectangle_121" data-name="Rectangle 121" width="27" height="3" transform="translate(1 23)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                        </g>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Bank Account" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#bankdtls">Add Details</button>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-6">
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="28" height="24" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path d="M0,0v233.739h233.739V0H0z M200.348,200.348H33.391V33.391h166.957V200.348z"></path>
                                        <rect x="66.783" y="66.783" width="100.174" height="100.174"></rect>
                                        <path d="M278.261,0v233.739H512V0H278.261z M478.609,200.348H311.652V33.391h166.957V200.348z"></path>
                                        <rect x="345.043" y="66.783" width="100.174" height="100.174"></rect>
                                        <path d="M0,278.261V512h233.739V278.261H0z M200.348,478.609H33.391V311.652h166.957V478.609z"></path>
                                        <rect x="66.783" y="345.043" width="100.174" height="100.174"></rect>
                                        <polygon points="278.261,278.261 278.261,512 345.043,512 345.043,478.609 311.652,478.609 311.652,411.826 345.043,411.826 
                                        345.043,378.435 311.652,378.435 311.652,311.652 345.043,311.652 345.043,278.261 "></polygon>
                                        <rect x="478.609" y="278.261" width="33.391" height="33.391"></rect>
                                        <polygon points="478.609,478.609 445.217,478.609 445.217,512 512,512 512,356.174 478.609,356.174 "></polygon>
                                        <rect x="378.435" y="278.261" width="66.783" height="33.391"></rect>
                                        <polygon points="445.217,411.826 411.826,411.826 411.826,378.435 445.217,378.435 445.217,345.043 378.435,345.043 
                                        378.435,445.217 445.217,445.217 "></polygon>
                                        <rect x="378.435" y="478.609" width="33.391" height="33.391"></rect>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="UPI ID" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#upi">Add Details</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29.053" height="21.79" viewBox="0 0 29.053 21.79">
                                        <g id="Layer_1_1_" transform="translate(-1 -7)">
                                            <path id="Path_129" data-name="Path 129" d="M30.053,7H1V28.79H30.053ZM28.843,27.579H2.211V8.211H28.843Z" transform="translate(0 0)" fill="#a7a7a7"></path>
                                            <path id="Path_130" data-name="Path 130" d="M16.684,21.869A3.027,3.027,0,0,0,14.2,18.9a3,3,0,0,0,.666-1.871,3.026,3.026,0,0,0-6.053,0A3,3,0,0,0,9.482,18.9,3.027,3.027,0,0,0,7,21.869v4.237h9.684Zm-4.842-6.658a1.816,1.816,0,1,1-1.816,1.816A1.818,1.818,0,0,1,11.842,15.211ZM15.474,24.9H8.211V21.869a1.818,1.818,0,0,1,1.816-1.816h3.632a1.818,1.818,0,0,1,1.816,1.816Z" transform="translate(-2.368 -2.763)" fill="#a7a7a7"></path>
                                            <rect id="Rectangle_107" data-name="Rectangle 107" width="4.62" height="0.924" transform="translate(16.192 13.007)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_108" data-name="Rectangle 108" width="3.696" height="0.924" transform="translate(22.661 13.007)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_109" data-name="Rectangle 109" width="1.848" transform="translate(16.192 16.703)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_110" data-name="Rectangle 110" width="6.469" transform="translate(19.888 16.703)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_111" data-name="Rectangle 111" width="4.62" height="0.924" transform="translate(16.192 19.475)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_112" data-name="Rectangle 112" width="2.772" height="0.924" transform="translate(23.585 19.475)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_113" data-name="Rectangle 113" width="1.848" height="1.848" transform="translate(16.192 21.324)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_114" data-name="Rectangle 114" width="1.848" height="1.848" transform="translate(18.04 21.324)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_115" data-name="Rectangle 115" width="1.848" height="1.848" transform="translate(20.812 21.324)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_116" data-name="Rectangle 116" width="0.924" height="1.848" transform="translate(25.433 21.324)" fill="#a7a7a7"></rect>
                                        </g>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="KYC" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#kyc">Add Details</button>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 w-100"><button class="btn1 thankyoubtn" form="form_fruit_Service_basic">Done</button></div>
        </section>
        <!-- =====================================   Fruits & Vegetable   =============================== -->

        <!-- =====================================  Retail Store  =============================== -->
        <section class="mobileregistersec bg-white" id="RetailStoremobilestep1" style="display:none;">
            <div class="p-3 pointerbtn RetailStorebackbtn"><svg width="24px" height="24px" fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <g data-name="Layer 2">
                        <g data-name="arrow-back">
                            <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0" />
                            <path d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="container">
                <div id="whatduusell" class="text-center selectretailcatsell">
                    <div class="px-2 px-lg-4 py-4">
                        <h5 class="mb-3">What do you sell?</h5>
                        <div class="row row5">
                            <div class="col-6">
                                <div class="bustype shadow-sm mb-2">
                                    <label class="d-flex align-items-center w-100 radio3style">
                                        <input type="checkbox" class="bussiness_category" name="Kirana" value="Kirana">
                                        <em></em>
                                        <i>
                                            <img src="<?= base_url() ?>assets/images/buscat1.png" alt="" width="30">
                                        </i>
                                        <span>Kirana</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bustype shadow-sm mb-2">
                                    <label class="d-flex align-items-center w-100 radio3style">
                                        <input type="checkbox" class="bussiness_category" name="Medical" value="Medical">
                                        <em></em>
                                        <i>
                                            <img src="<?= base_url() ?>assets/images/buscat2.png" alt="" width="30">
                                        </i>
                                        <span>Medical</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bustype shadow-sm mb-2">
                                    <label class="d-flex align-items-center w-100 radio3style">
                                        <input type="checkbox" class="bussiness_category" name="Apparel" value="Apparel">
                                        <em></em>
                                        <i>
                                            <img src="<?= base_url() ?>assets/images/buscat3.png" alt="" width="30">
                                        </i>
                                        <span>Apparel</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bustype shadow-sm mb-2">
                                    <label class="d-flex align-items-center w-100 radio3style">
                                        <input type="checkbox" class="bussiness_category" name="Electronics" value="Electronics">
                                        <em></em>
                                        <i>
                                            <img src="<?= base_url() ?>assets/images/buscat4.png" alt="" width="30">
                                        </i>
                                        <span>Electronics</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bustype shadow-sm mb-2">
                                    <label class="d-flex align-items-center w-100 radio3style">
                                        <input type="checkbox" class="bussiness_category" name="Insurance" value="Insurance">
                                        <em></em>
                                        <i>
                                            <img src="<?= base_url() ?>assets/images/buscat5.png" alt="" width="30">
                                        </i>
                                        <span>Insurance</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bustype shadow-sm mb-2">
                                    <label class="d-flex align-items-center w-100 radio3style">
                                        <input type="checkbox" class="bussiness_category" name="Digital" value="Digital">
                                        <em></em>
                                        <i>
                                            <img src="<?= base_url() ?>assets/images/buscat6.png" alt="" width="30">
                                        </i>
                                        <span>Digital</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bustype shadow-sm mb-2">
                                    <label class="d-flex align-items-center w-100 radio3style">
                                        <input type="checkbox" class="bussiness_category" name="Agriculture" value="Agriculture">
                                        <em></em>
                                        <i>
                                            <img src="<?= base_url() ?>assets/images/buscat7.png" alt="" width="30">
                                        </i>
                                        <span>Agriculture</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bustype shadow-sm mb-2">
                                    <label class="d-flex align-items-center w-100 radio3style">
                                        <input type="checkbox" class="bussiness_category" name="Education" value="Education">
                                        <em></em>
                                        <i>
                                            <img src="<?= base_url() ?>assets/images/buscat8.png" alt="" width="30">
                                        </i>
                                        <span>Education</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bustype shadow-sm mb-2">
                                    <label class="d-flex align-items-center w-100 radio3style">
                                        <input type="checkbox" class="bussiness_category" name="Computer" value="Computer">
                                        <em></em>
                                        <i>
                                            <img src="<?= base_url() ?>assets/images/buscat9.png" alt="" width="30">
                                        </i>
                                        <span>Computer</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bustype shadow-sm mb-2">
                                    <label class="d-flex align-items-center w-100 radio3style">
                                        <input type="checkbox" class="bussiness_category" name="Tour-Travel" value="Tour-Travel">
                                        <em></em>
                                        <i>
                                            <img src="<?= base_url() ?>assets/images/buscat10.png" alt="" width="30">
                                        </i>
                                        <span>Tour &amp; Travel</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bustype shadow-sm mb-2">
                                    <label class="d-flex align-items-center w-100 radio3style">
                                        <input type="checkbox" class="bussiness_category" name="Others" value="others">
                                        <em></em>
                                        <i>
                                            <img src="<?= base_url() ?>assets/images/buscat11.png" alt="" width="30">
                                        </i>
                                        <span>Others</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 mt-4">
                            <button id="btn_bussiness_category" class="btn1 dsbl1 mobilewhatduusellSelectedbtn" disabled>Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mobileregistersec2 bg-white" id="RetailStoremobilestep2" style="display:none;">
            <div class="p-3 pointerbtn RetailStore2backbtn"><svg width="24px" height="24px" fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <g data-name="Layer 2">
                        <g data-name="arrow-back">
                            <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0" />
                            <path d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="container">

                <div class="proavatersec text-center pt-5 pb-3">
                    <div class="proavaterwrp">
                        <div class="proavater">
                            <img id="imgPreview" src="<?= base_url() ?>assets/images/avater.jpg" alt="pic" class="imgPreview3">
                            <input type="file" form="form_mobile_retail_basic" name="profile_image" id="photo" class="photo3">
                        </div>
                        <div class="cameraico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 41 41">
                                <g id="Group_9" data-name="Group 9" transform="translate(-218 -128)">
                                    <circle id="Ellipse_25" data-name="Ellipse 25" cx="20.5" cy="20.5" r="20.5" transform="translate(218 128)" fill="#8a8a8a"></circle>
                                    <g id="Layer_5" data-name="Layer 5" transform="translate(226.593 133.914)">
                                        <path id="Path_87" data-name="Path 87" d="M15.87,15.577a3.633,3.633,0,1,1-3.633-3.633A3.633,3.633,0,0,1,15.87,15.577Zm5.944-5.614V21.191a1.981,1.981,0,0,1-1.981,1.981H3.981A1.981,1.981,0,0,1,2,21.191V9.963A1.981,1.981,0,0,1,3.981,7.981H19.832A1.981,1.981,0,0,1,21.814,9.963ZM6.623,11.284A1.321,1.321,0,1,0,5.3,12.6,1.321,1.321,0,0,0,6.623,11.284Zm10.567,4.293a4.953,4.953,0,1,0-4.953,4.953,4.953,4.953,0,0,0,4.953-4.953ZM15.539,6.66a.66.66,0,0,0-.66-.66H8.935a.66.66,0,0,0,0,1.321h5.944A.66.66,0,0,0,15.539,6.66Z" fill="#fff"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <small>Add Photo</small>
                </div>
                <div class="profileprogresswrp mb-4">
                    <div class="profileprogress">
                        <div class="active" style="width: 20%;"></div>
                    </div>
                    <small>Profile Completed</small>
                </div>
                <div class="card cardinfo mb-4 card1 done">
                    <div class="card-header">
                        Personal Information
                    </div>
                    <div class="card-body">
                        <form id="form_mobile_retail_basic">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="d-flex align-items-center w-100">
                                        <svg width="30" height="30" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256c2.581,0,5.099-0.32,7.68-0.384l0.896,0.171
                                                c0.704,0.128,1.387,0.213,2.091,0.213c0.981,0,1.984-0.128,2.923-0.405l1.195-0.341C405.056,503.509,512,392.171,512,256
                                                C512,114.837,397.163,0,256,0z M408.149,434.325c-1.003-3.264-3.264-6.016-6.549-7.104l-56.149-18.688
                                                c-19.605-8.171-28.736-39.552-30.869-52.139c14.528-13.504,27.947-33.621,27.947-51.797c0-6.187,1.749-8.555,1.408-8.619
                                                c3.328-0.832,6.037-3.2,7.317-6.379c1.045-2.624,10.24-26.069,10.24-41.877c0-0.875-0.107-1.749-0.32-2.581
                                                c-1.344-5.355-4.48-10.752-9.173-14.123v-49.664c0-30.699-9.344-43.563-19.243-51.008c-2.219-15.275-18.581-44.992-76.757-44.992
                                                c-59.477,0-96,55.915-96,96v49.664c-4.693,3.371-7.829,8.768-9.173,14.123c-0.213,0.853-0.32,1.728-0.32,2.581
                                                c0,15.808,9.195,39.253,10.24,41.877c1.28,3.179,2.965,5.205,6.293,6.037c0.683,0.405,2.432,2.795,2.432,8.96
                                                c0,18.176,13.419,38.293,27.947,51.797c-2.112,12.565-11.157,43.925-30.144,51.861l-56.896,18.965
                                                c-3.264,1.088-5.611,3.776-6.635,7.04C53.376,391.189,21.291,327.317,21.291,256c0-129.387,105.28-234.667,234.667-234.667
                                                S490.624,126.613,490.624,256C490.667,327.339,458.56,391.253,408.149,434.325z"></path>
                                        </svg>
                                        <div class="inputwithlabl">
                                            <small class="d-block">Name</small>
                                            <input class="inputtxt" type="text" placeholder="Enter Your Name" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="d-flex align-items-center w-100">
                                        <svg width="24" height="24" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 71.59 122.88" style="enable-background:new 0 0 71.59 122.88" xml:space="preserve">
                                            <style type="text/css">
                                                .st0 {
                                                    fill-rule: evenodd;
                                                    clip-rule: evenodd;
                                                }
                                            </style>
                                            <g>
                                                <path class="st0" d="M12.74,0h46.11c3.51,0,6.69,1.43,9,3.74c2.31,2.31,3.74,5.49,3.74,9v97.4c0,3.51-1.43,6.69-3.74,9 c-2.31,2.31-5.49,3.74-9,3.74H12.74c-3.51,0-6.69-1.43-9-3.74c-2.31-2.31-3.74-5.49-3.74-9v-97.4c0-3.51,1.43-6.69,3.74-9 C6.05,1.43,9.24,0,12.74,0L12.74,0z M35.79,107.18c2.88,0,5.22,2.34,5.22,5.22c0,2.88-2.34,5.22-5.22,5.22 c-2.88,0-5.22-2.34-5.22-5.22C30.58,109.52,32.91,107.18,35.79,107.18L35.79,107.18z M3.66,103.18h64.28V19.7H3.66V103.18 L3.66,103.18z"></path>
                                            </g>
                                        </svg>
                                        <div class="inputwithlabl">
                                            <small class="d-block">Mobile Number</small>
                                            <button class="edt" type="button">
                                                <svg width="24" height="24" fill="#999" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.337 490.337" style="enable-background:new 0 0 490.337 490.337;" xml:space="preserve">
                                                    <path d="M229.9,145.379l-47.5,47.5c-17.5,17.5-35.1,35-52.5,52.7c-4.1,4.2-7.2,9.8-8.4,15.3c-6.3,28.9-12.4,57.8-18.5,86.7
                                                            l-3.4,16c-1.6,7.8,0.5,15.6,5.8,20.9c4.1,4.1,9.8,6.4,15.8,6.4c1.7,0,3.4-0.2,5.1-0.5l17.6-3.7c28-5.9,56.1-11.9,84.1-17.7
                                                            c6.5-1.4,12-4.3,16.7-9c78.6-78.7,157.2-157.3,235.8-235.8c5.8-5.8,9-12.7,9.8-21.2c0.1-1.4,0-2.8-0.3-4.1c-0.5-2-0.9-4.1-1.4-6.1
                                                            c-1.1-5.1-2.3-10.9-4.7-16.5l0,0c-14.7-33.6-39.1-57.6-72.5-71.1c-6.7-2.7-13.8-3.6-20-4.4l-1.7-0.2c-9-1.1-17.2,1.9-24.3,9.1
                                                            C320.4,54.879,275.1,100.179,229.9,145.379z M386.4,24.679c0.2,0,0.3,0,0.5,0l1.7,0.2c5.2,0.6,10,1.2,13.8,2.8
                                                            c27.2,11,47.2,30.6,59.3,58.2c1.4,3.2,2.3,7.3,3.2,11.6c0.3,1.6,0.7,3.2,1,4.8c-0.4,1.8-1.1,3-2.5,4.3
                                                            c-78.7,78.5-157.3,157.2-235.9,235.8c-1.3,1.3-2.5,1.9-4.3,2.3c-28.1,5.9-56.1,11.8-84.2,17.7l-14.8,3.1l2.8-13.1
                                                            c6.1-28.8,12.2-57.7,18.4-86.5c0.2-0.9,1-2.3,1.9-3.3c17.4-17.6,34.8-35.1,52.3-52.5l47.5-47.5c45.3-45.3,90.6-90.6,135.8-136
                                                            C384.8,24.979,385.7,24.679,386.4,24.679z"></path>
                                                    <path d="M38.9,109.379h174.6c6.8,0,12.3-5.5,12.3-12.3s-5.5-12.3-12.3-12.3H38.9c-21.5,0-38.9,17.5-38.9,38.9v327.4
                                                            c0,21.5,17.5,38.9,38.9,38.9h327.3c21.5,0,38.9-17.5,38.9-38.9v-167.5c0-6.8-5.5-12.3-12.3-12.3s-12.3,5.5-12.3,12.3v167.5
                                                            c0,7.9-6.5,14.4-14.4,14.4H38.9c-7.9,0-14.4-6.5-14.4-14.4v-327.3C24.5,115.879,31,109.379,38.9,109.379z"></path>
                                                </svg>
                                            </button>
                                            <input class="inputtxt" type="tel" value="<?= $this->session->userdata('mobile') ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="d-flex align-items-center w-100">
                                        <svg width="30" height="30" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300.412 300.412" style="enable-background:new 0 0 300.412 300.412;" xml:space="preserve">
                                            <path d="M271.262,50.041H29.15C13.153,50.041,0,63.01,0,79.191v142.03c0,16.01,13.022,29.15,29.15,29.15h242.112
                                                    c16.137,0,29.15-13.152,29.15-29.15V79.191C300.412,62.995,287.246,50.041,271.262,50.041z M265.583,65.94l-115.377,74.791
                                                    L34.831,65.94H265.583z M15.9,79.191c0-2.011,0.455-3.962,1.303-5.728l72.173,46.785L15.9,218.513V79.191z M271.262,234.471H29.15
                                                    c-1.648,0-3.221-0.317-4.679-0.869l78.277-104.686l43.134,27.961c2.632,1.706,6.019,1.704,8.65,0l43.133-27.961l78.277,104.686
                                                    C274.484,234.155,272.911,234.471,271.262,234.471z M284.512,218.513l-73.476-98.265l72.173-46.785
                                                    c0.848,1.766,1.303,3.717,1.303,5.728V218.513z"></path>
                                        </svg>
                                        <div class="inputwithlabl">
                                            <small class="d-block">Email ID</small>
                                            <input class="inputtxt" type="email" placeholder="Enter Your Email" name="email">
                                        </div>
                                    </div>
                                </div>

                                <!-- <div align="right">
                                    <button type="submit" class="btn btn-secondary" id="btn_mob_retail_basic">Save</button>
                                </div> -->
                            </div>

                        </form>
                    </div>
                </div>

                <div class="card cardinfo mb-4 card2">
                    <div class="card-header">
                        Business Information
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path d="M498.665,213.084l-51.215-40.182V20.539c0-8.103-5.836-14.67-13.937-14.67h-58.682c-8.101,0-15.404,6.568-15.404,14.67
                                                    v83.3l-93.778-73.864c-5.314-4.168-12.605-4.169-17.924-0.003L13.622,213.303C5.141,219.95,0,229.945,0,240.722v17.845
                                                    c0,19.212,16.363,34.842,35.576,34.842h23.106v198.052c0,8.102,7.303,14.67,15.404,14.67h365.295
                                                    c8.101,0,13.937-6.568,13.937-14.67V293.41h24.573c19.213,0,34.109-15.63,34.109-34.842v-18.07
                                                    C512,229.725,507.14,219.733,498.665,213.084z M388.768,35.209h29.341v114.672l-29.341-23.021V35.209z M305.146,476.791h-99.759
                                                    V316.883h99.759V476.791z M423.977,476.791h-89.49V302.212c0-8.102-5.102-14.67-13.203-14.67h-129.1
                                                    c-8.101,0-16.138,6.568-16.138,14.67v174.579H88.023V266.605l168.188-131.864l167.766,131.627V476.791z M482.659,258.567
                                                    c0,3.034-1.736,5.501-4.768,5.501h-24.573v-4.838c0-4.505-1.703-8.761-5.248-11.543L265.819,104.554
                                                    c-5.315-4.168-12.697-4.171-18.015-0.003L64.622,247.919c-3.547,2.782-5.94,7.037-5.94,11.546v4.604H35.576
                                                    c-3.032,0-6.235-2.468-6.235-5.501v-17.845c0-1.702,1.134-3.279,2.475-4.329L256.773,60.162L480.828,236.17
                                                    c1.338,1.049,1.831,2.628,1.831,4.328V258.567z"></path>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business Name" id="retail_bussiness_name" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#business-name">Add Details</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 349.661 349.661" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 349.661 349.661">
                                        <path d="M174.831,0C102.056,0,42.849,59.207,42.849,131.981c0,30.083,21.156,74.658,62.881,132.485   c30.46,42.215,61.363,76.607,61.671,76.95l7.429,8.245l7.429-8.245c0.309-0.342,31.211-34.734,61.671-76.95   c41.725-57.828,62.881-102.402,62.881-132.485C306.812,59.207,247.605,0,174.831,0z M174.83,319.617   c-37.058-42.692-111.98-139.048-111.98-187.636C62.849,70.235,113.084,20,174.831,20s111.981,50.235,111.981,111.981   C286.812,180.54,211.888,276.915,174.83,319.617z"></path>
                                        <circle cx="174.831" cy="131.982" r="49.696"></circle>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business Address" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#business-address">Add Details</button>
                                    </div>
                                </div>

                                <!-- <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                        <path d="M512,256.001c0-10.821-6.012-20.551-15.694-25.398l-38.122-19.061l38.122-19.06c0.001-0.001,0.004-0.002,0.004-0.002
                                                    c9.68-4.845,15.692-14.576,15.692-25.397c0-10.819-6.013-20.55-15.694-25.397L281.09,34.08
                                                    c-15.712-7.849-34.47-7.849-50.185,0.001L15.691,141.691C6.013,146.534,0,156.264,0,167.084c0,10.821,6.012,20.551,15.694,25.398
                                                    l38.121,19.06l-38.126,19.063C6.012,235.45,0,245.18,0,256.001s6.012,20.551,15.694,25.397l38.121,19.061l-38.118,19.059
                                                    C6.02,324.353,0.004,334.08,0,344.902c-0.004,10.828,6.008,20.564,15.694,25.412l215.215,107.608
                                                    c7.856,3.925,16.471,5.886,25.09,5.886c8.619,0,17.238-1.963,25.095-5.887l215.215-107.608
                                                    c9.682-4.845,15.695-14.582,15.691-25.41c-0.004-10.822-6.02-20.549-15.694-25.381l-38.122-19.061l38.126-19.063
                                                    C505.988,276.552,512,266.822,512,256.001z M26.225,171.431c-2.339-1.171-2.687-3.226-2.687-4.346s0.35-3.175,2.683-4.343
                                                    L241.429,55.138c4.563-2.28,9.568-3.418,14.573-3.418c5.003,0,10.007,1.139,14.567,3.417L485.776,162.74
                                                    c2.337,1.17,2.687,3.225,2.687,4.345s-0.348,3.175-2.687,4.346L270.572,279.032c-9.125,4.558-20.019,4.558-29.139,0.001
                                                    L26.225,171.431z M485.783,340.575c2.33,1.164,2.679,3.215,2.679,4.336c0.001,1.123-0.348,3.182-2.683,4.35L270.571,456.865
                                                    c-9.125,4.558-20.019,4.559-29.139,0.001L26.225,349.262c-2.339-1.171-2.688-3.229-2.687-4.352c0-1.119,0.348-3.171,2.683-4.337
                                                    l53.912-26.956l150.776,75.387c7.856,3.925,16.471,5.886,25.089,5.886c8.619,0,17.238-1.963,25.095-5.887l150.772-75.386
                                                    L485.783,340.575z M485.778,260.345L270.571,367.949c-9.125,4.558-20.019,4.559-29.139,0.001L26.225,260.347
                                                    c-2.339-1.17-2.687-3.225-2.687-4.345c0-1.122,0.348-3.175,2.683-4.344l53.912-26.956l150.776,75.387
                                                    c7.855,3.925,16.472,5.886,25.089,5.886c8.617,0,17.237-1.962,25.094-5.888l150.774-75.386l53.908,26.954
                                                    c2.339,1.171,2.687,3.225,2.687,4.346C488.462,257.121,488.113,259.176,485.778,260.345z"></path>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business Category" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#business-category">Add Details</button>
                                    </div>
                                </div> -->

                                <!-- <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                        <path d="M497.335,284.567L272.36,59.593c-3.135-3.135-7.386-4.897-11.82-4.897c-0.018,0-0.036,0-0.053,0l-117.811,0.379
                                                    c-4.414,0.014-8.645,1.774-11.766,4.897L107.261,83.62L28.537,4.896c-6.527-6.527-17.112-6.527-23.641,0s-6.528,17.112,0,23.641
                                                    L83.62,107.26l-23.648,23.649c-3.135,3.135-4.897,7.388-4.897,11.821l0.009,118.2c0,4.433,1.762,8.685,4.897,11.819
                                                    l224.586,224.586c9.776,9.776,22.619,14.665,35.462,14.665c12.843,0,25.685-4.889,35.461-14.665l141.845-141.845
                                                    C516.887,335.936,516.887,304.12,497.335,284.567z M473.694,331.848L331.849,473.693c-6.518,6.517-17.123,6.517-23.642,0
                                                    l-219.69-219.69L88.51,149.653l18.752-18.752l25.128,25.128c-14.998,25.333-11.942,58.981,10.333,81.256
                                                    c26.07,26.071,68.49,26.072,94.564,0c26.131-26.133,26.136-68.428,0-94.564c-22.197-22.199-55.836-25.383-81.256-10.333
                                                    l-25.128-25.128l18.774-18.774l103.962-0.335l220.055,220.056C480.211,314.726,480.211,325.33,473.694,331.848z M187.343,163.701
                                                    l-5.997-5.997c11.101-2.957,23.47-0.172,32.299,8.658c13.066,13.066,13.067,34.213,0,47.282
                                                    c-13.034,13.033-34.246,13.036-47.281,0c-8.79-8.791-11.629-21.143-8.658-32.3l5.997,5.997c6.528,6.528,17.112,6.528,23.641,0
                                                    C193.871,180.815,193.871,170.23,187.343,163.701z"></path>
                                        <path d="M355.49,379.131l-94.564-94.564c-6.527-6.527-17.112-6.527-23.641,0s-6.528,17.112,0,23.641l94.564,94.564
                                                    c6.528,6.528,17.112,6.528,23.641,0C362.018,396.244,362.018,385.659,355.49,379.131z"></path>
                                        <path d="M402.771,331.849l-94.564-94.564c-6.527-6.527-17.112-6.527-23.641,0c-6.528,6.527-6.528,17.112,0,23.641l94.564,94.564
                                                    c6.528,6.528,17.112,6.528,23.641,0C409.299,348.963,409.299,338.378,402.771,331.849z"></path>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business Type" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#business-type">Add Details</button>
                                    </div>
                                </div> -->

                            </div>

                            <div class="col-md-6 border-left">
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 87.881 87.881" style="enable-background:new 0 0 87.881 87.881;" xml:space="preserve">
                                        <path d="M70.828,0H33.056C27.535,0,23.044,4.484,23.03,10.001h-2.975c-7.183,0-13.027,5.844-13.027,13.027v51.826
                                                c0,7.184,5.844,13.027,13.027,13.027h37.772c7.183,0,13.026-5.844,13.026-13.027v-2.975c5.517-0.015,10.001-4.506,10.001-10.026
                                                V10.027C80.854,4.498,76.356,0,70.828,0z M64.854,30.054v37.774v7.026c0,3.881-3.146,7.027-7.026,7.027H20.055
                                                c-3.882,0-7.027-3.146-7.027-7.027V23.028c0-3.881,3.146-7.027,7.027-7.027h37.772c3.88,0,7.026,3.146,7.026,7.027L64.854,30.054
                                                L64.854,30.054z M74.854,61.853c0,2.212-1.793,4.011-4.001,4.024V30.054v-7.026c0-7.183-5.844-13.027-13.026-13.027H29.031
                                                C29.045,7.793,30.844,6,33.056,6h37.773c2.22,0,4.026,1.807,4.026,4.027V61.853z"></path>
                                        <rect x="20.941" y="27.313" width="36" height="6"></rect>
                                        <rect x="20.941" y="40.187" width="36" height="6"></rect>
                                        <rect x="20.941" y="53.061" width="36" height="6"></rect>
                                        <rect x="20.941" y="65.935" width="36" height="6"></rect>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business KYC" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success btn_bussiness_type" data-toggle="modal" data-target="#kyc">Add Details</button>
                                    </div>
                                </div>
                                <div class="d-flex w-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                                        <g id="Image" transform="translate(-2 -2)">
                                            <path id="Path_137" data-name="Path 137" d="M25,2H7A5,5,0,0,0,2,7V25a5,5,0,0,0,5,5H25a5,5,0,0,0,5-5V7A5,5,0,0,0,25,2ZM7,4H25a3,3,0,0,1,3,3v5.59l-1.88-1.88a3,3,0,0,0-4.24,0l-7.95,8-3-2.42a3,3,0,0,0-3.8,0L4,18.86V7A3,3,0,0,1,7,4ZM25,28H7a3,3,0,0,1-3-3V21.47l4.38-3.66a1,1,0,0,1,1.27,0l3.73,3a1,1,0,0,0,1.33-.07l8.58-8.59a1,1,0,0,1,1.42,0L28,15.41V25a3,3,0,0,1-3,3Z" fill="#a8a8a8"></path>
                                            <path id="Path_138" data-name="Path 138" d="M10,13a3,3,0,1,0-3-3A3,3,0,0,0,10,13Zm0-4a1,1,0,1,1-1,1A1,1,0,0,1,10,9Z" fill="#a8a8a8"></path>
                                        </g>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Store Verifications" readonly="">
                                        <div class="d-flex">

                                            <div class="imageholder">
                                                <div class="holder">
                                                    <img id="imgPreview" src="<?= base_url() ?>assets/images/round-plus.jpg" alt="pic" class="imgPreview">
                                                    <input type="file" form="form_mobile_retail_basic" name="front_image" id="photo" class="photo">
                                                </div>
                                                <small>Front Picture</small>
                                            </div>
                                            <div class="imageholder">
                                                <div class="holder">
                                                    <img id="imgPreview" src="<?= base_url() ?>assets/images/round-plus.jpg" alt="pic" class="imgPreview2">
                                                    <input type="file" form="form_mobile_retail_basic" name="inside_image" id="photo" class="photo2">
                                                </div>
                                                <small>Inside Picture</small>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card cardinfo mb-4 card3">
                    <div class="card-header">
                        Financial Information
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22.626" height="26" viewBox="0 0 22.626 26">
                                        <g id="Layer_2" data-name="Layer 2" transform="translate(0.004)">
                                            <g id="Layer_1" data-name="Layer 1" transform="translate(-0.004)">
                                                <path id="Path_128" data-name="Path 128" d="M21.591,24.061l-.427-.545-2.026,2.25h0a.547.547,0,0,1-.826,0l-2.064-2.232-2.022,2.177a.547.547,0,0,1-.821.026l-2.144-2.2L9.312,25.764l-.035.042a.545.545,0,0,1-.833,0L6.4,23.535,4.3,25.767h0a.547.547,0,0,1-.821,0l-2-2.267-.415.535a.576.576,0,0,1-.472.264A.623.623,0,0,1,0,23.646V.653A.62.62,0,0,1,.582,0h21.45a.623.623,0,0,1,.59.653V23.641h0a.675.675,0,0,1-.205.493.538.538,0,0,1-.823-.064ZM3.483,3.774H8.27V5.216H6.675v4.22H5.08V5.216H3.486V3.774Zm8.129,4.772h-1.7l-.248.889H8.017L9.928,3.774h1.72l1.9,5.661h-1.7l-.236-.887ZM11.32,7.214,10.765,5.19l-.557,2.029Zm2.359-3.439h1.734l.9,1.741.882-1.741H18.9L17.326,6.515l1.729,2.92H17.285l-1-1.816-1,1.816H13.532l1.753-2.949Zm3.095,14.208a.5.5,0,0,1,0,1H4.479a.5.5,0,0,1,0-1Zm2.458-3.22a.5.5,0,0,1,0,1H4.352a.5.5,0,0,1,0-1Zm.021-3.22a.5.5,0,0,1,.415.658.453.453,0,0,1-.432.342H4.352a.5.5,0,0,1,0-1ZM21.421,1.333H1.193V22.016a.54.54,0,0,1,.656.085.163.163,0,0,1,.033.035h0l2.038,2.3,2.1-2.229a.547.547,0,0,1,.821,0h0l2.019,2.253,1.958-2.248a.545.545,0,0,1,.819-.024h0L13.79,24.4l2.045-2.184a.545.545,0,0,1,.819,0L18.7,24.436l2.055-2.281a.543.543,0,0,1,.665-.13Z" transform="translate(0.004)" fill="#999"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="GSTIN" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#gst">Add Details</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="24" viewBox="0 0 28 24">
                                        <g id="_4987286121594941299" data-name="4987286121594941299" transform="translate(-0.5 -2.5)">
                                            <path id="Path_136" data-name="Path 136" d="M14.5,3,3,9.192v2.654H26V9.192Z" transform="translate(-0.231)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></path>
                                            <rect id="Rectangle_117" data-name="Rectangle 117" width="3" height="9" transform="translate(13 12)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                            <rect id="Rectangle_118" data-name="Rectangle 118" width="4" height="9" transform="translate(20 12)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                            <rect id="Rectangle_119" data-name="Rectangle 119" width="3" height="9" transform="translate(5 12)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                            <rect id="Rectangle_120" data-name="Rectangle 120" width="23" height="2" transform="translate(3 21)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                            <rect id="Rectangle_121" data-name="Rectangle 121" width="27" height="3" transform="translate(1 23)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                        </g>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Bank Account" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#bankdtls">Add Details</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="28" height="24" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path d="M0,0v233.739h233.739V0H0z M200.348,200.348H33.391V33.391h166.957V200.348z"></path>
                                        <rect x="66.783" y="66.783" width="100.174" height="100.174"></rect>
                                        <path d="M278.261,0v233.739H512V0H278.261z M478.609,200.348H311.652V33.391h166.957V200.348z"></path>
                                        <rect x="345.043" y="66.783" width="100.174" height="100.174"></rect>
                                        <path d="M0,278.261V512h233.739V278.261H0z M200.348,478.609H33.391V311.652h166.957V478.609z"></path>
                                        <rect x="66.783" y="345.043" width="100.174" height="100.174"></rect>
                                        <polygon points="278.261,278.261 278.261,512 345.043,512 345.043,478.609 311.652,478.609 311.652,411.826 345.043,411.826 
                                            345.043,378.435 311.652,378.435 311.652,311.652 345.043,311.652 345.043,278.261 "></polygon>
                                        <rect x="478.609" y="278.261" width="33.391" height="33.391"></rect>
                                        <polygon points="478.609,478.609 445.217,478.609 445.217,512 512,512 512,356.174 478.609,356.174 "></polygon>
                                        <rect x="378.435" y="278.261" width="66.783" height="33.391"></rect>
                                        <polygon points="445.217,411.826 411.826,411.826 411.826,378.435 445.217,378.435 445.217,345.043 378.435,345.043 
                                            378.435,445.217 445.217,445.217 "></polygon>
                                        <rect x="378.435" y="478.609" width="33.391" height="33.391"></rect>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="UPI ID" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#upi">Add Details</button>
                                    </div>
                                </div>
                                <!-- <div class="d-flex align-items-center w-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29.053" height="21.79" viewBox="0 0 29.053 21.79">
                                        <g id="Layer_1_1_" transform="translate(-1 -7)">
                                            <path id="Path_129" data-name="Path 129" d="M30.053,7H1V28.79H30.053ZM28.843,27.579H2.211V8.211H28.843Z" transform="translate(0 0)" fill="#a7a7a7"></path>
                                            <path id="Path_130" data-name="Path 130" d="M16.684,21.869A3.027,3.027,0,0,0,14.2,18.9a3,3,0,0,0,.666-1.871,3.026,3.026,0,0,0-6.053,0A3,3,0,0,0,9.482,18.9,3.027,3.027,0,0,0,7,21.869v4.237h9.684Zm-4.842-6.658a1.816,1.816,0,1,1-1.816,1.816A1.818,1.818,0,0,1,11.842,15.211ZM15.474,24.9H8.211V21.869a1.818,1.818,0,0,1,1.816-1.816h3.632a1.818,1.818,0,0,1,1.816,1.816Z" transform="translate(-2.368 -2.763)" fill="#a7a7a7"></path>
                                            <rect id="Rectangle_107" data-name="Rectangle 107" width="4.62" height="0.924" transform="translate(16.192 13.007)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_108" data-name="Rectangle 108" width="3.696" height="0.924" transform="translate(22.661 13.007)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_109" data-name="Rectangle 109" width="1.848" transform="translate(16.192 16.703)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_110" data-name="Rectangle 110" width="6.469" transform="translate(19.888 16.703)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_111" data-name="Rectangle 111" width="4.62" height="0.924" transform="translate(16.192 19.475)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_112" data-name="Rectangle 112" width="2.772" height="0.924" transform="translate(23.585 19.475)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_113" data-name="Rectangle 113" width="1.848" height="1.848" transform="translate(16.192 21.324)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_114" data-name="Rectangle 114" width="1.848" height="1.848" transform="translate(18.04 21.324)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_115" data-name="Rectangle 115" width="1.848" height="1.848" transform="translate(20.812 21.324)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_116" data-name="Rectangle 116" width="0.924" height="1.848" transform="translate(25.433 21.324)" fill="#a7a7a7"></rect>
                                        </g>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="KYC" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#kyc">Add Details</button>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 w-100"><button class="btn1 thankyoubtn" form="form_mobile_retail_basic">Done</button></div>
        </section>
        <!-- =====================================   Retail Store  =============================== -->

        <!-- =====================================  Restaurant   =============================== -->
        <section class="mobileregistersec2 bg-white" id="Restaurantmobilestep" style="display:none;">
            <div class="p-3 pointerbtn Restaurantbackbtn"><svg width="24px" height="24px" fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <g data-name="Layer 2">
                        <g data-name="arrow-back">
                            <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0" />
                            <path d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="container">
                <div class="proavatersec text-center pt-5 pb-3">
                    <div class="proavaterwrp">
                        <div class="proavater">
                            <img id="imgPreview" src="<?= base_url() ?>assets/images/avater.jpg" alt="pic" class="imgPreview3">
                            <input type="file" form="form_mobile_restaurant_basic" name="profile_image" id="photo" class="photo3">
                        </div>
                        <div class="cameraico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 41 41">
                                <g id="Group_9" data-name="Group 9" transform="translate(-218 -128)">
                                    <circle id="Ellipse_25" data-name="Ellipse 25" cx="20.5" cy="20.5" r="20.5" transform="translate(218 128)" fill="#8a8a8a"></circle>
                                    <g id="Layer_5" data-name="Layer 5" transform="translate(226.593 133.914)">
                                        <path id="Path_87" data-name="Path 87" d="M15.87,15.577a3.633,3.633,0,1,1-3.633-3.633A3.633,3.633,0,0,1,15.87,15.577Zm5.944-5.614V21.191a1.981,1.981,0,0,1-1.981,1.981H3.981A1.981,1.981,0,0,1,2,21.191V9.963A1.981,1.981,0,0,1,3.981,7.981H19.832A1.981,1.981,0,0,1,21.814,9.963ZM6.623,11.284A1.321,1.321,0,1,0,5.3,12.6,1.321,1.321,0,0,0,6.623,11.284Zm10.567,4.293a4.953,4.953,0,1,0-4.953,4.953,4.953,4.953,0,0,0,4.953-4.953ZM15.539,6.66a.66.66,0,0,0-.66-.66H8.935a.66.66,0,0,0,0,1.321h5.944A.66.66,0,0,0,15.539,6.66Z" fill="#fff"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <small>Add Photo</small>
                </div>
                <div class="profileprogresswrp mb-4">
                    <div class="profileprogress">
                        <div class="active" style="width: 20%;"></div>
                    </div>
                    <small>Profile Completed</small>
                </div>
                <div class="card cardinfo mb-4 card1 done">
                    <div class="card-header">
                        Personal Information
                    </div>
                    <div class="card-body">

                        <form id="form_mobile_restaurant_basic">

                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="d-flex align-items-center w-100">
                                        <svg width="30" height="30" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256c2.581,0,5.099-0.32,7.68-0.384l0.896,0.171
                                                c0.704,0.128,1.387,0.213,2.091,0.213c0.981,0,1.984-0.128,2.923-0.405l1.195-0.341C405.056,503.509,512,392.171,512,256
                                                C512,114.837,397.163,0,256,0z M408.149,434.325c-1.003-3.264-3.264-6.016-6.549-7.104l-56.149-18.688
                                                c-19.605-8.171-28.736-39.552-30.869-52.139c14.528-13.504,27.947-33.621,27.947-51.797c0-6.187,1.749-8.555,1.408-8.619
                                                c3.328-0.832,6.037-3.2,7.317-6.379c1.045-2.624,10.24-26.069,10.24-41.877c0-0.875-0.107-1.749-0.32-2.581
                                                c-1.344-5.355-4.48-10.752-9.173-14.123v-49.664c0-30.699-9.344-43.563-19.243-51.008c-2.219-15.275-18.581-44.992-76.757-44.992
                                                c-59.477,0-96,55.915-96,96v49.664c-4.693,3.371-7.829,8.768-9.173,14.123c-0.213,0.853-0.32,1.728-0.32,2.581
                                                c0,15.808,9.195,39.253,10.24,41.877c1.28,3.179,2.965,5.205,6.293,6.037c0.683,0.405,2.432,2.795,2.432,8.96
                                                c0,18.176,13.419,38.293,27.947,51.797c-2.112,12.565-11.157,43.925-30.144,51.861l-56.896,18.965
                                                c-3.264,1.088-5.611,3.776-6.635,7.04C53.376,391.189,21.291,327.317,21.291,256c0-129.387,105.28-234.667,234.667-234.667
                                                S490.624,126.613,490.624,256C490.667,327.339,458.56,391.253,408.149,434.325z"></path>
                                        </svg>
                                        <div class="inputwithlabl">
                                            <small class="d-block">Name</small>
                                            <input class="inputtxt" type="text" placeholder="Enter Name" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="d-flex align-items-center w-100">
                                        <svg width="24" height="24" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 71.59 122.88" style="enable-background:new 0 0 71.59 122.88" xml:space="preserve">
                                            <style type="text/css">
                                                .st0 {
                                                    fill-rule: evenodd;
                                                    clip-rule: evenodd;
                                                }
                                            </style>
                                            <g>
                                                <path class="st0" d="M12.74,0h46.11c3.51,0,6.69,1.43,9,3.74c2.31,2.31,3.74,5.49,3.74,9v97.4c0,3.51-1.43,6.69-3.74,9 c-2.31,2.31-5.49,3.74-9,3.74H12.74c-3.51,0-6.69-1.43-9-3.74c-2.31-2.31-3.74-5.49-3.74-9v-97.4c0-3.51,1.43-6.69,3.74-9 C6.05,1.43,9.24,0,12.74,0L12.74,0z M35.79,107.18c2.88,0,5.22,2.34,5.22,5.22c0,2.88-2.34,5.22-5.22,5.22 c-2.88,0-5.22-2.34-5.22-5.22C30.58,109.52,32.91,107.18,35.79,107.18L35.79,107.18z M3.66,103.18h64.28V19.7H3.66V103.18 L3.66,103.18z"></path>
                                            </g>
                                        </svg>
                                        <div class="inputwithlabl">
                                            <small class="d-block">Mobile Number</small>
                                            <button class="edt" type="button">
                                                <svg width="24" height="24" fill="#999" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.337 490.337" style="enable-background:new 0 0 490.337 490.337;" xml:space="preserve">
                                                    <path d="M229.9,145.379l-47.5,47.5c-17.5,17.5-35.1,35-52.5,52.7c-4.1,4.2-7.2,9.8-8.4,15.3c-6.3,28.9-12.4,57.8-18.5,86.7
                                                            l-3.4,16c-1.6,7.8,0.5,15.6,5.8,20.9c4.1,4.1,9.8,6.4,15.8,6.4c1.7,0,3.4-0.2,5.1-0.5l17.6-3.7c28-5.9,56.1-11.9,84.1-17.7
                                                            c6.5-1.4,12-4.3,16.7-9c78.6-78.7,157.2-157.3,235.8-235.8c5.8-5.8,9-12.7,9.8-21.2c0.1-1.4,0-2.8-0.3-4.1c-0.5-2-0.9-4.1-1.4-6.1
                                                            c-1.1-5.1-2.3-10.9-4.7-16.5l0,0c-14.7-33.6-39.1-57.6-72.5-71.1c-6.7-2.7-13.8-3.6-20-4.4l-1.7-0.2c-9-1.1-17.2,1.9-24.3,9.1
                                                            C320.4,54.879,275.1,100.179,229.9,145.379z M386.4,24.679c0.2,0,0.3,0,0.5,0l1.7,0.2c5.2,0.6,10,1.2,13.8,2.8
                                                            c27.2,11,47.2,30.6,59.3,58.2c1.4,3.2,2.3,7.3,3.2,11.6c0.3,1.6,0.7,3.2,1,4.8c-0.4,1.8-1.1,3-2.5,4.3
                                                            c-78.7,78.5-157.3,157.2-235.9,235.8c-1.3,1.3-2.5,1.9-4.3,2.3c-28.1,5.9-56.1,11.8-84.2,17.7l-14.8,3.1l2.8-13.1
                                                            c6.1-28.8,12.2-57.7,18.4-86.5c0.2-0.9,1-2.3,1.9-3.3c17.4-17.6,34.8-35.1,52.3-52.5l47.5-47.5c45.3-45.3,90.6-90.6,135.8-136
                                                            C384.8,24.979,385.7,24.679,386.4,24.679z"></path>
                                                    <path d="M38.9,109.379h174.6c6.8,0,12.3-5.5,12.3-12.3s-5.5-12.3-12.3-12.3H38.9c-21.5,0-38.9,17.5-38.9,38.9v327.4
                                                            c0,21.5,17.5,38.9,38.9,38.9h327.3c21.5,0,38.9-17.5,38.9-38.9v-167.5c0-6.8-5.5-12.3-12.3-12.3s-12.3,5.5-12.3,12.3v167.5
                                                            c0,7.9-6.5,14.4-14.4,14.4H38.9c-7.9,0-14.4-6.5-14.4-14.4v-327.3C24.5,115.879,31,109.379,38.9,109.379z"></path>
                                                </svg>
                                            </button>
                                            <input class="inputtxt" type="tel" value="<?= $this->session->userdata('mobile') ?>" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="d-flex align-items-center w-100">
                                        <svg width="30" height="30" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300.412 300.412" style="enable-background:new 0 0 300.412 300.412;" xml:space="preserve">
                                            <path d="M271.262,50.041H29.15C13.153,50.041,0,63.01,0,79.191v142.03c0,16.01,13.022,29.15,29.15,29.15h242.112
                                                    c16.137,0,29.15-13.152,29.15-29.15V79.191C300.412,62.995,287.246,50.041,271.262,50.041z M265.583,65.94l-115.377,74.791
                                                    L34.831,65.94H265.583z M15.9,79.191c0-2.011,0.455-3.962,1.303-5.728l72.173,46.785L15.9,218.513V79.191z M271.262,234.471H29.15
                                                    c-1.648,0-3.221-0.317-4.679-0.869l78.277-104.686l43.134,27.961c2.632,1.706,6.019,1.704,8.65,0l43.133-27.961l78.277,104.686
                                                    C274.484,234.155,272.911,234.471,271.262,234.471z M284.512,218.513l-73.476-98.265l72.173-46.785
                                                    c0.848,1.766,1.303,3.717,1.303,5.728V218.513z"></path>
                                        </svg>
                                        <div class="inputwithlabl">
                                            <small class="d-block">Email ID</small>
                                            <input class="inputtxt" type="email" placeholder="enter Email" name="email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card cardinfo mb-4 card2">
                    <div class="card-header">
                        Business Information
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path d="M498.665,213.084l-51.215-40.182V20.539c0-8.103-5.836-14.67-13.937-14.67h-58.682c-8.101,0-15.404,6.568-15.404,14.67
                                                    v83.3l-93.778-73.864c-5.314-4.168-12.605-4.169-17.924-0.003L13.622,213.303C5.141,219.95,0,229.945,0,240.722v17.845
                                                    c0,19.212,16.363,34.842,35.576,34.842h23.106v198.052c0,8.102,7.303,14.67,15.404,14.67h365.295
                                                    c8.101,0,13.937-6.568,13.937-14.67V293.41h24.573c19.213,0,34.109-15.63,34.109-34.842v-18.07
                                                    C512,229.725,507.14,219.733,498.665,213.084z M388.768,35.209h29.341v114.672l-29.341-23.021V35.209z M305.146,476.791h-99.759
                                                    V316.883h99.759V476.791z M423.977,476.791h-89.49V302.212c0-8.102-5.102-14.67-13.203-14.67h-129.1
                                                    c-8.101,0-16.138,6.568-16.138,14.67v174.579H88.023V266.605l168.188-131.864l167.766,131.627V476.791z M482.659,258.567
                                                    c0,3.034-1.736,5.501-4.768,5.501h-24.573v-4.838c0-4.505-1.703-8.761-5.248-11.543L265.819,104.554
                                                    c-5.315-4.168-12.697-4.171-18.015-0.003L64.622,247.919c-3.547,2.782-5.94,7.037-5.94,11.546v4.604H35.576
                                                    c-3.032,0-6.235-2.468-6.235-5.501v-17.845c0-1.702,1.134-3.279,2.475-4.329L256.773,60.162L480.828,236.17
                                                    c1.338,1.049,1.831,2.628,1.831,4.328V258.567z"></path>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business Name" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#business-name">Add Details</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 349.661 349.661" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 349.661 349.661">
                                        <path d="M174.831,0C102.056,0,42.849,59.207,42.849,131.981c0,30.083,21.156,74.658,62.881,132.485   c30.46,42.215,61.363,76.607,61.671,76.95l7.429,8.245l7.429-8.245c0.309-0.342,31.211-34.734,61.671-76.95   c41.725-57.828,62.881-102.402,62.881-132.485C306.812,59.207,247.605,0,174.831,0z M174.83,319.617   c-37.058-42.692-111.98-139.048-111.98-187.636C62.849,70.235,113.084,20,174.831,20s111.981,50.235,111.981,111.981   C286.812,180.54,211.888,276.915,174.83,319.617z"></path>
                                        <circle cx="174.831" cy="131.982" r="49.696"></circle>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="FSSAI License" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#business-licence">Add Details</button>
                                    </div>
                                </div>
                                <!-- <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                        <path d="M512,256.001c0-10.821-6.012-20.551-15.694-25.398l-38.122-19.061l38.122-19.06c0.001-0.001,0.004-0.002,0.004-0.002
                                                    c9.68-4.845,15.692-14.576,15.692-25.397c0-10.819-6.013-20.55-15.694-25.397L281.09,34.08
                                                    c-15.712-7.849-34.47-7.849-50.185,0.001L15.691,141.691C6.013,146.534,0,156.264,0,167.084c0,10.821,6.012,20.551,15.694,25.398
                                                    l38.121,19.06l-38.126,19.063C6.012,235.45,0,245.18,0,256.001s6.012,20.551,15.694,25.397l38.121,19.061l-38.118,19.059
                                                    C6.02,324.353,0.004,334.08,0,344.902c-0.004,10.828,6.008,20.564,15.694,25.412l215.215,107.608
                                                    c7.856,3.925,16.471,5.886,25.09,5.886c8.619,0,17.238-1.963,25.095-5.887l215.215-107.608
                                                    c9.682-4.845,15.695-14.582,15.691-25.41c-0.004-10.822-6.02-20.549-15.694-25.381l-38.122-19.061l38.126-19.063
                                                    C505.988,276.552,512,266.822,512,256.001z M26.225,171.431c-2.339-1.171-2.687-3.226-2.687-4.346s0.35-3.175,2.683-4.343
                                                    L241.429,55.138c4.563-2.28,9.568-3.418,14.573-3.418c5.003,0,10.007,1.139,14.567,3.417L485.776,162.74
                                                    c2.337,1.17,2.687,3.225,2.687,4.345s-0.348,3.175-2.687,4.346L270.572,279.032c-9.125,4.558-20.019,4.558-29.139,0.001
                                                    L26.225,171.431z M485.783,340.575c2.33,1.164,2.679,3.215,2.679,4.336c0.001,1.123-0.348,3.182-2.683,4.35L270.571,456.865
                                                    c-9.125,4.558-20.019,4.559-29.139,0.001L26.225,349.262c-2.339-1.171-2.688-3.229-2.687-4.352c0-1.119,0.348-3.171,2.683-4.337
                                                    l53.912-26.956l150.776,75.387c7.856,3.925,16.471,5.886,25.089,5.886c8.619,0,17.238-1.963,25.095-5.887l150.772-75.386
                                                    L485.783,340.575z M485.778,260.345L270.571,367.949c-9.125,4.558-20.019,4.559-29.139,0.001L26.225,260.347
                                                    c-2.339-1.17-2.687-3.225-2.687-4.345c0-1.122,0.348-3.175,2.683-4.344l53.912-26.956l150.776,75.387
                                                    c7.855,3.925,16.472,5.886,25.089,5.886c8.617,0,17.237-1.962,25.094-5.888l150.774-75.386l53.908,26.954
                                                    c2.339,1.171,2.687,3.225,2.687,4.346C488.462,257.121,488.113,259.176,485.778,260.345z"></path>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business Category" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#business-category">Add Details</button>
                                    </div>
                                </div> -->
                                <!-- <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                        <path d="M497.335,284.567L272.36,59.593c-3.135-3.135-7.386-4.897-11.82-4.897c-0.018,0-0.036,0-0.053,0l-117.811,0.379
                                                    c-4.414,0.014-8.645,1.774-11.766,4.897L107.261,83.62L28.537,4.896c-6.527-6.527-17.112-6.527-23.641,0s-6.528,17.112,0,23.641
                                                    L83.62,107.26l-23.648,23.649c-3.135,3.135-4.897,7.388-4.897,11.821l0.009,118.2c0,4.433,1.762,8.685,4.897,11.819
                                                    l224.586,224.586c9.776,9.776,22.619,14.665,35.462,14.665c12.843,0,25.685-4.889,35.461-14.665l141.845-141.845
                                                    C516.887,335.936,516.887,304.12,497.335,284.567z M473.694,331.848L331.849,473.693c-6.518,6.517-17.123,6.517-23.642,0
                                                    l-219.69-219.69L88.51,149.653l18.752-18.752l25.128,25.128c-14.998,25.333-11.942,58.981,10.333,81.256
                                                    c26.07,26.071,68.49,26.072,94.564,0c26.131-26.133,26.136-68.428,0-94.564c-22.197-22.199-55.836-25.383-81.256-10.333
                                                    l-25.128-25.128l18.774-18.774l103.962-0.335l220.055,220.056C480.211,314.726,480.211,325.33,473.694,331.848z M187.343,163.701
                                                    l-5.997-5.997c11.101-2.957,23.47-0.172,32.299,8.658c13.066,13.066,13.067,34.213,0,47.282
                                                    c-13.034,13.033-34.246,13.036-47.281,0c-8.79-8.791-11.629-21.143-8.658-32.3l5.997,5.997c6.528,6.528,17.112,6.528,23.641,0
                                                    C193.871,180.815,193.871,170.23,187.343,163.701z"></path>
                                        <path d="M355.49,379.131l-94.564-94.564c-6.527-6.527-17.112-6.527-23.641,0s-6.528,17.112,0,23.641l94.564,94.564
                                                    c6.528,6.528,17.112,6.528,23.641,0C362.018,396.244,362.018,385.659,355.49,379.131z"></path>
                                        <path d="M402.771,331.849l-94.564-94.564c-6.527-6.527-17.112-6.527-23.641,0c-6.528,6.527-6.528,17.112,0,23.641l94.564,94.564
                                                    c6.528,6.528,17.112,6.528,23.641,0C409.299,348.963,409.299,338.378,402.771,331.849z"></path>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business Type" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#business-type">Add Details</button>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-md-6 border-left">
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 87.881 87.881" style="enable-background:new 0 0 87.881 87.881;" xml:space="preserve">
                                        <path d="M70.828,0H33.056C27.535,0,23.044,4.484,23.03,10.001h-2.975c-7.183,0-13.027,5.844-13.027,13.027v51.826
                                                c0,7.184,5.844,13.027,13.027,13.027h37.772c7.183,0,13.026-5.844,13.026-13.027v-2.975c5.517-0.015,10.001-4.506,10.001-10.026
                                                V10.027C80.854,4.498,76.356,0,70.828,0z M64.854,30.054v37.774v7.026c0,3.881-3.146,7.027-7.026,7.027H20.055
                                                c-3.882,0-7.027-3.146-7.027-7.027V23.028c0-3.881,3.146-7.027,7.027-7.027h37.772c3.88,0,7.026,3.146,7.026,7.027L64.854,30.054
                                                L64.854,30.054z M74.854,61.853c0,2.212-1.793,4.011-4.001,4.024V30.054v-7.026c0-7.183-5.844-13.027-13.026-13.027H29.031
                                                C29.045,7.793,30.844,6,33.056,6h37.773c2.22,0,4.026,1.807,4.026,4.027V61.853z"></path>
                                        <rect x="20.941" y="27.313" width="36" height="6"></rect>
                                        <rect x="20.941" y="40.187" width="36" height="6"></rect>
                                        <rect x="20.941" y="53.061" width="36" height="6"></rect>
                                        <rect x="20.941" y="65.935" width="36" height="6"></rect>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business KYC" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success btn_bussiness_type" data-toggle="modal" data-target="#kyc">Add Details</button>
                                    </div>
                                </div>
                                <div class="d-flex w-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                                        <g id="Image" transform="translate(-2 -2)">
                                            <path id="Path_137" data-name="Path 137" d="M25,2H7A5,5,0,0,0,2,7V25a5,5,0,0,0,5,5H25a5,5,0,0,0,5-5V7A5,5,0,0,0,25,2ZM7,4H25a3,3,0,0,1,3,3v5.59l-1.88-1.88a3,3,0,0,0-4.24,0l-7.95,8-3-2.42a3,3,0,0,0-3.8,0L4,18.86V7A3,3,0,0,1,7,4ZM25,28H7a3,3,0,0,1-3-3V21.47l4.38-3.66a1,1,0,0,1,1.27,0l3.73,3a1,1,0,0,0,1.33-.07l8.58-8.59a1,1,0,0,1,1.42,0L28,15.41V25a3,3,0,0,1-3,3Z" fill="#a8a8a8"></path>
                                            <path id="Path_138" data-name="Path 138" d="M10,13a3,3,0,1,0-3-3A3,3,0,0,0,10,13Zm0-4a1,1,0,1,1-1,1A1,1,0,0,1,10,9Z" fill="#a8a8a8"></path>
                                        </g>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Store Verifications" readonly="">
                                        <div class="d-flex">
                                            <div class="imageholder">
                                                <div class="holder">
                                                    <img id="imgPreview" src="<?= base_url() ?>assets/images/round-plus.jpg" alt="pic" class="imgPreview">
                                                    <input type="file" name="front_image" id="photo" class="photo" form="form_mobile_restaurant_basic">
                                                </div>
                                                <small>Front Picture</small>
                                            </div>
                                            <div class="imageholder">
                                                <div class="holder">
                                                    <img id="imgPreview" src="<?= base_url() ?>assets/images/round-plus.jpg" alt="pic" class="imgPreview2">
                                                    <input type="file" name="inside_image" id="photo" class="photo2" form="form_mobile_restaurant_basic">
                                                </div>
                                                <small>Inside Picture</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card cardinfo mb-4 card3">
                    <div class="card-header">
                        Financial Information
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22.626" height="26" viewBox="0 0 22.626 26">
                                        <g id="Layer_2" data-name="Layer 2" transform="translate(0.004)">
                                            <g id="Layer_1" data-name="Layer 1" transform="translate(-0.004)">
                                                <path id="Path_128" data-name="Path 128" d="M21.591,24.061l-.427-.545-2.026,2.25h0a.547.547,0,0,1-.826,0l-2.064-2.232-2.022,2.177a.547.547,0,0,1-.821.026l-2.144-2.2L9.312,25.764l-.035.042a.545.545,0,0,1-.833,0L6.4,23.535,4.3,25.767h0a.547.547,0,0,1-.821,0l-2-2.267-.415.535a.576.576,0,0,1-.472.264A.623.623,0,0,1,0,23.646V.653A.62.62,0,0,1,.582,0h21.45a.623.623,0,0,1,.59.653V23.641h0a.675.675,0,0,1-.205.493.538.538,0,0,1-.823-.064ZM3.483,3.774H8.27V5.216H6.675v4.22H5.08V5.216H3.486V3.774Zm8.129,4.772h-1.7l-.248.889H8.017L9.928,3.774h1.72l1.9,5.661h-1.7l-.236-.887ZM11.32,7.214,10.765,5.19l-.557,2.029Zm2.359-3.439h1.734l.9,1.741.882-1.741H18.9L17.326,6.515l1.729,2.92H17.285l-1-1.816-1,1.816H13.532l1.753-2.949Zm3.095,14.208a.5.5,0,0,1,0,1H4.479a.5.5,0,0,1,0-1Zm2.458-3.22a.5.5,0,0,1,0,1H4.352a.5.5,0,0,1,0-1Zm.021-3.22a.5.5,0,0,1,.415.658.453.453,0,0,1-.432.342H4.352a.5.5,0,0,1,0-1ZM21.421,1.333H1.193V22.016a.54.54,0,0,1,.656.085.163.163,0,0,1,.033.035h0l2.038,2.3,2.1-2.229a.547.547,0,0,1,.821,0h0l2.019,2.253,1.958-2.248a.545.545,0,0,1,.819-.024h0L13.79,24.4l2.045-2.184a.545.545,0,0,1,.819,0L18.7,24.436l2.055-2.281a.543.543,0,0,1,.665-.13Z" transform="translate(0.004)" fill="#999"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="GSTIN" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#gst">Add Details</button>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="24" viewBox="0 0 28 24">
                                        <g id="_4987286121594941299" data-name="4987286121594941299" transform="translate(-0.5 -2.5)">
                                            <path id="Path_136" data-name="Path 136" d="M14.5,3,3,9.192v2.654H26V9.192Z" transform="translate(-0.231)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></path>
                                            <rect id="Rectangle_117" data-name="Rectangle 117" width="3" height="9" transform="translate(13 12)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                            <rect id="Rectangle_118" data-name="Rectangle 118" width="4" height="9" transform="translate(20 12)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                            <rect id="Rectangle_119" data-name="Rectangle 119" width="3" height="9" transform="translate(5 12)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                            <rect id="Rectangle_120" data-name="Rectangle 120" width="23" height="2" transform="translate(3 21)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                            <rect id="Rectangle_121" data-name="Rectangle 121" width="27" height="3" transform="translate(1 23)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                        </g>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Bank Account" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#bankdtls">Add Details</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="28" height="24" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path d="M0,0v233.739h233.739V0H0z M200.348,200.348H33.391V33.391h166.957V200.348z"></path>
                                        <rect x="66.783" y="66.783" width="100.174" height="100.174"></rect>
                                        <path d="M278.261,0v233.739H512V0H278.261z M478.609,200.348H311.652V33.391h166.957V200.348z"></path>
                                        <rect x="345.043" y="66.783" width="100.174" height="100.174"></rect>
                                        <path d="M0,278.261V512h233.739V278.261H0z M200.348,478.609H33.391V311.652h166.957V478.609z"></path>
                                        <rect x="66.783" y="345.043" width="100.174" height="100.174"></rect>
                                        <polygon points="278.261,278.261 278.261,512 345.043,512 345.043,478.609 311.652,478.609 311.652,411.826 345.043,411.826 
                                            345.043,378.435 311.652,378.435 311.652,311.652 345.043,311.652 345.043,278.261 "></polygon>
                                        <rect x="478.609" y="278.261" width="33.391" height="33.391"></rect>
                                        <polygon points="478.609,478.609 445.217,478.609 445.217,512 512,512 512,356.174 478.609,356.174 "></polygon>
                                        <rect x="378.435" y="278.261" width="66.783" height="33.391"></rect>
                                        <polygon points="445.217,411.826 411.826,411.826 411.826,378.435 445.217,378.435 445.217,345.043 378.435,345.043 
                                            378.435,445.217 445.217,445.217 "></polygon>
                                        <rect x="378.435" y="478.609" width="33.391" height="33.391"></rect>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="UPI ID" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#upi">Add Details</button>
                                    </div>
                                </div>
                                <!-- <div class="d-flex align-items-center w-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29.053" height="21.79" viewBox="0 0 29.053 21.79">
                                        <g id="Layer_1_1_" transform="translate(-1 -7)">
                                            <path id="Path_129" data-name="Path 129" d="M30.053,7H1V28.79H30.053ZM28.843,27.579H2.211V8.211H28.843Z" transform="translate(0 0)" fill="#a7a7a7"></path>
                                            <path id="Path_130" data-name="Path 130" d="M16.684,21.869A3.027,3.027,0,0,0,14.2,18.9a3,3,0,0,0,.666-1.871,3.026,3.026,0,0,0-6.053,0A3,3,0,0,0,9.482,18.9,3.027,3.027,0,0,0,7,21.869v4.237h9.684Zm-4.842-6.658a1.816,1.816,0,1,1-1.816,1.816A1.818,1.818,0,0,1,11.842,15.211ZM15.474,24.9H8.211V21.869a1.818,1.818,0,0,1,1.816-1.816h3.632a1.818,1.818,0,0,1,1.816,1.816Z" transform="translate(-2.368 -2.763)" fill="#a7a7a7"></path>
                                            <rect id="Rectangle_107" data-name="Rectangle 107" width="4.62" height="0.924" transform="translate(16.192 13.007)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_108" data-name="Rectangle 108" width="3.696" height="0.924" transform="translate(22.661 13.007)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_109" data-name="Rectangle 109" width="1.848" transform="translate(16.192 16.703)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_110" data-name="Rectangle 110" width="6.469" transform="translate(19.888 16.703)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_111" data-name="Rectangle 111" width="4.62" height="0.924" transform="translate(16.192 19.475)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_112" data-name="Rectangle 112" width="2.772" height="0.924" transform="translate(23.585 19.475)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_113" data-name="Rectangle 113" width="1.848" height="1.848" transform="translate(16.192 21.324)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_114" data-name="Rectangle 114" width="1.848" height="1.848" transform="translate(18.04 21.324)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_115" data-name="Rectangle 115" width="1.848" height="1.848" transform="translate(20.812 21.324)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_116" data-name="Rectangle 116" width="0.924" height="1.848" transform="translate(25.433 21.324)" fill="#a7a7a7"></rect>
                                        </g>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="KYC" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#kyc">Add Details</button>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 w-100"><button class="btn1 thankyoubtn" form="form_mobile_restaurant_basic">Done</button></div>
        </section>
        <!-- =====================================   Restaurant   =============================== -->
        <!-- =====================================   Service  =============================== -->
        <section class="mobileregistersec2 bg-white" id="Servicemobilestep4" style="display:none;">
            <div class="p-3 pointerbtn Servicebackbtn"><svg width="24px" height="24px" fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <g data-name="Layer 2">
                        <g data-name="arrow-back">
                            <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0" />
                            <path d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z" />
                        </g>
                    </g>
                </svg>
            </div>
            <div class="container">
                <div class="proavatersec text-center pt-5 pb-3">
                    <div class="proavaterwrp">
                        <div class="proavater">
                            <img id="imgPreview" src="<?= base_url() ?>assets/images/avater.jpg" alt="pic" class="imgPreview3">
                            <input type="file" form="form_mobile_service_basic" name="profile_image" id="photo" class="photo3">
                        </div>
                        <div class="cameraico">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 41 41">
                                <g id="Group_9" data-name="Group 9" transform="translate(-218 -128)">
                                    <circle id="Ellipse_25" data-name="Ellipse 25" cx="20.5" cy="20.5" r="20.5" transform="translate(218 128)" fill="#8a8a8a"></circle>
                                    <g id="Layer_5" data-name="Layer 5" transform="translate(226.593 133.914)">
                                        <path id="Path_87" data-name="Path 87" d="M15.87,15.577a3.633,3.633,0,1,1-3.633-3.633A3.633,3.633,0,0,1,15.87,15.577Zm5.944-5.614V21.191a1.981,1.981,0,0,1-1.981,1.981H3.981A1.981,1.981,0,0,1,2,21.191V9.963A1.981,1.981,0,0,1,3.981,7.981H19.832A1.981,1.981,0,0,1,21.814,9.963ZM6.623,11.284A1.321,1.321,0,1,0,5.3,12.6,1.321,1.321,0,0,0,6.623,11.284Zm10.567,4.293a4.953,4.953,0,1,0-4.953,4.953,4.953,4.953,0,0,0,4.953-4.953ZM15.539,6.66a.66.66,0,0,0-.66-.66H8.935a.66.66,0,0,0,0,1.321h5.944A.66.66,0,0,0,15.539,6.66Z" fill="#fff"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                    <small>Add Photo</small>
                </div>
                <div class="profileprogresswrp mb-4">
                    <div class="profileprogress">
                        <div class="active" style="width: 20%;"></div>
                    </div>
                    <small>Profile Completed</small>
                </div>
                <div class="card cardinfo mb-4 card1 done">
                    <div class="card-header">
                        Personal Information
                    </div>
                    <div class="card-body">
                        <form id="form_mobile_service_basic">
                            <div class="row">
                                <div class="col-md-4 mb-4">
                                    <div class="d-flex align-items-center w-100">
                                        <svg width="30" height="30" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256c2.581,0,5.099-0.32,7.68-0.384l0.896,0.171
                                            c0.704,0.128,1.387,0.213,2.091,0.213c0.981,0,1.984-0.128,2.923-0.405l1.195-0.341C405.056,503.509,512,392.171,512,256
                                            C512,114.837,397.163,0,256,0z M408.149,434.325c-1.003-3.264-3.264-6.016-6.549-7.104l-56.149-18.688
                                            c-19.605-8.171-28.736-39.552-30.869-52.139c14.528-13.504,27.947-33.621,27.947-51.797c0-6.187,1.749-8.555,1.408-8.619
                                            c3.328-0.832,6.037-3.2,7.317-6.379c1.045-2.624,10.24-26.069,10.24-41.877c0-0.875-0.107-1.749-0.32-2.581
                                            c-1.344-5.355-4.48-10.752-9.173-14.123v-49.664c0-30.699-9.344-43.563-19.243-51.008c-2.219-15.275-18.581-44.992-76.757-44.992
                                            c-59.477,0-96,55.915-96,96v49.664c-4.693,3.371-7.829,8.768-9.173,14.123c-0.213,0.853-0.32,1.728-0.32,2.581
                                            c0,15.808,9.195,39.253,10.24,41.877c1.28,3.179,2.965,5.205,6.293,6.037c0.683,0.405,2.432,2.795,2.432,8.96
                                            c0,18.176,13.419,38.293,27.947,51.797c-2.112,12.565-11.157,43.925-30.144,51.861l-56.896,18.965
                                            c-3.264,1.088-5.611,3.776-6.635,7.04C53.376,391.189,21.291,327.317,21.291,256c0-129.387,105.28-234.667,234.667-234.667
                                            S490.624,126.613,490.624,256C490.667,327.339,458.56,391.253,408.149,434.325z"></path>
                                        </svg>
                                        <div class="inputwithlabl">
                                            <small class="d-block">Name</small>
                                            <input class="inputtxt" type="text" placeholder="Enter Name" name="name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="d-flex align-items-center w-100">
                                        <svg width="24" height="24" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 71.59 122.88" style="enable-background:new 0 0 71.59 122.88" xml:space="preserve">
                                            <style type="text/css">
                                                .st0 {
                                                    fill-rule: evenodd;
                                                    clip-rule: evenodd;
                                                }
                                            </style>
                                            <g>
                                                <path class="st0" d="M12.74,0h46.11c3.51,0,6.69,1.43,9,3.74c2.31,2.31,3.74,5.49,3.74,9v97.4c0,3.51-1.43,6.69-3.74,9 c-2.31,2.31-5.49,3.74-9,3.74H12.74c-3.51,0-6.69-1.43-9-3.74c-2.31-2.31-3.74-5.49-3.74-9v-97.4c0-3.51,1.43-6.69,3.74-9 C6.05,1.43,9.24,0,12.74,0L12.74,0z M35.79,107.18c2.88,0,5.22,2.34,5.22,5.22c0,2.88-2.34,5.22-5.22,5.22 c-2.88,0-5.22-2.34-5.22-5.22C30.58,109.52,32.91,107.18,35.79,107.18L35.79,107.18z M3.66,103.18h64.28V19.7H3.66V103.18 L3.66,103.18z"></path>
                                            </g>
                                        </svg>
                                        <div class="inputwithlabl">
                                            <small class="d-block">Mobile Number</small>
                                            <button class="edt" type="button">
                                                <svg width="24" height="24" fill="#999" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.337 490.337" style="enable-background:new 0 0 490.337 490.337;" xml:space="preserve">
                                                    <path d="M229.9,145.379l-47.5,47.5c-17.5,17.5-35.1,35-52.5,52.7c-4.1,4.2-7.2,9.8-8.4,15.3c-6.3,28.9-12.4,57.8-18.5,86.7
                                                        l-3.4,16c-1.6,7.8,0.5,15.6,5.8,20.9c4.1,4.1,9.8,6.4,15.8,6.4c1.7,0,3.4-0.2,5.1-0.5l17.6-3.7c28-5.9,56.1-11.9,84.1-17.7
                                                        c6.5-1.4,12-4.3,16.7-9c78.6-78.7,157.2-157.3,235.8-235.8c5.8-5.8,9-12.7,9.8-21.2c0.1-1.4,0-2.8-0.3-4.1c-0.5-2-0.9-4.1-1.4-6.1
                                                        c-1.1-5.1-2.3-10.9-4.7-16.5l0,0c-14.7-33.6-39.1-57.6-72.5-71.1c-6.7-2.7-13.8-3.6-20-4.4l-1.7-0.2c-9-1.1-17.2,1.9-24.3,9.1
                                                        C320.4,54.879,275.1,100.179,229.9,145.379z M386.4,24.679c0.2,0,0.3,0,0.5,0l1.7,0.2c5.2,0.6,10,1.2,13.8,2.8
                                                        c27.2,11,47.2,30.6,59.3,58.2c1.4,3.2,2.3,7.3,3.2,11.6c0.3,1.6,0.7,3.2,1,4.8c-0.4,1.8-1.1,3-2.5,4.3
                                                        c-78.7,78.5-157.3,157.2-235.9,235.8c-1.3,1.3-2.5,1.9-4.3,2.3c-28.1,5.9-56.1,11.8-84.2,17.7l-14.8,3.1l2.8-13.1
                                                        c6.1-28.8,12.2-57.7,18.4-86.5c0.2-0.9,1-2.3,1.9-3.3c17.4-17.6,34.8-35.1,52.3-52.5l47.5-47.5c45.3-45.3,90.6-90.6,135.8-136
                                                        C384.8,24.979,385.7,24.679,386.4,24.679z"></path>
                                                    <path d="M38.9,109.379h174.6c6.8,0,12.3-5.5,12.3-12.3s-5.5-12.3-12.3-12.3H38.9c-21.5,0-38.9,17.5-38.9,38.9v327.4
                                                        c0,21.5,17.5,38.9,38.9,38.9h327.3c21.5,0,38.9-17.5,38.9-38.9v-167.5c0-6.8-5.5-12.3-12.3-12.3s-12.3,5.5-12.3,12.3v167.5
                                                        c0,7.9-6.5,14.4-14.4,14.4H38.9c-7.9,0-14.4-6.5-14.4-14.4v-327.3C24.5,115.879,31,109.379,38.9,109.379z"></path>
                                                </svg>
                                            </button>
                                            <input class="inputtxt" type="tel" value="<?= $this->session->userdata('mobile') ?>" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-4">
                                    <div class="d-flex align-items-center w-100">
                                        <svg width="30" height="30" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300.412 300.412" style="enable-background:new 0 0 300.412 300.412;" xml:space="preserve">
                                            <path d="M271.262,50.041H29.15C13.153,50.041,0,63.01,0,79.191v142.03c0,16.01,13.022,29.15,29.15,29.15h242.112
                                                c16.137,0,29.15-13.152,29.15-29.15V79.191C300.412,62.995,287.246,50.041,271.262,50.041z M265.583,65.94l-115.377,74.791
                                                L34.831,65.94H265.583z M15.9,79.191c0-2.011,0.455-3.962,1.303-5.728l72.173,46.785L15.9,218.513V79.191z M271.262,234.471H29.15
                                                c-1.648,0-3.221-0.317-4.679-0.869l78.277-104.686l43.134,27.961c2.632,1.706,6.019,1.704,8.65,0l43.133-27.961l78.277,104.686
                                                C274.484,234.155,272.911,234.471,271.262,234.471z M284.512,218.513l-73.476-98.265l72.173-46.785
                                                c0.848,1.766,1.303,3.717,1.303,5.728V218.513z"></path>
                                        </svg>
                                        <div class="inputwithlabl">
                                            <small class="d-block">Email ID</small>
                                            <input class="inputtxt" type="email" placeholder="enter Email" name="email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="card cardinfo mb-4 card2">
                    <div class="card-header">
                        Business Information
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path d="M498.665,213.084l-51.215-40.182V20.539c0-8.103-5.836-14.67-13.937-14.67h-58.682c-8.101,0-15.404,6.568-15.404,14.67
                                                v83.3l-93.778-73.864c-5.314-4.168-12.605-4.169-17.924-0.003L13.622,213.303C5.141,219.95,0,229.945,0,240.722v17.845
                                                c0,19.212,16.363,34.842,35.576,34.842h23.106v198.052c0,8.102,7.303,14.67,15.404,14.67h365.295
                                                c8.101,0,13.937-6.568,13.937-14.67V293.41h24.573c19.213,0,34.109-15.63,34.109-34.842v-18.07
                                                C512,229.725,507.14,219.733,498.665,213.084z M388.768,35.209h29.341v114.672l-29.341-23.021V35.209z M305.146,476.791h-99.759
                                                V316.883h99.759V476.791z M423.977,476.791h-89.49V302.212c0-8.102-5.102-14.67-13.203-14.67h-129.1
                                                c-8.101,0-16.138,6.568-16.138,14.67v174.579H88.023V266.605l168.188-131.864l167.766,131.627V476.791z M482.659,258.567
                                                c0,3.034-1.736,5.501-4.768,5.501h-24.573v-4.838c0-4.505-1.703-8.761-5.248-11.543L265.819,104.554
                                                c-5.315-4.168-12.697-4.171-18.015-0.003L64.622,247.919c-3.547,2.782-5.94,7.037-5.94,11.546v4.604H35.576
                                                c-3.032,0-6.235-2.468-6.235-5.501v-17.845c0-1.702,1.134-3.279,2.475-4.329L256.773,60.162L480.828,236.17
                                                c1.338,1.049,1.831,2.628,1.831,4.328V258.567z"></path>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business Name" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#business-name">Add Details</button>
                                    </div>
                                </div> -->
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 349.661 349.661" xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 349.661 349.661">
                                        <path d="M174.831,0C102.056,0,42.849,59.207,42.849,131.981c0,30.083,21.156,74.658,62.881,132.485   c30.46,42.215,61.363,76.607,61.671,76.95l7.429,8.245l7.429-8.245c0.309-0.342,31.211-34.734,61.671-76.95   c41.725-57.828,62.881-102.402,62.881-132.485C306.812,59.207,247.605,0,174.831,0z M174.83,319.617   c-37.058-42.692-111.98-139.048-111.98-187.636C62.849,70.235,113.084,20,174.831,20s111.981,50.235,111.981,111.981   C286.812,180.54,211.888,276.915,174.83,319.617z"></path>
                                        <circle cx="174.831" cy="131.982" r="49.696"></circle>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business Address" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#business-address">Add Details</button>
                                    </div>
                                </div>
                                <!-- <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
                                        <path d="M512,256.001c0-10.821-6.012-20.551-15.694-25.398l-38.122-19.061l38.122-19.06c0.001-0.001,0.004-0.002,0.004-0.002
                                                c9.68-4.845,15.692-14.576,15.692-25.397c0-10.819-6.013-20.55-15.694-25.397L281.09,34.08
                                                c-15.712-7.849-34.47-7.849-50.185,0.001L15.691,141.691C6.013,146.534,0,156.264,0,167.084c0,10.821,6.012,20.551,15.694,25.398
                                                l38.121,19.06l-38.126,19.063C6.012,235.45,0,245.18,0,256.001s6.012,20.551,15.694,25.397l38.121,19.061l-38.118,19.059
                                                C6.02,324.353,0.004,334.08,0,344.902c-0.004,10.828,6.008,20.564,15.694,25.412l215.215,107.608
                                                c7.856,3.925,16.471,5.886,25.09,5.886c8.619,0,17.238-1.963,25.095-5.887l215.215-107.608
                                                c9.682-4.845,15.695-14.582,15.691-25.41c-0.004-10.822-6.02-20.549-15.694-25.381l-38.122-19.061l38.126-19.063
                                                C505.988,276.552,512,266.822,512,256.001z M26.225,171.431c-2.339-1.171-2.687-3.226-2.687-4.346s0.35-3.175,2.683-4.343
                                                L241.429,55.138c4.563-2.28,9.568-3.418,14.573-3.418c5.003,0,10.007,1.139,14.567,3.417L485.776,162.74
                                                c2.337,1.17,2.687,3.225,2.687,4.345s-0.348,3.175-2.687,4.346L270.572,279.032c-9.125,4.558-20.019,4.558-29.139,0.001
                                                L26.225,171.431z M485.783,340.575c2.33,1.164,2.679,3.215,2.679,4.336c0.001,1.123-0.348,3.182-2.683,4.35L270.571,456.865
                                                c-9.125,4.558-20.019,4.559-29.139,0.001L26.225,349.262c-2.339-1.171-2.688-3.229-2.687-4.352c0-1.119,0.348-3.171,2.683-4.337
                                                l53.912-26.956l150.776,75.387c7.856,3.925,16.471,5.886,25.089,5.886c8.619,0,17.238-1.963,25.095-5.887l150.772-75.386
                                                L485.783,340.575z M485.778,260.345L270.571,367.949c-9.125,4.558-20.019,4.559-29.139,0.001L26.225,260.347
                                                c-2.339-1.17-2.687-3.225-2.687-4.345c0-1.122,0.348-3.175,2.683-4.344l53.912-26.956l150.776,75.387
                                                c7.855,3.925,16.472,5.886,25.089,5.886c8.617,0,17.237-1.962,25.094-5.888l150.774-75.386l53.908,26.954
                                                c2.339,1.171,2.687,3.225,2.687,4.346C488.462,257.121,488.113,259.176,485.778,260.345z"></path>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business Category" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#business-category">Add Details</button>
                                    </div>
                                </div> -->
                                <!-- <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                        <path d="M497.335,284.567L272.36,59.593c-3.135-3.135-7.386-4.897-11.82-4.897c-0.018,0-0.036,0-0.053,0l-117.811,0.379
                                                c-4.414,0.014-8.645,1.774-11.766,4.897L107.261,83.62L28.537,4.896c-6.527-6.527-17.112-6.527-23.641,0s-6.528,17.112,0,23.641
                                                L83.62,107.26l-23.648,23.649c-3.135,3.135-4.897,7.388-4.897,11.821l0.009,118.2c0,4.433,1.762,8.685,4.897,11.819
                                                l224.586,224.586c9.776,9.776,22.619,14.665,35.462,14.665c12.843,0,25.685-4.889,35.461-14.665l141.845-141.845
                                                C516.887,335.936,516.887,304.12,497.335,284.567z M473.694,331.848L331.849,473.693c-6.518,6.517-17.123,6.517-23.642,0
                                                l-219.69-219.69L88.51,149.653l18.752-18.752l25.128,25.128c-14.998,25.333-11.942,58.981,10.333,81.256
                                                c26.07,26.071,68.49,26.072,94.564,0c26.131-26.133,26.136-68.428,0-94.564c-22.197-22.199-55.836-25.383-81.256-10.333
                                                l-25.128-25.128l18.774-18.774l103.962-0.335l220.055,220.056C480.211,314.726,480.211,325.33,473.694,331.848z M187.343,163.701
                                                l-5.997-5.997c11.101-2.957,23.47-0.172,32.299,8.658c13.066,13.066,13.067,34.213,0,47.282
                                                c-13.034,13.033-34.246,13.036-47.281,0c-8.79-8.791-11.629-21.143-8.658-32.3l5.997,5.997c6.528,6.528,17.112,6.528,23.641,0
                                                C193.871,180.815,193.871,170.23,187.343,163.701z"></path>
                                        <path d="M355.49,379.131l-94.564-94.564c-6.527-6.527-17.112-6.527-23.641,0s-6.528,17.112,0,23.641l94.564,94.564
                                                c6.528,6.528,17.112,6.528,23.641,0C362.018,396.244,362.018,385.659,355.49,379.131z"></path>
                                        <path d="M402.771,331.849l-94.564-94.564c-6.527-6.527-17.112-6.527-23.641,0c-6.528,6.527-6.528,17.112,0,23.641l94.564,94.564
                                                c6.528,6.528,17.112,6.528,23.641,0C409.299,348.963,409.299,338.378,402.771,331.849z"></path>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business Type" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#business-type">Add Details</button>
                                    </div>
                                </div> -->

                            </div>
                            <div class="col-md-6 border-left">
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="26" height="26" fill="#999" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 87.881 87.881" style="enable-background:new 0 0 87.881 87.881;" xml:space="preserve">
                                        <path d="M70.828,0H33.056C27.535,0,23.044,4.484,23.03,10.001h-2.975c-7.183,0-13.027,5.844-13.027,13.027v51.826
                                            c0,7.184,5.844,13.027,13.027,13.027h37.772c7.183,0,13.026-5.844,13.026-13.027v-2.975c5.517-0.015,10.001-4.506,10.001-10.026
                                            V10.027C80.854,4.498,76.356,0,70.828,0z M64.854,30.054v37.774v7.026c0,3.881-3.146,7.027-7.026,7.027H20.055
                                            c-3.882,0-7.027-3.146-7.027-7.027V23.028c0-3.881,3.146-7.027,7.027-7.027h37.772c3.88,0,7.026,3.146,7.026,7.027L64.854,30.054
                                            L64.854,30.054z M74.854,61.853c0,2.212-1.793,4.011-4.001,4.024V30.054v-7.026c0-7.183-5.844-13.027-13.026-13.027H29.031
                                            C29.045,7.793,30.844,6,33.056,6h37.773c2.22,0,4.026,1.807,4.026,4.027V61.853z"></path>
                                        <rect x="20.941" y="27.313" width="36" height="6"></rect>
                                        <rect x="20.941" y="40.187" width="36" height="6"></rect>
                                        <rect x="20.941" y="53.061" width="36" height="6"></rect>
                                        <rect x="20.941" y="65.935" width="36" height="6"></rect>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Business KYC" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success btn_bussiness_type" data-toggle="modal" data-target="#kyc">Add Details</button>
                                    </div>
                                </div>

                                <!-- <div class="d-flex w-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28">
                                        <g id="Image" transform="translate(-2 -2)">
                                            <path id="Path_137" data-name="Path 137" d="M25,2H7A5,5,0,0,0,2,7V25a5,5,0,0,0,5,5H25a5,5,0,0,0,5-5V7A5,5,0,0,0,25,2ZM7,4H25a3,3,0,0,1,3,3v5.59l-1.88-1.88a3,3,0,0,0-4.24,0l-7.95,8-3-2.42a3,3,0,0,0-3.8,0L4,18.86V7A3,3,0,0,1,7,4ZM25,28H7a3,3,0,0,1-3-3V21.47l4.38-3.66a1,1,0,0,1,1.27,0l3.73,3a1,1,0,0,0,1.33-.07l8.58-8.59a1,1,0,0,1,1.42,0L28,15.41V25a3,3,0,0,1-3,3Z" fill="#a8a8a8"></path>
                                            <path id="Path_138" data-name="Path 138" d="M10,13a3,3,0,1,0-3-3A3,3,0,0,0,10,13Zm0-4a1,1,0,1,1-1,1A1,1,0,0,1,10,9Z" fill="#a8a8a8"></path>
                                        </g>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Store Verifications" readonly="">
                                        <div class="d-flex">
                                            <div class="imageholder">
                                                <div class="holder">
                                                    <img id="imgPreview" src="<?= base_url() ?>assets/images/round-plus.jpg" alt="pic" class="imgPreview">
                                                    <input type="file" name="photograph" id="photo" class="photo">
                                                </div>
                                                <small>Front Picture</small>
                                            </div>
                                            <div class="imageholder">
                                                <div class="holder">
                                                    <img id="imgPreview" src="<?= base_url() ?>assets/images/round-plus.jpg" alt="pic" class="imgPreview2">
                                                    <input type="file" name="photograph" id="photo" class="photo2">
                                                </div>
                                                <small>Inside Picture</small>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card cardinfo mb-4 card3">
                    <div class="card-header">
                        Financial Information
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- <div class="d-flex align-items-center w-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22.626" height="26" viewBox="0 0 22.626 26">
                                        <g id="Layer_2" data-name="Layer 2" transform="translate(0.004)">
                                            <g id="Layer_1" data-name="Layer 1" transform="translate(-0.004)">
                                                <path id="Path_128" data-name="Path 128" d="M21.591,24.061l-.427-.545-2.026,2.25h0a.547.547,0,0,1-.826,0l-2.064-2.232-2.022,2.177a.547.547,0,0,1-.821.026l-2.144-2.2L9.312,25.764l-.035.042a.545.545,0,0,1-.833,0L6.4,23.535,4.3,25.767h0a.547.547,0,0,1-.821,0l-2-2.267-.415.535a.576.576,0,0,1-.472.264A.623.623,0,0,1,0,23.646V.653A.62.62,0,0,1,.582,0h21.45a.623.623,0,0,1,.59.653V23.641h0a.675.675,0,0,1-.205.493.538.538,0,0,1-.823-.064ZM3.483,3.774H8.27V5.216H6.675v4.22H5.08V5.216H3.486V3.774Zm8.129,4.772h-1.7l-.248.889H8.017L9.928,3.774h1.72l1.9,5.661h-1.7l-.236-.887ZM11.32,7.214,10.765,5.19l-.557,2.029Zm2.359-3.439h1.734l.9,1.741.882-1.741H18.9L17.326,6.515l1.729,2.92H17.285l-1-1.816-1,1.816H13.532l1.753-2.949Zm3.095,14.208a.5.5,0,0,1,0,1H4.479a.5.5,0,0,1,0-1Zm2.458-3.22a.5.5,0,0,1,0,1H4.352a.5.5,0,0,1,0-1Zm.021-3.22a.5.5,0,0,1,.415.658.453.453,0,0,1-.432.342H4.352a.5.5,0,0,1,0-1ZM21.421,1.333H1.193V22.016a.54.54,0,0,1,.656.085.163.163,0,0,1,.033.035h0l2.038,2.3,2.1-2.229a.547.547,0,0,1,.821,0h0l2.019,2.253,1.958-2.248a.545.545,0,0,1,.819-.024h0L13.79,24.4l2.045-2.184a.545.545,0,0,1,.819,0L18.7,24.436l2.055-2.281a.543.543,0,0,1,.665-.13Z" transform="translate(0.004)" fill="#999"></path>
                                            </g>
                                        </g>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="GSTIN" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#gst">Add Details</button>
                                    </div>
                                </div> -->

                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="24" viewBox="0 0 28 24">
                                        <g id="_4987286121594941299" data-name="4987286121594941299" transform="translate(-0.5 -2.5)">
                                            <path id="Path_136" data-name="Path 136" d="M14.5,3,3,9.192v2.654H26V9.192Z" transform="translate(-0.231)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></path>
                                            <rect id="Rectangle_117" data-name="Rectangle 117" width="3" height="9" transform="translate(13 12)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                            <rect id="Rectangle_118" data-name="Rectangle 118" width="4" height="9" transform="translate(20 12)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                            <rect id="Rectangle_119" data-name="Rectangle 119" width="3" height="9" transform="translate(5 12)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                            <rect id="Rectangle_120" data-name="Rectangle 120" width="23" height="2" transform="translate(3 21)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                            <rect id="Rectangle_121" data-name="Rectangle 121" width="27" height="3" transform="translate(1 23)" fill="none" stroke="#707070" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"></rect>
                                        </g>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="Bank Account" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#bankdtls">Add Details</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex align-items-center w-100 mb-4">
                                    <svg width="28" height="24" fill="#999" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path d="M0,0v233.739h233.739V0H0z M200.348,200.348H33.391V33.391h166.957V200.348z"></path>
                                        <rect x="66.783" y="66.783" width="100.174" height="100.174"></rect>
                                        <path d="M278.261,0v233.739H512V0H278.261z M478.609,200.348H311.652V33.391h166.957V200.348z"></path>
                                        <rect x="345.043" y="66.783" width="100.174" height="100.174"></rect>
                                        <path d="M0,278.261V512h233.739V278.261H0z M200.348,478.609H33.391V311.652h166.957V478.609z"></path>
                                        <rect x="66.783" y="345.043" width="100.174" height="100.174"></rect>
                                        <polygon points="278.261,278.261 278.261,512 345.043,512 345.043,478.609 311.652,478.609 311.652,411.826 345.043,411.826 
                                        345.043,378.435 311.652,378.435 311.652,311.652 345.043,311.652 345.043,278.261 "></polygon>
                                        <rect x="478.609" y="278.261" width="33.391" height="33.391"></rect>
                                        <polygon points="478.609,478.609 445.217,478.609 445.217,512 512,512 512,356.174 478.609,356.174 "></polygon>
                                        <rect x="378.435" y="278.261" width="66.783" height="33.391"></rect>
                                        <polygon points="445.217,411.826 411.826,411.826 411.826,378.435 445.217,378.435 445.217,345.043 378.435,345.043 
                                        378.435,445.217 445.217,445.217 "></polygon>
                                        <rect x="378.435" y="478.609" width="33.391" height="33.391"></rect>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="UPI ID" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#upi">Add Details</button>
                                    </div>
                                </div>
                                <!-- <div class="d-flex align-items-center w-100 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29.053" height="21.79" viewBox="0 0 29.053 21.79">
                                        <g id="Layer_1_1_" transform="translate(-1 -7)">
                                            <path id="Path_129" data-name="Path 129" d="M30.053,7H1V28.79H30.053ZM28.843,27.579H2.211V8.211H28.843Z" transform="translate(0 0)" fill="#a7a7a7"></path>
                                            <path id="Path_130" data-name="Path 130" d="M16.684,21.869A3.027,3.027,0,0,0,14.2,18.9a3,3,0,0,0,.666-1.871,3.026,3.026,0,0,0-6.053,0A3,3,0,0,0,9.482,18.9,3.027,3.027,0,0,0,7,21.869v4.237h9.684Zm-4.842-6.658a1.816,1.816,0,1,1-1.816,1.816A1.818,1.818,0,0,1,11.842,15.211ZM15.474,24.9H8.211V21.869a1.818,1.818,0,0,1,1.816-1.816h3.632a1.818,1.818,0,0,1,1.816,1.816Z" transform="translate(-2.368 -2.763)" fill="#a7a7a7"></path>
                                            <rect id="Rectangle_107" data-name="Rectangle 107" width="4.62" height="0.924" transform="translate(16.192 13.007)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_108" data-name="Rectangle 108" width="3.696" height="0.924" transform="translate(22.661 13.007)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_109" data-name="Rectangle 109" width="1.848" transform="translate(16.192 16.703)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_110" data-name="Rectangle 110" width="6.469" transform="translate(19.888 16.703)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_111" data-name="Rectangle 111" width="4.62" height="0.924" transform="translate(16.192 19.475)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_112" data-name="Rectangle 112" width="2.772" height="0.924" transform="translate(23.585 19.475)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_113" data-name="Rectangle 113" width="1.848" height="1.848" transform="translate(16.192 21.324)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_114" data-name="Rectangle 114" width="1.848" height="1.848" transform="translate(18.04 21.324)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_115" data-name="Rectangle 115" width="1.848" height="1.848" transform="translate(20.812 21.324)" fill="#a7a7a7"></rect>
                                            <rect id="Rectangle_116" data-name="Rectangle 116" width="0.924" height="1.848" transform="translate(25.433 21.324)" fill="#a7a7a7"></rect>
                                        </g>
                                    </svg>
                                    <div class="inputwithlabl">
                                        <input class="inputtxt border-0 p-0" type="text" value="KYC" readonly="">
                                        <button type="button" class="btn-sm btn btn-outline-success" data-toggle="modal" data-target="#kyc">Add Details</button>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4 w-100"><button class="btn1 thankyoubtn" form="form_mobile_service_basic">Done</button></div>
        </section>
        <!-- =====================================  Service   =============================== -->
        <!-- =====================================  Thank You   =============================== -->
        <section class="mobileregistersec bg-white" id="thankyoumobilestep" style="display:none;">
            <div class="container">
                <div class="text-center">
                    <h4 class="mb-3">Thank your Registration</h4>
                    <p>We will review and activate your account.
                        Meanwhile you can complete store settings and add products.</p>
                    <button class="btn1 gotodashboardbtn" id="btn_mob_goto_dashboard">Go To Dashboard</button>
                </div>
            </div>
        </section>
        <!-- =====================================  Thank You   =============================== -->
    </div>

    <!-- bussiness name modal -->
    <div class="modal fade modalbottom" id="business-name" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between">
                    <div data-dismiss="modal" aria-label="Close"><svg width="24px" height="24px" fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g data-name="Layer 2">
                                <g data-name="arrow-back">
                                    <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0"></rect>
                                    <path d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z"></path>
                                </g>
                            </g>
                        </svg></div>
                    <h5 class="modal-title" id="exampleModalLabel">Business Name</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="bussiness_name" placeholder="Business Name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn_bussiness_name" class="savebtn w-100 d-block" data-dismiss="modal" aria-label="Close">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- address modal -->
    <div class="modal fade modalbottom" id="business-address" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between">
                    <div data-dismiss="modal" aria-label="Close"><svg width="24px" height="24px" fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g data-name="Layer 2">
                                <g data-name="arrow-back">
                                    <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0"></rect>
                                    <path d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z"></path>
                                </g>
                            </g>
                        </svg></div>
                    <h5 class="modal-title" id="exampleModalLabel">Business Address</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="building_number" placeholder="Flat / Bulling Number">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="address" placeholder="Area / Locality, City">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="savebtn w-100 d-block" id="btn_bussiness_address" data-dismiss="modal" aria-label="Close">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>


    <!-- restaurant bussiness licence modal-->

    <div class="modal fade modalbottom" id="business-licence" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form id="form_save_licence">
                    <div class="modal-header d-flex align-items-center justify-content-between">
                        <div data-dismiss="modal" aria-label="Close"><svg width="24px" height="24px" fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g data-name="Layer 2">
                                    <g data-name="arrow-back">
                                        <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0"></rect>
                                        <path d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z"></path>
                                    </g>
                                </g>
                            </svg></div>
                        <h5 class="modal-title" id="exampleModalLabel">Business Licence</h5>
                    </div>
                    <div class="modal-body">

                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="bussiness_licence">
                            <label class="custom-file-label" for="customFile"> Business KYC proof</label>
                        </div>
                        <div class="form-group my-2">
                            <input type="date" class="form-control" name="expire_date" placeholder="Date of Expire">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="savebtn w-100 d-block" aria-label="Close">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade modalbottom" id="business-type" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header  d-flex align-items-center justify-content-between">
                    <div data-dismiss="modal" aria-label="Close"><svg width="24px" height="24px" fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g data-name="Layer 2">
                                <g data-name="arrow-back">
                                    <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0"></rect>
                                    <path d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z"></path>
                                </g>
                            </g>
                        </svg></div>
                    <h5 class="modal-title" id="exampleModalLabel">Business Type</h5>
                </div>
                <div class="modal-body">
                    <div class="bustype shadow-sm mb-2">
                        <label class="d-flex align-items-center w-100 radio2style border">
                            <input type="radio" name="business-type">
                            <i>
                                <img src="<?= base_url() ?>assets/images/Retailer.svg" alt="">
                            </i>
                            <span>Retailer / Shop</span>
                        </label>
                    </div>
                    <div class="bustype shadow-sm mb-2">
                        <label class="d-flex align-items-center w-100 radio2style border">
                            <input type="radio" name="business-type">
                            <i>
                                <img src="<?= base_url() ?>assets/images/WholeSaler.svg" alt="">
                            </i>
                            <span>WholeSaler</span>
                        </label>
                    </div>
                    <div class="bustype shadow-sm mb-2">
                        <label class="d-flex align-items-center w-100 radio2style border">
                            <input type="radio" name="business-type">
                            <i>
                                <img src="<?= base_url() ?>assets/images/Distributor.svg" alt="">
                            </i>
                            <span>Distributor</span>
                        </label>
                    </div>
                    <div class="bustype shadow-sm mb-2">
                        <label class="d-flex align-items-center w-100 radio2style border">
                            <input type="radio" name="business-type">
                            <i>
                                <img src="<?= base_url() ?>assets/images/Service.svg" alt="">
                            </i>
                            <span>Service</span>
                        </label>
                    </div>
                    <div class="bustype shadow-sm mb-2">
                        <label class="d-flex align-items-center w-100 radio2style border">
                            <input type="radio" name="business-type">
                            <i>
                                <img src="<?= base_url() ?>assets/images/Manufacturer.svg" alt="">
                            </i>
                            <span>Manufacturer</span>
                        </label>
                    </div>
                    <div class="bustype shadow-sm mb-2">
                        <label class="d-flex align-items-center w-100 radio2style border">
                            <input type="radio" name="business-type">
                            <i>
                                <img src="<?= base_url() ?>assets/images/Others.svg" alt="">
                            </i>
                            <span>Others</span>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="savebtn w-100 d-block" data-dismiss="modal" aria-label="Close">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade modalbottom" id="business-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between">
                    <div data-dismiss="modal" aria-label="Close"><svg width="24px" height="24px" fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g data-name="Layer 2">
                                <g data-name="arrow-back">
                                    <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0"></rect>
                                    <path d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z"></path>
                                </g>
                            </g>
                        </svg></div>
                    <h5 class="modal-title" id="exampleModalLabel">Business Category</h5>
                </div>
                <div class="modal-body">
                    <div class="row row5">
                        <div class="col-6">
                            <div class="bustype shadow-sm mb-2">
                                <label class="d-flex align-items-center w-100 radio3style">
                                    <input type="checkbox" name="Kirana">
                                    <em></em>
                                    <i>
                                        <img width="30" src="<?= base_url() ?>assets/images/buscat1.png" alt="">
                                    </i>
                                    <span>Kirana</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bustype shadow-sm mb-2">
                                <label class="d-flex align-items-center w-100 radio3style">
                                    <input type="checkbox" name="Medical">
                                    <em></em>
                                    <i>
                                        <img width="30" src="<?= base_url() ?>assets/images/buscat2.png" alt="">
                                    </i>
                                    <span>Medical</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bustype shadow-sm mb-2">
                                <label class="d-flex align-items-center w-100 radio3style">
                                    <input type="checkbox" name="Apparel">
                                    <em></em>
                                    <i>
                                        <img width="30" src="<?= base_url() ?>assets/images/buscat3.png" alt="">
                                    </i>
                                    <span>Apparel</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bustype shadow-sm mb-2">
                                <label class="d-flex align-items-center w-100 radio3style">
                                    <input type="checkbox" name="Electronics">
                                    <em></em>
                                    <i>
                                        <img width="30" src="<?= base_url() ?>assets/images/buscat4.png" alt="">
                                    </i>
                                    <span>Electronics</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bustype shadow-sm mb-2">
                                <label class="d-flex align-items-center w-100 radio3style">
                                    <input type="checkbox" name="Insurance">
                                    <em></em>
                                    <i>
                                        <img width="30" src="<?= base_url() ?>assets/images/buscat5.png" alt="">
                                    </i>
                                    <span>Insurance</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bustype shadow-sm mb-2">
                                <label class="d-flex align-items-center w-100 radio3style">
                                    <input type="checkbox" name="Digital">
                                    <em></em>
                                    <i>
                                        <img width="30" src="<?= base_url() ?>assets/images/buscat6.png" alt="">
                                    </i>
                                    <span>Digital</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bustype shadow-sm mb-2">
                                <label class="d-flex align-items-center w-100 radio3style">
                                    <input type="checkbox" name="Agriculture">
                                    <em></em>
                                    <i>
                                        <img width="30" src="<?= base_url() ?>assets/images/buscat7.png" alt="">
                                    </i>
                                    <span>Agriculture</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bustype shadow-sm mb-2">
                                <label class="d-flex align-items-center w-100 radio3style">
                                    <input type="checkbox" name="Education">
                                    <em></em>
                                    <i>
                                        <img width="30" src="<?= base_url() ?>assets/images/buscat8.png" alt="">
                                    </i>
                                    <span>Education</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bustype shadow-sm mb-2">
                                <label class="d-flex align-items-center w-100 radio3style">
                                    <input type="checkbox" name="Computer">
                                    <em></em>
                                    <i>
                                        <img width="30" src="<?= base_url() ?>assets/images/buscat9.png" alt="">
                                    </i>
                                    <span>Computer</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bustype shadow-sm mb-2">
                                <label class="d-flex align-items-center w-100 radio3style">
                                    <input type="checkbox" name="Tour-Travel">
                                    <em></em>
                                    <i>
                                        <img width="30" src="<?= base_url() ?>assets/images/buscat10.png" alt="">
                                    </i>
                                    <span>Tour & Travel</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="bustype shadow-sm mb-2">
                                <label class="d-flex align-items-center w-100 radio3style">
                                    <input type="checkbox" name="Others">
                                    <em></em>
                                    <i>
                                        <img width="30" src="<?= base_url() ?>assets/images/buscat11.png" alt="">
                                    </i>
                                    <span>Others</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="savebtn w-100 d-block" data-dismiss="modal" aria-label="Close">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- kyc modal -->

    <div class="modal fade modalbottom" id="kyc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form id="form_mobile_kyc">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center justify-content-between">
                        <div data-dismiss="modal" aria-label="Close"><svg width="24px" height="24px" fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g data-name="Layer 2">
                                    <g data-name="arrow-back">
                                        <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0"></rect>
                                        <path d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div>
                            <h5 class="modal-title" id="exampleModalLabel">Business KYC</h5>
                            <small>Put details for verifications</small>
                        </div>
                    </div>
                    <div class="modal-body">
                        <?php
                        if ($this->session->userdata('bussiness_type') == "BmRetailStore" || $this->session->userdata('bussiness_type') == "BmRestaurant") { ?>
                            <h6 class="my-3">Business KYC Verifications</h6>
                            <div class="form-group">
                                <select class="form-control" name="bussiness_kyc_document">
                                    <option value="">Select KYC Document</option>
                                    <option value="aadhar">Aadhar</option>
                                    <option value="pan">PAN</option>
                                    <option value="voter-id">Voter-Id</option>
                                </select>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="bussiness_kyc_image">
                                <label class="custom-file-label" for="customFile"> Business KYC proof</label>
                            </div>
                            <?php
                        } else {
                            if ($this->session->userdata('bussiness_type') == "BmFruitsVegetable" || $this->session->userdata('bussiness_type') == "BmService") { ?>

                                <h6 class="my-3">Personal KYC Verifications</h6>

                                <div class="form-group">
                                    <select class="form-control" name="personal_kyc_document">
                                        <option value="">Select KYC Document</option>
                                        <option value="aadhar">Aadhar</option>
                                        <option value="pan">PAN</option>
                                        <option value="voter-id">Voter-Id</option>
                                    </select>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="personal_kyc_image">
                                    <label class="custom-file-label" for="customFile">Upload KYC proof</label>
                                </div>
                            <?php
                            }
                            ?>
                        <?php
                        }
                        ?>

                        <!-- <div class="text-center my-3"><strong>OR</strong></div> -->
                        <!-- <div class="text-center mb-2">Please upload clear images of store. One from outside another for inside of your store.</div> -->
                        <!-- <div class="d-flex justify-content-center mb-3">
                        <div class="imageholder text-center">
                            <div class="holder">
                                <img id="imgPreview" src="<?= base_url() ?>assets/images/round-plus.jpg" alt="pic" class="imgPreview4" />
                                <input type="file" name="photograph" id="photo" class="photo4" />
                            </div>
                            <small>Front Picture</small>
                        </div>
                        <div class="imageholder text-center">
                            <div class="holder">
                                <img id="imgPreview" src="<?= base_url() ?>assets/images/round-plus.jpg" alt="pic" class="imgPreview5" />
                                <input type="file" name="photograph" id="photo" class="photo5" />
                            </div>
                            <small>Inside Picture</small>
                        </div>-->


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="savebtn w-100 d-block" aria-label="Close">
                            Save
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <!-- bank modal -->
    <div class="modal fade modalbottom" id="bankdtls" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between">
                    <div data-dismiss="modal" aria-label="Close"><svg width="24px" height="24px" fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g data-name="Layer 2">
                                <g data-name="arrow-back">
                                    <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0"></rect>
                                    <path d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z"></path>
                                </g>
                            </g>
                        </svg></div>
                    <div>
                        <h5 class="modal-title" id="exampleModalLabel">Bank Details</h5>
                        <small>Please share your bank details</small>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Account Name" id="maccount_name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Account Number" id="maccount_number">
                    </div>
                    <!-- <div class="form-group">
                        <input type="number" class="form-control" placeholder="Confirm Account Number" id="">
                    </div> -->
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="IFSC Code" id="mifsc">
                    </div>
                    <!-- <div class="my-3 text-center">
                        <strong>OR</strong>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="UPI ID">
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn_save_bank_details" class="savebtn w-100 d-block" aria-label="Close">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--  gst modal -->
    <div class="modal fade modalbottom" id="gst" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between">
                    <div data-dismiss="modal" aria-label="Close"><svg width="24px" height="24px" fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g data-name="Layer 2">
                                <g data-name="arrow-back">
                                    <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0"></rect>
                                    <path d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z"></path>
                                </g>
                            </g>
                        </svg></div>
                    <div>
                        <h5 class="modal-title" id="exampleModalLabel">GSTIN</h5>
                        <small>Please add GST number</small>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="GST number" id="gst_number">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn_save_gst_detail" class="savebtn w-100 d-block" aria-label="Close">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- upi modal -->
    <div class="modal fade modalbottom" id="upi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center justify-content-between">
                    <div data-dismiss="modal" aria-label="Close"><svg width="24px" height="24px" fill="#666" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <g data-name="Layer 2">
                                <g data-name="arrow-back">
                                    <rect width="24" height="24" transform="rotate(90 12 12)" opacity="0"></rect>
                                    <path d="M19 11H7.14l3.63-4.36a1 1 0 1 0-1.54-1.28l-5 6a1.19 1.19 0 0 0-.09.15c0 .05 0 .08-.07.13A1 1 0 0 0 4 12a1 1 0 0 0 .07.36c0 .05 0 .08.07.13a1.19 1.19 0 0 0 .09.15l5 6A1 1 0 0 0 10 19a1 1 0 0 0 .64-.23 1 1 0 0 0 .13-1.41L7.14 13H19a1 1 0 0 0 0-2z"></path>
                                </g>
                            </g>
                        </svg></div>
                    <div>
                        <h5 class="modal-title" id="exampleModalLabel">UPI ID</h5>
                        <small>Please add UPI ID</small>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="UPI ID" id="upi_id">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="savebtn w-100 d-block" id="btn_save_upi_detail" aria-label="Close">
                        Save
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- =============================== FOR MOBILE VIEW END ================================== -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html> -->