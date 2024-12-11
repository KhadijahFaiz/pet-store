<div class="amberd-woo-container">
    <div class="main-woo-container amberd-woo-main-content" id="content_navigator">
        <div role="main" class="amberd-woo-product-list-full-width">
                <div class="woocommerce">
                    <h1 class="page-banner__title"><?php the_title(); ?></h1>
                    <?php the_content(); ?> 
                    <div class="amberd-wp-link-pages">
                        <?php wp_link_pages( array(
                            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'amberd-online-store' ),
                            'after'  => '</div>',
                            ) );
                        ?>
                    </div>
                </div>
        </div>
    </div>
</div>