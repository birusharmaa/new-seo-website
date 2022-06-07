<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<!-- Page Header -->
<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5"><?= $title; ?></h2>
        <ol class="breadcrumb mt-4">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo base_url('manage/products') ?>">Products</a></li>
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
                <form id="EditProducts" class="mt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name <span class="text-danger"> *</span></label>
                                <input type="hidden" name="product_id" id="product_id" value="<?= $data->id; ?>">
                                <input type="text" class="form-control" name="product_name" id="product_name" value="<?= $data->product_name; ?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Total Inventry <span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="total_inventry" id="total_inventry" value="<?= $data->total_inventry; ?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>MRP <span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="mrp" id="mrp" value="<?= $data->mrp; ?>">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Discount(in %) <span class="text-danger"> *</span></label>
                                <input type="text" class="form-control" name="discount" id="discount" value="<?= $data->discount; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Main Image <span class="text-danger"> *</span></label>
                                <input type="file" class="form-control" accept="image/png, image/jpg, image/jpeg" name="product_main_image" id="product_main_image" />
                            </div>
                            <?php
                            if(!empty($data->main_image)){
                                echo '<img src="'.base_url().env('SEO_SUBPATH')."uploads/product_images/".$data->main_image.'" class="product-img-preview img-preview" />';
                            }else{
                                echo '<img src="" class="product-img-preview img-preview" />';
                            }
                            ?>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Banner</label>
                                <input type="file" class="form-control" accept="image/png, image/jpg, image/jpeg" name="product_banner" id="product_banner">
                            </div>
                            <?php
                            if(!empty($data->banner)){
                                echo '<img src="'.base_url().env('SEO_SUBPATH')."uploads/product_banners/".$data->banner.'" class="product-ban-preview img-preview" />';
                            }else{
                                echo '<img src="'.base_url().env('SEO_SUBPATH')."assets/img/empty.png".'" class="product-ban-preview img-preview" />';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Select Related Products</label>
                        <?php $selected = '';
                        $rsData = !empty(json_decode($data->related_product)) ? json_decode($data->related_product) : []; ?>

                        <select class="form-control products" id="r_product" name="related_product[]" multiple>
                            <?php if ($products) : foreach ($products as $value) : if (!empty($rsData)) :
                                        $selected =  in_array($value->id, $rsData) ? 'selected' : "";
                                    endif ?>
                                    <option value="<?= $value->id; ?>" <?= $selected  ?>><?= $value->product_name; ?></option>
                            <?php endforeach;
                            endif; ?>
                            <select>
                    </div>
                    <div class="form-group">
                        <label>Short Description <span class="text-danger"> *</span></label>
                        <textarea class="form-control" name="short_description" id="short_description"><?= $data->short_description; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Long Description</label>
                        <textarea class="form-control" name="long_description" id="long_description"><?= $data->long_description; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Specification</label>
                        <textarea class="form-control" name="specification" id="specification"><?= $data->specification; ?></textarea>
                    </div>
                    <div class="mt-2 mb-3">
                        <button class="btn btn-primary btn-sm">Update</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- Row end -->
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
    $(document).ready(function() {
        $('#services_section_table').DataTable({
            responsive: true,
        });
        CKEDITOR.replace('short_description');
        CKEDITOR.replace('long_description');
        CKEDITOR.replace('specification');
        $('.products').select2();
    })
</script>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js') ?>"></script>
<script src="<?php echo base_url('assets/js/othercustomscripts.js') ?>"></script>

<?= $this->endSection(); ?>