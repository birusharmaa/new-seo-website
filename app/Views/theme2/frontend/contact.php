<?= $this->extend('theme2/frontend/layout/master') ?>
<?= $this->section('customCss') ?>
<!-- <style>
    /* write all your custom css here */
</style> -->
<?= $this->endSection() ?>

<?= $this->section('contentTheme2') ?>
<?= $this->include('theme2/frontend/layout/slider');
$cls = "pt-100";
if (!empty($sliders)) {
    $cls = "pt-50";
}
?>
<div class="position-relative pb-50 <?= $cls; ?>">
    <div class="background">
        <div class="background-image jarallax" data-jarallax data-speed="0.8">
            <!-- <img class="jarallax-img" loading="lazy" src="<? //= base_url(); 
                                                                ?>/theme2/assets/img/about-us-hero-1920x900.jpg" alt=""> -->
        </div>
        <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
    </div>
    <div class="container">
        <h1 class="text-white mb-0 text-center">Contact Us</h1>
    </div>
</div>

<!-- --------Our Videos----------- -->
<?= $this->include('theme2/frontend/layout/video_gallery') ?>

<!-- --------Image Gallery---------- -->
<?= $this->include('theme2/frontend/layout/gallery_images') ?>

<div class="pt-30 pb-30 bg-linear-gradient shape-parent">
    <div class="shape justify-content-end"><img loading="lazy" src="<?= base_url(); ?>/theme2/assets/img/root/contact-2-shape-547x414.png" alt="" width="547" height="414"></div>
    <div class="shape align-items-end justify-content-start"><img loading="lazy" src="<?= base_url(); ?>/theme2/assets/img/root/contact-2-shape-558x364.png" alt="" width="558" height="364"></div>
    <div class="container">
        <h1 class="m-0 text-center mb-100" data-show="startbox">Contact us at any time.</h1>
        <div class="row gy-30">
            <div class="col-12 col-lg-4">
                <div class="bg-white rounded-4 shadow p-10 py-30" data-show="startbox">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <i class="fa-solid fa-envelope text-primary"></i>
                        </div>
                        <div class="flex-grow-1 ms-15">
                            <h5 class="m-0">Email info:</h5>
                            <p class="m-0 mt-15">
                                Email: <?= $user_details['user_email']; ?><br>
                                Email: <?= $user_details['alternate_email_id']; ?><br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="bg-white rounded-4 shadow p-10 py-30" data-show="startbox" data-show-delay="100">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <i class="fa-solid fa-map-marker-alt text-primary"></i>
                        </div>
                        <div class="flex-grow-1 ms-15">
                            <h5 class="m-0">Address:</h5>
                            <p class="m-0 mt-15"><?= $user_details['business_address']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <!-- Item-->
                <div class="bg-white rounded-4 shadow p-10 py-30" data-show="startbox" data-show-delay="200">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <i class="fa-solid fa-phone text-primary"></i>
                        </div>
                        <div class="flex-grow-1 ms-15">
                            <h5 class="m-0">Contact info:</h5>
                            <p class="m-0 mt-15">
                                Phone: +91 <?= $user_details['user_phone']; ?> <br>
                                Fax: +91 <?= $user_details['company_phone_no']; ?> <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-110">
            <div class="col-lg-8 offset-lg-2">
                <!-- Form-->
                <?= $this->include('theme2/frontend/layout/message'); ?>
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