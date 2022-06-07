$(document).ready(function(){
  $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
      localStorage.setItem('clientActiveTab', $(e.target).attr('href'));
  });
  var clientActiveTab = localStorage.getItem('clientActiveTab');
  if(clientActiveTab){
      $('#panel555 a[href="' + clientActiveTab + '"]').tab('show');
  }
});

$(document).ready(function () {
  const BASEURL = $("#url").val();
  /* Business Information Update --- Other */
  $("#OtherBusinessInfo").validate({
    errorClass: "is-invalid",
    rules: {
      business_name: {
        required: true,
      },
      domain_url: {
        required: true,
        url: true,
      },
      font_size: {
        required: true,
      },
      business_description: {
        required: true,
      },
    },
    messages: {
      business_name: {
        required: "Please enter business name",
      },
      domain_url: {
        required: "Please enter Domain URL",
        url: "Please Enter a valid URL",
      },
      font_size: {
        required: "Please enter Font Size",
      },
      business_description: {
        required: "Please enter Business description",
      },
    },
    submitHandler: function (form) {
      let formData = "";
      var id  = document.getElementById('OtherBusinessInfo');
      //$("#OtherBusinessInfo").serialize();
      formData = new FormData(id);
      $.ajax({
        url: BASEURL + "/manage/other-business-info/" + $("#user_id").val(),
        type: "POST",
        data: formData,
        caches: false,
        contentType: false,
        processData:false,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            // Notiflix.Notify.success(response.message);
            Swal.fire({ icon: "success", text: response.message });
          } else {
            //Notiflix.Notify.failure(response.message);
            Swal.fire({ icon: "success", text: response.message });
          }
        },
      });
    },
  });

  /* Contact Information Update --- Other */
  $("#OtherContact").validate({
    errorClass: "is-invalid",
    rules: {
      business_address: {
        required: true,
      },
    },
    messages: {
      business_address: {
        required: "Please enter business address",
      },
    },
    submitHandler: function (form) {
      let userid = $("#user_id").val();
      let formData = $("#OtherContact").serialize();
      let URL = BASEURL + "/manage/other-contact/" + userid;
      $.ajax({
        url: URL,
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            //Notiflix.Notify.success(response.message);
            Swal.fire({icon: 'success', text: response.message});
          } else {
            //Notiflix.Notify.failure(response.message);
            Swal.fire({icon: 'error', text: response.message});
          }
        },
      });
    },
  });

  /* currency Update --- other . */
  $("#OtherCurrency").validate({
    errorClass: "is-invalid",
    submitHandler: function (form) {
      let userid = $("#user_id").val();
      let formData = $("#OtherCurrency").serialize();
      let URL = BASEURL + "/manage/other-currency/" + userid;
      $.ajax({
        url: URL,
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            Swal.fire({icon:'success', text: 'Currency updated successfully.'});
          } else {
            Swal.fire({icon:'success', text: 'Currency update unsuccessfully.'});
          }
        },
      });
    },
  });

  const uploadFiles = (fileName, url) => {
    let form_data = new FormData();
    var ins = document.getElementById(`${fileName}`).files.length;
    for (var x = 0; x < ins; x++) {
      form_data.append(
        "files[]",
        document.getElementById(`${fileName}`).files[x]
      );
    }

    $.ajax({
      url: url,
      type: "POST",
      data: form_data,
      async: false,
      cache: false,
      contentType: false,
      processData: false,
      success: function (data, status) {
        console.log(data);
      },
      error: function (jqxhr, status) {
        // let res = JSON.parse(jqxhr.responseText);

        console.log(jqxhr);
      },
    });
  };

  /* Theme Color Form Update. -- other */
  $("#ThemeColorForm").validate({
    errorClass: "is-invalid",
    rules: {
      user_email: {
        required: true,
        email: true,
      },
      user_phone: {
        required: true,
        minlength: 10,
        maxlength: 10,
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
      let userid = $("#user_id").val();
      let formData = $("#ThemeColorForm").serialize();
      let URL = BASEURL + "/manage/theme-color/" + userid;
      console.log(URL);
      $.ajax({
        url: URL,
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            Swal.fire({icon:'success', text: response.message})
           } else {
             Swal.fire({icon:'error', text: response.message})
           }
        },
      });
    },
  });

  /*Razorpay Settings Update --- other.*/
  $("#RazorpayForm").validate({
    submitHandler: function (form) {
      let userid = $("#user_id").val();
      let formData = $("#RazorpayForm").serialize();
      let URL = BASEURL + "/manage/razorpay-settings/" + userid;
      $.ajax({
        url: URL,
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
           Swal.fire({icon:'success', text: response.message})
          } else {
            Swal.fire({icon:'error', text: response.message})
          }
        },
      });
    },
  });

  /* Appearance Header And Footer save and Update. ---- other */
  $("#headerFooterUpdate").validate({
    errorClass: "is-invalid",
    rules: {
      header_background: {
        required: true,
      },
      header_text: {
        required: true,
      },
      navbar_background: {
        required: true,
      },
      navbar_text: {
        required: true,
      },
      searchbar_color: {
        required: true,
      },
      footer_background: {
        required: true,
      },
      footer_text_color: {
        required: true,
      },
      footer_text: {
        required: true,
      },
      copyright_text: {
        required: true,
      },
      sitemap: {
        required: true,
        url: true,
      },
    },
    messages: {
      header_background: {
        required: "Header Background color is required.",
      },
      header_text: {
        required: "Header Text color is required.",
      },
      navbar_background: {
        required: "Navbar Background color is required.",
      },
      navbar_text: {
        required: "Navbar text color is required.",
      },
      searchbar_color: {
        required: "Search color is required.",
      },
      footer_background: {
        required: "Footer Background color is required.",
      },
      footer_text_color: {
        required: "Footer text color is required.",
      },
      footer_text: {
        required: "Footer text is required.",
      },
      sitemap: {
        required: "Sitemap is required.",
        url: "Please enter a valid sitemap URL.",
      },
      copyright_text: {
        required: "Copyright text is required.",
      },
    },
    submitHandler: function (form) {
      let URL = "";
      let header_id = "";
      header_id = $("#header_id").val();
      let formData = $("#headerFooterUpdate").serialize();
      if (header_id == "") {
        URL = BASEURL + "/header-footer-save";
      } else {
        URL = BASEURL + "/manage/header-footer-update/" + header_id;
      }

      $.ajax({
        url: URL,
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            Swal.fire({icon:'success', text: response.message})
           } else {
             Swal.fire({icon:'error', text: response.message})
           }
        },
      });
    },
  });

  /* Menus Submit and Update. ---- other */
  $("#CreateMenus").validate({
    errorClass: "is-invalid",
    rules: {
      menu_name: {
        required: true,
      },
    },
    messages: {
      menu_name: {
        required: "Please enter Menue Name",
      },
    },
    submitHandler: function (form) {
      let formData = $("#CreateMenus").serialize();
      $.ajax({
        url: BASEURL + "/manage/save-menus",
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            $("#menu_name").val("");
            Swal.fire({icon:'success', text: response.message}).then((result) => {
              location.reload();
            });
          } else {
            Swal.fire({icon:'error', text: response.message});
          }
        },
      });
    },
  });

  /* Default Menus Form Submit -- other */
  $("#DefaultMenus").validate({
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
      let formData = $("#DefaultMenus").serialize();
      $.ajax({
        url: BASEURL + "/manage/save-default-menus",
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            getDefaultMenu(BASEURL);
            Notiflix.Notify.success(response.message);
          } else {
            Notiflix.Notify.failure(response.message);
          }
        },
      });
    },
  });

  /* Set Sub Menus Form Submit -- other */
  $("#SetSubMenu").validate({
    errorClass: "is-invalid",
    rules: {
      parent_menu_name: {
        required: true,
      },
      menu_name: {
        required: true,
      },
    },
    messages: {
      parent_menu_name: {
        required: "Please select Menu.",
      },
      menu_name: {
        required: "Please enter Sub Menu Name",
      },
    },
    submitHandler: function (form) {
      let formData = $("#SetSubMenu").serialize();
      $.ajax({
        url: BASEURL + "/manage/save-sub-menus",
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            Swal.fire({icon:'success', text: response.message}).then((result) => {
              location.reload();
            });
          } else {
            Swal.fire({icon:'error', text: response.message});
          }
        },
      });
    },
  });

  /* Set Sub Menus Form Submit -- other */
  $("#FooterMenu").validate({
    errorClass: "is-invalid",
    rules: {
      menu_name: {
        required: true,
      },
    },
    messages: {
      menu_name: {
        required: "Please enter Footer Menu Name",
      },
    },
    submitHandler: function (form) {
      let formData = $("#FooterMenu").serialize();
      $.ajax({
        url: BASEURL + "/manage/save-footer-menus",
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            Swal.fire({icon:'success', text: response.message}).then((result) => {
              location.reload();
            });
          } else {
            Swal.fire({icon:'error', text: response.message});
          }
        },
      });
    },
  });

  /* Update List Menu order Form Submit -- other */
  $("#UpdateListMenue").validate({
    submitHandler: function (form) {
      var form_data = [];
      $("#UpdateListMenue ul li").each(function () {
        form_data.push($(this).val());
      });
      var myData = {
        sorting_order: form_data
      };

      $.ajax({
        url: BASEURL + "/manage/save-menus-sortings",
        type: "POST",
        data: myData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            $("#menu_name").val("");
            Swal.fire({icon:'success', text: response.message});
          } else {
            Swal.fire({icon:'error', text: response.message});
          }
        },
      });
    },
  });

  /* Add Slider Section Form Submit -- other */
  $("#AddSlidersSection").validate({
    errorClass: "is-invalid",
    rules: {
      section_name: {
        required: true,
      },
      page_id: {
        required: true,
      },
      slider: {
        required: true,
      },
    },
    messages: {
      section_name: {
        required: "Slider Section name is required.",
      },
      page_id: {
        required: "Please select page.",
      },
      slider: {
        required: "Please select slider.",
      },
    },
    submitHandler: function (form) {
      var sectionid = "";
      var path = "";
      let formData = $("#AddSlidersSection").serialize();
      sectionid = $("#sectionid").val();

      if (sectionid == "") {
        path = BASEURL + "/manage/add-slider-section";
      } else {
        path = BASEURL + "/manage/update-slider-section/" + sectionid;
      }
      $.ajax({
        url: path,
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            $("#section_name").val("");
            $("#page_id").val([]);
            $("#page_id").trigger("change");
            $("#slider").val([]);
            $("#slider").trigger("change");
            Swal.fire({icon:'success', text: response.message}).then((result) => {
              location.reload();
            });
          } else {
            Swal.fire({icon:'error', text: response.message});
          }
        },
      });
    },
  });

  /* Add New Slider Form Submit -- other */
  $("#AddNewSliders").validate({
    errorClass: "is-invalid",
    rules: {
      name: {
        required: true,
      },
    },
    messages: {
      name: {
        required: "Slider name is required.",
      },
    },
    submitHandler: function (form) {
      let data = document.getElementById('AddNewSliders');
      let formData = new FormData(data);
     
      $.ajax({
        url: BASEURL + "/manage/save-slider",
        type: "POST",
        data: formData,
        caches:false,
        processData:false,
        contentType: false,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            $("#name").val("");
            $("#title").val("");
            $("#description").val("");
            $("#slider_image").val("");
            $(".img-preview-img").attr('src',"");
            Swal.fire({icon: 'success', text: response.message});
          } else {
            if (response.validation) {
              Swal.fire({icon: 'warning', text: response.message});
            } else {
              Swal.fire({icon: 'error', text: response.message});
            }
          }
        },
      });
    },
  });

  /* Edit Slider Form Submit -- other */
  $("#EditSliders").validate({
    errorClass: "is-invalid",
    rules: {
      // slider_image: {
      //     required: true,
      // },
      name: {
        required: true,
      },
    },
    messages: {
      // slider_image: {
      //     required: "Please Choose Slider Image.",
      // },
      name: {
        required: "Slider Name is Required.",
      },
    },
    submitHandler: function (form) {
      let data = document.getElementById('EditSliders');
      let formData = new FormData(data);
      let slider_id = $("#slider_id").val();
      $.ajax({
        url: BASEURL + "/manage/update-slider/" + slider_id,
        type: "POST",
        data: formData,
        caches:false,
        contentType:false,
        processData: false,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            swal.fire({icon:'success', text: response.message});
          } else {
            swal.fire({icon:'error', text: response.message});
          }
        },
      });
    },
  });

  /* Slider Image Upload -- other */
  // $("#slider_image").on("change", function () {
  //   var formData = new FormData();
  //   formData.append("slider_image", $("#slider_image")[0].files[0]);

  //   $.ajax({
  //     url: BASEURL + "/upload-slider-image",
  //     type: "POST",
  //     data: formData,
  //     processData: false, // tell jQuery not to process the data
  //     contentType: false, // tell jQuery not to set contentType
  //     success: function (data) {
  //       // if (data.status) {
  //       //     $('#site_logo').val(data.path);
  //       // }
  //     },
  //   });
  // });

  /* Add Custom Section Form Submit and Update -- other */
  $("#AddCustomSection").validate({
    errorClass: "is-invalid",
    rules: {
      page_id: {
        required: true,
      },
      position: {
        required: true,
      },
      heading: {
        required: true,
      },
    },
    messages: {
      page_id: {
        required: "Please select Page.",
      },
      position: {
        required: "Please select position.",
      },
      heading: {
        required: "Heading is required.",
      },
    },
    submitHandler: function (form) {
      let section_id = "";
      let path = "";
      section_id = $("#section_id").val();
      let data = document.getElementById("AddCustomSection");
      let formData = new FormData(data);
      var abc = CKEDITOR.instances.description.getData();
      formData.append('des', abc);      
      if (section_id == "") {
        path = BASEURL + "/manage/save-custom-section";
      } else {
        path = BASEURL + "/manage/update-custom-section/" + section_id;
      }
      $.ajax({
        url: path,
        type: "POST",
        data: formData,
        cache:false,
        processData:false,
        contentType:false,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            // $("#section_id").val("");
            // $("#page_id").val("");
            // $("#heading").val("");
            // $("#position").val("");
            // CKEDITOR.instances["description"].setData("");
            // $("#offcanvasRightLabel").text("Add Custom Section");
            // $("#section_btn").text("Save");
            // $("#offcanvasRight").offcanvas("hide");
            Swal.fire({icon:'success', text:response.message}).then((result) => {
              location.reload();
            });
          } else {
            if (response.validation) {
              Swal.fire({icon:'warning', text:response.message});
            } else {
              Swal.fire({icon:'error', text:response.message});
            }
          }
        },
      });
    },
  });

  /* Add Service Form Submit and Update -- other */
  $("#SaveServiceForm").validate({
    errorClass: "is-invalid",
    rules: {
      service: {
        required: true,
      },
      content: {
        required: true,
      },
    },
    messages: {
      service: {
        required: "Please Enter service name.",
      },
      content: {
        required: "Content is required.",
      },
    },
    submitHandler: function (form) {
      let data = document.getElementById("SaveServiceForm");
      let formData = new FormData(data);
      var content = CKEDITOR.instances.content.getData();
      formData.append('content2', content);
      $.ajax({
        url: BASEURL + "/manage/save-services",
        type: "POST",
        data: formData,
        caches:false,
        contentType:false,
        processData:false,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            $("#service").val("");
            $("#slug").val("");
            $("#r_services").val("");
            $("#r_services").trigger("change");
            $("#service_image").val();
            $("#service_banner").val();
            
            
            $(".img-preview").attr("src","");
            $(".img-preview-ban").attr("src","");
            CKEDITOR.instances["content"].setData("");
            swal.fire({icon:'success', text: response.message});
          } else {
            if (response.validation) {
              swal.fire({icon:'error', text: response.message});
            } else {
              swal.fire({icon:'warning', text: response.message});
            }
          }
        },
      });
    },
  });

  /* Update Service Form Submit and Update -- other */
  $("#EditServiceForm").validate({
    errorClass: "is-invalid",
    rules: {
      service: {
        required: true,
      },
      content: {
        required: true,
      },
    },
    messages: {
      service: {
        required: "Please Enter service name.",
      },
      content: {
        required: "Content is required.",
      },
    },
    submitHandler: function (form) {
      let service_id = $("#service_id").val();
      let data = document.getElementById("EditServiceForm");
      let formData = new FormData(data);
      var content = CKEDITOR.instances.content.getData();
      formData.append('content2', content);

      $.ajax({
        url: BASEURL + "/manage/update-services/" + service_id,
        type: "POST",
        data: formData,
        cashe:false,
        processData:false,
        contentType:false,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            swal.fire({icon:'success', text: response.message});
          } else {
            if (response.validation) {
              swal.fire({icon:'error', text: response.message});
            } else {
              swal.fire({icon:'warning', text: response.message});
            }
          }
        },
      });
    },
  });

  /* Service Section Form Submit -- other */
  $("#ServiceSection").validate({
    errorClass: "is-invalid",
    rules: {
      services: {
        required: true,
      },
      pages: {
        required: true,
      },
      heading: {
        required: true,
      },
    },
    messages: {
      services: {
        required: "Please Select at least one Services.",
      },
      pages: {
        required: "Please Select at least one Page.",
      },
      heading: {
        required: "Heading is required",
      },
    },
    submitHandler: function (form) {
      var service_sec_id = "";
      let formData = $("#ServiceSection").serialize();
      let path = "";

      service_sec_id = $("#service_sec_id").val();
      if (service_sec_id != "") {
        path = BASEURL + "/manage/update-services-section/" + service_sec_id;
      } else {
        path = BASEURL + "/manage/save-services-section";
      }

      $.ajax({
        url: path,
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            $("#heading").val("");
            $("#discription").val("");
            $("#pages").val("");
            $("#pages").trigger("change");
            $("#services").val("");
            $("#services").trigger("change");
            
            Swal.fire({icon: 'success' , text: response.message}).then((result) => {
              location.reload();
            });
            
          } else {
            if (response.validation) {
              Swal.fire({icon: 'error' , text: response.message});
            } else {
              Swal.fire({icon: 'warning' , text: response.message});
            }
          }
        },
      });
    },
  });

  /* Add Products Form Submit -- other */
  $("#AddProducts").validate({
    errorClass: "is-invalid",
    rules: {
      product_name: {
        required: true,
      },
      total_inventry: {
        required: true,
        number: true,
      },
      mrp: {
        required: true,
        number: true,
      },
      discount: {
        required: true,
        number: true,
      },
      short_description: {
        required: true,
      },
    },
    messages: {
      product_name: {
        required: "Please Enter Product Name.",
      },
      total_inventry: {
        required: "Please Enter total Inventry.",
        number: "Total Inventry should be a numeric value.",
      },
      mrp: {
        required: "MRP value is required.",
        number: "MRP should be a numeric value.",
      },
      discount: {
        required: "Please Enter discount value.",
        number: "Discount should be a numeric value.",
      },
      short_description: {
        required: "Please Enter short_description.",
      },
    },
    submitHandler: function (form) {
      let data     = document.getElementById("AddProducts");
      let formData = new FormData(data);
      var short    = CKEDITOR.instances.short_description.getData();
      var long     = CKEDITOR.instances.long_description.getData();
      var specifi  = CKEDITOR.instances.specification.getData();
      formData.append('short', short);
      formData.append('long', long);
      formData.append('specifi', specifi);
      $.ajax({
        url: BASEURL + "/manage/save-products",
        type: "POST",
        data:formData,
        caches:false,
        processData:false,
        contentType: false,
        success: function (response) {
          response = JSON.parse(response);
          SetRelatedProducts(BASEURL);
          if (response.status) {
            $("#discount").val("");
            $("#mrp").val("");
            $("#total_inventry").val("");
            $("#product_name").val("");
            CKEDITOR.instances["short_description"].setData("");
            CKEDITOR.instances["long_description"].setData("");
            CKEDITOR.instances["specification"].setData("");
            $("#r_product").val("");
            $("#r_product").trigger("change");
            $(".product-img-preview").attr('src', '');
            $(".product-ban-preview").attr('src', '');
            $("#product_main_image").val("");
            $("#product_banner").val("");
            swal.fire({icon:'success', text:response.message});
          } else {
            if (response.validation) {
              swal.fire({icon:'warning', text:response.message});
            } else {
              swal.fire({icon:'error', text:response.message});
            }
          }
        },
      });
    },
  });

  /* Add Products Form Submit -- other */
  $("#EditProducts").validate({
    errorClass: "is-invalid",
    rules: {
      product_name: {
        required: true,
      },
      total_inventry: {
        required: true,
        number: true,
      },
      mrp: {
        required: true,
        number: true,
      },
      discount: {
        required: true,
        number: true,
      },
      short_description: {
        required: true,
      },
    },
    messages: {
      product_name: {
        required: "Please Enter Product Name.",
      },
      total_inventry: {
        required: "Please Enter total Inventry.",
        number: "Total Inventry should be a numeric value.",
      },
      mrp: {
        required: "MRP value is required.",
        number: "MRP should be a numeric value.",
      },
      discount: {
        required: "Please Enter discount value.",
        number: "Discount should be a numeric value.",
      },
      short_description: {
        required: "Please Enter short_description.",
      },
    },
    submitHandler: function (form) {
      let id = $("#product_id").val();
      
      let data     = document.getElementById("EditProducts");
      let formData = new FormData(data);
      var short    = CKEDITOR.instances.short_description.getData();
      var long     = CKEDITOR.instances.long_description.getData();
      var specifi  = CKEDITOR.instances.specification.getData();
      formData.append('short', short);
      formData.append('long', long);
      formData.append('specifi', specifi);

      $.ajax({
        url: BASEURL + "/manage/update-products/" + id,
        type: "POST",
        data: formData,
        caches: false,
        processData:false,
        contentType: false,
        success: function (response) {
          response = JSON.parse(response);
          SetRelatedProducts(BASEURL);
          if (response.status) {
            swal.fire({icon:'success', text: response.message});
          } else {
            if (response.validation) {
              swal.fire({icon:'error', text: response.message});
            } else {
              swal.fire({icon:'warning', text: response.message});
            }
          }
        },
      });
    },
  });

  /* Product Section Form Submit -- other */
  $("#ProductSection").validate({
    errorClass: "is-invalid",
    rules: {
      heading: {
        required: true,
      },
    },
    messages: {
      heading: {
        required: "Heading is required",
      },
    },
    submitHandler: function (form) {
      var product_sec_id = "";
      let formData = $("#ProductSection").serialize();
      let path = "";

      product_sec_id = $("#product_sec_id").val();
      if (product_sec_id != "") {
        path = BASEURL + "/manage/update-products-section/" + product_sec_id;
      } else {
        path = BASEURL + "/manage/save-product-section";
      }

      $.ajax({
        url: path,
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          updateProductSectionTable(BASEURL);
          if (response.status) {
            $("#heading").val("");
            $("#productsIds").val("");
            $("#productsIds").trigger("change");
            $("#pagesIds").val("");
            $("#pagesIds").trigger("change");

            Swal.fire({icon:'success', text: response.message}).then((result) => {
              location.reload();
            });
          } else {
            if (response.validation) {
              Swal.fire({icon:'warning', text: response.message});
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          }
        },
      });
    },
  });




  /* Tags & Keywords Form Submit -- other */
  $("#TagsKeywords").validate({
    errorClass: "is-invalid",
    rules: {
      keyword: {
        required: true,
      },
    },
    messages: {
      keyword: {
        required: "keyword is required",
      },
    },
    submitHandler: function (form) {
      let formData = $("#TagsKeywords").serialize();
      $.ajax({
        url: BASEURL + "/save-keywords",
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          updateKeywordTable(BASEURL);
          if (response.status) {
            $("#keyword").val("");
            $("#pagesIds").val("");
            $("#pagesIds").trigger("change");

            Notiflix.Notify.success(response.message);
          } else {
            if (response.validation) {
              Notiflix.Notify.warning(response.message);
            } else {
              Notiflix.Notify.failure(response.message);
            }
          }
        },
      });
    },
  });

  /* Add Post Form Submit -- other */
  $("#AddPost").validate({
    errorClass: "is-invalid",
    rules: {
      title: {
        required: true,
      },
      status: {
        required: true,
      },
      postUpdatesImg: {
        required: true,
      },
    },
    messages: {
      title: {
        required: "Title is required.",
      },
      status: {
        required: "Please select status",
      },
      postUpdatesImg: {
        required: "Please select image",
      },
    },
    submitHandler: function (form) {
      //let formData = $("#AddPost").serialize();
      let data = document.getElementById("AddPost");
      let formData = new FormData(data);
      var content = CKEDITOR.instances.description.getData();
      formData.append('content', content);
      $.ajax({
        url: BASEURL + "/manage/save-posts",
        type: "POST",
        data: formData,
        cashe:false,
        processData:false,
        contentType:false,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            $("#title").val("");
            $("#slug").val("");
            $("#status").val("");
            $("#postUpdatesImg").val("");
            $("#post-update-img").attr("src", "");
            CKEDITOR.instances["description"].setData("");
            Swal.fire({icon:'success', text: response.message}).then((result) => {
              //location.reload();
            });
          } else {
            if (response.validation) {
              Swal.fire({icon:'warning', text: response.message});
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          
          }
        },
      });
    },
  });

  /* Edit Post Form Submit -- other */
  $("#EditPost").validate({
    errorClass: "is-invalid",
    rules: {
      title: {
        required: true,
      },
      status: {
        required: true,
      },
    },
    messages: {
      title: {
        required: "Title is required.",
      },
      status: {
        required: "Please select status",
      },
    },
    submitHandler: function (form) {
      //let formData = $("#EditPost").serialize();
      let data = document.getElementById("EditPost");
      let formData = new FormData(data);
      var content = CKEDITOR.instances.description.getData();
      formData.append("content", content);
      let post_id = $("#post_id").val();
      $.ajax({
        url: BASEURL + "/manage/update-posts/"+post_id,
        type: "POST",
        data: formData,
        cashe:false,
        processData: false,
        contentType: false,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            // $('#title').val('');
            // $('#slug').val('');
            // $('#status').val('');
            // CKEDITOR.instances['description'].setData('');
            Swal.fire({icon:'success', text: response.message});
          } else {
            if (response.validation) {
              Swal.fire({icon:'warning', text: response.message});
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          }
        },
      });
    },
  });

  /* Custom Insert Form Submit -- other */
  $("#customInsertForm").validate({
    errorClass: "is-invalid",
    rules: {
      // title: {
      //     required: true,
      // },
    },
    messages: {
      // title: {
      //     required: "Title is required.",
      // },
    },
    submitHandler: function (form) {
      var insert_id = "";
      var path = "";
      let formData = $("#customInsertForm").serialize();

      insert_id = $("#insert_id").val();
      if (insert_id != "") {
        path = BASEURL + "/update-custom/" + insert_id;
      } else {
        path = BASEURL + "/save-custom";
      }

      $.ajax({
        url: path,
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          updateDefaultMeta(BASEURL);
          if (response.status) {
            Notiflix.Notify.success(response.message);
          } else {
            if (response.validation) {
              Notiflix.Notify.warning(response.message);
            } else {
              Notiflix.Notify.failure(response.message);
            }
          }
        },
      });
    },
  });

  /*Gallery Image Upload Form Submit -- other */
  $("#UploadeImageGallery").validate({
    errorClass: "is-invalid",
    rules: {
      title: {
        required: true,
      },
    },
    messages: {
      title: {
        required: "Title is required.",
      },
    },
    submitHandler: function (form) {
      let data = document.getElementById("UploadeImageGallery");
      let formData = new FormData(data);
      var id = $("#galleryImgId").val();
      formData.append('id', id);
      if(id!=""){
        var url = BASEURL + "/manage/update-galleryimages/"+id;
      }else{
        var url = BASEURL + "/manage/save-galleryimages";
      }
      
      $.ajax({
        url: url,
        type: "POST",
        data: formData,
        caches:false,
        processData:false,
        contentType:false,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            
            if(id==""){
              $("#title").val("");
              $("#gallery_image").val("");
              $(".gallery-img-preview").attr("src","");
            }
            
            swal.fire({icon:'success', text:response.message });
          } else {
            if (response.validation) {
              swal.fire({icon:'warning', text:response.message });
            } else {
              swal.fire({icon:'error', text:response.message });
            }
          }
        },
      });
    },
  });

  /*Gallery Video Upload Form Submit -- other */
  $("#UploadeVideoGallery").validate({
    errorClass: "is-invalid",
    rules: {
      title: {
        required: true,
      },
      url: {
        required: true,
        url: true,
      },
    },
    messages: {
      title: {
        required: "Title is required.",
      },
      url: {
        required: "URL is required.",
      },
    },
    submitHandler: function (form) {
      let formData = $("#UploadeVideoGallery").serialize();
      $.ajax({
        url: BASEURL + "/manage/save-galleryvideo",
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            $("#title").val("");
            $("#url").val("");
            swal.fire({icon:'success', text:response.message });
          } else {
            if (response.validation) {
              swal.fire({icon:'warning', text:response.message });
            } else {
              swal.fire({icon:'error', text:response.message });
            }
          }
        },
      });
    },
  });

  /*Add Testimonials Form Submit -- other */
  $("#AddTestimonials").validate({
    errorClass: "is-invalid",
    rules: {
      name: {
        required: true,
      },
      description: {
        required: true,
      },
    },
    messages: {
      name: {
        required: "Name is required.",
      },
      description: {
        required: "Description is required.",
      },
    },
    submitHandler: function (form) {
      let formData = $("#AddTestimonials").serialize();
      $.ajax({
        url: BASEURL + "/save-testimonials",
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            $("#name").val("");
            $("#description").val("");
            Notiflix.Notify.success(response.message);
          } else {
            if (response.validation) {
              Notiflix.Notify.warning(response.message);
            } else {
              Notiflix.Notify.failure(response.message);
            }
          }
        },
      });
    },
  });

  /*Update Testimonials Form Submit -- other */
  $("#UpdateTestimonials").validate({
    errorClass: "is-invalid",
    rules: {
      name: {
        required: true,
      },
      description: {
        required: true,
      },
    },
    messages: {
      name: {
        required: "Name is required.",
      },
      description: {
        required: "Description is required.",
      },
    },
    submitHandler: function (form) {
      let formData = $("#UpdateTestimonials").serialize();
      $.ajax({
        url: BASEURL + "/update-testimonials/" + $("#testimonials_id").val(),
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            $("#name").val("");
            $("#description").val("");
            Notiflix.Notify.success(response.message);
          } else {
            if (response.validation) {
              Notiflix.Notify.warning(response.message);
            } else {
              Notiflix.Notify.failure(response.message);
            }
          }
        },
      });
    },
  });

  /*Add Faqs Form Submit -- other */
  $("#Addfaqs").validate({
    errorClass: "is-invalid",
    rules: {
      title: {
        required: true,
      },
      content: {
        required: true,
      },
    },
    messages: {
      title: {
        required: "Title is required.",
      },
      content: {
        required: "Content is required.",
      },
    },
    submitHandler: function (form) {
      let formData = $("#Addfaqs").serialize();
      $.ajax({
        url: BASEURL + "/save-faqs",
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            $("#title").val("");
            $("#content").val("");
            Notiflix.Notify.success(response.message);
          } else {
            if (response.validation) {
              Notiflix.Notify.warning(response.message);
            } else {
              Notiflix.Notify.failure(response.message);
            }
          }
        },
      });
    },
  });

  /*Edit Faqs Form Submit -- other */
  $("#Editfaqs").validate({
    errorClass: "is-invalid",
    rules: {
      title: {
        required: true,
      },
      content: {
        required: true,
      },
    },
    messages: {
      title: {
        required: "Title is required.",
      },
      content: {
        required: "Content is required.",
      },
    },
    submitHandler: function (form) {
      let formData = $("#Editfaqs").serialize();
      $.ajax({
        url: BASEURL + "/update-faqs/" + $("#faqs_id").val(),
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            Notiflix.Notify.success(response.message);
          } else {
            if (response.validation) {
              Notiflix.Notify.warning(response.message);
            } else {
              Notiflix.Notify.failure(response.message);
            }
          }
        },
      });
    },
  });

  /*Image Section Form Submit -- other */
  $("#ImageSection").validate({
    errorClass: "is-invalid",
    rules: {
      images: {
        required: true,
      },
      pages: {
        required: true,
      },
    },
    messages: {
      images: {
        required: "Images is required.",
      },
      pages: {
        required: "Pages is required.",
      },
    },
    submitHandler: function (form) {
      let image_section_id = "";
      let path = "";
      let formData = $("#ImageSection").serialize();
      image_section_id = $("#image_section_id").val();

      if (image_section_id != "") {
        path = BASEURL + "/manage/update-image-section/" + image_section_id;
      } else {
        path = BASEURL + "/manage/save-image-section";
      }
      $.ajax({
        url: path,
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          updateImageSectionTable(BASEURL);
          if (response.status) {
            $("#image_section_id").val("");
            $("#heading").val("");
            $("#images").val("");
            $("#images").trigger("change");
            $("#pages").val("");
            $("#pages").trigger("change");
            Swal.fire({icon:'success', text: response.message}).then((result) =>{
              location.reload();
            });
          } else {
            if (response.validation) {
              Swal.fire({icon:'warning', text: response.message});

            } else {
              Swal.fire({icon:'error', text: response.message});

            }
          }
        },
      });
    },
  });

  /* Videos Section Form Submit -- other */
  $("#VideosSection").validate({
    errorClass: "is-invalid",
    rules: {
      video: {
        required: true,
      },
      pages: {
        required: true,
      },
    },
    messages: {
      video: {
        required: "Video is required.",
      },
      pages: {
        required: "Pages is required.",
      },
    },
    submitHandler: function (form) {
      let video_section_id = "";
      let path = "";
      let formData = $("#VideosSection").serialize();
      video_section_id = $("#video_section_id").val();

      if (video_section_id != "") {
        path = BASEURL + "/manage/update-video-section/" + video_section_id;
      } else {
        path = BASEURL + "/manage/save-video-section";
      }
      $.ajax({
        url: path,
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          // updateImageSectionTable(BASEURL);
          if (response.status) {
            $("#video_section_id").val("");
            $("#heading").val("");
            $("#videos").val("");
            $("#videos").trigger("change");
            $("#pages").val("");
            $("#pages").trigger("change");
            if (response.status) {
              Swal.fire({icon:'success', text: response.message}).then((result) => {
                location.reload();
              });
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          } else {
            Swal.fire({icon:'warning', text: response.message});
          }
        },
      });
    },
  });

  /* Banner Section Form Submit -- other */
  $("#BannerSection").validate({
    errorClass: "is-invalid",
    rules: {
      page_id: {
        required: true,
      },
      banner_name: {
        required: true,
      },
      content: {
        required: true,
      },
    },
    messages: {
      page_id: {
        required: "Please select page.",
      },
      banner_name: {
        required: "Banner Name is required.",
      },
      content: {
        required: "Content is required.",
      },
    },
    submitHandler: function (form) {
      let banner_id = "";
      let path = "";
      let data = document.getElementById("BannerSection");
      let formData = new FormData(data);

      banner_id = $("#banner_id").val();

      if (banner_id != "") {
        path = BASEURL + "/manage/update-banner-section/" + banner_id;
      } else {
        path = BASEURL + "/manage/save-banner-section";
      }
      $.ajax({
        url: path,
        type: "POST",
        data: formData,
        caches:false,
        contentType:false,
        processData:false,
        success: function (response) {
          response = JSON.parse(response);
            if (response.status) {
              Swal.fire({icon:'success', text: response.message}).then((result) => {
                location.reload();
              })
            } else {
              if (response.validation) {
                Swal.fire({icon:'warning', text: response.message});
              } else {
                Swal.fire({icon:'error', text: response.message});
              }
            }
        },error:function(err, xhr){
          alert("err");
        }
      });
    }
  })
  

  /* Testimonials Section Form Submit -- other */
  $("#TestimonialsSection").validate({
    errorClass: "is-invalid",
    rules: {
      testimonials: {
        required: true,
      },
      pages_ids: {
        required: true,
      },
    },
    messages: {
      testimonials: {
        required: "Please select testimonials.",
      },
      pages_ids: {
        required: "Please select Pages.",
      },
    },
    submitHandler: function (form) {
      let testimonials_id = "";
      let path = "";
      let formData = $("#TestimonialsSection").serialize();
      testimonials_id = $("#testimonials_id").val();
      if (testimonials_id != "") {
        path = BASEURL + "/manage/update-testimonials-section/" + testimonials_id;
      } else {
        path = BASEURL + "/manage/save-testimonials-section";
      }

      $.ajax({
        url: path,
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
            if (response.status) {
              Swal.fire({icon:'success', text: response.message}).then((result) => {
                location.reload();
              });
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
        },
      });
    },
  });

  /* Faqs Section Form Submit -- other */
  $("#FaqsSection").validate({
    errorClass: "is-invalid",
    rules: {
      faqs_ids: {
        required: true,
      },
      pages_ids: {
        required: true,
      },
    },
    messages: {
      faqs_ids: {
        required: "Please select faqs.",
      },
      pages_id: {
        required: "Please select pages.",
      },
    },
    submitHandler: function (form) {
      let faqs_section_id = "";
      let path = "";
      let formData = $("#FaqsSection").serialize();
      faqs_section_id = $("#faqs_section_id").val();
      if (faqs_section_id != "") {
        path = BASEURL + "/manage/update-faqs-section/" + faqs_section_id;
      } else {
        path = BASEURL + "/manage/save-faqs-section";
      }

      $.ajax({
        url: path,
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            Swal.fire({icon:'success', text: response.message}).then((result) => {
              location.reload();
            });
          } else {
            Swal.fire({icon:'error', text: response.message});
          }
        },
      });
    },
  });

  /* Post Section Form Submit -- other */
  $("#PostSection").validate({
    errorClass: "is-invalid",
    rules: {
      heading: {
        required: true,
      },
      pages_ids: {
        required: true,
      },
    },
    messages: {
      heading: {
        required: "Please Enter heading.",
      },
      pages_id: {
        required: "Please select pages.",
      },
    },
    submitHandler: function (form) {
      let post_section_id = "";
      let path = "";
      let formData = $("#PostSection").serialize();
      post_section_id = $("#post_section_id").val();
      if (post_section_id != "") {
        path = BASEURL + "/manage/update-post-section/" + post_section_id;
      } else {
        path = BASEURL + "/manage/save-post-section";
      }

      $.ajax({
        url: path,
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            Swal.fire({icon:'success', text: response.message}).then((result) => {
              location.reload();
            });
          } else {
            Swal.fire({icon:'error', text: response.message});
          }
        },
      });
    },
  });

  /* MCL Section Form Submit -- other */
  $("#MCLSection").validate({
    errorClass: "is-invalid",
    rules: {
      heading: {
        required: true,
      },
      pages_ids: {
        required: true,
      },
    },
    messages: {
      heading: {
        required: "Please Enter heading.",
      },
      pages_id: {
        required: "Please select pages.",
      },
    },
    submitHandler: function (form) {
      let mlc_section_id = "";
      let path = "";
      let formData = $("#MCLSection").serialize();
      mlc_section_id = $("#mlc_section_id").val();
      if (mlc_section_id != "") {
        path = BASEURL + "/manage/update-mlc-section/" + mlc_section_id;
      } else {
        path = BASEURL + "/manage/save-mlc-section";
      }

      $.ajax({
        url: path,
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            Swal.fire({icon:'success', text: response.message}).then((result) => {
              location.reload();
            });
          } else {
            Swal.fire({icon:'error', text: response.message});
          }
        },
      });
    },
  });

  /* MCL Section Form Submit -- other */
  $("#QuerySection").validate({
    errorClass: "is-invalid",
    rules: {
      pages_ids: {
        required: true,
      },
    },
    messages: {
      pages_id: {
        required: "Please select pages.",
      },
    },
    submitHandler: function (form) {
      let query_section_id = "";
      let path = "";
      let formData = $("#QuerySection").serialize();
      query_section_id = $("#query_section_id").val();
      if (query_section_id != "") {
        path = BASEURL + "/manage/update-business-section/" + query_section_id;
      } else {
        path = BASEURL + "/manage/save-business-section";
      }
      $.ajax({
        url: path,
        type: "POST",
        data: formData,
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            Swal.fire({icon:'success', text: response.message}).then((result) => {
              location.reload();
            });
          } else {
            Swal.fire({icon:'error', text: response.message});
          }
        },
      });
    },
  });

  /* Update Arrange Section List Form Submit -- other */
  $("#arrange_list").validate({
    submitHandler: function (form) {
      var form_data = [];
      $("#arrange_section_1 li").each(function () {
        form_data.push($(this).attr("value"));
      });
      $.ajax({
        url: BASEURL + "/manage/save-arrange-sorting",
        type: "POST",
        data: { sorting_order: form_data },
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            swal.fire({icon:'success', text: response.message})
          } else {
            swal.fire({icon:'error', text: response.message})
          }
        },
      });
    },
  });

  
  
  $('#postUpdatesImg').on('change', function () {
    displayImage(this, 'post-update-img');
  });
  
  $('#editPostImage').on('change', function () {
    displayImage(this, 'edit-post-img');
  });
  /* Business Logo Update. */
  $('#business_logo').on('change', function () {
    displayImage(this, 'logo-preview-img');
    // var formData = new FormData();
    // let userid = $('#user_id').val();
    // formData.append('business_logo', $('#business_logo')[0].files[0]);

    // $.ajax({
    //   url: BASEURL + '/upload-business-logo/' + userid,
    //   type: 'POST',
    //   data: formData,
    //   processData: false,  // tell jQuery not to process the data
    //   contentType: false,  // tell jQuery not to set contentType
    //   success: function (data) {
    //     data = JSON.parse(data);
    //     if (data.status) {
    //       $('#business_logo_temp').val(data.path);
    //     }
    //   }
    // });
  });

  /* Business Icon Update. */
  $('#business_icon').on('change', function () {
    displayImage(this, 'icon-preview-img');
    // var formData = new FormData();
    // let userid = $('#user_id').val();
    // formData.append('business_icon', $('#business_icon')[0].files[0]);

    // $.ajax({
    //   url: BASEURL + '/upload-business-icon/' + userid,
    //   type: 'POST',
    //   data: formData,
    //   processData: false,  // tell jQuery not to process the data
    //   contentType: false,  // tell jQuery not to set contentType
    //   success: function (data) {
    //     data = JSON.parse(data);
    //     if (data.status) {

    //       $('#business_icon_temp').val(data.path);
    //     }
    //   }
    // });
  });

  /* Custom Section Upload Image */
  // $('#upload_image').on('change', function () {
  //   var formData = new FormData();
  //   formData.append('upload_image', $('#upload_image')[0].files[0]);
  //   $.ajax({
  //     url: BASEURL + '/assets/custom-section-upload-image',
  //     type: 'POST',
  //     data: formData,
  //     processData: false,  // tell jQuery not to process the data
  //     contentType: false,  // tell jQuery not to set contentType
  //     success: function (data) {
  //       data = JSON.parse(data);
  //       if (data.status) {
  //         $('#custom_upload_image_temp').val(data.path);
  //       }
  //     }
  //   });
  // });


  /* Slider Image Upload Image */
  $('#slider_image').on('change', function () {
    displayImage(this, 'img-preview');
  });

  /* Service Image Upload Image */
  $('#service_image').on('change', function () {
    displayImage(this, 'img-preview');
  });

  /* Service Banners Upload Image */
  $('#service_banner').on('change', function () {
    displayImage(this, 'img-preview-ban');
  });

  /* Service Banners Upload Image */
  $('#product_main_image').on('change', function () {
    displayImage(this, 'product-img-preview');
  });

  /* Product Banners Upload Image */
  $('#product_banner').on('change', function () {
    displayImage(this, 'product-ban-preview');
  });

  /* Image Gallery Upload Image */
  $('#gallery_image').on('change', function () {
    displayImage(this, 'gallery-img-preview');
  });

  /* Testimonials image Upload Image */
  $('#testimonials_image').on('change', function () {
    var formData = new FormData();
    formData.append('testimonials_image', $('#testimonials_image')[0].files[0]);
    $.ajax({
      url: BASEURL + '/testimonials-image-upload',
      type: 'POST',
      data: formData,
      processData: false,  // tell jQuery not to process the data
      contentType: false,  // tell jQuery not to set contentType
      success: function (data) {
        data = JSON.parse(data);
        if (data.status) {
          $('#testimonials_image_temp').val(data.path);
        } else {
          Notiflix.Notify.warning(response.message);
        }
      }
    });
  });

});

