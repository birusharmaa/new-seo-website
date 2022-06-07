<?= $this->extend('template/main');?>

<?= $this->section('content');?>

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
                <div class="col-md-12 box-shadow border">    
                    <div class="mt-2 mb-2">
                    <input type="hidden" name="keyword_id" id="keyword_id">  
                    <form id="TagsKeywords">                                                              
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <lable>Keywords(Meta) *</lable>                                                   
                                    <input type="text" name="keyword" id="keyword" class="form-control">   
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <lable>Pages *</lable>                                                   
                                    <select class="form-control pages_ids" id="pagesIds" name="pages[]" multiple required> 													
                                        <?php if($pages): foreach($pages as $value): ?>
                                            <option value="<?=$value->id ;?>"><?=$value->page_title ;?></option>
                                        <?php endforeach; endif; ?>
                                    </select> 
                                </div>                                                  
                            </div>                                               
                        </div>                                            
                        <button class="btn btn-primary btn-sm">Add</button>                                            
                    </form>
                    </div>
                    <div class="table-responsive">
                    <table class="table" id="tagKeyword_table">
                        <thead>
                            <th>#</th>
                            <th>Keyword</th>                            
                            <th class="custom_wdth">Pages</th>																								
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php $num =1; if($data): foreach($data as $value): ?>												
                                <tr id="<?= $value->id?>">
                                <?php $pagesss = json_decode($value->pages); ?>
                                    <td><?= $num; ?></td>
                                    <td><?= $value->keyword; ?></td>                                  
                                    <td class="custom_wdth">
                                        <?php if($pagesss): foreach($pages as $value1): foreach($pagesss as $key): ?>
                                            <?php if($value1->id == $key ):?>
                                                <?= $value1->page_title .", "; ?>
                                            <?php endif; ?>
                                        <?php  endforeach;  endforeach; endif;?>
                                    </td>                                    
                                    <td>                                        
                                        <button class="btn btn-danger btn-sm" onclick="delete_keyword(<?= $value->id?>)"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
function updateTheme(value){
    const BASEURL = $('#url').val();				
    $.ajax({
        url: BASEURL + '/update-theme/'+value,
        type: 'POST',
        success: function (data) {						
        }
    });
}
</script>
<script>
$(document).ready(function(){
    $('#tagKeyword_table').DataTable({
        responsive: true,
    });
    $('.pages_ids').select2();   
})
</script>
<script src="<?php echo base_url('assets/ckeditor/ckeditor.js')?>"></script>	
<script src="<?php echo base_url('assets/js/othercustomscripts.js')?>"></script>

<?= $this->endSection();?>
