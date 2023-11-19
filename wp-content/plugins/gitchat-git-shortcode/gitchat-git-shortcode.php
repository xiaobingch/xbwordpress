<?php
/*
Plugin Name: Gitchat git shortcodt
Plugin URI: https://gitchat.cn/plugins
Description: 这是一个短代码插件，增加了[git][chat]短代码。
Version: 1.0
Author: Gitchat
Author URI: https://gitchat.cn/
*/
function gitchat_git_shortcode($atts, $content = null)
{
    $atts = shortcode_atts(
        array(
            'id' => '1',
            'title' => 'hahaha',
        ),
        $atts,
        'git'
    );
    return  $atts['id'] . "__" . $atts['title'] . '----' . $content;
}
add_shortcode('git', 'gitchat_git_shortcode');

// 源码编辑器短代码按钮添加
function gitchat_git_qt_shortcode()
{
    if (wp_script_is('quicktags')) { // 判断是否正在加载 quicktags 
?>
        <script type="text/javascript">
            // 调用 quick tag 的 API 添加按钮
            QTags.addButton('git', 'Git', '[git id="13" title="code"]', '[/git]', '', 'QuickTag For GitChat', 1);
        </script>
<?php
    }
}
add_action('admin_print_footer_scripts', 'gitchat_git_qt_shortcode', 11);
