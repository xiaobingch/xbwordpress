<?php get_header();?>

      <div class="row">

        <div class="col-sm-8 blog-main">

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <div class="blog-post">
                <a href="<?php the_permalink();?>">
                  <h2 class="blog-post-title"><?php the_title(); ?></h2>
                </a>
              <p class="blog-post-meta">
                <?php the_date();?> by
                <?php the_author_link();?>
                <!-- <a href=" <?php the_author_link();?> "><?php the_author();?></a> -->
              </p>
              <p><?php the_excerpt();?></p>
            </div><!-- /.blog-post -->
            <?php endwhile; ?>
        <?php endif;?>

          <nav>
            <ul class="pager">
              <li><?php previous_posts_link("上一页")?></li>
              <li><?php next_posts_link("下一页")?></li>
            </ul>
          </nav>



        </div><!-- /.blog-main -->

      <?php get_sidebar();?>

      </div><!-- /.row -->

    </div><!-- /.container -->

   <?php get_footer();?>