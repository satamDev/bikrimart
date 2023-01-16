<script>
    function send_otp(mobile) {
        if (mobile.length == 10) {
            $.ajax({
                type: "POST",
                url: "<?= base_url('Customer/send_otp') ?>",
                data: {
                    "mobile": mobile
                },
                error: function(response) {
                    console.log(response);
                },
                success: function(response) {
                    if(response.success){
                        toast(response.message);
                        setTimeout(()=>{
                            location.href=response.redirect;
                        }, 2000);
                    }
                    else{
                        console.log(response);
                    }
                }
            });
        } else {
            toast("Mobile Number Must Contain 10 digits");
        }
    }

    $('#btn_send_otp').click(function() {
        let mobile = $('#mobile_number').val();
        send_otp(mobile);
    });

    $('#btn_change_mobile_number').click(function() {
        let mobile = $('#change_mobile_number').val();
        send_otp(mobile);
    });

    $('#resend_otp').click(function() {
        let mobile = $('#change_mobile_number').val();
        send_otp(mobile);
    });





    $('#btn_verify_otp').click(function() {

        let otp1=$('#otp1').val();
        let otp2=$('#otp2').val();
        let otp3=$('#otp3').val();
        let otp4=$('#otp4').val();
        let otp=otp1+otp2+otp3+otp4;

        let session_id = '';
        if (localStorage.getItem("session_id") && localStorage.getItem("session_id")!='undefined') {
            session_id = localStorage.getItem("session_id");
        } else {
            session_id = '';
        }

        $.ajax({
            type: "POST",
            url: "<?= base_url('Customer/verify_otp') ?>",
            data:{
                "otp":otp,
                "session_id":session_id
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                if(response.success){
                    location.href=response.redirect;
                }
                // console.log(response);
            }
        });
    });
</script>