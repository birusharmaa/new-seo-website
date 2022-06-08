<?= $this->extend('theme3/frontend/layout/master') ?>
<?= $this->section('customCss') ?>
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<style>
    .swiper {
        width: 100%;
        height: 400px;
    }
</style>
<?= $this->endSection() ?>
<?= $this->section('contentTheme3');?>

<div class="hero_area">
    <section class="slider_section">
        <div class="swiper">
            <?= $this->include("theme3/frontend/layout/slider"); ?>
        </div>
    </section>
</div>

<div class="container">
    <section class="overflow-hidden">
        <div class="about section-padding">
            <div class="text-center mb-5 mt-5" data-aos="zoom-out" data-aos-duration="1000">
                <h2><span class="text-color text-uppercase fw-bold">About Us</span></h2>
            </div>

            <div class="row content pt-3 mb-5">
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
<?= $this->include('theme3/frontend/layout/video_gallery') ?>

<!-- --------Image Gallery---------- -->
<?= $this->include('theme3/frontend/layout/gallery_images') ?>


</div>

<?= $this->endSection() ?>

<?= $this->section('customScripts') ?>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script>
//     const swiper = new Swiper('.swiper', {
//         loop: true,
//         pagination: {
//             el: '.swiper-pagination',
//         },
//         navigation: {
//             nextEl: '.swiper-button-next',
//             prevEl: '.swiper-button-prev',
//         },
//         autoplay: {
//             delay: 3000,
//         },
//         keyboard: {
//     enabled: true,
//     onlyInViewport: false,
//   },
//     });
</script>
<?= $this->endSection() ?>