<div class="bg-dark">
    <div class="container-fluid header-padding d-flex justify-content-between">
        <div class="first-columns ">
            <ul class="links list-unstyled  d-flex pt-4">
                <li class="pe-4"> <a href="" class="text-light"><i class="fa-solid fa-phone"></i></a> </li>
                <li class="pe-4 "><a href="tel:<?= $user_details['mobile'];?>" class="text-color text-decoration-none fw-bold number-hover"> <?= $user_details['mobile'];?></a></li>
                <li class="pe-4"> <a target="_blank" href="https://wa.me/<?= $user_details['mobile'];?>?text=Hi%27,%20like%20to%20chat%20with%20you" class="text-success"><i class="fa-brands fa-whatsapp fs-5"></i></a> </li>
                <li class="pe-4"> <a href="" class="text-light"> <i class="fa-solid fa-comment-dots fs-5"></i></a></li>
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

<nav class="navbar navbar-expand-md navbar-light bg-light p-0 sticky-top " style="top: -1px;">
    <div class="container-fluid header-padding">
        <a class="navbar-brand" href="#">
            <img class="logo horizontal-logo assets-img-header-logo-png" src="<?= base_url('uploads/img/business_logo/').'/'.$user_details['business_logo']; ?>" alt="forecastr logo" width="100px" height="100px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item m-0">
                    <a class="nav-link fs-6" href="<?= base_url(); ?>/">Home</a>
                </li>
                <li class="nav-item  m-0 ">
                    <a class="nav-link  fs-6" href="<?= base_url(); ?>/about">About</a>
                </li>

                <li class="nav-item dropdown  m-0 ">
                    <a class="nav-link dropdown-toggle fs-6" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="<?= base_url(); ?>/services/babysitter-japa-services">Babysitter & Japa Services</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/services/colostomy-care">Colostomy care</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/services/critical-care-nurse">Critical Care Nurse</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/services/gastrostomy-care">Gastrostomy Care</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/services/injection-on-call">Injection on Call</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/services/male-female-care-givers-for-patients">Male/Female Care Givers For Patients</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/services/new-born-baby-care-service">New Born Baby Care Service</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/services/nursing-staff-for-hospitals-and-home">Nursing Staff For Hospitals And Home</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/services/old-and-senior-citizens-caretaker-services">Old And Senior Citizens Caretaker services</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/services/tracheostomy-care-nurses">Tracheostomy Care Nurses</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/services/paralysis-patient-care">PARALYSISI PATIENT CARE</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/services/male-female-attendant">MALE FEMALE ATTENDANT</a>
                    </div>
                </li>
                <li class="nav-item dropdown  m-0 ">
                    <a class="nav-link dropdown-toggle fs-6" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown">
                        Product
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                        <a class="dropdown-item" href="<?= base_url(); ?>/products/wheel-chair">Wheel Chair</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/products/bipap-machine">Bipap Machine</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/products/hospital-bed">Hospital Bed</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/products/liberty-adult-eco-diaper">Liberty Adult Eco Diaper</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/products/cpap-machine">Cpap Machine</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/products/suction-machine">Suction Machine</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/products/dvt-pump">DVT Pump</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/products/recliner-bed">Recliner Bed</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/products/syringe-pump">Syringe Pump</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/products/oxygen-concentrator">Oxygen Concentrator</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/products/5-para-patient-monitor">5 Para Patient Monitor</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/products/nibulizer">Nibulizer</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/products/karma-walker">Karma Walker</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/products/philips-oxygen-concentrator">Philips Oxygen Concentrator </a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/products/cammode-chair">Cammode Chair</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/products/karama-foldable-back-rest-ryder">Karma Foldable Back Rest Ryder</a>
                    </div>
                </li>
                <li class="nav-item dropdown  m-0 ">
                    <a class="nav-link dropdown-toggle fs-6" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown">
                        Update
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                        <a class="dropdown-item" href="<?= base_url(); ?>/update/oxygen-concenteration-on-rent">Oxygen Concenteration on Rent</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/update/suction-machine-on-rent">Suction Machine on Rent</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/update/spirometer-sell-in-kalka-ji">Spirometer Sell in Kalka Ji</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/update/alia-health-care-group-pvt-ltd">Alia Health Care Group Pvt Ltd</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/update/recliner-bed-rent-and-sell">Recliner Bed Rent And Sell</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/update/vaporizer-on-sell">Vaporizer On Sell</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/update/recliner-wheel-chair-sell">Recliner Wheel Chair Sell</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/update/oxygen-concentrator">Oxygen Concentrator</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/update/male-female-nurses">Male Female Nurses</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/update/air-mattress-sell">Air Mattress Sell</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/update/all-medical-equipment-sell-and-rent">All Medical Equipment Sell and Rent</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/update/nebulizer">Nebulizer</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/update/suction-machine">Suction Machine</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>/update/recliner-bed">Recliner Bed</a>
                    </div>
                </li>
                <li class="nav-item m-0">
                    <a class="nav-link fs-6" href="<?= base_url(); ?>/contact">Contact</a>
                </li>
                <li class=" w-75">
                    <form class="form-inline d-flex">
                        <input class="form-control mr-sm-2 rounded-0 searchbar" type="search" placeholder="Search" aria-label="Search" style="width: 200px!important;">
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
                            <input type="text" class="form-control" maxlength="10" name="number" id="number" placeholder="mobile number" required="">
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