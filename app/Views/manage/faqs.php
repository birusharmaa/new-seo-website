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
                        <a href="<?php echo base_url('manage/add-faqs')?>" class="btn btn-primary btn-sm">Add New</a>      
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="faqs_table">
                            <thead>
                                <th>#</th>               
                                <th>Title</th>	
                                <th>Content</th>
                                <th>Date Added</th>
                                <th>Date Modified</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php $num =1; if($data): foreach($data as $value): ?>												
                                    <tr id="<?= $value->id?>">                                   
                                        <td><?= $num; ?></td>
                                        <td class="custom_wdth"><?= $value->title; ?></td>
                                        <td class="custom_wdth"><?= $value->content; ?></td> 
                                        <td><?php echo date('d/M/Y', strtotime($value->created_at));?></td>    
                                        <td><?php echo $date = !empty($value->updated_at) ? date('d/M/Y', strtotime($value->updated_at)) : ""; ?></td>                                            
                                        <td>   
                                            <a class="btn btn-primary btn-sm" href="<?php echo base_url('manage/edit-faqs/'.$value->id)?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>                                     
                                            <button class="btn btn-danger btn-sm" onclick="delete_faqs(<?= $value->id?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
    $('#faqs_table').DataTable({
        responsive: true,
    });
  })
</script>
<script src="<?php echo base_url('assets/js/othercustomscripts.js')?>"></script>

<?= $this->endSection();?>
