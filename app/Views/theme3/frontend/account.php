<?= $this->extend("theme3/frontend/layout/master") ?>
<?= $this->section("customCss") ?>
<style>
    :root {
        --icon6-color: #22aeff;
        --theme-darkness: 1;
        --theme-darkness: 1;
        --box-shadow: 0.3rem 0.3rem 0.6rem #c8d0e7, -0.2rem -0.2rem 0.5rem #fff;
        filter: brightness(var(--theme-darkness));
        --background: linear-gradient(90deg, #ffdee9 0%, #d5f4f3 50%);
        --border-radius: 50%;
        --border-radius-sha: 7px;
    }

    .theme-color,
    .theme-lightgreenbtn {
        width: 20px;
        height: 20px;
        border: 0;
        margin: 0 8px 0;
        border-radius: 4px;
    }


    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: rgba(0, 0, 0, 0.1);
    }

    ::-webkit-scrollbar-thumb {
        background: rgba(0, 0, 0, 0.1);
    }



    .wowrange input[type="range"] {
        display: block;
        -webkit-appearance: none;
        background: var(--background);
        height: 10px;
        margin: 15px 10px 0;
        width: 145px;
        border-radius: var(--border-radius-sha);
        box-shadow: var(--box-shadow-pro);
        outline: 0;
    }

    .wowrange input[type="range"]::-webkit-slider-thumb {
        -webkit-appearance: none;
        background: var(--background);
        width: 25px;
        height: 25px;
        border-radius: var(--border-radius);
        cursor: pointer;
    }




    .wow {
        position: fixed;
        bottom: 40px;
        right: 30px;
        height: 45px;
        box-shadow: var(--box-shadow);
        width: 45px;
        z-index: 99;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 100%;
        animation-duration: 1s;
        animation-delay: 1s;
        animation-fill-mode: both;
    }


    .wow i {
        color: #ababab;
        font-size: 2rem;
        line-height: 1rem;
        animation-name: spin;
        animation-duration: 3s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    /* /////offcanvas/// */
    .sidenav {
        height: auto;
        position: fixed;
        z-index: 999;
        bottom: 20px;
        width: 0;
        right: 0;
        backdrop-filter: blur(10px);
    }

    .light1 .theme-color:nth-child(1) {
        background: linear-gradient(to right, black, purple);
    }

    .light1 .theme-color:nth-child(2) {
        background: linear-gradient(to right, #7a0001, purple);
    }

    .light1 .theme-color:nth-child(3) {
        background: linear-gradient(to right, #004f4b, purple);
    }

    .light1 .theme-color:nth-child(4) {
        background: linear-gradient(to right, #5c002c, purple);
    }

    .fsz {
        font-size: 13px;
    }

    .spc {
        margin-right: 3px;
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175) !important
    }
</style>
<?= $this->endSection() ?>
<?= $this->section("contentTheme3");
?>

<div class="position-relative backimg">
    <nav class="crumb" aria-label="breadcrumb">
        <ol class="breadcrumb  justify-content-center">
            <div class="skew chng">
                <li class="breadcrumb-item"><a class="text-white" href="<?= base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active text-warning" aria-current="page">My Account</li>
            </div>
        </ol>
    </nav>
</div>
<div class="">
    <div class="col-md-12 text-center">
        <?php
        if (session()->getFlashdata("message")) {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">

                <strong><?= session()->getFlashdata("message") ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
        } ?>
    </div>
</div>
</div>
<div class="col-md-12 pb-5">

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-3">
                        <ul class="nav collapse nav-tabs show" id="myTab">
                            <li class="nav-item col-md-12">
                                <a href="#sectionA" class="p-2 w-100 btn btn-light border-0 shadow-none active" data-toggle="tab">
                                    <div class="row">
                                        <div class="col text-justify">Profile</div>
                                        <div class="col text-right"><i class="fa text-warning fa-user"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a href="#sectionB" class="p-2 w-100 btn btn-light border-0 shadow-none" data-toggle="tab">
                                    <div class="row">
                                        <div class="col text-justify">Orders</div>
                                        <div class="col text-right"><i class="fa text-warning fa-file"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a href="#sectionC" class="p-2 w-100 btn btn-light border-0 shadow-none" data-toggle="tab">
                                    <div class="row">
                                        <div class="col text-justify">Security</div>
                                        <div class="col text-right"><i class="fa text-warning fa-shield"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item col-md-12">
                                <a href="#sectionD" class="p-2 d-none w-100 btn btn-light border-0 shadow-none" data-toggle="tab">
                                    <div class="row">
                                        <div class="col text-justify">Notifications</div>
                                        <div class="col text-right"><i class="fa text-warning fa-bell"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item col-md-12" role="presentation">
                            <a href="<?= base_url() . '/sign-out'; ?>" class="p-2 w-100 btn btn-light border-0 shadow-none">
                                    <div class="row">
                                        <div class="col text-justify">Sign-out</div>
                                        <div class="col text-right"> <i class="fa fa-sign-out" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <!-- <div class="nav-item col-md-12" data-toggle="collapse" data-target="#tabs1"
                                aria-expanded="false" aria-controls="tabs1">
                                <button class="p-2 w-100 active btn-light border-0 shadow-none">
                                    <div class="row">
                                        <div class="col animatei text-center"><i
                                                class="fa fa-angle-double-down"></i>
                                            <i class="fa fa-angle-double-up"></i>
                                        </div>
                                    </div>
                                </button>
                            </div> -->
                    </div>
                    <div class="product_section col-md-9">
                        <div class="tab-content" id="pills-tabContent">
                            <div id="sectionA" class="tab-pane fade show active">
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="card bg-body mb-4 mb-xl-0">
                                            <div class="card-header bg-primary">Profile Picture</div>
                                            <div class="card-body figure text-center">
                                                <?php
                                                if (!is_null($customer['image'])) {
                                                    $img = base_url() . env('SEO_SUBPATH') . "/uploads/theme/customer_profile/" . $customer['image'];
                                                } else {
                                                    $img = base_url() . env('SEO_SUBPATH') . "/theme3/assets/images/2.webp";
                                                }
                                                ?>
                                                <img class="img-account-profile w-50 img-fluid rounded-circle mb-2" width="200" src="<?= $img; ?>" alt="">
                                                <h3>It's <?= $customer['first_name'] . " " . $customer['last_name']; ?></h3>
                                                <!-- <h6>New Delhi</h6>
                                                    <p>
                                                        User interface designer and <br>
                                                        front-end developer
                                                    </p> -->
                                                <div class="btn-group btn_box m-0 pb-5 d-none" role="group" aria-label="Basic radio toggle button group">
                                                    <button type="button" class="nebtn py-2 mx-2 px-3 w-100 view_more-link btn-sm">Message</button>
                                                    <button type="button" class="btn rounded py-2 px-3 w-100 borderr colorr btn-sm">Following</button>
                                                </div>
                                                <input type="file" id="upload" hidden="">
                                                <label for="upload" class="btn btn-light">Upload new
                                                    image</label>
                                                <div class="small font-italic text-muted mb-4">
                                                    JPG or PNG no larger than 5 MB
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-8">
                                        <div class="card bg-body mb-4">
                                            <div class="card-header bg-primary">Account Details</div>
                                            <div class="card-body">
                                                <?php

                                                if (session()->has("message")) {
                                                    echo session("message") . "sss";
                                                }
                                                ?>
                                                <form>
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputUserName">Username
                                                            (how
                                                            your
                                                            name
                                                            will appear to other
                                                            users on the site)</label>
                                                        <input class="form-control" id="inputUserName" name="inputUserName" type="text" placeholder="Enter your username" value="<?= $customer['first_name'] . $customer['last_name']; ?>">
                                                    </div>
                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputFirstName">First
                                                                name</label>
                                                            <input class="form-control" id="inputFirstName" name="inputFirstName" type="text" placeholder="Enter your first name" value="<?= $customer['first_name'] ?>">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputLastName">Last
                                                                name</label>
                                                            <input class="form-control" id="inputLastName" name="inputLastName" type="text" placeholder="Enter your last name" value="<?= $customer['last_name'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputEmailAddress">Email
                                                            address</label>
                                                        <input class="form-control" id="inputEmailAddress" name="inputEmailAddress" type="email" placeholder="Enter your email address" value="<?= $customer['email'] ?>">
                                                    </div>
                                                    <div class="row gx-3 mb-3">
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputPhone">Phone
                                                                number</label>
                                                            <input class="form-control" id="inputPhone" name="inputPhone" maxlength="10" minlength="10" placeholder="Enter your phone number" value="<?= $customer['phone'] ?>">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="small mb-1" for="inputBirthday">Birthday</label>
                                                            <input class="form-control" id="inputBirthday" type="date" name="birthday" placeholder="Enter your birthday" value="<?= $customer['dob'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <label class="small mb-1" for="inputLocation">Address</label>
                                                            <input class="form-control" id="inputLocation" name="inputLocation" type="text" placeholder="Enter your location" value="<?= $customer['address'] ?>">
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <button type="button" id="updateProfile" class="btn-two btn-sm px-4"><span>Update
                                                                changes</span>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sectionB" class="tab-pane fade">
                                <!-- <div class="row">
                                        <div class="col-lg-4 mb-4">
                                            <div class="card bg-body h-100 borderr">
                                                <div class="card-body">
                                                    <div class="small text-muted">Current monthly bill</div>
                                                    <div class="h3">$20.00</div>
                                                    <a class="text-arrow-icon text-warning small" href="#!">
                                                        Switch to yearly billing
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                                            <polyline points="12 5 19 12 12 19"></polyline>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="card bg-body h-100 borderr">
                                                <div class="card-body">
                                                    <div class="small text-muted">Next payment due</div>
                                                    <div class="h3">July 15</div>
                                                    <a class="text-arrow-icon small text-warning" href="#!">
                                                        View payment history
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                                            <polyline points="12 5 19 12 12 19"></polyline>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-4">
                                            <div class="card bg-body h-100 borderr">
                                                <div class="card-body">
                                                    <div class="small text-muted">Current plan</div>
                                                    <div class="h3 d-flex align-items-center">
                                                        Freelancer
                                                    </div>
                                                    <a class="text-arrow-icon small text-warning" href="#!">
                                                        Upgrade plan
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                                            <polyline points="12 5 19 12 12 19"></polyline>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card bg-body mb-4">
                                        <div class="card-header bg-primary">
                                            Payment Methods
                                            <button class="btn-two float-right btn-sm p-0" type="button" data-toggle="modal" data-target="#myacc1"><span><i class="fa fa-plus"></i> Add
                                                    Payment Method</span></button>
                                            comments <button class="float-right btn btn-sm" type="button" data-toggle="modal"
                                                data-target="#myacc1">
                                                <i class="fa fa-plus"></i> Add Payment Method
                                            </button> comments
                                        </div>
                                        <div class="card-body px-0">
                                            <div class="d-flex align-items-center justify-content-between px-4">
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-cc-visa fa-2x"></i>
                                                    <div class="mx-4">
                                                        <div class="small">Visa ending in 1234</div>
                                                        <div class="text-xs text-muted">Expires 04/2024</div>
                                                    </div>
                                                </div>
                                                <div class="small">
                                                    <div class="badge bg-light text-body me-3">Default</div>
                                                    <a href="#!">Edit</a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="d-flex align-items-center justify-content-between px-4">
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-cc-mastercard fa-2x"></i>
                                                    <div class="mx-4">
                                                        <div class="small">Mastercard ending in 5678</div>
                                                        <div class="text-xs text-muted">Expires 05/2022</div>
                                                    </div>
                                                </div>
                                                <div class="small">
                                                    <a class="text-muted me-3" href="#!">Make Default</a>
                                                    <a href="#!">Edit</a>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="d-flex align-items-center justify-content-between px-4">
                                                <div class="d-flex align-items-center">
                                                    <i class="fa fa-cc-amex fa-2x"></i>
                                                    <div class="mx-4">
                                                        <div class="small">
                                                            American Express ending in 9012
                                                        </div>
                                                        <div class="text-xs text-muted">Expires 01/2026</div>
                                                    </div>
                                                </div>
                                                <div class="small">
                                                    <a class="text-muted me-3" href="#!">Make Default</a>
                                                    <a href="#!">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                <div class="card mb-4">
                                    <div class="card-header bg-primary">Orders History</div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive table-billing-history">
                                            <table class="table table-hover table-striped mb-0">
                                                <thead class="bg-body">
                                                    <tr>
                                                        <th class="border-gray-200" scope="col">
                                                            <!-- Transaction ID -->
                                                            Pruduct
                                                        </th>
                                                        <th class="border-gray-200" scope="col">Product Name</th>
                                                        <th class="border-gray-200" scope="col">Quantity</th>
                                                        <th class="border-gray-200" scope="col">Amount</th>
                                                        <th class="border-gray-200" scope="col">Date</th>
                                                        <th class="border-gray-200" scope="col">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                if(count($orders)>0){
                                                    foreach($orders as $order){
                                                        ?>
                                                        <tr>
                                                            <td class="w-25">
                                                                <img src="<?= base_url().env('SEO_SUBPATH').'/uploads/product_images/'.$order['product_image'];?>" alt="" class="w-25 rounded-3">
                                                            </td>
                                                            <td><?= $order['product_name'];?></td>
                                                            <td><?= $order['quantity'];?></td>
                                                            <td>₹ <?= number_format($order['price'],2);?></td>
                                                            <td><?= date('d-M-Y', strtotime($order['created_at']));?></td>
                                                            <td>
                                                                <span class="badge text-white bg-success"><?= $order['status'];?></span>
                                                            </td>
                                                        </tr>
                                                    
                                                    <?php
                                                    }
                                                }else{
                                                    echo '<tr>
                                                        <td colspan="5" class="text-center">No order history.</td>
                                                    </tr>';
                                                }?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sectionC" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="card bg-body mb-4">
                                            <div class="card-header bg-primary">Change Password</div>
                                            <div class="card-body">
                                                <form class="product_section">
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="currentPassword">Current
                                                            Password</label>
                                                        <input class="form-control" id="currentPassword" type="password" placeholder="Enter current password">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="newPassword">New
                                                            Password</label>
                                                        <input class="form-control" id="newPassword" type="password" placeholder="Enter new password">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="confPassword">Confirm
                                                            Password</label>
                                                        <input class="form-control" id="confPassword" type="password" placeholder="Confirm new password">
                                                    </div>
                                                    <div>
                                                        <button type="button" class="btn-two btn-sm" id="updatePassword"><span>Change Password</span></button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="card bg-body d-none mb-4">
                                            <div class="card-header bg-primary">
                                                Security Preferences
                                            </div>
                                            <div class="card-body">
                                                <h5 class="mb-1">Account Privacy</h5>
                                                <p class="small text-muted">
                                                    By setting your account to private, your profile
                                                    information and posts will not be visible to users
                                                    outside of your user groups.
                                                </p>
                                                <form>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="radioPrivacy1" type="radio" name="radioPrivacy" checked="">
                                                        <label class="form-check-label" for="radioPrivacy1">Public
                                                            (posts are
                                                            available to all users)</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="radioPrivacy2" type="radio" name="radioPrivacy">
                                                        <label class="form-check-label" for="radioPrivacy2">Private
                                                            (posts are
                                                            available to only users in
                                                            your groups)</label>
                                                    </div>
                                                </form>
                                                <hr class="my-4">
                                                <h5 class="mb-1">Data Sharing</h5>
                                                <p class="small text-muted">
                                                    Sharing usage data can help us to improve our products
                                                    and better serve our users as they navigation through
                                                    our application. When you agree to share usage data
                                                    with us, crash reports and usage analytics will be
                                                    automatically sent to our development team for
                                                    investigation.
                                                </p>
                                                <form>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="radioUsage1" type="radio" name="radioUsage" checked="">
                                                        <label class="form-check-label" for="radioUsage1">Yes,
                                                            share
                                                            data and
                                                            crash reports with app
                                                            developers</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="radioUsage2" type="radio" name="radioUsage">
                                                        <label class="form-check-label" for="radioUsage2">No,
                                                            limit
                                                            my
                                                            data
                                                            sharing with app
                                                            developers</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 d-none">
                                        <div class="card bg-body mb-4">
                                            <div class="card-header bg-primary">
                                                Two-Factor Authentication
                                            </div>
                                            <div class="card-body">
                                                <p>
                                                    Add another level of security to your account by
                                                    enabling two-factor authentication. We will send you a
                                                    text message to verify your login attempts on
                                                    unrecognized devices and browsers.
                                                </p>
                                                <form>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="twoFactorOn" type="radio" name="twoFactor" checked="">
                                                        <label class="form-check-label" for="twoFactorOn">On</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="twoFactorOff" type="radio" name="twoFactor">
                                                        <label class="form-check-label" for="twoFactorOff">Off</label>
                                                    </div>
                                                    <div class="mt-3">
                                                        <label class="small mb-1" for="twoFactorSMS">SMS
                                                            Number</label>
                                                        <input class="form-control" id="twoFactorSMS" type="tel" placeholder="Enter a phone number" value="555-123-4567">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card bg-body mb-4">
                                            <div class="card-header bg-primary">Delete Account</div>
                                            <div class="card-body">
                                                <p>
                                                    Deleting your account is a permanent action and cannot
                                                    be undone. If you are sure you want to delete your
                                                    account, select the button below.
                                                </p>
                                                <button class="btn fs-6 btn-danger" type="button">
                                                    <i class="fa fa-trash"></i> Delete my
                                                    account
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sectionD" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="card bg-body mb-4">
                                            <div class="card-header d-flex gap-3 bg-primary">
                                                Email Notifications
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" id="flexSwitchCheckChecked" type="checkbox" checked="">
                                                    <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputNotificationEmail">Default
                                                            notification email</label>
                                                        <input class="form-control" id="inputNotificationEmail" type="email" value="name@example.com" disabled="">
                                                    </div>
                                                    <div class="mb-0">
                                                        <label class="small mb-2">Choose which types of email
                                                            updates
                                                            you
                                                            receive</label>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" id="checkAccountChanges" type="checkbox" checked="">
                                                            <label class="form-check-label" for="checkAccountChanges">Changes
                                                                made to your account</label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" id="checkAccountGroups" type="checkbox" checked="">
                                                            <label class="form-check-label" for="checkAccountGroups">Changes are
                                                                made to groups you're part
                                                                of</label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" id="checkProductUpdates" type="checkbox" checked="">
                                                            <label class="form-check-label" for="checkProductUpdates">Product
                                                                updates for products you've purchased
                                                                or starred</label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" id="checkProductNew" type="checkbox" checked="">
                                                            <label class="form-check-label" for="checkProductNew">Information on
                                                                new products and services</label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" id="checkPromotional" type="checkbox">
                                                            <label class="form-check-label" for="checkPromotional">Marketing and
                                                                promotional offers</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="checkSecurity" type="checkbox" checked="" disabled="">
                                                            <label class="form-check-label" for="checkSecurity">Security
                                                                alerts</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card bg-body mb-4">
                                            <div class="card-header d-flex gap-3 bg-primary">
                                                Push Notifications
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" id="smsToggleSwitch" type="checkbox" checked="">
                                                    <label class="form-check-label" for="smsToggleSwitch"></label>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputNotificationSms">Default
                                                            SMS
                                                            number</label>
                                                        <input class="form-control" id="inputNotificationSms" type="tel" value="123-456-7890" disabled="">
                                                    </div>
                                                    <div class="mb-0">
                                                        <label class="small mb-2">Choose which types of push
                                                            notifications you
                                                            receive</label>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" id="checkSmsComment" type="checkbox" checked="">
                                                            <label class="form-check-label" for="checkSmsComment">Someone
                                                                comments on your post</label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" id="checkSmsShare" type="checkbox">
                                                            <label class="form-check-label" for="checkSmsShare">Someone
                                                                shares
                                                                your post</label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" id="checkSmsFollow" type="checkbox" checked="">
                                                            <label class="form-check-label" for="checkSmsFollow">A
                                                                user
                                                                follows
                                                                your account</label>
                                                        </div>
                                                        <div class="form-check mb-2">
                                                            <input class="form-check-input" id="checkSmsGroup" type="checkbox">
                                                            <label class="form-check-label" for="checkSmsGroup">New
                                                                posts are
                                                                made in groups you're part
                                                                of</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="checkSmsPrivateMessage" type="checkbox" checked="">
                                                            <label class="form-check-label" for="checkSmsPrivateMessage">You
                                                                receive a private message</label>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="card bg-body">
                                            <div class="card-header bg-primary">
                                                Notification Preferences
                                            </div>
                                            <div class="card-body">
                                                <form>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" id="checkAutoGroup" type="checkbox" checked="">
                                                        <label class="form-check-label" for="checkAutoGroup">Automatically
                                                            subscribe to group
                                                            notifications</label>
                                                    </div>
                                                    <div class="form-check mb-3">
                                                        <input class="form-check-input" id="checkAutoProduct" type="checkbox">
                                                        <label class="form-check-label" for="checkAutoProduct">Automatically
                                                            subscribe to new product
                                                            notifications</label>
                                                    </div>
                                                    <button style="font-size:12px" class="btn btn-danger">
                                                        <i class="fa fa-bell"></i> Unsubscribe from all
                                                        notifications
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<!-- ////modallllll//// -->
<div class="modal fade" id="myacc1" tabindex="-1" aria-labelledby="myacc1Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title font-weight-bold" id="myacc1Label">Add Payment Card</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="product_section">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Card Owner</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Card Owner Name">
                    </div>
                    <div class="form-group">
                        <label for="inlineFormInputGroupUsername2">Card Number</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="tel" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Valid Card Number">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-cc-visa"></i>
                                    <i class="fa fa-cc-mastercard mx-2"></i>
                                    <i class="fa fa-cc-amex"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row px-1">
                            <div class="form-group col p-0">
                                <label for="inputEmail4" class="m-auto pb-2">Expiration Date</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="MM">
                            </div>
                            <div class="form-group col p-0">
                                <label for="inputPassword4" class="m-auto pb-4"></label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="YY">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputPassword4" class="m-auto pb-2">CVV <i class="fa fa-question-circle" data-toggle="tooltip" data-placement="right" title="Back to Card CVV(454) Number"></i></label>
                                <input type="password" class="form-control" id="inputPassword4">
                            </div>

                        </div>
                    </div>
                    <div class="btn_box m-0">
                        <a type="submit" class="btn m-0 btn-block nebtn view_more-link">Save</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="logoutModel" tabindex="-1" role="dialog"   aria-labelledby="logoutModelLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="logoutModelLabel">Confirmation?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p> Are your sount
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?= base_url() . '/sign-out'; ?>" data-toggle="modal" data-target="#logoutModel" class="p-2 w-100 btn btn-light border-0 shadow-none">
                    <button type="button" class="btn btn-primary">Signout</button>
                </a>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection() ?>
<?= $this->section("customScripts") ?>
<script>
    $(document).ready(function() {
        // $('a[data-toggle="tab"]').on('show.bs.tab', function() {
        //     localStorage.setItem('profileActiveTab', $(e.target).attr('href'));
        // });
        // var activeTab = localStorage.getItem('profileActiveTab');
        // if (activeTab) {
        //     $('#myTab a[href="' + activeTab + '"]').tab('show');
        // }
    });
    // Initialize tooltips
    var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
</script>
<script>
    function phoneMask() {
        var num = $(this).val().replace(/\D/g, '');
        $(this).val(num.substring(0, 1) + '(' + num.substring(1, 4) + ')' + num.substring(4, 7) + '-' + num.substring(7,
            11));
    }
    $('[type="tel"]').keyup(phoneMask);

    $("#upload").on("change", function() {
        var formData = new FormData();
        var img = $("#upload")[0].files[0];
        formData.append("profile", img);
        let url = $('#baseUrl').val() + "/profile-img"
        if (img) {
            $.ajax({
                url: url,
                type: "post",
                data: formData,
                processData: false, // tell jQuery not to process the data
                contentType: false, // tell jQuery not to set contentType
                success: function(data) {
                    $('.img-account-profile').attr('src', '/uploads/theme/customer_profile/' + data);
                },
            });
        }
    });



    $("#updatePassword").click(function() {
        $(".validation").remove();
        var flag = true;

        let currentPassword = $.trim($("#currentPassword").val());
        let newPassword = $.trim($("#newPassword").val());
        let confirmPassword = $.trim($("#confPassword").val());

        if (currentPassword == "") {
            flag = false;
            $("#currentPassword").parent().append('<span class="validation text-danger">Please enter your current password.</span>');
        }

        if (newPassword == "") {
            flag = false;
            $("#newPassword").parent().append('<span class="validation text-danger">Please enter your new password.</span>');
        }

        if (confirmPassword == "") {
            flag = false;
            $("#confPassword").parent().append('<span class="validation text-danger">Please enter your confirm password.</span>');
        }

        if (confirmPassword != "" && (newPassword != confirmPassword)) {
            flag = false;
            $("#confPassword").parent().append('<span class="validation text-danger">Password and confirm password are not match.</span>');
        }

        if (flag) {
            let formData = {
                'currentPassword': currentPassword,
                'newPassword': newPassword,
                "confirmPassword": confirmPassword
            }
            let url = $('#baseUrl').val() + "/change-password"
            $.ajax({
                url: url,
                type: "post",
                data: formData,
                success: function(response) {
                    response = JSON.parse(response);
                    if (response.status) {
                        $("#currentPassword").val("");
                        $("#newPassword").val("");
                        $("#confPassword").val("");
                        Swal.fire({
                            icon: 'success',
                            text: response.message,
                            timer: 1500
                        })
                    } else {
                        Swal.fire({
                            icon: 'warning',
                            text: response.message
                        });
                    }
                },
            });
        }
    });

    $("#updateProfile").click(function() {
        $(".validation").remove();
        var flag = true;

        let inputUserName = $.trim($("#inputUserName").val());
        let inputFirstName = $.trim($("#inputFirstName").val());
        let inputLastName = $.trim($("#inputLastName").val());
        let inputEmailAddress = $.trim($("#inputEmailAddress").val());
        let inputPhone = $.trim($("#inputPhone").val());
        let inputLocation = $.trim($("#inputLocation").val());
        let inputBirthday = $.trim($("#inputBirthday").val());


        if (inputUserName == "") {
            flag = false;
            $("#inputUserName").parent().append('<span class="validation text-danger">Please enter your user name.</span>');
        }

        if (inputFirstName == "") {
            flag = false;
            $("#inputFirstName").parent().append('<span class="validation text-danger">Please enter your first name.</span>');
        }

        if (inputEmailAddress == "") {
            flag = false;
            $("#inputEmailAddress").parent().append('<span class="validation text-danger">Please enter your email address.</span>');
        }
        if (inputPhone == "") {
            flag = false;
            $("#inputPhone").parent().append('<span class="validation text-danger">Please enter your phone number.</span>');
        }

        if (inputLocation == "") {
            flag = false;
            $("#inputLocation").parent().append('<span class="validation text-danger">Please enter your address.</span>');
        }

        if (flag) {
            let formData = {
                'inputFirstName': inputFirstName,
                'inputLastName': inputLastName,
                "inputEmailAddress": inputEmailAddress,
                'inputPhone': inputPhone,
                'inputLocation': inputLocation,
                "inputBirthday": inputBirthday
            }
            let url = $('#baseUrl').val() + "/update-profile"
            $.ajax({
                url: url,
                type: "post",
                data: formData,
                success: function(response) {
                    response = JSON.parse(response);
                    if (response.status) {

                        Swal.fire({
                            icon: 'success',
                            text: response.message,
                            timer: 1500
                        })
                    } else {
                        Swal.fire({
                            icon: 'warning',
                            text: response.message
                        });
                    }
                },
            });
        }
    });
</script>
<?= $this->endSection() ?>