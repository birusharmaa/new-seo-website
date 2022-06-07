<?= $this->extend('theme2/frontend/layout/master') ?>
<?= $this->section('customCss') ?>
<style>
    .card.border-0.position-relative {
        width: 100%;
        height: 250px;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section('contentTheme2'); ?>
<?= $this->include('theme2/frontend/layout/slider'); ?>

<div class="position-relative pb-50 pt-100">
    <div class="background">
        <div class="background-image jarallax" data-jarallax data-speed="0.8">
            <!-- <img class="jarallax-img" loading="lazy" src="<? //= base_url(); 
                                                                ?>/theme2/assets/img/about-us-hero-1920x900.jpg" alt=""> -->
        </div>
        <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
    </div>
    <div class="container">
        <h1 class="text-white mb-0 text-center">Our updates</h1>
    </div>
</div>
<div class="pb-130">
    <div class="container">
        <div class="text-center mb-5">
            <h6 class="section-title text-center text-primary text-uppercase">More Updates</h6>
            <h1>Explore More <span class="text-color text-uppercase fw-bold">Updates</span></h1>
        </div>

        <div class="row pt-20 values ">
            <?php
            if (count($all_post) > 0) {
                foreach ($all_post as $post) {
                    $img = empty($post['image']) ? base_url() . env('SEO_SUBPATH') . '/assets/img/services3-img.png' : base_url() . env('SEO_SUBPATH') . '/uploads/post_updates_images/' . $post['image'];
            ?>
                    <div class="col-md-4 d-flex align-items-stretch aos-init aos-animate mb-5" data-aos="fade-up">
                        <div class="card border-0 position-relative" style="background-image: url(<?= $img; ?>">
                            <div class="card-body py-3 d-flex align-items-center justify-content-center flex-column h-100">
                                <h5 class="card-title">
                                    <h6 class="card-title fw-bold text-center"><?= date('d-M-Y', strtotime($post['created_at'])); ?></h6>
                                </h5>
                                <p class="card-text texts text-center text-uppercase fw-bold h6 "><?= $post['title']; ?></p>
                                <div class="text-center mb-3">
                                    <a href="<?= base_url() . env('SEO_SUBPATH') . '/' . 'updates/' . $post['slug']; ?>">
                                        <button class="btn btn-color text-white rounded-pill  ">
                                            Read More
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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

<?= $this->endSection() ?>

<?= $this->section('customScripts') ?>
<!-- <script>
    //write all your custom script here
</script> -->
<?= $this->endSection() ?>