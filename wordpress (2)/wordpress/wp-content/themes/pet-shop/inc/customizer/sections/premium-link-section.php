<?php

##################------ Pro Button Section ------##################
	$wp_customize->register_section_type( 'pet_shop_amberd_Section_Premium' );

	$wp_customize->add_section(
		new pet_shop_amberd_Section_Premium(
			$wp_customize,
			'theme_upsell_child',
			array(
				'title'    => esc_html__('Pet Shop','pet-shop'),
				'pro_text' => esc_html__('Premium','pet-shop'),
				'pro_url'  => esc_url('https://wpdevart.com/wordpress-pet-shop-theme'),
				'priority'  => 10,
			)
		)
	);