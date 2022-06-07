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
                <li class="breadcrumb-item active text-warning" aria-current="page">Order</li>
            </div>
        </ol>
    </nav>
</div>

<div class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 bg-white rounded shadow-sm">
                <div class="table-responsive">
                    <table class="table table-hover table-striped" id="productCheckout">
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
                                                $extra_charge = $extra_charge + $cart['extra_charge'];
                                                $discount = (($cart['mrp'] * $cart['quantity']) * ($cart['discount'])) / 100;
                                                $total_dis = $total_dis + $discount;
                                                $sub_total = $sub_total + ($cart['mrp'] * $cart['quantity']);
                                                echo ($cart['mrp'] * $cart['quantity']) - $discount;
                                                ?>
                                            </strong>
                                        </td>
                                        <td class="border-0 centr qunty align-middle">
                                            <input type="number" id="quantity<?= $cart['prud_id']; ?>" data-productid="<?= $cart['prud_id']; ?>" data-quantity="<?= $cart['quantity']; ?>" oninput="changeQuntity(<?= $cart['id']; ?>, <?= $cart['prud_id']; ?>)" min="1" class="form-control quantity" value="<?= $cart['quantity']; ?>" />
                                        </td>
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
            <div class="col-md-7">
                <!-- <div class="bg-light  rounded-pill px-4 py-3 text-uppercase font-weight-bold">Coupon code</div>
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
                </div> -->

                <h4 class="mb-3">Billing address</h4>
                <form class="">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">Full Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" oninput="checkValidation()" id="billName" placeholder="Billing name" value="" />
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Email<span class="text-danger">*</span< /label>
                                    <input oninput="checkValidation()" type="email" class="form-control" id="billEmail" placeholder="Billing email" value="" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="">
                                <label for="email">Mobile <span class="text-danger">*</span<span class="text-muted"></span></label>
                                <input oninput="checkValidation()" type="text" maxlength="10" class="form-control" id="billPhone" placeholder="Billing mobile">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="">
                                <label for="email">Alternate Mobile <span class="text-muted">(Optional)</span></label>
                                <input type="text" maxlength="10" class="form-control" id="billPhone2" placeholder="Billing alternate mobile">
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="">
                                <label for="address">Address </label>
                                <textarea oninput="checkValidation()" class="form-control" id="billAddress" placeholder="Billing Address"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="address2">Land Mark<span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="billLandMark" placeholder="Land mark name">
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country<span class="text-danger">*</span< /label>
                                    <select class="custom-select d-block w-100" id="country" required="">
                                        <?php
                                        foreach ($countries as $country) {
                                            $s = $country->name == "India" ? 'selected' : '';
                                            echo '<option value="' . $country->id . '" ' . $s . '>' . $country->name . '</option>';
                                        }
                                        ?>
                                    </select>

                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State<span class="text-danger">*</span< /label>
                                    <select class="custom-select d-block w-100" id="state" onchange="checkValidation()" required="">
                                        <option value="">-Select State-</option>
                                        <?php
                                        foreach ($states as $states) {
                                            echo '<option value="' . $states->id . '">' . $states->name . '</option>';
                                        }
                                        ?>
                                    </select>

                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Pin code<span class="text-danger">*</span< /label>
                                    <input type="text" minlength="6" maxlength="6" class="form-control" id="pincode" onkeydown="checkValidation()" placeholder="" required="">
                        </div>
                    </div>

                    <!-- <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="save-info">
                        <label class="custom-control-label" for="save-info">Save this information for next
                            time</label>
                    </div> -->
                    <h4 class="mb-3">Payment</h4>
                    <div>
                        <button id="payNowLink" class="btn-two w-100"><span>Pay Now</span></button>
                        <button id="rzp-button1" class="btn-two w-100 d-none"><span>Pay Now</span></button>
                    </div>
                </form>
            </div>
            <div class="col-md-5">
                <div class="bg-light rounded-pill px-4 py-3 text-uppercase font-weight-bold">Order summary </div>
                <div class="p-4">
                    <p class="font-italic mb-4">Shipping and additional costs are calculated based on values you
                        have entered.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="d-flex justify-content-between py-3 border-bottom"><strong>Order Subtotal
                            </strong><strong>₹<?= $sub_total; ?>
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
                        <!-- <a href="<?= base_url() . '/' . 'product-checkout/' . $user_id; ?>"><button class="btn-two w-100"><span>Checkout</span></button></a> -->

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- info section -->
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

