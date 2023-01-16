<style>
	input[list]+div[list] {
		display: none;
		position: absolute;
		width: 100%;
		max-height: 164px;
		overflow-y: auto;
		max-width: 330px;
		background: #FFF;
		border: var(--border);
		border-top: none;
		border-radius: 0 0 5px 5px;
		box-shadow: 0 3px 3px -3px #333;
		z-index: 100;
	}

	/* .product_list{
	background-color: lightblue;
	color:green;
} */
	.product_list:hover {
		cursor: pointer;
	}

	.dataList {
		color: green;
	}

	input[list]+div[list] option {
		display: block;
		padding: 7px 5px 7px 20px;
		color: #069;
		text-decoration: none;
		cursor: pointer;
	}
</style>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"> </script>
<script>
</script>
<script type="text/javascript">
	// $.ajax({
	// 	url: "<?= base_url() ?>index.php/admin/get_sarathi",
	// 	cache: false,
	// 	success: function(response){
	// 		// $("#results").append(html);
	// 		console.log(response);
	// 		// let data = JSON.parse(response);
	// 		// $.each(data, function(key,val) {
	//   //           console.log(data[key]);
	//   //           let user_status = "";
	//   //           if(status == '1') user_status = "checked";
	//   //           $("#sarathi_data").append('<tr><td>'+(key+1)+'</td>'+
	//   //               '<td class="text-nowrap">'+data[key].name+'</td>'+
	//   //               '<td class="text-nowrap">'+data[key].email+'</td>'+
	//   //               '<td class="text-nowrap">-</td>'+
	//   //               '<td class="text-nowrap">-</td>'+
	//   //               '<td>'+
	//   //                   '<label class="switch">'+
	//   //                     '<product_name type="checkbox" '+ user_status +'>'+
	//   //                     '<span class="slider round"></span>'+
	//   //                   '</label>'+
	//   //               '</td></tr>');
	//   //       });
	// 	}
	// });


	$(document).ready(function() {
		$('.masterCategory').hide();
		// $('.input-images-1').hide();

		$('#master_category').attr('disabled', true);
		$('#master_brand').attr('disabled', true);
		$('#master_category_id').attr('disabled', true);
	});

	$("#product_add_form").submit(function(e) {
		e.preventDefault();
		let form = document.getElementById('product_add_form');
		var form_data = new FormData(form);
		let product_id = $('#master-product-id').val();
		if (product_id == '') {
			$.ajax({
				type: "POST",
				url: "<?= base_url('Vendor/add_product_data') ?>", // Vendor/add_product_data_for_first_time
				data: form_data,
				contentType: false,
				processData: false,
				success: function(response) {
					if (response.success) {
						console.log(response);
						toast(response.message, 'center');
						$('#product_add_form')[0].reset();
						$('#variation_section').hide();
						$('#non_varient_section').show();
					} else {
						console.log(response);
						toast(response.message, 'center');
					}
				},
				error: function(response) {
					console.log(response);
				}
			});
		} else {
			let form = document.getElementById('product_add_form');
			var form_data = new FormData(form);
			var master_product_id = $('#master-product-id').val();
			var master_category_id = $('#master_category_id').val();

			form_data.append("master_product_id", master_product_id);
			form_data.append("master_category_id", master_category_id);
			$.ajax({
				type: "post",
				url: "<?= base_url('add_product_already_exist') ?>", //  when data available in master table
				data: form_data,
				contentType: false,
				processData: false,
				error: function(data) {
					console.log(data);
				},
				success: function(response) {
					if (response.success) {
						toast(response.message, 'center');
						$('.masterCategory').hide();
						$('#product_add_form')[0].reset();
					} else {
						console.log(response);
						toast(response.message, 'center');
					}
				}
			});
		}
	});


	$('#product_name').keyup(function() {
		var product_name = $('#product_name').val();
		$.ajax({
			type: "POST",
			url: "<?= base_url('get_product_name_exist') ?>",
			data: {
				"name": product_name
			},
			error: function(response) {
				console.log(response);
			},
			success: function(response) {
				if (response.success) {
					let product = response.data;
					let master_brand = response.data.category;
					let category = '';
					let category_id = '';
					let brand = '';
					let product_id = '';
					let product_list = `<datalist id="product_list" class="dataList" role="listbox"></datalist>`;
					$('.product_list').html(product_list);
					$.each(product, function(i) {
						product_list = `<option value="${product[i].name}">`;
						$('#product_list').append(product_list);
						product_id = product[i].productId;
						category = product[i].category.name;
						category_id = product[i].category.id;
						brand = product[i].brand.name;
					});
					$('.regularCategory').hide();
					$('.regularBrand').hide();
					$('.masterCategory').show();

					$('#master-product-id').val(product_id);
					$('#master_category').val(category);
					$('#master_category_id').val(category_id);
					$('#master_brand').val(brand);
					fetch_brand_according_to_category(category_id);
				} else {

					$('#master-product-id').val('');
					$('#master_category').val('');
					$('#master_category_id').val('');
					$('#master_brand').val('');
					$('.regularCategory').show();
					$('.regularBrand').show();
					$('.masterCategory').hide();
					$('#select-brand').html('<option>Choose Brand</option>');
				}
			}
		});
	});

	function fetch_brand_according_to_category(category_id) {
		$.ajax({
			url: "<?= base_url() ?>get_brand_according_category",
			type: "POST",
			data: {
				'id': category_id
			},
			success: function(response) {
				if (response.success) {
					var data = response.data;
					var brand = '<option>Choose Brand</option>';
					$.each(data, function(i) {
						brand += `<option value="${data[i].uid}">${data[i].name}</option>`;
					});
					$('#select-brand').html(brand);
				} else {
					// console.log(response);
				}
			}
		});
	}

	//============================== MOBILE VIEW ==================================


	$("#form_mobile_add_product").submit(function(e) {

		e.preventDefault();
		let form = document.getElementById('form_mobile_add_product');
		var form_data = new FormData(form);

		let product_id = $('#master-product-id').val();

		if (product_id == '') {

			$.ajax({
				type: "POST",
				url: "<?= base_url('Vendor/add_product_data') ?>", // Vendor/add_product_data_for_first_time
				data: form_data,
				contentType: false,
				processData: false,
				success: function(response) {
					// console.log(response);
					if (response.success) {
						toast(response.message, 'center');
						$('#form_mobile_add_product')[0].reset();
					} else {
						// console.log(response);
						toast(response.message, 'center');
					}
				},
				error: function(response) {
					console.log(response);
				}
			});

		} else {
			let form = document.getElementById('form_mobile_add_product');
			var form_data = new FormData(form);
			var master_product_id = $('#master-product-id').val();
			var master_category_id = $('#master_category_id').val();
			form_data.append("master_product_id", master_product_id);
			form_data.append("master_category_id", master_category_id);
			$.ajax({
				type: "post",
				url: "<?= base_url('add_product_already_exist') ?>", //  when data available in master table
				data: form_data,
				contentType: false,
				processData: false,
				error: function(data) {
					console.log(data);
				},
				success: function(response) {
					console.log(response);
					if (response.success) {
						toast(response.message, 'center');
						$('.masterCategory').hide();
						$('#form_mobile_add_product')[0].reset();
					} else {
						toast(response.message, 'center');
					}
				}
			});
		}
	});



	$('#mobile_product_name').keyup(function() {
		var product_name = $('#mobile_product_name').val();
		$.ajax({
			type: "POST",
			url: "<?= base_url('get_product_name_exist') ?>",
			data: {
				"name": product_name
			},
			error: function(response) {
				console.log(response);
			},
			success: function(response) {
				if (response.success) {

					let product = response.data;
					let master_brand = response.data.category;
					let category = '';
					let category_id = '';
					let brand = '';
					let product_id = '';
					let product_list = `<datalist id="product_list" class="dataList" role="listbox"></datalist>`;
					$('.product_list').html(product_list);

					$.each(product, function(i) {
						product_list = `<option value="${product[i].name}">`;
						$('#product_list').append(product_list);

						product_id = product[i].productId;
						category = product[i].category.name;
						category_id = product[i].category.id;
						brand = product[i].brand.name;
					});

					$('.regularCategory').hide();
					$('.regularBrand').hide();
					$('.masterCategory').show();

					$('#master-product-id').val(product_id);
					$('#master_category').val(category);
					$('#master_category_id').val(category_id);
					$('#master_brand').val(brand);

					fetch_brand_according_to_category(category_id);
				} else {

					$('#master-product-id').val('');
					$('#master_category').val('');
					$('#master_category_id').val('');
					$('#master_brand').val('');

					$('.regularCategory').show();
					$('.regularBrand').show();
					$('.masterCategory').hide();
					$('#select-brand').html('<option>Choose Brand</option>');
				}
			}
		});
	});
</script>