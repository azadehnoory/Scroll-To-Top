<?php
/*
Plugin Name: scroll to top
Plugin URI: https://github.com/azadehnoory/Scroll-To-Top
Description: پلاگین ساده اسکرول به بالای صفحه با قابلیت سفارشی سازی
Author: آزاده نوری
Version: 1.0.0
Licence: GPLv2 or Later
Author URI: https://azadehnoory.ir/
*/

defined('ABSPATH') || exit;

define('STT_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('STT_PLUGIN_URL', plugin_dir_url(__FILE__));
// ================== Register Default Settings After Plugin is Activated =========
register_activation_hook( __FILE__, 'stt_activate' );
function stt_activate() {
    $option_value = [
        'position' => 1,
        'width' => '40',
        'height'=>'40',
        'background-color'=>'#333c56',
        'foreground-color'=>'#fff'
    ];
    update_option('_stt_button_style', $option_value);
}
// ================== Delete Settings After Plugin is Deactivated =========
register_deactivation_hook(__FILE__, 'stt_deactivate' );
function stt_deactivate()
{
    delete_option('_stt_button_style');
}
// =============== Register Front-End Assets ========================
add_action('wp_enqueue_scripts','stt_register_assets');
function stt_register_assets()
{
   // Register Script
    wp_register_script('stt-main-js',STT_PLUGIN_URL.'assets/js/main.js',['jquery'],'1.0.0','true');
    wp_enqueue_script('stt-main-js');
}

// =============== Register Backend Assets =====================
add_action('admin_enqueue_scripts','stt_register_assets_admin');
function stt_register_assets_admin()
{
// Register Color Picker Assets
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'stt-backend-script',STT_PLUGIN_URL . 'assets/js/backend-script.js' ,['wp-color-picker'],
        '1.0.0', true );
}
// ===================== Add The Button to Footer =====================
include_once STT_PLUGIN_DIR.'view/layout.php';
add_action( 'wp_footer', 'scroll_to_top_layout' );
// ===================== Create Admin Menu to Manage Options =====================
include_once STT_PLUGIN_DIR.'admin/admin-menu.php';
// ===================== Load Button's Style in Header =====================
add_action('wp_head', 'my_custom_css');
function my_custom_css()
{
require_once 'assets/css/style.php';
}
