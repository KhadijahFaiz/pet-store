<?php 
        $wp_customize->add_section('amberd_footer_section',array(
            'title'	=> esc_html__('Footer','amberd-online-store'),
            'priority'		=> 30
        ));
        $wp_customize->add_setting( 'amberd_footer_layout',
        array(
            'default' => esc_html('amberdthreewidgetsleft'),
            'transport' => 'refresh',
            'sanitize_callback' => 'amberd_text_sanitization'
        )
        );
        $wp_customize->add_control( new Amberd_Image_Radio_Button_Custom_Control( $wp_customize, 'amberd_footer_layout',
        array(
            'label' => esc_html__( 'Footer layout', 'amberd-online-store' ),
            'description' => esc_html__( 'Select the layout of the footer', 'amberd-online-store' ),
            'section' => 'amberd_footer_section',
            'choices' => array(
            'amberdthreewidgetsleft' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-one.jpg',
                'name' => esc_html__( 'Large widget on the left', 'amberd-online-store' )
            ),
            'amberdthreewidgetscenter' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-two.jpg',
                'name' => esc_html__( 'Large widget in the center', 'amberd-online-store' )
            ),
            'amberdthreewidgetsright' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-three.jpg',
                'name' => esc_html__( 'Large widget on the right', 'amberd-online-store' )
            ),
            'amberdfourwidgets' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'images/footer-layout-four.jpg',
                'name' => esc_html__( 'Four widgets', 'amberd-online-store' )
            )
            )
        )
        ) );
        $wp_customize->add_setting('amberd_footer_template',array(
            'default'	=> esc_html('amberd-footer-one'),
            'sanitize_callback'	=> 'amberd_text_sanitization'	
        ));
        $wp_customize->add_control('amberd_footer_template',array(
                'label'	=> esc_html__('Footer style','amberd-online-store'),
                'section'	=> 'amberd_footer_section',
                'setting'	=> 'amberd_footer_template',
                'type' => 'select',
                'choices' => array(
                    'amberd-footer-one' => esc_html__('Style 1', 'amberd-online-store'),
                    'amberd-footer-two' => esc_html__('Style 2', 'amberd-online-store'),
                    'amberd-footer-three' => esc_html__('Style 3', 'amberd-online-store'),
                    'amberd-footer-four' => esc_html__('Style 4', 'amberd-online-store'),
                    'amberd-footer-five' => esc_html__('Style 5', 'amberd-online-store'),
                    )
        ));	
        $wp_customize->add_setting('amberd_footer_copyright_text',array(
            'default'	=> esc_html('Copyright ©2023. All rights reserved.'),
            'sanitize_callback'	=> 'amberd_text_sanitization'	
        ));
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'amberd_footer_copyright_text',
                array(
                    'label'    => esc_html__('Copyright text','amberd-online-store'),
                    'section'  => 'amberd_footer_section',
                    'settings' => 'amberd_footer_copyright_text',
                    'type'     => 'text'
                )
            )
        );