<?php

add_action('after_switch_theme', 'register_pet_shop_amberd_theme_default_options_once');

function register_pet_shop_amberd_theme_default_options_once () {

    //* General default options
    $default = amberd_text_sanitization('Lato');
    if (!get_theme_mod('amberd_global_fonts')) {
        set_theme_mod( 'amberd_global_fonts', $default);
    }
    $default = amberd_switch_sanitization('');
    if (!get_theme_mod('amberd_enable_preloader')) {
        set_theme_mod( 'amberd_enable_preloader', $default);
    }
    $default = amberd_sanitize_integer('1');
    if (!get_theme_mod('amberd_preloader_time')) {
        set_theme_mod( 'amberd_preloader_time', $default);
    }
    $default = sanitize_hex_color('#fffcf7');
    if(!get_theme_mod('amberd_preloader_bg_color')) {
        set_theme_mod('amberd_preloader_bg_color', $default);
    }
    $default = amberd_text_sanitization('amberd-preloader-three-loader');
    if (!get_theme_mod('amberd_preloader_style')) {
        set_theme_mod( 'amberd_preloader_style', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_preloader_loader_color')) {
        set_theme_mod( 'amberd_preloader_loader_color', $default);
    }
    $default = amberd_switch_sanitization('');
    if (!get_theme_mod('amberd_enable_back_to_top')) {
        set_theme_mod( 'amberd_enable_back_to_top', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_back_to_top_bg_color')) {
        set_theme_mod( 'amberd_back_to_top_bg_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if (!get_theme_mod('amberd_back_to_top_arrow_color')) {
        set_theme_mod( 'amberd_back_to_top_arrow_color', $default);
    }
    $default = sanitize_hex_color('#528e9c');
    if (!get_theme_mod('amberd_back_to_top_bg_hover_color')) {
        set_theme_mod( 'amberd_back_to_top_bg_hover_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if (!get_theme_mod('amberd_back_to_top_arrow_hover_color')) {
        set_theme_mod( 'amberd_back_to_top_arrow_hover_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if (!get_theme_mod('amberd_main_container_bg_color')) {
        set_theme_mod( 'amberd_main_container_bg_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if (!get_theme_mod('amberd_main_container_heading_color')) {
        set_theme_mod( 'amberd_main_container_heading_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if (!get_theme_mod('amberd_main_container_text_color')) {
        set_theme_mod( 'amberd_main_container_text_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_main_container_link_color')) {
        set_theme_mod( 'amberd_main_container_link_color', $default);
    }
    $default = sanitize_hex_color('#ce3547');
    if (!get_theme_mod('amberd_main_container_link_hover_color')) {
        set_theme_mod( 'amberd_main_container_link_hover_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if (!get_theme_mod('amberd_main_container_sidebar_bg_color')) {
        set_theme_mod( 'amberd_main_container_sidebar_bg_color', $default);
    }
    $default = sanitize_hex_color('#c9c9c9');
    if (!get_theme_mod('amberd_main_container_sidebar_bg_shadow_color')) {
        set_theme_mod( 'amberd_main_container_sidebar_bg_shadow_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if (!get_theme_mod('amberd_main_container_sidebar_heading_color')) {
        set_theme_mod( 'amberd_main_container_sidebar_heading_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if (!get_theme_mod('amberd_main_container_sidebar_text_color')) {
        set_theme_mod( 'amberd_main_container_sidebar_text_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_main_container_sidebar_link_color')) {
        set_theme_mod( 'amberd_main_container_sidebar_link_color', $default);
    }
    $default = sanitize_hex_color('#ce3547');
    if (!get_theme_mod('amberd_main_container_sidebar_link_hover_color')) {
        set_theme_mod( 'amberd_main_container_sidebar_link_hover_color', $default);
    }
    $default = sanitize_hex_color('#528e9c');
    if (!get_theme_mod('amberd_primary_button_bg_color')) {
        set_theme_mod( 'amberd_primary_button_bg_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if (!get_theme_mod('amberd_primary_button_link_color')) {
        set_theme_mod( 'amberd_primary_button_link_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if (!get_theme_mod('amberd_primary_button_bg_hover_color')) {
        set_theme_mod( 'amberd_primary_button_bg_hover_color', $default);
    }
    $default = sanitize_hex_color('#528e9c');
    if (!get_theme_mod('amberd_primary_button_link_hover_color')) {
        set_theme_mod( 'amberd_primary_button_link_hover_color', $default);
    }
    $default = amberd_sanitize_integer('17');
    if(!get_theme_mod('amberd_main_container_text_font_size')) {
        set_theme_mod('amberd_main_container_text_font_size', $default);
    }
    $default = amberd_sanitize_integer('17');
    if(!get_theme_mod('amberd_main_container_link_font_size')) {
        set_theme_mod('amberd_main_container_link_font_size', $default);
    }
    $default = amberd_text_sanitization('400');
    if(!get_theme_mod('amberd_main_container_link_font_weight')) {
        set_theme_mod('amberd_main_container_link_font_weight', $default);
    }
    $default = amberd_text_sanitization('normal');
    if(!get_theme_mod('amberd_main_container_link_font_style')) {
        set_theme_mod('amberd_main_container_link_font_style', $default);
    }
    $default = amberd_sanitize_integer('45');
    if(!get_theme_mod('amberd_main_container_heading_h1_font_size')) {
        set_theme_mod('amberd_main_container_heading_h1_font_size', $default);
    }
    $default = amberd_text_sanitization('600');
    if(!get_theme_mod('amberd_main_container_heading_h1_font_weight')) {
        set_theme_mod('amberd_main_container_heading_h1_font_weight', $default);
    }
    $default = amberd_text_sanitization('normal');
    if(!get_theme_mod('amberd_main_container_heading_h1_font_style')) {
        set_theme_mod('amberd_main_container_heading_h1_font_style', $default);
    }
    $default = amberd_text_sanitization('none');
    if(!get_theme_mod('amberd_main_container_heading_h1_font_transform')) {
        set_theme_mod('amberd_main_container_heading_h1_font_transform', $default);
    }
    $default = amberd_text_sanitization('none');
    if(!get_theme_mod('amberd_main_container_heading_h1_font_decoration')) {
        set_theme_mod('amberd_main_container_heading_h1_font_decoration', $default);
    }
    $default = amberd_sanitize_integer('38');
    if(!get_theme_mod('amberd_main_container_heading_h2_font_size')) {
        set_theme_mod('amberd_main_container_heading_h2_font_size', $default);
    }
    $default = amberd_text_sanitization('600');
    if(!get_theme_mod('amberd_main_container_heading_h2_font_weight')) {
        set_theme_mod('amberd_main_container_heading_h2_font_weight', $default);
    }
    $default = amberd_text_sanitization('normal');
    if(!get_theme_mod('amberd_main_container_heading_h2_font_style')) {
        set_theme_mod('amberd_main_container_heading_h2_font_style', $default);
    }
    $default = amberd_text_sanitization('none');
    if(!get_theme_mod('amberd_main_container_heading_h2_font_transform')) {
        set_theme_mod('amberd_main_container_heading_h2_font_transform', $default);
    }
    $default = amberd_text_sanitization('none');
    if(!get_theme_mod('amberd_main_container_heading_h2_font_decoration')) {
        set_theme_mod('amberd_main_container_heading_h2_font_decoration', $default);
    }

    $default = amberd_sanitize_integer('32');
    if(!get_theme_mod('amberd_main_container_heading_h3_font_size')) {
        set_theme_mod('amberd_main_container_heading_h3_font_size', $default);
    }
    $default = amberd_text_sanitization('600');
    if(!get_theme_mod('amberd_main_container_heading_h3_font_weight')) {
        set_theme_mod('amberd_main_container_heading_h3_font_weight', $default);
    }
    $default = amberd_text_sanitization('normal');
    if(!get_theme_mod('amberd_main_container_heading_h3_font_style')) {
        set_theme_mod('amberd_main_container_heading_h3_font_style', $default);
    }
    $default = amberd_text_sanitization('none');
    if(!get_theme_mod('amberd_main_container_heading_h3_font_transform')) {
        set_theme_mod('amberd_main_container_heading_h3_font_transform', $default);
    }
    $default = amberd_text_sanitization('none');
    if(!get_theme_mod('amberd_main_container_heading_h3_font_decoration')) {
        set_theme_mod('amberd_main_container_heading_h3_font_decoration', $default);
    }
    
    $default = amberd_sanitize_integer('28');
    if(!get_theme_mod('amberd_main_container_heading_h4_font_size')) {
        set_theme_mod('amberd_main_container_heading_h4_font_size', $default);
    }
    $default = amberd_text_sanitization('600');
    if(!get_theme_mod('amberd_main_container_heading_h4_font_weight')) {
        set_theme_mod('amberd_main_container_heading_h4_font_weight', $default);
    }
    $default = amberd_text_sanitization('normal');
    if(!get_theme_mod('amberd_main_container_heading_h4_font_style')) {
        set_theme_mod('amberd_main_container_heading_h4_font_style', $default);
    }
    $default = amberd_text_sanitization('none');
    if(!get_theme_mod('amberd_main_container_heading_h4_font_transform')) {
        set_theme_mod('amberd_main_container_heading_h4_font_transform', $default);
    }
    $default = amberd_text_sanitization('none');
    if(!get_theme_mod('amberd_main_container_heading_h4_font_decoration')) {
        set_theme_mod('amberd_main_container_heading_h4_font_decoration', $default);
    }

    $default = amberd_sanitize_integer('26');
    if(!get_theme_mod('amberd_main_container_heading_h5_font_size')) {
        set_theme_mod('amberd_main_container_heading_h5_font_size', $default);
    }
    $default = amberd_text_sanitization('600');
    if(!get_theme_mod('amberd_main_container_heading_h5_font_weight')) {
        set_theme_mod('amberd_main_container_heading_h5_font_weight', $default);
    }
    $default = amberd_text_sanitization('normal');
    if(!get_theme_mod('amberd_main_container_heading_h5_font_style')) {
        set_theme_mod('amberd_main_container_heading_h5_font_style', $default);
    }
    $default = amberd_text_sanitization('none');
    if(!get_theme_mod('amberd_main_container_heading_h5_font_transform')) {
        set_theme_mod('amberd_main_container_heading_h5_font_transform', $default);
    }
    $default = amberd_text_sanitization('none');
    if(!get_theme_mod('amberd_main_container_heading_h5_font_decoration')) {
        set_theme_mod('amberd_main_container_heading_h5_font_decoration', $default);
    }

    $default = amberd_sanitize_integer('24');
    if(!get_theme_mod('amberd_main_container_heading_h6_font_size')) {
        set_theme_mod('amberd_main_container_heading_h6_font_size', $default);
    }
    $default = amberd_text_sanitization('600');
    if(!get_theme_mod('amberd_main_container_heading_h6_font_weight')) {
        set_theme_mod('amberd_main_container_heading_h6_font_weight', $default);
    }
    $default = amberd_text_sanitization('normal');
    if(!get_theme_mod('amberd_main_container_heading_h6_font_style')) {
        set_theme_mod('amberd_main_container_heading_h6_font_style', $default);
    }
    $default = amberd_text_sanitization('none');
    if(!get_theme_mod('amberd_main_container_heading_h6_font_transform')) {
        set_theme_mod('amberd_main_container_heading_h6_font_transform', $default);
    }
    $default = amberd_text_sanitization('none');
    if(!get_theme_mod('amberd_main_container_heading_h6_font_decoration')) {
        set_theme_mod('amberd_main_container_heading_h6_font_decoration', $default);
    }
	$default = sanitize_hex_color('#fffcf7');
    if (!get_theme_mod('amberd_search_overlay_top_bg_color')) {
        set_theme_mod( 'amberd_search_overlay_top_bg_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if (!get_theme_mod('amberd_search_overlay_bottom_bg_color')) {
        set_theme_mod( 'amberd_search_overlay_bottom_bg_color', $default);
    }
    $default = sanitize_hex_color('#528e9c');
    if (!get_theme_mod('amberd_search_overlay_icons_color')) {
        set_theme_mod( 'amberd_search_overlay_icons_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_search_overlay_input_border_color')) {
        set_theme_mod( 'amberd_search_overlay_input_border_color', $default);
    }
    $default = amberd_text_sanitization('amberd_tenth_button_slide tenth_btn_slide_right');
    if(!get_theme_mod('amberd_search_overlay_page_button_style')) {
        set_theme_mod('amberd_search_overlay_page_button_style', $default);
    }
	
	//* Top Header default options

    $default = amberd_switch_sanitization('');
    if (!get_theme_mod('amberd_enable_top_header')) {
        set_theme_mod( 'amberd_enable_top_header', $default);
    }
    $default = amberd_text_sanitization('phoneleft');
    if (!get_theme_mod('amberd_top_header_layout')) {
        set_theme_mod( 'amberd_top_header_layout', $default);
    }
    $default = sanitize_hex_color('#fffcf7');
    if(!get_theme_mod('amberd_top_header_bg_color')) {
        set_theme_mod('amberd_top_header_bg_color', $default);
    }
    $default = amberd_text_sanitization('to right');
    if (!get_theme_mod('amberd_top_header_gradient_type')) {
        set_theme_mod( 'amberd_top_header_gradient_type', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if(!get_theme_mod('amberd_top_header_bg_gradient_color')) {
        set_theme_mod('amberd_top_header_bg_gradient_color', $default);
    }
    $default = amberd_switch_sanitization('');
    if (!get_theme_mod('amberd_enable_top_header_border')) {
        set_theme_mod( 'amberd_enable_top_header_border', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_top_header_border_color')) {
        set_theme_mod('amberd_top_header_border_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_top_header_text_color')) {
        set_theme_mod('amberd_top_header_text_color', $default);
    }
    $default = amberd_text_sanitization('(555) 555-1234');
    if (!get_theme_mod('amberd_top_header_phone_number')) {
        set_theme_mod( 'amberd_top_header_phone_number', $default);
    }
    $default = sanitize_email('info@example.com');
    if ( !get_theme_mod('amberd_top_header_email')) {
        set_theme_mod( 'amberd_top_header_email', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if(!get_theme_mod('amberd_top_header_social_icons_color')) {
        set_theme_mod('amberd_top_header_social_icons_color', $default);
    }
    $default = sanitize_hex_color('#528e9c');
    if(!get_theme_mod('amberd_top_header_social_icons_bg_color')) {
        set_theme_mod('amberd_top_header_social_icons_bg_color', $default);
    }
    $default = amberd_switch_sanitization('');
    if (!get_theme_mod('amberd_top_header_disable_twitter')) {
        set_theme_mod( 'amberd_top_header_disable_twitter', $default);
    }
    $default = esc_url('https://twitter.com');
    if(!get_theme_mod('amberd_top_header_twitter_url')) {
        set_theme_mod('amberd_top_header_twitter_url', $default);
    }
    $default = amberd_switch_sanitization('');
    if (!get_theme_mod('amberd_top_header_disable_facebook')) {
        set_theme_mod( 'amberd_top_header_disable_facebook', $default);
    }
    $default = esc_url('https://www.facebook.com');
    if(!get_theme_mod('amberd_top_header_facebook_url')) {
        set_theme_mod('amberd_top_header_facebook_url', $default);
    }
    $default = amberd_switch_sanitization('');
    if (!get_theme_mod('amberd_top_header_disable_linkedin')) {
        set_theme_mod( 'amberd_top_header_disable_linkedin', $default);
    }
    $default = esc_url('https://www.linkedin.com');
    if(!get_theme_mod('amberd_top_header_linkedin_url')) {
        set_theme_mod('amberd_top_header_linkedin_url', $default);
    }
    $default = amberd_switch_sanitization('');
    if (!get_theme_mod('amberd_top_header_disable_youtube')) {
        set_theme_mod( 'amberd_top_header_disable_youtube', $default);
    }
    $default = esc_url('https://www.youtube.com');
    if(!get_theme_mod('amberd_top_header_youtube_url')) {
        set_theme_mod('amberd_top_header_youtube_url', $default);
    }
    $default = amberd_switch_sanitization('');
    if (!get_theme_mod('amberd_top_header_disable_instagram')) {
        set_theme_mod( 'amberd_top_header_disable_instagram', $default);
    }
    $default = esc_url('https://www.instagram.com');
    if(!get_theme_mod('amberd_top_header_instagram_url')) {
        set_theme_mod('amberd_top_header_instagram_url', $default);
    }

    //* Header default options

    $default = amberd_switch_sanitization('');
    if (!get_theme_mod('amberd_enable_sticky_header')) {
        set_theme_mod( 'amberd_enable_sticky_header', $default);
    }
    $default = amberd_switch_sanitization('');
    if (!get_theme_mod('amberd_enable_sticky_header_mobile')) {
        set_theme_mod( 'amberd_enable_sticky_header_mobile', $default);
    }
    $default = amberd_text_sanitization('headerlayoutone');
    if (!get_theme_mod('amberd_header_layout')) {
        set_theme_mod( 'amberd_header_layout', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if(!get_theme_mod('amberd_header_bg_color')) {
        set_theme_mod('amberd_header_bg_color', $default);
    }
    $default = amberd_text_sanitization('to right');
    if (!get_theme_mod('amberd_header_gradient_type')) {
        set_theme_mod( 'amberd_header_gradient_type', $default);
    }
    $default = sanitize_hex_color('#fffcf7');
    if(!get_theme_mod('amberd_header_bg_gradient_color')) {
        set_theme_mod('amberd_header_bg_gradient_color', $default);
    }
    $default = amberd_sanitize_integer('80');
    if(!get_theme_mod('amberd_header_logo_max_height')) {
        set_theme_mod('amberd_header_logo_max_height', $default);
    }
    $default = amberd_sanitize_integer('100');
    if(!get_theme_mod('amberd_header_logo_mobile_max_height')) {
        set_theme_mod('amberd_header_logo_mobile_max_height', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_header_logo_text_color')) {
        set_theme_mod('amberd_header_logo_text_color', $default);
    }
    $default = amberd_text_sanitization('to right');
    if (!get_theme_mod('amberd_header_logo_gradient_type')) {
        set_theme_mod( 'amberd_header_logo_gradient_type', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_header_logo_gradient_color')) {
        set_theme_mod('amberd_header_logo_gradient_color', $default);
    }
    $default = amberd_sanitize_integer('35');
    if(!get_theme_mod('amberd_header_logo_font_size')) {
        set_theme_mod('amberd_header_logo_font_size', $default);
    }
    $default = amberd_text_sanitization('600');
    if(!get_theme_mod('amberd_header_logo_font_weight')) {
        set_theme_mod('amberd_header_logo_font_weight', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_header_menu_items_color')) {
        set_theme_mod('amberd_header_menu_items_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if(!get_theme_mod('amberd_main_header_sub_menu_bg_color')) {
        set_theme_mod('amberd_main_header_sub_menu_bg_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_main_header_sub_menu_items_color')) {
        set_theme_mod('amberd_main_header_sub_menu_items_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_main_header_sub_menu_top_border_color')) {
        set_theme_mod('amberd_main_header_sub_menu_top_border_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_header_mobile_menu_button_color')) {
        set_theme_mod('amberd_header_mobile_menu_button_color', $default);
    }
    $default = sanitize_hex_color('#fdfcff');
    if(!get_theme_mod('amberd_header_mobile_menu_background_color')) {
        set_theme_mod('amberd_header_mobile_menu_background_color', $default);
    }
    $default = amberd_text_sanitization('to right');
    if (!get_theme_mod('amberd_mobile_menu_bg_gradient_type')) {
        set_theme_mod( 'amberd_mobile_menu_bg_gradient_type', $default);
    }
    $default = sanitize_hex_color('#fdfcff');
    if(!get_theme_mod('amberd_mobile_menu_bg_gradient_color')) {
        set_theme_mod('amberd_mobile_menu_bg_gradient_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if(!get_theme_mod('amberd_main_header_mobile_menu_background_color')) {
        set_theme_mod('amberd_main_header_mobile_menu_background_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_main_header_mobile_menu_link_color')) {
        set_theme_mod('amberd_main_header_mobile_menu_link_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_main_header_mobile_menu_border_color')) {
        set_theme_mod('amberd_main_header_mobile_menu_border_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_main_header_mobile_sub_menu_button_bg_color')) {
        set_theme_mod( 'amberd_main_header_mobile_sub_menu_button_bg_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if(!get_theme_mod('amberd_main_header_mobile_sub_menu_button_color')) {
        set_theme_mod('amberd_main_header_mobile_sub_menu_button_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_header_search_button_color')) {
        set_theme_mod('amberd_header_search_button_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_header_descktop_search_button_color')) {
        set_theme_mod('amberd_header_descktop_search_button_color', $default);
    }
    $default = amberd_switch_sanitization('');
    if(!get_theme_mod('amberd_header_show_action_button')) {
        set_theme_mod('amberd_header_show_action_button', $default);
    }
    $default = amberd_text_sanitization('Join Us');
    if(!get_theme_mod('amberd_header_action_button_text')) {
        set_theme_mod('amberd_header_action_button_text', $default);
    }
    $default = esc_url('#');
    if(!get_theme_mod('amberd_header_action_button_url')) {
        set_theme_mod('amberd_header_action_button_url', $default);
    }
    $default = amberd_text_sanitization('amberd_ninth_button_slide ninth_btn_slide_right');
    if(!get_theme_mod('amberd_header_action_button_style')) {
        set_theme_mod('amberd_header_action_button_style', $default);
    }

    //* Single post default options

    $default = amberd_text_sanitization('narrow');
    if(!get_theme_mod('amberd_single_post_banner_width')) {
        set_theme_mod('amberd_single_post_banner_width', $default);
    }
    $default = amberd_text_sanitization('center');
    if(!get_theme_mod('amberd_single_post_title_alignment')) {
        set_theme_mod('amberd_single_post_title_alignment', $default);
    }
    $default = sanitize_hex_color('#fdfcff');
    if(!get_theme_mod('amberd_single_post_banner_bg_color')) {
        set_theme_mod('amberd_single_post_banner_bg_color', $default);
    }
    $default = amberd_text_sanitization('to right');
    if (!get_theme_mod('amberd_single_post_banner_gradient_type')) {
        set_theme_mod( 'amberd_single_post_banner_gradient_type', $default);
    }
    $default = sanitize_hex_color('#fdfcff');
    if(!get_theme_mod('amberd_single_post_banner_gradient_color')) {
        set_theme_mod('amberd_single_post_banner_gradient_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_single_post_banner_title_color')) {
        set_theme_mod('amberd_single_post_banner_title_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_single_post_banner_entry_text_color')) {
        set_theme_mod('amberd_single_post_banner_entry_text_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_single_post_banner_entry_link_color')) {
        set_theme_mod('amberd_single_post_banner_entry_link_color', $default);
    }
    $default = sanitize_hex_color('#ce3547');
    if(!get_theme_mod('amberd_single_post_banner_entry_link_hover_color')) {
        set_theme_mod('amberd_single_post_banner_entry_link_hover_color', $default);
    }
    $default = amberd_text_sanitization('sidebarright');
    if (!get_theme_mod('amberd_single_post_layout')) {
        set_theme_mod( 'amberd_single_post_layout', $default);
    }
    $default = amberd_switch_sanitization('');
    if(!get_theme_mod('amberd_post_banner_animations_display_option')) {
        set_theme_mod('amberd_post_banner_animations_display_option', $default);
    }
    $default = sanitize_hex_color('#ddbcff');
    if (!get_theme_mod('amberd_post_banner_animations_el_circle_color')) {
        set_theme_mod( 'amberd_post_banner_animations_el_circle_color', $default);
    }
    $default = sanitize_hex_color('#fba5a1');
    if (!get_theme_mod('amberd_post_banner_animations_el1_color')) {
        set_theme_mod( 'amberd_post_banner_animations_el1_color', $default);
    }
    $default = sanitize_hex_color('#a995fd');
    if (!get_theme_mod('amberd_post_banner_animations_el2_color')) {
        set_theme_mod( 'amberd_post_banner_animations_el2_color', $default);
    }
    $default = sanitize_hex_color('#ddbcff');
    if (!get_theme_mod('amberd_post_banner_animations_el3_color')) {
        set_theme_mod( 'amberd_post_banner_animations_el3_color', $default);
    }

    //* Single page default options  

    $default = amberd_text_sanitization('narrow');
    if(!get_theme_mod('amberd_single_page_banner_width')) {
        set_theme_mod('amberd_single_page_banner_width', $default);
    }
    $default = amberd_text_sanitization('center');
    if(!get_theme_mod('amberd_single_page_title_alignment')) {
        set_theme_mod('amberd_single_page_title_alignment', $default);
    }
    $default = sanitize_hex_color('#fdfcff');
    if(!get_theme_mod('amberd_single_page_banner_bg_color')) {
        set_theme_mod('amberd_single_page_banner_bg_color', $default);
    }
    $default = amberd_text_sanitization('to right');
    if (!get_theme_mod('amberd_single_page_banner_gradient_type')) {
        set_theme_mod( 'amberd_single_page_banner_gradient_type', $default);
    }
    $default = sanitize_hex_color('#fdfcff');
    if(!get_theme_mod('amberd_single_page_banner_gradient_color')) {
        set_theme_mod('amberd_single_page_banner_gradient_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_single_page_banner_title_color')) {
        set_theme_mod('amberd_single_page_banner_title_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_single_page_banner_entry_text_color')) {
        set_theme_mod('amberd_single_page_banner_entry_text_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_single_page_banner_entry_link_color')) {
        set_theme_mod('amberd_single_page_banner_entry_link_color', $default);
    }
    $default = sanitize_hex_color('#ce3547');
    if(!get_theme_mod('amberd_single_page_banner_entry_link_hover_color')) {
        set_theme_mod('amberd_single_page_banner_entry_link_hover_color', $default);
    }
    $default = amberd_text_sanitization('sidebarnone');
    if (!get_theme_mod('amberd_single_page_layout')) {
        set_theme_mod( 'amberd_single_page_layout', $default);
    }
    $default = amberd_switch_sanitization('');
    if(!get_theme_mod('amberd_page_banner_animations_display_option')) {
        set_theme_mod('amberd_page_banner_animations_display_option', $default);
    }
    $default = sanitize_hex_color('#ddbcff');
    if (!get_theme_mod('amberd_page_banner_animations_el_circle_color')) {
        set_theme_mod( 'amberd_page_banner_animations_el_circle_color', $default);
    }
    $default = sanitize_hex_color('#fba5a1');
    if (!get_theme_mod('amberd_page_banner_animations_el1_color')) {
        set_theme_mod( 'amberd_page_banner_animations_el1_color', $default);
    }
    $default = sanitize_hex_color('#a995fd');
    if (!get_theme_mod('amberd_page_banner_animations_el2_color')) {
        set_theme_mod( 'amberd_page_banner_animations_el2_color', $default);
    }
    $default = sanitize_hex_color('#ddbcff');
    if (!get_theme_mod('amberd_page_banner_animations_el3_color')) {
        set_theme_mod( 'amberd_page_banner_animations_el3_color', $default);
    }
	
    //* Comments

    $default = sanitize_hex_color('#fcfcff');
    if (!get_theme_mod('amberd_comments_reply_box_bg_color')) {
        set_theme_mod( 'amberd_comments_reply_box_bg_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if (!get_theme_mod('amberd_comments_reply_box_text_color')) {
        set_theme_mod( 'amberd_comments_reply_box_text_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if (!get_theme_mod('amberd_comments_reply_box_heading_color')) {
        set_theme_mod( 'amberd_comments_reply_box_heading_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_comments_reply_box_link_color')) {
        set_theme_mod( 'amberd_comments_reply_box_link_color', $default);
    }
    $default = sanitize_hex_color('#ce3547');
    if (!get_theme_mod('amberd_comments_reply_box_link_hover_color')) {
        set_theme_mod( 'amberd_comments_reply_box_link_hover_color', $default);
    }
    $default = sanitize_hex_color('#528e9c');
    if (!get_theme_mod('amberd_comments_reply_button_bg_color')) {
        set_theme_mod( 'amberd_comments_reply_button_bg_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if (!get_theme_mod('amberd_comments_reply_button_link_color')) {
        set_theme_mod( 'amberd_comments_reply_button_link_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_comments_reply_button_bg_hover_color')) {
        set_theme_mod( 'amberd_comments_reply_button_bg_hover_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if (!get_theme_mod('amberd_comments_reply_button_link_hover_color')) {
        set_theme_mod( 'amberd_comments_reply_button_link_hover_color', $default);
    }

    //* Homepage default options 

    $default = amberd_switch_sanitization('');
    if(!get_theme_mod('amberd_custom_homepage_display_option')) {
        set_theme_mod('amberd_custom_homepage_display_option', $default);
    }
    $default = amberd_text_sanitization('banner-first-theme');
    if(!get_theme_mod('amberd_online_store_custom_homepage_banner_theme')) {
        set_theme_mod('amberd_online_store_custom_homepage_banner_theme', $default);
    }
    $default = sanitize_hex_color('#fdfcff');
    if(!get_theme_mod('amberd_homepage_large_banner_bg_color')) {
        set_theme_mod('amberd_homepage_large_banner_bg_color', $default);
    }
    $default = amberd_text_sanitization('to right');
    if(!get_theme_mod('amberd_homepage_large_banner_bg_gradient_type')) {
        set_theme_mod('amberd_homepage_large_banner_bg_gradient_type', $default);
    }
    $default = sanitize_hex_color('#fdfcff');
    if(!get_theme_mod('amberd_homepage_large_banner_bg_gradient_color')) {
        set_theme_mod('amberd_homepage_large_banner_bg_gradient_color', $default);
    }
    $default = amberd_text_sanitization('Our pets need love and care from us...');
    if(!get_theme_mod('amberd_custom_homepage_banner_short_description')) {
        set_theme_mod('amberd_custom_homepage_banner_short_description', $default);
    }
    $default = amberd_sanitize_integer('17');
    if(!get_theme_mod('amberd_custom_homepage_banner_short_description_font_size')) {
        set_theme_mod('amberd_custom_homepage_banner_short_description_font_size', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_custom_homepage_banner_short_description_color')) {
        set_theme_mod('amberd_custom_homepage_banner_short_description_color', $default);
    }
    $default = amberd_text_sanitization('Best Pet Shop!');
    if(!get_theme_mod('amberd_custom_homepage_banner_title')) {
        set_theme_mod('amberd_custom_homepage_banner_title', $default);
    }
    $default = amberd_sanitize_integer('50');
    if(!get_theme_mod('amberd_custom_homepage_banner_title_font_size')) {
        set_theme_mod('amberd_custom_homepage_banner_title_font_size', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_custom_homepage_banner_title_color')) {
        set_theme_mod('amberd_custom_homepage_banner_title_color', $default);
    }
    $default = amberd_text_sanitization('Excellent Support');
    if(!get_theme_mod('amberd_custom_homepage_banner_sliding_first_text')) {
        set_theme_mod('amberd_custom_homepage_banner_sliding_first_text', $default);
    }
    $default = amberd_text_sanitization('Guaranteed Quality');
    if(!get_theme_mod('amberd_custom_homepage_banner_sliding_second_text')) {
        set_theme_mod('amberd_custom_homepage_banner_sliding_second_text', $default);
    }
    $default = amberd_text_sanitization('Valuable Price');
    if(!get_theme_mod('amberd_custom_homepage_banner_sliding_third_text')) {
        set_theme_mod('amberd_custom_homepage_banner_sliding_third_text', $default);
    }
    $default = amberd_text_sanitization('Best Practices');
    if(!get_theme_mod('amberd_custom_homepage_banner_sliding_fourth_text')) {
        set_theme_mod('amberd_custom_homepage_banner_sliding_fourth_text', $default);
    }
    $default = amberd_sanitize_integer('37');
    if(!get_theme_mod('amberd_custom_homepage_banner_sliding_text_font_size')) {
        set_theme_mod('amberd_custom_homepage_banner_sliding_text_font_size', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_custom_homepage_banner_sliding_text_color')) {
        set_theme_mod('amberd_custom_homepage_banner_sliding_text_color', $default);
    }
    $default = amberd_text_sanitization('We offer all services in one place, including guaranteed quality, excellent support, best practices, and competitive prices. Use the action button below to discover our most popular products. Share and tell your friends about our store.');
    if(!get_theme_mod('amberd_custom_homepage_banner_content')) {
        set_theme_mod('amberd_custom_homepage_banner_content', $default);
    }
    $default = amberd_sanitize_integer('18');
    if(!get_theme_mod('amberd_custom_homepage_banner_content_font_size')) {
        set_theme_mod('amberd_custom_homepage_banner_content_font_size', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_custom_homepage_banner_content_color')) {
        set_theme_mod('amberd_custom_homepage_banner_content_color', $default);
    }
    $default = amberd_switch_sanitization('');
    if(!get_theme_mod('amberd_custom_homepage_show_banner_first_button')) {
        set_theme_mod('amberd_custom_homepage_show_banner_first_button', $default);
    }
    $default = amberd_text_sanitization('Check the Products');
    if(!get_theme_mod('amberd_custom_homepage_banner_first_button_text')) {
        set_theme_mod('amberd_custom_homepage_banner_first_button_text', $default);
    }
    $default = esc_url('#');
    if(!get_theme_mod('amberd_custom_homepage_banner_first_button_url')) {
        set_theme_mod('amberd_custom_homepage_banner_first_button_url', $default);
    }
    $default = amberd_text_sanitization('amberd_tenth_button_slide tenth_btn_slide_right');
    if(!get_theme_mod('amberd_custom_homepage_banner_first_button_style')) {
        set_theme_mod('amberd_custom_homepage_banner_first_button_style', $default);
    }
    $default = esc_html('true');
    if(!get_theme_mod('amberd_custom_homepage_show_banner_second_button')) {
        set_theme_mod('amberd_custom_homepage_show_banner_second_button', $default);
    }
    $default = amberd_text_sanitization('Order Now');
    if(!get_theme_mod('amberd_custom_homepage_banner_second_button_text')) {
        set_theme_mod('amberd_custom_homepage_banner_second_button_text', $default);
    }
    $default = esc_url('#');
    if(!get_theme_mod('amberd_custom_homepage_banner_second_button_url')) {
        set_theme_mod('amberd_custom_homepage_banner_second_button_url', $default);
    }
    $default = amberd_text_sanitization('amberd_ninth_button_slide ninth_btn_slide_right');
    if(!get_theme_mod('amberd_custom_homepage_banner_second_button_style')) {
        set_theme_mod('amberd_custom_homepage_banner_second_button_style', $default);
    }
    $default = esc_url(get_theme_file_uri('/images/banner-homepage-image.jpg'));
    if(!get_theme_mod('amberd_custom_homepage_banner_image')) {
        set_theme_mod('amberd_custom_homepage_banner_image', $default);
    }
    $default = amberd_switch_sanitization('');
    if (!get_theme_mod('amberd_custom_homepage_hide_woocommerce_products_list')) {
        set_theme_mod( 'amberd_custom_homepage_hide_woocommerce_products_list', $default);
    }
    $default = amberd_text_sanitization('Latest Products');
    if(!get_theme_mod('amberd_custom_homepage_woocommerce_products_list_title')) {
        set_theme_mod('amberd_custom_homepage_woocommerce_products_list_title', $default);
    }
    $default = amberd_text_sanitization('Check out the latest added products below.');
    if(!get_theme_mod('amberd_custom_homepage_woocommerce_products_list_desc')) {
        set_theme_mod('amberd_custom_homepage_woocommerce_products_list_desc', $default);
    }
    $default = amberd_sanitize_integer('5');
    if(!get_theme_mod('amberd_custom_homepage_number_of_woocommerce_products')) {
        set_theme_mod('amberd_custom_homepage_number_of_woocommerce_products', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if(!get_theme_mod('amberd_custom_homepage_woocommerce_products_block_color')) {
        set_theme_mod('amberd_custom_homepage_woocommerce_products_block_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_custom_homepage_woocommerce_products_title_color')) {
        set_theme_mod('amberd_custom_homepage_woocommerce_products_title_color', $default);
    }
    $default = sanitize_hex_color('#ff5952');
    if(!get_theme_mod('amberd_custom_homepage_woocommerce_products_price_color')) {
        set_theme_mod('amberd_custom_homepage_woocommerce_products_price_color', $default);
    }
    $default = amberd_text_sanitization('Check the Product');
    if(!get_theme_mod('amberd_custom_homepage_woocommerce_button_text')) {
        set_theme_mod('amberd_custom_homepage_woocommerce_button_text', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_custom_homepage_woocommerce_button_bg_color')) {
        set_theme_mod('amberd_custom_homepage_woocommerce_button_bg_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if(!get_theme_mod('amberd_custom_homepage_woocommerce_button_link_color')) {
        set_theme_mod('amberd_custom_homepage_woocommerce_button_link_color', $default);
    }
    $default = amberd_switch_sanitization('');
    if (!get_theme_mod('amberd_custom_homepage_hide_call_action')) {
        set_theme_mod( 'amberd_custom_homepage_hide_call_action', $default);
    }
    $default = amberd_text_sanitization('Best Offer');
    if(!get_theme_mod('amberd_custom_homepage_call_action_title')) {
        set_theme_mod('amberd_custom_homepage_call_action_title', $default);
    }
    $default = amberd_text_sanitization('A brief description of the section below.');
    if(!get_theme_mod('amberd_custom_homepage_call_action_desc')) {
        set_theme_mod('amberd_custom_homepage_call_action_desc', $default);
    }
    $default = sanitize_hex_color('#fffcf7');
    if(!get_theme_mod('amberd_call_action_bg_color')) {
        set_theme_mod('amberd_call_action_bg_color', $default);
    }
    $default = amberd_text_sanitization('to right');
    if(!get_theme_mod('amberd_call_action_gradient_type')) {
        set_theme_mod('amberd_call_action_gradient_type', $default);
    }
    $default =  sanitize_hex_color('#fffcf7');
    if(!get_theme_mod('amberd_call_action_bg_gradient_color')) {
        set_theme_mod('amberd_call_action_bg_gradient_color', $default);
    }
    $default = amberd_text_sanitization('This is sample text for a call to action section. You can use this section to encourage users to click a button and find out more information about your services.');
    if(!get_theme_mod('amberd_custom_homepage_call_action_text')) {
        set_theme_mod('amberd_custom_homepage_call_action_text', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_call_action_text_color')) {
        set_theme_mod('amberd_call_action_text_color', $default);
    }
    $default = amberd_sanitize_integer('25');
    if(!get_theme_mod('amberd_call_action_text_font_size')) {
        set_theme_mod('amberd_call_action_text_font_size', $default);
    }
    $default = amberd_text_sanitization('Check More Details');
    if(!get_theme_mod('amberd_custom_homepage_call_action_button_text')) {
        set_theme_mod('amberd_custom_homepage_call_action_button_text', $default);
    }
    $default = esc_url('#');
    if(!get_theme_mod('amberd_custom_homepage_call_action_button_url')) {
        set_theme_mod('amberd_custom_homepage_call_action_button_url', $default);
    }
    $default = amberd_text_sanitization('amberd_ninth_button_slide ninth_btn_slide_right');
    if(!get_theme_mod('amberd_custom_homepage_call_action_button_style')) {
        set_theme_mod('amberd_custom_homepage_call_action_button_style', $default);
    }
    $default = amberd_switch_sanitization('');
    if (!get_theme_mod('amberd_custom_homepage_hide_latest_post_section')) {
        set_theme_mod( 'amberd_custom_homepage_hide_latest_post_section', $default);
    }
    $default = amberd_text_sanitization('Latest Posts');
    if(!get_theme_mod('amberd_custom_homepage_latest_post_title')) {
        set_theme_mod('amberd_custom_homepage_latest_post_title', $default);
    }
    $default = amberd_text_sanitization('Latest posts from our blog');
    if(!get_theme_mod('amberd_custom_homepage_latest_post_desctiption')) {
        set_theme_mod('amberd_custom_homepage_latest_post_desctiption', $default);
    }
    $default = amberd_sanitize_integer('9');
    if(!get_theme_mod('amberd_custom_homepage_number_of_latest_posts')) {
        set_theme_mod('amberd_custom_homepage_number_of_latest_posts', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if(!get_theme_mod('amberd_custom_homepage_latest_posts_block_color')) {
        set_theme_mod('amberd_custom_homepage_latest_posts_block_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_custom_homepage_latest_posts_title_color')) {
        set_theme_mod('amberd_custom_homepage_latest_posts_title_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_custom_homepage_latest_posts_text_color')) {
        set_theme_mod('amberd_custom_homepage_latest_posts_text_color', $default);
    }

    //* Blog and Archive default options  

    $default = amberd_text_sanitization('narrow');
    if(!get_theme_mod('amberd_archive_banner_width')) {
        set_theme_mod('amberd_archive_banner_width', $default);
    }
    $default = sanitize_hex_color('#fdfcff');
    if(!get_theme_mod('amberd_archive_banner_bg_color')) {
        set_theme_mod('amberd_archive_banner_bg_color', $default);
    }
    $default = amberd_text_sanitization('to right');
    if (!get_theme_mod('amberd_archive_banner_bg_gradient_type')) {
        set_theme_mod( 'amberd_archive_banner_bg_gradient_type', $default);
    }
    $default = sanitize_hex_color('#fdfcff');
    if(!get_theme_mod('amberd_archive_banner_bg_gradient_color')) {
        set_theme_mod('amberd_archive_banner_bg_gradient_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_archive_banner_title_color')) {
        set_theme_mod('amberd_archive_banner_title_color', $default);
    }
    $default = amberd_text_sanitization('center');
    if(!get_theme_mod('amberd_archive_banner_title_alignment')) {
        set_theme_mod('amberd_archive_banner_title_alignment', $default);
    }
    $default = amberd_text_sanitization('sidebarright');
    if (!get_theme_mod('amberd_blog_archive_page_layout')) {
        set_theme_mod( 'amberd_blog_archive_page_layout', $default);
    }
    $default = amberd_switch_sanitization('');
    if(!get_theme_mod('amberd_archive_banner_animations_display_option')) {
        set_theme_mod('amberd_archive_banner_animations_display_option', $default);
    }
    $default = sanitize_hex_color('#ddbcff');
    if (!get_theme_mod('amberd_archive_banner_animations_el_circle_color')) {
        set_theme_mod( 'amberd_archive_banner_animations_el_circle_color', $default);
    }
    $default = sanitize_hex_color('#fba5a1');
    if (!get_theme_mod('amberd_archive_banner_animations_el1_color')) {
        set_theme_mod( 'amberd_archive_banner_animations_el1_color', $default);
    }
    $default = sanitize_hex_color('#a995fd');
    if (!get_theme_mod('amberd_archive_banner_animations_el2_color')) {
        set_theme_mod( 'amberd_archive_banner_animations_el2_color', $default);
    }
    $default = sanitize_hex_color('#ddbcff');
    if (!get_theme_mod('amberd_archive_banner_animations_el3_color')) {
        set_theme_mod( 'amberd_archive_banner_animations_el3_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if(!get_theme_mod('amberd_blog_settings_posts_list_bg_color')) {
        set_theme_mod('amberd_blog_settings_posts_list_bg_color', $default);
    }
    $default = amberd_text_sanitization('figureblogimage');
    if (!get_theme_mod('amberd_posts_list_images_hover_effect')) {
        set_theme_mod( 'amberd_posts_list_images_hover_effect', $default);
    }
    $default = amberd_sanitize_integer('29');
    if(!get_theme_mod('amberd_blog_settings_title_font_size')) {
        set_theme_mod('amberd_blog_settings_title_font_size', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_blog_settings_title_color')) {
        set_theme_mod('amberd_blog_settings_title_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_blog_settings_title_hover_color')) {
        set_theme_mod('amberd_blog_settings_title_hover_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_blog_settings_title_border_color')) {
        set_theme_mod('amberd_blog_settings_title_border_color', $default);
    }
    $default = amberd_sanitize_integer('16');
    if(!get_theme_mod('amberd_blog_settings_metas_font_size')) {
        set_theme_mod('amberd_blog_settings_metas_font_size', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if(!get_theme_mod('amberd_blog_settings_metas_color')) {
        set_theme_mod('amberd_blog_settings_metas_color', $default);
    }
    $default = sanitize_hex_color('#ce3547');
    if(!get_theme_mod('amberd_blog_settings_metas_hover_color')) {
        set_theme_mod('amberd_blog_settings_metas_hover_color', $default);
    }
    $default = sanitize_hex_color('#528e9c');
    if(!get_theme_mod('amberd_blog_settings_meta_icons_color')) {
        set_theme_mod('amberd_blog_settings_meta_icons_color', $default);
    }
    $default = amberd_sanitize_integer('17');
    if(!get_theme_mod('amberd_blog_settings_content_text_font_size')) {
        set_theme_mod('amberd_blog_settings_content_text_font_size', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_blog_settings_content_text_color')) {
        set_theme_mod('amberd_blog_settings_content_text_color', $default);
    }

    //* Pagination

    $default = sanitize_hex_color('#f1f0ed');
    if (!get_theme_mod('amberd_pagination_buttons_bg_color')) {
        set_theme_mod( 'amberd_pagination_buttons_bg_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_pagination_buttons_link_color')) {
        set_theme_mod( 'amberd_pagination_buttons_link_color', $default);
    }
    $default = sanitize_hex_color('#a8a8a8');
    if (!get_theme_mod('amberd_pagination_buttons_text_color')) {
        set_theme_mod( 'amberd_pagination_buttons_text_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_pagination_buttons_bg_hover_color')) {
        set_theme_mod( 'amberd_pagination_buttons_bg_hover_color', $default);
    }
    $default = sanitize_hex_color('#f8f6f2');
    if (!get_theme_mod('amberd_pagination_buttons_link_hover_color')) {
        set_theme_mod( 'amberd_pagination_buttons_link_hover_color', $default);
    }
    $default = sanitize_hex_color('#a8a8a8');
    if (!get_theme_mod('amberd_pagination_buttons_text_hover_color')) {
        set_theme_mod( 'amberd_pagination_buttons_text_hover_color', $default);
    }

    //* Footer default options

    $default = amberd_text_sanitization('amberdthreewidgetsleft');
    if(!get_theme_mod('amberd_footer_layout')) {
        set_theme_mod('amberd_footer_layout', $default);
    }
    $default = amberd_text_sanitization('amberd-footer-four');
    if(!get_theme_mod('amberd_footer_template')) {
        set_theme_mod('amberd_footer_template', $default);
    }
    $default = amberd_text_sanitization('All rights reserved @2024.');
    if(!get_theme_mod('amberd_footer_copyright_text')) {
        set_theme_mod('amberd_footer_copyright_text', $default);
    }

    //* Search page default options  
    
    $default = amberd_text_sanitization('narrow');
    if(!get_theme_mod('amberd_search_banner_width')) {
        set_theme_mod('amberd_search_banner_width', $default);
    }
    $default = sanitize_hex_color('#fdfcff');
    if(!get_theme_mod('amberd_search_banner_bg_color')) {
        set_theme_mod('amberd_search_banner_bg_color', $default);
    }
    $default = amberd_text_sanitization('to right');
    if (!get_theme_mod('amberd_search_banner_bg_gradient_type')) {
        set_theme_mod( 'amberd_search_banner_bg_gradient_type', $default);
    }
    $default = sanitize_hex_color('#fdfcff');
    if(!get_theme_mod('amberd_search_banner_bg_gradient_color')) {
        set_theme_mod('amberd_search_banner_bg_gradient_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if(!get_theme_mod('amberd_search_banner_title_color')) {
        set_theme_mod('amberd_search_banner_title_color', $default);
    }
    $default = amberd_text_sanitization('center');
    if(!get_theme_mod('amberd_search_banner_title_alignment')) {
        set_theme_mod('amberd_search_banner_title_alignment', $default);
    }
    $default = amberd_text_sanitization('sidebarright');
    if (!get_theme_mod('amberd_search_page_layout')) {
        set_theme_mod( 'amberd_search_page_layout', $default);
    }
    $default = amberd_text_sanitization('amberd_tenth_button_slide tenth_btn_slide_right');
    if (!get_theme_mod('amberd_search_page_button_style')) {
        set_theme_mod( 'amberd_search_page_button_style', $default);
    }
    $default = amberd_switch_sanitization('');
    if(!get_theme_mod('amberd_search_banner_animations_display_option')) {
        set_theme_mod('amberd_search_banner_animations_display_option', $default);
    }
    $default = sanitize_hex_color('#ddbcff');
    if (!get_theme_mod('amberd_search_banner_animations_el_circle_color')) {
        set_theme_mod( 'amberd_search_banner_animations_el_circle_color', $default);
    }
    $default = sanitize_hex_color('#fba5a1');
    if (!get_theme_mod('amberd_search_banner_animations_el1_color')) {
        set_theme_mod( 'amberd_search_banner_animations_el1_color', $default);
    }
    $default = sanitize_hex_color('#a995fd');
    if (!get_theme_mod('amberd_search_banner_animations_el2_color')) {
        set_theme_mod( 'amberd_search_banner_animations_el2_color', $default);
    }
    $default = sanitize_hex_color('#ddbcff');
    if (!get_theme_mod('amberd_search_banner_animations_el3_color')) {
        set_theme_mod( 'amberd_search_banner_animations_el3_color', $default);
    }
    //* 404 error page default options  

    $default = sanitize_hex_color('#ffffff');
    if(!get_theme_mod('amberd_not_found_page_bg_color')) {
        set_theme_mod('amberd_not_found_page_bg_color', $default);
    }
    $default = esc_url(get_theme_file_uri('/images/amberd-404.png'));
    if(!get_theme_mod('amberd_not_found_image')) {
        set_theme_mod('amberd_not_found_image', $default);
    }
    $default = amberd_text_sanitization('Oops! Page Not Found');
    if(!get_theme_mod('amberd_not_found_page_title')) {
        set_theme_mod('amberd_not_found_page_title', $default);
    }
    $default = amberd_text_sanitization('The page or URL you are trying to access was not found. Use the homepage link below to navigate to the homepage. You can also use the search function.');
    if(!get_theme_mod('amberd_not_found_page_description')) {
        set_theme_mod('amberd_not_found_page_description', $default);
    }
    $default = amberd_text_sanitization('Back to Homepage');
    if(!get_theme_mod('amberd_not_found_page_button_text')) {
        set_theme_mod('amberd_not_found_page_button_text', $default);
    }
    $default = esc_url(get_home_url());
    if(!get_theme_mod('amberd_not_found_page_button_url')) {
        set_theme_mod('amberd_not_found_page_button_url', $default);
    }
    $default = amberd_text_sanitization('amberd_tenth_button_slide tenth_btn_slide_right');
    if(!get_theme_mod('amberd_not_found_page_button_style')) {
        set_theme_mod('amberd_not_found_page_button_style', $default);
    }

    //* WooCommerce

    $default = amberd_text_sanitization('sidebarnone');
    if (!get_theme_mod('amberd_woocommerce_shop_category_layout')) {
        set_theme_mod( 'amberd_woocommerce_shop_category_layout', $default);
    }
    $default = amberd_text_sanitization('sidebarnone');
    if (!get_theme_mod('amberd_woocommerce_product_pages_layout')) {
        set_theme_mod( 'amberd_woocommerce_product_pages_layout', $default);
    }
    $default = amberd_text_sanitization('sidebarnone');
    if (!get_theme_mod('amberd_woocommerce_cart_checkout_account_layout')) {
        set_theme_mod( 'amberd_woocommerce_cart_checkout_account_layout', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_woocommerce_cart_icon_color')) {
        set_theme_mod( 'amberd_woocommerce_cart_icon_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if (!get_theme_mod('amberd_woocommerce_cart_icon_number_color')) {
        set_theme_mod( 'amberd_woocommerce_cart_icon_number_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if (!get_theme_mod('amberd_woocommerce_page_bg_color')) {
        set_theme_mod( 'amberd_woocommerce_page_bg_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if (!get_theme_mod('amberd_woocommerce_products_blocks_bg_color')) {
        set_theme_mod( 'amberd_woocommerce_products_blocks_bg_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if (!get_theme_mod('amberd_woocommerce_heading_color')) {
        set_theme_mod( 'amberd_woocommerce_heading_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if (!get_theme_mod('amberd_woocommerce_text_color')) {
        set_theme_mod( 'amberd_woocommerce_text_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_woocommerce_link_color')) {
        set_theme_mod( 'amberd_woocommerce_link_color', $default);
    }
    $default = sanitize_hex_color('#ce3547');
    if (!get_theme_mod('amberd_woocommerce_link_hover_color')) {
        set_theme_mod( 'amberd_woocommerce_link_hover_color', $default);
    }
    $default = sanitize_hex_color('#f4a71d');
    if (!get_theme_mod('amberd_woocommerce_rating_color')) {
        set_theme_mod( 'amberd_woocommerce_rating_color', $default);
    }
    $default = sanitize_hex_color('#f1f0ed');
    if (!get_theme_mod('amberd_woo_pagination_buttons_bg_color')) {
        set_theme_mod( 'amberd_woo_pagination_buttons_bg_color', $default);
    }
    $default = sanitize_hex_color('#a8a8a8');
    if (!get_theme_mod('amberd_woo_pagination_buttons_text_color')) {
        set_theme_mod( 'amberd_woo_pagination_buttons_text_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_woo_pagination_buttons_link_color')) {
        set_theme_mod( 'amberd_woo_pagination_buttons_link_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_woo_pagination_buttons_bg_hover_color')) {
        set_theme_mod( 'amberd_woo_pagination_buttons_bg_hover_color', $default);
    }
    $default = sanitize_hex_color('#f8f6f2');
    if (!get_theme_mod('amberd_woo_pagination_buttons_link_hover_color')) {
        set_theme_mod( 'amberd_woo_pagination_buttons_link_hover_color', $default);
    }
    $default = sanitize_hex_color('#a8a8a8');
    if (!get_theme_mod('amberd_woo_pagination_buttons_text_hover_color')) {
        set_theme_mod( 'amberd_woo_pagination_buttons_text_hover_color', $default);
    }
    $default = amberd_sanitize_integer('18');
    if(!get_theme_mod('amberd_woo_pagination_text_font_size')) {
        set_theme_mod('amberd_woo_pagination_text_font_size', $default);
    }
    $default = amberd_sanitize_integer('17');
    if(!get_theme_mod('amberd_woocommerce_text_font_size')) {
        set_theme_mod('amberd_woocommerce_text_font_size', $default);
    }
    $default = amberd_sanitize_integer('17');
    if(!get_theme_mod('amberd_woocommerce_link_font_size')) {
        set_theme_mod('amberd_woocommerce_link_font_size', $default);
    }
    $default = amberd_sanitize_integer('44');
    if(!get_theme_mod('amberd_woocommerce_heading_h1_font_size')) {
        set_theme_mod('amberd_woocommerce_heading_h1_font_size', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if (!get_theme_mod('amberd_online_store_header_cart_bg_color')) {
        set_theme_mod( 'amberd_online_store_header_cart_bg_color', $default);
    }
    $default = sanitize_hex_color('#c9c9c9');
    if (!get_theme_mod('amberd_online_store_header_cart_border_color')) {
        set_theme_mod( 'amberd_online_store_header_cart_border_color', $default);
    }
    $default = sanitize_hex_color('#000000');
    if (!get_theme_mod('amberd_online_store_header_cart_text_link_color')) {
        set_theme_mod( 'amberd_online_store_header_cart_text_link_color', $default);
    }
    $default = sanitize_hex_color('#ff5952');
    if (!get_theme_mod('amberd_online_store_header_cart_remove_color')) {
        set_theme_mod( 'amberd_online_store_header_cart_remove_color', $default);
    }
    $default = sanitize_hex_color('#000000');
    if (!get_theme_mod('amberd_online_store_header_cart_remove_hover_color')) {
        set_theme_mod( 'amberd_online_store_header_cart_remove_hover_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_woo_primary_button_bg_color')) {
        set_theme_mod( 'amberd_woo_primary_button_bg_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if (!get_theme_mod('amberd_woo_primary_button_link_color')) {
        set_theme_mod( 'amberd_woo_primary_button_link_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if (!get_theme_mod('amberd_woo_primary_button_bg_hover_color')) {
        set_theme_mod( 'amberd_woo_primary_button_bg_hover_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_woo_primary_button_link_hover_color')) {
        set_theme_mod( 'amberd_woo_primary_button_link_hover_color', $default);
    }
    $default = sanitize_hex_color('#ffffff');
    if (!get_theme_mod('amberd_woocommerce_sidebar_bg_color')) {
        set_theme_mod( 'amberd_woocommerce_sidebar_bg_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if (!get_theme_mod('amberd_woocommerce_sidebar_headings_color')) {
        set_theme_mod( 'amberd_woocommerce_sidebar_headings_color', $default);
    }
    $default = sanitize_hex_color('#333333');
    if (!get_theme_mod('amberd_woocommerce_sidebar_text_color')) {
        set_theme_mod( 'amberd_woocommerce_sidebar_text_color', $default);
    }
    $default = sanitize_hex_color('#ff6b35');
    if (!get_theme_mod('amberd_woocommerce_sidebar_link_color')) {
        set_theme_mod( 'amberd_woocommerce_sidebar_link_color', $default);
    }
    $default = sanitize_hex_color('#ce3547');
    if (!get_theme_mod('amberd_woocommerce_sidebar_link_hover_color')) {
        set_theme_mod( 'amberd_woocommerce_sidebar_link_hover_color', $default);
    }
	
}