<input type="hidden" value="0" id="checkValidation" />


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

    function changeQuntity(cartId, prodId) {
        var quantity = $('#quantity' + prodId).val();
        if (quantity < 1) {
            $('#quantity' + prodId).val("1")
        }
        let url = $('#baseUrl').val() + "/change-quantity/"
        $.ajax({
            url: url,
            type: "post",
            data: {
                "quantity": quantity,
                "cartId": cartId,
                "prodId": prodId,
            },
            success: function(response) {
                response = JSON.parse(response);
                if (response.status) {
                    location.reload();
                }
                // location.reload();
            },
        });

    }

    document.getElementById('rzp-button1').onclick = function(e) {
        let url = $('#baseUrl').val() + "/payment/";
        let finalProduct = [];

        $('table .quantity').each(function(index, tr) {
            var prodId = $(this).data("productid");
            var quantity = $(this).data("quantity");
            finalProduct.push({
                'product_id': prodId,
                'quantity': quantity
            });
        });

        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            data: {
                "finalProduct": finalProduct
            },
            success: function(res) {
                if (res.status == "empty") {
                    Swal.fire({
                        icon: 'warning',
                        text: res.message
                    }).then((result) => {
                        window.location.href = $('#baseUrl').val();
                    });
                }
                var options = {
                    "key": "", // Enter the Key ID generated from the Dashboard
                    "amount": res.order_amount, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                    "currency": res.order_currency,
                    "name": res.order_name,
                    "description": res.company_name,
                    "image": "https://seosa.thewingshield.com/public/assets/img/all_type_payment.png",
                    "order_id": res.order_id,
                    "handler": function(response) {
                        // alert(response.razorpay_payment_id);
                        // alert(response.razorpay_order_id);
                        // alert(response.razorpay_signature)
                        let url = $('#baseUrl').val() + "/payment-final/";
                        $.ajax({
                            url: url,
                            type: 'post',
                            dataType: 'json',
                            data: {
                                "razorpay_payment_id": response.razorpay_payment_id,
                                "finalProduct": finalProduct
                            },
                            success: function(res) {
                                if (res.status) {
                                    Swal.fire({
                                        icon: 'success',
                                        text: res.message
                                    }).then((result) => {
                                        window.location.href = $('#baseUrl').val();
                                    });
                                }
                            },
                        });
                    },
                    "prefill": {
                        "name": "Gaurav Kumar",
                        "email": "gaurav.kumar@example.com",
                        "contact": "9999999999"
                    },
                    "notes": {
                        "address": "Razorpay Corporate Office"
                    },
                    "theme": {
                        "color": "#3399cc"
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.on('payment.failed', function(response) {
                    alert(response.error.code);
                    alert(response.error.description);
                    alert(response.error.source);
                    alert(response.error.step);
                    alert(response.error.reason);
                    alert(response.error.metadata.order_id);
                    alert(response.error.metadata.payment_id);
                });
                rzp1.open();
                // res =JSON.parse(res)
            }
        });
        e.preventDefault();
    }


    const checkValidation = () => {
        var flag = true;
        if ($.trim($("#billName").val()) == "" && flag) {
            flag = false;
        }
        if ($.trim($("#billEmail").val()) == "" && flag) {
            flag = false;
        }
        if ($.trim($("#billPhone").val()) == "" && flag) {
            flag = false;
        }
        if ($.trim($("#pincode").val()) == "" && flag) {
            flag = false;
        }
        if ($("#state").val() == "" && flag) {
            flag = false;
        }
        if ($.trim($("#billAddress").val()) == "" && flag) {
            flag = false;
        }

        if (flag) {
            $("#checkValidation").val("1");
        } else {
            $("#checkValidation").val("0");
        }

        if ($("#checkValidation").val() == "1") {
            $("#payNowLink").addClass("d-none");
            $("#rzp-button1").removeClass("d-none");
        }
    }

    /**
     * Chech validation link
     */
    $("#payNowLink").click(function() {
        $(".validation").remove();
        let flag = true;

        let name = $.trim($("#billName").val());
        let email = $.trim($("#billEmail").val());
        let phone = $.trim($("#billPhone").val());
        let phone2 = $.trim($("#billPhone2").val());
        let address = $.trim($("#billAddress").val());
        let landMark = $.trim($("#billLandMark").val());
        let country = $.trim($("#country").val());
        let state = $.trim($("#state").val());
        let pincode = $.trim($("#pincode").val());

        if (name == "") {
            flag = false;
            $("#billName").parent().append("<span class='text-danger validation'>Please enter your name.</span>");
        }
        if (email == "") {
            flag = false;
            $("#billEmail").parent().append("<span class='text-danger validation'>Please enter your email.</span>");
        }
        if (phone == "") {
            flag = false;
            $("#billPhone").parent().append("<span class='text-danger validation'>Please enter your phone.</span>");
        }
        if (address == "") {
            flag = false;
            $("#billAddress").parent().append("<span class='text-danger validation'>Please enter your address.</span>");
        }
        if (state == "") {
            flag = false;
            $("#state").parent().append("<span class='text-danger validation'>Please select state.</span>");
        }
        if (pincode.length != "6") {
            flag = false;
            $("#pincode").parent().append("<span class='text-danger validation'>Please enter valid pincode(6 digits).</span>");
        }
        if (!flag) {
            $("#rzp-button1").trigger("click");
        }
    });
</script>
<?= $this->endSection() ?>