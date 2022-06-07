<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<!-- Page Header -->
<div class="page-header">
	<div>
		<h2 class="main-content-title tx-24 mg-b-5"><?= $title; ?></h2>
		<ol class="breadcrumb mt-4">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="<?php echo base_url('manage/all-slider'); ?>">Slider Images</a></li>
			<li class="breadcrumb-item active" aria-current="page">
				<?= $title; ?>
			</li>
		</ol>
	</div>
</div>
<!--Row-->
<div class="row row-sm mx-auto">
	<div class="col-md-12 ">
		<div class="row">
			<div class="col-md-12 box-shadow border">
				<input type="hidden" name="slider_id" id="slider_id" value="<?= $slider_data->id; ?>">
				<form class="py-4 px-2" id="EditSliders">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Slider Image <span class="text-danger">*</span></label>
								<input type="file" class="form-control" accept="image/png, image/jpeg" name="slider_image" id="slider_image">
							</div>
							<img src="<?= base_url(env('SEO_SUBPATH').'uploads/slider_images').'/'.$slider_data->slider_image; ?>" class="img-preview w-300" />							
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>Heading Color<span class="text-danger">*</span></label>
								<input type="color" class="form-control" name="heading_color" id="heading_color" value="<?= $slider_data->heading_color; ?>">
							</div>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label>Text Color <span class="text-danger">*</span></label>
								<input type="color" class="form-control" name="text_color" id="text_color" value="<?= $slider_data->text_color; ?>">
							</div>
						</div>

						
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="name" id="name" value="<?= $slider_data->name; ?>" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Title</label>
								<input type="text" class="form-control" name="title" value="<?= $slider_data->title; ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Description</label>
								<input type="text" class="form-control" name="description" value="<?= $slider_data->description; ?>">
							</div>
						</div>
					</div>
					<div>
						<button class="btn btn-primary btn-sm">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- Row end -->
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
	$(document).ready(function() {
		$('.pages').select2();
		$('.slider_name').select2();
	});
</script>

<script src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<script src="<?php echo base_url('assets/js/othercustomscripts.js') ?>"></script>

<?= $this->endSection(); ?>