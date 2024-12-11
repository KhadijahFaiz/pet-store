<div class="amberd-header-container">
        <div class="amberd-main-header-section-layouttwo">
			<div class="amberd-logo-area-layouttwo">
				<?php
				if ( has_custom_logo() && is_front_page()) {
					?><h1 class="amberd-header-logo-spaces-layouttwo"><a href="<?php echo esc_url(home_url()) ?>"><?php the_custom_logo() ?></a></h1><?php } 
				else if ( has_custom_logo() && !is_front_page()) {
					?><h2 class="amberd-header-logo-spaces-layouttwo"><a href="<?php echo esc_url(home_url()) ?>"><?php the_custom_logo() ?></a></h2><?php }
				else if ( !has_custom_logo() && is_front_page() && get_theme_mod( 'amberd_header_logo_gradient_color' )) {
					?><h1 class="amberd-logo-text-layouttwo-gradient"><a href="<?php echo esc_url(home_url()) ?>"><?php echo get_bloginfo('name') ?></a></h1><?php } 
				else if ( !has_custom_logo() && is_front_page() && empty(get_theme_mod( 'amberd_header_logo_gradient_color' ))) {
					?><h1 class="amberd-logo-text-layouttwo"><a href="<?php echo esc_url(home_url()) ?>" class="amberd-logo-text-layouttwo-simple"><?php echo get_bloginfo('name') ?></a></h1><?php } 
				else if ( !has_custom_logo() && !is_front_page() && get_theme_mod( 'amberd_header_logo_gradient_color' )) {
					?><h2 class="amberd-logo-text-layouttwo-gradient"><a href="<?php echo esc_url(home_url()) ?>"><?php echo get_bloginfo('name') ?></a></h2><?php }
				else if ( !has_custom_logo() && !is_front_page() && empty(get_theme_mod( 'amberd_header_logo_gradient_color' ))) {
					?><h2 class="amberd-logo-text-layouttwo"><a href="<?php echo esc_url(home_url()) ?>" class="amberd-logo-text-layouttwo-simple"><?php echo get_bloginfo('name') ?></a></h2><?php }
				?>
			</div>
        </div>
        <?php if (get_theme_mod( 'amberd_header_show_action_button', '1' )) { } else { ?>
        <div class="header-action-button-mobile-area-layouttwo">
        <div class="amberd_hover_button_small amberd-header-action-button <?php echo esc_attr( get_theme_mod( 'amberd_header_action_button_style' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'amberd_header_action_button_url' ) );  ?>"><?php echo esc_html( get_theme_mod( 'amberd_header_action_button_text' ) );  ?></a></div>
        </div>
        <?php } ?>
        <div class="amberd-menu-and-buttons-container-layouttwo">
        <div role="navigation" class="nav-container">
                <div class="amberd-search-button-icon-mobile">
                <button onClick="amberdToggleModalSmall()" type="button" id="amberdsmallsearchbutton" class="site-header__search-trigger search-menu-buttons"><i class="fa fa-search site-header-font-cursor" aria-hidden="true"></i></button>
                </div>
				<nav class="navbar-amberd navbar-amberd-float" id="amberdmobilemenu">
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
        <div class="amberd-search-and-button-container-layouttwo">
            <?php if ( class_exists( 'WooCommerce' ) ) { ?>
                    <div class="header-cart-layout-two">
                        <a class="cart-customlocation" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'amberd-online-store' ); ?>"><i class="fa fa-cart-plus amberd-woo-icon"></i><span class="custom-cart-count-layout-two"><div id="mini-cart-count"></div></span> </a>
						<?php amberd_online_store_header_cart_layout_two() ?>
                    </div>   
            <?php } ?>
            <button onClick="amberdToggleModal()" type="button" id="amberdwidesearchbutton" class="search-trigger search-menu-buttons"><i class="fa fa-search" aria-hidden="true"></i></button>
            <?php if (get_theme_mod( 'amberd_header_show_action_button', '1' )) { } else { ?>
                <div class="header-action-button-area-layouttwo">
                <div class="amberd_hover_button_small amberd-header-action-button <?php echo esc_attr( get_theme_mod( 'amberd_header_action_button_style' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'amberd_header_action_button_url' ) );  ?>"><?php echo esc_html( get_theme_mod( 'amberd_header_action_button_text' ) );  ?></a></div>
                </div>
            <?php } ?>
    </div>
    </div>
</div>