/* Set Default name in Select box --- other */
function getDefaultMenu(BASEURL) {
  let optionFields = `<option value=''>Select Menu</option>`;
  $.ajax({
    url: BASEURL + "/get-default-menu",
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      var options_data = data.data;
      if (data.status) {
        if (options_data.length > 0) {
          options_data.forEach((vals) => {
            optionFields += `<option value='${vals.id}'>${vals.menu_name}</option>`;
          });
        }
      }
      $("#Default_Menu").html(optionFields);
    },
  });
}

/* Delete slider */
function delete_silder(value) {
 Swal.fire({
        title: 'Are you sure you want to delete this record?',
        icon: 'info',
        showDenyButton: true,
        confirmButtonText: 'Yes',
      }).then((result) => {
        if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-slider/" + value,
        type: "POST",
        success: function (data) {
          response = JSON.parse(data);
            if (response.status) {
              Swal.fire({icon:'success', timer: 1000, text: response.message}).then((result) => {
                location.reload();
              });
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          },
        });
      }
    })
  }

/* Slider Table Data Fetch. */
function updateSliderTable(BASEURL) {
  $.ajax({
    url: BASEURL + "/allslider-get",
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      if (data.status) {
        SetDataInSliderTable(data.data);
      }
    },
  });
}

/* Slider Table Data Set in Table. */
function SetDataInSliderTable(data) {
  var num = 1;
  var table = $("#slider_table").DataTable();
  let tbdata = [];
  if (data.length) {
    data.forEach((el) => {
      let action = `<a href="/edit-slider/${el.id}"  class="btn btn-primary" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            <button class="btn btn-danger" onclick="delete_silder(${el.id})"><i class="fa fa-trash" aria-hidden="true"></i></button>`;

      let rowData = [
        num,
        el.name,
        el.slider_image,
        el.title,
        el.description,
        action,
      ];
      tbdata.push(rowData);
      num++;
    });
  }
  table.destroy();
  $("#slider_table").DataTable({
    data: tbdata,
  });
}

