
<div class="swiper-wrapper">
    <?php
    if (!empty($sliders)) {
        for ($i = 0; $i < count($sliders); $i++) {
    ?>
            <div class="swiper-slide">
                <div class='container-fluid sliders-img h-100' style="background-image:url(<?= base_url() ?><?= env('SEO_SUBPATH') ?>/uploads/slider_images/<?= $sliders[$i]['image'] ?>)">
                    <div class='row h-100'>
                        <div class='col-md-6'>
                            <div class='detail-box'>
                                <h2 style="color:<?= $sliders[$i]['heading_color']; ?>"><?= $sliders[$i]['title']; ?></h2>
                                <p style="color:<?= $sliders[$i]['text_color']; ?>">
                                    <?= $sliders[$i]['desc']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <?php }
    } ?>
</div>
<div class="swiper-pagination"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>
