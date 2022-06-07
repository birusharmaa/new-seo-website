<?php $this->session = \Config\Services::session();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
	<title>Sign in</title>
	<?php include 'Layout/cssLinks.php';?>
</head>
<body class="main-body leftmenu light-horizontal light-theme color-header color-leftmenu login-img" >
	<div class="page main-signin-wrapper">
		<!-- Row -->
		<div class="row signpages text-center m-auto ">
			<div class="col-md-12">

					<div class="row row-sm ">
						<div class="col-lg-6 col-xl-5 d-none  d-lg-block text-center bg-primary details">
							<div class="mt-5 pt-4 p-2 pos-absolute ">
								<!-- <img src="<?=base_url();?>/assets/img/brand/logo-light.png" class="header-brand-img mb-4" alt="logo"> -->
				
								<div class="clearfix"></div>
								<div class="admin-img" >
								<img
									src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/img/pngs/admin1.png"
									class="ht-100 mb-0"
									alt="user"
								/>
								</div>
							
								<h5 class="mt-4 text-white">Create Your Account</h5>
								<span class="tx-white-6 tx-13 mb-5 mt-xl-0">
									Signup to create, discover and connect with the global community
								</span>
							</div>
						</div>
						<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form">
							<div class="container-fluid">
								<div class="row row-sm">
									<div class="card-body mt-2 mb-2">
										<!-- <img
											src="<?=base_url();?>/assets/img/brand/logo.png"
											class="d-lg-none header-brand-img text-left float-left mb-4"
											alt="logo"
										/> -->
										<div class="clearfix"></div>
										<form id="signUp-form" action="/manage/user-auth" method="post">
											<h4 class="text-left mb-2 text-center ">Signin to Your Account</h4>
											<p class="mb-4 text-muted tx-13 ml-0 text-left text-center">
												Signin to create, discover and connect with the global
												community
											</p>
											<?php if($this->session->getFlashdata('login_error')) { ?>	
													<div class="alert alert-danger" role="alert">
														<?php echo $this->session->getFlashdata('login_error');?>	
													</div>
												<?php }?>
											
											<div class="form-group text-left">
												<label style="font-weight:600">Email</label>
												<input class="form-control text-dark" value="<?php echo set_value('email'); ?>" name="email" id="email" placeholder="Enter your email" type="email"/>
											</div>
											<div class="form-group text-left">
												<label style="font-weight:600">Password</label>
												<input class="form-control text-dark" value="<?php echo set_value('password'); ?>" name="password" id="password" placeholder="Enter your password" type="password"/>
											</div>
											<button type="submit" class="btn ripple btn-primary mt-3 btn-block">
												Sign In
											</button>
										</form>
										<div class="text-left mt-3 ml-0">
											<div class="mb-1"><a href="<?php echo base_url('forget-password')?>">Forgot password?</a></div>
											<div class="fw-bold" style="display:none;">
												Don't have an account? <a href="#">Register Here</a>
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
	$(document).ready(function() {
		// $("#signUp-form").validate({
		// 	errorClass: "is-invalid",
		// 	rules: {
		// 		email: {
		// 			required: true,
		// 			email: true,
		// 		},
		// 		password: {
		// 			required: true,
		// 			minlength: 6
		// 		},
		// 	},
		// 	messages: {
		// 		email: {
		// 			required: "Please enter your email",
		// 			email: "Please enter valid email id",
		// 		},
		// 		password: {
		// 			required: "Please enter the password",
		// 			minlength: "Password length must be atleast 6 ",
		// 		},
		// 	},
		// 	submitHandler: function(form) {  
		// 			const BASEURL = '<?= base_url(); ?>';
		// 			let formData = $('#signUp-form').serialize();
		// 			let URL = BASEURL + '/user-auth';				
		// 		$.ajax({
		// 			url: URL,
		// 			type: "POST",
		// 			data: formData,
		// 			success: function(response) {
		// 				response= JSON.parse(response);
		// 				if(response.status){
		// 					window.location.href='<?php echo base_url();?>'+response.path;
		// 					Notify.success(response.message);
		// 				}else{	
														
		// 					window.location.href='<?php echo base_url();?>';
		// 					Notify.failure(response.message);
		// 				}								
		// 			}            
		// 		});
		// 	}
		// });
    });
</script>
</body>
</html>