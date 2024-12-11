<?php
/**
 * The template for displaying search forms in Pet Animal Store
 *
 * @package Pet Animal Store
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'pet-animal-store' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'pet-animal-store' ); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'pet-animal-store' ); ?>">
</form>