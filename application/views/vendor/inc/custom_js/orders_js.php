<script>

    $(document).ready(function(){

       function get_pending_orders_list()
       {
        $.ajax({
            url: "<?=base_url("get_pending_orders_list")?>",
            type: "GET",
            error: function(a, b, c)
            {
                console.log(a);
                console.log(b);
                console.log(c);
            },
            success: function(response)
            {
                console.log(response);
            }
        })
       }

       get_pending_orders_list();

    });

</script>