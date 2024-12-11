<?php

    $wp_customize->register_section_type( 'Amberd_Premium_Features_List' );


	##################------ Premium Features Sections ------##################

	$wp_customize->add_section(
		new Amberd_Premium_Features_List(
			$wp_customize,
			'amberd_theme_general_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'amberd-online-store' ),
                'upsell_link'  => apply_filters( 'parent_amberd_premium_features_url', esc_url('https://wpdevart.com/amberd-wordpress-online-store-theme')),
				'premium_features_list' => array(
					esc_html__( '+40 Other Popular Fonts', 'amberd-online-store' ),
					esc_html__( 'Wide and Full-width Layouts', 'amberd-online-store' ),
					esc_html__( 'Preloader', 'amberd-online-store' ),
					esc_html__( 'Customizable Search Overlay', 'amberd-online-store' ),
					esc_html__( 'Back To Top Button', 'amberd-online-store' ),
					esc_html__( '... and Other Premium Features', 'amberd-online-store' ),
				),
				'panel'         => 'amberd_general_settings_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Amberd_Premium_Features_List(
			$wp_customize,
			'amberd_theme_header_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'amberd-online-store' ),
                'upsell_link'  => apply_filters( 'parent_amberd_premium_features_url', esc_url('https://wpdevart.com/amberd-wordpress-online-store-theme')),
				'premium_features_list' => array(
					esc_html__( 'Sticky Header Feature', 'amberd-online-store' ),
					esc_html__( 'Sticky Header Feature for Mobile', 'amberd-online-store' ),
                    esc_html__( 'Logo Animations', 'amberd-online-store' ),
					esc_html__( 'Search Button Animations', 'amberd-online-store' ),
                    esc_html__( 'Woo Cart Animations', 'amberd-online-store' ),
					esc_html__( 'Wide and Full-width Layouts', 'amberd-online-store' ),
					esc_html__( '... and Other Premium Features', 'amberd-online-store' ),
				),
				'panel'         => 'amberd_header_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Amberd_Premium_Features_List(
			$wp_customize,
			'amberd_theme_single_post_page_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'amberd-online-store' ),
                'upsell_link'  => apply_filters( 'parent_amberd_premium_features_url', esc_url('https://wpdevart.com/amberd-wordpress-online-store-theme')),
				'premium_features_list' => array(
					esc_html__( 'Breadcrumbs', 'amberd-online-store' ),
					esc_html__( 'Post/Page Title Animations', 'amberd-online-store' ),
					esc_html__( 'Post/Page Banner Animations', 'amberd-online-store' ),
                    esc_html__( '4 Animated Banner Elements', 'amberd-online-store' ),
					esc_html__( 'Animated Elements Colors', 'amberd-online-store' ),
					esc_html__( '... and Other Premium Features', 'amberd-online-store' ),
				),
				'panel'         => 'amberd_single_post_page_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Amberd_Premium_Features_List(
			$wp_customize,
			'amberd_theme_blog_archive_search_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'amberd-online-store' ),
                'upsell_link'  => apply_filters( 'parent_amberd_premium_features_url', esc_url('https://wpdevart.com/amberd-wordpress-online-store-theme')),
				'premium_features_list' => array(
					esc_html__( 'Images Hover Effects', 'amberd-online-store' ),
					esc_html__( 'Archive/Search Page Title Animations', 'amberd-online-store' ),
                    esc_html__( 'Archive/Search Page Banner Animations', 'amberd-online-store' ),
					esc_html__( '4 Animated Elements', 'amberd-online-store' ),
                    esc_html__( 'Animated Elements Colors', 'amberd-online-store' ),
					esc_html__( '... and Other Premium Features', 'amberd-online-store' ),
				),
				'panel'         => 'amberd_blog_archive_search_panel',
				'priority'      => 7777,
			)
		)
	);

    $wp_customize->add_section(
		new Amberd_Premium_Features_List(
			$wp_customize,
			'amberd_theme_custom_homepage_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'amberd-online-store' ),
                'upsell_link'  => apply_filters( 'parent_amberd_premium_features_url', esc_url('https://wpdevart.com/amberd-wordpress-online-store-theme')),
				'premium_features_list' => array(
					esc_html__( '+3 Homepage Banner Themes', 'amberd-online-store' ),
					esc_html__( 'WooCommerce Section', 'amberd-online-store' ),
					esc_html__( 'Achievements Section', 'amberd-online-store' ),
					esc_html__( 'Advantages Section', 'amberd-online-store' ),
					esc_html__( 'Services Section', 'amberd-online-store' ),
					esc_html__( '... and Other Premium Features', 'amberd-online-store' ),
				),
				'panel'         => 'amberd_custom_homepage_panel',
				'priority'      => 7777,
			)
		)
	);

	$wp_customize->add_section(
		new Amberd_Premium_Features_List(
			$wp_customize,
			'amberd_theme_woo_features',
			array(
				'title'         => esc_html__( 'Even More Options in the Premium Version!', 'amberd-online-store' ),
                'upsell_link'  => apply_filters( 'parent_amberd_premium_features_url', esc_url('https://wpdevart.com/amberd-wordpress-online-store-theme')),
				'premium_features_list' => array(
					esc_html__( 'Breadcrumbs', 'amberd-online-store' ),
					esc_html__( 'Customizable Mini cart', 'amberd-online-store' ),
					esc_html__( 'Wide and Full-width Layouts', 'amberd-online-store' ),
					esc_html__( 'WooCommerce Layout Options', 'amberd-online-store' ),
                    esc_html__( 'WooCommerce Search Bar Section', 'amberd-online-store' ),
                    esc_html__( 'Customizable Category List and Search Bar', 'amberd-online-store' ),
					esc_html__( 'WooCommerce Sidebar Options', 'amberd-online-store' ),
					esc_html__( '... and Other Premium Features', 'amberd-online-store' ),
				),
				'panel'         => 'amberd_woocommerce_settings_panel',
				'priority'      => 7777,
			)
		)
	);
        
    ##################------ Premium Features Controls------##################

    $wp_customize->add_setting( 'amberd_logo_settings_premium_features',
    array(
        'sanitize_callback' => 'amberd_text_sanitization',
    )
    );
    $wp_customize->add_control( new Amberd_Premium_Features_Control_List( $wp_customize, 'amberd_logo_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'amberd-online-store' ),
        'section' => 'title_tagline',
        'priority' => 50,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Text Logo animations', 'amberd-online-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Text Logo font-size', 'amberd-online-store' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Text Logo font weight', 'amberd-online-store' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'amberd-online-store' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'amberd_font_settings_premium_features',
    array(
        'sanitize_callback' => 'amberd_text_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Premium_Features_Control_List( $wp_customize, 'amberd_font_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'amberd-online-store' ),
        'section' => 'amberd_fonts_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( '+40 Other Popular Fonts', 'amberd-online-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'amberd-online-store' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'amberd_header_general_settings_premium_features',
    array(
        'sanitize_callback' => 'amberd_text_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Premium_Features_Control_List( $wp_customize, 'amberd_header_general_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'amberd-online-store' ),
        'section' => 'amberd_header_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Sticky Header Feature', 'amberd-online-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Sticky Header Feature for Mobile', 'amberd-online-store' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Animations for Header Elements', 'amberd-online-store' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'amberd-online-store' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'amberd_top_header_settings_premium_features',
    array(
        'sanitize_callback' => 'amberd_text_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Premium_Features_Control_List( $wp_customize, 'amberd_top_header_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'amberd-online-store' ),
        'section' => 'amberd_top_header_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Address Section', 'amberd-online-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Phone/Email/Address Icon Color', 'amberd-online-store' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Animations for Top Header Elements', 'amberd-online-store' )
            ),
            'feature4' => array(
                'name' => esc_html__( '... and Other Premium Features', 'amberd-online-store' )
            ),
        )
    )
    ) );
    
    $wp_customize->add_setting( 'amberd_header_menu_search_settings_premium_features',
    array(
        'sanitize_callback' => 'amberd_text_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Premium_Features_Control_List( $wp_customize, 'amberd_header_menu_search_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'amberd-online-store' ),
        'section' => 'amberd_header_menu_search_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Search Button Animations', 'amberd-online-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'amberd-online-store' )
            ),
        )
    )
    ) );

	if ( class_exists( 'WooCommerce' ) ) {
    $wp_customize->add_setting( 'amberd_header_woo_cart_settings_premium_features',
    array(
        'sanitize_callback' => 'amberd_text_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Premium_Features_Control_List( $wp_customize, 'amberd_header_woo_cart_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'amberd-online-store' ),
        'section' => 'amberd_header_woo_cart',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Woo Cart Animations', 'amberd-online-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'amberd-online-store' )
            ),
        )
    )
    ) );
    };

    $wp_customize->add_setting( 'amberd_single_post_settings_premium_features',
    array(
        'sanitize_callback' => 'amberd_text_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Premium_Features_Control_List( $wp_customize, 'amberd_single_post_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'amberd-online-store' ),
        'section' => 'amberd_single_post_section',
        'priority' => 777,
        'choices' => array(
			'feature1' => array(
                'name' => esc_html__( 'Breadcrumbs', 'amberd-online-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Title Animations', 'amberd-online-store' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Banner Animations', 'amberd-online-store' )
            ),
            'feature4' => array(
                'name' => esc_html__( '4 Animated Elements', 'amberd-online-store' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'amberd-online-store' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'amberd-online-store' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'amberd_single_page_settings_premium_features',
    array(
        'sanitize_callback' => 'amberd_text_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Premium_Features_Control_List( $wp_customize, 'amberd_single_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'amberd-online-store' ),
        'section' => 'amberd_single_page_section',
        'priority' => 777,
        'choices' => array(
			'feature1' => array(
                'name' => esc_html__( 'Breadcrumbs', 'amberd-online-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Title Animations', 'amberd-online-store' )
            ),
            'feature3' => array(
                'name' => esc_html__( 'Banner Animations', 'amberd-online-store' )
            ),
            'feature4' => array(
                'name' => esc_html__( '4 Animated Elements', 'amberd-online-store' )
            ),
            'feature5' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'amberd-online-store' )
            ),
            'feature6' => array(
                'name' => esc_html__( '... and Other Premium Features', 'amberd-online-store' )
            ),
        )
    )
    ) );

    $wp_customize->add_setting( 'amberd_blog_archive_page_settings_premium_features',
    array(
        'sanitize_callback' => 'amberd_text_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Premium_Features_Control_List( $wp_customize, 'amberd_blog_archive_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'amberd-online-store' ),
        'section' => 'amberd_blog_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'amberd-online-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'amberd-online-store' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'amberd-online-store' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'amberd-online-store' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'amberd-online-store' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'amberd_search_page_settings_premium_features',
    array(
        'sanitize_callback' => 'amberd_text_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Premium_Features_Control_List( $wp_customize, 'amberd_search_page_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'amberd-online-store' ),
        'section' => 'amberd_search_page_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Title Animations', 'amberd-online-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( 'Banner Animations', 'amberd-online-store' )
            ),
            'feature3' => array(
                'name' => esc_html__( '4 Animated Elements', 'amberd-online-store' )
            ),
            'feature4' => array(
                'name' => esc_html__( 'Animated Elements Colors', 'amberd-online-store' )
            ),
            'feature5' => array(
                'name' => esc_html__( '... and Other Premium Features', 'amberd-online-store' )
            ),
        )
    )
    ) );
    $wp_customize->add_setting( 'amberd_blog_settings_premium_features',
    array(
        'sanitize_callback' => 'amberd_text_sanitization'
    )
    );
    $wp_customize->add_control( new Amberd_Premium_Features_Control_List( $wp_customize, 'amberd_blog_settings_premium_features',
    array(
        'label' => esc_html__( 'More Features in the Premium Version!', 'amberd-online-store' ),
        'section' => 'amberd_blog_archive_search_general_section',
        'priority' => 777,
        'choices' => array(
            'feature1' => array(
                'name' => esc_html__( 'Images Hover Effects', 'amberd-online-store' )
            ),
            'feature2' => array(
                'name' => esc_html__( '... and Other Premium Features', 'amberd-online-store' )
            ),
        )
    )
    ) );