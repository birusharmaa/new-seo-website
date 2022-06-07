<?= $this->extend('template/main');?>
<?= $this->section('content');?>
<?php $session = \Config\Services::session()?>

	<!-- Page Header -->
	<div class="page-header">
		<div>
			<h2 class="main-content-title tx-24 mg-b-5">
				<?= $title;?>
			</h2>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#"><?= $title;  ?></a></li>
				<li class="breadcrumb-item active" aria-current="page">
					All Plugins
				</li>
				<li class="breadcrumb-item active" aria-current="page">
					<?= $title;  ?>
				</li>
			</ol>
		</div>
	</div>
	<!-- End Page Header -->
	<!--Row-->
	<div class="row row-sm mx-auto">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<div class="card custom-card overflow-hidden shadow">
						<div class="card-header border-bottom-0">
							<div>
								<label class="main-content-label mb-2">Monthly Visit</label> 
							</div>
						</div>
						<div class="card-body pl-0">
							<div class>
								<div class="container">
									<canvas id="chartLine" class="chart-dropshadow2 ht-250"></canvas>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">

				<div class="row">
					<div class="col-md-6">
					<div class="card custom-card overflow-hidden shadow">
						<div class="card-header  border-bottom-0 ">
							<div>
								<label class="main-content-label my-auto pt-2">
								<div class="media-icon bg-primary-transparent text-primary"><i class="fa fa-eye"></i></i></div>
								</label>
								<h3 class="d-block mt-2 mb-0 text-uppercase fw-bold">25956 </h3>

								<p class="d-block mt-2 mb-0 ">Total views </p>
								<p class="d-block  mb-0 text-muted">Total No. of Customer Visits </p>
							</div>
						</div>
					
					</div>
				</div>
					
				<div class="col-md-6">
					<div class="card custom-card overflow-hidden shadow">
						<div class="card-header border-bottom-0">
								<div>
									<label class="main-content-label my-auto pt-2">
									<div class="media-icon bg-danger-transparent text-danger"><i class="fa fa-rupee-sign"></i></div>
									</label>
									<h3 class="d-block mt-2 mb-0 text-uppercase fw-bold">Paid </h3>

									<p class="d-block mt-2 mb-0 ">Status </p>
									<p class="d-block  mb-0 text-muted">Expired in : 27 days </p>
								</div>
							</div>												
						</div>
					</div>
				</div>
			</div>                                    
		</div>						
		<?php // print_r($plugin_info); ?>					
		
			<div class="tab-content mt-4 mb-5">
		<!-- Panel 1 -->
		<div class="tab-pane fade in show active" id="panel555" role="tabpanel">
			<!-- Nav tabs -->
			<div class="row">
				<div class="col-md-3">
					<ul class="nav md-pills pills-primary flex-column" role="tablist">
						<li class="nav-item">
							<a class="nav-link tab active font-weight-bold side-links" data-toggle="tab" href="#panel21" role="tab">General
						
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link tab font-weight-bold side-links" data-toggle="tab" href="#panel22" role="tab">Change Password
					
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link tab font-weight-bold side-links" data-toggle="tab" href="#panel23" role="tab">Plugin Info

							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link tab font-weight-bold side-links" data-toggle="tab" href="#panel24" role="tab">Social Links

							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link tab font-weight-bold side-links" data-toggle="tab" href="#panel25" role="tab">Plugin Code
							</a>
						</li>
					</ul>
				</div>
			<div class="col-md-9 m-auto box-shadow">
				<!-- Tab panels -->
				<div class="tab-content vertical p-3">
					<!-- Panel 1 -->
					<div class="tab-pane fade in show active" id="panel21" role="tabpanel">											
						<input type="hidden" name="plugin_id" value="<?=  $plugin_info->id?>" id="plugin_id"> 
						<form class="form-horizontal" id="plugininfoupdate" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group ">					
										<div class="mb-3">
											<label class="form-label font-weight-bold">First Name</label>
											<input type="text" class="form-control" name="first_name" id="first_name" value="<?= $plugin_info->first_name; ?>" placeholder="Enter Customer Name" >
										</div>
									</div>	
								</div>
								<div class="col-md-6">
									<div class="form-group ">					
										<div class="mb-3">
											<label class="form-label font-weight-bold">Last Name</label>
											<input type="text" class="form-control" name="last_name" id="last_name" value="<?= $plugin_info->last_name; ?>" placeholder="Enter Customer Name" >
										</div>
									</div>		
								</div>
							</div>											
							
							<div class="form-group ">
								<div class="mb-3">							
									<label class="form-label font-weight-bold">Email</label>
									<input type="email" class="form-control" name="email" id="email" value="<?= $plugin_info->email; ?>"  placeholder="Enter Email">
								</div>									
							</div>							
							<div class="form-group ">
								<div class="mb-3">
									<label class="form-label font-weight-bold">Phone No.</label>
									<input type="text" class="form-control" name="phone" id="phone" value="<?= $plugin_info->phone; ?>"  placeholder="Enter phone">
								</div>
							</div>
							<div class="form-group ">			
								<div class="mb-3">
									<div class="row">
										<div class="col-md-9">
										<label class="form-label font-weight-bold">Logo</label>														
										<input type="file" class="form-control" accept="image/*" name="plugin_logo" id="plugin_logo">
										<input type="hidden" name="plugin_logo_set" id="plugin_logo_set" value="<?= isset($plugin_logo->plugin_logo) ? $plugin_logo->plugin_logo : '' ?>">															
										</div>
										<div class="col-md-3">															  	
											<?php if($plugin_logo->plugin_logo != '') { ?>
												<span class="text-primary">uploaded image</span>
												<img src="<?=base_url($plugin_logo->plugin_logo);?> " alt="">																	
											<?php }else{ ?>
												<span class="text-primary">demo image</span>
												<img src="<?=base_url();?>/assets/img/users/comapny.jpg" alt="">
											<?php  }?>                                                            
										</div>
									</div>
									
								</div>
							</div>
							<div class="text-right">
								<button  type="submit" class="btn btn-primary">Save changes</button>
							</div>
						</form>
					</div>
					<!-- Panel 1 -->
					<!-- Panel 2 -->
					<div class="tab-pane fade" id="panel22" role="tabpanel">
						<form class="form-horizontal" id="pluginPassChange">
							<div class="form-group ">				
								<div class="mb-3">
									<label class="form-label font-weight-bold">Password</label>	
									<input type="password" class="form-control" name="password" id="password" value="" placeholder="Enter password">
								</div>
							</div>	
							<div class="form-group ">				
								<div class="mb-3">
									<label class="form-label font-weight-bold">Confirm Password</label>	
									<input type="password" class="form-control" name="confirmpassword" id="confirmpassword"  placeholder="Enter password">
								</div>
							</div>				
							<div class="text-right">
								<button  type="submit" class="btn btn-primary btn-sm">Change Password</button>
							</div>
						</form>
					</div>
					<!-- Panel 2 -->
					<!-- Panel 3 -->
					<div class="tab-pane fade" id="panel23" role="tabpanel">
						<form class="form-horizontal" id="pluginupdate">
							<div class="form-group ">			
								<div class="mb-3">
									<div class="row">
										<div class="col-md-9">
										<label class="form-label font-weight-bold">Background Image</label>
											<input type="file" class="form-control" name="plugin_logo" id="plugin_logo">
										</div>
										<div class="col-md-3">
											<?php if($plugin_info->plugin_logo != '') { ?>
												<span class="text-primary">uploaded image</span>
												<img src="<?=base_url($plugin_info->plugin_logo);?>" alt="">
												<input type="hidden" name="plugin_logo_old" value="<?php if($plugin_info->plugin_logo !=''){ echo $plugin_info->plugin_logo; }else{ echo ''; }?>">
											<?php }else{ ?>
												<span class="text-primary">demo image</span>
												<img src="<?=base_url();?>/assets/img/users/comapny.jpg" alt="">
											<?php  }?> 
										</div>
									</div>														
								</div>
							</div>
							<div class="form-group ">
								<div class="mb-3">
									<label class="form-label font-weight-bold">Business Name </label>
									<input type="text" name="business_name" id="business_name" value="<?= $plugin_info->business_name  ?>" class="form-control" placeholder="Enter Business name">
								</div>
							</div>
							<div class="form-group ">
								<div class="mb-3">
									<label class="form-label font-weight-bold">Business Description</label>
									<textarea class="form-control" name="business_description" id="business_description" placeholder="Your business description data here...." rows="3"><?=  $plugin_info->business_description  ?></textarea>
								</div>
							</div>
								
							<div class="row">
								<div class="col-md-6">
									<div class="form-group ">
										<div class="mb-3">
											<label class="form-label font-weight-bold">Business Address</label>
											<input type="text" class="form-control" name="address" id="address" value="<?= $plugin_info->address; ?>">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group ">
										<div class="mb-3">
											<label class="tx-gray-600 font-weight-bold ">Country </label>
											<select name="country"  id="country" class="form-control select" onchange="getActiveSateById(this.value);">
												<option value="">Select</option>
												<?php if($country): foreach($country as $value): ?>
													<option value="<?= $value->id; ?>"  <?php if($plugin_info->country== $value->id) echo 'selected'; ?>><?= $value->country_name; ?></option>
												<?php endforeach; endif; ?>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<label class="tx-gray-600 font-weight-bold ">State</label>
										<select name="state" class="form-control select" id="state" onchange="getActiveCityById(this.value);">	
											<?php if($state): foreach($state as $value): ?>
												<option value="<?= $value->id; ?>"  <?php if($plugin_info->state== $value->id) echo 'selected'; ?>>
													<?= $value->state_name; ?>
												</option>
											<?php endforeach; endif; ?>															
										</select>
									</div>			
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="tx-gray-600 font-weight-bold">City</label>
										<select name="city" id="city" class="form-control select" onchange="getActiveLocalityById(this.value);">
											<?php if($city): foreach($city as $value): ?>
												<option value="<?= $value->id; ?>"  <?php if($plugin_info->city== $value->id) echo 'selected'; ?>>
													<?= $value->city_name; ?>
												</option>
											<?php endforeach; endif; ?>	
										</select>
									</div>			
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="tx-gray-600 font-weight-bold">Locality</label>
										<select name="locality" id="locality" class="form-control select" onchange="getActivePincodeById(this.value);">
											<?php if($locality): foreach($locality as $value): ?>
												<option value="<?= $value->id; ?>"  <?php if($plugin_info->locality== $value->id) echo 'selected'; ?>>
													<?= $value->locality_name; ?>
												</option>
											<?php endforeach; endif; ?>	
										</select>
									</div>			
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label class="tx-gray-600 font-weight-bold ">Pin Code</label>															
										<select name="pin_code" id="pin_code" class="form-control select">
											<?php if($pincode): foreach($pincode as $value): ?>
												<option value="<?= $value->id; ?>"  <?php if($plugin_info->pin_code== $value->id) echo 'selected'; ?>>
													<?= $value->pincode; ?>
												</option>
											<?php endforeach; endif; ?>	
										</select>
									</div>					
								</div>

							</div>
							<!-- <div class="form-group ">
								<label class="form-label font-weight-bold">Phone No.</label>
								<input type="text" class="form-control" name="phone" id="phone" placeholder="phone" value="<?= $plugin_info->phone ?>">
							</div> -->
							<div class="form-group ">
								<label class="form-label font-weight-bold">Website URL</label>
								<input type="text" class="form-control" name="website_domain" id="website_domain" value="<?= $plugin_info->website_domain ?>">
							</div>
							<div class="form-group ">
								<label class="form-label font-weight-bold">Plugin  Appearance </label>
								<select class="form-control" name="plugin_appearance" id="plugin_appearance">
									<option value="1" <?php if($plugin_info->plugin_appearance ==1) echo 'selected';?>>Left</option>
									<option value="2" <?php if($plugin_info->plugin_appearance ==2) echo 'selected';?>>Right</option>
								</select>
							</div>
							<div class="text-right">
								<button  type="submit" class="btn btn-primary btn-sm">Save changes</button>
							</div>
						</form>
					</div>
					<!-- Panel 3 -->
					<!-- Panel 4 -->
					<div class="tab-pane fade" id="panel24" role="tabpanel">
						<form class="form-horizontal" id="pluginsocialupdate">
							<div class="form-group ">
								<div class="mb-3">
									<label class="form-label font-weight-bold">Facebook</label>
									<input type="text" class="form-control" placeholder="Add Facebook Link" name="facebook_link"  id="facebook_link" value="<?= $plugin_info->facebook_link?>" >
								</div>
							</div>
							<div class="form-group ">
								<div class="mb-3">
									<label class="form-label font-weight-bold">Twitter</label>
									<input type="email" class="form-control" placeholder="Add Twitter Link" name="twitter_link"  id="twitter_link" value="<?= $plugin_info->twitter_link?>" >
								</div>
							</div>
							<div class="form-group ">
								<div class="mb-3">
									<label class="form-label font-weight-bold">Google Plus</label>
									<input type="text" class="form-control" placeholder="Add Google Plus Link" name="google_link"  id="google_link" value="<?= $plugin_info->google_link?>" >
								</div>
							</div>
							<div class="form-group ">
									<label class="form-label font-weight-bold">LinkedIn</label>
									<input type="text" class="form-control" placeholder="Add LinkedIn Link"  name="linkedIn_link"  id="linkedIn_link" value="<?= $plugin_info->linkedIn_link?>">
							</div>
							<div class="text-right">
								<button type="submit" class="btn btn-primary btn-sm">Save changes</button>
							</div>
						</form>
					</div>

					<div class="tab-pane fade" id="panel25" role="tabpanel">
						<form id="plugin_code_update">
							<div>
								<div class="form-group">
									<textarea name="plugin_code" id="plugin_code" rows="6" class="form-control"><?= $plugin_info->plugin_code; ?></textarea>						
								</div>											
								<div class="text-right">
									<button type="submit" class="btn btn-primary btn-sm">Validate</button>
								</div> 
							</div>
						</form>
					</div>

				</div>
			</div>
			</div>
			<!-- Nav tabs -->

		</div>

	</div>
			
		</div>
	</div>
	<!-- Row end -->

<?= $this->endSection();?>

<?= $this->section('script');?>
<script src="<?php echo base_url('assets/js/mycustomscripts.js')?>"></script>
<?= $this->endSection();?>
