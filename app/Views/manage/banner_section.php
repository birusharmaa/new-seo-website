<?= $this->extend('template/main'); ?>
<?= $this->section('content'); ?>
<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5"><?= $title; ?></h2>
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
            <div class="col-md-12 box-shadow border">
                <div class="mt-2 mb-2">
                    <input type="hidden" name="banner_id" id="banner_id" value="">
                    <form id="BannerSection">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image (width 1200px height 350px) <span class="text-danger"> *</span></label>
                                    <input type="file" class="form-control" name="banner_image" id="banner_image">
                                    <input type="hidden" name="banner_image_temp" id="banner_image_temp">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Banner Name <span class="text-danger"> <span class="text-danger"> *</span></span></label>
                                    <input type="text" class="form-control" name="banner_name" id="banner_name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Banner Text <span class="text-danger"> *</span></label>
                                    <input type="text" class="form-control" name="content" id="content">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Page <span class="text-danger"> *</span></label>
                                    <select class="form-control" name="page_id[]" id="page_id" required>
                                        <option value="">select</option>
                                        <?php if ($pages) : foreach ($pages as $value) : ?>
                                                <?php $ids = '';
                                                $optiontext = '';
                                                if (empty($value->service_id) && empty($value->product_id)) {
                                                    $ids = $value->menu_id . ", 0";
                                                    $optiontext = $value->menu_name;
                                                } else if (!empty($value->service_id)) {
                                                    $ids = $value->menu_id . "," . $value->service_id;
                                                    $optiontext = $value->menu_name . " - " . $value->service;
                                                } else {
                                                    $ids = $value->menu_id . "," . $value->product_id;
                                                    $optiontext = $value->menu_name . " - " . $value->product_name;
                                                } ?>
                                                <option value="<?= $ids; ?>"><?= $optiontext; ?></option>
                                        <?php endforeach;
                                        endif; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm">Save Section</button>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table" id="BannerSection_table">
                        <thead>
                            <th>#</th>
                            <th>Image</th>
                            <th>Banner Name</th>
                            <th>Banner Text</th>
                            <th>Page</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php $num = 1;
                            if ($data) : foreach ($data as $value) : ?>
                                    <?php $pages_ids = json_decode($value->page_id);  ?>
                                    <tr id="<?= $value->id ?>">
                                        <td><?= $num; ?></td>
                                        <td>
                                            <img style="width:50px; height:50px;" src="<?php echo base_url().env('SEO_SUBPATH').'/uploads/banner_images/'.$value->banner_image ?>" alt="">
                                        </td>
                                        <td><?= $value->banner_name; ?></td>
                                        <td><?= $value->content; ?></td>
                                        <td class="custom_wdth">
                                            <?php if ($pages_ids) : foreach ($pages_ids as $value2) : ?>
                                                    <?= $value2->sub_menu_title; ?>
                                            <?php endforeach;
                                            endif; ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" onclick="edit_BannerSection(<?= $value->id ?>)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button class="btn btn-danger btn-sm" onclick="delete_BannerSection(<?= $value->id ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                            <?php $num++;
                                endforeach;
                            endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<script>
    $(document).ready(function() {
        $('#BannerSection_table').DataTable({
            responsive: false,
        });
    })
</script>
<script src="<?php echo base_url('assets/js/othercustomscripts.js') ?>"></script>

<?= $this->endSection(); ?>