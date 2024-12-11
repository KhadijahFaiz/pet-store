<?php
/**
 * @package Pet Animal Store
 * @subpackage pet-animal-store
 * @since pet-animal-store 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses pet_animal_store_header_style()
*/

function pet_animal_store_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'pet_animal_store_custom_header_args', array(

		'default-text-color' => 'fff',
		'header-text' 	     =>	false,
		'width'              => 1300,
		'height'             => 175,
		'flex-height'        => true,
	    'flex-width'         => true,
		'wp-head-callback'   => 'pet_animal_store_header_style',
	) ) );

}

add_action( 'after_setup_theme', 'pet_animal_store_custom_header_setup' );

if ( ! function_exists( 'pet_animal_store_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see pet_animal_store_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'pet_animal_store_header_style' );
function pet_animal_store_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$pet_animal_store_custom_css = "
        .topbar{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
			background-size: 100% 100%;
		}";
	   	wp_add_inline_style( 'pet-animal-store-basic-style', $pet_animal_store_custom_css );
	endif;
}
endif; // pet_animal_store_header_style