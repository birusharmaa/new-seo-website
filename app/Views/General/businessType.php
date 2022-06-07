<?= $this->extend('template/main');?>

<?= $this->section('content');?>

		<!-- Page Header -->
		<div class="page-header">
			<div>
				<h2 class="main-content-title tx-24 mg-b-5">
				<?php echo $title; ?>
				</h2>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">Home</li>
					<li class="breadcrumb-item">General Settings</li>
					<li class="breadcrumb-item active" aria-current="page">
					<?php echo $title; ?>
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
					
				<div class="col-md-12 m-auto box-shadow">
					<!-- Tab panels -->
					<div class="tab-content vertical p-3">	
						<input type="hidden" name="url" id="url" value="<?php echo base_url(); ?>">	
						<input type="hidden" name="business_id" id="business_id">									
						<form class="form-horizontal" id="masterBusiness">
							<div class="row">
								<div class="col-md-8">
									<div class="form-group ">					
										<div class="mb-3">                                                          													
											<input type="text" class="form-control" name="business_type" id="business_type" placeholder="Enter Business Type" >
										</div>
									</div>	    
								</div> 
								<div class="col-md-3">
									<div class="form-group">
										<lable class="mr-4">Active</lable> <input class="form-check-input" type="radio" name="status" id="activeStatus" value="1" checked>
										<lable class="mr-4">Inactive</lable> <input class="form-check-input" type="radio" name="status" id="inactiveStatus"  value="0">
									</div>   
								</div> 
								<div class="col-md-1">
									<div class="text-right">
										<button type="Submit" id="submit_btn" class="btn btn-primary btn-sm">Save</button>
									</div>   
								</div>
							</div>                                            
						</form>
							
						<table class="table mt-3" id="business_table">
							<thead>
								<th>#</th>
								<th>Business Type</th>
								<th>Status</th>
								<th>Action</th>               
							</thead>
							<tbody>
								<?php $num =1; if($type){   foreach($type as $value){ ?>
									<tr>
										<td><?= $num?></td>
										<td><?= $value['business_type']?></td>
										<td><?php if($value['status']==1){?>
											<span class="badge badge-pill badge-success">Active</span>  
										<?php }else{ ?>
											<span class="badge badge-pill badge-danger">Inactive</span>
										<?php } ?></td>
										<td>
											<button class="btn btn-outline-warning btn-sm" onclick="edit_businessFun(<?= $value['id']?>)" > <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button>
											<button class="btn btn-outline-danger btn-sm" onclick="delete_businessFun(<?= $value['id']?>);"> <i class="fa fa-trash" aria-hidden="true"></i></button>
										</td>
									</tr>     
								<?php $num++;  } } ?>
							</tbody>
						</table>                                       
					</div>
					</div>
				</div>
				<!-- Nav tabs -->
			</div>
		</div>
		<!-- Tab panels -->

<?= $this->endSection();?>
<?= $this->section('script');?>
<script src="<?php echo base_url('assets/js/mycustomscripts.js')?>"></script>	
<?= $this->endSection();?>
