<?php
    $wp_customize->add_section('amberd_top_header_section',array(
		'title'	=> esc_html__('Top Header','amberd-online-store'),					
		'priority'		=> 23
	));
	$wp_customize->add_setting( 'amberd_enable_top_header',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'amberd_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Toggle_Switch_Custom_control( $wp_customize, 'amberd_enable_top_header',
        array(
        'label' => esc_html__( 'Hide Top Header', 'amberd-online-store' ),
        'section' => 'amberd_top_header_section'
        )
    ) );
	$wp_customize->add_setting( 'amberd_top_header_layout',
	array(
		'default' => esc_html('phoneleft'),
		'transport' => 'refresh',
		'sanitize_callback' => 'amberd_text_sanitization'
	)
	);
	$wp_customize->add_control( new Amberd_Image_Radio_Button_Custom_Control( $wp_customize, 'amberd_top_header_layout',
	array(
		'label' => esc_html__( 'Top header layout', 'amberd-online-store' ),
		'description' => esc_html__( 'Select the position of the top header elements', 'amberd-online-store' ),
		'section' => 'amberd_top_header_section',
		'choices' => array(
		'phoneleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/email-left.png',
			'name' => esc_html__( 'Phone and email on the left side', 'amberd-online-store' )
		),
		'phonesocialcenter' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/email-social-center.png',
			'name' => esc_html__( 'Center', 'amberd-online-store' )
		),
		'phoneright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/email-right.png',
			'name' => esc_html__( 'Phone and email on the right side', 'amberd-online-store' )
		)
		)
	)
	) );
	$wp_customize->add_setting('amberd_top_header_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_top_header_bg_color', esc_html('#3d148c')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_top_header_bg_color', array(
        'label' => esc_html__('Top header background color','amberd-online-store'),
        'section' => 'amberd_top_header_section',
        'settings' => 'amberd_top_header_bg_color'
    )));
	$wp_customize->add_setting('amberd_top_header_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_top_header_gradient_type',array(
			'label'	=> esc_html__('Gradient type','amberd-online-store'),
			'section'	=> 'amberd_top_header_section',
			'setting'	=> 'amberd_top_header_gradient_type',
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
	$wp_customize->add_setting('amberd_top_header_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_amberd_top_header_bg_gradient_color', esc_html('#873ccf')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_top_header_bg_gradient_color', array(
        'label' => esc_html__('Top header gradient color','amberd-online-store'),
        'section' => 'amberd_top_header_section',
        'settings' => 'amberd_top_header_bg_gradient_color'
    )));
	$wp_customize->add_setting( 'amberd_enable_top_header_border',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'amberd_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Toggle_Switch_Custom_control( $wp_customize, 'amberd_enable_top_header_border',
        array(
        'label' => esc_html__( 'Hide top header border', 'amberd-online-store' ),
        'section' => 'amberd_top_header_section'
        )
    ) );
	$wp_customize->add_setting('amberd_top_header_border_color',array(
		'default'	=> apply_filters( 'parent_amberd_top_header_border_color', esc_html('#dab3ff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_top_header_border_color', array(
        'label' => esc_html__('Top header border color','amberd-online-store'),
        'section' => 'amberd_top_header_section',
        'settings' => 'amberd_top_header_border_color'
    )));
	$wp_customize->add_setting('amberd_top_header_text_color',array(
		'default'	=> apply_filters( 'parent_amberd_top_header_text_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_top_header_text_color', array(
        'label' => esc_html__('Top header text color','amberd-online-store'),
        'section' => 'amberd_top_header_section',
        'settings' => 'amberd_top_header_text_color'
    )));
	$wp_customize->add_setting('amberd_top_header_phone_number',array(
		'default'	=> esc_html('(555) 555-1234'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'amberd_top_header_phone_number',
            array(
                'label'    => esc_html__('Phone Number','amberd-online-store'),
                'section'  => 'amberd_top_header_section',
                'settings' => 'amberd_top_header_phone_number',
                'type'     => 'text'
            )
        )
    );
	$wp_customize->add_setting('amberd_top_header_email', array(
			'default'	=> esc_html('info@example.com'),
			'sanitize_callback' => 'sanitize_email'
		)
	);
	$wp_customize->add_control('amberd_top_header_email', array(
			'label' => esc_html__( 'Email', 'amberd-online-store' ),
			'section' => 'amberd_top_header_section',
			'settings' => 'amberd_top_header_email',
			'type' => 'email'
		)
	);
	$wp_customize->add_setting('amberd_top_header_social_icons_color',array(
		'default'	=> apply_filters( 'parent_amberd_top_header_social_icons_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_top_header_social_icons_color', array(
        'label' => esc_html__('Social icons color','amberd-online-store'),
        'section' => 'amberd_top_header_section',
        'settings' => 'amberd_top_header_social_icons_color'
    )));
	$wp_customize->add_setting('amberd_top_header_social_icons_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_top_header_social_icons_bg_color', esc_html('#863bce')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_top_header_social_icons_bg_color', array(
        'label' => esc_html__('Social icons background color','amberd-online-store'),
        'section' => 'amberd_top_header_section',
        'settings' => 'amberd_top_header_social_icons_bg_color'
    )));
    $wp_customize->add_setting( 'amberd_top_header_disable_twitter',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'amberd_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Toggle_Switch_Custom_control( $wp_customize, 'amberd_top_header_disable_twitter',
        array(
        'label' => esc_html__( 'Hide Twitter icon', 'amberd-online-store' ),
        'section' => 'amberd_top_header_section'
        )
    ) );
	$wp_customize->add_setting('amberd_top_header_twitter_url',array(
		'default'	=> esc_url('https://twitter.com'),
		'sanitize_callback'	=> 'amberd_url_sanitization'	
	));
	$wp_customize->add_control('amberd_top_header_twitter_url',array(
			'label'	=> esc_html__('Twitter page URL','amberd-online-store'),
			'section'	=> 'amberd_top_header_section',
			'setting'	=> 'amberd_top_header_twitter_url'
	));	

    $wp_customize->add_setting( 'amberd_top_header_disable_facebook',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'amberd_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Toggle_Switch_Custom_control( $wp_customize, 'amberd_top_header_disable_facebook',
        array(
        'label' => esc_html__( 'Hide Facebook icon', 'amberd-online-store' ),
        'section' => 'amberd_top_header_section'
        )
    ) );
	$wp_customize->add_setting('amberd_top_header_facebook_url',array(
		'default'	=> esc_url('https://www.facebook.com/'),
		'sanitize_callback'	=> 'amberd_url_sanitization'	
	));
	$wp_customize->add_control('amberd_top_header_facebook_url',array(
			'label'	=> esc_html__('Facebook page URL','amberd-online-store'),
			'section'	=> 'amberd_top_header_section',
			'setting'	=> 'amberd_top_header_facebook_url'
	));	

	$wp_customize->add_setting( 'amberd_top_header_disable_linkedin',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'amberd_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Toggle_Switch_Custom_control( $wp_customize, 'amberd_top_header_disable_linkedin',
        array(
        'label' => esc_html__( 'Hide Linkedin icon', 'amberd-online-store' ),
        'section' => 'amberd_top_header_section'
        )
    ) );
	$wp_customize->add_setting('amberd_top_header_linkedin_url',array(
		'default'	=> esc_url('https://www.linkedin.com'),
		'sanitize_callback'	=> 'amberd_url_sanitization'	
	));
	$wp_customize->add_control('amberd_top_header_linkedin_url',array(
			'label'	=> esc_html__('Linkedin page URL','amberd-online-store'),
			'section'	=> 'amberd_top_header_section',
			'setting'	=> 'amberd_top_header_linkedin_url'
	));	

	$wp_customize->add_setting( 'amberd_top_header_disable_youtube',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'amberd_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Toggle_Switch_Custom_control( $wp_customize, 'amberd_top_header_disable_youtube',
        array(
        'label' => esc_html__( 'Hide YouTube icon', 'amberd-online-store' ),
        'section' => 'amberd_top_header_section'
        )
    ) );
	$wp_customize->add_setting('amberd_top_header_youtube_url',array(
		'default'	=> esc_url('https://www.youtube.com/'),
		'sanitize_callback'	=> 'amberd_url_sanitization'	
	));
	$wp_customize->add_control('amberd_top_header_youtube_url',array(
			'label'	=> esc_html__('YouTube page URL','amberd-online-store'),
			'section'	=> 'amberd_top_header_section',
			'setting'	=> 'amberd_top_header_youtube_url'
	));	

	$wp_customize->add_setting( 'amberd_top_header_disable_instagram',
    array(
       'default' => esc_html(''),
       'transport' => 'refresh',
       'sanitize_callback' => 'amberd_switch_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Toggle_Switch_Custom_control( $wp_customize, 'amberd_top_header_disable_instagram',
        array(
        'label' => esc_html__( 'Hide Instagram icon', 'amberd-online-store' ),
        'section' => 'amberd_top_header_section'
        )
    ) );
	$wp_customize->add_setting('amberd_top_header_instagram_url',array(
		'default'	=> esc_url('https://www.instagram.com/'),
		'sanitize_callback'	=> 'amberd_url_sanitization'	
	));
	$wp_customize->add_control('amberd_top_header_instagram_url',array(
			'label'	=> esc_html__('Instagram page URL','amberd-online-store'),
			'section'	=> 'amberd_top_header_section',
			'setting'	=> 'amberd_top_header_instagram_url'
	));