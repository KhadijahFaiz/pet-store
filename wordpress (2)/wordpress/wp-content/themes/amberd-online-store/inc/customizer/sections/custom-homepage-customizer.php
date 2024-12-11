<?php
	$wp_customize->add_panel( 'amberd_custom_homepage_panel', 
    array(
		'title'	=> esc_html__('Custom Homepage','amberd-online-store'),
        'description'	=> esc_html__('Customize the theme custom homepage','amberd-online-store'),		
		'priority'		=> 28
    ) 
	);
	$wp_customize->add_section('amberd_custom_homepage_section',array(
		'title'	=> esc_html__('Enable Custom Homepage','amberd-online-store'),
		'priority'		=> null,
		'panel'         => 'amberd_custom_homepage_panel'
	));
    $wp_customize->add_setting( 'amberd_custom_homepage_display_option',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'amberd_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Toggle_Switch_Custom_control( $wp_customize, 'amberd_custom_homepage_display_option',
        array(
        'label' => esc_html__( 'Enable custom homepage', 'amberd-online-store' ),
		'description' => esc_html__( 'Display custom homepage instead of the latest posts', 'amberd-online-store' ),
        'section' => 'amberd_custom_homepage_section'
        )
    ) );
	$wp_customize->add_section('amberd_custom_homepage_banner_section',array(
		'title'	=> esc_html__('Banner Section','amberd-online-store'),
		'priority'		=> null,
		'panel'         => 'amberd_custom_homepage_panel'
	));

	$wp_customize->add_setting('amberd_online_store_custom_homepage_banner_theme',array(
		'default'	=> esc_html('banner-first-theme'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_online_store_custom_homepage_banner_theme',array(
			'label'	=> esc_html__('Banner Theme','amberd-online-store'),
			'section'	=> 'amberd_custom_homepage_banner_section',
			'setting'	=> 'amberd_online_store_custom_homepage_banner_theme',
			'type' => 'select',
			'choices' => array(
				'banner-first-theme' => esc_html__('First Theme', 'amberd-online-store'),
				'banner-second-theme' => esc_html__('Second Theme', 'amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_homepage_large_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_homepage_large_banner_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_homepage_large_banner_bg_color', array(
        'label' => esc_html__('Banner background color','amberd-online-store'),
        'section' => 'amberd_custom_homepage_banner_section',
        'settings' => 'amberd_homepage_large_banner_bg_color'
    )));
	$wp_customize->add_setting('amberd_homepage_large_banner_bg_gradient_type',array(
		'default'	=> esc_html('to bottom right'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_homepage_large_banner_bg_gradient_type',array(
			'label'	=> esc_html__('Gradient type','amberd-online-store'),
			'section'	=> 'amberd_custom_homepage_banner_section',
			'setting'	=> 'amberd_homepage_large_banner_bg_gradient_type',
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
	$wp_customize->add_setting('amberd_homepage_large_banner_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_amberd_homepage_large_banner_bg_gradient_color', esc_html('#fdfcff')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_homepage_large_banner_bg_gradient_color', array(
        'label' => esc_html__('Banner background gradient color','amberd-online-store'),
        'section' => 'amberd_custom_homepage_banner_section',
        'settings' => 'amberd_homepage_large_banner_bg_gradient_color'
    )));
	$wp_customize->add_setting('amberd_custom_homepage_banner_short_description',array(
		'default'	=> esc_html('It all starts here'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_custom_homepage_banner_short_description',
            array(
                'label'    => esc_html__('Banner short description','amberd-online-store'),
                'section'  => 'amberd_custom_homepage_banner_section',
                'settings' => 'amberd_custom_homepage_banner_short_description',
                'type'     => 'text'
            )
        )
    );
    $wp_customize->add_setting( 'amberd_custom_homepage_banner_short_description_font_size',
    array(
       'default' => esc_html('18'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_custom_homepage_banner_short_description_font_size',
		array(
		'label' => esc_html__( 'Short description font-size (px)', 'amberd-online-store' ),
		'section' => 'amberd_custom_homepage_banner_section',
		'input_attrs' => array(
			'min' => esc_html('1'),
			'max' => esc_html('35'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('amberd_custom_homepage_banner_short_description_color',array(
		'default'	=> apply_filters( 'parent_amberd_custom_homepage_banner_short_description_color', esc_html('#925dc4')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_custom_homepage_banner_short_description_color', array(
        'label' => esc_html__('Short description color','amberd-online-store'),
        'section' => 'amberd_custom_homepage_banner_section',
        'settings' => 'amberd_custom_homepage_banner_short_description_color'
    )));
	$wp_customize->add_setting('amberd_custom_homepage_banner_title',array(
		'default'	=> esc_html('All-in-once Place!'),'amberd-online-store',
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_custom_homepage_banner_title',
            array(
                'label'    => esc_html__('Banner title','amberd-online-store'),
                'section'  => 'amberd_custom_homepage_banner_section',
                'settings' => 'amberd_custom_homepage_banner_title',
                'type'     => 'text'
            )
        )
    );
    $wp_customize->add_setting( 'amberd_custom_homepage_banner_title_font_size',
    array(
       'default' => esc_html('50'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_custom_homepage_banner_title_font_size',
		array(
		'label' => esc_html__( 'Title font-size (px)', 'amberd-online-store' ),
		'section' => 'amberd_custom_homepage_banner_section',
		'input_attrs' => array(
			'min' => esc_html('1'),
			'max' => esc_html('90'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('amberd_custom_homepage_banner_title_color',array(
		'default'	=> apply_filters( 'parent_amberd_custom_homepage_banner_title_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_custom_homepage_banner_title_color', array(
        'label' => esc_html__('Banner title color','amberd-online-store'),
        'section' => 'amberd_custom_homepage_banner_section',
        'settings' => 'amberd_custom_homepage_banner_title_color'
    )));
	$wp_customize->add_setting('amberd_custom_homepage_banner_sliding_first_text',array(
		'default'	=> esc_html('Excellent Support'),'amberd-online-store',
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_custom_homepage_banner_sliding_first_text',
            array(
                'label'    => esc_html__('First sliding text','amberd-online-store'),
                'section'  => 'amberd_custom_homepage_banner_section',
                'settings' => 'amberd_custom_homepage_banner_sliding_first_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('amberd_custom_homepage_banner_sliding_second_text',array(
		'default'	=> esc_html('Guaranteed Quality'),'amberd-online-store',
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_custom_homepage_banner_sliding_second_text',
            array(
                'label'    => esc_html__('Second sliding text','amberd-online-store'),
                'section'  => 'amberd_custom_homepage_banner_section',
                'settings' => 'amberd_custom_homepage_banner_sliding_second_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('amberd_custom_homepage_banner_sliding_third_text',array(
		'default'	=> esc_html('Valuable Price'),'amberd-online-store',
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_custom_homepage_banner_sliding_third_text',
            array(
                'label'    => esc_html__('Third sliding text','amberd-online-store'),
                'section'  => 'amberd_custom_homepage_banner_section',
                'settings' => 'amberd_custom_homepage_banner_sliding_third_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('amberd_custom_homepage_banner_sliding_fourth_text',array(
		'default'	=> esc_html('Best Practices'),'amberd-online-store',
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_custom_homepage_banner_sliding_fourth_text',
            array(
                'label'    => esc_html__('Fourth sliding text','amberd-online-store'),
                'section'  => 'amberd_custom_homepage_banner_section',
                'settings' => 'amberd_custom_homepage_banner_sliding_fourth_text',
                'type'     => 'text'
            )
        )
    );
    $wp_customize->add_setting( 'amberd_custom_homepage_banner_sliding_text_font_size',
    array(
       'default' => esc_html('37'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_custom_homepage_banner_sliding_text_font_size',
		array(
		'label' => esc_html__( 'Sliding text font-size (px)', 'amberd-online-store' ),
		'section' => 'amberd_custom_homepage_banner_section',
		'input_attrs' => array(
			'min' => esc_html('35'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('amberd_custom_homepage_banner_sliding_text_color',array(
		'default'	=> apply_filters( 'parent_amberd_custom_homepage_banner_sliding_text_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_custom_homepage_banner_sliding_text_color', array(
        'label' => esc_html__('Sliding text title color','amberd-online-store'),
        'section' => 'amberd_custom_homepage_banner_section',
        'settings' => 'amberd_custom_homepage_banner_sliding_text_color'
    )));
	$wp_customize->add_setting('amberd_custom_homepage_banner_content',array(
		'default'	=> esc_html('We offer all services in one place, including guaranteed quality, excellent support, best practices, and competitive prices. Use the navigation buttons below to find out more information about us and our services. Share and tell your friends about it.'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_custom_homepage_banner_content',
            array(
                'label'    => esc_html__('Banner content text','amberd-online-store'),
                'section'  => 'amberd_custom_homepage_banner_section',
                'settings' => 'amberd_custom_homepage_banner_content',
                'type'     => 'text'
            )
        )
    );
    $wp_customize->add_setting( 'amberd_custom_homepage_banner_content_font_size',
    array(
       'default' => esc_html('18'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_custom_homepage_banner_content_font_size',
		array(
		'label' => esc_html__( 'Content text font-size (px)', 'amberd-online-store' ),
		'section' => 'amberd_custom_homepage_banner_section',
		'input_attrs' => array(
			'min' => esc_html('1'),
			'max' => esc_html('35'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('amberd_custom_homepage_banner_content_color',array(
		'default'	=> apply_filters( 'parent_amberd_custom_homepage_banner_content_color', esc_html('#5a65ab')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_custom_homepage_banner_content_color', array(
        'label' => esc_html__('Banner content text color','amberd-online-store'),
        'section' => 'amberd_custom_homepage_banner_section',
        'settings' => 'amberd_custom_homepage_banner_content_color'
    )));
	$wp_customize->add_setting( 'amberd_custom_homepage_show_banner_first_button',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'amberd_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Toggle_Switch_Custom_control( $wp_customize, 'amberd_custom_homepage_show_banner_first_button',
        array(
        'label' => esc_html__( 'Hide the first button', 'amberd-online-store' ),
        'section' => 'amberd_custom_homepage_banner_section'
        )
    ) );
	$wp_customize->add_setting('amberd_custom_homepage_banner_first_button_text',array(
		'default'	=> esc_html('More Details'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_custom_homepage_banner_first_button_text',
            array(
                'label'    => esc_html__('First button text','amberd-online-store'),
                'section'  => 'amberd_custom_homepage_banner_section',
                'settings' => 'amberd_custom_homepage_banner_first_button_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('amberd_custom_homepage_banner_first_button_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'amberd_url_sanitization'
	));
	$wp_customize->add_control('amberd_custom_homepage_banner_first_button_url',array(
			'label'	=> esc_html__('First button URL','amberd-online-store'),
			'section'	=> 'amberd_custom_homepage_banner_section',
			'setting'	=> 'amberd_custom_homepage_banner_first_button_url'
	));	
	$wp_customize->add_setting('amberd_custom_homepage_banner_first_button_style',array(
		'default'	=> esc_html('amberd_first_button_slide first_btn_slide_right'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));

	$wp_customize->add_control('amberd_custom_homepage_banner_first_button_style',array(
			'label'	=> esc_html__('First button style','amberd-online-store'),
			'section'	=> 'amberd_custom_homepage_banner_section',
			'setting'	=> 'amberd_custom_homepage_banner_first_button_style',
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
	$wp_customize->add_setting( 'amberd_custom_homepage_show_banner_second_button',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'amberd_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Toggle_Switch_Custom_control( $wp_customize, 'amberd_custom_homepage_show_banner_second_button',
        array(
        'label' => esc_html__( 'Hide the second button', 'amberd-online-store' ),
        'section' => 'amberd_custom_homepage_banner_section'
        )
    ) );
	$wp_customize->add_setting('amberd_custom_homepage_banner_second_button_text',array(
		'default'	=> esc_html('Order Now'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_custom_homepage_banner_second_button_text',
            array(
                'label'    => esc_html__('Second button text','amberd-online-store'),
                'section'  => 'amberd_custom_homepage_banner_section',
                'settings' => 'amberd_custom_homepage_banner_second_button_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('amberd_custom_homepage_banner_second_button_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'amberd_url_sanitization'
	));
	$wp_customize->add_control('amberd_custom_homepage_banner_second_button_url',array(
			'label'	=> esc_html__('Second button URL','amberd-online-store'),
			'section'	=> 'amberd_custom_homepage_banner_section',
			'setting'	=> 'amberd_custom_homepage_banner_second_button_url'
	));	
	
	$wp_customize->add_setting('amberd_custom_homepage_banner_second_button_style',array(
		'default'	=> esc_html('amberd_second_button_slide second_btn_slide_right'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));

	$wp_customize->add_control('amberd_custom_homepage_banner_second_button_style',array(
			'label'	=> esc_html__('Second button style','amberd-online-store'),
			'section'	=> 'amberd_custom_homepage_banner_section',
			'setting'	=> 'amberd_custom_homepage_banner_second_button_style',
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
	$wp_customize->add_setting('amberd_custom_homepage_banner_image',array(
		'default'	=> esc_url(get_theme_file_uri('/images/banner-homepage-image.jpg')),
		'sanitize_callback'	=> 'amberd_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'amberd_custom_homepage_banner_image', array(
        'label' => esc_html__('Banner Image','amberd-online-store'),
		'description' => esc_html__( 'Recommended image size ~800*800', 'amberd-online-store' ),
        'section' => 'amberd_custom_homepage_banner_section',
        'settings' => 'amberd_custom_homepage_banner_image',
        'button_labels' => array(
                    'select' => esc_html__('Select Image','amberd-online-store'),
                    'remove' => esc_html__('Remove Image','amberd-online-store'),
                    'change' => esc_html__('Change Image','amberd-online-store'),
                    )
    )));

	$wp_customize->add_section('amberd_custom_homepage_call_action_section',array(
		'title'	=> esc_html__('Call to Action Section','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_custom_homepage_panel'
	));

	$wp_customize->add_setting( 'amberd_custom_homepage_hide_call_action',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'amberd_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Toggle_Switch_Custom_control( $wp_customize, 'amberd_custom_homepage_hide_call_action',
        array(
        'label' => esc_html__( 'Hide Call to Action section', 'amberd-online-store' ),
        'section' => 'amberd_custom_homepage_call_action_section'
        )
    ) );
	$wp_customize->add_setting('amberd_custom_homepage_call_action_title',array(
		'default'	=> esc_html('Best Offer'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_custom_homepage_call_action_title',
            array(
                'label'    => esc_html__('Call to action title','amberd-online-store'),
                'section'  => 'amberd_custom_homepage_call_action_section',
                'settings' => 'amberd_custom_homepage_call_action_title',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('amberd_custom_homepage_call_action_desc',array(
		'default'	=> esc_html('A brief description of the section below.'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_custom_homepage_call_action_desc',
            array(
                'label'    => esc_html__('Call to action description','amberd-online-store'),
                'section'  => 'amberd_custom_homepage_call_action_section',
                'settings' => 'amberd_custom_homepage_call_action_desc',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('amberd_call_action_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_call_action_bg_color', esc_html('#3d148c')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_call_action_bg_color', array(
        'label' => esc_html__('Call to action background color','amberd-online-store'),
        'section' => 'amberd_custom_homepage_call_action_section',
        'settings' => 'amberd_call_action_bg_color'
    )));
	$wp_customize->add_setting('amberd_call_action_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_call_action_gradient_type',array(
			'label'	=> esc_html__('Gradient type','amberd-online-store'),
			'section'	=> 'amberd_custom_homepage_call_action_section',
			'setting'	=> 'amberd_call_action_gradient_type',
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
	$wp_customize->add_setting('amberd_call_action_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_amberd_call_action_bg_gradient_color', esc_html('#873ccf')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_call_action_bg_gradient_color', array(
        'label' => esc_html__('Call to action background gradient color','amberd-online-store'),
        'section' => 'amberd_custom_homepage_call_action_section',
        'settings' => 'amberd_call_action_bg_gradient_color'
    )));
	$wp_customize->add_setting('amberd_custom_homepage_call_action_text',array(
		'default'	=> esc_html('This is sample text for a call to action section. You can use this section to encourage users to click a button and find out more information about your services.'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_custom_homepage_call_action_text',
            array(
                'label'    => esc_html__('Call to action text','amberd-online-store'),
                'section'  => 'amberd_custom_homepage_call_action_section',
                'settings' => 'amberd_custom_homepage_call_action_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('amberd_call_action_text_color',array(
		'default'	=> apply_filters( 'parent_amberd_call_action_text_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_call_action_text_color', array(
        'label' => esc_html__('Call to action text color','amberd-online-store'),
        'section' => 'amberd_custom_homepage_call_action_section',
        'settings' => 'amberd_call_action_text_color'
    )));

    $wp_customize->add_setting( 'amberd_call_action_text_font_size',
    array(
       'default' => esc_html('30'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_call_action_text_font_size',
		array(
		'label' => esc_html__( 'Call to action text font-size (px)', 'amberd-online-store' ),
		'section' => 'amberd_custom_homepage_call_action_section',
		'input_attrs' => array(
			'min' => esc_html('25'),
			'max' => esc_html('45'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('amberd_custom_homepage_call_action_button_text',array(
		'default'	=> esc_html('Check More Details'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_custom_homepage_call_action_button_text',
            array(
                'label'    => esc_html__('Call to action button text','amberd-online-store'),
                'section'  => 'amberd_custom_homepage_call_action_section',
                'settings' => 'amberd_custom_homepage_call_action_button_text',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('amberd_custom_homepage_call_action_button_url',array(
		'default'	=> esc_url('#'),
		'sanitize_callback'	=> 'amberd_url_sanitization'	
	));
	$wp_customize->add_control('amberd_custom_homepage_call_action_button_url',array(
			'label'	=> esc_html__('Call to action button URL','amberd-online-store'),
			'section'	=> 'amberd_custom_homepage_call_action_section',
			'setting'	=> 'amberd_custom_homepage_call_action_button_url'
	));		

	$wp_customize->add_setting('amberd_custom_homepage_call_action_button_style',array(
		'default'	=> esc_html('amberd_second_button_slide second_btn_slide_right'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));

	$wp_customize->add_control('amberd_custom_homepage_call_action_button_style',array(
			'label'	=> esc_html__('Call to action button style','amberd-online-store'),
			'section'	=> 'amberd_custom_homepage_call_action_section',
			'setting'	=> 'amberd_custom_homepage_call_action_button_style',
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
	$wp_customize->add_section('amberd_custom_homepage_latest_posts_section',array(
		'title'	=> esc_html__('Latest Posts Section','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_custom_homepage_panel'
	));

	$wp_customize->add_setting( 'amberd_custom_homepage_hide_latest_post_section',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'amberd_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Toggle_Switch_Custom_control( $wp_customize, 'amberd_custom_homepage_hide_latest_post_section',
        array(
        'label' => esc_html__( 'Hide Latest Posts section', 'amberd-online-store' ),
        'section' => 'amberd_custom_homepage_latest_posts_section'
        )
    ) );
	$wp_customize->add_setting('amberd_custom_homepage_latest_post_title',array(
		'default'	=> esc_html('Latest Posts'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_custom_homepage_latest_post_title',
            array(
                'label'    => esc_html__('Latest Posts section title','amberd-online-store'),
                'section'  => 'amberd_custom_homepage_latest_posts_section',
                'settings' => 'amberd_custom_homepage_latest_post_title',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('amberd_custom_homepage_latest_post_desctiption',array(
		'default'	=> esc_html('Latest posts from our blog'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_custom_homepage_latest_post_desctiption',
            array(
                'label'    => esc_html__('Latest Posts section description','amberd-online-store'),
                'section'  => 'amberd_custom_homepage_latest_posts_section',
                'settings' => 'amberd_custom_homepage_latest_post_desctiption',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting( 'amberd_custom_homepage_number_of_latest_posts',
    array(
       'default' => esc_html('6'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_custom_homepage_number_of_latest_posts',
		array(
		'label' => esc_html__( 'The number of posts', 'amberd-online-store' ),
		'section' => 'amberd_custom_homepage_latest_posts_section',
		'input_attrs' => array(
			'min' => esc_html('1'),
			'max' => esc_html('20'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('amberd_custom_homepage_latest_posts_block_color',array(
		'default'	=> apply_filters( 'parent_amberd_custom_homepage_latest_posts_block_color', esc_html('#faf8ff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_custom_homepage_latest_posts_block_color', array(
        'label' => esc_html__('Latest posts block bg color','amberd-online-store'),
        'section' => 'amberd_custom_homepage_latest_posts_section',
        'settings' => 'amberd_custom_homepage_latest_posts_block_color'
    )));
	$wp_customize->add_setting('amberd_custom_homepage_latest_posts_title_color',array(
		'default'	=> apply_filters( 'parent_amberd_custom_homepage_latest_posts_title_color', esc_html('#9e55e9')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_custom_homepage_latest_posts_title_color', array(
        'label' => esc_html__('Latest posts title color','amberd-online-store'),
        'section' => 'amberd_custom_homepage_latest_posts_section',
        'settings' => 'amberd_custom_homepage_latest_posts_title_color'
    )));
	$wp_customize->add_setting('amberd_custom_homepage_latest_posts_text_color',array(
		'default'	=> apply_filters( 'parent_amberd_custom_homepage_latest_posts_text_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_custom_homepage_latest_posts_text_color', array(
        'label' => esc_html__('Latest posts text color','amberd-online-store'),
        'section' => 'amberd_custom_homepage_latest_posts_section',
        'settings' => 'amberd_custom_homepage_latest_posts_text_color'
    )));