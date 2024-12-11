<?php
/**
 * Pet Animal Store: Block Patterns
 *
 * @package Pet Animal Store
 * @since   1.0.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'pet-animal-store',
		array( 'label' => __( 'Pet Animal Store', 'pet-animal-store' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {
	register_block_pattern(
		'pet-animal-store/banner-section',
		array(
			'title'      => __( 'Banner Section', 'pet-animal-store' ),
			'categories' => array( 'pet-animal-store' ),
			'content'    => "<!-- wp:cover {\"url\":\"" . esc_url(get_template_directory_uri()) . "/images/banner-image.png\",\"id\":3506,\"dimRatio\":0,\"contentPosition\":\"center center\",\"align\":\"full\",\"className\":\"pet-animal-store-banner-section\"} -->\n<div class=\"wp-block-cover alignfull pet-animal-store-banner-section\"><span aria-hidden=\"true\" class=\"wp-block-cover__background has-background-dim-0 has-background-dim\"></span><img class=\"wp-block-cover__image-background wp-image-3506\" alt=\"\" src=\"" . esc_url(get_template_directory_uri()) . "/images/banner-image.png\" data-object-fit=\"cover\"/><div class=\"wp-block-cover__inner-container\"><!-- wp:columns {\"className\":\"pet-animal-store-banner-section-text  px-lg-5 mx-lg-5  px-md-5\"} -->\n<div class=\"wp-block-columns pet-animal-store-banner-section-text  px-lg-5 mx-lg-5 px-md-5\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"level\":1,\"style\":{\"typography\":{\"fontSize\":\"40px\"}}} -->\n<h1 style=\"font-size:40px\">Lorem ipsum&nbsp;is simply dummy text</h1>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph {\"style\":{\"typography\":{\"fontSize\":\"16px\"}}} -->\n<p style=\"font-size:16px\">loream &nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:buttons -->\n<div class=\"wp-block-buttons\"><!-- wp:button {\"style\":{\"border\":{\"radius\":\"0px\"},\"color\":{\"background\":\"#83df00\",\"text\":\"#333333\"}},\"fontSize\":\"small\"} -->\n<div class=\"wp-block-button has-custom-font-size has-small-font-size\"><a class=\"wp-block-button__link has-text-color has-background\" style=\"border-radius:0px;background-color:#83df00;color:#333333\">READ MORE</a></div>\n<!-- /wp:button --></div>\n<!-- /wp:buttons --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div></div>\n<!-- /wp:cover -->",
		)
	);

	register_block_pattern(
		'pet-animal-store/product-section',
		array(
			'title'      => __( 'Product Section', 'pet-animal-store' ),
			'categories' => array( 'pet-animal-store' ),
			'content'    => "<!-- wp:group {\"className\":\"pet-animal-store-product-section pt-4\"} -->\n<div class=\"wp-block-group pet-animal-store-product-section pt-4\"><!-- wp:paragraph {\"align\":\"center\",\"style\":{\"typography\":{\"fontSize\":\"32px\"}}} -->\n<p class=\"has-text-align-center\" style=\"font-size:32px\">PET SUPPLIES</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"align\":\"center\",\"id\":3523,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image aligncenter size-full\"><img src=\"" . esc_url(get_template_directory_uri()) . "/images/line.png\" alt=\"\" class=\"wp-image-3523\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:woocommerce/product-category {\"columns\":4,\"rows\":1,\"categories\":[18],\"className\":\"pet-animal-store-product-section-column   mx-lg-5\"} /--></div>\n<!-- /wp:group -->",
		)
	);
}