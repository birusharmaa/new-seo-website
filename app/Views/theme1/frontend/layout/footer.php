<?php 
    // echo "<pre>";
    // print_r($user_details);
    // exit;
?>
<footer id="footer">
    <div class="footer-top bg-dark footer-background text-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-info shadow m-3 text-center">
                        <h3 class="text-light text-center fw-bold">Get In Touch</h3>
                        <p class="pb-3 m-0">
                            <em>
                                <?= $user_details['business_address']; ?>
                            </em>
                        </p>
                        <strong>Phone:</strong> +91 <?= $user_details['user_phone']; ?>, +91 <?= $user_details['company_phone_no']; ?><br> <strong>Email:</strong> <?= $user_details['user_email']; ?><br>
                        </p>
                    </div>
                </div> 
                <div class="col-md-3">
                    <div class="social-links mt-5 footer-center">
                        <a target="_blank" href="<?= !empty($user_details['twitter_page'])?$user_details['twitter_page']:"https://twitter.com";?>" class="twitter text-light me-1 rounded text-center fs-6">
                            <i class="fa-brands fa-twitter-square"></i>
                        </a>
                        <a target="_blank" href="<?= !empty($user_details['facebook_page'])?$user_details['facebook_page']:"https://www.facebook.com";?>" class="facebook text-light me-1 rounded text-center fs-6">
                            <i class="fa-brands fa-facebook-square"></i>
                        </a>
                        <a target="_blank" href="<?= !empty($user_details['instagram_page'])?$user_details['instagram_page']:"https://www.instagram.com";?>" class="instagram text-light me-1 rounded text-center fs-6">
                            <i class="fa-brands fa-instagram-square"></i>
                        </a>
                        <a target="_blank" href="https://www.skype.com" class="google-plus text-light me-1 rounded text-center fs-6">
                            <i class="fa-brands fa-skype"></i>
                        </a>
                        <a target="_blank" href="<?= !empty($user_details['linkedin_page'])?$user_details['linkedin_page']:"https://www.linkedin.com";?>" class="linkedin text-light me-1 rounded text-center fs-6">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 mt-3 newsletter">
                    <h3 class="fw-bold text-color">Our Newsletter</h3>
                    <p><?= $user_details['company_profile'];?></p>
                    <form action="" method="post">
                        <input type="email" name="email" class="py-1 border-0 searchbar_color">
                        <input type="submit" class="btn-color text-white border-0 py-1 rounded" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>
</footer>
<section class="copyright-background">
    <div class="row">
        <div class="col-md-12 text-center copyright-text">
        © <?= date("Y");?> <?= $colors['copyright_text'];?>
        </div>
    </div>
</section>
<a id="button" class="scroll-to-top scroll-to-target  position-fixed text-light fs-6 text-center rounded-circle border-0" data-target="html">
    <span class="fa fa-arrow-up">
    </span>
</a>