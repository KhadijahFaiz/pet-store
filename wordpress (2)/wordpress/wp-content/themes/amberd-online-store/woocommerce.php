<?php get_header(); ?>
    <div class="amberd-woo-container">

        <?php if ( is_shop() || is_product_category() || is_product_tag() ) { ?>
            <div class="main-woo-container amberd-woo-main-content" id="content_navigator">
                <div role="main" class="amberd-woo-product-list-full-width">
                    <div class="woocommerce">
                        <?php woocommerce_content(); ?>
                    </div>
                </div>
                    <?php  if   ( get_theme_mod( 'amberd_woocommerce_shop_category_layout' ) != 'sidebarnone' )
                                    { get_template_part( 'template-parts/sidebar/sidebar-woo-amberd' ); } ?>
            </div>
        <?php } ?>

        <?php if ( is_product() ) { ?>
            <div class="main-woo-container <?php if (( get_theme_mod( 'amberd_woocommerce_product_pages_layout' ) != 'sidebarnone' ) && ( get_theme_mod( 'amberd_woocommerce_product_pages_layout' ) == 'sidebarleft' ))
                                                    { echo esc_attr('woo-container-with-sidebar amberd-woo-main-content-sidebarleft'); } 
                                                        else if (( get_theme_mod( 'amberd_woocommerce_product_pages_layout' ) != 'sidebarnone' ) && ( get_theme_mod( 'amberd_woocommerce_product_pages_layout' ) != 'sidebarleft' )) 
                                                            { echo esc_attr('woo-container-with-sidebar'); } 
                                                                ?> amberd-woo-main-content" id="content_navigator">
                <div role="main" class="<?php  if ( get_theme_mod( 'amberd_woocommerce_product_pages_layout' ) == 'sidebarnone' ) { echo esc_attr('amberd-woo-product-list-full-width'); } else { echo esc_attr('amberd-woo-product-list-with-sidebar'); } ?>">
                    <div class="woocommerce">
                        <?php woocommerce_content(); ?>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
<?php get_footer(); ?>