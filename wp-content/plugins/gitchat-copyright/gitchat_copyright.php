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


/**
* 注册菜单项
*/
function gitchat_copyright_custom_menu(){
  add_menu_page( 
      'Gitchat 版权插件首页',
      'GitChat 版权插件',
      'manage_options',
      'gitchat_optionpage',
      'gitchat_custom_page',
      'dashicons-admin-generic',
      100
  ); 
  add_submenu_page(
    'gitchat_optionpage',
    "关于",
    "关于",
    'manage_options',
    'gitchat_aboutpage',
    'gitchat_about_page'
  );
}
add_action( 'admin_menu', 'gitchat_copyright_custom_menu' );

function gitchat_custom_page(){
    ?>
    <div class="wrap">
    <?php 
      if ($_POST['code'] != null && check_admin_referer( 'gitchat_copyright' )){
        update_option( 'gitchat_copyright_code', $_POST['code'] );
        $code = $_POST['code'];
        ?>
        <div id="message" class="updated"><p><strong>信息更新成功！</strong></p>
        </div>
        <?php
      }else{
        $code  = get_option('gitchat_copyright_code');
      }
      ?>
      <h1>GitChat 版权插件设置</h1>
      <form method="POST" action="">
              <table class="form-table widefat striped">
  
                  <tr valign="top">
                      <th><label for="textarea">版权代码</label></th>
                      <td><textarea name="code" col="30" row="10"><?php echo $code;?></textarea></td>
                  </tr>
                  <tr valign="top">
                      <td> 
                          <input type="submit" name="save" value="保存" class="button-primary" />
                          <input type="reset" name="reset" value="重置" class="button-secondary" />
                      </td>
                  </tr>
              </table>
              <?php
                  wp_nonce_field('gitchat_copyright');//check_admin_referer 和 wp_nonce_field为表单加入验证数据避免被恶意利用
              ?>
          </form>
    </div>
  
    <?php
  }
function gitchat_about_page(){
  ?>
  <h1>关于 GitChat</h1>
  <?php
}
?>
<!-- 素材-WordPress 的按钮样式-->
<input type="submit" name="test" value="普通按钮" />
<input type="submit" name="test" value="标准按钮" class="button" />
<input type="submit" name="test" value="主要按钮" class="button button-primary" />
<input type="submit" name="test" value="副按钮" class="button button-secondary" />
<input type="submit" name="test" value="大按钮" class="button button-large" />
<input type="submit" name="test" value="小按钮" class="button button-small" />
<input type="submit" name="test" value="超大按钮" class="button button-hero" />

<!-- 素材-使用 WordPress 自带的表单样式 -->
<form method="POST" action="">
            <table class="form-table">
                <tr valign="top">
                    <th><label for="input-example">输入框</label></th>
                    <td><input id="input-example" name="input-example" /></td>
                </tr>
                <tr valign="top">
                    <th><label for="select-example">下拉框：</label></th>
                    <td>
                        <select name="select-example">
                        <option value="1">是</option>
                        <option value="0">否</option>
                        </select>
                    </td>
                </tr>
                <tr valign="top">
                    <th><label for="check-example">选择框</label></th>
                    <td><input type="checkbox" name="check-example" /></td>
                </tr>
                <tr valign="top">
                    <th><label for="radio-example">Radio </label></th>
                    <td>
                        <input type="radio" name="radio-example" value="是" /> 是
                        <input type="radio" name="radio-example" value="否" /> 否
                    </td>
                </tr>
                <tr valign="top">
                    <th><label for="textarea">文本框</label></th>
                    <td><textarea name="textarea"></textarea></td>
                </tr>
                <tr valign="top">
                    <td>
                        <input type="submit" name="save" value="保存" class="button-primary" />
                        <input type="submit" name="reset" value="重置" class="button-secondary" />
                    </td>
                </tr>
            </table>
        </form>

 <!-- 素材-WordPress 自带的表格样式 -->
 <table class="widefat striped">
            <thead>
                <tr>
                    <th>序号</th>
                    <th>达人课名称</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Angular 初学者快速上手教程</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>快速学习 Spring Boot 技术栈</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Webpack 达人的成长之路</td>
                </tr>
            </tbody>
        </table>