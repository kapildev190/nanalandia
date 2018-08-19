// JavaScript Document

function Close(divcontent, animar_div, form){
    $(form).bootstrapValidator('resetForm', true);
    $(divcontent).fadeOut(300);
    $(animar_div).css({'transition':'0.5s'});
    $('body').css({'overflow-y':'auto'});
    //Wait 0.5 second and then hide
    setTimeout(function(){
        $(animar_div).fadeOut(300);	
    },500);
}
	
function Display(class_display, animar_div){
    $(animar_div).fadeIn(0);
    setTimeout(function(){
        $(class_display).fadeIn(200);
        $(animar_div).css({'transition':'0.5s'});
    },300);
    $('body').css({'overflow-y':'hidden'});
}

function DisplayAndClose(class_display1, animar_div1, form, class_display2, animar_div2){
    Close(class_display1, animar_div1, form);
    Display(class_display2, animar_div2)
}

function showUploadForm(userId,tr){
	$('#reqUserId').val(userId);
	$('#trId').val(tr);
	$('#uploadModal').modal('toggle');
}

function showUploadReceipt(path){	
	$('#viewReceiptImg').attr('src','assets/upload/'+path);
	$('#viewReceiptModal').modal('toggle');
}

function confirmPayment(userId,tr){	
	var r = confirm("Are you sure to confirm payment?");
    if (r == true) {
		$.ajax({
			type: 'post',
			url: 'server/request.php?action=confirmPayment',
			data: {'reqUserId':userId,'trId':tr},
			dataType: 'json',
			success: function (data) {
				if(data['status']){ 
					console.log(data['td']);
					$('#'+data['tr']).find('.tdStatus').html(data['td']);
					$('#'+data['tr']).find('.tdReceipt').html('Confirmar pago');
				}else{
					
					//$('#employee_results').html(results);
				}
			}
		});	
    } 		
}



