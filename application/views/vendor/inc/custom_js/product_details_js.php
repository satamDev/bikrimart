<style>
    .product_image_style{
        display:grid; 
        place-items:center; 
        cursor:pointer; 
        margin-top:3px;
        margin-right:2px;
        margin-left:-25px;
        height:20px;
        width:20px;
    }
</style>
<script>
    $(document).ready(function() {
        display_product_details();
    });

    // function reloadPage() {
    //     location.reload(true);
    // }


    function display_product_details() {
        var product_id = $('#product_id').val();
        // console.log(product_id);

        $.ajax({
            type: "POST",
            url: "<?= base_url('Vendor/display_product_details') ?>",
            data: {
                "id": product_id
            },
            error: function(data) {
                console.log(data);
            },
            success: function(response) {
                // console.log(response);
                var product = response.data;
                var image = response.data.product_images;
                
                var variant = response.data.variant_details;

                var product_details = '';
                var product_price_details = '';
                var image_details = '';
                var variant_details = '';

                if (response.data.has_variant == 0) {
                    $('#table_variant').hide();
                    $('#div_table_variant').hide();
                } else {
                    $('.table_product_price_details').hide();
                }

                // Product basic details

                product_details += `<tr class="text-center">
                <td>${product.name}</td>                 
                <td>${product.category_name}</td>   
                <td>${product.brand_name}</td>               
                <td>${product.product_unit_id}</td> 
                <td>${product.description}</td> 
                </tr>`;

                // Product price details

                product_price_details += `
                <tr class="text-center">
                    <td>${product.sale_price}</td> 
                    <td>${product.purchase_price}</td> 
                    <td>${product.wholesale_price}</td> 
                    <td>${product.discount}</td> 
                    <td>${product.discount_type}</td> 
                    <td>${product.min_stock_qty}</td> 
                    <td>${product.opening_stock}</td> 
                    <td>${product.price_per_unit}</td> 
                    <td><button class="btn btn-sm btn-success"  data-toggle="modal" data-target="#addNewImg">Add Images</button></td> 
                </tr>`;

                $('#table_product_details').html(product_details);
                $('#table_product_price_details').html(product_price_details);

                // variant details

                var variant_number='';
                $.each(variant, function(i) {

                    variant_details += `
                    <tr class="text-center">
                        <td>${variant[i].colour}</td>
                        <td>${variant[i].size}</td>
                        <td>${variant[i].sale_price}</td>
                        <td>${variant[i].purchase_price}</td>
                        <td>${variant[i].wholesale_price}</td>
                        <td>${variant[i].discount}</td>
                        <td>${variant[i].discount_type}</td> 
                        <td>${variant[i].min_stock_qty}</td> 
                        <td>${variant[i].opening_stock}</td> 
                        <td>${variant[i].price_per_unit}</td> 
                        <td><button class="btn btn-sm btn-success add_image" data="${variant[i].variant_id}" data-toggle="modal" data-target="#addNewImg">Add Image</button></td> 
                    </tr>`;
                    variant_number++;

                    $('#variant').html(variant_details);
                    // $('#table_variant').dataTable();

                });

                // console.log('Variant Number: '+variant_number);
              
                if (response.data.has_variant != '0') {
                    for (i = 0; i < variant_number; i++) {  // create div to group same variant product image
                        
                        image_details = `<div id="${variant[i].variant_id}" class =  d-flex flex-wrap"></div>`;

                        $('.image').append(image_details);
                    }
                    $.each(image, function(index, image_value) {
                        var image_view = `<img class="shadow rounded ml-4 mb-3 p-2 image-fluid" src="<?= base_url() ?>${image_value.path}" width=20% style="object-fit:contain;"> 

                        <button class="btn btn-sm btn-secondary p-0 product_image_style"  id="${image_value.uid}" onclick="delete_image(this.id)" data-toggle="modal" data-target="#delImg"><i class="fa-solid fa-xmark" style="font-size:16px"></i></button >`;

                        $('#' + image_value.variant_id).append(image_view);

                       
                    });
                    

                } else {

                    image_details = `<div id="product_image" class="d-flex flex-wrap"></div>`;
                    $('.image').append(image_details);

                    $.each(image, function(i) {

                        var image_view = '';

                        image_view = `
                        <img class="shadow rounded ml-4 mb-3 p-2" src=<?= base_url() ?>${image[i].path} width=25% style="object-fit:contain;">

                        <button class="btn btn-sm btn-secondary p-0 product_image_style"  id="${image[i].uid}" onclick="delete_image(this.id)" data-toggle="modal" data-target="#delImg"><i class="fa-solid fa-xmark" style="font-size:16px"></i></button >`;
                        
                        $('#product_image').append(image_view);
                    });
                }
            }
        });
    }


    // get variant id

    $('#table_variant').on('click', '.add_image', function() {
        let variant_id = $(this).attr('data');
        $('#product_variant_id').val(variant_id);

    });

    // add product image

    $('#add_image_form').submit(function(e) {
        e.preventDefault();

        let form = document.getElementById('add_image_form');
        var form_data = new FormData(form);

        var product_id = $('#product_id').val();

        form_data.append("product_id", product_id);

        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/add_product_image') ?>",
            data: form_data,
            contentType: false,
            processData: false,
            error: function(data) {
                console.log(data);

            },
            success: function(data) {
                if (data.success) {
                    console.log(data);
                    toast(data.message, 'center');
                    $('#close_add_modal').click();
                    $('#product_image').val('');
                    $('.image').html('');
                    display_product_details();

                } else {
                    toast(data.message, 'center');
                    console.log(data);

                }
            }
        });
    });

    // get image id 

    function delete_image(image_id){
        $('#image_id').val(image_id);
    }


    // delete product image

    $('#btn_delete_image').click(function(){
        var image_id=$('#image_id').val();
        console.log(image_id);
        $.ajax({
            type: "post",
            url: "<?= base_url('Vendor/delete_product_image') ?>",
            data:{
                "id":image_id
            },
            error: function(data) {
                console.log(data);

            },
            success: function(data) {
                if (data.success) {
                    console.log(data.message);
                    toast(data.message, 'center');
                    $('#close_delete_modal').click();
                    $('.image').html('');
                    display_product_details();

                } else {
                    console.log(data.message);
                    toast(data.message, 'center');
                }
            }
        });
    });


</script>