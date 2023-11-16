<?php
/**
 * Template Name:友情链接页面模板
 */

 get_header();?>

<div class="row">

  <div class="col-sm-8 blog-main">

  <?php wp_list_bookmarks('orderby=rand&show_images=0'); ?>


  </div><!-- /.blog-main -->

 <?php get_sidebar();?>

</div><!-- /.row -->

</div><!-- /.container -->

<?php get_footer();?>