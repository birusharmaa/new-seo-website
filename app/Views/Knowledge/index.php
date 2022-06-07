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
	<div class="row row-sm">
		<div class="col-sm-12 col-lg-12 col-xl-8">
			
			<h3 class="text-info">About eplugins Under Construction</h3>
			
		</div>
	</div>
	<!-- Row end -->

<?= $this->endSection();?>

<?= $this->section('script');?>
<script src="<?php echo base_url('assets/js/mycustomscripts.js')?>"></script>

<?= $this->endSection();?>
