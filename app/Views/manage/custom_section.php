<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>

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
			<div class="col-md-12 box-shadow border">
				<div class=" mt-3 text-right mb-2">
					<button class="btn btn-primary btn-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Add Section</button>
				</div>
				<div class="table-responsive">
					<table class="table" id="Custom_slider_table">
						<thead>
							<th>#</th>
							<th>Heading</th>
							<th>Description</th>
							<th>Images</th>
							<th>Page</th>
							<th>Position</th>
							<th>Created at</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php $num = 1;
							if ($data) : foreach ($data as $value) : ?>
									<tr id="<?= $value->id ?>">
										<td><?= $num; ?></td>
										<td class="custom_wdth"><?= $value->heading; ?></td>
										<td class="custom_wdth"><?= $value->description; ?></td>
										<td>
											<a href="<?php echo base_url().env('SEO_SUBPATH').'/uploads/custom_images/'.$value->upload_image ?>" target="_blank" >
												<img style="width:50px; height:50px;" src="<?php echo base_url().env('SEO_SUBPATH').'/uploads/custom_images/'.$value->upload_image ?>" alt="" />
											</a>
										</td>
										<td><?= $value->page_title; ?></td>
										<td><?= $value->position; ?></td>
										<td><?= $value->created_at; ?></td>
										<td>
											<button class="btn btn-primary btn-sm" onclick="editCustom_section(<?= $value->id ?>)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
											<button class="btn btn-danger btn-sm" onclick="deleteCustom_section(<?= $value->id ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
										</td>
									</tr>
							<?php $num++;
								endforeach;
							endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Row end -->

<!--Start Offcanvas-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="width:650px;">
	<div class="offcanvas-header">
		<h5 id="offcanvasRightLabel">Add Custom Section</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<input type="hidden" name="section_id" id="section_id">
		<form id="AddCustomSection">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<lable>Select Page</lable>
						<select name="page_id[]" id="page_id" class="form-control">
							<option value="">select</option>
							<?php if ($pages) : foreach ($pages as $value) : ?>
									<?php $ids = '';
									$optiontext = '';
									if (empty($value->service_id) && empty($value->product_id)) {
										$ids = $value->menu_id . ", 0";
										$optiontext = $value->menu_name;
									} else if (!empty($value->service_id)) {
										$ids = $value->menu_id . "," . $value->service_id;
										$optiontext = $value->menu_name . " - " . $value->service;
									} else {
										$ids = $value->menu_id . "," . $value->product_id;
										$optiontext = $value->menu_name . " - " . $value->product_name;
									} ?>
									<option value="<?= $ids; ?>"><?= $optiontext; ?></option>
							<?php endforeach;
							endif; ?>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<lable>Upload Image</lable>
						<input type="file" name="upload_image" id="upload_image" class="form-control">
						<input type="hidden" name="custom_upload_image_temp" id="custom_upload_image_temp" value="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<lable>Image Position</lable>
						<select name="position" id="position" class="form-control">
							<option value="left">Left</option>
							<option value="right">Right</option>
							<option value="stretch">Stretch Left</option>
							<option value="stretch">Stretch Right</option>
						</select>
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
						<lable>Heading</lable>
						<input type="text" name="heading" id="heading" class="form-control">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="form-group">
					<lable>Description</lable>
					<textarea class="form-control" name="description" id="description"></textarea>
				</div>
			</div>
			<div>
				<Button class="btn btn-primary btn-sm" id="section_btn">Save</Button>
			</div>
		</form>
	</div>
</div>
<!--End Offcanvas-->

</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
	$(document).ready(function() {
		$('#Custom_slider_table').DataTable({
			responsive: false,
		});
		CKEDITOR.replace('description');
	})
</script>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<script src="<?php echo base_url('assets/js/othercustomscripts.js') ?>"></script>

<?= $this->endSection(); ?>