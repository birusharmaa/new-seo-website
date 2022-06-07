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
<div class="position-relative pb-50 pt-100">
    <div class="background">
        <div class="background-image jarallax" data-jarallax data-speed="0.8">
            <!-- <img class="jarallax-img" loading="lazy" src="<?//= base_url(); ?>/theme2/assets/img/about-us-hero-1920x900.jpg" alt=""> -->
        </div>
        <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
    </div>
    <div class="container">
        <h1 class="text-white mb-0 text-center">Our updates</h1>
    </div>
</div>
<div class="pb-130">
    <div class="container">
        
        <div class="row mb-20 mt-10">
            <div class="col-md-12">

            
            <?php
            $img = empty($post['image']) ? base_url() . env('SEO_SUBPATH') . 'assets/img/update.jpg' : base_url() . env('SEO_SUBPATH') . '/uploads/post_updates_images/' . $post['image'];
            ?>
            <img src="<?= $img; ?>" width="100%" height="" alt="">

            <div class="bg-dark p-2 my-4 ">
                <h4 class="text-color mt-40 pt-1 fw-bold text-center"><?= $post['title']; ?></h4>
            </div>
            <div class="text-alignment">
                <span class="text-gray">By : Admin Date : <?= date("d-M-Y", strtotime($post['created_at'])); ?></span>
                <div class="">
                    <?= $post['description']; ?>
                </div>
            </div>
            </div>
        </div>

        <div class="row values ">
            <h1 class="mb-20 text-center">Our Updates</h1>
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
<!-- <div class="pt-110 pb-120 position-relative">
    <div class="background">
        <div class="background-image jarallax" data-jarallax data-speed="0.8"><img class="jarallax-img" loading="lazy" src="assets/img/root/numbers-1920x600.jpg" alt=""></div>
        <div class="background-color" style="--background-color: #F01F4B; opacity: .88;"></div>
    </div>
    <div class="container">
        <div class="row gy-40">
            <div class="col-12 col-sm-6 col-lg-3" data-show="startbox">
                <div class="h1 m-0 text-white">328</div>
                <div class="h6 mb-15 text-white">Successful projects</div>
                <p class="font-size-15 m-0 text-white">You every can't thing seed subdue subdue light female.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3" data-show="startbox" data-show-delay="100">
                <div class="h1 m-0 text-white">10+</div>
                <div class="h6 mb-15 text-white">Years of exeperience</div>
                <p class="font-size-15 m-0 text-white">Called a fly, behold seasons meat which stars bring fruit.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3" data-show="startbox" data-show-delay="200">
                <div class="h1 m-0 text-white">68%</div>
                <div class="h6 mb-15 text-white">Cost savings</div>
                <p class="font-size-15 m-0 text-white">Image isn't that give appear made us you're yielding.</p>
            </div>
            <div class="col-12 col-sm-6 col-lg-3" data-show="startbox" data-show-delay="300">
                <div class="h1 m-0 text-white">1k</div>
                <div class="h6 mb-15 text-white">Email leads generated</div>
                <p class="font-size-15 m-0 text-white">Fruit deep first cattle set fourth without and day subdue.</p>
            </div>
        </div>
    </div>
</div> -->
<?= $this->endSection() ?>

<?= $this->section('customScripts') ?>
<!-- <script>
    //write all your custom script here
</script> -->
<?= $this->endSection() ?>