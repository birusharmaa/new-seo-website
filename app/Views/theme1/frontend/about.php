<?= $this->extend("theme1/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<?= $this->endSection() ?>
<?= $this->section("contentTheme1") ?>
<?= $this->include('theme1/frontend/layout/slider') ?>
<div class="about-us-page">
    <section class="overflow-hidden">
        <div class="about section-padding">
            <div class="text-center mb-5" data-aos="zoom-out" data-aos-duration="1000">
                <h6 class="section-title text-center text-primary text-uppercase">About Us</h6>
                <h1><span class="text-color text-uppercase fw-bold">Explore About Us</span></h1>
            </div>

            <div class="row content pt-3">
                <div class="col-md-5 " data-aos="fade-left" data-aos-duration="1000">
                    <div class="">
                        <h2 class="fw-bold">Eum ipsam laborum deleniti velitena.</h2>
                        <h4>Voluptatem dignissimos provident quasi corporis voluptates sit.</h4>
                    </div>
                </div>
                <div class="col-md-7 pt-4 pt-lg-0 text-alignment" data-aos="fade-right" data-aos-duration="1000">
                    <p> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <ul class="list-unstyled">
                        <?php for ($i = 1; $i <= 3; $i++) { ?>
                            <li class="position-relative">
                                <i class="fa-solid fa-check-double position-absolute fs-5"></i>
                                Ullamco laboris nisi ut aliquip ex ea commodo consequa cillum dolore eu fugiat nulla pariatur cillum dolore eu fugiat nulla pariatur
                            </li>
                        <?php } ?>
                    </ul>

                </div>
            </div>

        </div>
    </section>

    <!-- --------Our Videos----------- -->
    <?= $this->include('theme1/frontend/layout/video_gallery') ?>

    <!-- --------Image Gallery---------- -->
    <?= $this->include('theme1/frontend/layout/gallery_images') ?>

    <!-- --------Contact Us---------- -->
    <section class="mb-4 overflow-hidden">
        <div class="contact section-padding">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h6 class="section-title text-center text-primary text-uppercase">Contact Us</h6>
                <h2> <span class="text-color text-uppercase fw-bold">Contact us the Get Started</span></h2>
            </div>
            <div class="row py-4 gx-5">
                <div class="col-md-6 d-flex " data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
                    <div class="w-100 top-border">
                        <iframe class="location-height" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%;border-radius:16px; height:320px;"></iframe>
                    </div>
                </div>
                <div class="col-md-6 " data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
                    <div class="top-border responsive-form">
                        <?= $this->include('theme1/frontend/layout/message'); ?>
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