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
                    <input type="hidden" name="product_sec_id" id="product_sec_id">
                    <form id="ProductSection">
                        <div class="form-group">
                            <label>Heading <span class="text-danger"> *</span> </label>
                            <input type="text" class="form-control" name="heading" id="heading">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Products <span class="text-danger"> *</span></label>
                                    <select class="form-control products_ids" id="productsIds" name="products[]" multiple required>
                                        <?php if ($products) : foreach ($products as $value) : ?>
                                                <option value="<?= $value->id; ?>"><?= $value->product_name; ?></option>
                                        <?php endforeach;
                                        endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pages <span class="text-danger"> *</span></label>
                                    <select class="form-control pages_ids" id="pagesIds" name="pages[]" multiple required>
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
                        <button class="btn btn-primary btn-sm">Add Section</button>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table" id="products_section_table">
                        <thead>
                            <th>#</th>
                            <th>Heading</th>
                            <th class="custom_wdth">Products</th>
                            <th class="custom_wdth">Pages</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php $num = 1;
                            if ($data) : foreach ($data as $value) : ?>
                                    <tr id="<?= $value->id ?>">
                                        <?php $pages_ids = json_decode($value->pages);
                                        $productssss = json_decode($value->products);  ?>
                                        <td><?= $num; ?></td>
                                        <td><?= $value->heading; ?></td>
                                        <td class="custom_wdth">
                                            <?php if ($productssss) : foreach ($products as $value1) : foreach ($productssss as $key) : ?>
                                                        <?php if ($value1->id == $key) : ?>
                                                            <?= $value1->product_name . ", "; ?>
                                                        <?php endif; ?>
                                            <?php endforeach;
                                                endforeach;
                                            endif; ?>
                                        </td>
                                        <td class="custom_wdth">
                                            <?php if ($pages_ids) : foreach ($pages_ids as $value2) : ?>
                                                    <?= $value2->sub_menu_title . ", "; ?>
                                            <?php endforeach;
                                            endif; ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" onclick="edit_product_section(<?= $value->id ?>)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button class="btn btn-danger btn-sm" onclick="delete_product_section(<?= $value->id ?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
        $('#products_section_table').DataTable({
            responsive: false,
        });
        $('.pages_ids').select2();
        $('.products_ids').select2();
    });
</script>
<script src="<?php echo base_url('assets/js/othercustomscripts.js') ?>"></script>
<?= $this->endSection(); ?>