/* Edit Slider Section. */
function edit_slider_section(value) {
  var BASEURL = $("#url").val();
  $.ajax({
    url: BASEURL + "/manage/edit-slider-section/" + value,
    type: "GET",
    success: function (data) {
      var sliders = [];
      var pages = [];
      data = JSON.parse(data);
      if (data.status) {
        var slider = data.data.slider;
        var page_id = data.data.page_id;
        slider = JSON.parse(slider);
        var pagesIds = JSON.parse(page_id);
        $("#section_name").val(data.data.section_name);
        $("#sectionid").val(data.data.id);
        $.each(slider, function (key, value) {
          sliders.push(value);
        });
        $("#slider").val(sliders);
        $("#slider").trigger("change");

        if (pagesIds.length) {
          $.each(pagesIds, function (key, value) {
            let opt = value.menu + "," + value.sub_menu;
            pages.push(opt);
          });
          $("#page_id").val(pages);
          $("#page_id").trigger("change");
          $("#AddSlidersSection").find("button").text("Update Section");
          window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
          $("#page_id").val("");
          $("#page_id").trigger("change");
        }
        $('html,body').scrollTop(0);
      }
    },
  });
}
/* Delete Slider Section. */
function delete_slider_section(value, name) {
  Swal.fire({
    title: 'Are you sure you want to delete "'+name+'" slider ?',
    showDenyButton: true,
    confirmButtonText: 'Yes',
  }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-slider-section/" + value,
        type: "POST",
        success: function (data) {
          response = JSON.parse(data);
          if (response.status) {
            Swal.fire({icon:'success', text: response.message}).then((result) => {
              location.reload();
            });
          } else {
            Swal.fire({icon:'error', text: response.message});
          }
        },
      });
    }
  })
}


