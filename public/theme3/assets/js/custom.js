$(document).ready(function(){
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
})

////main-wraiper-animated////
$('.by').click(function () {
    $(this).closest('.btm1').addClass("clicked");
});

$('.rmv').click(function () {
    $(this).closest('.btm1').removeClass("clicked");
});

$('.buy1').click(function () {
    $('.bottom1').addClass("clicked");
});
$('.remove1').click(function () {
    $('.bottom1').removeClass("clicked");
});

$('.buy2').click(function () {
    $('.bottom2').addClass("clicked");
});
$('.remove2').click(function () {
    $('.bottom2').removeClass("clicked");
});
////main-wraiper-animated////
////main-wraiper////
function openNav() {
    document.getElementById("mySidenav").style.width = "auto";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
// $(document).on('click', function(event) {
//     if ($(event.target).is('#main') || $(event.target).is('i')) {
//         openNav();
//     } else {
//         closeNav()
//     }
// });

$('#greenbtn').click(switchGreen);
$('#redbtn').click(switchred);
$('#bluebtn').click(switchblue);
$('#orengebtn').click(switchorenge);

$('#font1').click(switchfont1);
$('#font2').click(switchfont2);
$('#font3').click(switchfont3);
$('#font4').click(switchfont4);



function switchfont1() {
    $('body').addClass('font1');
    $('body').removeClass("font2 font3 font4");
}
function switchfont2() {
    $('body').addClass('font2');
    $('body').removeClass("font1 font3 font4");
}
function switchfont3() {
    $('body').addClass('font3');
    $('body').removeClass("font2 font1 font4");
}
function switchfont4() {
    $('body').addClass('font4');
    $('body').removeClass("font2 font3 font1");
}
function switchGreen() {
    $('body').addClass('green');
    $('body').removeClass("red blue orenge");
}

function switchred() {
    $('body').removeClass("green blue orenge");
    $('body').addClass('red');
}

function switchblue() {
    $('body').addClass('blue');
    $('body').removeClass("red orenge green");
}

function switchorenge() {
    $('body').removeClass("green red blue");
    $('body').addClass('orenge');
}


// darknessSlider.addEventListener('change', (e) => {
//     const val = darknessSlider.value
//     document.documentElement.style.setProperty('--theme-darkness', val);
// });

//font-size///
function getSize() {
    size = $("h1").css("font-size");
    size = parseInt(size, 10);
    $("#font-size").text(size);
}
getSize();
$("#up").on("click", function () {
    if ((size + 2) <= 50) {
        $("h1").css("font-size", "+=2");
        $("#font-size").text(size += 2);
    }
});

$("#down").on("click", function () {
    if ((size - 2) >= 12) {
        $("h1").css("font-size", "-=2");
        $("#font-size").text(size -= 2);
    }
});
//font-size///

////main-wraiper////




// to get current year
// function getYear() {
//     var currentDate = new Date();
//     var currentYear = currentDate.getFullYear();
//     document.querySelector("#displayYear").innerHTML = currentYear;
// }

// getYear();

// zooommmm///
(function ($) {
    $(document).ready(function () {
        $(".xzoom, .xzoom-gallery").xzoom({
            zoomWidth: 400,
            title: true,
            tint: "#333",
            Xoffset: 15,
        });
        $(".xzoom2, .xzoom-gallery2").xzoom({
            position: "#xzoom2-id",
            tint: "#ffa200",
        });
        $(".xzoom3, .xzoom-gallery3").xzoom({
            position: "lens",
            lensShape: "circle",
            sourceClass: "xzoom-hidden",
        });
        $(".xzoom4, .xzoom-gallery4").xzoom({ tint: "#006699", Xoffset: 15 });
        $(".xzoom5, .xzoom-gallery5").xzoom({ tint: "#006699", Xoffset: 15 });

        //Integration with hammer.js
        var isTouchSupported = "ontouchstart" in window;

        if (isTouchSupported) {
            //If touch device
            $(".xzoom, .xzoom2, .xzoom3, .xzoom4, .xzoom5").each(function () {
                var xzoom = $(this).data("xzoom");
                xzoom.eventunbind();
            });

            $(".xzoom, .xzoom2, .xzoom3").each(function () {
                var xzoom = $(this).data("xzoom");
                $(this)
                    .hammer()
                    .on("tap", function (event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1,
                            ls;

                        xzoom.eventmove = function (element) {
                            element.hammer().on("drag", function (event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        };

                        xzoom.eventleave = function (element) {
                            element.hammer().on("tap", function (event) {
                                xzoom.closezoom();
                            });
                        };
                        xzoom.openzoom(event);
                    });
            });

            $(".xzoom4").each(function () {
                var xzoom = $(this).data("xzoom");
                $(this)
                    .hammer()
                    .on("tap", function (event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1,
                            ls;

                        xzoom.eventmove = function (element) {
                            element.hammer().on("drag", function (event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        };

                        var counter = 0;
                        xzoom.eventclick = function (element) {
                            element.hammer().on("tap", function () {
                                counter++;
                                if (counter == 1) setTimeout(openfancy, 300);
                                event.gesture.preventDefault();
                            });
                        };

                        function openfancy() {
                            if (counter == 2) {
                                xzoom.closezoom();
                                $.fancybox.open(xzoom.gallery().cgallery);
                            } else {
                                xzoom.closezoom();
                            }
                            counter = 0;
                        }
                        xzoom.openzoom(event);
                    });
            });

            $(".xzoom5").each(function () {
                var xzoom = $(this).data("xzoom");
                $(this)
                    .hammer()
                    .on("tap", function (event) {
                        event.pageX = event.gesture.center.pageX;
                        event.pageY = event.gesture.center.pageY;
                        var s = 1,
                            ls;

                        xzoom.eventmove = function (element) {
                            element.hammer().on("drag", function (event) {
                                event.pageX = event.gesture.center.pageX;
                                event.pageY = event.gesture.center.pageY;
                                xzoom.movezoom(event);
                                event.gesture.preventDefault();
                            });
                        };

                        var counter = 0;
                        xzoom.eventclick = function (element) {
                            element.hammer().on("tap", function () {
                                counter++;
                                if (counter == 1) setTimeout(openmagnific, 300);
                                event.gesture.preventDefault();
                            });
                        };

                        function openmagnific() {
                            if (counter == 2) {
                                xzoom.closezoom();
                                var gallery = xzoom.gallery().cgallery;
                                var i,
                                    images = new Array();
                                for (i in gallery) {
                                    images[i] = { src: gallery[i] };
                                }
                                $.magnificPopup.open({
                                    items: images,
                                    type: "image",
                                    gallery: { enabled: true },
                                });
                            } else {
                                xzoom.closezoom();
                            }
                            counter = 0;
                        }
                        xzoom.openzoom(event);
                    });
            });
        } else {
            //If not touch device

            //Integration with fancybox plugin
            $("#xzoom-fancy").bind("click", function (event) {
                var xzoom = $(this).data("xzoom");
                xzoom.closezoom();
                $.fancybox.open(xzoom.gallery().cgallery, {
                    padding: 0,
                    helpers: { overlay: { locked: false } },
                });
                event.preventDefault();
            });

            //Integration with magnific popup plugin
            $("#xzoom-magnific").bind("click", function (event) {
                var xzoom = $(this).data("xzoom");
                xzoom.closezoom();
                var gallery = xzoom.gallery().cgallery;
                var i,
                    images = new Array();
                for (i in gallery) {
                    images[i] = { src: gallery[i] };
                }
                $.magnificPopup.open({
                    items: images,
                    type: "image",
                    gallery: { enabled: true },
                });
                event.preventDefault();
            });
        }
    });
})(jQuery);

// ** Add slider script  Biru **/
const swiper = new Swiper('.swiper', {
    loop: true,
    pagination: {
        el: '.swiper-pagination',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 3000,
    },
    keyboard: {
        enabled: true,
        onlyInViewport: false,
    },
});


const addToCard = (id) => { 
    let url = $('#baseUrl').val()+"/add-to-cart/"+id
    $.ajax({
        url: url,
        type: "POST",
        data: {},
        success: function (response) {
            response = JSON.parse(response);
            if (response.status) {
                Swal.fire({ icon: 'success', text: response.message }).then((result) => {
                    location.reload();
                });
            } else {
                if(response.message=="notLogin"){
                    //$("#modallog1").find('.modal-body').prepend("")
                    $("#loginCardMsg").removeClass("d-none");
                    $("#productId").val(id);
                    $("#modallog1").modal("show");
                }else{
                    Swal.fire({ icon: 'warning', text: response.message });
                }
            }
        },
    });
}

function displayImage(input, clsName = null) {
    const BASEURL = $('#baseUrl').val();
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (event) {
            $('.' + clsName).attr('src', event.target.result);
        }
        //$("#oldPhotoName").val("");
        reader.readAsDataURL(input.files[0]);
    } else {
        $('.' + clsName).attr('src', BASEURL + "/assets/img/empty.png");
    }
}



$(document).on('change', '#image', function () {
    displayImage(this, 'image-preview');
});

$("#registerBtn").click(function () {
    $(".validation").remove();
    var flag = true;

    let firstName = $.trim($("#firstName").val());
    let lastName = $.trim($("#lastName").val());
    let email = $.trim($("#email").val());
    let phone = $.trim($("#phone").val());
    let address = $.trim($("#address").val());
    let password = $.trim($("#password").val());
    let confirmPassword = $.trim($("#confirmPassword").val());
    let image = $("#image")[0].files[0];
    if(firstName==""){
        flag = false;
        $("#firstName").parent().append('<span class="validation text-danger">Please enter your first name.</span>');
    }
    if(email==""){
        flag = false;
        $("#email").parent().append('<span class="validation text-danger">Please enter your email.</span>');
    }
    if(phone==""){
        flag = false;
        $("#phone").parent().append('<span class="validation text-danger">Please enter your phone.</span>');
    }
    if(address==""){
        flag = false;
        $("#address").parent().append('<span class="validation text-danger">Please enter your address.</span>');
    }
    if(password==""){
        flag = false;
        $("#password").parent().append('<span class="validation text-danger">Please enter your password.</span>');
    }if(confirmPassword==""){
        flag = false;
        $("#confirmPassword").parent().append('<span class="validation text-danger">Please enter your confirm password.</span>');
    }
    if(confirmPassword!="" && confirmPassword!=password ){
        flag = false;
        $("#confirmPassword").parent().append('<span class="validation text-danger">Password and confirm password are not same.</span>');
    }
    
    if (flag) {
        let formData = new FormData();
        formData.append("firstName", firstName);
        formData.append("lastName", lastName);
        formData.append("email", email);
        formData.append("phone", phone);
        formData.append("address", address);
        formData.append("password", password);
        formData.append("confirmPassword", confirmPassword);
        formData.append("image", image);
        let url = $('#baseUrl').val()+"/register"
        $.ajax({
            url: url,
            type: "POST",
            data: formData,
            caches: false,
            processData: false,
            contentType: false,
            success: function (response) {
                response = JSON.parse(response);
                if (response.status) {
                    Swal.fire({ icon: 'success', text: response.message }).then((result) => {
                        location.reload();
                    });
                } else {
                    Swal.fire({ icon: 'warning', text: response.message });11
                }
            },
        });
    }
});


$("#loginBtn").click(function () {
    $(".validation").remove();
    var flag = true;

    let email = $.trim($("#loginemail1").val());
    let password = $.trim($("#loginpass1").val());
   
    if(email==""){
        flag = false;
        $("#loginemail1").parent().append('<span class="validation text-danger">Please enter your email.</span>');
    }
    
    if(password==""){
        flag = false;
        $("#loginpass1").parent().append('<span class="validation text-danger">Please enter your password.</span>');
    }
    
    if (flag) {
        let formData = {
            'email'   : email,
            'password': password
        }
        let url = $('#baseUrl').val()+"/customer/login"
        $.ajax({
            url: url,
            type: "post",
            data: formData,
            success: function (response) {
                response = JSON.parse(response);
                if (response.status){
                    $("#modallog1").modal("hide");
                    Swal.fire({ icon: 'success', text: response.message, timer: 800 }).then((result) => {
                        location.reload();
                    });
                } else {
                    Swal.fire({ icon: 'warning', text: response.message });11
                }
            },
        });
    }
});


$('#modallog1').on('hidden.bs.modal', function (event) {
    $("#loginCardMsg").removeClass('d-none').addClass("d-none");
    if($("#productId").val()){
        location.reload();
    }  
})

$(document).on('keypress',function(e) {
    if(e.which == 13 && $.trim($("#loginemail1").val())!="") {
        $("#loginBtn").trigger('click');
    }
});



$("#forgotBtn").click(function () {
    $(".validation").remove();
    var flag = true;

    let email = $.trim($("#forgotEmail").val());
   
    if(email==""){
        flag = false;
        $("#forgotEmail").parent().append('<span class="validation text-danger">Please enter your email.</span>');
    }
    
    if (flag) {
        $("#forgotBtn").text("Please wait..")
        let formData = {
            'email'   : email
        }
        let url = $('#baseUrl').val()+"/customer/forgot"
        $.ajax({
            url: url,
            type: "post",
            data: formData,
            success: function (response) {
                response = JSON.parse(response);
                if (response.status){
                    $(".otp-email-form").addClass("d-none");
                    $(".verify-email-form").removeClass("d-none");
                    Swal.fire({ icon: 'success', text: response.message, timer: 3000 });
                } else {
                    Swal.fire({ icon: 'warning', text: response.message });11
                }
            },
        });
    }
});


$("#verifyBtn").click(function () {
    $(".validation").remove();
    var flag = true;
    let email = $.trim($("#forgotEmail").val());
    let otp   = $.trim($("#verifyOtp").val());
   
    if(otp==""){
        flag = false;
        $("#verifyOtp").parent().append('<span class="validation text-danger">Please enter your verification code.</span>');
    }
    
    if (flag) {
        let formData = {
            'email'   : email,
            'otp'     : otp,
        }
        let url = $('#baseUrl').val()+"/customer/verify-code"
        $.ajax({
            url: url,
            type: "post",
            data: formData,
            success: function (response) {
                response = JSON.parse(response);
                if (response.status){
                    $(".verify-email-form").addClass("d-none");
                    $(".update-password-form").removeClass("d-none");
                    //Swal.fire({ icon: 'success', text: response.message, timer: 3000 });
                } else {
                    Swal.fire({ icon: 'warning', text: response.message });
                }
            },
        });
    }
});

$("#changePassBtn").click(function () {
    $(".validation").remove();
    var flag = true;
    let email = $.trim($("#forgotEmail").val());
    let password   = $.trim($("#changePass").val());
    let confPass   = $.trim($("#changeConfirmPass").val());
   
    if(password==""){
        flag = false;
        $("#changePass").parent().append('<span class="validation text-danger">Please enter your password.</span>');
    }
    if(confPass==""){
        flag = false;
        $("#changeConfirmPass").parent().append('<span class="validation text-danger">Please enter your confirm password.</span>');
    }

    if(confPass!="" && password != confPass){
        flag = false;
        $("#changeConfirmPass").parent().append('<span class="validation text-danger">Password and confirm password are not same.</span>');
    }
    
    if (flag) {
        let formData = {
            'email'    : email,
            'password' : password,
            'confPass' : confPass,
        }
        let url = $('#baseUrl').val()+"/customer/update-password"
        $.ajax({
            url: url,
            type: "post",
            data: formData,
            success: function (response) {
                response = JSON.parse(response);
                if (response.status){
                    
                    $(".update-password-form").addClass("d-none");
                    $(".otp-email-form").removeClass("d-none");
                    $("#forget").modal("hide");
                    Swal.fire({ icon: 'success', text: response.message, timer: 3000});
                } else {
                    Swal.fire({ icon: 'warning', text: response.message });11
                }
            },
        });
    }
});
 


