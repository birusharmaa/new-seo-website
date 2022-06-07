<?= $this->extend('template/main');?>
<?= $this->section('content');?>
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5"><?= $title; ?></h2>
            <ol class="breadcrumb mt-4">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('manage/faqs')?>">All Faqs</a></li>								
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
                    <input type="hidden" name="faqs_id" id="faqs_id" value="<?= $data->id;?>" required>
                        <form id="Editfaqs">                          
                            <div class="form-group">
                                <label>Title *</label>
                                <input type="text" name="title" id="title" class="form-control" value="<?= $data->title;?>" required>
                            </div> 
                            <div class="form-group">
                                <label>Content *</label>
                                <textarea name="content" id="content" class="form-control" required><?= $data->content;?></textarea>
                            </div>
                            <button class="btn btn-primary btn-sm">Update</button>    
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
