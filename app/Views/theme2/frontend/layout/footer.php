<footer class="bg-dark footer-background text-white pt-50 pb-50 footerNext">
    <div class="container">
        <div class="row gy-50">
            <div class="col-12 col-lg-3"><a class="d-block mb-30" href="<?= base_url();?>">
                <img class="logo" src="<?php echo base_url() . env('SEO_SUBPATH'); ?>/uploads/img/business_logo/<?php echo $user_details['business_logo']; ?>" alt="forecastr logo" width="90px" height="90px">
            </a>
                <p class="footer-text font-size-15 mb-35"><?= $user_details['company_profile'];?></p>
                <ul class="nav text-white align-items-center mb-20 nav-gap-md nav-no-opacity">
                <li class="nav-item">
                    <a class="footer-text nav-link" target="_blank" href="<?= !empty($user_details['facebook_page'])?$user_details['facebook_page']:"https://www.facebook.com";?>" class="facebook text-light me-1 rounded text-center fs-6">
                        <i class="footer-text fa-brands fa-facebook"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link footer-text" target="_blank" href="<?= !empty($user_details['instagram_page'])?$user_details['instagram_page']:"https://www.instagram.com";?>" class="instagram text-light me-1 rounded text-center fs-6">
                        <i class="fa-brands footer-text fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link footer-text" target="_blank" href="<?= !empty($user_details['twitter_page'])?$user_details['twitter_page']:"https://twitter.com";?>" class="twitter text-light me-1 rounded text-center fs-6">
                        <i class="fa-brands footer-text fa-twitter"></i>
                    </a>
                </li>
                </ul>                
            </div>
            <div class="col-2 d-none d-lg-block"></div>
            <div class="col-12 col-lg-7">
                <div class="row gy-50">
                    <div class="col-6 col-md-4">
                        <h6 class="display-6 text-white mb-20 footer-text">Services</h6>
                        <ul class="nav flex-column text-white nav-opacity nav-gap-sm">
                        <?php foreach ($menu_lists as $menu_list) {
                            if($menu_list['menu_name']=="Services"){
                                if(!empty($menu_list['sub_menu'])){
                                    foreach ($menu_list['sub_menu'] as $sub_menu) {
                                        echo '<li class="nav-item "><a class=" footer-text nav-link" href="'.base_url().'/'.$sub_menu['menu_link'].'""><span>'.ucfirst($sub_menu['menu_name']).'</span></a></li>';
                                    }
                                }
                            }
                        }
                        ?>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4">
                        <h6 class="display-6 text-white mb-20 footer-text">About</h6>
                        <ul class="nav flex-column text-white nav-opacity nav-gap-sm">
                        <?php foreach ($menu_lists as $menu_list) {
                            if($menu_list['menu_name']=="About Us"){
                                if(!empty($menu_list['sub_menu'])){
                                    foreach ($menu_list['sub_menu'] as $sub_menu) {
                                        echo '<li class="nav-item"><a class="footer-text nav-link" href="'.base_url().'/'.$sub_menu['menu_link'].'""><span>'.ucfirst($sub_menu['menu_name']).'</span></a></li>';
                                    }
                                }
                            }
                        }
                        ?>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4">
                        <h6 class="display-6  footer-text mb-20">Contact</h6>
                        <ul class="nav flex-column footer-text nav-opacity nav-gap-sm">
                            <li class="nav-item"><a class="nav-link footer-text" href="tel:user_phone">+91 <?= $user_details['user_phone']; ?></a></li>
                            <li class="nav-item"><a class="nav-link footer-text" href="tel:<?= $user_details['company_phone_no']; ?>">+91 <?= $user_details['company_phone_no']; ?></a></li>
                            <li class="nav-item"><a class="nav-link footer-text" href="mailto:<?= $user_details['user_email']; ?>"><?= $user_details['user_email']; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="copyright-background">
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center py-10">
        <p class="font-size-13 copyright-text footer-text text-muted m-0">© <?= date("Y");?> <?= $colors['copyright_text'];?></p>
        </div>
    </div>
</div>
</section>

<!-- <a href="javascript:void(0);" class="theme-switcher">
    <i class="fa-solid fa-cog"></i>
</a> -->
<!-- <div class="all-themes-colors">
    <h5 class="mb-10">Change Theme Color</h5>
    <div class="colors">
        <a href="javascript:void(0);" data-theme="default" class="color-item default"></a>
        <a href="javascript:void(0);" data-theme="blue" class="color-item blue"></a>
        <a href="javascript:void(0);" data-theme="purple" class="color-item purple"></a>
        <a href="javascript:void(0);" data-theme="red" class="color-item red"></a>
        <a href="javascript:void(0);" data-theme="orange" class="color-item orange"></a>
        <a href="javascript:void(0);" data-theme="teal" class="color-item teal"></a>
    </div>
</div> -->