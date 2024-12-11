<?php 
	$wp_customize->add_panel( 'amberd_blog_archive_search_panel', 
	array(
		'title'	=> esc_html__('Blog/Archive/Search','amberd-online-store'),			
		'description'	=> esc_html__('Blog/Archive/Search pages settings','amberd-online-store'),		
		'priority'		=> 27
	) 
	);

	##################------ Blog/Archive Page ------##################

	$wp_customize->add_section('amberd_blog_section',array(
		'title'	=> esc_html__('Blog/Archive Page','amberd-online-store'),
		'priority'		=> null,
		'panel'         => 'amberd_blog_archive_search_panel'
	));
	$wp_customize->add_setting('amberd_archive_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_archive_banner_width',array(
			'label'	=> esc_html__('Blog/Archive banner width','amberd-online-store'),
			'section'	=> 'amberd_blog_section',
			'setting'	=> 'amberd_archive_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','amberd-online-store'),
				'wide' => esc_html__('Wide','amberd-online-store')
				)
	));	
	$wp_customize->add_setting('amberd_archive_banner_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_archive_banner_title_alignment',array(
			'label'	=> esc_html__('Blog/Archive title alignment','amberd-online-store'),
			'section'	=> 'amberd_blog_section',
			'setting'	=> 'amberd_archive_banner_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','amberd-online-store'),
				'center' => esc_html__('Center','amberd-online-store'),
				'right' => esc_html__('Right','amberd-online-store')
				)
	));	
	$wp_customize->add_setting('amberd_archive_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_archive_banner_bg_color', esc_html('#faf8ff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_archive_banner_bg_color', array(
        'label' => esc_html__('Blog/Archive banner background color','amberd-online-store'),
        'section' => 'amberd_blog_section',
        'settings' => 'amberd_archive_banner_bg_color'
    )));
	$wp_customize->add_setting('amberd_archive_banner_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_archive_banner_bg_gradient_type',array(
			'label'	=> esc_html__('Archive pages banner gradient type','amberd-online-store'),
			'section'	=> 'amberd_blog_section',
			'setting'	=> 'amberd_archive_banner_bg_gradient_type',
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
	$wp_customize->add_setting('amberd_archive_banner_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_amberd_archive_banner_bg_gradient_color', esc_html('#faf8ff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_archive_banner_bg_gradient_color', array(
        'label' => esc_html__('Archive pages banner gradient color','amberd-online-store'),
        'section' => 'amberd_blog_section',
        'settings' => 'amberd_archive_banner_bg_gradient_color'
    )));
	$wp_customize->add_setting('amberd_archive_banner_title_color',array(
		'default'	=> apply_filters( 'parent_amberd_archive_banner_title_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_archive_banner_title_color', array(
        'label' => esc_html__('Blog/Archive title color','amberd-online-store'),
        'section' => 'amberd_blog_section',
        'settings' => 'amberd_archive_banner_title_color'
    )));
    $wp_customize->add_setting( 'amberd_blog_archive_page_layout',
	array(
		'default' => esc_html('sidebarright'),
		'transport' => 'refresh',
		'sanitize_callback' => 'amberd_text_sanitization'
	)
	);
	$wp_customize->add_control( new Amberd_Image_Radio_Button_Custom_Control( $wp_customize, 'amberd_blog_archive_page_layout',
	array(
		'label' => esc_html__( 'Blog/Archive Page Layout', 'amberd-online-store' ),
		'description' => esc_html__( 'Choose the blog/archive page layout.', 'amberd-online-store' ),
		'section' => 'amberd_blog_section',
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

	##################------ Search Page ------##################

	$wp_customize->add_section('amberd_search_page_section',array(
		'title'	=> esc_html__('Search Page','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_blog_archive_search_panel'
	));


	$wp_customize->add_setting('amberd_search_banner_width',array(
		'default'	=> esc_html('narrow'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_search_banner_width',array(
			'label'	=> esc_html__('Search page banner width','amberd-online-store'),
			'section'	=> 'amberd_search_page_section',
			'setting'	=> 'amberd_search_banner_width',
			'type' => 'select',
			'choices' => array(
				'narrow' => esc_html__('Narrow','amberd-online-store'),
				'wide' => esc_html__('Wide','amberd-online-store')
				)
	));
	$wp_customize->add_setting('amberd_search_banner_title_alignment',array(
		'default'	=> esc_html('center'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_search_banner_title_alignment',array(
			'label'	=> esc_html__('Search page title alignment','amberd-online-store'),
			'section'	=> 'amberd_search_page_section',
			'setting'	=> 'amberd_search_banner_title_alignment',
			'type' => 'select',
			'choices' => array(
				'left' => esc_html__('Left','amberd-online-store'),
				'center' => esc_html__('Center','amberd-online-store'),
				'right' => esc_html__('Right','amberd-online-store')
				)
	));
	$wp_customize->add_setting('amberd_search_banner_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_search_banner_bg_color', esc_html('#faf8ff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_search_banner_bg_color', array(
		'label' => esc_html__('Search page banner background color','amberd-online-store'),
		'section' => 'amberd_search_page_section',
		'settings' => 'amberd_search_banner_bg_color'
	)));
	$wp_customize->add_setting('amberd_search_banner_bg_gradient_type',array(
		'default'	=> esc_html('to right'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_search_banner_bg_gradient_type',array(
			'label'	=> esc_html__('Search page banner gradient type','amberd-online-store'),
			'section'	=> 'amberd_search_page_section',
			'setting'	=> 'amberd_search_banner_bg_gradient_type',
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
	$wp_customize->add_setting('amberd_search_banner_bg_gradient_color',array(
		'default'	=> apply_filters( 'parent_amberd_search_banner_bg_gradient_color', esc_html('#faf8ff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_search_banner_bg_gradient_color', array(
        'label' => esc_html__('Search page banner gradient color','amberd-online-store'),
        'section' => 'amberd_search_page_section',
        'settings' => 'amberd_search_banner_bg_gradient_color'
    )));
	$wp_customize->add_setting('amberd_search_banner_title_color',array(
		'default'	=> apply_filters( 'parent_amberd_search_banner_title_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_search_banner_title_color', array(
		'label' => esc_html__('Search page title color','amberd-online-store'),
		'section' => 'amberd_search_page_section',
		'settings' => 'amberd_search_banner_title_color'
	)));	
	$wp_customize->add_setting( 'amberd_search_page_layout',
	array(
		'default' => esc_html('sidebarright'),
		'transport' => 'refresh',
		'sanitize_callback' => 'amberd_text_sanitization'
	)
	);
	$wp_customize->add_control( new Amberd_Image_Radio_Button_Custom_Control( $wp_customize, 'amberd_search_page_layout',
	array(
		'label' => esc_html__( 'Search Page Layout', 'amberd-online-store' ),
		'description' => esc_html__( 'Choose the search page layout.', 'amberd-online-store' ),
		'section' => 'amberd_search_page_section',
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
	$wp_customize->add_setting('amberd_search_page_button_style',array(
		'default'	=> esc_html('amberd_first_button_slide first_btn_slide_right'),
		'sanitize_callback'	=> 'amberd_text_sanitization'	
	));
	$wp_customize->add_control('amberd_search_page_button_style',array(
			'label'	=> esc_html__('Search Page button style','amberd-online-store'),
			'section'	=> 'amberd_search_page_section',
			'setting'	=> 'amberd_search_page_button_style',
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

	##################------ General ------##################
	
	$wp_customize->add_section('amberd_blog_archive_search_general_section',array(
		'title'	=> esc_html__('General','amberd-online-store'),
		'description'	=> esc_html__('This is the global options page for the Blog/Archive/Search posts lists.','amberd-online-store'),
		'priority'		=> null,
		'panel'         => 'amberd_blog_archive_search_panel'
	));
	$wp_customize->add_setting('amberd_blog_settings_posts_list_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_blog_settings_posts_list_bg_color', esc_html('#faf8ff')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_blog_settings_posts_list_bg_color', array(
        'label' => esc_html__('Summary/Post/Page block background color','amberd-online-store'),
        'section' => 'amberd_blog_archive_search_general_section',
        'settings' => 'amberd_blog_settings_posts_list_bg_color'
    )));

	
	$wp_customize->add_setting( 'amberd_blog_settings_title_font_size',
    array(
       'default' => esc_html('30'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_blog_settings_title_font_size',
		array(
		'label' => esc_html__( 'Title font-size (px)', 'amberd-online-store' ),
		'section' => 'amberd_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('20'),
			'max' => esc_html('50'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('amberd_blog_settings_title_color',array(
		'default'	=> apply_filters( 'parent_amberd_blog_settings_title_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_blog_settings_title_color', array(
        'label' => esc_html__('Title color','amberd-online-store'),
        'section' => 'amberd_blog_archive_search_general_section',
        'settings' => 'amberd_blog_settings_title_color'
    )));
	$wp_customize->add_setting('amberd_blog_settings_title_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_blog_settings_title_hover_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_blog_settings_title_hover_color', array(
        'label' => esc_html__('Title hover color','amberd-online-store'),
        'section' => 'amberd_blog_archive_search_general_section',
        'settings' => 'amberd_blog_settings_title_hover_color'
    )));
	$wp_customize->add_setting('amberd_blog_settings_title_border_color',array(
		'default'	=> apply_filters( 'parent_amberd_blog_settings_title_border_color', esc_html('#7a5bfb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_blog_settings_title_border_color', array(
        'label' => esc_html__('Title border color','amberd-online-store'),
        'section' => 'amberd_blog_archive_search_general_section',
        'settings' => 'amberd_blog_settings_title_border_color'
    )));
	$wp_customize->add_setting( 'amberd_blog_settings_metas_font_size',
    array(
       'default' => esc_html('16'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_blog_settings_metas_font_size',
		array(
		'label' => esc_html__( 'Entry metas font-size (px)', 'amberd-online-store' ),
		'section' => 'amberd_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('30'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('amberd_blog_settings_metas_color',array(
		'default'	=> apply_filters( 'parent_amberd_blog_settings_metas_color', esc_html('#5a65ab')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_blog_settings_metas_color', array(
        'label' => esc_html__('Color of the metas','amberd-online-store'),
        'section' => 'amberd_blog_archive_search_general_section',
        'settings' => 'amberd_blog_settings_metas_color'
    )));
	$wp_customize->add_setting('amberd_blog_settings_metas_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_blog_settings_metas_hover_color', esc_html('#ff5952')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_blog_settings_metas_hover_color', array(
        'label' => esc_html__('Entry metas hover color','amberd-online-store'),
        'section' => 'amberd_blog_archive_search_general_section',
        'settings' => 'amberd_blog_settings_metas_hover_color'
    )));
	$wp_customize->add_setting('amberd_blog_settings_meta_icons_color',array(
		'default'	=> apply_filters( 'parent_amberd_blog_settings_meta_icons_color', esc_html('#7a5bfb')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_blog_settings_meta_icons_color', array(
        'label' => esc_html__('Icons color of the metas','amberd-online-store'),
        'section' => 'amberd_blog_archive_search_general_section',
        'settings' => 'amberd_blog_settings_meta_icons_color'
    )));
	$wp_customize->add_setting( 'amberd_blog_settings_content_text_font_size',
    array(
       'default' => esc_html('18'),
       'sanitize_callback' => 'amberd_sanitize_integer'
		)
	);
	$wp_customize->add_control( new Amberd_Slider_Custom_Control( $wp_customize, 'amberd_blog_settings_content_text_font_size',
		array(
		'label' => esc_html__( 'Content font-size (px)', 'amberd-online-store' ),
		'section' => 'amberd_blog_archive_search_general_section',
		'input_attrs' => array(
			'min' => esc_html('10'),
			'max' => esc_html('40'),
			'step' => esc_html('1'),
		),
		)
	) );
	$wp_customize->add_setting('amberd_blog_settings_content_text_color',array(
		'default'	=> apply_filters( 'parent_amberd_blog_settings_content_text_color', esc_html('#333333')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_blog_settings_content_text_color', array(
        'label' => esc_html__('Content text color','amberd-online-store'),
        'section' => 'amberd_blog_archive_search_general_section',
        'settings' => 'amberd_blog_settings_content_text_color'
    )));
	
	##################------ Pagination ------##################

	$wp_customize->add_section('amberd_pagination_settings',array(
		'title'	=> esc_html__('Pagination','amberd-online-store'),					
		'priority'		=> null,
		'panel'         => 'amberd_blog_archive_search_panel'
	));

	$wp_customize->add_setting('amberd_pagination_buttons_bg_color',array(
		'default'	=> apply_filters( 'parent_amberd_pagination_buttons_bg_color', esc_html('#f1f0ed')),
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_pagination_buttons_bg_color', array(
        'label' => esc_html__('Buttons background color','amberd-online-store'),
        'section' => 'amberd_pagination_settings',
        'settings' => 'amberd_pagination_buttons_bg_color'
    )));

	$wp_customize->add_setting('amberd_pagination_buttons_link_color',array(
		'default'	=> apply_filters( 'parent_amberd_pagination_buttons_link_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_pagination_buttons_link_color', array(
        'label' => esc_html__('Text color of active buttons','amberd-online-store'),
        'section' => 'amberd_pagination_settings',
        'settings' => 'amberd_pagination_buttons_link_color'
    )));
	$wp_customize->add_setting('amberd_pagination_buttons_text_color',array(
		'default'	=> apply_filters( 'parent_amberd_pagination_buttons_text_color', esc_html('#9d78d7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_pagination_buttons_text_color', array(
        'label' => esc_html__('Text color of inactive buttons','amberd-online-store'),
        'section' => 'amberd_pagination_settings',
        'settings' => 'amberd_pagination_buttons_text_color'
    )));
	$wp_customize->add_setting('amberd_pagination_buttons_bg_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_pagination_buttons_bg_hover_color', esc_html('#8224e3')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_pagination_buttons_bg_hover_color', array(
        'label' => esc_html__('Buttons background hover color','amberd-online-store'),
        'section' => 'amberd_pagination_settings',
        'settings' => 'amberd_pagination_buttons_bg_hover_color'
    )));
	$wp_customize->add_setting('amberd_pagination_buttons_link_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_pagination_buttons_link_hover_color', esc_html('#f8f6f2')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_pagination_buttons_link_hover_color', array(
        'label' => esc_html__('Text color of active buttons on hover','amberd-online-store'),
        'section' => 'amberd_pagination_settings',
        'settings' => 'amberd_pagination_buttons_link_hover_color'
    )));
	$wp_customize->add_setting('amberd_pagination_buttons_text_hover_color',array(
		'default'	=> apply_filters( 'parent_amberd_pagination_buttons_text_hover_color', esc_html('#9d78d7')),
		'sanitize_callback'	=> 'sanitize_hex_color'	
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'amberd_pagination_buttons_text_hover_color', array(
        'label' => esc_html__('Text color of inactive buttons on hover','amberd-online-store'),
        'section' => 'amberd_pagination_settings',
        'settings' => 'amberd_pagination_buttons_text_hover_color'
    )));