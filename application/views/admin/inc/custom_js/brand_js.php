<script>
        $(document).ready(function() {
            display_brand_details();
        });

        function display_brand_details() {
            $.ajax({
                type: 'POST',
                url: "<?= base_url('Admin/display_brand_details') ?>",
                error: function(data) {
                    console.log(data);
                },
                success: function(data) {
                    // console.log(data);
                    let brand = data.value;
                    let brand_details = '';

                    $.each(brand, function(i) {
                        brand_details += `<tr>
                        <td>${i+1}</td>
                        <td>${brand[i].category_name}</td>
                        <td>${brand[i].brand_name}</td>
                        </tr>`;
                    });

                    $('#table_details').html(brand_details);
                    $('#dataTable').dataTable();

                }
            });
        }



        $('#btn_add').click(function() {
            $.ajax({
                type: 'POST',
                url: "<?= base_url('Admin/fetch_category_name') ?>",
                error: function(data) {
                    console.log(data);
                },
                success: function(data) {
                    let cataegory = data.value;

                    let category_details = '<option value="">Choose Category</option>';

                    $.each(cataegory, function(i) {
                        category_details +=
                            `<option value="${cataegory[i].uid}">${cataegory[i].name}</option>`;
                    });
                    $('#category_id').html(category_details);
                }
            });
        });

        $('#btn_add_data').click(function() {

            let category_id = $('#category_id').val();
            let brand_name = $('#brand_name').val();

            $.ajax({
                type: 'POST',
                url: "<?= base_url('Admin/add_brand_name') ?>",
                data: {
                    'category_id': category_id,
                    'brand_name': brand_name
                },
                error: function(data) {
                    console.log(data);
                },
                success: function(data) {
                    if (data.success) {
                        toast(data.message, 'center');
                        $('#close_add_modal').click();
                        $('#add_data_form')[0].reset();
                        display_brand_details();
                    } else {
                        toast(data.message, 'center');
                    }


                }
            });
        });
    </script>