/* Edit Custom Section Section. */
function editCustom_section(value) {
  var BASEURL = $("#url").val();
  $.ajax({
    url: BASEURL + "/manage/edit-custom-section/" + value,
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      if (data.status) {
        var pages = [];
        $("#section_id").val(data.data.id);
        $("#heading").val(data.data.heading);
        $("#position").val(data.data.position);
        $("#custom_upload_image_temp").val(data.data.upload_image);
        CKEDITOR.instances["description"].setData(data.data.description);
        $("#offcanvasRightLabel").text("Update Custom Section");
        $("#section_btn").text("Update");
        $("#offcanvasRight").offcanvas("show");

        var page_id = data.data.page_id;
        var pagesIds = JSON.parse(page_id);

        if (pagesIds.length) {
          $.each(pagesIds, function (key, value) {
            let opt = value.menu + "," + value.sub_menu;
            pages.push(opt);
          });
          $("#page_id").val(pages);
          $("#page_id").trigger("change");
        } else {
          $("#page_id").val("");
          $("#page_id").trigger("change");
        }
      }
    },
  });
}

/* Delete Custom  Section. */
function deleteCustom_section(value) {
  Swal.fire({
    title: 'Are you sure you want to delete this record?',
    showDenyButton: true,
    icon:'info',
    confirmButtonText: 'Yes',
  }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-custom-section/" + value,
        type: "POST",
        success: function (data) {
          response = JSON.parse(data);
          if (response.status) {
            $("#" + value).remove();
            Swal.fire({icon:'success', text: response.message}).then((result) => {
              location.reload()
            });
          } else {
            Swal.fire({icon:'error', text: response.message});
          }
        },
      });
    }
  })
}

