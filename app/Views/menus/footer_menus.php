<?= $this->extend('template/main');?>
<?= $this->section('content'); ?>
	<style>
		.box_custom {
			padding-top: 3px;
			padding-bottom: 6px;
			border: 1px solid #a8afc7;
			border-top: 0px;
			border-left: 0px;
			border-right: 0px;
			margin: 9px;
		}
	</style>
	<!-- Page Header -->
	<div class="page-header">
		<div>
			<h2 class="main-content-title tx-24 mg-b-5">Update <?= $title; ?></h2>
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
					<div class="col-md-12 box-shadow border p-4">
							<?php if($footer_menu): foreach($footer_menu as $value):?>      
								<div class ="px-2">  
									<div class="row">
										<div class="col-md-4 box_custom">
											<?= $value['menu_name'] ; ?>
										</div>
									</div>
								</div>
							<?php endforeach; endif; ?>  


							<form class="py-4 px-2" id="FooterMenu">
								<div class="form-group row">					
									<div class="mb-3 col-4">                                                            			
										<input type="text" class="form-control" name="menu_name" id="menu_name" placeholder="Enter Footer Menu Name">
									</div>
								</div>
								<div>
									<button class="btn btn-primary btn-sm">Create</button>
								</div>
							</form>      
					</div>		
				</div>									
			</div>  
		</div>
	</div>
	<!-- Row end -->

<?= $this->endSection();?>

<?= $this->section('script');?>

<script src="<?php echo base_url('assets/js/othercustomscripts.js')?>"></script>

<?= $this->endSection();?>
