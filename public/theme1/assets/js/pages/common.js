$(document).ready(function() {
    $('.popup-youtube').magnificPopup({
        type: 'iframe',
    });
    $('.popup-images').magnificPopup({
        type: 'image',
        closeBtnInside: true,
        mainClass: 'mfp-img',
        gallery: {
            enabled: true,
            navigateByImgClick: true,
            preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
        },
    });
    
    $('.one-time').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToShow: 1,
        pauseOnHover: false,
        pauseOnFocus: false,
        arrows: true,
        fade: true
    });
});

/**
 * Save enquiry modal form data
 */
$("#sendMsg").click(function(){
    $(".validation").remove();
    let flag    = true;
    let name    = $.trim($("#name").val());
    let number  = $.trim($("#number").val()); 
    let message = $.trim($("#message").val());
    let enqEmail = $.trim($("#enqEmail").val());
    if(name==""){
        flag = false;
        $("#name").parent().append("<span class='text-danger validation'>Please enter your name.</span>");
    }
    if(number==""){
        flag = false;
        $("#number").parent().append("<span class='text-danger validation'>Please enter your number.</span>");
    }
    if($("#checkError").val()=="1"){
        flag = false;
        $("#number").parent().append("<span class='text-danger validation'>Please enter valid number.</span>");
    }
    if(message==""){
        flag = false;
        $("#message").parent().append("<span class='text-danger validation'>Please enter your message.</span>");
    }
    if(enqEmail==""){
        flag = false;
        $("#enqEmail").parent().append("<span class='text-danger validation'>Please enter your email.</span>");
    }
    if(enqEmail!=""){
        if(!ValidateEmail(enqEmail)){
            flag = false;
            $("#enqEmail").parent().append("<span class='text-danger validation'>Please enter valid email.</span>");
        }
    }

    if(flag && $("#checkError").val()=="0"){
        let url = $("#baseUrl").val()+"/contact/send-inquiry";
        $.ajax({
            url     : url,
            type    : "post",
            data    : {
                "name"    : name,
                "number"  : number,
                "message" : message,
                "email"   : enqEmail,
            },
            success:function(data){
                data = JSON.parse(data);
                if(data.status){
                    $("#name").val("");
                    $("#number").val("");
                    $("#message").val("");
                    $("#enqEmail").val("");
                    $("#message").parent().append("<span class='text-success validation'>"+data.msg+"</span>");
                }
            },error:function(){

            }
        });
    }
});


/**
 * Save contact page form data
 */
$("#sendMessage").click(function(){
    $(".validation").remove();
    let flag    = true;
    
    let name    = $.trim($("#userName").val());
    let number  = $.trim($("#userPhone").val()); 
    let email   = $.trim($("#userEmail").val()); 
    let message = $.trim($("#userMessage").val());
    if(name==""){
        flag = false;
        $("#userName").parent().append("<span class='text-danger validation'>Please enter your name.</span>");
    }
    if(number==""){
        flag = false;
        $("#userPhone").parent().append("<span class='text-danger validation'>Please enter your number.</span>");
    }
    if($("#checkError").val()=="1"){
        flag = false;
        $("#number").parent().append("<span class='text-danger validation'>Please enter valid number.</span>");
    }
    if(message==""){
        flag = false;
        $("#userMessage").parent().append("<span class='text-danger validation'>Please enter your message.</span>");
    }
    if(email==""){
        flag = false;
        $("#userEmail").parent().append("<span class='text-danger validation'>Please enter your email.</span>");
    }
    if(email!=""){
        if(!ValidateEmail(email)){
            flag = false;   
            $("#userEmail").parent().append("<span class='text-danger validation'>Please enter valid email.</span>");
        }
    }

    if(flag && $("#checkError").val()=="0"){
        $("#sendMessage").prop("disabled", true);
        let url = $("#baseUrl").val()+"/contact/inquiry";
        $.ajax({
            url     : url,
            type    : "post",
            data    : {
                "name"    : name,
                "number"  : number,
                "email"   : email, 
                "message" : message,
            },
            success:function(data){
                $("#sendMessage").prop("disabled", false);
                data = JSON.parse(data);
                if(data.status){
                    $("#userName").val("");
                    $("#userPhone").val("");
                    $("#userEmail").val("");
                    $("#userMessage").val("");
                    $("#sendMessage").parent().parent().append("<div class='text-center'><span class='text-success validation'>"+data.msg+"</span></div>");
                }
            },error:function(){
                $("#sendMessage").prop("disabled", false);
            }
        });
    }
});
 
//Key erro message on keyup for message inquiry modal
$("#name").keyup(function(){
    $(this).parent().find('.validation').remove();
});

$("#message").keyup(function(){
    $(this).parent().find('.validation').remove();
});

$("#enqEmail").keyup(function(){
    $(this).parent().find('.validation').remove();
});
$("#number").keyup(function(){
    //$(this).parent().find('.validation').remove();
    var phone = $("#number").val().replace(/ /g,''); 
    phonenumber(phone, this, 'number');
});

//Key erro message on keyup for message contact form
$("#userName").keyup(function(){
    $(this).parent().find('.validation').remove();
});
$("#userEmail").keyup(function(){
    $(this).parent().find('.validation').remove();
});
$("#userMessage").keyup(function(){
    $(this).parent().find('.validation').remove();
});
$("#userPhone").keyup(function(){
    var phone = $("#userPhone").val().replace(/ /g,''); 
    phonenumber(phone, this, 'userPhone');
});

//Email validation function
function ValidateEmail(mail) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
        return true;
    }
    return false;
}

//Phone number validation
function phonenumber(phone, e, id){
    var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    $(e).parent().find('.validation').remove();
    if((phone.match(phoneno))){
        $("#checkError").val("0");
        $(e).parent().find('.validation').remove();
    }else{
        $("#checkError").val("1");
        $("#"+id).parent().append("<span class='text-danger validation'>Please valid phone number.</span>");
    }
}






