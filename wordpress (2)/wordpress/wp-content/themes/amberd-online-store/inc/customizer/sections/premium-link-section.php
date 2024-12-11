<?php

##################------ Pro Button Section ------##################
	$wp_customize->register_section_type( 'amberd_Section_Premium' );

	$wp_customize->add_section(
		new amberd_Section_Premium(
			$wp_customize,
			'theme_upsell',
			array(
				'title'    => esc_html__('AmBerd','amberd-online-store'),
				'pro_text' => esc_html__('Premium','amberd-online-store'),
				'pro_url'  => esc_url('https://wpdevart.com/amberd-wordpress-online-store-theme'),
				'priority'  => 10,
			)
		)
	);