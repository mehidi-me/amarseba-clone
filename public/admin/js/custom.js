$(document).ready(function(){
	// call dataTable class
	 $('#sections').DataTable();
	 $('#categories').DataTable();
	 $('#brands').DataTable();
	 $('#products').DataTable();
	 $('#banners').DataTable();
	 $('#filters').DataTable();
	$(".nav-item").removeClass("active");
	$(".nav-link").removeClass("active");
	$("#current_password").keyup(function(){
		var current_password = $("#current_password").val();
		$.ajax({
			headers: {
        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    		},
			type:'post',
			url:'/admin/check-admin-password',
			data:{current_password:current_password},
			success:function(resp){
				if (resp=="false") {
	              $("#check_password").html("<font color=red>Current Password is incorrect</font>");
	            }else if (resp=="true") {
	              $("#check_password").html("<font color=green>Current Password is correct</font>");
	            }
			}
		});
	});
	// update admin status
		$(document).on("click",".updateAdminStatus",function(){
			var status = $(this).children("i").attr("status");
			var admin_id = $(this).attr("admin_id");
			//alert("admin_id");
			$.ajax({
				headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	    		
				type:'post',
				url:'/admin/update-admin-status',
				data:{status:status,admin_id:admin_id},
				success:function(resp){
					//alert(resp);
					if (resp['status']==0) {
						$("#admin-"+admin_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
					}else if (resp['status']==1){
						$("#admin-"+admin_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-check' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		});


		// update Section status
		$(document).on("click",".updateSectionStatus",function(){
			var status = $(this).children("i").attr("status");
			var section_id = $(this).attr("section_id");
			//alert("admin_id");
			$.ajax({
				headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	    		
				type:'post',
				url:'/admin/update-section-status',
				data:{status:status,section_id:section_id},
				success:function(resp){
					//alert(resp);
					if (resp['status']==0) {
						$("#section-"+section_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
					}else if (resp['status']==1){
						$("#section-"+section_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-check' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		});



		// update Category status
		$(document).on("click",".updateCategoryStatus",function(){
			var status = $(this).children("i").attr("status");
			var category_id = $(this).attr("category_id");
			//alert("category_id");
			$.ajax({
				headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	    		
				type:'post',
				url:'/admin/update-category-status',
				data:{status:status,category_id:category_id},
				success:function(resp){
					//alert(resp);
					if (resp['status']==0) {
						$("#category-"+category_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
					}else if (resp['status']==1){
						$("#category-"+category_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-check' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		});


		// update Brand status
		$(document).on("click",".updateBrandStatus",function(){
			var status = $(this).children("i").attr("status");
			var brand_id = $(this).attr("brand_id");
			//alert("admin_id");
			$.ajax({
				headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	    		
				type:'post',
				url:'/admin/update-brand-status',
				data:{status:status,brand_id:brand_id},
				success:function(resp){
					//alert(resp);
					if (resp['status']==0) {
						$("#brand-"+brand_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
					}else if (resp['status']==1){
						$("#brand-"+brand_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-check' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		});


		// update Filter status
		$(document).on("click",".updateFilterStatus",function(){
			var status = $(this).children("i").attr("status");
			var filter_id = $(this).attr("filter_id");
			//alert("admin_id");
			$.ajax({
				headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	    		
				type:'post',
				url:'/admin/update-filter-status',
				data:{status:status,filter_id:filter_id},
				success:function(resp){
					//alert(resp);
					if (resp['status']==0) {
						$("#filter-"+filter_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
					}else if (resp['status']==1){
						$("#filter-"+filter_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-check' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		});


		// update Filter Value status
		$(document).on("click",".updateFilterValueStatus",function(){
			var status = $(this).children("i").attr("status");
			var filter_id = $(this).attr("filter_id");
			//alert("admin_id");
			$.ajax({
				headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	    		
				type:'post',
				url:'/admin/update-filter-value-status',
				data:{status:status,filter_id:filter_id},
				success:function(resp){
					//alert(resp);
					if (resp['status']==0) {
						$("#filter-"+filter_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
					}else if (resp['status']==1){
						$("#filter-"+filter_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-check' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		});


		// update Product status
		$(document).on("click",".updateProductStatus",function(){
			var status = $(this).children("i").attr("status");
			var product_id = $(this).attr("product_id");
			//alert("admin_id");
			$.ajax({
				headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	    		
				type:'post',
				url:'/admin/update-product-status',
				data:{status:status,product_id:product_id},
				success:function(resp){
					//alert(resp);
					if (resp['status']==0) {
						$("#product-"+product_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
					}else if (resp['status']==1){
						$("#product-"+product_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-check' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		});


		// update Attribute status
		$(document).on("click",".updateAttributeStatus",function(){
			var status = $(this).children("i").attr("status");
			var attribute_id = $(this).attr("attribute_id");
			//alert("admin_id");
			$.ajax({
				headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	    		
				type:'post',
				url:'/admin/update-attribute-status',
				data:{status:status,attribute_id:attribute_id},
				success:function(resp){
					//alert(resp);
					if (resp['status']==0) {
						$("#attribute-"+attribute_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
					}else if (resp['status']==1){
						$("#attribute-"+attribute_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-check' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		});


		// update Banner status
		$(document).on("click",".updateBannerStatus",function(){
			var status = $(this).children("i").attr("status");
			var banner_id = $(this).attr("banner_id");
			//alert("admin_id");
			$.ajax({
				headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	    		
				type:'post',
				url:'/admin/update-banner-status',
				data:{status:status,banner_id:banner_id},
				success:function(resp){
					//alert(resp);
					if (resp['status']==0) {
						$("#banner-"+banner_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
					}else if (resp['status']==1){
						$("#banner-"+banner_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-check' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		});


		// update Image status
		$(document).on("click",".updateImageStatus",function(){
			var status = $(this).children("i").attr("status");
			var image_id = $(this).attr("image_id");
			//alert("image_id");
			$.ajax({
				headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	    		
				type:'post',
				url:'/admin/update-image-status',
				data:{status:status,image_id:image_id},
				success:function(resp){
					//alert(resp);
					if (resp['status']==0) {
						$("#image-"+image_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
					}else if (resp['status']==1){
						$("#image-"+image_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-check' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		});
		

		// confirm deletion (Sample Javascript)
		// $(".confirmDelete").click(function(){
		// 	var title = $(this).attr("title");
		// 	if (confirm("Are you sure to delete this "+title+"?")) {
		// 		return true;
		// 	}else{
		// 		return false;
		// 	}
		// });

		// confirm deletion (sweetalert2 Library)

			$(document).on("click",".confirmDelete",function(){
			var module = $(this).attr('module');
			var moduleid = $(this).attr('moduleid');
			Swal.fire({
			  title: 'Are you sure?',
			  text: "You won't be able to revert this!",
			  icon: 'warning',
			  showCancelButton: true,
			  confirmButtonColor: '#3085d6',
			  cancelButtonColor: '#d33',
			  confirmButtonText: 'Yes, delete it!'
			}).then((result) => {
			  if (result.isConfirmed) {
			    Swal.fire(
			      'Deleted!',
			      'Your file has been deleted.',
			      'success'
			    )
			    window.location = "/admin/delete-"+module+"/"+moduleid;
			  }
			})
		});

		// Append categories levels

		$("#section_id").change(function(){
			var section_id = $(this).val();
			//alert(section_id);
			$.ajax({
				type:'get',
				url:'/admin/append-categories-level',
				data:{section_id:section_id},
				success:function(resp){
					$("#appendCategoriesLevel").html(resp);
				},error:function(){
					alert("Error");
				}
			});
			
		});

		// Product Attributes Add/Remove Script

		var maxField = 10; //Input fields increment limitation
	    var addButton = $('.add_button'); //Add button selector
	    var wrapper = $('.field_wrapper'); //Input field wrapper
	    var fieldHTML = '<div><input type="text" name="size[]" placeholder="Size" style="width: 120px;"/>&nbsp;<input type="text" name="sku[]" placeholder="SKU" style="width: 120px;"/>&nbsp;<input type="text" name="price[]" placeholder="Price" style="width: 120px;"/>&nbsp;<input type="text" name="stock[]" placeholder="Stock" style="width: 120px;"/>&nbsp; <a href="javascript:void(0);" class="remove_button">Remove</a></div>'; 
	    var x = 1; //Initial field counter is 1
	    
	    //Once add button is clicked
	    $(addButton).click(function(){
	        //Check maximum number of input fields
	        if(x < maxField){ 
	            x++; //Increment field counter
	            $(wrapper).append(fieldHTML); //Add field html
	        }
	    });
	    
	    //Once remove button is clicked
	    $(wrapper).on('click', '.remove_button', function(e){
	        e.preventDefault();
	        $(this).parent('div').remove(); //Remove field html
	        x--; //Decrement field counter
	    });

	    // Show filters on selection of Category

	    $("#category_id").on('change',function(){
	    	var category_id = $(this).val();
	    	//alert(category_id);
	    	$.ajax({
	    		headers: {
	        		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	    		},
	    		type:'post',
	    		url: 'category-filter',
	    		data:{category_id:category_id},
	    		success:function(resp){
	    			$(".categoryLoadFilter").html(resp.view);
	    		}
	    	});
	    });


		
      $("#ManualCoupon").click(function(){
        $("#couponField").show();
	  });
	  $("#AutomaticCoupon").click(function(){
        $("#couponField").hide();
	  });


	  


//coupon status update
	  $(document).on("click",".updateCouponStatus",function(){
		var status = $(this).children("i").attr("status");
		var coupon_id = $(this).attr("coupon_id");
		//alert("coupon_id");
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			
			type:'post',
			url:'/admin/update-coupon-status',
			data:{status:status,coupon_id:coupon_id},
			success:function(resp){
				//alert(resp);
				if (resp['status']==0) {
					$("#coupon-"+coupon_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
				}else if (resp['status']==1){
					$("#coupon-"+coupon_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-check' status='Active'></i>");
				}
			},error:function(){
				alert("Error");
			}
		});
	});

		//user status update
		$(document).on("click",".updateUserStatus",function(){
			var status = $(this).children("i").attr("status");
			var user_id = $(this).attr("user_id");
			// alert("user_id");
			$.ajax({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				},
				
				type:'post',
				url:'/admin/update-user-status',
				data:{status:status,user_id:user_id},
				success:function(resp){
					//alert(resp);
					if (resp['status']==0) {
						$("#user-"+user_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
					}else if (resp['status']==1){
						$("#user-"+user_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-check' status='Active'></i>");
					}
				},error:function(){
					alert("Error");
				}
			});
		});

	//cmspages status update
	$(document).on("click",".updateCmsStatus",function(){
		var status = $(this).children("i").attr("status");
		var cmspage_id = $(this).attr("cmspage_id");
		//alert("cmspage_id");
		$.ajax({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			},
			
			type:'post',
			url:'/admin/update-cmspage-status',
			data:{status:status,cmspage_id:cmspage_id},
			success:function(resp){
				//alert(resp);
				if (resp['status']==0) {
					$("#cmspage-"+cmspage_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-outline' status='Inactive'></i>");
				}else if (resp['status']==1){
					$("#cmspage-"+cmspage_id).html("<i style='font-size: 30px;' class='mdi mdi-bookmark-check' status='Active'></i>");
				}
			},error:function(){
				alert("Error");
			}
		});
	});
	  

});