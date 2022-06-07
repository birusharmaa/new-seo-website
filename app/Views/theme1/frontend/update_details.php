<?= $this->extend("theme1/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    .card-body {
        padding: 0px !important;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contentTheme1") ?>
<div class="update-page">
    <?= $this->include('theme1/frontend/layout/slider') ?>
    <section>
        <div class="row mx-auto">
            <div class="col-md-12 p-0" data-aos="fade-up" data-aos-duration="1000">
                <div class="heroContent">
                    <h1 class="fw-bold text-color"><?= $update ?></h1>
                    <div>
                        <p class="text-white">
                            <a class="text-decoration-none fw-bold text-light " href="<?= base_url(); ?>/">
                                Home >
                            </a>
                            <?= $update ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="update section-padding">
            <section>
                <div class="update-slider section-padding">
                    <div class="text-center mb-5">
                        <h6 class="section-title text-center text-primary text-uppercase">More Updates</h6>
                        <h2><span class="text-color text-uppercase fw-bold">Explore More Updates</span></h2>
                    </div>

                    <div class="row values ">
                        <?php
                        if (count($all_post) > 0) {
                            foreach ($all_post as $post) {
                                $img = empty($post['image']) ? base_url() . env('SEO_SUBPATH') . '/assets/img/services3-img.png' : base_url() . env('SEO_SUBPATH') . '/uploads/post_updates_images/' . $post['image'];
                        ?>
                                <div class="col-md-4 d-flex align-items-stretch aos-init aos-animate mb-5" data-aos="fade-up">
                                    <div class="card w-100 border-0 position-relative" style="background-image: url(<?= $img; ?>">
                                        <div class="card-body py-3">
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
            </section>
        </div>
    </section>


</div>

<?= $this->endSection() ?>


<?= $this->section("customScripts") ?>
<script type="text/javascript" src="<?= base_url().env('SEO_SUBPATH').'/'.'theme1/assets/js/pages/common.js' ?>"></script>

<script>
    $(function() {
        AOS.init();
    });
</script>

<?= $this->endSection() ?>