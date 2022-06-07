<div class="swiper bg-dark" data-swiper-slides="1" data-swiper-speed="1000" data-swiper-grabcursor="true" data-swiper-parallax="true" data-swiper-pagination="true">
    <div class="swiper-pagination text-white position-absolute mb-30 start-0 w-100 d-none d-lg-block">
    </div>
    <div class="swiper-container">
        <div class="swiper-wrapper">
        <?php
            if(!empty($slider_images)){
                foreach($slider_images as $slider){
                    ?>
                    <div class="swiper-slide h-auto">
                    <div class="py-200 position-relative overflow-hidden h-100">
                        <div class="background">
                            <div class="background-image">
                                <img loading="lazy" src="<?= base_url(); ?><?= env('SEO_SUBPATH') ?>uploads/slider_images/<?= $slider['image']; ?>" data-swiper-parallax-x="20%" alt="" />
                            </div>
                            <div class="background-color" style="--background-color: #000; opacity: 0.25">
                            </div>
                            <div class="background-color" style="
                                background-image: linear-gradient(
                                180deg,
                                rgba(0, 0, 0, 0.3) 0%,
                                rgba(0, 0, 0, 0) 150px
                                );
                            ">
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5 offset-md-1">
                                    <div class='detail-box'>
                                        <h2 style="color:<?= $slider['heading_color']; ?>"><?= $slider['title']; ?></h2>
                                        <p style="color:<?= $slider['text_color']; ?>">
                                            <?= $slider['desc']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php
                }
            }else{
                ?>
                <div class="swiper-slide h-auto">
                    <div class="py-200 position-relative overflow-hidden h-100">
                        <div class="background">
                            <div class="background-image">
                                <img loading="lazy" src="<?= base_url(); ?><?= env('SEO_SUBPATH') ?>/assets/img/slider-img.jpg" data-swiper-parallax-x="20%" alt="" />
                            </div>
                            <div class="background-color" style="--background-color: #000; opacity: 0.25">
                            </div>
                            <div class="background-color" style="
                        background-image: linear-gradient(
                        180deg,
                        rgba(0, 0, 0, 0.3) 0%,
                        rgba(0, 0, 0, 0) 150px
                        );
                        ">
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 offset-lg-1">
                                    <h1 class="text-white mb-40">
                                        We provide construction management
                                    </h1>
                                    <!-- Button-->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="swiper-button-prev swiper-button-position-3 swiper-button-opacity shadow">
        <i class="fa-solid fa-arrow-left-long"></i>
    </div>
    <div class="swiper-button-next swiper-button-position-3 swiper-button-opacity shadow">
        <i class="fa-solid fa-arrow-right-long"></i>
    </div>
</div>