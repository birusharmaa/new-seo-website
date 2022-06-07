<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/manage', 'Login::index');
$routes->get('forget-password', 'Login::forget_password');
$routes->get('/inbox', 'Inbox::index');

$routes->get('/notification', 'Notification::index');
$routes->get('/knowledge', 'Knowledge::index');
$routes->get('/installation', 'Knowledge::installation');
$routes->get('/uses', 'Knowledge::uses');

$routes->get('sign-out', 'Signin::sign_out');
$routes->post('send-otp', 'Signin::send_reset_password_mobile_otp');
$routes->post('verify-otp', 'Signin::validateOtp');
$routes->post('password-reset', 'Signin::do_reset_password');
$routes->post('/user-auth', 'Signin::authenticate');

$routes->get('/dashboard', 'SettingsController::dashboard');
$routes->get('/settings', 'SettingsController::index');
$routes->get('/profile', 'SettingsController::profile');
$routes->post('save-general/(:num)', 'SettingsController::save_general/$1');
$routes->post('upload-logo/(:num)', 'SettingsController::updateSiteLogo/$1');
$routes->post('reset-password/(:num)', 'SettingsController::reset_password/$1');
$routes->post('compony-Info/(:num)', 'SettingsController::compony_Info/$1');
$routes->post('social-link/(:num)', 'SettingsController::social_link/$1');
$routes->post('save-personalinfo/(:num)', 'SettingsController::save_personalinfo/$1');
$routes->post('update-theme/(:any)', 'SettingsController::update_theme/$1');

$routes->get('/business-type', 'GeneralSettingController::businessType');
$routes->get('/allBusiness', 'GeneralSettingController::allBusiness');
$routes->post('/save-businesstype', 'GeneralSettingController::save_business');
$routes->get('edit-business/(:num)', 'GeneralSettingController::edit_business/$1');
$routes->post('update-business/(:num)', 'GeneralSettingController::update_business/$1');
$routes->post('delete-business/(:num)', 'GeneralSettingController::delete_business/$1');

$routes->get('/country', 'GeneralSettingController::country');
$routes->get('/allcountry', 'GeneralSettingController::allcountry');
$routes->post('/save-country', 'GeneralSettingController::save_country');
$routes->get('edit-country/(:num)', 'GeneralSettingController::edit_country/$1');
$routes->post('update-country/(:num)', 'GeneralSettingController::update_country/$1');
$routes->post('delete-country/(:num)', 'GeneralSettingController::delete_country/$1');

$routes->get('/state', 'GeneralSettingController::state');
$routes->get('/allstate', 'GeneralSettingController::allstate');
$routes->post('/save-state', 'GeneralSettingController::save_state');
$routes->get('edit-state/(:num)', 'GeneralSettingController::edit_state/$1');
$routes->post('update-state/(:num)', 'GeneralSettingController::update_state/$1');
$routes->post('delete-state/(:num)', 'GeneralSettingController::delete_state/$1');

$routes->get('/city', 'GeneralSettingController::city');
$routes->get('/allcity', 'GeneralSettingController::allcity');
$routes->post('/save-city', 'GeneralSettingController::save_city');
$routes->get('edit-city/(:num)', 'GeneralSettingController::edit_city/$1');
$routes->post('update-city/(:num)', 'GeneralSettingController::update_city/$1');
$routes->post('delete-city/(:num)', 'GeneralSettingController::delete_city/$1');

$routes->get('/locality', 'GeneralSettingController::locality');
$routes->get('/alllocality', 'GeneralSettingController::alllocality');
$routes->post('/save-locality', 'GeneralSettingController::save_locality');
$routes->get('edit-locality/(:num)', 'GeneralSettingController::edit_locality/$1');
$routes->post('update-locality/(:num)', 'GeneralSettingController::update_locality/$1');
$routes->post('delete-locality/(:num)', 'GeneralSettingController::delete_locality/$1');

$routes->get('/pincode', 'GeneralSettingController::pincode');
$routes->get('/allpincode', 'GeneralSettingController::allpincode');
$routes->post('/save-pincode', 'GeneralSettingController::save_pincode');
$routes->get('edit-pincode/(:num)', 'GeneralSettingController::edit_pincode/$1');
$routes->post('update-pincode/(:num)', 'GeneralSettingController::update_pincode/$1');
$routes->post('delete-pincode/(:num)', 'GeneralSettingController::delete_pincode/$1');