/* Custom Section Table Data Fetch. */
function updateCustomSectionTable(BASEURL) {
  $.ajax({
    url: BASEURL + "/allslider-custom",
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      if (data.status) {
        SetDataInCustomSectionTable(data.data);
      }
    },
  });
}

/* Custom Section Table Data Set in Table. */
function SetDataInCustomSectionTable(data) {
  var num = 1;
  var table = $("#Custom_slider_table").DataTable();
  let tbdata = [];
  if (data.length) {
    data.forEach((el) => {
      let action = `<button class="btn btn-primary" onclick="editCustom_section(${el.id})" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button class="btn btn-danger" onclick="deleteCustom_section(${el.id})"><i class="fa fa-trash" aria-hidden="true"></i></button>`;

      let rowData = [
        num,
        el.heading,
        el.description,
        el.upload_image,
        el.page_title,
        el.position,
        el.created_at,
        action,
      ];
      tbdata.push(rowData);
      num++;
    });
  }
  table.destroy();
  $("#Custom_slider_table").DataTable({
    data: tbdata,
  });
}

/* Delete Services. */
function delete_service(value) {
  Swal.fire({
    title: "Are you sure you want to delete this record?",
    icon:'info',
    showCancelButton: true,
    confirmButtonText: 'Delete',
  }).then((result) => {
    if (result.isConfirmed) { 
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-services/" + value,
        type: "POST",
        success: function (data) {
          var response = JSON.parse(data);
          if (response.status) {
            $("#" + value).remove();
            Swal.fire({icon:'success', text: response.message}).then((result) => {
              location.reload();
            });
          } else {
            Swal.fire({icon:'success', text: response.message});
          }
        },
      });
    }
  });
}

