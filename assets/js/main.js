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


});