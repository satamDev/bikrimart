<script>
  $('#verify_otp').hide();

  $('#btn_send_otp').click(function() {
    var mobile = $('#mobile').val();
    var flag = 0;

    if (mobile.length != 10) {
      toast("Mobile number must contain 10 digits");
      flag = 1;
    }
    if (flag == 0) {
      $.ajax({
        type: "POST",
        url: "<?= base_url('Vendor/send_otp_for_login') ?>",
        data: {
          "mobile": mobile
        },
        error: function(response) {
          console.log(response);
        },
        success: function(response) {
          // if (response.success) {
            toast(response.message+" "+response.otp);
            $('#send_otp').hide();
            $('#verify_otp').show();
          // } else {
          //   toast(response.message);
          // }

        }
      });
    }
  });

  $('#btn_resend_otp').click(function(e) {
    e.preventDefault();
    let mobile = $("#mobile").val();
    $.ajax({
      type: "POST",
      url: "<?= base_url('vendor/send_otp_for_login') ?>",
      data: {
        "mobile": mobile
      },
      error: function(data) {
        console.log(data);
      },
      success: function(data) {
        if (data.success) {
          toast(data.message, "right");
          console.log(data);
        } else {
          toast(data.message, "center");
          console.log(data);
        }
      }
    });
  });

  $("#btn_verify_otp").click(function(e) {
    e.preventDefault();
    var mobile = $('#mobile').val();
    let otp_1 = $('#otp_1').val();
    let otp_2 = $('#otp_2').val();
    let otp_3 = $('#otp_3').val();
    let otp_4 = $('#otp_4').val();
    let otp = otp_1 + otp_2 + otp_3 + otp_4;

    $.ajax({
      type: "POST",
      url: "<?= base_url('Vendor/authenticate_user') ?>",
      data: {
        "mobile": mobile,
        "otp": otp
      },
      error: function(response) {
        console.log(response);
      },
      success: function(response) {
        if (response.success) {
          console.log(response);
          location.href = response.redirect;
        } else {
          toast(response.message);
        }
      }
    });
  });

  //============MOBILE VIEW===========================================

  $('#mobile_verify_otp').hide();


  $('#btn_mobile_send_otp').click(function() {
    var mobile = $('#m_mobile').val();
    var flag = 0;

    if (mobile.length != 10) {
      toast("Mobile number must contain 10 digits");
      flag = 1;
    }
    if (flag == 0) {
      $.ajax({
        type: "POST",
        url: "<?= base_url('Vendor/send_otp_for_login') ?>",
        data: {
          "mobile": mobile
        },
        error: function(response) {
          console.log(response);
        },
        success: function(response) {
          // if (response.success) {
          toast(response.message);
          $('#mobile_send_otp').hide();
          $('#mobile_verify_otp').show();
          // } else {
          //   toast(response.message);
          // }

        }
      });
    }
  });

  $('#btn_mobile_resend_otp').click(function(e) {
    e.preventDefault();
    let mobile = $("#m_mobile").val();
    $.ajax({
      type: "POST",
      url: "<?= base_url('vendor/send_otp_for_login') ?>",
      data: {
        "mobile": mobile
      },
      error: function(data) {
        console.log(data);
      },
      success: function(data) {
        if (data.success) {
          toast(data.message, "right");
          console.log(data);
        } else {
          toast(data.message, "center");
          console.log(data);
        }
      }
    });
  });

  $("#btn_mobile_verify_otp").click(function(e) {
    e.preventDefault();
    var mobile = $('#m_mobile').val();
    let otp_1 = $('#m_otp_1').val();
    let otp_2 = $('#m_otp_2').val();
    let otp_3 = $('#m_otp_3').val();
    let otp_4 = $('#m_otp_4').val();
    let otp = otp_1 + otp_2 + otp_3 + otp_4;

    $.ajax({
      type: "POST",
      url: "<?= base_url('Vendor/authenticate_user') ?>",
      data: {
        "mobile": mobile,
        "otp": otp
      },
      error: function(response) {
        console.log(response);
      },
      success: function(response) {
        if (response.success) {
          console.log(response);
          location.href = response.redirect;
        } else {
          toast(response.message);
        }
      }
    });
  });
</script>