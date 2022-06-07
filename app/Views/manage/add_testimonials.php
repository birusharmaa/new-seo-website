<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5"><?= $title; ?></h2>
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('manage/testimonials') ?>">All Testimonials</a></li>
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
                <div class="mt-2 mb-2">
                    <form id="AddTestimonials">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name *</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="testimonials_image" id="testimonials_image" class="form-control">
                                    <input type="hidden" name="testimonials_image_temp" id="testimonials_image_temp">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description*</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>
                        <button class="btn btn-primary btn-sm">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<?= $this->section('script'); ?>
<script src="<?php echo base_url('assets/js/othercustomscripts.js') ?>"></script>
<?= $this->endSection(); ?>