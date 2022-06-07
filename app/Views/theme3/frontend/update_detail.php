<?= $this->extend("theme3/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    .card-body {
        padding: 0px !important;
    }

    a {
        text-decoration: none !important;
    }
</style>
<?= $this->endSection() ?>

<?= $this->section("contentTheme3") ?>
<section>
    <div class="content-wrap">
        <div class="position-relative backimg">
            <nav class="crumb" aria-label="breadcrumb">
                <ol class="breadcrumb  justify-content-center">
                    <div class="skew chng">
                        <p class="text-dark">
                            <a class="text-decoration-none text-primary fw-bold" href="<?= base_url(); ?>/">
                                Home-> updates->
                            </a>
                            <?= $post['slug'] ?>
                        </p>
                    </div>
                </ol>
            </nav>
        </div>
    </div>
</section>
<div class="update-page container">
    <section>
        <div class="update section-padding">
            <div class="row content pt-3">

                <div class="col-md-8 pt-4 pt-lg-0" data-aos="flip-left" data-aos-duration="1000">
                    <?php
                    $img = empty($post['image']) ? base_url() . env('SEO_SUBPATH') . '/assets/img/update.jpg' : base_url() . env('SEO_SUBPATH') . '/uploads/post_updates_images/' . $post['image'];
                    ?>
                    <img src="<?= $img; ?>" width="100%" height="" alt="">

                    <div class="bg-dark p-2 my-4 ">
                        <h4 class="text-color pt-1 fw-bold text-center"><?= $post['title']; ?></h4>
                    </div>
                    <div class="text-alignment">
                        <span class="text-gray">By : Admin Date : <?= date("d-M-Y", strtotime($post['created_at'])); ?></span>
                        <div class="">
                            <?= $post['description']; ?>
                        </div>
                    </div>

                </div>
                <div class="col-md-4" data-aos="flip-right" data-aos-duration="1000">
                    <?php
                    if (count($all_post) > 0) {
                        foreach ($all_post as $post) {
                            $img = empty($post['image']) ? base_url() . env('SEO_SUBPATH') . '/assets/img/services3-img.png' : base_url() . env('SEO_SUBPATH') . '/uploads/post_updates_images/' . $post['image'];
                    ?>
                            <div class="p-3 hover-bg">
                                <a href="<?= base_url() . env('SEO_SUBPATH') . '/' . 'updates/' . $post['slug']; ?>">
                                    <p class="mb-0">
                                        <img src="<?= $img; ?>" style="width:50px;" />
                                        <?= $post['title']; ?>
                                    </p>
                                </a>
                                <p class="mb-0"><?= date("d-M-Y", strtotime($post['created_at'])); ?></p>
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
    </section>

    <!-- --------update cards---------- -->
    <section>
        <div class="update-slider section-padding">
            <div class="text-center mb-5">
                <h2><span class="text-color text-uppercase fw-bold">Our Updates</span></h2>
            </div>

            <div class="row values ">
                <?php
                if (count($all_post) > 0) {
                    foreach ($all_post as $post) {
                        $img = empty($post['image']) ? base_url() . env('SEO_SUBPATH') . '/assets/img/services3-img.png' : base_url() . env('SEO_SUBPATH') . '/uploads/post_updates_images/' . $post['image'];
                ?>
                        <div class="col-md-4 d-flex align-items-stretch aos-init aos-animate mb-5" data-aos="fade-up">
                            <div class="card w-100  border-0 position-relative" style="background-image: url(<?= $img; ?>); height: 250px;">
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
    </section>
</div>

<?= $this->endSection() ?>


<?= $this->section("customScripts") ?>
<script>
    $(function() {
        //AOS.init();
    });
</script>

<?= $this->endSection() ?>