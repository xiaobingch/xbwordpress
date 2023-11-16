<?php

function remove_open_sans() {
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false );
}
add_action('wp_enqueue_scripts', 'remove_open_sans');
add_action('admin_enqueue_scripts', 'remove_open_sans');
// 激活连接管理器
add_filter( 'pre_option_link_manager_enabled', '__return_true' );
