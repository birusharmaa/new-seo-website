<?= $this->extend('template/main');?>
<?= $this->section('content');?>
    <div class="page-header">
        <div>
            <h2 class="main-content-title tx-24 mg-b-5"><?= $title; ?></h2>
            <ol class="breadcrumb mt-4">
                <li class="breadcrumb-item"><a href="#">Home</a></li>	
                <li class="breadcrumb-item"><a href="<?php echo base_url('manage/posts'); ?>">All Posts</a></li>								
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
                <form id="AddPost" class="mt-3" >
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <lable>Title <span class="text-danger">*</span></lable>                                                   
                                <input type="text" name="title" class="form-control" id="title">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <lable>Slug (If empty, it will be automatically generated)</lable>                                                   
                                <input type="text" name="slug" class="form-control" id="slug">  
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <lable>Image <span class="text-danger">*</span></lable>
                                <input type="file" accept="image/png, image/jpg, image/jpeg" class="form-control" name="postUpdatesImg" id="postUpdatesImg" />
                            </div>
                            <img src="" class="post-update-img w-50"/> 
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <lable>Status <span class="text-danger">*</span></lable>                                                   
                                <select class="form-control" id="status" name="status" required> 	
                                    <option value="">select status</option>	
                                    <option value="draft">Draft</option>												
                                    <option value="published">Published</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <lable>Featured <span class="text-danger"></span>(Featured Posts would be shown on home page.)</lable>                                                   
                                <select class="form-control" id="featured" name="featured" required> 													
                                    <option value="no">No</option>
                                    <option value="yes">Yes</option>
                                <select>     
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <lable>Description</lable>
                        <textarea class="form-control" name="description" id="description"></textarea>
                    </div>
                    <div class="mt-2 mb-3">
                        <button class="btn btn-primary btn-sm">Post Now</button>
                    </div>
                </form>                   
            </div>									
        </div>  
    </div>
</div>

<?= $this->endSection();?>

<?= $this->section('script');?>

<script>
$(document).ready(function(){
    $('#posts_table').DataTable({
        responsive: true,
    });
    CKEDITOR.replace('description');
  })
</script>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js')?>"></script>	
<script src="<?php echo base_url('assets/js/othercustomscripts.js')?>"></script>

<?= $this->endSection();?>
