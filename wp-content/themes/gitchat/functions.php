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

//加载css
function gitchat_theme_style() {
    wp_enqueue_style( 'gitchat_style', get_template_directory_uri() . '/style.css' ); 
}
add_action( 'wp_enqueue_scripts', 'gitchat_theme_style' );

// 注销后跳转到首页
function auto_redirect_after_logout(){
  wp_redirect( home_url() ); 
  exit();
}
add_action('wp_logout','auto_redirect_after_logout');

// 屏蔽后台菜单
// function remove_menus(){
//     remove_menu_page( 'upload.php' );                 //媒体库
//     remove_menu_page( 'themes.php' );                 //外观
//     remove_menu_page( 'plugins.php' );                //插件
//     remove_menu_page( 'users.php' );                  //用户
//     remove_menu_page( 'tools.php' );                  //工具
//   }
//   add_action( 'admin_menu', 'remove_menus' );

// 屏蔽二级菜单
// function remove_submenu() {
//     // 删除”外观”下面的子菜单”编辑”
//     remove_submenu_page('themes.php', 'theme-editor.php');
// }
// if (is_admin()){
//     //删除子菜单
//     add_action('admin_init','remove_submenu');
// }

// 屏蔽仪表盘控件
// function remove_dashboard_widget() {
//     global $wp_meta_boxes;
//     // 以下这一行代码将删除 "快速发布" 模块
//     unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
//     // 以下这一行代码将删除 "引入链接" 模块
//     unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
//     // 以下这一行代码将删除 "插件" 模块
//     unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
//     // 以下这一行代码将删除 "近期评论" 模块
//     unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
//     // 以下这一行代码将删除 "近期草稿" 模块
//     unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
//     // 以下这一行代码将删除 "WordPress 开发日志" 模块
//     unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
//     // 以下这一行代码将删除 "其它 WordPress 新闻" 模块
//     unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
// }
// add_action('wp_dashboard_setup', 'remove_dashboard_widget' );


// 移除管理菜单的logo
// function remove_admin_bar_logo() {
//     global $wp_admin_bar;
//     $wp_admin_bar->remove_menu('wp-logo');
// }
// add_action('wp_before_admin_bar_render', 'remove_admin_bar_logo', 0);


// 后台底部文字
function remove_footer_admin () {
  echo '由<a href="">gitchat </a>开发';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// 主题国际化，多语言
function i10n(){
  $current_locale = get_locale();
  if(!empty($current_locale)){
      $mo_file = dirname(__FILE__).'/languages/'.$current_locale.".mo";
      if (@file_exists($mo_file)&& is_readable($mo_file))
          load_textdomain('your-plugins',$mo_file);
  }
}
add_action('init','i10n');