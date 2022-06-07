<?= $this->extend('template/main');?>
<?= $this->section('content');?>
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
<style>
	td p{
		white-space: break-spaces;
	}
	.custom_wdth{
		white-space: break-spaces;
		width: 20%;
	}
</style>
<!-- End Page Header -->
<!--Row-->
<div class="row row-sm mx-auto">
	<div class="col-md-12 ">
		<div class="row">
			<div class="col-md-12 box-shadow border">
				<div class="mt-3 mb-2 text-right">
					<a href="<?php echo base_url('/manage/add-services')?>" class="btn btn-primary btn-sm">Add New</a>
				</div>
				
				<table class="table" id="services_table">
					<thead>
						<th>#</th>
						<th>Service Name</th>
						<th>Slug</th>
						<th>Date</th>												
						<th>Action</th>
					</thead>
					<tbody>
						<?php $num =1; if($data): foreach($data as $value): ?>												
							<tr id="<?= $value->id?>">
								<td><?= $num; ?></td>
								<td class="custom_wdth"><?= $value->service; ?></td>
								<td  class="custom_wdth"><?= $value->slug; ?></td>
								<td><?= $value->created_at; ?></td>														
								<td>
									<a class="btn btn-primary btn-sm view-content" href="javascript:void(0)" data-title="<?= $value->service; ?>" data-content="<?= base64_encode($value->content); ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
									<a class="btn btn-warning btn-sm" href="<?php echo base_url('/manage/edit-services/'.base64_encode($value->id))?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
									<button class="btn btn-danger btn-sm" onclick="delete_service(<?= $value->id?>)"><i class="fa fa-trash" aria-hidden="true"></i></i></button>
								</td>
							</tr>
						<?php $num++;  endforeach; endif; ?>
					</tbody>
				</table>
				
			</div>									
		</div>  
	</div>
</div>
<!-- Row end -->

<?= $this->endSection();?>

<?= $this->section('customModal');?>
<!-- Modal -->
<div class="modal fade" id="viewContent" tabindex="-1" aria-labelledby="viewContentLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewContentLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection();?>
<?= $this->section('script');?>

<script src="<?php echo base_url('assets/ckeditor/ckeditor.js')?>"></script>	
<script src="<?php echo base_url('assets/js/othercustomscripts.js')?>"></script>
<script>
	$(document).ready(function(){
		$('#services_table').DataTable({
			responsive: false,
		});
	})
	// function veiwContent(a) {
	// 	console.log(a)
	// }
	$(document).on('click','.view-content' , function(){
		const content = atob($(this).attr('data-content'));
		const title   = $(this).attr('data-title');

		$("#viewContent #viewContentLabel").html('<b>'+title+'</b>');
		$("#viewContent .modal-body").html(content);
		$("#viewContent").modal("show");
	})
</script>
<?= $this->endSection();?>
