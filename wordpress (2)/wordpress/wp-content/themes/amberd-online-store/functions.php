<?php

    function amberd_files() {
        wp_enqueue_style('amberd_styles', get_template_directory_uri() . '/assets/css/front-end/index.css');
        wp_enqueue_style('amberd-font-awesome', get_template_directory_uri().'/assets/icons/font-awesome/css/font-awesome.min.css');
        wp_enqueue_style( 'amberd-theme-fonts', amberd_enqueue_fonts_url(), array(), null );
        wp_enqueue_script('amberd-js', get_template_directory_uri() . '/assets/js/front-end/index.js', array('jquery'), '1.0', true);
        wp_enqueue_script('amberd-search-js', get_template_directory_uri() . '/assets/js/front-end/search.js', array('jquery'), '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'amberd_files');

    function amberd_theme_features() {
        register_nav_menu('primary_menu', esc_html__( 'Primary Menu', 'amberd-online-store'));
        load_theme_textdomain( 'amberd-online-store', get_template_directory() . '/languages' ); 
        add_theme_support( 'custom-logo' );
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('wp-block-styles');
        add_theme_support('widgets');
        add_theme_support('widgets-block-editor');
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( "responsive-embeds" );
        add_theme_support( "align-wide" );
        add_editor_style( 'editor-style.css' );
        add_theme_support('woocommerce');
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }

    add_action('after_setup_theme', 'amberd_theme_features');

    ##################------ INCLUDING CUSTOM CSS ------##################
    
    require( get_template_directory() . '/assets/css/admin/amberd-theme-styles.php' );
    
    ##################------ INCLUDING DEFAULT OPTIONS ------##################

    require( get_template_directory() . '/inc/admin/amberd-add-default-options.php' );

    ##################------ INCLUDING CUSTOMIZER ------##################

    require( get_template_directory() . '/inc/customizer/customizer.php' );

    ##################------ INCLUDING FONTS ------##################

    require( get_template_directory() . '/inc/front-end/amberd-fonts.php' );

    ##################------ INCLUDING MENU FILE ------##################
    require( get_template_directory() . '/inc/front-end/walker.php' );
	
    ##################------ INCLUDING GETTING STARTED NOTICE ------##################

    require( get_template_directory() . '/inc/getting-started/getting-started.php' );

    ##################------ INCLUDING THEME PAGE ------##################

    require( get_template_directory() . '/inc/getting-started/theme-page.php' );

    ##################------ INCLUDING WOOCOMMERCE ------##################
    if ( class_exists( 'WooCommerce' ) ) {
        require( get_template_directory() . '/inc/front-end/woocommerce-amberd.php' );
    }
  
    ##################------ Logo ------##################

    function amberd_custom_logo_setup() {
        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        );
        add_theme_support( 'custom-logo', $defaults );
    }
    add_action( 'after_setup_theme', 'amberd_custom_logo_setup' );

    ##################------ REGISTERING WIDGETS ------##################

    function amberd_widgets_init() {
        $defaults = array(
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_blog_sidebar',
            'name'        => esc_html__( 'Blog Sidebar', 'amberd-online-store'),
            'description' => esc_html__( 'Default sidebar for blog/archive and post/page.', 'amberd-online-store'),
        ) ) );	
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_footer_large_widget',
            'name'        => esc_html__( 'Footer Large Widget', 'amberd-online-store'),
            'description' => esc_html__( 'Large footer widget.', 'amberd-online-store'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_footer_widget_01',
            'name'        => esc_html__( 'Footer Widget 1', 'amberd-online-store'),
            'description' => esc_html__( 'A regular footer widget.', 'amberd-online-store'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_footer_widget_02',
            'name'        => esc_html__( 'Footer Widget 2', 'amberd-online-store'),
            'description' => esc_html__( 'A regular footer widget.', 'amberd-online-store'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_footer_widget_03',
            'name'        => esc_html__( 'Footer Widget 3', 'amberd-online-store'),
            'description' => esc_html__( 'A regular footer widget.', 'amberd-online-store'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_footer_widget_04',
            'name'        => esc_html__( 'Footer Widget 4', 'amberd-online-store'),
            'description' => esc_html__( 'A regular footer widget.', 'amberd-online-store'),
        ) ) );
    }
    add_action( 'widgets_init', 'amberd_widgets_init' );