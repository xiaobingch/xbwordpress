<?php get_header();?>

      <div class="row">

        <div class="col-sm-8 blog-main">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="blog-post">
                  <h2 class="blog-post-title"><?php the_title(); ?></h2>
              <p class="blog-post-meta">
                <?php the_date();?> by
                <?php the_author_link();?>
                <!-- <a href=" <?php the_author_link();?> "><?php the_author();?></a> -->
              </p>
              <p><?php the_content();?></p>
            </div><!-- /.blog-post -->
            <?php endwhile; ?>
        <?php endif;?>
        <?php 
          if (comments_open() || get_comments_number()) :
            comments_template();
          endif;
        ?>

        </div><!-- /.blog-main -->

      <?php get_sidebar();?>

      </div><!-- /.row -->

    </div><!-- /.container -->

   <?php get_footer();?>