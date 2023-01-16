<style>
    .title {
        text-transform: capitalize;
    }
</style>

<script>
    $.ajax({
        type: "GET",
        url: "<?= base_url(WEB_PANEL_CUSTOMER.'Address_Api/get_user_name') ?>",
        error: function(response) {
            console.lo(response);
        },
        success: function(response) {
            // console.log(response);
            if (response.success) {
                var data = response.data;
                $('#user_name').val(data.name);
                $('#user_email').val(data.email);

            }
        }
    });

    $('#btn_save_name').click(function() {
        var name = $('#user_name').val();
        var email = $('#user_email').val();
        $.ajax({
            type: "POST",
            url: "<?= base_url(WEB_PANEL_CUSTOMER.'Address_Api/save_user_details') ?>",
            data: {
                "name": name,
                "email": email
            },
            error: function(response) {
                console.log(response);
            },
            success: function(response) {
                if (response.success) {
                    location.href = response.redirect;
                }
                else{
                    toast(response.message);
                }

            }
        });
    });

    $.ajax({
        type:"post",
        url:"<?=base_url(WEB_PANEL_CUSTOMER.'Address_Api/check_customer_id_exist')?>",
        error:function(response){
            console.log(response);
        },
        success:function(response){
            // console.log(response);
            if(response.success){
                $('#btn_save_name').removeAttr('disabled');
                $("#btn_save_name").attr('title', 'Proceed to Next Step');

            }
            else{
                $('#btn_save_name').attr('disabled', 'disabled');
                $("#btn_save_name").attr('title', 'Add Delivery Address to Proceed');
            }
        }
    });


  
   
   
</script>

