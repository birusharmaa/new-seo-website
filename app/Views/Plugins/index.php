<?= $this->extend('template/main');?>
<?= $this->section('content');?>
<?php $session = \Config\Services::session()?>

	<!-- Page Header -->
	<div class="page-header">
		<div>
			<h2 class="main-content-title tx-24 mg-b-5">
			<?= $title; ?>
			</h2>
			<ol class="breadcrumb">
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
		<div class="row mt-4">
		
		<?php if($data): foreach($data as $value):?>
			<div class="col-md-4">
				<div class="card mb-5 box-shadow border-transparent" style="width: 20rem;" >										
					<ul class="list-group list-group-flush py-3 px-4">
					<div class="d-flex">
						<div class="media-icon text-danger "> <i class="icon ion-md-phone-portrait"></i> </div>
							<li class="list-group-item border-none px-0"><?= $value->phone?></li>
						</div>
						<div class="d-flex">
						<div class="media-icon text-warning"> <i class="fas fa-envelope fa-fw"></i> </div>
							<li class="list-group-item border-none px-0"><?= $value->email?></li>
						</div>
						<div class="d-flex">
						<div class="media-icon text-primary"> <i class="fa fa-rupee-sign"></i> </div>
							<li class="list-group-item border-none px-0 text-danger fw-bold">
								<?php if($value->is_installed == 0)
									{ echo 'Uninstalled';} 
									else
									{ echo 'Installed';    } ?>	
							</li>
						</div>
						<div class="d-flex">
						<div class="media-icon text-info"> <i class="fa fa-arrow-circle-right"></i> </div>
							<li class="list-group-item border-none px-0"><?= $value->plugin_key; ?></li>
						</div>
						<div class="d-flex">
						<div class="media-icon text-success"> <i class="fa fa-key"></i> </div>
							<li class="list-group-item border-none px-0"><?= $value->password?></li>
						</div>
						<div class="d-flex">
						<div class="media-icon text-primary"> <i class="fa fa-link"></i></div>
						<li>
							<a href="#" class="list-group-item border-none px-0 text-primary"> <?= $value->website_domain?></a>
						</li>
					
						</div>
						<div class="text-center">
							<a href="<?=base_url();?>/manage-plugins/<?= $value->id?>">
							<button class="btn btn-primary shadow-none mt-5 mb-2 w-100 border-transparent shadow ">Manage Plugin</button>
						</a>
				
						</div>
					</ul>									
				
				</div>
			</div>
			<?php  endforeach; endif; ?>
		</div>	

	

			
		</div>
	</div>
	<!-- Row end -->

<?= $this->endSection();?>

<?= $this->section('script');?>
<script src="<?php echo base_url('assets/js/mycustomscripts.js')?>"></script>
<?= $this->endSection();?>
