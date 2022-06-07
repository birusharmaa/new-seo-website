<section>
    <div class="one-time">
        <?php
        $slider_images = !empty($menu_lists[0]['slider_images']) ? $menu_lists[0]['slider_images'] : "";
        echo "<pre>";
        print_r($menu_lists);
        exit;
        if (!empty($slider_images)) {
            foreach($slider_images as $slider) {
        ?>
                <div>
                    <div class="slider-height" style="background-image:url(<?= base_url(); ?><?= env('SEO_SUBPATH') ?>uploads/slider_images/<?= $slider['image']; ?>)">
                        <div class="row align-items-start flex-column justify-content-center h-100">
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
            <?php
            }
        } else {
            ?>
            <div>
                <img class="slider-height" src="<?= base_url(); ?><?= env('SEO_SUBPATH') ?>/assets/img/slider-img.jpg" width="100%" alt="">
            </div>
            <div>
                <img class="slider-height" src="<?= base_url(); ?><?= env('SEO_SUBPATH') ?>/assets/img/slider-img2.jpg" width="100%" alt="">
            </div>
            <div>
                <img class="slider-height" src="<?= base_url(); ?><?= env('SEO_SUBPATH') ?>/assets/img/slider-img.jpg" width="100%" alt="">
            </div>
            <div>
                <img class="slider-height" src="<?= base_url(); ?><?= env('SEO_SUBPATH') ?>/assets/img/slider-img2.jpg" width="100%" alt="">
            </div>
        <?php
        }
        ?>

    </div>
</section>
