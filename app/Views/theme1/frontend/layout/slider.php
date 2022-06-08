<section>
    <div class="one-time">
        <?php
        if (!empty($sliders)) {
            foreach($sliders as $slider) {
            ?>
                <div>
                    <div class="slider-height" style="background-image:url(<?= base_url(); ?><?= env('SEO_SUBPATH') ?>/uploads/slider_images/<?= $slider['image']; ?>)">
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
        } 
        ?>
    </div>
</section>
