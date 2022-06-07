<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<?php $session = \Config\Services::session() ?>
<!-- Page Header -->
<div class="page-header">
	<div>
		<h2 class="main-content-title tx-24 mg-b-5"><?= $title; ?></h2>
		<ol class="breadcrumb mt-4">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">
				<?= $title; ?>
			</li>
		</ol>
	</div>
</div>
<!-- End Page Header -->
<!--Row-->
<div class="row row-sm mx-auto">
	<div class="col-md-12 ">
		<div class="row">
			<div class="col-md-12 box-shadow border rounded">

				<input type="hidden" name="header_id" id="header_id" value="">
				<form class="py-12 px-2" id="callActinForm">
					<div class="row mt-4">
						<div class="col-md-6">
							<div class="form-group ">
								<div class="mb-3">
									<label class="form-label fs-15">Status<span class="text-danger"> *</span></label>
									<select class="form-control" name="header_background">
										<option value="show">Show</option>
										<option value="hide">Hide</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group ">
								<div class="mb-3">
									<label class="form-label fs-15">Type<span class="text-danger"> *</span></label>
									<select class="form-control" name="header_background">
										<option value="enquiry">Enquiry</option>
										<option value="buy">Buy</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group ">
								<div class="mb-3">
									<label class="form-label fs-15">Name<span class="text-danger"> *</span></label>
									<input type="text" class="form-control" name="navbar_background" id="navbar_background">
								</div>
							</div>
						</div>
					</div>

					<div class="mb-3">
						<button class="btn btn-primary btn-sm">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Row end -->

<?= $this->endSection(); ?>
<?= $this->section('script'); ?>

<script src="<?php echo base_url('assets/js/othercustomscripts.js') ?>"></script>
<?= $this->endSection(); ?>