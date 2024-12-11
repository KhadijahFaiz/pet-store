<?php get_header(); ?>

  <div class="amberd-not-found-page-content">

        <div class="amberd-not-found-page-image-container">
            <?php if (!empty(get_theme_mod( 'amberd_not_found_image' ))) { ?><div class="amberd-not-found-page-image"><img src="<?php echo esc_url( get_theme_mod( 'amberd_not_found_image' ) ); ?>"></div> <?php } ?>
        </div>

        <div class="amberd-not-found-content-elements" id="content_navigator"><h1 class="amberd-not-found-titile"><?php echo esc_html( get_theme_mod( 'amberd_not_found_page_title' ) ); ?></h1></div>
        <div class="amberd-not-found-content-elements"><p class="amberd-not-found-desc"><?php echo esc_html( get_theme_mod( 'amberd_not_found_page_description' ) );  ?></p></div>
        <div class="amberd-not-found-content-elements">
            <div class="amberd_hover_button <?php echo esc_attr( get_theme_mod( 'amberd_not_found_page_button_style' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'amberd_not_found_page_button_url' ) );  ?>"><?php echo esc_html( get_theme_mod( 'amberd_not_found_page_button_text' ) );  ?></a></div>
        </div>
  </div>

<?php get_footer(); ?>