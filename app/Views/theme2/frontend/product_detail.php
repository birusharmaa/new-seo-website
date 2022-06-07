<?= $this->extend('theme2/frontend/layout/master') ?>
<?= $this->section('customCss') ?>
<style>
    
</style>
<?= $this->endSection() ?>
<?= $this->section('contentTheme2') ?>
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

        <div class="product section-padding">
            <div class="row content ">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000">
                    <?php
                    $img = !empty($product['main_image']) ? base_url() . env('SEO_SUBPATH') . "/uploads/product_images/" . $product['main_image'] : base_url() . env('SEO_SUBPATH') . "/assets/img/product1.jpg";
                    ?>
                    <img src="<?= $img; ?>" class="img img-fluid d-block mx-auto" alt="">
                </div>
                <div class="col-md-6 pt-4" data-aos="fade-left" data-aos-duration="1000">
                    <div class="bg-dark p-2 my-5 ">
                        <h4 class="text-color my-20 pt-1 fw-bold text-center"><?= $product['product_name']; ?></h4>
                    </div>
                    <div class="text-alignment">
                        <?= $product['short_description']; ?>
                    </div>
                    <div class="text-alignment">
                        <?= $product['long_description']; ?>
                    </div>
                    <div class="text-alignment">
                        <?= $product['specification']; ?>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-light rounded-pill ms-2 responsive-btn" data-bs-target="#inquiryModal" data-bs-toggle="modal" type="submit">
                            Enquiry Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container pb-20">
    <div class="row">
        <!-- ----------Our Products------ -->
        <section>
            <div class="products section-padding ">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h1><span class="text-color text-uppercase fw-bold">Our Products</span></h1>
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
                                    <h4 class="service-case-title text-truncate mb-5"><?= $product['product_name']; ?></h4>
                                    <div class="service-case-text font-size-15 mb-5 two-line-truncate">
                                        <?= $product['short_description']?>
                                    </div>
                                    <a class="service-case-arrow stretched-link" href="<?= base_url().'/'.'products/'.$product['menu_link'];?>">
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
</div>


<?= $this->endSection() ?>

<?= $this->section('customScripts') ?>
<!-- <script>
    //write all your custom script here
</script> -->
<?= $this->endSection() ?>