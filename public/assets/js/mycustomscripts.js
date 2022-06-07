$(document).ready(function () {
    const BASEURL = $('#url').val();
    /* Profile Personal Information Update */
    $("#personalInfoForm").validate({
        errorClass: "is-invalid",
        rules: {
            user_email: {
                required: true,
                email: true,
            },
            user_phone: {
                required: true,
                minlength: 10,
                maxlength: 10
            },
        },
        messages: {
            user_email: {
                required: "Please enter your email",
                email: "Please enter valid email id",
            },
            user_phone: {
                required: "Please enter the Mobile Number",
                minlength: "Mobile Number length must be 10 digits ",
                maxlength: "Mobile Number length must be only 10 digits ",
            },
        },
        submitHandler: function (form) {
            let userid = $('#user_id').val();
            const BASEURL = $('#url').val();
            let formData = $('#personalInfoForm').serialize();
            let URL = BASEURL + '/save-personalinfo/' + userid;
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);
                    if (response.status) {
                        // Swal.fire({ icon: 'success', text: response.message });
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        // Notiflix.ssNotify.failure(response.message);
                        Swal.fire({ icon: 'error', text: response.message })
                    }
                }
            });
        }
    });

    /* Profile Security Update */
    $("#profileSecurity").validate({
        errorClass: "is-invalid",
        rules: {
            password: {
                required: true,
                minlength: 6,
            },
            confpassword: {
                required: true,
                minlength: 6,
                equalTo: "#Newpassword",
            },
        },
        messages: {
            password: {
                required: "Please enter your password",
                minlength: "Your password must be at least 6 characters long",
            },
            confpassword: {
                required: "Please enter your password",
                minlength: "Your password must be at least 6 characters long",
                equalTo: "Password does not match",
            },
        },
        submitHandler: function (form) {
            let userid = $('#user_id').val();
            const BASEURL = $('#url').val();
            let formData = $('#profileSecurity').serialize();
            let URL = BASEURL + '/reset-password/' + userid;
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);
                    if (response.status) {
                        $("#Newpassword").val('');
                        $("#confpassword").val('');
                        
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        }
    });

    /* Account Setting Social Link Update. */
    $("#SocialLinkForm").validate({
        errorClass: "is-invalid",
        rules: {
            company_phone_no: {
                required: true,
                minlength: 10,
                maxlength: 10,
            },
            company_name: {
                required: true,
                minlength: 6,
            },
        },
        messages: {
            company_phone_no: {
                required: "Please enter your Phone Number",
                minlength: "Your Phone Number must be at least 10 digits long",
                maxlength: "Your Phone Number must be at least 10 digits long",
            },
            company_name: {
                required: "Please enter your Company Name",
                minlength: "Your Company Name must be at least 6 characters long",
            },
        },
        submitHandler: function (form) {
            let userid = $('#user_id').val();
            const BASEURL = $('#url').val();
            let formData = $('#SocialLinkForm').serialize();
            let URL = BASEURL + '/social-link/' + userid;
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);
                    if (response.status) {
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        }
    });

    /* Account Setting Logo Update. */
    $('#logo').on('change', function () {
        const BASEURL = $('#url').val();
        var formData = new FormData();
        let userid = $('#user_id').val();
        formData.append('company_logo', $('#logo')[0].files[0]);

        $.ajax({
            url: BASEURL + '/upload-logo/' + userid,
            type: 'POST',
            data: formData,
            processData: false,  // tell jQuery not to process the data
            contentType: false,  // tell jQuery not to set contentType
            success: function (data) {
                if (data.status) {
                    $('#site_logo').val(data.path);
                }
            }
        });
    });

    /* Account Setting General Form Update. */
    $("#GeneralForm").validate({
        errorClass: "is-invalid",
        rules: {
            user_email: {
                required: true,
                email: true,
            },
            user_phone: {
                required: true,
                minlength: 10,
                maxlength: 10
            },
        },
        messages: {
            user_email: {
                required: "Please enter your email",
                email: "Please enter valid email id",
            },
            user_phone: {
                required: "Please enter the Mobile Number",
                minlength: "Password length must be 10 digits ",
                maxlength: "Password length must be only 10 digits ",
            },
        },
        submitHandler: function (form) {
            let userid = $('#user_id').val();
            const BASEURL = $('#url').val();
            let formData = $('#GeneralForm').serialize();
            let URL = BASEURL + '/save-general/' + userid;
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);
                    if (response.status) {
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        }
    });

    /* Account Setting Company Info Form Update.*/
    $("#ComponyInfoForm").validate({
        errorClass: "is-invalid",
        rules: {
            company_phone_no: {
                required: true,
                minlength: 10,
                maxlength: 10,
            },
            company_name: {
                required: true,
                minlength: 6,
            },
        },
        messages: {
            company_phone_no: {
                required: "Please enter your Phone Number",
                minlength: "Your Phone Number must be at least 10 digits long",
                maxlength: "Your Phone Number must be at least 10 digits long",
            },
            company_name: {
                required: "Please enter your Company Name",
                minlength: "Your Company Name must be at least 6 characters long",
            },
        },
        submitHandler: function (form) {
            let userid = $('#user_id').val();
            const BASEURL = $('#url').val();
            let formData = $('#ComponyInfoForm').serialize();
            let URL = BASEURL + '/compony-Info/' + userid;
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);
                    if (response.status) {
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        }
    });

    /* Account Setting Change Password Form Update. */
    $("#changePassForm").validate({
        errorClass: "is-invalid",
        rules: {
            password: {
                required: true,
                minlength: 6,
            },
            confpassword: {
                required: true,
                minlength: 6,
                equalTo: "#password",
            },
        },
        messages: {
            password: {
                required: "Please enter your password",
                minlength: "Your password must be at least 6 characters long",
            },
            confpassword: {
                required: "Please enter your password",
                minlength: "Your password must be at least 6 characters long",
                equalTo: "Password does not match",
            },
        },
        submitHandler: function (form) {
            let userid = $('#user_id').val();
            const BASEURL = $('#url').val();
            let formData = $('#changePassForm').serialize();
            let URL = BASEURL + '/reset-password/' + userid;
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);
                    if (response.status) {
                        $("#password").val('');
                        $("#confpassword").val('');
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        }
    });

    /* General Setting Business Type Form Submit and Update. */
    $("#masterBusiness").validate({
        errorClass: "is-invalid",
        rules: {
            business_type: {
                required: true,
            },
        },
        messages: {
            business_type: {
                required: "Please enter Business Types",
            },
        },
        submitHandler: function (form) {
            let business_id = '';
            let URL = '';
            business_id = $('#business_id').val();
            const BASEURL = $('#url').val();
            let formData = $('#masterBusiness').serialize();

            if (business_id == '') {
                URL = BASEURL + '/save-businesstype';
            } else {
                URL = BASEURL + '/update-business/' + business_id;
            }
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);
                    updateBusinessTable();
                    if (response.status) {
                        $('#business_id').val('');
                        $('#business_type').val('');
                        $("#activeStatus").prop("checked", true);
                        $('#submit_btn').text("Save");
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        }
    });

    /* General Setting Country Form Submit and Update. */
    $("#mastercountry").validate({
        errorClass: "is-invalid",
        rules: {
            country_name: {
                required: true,
            },
        },
        messages: {
            country_name: {
                required: "Please enter Country Name",
            },
        },
        submitHandler: function (form) {
            let country_id = '';
            let URL = '';
            country_id = $('#country_id').val();
            // const BASEURL = $('#url').val();
            let formData = $('#mastercountry').serialize();

            if (country_id == '') {
                URL = BASEURL + '/save-country';
            } else {
                URL = BASEURL + '/update-country/' + country_id;
            }
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);
                    updateCategoryTable();
                    if (response.status) {
                        $('#country_id').val('');
                        $('#country_name').val('');
                        $("#activeStatus").prop("checked", true);
                        $('#submit_btn').text("Save");
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        if (response.validation_error) {
                            Notiflix.Notify.warning(response.message);
                        } else {
                            Swal.fire({ icon: 'error', text: response.message });
                        }
                    }
                }
            });
        }
    });

    /* General Setting State Form Submit and Update. */
    $("#masterstate").validate({
        errorClass: "is-invalid",
        rules: {
            state_name: {
                required: true,
            },
            country_id: {
                required: true,
            },
        },
        messages: {
            state_name: {
                required: "Please enter State Name",
            },
            country_id: {
                required: "Please Select Category Name",
            },
        },
        submitHandler: function (form) {
            let counstate_idtry_id = '';
            let URL = '';
            state_id = $('#state_id').val();
            const BASEURL = $('#url').val();
            let formData = $('#masterstate').serialize();

            if (state_id == '') {
                URL = BASEURL + '/save-state';
            } else {
                URL = BASEURL + '/update-state/' + state_id;
            }
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);
                    updateStateTable();
                    if (response.status) {
                        $('#state_id').val('');
                        $('#state_name').val('');
                        $('#country_id').val('');
                        $("#activeStatus").prop("checked", true);
                        $('#submit_btn').text("Save");
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        }
    });

    /* General Setting City Form Submit and Update. */
    $("#mastercity").validate({
        errorClass: "is-invalid",
        rules: {
            city_name: {
                required: true,
            },
            state_id: {
                required: true,
            },
        },
        messages: {
            city_name: {
                required: "Please enter City Name",
            },
            state_id: {
                required: "Please Select State Name",
            },
        },
        submitHandler: function (form) {
            let city_id = '';
            let URL = '';
            city_id = $('#city_id').val();
            const BASEURL = $('#url').val();
            let formData = $('#mastercity').serialize();

            if (city_id == '') {
                URL = BASEURL + '/save-city';
            } else {
                URL = BASEURL + '/update-city/' + city_id;
            }
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);
                    updatecityTable();
                    if (response.status) {
                        $('#city_id').val('');
                        $('#city_name').val('');
                        $('#state_id').val('');
                        $("#activeStatus").prop("checked", true);
                        $('#submit_btn').text("Save");
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        }
    });

    /* General Setting City Form Submit and Update. */
    $("#masterlocality").validate({
        errorClass: "is-invalid",
        rules: {
            locality_name: {
                required: true,
            },
            city_id: {
                required: true,
            },
        },
        messages: {
            locality_name: {
                required: "Please enter Locality",
            },
            city_id: {
                required: "Please Select City Name",
            },
        },
        submitHandler: function (form) {
            let locality_id = '';
            let URL = '';
            locality_id = $('#locality_id').val();
            const BASEURL = $('#url').val();
            let formData = $('#masterlocality').serialize();

            if (locality_id == '') {
                URL = BASEURL + '/save-locality';
            } else {
                URL = BASEURL + '/update-locality/' + locality_id;
            }
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);
                    updateLocalityTable();
                    if (response.status) {
                        $('#locality_id').val('');
                        $('#locality_name').val('');
                        $('#city_id').val('');
                        $("#activeStatus").prop("checked", true);
                        $('#submit_btn').text("Save");
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        }
    });

    /* General Setting Pincode Form Submit and Update. */
    $("#masterpincode").validate({
        errorClass: "is-invalid",
        rules: {
            pincode: {
                required: true,
            },
            locality_id: {
                required: true,
            },
        },
        messages: {
            pincode: {
                required: "Please enter Pincode",
            },
            locality_id: {
                required: "Please Select Locality Name",
            },
        },
        submitHandler: function (form) {
            let pincode_id = '';
            let URL = '';
            pincode_id = $('#pincode_id').val();
            const BASEURL = $('#url').val();
            let formData = $('#masterpincode').serialize();

            if (pincode_id == '') {
                URL = BASEURL + '/save-pincode';
            } else {
                URL = BASEURL + '/update-pincode/' + pincode_id;
            }
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);
                    updatepincodeTable();
                    if (response.status) {
                        $('#pincode_id').val('');
                        $('#pincode').val('');
                        $('#locality_id').val('');
                        $("#activeStatus").prop("checked", true);
                        $('#submit_btn').text("Save");
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        if (response.validation_error) {
                            var errors_list = response.message;
                            if (errors_list.locality_id && errors_list.pincode) {
                                Notiflix.Notify.warning(errors_list.locality_id);
                                Notiflix.Notify.warning(errors_list.pincode);
                            } else if (errors_list.pincode) {
                                Notiflix.Notify.warning(errors_list.pincode);
                            } else if (errors_list.locality_id) {
                                Notiflix.Notify.warning(errors_list.locality_id);
                            }
                        } else {
                            Swal.fire({ icon: 'error', text: response.message });
                        }
                    }
                }
            });
        }
    });

    /* Manage Plugin Add Plugin Form Submit. */
    var form = $("#add-pluginForm");
    form.validate({
        errorClass: "is-invalid",
        rules: {
            first_name: {
                required: true,
            },
            last_name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            phone: {
                required: true,
                digits: true,
                minlength: 10,
                maxlength: 10,
            },
            country: {
                required: true,
            },
            business_name: {
                required: true,
                minlength: 5,
            },
            business_type: {
                required: true,
            },
            address: {
                required: true,
            },
            state: {
                required: true,
            },
            city: {
                required: true,
            },
            locality: {
                required: true,
            },
            pin_code: {
                required: true,
            },
            website_domain: {
                required: true,
                url: true
            },
        },
        messages: {
            first_name: {
                required: "Please enter First Name",
            },
            last_name: {
                required: "Please enter Last Name",
            },
            email: {
                required: "Email Address is required.",
                email: "Please enter a valid emailId.",
            },
            phone: {
                required: "Phone Number is required",
                digits: "Please enter a valid phone number.",
                minlength: "Please enter at least 10 digits.",
                maxlength: "Please enter no more than 10 digits.",
            },
            country: {
                required: "Country Name is required.",
            },
            business_name: {
                required: "Business Name is required.",
                minlength: "Business Name must be at least 5 characters in length. ",
            },
            business_type: {
                required: "Please Select Business Type.",
            },
            address: {
                required: "Address is required.",
            },
            state: {
                required: "Please Select state name.",
            },
            city: {
                required: "Please Select city name.",
            },
            locality: {
                required: "Please Select locality name.",
            },
            pin_code: {
                required: "Please Select pincode.",
            },
            website_domain: {
                required: "Website Name is required.",
                url: "Please Enter a valid website domain.",
            },
        }
    });

    // form.children("div").steps({
    //     headerTag: "h3",
    //     bodyTag: "section",
    //     // transitionEffect: "slideLeft",
    //     // enablePagination: true,
    //     onStepChanging: function (event, currentIndex, newIndex) {
    //         form.validate().settings.ignore = ":disabled,:hidden";
    //         return form.valid();
    //     },
    //     onFinishing: function (event, currentIndex) {
    //         form.validate().settings.ignore = ":disabled";
    //         return form.valid();
    //     },
    //     onFinished: function (event, currentIndex) {
    //         let formData = $('#add-pluginForm').serialize();
    //         let URL = BASEURL + '/save-plugins';
    //         $.ajax({
    //             url: URL,
    //             type: "POST",
    //             data: formData,
    //             success: function (response) {
    //                 response = JSON.parse(response);
    //                 if (response.status) {
    //                     Swal.fire({ icon: 'success', text: response.message });
    //                     refreshAdd_pluginPage();                      
    //                 } else {
    //                     if (response.validation_error) {
    //                         console.log(response.message.business_name);
    //                         $('#first_name_error').text(response.message.first_name);
    //                         $('#last_name_error').text(response.message.last_name);
    //                         $('#email_error').text(response.message.email);
    //                         $('#phone_error').text(response.message.phone);
    //                         $('#business_name_error').text(response.message.business_name);
    //                         $('#address_error').text(response.message.address);
    //                         $('#website_domain_error').text(response.message.website_domain);
    //                     } else {
    //                         Swal.fire({ icon: 'error', text: response.message });
    //                     }

    //                 }
    //             }
    //         });
    //     }

    // });

     /* Manage Plugin General Form  Plugin - Logo Update. */
     $('#plugin_logo').on('change', function () {  
        var plugin_id = $('#plugin_id').val();
        var file_data = $(this).prop('files')[0];  
        var form_data = new FormData();
        form_data.append("file", file_data);
        $.ajax({
                url: BASEURL+'/upload-plugin-logo/'+ plugin_id,
                dataType: 'script',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(){
                   alert("works"); 
                }
            });

    });

    /* Manage Plugin General Plugin Information Form Update. */
    $("#plugininfoupdate").validate({
        errorClass: "is-invalid",
        rules: {
            first_name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            phone: {
                required: true,
                minlength: 10,
                maxlength: 10,
                digits: true,
            },
        },
        messages: {
            first_name: {
                required: "Please enter User Name",
            },
            email: {
                required: "Please enter email Address",
                email: "Please enter a valid email Address",               
            },
            phone: {
                required: "Please enter phone number",
                digits: "Please enter a valid phone number.",
                minlength: "Please enter at least 10 digits.",
                maxlength: "Please enter no more than 10 digits.",

            },
        },
        submitHandler: function (form) {
           
            let plugin_id = '';
            let filename = '';
            plugin_id = $('#plugin_id').val();            
            let formData = $('#plugininfoupdate').serialize();           
            let URL = BASEURL + '/plugin-info-update/' + plugin_id; 
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);                   
                    if (response.status) {                        
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        }
    });

     /* Manage Plugin Change Password Form. */
     $("#pluginPassChange").validate({
        errorClass: "is-invalid",
        rules: {
            password: {
                required: true,
                minlength: 6,
            },
            confirmpassword: {
                required: true,
                equalTo: "#password"
            },
        },
        messages: {
            password: {
                required: "Please enter Password",
                minlength: "Min Length of password should be 6 Character",
            },
            confirmpassword: {
                required: "Confirm Passord is required",
                equalTo: "Confirm Password is not match"

            },
        },
        submitHandler: function (form) {
            let plugin_id = $('#plugin_id').val();            
            let formData = $('#pluginPassChange').serialize();           
            let URL = BASEURL + '/plugin-pass-update/' + plugin_id; 
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);                 
                    if (response.status) {                        
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        }
    });

    /* Manage Plugin Plugin Information Form Update. */
    $("#pluginupdate").validate({
        errorClass: "is-invalid",
        rules: {
            business_name: {
                required: true,
            },
            address: {
                required: true,               
            },
            country: {
                required: true,              
            },
            state: {
                required: true,              
            },
            city: {
                required: true,              
            },
            locality: {
                required: true,              
            },
            pin_code: {
                required: true,              
            },
            website_domain: {
                required: true, 
                url : true,             
            },
            plugin_appearance: {
                required: true,              
            },
        },
        messages: {
            business_name: {
                required: "Please enter Business Name",
            },
            address: {
                required: "Please enter Address",                          
            },
            country: {
                required: "Please select County",                          
            },
            state: {
                required: "Please select State",                          
            },
            city: {
                required: "Please select City",                          
            },
            locality: {
                required: "Please select Locality",                          
            },
            pin_code: {
                required: "Please select Pincode",                          
            },
            plugin_appearance: {
                required: "Please select plugin appearance",                          
            },
            website_domain: {
                required: "Website Name is required.",
                url: "Please Enter a valid website domain.",
            },
        },
        submitHandler: function (form) {
           
            let plugin_id = '';
            let filename = '';
            plugin_id = $('#plugin_id').val();            
            let formData = $('#pluginupdate').serialize();           
            let URL = BASEURL + '/pluginInfo-update/' + plugin_id; 
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);                   
                    if (response.status) {                        
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        }
    });

    /* Manage Plugin Plugin Information Form Update. */
    $("#pluginsocialupdate").validate({
        errorClass: "is-invalid",
        rules: {
            // business_name: {
            //     required: true,
            // },
        },
        messages: {
            // business_name: {
            //     required: "Please enter Business Name",
            // },
        },
        submitHandler: function (form) {
           
            let plugin_id = '';           
            plugin_id = $('#plugin_id').val();            
            let formData = $('#pluginsocialupdate').serialize();           
            let URL = BASEURL + '/plugin-social-update/' + plugin_id; 
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);                   
                    if (response.status) {                        
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        }
    });
    
    /* Manage Plugin Plugin Information Form Update. */
    $("#buyInventory").validate({
        errorClass: "is-invalid",
        rules: {
            purchaseInventory: {
                required: true,
            },
        },
        messages: {
            purchaseInventory: {
                required: "Purchase at least 1 inventory",
            },
        },
        submitHandler: function (form) {
             
            let formData = $('#buyInventory').serialize();           
            let URL = BASEURL + '/buy-inventory'; 
            $.ajax({
                url: URL,
                type: "POST",
                data: formData,
                success: function (response) {
                    response = JSON.parse(response);                   
                    if (response.status) {   
                        $('#purchaseInventory').val('');  
                        $('#total_amount').val('');  
                        updateInventoryTable();                       
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        }
    });

});

/* Buy Inventory caluclate Amount price using GST. */
function calculateTotalAmount(value){			
    var price = $('#price').val();
    var gst = (price * 18)/100;
    var total_price = price * value;
    var total_gst = gst * value;
    var total_amount = total_price + total_gst;
    $('#total_amount').val(total_amount);
    
}

function refreshAdd_pluginPage(){
    $('#first_name').val('');
    $('#last_name').val('');
    $('#email').val('');
    $('#phone').val('');
    $('#business_name').val('');
    $('#business_type').val('');
    $('#address').val('');
    $('#country').val('');
    $('#state').val('');
    $('#city').val('');
    $('#locality').val('');
    $('#pin_code').val('');
    $('#website_domain').val('');
}

/* General Setting State Table Data Fetch. */
function updateStateTable() {
    const BASEURL = $('#url').val();
    $.ajax({
        url: BASEURL + '/allstate',
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            if (data.status) {
                SetDataInStateTable(data.data)
            }
        }
    });
}

/* General Setting State  Table Data Set in Table. */
function SetDataInStateTable(data) {
    var num = 1;
    var table = $('#state_table').DataTable();
    let tbdata = [];
    if (data.length) {
        data.forEach(el => {
            var status1 = '';
            let action = `<button class='btn btn-outline-warning btn-sm' onclick="edit_stateFun(${el.id})">  <i class='fa fa-pencil-square-o' aria-hidden='true'></i> </button> <button class='btn btn-outline-danger btn-sm' onclick="delete_stateFun(${el.id});"> <i class='fa fa-trash' aria-hidden='true'></i>  </button>  `;
            if (el.status == 1) {
                status1 = ` <span class='badge badge-pill badge-success'>Active</span>  `;
            } else {
                status1 = ` <span class='badge badge-pill badge-danger'>Inactive</span> `;
            }
            let rowData = [
                num,
                el.state_name,
                el.country_name,
                status1,
                action
            ];
            tbdata.push(rowData);
            num++;
        });
    }
    table.destroy();
    $('#state_table').DataTable({
        data: tbdata
    });
}

/* General Setting State Delete Click. */
function delete_stateFun(value) {
    Notiflix.Confirm.show(
        'Deletion Confirm',
        'Are you sure you want to delete this record?',
        'Yes',
        'No',
        function okCb() {
            const BASEURL = $('#url').val();
            $.ajax({
                url: BASEURL + '/delete-state/' + value,
                type: 'POST',
                success: function (data) {
                    response = JSON.parse(data);
                    updateStateTable();
                    if (response.status) {
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        },
        function cancelCb() {
            Notiflix.Report.info('Your record is safe.', '', 'close');
        },
        {
            width: '320px',
            borderRadius: '8px',
        },
    );
}

/* General Setting State Edit Click  */
function edit_stateFun(value) {
    const BASEURL = $('#url').val();
    $.ajax({
        url: BASEURL + '/edit-state/' + value,
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            if (data.status) {
                $('#state_id').val(data.data.id);
                $('#state_name').val(data.data.state_name);
                $('#country_id').val(data.data.country_id);
                if (data.data.status == '1') {
                    $("#activeStatus").prop("checked", true);
                } else {
                    $("#inactiveStatus").prop("checked", true);
                }
                $('#submit_btn').text("Update");
            }
        }
    });
}

/* General Setting Business Type Edit Click. */
function edit_businessFun(value) {
    const BASEURL = $('#url').val();
    $.ajax({
        url: BASEURL + '/edit-business/' + value,
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            console.log(data);
            if (data.status) {
                $('#business_id').val(data.data.id);
                $('#business_type').val(data.data.business_type);
                if (data.data.status == '1') {
                    $("#activeStatus").prop("checked", true);
                } else {
                    $("#inactiveStatus").prop("checked", true);
                }
                $('#submit_btn').text("Update");
            }
        }
    });
}

/* General Setting Business Type Delete Click. */
function delete_businessFun(value) {

    Notiflix.Confirm.show(
        'Deletion Confirm',
        'Are you sure you want to delete this record?',
        'Yes',
        'No',
        function okCb() {
            const BASEURL = $('#url').val();
            $.ajax({
                url: BASEURL + '/delete-business/' + value,
                type: 'POST',
                success: function (data) {
                    response = JSON.parse(data);
                    updateBusinessTable();
                    if (response.status) {
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        },
        function cancelCb() {
            Notiflix.Report.info('Your record is safe.', '', 'close');
        },
        {
            width: '320px',
            borderRadius: '8px',
            // etc...
        },
    );

}

/* General Setting Business Type Table Data Fetch. */
function updateBusinessTable() {
    const BASEURL = $('#url').val();
    $.ajax({
        url: BASEURL + '/allBusiness',
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            if (data.status) {
                SetDataInTable(data.data)
            }
        }
    });
}

/* General Setting Business Type Table Data Set in Table. */
function SetDataInTable(data) {
    var num = 1;
    var table = $('#business_table').DataTable();
    let tbdata = [];
    if (data.length) {
        data.forEach(el => {
            var status1 = '';
            let action = `<button class='btn btn-outline-warning btn-sm' onclick="edit_businessFun(${el.id})">  <i class='fa fa-pencil-square-o' aria-hidden='true'></i> </button> <button class='btn btn-outline-danger btn-sm' onclick="delete_businessFun(${el.id});"> <i class='fa fa-trash' aria-hidden='true'></i>  </button>  `;
            if (el.status == 1) {
                status1 = ` <span class='badge badge-pill badge-success'>Active</span>  `;
            } else {
                status1 = ` <span class='badge badge-pill badge-danger'>Inactive</span> `;
            }
            let rowData = [
                num,
                el.business_type,
                status1,
                action
            ];
            tbdata.push(rowData);
            num++;
        });
    }
    table.destroy();
    $('#business_table').DataTable({
        data: tbdata
    });

}

/* General Setting Country Edit Click. */
function edit_CountryFun(value) {
    const BASEURL = $('#url').val();
    $.ajax({
        url: BASEURL + '/edit-country/' + value,
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            if (data.status) {
                $('#country_id').val(data.data.id);
                $('#country_name').val(data.data.country_name);
                if (data.data.status == '1') {
                    $("#activeStatus").prop("checked", true);
                } else {
                    $("#inactiveStatus").prop("checked", true);
                }
                $('#submit_btn').text("Update");
            }
        }
    });
}

/* General Setting Country Delete Click. */
function delete_CountryFun(value) {

    Notiflix.Confirm.show(
        'Deletion Confirm',
        'Are you sure you want to delete this record?',
        'Yes',
        'No',
        function okCb() {
            const BASEURL = $('#url').val();
            $.ajax({
                url: BASEURL + '/delete-country/' + value,
                type: 'POST',
                success: function (data) {
                    response = JSON.parse(data);
                    updateCategoryTable();
                    if (response.status) {
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        },
        function cancelCb() {
            Notiflix.Report.info('Your record is safe.', '', 'close');
        },
        {
            width: '320px',
            borderRadius: '8px',
            // etc...
        },
    );

}

/* General Setting Country Table Data Fetch. */
function updateCategoryTable() {
    const BASEURL = $('#url').val();
    $.ajax({
        url: BASEURL + '/allcountry',
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            if (data.status) {
                SetDataInCategoryTable(data.data)
            }
        }
    });
}

/* General Setting Country Table Data Set in Table. */
function SetDataInCategoryTable(data) {
    var num = 1;
    var table = $('#country_table').DataTable();
    let tbdata = [];
    if (data.length) {
        data.forEach(el => {
            var status1 = '';
            let action = `<button class='btn btn-outline-warning btn-sm' onclick="edit_CountryFun(${el.id})">  <i class='fa fa-pencil-square-o' aria-hidden='true'></i> </button> <button class='btn btn-outline-danger btn-sm' onclick="delete_CountryFun(${el.id});"> <i class='fa fa-trash' aria-hidden='true'></i>  </button>  `;
            if (el.status == 1) {
                status1 = ` <span class='badge badge-pill badge-success'>Active</span>  `;
            } else {
                status1 = ` <span class='badge badge-pill badge-danger'>Inactive</span> `;
            }
            let rowData = [
                num,
                el.country_name,
                status1,
                action
            ];
            tbdata.push(rowData);
            num++;
        });
    }
    table.destroy();
    $('#country_table').DataTable({
        data: tbdata
    });

}

/* General Setting City Edit Click. */
function edit_cityFun(value) {
    const BASEURL = $('#url').val();
    $.ajax({
        url: BASEURL + '/edit-city/' + value,
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            if (data.status) {
                $('#city_id').val(data.data.id);
                $('#city_name').val(data.data.city_name);
                $('#state_id').val(data.data.state_id);
                if (data.data.status == '1') {
                    $("#activeStatus").prop("checked", true);
                } else {
                    $("#inactiveStatus").prop("checked", true);
                }
                $('#submit_btn').text("Update");
            }
        }
    });
}

/* General Setting City Delete Click. */
function delete_cityFun(value) {

    Notiflix.Confirm.show(
        'Deletion Confirm',
        'Are you sure you want to delete this record?',
        'Yes',
        'No',
        function okCb() {
            const BASEURL = $('#url').val();
            $.ajax({
                url: BASEURL + '/delete-city/' + value,
                type: 'POST',
                success: function (data) {
                    response = JSON.parse(data);
                    updatecityTable();
                    if (response.status) {
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        },
        function cancelCb() {
            Notiflix.Report.info('Your record is safe.', '', 'close');
        },
        {
            width: '320px',
            borderRadius: '8px',
            // etc...
        },
    );

}

/* General Setting City Table Data Fetch. */
function updatecityTable() {
    const BASEURL = $('#url').val();
    $.ajax({
        url: BASEURL + '/allcity',
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            if (data.status) {
                SetDataIncityTable(data.data)
            }
        }
    });
}

/* General Setting City Table Data Set in Table. */
function SetDataIncityTable(data) {
    var num = 1;
    var table = $('#city_table').DataTable();
    let tbdata = [];
    if (data.length) {
        data.forEach(el => {
            var status1 = '';
            let action = `<button class='btn btn-outline-warning btn-sm' onclick="edit_cityFun(${el.id})">  <i class='fa fa-pencil-square-o' aria-hidden='true'></i> </button> <button class='btn btn-outline-danger btn-sm' onclick="delete_cityFun(${el.id});"> <i class='fa fa-trash' aria-hidden='true'></i>  </button>  `;
            if (el.status == 1) {
                status1 = ` <span class='badge badge-pill badge-success'>Active</span>  `;
            } else {
                status1 = ` <span class='badge badge-pill badge-danger'>Inactive</span> `;
            }
            let rowData = [
                num,
                el.city_name,
                el.state_name,
                status1,
                action
            ];
            tbdata.push(rowData);
            num++;
        });
    }
    table.destroy();
    $('#city_table').DataTable({
        data: tbdata
    });

}

/* General Setting Locality Edit Click. */
function edit_localityFun(value) {
    const BASEURL = $('#url').val();
    $.ajax({
        url: BASEURL + '/edit-locality/' + value,
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            if (data.status) {
                $('#locality_id').val(data.data.id);
                $('#locality_name').val(data.data.locality_name);
                $('#city_id').val(data.data.city_id);
                if (data.data.status == '1') {
                    $("#activeStatus").prop("checked", true);
                } else {
                    $("#inactiveStatus").prop("checked", true);
                }
                $('#submit_btn').text("Update");
            }
        }
    });
}

/* General Setting Locality Delete Click. */
function delete_localityFun(value) {

    Notiflix.Confirm.show(
        'Deletion Confirm',
        'Are you sure you want to delete this record?',
        'Yes',
        'No',
        function okCb() {
            const BASEURL = $('#url').val();
            $.ajax({
                url: BASEURL + '/delete-locality/' + value,
                type: 'POST',
                success: function (data) {
                    response = JSON.parse(data);
                    updateLocalityTable();
                    if (response.status) {
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        },
        function cancelCb() {
            Notiflix.Report.info('Your record is safe.', '', 'close');
        },
        {
            width: '320px',
            borderRadius: '8px',
            // etc...
        },
    );

}

/* General Setting Locality Table Data Fetch. */
function updateLocalityTable() {
    const BASEURL = $('#url').val();
    $.ajax({
        url: BASEURL + '/alllocality',
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            if (data.status) {
                SetDataInlocalityTable(data.data)
            }
        }
    });
}

/* General Setting Locality Table Data Set in Table. */
function SetDataInlocalityTable(data) {
    var num = 1;
    var table = $('#locality_table').DataTable();
    let tbdata = [];
    if (data.length) {
        data.forEach(el => {
            var status1 = '';
            let action = `<button class='btn btn-outline-warning btn-sm' onclick="edit_localityFun(${el.id})">  <i class='fa fa-pencil-square-o' aria-hidden='true'></i> </button> <button class='btn btn-outline-danger btn-sm' onclick="delete_localityFun(${el.id});"> <i class='fa fa-trash' aria-hidden='true'></i>  </button>  `;
            if (el.status == 1) {
                status1 = ` <span class='badge badge-pill badge-success'>Active</span>  `;
            } else {
                status1 = ` <span class='badge badge-pill badge-danger'>Inactive</span> `;
            }
            let rowData = [
                num,
                el.locality_name,
                el.city_name,
                status1,
                action
            ];
            tbdata.push(rowData);
            num++;
        });
    }
    table.destroy();
    $('#locality_table').DataTable({
        data: tbdata
    });

}

/* General Setting Pincode Edit Click. */
function edit_pincodeFun(value) {
    const BASEURL = $('#url').val();
    $.ajax({
        url: BASEURL + '/edit-pincode/' + value,
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            if (data.status) {
                $('#pincode_id').val(data.data.id);
                $('#pincode').val(data.data.pincode);
                $('#locality_id').val(data.data.locality_id);
                if (data.data.status == '1') {
                    $("#activeStatus").prop("checked", true);
                } else {
                    $("#inactiveStatus").prop("checked", true);
                }
                $('#submit_btn').text("Update");
            }
        }
    });
}

/* General Setting Pincode Delete Click. */
function delete_pincodeFun(value) {
    Notiflix.Confirm.show(
        'Deletion Confirm',
        'Are you sure you want to delete this record?',
        'Yes',
        'No',
        function okCb() {
            const BASEURL = $('#url').val();
            $.ajax({
                url: BASEURL + '/delete-pincode/' + value,
                type: 'POST',
                success: function (data) {
                    response = JSON.parse(data);
                    updatepincodeTable();
                    if (response.status) {
                        Swal.fire({ icon: 'success', text: response.message });
                    } else {
                        Swal.fire({ icon: 'error', text: response.message });
                    }
                }
            });
        },
        function cancelCb() {
            Notiflix.Report.info('Your record is safe.', '', 'close');
        },
        {
            width: '320px',
            borderRadius: '8px',
            // etc...
        },
    );

}

/* General Setting Pincode Table Data Fetch. */
function updatepincodeTable() {
    const BASEURL = $('#url').val();
    $.ajax({
        url: BASEURL + '/allpincode',
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            if (data.status) {
                SetDataInpincodeTable(data.data)
            }
        }
    });
}

/* General Setting Pincode Table Data Set in Table. */
function SetDataInpincodeTable(data) {
    var num = 1;
    var table = $('#pincode_table').DataTable();
    let tbdata = [];
    if (data.length) {
        data.forEach(el => {
            var status1 = '';
            let action = `<button class='btn btn-outline-warning btn-sm' onclick="edit_pincodeFun(${el.id})">  <i class='fa fa-pencil-square-o' aria-hidden='true'></i> </button> <button class='btn btn-outline-danger btn-sm' onclick="delete_pincodeFun(${el.id});"> <i class='fa fa-trash' aria-hidden='true'></i>  </button>  `;
            if (el.status == 1) {
                status1 = ` <span class='badge badge-pill badge-success'>Active</span>  `;
            } else {
                status1 = ` <span class='badge badge-pill badge-danger'>Inactive</span> `;
            }
            let rowData = [
                num,
                el.pincode,
                el.locality_name,
                status1,
                action
            ];
            tbdata.push(rowData);
            num++;
        });
    }
    table.destroy();
    $('#pincode_table').DataTable({
        data: tbdata
    });

}

/* Add Plugins Page -- get states onchange Country. */
function getActiveSateById(value) {
    const BASEURL = $('#url').val();
    let optionFields = `<option value=''>select</option>`;
    $.ajax({
        url: BASEURL + '/get-state/' + value,
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            var options_data = data.data;
            if (data.status) {
                if (options_data.length > 0) {
                    options_data.forEach(vals => {
                        optionFields += `<option value='${vals.id}'>${vals.state_name}</option>`;
                    });
                }
            }
            $('#state').html(optionFields);
            $('#city').html(`<option value=''>select</option>`);
            $('#locality').html(`<option value=''>select</option>`);
            $('#pin_code').html(`<option value=''>select</option>`);
        }
    });
}

/* Add Plugins Page -- get city onchange State. */
function getActiveCityById(value) {
    const BASEURL = $('#url').val();
    let optionFields = `<option value=''>select</option>`;
    $.ajax({
        url: BASEURL + '/get-city/' + value,
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            var options_data = data.data;
            if (data.status) {
                if (options_data.length > 0) {
                    options_data.forEach(vals => {
                        optionFields += `<option value='${vals.id}'>${vals.city_name}</option>`;
                    });
                }
            }
            $('#city').html(optionFields);
            $('#locality').html(`<option value=''>select</option>`);
            $('#pin_code').html(`<option value=''>select</option>`);
        }
    });
}

/* Add Plugins Page -- get locality onchange City. */
function getActiveLocalityById(value) {
    const BASEURL = $('#url').val();
    let optionFields = `<option value=''>select</option>`;
    $.ajax({
        url: BASEURL + '/get-locality/' + value,
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            var options_data = data.data;
            if (data.status) {
                if (options_data.length > 0) {
                    options_data.forEach(vals => {
                        optionFields += `<option value='${vals.id}'>${vals.locality_name}</option>`;
                    });
                }
            }
            $('#locality').html(optionFields);
            $('#pin_code').html(`<option value=''>select</option>`);
        }
    });
}

/* Add Plugins Page -- get pincode onchange Locality. */
function getActivePincodeById(value) {
    const BASEURL = $('#url').val();
    let optionFields = `<option value=''>select</option>`;
    $.ajax({
        url: BASEURL + '/get-pincode/' + value,
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            var options_data = data.data;
            if (data.status) {
                if (options_data.length > 0) {
                    options_data.forEach(vals => {
                        optionFields += `<option value='${vals.id}'>${vals.pincode}</option>`;
                    });
                }
            }
            $('#pin_code').html(optionFields);
        }
    });
}

 /* Inventory Management Table Data Fetch. */
function updateInventoryTable() {
    const BASEURL = $('#url').val();
    $.ajax({
        url: BASEURL + '/allInventory',
        type: 'GET',
        success: function (data) {
            data = JSON.parse(data);
            if (data.status) {
                SetDataInInventoryTable(data.data)
            }
        }
    });
}

/*Inventory Management Table Data Set in Table. */
function SetDataInInventoryTable(data) {
    var num = 1;
    var table = $('#inventory-table').DataTable();
    let tbdata = [];
    if (data.length) {
        data.forEach(el => {
            let action = '';
            if (el.status ==1){
                action = "Active";
            }else{
                action = "Inactive";
            }
                     
            let rowData = [
                num,
                el.purchase_date,
                el.payment_id,
                el.total_amount,
                el.purchase_inventry,
                action
            ];
            tbdata.push(rowData);
            num++;
        });
    }
    table.destroy();
    $('#inventory-table').DataTable({
        data: tbdata
    });

}