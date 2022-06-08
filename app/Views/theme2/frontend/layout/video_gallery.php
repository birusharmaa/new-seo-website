<?php
if (count($videoes) > 0) {
?>
<section class="mb-2 ">
    <div class="videos section-padding" data-aos="fade-up">
        <div class="text-center mb-5">
            <h2><span class="text-color text-uppercase fw-bold">Our Videos</span></h2>
        </div>
        <div class="row">
            <?php
                foreach ($videoes as $video) {
                ?>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                        <div class="inner-column m-2">
                            <div class="position-relative w-100" style="margin-top: 30px;">
                                <!-- <iframe  src="" frameborder="0" 
                                allow="accelerometer; autoplay; encrypted-media; 
                                gyroscope; picture-in-picture" allowfullscreen>
                            </iframe> -->
                                <a class="popup-youtube" href="<?= $video['url'] ?>">
                                    <img class="card-img-top img-fluid" title="<?= $video['title']; ?>" src="<?php base_url(); ?>./assets/img/video-thumb.jpg" />
                                    <br />
                                    <h4 class="text-center"><?= $video['title']; ?></h4>
                                </a>
                            </div>
                        </div>
                    </div>
            <?php }
            ?>
        </div>
    </div>
</section>
<?php
}
?>