<div class="wpdevart-homepage-banner-theme-fourth 
	  <?php if (empty(get_theme_mod( 'amberd_homepage_large_banner_bg_gradient_color' ))) 
			{ echo esc_attr( 'amberd-homepage-bg-color' ); } 
			else { echo esc_attr('amberd-homepage-bg-gradient-color'); } ?>" id="content_navigator">
	<div class="container-banner-theme-fourth">
		<div class="wpdevart-home-banner-theme-fourth">
			<div class="wpdevart-home-banner-one-theme-fourth">
			  <div class="amberd-banner-short-text"><?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_banner_short_description' ) );  ?></div>
			  <div class="amberd-banner-title"><?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_banner_title' ) ); ?></div>
			  <?php if ( empty(get_theme_mod( 'amberd_custom_homepage_banner_sliding_first_text' )) && empty(get_theme_mod( 'amberd_custom_homepage_banner_sliding_second_text' )) && empty(get_theme_mod( 'amberd_custom_homepage_banner_sliding_third_text' )) && empty(get_theme_mod( 'amberd_custom_homepage_banner_sliding_fourth_text' )) ) { } else { ?>

					<div class="sliding-text-container">
					  <div class="sliding-text sliding-text-theme-fourth">
						<ul>
						  <?php if (!empty(get_theme_mod( 'amberd_custom_homepage_banner_sliding_first_text' ))) { ?><li><?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_banner_sliding_first_text' ) ) ?></li><?php } ?>
						  <?php if (!empty(get_theme_mod( 'amberd_custom_homepage_banner_sliding_second_text' ))) { ?><li><?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_banner_sliding_second_text' ) ) ?></li><?php } ?>
						  <?php if (!empty(get_theme_mod( 'amberd_custom_homepage_banner_sliding_third_text' ))) { ?><li><?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_banner_sliding_third_text' ) ) ?></li><?php } ?>
						  <?php if (!empty(get_theme_mod( 'amberd_custom_homepage_banner_sliding_fourth_text' ))) { ?><li><?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_banner_sliding_fourth_text' ) ) ?></li><?php } ?>
						</ul>
					  </div>
					</div>

			  <?php } ?>
			  <div class="amberd-banner-content"><?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_banner_content' ) );  ?></div>
			  <div id="outer">
				  <?php if (get_theme_mod( 'amberd_custom_homepage_show_banner_first_button', '1' )) { } else { 
					?><div class="amberd_hover_button amberd-banner-button-one <?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_banner_first_button_style' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'amberd_custom_homepage_banner_first_button_url' ) );  ?>"><?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_banner_first_button_text' ) );  ?></a></div>
				  <?php } ?>
				  <?php if (get_theme_mod( 'amberd_custom_homepage_show_banner_second_button', '1' )) { } else { 
					?> <div class="amberd_hover_button amberd-banner-button-two <?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_banner_second_button_style' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'amberd_custom_homepage_banner_second_button_url' ) );  ?>"><?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_banner_second_button_text' ) );  ?></a></div>
				  <?php } ?>
			  </div>
			</div>
			<div class="wpdevart-banner-fourth-theme-image-container">
				<?php if ( ! get_theme_mod( 'amberd_custom_homepage_banner_image' )) { } else { ?>
					<div class="wpdevart-banner-fourth-theme-image"><img src="<?php echo esc_url( get_theme_mod( 'amberd_custom_homepage_banner_image' ) ); ?>"></div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>