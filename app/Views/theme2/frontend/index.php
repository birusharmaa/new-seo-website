<?= $this->extend('theme2/frontend/layout/master') ?>
<?= $this->section('customCss') ?>
<!-- <style>
    /* write all your custom css here */
</style> --> 
<?= $this->endSection();
$slider_images = !empty($menu_lists[0]['slider_images'])?$menu_lists[0]['slider_images']:"";
?>
 
<?= $this->section('contentTheme2') ?>
<?= $this->include('theme2/frontend/layout/slider'); ?>

<div class="swiper bg-dark" data-swiper-slides="1" data-swiper-speed="1000" data-swiper-grabcursor="true" data-swiper-parallax="true" data-swiper-pagination="true">
    <div class="swiper-pagination text-white position-absolute mb-30 start-0 w-100 d-none d-lg-block">
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
                 </div>
    </div>
    <div class="swiper-button-prev swiper-button-position-3 swiper-button-opacity shadow">
        <i class="fa-solid fa-arrow-left-long"></i>
    </div>
    <div class="swiper-button-next swiper-button-position-3 swiper-button-opacity shadow">
        <i class="fa-solid fa-arrow-right-long"></i>
    </div>
</div>

<div class="pt-30 pb-30 shape-parent overflow-hidden">
    <!-- Shape-->
    <div class="shape justify-content-end">
        <img loading="lazy" src="<?= base_url(); ?><?= env('SEO_SUBPATH') ?>/theme2/assets/img/root/home-3-shape-1-536x706.png" alt="" width="536" height="706" />
    </div>
    <div class="container-fluid">
        <?php
                 if ($custom_section['home']) {
                     foreach ($custom_section['data'] as $custom){
                         ?>
                         <div class="row gy-90 <?= $custom['position'] == "left" ? 'flex-row-reverse' : '';  ?>">
                        <div class="col-md-7 bg-custom px-10">
                            <div>
                                <h2 class="mb-0">
                                    <span class="badge bg-light text-dark mb-0" data-show="startbox"><?= $custom['heading']; ?></span>
                                </h2>
                                <div class="text-white mb-30" data-show="startbox" data-show-delay="200" style="text-align:justify; padding-right:10px;">
                                    <?= $custom['description']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 px-1">
                            <div class="shape-parent h-100">
                                <div data-img-height style="--img-height: 80%" data-show="startbox" class="h-100">
                                    <img class="" loading="lazy" src="<?= base_url() . '/uploads/custom_images/' . $custom['upload_image']; ?>" />
                                </div>
                            </div>
                            <div class="rounded-4 overflow-hidden shape-parent text-center d-inline-flex position-absolute mt-n75">
                                <div class="background">
                                    <div class="background-color"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <?php
                    }
                }else{
                    ?>
                    <div class="row align-items-center gy-90">
                        <div class="col-md-6">
                            <div class="pe-lg-70">
                            <span class="badge bg-light text-dark mb-20" data-show="startbox">What we do</span>
                            <h2 class="mb-45" data-show="startbox" data-show-delay="100">
                                <span class="highlight">You share your idea</span>. <br />We
                                get it done.
                            </h2>
                            <div class="h4 mb-30" data-show="startbox" data-show-delay="200">
                                Created bearing beast a after moving together fly winged to
                                which be, divide all morning.
                            </div>
                            <p class="mb-50" data-show="startbox" data-show-delay="300">
                                His hath is appear be one don't creepeth. Them and one moving
                                the won't may. Moving saw wherein divide bearing called. Green
                                moveth Hath. That it years fruit behold Meat also us third
                                itself made seasons green void give replenish our said saying
                                also spirit give lesser wherein.
                            </p>
                            <!-- <div data-show="startbox" data-show-delay="400">
                                <a class="btn btn-accent-1 btn-link btn-clean" href="<?= base_url(); ?>/about">
                                    Learn more
                                </a>
                            </div> -->
                        </div>
                        </div>
                        <div class="col-md-6 pb-75">
                            <div class="ms-70 shape-parent">
                                <div data-img-height style="--img-height: 80%" data-show="startbox">
                                    <img class="rounded-4" loading="lazy" src="<?= base_url(); ?><?= env('SEO_SUBPATH') ?>/theme2/assets/img/home-3-image-900x720.jpg" alt="" />
                                </div>
                            </div>
                            <div class="rounded-4 overflow-hidden shape-parent text-center d-inline-flex position-absolute mt-n75">
                                <div class="background">
                                    <div class="background-color"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            
            
    </div>
</div>


<div class="pt-30 pb-30 bg-gray-light callToActionPrev">
    <div class="container">
        <div class="row mb-90">
            <div class="col-lg-4 offset-lg-4 text-center">
                <h2 class="m-0" data-show="startbox" data-show-delay="100">
                    Our services
                </h2>
            </div>
        </div>
        <div class="row gy-30">
            <?php
                if (count($services) > 0) {
                    for ($i = 0; $i < count($services); $i++) {
                        if (!empty($services[$i]['image'])) {
                            $img = base_url() . env('SEO_SUBPATH') . "/uploads/service_images/" . $services[$i]['image'];
                        } else {
                            $img = base_url() . env('SEO_SUBPATH') . "/assets/img/services-img.jpg";
                        }
                ?>
                <div class="col-12 col-md-6 col-lg-4" data-show="startbox">
                    <div class="service-case lift rounded-4 bg-white shadow overflow-hidden">
                        <a class="service-case-image" href="<?= base_url() . '/' . 'services/' . $services[$i]['menu_link']; ?>" data-img-height style="--img-height: 64%">
                            <img loading="lazy" src="<?= $img;?>" alt="" />
                        </a>
                        <div class="service-case-body position-relative">
                            <h4 class="service-case-title text-truncate mb-15"><?= $services[$i]['service']; ?></h4>
                            <p class="service-case-text font-size-15 mb-30">
                                <?= $services[$i]['short_description']; ?>
                            </p>
                            <a class="service-case-arrow stretched-link" href="<?= base_url() . '/' . 'services/' . $services[$i]['menu_link']; ?>">
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php }
                } else {
                    echo "<h2 class='text-center'>No services found</h2>";
                }
                ?>
        </div>
        <div class="text-center mt-80">
            <div data-show="startbox">
                <a class="btn btn-light" href="<?= base_url(); ?>/services">
                    All Services
                </a>
            </div>
        </div>
    </div>
</div>
<div class="position-relative">
    <div class="half-section-block container position-absolute top-50 start-0 end-0" data-prev-id=".callToActionPrev" data-next-id=".callToActionNext">
        <div class="py-70 ps-md-100 ps-50 position-relative rounded-4 overflow-hidden">
            <div class="background">
                <div class="background-image jarallax" data-jarallax data-speed="0.8">
                    <img class="jarallax-img" loading="lazy" src="<?= base_url(); ?><?= env('SEO_SUBPATH') ?>/theme2/assets/img/root/call-to-action-1920x1080.jpg" alt="" />
                </div>
                <div class="background-color" style="--background-color: var(--accent2); opacity: 0.9;"></div>
            </div>
            <div class="row d-flex align-items-center gy-40">
                <div class="col-lg-5">
                    <h3 class="text-white m-0" data-show="startbox">
                        <?= $user_details['company_profile'];?>
                    </h3>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <ul class="list-group borderless d-inline-flex">
                        <li class="list-group-item d-flex align-items-center" data-show="startbox" data-show-delay="100">
                            <i class="fa-solid text-warning fa-phone me-2"></i>
                            <a class="fw-bold text-white" href="tel:<?= $user_details['user_phone'];?>">
                                +91 <?= $user_details['user_phone'];?>
                            </a>
                        </li>
                        <li class="list-group-item d-flex mt-15 align-items-center" data-show="startbox" data-show-delay="200">
                            <i class="fa-solid fa-envelope text-warning me-2"></i>
                            <a class="fw-bold text-white" href="mailto:<?= $user_details['user_email'];?>"><?= $user_details['user_email'];?></a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-4 text-start text-lg-end">
                    <div data-show="startbox" data-show-delay="300">
                        <!-- Button--><a class="btn btn-accent-3 me-lg-70" href="<?= base_url().'/contact';?>" target="_self">Get in Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pt-130 pb-30 bg-gray-light callToActionPrev">
    <div class="container">
        <div class="row mb-50 mt-20 ">
            <div class="col-md-4 offset-md-4 mt-5 text-center">
                <h2 class="m-0" data-show="startbox" data-show-delay="100">
                    Our products
                </h2>
            </div>
        </div>
        <div class="row gy-30">
            <?php
                if (count($products) > 0) {
                    foreach ($products as $product) {
                        $img = !empty($product['main_image']) ? base_url() . env('SEO_SUBPATH') . "/uploads/product_images/" . $product['main_image'] : base_url() . env('SEO_SUBPATH') . "/assets/img/product1.jpg";
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
                <?php }
                } else {
                    echo "<h2 class='text-center'>No product found.</h2>";
                }
            ?>
        </div>
        <div class="text-center mt-80">
            <div data-show="startbox">
                <a class="btn btn-light" href="<?= base_url(); ?>/products">
                    All Products
                </a>
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