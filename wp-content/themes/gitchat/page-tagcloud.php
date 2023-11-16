<?php
/**
 * Template Name:全宽标签云页面模板
 */
get_header();
?>
<div class="row">
  <div class="col-sm-12 blog-main">
     <?php wp_tag_cloud("smallest=20&largest=50&unix=px&number=200");  ?>
  </div>
</div>
</div>

<?php get_footer();?>