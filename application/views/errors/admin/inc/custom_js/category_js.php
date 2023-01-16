<script>
        $(document).ready(function() {
            var id = 0;
            fetch_category(id);

        });

        function fetch_category(parent_id, id) {
            if (id != undefined) {
                var current_already_category_level = id;
                var current_already_category_level_arr = current_already_category_level.split('_');
                var level = current_already_category_level_arr[1];

                var have_to_remove_level = Number(level) + 1;

                var flag = 1;
                while (flag == 1) {
                    if ($("#level_" + have_to_remove_level).length) {
                        $("#level_" + have_to_remove_level).remove();
                        have_to_remove_level++;
                    } else flag = 0;
                }

            }

            $.ajax({
                type: "post",
                url: "<?= base_url('Admin/fetch_category') ?>",
                data: {
                    "id": parent_id
                },
                error: function(data) {
                    console.log(data);
                },
                success: function(data) {
                    if (data.success) {
                        // console.log(data);
                        let current_category_level = data.value[0].categorie_level;


                        let category = data.value;
                        var str = '';

                        str +=
                            `<div class="form-group my-4">
                                    <div>
                                        <select id="level_${current_category_level}" class="form-control mb-1"  onchange="fetch_category(this.value, 'level_${current_category_level}')">
                                            <option value="undefined" data="">Select Category</option>;
                                        </select>
                                    </div>
                            </div>`;
                        $('.category').append(str);

                        $.each(category, function(i) {
                            str += `<option value="${category[i].uid}">${category[i].name}</option>`;
                        });

                        $('#level_' + current_category_level).html(str);

                        $('#parent_id').val(parent_id);
                        $('#category_level').val(current_category_level);

                        // console.log("parent id: " + parent_id);
                        // console.log("level: " + current_category_level);
                    } else {

                        if (id != undefined) {
                            var current_already_category_level = id;
                            var current_already_category_level_arr = current_already_category_level.split('_');

                            var level = current_already_category_level_arr[1];

                            var have_to_remove_level = Number(level) + 1;

                            var flag = 1;
                            while (flag == 1) {
                                if ($("#level_" + have_to_remove_level).length) {
                                    $("#level_" + have_to_remove_level).remove();
                                    have_to_remove_level++;
                                } else flag = 0;
                            }

                        }

                        let current_category_level = have_to_remove_level;

                        let category = data.value;
                        var str = '';
                        var next_product_level = have_to_remove_level;

                        str +=
                            `<div class="form-group my-4">
                                    <div>
                                        <select id="level_${next_product_level}" class="form-control mb-3"  onchange="fetch_category(this.value,'level_${next_product_level}')">
                                            <option value="" data="">No Category Found</option>;
                                        </select>
                                    </div>
                            </div>`;
                        $('.category').append(str);

                    
                        $('#parent_id').val(parent_id);
                        $('#category_level').val(next_product_level);

                        // console.log("parent id: " + parent_id);
                        // console.log("level: " + next_product_level);
                    }
                },
            });
        }





        $('#btn_add_product_category').click(function() {

            let parent_id = $('#parent_id').val();
            let category_level = $('#category_level').val();
            let category_name = $('#category_name').val();


            if (category_name.length == 0) {
                toast("Enter a Product Category");
            } else {
                $.ajax({
                    type: "post",
                    url: "<?= base_url('Admin/add_product_category') ?>",
                    data: {
                        "name": category_name,
                        "parent_id": parent_id,
                        "category_level": category_level,

                    },
                    error: function(data) {
                        console.log(data);
                    },
                    success: function(data) {
                        if (data.success) {
                            toast(data.message);

                            $('.category').html(''); 
                            $('#category_name').val('');
                            fetch_category();

                        } else {
                            toast(data.message);
                            $('#category_name').val('');

                        }

                    }
                });
            }




        });
    </script>