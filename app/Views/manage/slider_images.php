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
		width: -webkit-fill-available !important;
		display: inline-block;
	}
</style>
<!-- End Page Header -->
<!--Row-->
<div class="row row-sm mx-auto">
	<div class="col-md-12 ">
		<div class="row">
			<div class="col-md-12 box-shadow border">
				<div class=" mt-3 text-right mb-2">
					<a href="<?php echo base_url('/manage/add-slider') ?>" class="btn btn-primary btn-sm">Add New</a>
				</div>

				<table class="table" id="slider_table">
					<thead>
						<th>#</th>
						<th>Name</th>
						<th>Images</th>
						<th>Title</th>
						<th>Description</th>
						<th>Action</th>
					</thead>
					<tbody>
						<?php $num = 1;
						if ($data) : foreach ($data as $value) : ?>
								<tr>
									<td><?= $num; ?></td>
									<td><?= $value->name; ?></td>
									<td>
										<a href="<?php echo base_url().env('SEO_SUBPATH').'/uploads/slider_images/'.$value->slider_image ?>" target="_blank">
											<img style="width:100px; height:50px;" 
												src="<?php echo base_url().env('SEO_SUBPATH').'/uploads/slider_images/'.$value->slider_image ?>" alt="" />
										</a>
									</td>
									<td><?= $value->title; ?></td>
									<td>
										<p class="text-wrap" style="width: 16rem;">
										<?= $value->description; ?>
										</p>
									</td>
									<td>
										<a href="<?= base_url() . '/manage/edit-slider/' . $value->id ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
										<button class="btn btn-danger btn-sm" onclick="delete_silder(<?= $value->id ?>)"><i class="fa fa-trash" aria-hidden="true"></i></i></button>
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
<!-- Row end -->

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
	$(document).ready(function() {
		$('#slider_table').DataTable();
		$('.pages').select2();
		$('.slider_name').select2();
	})
</script>
<script src="<?php echo base_url('assets/js/othercustomscripts.js') ?>"></script>

<?= $this->endSection(); ?>