$routes->get('/get-state/(:num)', 'GeneralSettingController::getActiveSateById/$1');
$routes->get('/get-city/(:num)', 'GeneralSettingController::getActiveCityById/$1');
$routes->get('/get-locality/(:num)', 'GeneralSettingController::getActiveLocalityById/$1');
$routes->get('/get-pincode/(:num)', 'GeneralSettingController::getActivePincodeById/$1');

$routes->post('other-business-info/(:num)', 'SettingsController::other_business_info/$1');
$routes->post('other-contact/(:num)', 'SettingsController::other_contact/$1');
$routes->post('other-currency/(:num)', 'SettingsController::other_currency/$1');
$routes->post('theme-color/(:num)', 'SettingsController::theme_color/$1');
$routes->post('razorpay-settings/(:num)', 'SettingsController::razorpay_settings/$1');
$routes->post('/upload-business-logo/(:num)', 'SettingsController::upload_business_logo/$1');
$routes->post('/upload-business-icon/(:num)', 'SettingsController::upload_business_icon/$1');




$routes->get('/plugins', 'Plugins::index');
$routes->get('/add-plugin', 'Plugins::add_plugin');
$routes->get('/manage-plugins/(:num)', 'Plugins::manage_plugins/$1');
$routes->post('/save-plugins', 'Plugins::save_plugins');
$routes->post('plugin-info-update/(:num)', 'Plugins::plugin_info_update/$1');
$routes->post('plugin-pass-update/(:num)', 'Plugins::plugin_pass_update/$1');
$routes->post('pluginInfo-update/(:num)', 'Plugins::pluginInfo_update/$1');
$routes->post('plugin-social-update/(:num)', 'Plugins::pluginSocial_update/$1');
$routes->post('upload-plugin-logo/(:num)', 'Plugins::upload_plugin_logo/$1');
$routes->get('/renewals', 'Plugins::renewals');

$routes->get('/inventory', 'Inventory::index');
$routes->post('/buy-inventory', 'Inventory::save_buyInventory');
$routes->get('/allInventory', 'Inventory::allInventory');

$routes->get('/header-footer', 'Appearance::header_footer');
$routes->post('/header-footer-save', 'Appearance::header_footer_save');
$routes->post('/header-footer-update/(:num)', 'Appearance::header_footer_update/$1');
$routes->get('/call-action', 'Appearance::call_action');
$routes->get('/arrange-section', 'Appearance::arrange_section');
$routes->get('/get-arrange-section/(:num)/(:num)', 'ManageSection::get_arrange_section/$1/$2');
$routes->post('/save-arrange-sorting', 'Appearance::save_arrange_sorting');

$routes->get('/menus', 'MenusController::index');
$routes->get('/sub-menus', 'MenusController::sub_menus');
$routes->get('/footer-menus', 'MenusController::footer_menus');
$routes->post('/save-menus', 'MenusController::save_menus');
$routes->post('/save-default-menus', 'MenusController::save_default_menus');
$routes->get('/get-default-menu', 'MenusController::get_default_menu');
$routes->post('/save-sub-menus', 'MenusController::save_sub_menus');
$routes->post('/save-footer-menus', 'MenusController::save_footer_menus');
$routes->post('/save-menus-sortings', 'MenusController::save_menus_sortings');

$routes->get('/slider-maintain', 'ManageSection::index');
$routes->get('/all-slider-section', 'ManageSection::all_slider_section');
$routes->post('/add-slider-section', 'ManageSection::add_slider_section');
$routes->post('/save-slider-section', 'ManageSection::save_slider_section');
$routes->post('/delete-slider-section/(:num)', 'ManageSection::delete_slider_section/$1');
$routes->get('/edit-slider-section/(:num)', 'ManageSection::edit_slider_section/$1');
$routes->post('/update-slider-section/(:num)', 'ManageSection::update_slider_section/$1');

$routes->get('/all-slider', 'ManageSection::all_slider');
$routes->get('/add-slider', 'ManageSection::add_slider');
$routes->post('/save-slider', 'ManageSection::save_slider');
$routes->get('/edit-slider/(:num)', 'ManageSection::edit_slider/$1');
$routes->post('/update-slider/(:num)', 'ManageSection::update_slider/$1');
$routes->post('/delete-slider/(:num)', 'ManageSection::delete_slider/$1');
$routes->get('/allslider-get', 'ManageSection::allslider_get');
$routes->post('/slider-image-upload', 'ManageSection::slider_image_upload');

