<?= $this->extend("theme3/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<!-- <style>
    /* write all your custom css here */
</style> -->
<?= $this->endSection() ?>
<?= $this->section("contentTheme3") ?>
<div class="services-page overflow-hidden">

    <section>
        <div class="content-wrap">
            <div class="position-relative backimg">
                <nav class="crumb" aria-label="breadcrumb">
                    <ol class="breadcrumb  justify-content-center">
                        <div class="skew chng">
                            <p class="text-dark">
                                <a class="text-decoration-none text-primary fw-bold" href="<?= base_url(); ?>/">
                                    Home->
                                </a>
                                <?= $slug ?>
                            </p>
                        </div>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- --------Our Videos----------- -->
    <?= $this->include('theme3/frontend/layout/video_gallery') ?>

    <!-- --------Image Gallery---------- -->
    <?= $this->include('theme3/frontend/layout/gallery_images') ?>



    <section class="mb-4">
       <div class="container">
       <?php 
        $services = $all_services;
            if(count($services)>0){
                echo '<div class="row ms-auto">';

                for ($i = 0; $i < count($services); $i++) {
                    if(!empty($services[$i]['image'])){
                        $img = base_url().env('SEO_SUBPATH')."/uploads/service_images/".$services[$i]['image'];
                    }else{
                        $img = base_url().env('SEO_SUBPATH')."/assets/img/services-img.jpg";
                    }
                ?>
                
                <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000">
                    <div class="card">
                        <div class="card-header">
                        <img class="img-transparent rounded" src="<?= $img;?>" width="100%" height="250px" alt="card image">
                        </div>
                        <div class="card-body">
                            <h4 class="text-color fw-bold text-center text-truncate">
                                <?= $services[$i]['service'];?>
                            </h4>
                            <a href="<?= base_url().'/'.'services/'.$services[$i]['menu_link'];?>">
                                <button class="btn btn-primary w-100 m-0 view_more-link">
                                    Know More
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            
                <?php }
                    echo "</div>";
                }
                else{
                    echo "<h2 class='text-center'>No services found</h2>";
                }
        ?>
       </div>
   </section>

   

    <!-- --------Contact Us---------- -->
    <section class="mb-4 overflow-hidden">
        <div class="contact section-padding">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h2><span class="text-color text-uppercase fw-bold">Contact us the Get Started</span></h2>
            </div>
            <div class="row py-4 gx-5">
                <div class="col-md-6 d-flex " data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="w-100 top-border">
                        <iframe class="location-height" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%;border-radius:16px"></iframe>
                    </div>
                </div>
                <div class="col-md-6 " data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                    <div class="top-border responsive-form">
                        <?= $this->include('theme3/frontend/layout/message'); ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

</div>

<?= $this->endSection() ?>
<?= $this->section("customScripts") ?>

<script>
    $(function() {
        AOS.init();
    });
</script>
<?= $this->endSection() ?>