$(document).ready(function() {
    var sideslider = $('[data-toggle=collapse-side]');
    var sel = sideslider.attr('data-target');
    var sel2 = sideslider.attr('data-target-2');
    sideslider.click(function(event){
        $(sel).toggleClass('in');
        $(sel2).toggleClass('out');
    });
    
    function myMap(){
        var mapProp= {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
        };
        var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }

	

    //Login Form
    $("#login_form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'server/request.php?action=login',
            data: $('#login_form').serialize(),
            dataType: 'json',
            success: function (data) {
				//console.log(data);
				//return false;
                if(data['status']){
                    window.location = data['type'];
                }else{
                    var errors_list = data['msg'].toString().split(",");
                    var errors = '';
                    for(var i = 0; i < errors_list.length; i++){
                        errors += '<li>'+errors_list[i]+'</li>';
                    }
                    var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
                        '<strong>Warning!</strong>'+errors+
                        '</div>';
                    $('#login_results').html(results);
                }
            }
        });
    });

    //Registration Form
    $("#register_form").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'server/request.php?action=register',
            data: $('#register_form').serialize(),
            dataType: 'json',
            success: function (data) {
                if(data['status']){
                    $('#register_form')[0].reset();
                    var results = '<div class="alert alert-success alert-dismissible" role="alert">\n' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
                        '<strong>Success!</strong>'+data['msg']+
                        '</div>';
                    $('#register_results').html(results);
                }else{
                    var errors_list = data['msg'].toString().split(",");
                    var errors = '';
                    for(var i = 0; i < errors_list.length; i++){
                        errors += '<li>'+errors_list[i]+'</li>';
                    }
                    var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
                        '<strong>Warning!</strong>'+errors+
                        '</div>';
                    $('#register_results').html(results);
                }
            }
        });
    });

	
	//Request Form
    $("#request_form").submit(function(e) { 
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'server/request.php?action=request',
            data: $('#request_form').serialize(),
            dataType: 'json',
            success: function (data) {
				 
                if(data['status']){ console.log('true');
                    $('#request_form')[0].reset();
                    var results = '<div class="alert alert-success alert-dismissible" role="alert">\n' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
                        '<strong>Success!</strong>'+data['msg']+
                        '</div>';
                    $('#request_results').html(results);
                }else{
                    var errors_list = data['msg'].toString().split(",");
                    var errors = '';
                    for(var i = 0; i < errors_list.length; i++){
                        errors += '<li>'+errors_list[i]+'</li>';
                    }
                    var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
                        '<strong>Warning!</strong>'+errors+
                        '</div>';
                    $('#request_results').html(results);
                }
            }
        });
    });

	//Employee Form
    $("#employee_form").submit(function(e) { 
        e.preventDefault();
        $.ajax({
            type: 'post',
            url: 'server/request.php?action=employee',
            data: $('#employee_form').serialize(),
            dataType: 'json',
            success: function (data) {
				 
                if(data['status']){ console.log('true');
                    $('#employee_form')[0].reset();
                    var results = '<div class="alert alert-success alert-dismissible" role="alert">\n' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
                        '<strong>Success!</strong>'+data['msg']+
                        '</div>';
                    $('#employee_results').html(results);
                }else{
                    var errors_list = data['msg'].toString().split(",");
                    var errors = '';
                    for(var i = 0; i < errors_list.length; i++){
                        errors += '<li>'+errors_list[i]+'</li>';
                    }
					var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
                        '<strong>Warning!</strong>'+errors+
                        '</div>';
					$('#employee_results').html(results);
                }
            }
        });
    });

	//Upload Form
    $("#uploadReceipt").submit(function(e) {
        e.preventDefault();
		//var formData = new FormData(this);
		//console.log(formData);
        $.ajax({
            type: 'post',
            url: 'server/request.php?action=uploadReceipt',
            //data: $('#uploadReceipt').serialize(),
			data:  new FormData(this),
		    contentType: false,
			cache: false,
		    processData:false,
            dataType: 'json',
            success: function (data) {
				//console.log(data);
				//return false;
                if(data['status']){
                    //window.location = data['type'];
					//alert(data['name']);
					$('#upload_results').html(data['msg']);
					setTimeout(function() { $('#uploadModal').modal('hide');}, 2000);
					$('#'+data['tr']).find('td:last').html(data['name']);
					$('#uploadReceipt').trigger("reset");
					}else{
                    $('#upload_results').html(data['msg']);
                }
            }
        });
    });
	
	
	/***** Assign employee to request **************/
	$(document).on('click', '.assignEmployee', function(event)
	{
		var parentTr   = $(this).parents('tr');
		var employeeId = $(this).attr('data-id');
		var requestId  = $(parentTr).find('.requestDropdown').val();
		$('#messageContainer').addClass('hide');
		$(parentTr).find('.requestDropdownTd').removeClass('has-error');
		if( requestId <= 0 && employeeId <= 0 )
		{
			$('#messageContainer').removeClass('hide');
			var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
				'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
				'<strong>Warning! </strong>Something went wrong. Please try again.</div>';
			$('#messageContainer').html(results);
			setTimeout(function(){ $('#messageContainer').addClass('hide'); }, 3000);
			return false;
		}
		else if( requestId <= 0 )
		{
			$(parentTr).find('.requestDropdownTd').addClass('has-error');
		}
		else
		{
			$.ajax({
				type	 : "POST",
				dataType : "json",
				data	 : {'employeeId':employeeId,'requestId':requestId},
				url		 : 'server/request.php?action=assignEmployee',
				beforeSend  : function () {
					$(".loader_div").show();
				},
				complete: function () {
					$(".loader_div").hide();
				},
				success: function(response)
				{
					if(response['status'])
					{ 
						$(parentTr).find('.requestDropdown').val('');
						var results = '<div class="alert alert-success alert-dismissible" role="alert">\n' +
							'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
							'<strong>Success!</strong>'+response['msg']+
							'</div>';
						$('#messageContainer').html(results);
					}else{
						var errors_list = response['msg'].toString().split(",");
						var errors = '';
						for(var i = 0; i < errors_list.length; i++){
							errors += '<li>'+errors_list[i]+'</li>';
						}
						var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
							'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
							'<strong>Warning!</strong>'+errors+
							'</div>';
						$('#messageContainer').html(results);
					}
					$('#messageContainer').removeClass('hide');
					setTimeout(function(){ $('#messageContainer').addClass('hide'); }, 3000);
				},
				error:function(response){
					$('#messageContainer').removeClass('hide');
					var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
						'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
						'<strong>Warning! </strong>Connection Error. Please try again.</div>';
					$('#messageContainer').html(results);
					setTimeout(function(){ $('#messageContainer').addClass('hide'); }, 3000);
					return false;
				}
			});
		}
	});
	
	
	/***** hire employee **************/
	$(document).on('click', '.hireEmployee', function(event)
	{ 
		var parentTr   = $(this).parents('tr');
		var employeeId = $(this).attr('data-employeeId');
		var requestId  = $(this).attr('data-requestId');
		$('#messageContainer').addClass('hide');
		if( requestId <= 0 && employeeId <= 0 )
		{
			$('#messageContainer').removeClass('hide');
			var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
				'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
				'<strong>Warning! </strong>Something went wrong. Please try again.</div>';
			$('#messageContainer').html(results);
			setTimeout(function(){ $('#messageContainer').addClass('hide'); }, 3000);
			return false;
		}
		else
		{
			$.ajax({
				type	 : "POST",
				dataType : "json",
				data	 : {'employeeId':employeeId,'requestId':requestId},
				url		 : 'server/request.php?action=hireEmployee',
				beforeSend  : function () {
					$(".loader_div").show();
				},
				complete: function () {
					$(".loader_div").hide();
				},
				success: function(response)
				{
					if(response['status'])
					{ 
						$(parentTr).find('.statusTd p').attr('class','').addClass('greenc').html('Hire');
						$('.hireBtnTd').html('');
						var results = '<div class="alert alert-success alert-dismissible" role="alert">\n' +
							'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
							'<strong>Success!</strong>'+response['msg']+
							'</div>';
						$('#messageContainer').html(results);
					}else{
						var errors_list = response['msg'].toString().split(",");
						var errors = '';
						for(var i = 0; i < errors_list.length; i++){
							errors += '<li>'+errors_list[i]+'</li>';
						}
						var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
							'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
							'<strong>Warning!</strong>'+errors+
							'</div>';
						$('#messageContainer').html(results);
					}
					$('#messageContainer').removeClass('hide');
					setTimeout(function(){ $('#messageContainer').addClass('hide'); }, 3000);
				},
				error:function(response){
					$('#messageContainer').removeClass('hide');
					var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
						'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
						'<strong>Warning! </strong>Connection Error. Please try again.</div>';
					$('#messageContainer').html(results);
					setTimeout(function(){ $('#messageContainer').addClass('hide'); }, 3000);
					return false;
				}
			});
		}
	});
	
	
	/***** employee detail **************/
	$(document).on('click', '.viewCandidate', function(event)
	{ 
		var employeeId = $(this).attr('data-id');
		$('#messageContainer').addClass('hide');
		if( employeeId <= 0 )
		{
			$('#messageContainer').removeClass('hide');
			var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
				'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
				'<strong>Warning! </strong>Something went wrong. Please try again.</div>';
			$('#messageContainer').html(results);
			setTimeout(function(){ $('#messageContainer').addClass('hide'); }, 3000);
			return false;
		}
		else
		{
			$.ajax({
				type	 : "POST",
				dataType : "json",
				data	 : {'employeeId':employeeId},
				url		 : 'server/request.php?action=viewEmployee',
				beforeSend  : function () {
					$(".loader_div").show();
				},
				complete: function () {
					$(".loader_div").hide();
				},
				success: function(response)
				{
					if(response['status'])
					{ 
						$('#viewCandidatePopup').modal('show');
						$("#popupBody").load("/nanalandia/includes/modals/viewCandidate.php", {
							data:response['data']
						});
						//$('#popupBody').html(response['html']);
						$('#messageContainer').html(results);
					}else{
						var errors_list = response['msg'].toString().split(",");
						var errors = '';
						for(var i = 0; i < errors_list.length; i++){
							errors += '<li>'+errors_list[i]+'</li>';
						}
						var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
							'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
							'<strong>Warning!</strong>'+errors+
							'</div>';
						$('#messageContainer').html(results);
					}
					$('#messageContainer').removeClass('hide');
					setTimeout(function(){ $('#messageContainer').addClass('hide'); }, 3000);
				},
				error:function(response){
					$('#messageContainer').removeClass('hide');
					var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
						'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
						'<strong>Warning! </strong>Connection Error. Please try again.</div>';
					$('#messageContainer').html(results);
					setTimeout(function(){ $('#messageContainer').addClass('hide'); }, 3000);
					return false;
				}
			});
		}
	});
	
	
	/***** request detail **************/
	$(document).on('click', '.viewRequest', function(event)
	{ 
		var requestId = $(this).attr('data-id');
		$('#messageContainer').addClass('hide');
		if( requestId <= 0 )
		{
			$('#messageContainer').removeClass('hide');
			var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
				'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
				'<strong>Warning! </strong>Something went wrong. Please try again.</div>';
			$('#messageContainer').html(results);
			setTimeout(function(){ $('#messageContainer').addClass('hide'); }, 3000);
			return false;
		}
		else
		{
			$.ajax({
				type	 : "POST",
				dataType : "json",
				data	 : {'requestId':requestId},
				url		 : 'server/request.php?action=viewRequest',
				beforeSend  : function () {
					$(".loader_div").show();
				},
				complete: function () {
					$(".loader_div").hide();
				},
				success: function(response)
				{
					if(response['status'])
					{ 
						$('#viewRequestPopup').modal('show');
						$("#popupBody").load("/nanalandia/includes/modals/viewRequest.php", {
							data:response['data']
						});
						//$('#popupBody').html(response['html']);
						$('#messageContainer').html(results);
					}else{
						var errors_list = response['msg'].toString().split(",");
						var errors = '';
						for(var i = 0; i < errors_list.length; i++){
							errors += '<li>'+errors_list[i]+'</li>';
						}
						var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
							'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
							'<strong>Warning!</strong>'+errors+
							'</div>';
						$('#messageContainer').html(results);
					}
					$('#messageContainer').removeClass('hide');
					setTimeout(function(){ $('#messageContainer').addClass('hide'); }, 3000);
				},
				error:function(response){
					$('#messageContainer').removeClass('hide');
					var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
						'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
						'<strong>Warning! </strong>Connection Error. Please try again.</div>';
					$('#messageContainer').html(results);
					setTimeout(function(){ $('#messageContainer').addClass('hide'); }, 3000);
					return false;
				}
			});
		}
	});
	
	
	/***** View Invoice **************/
	$(document).on('click', '.viewInvoice', function(event)
	{ 
		var requestId = $(this).attr('data-id');
		$('#messageContainer').addClass('hide');
		if( requestId <= 0 )
		{
			$('#messageContainer').removeClass('hide');
			var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
				'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
				'<strong>Warning! </strong>Something went wrong. Please try again.</div>';
			$('#messageContainer').html(results);
			setTimeout(function(){ $('#messageContainer').addClass('hide'); }, 3000);
			return false;
		}
		else
		{
			$.ajax({
				type	 : "POST",
				dataType : "json",
				data	 : {'requestId':requestId},
				url		 : 'server/request.php?action=viewInvoice',
				beforeSend  : function () {
					$(".loader_div").show();
				},
				complete: function () {
					$(".loader_div").hide();
				},
				success: function(response)
				{
					if(response['status'])
					{ 
						$('#viewInvoicePopup').modal('show');
						$("#popupBodyInvoice").load("/nanalandia/includes/modals/viewInvoice.php", {
							data:response['data']
						});
						//$('#popupBody').html(response['html']);
						$('#messageContainer').html(results);
					}else{
						var errors_list = response['msg'].toString().split(",");
						var errors = '';
						for(var i = 0; i < errors_list.length; i++){
							errors += '<li>'+errors_list[i]+'</li>';
						}
						var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
							'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
							'<strong>Warning!</strong>'+errors+
							'</div>';
						$('#messageContainer').html(results);
					}
					$('#messageContainer').removeClass('hide');
					setTimeout(function(){ $('#messageContainer').addClass('hide'); }, 3000);
				},
				error:function(response){
					$('#messageContainer').removeClass('hide');
					var results = '<div class="alert alert-danger alert-dismissible" role="alert">\n' +
						'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>\n' +
						'<strong>Warning! </strong>Connection Error. Please try again.</div>';
					$('#messageContainer').html(results);
					setTimeout(function(){ $('#messageContainer').addClass('hide'); }, 3000);
					return false;
				}
			});
		}
	});
	
	
});