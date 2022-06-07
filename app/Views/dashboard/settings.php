<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

<!-- Page Header -->
<div class="page-header">
	<div>
		<h2 class="main-content-title tx-24 mg-b-5">
			Account Settings
		</h2>
		<ol class="breadcrumb mt-4">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">
				Settings
			</li>
		</ol>
	</div>
</div>
<!-- End Page Header -->

<!-- Tab panels -->
<div class="tab-content">
	<!-- Panel 1 -->
	<div class="tab-pane fade in show active" id="panel555" role="tabpanel">
		<!-- Nav tabs -->
		<div class="row mb-5 pt-3">
			<div class="col-md-3">
				<ul class="nav md-pills pills-primary flex-column" role="tablist">
					<li class="nav-item">
						<a class="nav-link tab active font-weight-bold side-links" data-toggle="tab" href="#panel21" role="tab">Business Info

						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link tab font-weight-bold side-links" data-toggle="tab" href="#panel22" role="tab">Contact

						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link tab font-weight-bold side-links" data-toggle="tab" href="#panel23" role="tab">Currency

						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link tab font-weight-bold side-links" data-toggle="tab" href="#panel24" role="tab">Theme

						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link tab font-weight-bold side-links" data-toggle="tab" href="#panel25" role="tab">Razorpay Setting

						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-9 m-auto box-shadow">
				<!-- Tab panels -->
				<div class="tab-content vertical p-3">
					<!-- Panel 1 -->
					<div class="tab-pane fade in show active" id="panel21" role="tabpanel">
						<input type="hidden" name="user_id" id="user_id" value="<?php echo  $userInfo->id; ?>">
						<form class="form-horizontal" id="OtherBusinessInfo">
							<input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />

							<div class="form-group ">
								<div class="mb-3">
									<label class="form-label font-weight-bold">Business Name *</label>
									<input type="text" class="form-control" name="business_name" id="business_name" value="<?php isset($userInfo->business_name);
																															echo $userInfo->business_name;
																															""; ?>" placeholder="Enter Business Name">
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
									<div class="form-group ">
										<div class="mb-3">
											<label class="form-label font-weight-bold">Domain Url * </label>
											<input type="text" class="form-control" name="domain_url" id="domain_url" value="<?php isset($userInfo->domain_url);
																																echo $userInfo->domain_url;
																																""; ?>" placeholder="Enter valid Domain Url">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group ">
										<div class="mb-3">
											<label class="form-label font-weight-bold">Webiste's Menu Font Size *</label>
											<select class="form-control" name="font_size" id="font_size" value="">
												<option value=""> select </option>
												<option value="10" <?php if ($userInfo->font_size == 10) echo "selected";  ?>> 10 px</option>
												<option value="11" <?php if ($userInfo->font_size == 11) echo "selected";  ?>> 11 px</option>
												<option value="12" <?php if ($userInfo->font_size == 12) echo "selected";  ?>> 12 px</option>
												<option value="13" <?php if ($userInfo->font_size == 13) echo "selected";  ?>> 13 px</option>
												<option value="14" <?php if ($userInfo->font_size == 14) echo "selected";  ?>> 14 px</option>
												<option value="15" <?php if ($userInfo->font_size == 15) echo "selected";  ?>> 15 px</option>
												<option value="16" <?php if ($userInfo->font_size == 16) echo "selected";  ?>> 16 px</option>
												<option value="17" <?php if ($userInfo->font_size == 17) echo "selected";  ?>> 17 px</option>
												<option value="18" <?php if ($userInfo->font_size == 18) echo "selected";  ?>> 18 px</option>
												<option value="19" <?php if ($userInfo->font_size == 19) echo "selected";  ?>> 19 px</option>
												<option value="20" <?php if ($userInfo->font_size == 20) echo "selected";  ?>> 20 px</option>
											</select>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group ">
								<div class="mb-3">
									<label class="form-label font-weight-bold">Business Description *</label>
									<textarea class="form-control" name="business_description" id="business_description"><?php isset($userInfo->business_description);
																															echo $userInfo->business_description;
																															""; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="mb-3">
									<div class="row">
										<div class="col-md-9">
											<label class="form-label font-weight-bold">Business Logo</label>
											<input type="file" class="form-control" accept="image/*" name="business_logo" id="business_logo">
										</div>
										<div class="col-md-3">
											<?php if (isset($userInfo->business_logo)) { ?>
												<img style="width:120px; height:120px; object-fit:cover;" class="img-fluid logo-preview-img mt-4" src="<?php echo base_url().'/uploads/img/business_logo/'.$userInfo->business_logo ?>" alt="">
											<?php } else { ?>
												<img style="width:120px; height:120px; object-fit:cover;" class="logo-preview-img mt-4" src="<?= base_url(); ?>/assets/img/empty.png" alt="">
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="mb-3">
									<div class="row">
										<div class="col-md-9">
											<label class="form-label font-weight-bold">Business Icon</label>
											<input type="file" class="form-control" accept="image/*" name="business_icon" id="business_icon">
										</div>
										<div class="col-md-3">
											<?php if (isset($userInfo->business_icon)) { ?>
												<img style="width:120px; height:120px; object-fit:cover;" class="icon-preview-img mt-4" src="<?php echo base_url().env('SEO_SUBPATH').'/uploads/img/business_icon/'.$userInfo->business_icon ?>" alt="">
											<?php } else { ?>
												<img class="icon-preview-img mt-4" style="width:120px; height:120px; object-fit:cover;" src="<?= base_url().env('SEO_SUBPATH');?>/assets/img/empty.png" alt="">
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
							<div class="text-right">
								<button class="btn btn-primary btn-sm">Save changes</button>
							</div>
						</form>
					</div>
					<!-- Panel 1 -->
					<!-- Panel 2 -->
					<div class="tab-pane fade" id="panel22" role="tabpanel">
						<form class="form-horizontal" id="OtherContact">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<div class="mb-3">
											<label class="form-label font-weight-bold">Business Address *</label>
											<textarea class="form-control" name="business_address" id="business_address" placeholder="Enter business address"><?php isset($userInfo->business_address);
																																								echo $userInfo->business_address;
																																								""; ?></textarea>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div class="mb-3">
											<label class="form-label font-weight-bold">Alternate Address</label>
											<textarea class="form-control" name="alternate_address" id="alternate_address" placeholder="Enter alternate business address"><?php isset($userInfo->alternate_address);
																																											echo $userInfo->alternate_address;
																																											""; ?></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<div class="mb-3">
											<label class="form-label font-weight-bold">Email ID</label>
											<input type="text" class="form-control" name="email_id" id="email_id" value="<?php isset($userInfo->email_id);
																															echo $userInfo->email_id;
																															""; ?>" placeholder="Enter email id">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div class="mb-3">
											<label class="form-label font-weight-bold">Alternate Email ID</label>
											<input type="text" class="form-control" name="alternate_email_id" id="alternate_email_id" value="<?php isset($userInfo->alternate_email_id);
																																				echo $userInfo->alternate_email_id;
																																				""; ?>" placeholder="Enter Alternate Email ID">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<div class="mb-3">
											<label class="form-label font-weight-bold">Mobile</label>
											<input type="text" class="form-control" name="mobile" id="mobile" value="<?php isset($userInfo->mobile);
																														echo $userInfo->mobile;
																														""; ?>" placeholder="Enter mobile">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div class="mb-3">
											<label class="form-label font-weight-bold">Alternate Mobile</label>
											<input type="text" class="form-control" name="alternate_mobile" id="alternate_mobile" value="<?php isset($userInfo->alternate_mobile);
																																			echo $userInfo->alternate_mobile;
																																			""; ?>" placeholder="Enter alternate mobile">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<div class="mb-3">
											<label class="form-label font-weight-bold">Opening Hours</label>
											<input type="text" class="form-control" name="opening_hours" id="opening_hours" value="<?php isset($userInfo->opening_hours);
																																	echo $userInfo->opening_hours;
																																	""; ?>" placeholder="Enter opening hours">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div class="mb-3">
											<label class="form-label font-weight-bold">Facebook Page</label>
											<input type="text" class="form-control" name="facebook_page" id="facebook_page" value="<?php isset($userInfo->facebook_page);
																																	echo $userInfo->facebook_page;
																																	""; ?>" placeholder="Enter facebook page address">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<div class="mb-3">
											<label class="form-label font-weight-bold">Youtube Page</label>
											<input type="text" class="form-control" name="youtube_page" id="youtube_page" value="<?php isset($userInfo->youtube_page);
																																	echo $userInfo->youtube_page;
																																	""; ?>" placeholder="Enter youtube page address">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div class="mb-3">
											<label class="form-label font-weight-bold">Linkedin Page</label>
											<input type="text" class="form-control" name="linkedin_page" id="linkedin_page" value="<?php isset($userInfo->linkedin_page);
																																	echo $userInfo->linkedin_page;
																																	""; ?>" placeholder="Enter linkedin page address">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<div class="mb-3">
											<label class="form-label font-weight-bold">Twitter Page</label>
											<input type="text" class="form-control" name="twitter_page" id="twitter_page" value="<?php isset($userInfo->twitter_page);
																																	echo $userInfo->twitter_page;
																																	""; ?>" placeholder="Enter twitter page address">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<div class="mb-3">
											<label class="form-label font-weight-bold">Instagram Page</label>
											<input type="text" class="form-control" name="instagram_page" id="instagram_page" value="<?php isset($userInfo->instagram_page);
																																		echo $userInfo->instagram_page;
																																		""; ?>" placeholder="Enter instagram page address">
										</div>
									</div>
								</div>
							</div>
							<div class="text-right">
								<button class="btn btn-primary btn-sm">Save Change </button>
							</div>
						</form>
					</div>
					<!-- Panel 2 -->
					<!-- Panel 3 -->
					<div class="tab-pane fade" id="panel23" role="tabpanel">
						<form class="form-horizontal" id="OtherCurrency">
							<div class="form-group ">
								<div class="mb-3">
									<label class="form-label font-weight-bold">Currency</label>
									<select class="form-control" id="currency" name="currency">
										<option value='1' <?= $userInfo->currency=="1"?'selected':'';?> >Rs(&#8377;)</option>
										<option value='2' <?= $userInfo->currency=="2"?'selected':'';?>>Dollor($)</option>
										<option value='3' <?= $userInfo->currency=="3"?'selected':'';?>>Euro(&#8364;)</option>
									</select>
								</div>
							</div>
							<div class="text-right">
								<button class="btn btn-primary btn-sm">Save changes</button>
							</div>
						</form>
					</div>
					<!-- Panel 3 -->
					<!-- Panel 4 -->
					<div class="tab-pane fade" id="panel24" role="tabpanel">
						<form class="form-horizontal" id="ThemeColorForm">
							<div class="form-group ">
								<div class="mb-3">
									<label class="form-label font-weight-bold">Theme</label>
									<select class="form-control" name="theme_name">
										<option value="theme1" <?php if ($userInfo->theme_name == 'theme1') echo 'selected'; ?>>Theme 1</option>
										<option value="theme2" <?php if ($userInfo->theme_name == 'theme2') echo 'selected'; ?>>Theme 2</option>
										<option value="theme3" <?php if ($userInfo->theme_name == 'theme3') echo 'selected'; ?>>Theme 3</option>
									</select>
								</div>
							</div>
							
							<div class="form-group">
								<div class="mb-3">
									<label class="form-label font-weight-bold">Theme Color</label>
									<select class="form-control" name="theme_color">
										<option value="default" <?php if ($userInfo->theme_color == 'default') echo 'selected'; ?>>Default</option>
										<option value="blue" <?php if ($userInfo->theme_color == 'blue') echo 'selected'; ?>>Blue</option>
										<option value="green" <?php if ($userInfo->theme_color == 'green') echo 'selected'; ?>>Green</option>
										<option value="olive" <?php if ($userInfo->theme_color == 'olive') echo 'selected'; ?>>Olive</option>
										<option value="orange" <?php if ($userInfo->theme_color == 'orange') echo 'selected'; ?>>Orange</option>
										<option value="pink" <?php if ($userInfo->theme_color == 'pink') echo 'selected'; ?>>Pink</option>
										<option value="purple" <?php if ($userInfo->theme_color == 'purple') echo 'selected'; ?>>Purple</option>
										<option value="red" <?php if ($userInfo->theme_color == 'red') echo 'selected'; ?>>Red</option>
									</select>
								</div>
							</div>

							<div class="text-right">
								<button class="btn btn-primary">Save changes</button>
							</div>
						</form>
					</div>
					<!-- Panel 4 -->
					<!-- Panel 5 -->
					<div class="tab-pane fade" id="panel25" role="tabpanel">
						<form class="form-horizontal" id="RazorpayForm">
							<div class="form-group">
								<div class="mb-3">
									<label class="form-label font-weight-bold">Key</label>
									<input type="text" class="form-control" name="key" value="<?php isset($userInfo->key);
																								echo $userInfo->key;
																								""; ?>">
								</div>
							</div>
							<div class="form-group">
								<div class="mb-3">
									<label class="form-label font-weight-bold">Secret</label>
									<input type="text" class="form-control" name="secret" value="<?php isset($userInfo->secret);
																									echo $userInfo->secret;
																									""; ?>">
								</div>
							</div>
							<div class="text-right">
								<button class="btn btn-primary">Save changes</button>
							</div>
						</form>
					</div>
					<!-- Panel 5 -->

				</div>
			</div>
		</div>
		<!-- Nav tabs -->

	</div>
</div>
<!-- Tab panels -->
<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script src="<?php echo base_url().env('SEO_SUBPATH') ?>/assets/js/othercustomscripts.js"></script>
<?= $this->endSection(); ?>