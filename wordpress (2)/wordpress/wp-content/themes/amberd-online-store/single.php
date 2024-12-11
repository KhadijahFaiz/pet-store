<?php get_header();
        while(have_posts()) {
            the_post(); 
?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
        <div class="page-banner">
            <div class="<?php if (empty(get_theme_mod( 'amberd_single_post_banner_gradient_color' ))) 
                            { echo esc_attr( 'amberd-post-banner__bg' ); } 
                                else { echo esc_attr('amberd-post-banner__bg-gradient'); } ?>">
            </div>
            <div class="container <?php if ( get_theme_mod( 'amberd_single_post_banner_width' ) == 'narrow' ) { echo esc_attr('amberd-banner-narrow-container'); } ?>">
                    <div class="post-banner-content"><h1 class="post-banner__title"><?php the_title(); ?></h1>
                        <p class="amberd-banner-entry-text"><?php echo esc_html__('By ', 'amberd-online-store'); ?><span class="amberd-banner-entry-meta"><?php the_author_posts_link(); ?></span><?php echo esc_html(' / '); ?> <span class="amberd-banner-entry-date"><?php esc_html(the_time('F j, Y')); ?></span><?php echo esc_html(' / '); ?><span class="amberd-banner-entry-meta"><a href="<?php comments_link(); ?>"><?php esc_attr(comments_number()); ?></a></span><?php echo esc_html(' / '); ?> <span class="amberd-banner-entry-meta"><?php echo get_the_category_list(', '); ?></span></p>
                    </div>
            </div>
        </div>

        <div class="amberd-main-container">
        <div role="main" class="container <?php if (( get_theme_mod( 'amberd_single_post_layout' ) != 'sidebarnone' ) && ( get_theme_mod( 'amberd_single_post_layout' ) == 'sidebarleft' ))
                                                    { echo esc_attr('container-with-sidebar amberd-main-content-sidebarleft'); } 
                                                else if (( get_theme_mod( 'amberd_single_post_layout' ) != 'sidebarnone' ) && ( get_theme_mod( 'amberd_single_post_layout' ) != 'sidebarleft' )) 
                                                    { echo esc_attr('container-with-sidebar'); } 
                                                ?> amberd-main-content" id="content_navigator">

            <div class="generic-content <?php if ( get_theme_mod( 'amberd_single_post_layout' ) == 'sidebarnone' ) { echo esc_attr('generic-content-full-width'); } ?>">
                <?php get_template_part( 'template-parts/content/generic-content' ); ?>
            </div>
            <?php if ( get_theme_mod( 'amberd_single_post_layout' ) != 'sidebarnone' ) { get_template_part( 'template-parts/sidebar/sidebar-default' ); } ?>
        </div>
        </div>
    
    </article>

<?php } get_footer(); ?>