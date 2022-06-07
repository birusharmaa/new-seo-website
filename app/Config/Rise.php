<?php

/* Don't change or add any new config in this file */

namespace Config;

use CodeIgniter\Config\BaseConfig;

require_once APPPATH . "ThirdParty/PHP-Hooks/php-hooks.php";

class Rise extends BaseConfig {

    public $app_settings_array = array(
        "app_version" => "1.0",
        "app_update_url" => 'https://thewingshield.com/',
        "updates_path" => './updates/',
    );
    public $app_csrf_exclude_uris = array(
        "notification_processor/create_notification",
        "paypal_ipn", 
        "paypal_ipn/index",
        "paytm_redirect", 
        "paytm_redirect/index", 
        "paytm_redirect.*+",
        "stripe_redirect", 
        "stripe_redirect/index",
        "pay_invoice",
        "pay_invoice/*",
        "google_api/save_access_token", 
        "google_api/save_access_token_of_calendar",
        "webhooks_listener.*+",
        "external_tickets.*+",
        "collect_leads.*+",
        "cron"
    );

    public function __construct() {
  
        // $this->app_csrf_exclude_uris = app_hooks()->apply_filters('app_filter_app_csrf_exclude_uris', $this->app_csrf_exclude_uris);
    }

}
