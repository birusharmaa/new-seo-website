<!-- //modall/// -->
<div class="modal fade" id="modallog1" tabindex="-1" aria-labelledby="modallog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header align-items-center bg-primary header-background-color">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active font-weight-bold colorw header-text" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-home" aria-selected="true">Log In</a>
                        <a class="nav-link font-weight-bold colorw header-text" id="nav-signin-tab" data-toggle="tab" href="#nav-signin" role="tab" aria-controls="nav-signin" aria-selected="false">Sign
                            Up</a>
                    </div>
                </nav>
                <button type="button" class="close header-background-color header-text" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
                        <form class="product_section">
                            <input type='hidden' id='productId' value='' />
                            <span class='text-success d-none' id="loginCardMsg">Please login for add cart</span>
                            <div class="form-group">
                                <label for="loginemail1">Email address</label>
                                <input type="email" class="form-control" id="loginemail1">

                            </div>
                            <div class="form-group">
                                <label for="loginpass1">Password</label>
                                <input type="password" class="form-control" id="loginpass1" aria-describedby="emailHelp1">
                                <small id="emailHelp1" class="form-text text-muted">Minimum 6 characters</small>
                                <p><a href="" data-toggle="modal" data-dismiss="modal" data-target="#forget">I forgot my password</a></p>
                            </div>
                            <div>
                                <button type="button" id="loginBtn" class="btn-two header-text header-background-color"><span>Submit</span></button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-signin" role="tabpanel" aria-labelledby="nav-signin-tab">
                        <form class="product_section" >
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="firstName">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="firstName" name="firstName" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">Phone <span class="text-danger">*</span></label>
                                        <input type="phone" maxlength="10" class="form-control" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="password">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="password" id="password" />
                                        <small id="emailHelp2" class="form-text text-muted">Minimum 6 characters</small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="confirmPassword">Confirm Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" />
                                        <small id="emailHelp2" class="form-text text-muted">Minimum 6 characters</small>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="image">Profile Image</label>
                                        <input type="file" class="form-control" id="image" name="image" />
                                    </div>
                                    <img class="image-preview w-50" src="" />
                                    
                                </div>
                                <div class="col-md-6 col-12">
                                    <!-- <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1"><span class="text-danger">*</span>
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="address">Address <span class="text-danger">*</span></label>
                                        <textarea class="form-control" id="address" name="address"></textarea>
                                    </div>
                                    
                                </div>
                                <div class="col-md-12 col-12 mt-2">
                                    <button type="button" id="registerBtn" class="header-text btn-two btn-block header-background-color"><span>Submit</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //modall/// -->
<!-- Modal-2 -->
<div class="modal fade" id="forget" tabindex="-1" aria-labelledby="forgetLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary header-background-color">
                <h6 class="modal-title font-weight-bold header-text" id="forgetLabel">
                    Password will be sent! <i class="fa fa-arrow-down"></i></h6>
                <button type="button" class="close header-text" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="header-text">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="otp-email-form">
                    <div class="form-group">
                        <label for="forgotEmail">Email address</label>
                        <input type="email" class="form-control" id="forgotEmail" required />
                    </div>
                    <div>
                        <button type="button" id="forgotBtn" class="btn-two header-text header-background-color"><span>Submit</span></button>
                    </div>
                </form>

                <form class="verify-email-form d-none">
                    <div class="form-group">
                        <label for="verifyOtp">Verification code</label>
                        <input type="password" class="form-control" id="verifyOtp" required />
                    </div>
                    <div>
                        <button type="button" id="verifyBtn" class="header-text btn-two header-background-color"><span>Verify</span></button>
                    </div>
                </form>

                <form class="update-password-form d-none">
                    <div class="form-group">
                        <label for="changePass">Password</label>
                        <input type="password" class="form-control" id="changePass" required />
                    </div>
                    <div class="form-group">
                        <label for="changeConfirmPass">Confirm Password</label>
                        <input type="password" class="form-control" id="changeConfirmPass" required />
                    </div>
                    <div>
                        <button type="button" id="changePassBtn" class="header-text btn-two header-text header-background-color"><span>Change password</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- //ENQUIRE NOW// -->
<div class="modal fade" id="enquire" tabindex="-1" aria-labelledby="enquireLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary header-background-color">
                <h6 class="modal-title font-weight-bold" id="enquireLabel">
                    Make An Inquiry...! <i class="fa fa-arrow-down"></i></h6>
                <button type="button" class="close header-background-color" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="header-text">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="product_section">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" class="form-control" id="fullname">

                    </div>
                    <div class="form-group">
                        <label for="mobile2">Mobile Number</label>
                        <input type="text" class="form-control" id="mobile2">

                    </div>
                    <div class="form-group">
                        <label for="textarea1">Your Message</label>
                        <textarea type="email" class="form-control" id="textarea1"></textarea>
                    </div>
                    <div>
                        <button class="btn-two header-text header-background-color"><span>Send</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //ENQUIRE NOW// -->

