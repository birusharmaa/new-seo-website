<?php

?>
<div class="navbar navbar-topbar header-background-color navbar-expand-xl navbar-dark navbar-absolute top-0 d-none d-xl-flex">
	<div class="container">
		<ul class="nav navbar-nav nav-gap-xl nav-contacts nav-no-opacity">
			<li class="nav-item">
				<a class="nav-link header-text" href="tel:<?= $user_details['mobile']; ?>"><i class="fa-solid fa-phone"></i> +91 <?= $user_details['mobile']; ?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link header-text" href="mailto:<?= $user_details['user_email']; ?>">
					<i class="fa-solid fa-envelope"></i> <?= $user_details['user_email']; ?></a>
			</li>
			<li class="nav-item">
				<a class="nav-link header-text" href="#">
					<i class="fa-solid fa-location-dot"></i> <?= $user_details['business_address']; ?>
				</a>
			</li>
		</ul>
		<ul class="nav nav-gap-sm navbar-nav nav-social ms-auto nav-no-opacity align-items-center">
			<li class="nav-item">
				<a class="nav-link header-text" target="_blank" href="<?= !empty($user_details['facebook_page']) ? $user_details['facebook_page'] : "https://www.facebook.com"; ?>" class="facebook text-light me-1 rounded text-center fs-6">
					<i class="fa-brands fa-facebook"></i>
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link header-text" target="_blank" href="<?= !empty($user_details['instagram_page']) ? $user_details['instagram_page'] : "https://www.instagram.com"; ?>" class="instagram text-light me-1 rounded text-center fs-6">
					<i class="fa-brands fa-instagram"></i>
				</a>
			</li>
			<li class="nav-item">

				<a class="nav-link header-text" target="_blank" href="<?= !empty($user_details['twitter_page']) ? $user_details['twitter_page'] : "https://twitter.com"; ?>" class="twitter text-light me-1 rounded text-center fs-6">
					<i class="fa-brands fa-twitter"></i>
				</a>
			</li>
		</ul>
	</div>
</div>

<nav class="navbar navbar-expand-lg navbar-top navbar-dark navbar-border-bottom navbar-opaque">
	<div class="container">
		<a class="navbar-brand" href="<?= base_url(); ?>">
			<img class="logo horizontal-logo assets-img-header-logo-png" src="<?php echo base_url() . env('SEO_SUBPATH'); ?>/uploads/img/business_logo/<?php echo $user_details['business_logo']; ?>" alt="forecastr logo" width="90px" height="90px">
		</a>
		<a class="navbar-toggle order-4 popup-inline" href="#navbar-mobile-style-1">
			<span></span>
			<span></span>
			<span></span>
		</a>
		<ul class="nav navbar-nav order-2 ms-auto nav-no-opacity">
			<?php
			foreach ($menu_lists as $menu_list) {
				$cls = count($menu_list['sub_menu']) > 0 ? "navbar-dropdown " : "";
				$toggle_cls = count($menu_list['sub_menu']) > 0 ? "dropdown-toggle" : "";
			?>
				<li class="nav-item <?= $cls; ?>">
					<a class="nav-link " href="<?= !empty($toggle_cls) ? "#" : base_url() . '/' . $menu_list['menu_link']; ?>">
						<span><?= $menu_list['menu_name']; ?></span> <?= !empty($toggle_cls) ? "<span><i class='ms-2 fa-solid fa-caret-down'></i></span>" : ""; ?>
					</a>
					<?php if (!empty($toggle_cls)) {
						echo '<div class="dropdown-menu rounded-2 shadow">';
						echo '<ul class="nav navbar-nav">';
						foreach ($menu_list['sub_menu'] as $sub_menu) {
							// echo '<a class="?-item" href="' . base_url() . '/' . $sub_menu['menu_link'] . '">' . $sub_menu['menu_name'] . '</a>';
							echo '<li class="nav-item">
								<a class="nav-link" href="' . base_url() . '/' . $sub_menu['menu_link'] . '">
									<span>' . $sub_menu['menu_name'] . '</span>
								</a>
							</li>';
						}
						echo '</ul></div>';
					} ?>
				</li>
			<?php
			}
			?>
		</ul>
	</div>
</nav>

<div class="navbar navbar-mobile navbar-mobile-style-1 bg-white mfp-hide" id="navbar-mobile-style-1">
	<div class="navbar-wrapper">
		<div class="navbar-head">
			<a class="navbar-brand d-block d-md-none" href="<?= base_url(); ?>">
				Logo
			</a>
			<a class="navbar-toggle popup-modal-dismiss" href="#">
				<span></span>
				<span></span>
				<span></span>
			</a>
		</div>
		<div class="navbar-body">
			<ul class="nav navbar-nav navbar-nav-collapse">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url(); ?>">
						<span>Home</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url(); ?>/about">
						<span>About</span>
					</a>
				</li>
				<li class="nav-item navbar-collapse">
					<a class="nav-link" href="#navbarCollapseServices" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbarCollapseServices"><span>Services</span></a>
					<div class="navbar-collapse-menu collapse" id="navbarCollapseServices">
						<ul class="nav navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span>Service 01</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span>Service 02</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span>Service 03</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item navbar-collapse">
					<a class="nav-link" href="#navbarCollapseProducts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbarCollapseProducts"><span>Products</span></a>
					<div class="navbar-collapse-menu collapse" id="navbarCollapseProducts">
						<ul class="nav navbar-nav">
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span>Product 01</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span>Product 02</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									<span>Product 03</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url(); ?>/contact">
						<span>Contact</span>
					</a>
				</li>
			</ul>
		</div>
		<div class="navbar-footer">
			<ul class="list-group borderless font-size-15">
				<li class="list-group-item">
					Email: <a href="mailto:info@sartiaglobal.com">info@sartiaglobal.com</a>
				</li>
				<li class="list-group-item">
					Phone: <a href="tel:12023580309">+1 202-358-0309</a>
				</li>
			</ul>
			<ul class="nav nav-gap-sm navbar-nav nav-social mt-30 nav-no-opacity">
				<li class="nav-item">
					<a class="nav-link" href="#">
						<i class="fa-brands fa-facebook-f"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						<i class="fa-brands fa-instagram"></i>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">
						<i class="fa-brands fa-twitter"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-bg-color">
                <h5 class="modal-title fw-bold" id="exampleModalLabel">Make an Inquiry</h5>
                <button type="button" class="btn-close bg-light" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="contact-form">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                        </div>
                        <div class="form-group col-md-12 mt-3">
                            <label for="name">Mobile Number</label>
                            <input type="text" class="form-control" maxlength="10" name="number" id="number" placeholder="Mobile number" required="">
                        </div>
                        <div class="form-group col-md-12 mt-3">
                            <label for="enqEmail">Email</label>
                            <input type="email" class="form-control" name="enqEmail" id="enqEmail" placeholder="Email address" required="">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="name">Your Message</label>
                        <textarea class="form-control" name="message" id="message" rows="3" required=""></textarea>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Close</button>
                <button type="button" id="sendMsg" class="btn btn-primary rounded-pill ">
                    Send
                </button>
            </div>
        </div>
    </div>
</div>
<input type="hidden" id="baseUrl" value="<?= base_url(); ?>" />
<input type="hidden" id="checkError" value="0" />