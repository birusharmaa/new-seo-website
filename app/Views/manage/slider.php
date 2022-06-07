<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
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
<style>
	div.dataTables_wrapper div.dataTables_length select {
		width: 50% !important;
		display: inline-block;
	}

	.custom_wdth {
		width: 50%;
	}
</style>
<!-- End Page Header -->
<!--Row-->
<div class="row row-sm mx-auto">
	<div class="col-md-12 ">
		<div class="row">
			<div class="col-md-12 box-shadow border">
				<input type="hidden" name="sectionid" id="sectionid" value="">
				<form class="py-4 px-2" id="AddSlidersSection">
					<div class="form-group ">
						<div class="mb-3">
							<lable>Section Name</lable>
							<input type="text" class="form-control" name="section_name" id="section_name" placeholder="Enter Section Name">
						</div>
						<div class="row">
							<div class="col-md-6">
								<label>Pages <span class="text-danger">*</span></label>
								<select class="form-control pages" id="page_id" name="page_id[]" multiple required="please select pages">
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
									<select>
							</div>

							<div class="col-md-6">
								<label>Slider <span class="text-danger">*</span></label>
								<select class="form-control slider_name" id="slider" name="slider[]" multiple required="please select sliders">
									<?php if ($slider) : foreach ($slider as $value) : ?>
											<option value="<?= $value->id ?>"><?= $value->name; ?></option>
									<?php endforeach;
									endif; ?>
									<select>
							</div>
						</div>
					</div>
					<div>
						<button class="btn btn-primary btn-sm">Add Section</button>
					</div>
				</form>
				<div class="table-responsive">
					<table class="table" id="Slider_Section_table">
						<thead>
							<th>#</th>
							<th>Section Name</th>
							<th>Sliders</th>
							<th>Section Pages</th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php $num = 1;
							if ($data) : foreach ($data as $value) : ?>
									<?php $page_id222 = json_decode($value->page_id);
									$slider_id = json_decode($value->slider);  ?>
									<tr id="<?= $value->id; ?>">
										<td><?= $num; ?></td>
										<td><?= $value->section_name; ?></td>
										<td class="custom_wdth">
											<?php if ($slider_id) : foreach ($slider as $value1) : foreach ($slider_id as $key) : ?>
														<?php if ($value1->id == $key) : ?>
															<a href="<?php echo base_url().env('SEO_SUBPATH').'/uploads/slider_images/'.$value1->slider_image ?>" target="_blank"> <img style="width:120px; height:120px; object-fit:cover; margin:5px;" 
																src="<?php echo base_url().env('SEO_SUBPATH').'/uploads/slider_images/'.$value1->slider_image ?>" 
																alt=""
															/>
														<?php endif; ?>
											<?php endforeach;
												endforeach;
											endif; ?>
										</td>
										<td class="custom_wdth">
											<?php if ($page_id222) : foreach ($page_id222 as $value2) : ?>
													<?= $value2->sub_menu_title . ", "; ?>
											<?php endforeach;
											endif; ?>
										</td>
										<td>
											<button class="btn btn-primary btn-sm" onclick="edit_slider_section(<?= $value->id; ?>);"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
											<button class="btn btn-danger btn-sm" onclick="delete_slider_section(<?= $value->id; ?>, '<?php echo $value->section_name;?>');"><i class="fa fa-trash" aria-hidden="true"></i></button>
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

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
	$(document).ready(function() {
		$('#Slider_Section_table').DataTable();
		$('.pages').select2({
			placeholder: "Select Pages"
		});
		$('.slider_name').select2({
			placeholder: "Select Sliders"
		});
	})
</script>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<script src="<?php echo base_url('assets/js/othercustomscripts.js') ?>"></script>
<?= $this->endSection(); ?>