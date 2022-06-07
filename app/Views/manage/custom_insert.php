<?= $this->extend('template/main'); ?>

<?= $this->section('content'); ?>

<div class="page-header">
    <div>
        <h2 class="main-content-title tx-24 mg-b-5"><?= $title; ?></h2>
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
<div class="row row-sm mx-auto">
    <div class="col-md-12 ">
        <div class="row">
            <div class="col-md-6 box-shadow border">
                <div class="mt-2 mb-2">
                    <input type="hidden" name="insert_id" id="insert_id" value="<?= $data->id; ?>">
                    <form id="customInsertForm">
                        <div class="form-group">
                            <lable>Head</lable>
                            <textarea class="form-control" rows="4" cols="50" name="head" id="head"><?= $data->head; ?></textarea>
                        </div>
                        <div class="form-group">
                            <lable>foot</lable>
                            <textarea class="form-control" rows="4" cols="50" name="foot" id="foot"><?= $data->foot; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
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