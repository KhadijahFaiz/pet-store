<?php 
	$wp_customize->add_panel( 'amberd_general_settings_panel', 
    array(
		'title'	=> esc_html__('General','amberd-online-store'),			
        'description'	=> esc_html__('General Settings','amberd-online-store'),		
		'priority'		=> 21
    ) 
	);

	##################------ Fonts ------##################

	$wp_customize->add_section('amberd_fonts_section',array(
		'title'	=> esc_html__('Fonts','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_general_settings_panel'
	));
		
	$wp_customize->add_setting('amberd_global_fonts',array(
		'default'	=> esc_html('Roboto'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
  
	$wp_customize->add_control('amberd_global_fonts',array(
			'label'	=> esc_html__('Select the font','amberd-online-store'),
			'section'	=> 'amberd_fonts_section',
			'setting'	=> 'amberd_global_fonts',
			'type' => 'select',
			'choices' => array(
				'Roboto' => esc_html__('Roboto', 'amberd-online-store'),
				'Poppins' => esc_html__('Poppins', 'amberd-online-store'),
				'Open Sans' => esc_html__('Open Sans', 'amberd-online-store'),
				'Alegreya' => esc_html__('Alegreya', 'amberd-online-store'),
				'Alegreya Sans' => esc_html__('Alegreya Sans', 'amberd-online-store'),
				'Lato' => esc_html__('Lato', 'amberd-online-store'),
				'Montserrat' => esc_html__('Montserrat', 'amberd-online-store'),
				'Oswald' => esc_html__('Oswald', 'amberd-online-store'),
				'Raleway' => esc_html__('Raleway', 'amberd-online-store'),
				'Inknut Antiqua' => esc_html__('Inknut Antiqua', 'amberd-online-store'),
				)
	));

    ##################------ Primary Button ------##################

	$wp_customize->add_section('amberd_primary_button_settings',array(
		'title'	=> esc_html__('Primary Button','amberd-online-store'),
		'priority'		=> null,
		'panel'         => 'amberd_general_settings_panel'
	));
	$wp_customize->add_setting('amberd_primary_button_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_primary_button_bg_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_primary_button_bg_color', array(
        'label' => esc_html__('Primary button background color','amberd-online-store'),
        'section' => 'amberd_primary_button_settings',
        'settings' => 'amberd_primary_button_bg_color'
    )));
	$wp_customize->add_setting('amberd_primary_button_link_color',array(
		'default'	=> apply_filters( 'parent_amberd_primary_button_link_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_primary_button_link_color', array(
        'label' => esc_html__('Primary button background hover color','amberd-online-store'),
        'section' => 'amberd_primary_button_settings',
        'settings' => 'amberd_primary_button_link_color'
    )));
	$wp_customize->add_setting('amberd_primary_button_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_primary_button_bg_hover_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_primary_button_bg_hover_color', array(
        'label' => esc_html__('Primary button text color','amberd-online-store'),
        'section' => 'amberd_primary_button_settings',
        'settings' => 'amberd_primary_button_bg_hover_color'
    )));
	$wp_customize->add_setting('amberd_primary_button_link_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_primary_button_link_hover_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_primary_button_link_hover_color', array(
        'label' => esc_html__('Primary button text hover color','amberd-online-store'),
        'section' => 'amberd_primary_button_settings',
        'settings' => 'amberd_primary_button_link_hover_color'
    )));

    ##################------ Colors ------##################

	$wp_customize->add_section('amberd_main_colors_settings',array(
		'title'	=> esc_html__('Colors','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_general_settings_panel'
	));
	$wp_customize->add_setting('amberd_main_container_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_container_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_container_bg_color', array(
        'label' => esc_html__('Main container background color','amberd-online-store'),
        'section' => 'amberd_main_colors_settings',
        'settings' => 'amberd_main_container_bg_color'
    )));
	
	$wp_customize->add_setting('amberd_main_container_heading_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_container_heading_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_container_heading_color', array(
        'label' => esc_html__('Main container heading color','amberd-online-store'),
        'section' => 'amberd_main_colors_settings',
        'settings' => 'amberd_main_container_heading_color'
    )));
	$wp_customize->add_setting('amberd_main_container_text_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_container_text_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_container_text_color', array(
        'label' => esc_html__('Main container text color','amberd-online-store'),
        'section' => 'amberd_main_colors_settings',
        'settings' => 'amberd_main_container_text_color'
    )));
	$wp_customize->add_setting('amberd_main_container_link_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_container_link_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_container_link_color', array(
        'label' => esc_html__('Main container link color','amberd-online-store'),
        'section' => 'amberd_main_colors_settings',
        'settings' => 'amberd_main_container_link_color'
    )));
	$wp_customize->add_setting('amberd_main_container_link_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_container_link_hover_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_container_link_hover_color', array(
        'label' => esc_html__('Main container link hover color','amberd-online-store'),
        'section' => 'amberd_main_colors_settings',
        'settings' => 'amberd_main_container_link_hover_color'
    )));

	##################------ Sidebar Colors ------##################

	$wp_customize->add_section('amberd_sidebar_colors_settings',array(
		'title'	=> esc_html__('Sidebar Colors','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_general_settings_panel'
	));
	$wp_customize->add_setting('amberd_main_container_sidebar_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_container_sidebar_bg_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_container_sidebar_bg_color', array(
		'label' => esc_html__('Sidebar background color','amberd-online-store'),
		'section' => 'amberd_sidebar_colors_settings',
		'settings' => 'amberd_main_container_sidebar_bg_color'
	)));
	$wp_customize->add_setting('amberd_main_container_sidebar_bg_shadow_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_container_sidebar_bg_shadow_color', esc_html('#c9c9c9')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_container_sidebar_bg_shadow_color', array(
		'label' => esc_html__('Sidebar shadow color','amberd-online-store'),
		'section' => 'amberd_sidebar_colors_settings',
		'settings' => 'amberd_main_container_sidebar_bg_shadow_color'
	)));
	$wp_customize->add_setting('amberd_main_container_sidebar_heading_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_container_sidebar_heading_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_container_sidebar_heading_color', array(
		'label' => esc_html__('Sidebar headings color','amberd-online-store'),
		'section' => 'amberd_sidebar_colors_settings',
		'settings' => 'amberd_main_container_sidebar_heading_color'
	)));
	$wp_customize->add_setting('amberd_main_container_sidebar_text_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_container_sidebar_text_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_container_sidebar_text_color', array(
		'label' => esc_html__('Sidebar text color','amberd-online-store'),
		'section' => 'amberd_sidebar_colors_settings',
		'settings' => 'amberd_main_container_sidebar_text_color'
	)));
	$wp_customize->add_setting('amberd_main_container_sidebar_link_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_container_sidebar_link_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_container_sidebar_link_color', array(
		'label' => esc_html__('Sidebar link color','amberd-online-store'),
		'section' => 'amberd_sidebar_colors_settings',
		'settings' => 'amberd_main_container_sidebar_link_color'
	)));
	$wp_customize->add_setting('amberd_main_container_sidebar_link_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_main_container_sidebar_link_hover_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_main_container_sidebar_link_hover_color', array(
		'label' => esc_html__('Sidebar link hover color','amberd-online-store'),
		'section' => 'amberd_sidebar_colors_settings',
		'settings' => 'amberd_main_container_sidebar_link_hover_color'
	)));

	##################------ Typography ------##################

	$wp_customize->add_section('amberd_text_link_typography_settings',array(
		'title'	=> esc_html__('Typography','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_general_settings_panel'
	));

    $wp_customize->add_setting( 'amberd_main_container_text_font_size',
    array(
       'default' => esc_html('18'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_main_container_text_font_size',
		array(
		'label' => esc_html__( 'Main container text font-size (px)', 'amberd-online-store' ),
		'section' => 'amberd_text_link_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
    $wp_customize->add_setting( 'amberd_main_container_link_font_size',
    array(
       'default' => esc_html('18'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_main_container_link_font_size',
		array(
		'label' => esc_html__( 'Main container link font-size (px)', 'amberd-online-store' ),
		'section' => 'amberd_text_link_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('amberd_main_container_link_font_weight',array(
		'default'	=> esc_html('400'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_main_container_link_font_weight',array(
			'label'	=> esc_html__('Link font weight','amberd-online-store'),
			'section'	=> 'amberd_text_link_typography_settings',
			'setting'	=> 'amberd_main_container_link_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','amberd-online-store'),
				'400' => esc_html__('Normal 400','amberd-online-store'),
				'600' => esc_html__('Semi-Bold 600','amberd-online-store'),
				'800' => esc_html__('Extra-Bold 800','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_link_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_link_font_style',array(
			'label'	=> esc_html__('Link font style','amberd-online-store'),
			'section'	=> 'amberd_text_link_typography_settings',
			'setting'	=> 'amberd_main_container_link_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','amberd-online-store'),
				'italic' => esc_html__('Italic','amberd-online-store'),
				)
	));	

	##################------ Typography H1 ------##################

	$wp_customize->add_section('amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',array(
		'title'	=> esc_html__('Typography H1, H2, H3, H4, H5, H6','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_general_settings_panel'
	));

    $wp_customize->add_setting( 'amberd_main_container_heading_h1_font_size',
    array(
       'default' => esc_html('45'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_main_container_heading_h1_font_size',
		array(
		'label' => esc_html__( 'Heading H1 font-size (px)', 'amberd-online-store' ),
		'section' => 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('25'),
			'max' => esc_html('70'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('amberd_main_container_heading_h1_font_weight',array(
		'default'	=> esc_html('600'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_main_container_heading_h1_font_weight',array(
			'label'	=> esc_html__('Heading H1 font weight','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h1_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','amberd-online-store'),
				'400' => esc_html__('Normal 400','amberd-online-store'),
				'600' => esc_html__('Semi-Bold 600','amberd-online-store'),
				'800' => esc_html__('Extra-Bold 800','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h1_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h1_font_style',array(
			'label'	=> esc_html__('Heading H1 font style','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h1_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','amberd-online-store'),
				'italic' => esc_html__('Italic','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h1_font_transform',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h1_font_transform',array(
			'label'	=> esc_html__('Heading H1 font transform','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h1_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','amberd-online-store'),
				'capitalize' => esc_html__('Capitalize','amberd-online-store'),
				'uppercase' => esc_html__('Uppercase','amberd-online-store'),
				'lowercase' => esc_html__('Lowercase','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h1_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h1_font_decoration',array(
			'label'	=> esc_html__('Heading H1 font decoration','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h1_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','amberd-online-store'),
				'underline' => esc_html__('Underline','amberd-online-store'),
				'line-through' => esc_html__('Line-through','amberd-online-store'),
				'overline' => esc_html__('Overline','amberd-online-store'),
				)
	));	

	##################------ Typography H2 ------##################

    $wp_customize->add_setting( 'amberd_main_container_heading_h2_font_size',
    array(
       'default' => esc_html('38'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_main_container_heading_h2_font_size',
		array(
		'label' => esc_html__( 'Heading H2 font-size (px)', 'amberd-online-store' ),
		'section' => 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('20'),
			'max' => esc_html('65'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('amberd_main_container_heading_h2_font_weight',array(
		'default'	=> esc_html('600'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_main_container_heading_h2_font_weight',array(
			'label'	=> esc_html__('Heading H2 font weight','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h2_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','amberd-online-store'),
				'400' => esc_html__('Normal 400','amberd-online-store'),
				'600' => esc_html__('Semi-Bold 600','amberd-online-store'),
				'800' => esc_html__('Extra-Bold 800','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h2_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h2_font_style',array(
			'label'	=> esc_html__('Heading H2 font style','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h2_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','amberd-online-store'),
				'italic' => esc_html__('Italic','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h2_font_transform',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h2_font_transform',array(
			'label'	=> esc_html__('Heading H2 font transform','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h2_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','amberd-online-store'),
				'capitalize' => esc_html__('Capitalize','amberd-online-store'),
				'uppercase' => esc_html__('Uppercase','amberd-online-store'),
				'lowercase' => esc_html__('Lowercase','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h2_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h2_font_decoration',array(
			'label'	=> esc_html__('Heading H2 font decoration','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h2_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','amberd-online-store'),
				'underline' => esc_html__('Underline','amberd-online-store'),
				'line-through' => esc_html__('Line-through','amberd-online-store'),
				'overline' => esc_html__('Overline','amberd-online-store'),
				)
	));	

	##################------ Typography H3 ------##################

    $wp_customize->add_setting( 'amberd_main_container_heading_h3_font_size',
    array(
       'default' => esc_html('32'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_main_container_heading_h3_font_size',
		array(
		'label' => esc_html__( 'Heading H3 font-size (px)', 'amberd-online-store' ),
		'section' => 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('20'),
			'max' => esc_html('65'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('amberd_main_container_heading_h3_font_weight',array(
		'default'	=> esc_html('600'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_main_container_heading_h3_font_weight',array(
			'label'	=> esc_html__('Heading H3 font weight','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h3_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','amberd-online-store'),
				'400' => esc_html__('Normal 400','amberd-online-store'),
				'600' => esc_html__('Semi-Bold 600','amberd-online-store'),
				'800' => esc_html__('Extra-Bold 800','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h3_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h3_font_style',array(
			'label'	=> esc_html__('Heading H3 font style','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h3_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','amberd-online-store'),
				'italic' => esc_html__('Italic','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h3_font_transform',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h3_font_transform',array(
			'label'	=> esc_html__('Heading H3 font transform','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h3_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','amberd-online-store'),
				'capitalize' => esc_html__('Capitalize','amberd-online-store'),
				'uppercase' => esc_html__('Uppercase','amberd-online-store'),
				'lowercase' => esc_html__('Lowercase','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h3_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h3_font_decoration',array(
			'label'	=> esc_html__('Heading H3 font decoration','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h3_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','amberd-online-store'),
				'underline' => esc_html__('Underline','amberd-online-store'),
				'line-through' => esc_html__('Line-through','amberd-online-store'),
				'overline' => esc_html__('Overline','amberd-online-store'),
				)
	));	

	##################------ Typography H4 ------##################

    $wp_customize->add_setting( 'amberd_main_container_heading_h4_font_size',
    array(
       'default' => esc_html('28'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_main_container_heading_h4_font_size',
		array(
		'label' => esc_html__( 'Heading H4 font-size (px)', 'amberd-online-store' ),
		'section' => 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('amberd_main_container_heading_h4_font_weight',array(
		'default'	=> esc_html('600'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_main_container_heading_h4_font_weight',array(
			'label'	=> esc_html__('Heading H4 font weight','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h4_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','amberd-online-store'),
				'400' => esc_html__('Normal 400','amberd-online-store'),
				'600' => esc_html__('Semi-Bold 600','amberd-online-store'),
				'800' => esc_html__('Extra-Bold 800','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h4_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h4_font_style',array(
			'label'	=> esc_html__('Heading H4 font style','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h4_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','amberd-online-store'),
				'italic' => esc_html__('Italic','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h4_font_transform',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h4_font_transform',array(
			'label'	=> esc_html__('Heading H4 font transform','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h4_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','amberd-online-store'),
				'capitalize' => esc_html__('Capitalize','amberd-online-store'),
				'uppercase' => esc_html__('Uppercase','amberd-online-store'),
				'lowercase' => esc_html__('Lowercase','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h4_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h4_font_decoration',array(
			'label'	=> esc_html__('Heading H4 font decoration','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h4_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','amberd-online-store'),
				'underline' => esc_html__('Underline','amberd-online-store'),
				'line-through' => esc_html__('Line-through','amberd-online-store'),
				'overline' => esc_html__('Overline','amberd-online-store'),
				)
	));	

	##################------ Typography H5 ------##################

    $wp_customize->add_setting( 'amberd_main_container_heading_h5_font_size',
    array(
       'default' => esc_html('26'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_main_container_heading_h5_font_size',
		array(
		'label' => esc_html__( 'Heading H5 font-size (px)', 'amberd-online-store' ),
		'section' => 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('amberd_main_container_heading_h5_font_weight',array(
		'default'	=> esc_html('600'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_main_container_heading_h5_font_weight',array(
			'label'	=> esc_html__('Heading H5 font weight','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h5_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','amberd-online-store'),
				'400' => esc_html__('Normal 400','amberd-online-store'),
				'600' => esc_html__('Semi-Bold 600','amberd-online-store'),
				'800' => esc_html__('Extra-Bold 800','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h5_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h5_font_style',array(
			'label'	=> esc_html__('Heading H5 font style','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h5_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','amberd-online-store'),
				'italic' => esc_html__('Italic','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h5_font_transform',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h5_font_transform',array(
			'label'	=> esc_html__('Heading H5 font transform','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h5_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','amberd-online-store'),
				'capitalize' => esc_html__('Capitalize','amberd-online-store'),
				'uppercase' => esc_html__('Uppercase','amberd-online-store'),
				'lowercase' => esc_html__('Lowercase','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h5_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h5_font_decoration',array(
			'label'	=> esc_html__('Heading H5 font decoration','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h5_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','amberd-online-store'),
				'underline' => esc_html__('Underline','amberd-online-store'),
				'line-through' => esc_html__('Line-through','amberd-online-store'),
				'overline' => esc_html__('Overline','amberd-online-store'),
				)
	));	

	##################------ Typography H6 ------##################

    $wp_customize->add_setting( 'amberd_main_container_heading_h6_font_size',
    array(
       'default' => esc_html('24'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_main_container_heading_h6_font_size',
		array(
		'label' => esc_html__( 'Heading H6 font-size (px)', 'amberd-online-store' ),
		'section' => 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
		'input_attrs' => array(
			'min' => esc_html('15'),
			'max' => esc_html('60'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('amberd_main_container_heading_h6_font_weight',array(
		'default'	=> esc_html('600'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_main_container_heading_h6_font_weight',array(
			'label'	=> esc_html__('Heading H6 font weight','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h6_font_weight',
			'type' => 'select',
			'choices' => array(
				'100' => esc_html__('Thin 100','amberd-online-store'),
				'400' => esc_html__('Normal 400','amberd-online-store'),
				'600' => esc_html__('Semi-Bold 600','amberd-online-store'),
				'800' => esc_html__('Extra-Bold 800','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h6_font_style',array(
		'default'	=> esc_html('normal'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h6_font_style',array(
			'label'	=> esc_html__('Heading H6 font style','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h6_font_style',
			'type' => 'select',
			'choices' => array(
				'normal' => esc_html__('Normal','amberd-online-store'),
				'italic' => esc_html__('Italic','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h6_font_transform',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h6_font_transform',array(
			'label'	=> esc_html__('Heading H6 font transform','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h6_font_transform',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','amberd-online-store'),
				'capitalize' => esc_html__('Capitalize','amberd-online-store'),
				'uppercase' => esc_html__('Uppercase','amberd-online-store'),
				'lowercase' => esc_html__('Lowercase','amberd-online-store'),
				)
	));	
	$wp_customize->add_setting('amberd_main_container_heading_h6_font_decoration',array(
		'default'	=> esc_html('none'),
		'sanitize_callback'	=> 'amberd_text_sanitization'
	));
	$wp_customize->add_control('amberd_main_container_heading_h6_font_decoration',array(
			'label'	=> esc_html__('Heading H6 font decoration','amberd-online-store'),
			'section'	=> 'amberd_text_h1_h2_h3_h4_h5_h6_typography_settings',
			'setting'	=> 'amberd_main_container_heading_h6_font_decoration',
			'type' => 'select',
			'choices' => array(
				'none' => esc_html__('None','amberd-online-store'),
				'underline' => esc_html__('Underline','amberd-online-store'),
				'line-through' => esc_html__('Line-through','amberd-online-store'),
				'overline' => esc_html__('Overline','amberd-online-store'),
				)
	));