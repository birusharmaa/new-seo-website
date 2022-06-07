<?= $this->extend('template/main'); ?>

<?= $this->section('content'); ?>

<div class="page-header">
	<div>
		<h2 class="main-content-title tx-24 mg-b-5"><?= $title; ?></h2>
		<ol class="breadcrumb mt-4">
			<li class="breadcrumb-item"><a href="#">Content Management</a></li>
			<li class="breadcrumb-item"><a href="<?php echo base_url('manage/services') ?>">Services</a></li>
			<li class="breadcrumb-item active" aria-current="page">
				<?= $title; ?>
			</li>
		</ol>
	</div>
</div>
<!-- End Page Header -->
<div class="row row-sm mx-auto">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-12 box-shadow border">
				<form id="SaveServiceForm">
					<div class="row mt-3">
						<div class="col-md-6">
							<div class="form-group">
								<label>Name <span class="text-danger">*</span> </label>
								<input type="text" class="form-control" name="service" id="service">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Slug(If you leave it blank, it will be generated automatically.)</label>
								<input type="text" class="form-control" name="slug" id="slug">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Image</label>
								<input type="file" accept="image/png, image/gif, image/jpeg" class="form-control" name="service_image" id="service_image">
							</div>
							<img src="" class="img-preview img-fluid w-200" />
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Banner</label>
								<input type="file" accept="image/png, image/gif, image/jpeg" class="form-control" name="service_banner" id="service_banner">
							</div>
							<img src="" class="img-preview-ban img-fluid w-200" />
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label>Select Related Services</label>
							<select class="form-control services" id="r_services" name="related_services[]" multiple>
								<?php if ($services) : foreach ($services as $value) : ?>
										<option value="<?= $value->id; ?>"><?= $value->service; ?></option>
								<?php endforeach;
								endif; ?>
								<select>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<label>Content *</label>
							<textarea class="form-control" name="content" id="content" required></textarea>
						</div>
					</div>
					<button class="btn btn-primary btn-sm mb-3"> Save</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!--Row-->


</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<script>
	$(document).ready(function() {
		CKEDITOR.replace('content');
		$('.services').select2();
	})
</script>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<script src="<?php echo base_url('assets/js/othercustomscripts.js') ?>"></script>

<?= $this->endSection(); ?>