$routes->get('/custom-section', 'ManageSection::custom_section');
$routes->post('/save-custom-section', 'ManageSection::save_custom_section');
$routes->get('/edit-custom-section/(:num)', 'ManageSection::edit_custom_section/$1');
$routes->post('/delete-custom-section/(:num)', 'ManageSection::delete_custom_section/$1');
$routes->post('/update-custom-section/(:num)', 'ManageSection::update_custom_section/$1');
$routes->get('/allslider-custom', 'ManageSection::allslider_custom');
$routes->post('/custom-section-upload-image', 'ManageSection::custom_section_upload_image');

$routes->get('/services', 'ManageSection::services');
$routes->get('/add-services', 'ManageSection::add_services');
$routes->post('/save-services', 'ManageSection::save_services');
$routes->get('/edit-services/(:num)', 'ManageSection::edit_services/$1');
$routes->post('/update-services/(:num)', 'ManageSection::update_services/$1');
$routes->post('/delete-services/(:num)', 'ManageSection::delete_services/$1');
$routes->post('/service-image-upload', 'ManageSection::service_image_upload');
$routes->post('/service-banner-upload', 'ManageSection::service_banner_upload');


$routes->get('/services-section', 'ManageSection::services_section');
$routes->post('/save-services-section', 'ManageSection::save_services_section');
$routes->get('/edit-services-section/(:num)', 'ManageSection::edit_services_section/$1');
$routes->post('/update-services-section/(:num)', 'ManageSection::update_services_section/$1');
$routes->post('/delete-services-section/(:num)', 'ManageSection::delete_services_section/$1');

$routes->get('/products', 'ManageSection::products');
$routes->get('/add-products', 'ManageSection::add_products');
$routes->post('/save-products', 'ManageSection::save_products');
$routes->get('/get-products', 'ManageSection::get_products');
$routes->post('/delete-products/(:num)', 'ManageSection::delete_products/$1');
$routes->get('edit-products/(:num)', 'ManageSection::edit_products/$1');
$routes->post('update-products/(:num)', 'ManageSection::update_products/$1');
$routes->post('/product-image-upload', 'ManageSection::product_image_upload');
$routes->post('/product-banner-upload', 'ManageSection::product_banner_upload');


$routes->get('/product-section', 'ManageSection::product_section');
$routes->post('/save-product-section', 'ManageSection::save_product_section');
$routes->post('/delete-products-section/(:num)', 'ManageSection::delete_product_section/$1');
$routes->get('/edit-products-section/(:num)', 'ManageSection::edit_product_section/$1');
$routes->post('/update-products-section/(:num)', 'ManageSection::update_product_section/$1');
$routes->get('/get-product-section', 'ManageSection::getproduct_section');

$routes->get('/tags-keywords', 'ManageSection::tags_keywords');
$routes->post('/save-keywords', 'ManageSection::save_keywords');
$routes->post('/delete-keywords/(:num)', 'ManageSection::delete_keywords/$1');
$routes->get('/gets-keywords', 'ManageSection::gets_keywords');

$routes->get('/posts', 'ManageSection::posts');
$routes->get('/add-posts', 'ManageSection::add_posts');
$routes->post('/save-posts', 'ManageSection::save_posts');
$routes->get('/edit-posts/(:num)', 'ManageSection::edit_posts/$1');
$routes->post('/update-posts/(:num)', 'ManageSection::update_posts/$1');
$routes->post('/delete-posts/(:num)', 'ManageSection::delete_posts/$1');

$routes->get('/custom-insert', 'ManageSection::custom_insert');
$routes->post('/update-custom/(:num)', 'ManageSection::update_custom/$1');
$routes->post('/save-custom', 'ManageSection::save_custom');
$routes->get('/get-default-meta', 'ManageSection::get_default_meta');

$routes->get('/images-gallery', 'ManageSection::images_gallery');
$routes->get('/add-images', 'ManageSection::add_images_gallery');
$routes->post('/save-galleryimages', 'ManageSection::save_galleryimages');
$routes->post('/delete-galleryimages/(:num)', 'ManageSection::delete_galleryimages/$1');
$routes->post('/gallery-image-upload', 'ManageSection::gallery_image_upload');


$routes->get('/video-gallery', 'ManageSection::video_gallery');
$routes->get('/add-video', 'ManageSection::add_video_gallery');
$routes->post('/save-galleryvideo', 'ManageSection::save_galleryvideo');
$routes->post('/delete-galleryvideo/(:num)', 'ManageSection::delete_galleryvideo/$1');

