<?= $this->extend('template/main');?>

<?= $this->section('content');?>

	<!-- Page Header -->
	<div class="page-header">
		<div>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">
					My Profile
				</li>
			</ol>
		</div>
	</div>

    <!-- row -->
	<div class="row square mx-auto">
		<div class="col-lg-12 col-md-12">
			<div class="card custom-card shadow">
				<div class="card-body">
					<div class="panel profile-cover">
						<div class="profile-cover__img">
							<?php if($userInfo->company_logo){ ?>
								<img src="<?php echo base_url().$userInfo->company_logo?>" alt="img" />
							<?Php }else{ ?>
								<img src="assets/img/users/1.jpg" alt="img" />
							<?php }?>												
							<h3 class="h3 "><?= $userInfo->user_name?></h3>
						</div>
				
						<div class="profile-cover__action bg-img"></div>
						<div class="profile-cover__info">
							<ul class="nav">
							</ul>
						</div>
					</div>
					<div class="profile-tab pt-5 mt-4 tab-menu-heading">
						<nav class="nav main-nav-line p-3 tabs-menu profile-nav-line bg-gray-100">
							<a class="nav-link  active" data-toggle="tab" href="#about">About</a>
							<a class="nav-link" data-toggle="tab" href="#edit">Edit Profile</a>
							<a class="nav-link" data-toggle="tab" href="#password">Change Password</a>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row row-sm mx-auto">
		<div class="col-lg-12 col-md-12">
			<div class="card custom-card main-content-body-profile shadow">
				<div class="tab-content">
					<div class="main-content-body tab-pane p-4 border-top-0 active" id="about">
						<div class="card-body p-0 border p-0 rounded-10">
							
							<div class="border-top"></div>
							<div class="p-4">
								<label class="main-content-label tx-13 mg-b-20">Contact</label>
								<div class="d-sm-flex">
									<div class="mg-sm-r-20 mg-b-10">
										<div class="main-profile-contact-list">
											<div class="media">
												<div class="media-icon bg-primary-transparent text-primary"> <i class="icon ion-md-phone-portrait"></i> </div>
												<div class="media-body"> <span>Mobile</span>
													<div><?= $userInfo->user_phone?>	</div>
												</div>
											</div>
										</div>
									</div>
									<div class="mg-sm-r-20 mg-b-10">
										<div class="main-profile-contact-list">
											<div class="media">
												<div class="media-icon bg-success-transparent text-success"> <i class="fas fa-envelope fa-fw"></i> </div>
												<div class="media-body"> <span>Email</span>
													<div><?= $userInfo->user_email?> </div>
												</div>
											</div>
										</div>
									</div>
									<div class="" style="display:none">
										<div class="main-profile-contact-list">
											<div class="media">
												<div class="media-icon bg-info-transparent text-info"><i class="far fa-address-card" ></i> </div>
												<div class="media-body"> <span>Address</span>
													<div> San Francisco, CA </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="border-top"></div>
							
						</div>
					</div>
					<div class="main-content-body tab-pane p-4 border-top-0" id="edit">
					<div class="border-top"></div>
						<div class="card-body border">
							<div class="mb-4 main-content-label">Personal Information</div>
							<input type="hidden" name="user_id" id="user_id" value="<?= $userInfo->id?>">
							<input type="hidden" name="url" id="url" value="<?php echo base_url();?>">
							<form class="form-horizontal" id="personalInfoForm">
								<div class="form-group ">
									<div class="row row-sm">
										<div class="col-md-3">
											<label class="form-label font-weight-bold">Name</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" name="user_name" id="user_name" placeholder="User Name" value="<?= $userInfo->user_name?>">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="row row-sm">
										<div class="col-md-3">
											<label class="form-label font-weight-bold">Email</label>
										</div>
										<div class="col-md-9">
											<input type="email" class="form-control" name="user_email" id="user_email"  placeholder="Email" value="<?= $userInfo->user_email?>">
										</div>
									</div>
								</div>
							
								<div class="form-group">
									<div class="row row-sm">
										<div class="col-md-3">
											<label class="form-label font-weight-bold">Phone</label>
										</div>
										<div class="col-md-9">
											<input type="text" class="form-control" name="user_phone" id="user_phone" placeholder="phone" value="<?= $userInfo->user_phone?>">
										</div>
									</div>
								</div>

								<div class="text-right">
									<button class="btn btn-primary btn-sm">Save Profile</button>
								</div>
							</form>
						</div>
						<div class="border-top"></div>
					</div>
					<div class="main-content-body tab-pane p-4 border-top-0" id="password">
					<div class="border-top"></div>
				<div class="card-body border">
					<div class="mb-4 main-content-label">Profile Security</div>
						<form class="form-horizontal" id="profileSecurity">
							<div class="form-group" style="display:none">
								<div class="row row-sm">
									<div class="col-md-3">
										<label class="form-label font-weight-bold">Old Password</label>
									</div>
									<div class="col-md-9">
										<input type="password" class="form-control" placeholder="Enter Password">
									</div>
								</div>
							</div>
							<div class="form-group ">
								<div class="row row-sm">
									<div class="col-md-3">
										<label class="form-label font-weight-bold">New Password</label>
									</div>
									<div class="col-md-9">
										<input type="password" name="password" id="Newpassword" class="form-control" placeholder="Enter Password">
									</div>
								</div>
							</div>
						
							<div class="form-group ">
								<div class="row row-sm">
									<div class="col-md-3">
										<label class="form-label font-weight-bold">Confirm Password</label>
									</div>
									<div class="col-md-9">
										<input type="password" name="confpassword" id="confpassword" class="form-control" placeholder="Enter Password" >
									</div>
								</div>
							</div>
							
							<div class="text-right">
								<button class="btn btn-primary">Save Password</button>
							</div>
						</form>
					</div>
				<div class="border-top"></div>
			</div>
		</div>
	</div>
	<!-- End row -->

<?= $this->endSection();?>

<?= $this->section('script');?>
<script src="<?php echo base_url('assets/js/mycustomscripts.js')?>"></script>
<!-- <script src="<?php echo base_url('assets/js/othercustomscripts.js')?>"></script> -->
<?= $this->endSection();?>
