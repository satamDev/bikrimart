<script type="text/javascript">
	$(document).ready(function() {	    
	    $('#variation_section').hide();
	    $('#non_varient_section').show();
	    $("#variation_section_option_data").hide();
	    $('.vendor_status_change_btn').change(function() {	//enable or disable vendor status	
	        if($(this).is(":checked")) {
	            var returnVal = confirm("Are you sure?");
	            console.log($('.vendor_status_change_btn').val());
	        }else{
	        	console.log(2);
	        }
	    });
	    $('.vendor_variations_change_btn').attr('checked', false);	//by default has variation checkbox turns off
	    $('.vendor_variations_change_btn').change(function() {	//enable or disable vendor varient section	
	        if($(this).is(":checked")) {
	        	$('#variation_section').show();
	    		$('#non_varient_section').hide();  
	        }else{
	        	$('#variation_section').hide();
	    		$('#non_varient_section').show();
	        }	              	
	    });
	    $(function() {	//get veriant options
			$.ajax({        
		        url: "<?=base_url()?>vendor_api/v1/Api/getVariants",
		        cache: false,
		        success: function(response){
		        	var data = JSON.parse(response);
		        	$.each(data, function (i) {	        		
		        		$('#variation_options')
							.append($("<option></option>")
								.attr("value", data[i].uid)
									.text(data[i].name));		
					});
		        }
		    });  
		});
	    var variant_option_created = [];
		$('#variation_options').change(function() {	//add input field according to variant type
	        var selected_option_value = $(this).find(":selected").val();
	        var selected_option_text = $(this).find(":selected").text();
			$("#varient_type_name").val(selected_option_text);
	        // var option_id = selected_option_value.split(",");
	        var array = selected_option_text.split(",");
	        // console.log(array)
	        $('#variant_input_option').empty();
	        $('#variation_section_option_data_header').empty();
	        variant_option_created = []; //removing all elements from this array
	        $.each(array, function (i) {
	        	variant_option_created.push(array[i]+ '_' +selected_option_value);
	        	// variant option input field creation -start
	        	$("#variant_input_option").append('<div class="form-group">'+
                    '<small class="d-block">'+array[i]+'</small>'+
                    '<input class="form-control" type="text" data-role="tagsinput" value="" id="'+array[i]+ '_' +selected_option_value+'">'+
                '</div>');
	        	// variant option input field creation -end
                $("#variation_section_option_data_header").append('<div class="col">'+
                    '<small class="d-block">'+array[i]+'</small>'+ 
                '</div>');
	        });
	        $("#variation_section_option_data_header").append('<div class="col">'+
                '<small class="d-block">Price</small>'+
            '</div>'+
            '<div class="col">'+
	            '<small class="d-block">Sale Price</small>'+
	        '</div>'+
	        '<div class="col">'+
	            '<small class="d-block">Qty</small>'+
	        '</div>');
	    });
		
	    $("#btn_add_variants").click(()=>{
	    	$("#variation_section_option_data").show();
	    	let option_val = [];	    
			$.each(variant_option_created, function (i) {				
				option_val[i] = $("#"+variant_option_created[i]).val();
			});
			let option_values = option_val[0];
			option_values = option_values.split(',');
			$(".variation_section_option_data_values").remove();
			if( (typeof option_val[1]) != 'undefined'){ 	// there is 2 option
            	let option_values_2 = option_val[1];			
				option_values_2 = option_values_2.split(',');
				let html = '';
				$.each(option_values, function (i) {
					let flag = 1;
					let size_index = 0;
					while(flag == 1){
						if(typeof option_values_2[size_index] == 'undefined'){break;}
						html += '<div class="form-row variation_section_option_data_values">'+
		                    '<div class="col">'+
		                        '<div class="form-group">'+
		                            '<input type="text" class="form-control" name="colour[]" value="'+option_values[i].trim()+'" readonly>'+
		                        '</div>'+
		                    '</div>';
		                if(typeof option_values_2[size_index] != 'undefined'){
			                html += '<div class="col">'+
			                        '<div class="form-group">'+
			                            '<input type="text" class="form-control" name="size[]" value="'+ option_values_2[size_index].trim() +'" readonly>'+
			                        '</div>'+
			                    '</div>';
			                size_index++;
			                flag = 1;
			            }else{
			            	flag = 0;
			            }
		                html += '<div class="col">'+
		                        '<div class="form-group">'+
		                            '<input type="number" class="form-control" name="v_price[]" value="0.00">'+
		                        '</div>'+
		                   ' </div>'+
		                   '<div class="col">'+
		                        '<div class="form-group">'+
		                            '<input type="number" class="form-control"  name="v_sale_price[]" value="0.00">'+
		                        '</div>'+
		                    '</div>'+
		                    '<div class="col">'+
		                        '<div class="form-group">'+
		                            '<input type="number" class="form-control" name="v_quantity[]" value="10">'+
		                        '</div>'+
		                    '</div>'+
		                '</div>'; 
		            }
				});
				$("#variation_section_option_data").append(html);				
			}else{
				var varient_type=$('#varient_type_name').val();
				$.each(option_values, function (i) {	// only 1 option
					let html = '';					
					// let name=$('#variation_options').text();
					html += '<div class="form-row variation_section_option_data_values">'+
	                    '<div class="col">'+
	                        '<div class="form-group">'+
	                            '<input type="text" class="form-control" name="'+varient_type+'[]" value="'+option_values[i].trim()+'" readonly>'+
	                        '</div>'+
	                    '</div>'+
	                    '<div class="col">'+
	                        '<div class="form-group">'+
	                            '<input type="number" class="form-control" name="v_price[]" value="0.00">'+
	                        '</div>'+
	                   ' </div>'+
	                   '<div class="col">'+
	                        '<div class="form-group">'+
	                            '<input type="number" class="form-control"  name="v_sale_price[]" value="0.00">'+
	                        '</div>'+
	                    '</div>'+
	                    '<div class="col">'+
	                        '<div class="form-group">'+
	                            '<input type="number" class="form-control" name="v_quantity[]" value="10">'+
	                        '</div>'+
	                    '</div>'+
	                '</div>';	                
	                $("#variation_section_option_data").append(html);
				});
			}
	    });
	});
	// $("#product_add_form").submit(function(e) {
	//     e.preventDefault();
	//     var form = $(this);
	//     var actionUrl = form.attr('action');
	//     $.ajax({
	//         type: "POST",
	//         url: actionUrl,
	//         data: form.serialize(), // serializes the form's elements.
	//         success: function(response){
	//         	console.log(response);
	//         }
	//     });	    
	// });
	function change_status(value){
		$.ajax({
	        type: "POST",
	        url: 'v_s',
	        data: { 'status' : value },
	        success: function(response){
	        	console.log(response);
	        }
	    });	
	}
