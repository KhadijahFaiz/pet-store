<?php
    $wp_customize->add_section('amberd_not_found_section',array(
		'title'	=> esc_html__('404 Page','amberd-online-store'),					
		'priority'		=> 31
	));
	$wp_customize->add_setting('amberd_not_found_page_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_not_found_page_bg_color', esc_html('#faf4ff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_not_found_page_bg_color', array(
        'label' => esc_html__('404 Page background color','amberd-online-store'),
        'section' => 'amberd_not_found_section',
        'settings' => 'amberd_not_found_page_bg_color'
    )));
	$wp_customize->add_setting('amberd_not_found_image',array(
		'default'	=> esc_url(get_theme_file_uri('/images/amberd-404.png')),
		'sanitize_callback'	=> 'amberd_url_sanitization'
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'amberd_not_found_image', array(
        'label' => esc_html__('404 page Image','amberd-online-store'),
		'description' => esc_html__( 'Recommended image size ~1080*550', 'amberd-online-store' ),
        'section' => 'amberd_not_found_section',
        'settings' => 'amberd_not_found_image',
        'button_labels' => array(
                    'select' =>  esc_html__('Select Image', 'amberd-online-store'),
                    'remove' =>  esc_html__('Remove Image', 'amberd-online-store'),
                    'change' =>  esc_html__('Change Image', 'amberd-online-store'),
                    )
    )));
	$wp_customize->add_setting('amberd_not_found_page_title',array(
		'default'	=> esc_html('Oops! Page Not Found'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_not_found_page_title',
            array(
                'label'    => esc_html__('404 page title','amberd-online-store'),
                'section'  => 'amberd_not_found_section',
                'settings' => 'amberd_not_found_page_title',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('amberd_not_found_page_description',array(
		'default'	=> esc_html('The page or URL you are trying to access was not found. Use the homepage link below to navigate to the homepage. You can also use the search function.'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_not_found_page_description',array(
			'label'	=> esc_html__('404 page description','amberd-online-store'),
			'section'	=> 'amberd_not_found_section',
			'setting'	=> 'amberd_not_found_page_description'
	));	
	$wp_customize->add_setting('amberd_not_found_page_button_text',array(
		'default'	=> esc_html('Back to Homepage'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_not_found_page_button_text',array(
			'label'	=> esc_html__('404 page button text','amberd-online-store'),
			'section'	=> 'amberd_not_found_section',
			'setting'	=> 'amberd_not_found_page_button_text'
	));	
	$wp_customize->add_setting('amberd_not_found_page_button_url',array(
		'default'	=> esc_url(get_home_url()),
		'sanitize_callback'	=> 'amberd_url_sanitization'	
	));
	$wp_customize->add_control('amberd_not_found_page_button_url',array(
			'label'	=> esc_html__('404 page button URL','amberd-online-store'),
			'section'	=> 'amberd_not_found_section',
			'setting'	=> 'amberd_not_found_page_button_url'
	));	
	$wp_customize->add_setting('amberd_not_found_page_button_style',array(
		'default'	=> esc_html('amberd_first_button_slide first_btn_slide_right'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_not_found_page_button_style',array(
			'label'	=> esc_html__('404 Page button style','amberd-online-store'),
			'section'	=> 'amberd_not_found_section',
			'setting'	=> 'amberd_not_found_page_button_style',
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