<header class="header_section ">
    <div class="header_top header-background-color">
        <div class="container-fluid">
            <div class="top_nav_container">
                <div class="contact_nav">
                    <a class="header-text" href="tel:<?= $user_details['user_phone']; ?>">
                        <i class="fa header-text fa-phone" aria-hidden="true"></i>
                        <span class="header-text"> Call : +91 <?= $user_details['user_phone']; ?> </span>
                    </a>
                    <a class="header-text" href="mailto:<?= $user_details['user_email']; ?>">
                        <i class="fa header-text fa-envelope" aria-hidden="true"></i>
                        <span class="header-text"> Email : <?= $user_details['user_email']; ?> </span>
                    </a>
                </div>
                <!-- <from class="search_form">
                        <input type="text" class="form-control" placeholder="Search here..." />
                        <button class="" type="submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </from> -->
                <div class="user_option_box">
                    <?php
                        $id = ""; 
                        $this->session      = session();
                        if($this->session->has('login_user')){
                            $user_data = $this->session->get('login_user');
                            if(isset($user_data['login_type']) && $user_data['login_type'] == 'Customer'){
                                $id = "val";
                                echo '<a href="'.base_url().'/my-account'.'" class="account-link header-text">
                                    <i class="fa fa-user header-text" aria-hidden="true"></i>
                                    <span class="header-text"> My Account </span>
                                </a>';
                            }else{
                                echo '<a href="" data-toggle="modal" data-target="#modallog1">
                                    <i class="fa fa-sign-in header-text" aria-hidden="true"></i>
                                    <span class="header-text"> Login </span>
                                </a>';
                            }
                        }else{
                            echo '<a href="" data-toggle="modal" data-target="#modallog1">
                                <i class="header-text fa fa-sign-in" aria-hidden="true"></i>
                                <span class="header-text"> Login </span>
                            </a>';
                        }
                    ?>
                    
                    
                    <a href="<?= $id!=''?base_url().'/cart-history':'#';?>" <?= $id==''?'data-toggle="modal" data-target="#modallog1"':'';?>" class="cart-link header-text">
                        <span class="d-inline-block position-relative mr-3">
                            <i class="fa fa-shopping-cart header-text" aria-hidden="true"></i>
                            <span id="cartTotal" style="top: -6px; right: -12px;" class="badge position-absolute badge-danger text-white header-text"><?php if(!empty($cart)){echo $cart;};?></span>
                        </span>
                        
                        <span class="header-text"> Cart </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom bg-primary navbar-background">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="<?= base_url(); ?>">
                    <img class="logo horizontal-logo assets-img-header-logo-png" src="<?php echo base_url() . env('SEO_SUBPATH'); ?>/uploads/img/business_logo/<?php echo $user_details['business_logo']; ?>" alt="forecastr logo" width="90px" height="90px">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <?php
                        foreach ($menu_lists as $menu_list) {
                            $cls = count($menu_list['sub_menu']) > 0 ? "dropdown " : "";
                            $toggle_cls = count($menu_list['sub_menu']) > 0 ? "dropdown-toggle" : "";
                        ?>
                            <li class="nav-item <?= $cls; ?>m-0">
                                <a class="nav-link <?= $toggle_cls; ?> fs-6" href="<?= !empty($toggle_cls) ? "#" : base_url() . '/' . $menu_list['menu_link']; ?>" <?php if (!empty($toggle_cls)) {
                                                                                                                                                                echo "id='navbarDropdown" . $menu_list['id'] . "'";
                                                                                                                                                                echo "role='button'";
                                                                                                                                                                echo "data-toggle='dropdown'";
                                                                                                                                                            } ?>>
                                    <?= $menu_list['menu_name']; ?>
                                </a>
                                <?php if (!empty($toggle_cls)) {
                                    echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown' . $menu_list['id'] . '">';
                                    foreach ($menu_list['sub_menu'] as $sub_menu) {
                                        echo '<a class="dropdown-item" href="' . base_url() . '/' . $sub_menu['menu_link'] . '">' . $sub_menu['menu_name'] . '</a>';
                                    }
                                    echo '</div>';
                                } ?>

                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <input type="hidden" id="baseUrl" value="<?= base_url(); ?>"/>
    <input type="hidden" id="checkError" value="0"/>
</header>