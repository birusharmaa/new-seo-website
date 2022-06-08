<?= $this->extend("theme1/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" ref="stylesheet" />
<style>
    a {
        text-decoration: none !important;
    }
</style>
<?= $this->endSection() ?>
<?= $this->section("contentTheme1") ?>
<div class="home-page overflow-hidden">
    <!-- ------Slider------- -->
    <?= $this->include('theme1/frontend/layout/slider') ?>

    <?php
    if ($custom_section['home']) {
        foreach ($custom_section['data'] as $custom) {
            $img = !empty($custom['upload_image']) ? base_url() . env('SEO_SUBPATH') . '/uploads/custom_images/' . $custom['upload_image'] : base_url() . env('SEO_SUBPATH') . '/assets/img/service-page-img.jpg';
    ?>
        <section>
            <div class="container-fluid px-0 mx-0">
                <div class="row mx-0 <?= $custom['position'] == "left" ? 'flex-row-reverse' : '';  ?> aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-md-7 bg-primary">
                        <div class="inside-div p-4">
                            <h2 class="pb-3 fw-bolder"><?= $custom['heading']; ?></h2>
                            <div class="text-div text-alignment">
                                <?= $custom['description']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 px-0">
                        <div class="side-img <?= $custom['position'] == "stretch" ? 'h-100' : 'h-100'; ?>">
                            <img src="<?= $img; ?>" class="<?= $custom['position'] == "stretch" ? 'h-100' : 'h-100'; ?>" alt="" width="100%">
                        </div>
                    </div>
                </div>
        </section>
    <?php
        }
    }
    ?>



    <!-- ----- Our Services------- -->
    <section>
        <div class="services section-padding">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h2><span class="text-color text-uppercase fw-bold">Our Services</span></h2>
            </div>

            <div class="row ms-auto">
                <?php
                if (count($services) > 0) {
                    for ($i = 0; $i < count($services); $i++) {
                        if (!empty($services[$i]['image'])) {
                            $img = base_url() . env('SEO_SUBPATH') . "/uploads/service_images/" . $services[$i]['image'];
                        } else {
                            $img = base_url() . env('SEO_SUBPATH') . "/assets/img/services-img.jpg";
                        }
                ?>
                        <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000">
                            <div class="image-flip mt-4">
                                <div class="mainflip flip-0 ">
                                    <div class="frontside shadow">
                                        <img class="img-transparent rounded" src="<?= $img; ?>" width="100%" height="250px" alt="card image">
                                        <div class="transparent-text position-absolute w-100 p-4 rounded-bottom">
                                            <h4 class="text-color fw-bold text-center">
                                                <?= $services[$i]['service']; ?>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="backside position-absolute w-100">
                                        <div class="card bg-dark">
                                            <div class="card-body text-center mt-4">
                                                <div class="div-width">
                                                    <a href="<?= base_url() . '/' . 'services/' . $services[$i]['menu_link']; ?>">
                                                        <button class="btn btn-color fs-5 py-3 px-4 rounded-pill align-center">
                                                            Know More
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }
                } else {
                    echo "<h2 class='text-center'>No services found</h2>";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- ----------Our Products------ -->
    <section>
        <div class="products section-padding" data-aos="fade-up">
            <div class="text-center mb-5">
                <h2><span class="text-color text-uppercase fw-bold">Our Products</span></h2>
            </div>
            <div class="row mx-auto">
                <?php
                if (count($products) > 0) {
                    foreach ($products as $product) {
                        $img = !empty($product['main_image']) ? base_url() . env('SEO_SUBPATH') . "/uploads/product_images/" . $product['main_image'] : base_url() . env('SEO_SUBPATH') . "/assets/img/product1.jpg";
                ?>
                        <div class="col-md-3 col-sm-6 content-card" data-aos="fade-right" data-aos-duration="1000">
                            <div class="card-big-shadow position-relative mb-5">
                                <div class="card product-card card-just-text text-dark position-relative mb-3" data-background="color" data-color="blue" data-radius="none">
                                    <div class="content pb-4 text-center">
                                        <img src="<?= $img; ?>" width="100%" height="250px" alt="">
                                        <h6 class="category text-truncate fw-bold pt-3 text-hover"><?= $product['product_name']; ?></h6>
                                        <button class="btn search-btn rounded-pill ms-2 responsive-btn" data-bs-target="#inquiryModal" data-bs-toggle="modal" type="submit">
                                            Enquiry Now
                                        </button>
                                    </div>
                                </div> <!-- end card -->
                            </div>
                        </div>
                <?php }
                } else {
                    echo "<h2 class='text-center'>No product found.</h2>";
                }
                ?>
            </div>
        </div>
    </section>

    <!-- ---------Our Updates-------- -->
    <section class="mb-4">
        <div class="services2 section-padding">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h2><span class="text-color text-uppercase fw-bold">Our Updates</span></h2>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row m-auto">
                        <div class="col-md-12 pb-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                            <div id="update">
                                <?php
                                if (count($posts) > 0) {
                                    foreach ($posts as $post) {
                                        $img = empty($post['image']) ? base_url() . env('SEO_SUBPATH') . '/assets/img/services3-img.png' : base_url() . env('SEO_SUBPATH') . '/uploads/post_updates_images/' . $post['image'];
                                ?>
                                        <div>
                                            <div class="card me-3 mb-2 card-custom bg-white border-white border-0">
                                                <div class="card-custom-img">
                                                    <img src="<?= $img ?>" width="100%" height="370px" alt="Avatar" />
                                                </div>
                                                <div class="card-body my-3">
                                                    <h6 class="card-title text-color fw-bold"><?= date('d-M-Y', strtotime($post['created_at'])); ?></h6>
                                                    <p class="card-text text-uppercase fw-bold h6 py-2"><?= $post['title']; ?></p>
                                                    <a href="<?= base_url() . env('SEO_SUBPATH') . '/' . 'updates/' . $post['slug']; ?>">
                                                        <button class="btn btn-color rounded-pill ">
                                                            Read More
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                <?php }
                                } else {
                                    echo '<h3>No update found!</h3>';
                                }
                                ?>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 pb-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                            <div class="card card-custom bg-white border-white border-0">
                                <div class="card-custom-img">
                                    <img src="<?= base_url(); ?><?= env('SEO_SUBPATH') ?>/assets/img/services2-img.jpg" width="100%" height="100%" alt="" />
                                </div>

                                <div class="card-body my-3">
                                    <h6 class="card-title text-color fw-bold">03 April 2022</h6>
                                    <p class="card-text text-uppercase fw-bold h6 py-2">OXYGEN MACHINE RENTAL SERVICES CALL NOW 8800845768</p>

                                    <a href="#">
                                        <button class="btn btn-color rounded-pill ">
                                            Read More
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12 pb-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                            <div class="card card-custom bg-white border-white border-0">
                                <div class="card-body text-alignment border border-1 p-0 fw-bold">
                                    <?php
                                    if (count($posts) > 0) {
                                        foreach ($posts as $post) {
                                    ?>
                                            <div class="p-3 hover-bg">
                                                <a href="<?= base_url() . env('SEO_SUBPATH') . '/' . 'updates/' . $post['slug']; ?>">
                                                    <p class="mb-0"><?= $post['title']; ?></p>
                                                    <p class="mb-0"><?= date("d-M-Y", strtotime($post['created_at'])); ?></p>
                                                </a>
                                            </div>
                                            <hr class="w-100 m-0">
                                    <?php
                                        }
                                    } else {
                                        echo "<h4>No update found.</h4>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>

    <!-- --------Our Videos----------- -->
    <?= $this->include('theme1/frontend/layout/video_gallery') ?>

   


    <!-- --------Image Gallery---------- -->
    <?= $this->include('theme1/frontend/layout/gallery_images') ?>


    <!-- --------Contact Us---------- -->
    <section class="mb-4">
        <div class="contact section-padding">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h1>Contact us the <span class="text-color text-uppercase fw-bold">Get Started</span></h1>
            </div>
            <div class="row py-4 gx-5">
                <div class="col-md-6 d-flex " data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="w-100 top-border">
                        <iframe class="location-height" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%;border-radius:16px; height:320px;"></iframe>
                    </div>
                </div>
                <div class="col-md-6 " data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
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
    $(document).ready(function() {
        $('#update').slick({
            dots: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 1,
            pauseOnHover: false,
            pauseOnFocus: false,
            arrows: false,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    });
    $(function() {
        AOS.init();
    });
</script>
<?= $this->endSection() ?>