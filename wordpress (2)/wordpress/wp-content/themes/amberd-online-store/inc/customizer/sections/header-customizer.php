<?php
	$wp_customize->add_panel( 'amberd_header_panel', 
	array(
		'title'	=> esc_html__('Header','amberd-online-store'),			
		'description'	=> esc_html__('Customize the theme header options','amberd-online-store'),		
		'priority'		=> 24
	) 
	);
    $wp_customize->add_section('amberd_header_section',array(
		'title'	=> esc_html__('General','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_header_panel'
	));

	$wp_customize->add_setting( 'amberd_header_layout',
	array(
		'default' => esc_html('headerlayoutone'),
		'transport' => 'refresh',
		'sanitize_callback' => 'amberd_text_sanitization'
	)
	);
	$wp_customize->add_control( new Amberd_Image_Radio_Button_Custom_Control( $wp_customize, 'amberd_header_layout',
	array(
		'label' => esc_html__( 'Header layout', 'amberd-online-store' ),
		'description' => esc_html__( 'Select the position of the header elements', 'amberd-online-store' ),
		'section' => 'amberd_header_section',
		'choices' => array(
		'headerlayoutone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/header-layout-one.jpg',
			'name' => esc_html__( 'All header elements on one line', 'amberd-online-store' )
		),
		'headerlayouttwo' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/header-layout-two.jpg',
			'name' => esc_html__( 'Logo on the top side of the menu', 'amberd-online-store' )
		),
		'headerlayoutthree' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/header-layout-three.jpg',
			'name' => esc_html__( 'All header elements on one line, without search and action buttons', 'amberd-online-store' )
		)
		)
	)
	) );
	$wp_customize->add_setting('amberd_header_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_header_bg_color', esc_html('#3d148c')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_header_bg_color', array(
        'label' => esc_html__('Header background color','amberd-online-store'),
        'section' => 'amberd_header_section',
        'settings' => 'amberd_header_bg_color'
    )));

	$wp_customize->add_setting('amberd_header_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_header_gradient_type',array(
			'label'	=> esc_html__('Gradient type','amberd-online-store'),
			'section'	=> 'amberd_header_section',
			'setting'	=> 'amberd_header_gradient_type',
			'type' => 'select',
			'choices' => array(
				'to right' => esc_html__('To right','amberd-online-store'),
				'to left' => esc_html__('To left','amberd-online-store'),
				'to bottom' => esc_html__('To bottom','amberd-online-store'),
				'to top' => esc_html__('To top','amberd-online-store'),
				'to bottom right' => esc_html__('To bottom right','amberd-online-store'),
				'to bottom left' => esc_html__('To bottom left','amberd-online-store'),
				'to top right' => esc_html__('To top right','amberd-online-store'),
				'to top left' => esc_html__('To top left','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_header_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_amberd_header_bg_gradient_color', esc_html('#873ccf')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_header_bg_gradient_color', array(
        'label' => esc_html__('Header gradient color','amberd-online-store'),
        'section' => 'amberd_header_section',
        'settings' => 'amberd_header_bg_gradient_color'
    )));
	$wp_customize->add_setting( 'amberd_header_show_action_button',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'amberd_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Toggle_Switch_Custom_control( $wp_customize, 'amberd_header_show_action_button',
        array(
        'label' => esc_html__( 'Hide the action button', 'amberd-online-store' ),
        'section' => 'amberd_header_section'
        )
    ) );
	$wp_customize->add_setting('amberd_header_action_button_text',array(
		'default'	=> esc_html('Join Us'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_header_action_button_text',
            array(
                'label'    => esc_html__('Header action button text','amberd-online-store'),
                'section'  => 'amberd_header_section',
                'settings' => 'amberd_header_action_button_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('amberd_header_action_button_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'amberd_url_sanitization'
	));
	$wp_customize->add_control('amberd_header_action_button_url',array(
			'label'	=> esc_html__('Header action button URL','amberd-online-store'),
			'section'	=> 'amberd_header_section',
			'setting'	=> 'amberd_header_action_button_url'
	));	
	$wp_customize->add_setting('amberd_header_action_button_style',array(
		'default'	=> esc_html('amberd_second_button_slide second_btn_slide_right'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_header_action_button_style',array(
			'label'	=> esc_html__('Header action button style','amberd-online-store'),
			'section'	=> 'amberd_header_section',
			'setting'	=> 'amberd_header_action_button_style',
			'type' => 'select',
			'choices' => array(
				'amberd_first_button_slide first_btn_slide_right' => esc_html__('Style 1 - AmBerd Color', 'amberd-online-store'),
				'amberd_second_button_slide second_btn_slide_right' => esc_html__('Style 2 - Grapefruit Red', 'amberd-online-store'),
				'amberd_third_button_slide third_btn_slide_right' => esc_html__('Style 3 - Blue', 'amberd-online-store'),
				'amberd_fourth_button_slide fourth_btn_slide_right' => esc_html__('Style 4 - Black', 'amberd-online-store'),
				'amberd_fifth_button_slide fifth_btn_slide_right' => esc_html__('Style 5 - Green', 'amberd-online-store'),
				'amberd_sixth_button_slide sixth_btn_slide_right' => esc_html__('Style 6 - Yellow', 'amberd-online-store'),
				'amberd_seventh_button_slide seventh_btn_slide_right' => esc_html__('Style 7 - Custom Green', 'amberd-online-store'),
				'amberd_eighth_button_slide eighth_btn_slide_right' => esc_html__('Style 8 - White', 'amberd-online-store'),
				'amberd_ninth_button_slide ninth_btn_slide_right' => esc_html__('Style 9 - Custom Primary', 'amberd-online-store'),
				'amberd_tenth_button_slide tenth_btn_slide_right' => esc_html__('Style 10 - Custom Secondary', 'amberd-online-store'),
				)
	));

	$wp_customize->add_section('amberd_header_menu_search_section',array(
		'title'	=> esc_html__('Menu and Search','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_header_panel'
	));
	$wp_customize->add_setting('amberd_header_search_button_color',array(
		'default'	=> apply_filters( 'parent_amberd_header_search_button_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_header_search_button_color', array(
        'label' => esc_html__('Search button color','amberd-online-store'),
        'section' => 'amberd_header_menu_search_section',
        'settings' => 'amberd_header_search_button_color'
    )));
	$wp_customize->add_setting('amberd_header_menu_items_color',array(
		'default'	=> apply_filters( 'parent_amberd_header_menu_items_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_header_menu_items_color', array(
        'label' => esc_html__('Menu items color','amberd-online-store'),
        'section' => 'amberd_header_menu_search_section',
        'settings' => 'amberd_header_menu_items_color'
    )));
	$wp_customize->add_setting('amberd_main_header_sub_menu_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_header_sub_menu_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_header_sub_menu_bg_color', array(
        'label' => esc_html__('Sub menu background color','amberd-online-store'),
        'section' => 'amberd_header_menu_search_section',
        'settings' => 'amberd_main_header_sub_menu_bg_color'
    )));
	$wp_customize->add_setting('amberd_main_header_sub_menu_items_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_header_sub_menu_items_color', esc_html('#7a5bfb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_header_sub_menu_items_color', array(
        'label' => esc_html__('Sub menu items color','amberd-online-store'),
        'section' => 'amberd_header_menu_search_section',
        'settings' => 'amberd_main_header_sub_menu_items_color'
    )));
	$wp_customize->add_setting('amberd_main_header_sub_menu_top_border_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_header_sub_menu_top_border_color', esc_html('#ff6f69')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_header_sub_menu_top_border_color', array(
        'label' => esc_html__('Sub menu border color','amberd-online-store'),
        'section' => 'amberd_header_menu_search_section',
        'settings' => 'amberd_main_header_sub_menu_top_border_color'
    )));
	$wp_customize->add_setting('amberd_header_mobile_menu_background_color',array(
		'default'	=> apply_filters( 'parent_amberd_header_mobile_menu_background_color', esc_html('#3d148c')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_header_mobile_menu_background_color', array(
        'label' => esc_html__('Mobile toolbar background color','amberd-online-store'),
        'section' => 'amberd_header_menu_search_section',
        'settings' => 'amberd_header_mobile_menu_background_color'
    )));
	$wp_customize->add_setting('amberd_mobile_menu_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_mobile_menu_bg_gradient_type',array(
			'label'	=> esc_html__('Gradient type','amberd-online-store'),
			'section'	=> 'amberd_header_menu_search_section',
			'setting'	=> 'amberd_mobile_menu_bg_gradient_type',
			'type' => 'select',
			'choices' => array(
				'to right' => esc_html__('To right','amberd-online-store'),
				'to left' => esc_html__('To left','amberd-online-store'),
				'to bottom' => esc_html__('To bottom','amberd-online-store'),
				'to top' => esc_html__('To top','amberd-online-store'),
				'to bottom right' => esc_html__('To bottom right','amberd-online-store'),
				'to bottom left' => esc_html__('To bottom left','amberd-online-store'),
				'to top right' => esc_html__('To top right','amberd-online-store'),
				'to top left' => esc_html__('To top left','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_mobile_menu_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_amberd_mobile_menu_bg_gradient_color', esc_html('#873ccf')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_mobile_menu_bg_gradient_color', array(
        'label' => esc_html__('Mobile toolbar background gradient color','amberd-online-store'),
        'section' => 'amberd_header_menu_search_section',
        'settings' => 'amberd_mobile_menu_bg_gradient_color'
    )));
	$wp_customize->add_setting('amberd_header_descktop_search_button_color',array(
		'default'	=> apply_filters( 'parent_amberd_header_descktop_search_button_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_header_descktop_search_button_color', array(
        'label' => esc_html__('Mobile search button color','amberd-online-store'),
        'section' => 'amberd_header_menu_search_section',
        'settings' => 'amberd_header_descktop_search_button_color'
    )));

	$wp_customize->add_setting('amberd_header_mobile_menu_button_color',array(
		'default'	=> apply_filters( 'parent_amberd_header_mobile_menu_button_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_header_mobile_menu_button_color', array(
        'label' => esc_html__('Mobile menu button color','amberd-online-store'),
        'section' => 'amberd_header_menu_search_section',
        'settings' => 'amberd_header_mobile_menu_button_color'
    )));
	$wp_customize->add_setting('amberd_main_header_mobile_menu_background_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_header_mobile_menu_background_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_header_mobile_menu_background_color', array(
        'label' => esc_html__('Mobile menu background color','amberd-online-store'),
        'section' => 'amberd_header_menu_search_section',
        'settings' => 'amberd_main_header_mobile_menu_background_color'
    )));
	$wp_customize->add_setting('amberd_main_header_mobile_menu_link_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_header_mobile_menu_link_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_header_mobile_menu_link_color', array(
        'label' => esc_html__('Mobile menu link color','amberd-online-store'),
        'section' => 'amberd_header_menu_search_section',
        'settings' => 'amberd_main_header_mobile_menu_link_color'
    )));
	$wp_customize->add_setting('amberd_main_header_mobile_menu_border_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_header_mobile_menu_border_color', esc_html('#000000')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_header_mobile_menu_border_color', array(
        'label' => esc_html__('Mobile menu borders color','amberd-online-store'),
        'section' => 'amberd_header_menu_search_section',
        'settings' => 'amberd_main_header_mobile_menu_border_color'
    )));
	$wp_customize->add_setting('amberd_main_header_mobile_sub_menu_button_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_header_mobile_sub_menu_button_bg_color', esc_html('#7733c0')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_header_mobile_sub_menu_button_bg_color', array(
        'label' => esc_html__('Mobile sub-menu button BG color','amberd-online-store'),
        'section' => 'amberd_header_menu_search_section',
        'settings' => 'amberd_main_header_mobile_sub_menu_button_bg_color'
    )));
	$wp_customize->add_setting('amberd_main_header_mobile_sub_menu_button_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_header_mobile_sub_menu_button_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_header_mobile_sub_menu_button_color', array(
        'label' => esc_html__('Mobile sub-menu button color','amberd-online-store'),
        'section' => 'amberd_header_menu_search_section',
        'settings' => 'amberd_main_header_mobile_sub_menu_button_color'
    )));

	if ( class_exists( 'WooCommerce' ) ) {
		$wp_customize->add_section('amberd_header_woo_cart',array(
			'title'	=> esc_html__('WooCommerce Cart','amberd-online-store'),					
			'priority'		=> null,
			'panel'         => 'amberd_header_panel'
		));
		$wp_customize->add_setting('amberd_woocommerce_cart_icon_color',array(
			'default'	=> apply_filters( 'parent_amberd_woocommerce_cart_icon_color', esc_html('#ffffff')),
			'sanitize_callback'	=> 'sanitize_hex_color'	
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woocommerce_cart_icon_color', array(
			'label' => esc_html__('WooCommerce cart icon color','amberd-online-store'),
			'section' => 'amberd_header_woo_cart',
			'settings' => 'amberd_woocommerce_cart_icon_color'
		)));
		$wp_customize->add_setting('amberd_woocommerce_cart_icon_number_color',array(
			'default'	=> apply_filters( 'parent_amberd_woocommerce_cart_icon_number_color', esc_html('#000000')),
			'sanitize_callback'	=> 'sanitize_hex_color'	
		));
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woocommerce_cart_icon_number_color', array(
			'label' => esc_html__('WooCommerce cart number color','amberd-online-store'),
			'section' => 'amberd_header_woo_cart',
			'settings' => 'amberd_woocommerce_cart_icon_number_color'
		)));
	};