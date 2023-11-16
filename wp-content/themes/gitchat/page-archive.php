<?php
/**
 * Template Name: 全宽归档页面模板
 */

 function _PostList($attrs = array())
 {
    global $wpdb;
    $rawposts = $wpdb->get_results("SELECT ID, year(post_date) as post_year, post_date, post_title FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND post_password = '' order by post_date desc");

    foreach ($rawposts as $post){
        $posts[$post->post_year][] = $post;
    }
    $rawposts = null;
    $html = '<div class="archives-container"><ul class="archives-list">';
    foreach ($posts as $year => $posts_yearly) {
        $html .= '<li><div class="archives-year">' . $year . '年</div><ul class="archives-sublist">';
        foreach ($posts_yearly as $post) {
            $html .= '<li>';
            $html .= '<time datetime="' . $post->post_date . '">' . mysql2date('m月d日 D', $post->post_date, true) . '</time>';
            $html .= '<a href="' . get_permalink($post->ID) . '">' . $post->post_title . '</a>';
            $html .= "</li>";
        }
        $html .= "</ul></li>";
    }
    $html .= "</ul></div>";
    return $html;

 }

function _PostCount()
{
    $num_posts = wp_count_posts('post');
    return number_format_i18n($num_posts->publish);
}

 get_header();
 ?>
 <div class="row">
   <div class="col-sm-12 blog-main">
   <?php echo _PostList();  ?>
   </div>
 </div>
 </div>
 
 <?php get_footer();?>