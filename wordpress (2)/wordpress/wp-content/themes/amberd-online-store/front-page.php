<?php get_header(); 
  if ( get_option('show_on_front') == 'posts' && is_home() && is_front_page() && get_theme_mod( 'amberd_custom_homepage_display_option' ) == '1' ) {
    ?>
	
	<?php 
	  if ( !get_theme_mod( 'amberd_online_store_custom_homepage_banner_theme' ) OR (get_theme_mod( 'amberd_online_store_custom_homepage_banner_theme' ) == 'banner-first-theme' ))  {
		get_template_part( 'template-parts/partials/custom-homepage/banner/banner-first-theme' );
	  } 
	  elseif ( get_theme_mod( 'amberd_online_store_custom_homepage_banner_theme' ) == 'banner-second-theme') {
		get_template_part( 'template-parts/partials/custom-homepage/banner/banner-second-theme' );
	  } 
    ?>

    <?php if (get_theme_mod( 'amberd_custom_homepage_hide_call_action', '1' )) { } else { ?> 
            <div class="amberd-homepage-title-description">   
                <div class="amberd-custom-desctiption"><?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_call_action_desc' ) ); ?></div>
                <div class="amberd-custom-title"><h3 class="amberd-custom-title-content"><?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_call_action_title' ) ); ?></h3></div>
            </div>
            <div class="<?php if (empty(get_theme_mod( 'amberd_call_action_bg_gradient_color' ))) 
                        { echo esc_attr( 'amberd-action-section-bg' ); } 
                        else { echo esc_attr('amberd-action-section-bg-gradient'); } ?>">
                <div class="amberd-action-section group">
                    <div class="amberd-action-text-content">
                            <h2 class="amberd-action-text-content-font"><?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_call_action_text' ) ); ?></h2> 
                    </div>
                    <div class="amberd-action-button-content">
                    <p class="amberd_hover_button <?php echo esc_attr( get_theme_mod( 'amberd_custom_homepage_call_action_button_style' ) ); ?>"><a href="<?php echo esc_url( get_theme_mod( 'amberd_custom_homepage_call_action_button_url' ) );  ?>"><?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_call_action_button_text' ) );  ?></a></p>
                    </div>
                </div>
            </div>
    <?php }; ?>
 
    <?php if (get_theme_mod( 'amberd_custom_homepage_hide_latest_post_section', '1' )) { } else { ?> 
          <div class="amberd-homepage-title-description">   
                <div class="amberd-custom-desctiption"><?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_latest_post_desctiption' ) ); ?></div>
                <div class="amberd-custom-title"><h3 class="amberd-custom-title-content"><?php echo esc_html( get_theme_mod( 'amberd_custom_homepage_latest_post_title' ) ); ?></h3></div>
          </div>

          <div class="amberd-homepage-posts-section">
          <div class="amberd-homepage-post-container">
                <?php 
                $the_query = new WP_Query( array (
                'posts_per_page' => esc_html( get_theme_mod( 'amberd_custom_homepage_number_of_latest_posts' ) ),
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DESC',
                'post__not_in' => get_option( 'sticky_posts' )
                ));
                if ( $the_query->have_posts() ) :
                  while ( $the_query->have_posts() ) : $the_query->the_post();
                ?>

                <div class="amberd-homepage-posts-content">
                <?php if (has_post_thumbnail() ){
                ?> 

                    <div class="amberd-images-hover-effect"><a href="<?php the_permalink(); ?>"> <div class="<?php echo esc_attr( get_theme_mod( 'amberd_posts_list_images_hover_effect' ) ); ?>"><img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" /></div></a></div>
                <?php }  ?>      
                        <div class="amberd-posts-list-title"><h5 class="amberd-home-latest-post-title"><a href="<?php the_permalink(); ?>">
                        <?php if( empty( $post->post_title ) ) { echo esc_html__( 'No Title', 'amberd-online-store'); } else { echo esc_html(wp_trim_words(get_the_title(), 3)); } ?>
                        </a></h5></div>
                        <div class="amberd-home-latest-post-text"><p><?php echo esc_html(wp_trim_words(get_the_content(), 20)); ?></p></div>
                </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                <?php 
                ?>
            
                <?php else : ?>
                <div class="amberd-homepage-posts-content">
                      <div><a href="<?php echo esc_url( home_url( 'wp-admin/post-new.php' ) ); ?>"> <div class="<?php echo esc_attr( get_theme_mod( 'amberd_posts_list_images_hover_effect' ) ); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/images/banner-homepage-image.jpg')); ?>" /></div></a></div>
                      <div class="amberd-posts-list-title"><h5 class="amberd-home-latest-post-title"><a href="<?php echo esc_url( home_url( 'wp-admin/post-new.php' ) ); ?>"><?php echo esc_html__('Demo Post', 'amberd-online-store'); ?></a></h5></div>
                      <div class="amberd-home-latest-post-text"><p><?php echo esc_html__( 'These are just demo posts. Once you add your first post, this demo content will simply disappear.', 'amberd-online-store'); ?></p></div>
                </div>
                <div class="amberd-homepage-posts-content">
                      <div><a href="<?php echo esc_url( home_url( 'wp-admin/post-new.php' ) ); ?>"> <div class="<?php echo esc_attr( get_theme_mod( 'amberd_posts_list_images_hover_effect' ) ); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/images/banner-homepage-image.jpg')); ?>" /></div></a></div>
                      <div class="amberd-posts-list-title"><h5 class="amberd-home-latest-post-title"><a href="<?php echo esc_url( home_url( 'wp-admin/post-new.php' ) ); ?>"><?php echo esc_html__('Demo Post', 'amberd-online-store'); ?></a></h5></div>
                      <div class="amberd-home-latest-post-text"><p><?php echo esc_html__( 'These are just demo posts. Once you add your first post, this demo content will simply disappear.', 'amberd-online-store'); ?></p></div>
                </div>
                <div class="amberd-homepage-posts-content">
                      <div><a href="<?php echo esc_url( home_url( 'wp-admin/post-new.php' ) ); ?>"> <div class="<?php echo esc_attr( get_theme_mod( 'amberd_posts_list_images_hover_effect' ) ); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/images/banner-homepage-image.jpg')); ?>" /></div></a></div>
                      <div class="amberd-posts-list-title"><h5 class="amberd-home-latest-post-title"><a href="<?php echo esc_url( home_url( 'wp-admin/post-new.php' ) ); ?>"><?php echo esc_html__('Demo Post', 'amberd-online-store'); ?></a></h5></div>
                      <div class="amberd-home-latest-post-text"><p><?php echo esc_html__( 'These are just demo posts. Once you add your first post, this demo content will simply disappear.', 'amberd-online-store'); ?></p></div>
                </div>
                <?php endif; ?>
                </div>
          </div>
          <?php }; ?>
          </div>    
    <?php 
    } 
    
    else if ( get_option('show_on_front') == 'posts' && is_home() && is_front_page() && get_theme_mod( 'amberd_custom_homepage_display_option' ) != '1' ) { 
      get_template_part( 'template-parts/content/content' );
    }

    else {
            while(have_posts()) {
              the_post(); 
              ?>
                  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                      <div class="page-banner">
                          <div class="amberd-page-banner__bg"></div>
                          <div class="container <?php if ( get_theme_mod( 'amberd_single_page_banner_width' ) == 'narrow' ) { echo esc_attr('amberd-banner-narrow-container'); } ?>">
                              <div class="page-banner-content"><h1 class="page-banner__title"><?php the_title(); ?></h1>
                                  <p class="amberd-banner-page-entry-text"><?php echo esc_html__('By ', 'amberd-online-store'); ?><span class="amberd-banner-page-entry-meta"><?php the_author_posts_link(); ?></span><?php echo esc_html(' /'); ?> <span class="amberd-banner-entry-date"><?php esc_html(the_time('F j, Y')); ?></span></p>
                              </div>
                          </div>
                      </div>

                      <div class="amberd-main-container">
                      <div role="main" class="container <?php if (( get_theme_mod( 'amberd_single_page_layout' ) != 'sidebarnone' ) && ( get_theme_mod( 'amberd_single_page_layout' ) == 'sidebarleft' ))
                                                    { echo esc_attr('container-with-sidebar amberd-main-content-sidebarleft'); } 
                                                else if (( get_theme_mod( 'amberd_single_page_layout' ) != 'sidebarnone' ) && ( get_theme_mod( 'amberd_single_page_layout' ) != 'sidebarleft' )) 
                                                    { echo esc_attr('container-with-sidebar'); } 
                                                ?> amberd-main-content" id="content_navigator">
                            <div class="generic-content <?php if ( get_theme_mod( 'amberd_single_page_layout' ) == 'sidebarnone' ) { echo esc_attr('generic-content-full-width'); } ?>">
                                <?php get_template_part( 'template-parts/content/generic-content' ); ?>
                            </div>
                            <?php if ( get_theme_mod( 'amberd_single_page_layout' ) != 'sidebarnone' ) { get_template_part( 'template-parts/sidebar/sidebar-default' ); } ?>
                      </div>
                      </div>
                  </article>
              <?php }
    }

get_footer(); ?>