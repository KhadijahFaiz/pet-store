<div class="amberd-header-container">
    <div class="amberd-main-header-section">
        <div class="amberd-logo-area">
            <div class="amberd-main-header-section-mobile-logo">
            <?php 
            if ( has_custom_logo() && is_front_page()) {
                ?><h1 class="mobile-image-logo-resizing amberd-header-logo-spaces"><a href="<?php echo esc_url(home_url()) ?>"><?php the_custom_logo() ?></a></h1><?php } 
            else if ( has_custom_logo() && !is_front_page()) {
                ?><h2 class="mobile-image-logo-resizing amberd-header-logo-spaces"><a href="<?php echo esc_url(home_url()) ?>"><?php the_custom_logo() ?></a></h2><?php }
            else if ( !has_custom_logo() && is_front_page() && get_theme_mod( 'amberd_header_logo_gradient_color' )) {
                ?><h1 class="amberd-logo-text-gradient"><a href="<?php echo esc_url(home_url()) ?>"><?php echo get_bloginfo('name') ?></a></h1><?php } 
            else if ( !has_custom_logo() && is_front_page() && empty(get_theme_mod( 'amberd_header_logo_gradient_color' ))) {
                ?><h1 class="amberd-logo-text"><a href="<?php echo esc_url(home_url()) ?>" class="amberd-logo-text-simple"><?php echo get_bloginfo('name') ?></a></h1><?php } 
            else if ( !has_custom_logo() && !is_front_page() && get_theme_mod( 'amberd_header_logo_gradient_color' )) {
                ?><h2 class="amberd-logo-text-gradient"><a href="<?php echo esc_url(home_url()) ?>"><?php echo get_bloginfo('name') ?></a></h2><?php }
            else if ( !has_custom_logo() && !is_front_page() && empty(get_theme_mod( 'amberd_header_logo_gradient_color' ))) {
                ?><h2 class="amberd-logo-text"><a href="<?php echo esc_url(home_url()) ?>" class="amberd-logo-text-simple"><?php echo get_bloginfo('name') ?></a></h2><?php }
            ?>
            </div>
        </div>
        <div class="amberd-menu-and-buttons-area">
            <div class="amberd-menu-and-buttons-container">
            <div role="navigation">
                    <nav class="navbar-amberd" id="amberdmobilemenu">
                        <div id="head-mobile" class="<?php if (empty(get_theme_mod( 'amberd_mobile_menu_bg_gradient_color' ))) 
                                            { echo esc_attr( 'head-mobile-toolbar' ); } 
                                            else { echo esc_attr('head-mobile-toolbar-gradient'); } ?>"></div>
                        <button onClick="amberdMenuToggleModal()" id="amberdOpenMenuButton" class="amberdmobilemenubutton amberd-mobile-icon-button"></button>
                            <?php
                                if ( has_nav_menu( 'primary_menu' ) ) {
                                    wp_nav_menu(
                                    array(
                                        'theme_location' => 'primary_menu',
                                        'container' => false,
                                        'walker' => new Amberd_Walker_Nav_Primary(),
                                    )
                                    );
                                }
								else {
                                wp_nav_menu(
                                    array(
                                    'theme_location' => 'primary_menu',
                                    'container' => 'ul',
                                    'menu_class'     => 'simple-navbar-amberd',
                                    'depth'                => 1,
                                    )
                                );
                                }
                            ?>
                    </nav>
            </div>
            </div>
        </div>
        <?php if ( class_exists( 'WooCommerce' ) ) { ?>
            <div class="header-cart-layout-three">
                <a class="cart-customlocation" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'amberd-online-store' ); ?>"><i class="fa fa-cart-plus amberd-woo-icon"></i><span class="custom-cart-count-layout-three"><div id="mini-cart-count"></div></span> </a>
				<?php amberd_online_store_header_cart_layout_three() ?>				
            </div>   
        <?php } ?>
    </div>
</div>   