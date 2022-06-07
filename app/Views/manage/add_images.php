<?= $this->extend('template/main'); ?>
<?= $this->section('content'); 
$id = !empty($data['id'])?$data['id']:"";
$title = !empty($data['title'])?$data['title']:"";
$img_name = !empty($data['image'])?$data['image']:"";

?>
<div class="page-header mt-5">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5"><?= $title; ?></h2>
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('manage/images-gallery') ?>">Images Gallery</a></li>
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
                    <input type="hidden" id="galleryImgId" value="<?= $id;?>" />
                    <form id="UploadeImageGallery">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image <span class="text-danger"> *</span></label>
                                    <input type="file" name="gallery_image" id="gallery_image" class="form-control" />
                                </div>
                                <?php
                                if(!empty($img_name)){
                                    echo '<img src="'.base_url().env('SEO_SUBPATH').'gallery_images/'.$img_name.'" class="gallery-img-preview mb-4 w-50" />'; 
                                }else{
                                    echo '<img src="" class="gallery-img-preview mb-4 w-50" />';
                                }
                                ?>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title <span class="text-danger"> *</span></label>
                                    <input type="text" value="<?= $title;?>" name="title" id="title" class="form-control" required/>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm">Upload</button>
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