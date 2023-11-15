<?php
// part 1 
if ( post_password_required() ) {
    return;
} 
?>

<div id="comments" class="comments-area">
        <?php
        // part 2 
        if ( have_comments() ) : ?>
            <h3 class="comments-title">
                <?php
                // part 3 
                printf( _n( '“%2$s” 有一条评论', '“%2$s” 有 %1$s 条评论', get_comments_number(), 'comments title'),
                     get_comments_number() , get_the_title() );
                ?>
            </h3>
            <ul class="comment-list">
                <?php 
                // part 4
                wp_list_comments( array(
                    'short_ping'  => true,
                    'avatar_size' => 50,
                ) );
                ?>
            </ul>
        <?php endif; ?>
        <?php
        // part 5
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
            <p class="no-comments">
                <?php _e( '评论已关闭.' ); ?>
            </p>
        <?php endif; ?>
        <?php comment_form(); ?>
    </div>