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

<!--Row-->
<div class="row row-sm mx-auto">
	<div class="col-md-12 ">
		<div class="row">
			<div class="col-md-12 box-shadow border">
				<div class="text-right mt-2 mb-2">
					<a href="<?php echo base_url('manage/add-products') ?>" class="btn btn-primary btn-sm">Add Products</a>
				</div>
				<div class="table-responsive">
					<table class="table" id="services_section_table">
						<thead>
							<th>#</th>
							<th>Image</th>
							<th>Name</th>
							<th>Price</th>
							<th>Stock </th>
							<th>Short Description </th>
							<th>Date </th>
							<th>Action</th>
						</thead>
						<tbody>
							<?php $num = 1;
							if ($data) : foreach ($data as $value) : ?>
									<tr id="<?= $value->id ?>">
										<td><?= $num; ?></td>
										<td><img style="width:50px; height:50px;" src="<?php echo base_url().env('SEO_SUBPATH').'uploads/product_images/'.$value->main_image ?>" alt="">
										<td class=""><?= $value->product_name; ?></td>
										<td class=""><?= $value->mrp; ?></td>
										<td class=""><?= $value->total_inventry; ?></td>
										<td class="custom_wdth"><?= $value->short_description; ?></td>
										<td class="custom_wdth"><?= $value->created_at; ?></td>
										<td>
											<a class="btn btn-primary btn-sm" href="<?php echo base_url('manage/edit-products/'.base64_encode($value->id)) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
											<button class="btn btn-danger btn-sm" onclick="delete_product(<?= $value->id ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
		$('#services_section_table').DataTable({
			responsive: false,
		});
		$('.pages').select2();
		$('.services').select2();
	})
</script>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<script src="<?php echo base_url('assets/js/othercustomscripts.js') ?>"></script>

<?= $this->endSection(); ?>