<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
		<title><?= $title;?></title>
        <?php $session = \Config\Services::session();
        $this->session = $session;		
		if($this->session->has('login_user')){
            $user_data = $this->session->get('login_user');
        }?>
		<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/web-fonts/icons.css" rel="stylesheet"/>
		<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet"/>
		<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/web-fonts/plugin.css" rel="stylesheet"/>
		<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/css/style/style.css" rel="stylesheet"/>
		<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/css/skins.css" rel="stylesheet"/>
		<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/css/colors/default.css" rel="stylesheet"/>
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/css/colors/color1.css"/>		

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/multipleselect/multiple-select.css"/>
		<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet"/>
		<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/css/sidemenu/sidemenu.css" rel="stylesheet"/>
		<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/css/sweetalert2.min.css" rel="stylesheet"/>
		<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" />
		<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/notify/dist/notiflix-3.2.4.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/css/custom.css" />

		<style>            
			.custom_wdth{		
                white-space: normal;
				width: 50%;
			}
            div.dataTables_wrapper div.dataTables_length select {
                width: 50% !important;
                display: inline-block;
            }
			*{
				font-family: Montserrat,Helvetica,Arial,serif;				
			}
			body{
				zoom: .9;
			}
			.main-sidebar-body{
				max-height: 100vh;
    			overflow-y: auto;
			}
			.modal-backdrop{
				width: 100%!important;
    			height: 100%!important;
			}
        </style>
        
	</head>

	<body class="main-body leftmenu light-horizontal light-theme color-header color-leftmenu theme-<?= $color; ?>" >

		<!-- Page -->
		<div class="page">
			<!-- Sidemenu -->
			<div class="main-sidebar main-sidebar-sticky side-menu">
				<div class="sidemenu-logo">
					<a class="main-logo text-white" href="#"> SEO </a>
				</div>
				<?php include __DIR__ . '/../Layout/sidebar.php'; ?>
			</div>
			<!-- End Sidemenu -->
			<!-- Main Header-->
            <?php include __DIR__ . '/../Layout/navbar.php'; ?>
			<!-- End Main Header-->
			<!-- Main Content-->
			<div class="main-content side-content pt-0">
				<div class="container-fluid">
					<div class="inner-body">
						<?= $this->renderSection('content'); ?>
					</div>
				</div>
			</div>

            <?php include __DIR__ . '/../Layout/footer.php'; ?>
		</div>
		<?= $this->renderSection('customModal'); ?>
                 
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>
		<script>
			function updateTheme(value){
				const BASEURL = $('#url').val();				
				$.ajax({
					url: BASEURL + '/update-theme/'+value,
					type: 'POST',
					success: function (data) {						
					}
				});
			}
		</script>

		<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/jquery/jquery.min.js"></script>
		<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/select2/js/select2.min.js"></script>
		<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/sidemenu/sidemenu.js"></script>
		<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/sidebar/sidebar.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
		<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/datatable/jquery.dataTables.min.js"></script>
		<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/validation/js/jquery.validate.min.js"></script>
		<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/js/custom.js"></script>
		<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/js/myScript.js"></script>
		<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/js/sweetalert2.min.js"></script>
		<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/notify/dist/notiflix-3.2.4.min.js"></script>
		<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/datatable/dataTables.responsive.min.js"></script>
		<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
		
		
        <?= $this->renderSection('script'); ?>
		<script>
		function displayImage(input, clsName=null) {
            const BASEURL = $('#url').val();
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(event) {
                   $('.'+clsName).attr('src', event.target.result);
                }
                //$("#oldPhotoName").val("");
                reader.readAsDataURL(input.files[0]);
            }else{
                $('.'+clsName).attr('src', BASEURL+"/assets/img/empty.png");
            }
        }
		</script>
	</body>
</html>
