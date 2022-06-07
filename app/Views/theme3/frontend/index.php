<?= $this->extend('theme3/frontend/layout/master') ?>
<?= $this->section('customCss') ?>

<?= $this->endSection() ?>
<?= $this->section('contentTheme3');
$slider_images = !empty($menu_lists[0]['slider_images']) ? $menu_lists[0]['slider_images'] : "";
// echo "<pre>";
// print_R($products);
// exit;
?>
<div class="hero_area">
    <section class="slider_section">
        <div class="swiper">
            <?= $this->include("theme3/frontend/layout/slider"); ?>
        </div>
    </section>
</div>

<?php
    if ($custom_section['home']) {
        foreach ($custom_section['data'] as $custom) {
        ?>
            <section>
                <div class="container-fluid px-0 mx-0">
                    <div class="row mx-0 <?= $custom['position'] == "left"? 'flex-row-reverse' : '';  ?> aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                        <div class="col-md-7 bg-primary">
                            <div class="inside-div p-4">
                                <h2 class="pb-3 fw-bolder text-white"><?= $custom['heading']; ?></h2>
                                <div class="text-div text-alignment text-white">
                                    <?= $custom['description']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 px-0">
                            <div class="side-img <?= $custom['position'] == "stretch" ? 'h-100' : 'h-100'; ?>">
                                <img src="<?= base_url().env('SEO_SUBPATH').'/uploads/custom_images/' . $custom['upload_image']; ?>" class="<?= $custom['position'] == "stretch" ? 'h-100' : 'h-100'; ?>" alt="" width="100%">
                            </div>
                        </div>
                    </div>
            </section>
        <?php
        }
    }
?>

<!-- ----- Our Services------- -->
<section>
    <div class="services section-padding">
        <div class="container">
            <div class="text-center my-5" data-aos="fade-up" data-aos-duration="1000">
                <h2><span class="text-color text-uppercase fw-bold">Our Services</span></h2>
            </div>
            <div class="row ms-auto">
                <?php
                if (count($services) > 0) {
                    for ($i = 0; $i < count($services); $i++) {
                        
                        if (!empty($services[$i]['image'])) {
                            $img = base_url() . env('SEO_SUBPATH') . "/uploads/service_images/" . $services[$i]['image'];
                        } else {
                            $img = base_url() . env('SEO_SUBPATH') . "/assets/img/services-img.jpg";
                        }
                ?>
                        <div class="col-md-4" data-aos="fade-left" data-aos-duration="1000">
                            <div class="card">
                                <div class="card-header">
                                    <img class="img-transparent rounded" src="<?= $img; ?>" width="100%" height="250px" alt="card image">
                                </div>
                                <div class="card-body">
                                    <h4 class="text-color fw-bold text-center text-truncate">
                                        <?= $services[$i]['service']; ?>
                                    </h4>
                                    <a href="<?= base_url() . '/' . 'services/' . $services[$i]['menu_link']; ?>">
                                        <button class="btn btn-primary w-100 m-0 view_more-link">
                                            Know More
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                <?php }
                } else {
                    echo "<h2 class='text-center'>No services found</h2>";
                }
                ?>
            </div>

            <div class="btn_box text-center">
                <a class="btn btn-light" href="<?= base_url(); ?>/services">
                    <button class="btn-two"><span>All Services</span></button>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="product_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Our Products</h2>
        </div>
        <div class="row" style="gap: 30px 0;">
            <?php foreach ($products as $product) {
                $title = preg_split('/[\s,]+/', $product['product_name'], 3)
            ?>
                <div class="col-md-4">
                    <div class="main-wraiper">
                        <div class="container">
                            <a href="javascript:void(0)">
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
                                            <a href="javascript:void(0)" onclick="addToCard(<?= $product['id']; ?>)" class="btn rounded-pill p-2 btnbg btn-block bg-white nebtn w-100">
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

       
        <div class="btn_box">
            <a class="btn btn-light" href="<?= base_url(); ?>/products">
                <button class="btn-two"><span>All Products</span></button>
            </a>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
<?= $this->section('customScripts') ?>
<?= $this->endSection() ?>