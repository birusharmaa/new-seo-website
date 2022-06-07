<!DOCTYPE html>
<html lang="en">
<head>
<head>
		<meta charset="utf-8" />
		<meta
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
			name="viewport"
		/>
		<title>Demo template</title>
		<?php include 'Layout/cssLinks.php'; ?>
	</head>
</head>
<body class="main-body leftmenu light-horizontal light-theme color-header color-leftmenu login-img" >
<div class="page main-signin-wrapper">
			<!-- Row -->
			<div class="row signpages text-center m-auto ">
				<div class="col-md-12">
			
						<div class="row row-sm ">
							<div
								class="col-lg-6 col-xl-5 d-none  d-lg-block text-center bg-primary details"
							>
								<div class="mt-5 pt-4 p-2 pos-absolute ">
									<!-- <img src="<?=base_url();?>/assets/img/brand/logo-light.png" class="header-brand-img mb-4" alt="logo"> -->
					
									<div class="clearfix"></div>
									<div class="admin-img" >
									<img
										src="<?=base_url();?>/public/assets/img/pngs/admin1.png"
										class="ht-100 mb-0"
										alt="user"
									/>
									</div>
								
								
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 p-4  col-xs-12 col-sm-12 login_form">
								<div class="container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											<!-- <img
												src="<?=base_url();?>/assets/img/brand/logo.png"
												class="d-lg-none header-brand-img text-left float-left mb-4"
												alt="logo"
											/> -->
											<div class="clearfix"></div>
											<form id="password-form" action="#">
												<h4 class="text-left mb-2 text-center ">Forgot Password ?</h4>
												<p class="mb-4 text-muted tx-13 ml-0 text-left text-center">
												Please Enter your Emial address
												</p>
												<div class="form-group text-left">
													<label style="font-weight:600">Email</label>
													<input
														class="form-control text-dark" name="email" id="email"
														placeholder="Enter your email"
														type="email"
													/>
												</div>	
												<button class="btn ripple btn-primary mt-3 btn-block">
													Generate OTP
												</button>
											</form>
											    <a href="<?= base_url();?>">
													Go back
												</a>
											<!-- <div class="text-left mt-3 ml-0 ">
												<div class="mb-1"><a href="<?=base_url();?>/forget-password">Forgot password?</a></div>
												<div class="fw-bold">
													Don't have an account? <a href="#">Register Here</a>
												</div>
											</div> -->



											<div class="Password-form  p-0">
                                    		<div id="MyForm" style="display:none">
												<div class="form-group text-left">
													<div id="validate_message"></div>
													<label style="font-weight:600">Enter OTP</label>
													<input class="form-control text-dark"  name="OTP" id="field" placeholder="Enter OTP" type="text" maxlength="6"/>
													<input type="hidden" name="saved_id" id="saved_id" value="">
												</div>
                                        		<div class="form-group">
													<button type="submit"  id="OTPfilled" class="btn ripple btn-primary mt-2 btn-block">Verify</button>
													<a href="<?= base_url();?>">
    													Go back
    												</a>
													<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
														<div class="modal-dialog">
															<div class="modal-content" style="margin-top:75px">
																<div class="modal-header red-bg">
																	<h5 class="modal-title text-white" id="exampleModalLabel">  Reset Password </h5>
																	<button type="button" class="btn-close bg-white"
																		data-bs-dismiss="modal" aria-label="btn-close">
																	</button>
																</div>
																<div class="modal-body">
																	<form action="#" method="POST" class="px-5 py-2" id="Reset-Password">
																		<input type="hidden" name="user_email" id="user_email">
																		<div class="form-group text-left">
																			<label style="font-weight:600">New Password</label>
																			<input class="form-control text-dark" id="matchPassword" name="password" placeholder="password" type="password" maxlength="6"/>
																		</div>
																		<div class="form-group text-left">
																			<label style="font-weight:600">Confirm Password</label>
																			<input class="form-control text-dark" name="confirmPassword" placeholder="Confirm password" id="matchConfirmPassword" maxlength="6" type="password"/>
																		</div>
																		<div class="text-end">
																			<a href="<?=base_url();?>/">
																				<button type="submit" class="btn ripple btn-primary mt-2 btn-block">
																					Save Password
																				</button>
																			</a>														
																		</div>
																		<!-- </button> -->
																	</form>
																</div>
															</div>
														</div>
                                           			</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->
		</div>
		<?php include 'Layout/jsLinks.php'; ?>

		<script>
    $("#password-form").validate({
        errorClass: "is-invalid",
        errorElement: "span",
        rules: {
            email: {
                required: true,
                email: true,
            },
        },
        messages: {
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address",
            },
        },
        submitHandler: function(form) {
            $("#MyForm").css({
                padding: "10px"
            });
            $("#MyForm").show(500);
            // $("#MyForm").css("padding", "10px");
            $("#password-form").hide(500);			
			$.ajax({
				url: '<?php echo base_url('send-otp');?>',
				type: "POST",
				data: $('#password-form').serialize(),
				success: function(response) {
					response= JSON.parse(response);	
					if(response.return){
						$('#saved_id').val(response.saved_id);
						
					}								
				}            
			});
        },
        //
    });


    $(document).ready(function() {
        $('#OTPfilled').on('click', function() {
            const field = $('#field').val().length;
			const otp = $('#field').val();
			const saveid = $('#saved_id').val().length;
            if (field === 6) {
               
				$.ajax({
					url: '<?php echo base_url('verify-otp');?>',
					type: "POST",
					data: {
						otp:otp,
						saveid:saveid
					},
					success: function(response) {
						response= JSON.parse(response);
						$("#validate_message").innerHTML= response.message;
						if(response.success){
							$("#user_email").val(response.data.email);							
							$("#exampleModal").modal('show');							
						}								
					}            
				});

            } else {
                alert("Please enter the valid OTP")
            }
        });
    });

    $(document).ready(function() {
        $("#Reset-Password").validate({
            errorClass: "is-invalid",
            errorElement: "span",
            rules: {
                password: {
                    required: true,
                    minlength: 6,
                },
                confirmPassword: {
                    required: true,
                    minlength: 6,
                    equalTo: "#matchPassword",
                },
            },
            messages: {
                password: {
                    required: "Please enter your password",
                    minlength: "Your password must be at least 6 characters long",
                },
                confirmPassword: {
                    required: "Please enter your password",
                    minlength: "Your password must be at least 6 characters long",
                    equalTo: "Password does not match",
                },
            },
			submitHandler: function(form) {

				$.ajax({
					url: '<?php echo base_url('password-reset');?>',
					type: "POST",
					data: $('#Reset-Password').serialize(),
					success: function(response) {
						response= JSON.parse(response);
						$("#validate_message").innerHTML= response.message;
						if(response.success){
							window.location.href = '<?=base_url();?>';							
						}								
					}            
				});
			}
        });
    });
    </script>
</body>
</html>