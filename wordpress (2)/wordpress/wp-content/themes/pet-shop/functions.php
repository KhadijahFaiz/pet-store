<?php

    add_action( 'wp_enqueue_scripts', 'pet_shop_amberd_theme_css' );
    function pet_shop_amberd_theme_css() {

        wp_enqueue_style( 
            'pet_shop_amberd_css', 
            get_stylesheet_uri(),
            ( get_template_directory_uri() ) . 'style.css',
        ); 

        $childAmBerdMain = 'amberd-child-main-styles';
        wp_enqueue_style( $childAmBerdMain,
        get_stylesheet_directory_uri() . '/assets/css/front-end/index.css',
        );

        $childAmBerdWoo = 'amberd-child-woo-style';
        wp_enqueue_style( $childAmBerdWoo,
        get_stylesheet_directory_uri() . '/assets/css/front-end/amberd-woocommerce.css',
        );

    }

    ##################------ Removing Parent Theme Style Files ------##################

    function remove_amberd_main_scripts() {
        wp_dequeue_style( 'amberd_styles' );
        wp_deregister_style( 'amberd_styles' );
        wp_dequeue_style( 'amberd_woocommerce_styles' );
        wp_deregister_style( 'amberd_woocommerce_styles' );
    }
    add_action( 'wp_enqueue_scripts', 'remove_amberd_main_scripts', 11 );

    ##################------ INCLUDING DEFAULT OPTIONS ------##################

    require( get_theme_file_path() . '/inc/admin/pet-shop-add-default-options.php' );

    ##################------ INCLUDING CUSTOMIZER ------##################

    require( get_theme_file_path() . '/inc/customizer/customizer.php' );

    ##################------ DEFAULT CUSTOMIZER ------##################

    add_filter( 'parent_amberd_header_logo_text_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_header_logo_gradient_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_main_container_link_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_main_container_sidebar_link_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_header_search_button_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_header_descktop_search_button_color', 'pet_shop_amberd_customizer_default_main_color' );	
    add_filter( 'parent_amberd_header_mobile_menu_button_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_main_header_mobile_sub_menu_button_bg_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_woocommerce_cart_icon_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_top_header_border_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_single_post_banner_entry_link_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_single_page_banner_entry_link_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_comments_reply_box_link_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_comments_reply_button_bg_hover_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_blog_settings_metas_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_pagination_buttons_link_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_pagination_buttons_bg_hover_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_custom_homepage_banner_title_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_custom_homepage_latest_posts_title_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_custom_homepage_banner_short_description_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_woo_primary_button_bg_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_woo_primary_button_link_hover_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_woocommerce_link_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_woo_pagination_buttons_link_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_woo_pagination_buttons_bg_hover_color', 'pet_shop_amberd_customizer_default_main_color' );
	add_filter( 'parent_amberd_main_header_sub_menu_top_border_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_blog_settings_title_border_color', 'pet_shop_amberd_customizer_default_main_color' );
    add_filter( 'parent_amberd_blog_settings_title_hover_color', 'pet_shop_amberd_customizer_default_main_color' );	
    function pet_shop_amberd_customizer_default_main_color(){
        return '#ff6b35';
    }

    add_filter( 'parent_amberd_primary_button_bg_color', 'pet_shop_amberd_customizer_default_second_color' );
    add_filter( 'parent_amberd_primary_button_link_hover_color', 'pet_shop_amberd_customizer_default_second_color' );
    add_filter( 'parent_amberd_top_header_social_icons_bg_color', 'pet_shop_amberd_customizer_default_second_color' );
    add_filter( 'parent_amberd_comments_reply_button_bg_color', 'pet_shop_amberd_customizer_default_second_color' );
    add_filter( 'parent_amberd_blog_settings_meta_icons_color', 'pet_shop_amberd_customizer_default_second_color' );
    function pet_shop_amberd_customizer_default_second_color(){
        return '#528e9c';
    }

    add_filter( 'parent_amberd_main_container_heading_color', 'pet_shop_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_main_container_sidebar_heading_color', 'pet_shop_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_top_header_text_color', 'pet_shop_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_header_menu_items_color', 'pet_shop_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_comments_reply_box_heading_color', 'pet_shop_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_blog_settings_title_color', 'pet_shop_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_custom_homepage_banner_sliding_text_color', 'pet_shop_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_custom_homepage_banner_content_color', 'pet_shop_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_call_action_text_color', 'pet_shop_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_main_header_mobile_menu_link_color', 'pet_shop_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_single_post_banner_title_color', 'pet_shop_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_single_page_banner_title_color', 'pet_shop_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_archive_banner_title_color', 'pet_shop_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_search_banner_title_color', 'pet_shop_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_woocommerce_heading_color', 'pet_shop_amberd_customizer_default_third_color' );
    add_filter( 'parent_amberd_main_header_mobile_menu_border_color', 'pet_shop_amberd_customizer_default_third_color' );
    function pet_shop_amberd_customizer_default_third_color(){
        return '#333333';
    }

    add_filter( 'parent_amberd_single_post_banner_gradient_color', 'pet_shop_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_single_page_banner_gradient_color', 'pet_shop_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_archive_banner_bg_gradient_color', 'pet_shop_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_search_banner_bg_gradient_color', 'pet_shop_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_homepage_large_banner_bg_gradient_color', 'pet_shop_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_single_post_banner_bg_color', 'pet_shop_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_single_page_banner_bg_color', 'pet_shop_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_archive_banner_bg_color', 'pet_shop_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_search_banner_bg_color', 'pet_shop_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_homepage_large_banner_bg_color', 'pet_shop_amberd_customizer_default_fourth_color' );
    add_filter( 'parent_amberd_header_mobile_menu_background_color', 'pet_shop_amberd_customizer_default_fourth_color' );
	add_filter( 'parent_amberd_mobile_menu_bg_gradient_color', 'pet_shop_amberd_customizer_default_fourth_color' );
    function pet_shop_amberd_customizer_default_fourth_color(){
        return '#fdfcff';
    }

    add_filter( 'parent_amberd_top_header_bg_color', 'pet_shop_amberd_customizer_default_fifth_color' );
    add_filter( 'parent_amberd_header_bg_gradient_color', 'pet_shop_amberd_customizer_default_fifth_color' );
    add_filter( 'parent_amberd_call_action_bg_color', 'pet_shop_amberd_customizer_default_fifth_color' );
    add_filter( 'parent_amberd_call_action_bg_gradient_color', 'pet_shop_amberd_customizer_default_fifth_color' );
    function pet_shop_amberd_customizer_default_fifth_color(){
        return '#fffcf7';
    }

    add_filter( 'parent_amberd_header_bg_color', 'pet_shop_amberd_customizer_default_sixth_color' );
    add_filter( 'parent_amberd_top_header_bg_gradient_color', 'pet_shop_amberd_customizer_default_sixth_color' );
    add_filter( 'parent_amberd_top_header_social_icons_color', 'pet_shop_amberd_customizer_default_sixth_color' );
    add_filter( 'parent_amberd_woocommerce_cart_icon_number_color', 'pet_shop_amberd_customizer_default_sixth_color' );
    add_filter( 'parent_amberd_blog_settings_posts_list_bg_color', 'pet_shop_amberd_customizer_default_sixth_color' );
    add_filter( 'parent_amberd_custom_homepage_latest_posts_block_color', 'pet_shop_amberd_customizer_default_sixth_color' );
    add_filter( 'parent_amberd_not_found_page_bg_color', 'pet_shop_amberd_customizer_default_sixth_color' );
    function pet_shop_amberd_customizer_default_sixth_color(){
        return '#ffffff';
    }
    
    add_filter( 'parent_amberd_single_post_banner_entry_link_hover_color', 'pet_shop_amberd_customizer_default_seventh_color' );
    add_filter( 'parent_amberd_single_page_banner_entry_link_hover_color', 'pet_shop_amberd_customizer_default_seventh_color' );
    add_filter( 'parent_amberd_main_container_link_hover_color', 'pet_shop_amberd_customizer_default_seventh_color' );
    add_filter( 'parent_amberd_main_container_sidebar_link_hover_color', 'pet_shop_amberd_customizer_default_seventh_color' );
    add_filter( 'parent_amberd_woocommerce_link_hover_color', 'pet_shop_amberd_customizer_default_seventh_color' );	
    add_filter( 'parent_amberd_woocommerce_sidebar_link_hover_color', 'pet_shop_amberd_customizer_default_seventh_color' );
    add_filter( 'parent_amberd_comments_reply_box_link_hover_color', 'pet_shop_amberd_customizer_default_seventh_color' );
    add_filter( 'amberd_blog_settings_metas_hover_color', 'pet_shop_amberd_customizer_default_seventh_color' );	
    function pet_shop_amberd_customizer_default_seventh_color(){
        return '#ce3547';
    }
    
    add_filter( 'parent_amberd_pagination_buttons_text_color', 'pet_shop_amberd_customizer_default_eighth_color' );
    add_filter( 'parent_amberd_pagination_buttons_text_hover_color', 'pet_shop_amberd_customizer_default_eighth_color' );
    add_filter( 'parent_amberd_woo_pagination_buttons_text_color', 'pet_shop_amberd_customizer_default_eighth_color' );
    add_filter( 'parent_amberd_woo_pagination_buttons_text_hover_color', 'pet_shop_amberd_customizer_default_eighth_color' );
    function pet_shop_amberd_customizer_default_eighth_color(){
        return '#a8a8a8';
    }
	
    add_filter( 'parent_amberd_woocommerce_rating_color', 'pet_shop_amberd_customizer_default_ninth_color' );	
    function pet_shop_amberd_customizer_default_ninth_color(){
        return '#f4a71d';
    }
	
    add_filter( 'parent_amberd_premium_features_url', 'pet_shop_amberd_customizer_pro_link' );
    function pet_shop_amberd_customizer_pro_link(){
        return 'https://wpdevart.com/wordpress-pet-shop-theme';
    }
	
	add_filter( 'parent_amberd_child_wordpress_support_url', 'pet_shop_amberd_wordpress_support_url' );
	function pet_shop_amberd_wordpress_support_url(){
		return 'https://wordpress.org/support/theme/pet-shop/';
	}
	
	add_filter( 'parent_amberd_child_demo_url', 'pet_shop_amberd_demo_url' );
	function pet_shop_amberd_demo_url(){
		return 'https://petshop.wpdevart.com/';
	}

    ##################------ CHILD FEATURES ------##################

    function amberd_pet_shop_theme_features() {
        register_nav_menu('primary_menu', esc_html__( 'Primary Menu', 'pet-shop'));
        load_theme_textdomain( 'pet-shop', get_template_directory() . '/languages' ); 
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

    add_action('after_setup_theme', 'amberd_pet_shop_theme_features');

    ##################------ REGISTERING CHILD WIDGETS ------##################

    function amberd_pet_shop_widgets_init() {
        $defaults = array(
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_blog_sidebar',
            'name'        => esc_html__( 'Blog Sidebar', 'pet-shop'),
            'description' => esc_html__( 'Default sidebar for blog/archive and post/page.', 'pet-shop'),
        ) ) );	
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_footer_large_widget',
            'name'        => esc_html__( 'Footer Large Widget', 'pet-shop'),
            'description' => esc_html__( 'Large footer widget.', 'pet-shop'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_footer_widget_01',
            'name'        => esc_html__( 'Footer Widget 1', 'pet-shop'),
            'description' => esc_html__( 'A regular footer widget.', 'pet-shop'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_footer_widget_02',
            'name'        => esc_html__( 'Footer Widget 2', 'pet-shop'),
            'description' => esc_html__( 'A regular footer widget.', 'pet-shop'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_footer_widget_03',
            'name'        => esc_html__( 'Footer Widget 3', 'pet-shop'),
            'description' => esc_html__( 'A regular footer widget.', 'pet-shop'),
        ) ) );
        register_sidebar( array_merge( $defaults, array(
            'id'          => 'amberd_footer_widget_04',
            'name'        => esc_html__( 'Footer Widget 4', 'pet-shop'),
            'description' => esc_html__( 'A regular footer widget.', 'pet-shop'),
        ) ) );
    }
    add_action( 'widgets_init', 'amberd_pet_shop_widgets_init' );