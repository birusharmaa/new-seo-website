<?php
if(!empty($gallery_images)){
?>
<section class="bg-gray-light py-2 py-4">
    <div class="container">
        <div class="row">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h2><span class="text-color text-uppercase fw-bold">Gallery Images</span></h2>
            </div>
            <?php
            $i = 0;
            foreach ($gallery_images as $gi) :
                $img = !empty($gi['image']) ? base_url() . env('SEO_SUBPATH') . '/uploads/gallery_images/' . $gi['image'] : 'https://image.freepik.com/free-photo/colorful-springtime_385-19321241.jpg';
            ?>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="inner-column m-2 card">
                        <div class="position-relative card-body px-0 pt-0 w-100">
                            <a class="popup-images" href="<?= $img ?>">
                                <img class="card-img-top img-fluid img-gallery" title="<?= $gi['title']; ?>" src="<?= $img; ?>" />
                                <br />
                                <h4 class="text-center text-truncate"><?= $gi['title']; ?></h4>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</section>
<?php } ?>