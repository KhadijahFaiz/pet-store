<?php 
	$wp_customize->add_panel( 'amberd_woocommerce_settings_panel', 
    array(
		'title'	=> esc_html__('WooCommerce AmBerd','amberd-online-store'),			
        'description'	=> esc_html__('WooCommerce custom settings','amberd-online-store'),		
		'priority'		=> 29
    ) 
	);

	##################------ WooCommerce Typography ------##################

	$wp_customize->add_section('woocommerce_typography_section',array(
		'title'	=> esc_html__('WooCommerce Typography','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_woocommerce_settings_panel'
	));

	$wp_customize->add_setting( 'amberd_woocommerce_text_font_size',
	array(
		'default' => esc_html('18'),
		'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_woocommerce_text_font_size',
		array(
		'label' => esc_html__( 'Text font-size for Woo pages (px)', 'amberd-online-store' ),
		'section' => 'woocommerce_typography_section',
		'input_attrs' => array(
			'min' => esc_html('16'),
			'max' => esc_html('20'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting( 'amberd_woocommerce_link_font_size',
	array(
		'default' => esc_html('18'),
		'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_woocommerce_link_font_size',
		array(
		'label' => esc_html__( 'Link font-size for Woo pages (px)', 'amberd-online-store' ),
		'section' => 'woocommerce_typography_section',
		'input_attrs' => array(
			'min' => esc_html('16'),
			'max' => esc_html('20'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting( 'amberd_woocommerce_heading_h1_font_size',
	array(
		'default' => esc_html('45'),
		'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_woocommerce_heading_h1_font_size',
		array(
		'label' => esc_html__( 'Title font-size for Woo pages (px)', 'amberd-online-store' ),
		'section' => 'woocommerce_typography_section',
		'input_attrs' => array(
			'min' => esc_html('35'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	
	##################------ WooCommerce Primary Button ------##################

	$wp_customize->add_section('woocommerce_primary_button_colors_section',array(
		'title'	=> esc_html__('WooCommerce Primary Button','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_woocommerce_settings_panel'
	));

	$wp_customize->add_setting('amberd_woo_primary_button_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_woo_primary_button_bg_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woo_primary_button_bg_color', array(
		'label' => esc_html__('WooCommerce primary button bg color','amberd-online-store'),
		'section' => 'woocommerce_primary_button_colors_section',
		'settings' => 'amberd_woo_primary_button_bg_color'
	)));
	$wp_customize->add_setting('amberd_woo_primary_button_link_color',array(
		'default'	=> apply_filters( 'parent_amberd_woo_primary_button_link_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woo_primary_button_link_color', array(
		'label' => esc_html__('WooCommerce primary button bg hover color','amberd-online-store'),
		'section' => 'woocommerce_primary_button_colors_section',
		'settings' => 'amberd_woo_primary_button_link_color'
	)));
	$wp_customize->add_setting('amberd_woo_primary_button_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_woo_primary_button_bg_hover_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woo_primary_button_bg_hover_color', array(
		'label' => esc_html__('WooCommerce primary button text color','amberd-online-store'),
		'section' => 'woocommerce_primary_button_colors_section',
		'settings' => 'amberd_woo_primary_button_bg_hover_color'
	)));
	$wp_customize->add_setting('amberd_woo_primary_button_link_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_woo_primary_button_link_hover_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woo_primary_button_link_hover_color', array(
		'label' => esc_html__('WooCommerce primary button text hover color','amberd-online-store'),
		'section' => 'woocommerce_primary_button_colors_section',
		'settings' => 'amberd_woo_primary_button_link_hover_color'
	)));
		
	##################------ WooCommerce Shop/Product Colors ------##################

	$wp_customize->add_section('woocommerce_global_colors_section',array(
		'title'	=> esc_html__('WooCommerce Colors','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_woocommerce_settings_panel'
	));

	$wp_customize->add_setting('amberd_woocommerce_page_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_woocommerce_page_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woocommerce_page_bg_color', array(
        'label' => esc_html__('WooCommerce pages bg color','amberd-online-store'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'amberd_woocommerce_page_bg_color'
    )));

	$wp_customize->add_setting('amberd_woocommerce_products_blocks_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_woocommerce_products_blocks_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woocommerce_products_blocks_bg_color', array(
        'label' => esc_html__('WooCommerce products/summary blocks bg color','amberd-online-store'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'amberd_woocommerce_products_blocks_bg_color'
    )));
	$wp_customize->add_setting('amberd_woocommerce_heading_color',array(
		'default'	=> apply_filters( 'parent_amberd_woocommerce_heading_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woocommerce_heading_color', array(
        'label' => esc_html__('WooCommerce pages headings color','amberd-online-store'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'amberd_woocommerce_heading_color'
    )));
	$wp_customize->add_setting('amberd_woocommerce_text_color',array(
		'default'	=> apply_filters( 'parent_amberd_woocommerce_text_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woocommerce_text_color', array(
        'label' => esc_html__('WooCommerce pages text color','amberd-online-store'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'amberd_woocommerce_text_color'
    )));
	$wp_customize->add_setting('amberd_woocommerce_link_color',array(
		'default'	=> apply_filters( 'parent_amberd_woocommerce_link_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woocommerce_link_color', array(
        'label' => esc_html__('WooCommerce pages link color','amberd-online-store'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'amberd_woocommerce_link_color'
    )));
	$wp_customize->add_setting('amberd_woocommerce_link_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_woocommerce_link_hover_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woocommerce_link_hover_color', array(
        'label' => esc_html__('WooCommerce pages link hover color','amberd-online-store'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'amberd_woocommerce_link_hover_color'
    )));
	$wp_customize->add_setting('amberd_woocommerce_rating_color',array(
		'default'	=> apply_filters( 'parent_amberd_woocommerce_rating_color', esc_html('#dd9933')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woocommerce_rating_color', array(
        'label' => esc_html__('WooCommerce rating/star color','amberd-online-store'),
        'section' => 'woocommerce_global_colors_section',
        'settings' => 'amberd_woocommerce_rating_color'
    )));

	##################------ WooCommerce Pagination ------##################

	$wp_customize->add_section('amberd_woo_pagination_settings',array(
		'title'	=> esc_html__('WooCommerce Pagination','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_woocommerce_settings_panel'
	));

	$wp_customize->add_setting('amberd_woo_pagination_buttons_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_woo_pagination_buttons_bg_color', esc_html('#f1f0ed')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woo_pagination_buttons_bg_color', array(
        'label' => esc_html__('Buttons background color','amberd-online-store'),
        'section' => 'amberd_woo_pagination_settings',
        'settings' => 'amberd_woo_pagination_buttons_bg_color'
    )));
	$wp_customize->add_setting('amberd_woo_pagination_buttons_link_color',array(
		'default'	=> apply_filters( 'parent_amberd_woo_pagination_buttons_link_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woo_pagination_buttons_link_color', array(
        'label' => esc_html__('Text color of active buttons','amberd-online-store'),
        'section' => 'amberd_woo_pagination_settings',
        'settings' => 'amberd_woo_pagination_buttons_link_color'
    )));
	$wp_customize->add_setting('amberd_woo_pagination_buttons_text_color',array(
		'default'	=> apply_filters( 'parent_amberd_woo_pagination_buttons_text_color', esc_html('#9d78d7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woo_pagination_buttons_text_color', array(
        'label' => esc_html__('Text color of inactive buttons','amberd-online-store'),
        'section' => 'amberd_woo_pagination_settings',
        'settings' => 'amberd_woo_pagination_buttons_text_color'
    )));
	$wp_customize->add_setting('amberd_woo_pagination_buttons_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_woo_pagination_buttons_bg_hover_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woo_pagination_buttons_bg_hover_color', array(
        'label' => esc_html__('Buttons background hover color','amberd-online-store'),
        'section' => 'amberd_woo_pagination_settings',
        'settings' => 'amberd_woo_pagination_buttons_bg_hover_color'
    )));
	$wp_customize->add_setting('amberd_woo_pagination_buttons_link_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_woo_pagination_buttons_link_hover_color', esc_html('#f8f6f2')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woo_pagination_buttons_link_hover_color', array(
        'label' => esc_html__('Text color of active buttons on hover','amberd-online-store'),
        'section' => 'amberd_woo_pagination_settings',
        'settings' => 'amberd_woo_pagination_buttons_link_hover_color'
    )));
	$wp_customize->add_setting('amberd_woo_pagination_buttons_text_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_woo_pagination_buttons_text_hover_color', esc_html('#9d78d7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_woo_pagination_buttons_text_hover_color', array(
        'label' => esc_html__('Text color of inactive buttons on hover','amberd-online-store'),
        'section' => 'amberd_woo_pagination_settings',
        'settings' => 'amberd_woo_pagination_buttons_text_hover_color'
    )));
	$wp_customize->add_setting( 'amberd_woo_pagination_text_font_size',
	array(
		'default' => esc_html('18'),
		'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_woo_pagination_text_font_size',
		array(
		'label' => esc_html__( 'Font-size of buttons (px)', 'amberd-online-store' ),
		'section' => 'amberd_woo_pagination_settings',
		'input_attrs' => array(
			'min' => esc_html('16'),
			'max' => esc_html('20'),
			'step' => esc_html('1'),
		),
		)
	) );