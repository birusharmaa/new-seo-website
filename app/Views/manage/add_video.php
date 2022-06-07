<?= $this->extend('template/main');?>
<?= $this->section('content');?>
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5"><?= $title; ?></h2>
            <ol class="breadcrumb mt-4">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('/manage/video-gallery')?>">Video Gallery</a></li>								
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
                        <form id="UploadeVideoGallery">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                        <label>Title *</label>
                                        <input type="text" name="title" id="title" class="form-control">
                                    </div>                                   
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                        <label>URL *</label>
                                        <input type="text" name="url" id="url" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-sm">Save</button>    
                        </form>                          
                    </div>                   
                </div>									
            </div>  
        </div>
    </div>

<?= $this->endSection();?>

<?= $this->section('script');?>

<script src="<?php echo base_url('assets/js/othercustomscripts.js')?>"></script>

<?= $this->endSection();?>
