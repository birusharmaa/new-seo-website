<?= $this->extend("theme3/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    .card-big-shadow:before {
        background-image: url("<?= env('SEO_SUBPATH') ?>/assets/img/shadow.png");
        background-position: center bottom;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        bottom: -12%;
        content: "";
        display: block;
        left: -12%;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 0;
    } 
</style>
<?= $this->endSection() ?>
<?= $this->section("contentTheme3") ?>
<div class="product-page overflow-hidden">
    <section>
    <div class="content-wrap">
            <div class="position-relative backimg">
                <nav class="crumb" aria-label="breadcrumb">
                    <ol class="breadcrumb  justify-content-center">
                        <div class="skew chng">
                            <p class="text-dark">
                                <a class="text-decoration-none text-primary fw-bold" href="<?= base_url(); ?>/">
                                    Home-> products->
                                </a>
                                <?= $slugs ?>
                            </p>
                        </div>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="container">
        <div class="product section-padding">
            <div class="row content ">
                <div class="col-md-6 mt-5" data-aos="fade-right" data-aos-duration="1000">
                    <?php
                        $img = !empty($product['main_image'])? base_url().env('SEO_SUBPATH')."/uploads/product_images/".$product['main_image']: base_url().env('SEO_SUBPATH')."/assets/img/product1.jpg";
                    ?>
                    <img src="<?= $img; ?>" class="img img-fluid d-block mx-auto" alt="">
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="bg-dark p-2 my-5 ">
                        <h4 class="text-color pt-1 fw-bold text-center"><?= $product['product_name']; ?></h4>
                    </div>
                    <div class="text-alignment">
                        <?= $product['short_description']; ?>
                    </div>
                    <div class="text-alignment">
                        <?= $product['long_description']; ?>
                    </div>
                    <div class="text-alignment">
                        <?= $product['specification']; ?>
                    </div>
                    <div class="text-center">
                        <button onclick="addToCard(<?= $product['id']; ?>)" class="btn btn-color bg-primary rounded-pill" type="submit">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- ----------Our Products------ -->
    <section>
        <div class="products section-padding mb-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2><span class="text-color text-uppercase fw-bold">Our Products</span></h2>
            </div>
            <div class="row mx-auto">
            <?php foreach ($all_products as $product) {
            ?>
                <div class="col-md-4">
                    <div class="main-wraiper">
                        <div class="container">
                            <a href="product-details.php">
                                <div class="top" style="background: url(<?= base_url(); ?><?= env('SEO_SUBPATH') ?>/uploads/product_images/<?= $product['main_image'] ?>) no-repeat center center; background-size: 50%;">
                                </div>
                            </a>
                            <div class="bottom btm1">
                                <div class="left">
                                    <div class="details prc">
                                        <h4 class="text-truncate"><?= $product['product_name']; ?></h4>
                                        <p>₹ <?= $product['mrp']; ?></p>
                                    </div>
                                    <div class="buy by" onclick="addToCard(<?= $product['id']; ?>)">
                                        <i class="material-icons">add_shopping_cart</i>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="done">
                                        <lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" scale="40" class="submt">
                                        </lord-icon>
                                    </div>
                                    <div class="details">
                                        <h4 class="text-truncate"><?= $product['product_name']; ?></h4>
                                        <p class="text-truncate"><?= $product['product_name']; ?></p>
                                    </div>
                                    <div class="remove rmv"><i class="material-icons">clear</i></div>
                                </div>
                            </div>
                        </div>
                        <div class="inside">
                            <div class="icon"><i class="material-icons">info_outline</i></div>
                            <div class="contents">
                                <div class="col-lg-12 text-light">
                                    <div class="p-2">
                                        <ul class="list-unstyled mb-3">
                                            <li class="d-flex justify-content-between py-1 border-bottom"><strong>Order
                                                    Subtotal
                                                </strong><strong>₹<?= $product['mrp']; ?></strong></li>
                                            <li class="d-flex justify-content-between py-1 border-bottom">
                                                <strong>Shipping and
                                                    handling</strong><strong>₹10.00</strong>
                                            </li>
                                            <li class="d-flex justify-content-between py-1 border-bottom">
                                                <strong>Discount
                                                </strong><strong><?= $product['discount']; ?> %</strong>
                                            </li>
                                            
                                            <li class="d-flex justify-content-between py-1 border-bottom">
                                                <strong>Total</strong>
                                                <h5 class="font-weight-bold">₹<?= ($product['mrp'] + 10) - (($product['mrp'] * $product['discount']) / 100); ?></h5>
                                            </li>
                                        </ul>
                                        <div>
                                            <a href="javarscript:void(0)" onclick="addToCard(<?= $product['id']; ?>)" class="btn rounded-pill p-2 btnbg btn-block bg-white nebtn w-100">
                                                Procceed to checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>

    <!-- --------Contact Us---------- -->
    <section class="mb-4 overflow-hidden">
        <div class="contact section-padding">
            <div class="text-center mb-5" data-aos="fade-up" data-aos-duration="1000">
                <h2>Contact us the <span class="text-color text-uppercase fw-bold">Get Started</span></h2>
            </div>
            <div class="row py-4 gx-5">
                <div class="col-md-6 d-flex " data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                    <div class="w-100 top-border">
                        <iframe class="location-height" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; min-height:350px; border-radius:16px"></iframe>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
                    <div class="top-border responsive-form">
                        <?= $this->include('theme3/frontend/layout/message'); ?>
                    </div>
                </div>
            </div>

        </div>
    </section>

</div>

<?= $this->endSection() ?>


<?= $this->section("customScripts") ?>
<script>
    $(function() {
        AOS.init();
    });
</script>
<?= $this->endSection() ?>