/* Edit service_section. */
function edit_service_section(value) {
  var BASEURL = $("#url").val();
  $.ajax({
    url: BASEURL + "/manage/edit-services-section/" + value,
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      if (data.status) {
        var servicess = [];
        var pagessss = [];
        var services = data.data.services;
        var pages = data.data.pages;
        services = JSON.parse(services);
        pages = JSON.parse(pages);
        $("#service_sec_id").val(data.data.id);
        $("#discription").val(data.data.discription);
        $("#heading").val(data.data.heading);

        $.each(services, function (key, value) {
          servicess.push(value);
        });
        $("#services").val(servicess);
        $("#services").trigger("change");

        if (pages.length) {
          $.each(pages, function (key, value) {
            let opt = value.menu + "," + value.sub_menu;
            pages.push(opt);
          });
          $("#pages").val(pages);
          $("#pages").trigger("change");
          $("#pages").trigger("change");
          $("#ServiceSection").find("button").text("Update Section");
          window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
          $("#pages").val("");
          $("#pages").trigger("change");
        }
      }
    },
  });
}

/* Delete Services section. */
function delete_service_section(value) {
  Swal.fire({
    title: "Are you sure you want to delete this record?",
    icon:'info',
    showCancelButton: true,
    confirmButtonText: 'Delete',
  }).then((result) => {
    if (result.isConfirmed) { 
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-services-section/" + value,
        type: "POST",
        success: function (data) {
          response = JSON.parse(data);
          if (response.status) {
            $("#" + value).remove();
            Swal.fire({icon:'success', text: response.message}).then((result) => {
              location.reload();
            });
          } else {
            Swal.fire({icon:'success', text: response.message});
          }
        },
      });
    }
  });
}

/* Set Related Products in Add Product. */
function SetRelatedProducts(BASEURL) {
  let optionFields = ``;
  $.ajax({
    url: BASEURL + "/get-products",
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      var options_data = data.data;
      if (data.status) {
        if (options_data.length > 0) {
          options_data.forEach((vals) => {
            optionFields += `<option value='${vals.id}'>${vals.product_name}</option>`;
          });
        }
      }
      $("#r_product").html(optionFields);
    },
  });
}

/* Delete Product - Content Management */
function delete_product(value) {
  Swal.fire({
    title: 'Are you sure you want to this record?',
    icon: 'info',
    showDenyButton: true,
    confirmButtonText: 'Yes',
    }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-products/" + value,
        type: "POST",
        success: function (data) {
          response = JSON.parse(data);
            if (response.status) {
              Swal.fire({icon:'success', text: response.message}).then((result) => {
                location.reload();
              });
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          },
        });
      }
    })
  }

/* Delete Product section - Content Management */
function delete_product_section(value) {
  Swal.fire({
    title: 'Are you sure you want to this record?',
    icon: 'info',
    showDenyButton: true,
    confirmButtonText: 'Yes',
    }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-products-section/" + value,
        type: "POST",
        success: function (data) {
          response = JSON.parse(data);
            if (response.status) {
              Swal.fire({icon:'success', text: response.message}).then((result) => {
                location.reload();
              });
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          },
        });
      }
    })
  }


/* Edit Product section - Content Management */
function edit_product_section(value) {
  var BASEURL = $("#url").val();
  $.ajax({
    url: BASEURL + "/manage/edit-products-section/" + value,
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      if (data.status) {
        var productssss = [];
        var pagesss = [];
        var products = data.data.products;
        var pages = data.data.pages;

        products = JSON.parse(products);
        pages = JSON.parse(pages);

        $("#product_sec_id").val(data.data.id);
        $("#heading").val(data.data.heading);
        $.each(products, function (key, value) {
          productssss.push(value);
        });
        $("#productsIds").val(productssss);
        $("#productsIds").trigger("change");

        if (pages.length) {
          $.each(pages, function (key, value) {
            let opt = value.menu + "," + value.sub_menu;
            pagesss.push(opt);
          });
          $("#pagesIds").val(pagesss);
          $("#pagesIds").trigger("change");
          $("#ProductSection").find("button").text("Update Section");
          window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
          $("#pagesIds").val("");
          $("#pagesIds").trigger("change");
        }
      }
    },
  });
}

/* Product Section Table Data Fetch. */
function updateProductSectionTable(BASEURL) {
  $.ajax({
    url: BASEURL + "/get-product-section",
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      if (data.status) {
        SetDataInProductSectionTable(data.data, data.pages, data.products);
      }
    },
  });
}

/* Product Section Table Set in Table. */
function SetDataInProductSectionTable(data, pages, products) {
  var num = 1;
  var table = $("#products_section_table").DataTable();
  let tbdata = [];

  if (data.length) {
    data.forEach((el) => {
      let products_list = "";
      let page_list = "";
      let action = `<button class="btn btn-primary btn-sm" onclick="edit_product_section(${el.id})"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            <button class="btn btn-danger btn-sm" onclick="delete_product_section(${el.id})"><i class="fa fa-trash" aria-hidden="true"></i></button>`;
      var jsondata = get_json_data(el.products);
      var jsondatapages = JSON.parse(el.pages);

      products.forEach((pros) => {
        jsondata.forEach((pro) => {
          if (pro == pros.id) {
            products_list += pros.product_name;
            products_list += ", ";
          }
        });
      });

      jsondatapages.forEach((page_data) => {
        page_list += page_data.sub_menu_title;
        page_list += ", ";
      });

      let rowData = [num, el.heading, products_list, page_list, action];
      tbdata.push(rowData);
      num++;
    });
  }
  table.destroy();
  $("#products_section_table").DataTable({
    data: tbdata,
  });
}

/* Delete Keyword - Content Management */
function delete_keyword(value) {
  Notiflix.Confirm.show(
    "Deletion Confirm",
    "Are you sure you want to delete this record?",
    "Yes",
    "No",
    function okCb() {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/delete-keywords/" + value,
        type: "POST",
        success: function (data) {
          response = JSON.parse(data);
          if (response.status) {
            $("#" + value).remove();
            Notiflix.Notify.success(response.message);
          } else {
            Notiflix.Notify.failure(response.message);
          }
        },
      });
    },
    function cancelCb() {
      Notiflix.Report.info("Your record is safe.", "", "close");
    },
    {
      width: "320px",
      borderRadius: "8px",
    }
  );
}

/* Keyword Table Data Fetch. */
function updateKeywordTable(BASEURL) {
  $.ajax({
    url: BASEURL + "/gets-keywords",
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      if (data.status) {
        SetDataInKeywordTable(data.data, data.pages);
      }
    },
  });
}

/* Keyword Table Set in Table. */
function SetDataInKeywordTable(data, pages) {
  var num = 1;
  var table = $("#tagKeyword_table").DataTable();
  let tbdata = [];

  if (data.length) {
    data.forEach((el) => {
      let page_list = "";
      let action = ` <button class="btn btn-danger btn-sm" onclick="delete_keyword(${el.id})"><i class="fa fa-trash" aria-hidden="true"></i></button>`;

      var jsondatapages = get_json_data(el.pages);

      pages.forEach((pages_all) => {
        jsondatapages.forEach((page_data) => {
          if (page_data == pages_all.id) {
            page_list += pages_all.page_title;
            page_list += ", ";
          }
        });
      });
      let rowData = [num, el.keyword, page_list, action];
      tbdata.push(rowData);
      num++;
    });
  }
  table.destroy();
  $("#tagKeyword_table").DataTable({
    data: tbdata,
  });
}

