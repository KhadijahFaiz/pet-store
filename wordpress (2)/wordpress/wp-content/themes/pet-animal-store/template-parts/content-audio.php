<?php
/**
 * The template part for displaying slider
 *
 * @package Pet Animal Store
 * @subpackage pet_animal_store
 * @since Pet Animal Store 1.0
 */
?>
<?php
	$content = apply_filters( 'the_content', get_the_content() );
	$audio = false;
	// Only get audio from the content if a playlist isn't present.
	if ( false === strpos( $content, 'wp-playlist-script' ) ) {
		$audio = get_media_embedded_in_content( $content, array( 'audio' ) );
	}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="services-box p-2 mb-3">
    <div class="service-image my-2">
      <?php
        if ( ! is_single() ) {
          // If not a single post, highlight the audio file.
          if ( ! empty( $audio ) ) {
            foreach ( $audio as $audio_html ) {
              echo '<div class="entry-audio">';
                echo $audio_html;
              echo '</div><!-- .entry-audio -->';
            }
          };
        };
      ?>
    </div>
    <div class="service-text">
      <h2 class="pt-0"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html(the_title()); ?><span class="screen-reader-text"><?php esc_html(the_title()); ?></span></a></h2>
      <?php if(get_theme_mod('pet_animal_store_post_content') == 'Full Content'){ ?>
        <?php the_content(); ?>
      <?php }
      if(get_theme_mod('pet_animal_store_post_content', 'Excerpt Content') == 'Excerpt Content'){ ?>
        <?php if(get_the_excerpt()) { ?>
          <p class="m-0"><?php $pet_animal_store_excerpt = get_the_excerpt(); echo esc_html( pet_animal_store_string_limit_words( $pet_animal_store_excerpt, esc_attr(get_theme_mod('pet_animal_store_post_excerpt_length','20')))); ?><?php echo esc_html( get_theme_mod('pet_animal_store_button_excerpt_suffix','[...]') ); ?></p>
        <?php }?>
      <?php }?>
      <?php if ( get_theme_mod('pet_animal_store_post_button_text','Read More') != '' ) {?>
        <div class="service-btn mt-2">
          <a href="<?php echo esc_url(get_permalink()); ?>" class="py-2 px-3" ><?php echo esc_html( get_theme_mod('pet_animal_store_post_button_text',__( 'Read More','pet-animal-store' )) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('pet_animal_store_post_button_text',__( 'Read More','pet-animal-store' )) ); ?></span></a>  
        </div> 
      <?php }?>
    </div>
  </div>
</article>