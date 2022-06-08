<?= $this->extend("theme3/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<!-- <style>
    /* write all your custom css here */
</style> -->
<?= $this->endSection() ?>
<?= $this->section("contentTheme3") ?>
<div class="hero_area">
    <section class="slider_section">
        <div class="swiper">
            <?= $this->include("theme3/frontend/layout/slider"); ?>
        </div>
    </section>
</div>


<!-- --------Our Videos----------- -->
<?= $this->include('theme3/frontend/layout/video_gallery') ?>

<!-- --------Image Gallery---------- -->
<?= $this->include('theme3/frontend/layout/gallery_images') ?>



<div class="contact-us-page overflow-hidden mt-5">
    <section class="mb-4">
        <div class="contact section-padding">
            <div class="text-center mb-5" data-aos="zoom-out" data-aos-duration="1000">
                <h6 class="section-title d-none text-center text-primary text-uppercase">Contact Us</h6>
                <h2>Contact us the <span class="text-color text-uppercase fw-bold">Get Started</span></h2>
            </div>
            <div class="row section-padding">
                <div class="col-md-12" data-aos="flip-down">
                    <div class="w-100 mb-5">
                        <iframe class="location-height" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%;border-radius:16px; min-height:350px;"></iframe>
                    </div>
                </div>
                <div class="col-md-4 offset-md-1 d-flex " data-aos="zoom-in-right" data-aos-duration="1000">
                    <div class="info top-border">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p><?= $user_details['business_address']; ?></p>
                        </div>
                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p><?= $user_details['user_email']; ?></p>
                        </div>
                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p>+91 <?= $user_details['company_phone_no']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="zoom-in-left" data-aos-duration="1000">
                    <!-- Form-->
                    <?= $this->include('theme3/frontend/layout/message'); ?>
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