/* Post deleted Successfully. */
function delete_post(value) {
  Swal.fire({
    title: 'Are you sure you want to delete this record?',
    icon: 'info',
    showDenyButton: true,
    confirmButtonText: 'Yes',
  }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-posts/" + value,
        type: "POST",
        success: function (response) {
          response = JSON.parse(response);
            if (response.status) {
              Swal.fire({icon:'success', text: response.message}).then((result) => {
                location.reload();
              });
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          },
        });
      }
    })
  }

/* update Default Meta. */
function updateDefaultMeta(BASEURL) {
  $.ajax({
    url: BASEURL + "/get-default-meta",
    type: "GET",
    success: function (data) {
      console.log(data);
      data = JSON.parse(data);
      if (data.status) {
        $("#insert_id").val(data.data.id);
        $("#head").val(data.data.head);
        $("#foot").val(data.data.foot);
      }
    },
  });
}

/*Image Gallery deleted Successfully. */
function delete_imageGallery(value) {
  Swal.fire({
    title: 'Are you sure you want to delete this record?',
    icon: 'info',
    showDenyButton: true,
    confirmButtonText: 'Yes',
  }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-galleryimages/" + value,
        type: "POST",
        success: function (response) {
          response = JSON.parse(response);
            if (response.status) {
              Swal.fire({icon:'success', text: response.message}).then((result) => {
                location.reload();
              });
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          },
        });
      }
    })
  }

/*Video Gallery deleted Successfully. */
function delete_galleryVideo(value) {
  Swal.fire({
    title: 'Are you sure you want to delete this record?',
    icon: 'info',
    showDenyButton: true,
    confirmButtonText: 'Yes',
    }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/delete-galleryvideo/" + value,
        type: "POST",
        success: function (response) {
          response = JSON.parse(response);
            if (response.status) {
              Swal.fire({icon:'success', text: response.message}).then((result) => {
                location.reload();
              });
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          },
        });
      }
    })
  }


/* testimonials deleted Successfully. */
function delete_testimonials(value) {
  Swal.fire({
    title: 'Are you sure you want to delete this record?',
    icon: 'info',
    showDenyButton: true,
    confirmButtonText: 'Yes',
    }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/delete-testimonials/" + value,
        type: "POST",
        success: function (response) {
          response = JSON.parse(response);
            if (response.status) {
              Swal.fire({icon:'success', text: response.message}).then((result) => {
                location.reload();
              });
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          },
        });
      }
    })
  }

/* faqs deleted Successfully. */
function delete_faqs(value) {
  Swal.fire({
    title: 'Are you sure you want to delete this record?',
    icon: 'info',
    showDenyButton: true,
    confirmButtonText: 'Yes',
    }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/delete-faqs/" + value,
        type: "POST",
        success: function (response) {
          response = JSON.parse(response);
            if (response.status) {
              Swal.fire({icon:'success', text: response.message}).then((result) => {
                location.reload();
              });
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          },
        });
      }
    })
  }


/* edit image Section Successfully. */
function edit_imageSection(value) {
  var BASEURL = $("#url").val();
  $.ajax({
    url: BASEURL + "/manage/edit-image-section/" + value,
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      console.log(data);
      if (data.status) {
        var images_id = [];
        var pages_id = [];

        var image = data.data.images;
        var pages = data.data.pages;

        image = JSON.parse(image);
        pages = JSON.parse(pages);

        $("#image_section_id").val(data.data.id);
        $("#heading").val(data.data.heading);

        $.each(image, function (key, value) {
          images_id.push(value);
        });
        $("#images").val(images_id);
        $("#images").trigger("change");

        if (pages.length) {
          $.each(pages, function (key, value) {
            let opt = value.menu + "," + value.sub_menu;
            pages_id.push(opt);
          });
          $("#pages").val(pages_id);
          $("#pages").trigger("change");
          $("#AddSlidersSection").find("button").text("Update Section");
          window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
          $("#pages").val("");
          $("#pages").trigger("change");
        }
      }
    },
  });
}

/*Delete image Section Successfully. */
function delete_imageSection(value) {
  Swal.fire({
    title: 'Are you sure you want to delete this record?',
    icon: 'info',
    showDenyButton: true,
    confirmButtonText: 'Yes',
    }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-image-section/" + value,
        type: "POST",
        success: function (data) {
          response = JSON.parse(data);
            if (response.status) {
              Swal.fire({icon:'success', text: response.message}).then((result) => {
                location.reload();
              });
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          },
        });
      }
    })
  }


/* Image Gallery Section Table Data Fetch. */
function updateImageSectionTable(BASEURL) {
  $.ajax({
    url: BASEURL + "/manage/get-image-section",
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      if (data.status) {
        SetDataInImageSectionTable(
          data.return.data,
          data.return.images,
          data.return.pages
        );
      }
    },
  });
}

/* Image Gallery Section Table Set in Table. */
function SetDataInImageSectionTable(data, images_list, pages_list) {
  var num = 1;
  var table = $("#imageSection_table").DataTable();
  let tbdata = [];

  if (data.length) {
    data.forEach((el) => {
      let products_list = "";
      let page_list = "";
      let action = `<button class="btn btn-primary btn-sm" onclick="edit_imageSection(${el.id})"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>                                     
            <button class="btn btn-danger btn-sm" onclick="delete_imageSection(${el.id})"><i class="fa fa-trash" aria-hidden="true"></i></button>`;
      var jsondata = get_json_data(el.images);
      var jsondatapages = get_json_data(el.pages);

      images_list.forEach((pros) => {
        jsondata.forEach((pro) => {
          if (pro == pros.id) {
            products_list += pros.title;
            products_list += ", ";
          }
        });
      });

      pages_list.forEach((pages_all) => {
        jsondatapages.forEach((page_data) => {
          if (page_data == pages_all.id) {
            page_list += pages_all.page_title;
            page_list += ", ";
          }
        });
      });
      let rowData = [num, el.heading, products_list, page_list, action];
      tbdata.push(rowData);
      num++;
    });
  }
  table.destroy();
  $("#imageSection_table").DataTable({
    data: tbdata,
  });
}

/*Delete Video Section Successfully. */
function delete_videoSection(value) {
  Swal.fire({
    title: 'Are you sure you want to delete this record?',
    icon: 'info',
    showDenyButton: true,
    confirmButtonText: 'Yes',
    }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-video-section/" + value,
        type: "POST",
        success: function (data) {
          response = JSON.parse(data);
            if (response.status) {
              Swal.fire({icon:'success', text: response.message}).then((result) => {
                location.reload();
              });
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          },
        });
      }
    })
  }

/* edit video Section Successfully. */
function edit_videoSection(value) {
  var BASEURL = $("#url").val();
  $.ajax({
    url: BASEURL + "/manage/edit-video-section/" + value,
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      if (data.status) {
        var images_id = [];
        var pages_id = [];

        var image = data.data.videos;
        var pages = data.data.pages;

        image = JSON.parse(image);
        pages = JSON.parse(pages);

        $("#video_section_id").val(data.data.id);
        $("#heading").val(data.data.heading);

        $.each(image, function (key, value) {
          images_id.push(value);
        });
        $("#videos").val(images_id);
        $("#videos").trigger("change");

        if (pages.length) {
          $.each(pages, function (key, value) {
            let opt = value.menu + "," + value.sub_menu;
            pages_id.push(opt);
          });
          $("#pages").val(pages_id);
          $("#pages").trigger("change");
          $("#VideosSection").find("button").text("Update Section");
          window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
          $("#pages").val("");
          $("#pages").trigger("change");
        }
      }
    },
  });
}

/* edit Banner Section Successfully. */
function edit_BannerSection(value) {
  var BASEURL = $("#url").val();
  $.ajax({
    url: BASEURL + "/manage/edit-banner-section/" + value,
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      if (data.status) {
        var pages_id = [];
        var pages = data.data.page_id;
        pages = JSON.parse(pages);

        $("#banner_id").val(data.data.id);
        $("#banner_name").val(data.data.banner_name);
        $("#content").val(data.data.content);
        $("#banner_image_temp").val(data.data.banner_image);

        if (pages.length) {
          $.each(pages, function (key, value) {
            let opt = value.menu + "," + value.sub_menu;
            pages_id.push(opt);
          });
          $("#page_id").val(pages_id);
          $("#page_id").trigger("change");
          $("#BannerSection").find("button").text("Update Section");
          window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
          $("#page_id").val("");
          $("#pages").trigger("change");
        }
      }
    },
  });
}

/*Delete Banner Section Successfully. */
function delete_BannerSection(value) {
  Swal.fire({
    title: 'Are you sure you want to delete this record?',
    icon: 'info',
    showDenyButton: true,
    confirmButtonText: 'Yes',
  }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-banner-section/" + value,
        type: "POST",
        success: function (data) {
          response = JSON.parse(data);
            if (response.status) {
              Swal.fire({icon:'success', text: response.message}).then((result) => {
                location.reload();
              });
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          },
        });
      }
    })
  }

/* Banner Section Table Data Fetch. */
function updateBannerSectionTable(BASEURL) {
  $.ajax({
    url: BASEURL + "/manage/get-banner-section",
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      if (data.status) {
        SetDataInBannerSectionTable(data.data);
      }
    },
  });
}

