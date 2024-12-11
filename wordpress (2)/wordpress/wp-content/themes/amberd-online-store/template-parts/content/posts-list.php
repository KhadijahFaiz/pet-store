<?php if (has_post_thumbnail() ){ ?>
    <div class="amberd-images-hover-effect">
        <a href="<?php the_permalink(); ?>"> 
            <div class="<?php echo esc_attr( get_theme_mod( 'amberd_posts_list_images_hover_effect' ) ); ?>"> 
                <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" />
            </div>
        </a>
    </div>
<?php }  ?>      
<div class="amberd-posts-list-title">
<h2 class="post-list-title"><a href="<?php the_permalink(); ?>"><?php if( empty( $post->post_title ) ) { echo esc_html__( 'No Title', 'amberd-online-store'); } else { echo esc_html(wp_trim_words(get_the_title(), 4)); } ?></a></h2>
</div>
<div class="amberd-entry-meta">
    <i class="fa fa-calendar amberd-icon-padding"></i><?php echo esc_html(get_the_date('d/m/Y')); ?>
    <i class="fa fa-user amberd-icon-padding"></i><?php the_author_posts_link(); ?>
    <a href="<?php comments_link(); ?>"><i class="fa fa-comments amberd-icon-padding"></i><?php esc_attr(comments_number('0', '1', '%')); ?></a>
    <?php if ( has_category() ) { ?> <i class="fa fa-folder amberd-icon-padding"></i><?php echo get_the_category_list(', '); ?> <?php } ?>
</div>
<div class="amberd-post-text-content"><p><?php echo esc_html(wp_trim_words(get_the_content(), 20)); ?></p></div>