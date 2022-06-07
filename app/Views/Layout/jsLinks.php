<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/jquery/jquery.min.js"></script>
<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/select2/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/plugins/validation/js/jquery.validate.min.js"></script>
<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/js/custom.js"></script>
<script src="<?=base_url();?><?= env('SEO_SUBPATH') ?>/assets/notify/dist/notiflix-3.2.4.min.js"></script>

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