/* Banner Section Table Set in Table. */
function SetDataInBannerSectionTable(data) {
  var num = 1;
  var table = $("#BannerSection_table").DataTable();
  let Banner_table = [];
  console.log(data);
  if (data.length) {
    data.forEach((iteration) => {
      let action = `<button class="btn btn-primary btn-sm" onclick="edit_BannerSection(${iteration.id})"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>                                     
            <button class="btn btn-danger btn-sm" onclick="delete_BannerSection(${iteration.id})"><i class="fa fa-trash" aria-hidden="true"></i></button>`;

      let rowData = [
        num,
        iteration.image,
        iteration.banner_name,
        iteration.content,
        iteration.page_title,
        action,
      ];
      Banner_table.push(rowData);
      num++;
    });
  }

  table.destroy();
  $("#BannerSection_table").DataTable({
    data: Banner_table,
  });
}

/* edit Testimonials Section Successfully. */
function edit_TestimonialsSection(value) {
  var BASEURL = $("#url").val();
  $.ajax({
    url: BASEURL + "/manage/edit-testimonials-section/" + value,
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      if (data.status) {
        var testimonials_ids = [];
        var pages_ids = [];
        var testimonials = data.data.testimonials;
        var pages = data.data.pages_ids;
        testimonials = JSON.parse(testimonials);
        pages = JSON.parse(pages);

        $("#testimonials_id").val(data.data.id);
        $("#heading").val(data.data.heading);

        $.each(testimonials, function (key, value) {
          testimonials_ids.push(value);
        });

        $("#testimonials").val(testimonials_ids);
        $("#testimonials").trigger("change");

        if (pages.length) {
          $.each(pages, function (key, value) {
            let opt = value.menu + "," + value.sub_menu;

            pages_ids.push(opt);
          });
          $("#pages_ids").val(pages_ids);
          $("#pages_ids").trigger("change");
          $("#TestimonialsSection").find("button").text("Update Section");
          window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
          $("#pages_ids").val("");
          $("#pages_ids").trigger("change");
        }
      }
    },
  });
}

/*Delete Testimonials Section Successfully. */
function delete_TestimonialsSection(value) {
  Swal.fire({
    title: 'Are you sure you want to delete this record?',
    icon: 'info',
    showDenyButton: true,
    confirmButtonText: 'Yes',
  }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-testimonials-section/" + value,
        type: "POST",
        success: function (response) {
          response = JSON.parse(response);
            if (response.status) {
              Swal.fire({icon:'success', text: response.message}).then((result) => {
                location.reload();
              });
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          },
        });
      }
    })
  }

/* edit Faq Section Successfully. */
function edit_FaqsSection(value) {
  var BASEURL = $("#url").val();
  $.ajax({
    url: BASEURL + "/manage/edit-faqs-section/" + value,
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      if (data.status) {
        var faqs_ids = [];
        var pages_ids = [];
        var faqs = data.data.faqs_ids;
        var pages = data.data.pages_id;
        faqs = JSON.parse(faqs);
        pages = JSON.parse(pages);

        $("#faqs_section_id").val(data.data.id);
        $("#heading").val(data.data.heading);
        $.each(faqs, function (key, value) {
          faqs_ids.push(value);
        });

        $("#faqs_ids").val(faqs_ids);
        $("#faqs_ids").trigger("change");
        if (pages.length) {
          $.each(pages, function (key, value) {
            let opt = value.menu + "," + value.sub_menu;

            pages_ids.push(opt);
          });
          $("#pages_id").val(pages_ids);
          $("#pages_id").trigger("change");
          $("#FaqsSection").find("button").text("Update Section");
          window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
          $("#pages_id").val("");
          $("#pages_id").trigger("change");
        }
      }
    },
  });
}

/*Faqs Testimonials Section deleted Successfully. */
function delete_FaqsSection(value) {
  Swal.fire({
    title: 'Are you sure you want to delete this record?',
    icon: 'info',
    showDenyButton: true,
    confirmButtonText: 'Yes',
  }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-faqs-section/" + value,
        type: "POST",
        success: function (response) {
          response = JSON.parse(response);
          if (response.status) {
            Swal.fire({icon:'success', text: response.message}).then((result) => {
              location.reload();
            });
          } else {
            Swal.fire({icon:'error', text: response.message});
          }
        },
      });
    }
  })
}


/*Post Testimonials Section deleted Successfully. */
function delete_PostSection(value) {
  Swal.fire({
    title: 'Are you sure you want to delete this record?',
    icon: 'info',
    showDenyButton: true,
    confirmButtonText: 'Yes',
  }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-post-section/" + value,
        type: "POST",
        success: function (data) {
          response = JSON.parse(data);
          if (response.status) {
            Swal.fire({icon:'success', text: response.message}).then((result) => {
              location.reload();
            });
          } else {
            Swal.fire({icon:'error', text: response.message});
          }
        },
      });
    }
  })
}

/* edit Mlc Section Successfully. */
function edit_MlcSection(value) {
  var BASEURL = $("#url").val();
  $.ajax({
    url: BASEURL + "/manage/edit-mlc-section/" + value,
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      if (data.status) {
        var mlc_ids = [];
        var pages_ids = [];
        var mlcs = data.data.mlc_ids;
        var pages = data.data.pages;
        mlcs = JSON.parse(mlcs);
        pages = JSON.parse(pages);

        $("#mlc_section_id").val(data.data.id);
        $("#heading").val(data.data.heading);
        $.each(mlcs, function (key, value) {
          mlc_ids.push(value);
        });

        $("#mlc_ids").val(mlc_ids);
        $("#mlc_ids").trigger("change");

        if (pages.length) {
          $.each(pages, function (key, value) {
            let opt = value.menu + "," + value.sub_menu;
            pages_ids.push(opt);
          });
          $("#pages").val(pages_ids);
          $("#pages").trigger("change");
          $("#MCLSection").find("button").text("Update Section");
          window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
          $("#pages").val("");
          $("#pages").trigger("change");
        }
      }
    },
  });
}

/*Post mlc Section deleted Successfully. */
function delete_MlcSection(value) {
  Swal.fire({
    title: 'Are you sure you want to delete this record?',
    icon: 'info',
    showDenyButton: true,
    confirmButtonText: 'Yes',
  }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-mlc-section/" + value,
        type: "POST",
        success: function (response) {
          response = JSON.parse(response);
            if (response.status) {
              Swal.fire({icon:'success', text: response.message}).then((result) => {
                location.reload();
              });
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          },
        });
      }
    })
  }

/* edit Query Section Successfully. */
function edit_QuerySection(value) {
  var BASEURL = $("#url").val();
  $.ajax({
    url: BASEURL + "/manage/edit-business-section/" + value,
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      if (data.status) {
        var pages_ids = [];
        var pages = data.data.pages_id;
        pages = JSON.parse(pages);
        $("#query_section_id").val(data.data.id);
        $("#heading").val(data.data.heading);
        if (pages.length) {
          $.each(pages, function (key, value) {
            let opt = value.menu + "," + value.sub_menu;
            pages_ids.push(opt);
          });
          $("#pages_id").val(pages_ids);
          $("#pages_id").trigger("change");
          $("#QuerySection").find("button").text("Update Section");
          window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
          $("#pages_id").val("");
          $("#pages_id").trigger("change");
        }
      }
    },
  });
}


function edit_PostSection(value) {
  var BASEURL = $("#url").val();
  $.ajax({
    url: BASEURL + "/manage/edit-post-section/" + value,
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      if (data.status) {
        var pages_ids = [];
        var pages = data.data.pages_id;
        pages = JSON.parse(pages);
        $("#post_section_id").val(data.data.id);
        $("#heading").val(data.data.heading);
        if (pages.length) {
          $.each(pages, function (key, value) {
            let opt = value.menu + "," + value.sub_menu;
            pages_ids.push(opt);
          });
          $("#pages_id").val(pages_ids);
          $("#pages_id").trigger("change");
          $("#PostSection").find("button").text("Update Section");
          window.scrollTo({ top: 0, behavior: 'smooth' });
        } else {
          $("#pages_id").val("");
          $("#pages_id").trigger("change");
        }
      }
    },
  });
}

/*Post Testimonials Section deleted Successfully. */
function delete_QuerySection(value) {
  Swal.fire({
    title: 'Are you sure you want to delete this record?',
    icon: 'info',
    showDenyButton: true,
    confirmButtonText: 'Yes',
  }).then((result) => {
    if (result.isConfirmed) {
      var BASEURL = $("#url").val();
      $.ajax({
        url: BASEURL + "/manage/delete-business-section/" + value,
        type: "POST",
        success: function (data) {
          var response = JSON.parse(data);
            if (response.status) {
              Swal.fire({icon:'success', text: response.message}).then((result) => {
                location.reload();
              });
            } else {
              Swal.fire({icon:'error', text: response.message});
            }
          },
        });
      }
    })
  }

function get_arrange_section(menuId, pageid) {
  $(".arrange_box").addClass("arrange_box");
  $(".arrange_box").removeClass("arrange_box_after");
  $("#arrange_box" + menuId + pageid).addClass("arrange_box_after");

  var BASEURL = $("#url").val();
  var list = "";
  let num = 1;
  $.ajax({
    url: BASEURL + "/manage/get-arrange-section/" + menuId + "/" + pageid,
    type: "GET",
    success: function (data) {
      data = JSON.parse(data);
      var old_arrange = data.old_arrange;
      var list_data = data.data;

      var obj4 = Object.assign({}, list_data, old_arrange);
      var mergedObject = Object.values(obj4);

      if (data.status) {
        if (mergedObject.length) {
          list += `<ul id="arrange_section_1">`;
          $.each(mergedObject, function (key, old) {
            list += `<li class ="custom_arrange" value="${old.menu_id},${old.submenu_id},${old.section_id},${old.soroting_order},${old.section_title},${old.title}">${old.section_title} (${old.title})</li>`;
            num++;
          });
          list += "</ul>";
        }
        list += `<div class="text-right"><button class="btn btn-primary">Update</button></div>`;
      }
      $("#arrange_list").html(list);
      new Sortable(document.getElementById("arrange_section_1"), {});
    },
  });
}

function get_json_data(data) {
  return JSON.parse(data);
}