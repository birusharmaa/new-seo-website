<?php    $session = \Config\Services::session();
$this->session = $session;		
if($this->session->has('login_user')){
	$user_data = $this->session->get('login_user');
}?>
<link
	href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/bootstrap/css/bootstrap.min.css"
	rel="stylesheet"
/>
<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/web-fonts/icons.css" rel="stylesheet" />
<link
	href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/web-fonts/font-awesome/font-awesome.min.css"
	rel="stylesheet"
/>
<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/web-fonts/plugin.css" rel="stylesheet" />

<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/css/style/style.css" rel="stylesheet" />
<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/css/skins.css" rel="stylesheet" />

<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/css/colors/default.css" rel="stylesheet" />
<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/css/colors/color1.css"/>		

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
<link
	rel="stylesheet"
	href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/multipleselect/multiple-select.css"
/>
<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
<!-- <link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/datatable/responsivebootstrap4.min.css" rel="stylesheet" /> -->
<link href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/css/sidemenu/sidemenu.css" rel="stylesheet" />
<link rel="stylesheet" href="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/notify/dist/notiflix-3.2.4.min.css" />
