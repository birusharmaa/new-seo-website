<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<!-- Page Header -->
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

<!--Row-->
<div class="row row-sm mx-auto">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-12 box-shadow border">
				<input type="hidden" name="service_id" id="service_id" value="<?= $data->id; ?>">
				<form id="EditServiceForm">
					<div class="row mt-3">
						<div class="col-md-6">
							<div class="form-group">
								<lable>Name *</lable>
								<input type="text" class="form-control" name="service" id="service" value="<?= $data->service; ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<lable>Slug(If you leave it blank, it will be generated automatically.)</lable>
								<input type="text" class="form-control" name="slug" id="slug" value="<?= $data->slug; ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<lable>Image</lable>
								<input type="file" class="form-control" name="service_image" id="service_image" accept="image/png, image/gif, image/jpeg" />
							</div>
							<img src="<?= base_url().env('SEO_SUBPATH').'uploads/service_images/'.$data->image; ?>" class="img-preview img-fluid w-200" />
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<lable>Banner</lable>
								<input type="file" class="form-control" name="service_banner" id="service_banner" accept="image/png, image/gif, image/jpeg" />
							</div>
							<img src="<?= base_url().env('SEO_SUBPATH').'uploads/service_banners/'.$data->banner; ?>" class="img-preview-ban img-fluid w-200" />
						</div>
					</div>
					<?php $rsData = !empty(json_decode($data->related_services)) ? json_decode($data->related_services) : []; ?>
					<div class="row">
						<div class="form-group">
							<lable>Select Related Services</lable>
							<select class="form-control services" id="r_services" name="related_services[]" multiple>
								<?php $selected = ""; if ($services) : foreach ($services as $value) :
										if (!empty($rsData)) :
											$selected =  in_array($value->id, $rsData) ? 'selected' : "";
										endif; ?><option value="<?= $value->id; ?>" <?= $selected  ?>><?= $value->service; ?></option>
								<?php endforeach;
								endif; ?>
								<select>
						</div>
					</div>
					<script>

					</script>
					<div class="row">
						<div class="form-group">
							<lable>Content *</lable>
							<textarea class="form-control" name="content" id="content" required><?= $data->content ?></textarea>
						</div>
					</div>
					<button class="btn btn-primary btn-sm mb-3"> Save</button>
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
		CKEDITOR.replace('content');
		$('.services').select2();
	})
</script>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<script src="<?php echo base_url('assets/js/othercustomscripts.js') ?>"></script>

<?= $this->endSection(); ?>