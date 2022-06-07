<?= $this->extend("theme3/frontend/layout/master") ?>
<?= $this->section("customCss") ?>

<?= $this->endSection() ?>
<?= $this->section("contentTheme3");

?>

<div class="position-relative backimg">
    <nav class="crumb" aria-label="breadcrumb">
        <ol class="breadcrumb  justify-content-center">
            <div class="skew chng">
                <li class="breadcrumb-item"><a class="text-white" href="">Home</a></li>
                <li class="breadcrumb-item active text-warning" aria-current="page">Cart</li>
            </div>
        </ol>
    </nav>
</div>

<div class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-white rounded shadow-sm">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead class="bg-primary colorw rounded shadow-sm">
                            <tr>
                                <th scope="col">
                                    <div class="p-2 px-3 text-uppercase">Product</div>
                                </th>
                                <th scope="col">
                                    <div class="py-2 centr text-uppercase">Price</div>
                                </th>
                                <th scope="col">
                                    <div class="py-2 centr text-uppercase">Quantity</div>
                                </th>
                                <th scope="col">
                                    <div class="py-2 centr text-uppercase">Remove</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sub_total = 0.00;
                            $total_dis  = 0.00;
                            $extra_charge = 0.00;
                            $final_amt = 0.00;
                            $cls = "";
                            if (!empty($cart_history)) {
                                foreach ($cart_history as $cart) {
                                    $img = base_url() . env('SEO_SUBPATH') . 'uploads/product_images/' . $cart['main_image'];
                            ?>
                                    <tr>
                                        <th scope="row" class="border-0">
                                            <div class="d-flex align-items-center">
                                                <img src="<?= $img; ?>" alt="" width="70" class="img-fluid rounded shadow-sm">
                                                <div class="ml-3 d-inline-block align-middle">
                                                    <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Timex Unisex
                                                            <?= $cart['product_name']; ?></a></h5>
                                                    <!-- <span class="font-weight-normal font-italic d-block">Category:
                                                    Watches</span> -->
                                                    <span class="font-weight-normal font-italic d-block">Short description:
                                                        <?= substr($cart['short_description'], 0, 100); ?></span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="border-0 centr suscs align-middle">
                                            <strong>₹
                                                <?php
                                                $extra_charge = $extra_charge+$cart['extra_charge'];
                                                $discount = (($cart['mrp'] * $cart['quantity']) * ($cart['discount'])) / 100;
                                                $total_dis = $total_dis + $discount;
                                                $sub_total = $sub_total + ($cart['mrp'] * $cart['quantity']);
                                                echo ($cart['mrp'] * $cart['quantity']) - $discount;
                                                ?>
                                            </strong>
                                        </td>
                                        <td class="border-0 centr qunty align-middle"><strong><?= $cart['quantity']; ?></strong></td>
                                        <td class="border-0 centr align-middle"><a href="javascript:void(0)" onclick="removeProduct(<?= $cart['id']; ?>, '<?= $cart['product_name']; ?>')" class="text-dark"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                <?php
                                }
                            } else {
                                $cls = "d-none";
                                ?>
                                <tr>
                                    <td colspan="4" class="text-center">No Product Found!</td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row product_section py-5 p-4 bg-white rounded shadow-sm">
            <div class="col-md-6 d-none">
                <div class="bg-light  rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
                <div class="p-4 ">
                    <p class="font-italic mb-4">If you have a coupon code, please enter it in the box below</p>
                    <form action="">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="border row rounded-pill p-2">
                                    <div class="col"><input type="text" class="border-0 shadow-none form-control" placeholder="Apply Coupon">
                                    </div>
                                    <div class="col btn_box m-0">
                                        <button class="btn-two nebtn rounded-pill p-0 view_more-link w-100"><span><i class="fa fa-gift"></i>Apply
                                                Coupon</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Instructions for seller
                </div>
                <div class="p-4">
                    <p class="font-italic mb-4">If you have some information for the seller you can leave them in
                        the box below</p>
                    <textarea name="" cols="30" rows="2" class="form-control"></textarea>
                </div>
            </div>
            <div class="col-md-6 offset-md-6 <?= $cls;?>">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                <div class="p-4">
                    <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you
                        have entered.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong>Order Subtotal
                            </strong><strong>₹<?= $sub_total; ?>;
                            </strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong>Shipping and
                                handling</strong><strong>₹<?= $extra_charge; ?></strong></li>
                        <li class="d-flex justify-content-between py-3 border-bottom">
                            <strong>Discount</strong><strong>₹<?= $total_dis; ?></strong>
                        </li>
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong>Total</strong>
                            <h5 class="font-weight-bold">₹<?= ($sub_total - $total_dis) + $extra_charge; ?></h5>
                        </li>
                    </ul>
                    <div>
                        <?php
                        $user_id = "";
                        $session = session();
                        if ($session->has('login_user')) {
                            $user_data = $session->login_user;
                            $user_id = base64_encode($user_data['login_id']);
                        }
                        ?>
                        <a href="<?= base_url() . '/' . 'product-checkout/' . $user_id; ?>" ><button class="btn-two w-100"><span>Checkout</span></button></a>
                        <!-- <button id="rzp-button1">pay now</button> -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="modal fade bd-example-modal-lg" id="checkOutModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-header">
            <h5 class="modal-title">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-content">
            <div class="row" id="cartHistoryData">

            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?= $this->section("customScripts") ?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    
    const removeProduct = (id, name) => {
        if (id) {
            Swal.fire({
                title: 'Are you really want to remove "' + name + '" product?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonText: 'Remove',
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    let url = $('#baseUrl').val() + "/remove-product/" + id
                    $.ajax({
                        url: url,
                        type: "post",
                        data: {},
                        success: function(response) {
                            location.reload();
                        },
                    });
                }
            })
        }
    }

    function checkOut(id) {
        if (id) {
            let url = $('#baseUrl').val() + "/product-checkout/" + id
            $.ajax({
                url: url,
                type: "post",
                data: {},
                success: function(response) {
                    response = JSON.parse(response);
                    if (response.status) {
                        let data = response.message;
                        var html = "";

                        // cartHistoryData
                        $("#checkOutModal").modal("show");
                    } else {
                        swal.fire({
                            icon: 'warning',
                            text: response.message,
                            timer: 1500
                        });
                    }
                },
            });

        }
    }
</script>
<?= $this->endSection() ?>