</script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css"> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
<script>
	// // This selection is for fetching categories and sub-categories as a JSON data --START
	// $(function() {
	// 	$.ajax({        
	//         url: "https://www.v-xplore.com/dev/ci_bikrimart/index.php/vendor_api/v1/Api/fetchCategorys",
	//         cache: false,
	//         success: function(response){
	//         	var data = JSON.parse(response);
	//         	console.log(data);
	//         	// show_select(data);
	//         }
	//     });  
	// });
	// function show_select(theData) {
	//	// To use this select2.js we have to add selectize.min.js and  selectize.bootstrap3.min.css this 2 files..
	// 	$("#mySelect").select2({			
	// 	    placeholder: "Select a option...",
	// 	    data: theData,
	// 	 });
	// }
	// This selection is for fetching categories and sub-categories as a JSON data --END

	$(function() {
		$.ajax({        
	        url: "<?=base_url()?>vendor_api/v1/Api/printCategoryTree",
	        cache: false,
	        success: function(response){
	        	$("#select-state").html(response);	
	        	$('#select-state').selectize({
	        		maxItems: 3,	      
				    onChange: function(value, isOnInitialize) {				        
				        fetch_brand_according_to_categoy(value);
				    }
	        	});
	        	$("#select-state")[0].selectize.clear();

	        	$("#select-category").html(response);	
				
	        }
	    });  
	});
	
	function fetch_brand_according_to_categoy(data){
		$.ajax({        
	        url: "<?=base_url()?>vendor_api/v1/Api/getBrand",
	        cache: false,
	        data : {'categories' : data},
	        success: function(response){
	        	var data = JSON.parse(response);
	        	$('#select-brand').find('option:not(:first)').remove();
	        	$.each(data, function (i) {	        		
	        		$('#select-brand')
						.append($("<option></option>")
							.attr("value", data[i].uid)
								.text(data[i].name));		        				    
				});
	        }
	    });  
	}
	
	$(function() {
		$.ajax({        
	        url: "<?=base_url()?>vendor_api/v1/Api/getUnits",
	        cache: false,	        
	        success: function(response){
	        	var data = JSON.parse(response);
	        	$('#select-units').find('option:not(:first)').remove();
	        	$.each(data, function (i) {	        		
	        		$('#select-units')
						.append($("<option></option>")
							.attr("value", data[i].uid)
								.text(data[i].name));				    
				});
	        }
	    });  
	});
	$(function() {
		$.ajax({        
	        url: "<?=base_url()?>vendor_api/v1/Api/getTaxRates",
	        cache: false,	        
	        success: function(response){
	        	var data = JSON.parse(response);
	        	// $('#select-tax-rates').find('option:not(:first)').remove();
	        	$.each(data, function (i) {	        		
	        		$('#select-tax-rates')
						.append($("<option></option>")
							.attr("value", data[i].id)
								.text(data[i].name));	

	        		$('#edit_tax_rates')
						.append($("<option></option>")
							.attr("value", data[i].id)
								.text(data[i].name));				    
				});
	        }
	    });  
	});
</script>