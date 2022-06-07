<?= $this->extend('theme2/frontend/layout/master') ?>
<?= $this->section('customCss') ?>
<?= $this->endSection() ?>
<?= $this->section('contentTheme2') ?>
<?= $this->include('theme2/frontend/layout/slider'); ?>

<div class="position-relative pb-50 pt-100">

    <div class="background">
        <div class="background-image jarallax" data-jarallax data-speed="0.8">
            <!-- <img class="jarallax-img" loading="lazy" src="<?//= base_url(); ?>/theme2/assets/img/about-us-hero-1920x900.jpg" alt=""> -->
        </div>
        <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
    </div>
    <div class="container">
        <h1 class="text-white mb-0 text-center">
            <?= $title; ?>
        </h1>
    </div>
</div>
<div class="container pb-60">
    <div class="row pt-50 pb-30">
    </div>
</div>
<div class="container pb-20">
    <div class="row">
        <!-- ----------Our Products------ -->
        <section>
            <div class="products section-padding ">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h6 class="section-title text-center text-primary text-uppercase">Products</h6>
                    <h1>Explore Related <span class="text-color text-uppercase fw-bold">Products</span></h1>
                </div>

                <div class="row mx-auto">
                <?php
                    if(count($all_products)>0){
                        foreach ($all_products as $all) {
                            $img = !empty($all['main_image']) ? base_url() . env('SEO_SUBPATH') . "/uploads/product_images/" . $all['main_image'] : base_url() . env('SEO_SUBPATH') . "/assets/img/product1.jpg";
                        ?>
                        <div class="col-12 col-md-4" data-show="startbox">
                            <div class="service-case lift rounded-4 bg-white shadow overflow-hidden">
                                <a class="service-case-image" href="#" data-img-height style="--img-height: 64%"><img loading="lazy" src="<?= $img;?>" alt="" /></a>
                                <div class="service-case-body position-relative">
                                    <h4 class="service-case-title text-truncate mb-5"><?= $all['product_name']; ?></h4>
                                    <div class="service-case-text font-size-15 mb-5 two-line-truncate">
                                        <?= $all['short_description']?>
                                    </div>
                                    <a class="service-case-arrow stretched-link" href="<?= base_url().'/'.'products/'.$all['menu_link'];?>">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php 
                        } 
                        } else {
                            echo "<h2 class='text-center'>No product found.</h2>";
                        }
                    ?>
                </div>
            </div>
        </section>
    </div>
    <!-- <div class="row gy-30">
        <div class="col-12 col-md-6 col-lg-3" data-show="startbox">
            <div class="service-box lift position-relative rounded-4 bg-light text-center service-box-sm">
                <div class="circle-icon text-white bg-accent-2 mb-30">
                    <i class="fa-solid fa-user fa-3x"></i>
                </div>
                <h4 class="service-box-title mb-15">Personalization</h4>
                <p class="service-box-text font-size-15 mb-0">Stars life that waters firmament our created you.</p><a class="stretched-link" href="service-single.html"></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="100">
            <div class="service-box lift position-relative rounded-4 bg-light text-center service-box-sm">
                <div class="circle-icon text-white bg-accent-2 mb-30">
                    <i class="fa-solid fa-headset fa-3x"></i>
                </div>
                <h4 class="service-box-title mb-15">Customer Support</h4>
                <p class="service-box-text font-size-15 mb-0">Above behold our sea earth waters in deep yielding.</p><a class="stretched-link" href="service-single.html"></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="200">
            <div class="service-box lift position-relative rounded-4 bg-light text-center service-box-sm">
                <div class="circle-icon text-white bg-accent-2 mb-30">
                    <i class="fa-solid fa-lock fa-3x"></i>
                </div>
                <h4 class="service-box-title mb-15">Privacy</h4>
                <p class="service-box-text font-size-15 mb-0">Winged isn't gathered forth first fruitful without.</p><a class="stretched-link" href="service-single.html"></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="300">
            <div class="service-box lift position-relative rounded-4 bg-light text-center service-box-sm">
                <div class="circle-icon text-white bg-accent-2 mb-30">
                    <i class="fa-solid fa-file-lines fa-3x"></i>
                </div>
                <h4 class="service-box-title mb-15">Case Studies</h4>
                <p class="service-box-text font-size-15 mb-0">In creepeth own for bring, under lights, together.</p><a class="stretched-link" href="service-single.html"></a>
            </div>
        </div>
    </div> -->
</div>
<?= $this->endSection() ?>

<?= $this->section('customScripts') ?>
<!-- <script>
    //write all your custom script here
</script> -->
<?= $this->endSection() ?>