 <?php the_content(); ?> 
    <div class="amberd-wp-link-pages">
        <?php wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'amberd-online-store' ),
            'after'  => '</div>',
            ) );
        ?>
    </div>
    <?php 
        if(has_tag()) { ?> <div class="post-tags"><?php the_tags( $before = "", $sep = '', $after = '' ); ?></div> <?php }
        get_template_part( 'template-parts/partials/amberd-comments' );
    ?>