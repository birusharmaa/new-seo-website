<?= $this->extend("theme3/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<!-- <style>
    /* write all your custom css here */
</style> -->
<?= $this->endSection(); ?>
<?= $this->section("contentTheme3");
?>
<div class="services-page overflow-hidden">
    <section>
        <div class="content-wrap">
            <div class="position-relative backimg">
                <nav class="crumb" aria-label="breadcrumb">
                    <ol class="breadcrumb  justify-content-center">
                        <div class="skew chng">
                            <p class="text-dark">
                                <a class="text-decoration-none text-primary fw-bold" href="<?= base_url(); ?>/">
                                    Home-> services->
                                </a>
                                <?= $slug ?>
                            </p>
                        </div>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="services2 section-padding">
                <div class="row">
                    <div class="col-md-8" data-aos="fade-down" data-aos-duration="1000">
                        <?php
                        $img = !empty($services['banner']) ? base_url() . env('SEO_SUBPATH') . "/uploads/service_banners/" . $services['banner'] : base_url() . env('SEO_SUBPATH') . "/assets/img/service1.jpg";
                        ?>
                        <img src="<?= $img; ?>" width="100%" alt="">
                        <div class="bg-dark p-2 my-2">
                            <h4 class="text-color fw-bold text-center pt-1"><?= $services['service']; ?></h4>
                        </div>
                        <div class="content p-3 text-alignment">
                            <?= $services['content']; ?>
                        </div>
                    </div>


                    <div class="col-md-4 pb-3" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card card-custom bg-white border-white border-0 p-3">
                            <div class="input-group justify-content-center my-4 ">
                                <form action="<?= base_url() . '/service/search'; ?>" method="post">
                                    <div class="form-outline d-flex">
                                        <input type="text" id="form1" name="form1" class="searchbar_color form-control w-100 rounded-0" style="padding: 8px 27px;" required />
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-search"></i>
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
    </section>

    <!-- ----- Our Services------- -->
    <section class="mb-4">
        <div class="container">
            <?php
            $services = $all_services;
            if (count($services) > 0) {
                echo '<div class="row ms-auto">';

                for ($i = 0; $i < count($services); $i++) {
                    if (!empty($services[$i]['image'])) {
                        $img = base_url() . env('SEO_SUBPATH') . "/uploads/service_images/" . $services[$i]['image'];
                    } else {
                        $img = base_url() . env('SEO_SUBPATH') . "/assets/img/services-img.jpg";
                    }
            ?>

                    <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000">
                        <div class="card">
                            <div class="card-header">
                                <img class="img-transparent rounded" src="<?= $img; ?>" width="100%" height="250px" alt="card image">
                            </div>
                            <div class="card-body">
                                <h4 class="text-color fw-bold text-center text-truncate">
                                    <?= $services[$i]['service']; ?>
                                </h4>
                                <a href="<?= base_url() . '/' . 'services/' . $services[$i]['menu_link']; ?>">
                                    <button class="btn btn-primary w-100 m-0 view_more-link">
                                        Know More
                                    </button>
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
    </section>

    <!-- --------Contact Us---------- -->
    <section class="mb-4 overflow-hidden">
        <div class="contact section-padding">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h2>Contact us the <span class="text-color text-uppercase fw-bold">Get Started</span></h2>
            </div>
            <div class="row py-4 gx-5">
                <div class="col-md-6 d-flex " data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="w-100 top-border">
                        <iframe class="location-height" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%;border-radius:16px; height:350px;"></iframe>
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