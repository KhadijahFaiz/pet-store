<?php

require get_theme_file_path() . '/inc/customizer/custom-controls.php';

function pet_shop_amberd_customize_register( $wp_customize ) {

	require get_theme_file_path() . '/inc/customizer/sections/premium-link-section.php';

}

add_action( 'customize_register', 'pet_shop_amberd_customize_register' );