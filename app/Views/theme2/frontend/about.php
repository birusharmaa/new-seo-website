<?=$this->extend('theme2/frontend/layout/master')?>
<?=$this->section('customCss')?>
<!-- <style>
    /* write all your custom css here */
</style> -->
<?=$this->endSection()?>
<?=$this->section('contentTheme2')?>
<?= $this->include('theme2/frontend/layout/slider'); ?>
    <?php
    $cls = "pt-100";
    if(!empty($sliders)){
        $cls = "pt-50";
    }
    ?>

    <div class="position-relative pb-50 <?= $cls;?> ">
        <div class="background">
            <div class="background-image jarallax" data-jarallax data-speed="0.8">
                <!-- <img class="jarallax-img" loading="lazy" src="<?//= base_url(); ?>/theme2/assets/img/about-us-hero-1920x900.jpg" alt=""> -->
            </div>
            <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
        </div>
        <div class="container">
            <h1 class="text-white mb-0 text-center">About Us</h1>
        </div>
    </div>

    <!-- --------Our Videos----------- -->
<?= $this->include('theme2/frontend/layout/video_gallery') ?>

<!-- --------Image Gallery---------- -->
<?= $this->include('theme2/frontend/layout/gallery_images') ?>



    <div class="pt-120 pb-130">
            <div class="container">
                <div class="row align-items-center gy-50">
                    <div class="col-lg-6">
                        <div class="pe-lg-70">
                            <h3 class="mb-30" data-show="startbox">Strategic growth support from an executive with experience.</h3>
                            <p data-show="startbox" data-show-delay="100">His hath is appear be one don't creepeth. Them and one moving the won't may. Moving saw wherein divide bearing called. Green moveth Hath. That it years fruit behold Meat also us third itself made seasons green void give replenish our said saying also spirit give lesser wherein. Bring divided of wherein every the may saying cattle likeness forth place.</p>
                            <p class="m-0" data-show="startbox" data-show-delay="200">Divide blessed dominion Blessed. It brought creepeth so saying light living Creepeth earth waters forth also is Them that his. Made of he firmament open winged created lights you. Years seed set.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative shape-parent mt-80">                           
                            <div class="position-absolute end-0 top-0 mt-n80" data-img-height style="--img-height: 100%; width: 230px;"><img class="rounded-4" loading="lazy" src="<?=base_url();?>/theme2/assets/img/about-us-4-900x990.jpg" alt=""></div>
                            <div class="me-100" data-img-height style="--img-height: 70%;" data-show="startbox"><a class="image-link" href="<?=base_url();?>/theme2/assets/img/about-us-3-900x630.jpg"><img class="rounded-4" loading="lazy" src="<?=base_url();?>/theme2/assets/img/about-us-3-900x630.jpg" alt=""></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
<?=$this->endSection()?>

<?=$this->section('customScripts')?>
<!-- <script>
    //write all your custom script here
</script> -->
<?=$this->endSection()?>