<?= $this->extend('theme2/frontend/layout/master') ?>
<?= $this->section('customCss') ?>
<!-- <style>
    /* write all your custom css here */
</style> -->
<?= $this->endSection() ?>

<?= $this->section('contentTheme2') ?>
<div class="position-relative pb-50 pt-100 ">
    <div class="background">
        <div class="background-image jarallax" data-jarallax data-speed="0.8">
            <!-- <img class="jarallax-img" loading="lazy" src="<? //= base_url(); 
                                                                ?>/theme2/assets/img/about-us-hero-1920x900.jpg" alt=""> -->
        </div>
        <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
    </div>
    <div class="container">
        <h1 class="text-white mb-0 text-center">Our Services</h1>
    </div>
</div>
<div class="container-fluid pb-60 bg-gray-light">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <!-- <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h6 class="section-title text-center text-primary text-uppercase">Our Services</h6>
                <h1>Explore Our <span class="text-color text-uppercase fw-bold">Services</span></h1>
            </div> -->
            <?php
            $img = !empty($services['banner']) ? base_url() . env('SEO_SUBPATH') . "/uploads/service_banners/" . $services['banner'] : base_url() . env('SEO_SUBPATH') . "/assets/img/service1.jpg";
            ?>
            <img src="<?= $img; ?>" class="mt-10" width="100%" alt="">
            <div class="bg-dark p-2 my-2">
                <h4 class="text-color my-20 fw-bold text-center pt-1"><?= $services['service']; ?></h4>
            </div>
            <div class="content p-3 text-alignment">
                <?= $services['content']; ?>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-12">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h2> <span class="text-color text-uppercase fw-bold">Explore Our Services</span></h2>
            </div>
        </div>
        <?php
        if (count($all_services) > 0) {
            $services = $all_services;
            echo '<div class="col-md-10 offset-md-1">';
            echo '<div class="row">';
            for ($i = 0; $i < count($services); $i++) {
                if (!empty($services[$i]['image'])) {
                    $img = base_url() . env('SEO_SUBPATH') . "/uploads/service_images/" . $services[$i]['image'];
                } else {
                    $img = base_url() . env('SEO_SUBPATH') . "/assets/img/services-img.jpg";
                }
                ?>
                <div class="col-12 col-md-4" data-show="startbox">
                    <div class="service-case lift rounded-4 bg-white shadow overflow-hidden">
                        <a class="service-case-image" href="<?= base_url() . '/' . 'services/' . $services[$i]['menu_link']; ?>" data-img-height style="--img-height: 64%">
                            <img loading="lazy" src="<?= $img; ?>" alt="" />
                        </a>
                        <div class="service-case-body position-relative">
                            <h4 class="service-case-title text-truncate mb-15"><?= $services[$i]['service']; ?></h4>
                            <!-- <p class="service-case-text font-size-15 mb-30">
                                <? //= $services[$i]['short_description']; 
                                ?>
                            </p> -->
                            <a class="service-case-arrow stretched-link" href="<?= base_url() . '/' . 'services/' . $services[$i]['menu_link']; ?>">
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        } else {
            echo "<h2 class='text-center'>No services found</h2>";
        }
        ?>
    </div>

    <?= $this->endSection() ?>
    <?= $this->section('customScripts') ?>
    <!-- <script>
        //write all your custom script here
    </script> -->
    <?= $this->endSection() ?>