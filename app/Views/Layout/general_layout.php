<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
			name="viewport"
		/>
		<title>Demo template</title>

        <?php include __DIR__ . '/../Layout/cssLinks.php'; ?>
	</head>

	<body
		class="main-body leftmenu light-horizontal light-theme color-header color-leftmenu"
	>

		<!-- Loader -->
		<div id="global-loader">
			<img src="assets/img/loader.svg" class="loader-img" alt="Loader" />
		</div>
		<!-- End Loader -->

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
						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">
									Welcome Rahul Rawat
								</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">
										Project Dashboard
									</li>
								</ol>
							</div>
						</div>
						<!-- End Page Header -->
						<!--Row-->
						<div class="row row-sm">
							<div class="col-sm-12 col-lg-12 col-xl-8">
								
                          <h1>Page</h1>
								
							</div>
						</div>
						<!-- Row end -->
					</div>
				</div>
			</div>
			<!-- End Main Content-->

			<!-- Main Footer-->
            <?php include __DIR__ . '/../Layout/footer.php'; ?>
			<!--End Footer-->
		</div>
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>
		<?php include __DIR__ . '/../Layout/jsLinks.php'; ?>
	</body>
</html>
