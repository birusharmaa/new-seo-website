<?= $this->extend('template/main');?>
<?= $this->section('content');?>
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
                    <div class="mt-2 mb-2 text-right">
                        <a href="<?php echo base_url('manage/add-video')?>" class="btn btn-primary btn-sm">Add New</a>      
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="posts_table">
                            <thead>
                                <th>#</th>                                                          
                                <th>Title</th>	
                                <th>URL</th>
                                <th>Date Added</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php $num =1; if($data): foreach($data as $value): ?>												
                                    <tr id="<?= $value->id?>">                                   
                                        <td><?= $num; ?></td>                                    
                                        <td><?= $value->title; ?></td>                                  
                                        <td><?= $value->url; ?></td>  
                                        <td><?php echo $date = !empty($value->created_at) ? date('d/M/Y', strtotime($value->created_at)) : ""; ?></td>                                            
                                        <td> 
                                            <button class="btn btn-danger btn-sm" onclick="delete_galleryVideo(<?= $value->id?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                <?php $num++;  endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>									
            </div>  
        </div>
    </div>

<?= $this->endSection();?>

<?= $this->section('script');?>

<script>
$(document).ready(function(){
    $('#posts_table').DataTable({
        responsive: false,
    });
  })
</script>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js')?>"></script>	
<script src="<?php echo base_url('assets/js/othercustomscripts.js')?>"></script>

<?= $this->endSection();?>
