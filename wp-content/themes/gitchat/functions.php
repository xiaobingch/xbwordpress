<?php
//主题选项
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';
// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );
 
//去除谷歌字体
function remove_open_sans() {
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false );
}
add_action('wp_enqueue_scripts', 'remove_open_sans');
add_action('admin_enqueue_scripts', 'remove_open_sans');
// 激活连接管理器
add_filter( 'pre_option_link_manager_enabled', '__return_true' );
