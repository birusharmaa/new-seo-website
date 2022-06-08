<?= $this->extend('theme2/frontend/layout/master') ?>
<?= $this->section('customCss') ?>
<!-- <style>
    /* write all your custom css here */
</style> -->
<?= $this->endSection() ?>

<?= $this->section('contentTheme2') ?>
<?= $this->include('theme2/frontend/layout/slider'); ?>

<div class="position-relative pb-50 pt-100">
    <div class="background">
        <div class="background-image jarallax" data-jarallax data-speed="0.8">
            <!-- <img class="jarallax-img" loading="lazy" src="<? //= base_url(); 
                                                                ?>/theme2/assets/img/about-us-hero-1920x900.jpg" alt=""> -->
        </div>
        <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
    </div>
    <div class="container">
        <h1 class="text-white mb-0 text-center">Services</h1>
    </div>
</div>

<!-- --------Our Videos----------- -->
<?= $this->include('theme2/frontend/layout/video_gallery') ?>

<!-- --------Image Gallery---------- -->
<?= $this->include('theme2/frontend/layout/gallery_images') ?>


<div class="container pb-60 bg-gray-light">
    <div class="services2 section-padding">
        <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="mt-20"><span class="text-color text-uppercase fw-bold">Explore Related Services</span></h2>
        </div>
        <div class="row">
            <div class="col-md-8" data-aos="fade-down" data-aos-duration="1000">
                <?php
                $services = $all_services;
                if (count($services) > 0) {
                    echo '<div class="row ms-auto">';
                    for ($i = 0; $i < count($services); $i++) {
                        if (!empty($services[$i]['image'])) {
                            $img = base_url() . env('SEO_SUBPATH') . "/uploads/service_images/" . $services[$i]['image'];
                        } else {
                            $img = base_url() . env('SEO_SUBPATH') . "assets/img/services-img.jpg";
                        }
                ?>

                        <div class="col-12 col-md-6" data-show="startbox">
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

                <?php }
                    echo "</div>";
                } else {
                    echo "<h2 class='text-center'>No services found</h2>";
                }
                ?>
            </div>


            <div class="col-md-4 pb-3" data-aos="fade-left" data-aos-duration="1000">
                <div class="card card-custom bg-white border-white border-0 p-3">
                    <div class="input-group justify-content-center my-4 ">
                        <form action="<?= base_url() . '/service/search'; ?>" method="post">
                            <div class="form-outline d-flex">
                                <input type="text" id="form1" name="form1" class="form-control w-100 rounded-0" placeholder="Search here..." style="padding: 8px 27px;" required />
                                <button type="submit" class="btn search-btn btn-light">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>

                        </form>
                    </div>
                    <div class="text-center mb-3">
                        <h5 class="section-title text-center text-primary text-uppercase fw-bold">All Services</h5>
                    </div>
                    <div class="card-body text-alignment border border-1 p-0 fw-bold">
                        <?php
                        foreach ($all_services as $all) {
                        ?>
                            <div class="p-3 hover-bg">
                                <a href="<?= base_url() . env('SEO_SUBPATH') . '/' . 'services/' . $all['slug']; ?>" class="text-decoration-none text-dark anchor-hover">
                                    <p class="m-0">
                                        <?= $all['service']; ?>
                                    </p>
                                </a>
                            </div>
                            <hr class="w-100 m-0">
                        <?php
                        }
                        ?>

                    </div>
                </div>

            </div>
        </div>
    </div>

</div>
<?= $this->endSection() ?>

<?= $this->section('customScripts') ?>
<!-- <script>
    //write all your custom script here
</script> -->
<?= $this->endSection() ?>