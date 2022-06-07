<?php 
    helper('form');
?>
<div class="bg-dark header-background-color">
    <div class="container-fluid header-padding d-flex justify-content-between">
        <div class="first-columns ">
            <ul class="links list-unstyled  d-flex pt-4">
                <li class="pe-4"> <a href="" class="text-light header-text"><i class="fa-solid fa-phone"></i></a> </li>
                <li class="pe-4 "><a href="tel:<?= $user_details['mobile'];?>" class="text-color header-text text-decoration-none fw-bold number-hover"> <?= $user_details['mobile'];?></a></li>
                <li class="pe-4"> <a target="_blank" href="https://wa.me/<?= $user_details['mobile'];?>?text=Hi%27,%20like%20to%20chat%20with%20you" class=" header-text text-success"><i class="fa-brands fa-whatsapp fs-5"></i></a> </li>
                <li class="pe-4"> <a href="" class="text-light header-text"> <i class="fa-solid fa-comment-dots fs-5"></i></a></li>
            </ul>
        </div>

        <div class="second-columns">
            <ul class="links list-unstyled text-light d-flex  pt-3">
                <li>
                    <button class="btn search-btn rounded-pill ms-2 responsive-btn" data-bs-target="#inquiryModal" data-bs-toggle="modal" type="submit">Make An Inquiry</button>
                </li>
            </ul>
        </div>
    </div>
</div>

<input type="hidden" id="baseUrl" value="<?= base_url(); ?>"/>
<input type="hidden" id="checkError" value="0"/>

<nav class="navbar navbar-expand-md navbar-background p-0 sticky-top " style="top: -1px;">
    <div class="container-fluid header-padding">
        <a class="navbar-brand" href="<?= base_url();?>">
            <img class="logo horizontal-logo assets-img-header-logo-png" 
            src="<?php echo base_url().env('SEO_SUBPATH'); ?>/uploads/img/business_logo/<?php echo $user_details['business_logo'];?>" 
            alt="forecastr logo" width="90px" height="90px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <?php
                    foreach ($menu_lists as $menu_list) {
                        $cls = count($menu_list['sub_menu'])>0?"dropdown ":"";
                        $toggle_cls = count($menu_list['sub_menu'])>0?"dropdown-toggle":"";
                        ?>
                        <li class="nav-item <?= $cls;?>m-0">                        
                            <a class="nav-link <?= $toggle_cls;?> text-nowrap" 
                                href="<?= !empty($toggle_cls)?"#":base_url().'/'.$menu_list['menu_link']; ?>"
                                <?php if(!empty($toggle_cls)){ 
                                    echo "id='navbarDropdown".$menu_list['id']."'";
                                    echo "role='button'";
                                    echo "data-toggle='dropdown'";
                                    } ?>
                            >
                            <?= $menu_list['menu_name']; ?>
                            </a>
                            <?php if(!empty($toggle_cls)){ 
                                echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown'.$menu_list['id'].'">';
                                foreach($menu_list['sub_menu'] as $sub_menu){
                                    
                                    echo '<a class="dropdown-item" href="'.base_url().'/'.$sub_menu['menu_link'].'">'.$sub_menu['menu_name'].'</a>';
                                }
                                echo '</div>';
                            } ?>    
                            
                        </li>
                        <?php
                    }                   
                ?>
                <li class=" w-75">
                    <form class="form-inline d-flex" method="post" action="search" >
                        <input name="search" value="<?php set_value('search');?>" id="search" class="form-control mr-sm-2 rounded-0 searchbar_color searchbar" type="search" placeholder="Search" aria-label="Search" style="width: 200px!important;" required>
                        <button class="btn search-btn my-2 my-sm-0 rounded-0" type="submit">Search</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modal-bg-color">
                <h5 class="modal-title text-light fw-bold" id="exampleModalLabel">Make an Inquiry</h5>
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
                <button type="button" id="sendMsg" class="btn btn-color text-white rounded-pill ">
                    Send
                </button>
            </div>
        </div>
    </div>
</div>