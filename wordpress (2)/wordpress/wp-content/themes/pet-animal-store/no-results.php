<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Pet Animal Store
 */
?>

<header role="banner">
	<h2 class="entry-title"><?php echo esc_html( get_theme_mod('pet_animal_store_no_result_title',__('Nothing Found', 'pet-animal-store' )) ); ?></h2>
</header>

<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
	<p><?php printf( esc_html__( 'Ready to publish your first post? Get started here.', 'pet-animal-store' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
	<?php elseif ( is_search() ) : ?>
		<p><?php echo esc_html( get_theme_mod('pet_animal_store_no_result_text',__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'pet-animal-store' )) ); ?></p><br />
		<?php if (get_theme_mod('pet_animal_store_show_search_form',true) != '') {
			get_search_form();
		}?>
	<?php else : ?>
		<p><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'pet-animal-store' ); ?></p><br />
		<div class="read-moresec my-3">
			<a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right py-2 px-4"><?php esc_html_e( 'Back to Home Page', 'pet-animal-store' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Back to Home Page', 'pet-animal-store' );?></span></a>
		</div>
<?php endif; ?>