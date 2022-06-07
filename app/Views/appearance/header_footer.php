<?= $this->extend('template/main');?>
<?= $this->section('content');?>
<?php $session = \Config\Services::session()?>

    	<!-- Page Header -->
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
                <div class="row ">
                    <div class="col-md-12 box-shadow border rounded mb-5">
                    
                        <input type="hidden" name="header_id" id="header_id" value="<?= $info->id; ?>">
                        <form class="py-12 px-2" id="headerFooterUpdate">
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <div class="form-group ">					
                                        <div class="mb-3">
                                            <label class="form-label fs-15">Header Background color *</label>				
                                            <input type="color" class="form-control" name="header_background" id="header_background" value="<?php isset($info->header_background); echo $info->header_background; "#000000"; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">					
                                        <div class="mb-3">
                                            <label class="form-label fs-15">Header Text Color *</label>				
                                            <input type="color" class="form-control" name="header_text" id="header_text" value="<?php isset($info->header_text); echo $info->header_text; "#000000"; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">					
                                        <div class="mb-3">
                                            <label class="form-label fs-15">Navbar Background Color *</label>				
                                            <input type="color" class="form-control" name="navbar_background" id="navbar_background" value="<?php isset($info->navbar_background); echo $info->navbar_background; "#000000"; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group ">					
                                        <div class="mb-3">
                                            <label class="form-label fs-15">Navbar Text Color *</label>				
                                            <input type="color" class="form-control" name="navbar_text" id="navbar_text" value="<?php isset($info->navbar_text); echo $info->navbar_text; "#000000"; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group ">					
                                        <div class="mb-3">
                                            <label class="form-label fs-15">Searchbar Color *</label>				
                                            <input type="color" class="form-control" name="searchbar_color" id="searchbar_color" value="<?php isset($info->searchbar_color); echo $info->searchbar_color; "#000000"; ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">					
                                        <div class="mb-3">
                                            <label class="form-label fs-15">Footer Background Color *</label>				
                                            <input type="color" class="form-control" name="footer_background" id="footer_background" value="<?php isset($info->footer_background); echo $info->footer_background; "#000000"; ?>">
                                        </div>
                                    </div>
                                </div>   
                                <div class="col-md-4">
                                    <div class="form-group ">					
                                        <div class="mb-3">
                                            <label class="form-label fs-15">Footer Text Color *</label>				
                                            <input type="color" class="form-control" name="footer_text_color" id="footer_text_color" value="<?php isset($info->footer_text_color); echo $info->footer_text_color; "#000000"; ?>">
                                        </div>
                                    </div>
                                </div>                                               
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group ">					
                                        <div class="mb-3">
                                            <label class="form-label fs-15">Footer Text *</label>				
                                            <textarea class="form-control" name="footer_text"><?php isset($info->footer_text); echo $info->footer_text; ""; ?></textarea>
                                        </div>
                                    </div>
                                </div>                                        
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group ">					
                                        <div class="mb-3">
                                            <label class="form-label fs-15">Copyright Background Color *</label>				
                                            <input type="color" class="form-control" name="copyright_background" value="<?php isset($info->copyright_background); echo $info->copyright_background; "#000000"; ?>" id="copyright_background">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group ">					
                                        <div class="mb-3">
                                            <label class="form-label fs-15">Copyright Text Color *</label>				
                                            <input type="color" class="form-control" name="copyright_text_color" value="<?php isset($info->copyright_text_color); echo $info->copyright_text_color; "#000000"; ?>" id="copyright_text_color">
                                        </div>
                                    </div>
                                </div>   
                                <div class="col-md-4">
                                    <div class="form-group ">					
                                        <div class="mb-3">
                                            <label class="form-label fs-15">Copyright Text *</label>				
                                            <input type="text" class="form-control" name="copyright_text" value="<?php isset($info->copyright_text); echo $info->copyright_text; "#000000"; ?>" id="copyright_text">
                                        </div>
                                    </div>
                                </div>                                               
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group ">					
                                        <div class="mb-3">
                                            <label class="form-label fs-15">Sitemap URL *</label>				
                                            <input type="text" class="form-control" name="sitemap" value="<?php isset($info->sitemap); echo $info->sitemap; "#000000"; ?>" >
                                        </div>
                                    </div>
                                </div>                                        
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>									
                </div>  
            </div>
        </div>
        <!-- Row end -->

<?= $this->endSection();?>
<?= $this->section('script');?>
<script src="<?php echo base_url('assets/js/othercustomscripts.js')?>"></script>
<?= $this->endSection();?>
