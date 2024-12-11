<?php
	$wp_customize->get_setting( 'custom_logo' )->transport = 'refresh';
	$wp_customize->get_setting( 'blogname' )->transport = 'refresh';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'refresh';
    $wp_customize->add_setting( 'amberd_header_logo_max_height',
    array(
    'default' => esc_html('100'),
    'sanitize_callback' => 'amberd_sanitize_integer'
        )
    );
    $wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_header_logo_max_height',
        array(
        'label' => esc_html__( 'Logo (image) max-height (px)', 'amberd-online-store' ),
        'section' => 'title_tagline',
        'input_attrs' => array(
            'min' => esc_html('50'),
            'max' => esc_html('300'),
            'step' => esc_html('1'),
        ),
        )
    ) );
    $wp_customize->add_setting( 'amberd_header_logo_mobile_max_height',
    array(
    'default' => esc_html('120'),
    'sanitize_callback' => 'amberd_sanitize_integer'
        )
    );
    $wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_header_logo_mobile_max_height',
        array(
        'label' => esc_html__( 'Mobile Logo (image) max-height (px)', 'amberd-online-store' ),
        'section' => 'title_tagline',
        'input_attrs' => array(
            'min' => esc_html('50'),
            'max' => esc_html('300'),
            'step' => esc_html('1'),
        ),
        )
    ) );
    $wp_customize->add_setting('amberd_header_logo_text_color',array(
        'default'	=> apply_filters( 'parent_amberd_header_logo_text_color', esc_html('#ffffff')),
        'sanitize_callback'	=> 'sanitize_hex_color'	
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_header_logo_text_color', array(
        'label' => esc_html__('Text Logo color','amberd-online-store'),
        'section' => 'title_tagline',
        'settings' => 'amberd_header_logo_text_color'
    )));
    $wp_customize->add_setting('amberd_header_logo_gradient_type',array(
        'default'	=> esc_html('to right'),
        'sanitize_callback'	=> 'amberd_text_sanitization'	
    ));
    $wp_customize->add_control('amberd_header_logo_gradient_type',array(
            'label'	=> esc_html__('Text Logo gradient type','amberd-online-store'),
            'section'	=> 'title_tagline',
            'setting'	=> 'amberd_header_logo_gradient_type',
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
    $wp_customize->add_setting('amberd_header_logo_gradient_color',array(
        'default'	=> apply_filters( 'parent_amberd_header_logo_gradient_color', esc_html('#ffffff')),
        'sanitize_callback'	=> 'sanitize_hex_color'	
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_header_logo_gradient_color', array(
        'label' => esc_html__('Text Logo gradient color','amberd-online-store'),
        'section' => 'title_tagline',
        'settings' => 'amberd_header_logo_gradient_color'
    )));