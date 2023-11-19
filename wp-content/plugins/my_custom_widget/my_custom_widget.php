<?php
/*
Plugin Name: My_Custom_Widget
Plugin URI: https://gitchat.cn/plugins
Description: 这是一个自定义小挂件。
Version: 1.0
Author: Gitchat
Author URI: https://gitchat.cn/
*/

class My_Custom_Widget extends WP_Widget {

    // 构造函数
    public function __construct() {
        parent::__construct(
            'my_custom_widget', // 小工具ID
            'My Custom Widget', // 小工具名称
            array('description' => '一个简单的WordPress小工具，显示欢迎消息。') // 小工具描述
        );
    }

    // 前端小工具内容显示
    public function widget($args, $instance) {
        echo $args['before_widget'];
        echo $args['before_title'] . esc_html($instance['title']) . $args['after_title'];
        echo '<p>' . esc_html($instance['welcome_message']) . '</p>';
        echo $args['after_widget'];
    }

    // 小工具后台表单
    public function form($instance) {
        // 获取现有的字段值或设置默认值
        $title = !empty($instance['title']) ? $instance['title'] : '欢迎';
        $welcome_message = !empty($instance['welcome_message']) ? $instance['welcome_message'] : '欢迎使用我们的网站！';
        ?>

        <!-- 标题字段 -->
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">标题：</label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>

       <!-- 欢迎消息字段 -->
       <p>
            <label for="<?php echo $this->get_field_id('welcome_message'); ?>">欢迎消息：</label>
            <?php
            $editor_settings = array(
                'textarea_name' => $this->get_field_name('welcome_message'),
                'editor_class'  => 'widefat',
                'media_buttons' => false,
                'teeny'         => true,
            );
            wp_editor(wp_kses_post($welcome_message), $this->get_field_id('welcome_message'), $editor_settings);
            ?>
        </p>
        <?php
    }

    // 小工具更新
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = !empty($new_instance['title']) ? strip_tags($new_instance['title']) : '';
        $instance['welcome_message'] = !empty($new_instance['welcome_message']) ? strip_tags($new_instance['welcome_message']) : '';
        return $instance;
    }
}

// 注册小工具
function register_my_custom_widget() {
    register_widget('My_Custom_Widget');
}
add_action('widgets_init', 'register_my_custom_widget');
