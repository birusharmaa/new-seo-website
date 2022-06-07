//Save inquiry details
$("#sendMsg").click(function(){
    $(".validation").remove();
    let flag    = true;
    let name    = $("#name").val().replace(/ /g,'');
    let number  = $("#number").val().replace(/ /g,''); 
    let message = $("#message").val().replace(/ /g,'');
    let enqEmail = $("#enqEmail").val().replace(/ /g,'');
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

    if(flag && $("#checkError").val()=="0"){
        let url = $("#baseUrl").val()+"/contact/send-inquiry";
        $.ajax({
            url     : url,
            type    : "post",
            data    : {
                "name"    : name,
                "number"  : number,
                "message" : message,
                'email'   : enqEmail,
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

//Key erro message on keyup for message inquiry modal
$("#name").keyup(function(){
    $(this).parent().find('.validation').remove();
});

$("#message").keyup(function(){
    $(this).parent().find('.validation').remove();
});

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

$("#number").keyup(function(){
    //$(this).parent().find('.validation').remove();
    var phone = $("#number").val().replace(/ /g,''); 
    phonenumber(phone, this, 'number');
});

$("#userPhone").keyup(function(){
    var phone = $("#userPhone").val().replace(/ /g,''); 
    phonenumber(phone, this, 'userPhone');
});



$("#sendMessage").click(function(){
    $(".validation").remove();
    let flag    = true;
    
    let name    = $("#userName").val();
    let number  = $("#userPhone").val(); 
    let email   = $("#userEmail").val(); 
    let message = $("#userMessage").val();
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

$("#userName").keyup(function(){
    $(this).parent().find('.validation').remove();
});
$("#userEmail").keyup(function(){
    $(this).parent().find('.validation').remove();
});
$("#userMessage").keyup(function(){
    $(this).parent().find('.validation').remove();
});

function ValidateEmail(mail) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail)){
        return true;
    }
    return false;
}

$('#inquiryModal').on('hidden.bs.modal', function (e) {
    $(".validation").remove();
})