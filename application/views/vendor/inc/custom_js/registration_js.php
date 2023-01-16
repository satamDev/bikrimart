<script>
    $('.radio').click(function() {
        $.ajax({
            url: '<?=base_url('vendor/language')?>' ,
           
            success: function(result) {
                console.log(result);

                
            },
            error: function(result) {
                console.log(result);
            }
        });
    })







    $(document).ready(function() {
        $('.set_otp_for_verify').hide();
        $('#step1btn').hide();
        $('#btn_register').attr("disabled", true);
    });

    // resend otp
    $('#btn_send_otp').on('click', function() {
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/send_otp') ?>",
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                console.log(data.message);
            },
        });
    });

    // verify otp
    $('#btn_verify_otp').on('click', function() {
        let otp_1 = $('#otp_1').val();
        let otp_2 = $('#otp_2').val();
        let otp_3 = $('#otp_3').val();
        let otp_4 = $('#otp_4').val();
        let otp = otp_1 + otp_2 + otp_3 + otp_4;

        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/verify_otp') ?>",
            data: {
                "otp": otp
            },
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message);
                    $("#otpbox").hide();
                    $("#SelectLanguage").show();
                } else {
                    toast(data.message);
                }
            },
        });
    });
    // $('#btn_language').click(function() {
    // });

    //=======================Retail Shop======================================
    // Register user basic details 
    $('#personalinfoSelected').click(function() {
        let name = $('#name').val();
        let email = $('#email').val();
        let flag = 0;
        if (name.length < 3) {
            flag = 1;
            toast("Name should contain atleast three letters", "center");
        }
        if (email == '') {
            flag = 1;
            toast("Email id is required", "center");
        }

        if (email.indexOf('@') > -1) {
            flag = 0;
        } else {
            flag = 1;
            toast("Enter a valid email id", "center");
        }

        if (flag == 0) {
            $.ajax({
                type: "post",
                url: "<?= base_url('Vendor/save_user_basic_details') ?>",
                data: {
                    "name": name,
                    "email": email
                },
                error: function(data) {
                    console.log(data);
                },
                success: function(data) {
                    if (data.success) {
                        toast(data.message, "center");
                        $("#profilestepTo").show();
                        $("#whatduusell").hide();
                        $("#profilestpOn").hide();
                    } else {
                        toast(data.message, "center");
                    }

                },
            });
        }
    });

    // save bussiness category
    $('#whatduusellSelected').click(function() {

        // let bussiness_category = [];
        let bussiness_category = '';
        $('.bussiness_category:checked').each(function(i) {
            bussiness_category = $(this).val() + "," + bussiness_category;
        });
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_bussiness_category') ?>",
            data: {
                "bussiness_category": bussiness_category,
            },
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                // console.log(data);
                $("#whatduusell").hide();
                $("#profilesetep1").show();
                $("#profilestpOn").show();
            },
        });
    });

    //save bussiness type
    $('.cmnbtn').click(function() {
        let id = $(this).attr('id');
        let bussiness_type = '';
        if ($('.bussiness_type:checked')) {
            bussiness_type = $('.bussiness_type:checked').val();
        } else {
            bussiness_type = null;
        }
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_bussiness_type') ?>",
            data: {
                "bussiness_type": bussiness_type,
            },
            error: function(data) {
                // console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    if (id == 'workasSelected') {
                        $("#whatduusell").show();
                        $("#workas").hide();
                    }
                    if (id == 'BmFruitsVegetableselected') {
                        $("#workas").hide();
                        $("#FruitsVegetablesprofilesetep1").show();
                    }
                    if (id == 'BmRestaurantselected') {
                        $("#workas").hide();
                        $("#Restaurantprofilesetep1").show();
                    }
                    if (id == 'BmServiceselected') {
                        $("#Serviceprofilesetep1").show();
                        $("#workas").hide();
                    }
                } else {
                    console.log(data.message);
                }
            },
        });
    });

    var gst = /^([0-9]){2}([a-zA-Z]){5}([0-9]){4}([a-zA-Z]){1}([0-9]){1}([a-zA-Z]){1}([0-9]){1}?$/;

    // save bussiness details
    $('#form_bussiness_details').submit(function(e) {
        // let flag = 0;
        // let gstValue = $('#retail_gst').val();

        // if (!gst.test(gstinVal) && gstinVal != '') {
        //     flag = 1;
        // }

        e.preventDefault();
        let form = document.getElementById('form_bussiness_details');
        var form_data = new FormData(form);
        // if (flag == 0) {
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_bussiness_details') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    $("#profilestepTre").show();
                    $("#profilestepTo").hide();
                } else {
                    toast(data.message, "center");
                }

            }
        });
        // } else {

        // }

    });
    // save banking deails
    $('#form_bank_details').submit(function(e) {
        e.preventDefault();
        let form = document.getElementById('form_bank_details');
        var form_data = new FormData(form);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_bank_details') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    $("#thankyousec").show();
                    $(".loginbox").hide();
                } else {
                    toast(data.message, "center");
                }

            }
        });
    });

    // save gst details
    // $('#btn_gst_details').click(function() {
    //     let mobile = $('#mobile').val();
    //     let gst_number = $('#gst_number').val();
    //     $.ajax({
    //         type: "post",
    //         url: "<?= base_url('Vendor/save_gst_details') ?>",
    //         data: {
    //             "mobile": mobile,
    //             "gst_number": gst_number
    //         },
    //         error: function(data) {
    //             console.log(data);
    //         },
    //         success: function(data) {
    //             toast(data.message, "center");
    //             $('#read_gst_number').html(gst_number);
    //         }
    //     });
    // });

    // save upi details
    // $('#btn_upi_details').click(function() {
    //     let mobile = $('#mobile').val();
    //     let upi_number = $('#upi_number').val();
    //     $.ajax({
    //         type: "post",
    //         url: "<?= base_url('Vendor/save_upi_details') ?>",
    //         data: {
    //             "mobile": mobile,
    //             "upi_number": upi_number
    //         },
    //         error: function(data) {
    //             console.log(data);
    //         },
    //         success: function(data) {
    //             $('#read_upi_number').html(upi_number);
    //             toast(data.message, "center");
    //         }
    //     });
    // });

    // go to dashboard
    $('#btn_dashboard').click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "<?= base_url('Vendor/fetch_user_details') ?>",
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // toast(data.message, "center");
                location.href = response.redirect;
            }
        });
    });

    //=================== Fruits & Vegetables =========================================
    // Register user basic details 
    $('#FruitsVegetablespersonalinfoSelected').click(function() {
        let name = $('#fruit_name').val();
        let email = $('#fruit_email').val();
        let flag = 0;
        if (name.length < 3) {
            flag = 1;
            toast("Name should contain atleast three letters", "center");
        }
        if (email == '') {
            flag = 1;
            toast("Email id is required", "center");
        }
        if (flag == 0) {
            $.ajax({
                type: "post",
                url: "<?= base_url('Vendor/save_user_basic_details') ?>",
                data: {
                    "name": name,
                    "email": email
                },
                error: function(data) {
                    console.log(data);
                },
                success: function(data) {
                    if (data.success) {
                        toast(data.message, "center");
                        $("#FruitsVegetablesprofilestepTo").show();
                        $("#FruitsVegetablesprofilestpOn").hide();
                    } else {
                        toast(data.message, "center");
                    }
                },
            });
        }
    });

    // save bussiness details
    $('#form_fruit_bussiness_details').submit(function(e) {
        e.preventDefault();
        let form = document.getElementById('form_fruit_bussiness_details');
        var form_data = new FormData(form);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_fruits_bussiness_details') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    $("#FruitsVegetablesprofilestepTo").hide();
                    $("#FruitsVegetablesprofilestepTre").show();
                } else {
                    toast(data.message, "center");
                }

            }
        });
    });
    $('#form_fruit_bank_details').submit(function(e) {
        e.preventDefault();
        let form = document.getElementById('form_fruit_bank_details');
        var form_data = new FormData(form);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_bank_details') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    $("#thankyousec").show();
                    $(".loginbox").hide();
                } else {
                    toast(data.message, "center");
                }
            }
        });
    });

    //=================== Restaurant =========================================
    // basic details
    $('#form_restaurant_basic').submit(function(e) {
        e.preventDefault();
        let form = document.getElementById('form_restaurant_basic');
        var form_data = new FormData(form);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_user_basic_details') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    $("#RestaurantprofilestepTo").show();
                    $("#RestaurantprofilestpOn").hide();
                } else {
                    toast(data.message, "center");
                }
            }
        });
    });

    $('#form_restaurant_bussiness').submit(function(e) {
        e.preventDefault();
        let form = document.getElementById('form_restaurant_bussiness');
        var form_data = new FormData(form);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_bussiness_details') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    $("#RestaurantprofilestepTo").hide();
                    $("#RestaurantprofilestepTre").show();
                } else {
                    toast(data.message, "center");
                }
            }
        });
    });

    $('#form_restaurant_banking').submit(function(e) {
        e.preventDefault();
        let form = document.getElementById('form_restaurant_banking');
        var form_data = new FormData(form);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_bank_details') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    $("#thankyousec").show();
                    $(".loginbox").hide();
                } else {
                    toast(data.message, "center");
                }
            }
        });
    });

    //================Service===========================================
    // basic details
    $('#form_service_basic').submit(function(e) {
        e.preventDefault();
        let form = document.getElementById('form_service_basic');
        var form_data = new FormData(form);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_user_basic_details') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    $("#ServiceprofilestpOn").hide();
                    $("#ServiceprofilestepTo").show();
                } else {
                    toast(data.message, "center");
                }

            }
        });
    });

    $('#form_service_bussiness').submit(function(e) {
        e.preventDefault();
        let form = document.getElementById('form_service_bussiness');
        var form_data = new FormData(form);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_fruits_bussiness_details') ?>", // use same function for fruit and service 
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    $("#ServiceprofilestepTre").show();
                    $("#ServiceprofilestepTo").hide();
                } else {
                    toast(data.message, "center");
                }
            }
        });
    });

    $('#form_service_banking').submit(function(e) {
        e.preventDefault();
        let form = document.getElementById('form_service_banking');
        var form_data = new FormData(form);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_bank_details') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    $("#thankyousec").show();
                    $(".loginbox").hide();
                } else {
                    toast(data.message, "center");
                }
            }
        });
    });

    //========================== Mobile view starts ========================

    $('#mbtn_verify_otp').click(function() {
        let otp_1 = $('#motp_1').val();
        let otp_2 = $('#motp_2').val();
        let otp_3 = $('#motp_3').val();
        let otp_4 = $('#motp_4').val();
        let otp = otp_1 + otp_2 + otp_3 + otp_4;

        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/verify_otp') ?>",
            data: {
                "otp": otp
            },
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message);
                    $("#mobilestep1").slideUp();
                    $("#mobilestep2").slideDown();
                } else {
                    toast(data.message);
                }
            },
        });
    });

    $('.mob_cmn_btn').click(function() {
        let id = $(this).attr('id');

        let bussiness_type = '';
        if ($('.bussiness_type:checked')) {
            bussiness_type = $('.bussiness_type:checked').val();
        } else {
            bussiness_type = null;
        }
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_bussiness_type') ?>",
            data: {
                "bussiness_type": bussiness_type,
            },
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {

                    toast(data.message, "center");
                    if (id == 'workasSelected') {
                        $("#mobilestep3").slideUp();
                        $("#RetailStoremobilestep1").slideDown();

                    }
                    if (id == 'BmFruitsVegetableselected') {
                        $("#mobilestep3").slideUp();
                        $("#FruitsVegetablemobilestep").slideDown();
                    }
                    if (id == 'BmRestaurantselected') {
                        $("#mobilestep3").slideUp();
                        $("#Restaurantmobilestep").slideDown();
                    }
                    if (id == 'BmServiceselected') {
                        $("#mobilestep3").slideUp();
                        $("#Servicemobilestep4").slideDown();

                    }
                } else {
                    toast(data.message, "center");
                }
            },
        });
    });

    $('#btn_bussiness_category').click(function() {

        let bussiness_category = [];
        $('.bussiness_category:checked').each(function(i) {
            bussiness_category[i] = $(this).val();
        });
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_bussiness_category') ?>",
            data: {
                "bussiness_category": bussiness_category,
            },
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                toast(data.message);
                $("#RetailStoremobilestep1").slideUp();
                $("#RetailStoremobilestep2").slideDown();

            },
        });
    });


    $('#form_mobile_retail_basic').submit(function(e) {
        e.preventDefault();
        let form = document.getElementById('form_mobile_retail_basic');
        var form_data = new FormData(form);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_image_details') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    $("#RetailStoremobilestep2, #Restaurantmobilestep , #Servicemobilestep4, #FruitsVegetablemobilestep").slideUp();
                    $("#thankyoumobilestep").slideDown();
                } else {
                    toast(data.message, "center");
                }

            }
        });
    });

    $('#form_mobile_fruit_basic').submit(function(e) {
        e.preventDefault();
        let form = document.getElementById('form_mobile_fruit_basic');
        var form_data = new FormData(form);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_fruit_Service_basic') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    $("#RetailStoremobilestep2, #Restaurantmobilestep , #Servicemobilestep4, #FruitsVegetablemobilestep").slideUp();
                    $("#thankyoumobilestep").slideDown();

                } else {
                    toast(data.message, "center");
                }
            }
        });
    });

    // restaurant basic and images

    $('#form_mobile_restaurant_basic').submit(function(e) {
        e.preventDefault();
        let form = document.getElementById('form_mobile_restaurant_basic');
        var form_data = new FormData(form);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_image_details') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    $("#RetailStoremobilestep2, #Restaurantmobilestep , #Servicemobilestep4, #FruitsVegetablemobilestep").slideUp();
                    $("#thankyoumobilestep").slideDown();

                } else {
                    toast(data.message, "center");
                }
            }
        });
    });


    // service basic 
    $('#form_mobile_service_basic').submit(function(e) {
        e.preventDefault();
        let form = document.getElementById('form_mobile_service_basic');
        var form_data = new FormData(form);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_fruit_Service_basic') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    $("#RetailStoremobilestep2, #Restaurantmobilestep , #Servicemobilestep4, #FruitsVegetablemobilestep").slideUp();
                    $("#thankyoumobilestep").slideDown();

                } else {
                    toast(data.message, "center");
                }
            }
        });
    });


    //===============================================

    $('#btn_bussiness_name').click(function() {
        let bussiness_name = $('#bussiness_name').val();
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_bussiness_name') ?>",
            data: {
                "bussiness_name": bussiness_name
            },
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                toast(data.message, 'center');

            },
        });
    });

    $('#btn_bussiness_address').click(function() {
        let building = $('#building_number').val();
        let address = $('#address').val();
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_bussiness_address') ?>",
            data: {
                "building": building,
                "address": address
            },
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.response) {
                    toast(data.message, 'center');
                } else {
                    toast(data.message, 'center');
                }

            },
        });
    });


    $('.btn_bussiness_type').click(function() {
        console.log('class');
        $.ajax({
            type: "GET",
            url: "<?= base_url('Vendor/get_bussiness_type') ?>",
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                console.log(response);
            }
        });
    });


    $('#form_mobile_kyc').submit(function(e) {
        e.preventDefault();
        console.log('kyc');
        let form = document.getElementById('form_mobile_kyc');
        var form_data = new FormData(form);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_kyc_details') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    console.log(data);
                    $('#kyc').modal('hide');
                } else {
                    console.log(data);
                    toast(data.message, "center");
                }

            }
        });
    });

    $('#btn_save_gst_detail').click(function() {
        let gst = $('#gst_number').val();
        $.ajax({
            type: "POST",
            url: "<?= base_url('Vendor/save_gst_details') ?>",
            data: {
                "gst_number": gst
            },
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    console.log(data);
                    $('#gst').modal('hide');
                    $('#gst_number').val('');
                } else {
                    console.log(data);
                    toast(data.message, "center");
                }

            }
        })
    });

    $('#btn_save_bank_details').click(function() {
        var name = $('#maccount_name').val();
        var number = $('#maccount_number').val();
        var ifsc = $('#mifsc').val();

        $.ajax({
            type: "POST",
            url: "<?= base_url('Vendor/save_bank_details_mobile') ?>",
            data: {
                "name": name,
                "number": number,
                "ifsc": ifsc
            },
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    console.log(data);
                    $('#bankdtls').modal('hide');
                    $('#maccount_name').val('');
                    $('#maccount_number').val('');
                    $('#mifsc').val('');
                } else {
                    console.log(data);
                    toast(data.message, "center");
                }
            }

        });
    });

    $('#btn_save_upi_detail').click(function() {
        var upi = $('#upi_id').val();
        $.ajax({
            type: "POST",
            url: "<?= base_url('Vendor/save_upi_details') ?>",
            data: {
                "upi_number": upi
            },
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    console.log(data);
                    $('#upi').modal('hide');
                    $('#upi_id').val('');
                } else {
                    console.log(data);
                    toast(data.message, "center");
                }
            }
        });
    });


    $('#form_retail_mob_image').submit(function(e) {
        e.preventDefault();

        let form = document.getElementById('form_retail_mob_image');
        var form_data = new FormData(form);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_image_details') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    console.log(data);
                    $("#RetailStoremobilestep2, #Restaurantmobilestep , #Servicemobilestep4, #FruitsVegetablemobilestep").slideUp();
                    $("#thankyoumobilestep").slideDown();
                } else {
                    console.log(data);
                    toast(data.message, "center");
                }

            }
        });
    });


    $('#form_fruit_Service_basic').submit(function(e) {
        e.preventDefault();

        let form = document.getElementById('form_fruit_Service_basic');
        var form_data = new FormData(form);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/save_fruit_Service_basic') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");
                    console.log(data);
                    $("#RetailStoremobilestep2, #Restaurantmobilestep , #Servicemobilestep4, #FruitsVegetablemobilestep").slideUp();
                    $("#thankyoumobilestep").slideDown();
                } else {
                    console.log(data);
                    toast(data.message, "center");
                }

            }
        });
    });


    $('#btn_mob_goto_dashboard').click(function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "<?= base_url('Vendor/fetch_user_details') ?>",
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                // toast(data.message, "center");
                location.href = response.redirect;
            }
        });
    });

    //====================================================================

    $('#form_save_licence').submit(function(e) {
        e.preventDefault();
        let form = document.getElementById('form_save_licence');
        var form_data = new FormData(form);

        $.ajax({
            type: "POST",
            url: "<?= base_url('Vendor/save_bussiness_licence_details') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);
            },
            success: function(data) {
                if (data.success) {
                    toast(data.message, "center");

                } else {
                    console.log(data);
                    toast(data.message, "center");
                }

            }
        })
    })
</script>