<script>
    $('#btn_delivery').hide();

    function delivery(state, user_id) {

        if (state.checked == true) {
            $.ajax({
                url: "<?= base_url('active_free_delivery') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                success: function(response) {
                    state.removeAttribute("checked");
                    toast(response.message);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        } else {
            $.ajax({
                url: "<?= base_url('deactive_free_delivery') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                error: function(response) {
                    console.log(response);
                },
                success: function(response) {
                    if (response.success) {
                        toast(response.message);
                    } else {
                        toast(response.message);
                    }
                }
            });
        }
    }

    function home_delivery(state, user_id) {
        if (state.checked == true) {
            $.ajax({
                url: "<?= base_url('active_home_delivery') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                success: function(response) {
                    state.removeAttribute("checked");
                    toast(response.message);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        } else {
            $.ajax({
                url: "<?= base_url('deactive_home_delivery') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                error: function(response) {
                    console.log(response);
                },
                success: function(response) {
                    if (response.success) {
                        toast(response.message);
                    } else {
                        toast(response.message);
                    }
                }
            });
        }
    }


    function pickup_from_store(state, user_id) {
        if (state.checked == true) {
            $.ajax({
                url: "<?= base_url('active_pickup_from_store') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                success: function(response) {
                    state.removeAttribute("checked");
                    toast(response.message);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        } else {
            $.ajax({
                url: "<?= base_url('deactive_pickup_from_store') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                error: function(response) {
                    console.log(response);
                },
                success: function(response) {
                    if (response.success) {
                        toast(response.message);
                    } else {
                        toast(response.message);
                    }
                }
            });
        }
    }

    function stock_management(state, user_id) {
        if (state.checked == true) {
            $.ajax({
                url: "<?= base_url('active_stock_management') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                success: function(response) {
                    state.removeAttribute("checked");
                    toast(response.message);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        } else {
            $.ajax({
                url: "<?= base_url('deactive_stock_management') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                error: function(response) {
                    console.log(response);
                },
                success: function(response) {
                    if (response.success) {
                        toast(response.message);
                    } else {
                        toast(response.message);
                    }
                }
            });
        }
    }


    function cod(state, user_id) {
        if (state.checked == true) {
            $.ajax({
                url: "<?= base_url('active_cash_on_delivery') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                success: function(response) {
                    state.removeAttribute("checked");
                    toast(response.message);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        } else {
            $.ajax({
                url: "<?= base_url('deactive_cash_on_delivery') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                error: function(response) {
                    console.log(response);
                },
                success: function(response) {
                    if (response.success) {
                        toast(response.message);
                    } else {
                        toast(response.message);
                    }
                }
            });
        }
    }

    function online_payment(state, user_id) {
        if (state.checked == true) {
            $.ajax({
                url: "<?= base_url('active_online_payment') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                success: function(response) {
                    state.removeAttribute("checked");
                    toast(response.message);
                },
                error: function(response) {
                    console.log(response);
                }
            });
        } else {
            $.ajax({
                url: "<?= base_url('deactive_online_payment') ?>",
                type: "post",
                data: {
                    "id": user_id
                },
                error: function(response) {
                    console.log(response);
                },
                success: function(response) {
                    if (response.success) {
                        toast(response.message);
                    } else {
                        toast(response.message);
                    }
                }
            });
        }
    }


    $('#minimum_order_value').keyup(function(){
        $('#btn_delivery').show();
    });

    $('#delivery_charges').keyup(function(){
        $('#btn_delivery').show();
    });

    $('#btn_delivery').click(function(){
        var value=$('#minimum_order_value').val();
        var charge=$('#delivery_charges').val();

        console.log(value)
        console.log(charge)

        $.ajax({
            type:"POST",
            url:"<?=base_url('update_delivery_charges')?>",
            data:{
                "value":value,
                "charge":charge
            },
            error:function(response){
                console.log(response);
            },
            success:function(response){
                if(response.success){
                    console.log(response);
                    $('#btn_delivery').hide();
                }
                else{
                    console.log(response);
                }
            }
        })
    })


    $('#account_name').keyup(function(){
        $('#btn_bank_details').show();
    });

    $('#account_number').keyup(function(){
        $('#btn_bank_details').show();
    });

    $('#ifsc').keyup(function(){
        $('#btn_bank_details').show();
    });

    $('#btn_bank_details').click(function(){

        var name = $('#account_name').val();
        var number = $('#account_number').val();
        var ifsc = $('#ifsc').val();

        $.ajax({
            type:"POST",
            url:"<?=base_url('update_bank_details')?>",
            data:{
                "name": name,
                "number": number,
                "ifsc": ifsc
            },
            error:function(response){
                console.log(response);
            },
            success:function(response){
                if(response.success){
                    toast(response.message);
                    $('#btn_bank_details').hide();
                }
                else{
                    toast(response.message);
                }
            }
        });
    });

       
    

</script>