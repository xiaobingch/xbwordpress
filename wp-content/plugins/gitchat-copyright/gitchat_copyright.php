<?php
/*
Plugin Name: Gitchat Copyright
Plugin URI: https://gitchat.cn/plugins
Description: 这是一个 copyright 插件，能够在文章尾部添加内容。
Version: 1.0
Author: Gitchat
Author URI: https://gitchat.cn/
*/

// 设置内容初始化（选项表）
function gitchat_copyright_activate()
{
    add_option('gitchat_copyright_code','<hr><p>这是一个来自 (数据库站点设置里)GitChat 达人课的插件</p><hr>');
}
register_activation_hook(__FILE__,'gitchat_copyright_activate');


// 输出到页面
function copyright_end($content)
{
    if(is_single()){
       $content .= get_option('gitchat_copyright_code');
       return $content;
    }
 }
 add_filter('the_content','copyright_end');

 /**
 * 菜单项注册(站点设置)
 */
$new_general_setting = new new_general_setting();
class new_general_setting {
  function new_general_setting( ) {
    add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
  }
  function register_fields() {
    register_setting( 'general', 'gitchat_copyright_code');
    add_settings_field('fav_color', '<label for="gitchat_copyright_code">Copyright 代码</label>' , array(&$this, 'fields_html') , 'general' );
  }
  function fields_html() {
    $value = get_option( 'gitchat_copyright_code', '' );
    echo '<textarea name="gitchat_copyright_code" id="gitchat_copyright_code" cols="30" rows="10">'. $value. '</textarea>';
  }
}

//停用插件
function gitchat_copyright_deactivate() {
    // 具体的停用插件的逻辑
}
register_deactivation_hook( __FILE__, 'gitchat_copyright_deactivate' );


