<?php 
	$wp_customize->add_panel( 'amberd_single_post_page_panel', 
	array(
		'title'	=> esc_html__('Single Post/Page','amberd-online-store'),			
		'description'	=> esc_html__('Single Post/Page settings','amberd-online-store'),		
		'priority'		=> 25
	) 
	);

	##################------ Single Post ------##################

	$wp_customize->add_section('amberd_single_post_section',array(
		'title'	=> esc_html__('Single Post','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_single_post_page_panel'
	));

	$wp_customize->add_setting('amberd_single_post_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_single_post_banner_width',array(
			'label'	=> esc_html__('Single post banner width','amberd-online-store'),
			'section'	=> 'amberd_single_post_section',
			'setting'	=> 'amberd_single_post_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','amberd-online-store'),
				'wide' => esc_html__('Wide','amberd-online-store')
				)
	));	
	$wp_customize->add_setting('amberd_single_post_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_single_post_title_alignment',array(
			'label'	=> esc_html__('Position of elements','amberd-online-store'),
			'section'	=> 'amberd_single_post_section',
			'setting'	=> 'amberd_single_post_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','amberd-online-store'),
				'center' => esc_html__('Center','amberd-online-store'),
				'right' => esc_html__('Right','amberd-online-store')
				)
	));	
	$wp_customize->add_setting('amberd_single_post_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_single_post_banner_bg_color', esc_html('#faf8ff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_single_post_banner_bg_color', array(
        'label' => esc_html__('Single post banner BG color','amberd-online-store'),
        'section' => 'amberd_single_post_section',
        'settings' => 'amberd_single_post_banner_bg_color'
    )));
	$wp_customize->add_setting('amberd_single_post_banner_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_single_post_banner_gradient_type',array(
			'label'	=> esc_html__('Single post banner gradient type','amberd-online-store'),
			'section'	=> 'amberd_single_post_section',
			'setting'	=> 'amberd_single_post_banner_gradient_type',
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
	$wp_customize->add_setting('amberd_single_post_banner_gradient_color',array(
		'default'	=> apply_filters( 'parent_amberd_single_post_banner_gradient_color', esc_html('#faf8ff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_single_post_banner_gradient_color', array(
        'label' => esc_html__('Single post banner gradient color','amberd-online-store'),
        'section' => 'amberd_single_post_section',
        'settings' => 'amberd_single_post_banner_gradient_color'
    )));
	$wp_customize->add_setting('amberd_single_post_banner_title_color',array(
		'default'	=> apply_filters( 'parent_amberd_single_post_banner_title_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_single_post_banner_title_color', array(
        'label' => esc_html__('Banner/Single Post title color','amberd-online-store'),
        'section' => 'amberd_single_post_section',
        'settings' => 'amberd_single_post_banner_title_color'
    )));
	$wp_customize->add_setting('amberd_single_post_banner_entry_text_color',array(
		'default'	=> apply_filters( 'parent_amberd_single_post_banner_entry_text_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_single_post_banner_entry_text_color', array(
        'label' => esc_html__('Banner text color','amberd-online-store'),
        'section' => 'amberd_single_post_section',
        'settings' => 'amberd_single_post_banner_entry_text_color'
    )));
	$wp_customize->add_setting('amberd_single_post_banner_entry_link_color',array(
		'default'	=> apply_filters( 'parent_amberd_single_post_banner_entry_link_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_single_post_banner_entry_link_color', array(
        'label' => esc_html__('Banner link color','amberd-online-store'),
        'section' => 'amberd_single_post_section',
        'settings' => 'amberd_single_post_banner_entry_link_color'
    )));
	$wp_customize->add_setting('amberd_single_post_banner_entry_link_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_single_post_banner_entry_link_hover_color', esc_html('#ff6200')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_single_post_banner_entry_link_hover_color', array(
        'label' => esc_html__('Banner link hover color','amberd-online-store'),
        'section' => 'amberd_single_post_section',
        'settings' => 'amberd_single_post_banner_entry_link_hover_color'
    )));
    $wp_customize->add_setting( 'amberd_single_post_layout',
	array(
		'default' => esc_html('sidebarright'),
		'transport' => 'refresh',
		'sanitize_callback' => 'amberd_text_sanitization'
	)
	);
	$wp_customize->add_control( new Amberd_Image_Radio_Button_Custom_Control( $wp_customize, 'amberd_single_post_layout',
	array(
		'label' => esc_html__( 'Single Post Layout', 'amberd-online-store' ),
		'description' => esc_html__( 'Choose the single post layout.', 'amberd-online-store' ),
		'section' => 'amberd_single_post_section',
		'choices' => array(
		'sidebarleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-left.png',
			'name' => esc_html__( 'Left Sidebar', 'amberd-online-store' )
		),
		'sidebarnone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-none.png',
			'name' => esc_html__( 'No Sidebar', 'amberd-online-store' )
		),
		'sidebarright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-right.png',
			'name' => esc_html__( 'Right Sidebar', 'amberd-online-store' )
		)
		)
	)
	) );

	##################------ Single Page ------##################

	$wp_customize->add_section('amberd_single_page_section',array(
		'title'	=> esc_html__('Single Page','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_single_post_page_panel'
	));

	$wp_customize->add_setting('amberd_single_page_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_single_page_banner_width',array(
			'label'	=> esc_html__('Single page banner width','amberd-online-store'),
			'section'	=> 'amberd_single_page_section',
			'setting'	=> 'amberd_single_page_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','amberd-online-store'),
				'wide' => esc_html__('Wide','amberd-online-store')
				)
	));	
	$wp_customize->add_setting('amberd_single_page_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_single_page_title_alignment',array(
			'label'	=> esc_html__('Position of elements','amberd-online-store'),
			'section'	=> 'amberd_single_page_section',
			'setting'	=> 'amberd_single_page_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','amberd-online-store'),
				'center' => esc_html__('Center','amberd-online-store'),
				'right' => esc_html__('Right','amberd-online-store')
				)
	));	
	$wp_customize->add_setting('amberd_single_page_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_single_page_banner_bg_color', esc_html('#faf8ff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_single_page_banner_bg_color', array(
        'label' => esc_html__('Single page banner BG color','amberd-online-store'),
        'section' => 'amberd_single_page_section',
        'settings' => 'amberd_single_page_banner_bg_color'
    )));
	$wp_customize->add_setting('amberd_single_page_banner_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_single_page_banner_gradient_type',array(
			'label'	=> esc_html__('Single page banner gradient type','amberd-online-store'),
			'section'	=> 'amberd_single_page_section',
			'setting'	=> 'amberd_single_page_banner_gradient_type',
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
	$wp_customize->add_setting('amberd_single_page_banner_gradient_color',array(
		'default'	=> apply_filters( 'parent_amberd_single_page_banner_gradient_color', esc_html('#faf8ff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_single_page_banner_gradient_color', array(
        'label' => esc_html__('Single page banner gradient color','amberd-online-store'),
        'section' => 'amberd_single_page_section',
        'settings' => 'amberd_single_page_banner_gradient_color'
    )));
	$wp_customize->add_setting('amberd_single_page_banner_title_color',array(
		'default'	=> apply_filters( 'parent_amberd_single_page_banner_title_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_single_page_banner_title_color', array(
        'label' => esc_html__('Banner/Single page title color','amberd-online-store'),
        'section' => 'amberd_single_page_section',
        'settings' => 'amberd_single_page_banner_title_color'
    )));
	$wp_customize->add_setting('amberd_single_page_banner_entry_text_color',array(
		'default'	=> apply_filters( 'parent_amberd_single_page_banner_entry_text_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_single_page_banner_entry_text_color', array(
        'label' => esc_html__('Banner text color','amberd-online-store'),
        'section' => 'amberd_single_page_section',
        'settings' => 'amberd_single_page_banner_entry_text_color'
    )));
	$wp_customize->add_setting('amberd_single_page_banner_entry_link_color',array(
		'default'	=> apply_filters( 'parent_amberd_single_page_banner_entry_link_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_single_page_banner_entry_link_color', array(
        'label' => esc_html__('Banner link color','amberd-online-store'),
        'section' => 'amberd_single_page_section',
        'settings' => 'amberd_single_page_banner_entry_link_color'
    )));
	$wp_customize->add_setting('amberd_single_page_banner_entry_link_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_single_page_banner_entry_link_hover_color', esc_html('#ff6200')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_single_page_banner_entry_link_hover_color', array(
        'label' => esc_html__('Banner link hover color','amberd-online-store'),
        'section' => 'amberd_single_page_section',
        'settings' => 'amberd_single_page_banner_entry_link_hover_color'
    )));
    $wp_customize->add_setting( 'amberd_single_page_layout',
	array(
		'default' => esc_html('sidebarnone'),
		'transport' => 'refresh',
		'sanitize_callback' => 'amberd_text_sanitization'
	)
	);
	$wp_customize->add_control( new Amberd_Image_Radio_Button_Custom_Control( $wp_customize, 'amberd_single_page_layout',
	array(
		'label' => esc_html__( 'Single Page Layout', 'amberd-online-store' ),
		'description' => esc_html__( 'Choose the single page layout.', 'amberd-online-store' ),
		'section' => 'amberd_single_page_section',
		'choices' => array(
		'sidebarleft' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-left.png',
			'name' => esc_html__( 'Left Sidebar', 'amberd-online-store' )
		),
		'sidebarnone' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-none.png',
			'name' => esc_html__( 'No Sidebar', 'amberd-online-store' )
		),
		'sidebarright' => array(
			'image' => trailingslashit( get_template_directory_uri() ) . 'images/sidebar-right.png',
			'name' => esc_html__( 'Right Sidebar', 'amberd-online-store' )
		)
		)
	)
	) );

	##################------ Comments ------##################

	$wp_customize->add_section('amberd_comments_settings',array(
		'title'	=> esc_html__('Comments Box','amberd-online-store'),
		'description'	=> esc_html__('The Comment Box is a block of user responses. Other comments section settings can be managed on the General settings page (for example, the Post Comment button can be controlled in the Primary Button section, or the text colors for Comment*, Name*, Email*, or Website can be controlled in the Colors section).','amberd-online-store'),	
		'priority'		=> null,
		'panel'         => 'amberd_single_post_page_panel'
	));
	$wp_customize->add_setting('amberd_comments_reply_box_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_comments_reply_box_bg_color', esc_html('#fcfcff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_comments_reply_box_bg_color', array(
        'label' => esc_html__('Comments reply box background color','amberd-online-store'),
        'section' => 'amberd_comments_settings',
        'settings' => 'amberd_comments_reply_box_bg_color'
    )));
	$wp_customize->add_setting('amberd_comments_reply_box_text_color',array(
		'default'	=> apply_filters( 'parent_amberd_comments_reply_box_text_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_comments_reply_box_text_color', array(
        'label' => esc_html__('Comments reply box text color','amberd-online-store'),
        'section' => 'amberd_comments_settings',
        'settings' => 'amberd_comments_reply_box_text_color'
    )));
	$wp_customize->add_setting('amberd_comments_reply_box_heading_color',array(
		'default'	=> apply_filters( 'parent_amberd_comments_reply_box_heading_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_comments_reply_box_heading_color', array(
        'label' => esc_html__('Comments reply box heading color','amberd-online-store'),
        'section' => 'amberd_comments_settings',
        'settings' => 'amberd_comments_reply_box_heading_color'
    )));
	$wp_customize->add_setting('amberd_comments_reply_box_link_color',array(
		'default'	=> apply_filters( 'parent_amberd_comments_reply_box_link_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_comments_reply_box_link_color', array(
        'label' => esc_html__('Comments reply box link color','amberd-online-store'),
        'section' => 'amberd_comments_settings',
        'settings' => 'amberd_comments_reply_box_link_color'
    )));
	$wp_customize->add_setting('amberd_comments_reply_box_link_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_comments_reply_box_link_hover_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_comments_reply_box_link_hover_color', array(
        'label' => esc_html__('Comments reply box link hover color','amberd-online-store'),
        'section' => 'amberd_comments_settings',
        'settings' => 'amberd_comments_reply_box_link_hover_color'
    )));
	$wp_customize->add_setting('amberd_comments_reply_button_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_comments_reply_button_bg_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_comments_reply_button_bg_color', array(
        'label' => esc_html__('Comments reply button bg color','amberd-online-store'),
        'section' => 'amberd_comments_settings',
        'settings' => 'amberd_comments_reply_button_bg_color'
    )));
	$wp_customize->add_setting('amberd_comments_reply_button_link_color',array(
		'default'	=> apply_filters( 'parent_amberd_comments_reply_button_link_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_comments_reply_button_link_color', array(
        'label' => esc_html__('Comments reply button link color','amberd-online-store'),
        'section' => 'amberd_comments_settings',
        'settings' => 'amberd_comments_reply_button_link_color'
    )));
	$wp_customize->add_setting('amberd_comments_reply_button_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_comments_reply_button_bg_hover_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_comments_reply_button_bg_hover_color', array(
        'label' => esc_html__('Comments reply button bg hover color','amberd-online-store'),
        'section' => 'amberd_comments_settings',
        'settings' => 'amberd_comments_reply_button_bg_hover_color'
    )));
	$wp_customize->add_setting('amberd_comments_reply_button_link_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_comments_reply_button_link_hover_color', esc_html('#ffffff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_comments_reply_button_link_hover_color', array(
        'label' => esc_html__('Comments reply button link hover color','amberd-online-store'),
        'section' => 'amberd_comments_settings',
        'settings' => 'amberd_comments_reply_button_link_hover_color'
    )));