$routes->get('/testimonials', 'ManageSection::testimonials');
$routes->get('/add-testimonials', 'ManageSection::add_testimonials');
$routes->post('/save-testimonials', 'ManageSection::save_testimonials');
$routes->get('/edit-testimonials/(:num)', 'ManageSection::edit_testimonials/$1');
$routes->post('/update-testimonials/(:num)', 'ManageSection::update_testimonials/$1');
$routes->post('/delete-testimonials/(:num)', 'ManageSection::delete_testimonials/$1');
$routes->post('/testimonials-image-upload', 'ManageSection::testimonials_image_upload');


$routes->get('/faqs', 'ManageSection::faqs');
$routes->get('/add-faqs', 'ManageSection::add_faqs');
$routes->post('/save-faqs', 'ManageSection::save_faqs');
$routes->get('/edit-faqs/(:num)', 'ManageSection::edit_faqs/$1');
$routes->post('/update-faqs/(:num)', 'ManageSection::update_faqs/$1');
$routes->post('/delete-faqs/(:num)', 'ManageSection::delete_faqs/$1');

$routes->get('/images-section', 'ManageSection::images_section');
$routes->post('/save-image-section', 'ManageSection::save_image_section');
$routes->get('/edit-image-section/(:num)', 'ManageSection::edit_image_section/$1');
$routes->post('/update-image-section/(:num)', 'ManageSection::update_image_section/$1');
$routes->post('/delete-image-section/(:num)', 'ManageSection::delete_image_section/$1');
$routes->get('/get-image-section', 'ManageSection::get_image_section');

$routes->get('/video-section', 'ManageSection::video_section');
$routes->post('/save-video-section', 'ManageSection::save_video_section');
$routes->get('/edit-video-section/(:num)', 'ManageSection::edit_video_section/$1');
$routes->post('/update-video-section/(:num)', 'ManageSection::update_video_section/$1');
$routes->post('/delete-video-section/(:num)', 'ManageSection::delete_video_section/$1');

$routes->get('/banner-section', 'ManageSection::banner_section');
$routes->post('/save-banner-section', 'ManageSection::save_banner_section');
$routes->post('/update-banner-section/(:num)', 'ManageSection::update_banner_section/$1');
$routes->get('/edit-banner-section/(:num)', 'ManageSection::edit_banner_section/$1');
$routes->post('/delete-banner-section/(:num)', 'ManageSection::delete_banner_section/$1');
$routes->get('/get-banner-section', 'ManageSection::getbanner_section');
$routes->post('/banner-image-upload', 'ManageSection::banner_image_upload');

$routes->get('/testimonials-section', 'ManageSection::testimonials_section');
$routes->post('/save-testimonials-section', 'ManageSection::save_testimonials_section');
$routes->post('/update-testimonials-section/(:num)', 'ManageSection::update_testimonials_section/$1');
$routes->get('/edit-testimonials-section/(:num)', 'ManageSection::edit_testimonials_section/$1');
$routes->post('/delete-testimonials-section/(:num)', 'ManageSection::delete_testimonials_section/$1');

$routes->get('/faqs-section', 'ManageSection::faqs_section');
$routes->post('/save-faqs-section', 'ManageSection::save_faqs_section');
$routes->post('/update-faqs-section/(:num)', 'ManageSection::update_faqs_section/$1');
$routes->get('/edit-faqs-section/(:num)', 'ManageSection::edit_faqs_section/$1');
$routes->post('/delete-faqs-section/(:num)', 'ManageSection::delete_faqs_section/$1');

$routes->get('/post-section', 'ManageSection::post_section');
$routes->post('/save-post-section', 'ManageSection::save_post_section');
$routes->post('/delete-post-section/(:num)', 'ManageSection::delete_post_section/$1');

$routes->get('/mlc-section', 'ManageSection::mlc_section');
$routes->post('/save-mlc-section', 'ManageSection::save_mlc_section');
$routes->post('/update-mlc-section/(:num)', 'ManageSection::update_mlc_section/$1');
$routes->get('/edit-mlc-section/(:num)', 'ManageSection::edit_mlc_section/$1');
$routes->post('/delete-mlc-section/(:num)', 'ManageSection::delete_mlc_section/$1');

$routes->get('/business-query', 'ManageSection::business_section');
$routes->post('/save-business-section', 'ManageSection::save_business_section');
$routes->post('/update-business-section/(:num)', 'ManageSection::update_business_section/$1');
$routes->get('/edit-business-section/(:num)', 'ManageSection::edit_business_section/$1');
$routes->post('/delete-business-section/(:num)', 'ManageSection::delete_business_section/$1');

$routes->get('/order', 'OrderController::index');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
