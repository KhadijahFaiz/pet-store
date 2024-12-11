<?php
/**
 * The template part for displaying slider
 *
 * @package Pet Animal Store
 * @subpackage pet_animal_store
 * @since Pet Animal Store 1.0
 */
?>
<div class="col-lg-4 col-md-4">
  <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="services-box p-2 mb-3">
      <?php if(has_post_thumbnail() && get_theme_mod( 'pet_animal_store_feature_image_hide',true) != '') { ?>
        <div class="service-image my-2">
          <?php the_post_thumbnail(); ?>
        </div>
      <?php }?>
      <div class="service-text">
        <h2 class="pt-0"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html(the_title()); ?><span class="screen-reader-text"><?php esc_html(the_title()); ?></span></a></h2>
        <?php if( get_theme_mod( 'pet_animal_store_date_hide',true) != '' || get_theme_mod( 'pet_animal_store_comment_hide',true) != '' || get_theme_mod( 'pet_animal_store_author_hide',true) != '' || get_theme_mod( 'pet_animal_store_time_hide',true) != '') { ?>
            <?php if( get_theme_mod( 'pet_animal_store_date_hide',true) != '') { ?>
              <span class="entry-date me-2"><i class="far fa-calendar-alt me-1"></i><?php echo esc_html( get_the_date() ); ?></span>
            <?php } ?>
            <?php if( get_theme_mod( 'pet_animal_store_author_hide',true) != '') { ?>
              <span class="entry-author me-2"><i class="fas fa-user me-1"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
            <?php } ?>

            <?php if( get_theme_mod( 'pet_animal_store_comment_hide',true) != '') { ?>
              <span class="entry-comments me-2"><i class="fas fa-comments me-1"></i> <?php comments_number( __('0 Comments','pet-animal-store'), __('0 Comments','pet-animal-store'), __('% Comments','pet-animal-store') ); ?></span>
            <?php } ?>

            <?php if( get_theme_mod( 'pet_animal_store_time_hide',true) != '') { ?>
              <span class="entry-time"><i class="fas fa-clock me-1"></i> <?php echo esc_html( get_the_time() ); ?></span>
            <?php }?>    
        <?php } ?>
        <?php if(get_the_excerpt()) { ?>
          <p class="m-0"><?php $pet_animal_store_excerpt = get_the_excerpt(); echo esc_html( pet_animal_store_string_limit_words( $pet_animal_store_excerpt, esc_attr(get_theme_mod('pet_animal_store_post_excerpt_length','20')))); ?><?php echo esc_html( get_theme_mod('pet_animal_store_button_excerpt_suffix','[...]') ); ?></p>
        <?php }?>
        <?php if ( get_theme_mod('pet_animal_store_post_button_text','Read More') != '' ) {?>
          <div class="service-btn mt-2">
            <a href="<?php echo esc_url(get_permalink()); ?>" class="py-2 px-3" ><?php echo esc_html( get_theme_mod('pet_animal_store_post_button_text',__( 'Read More','pet-animal-store' )) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('pet_animal_store_post_button_text',__( 'Read More','pet-animal-store' )) ); ?></span></a>  
          </div> 
        <?php }?>
      </div>
    </div>
  </article>
</div>