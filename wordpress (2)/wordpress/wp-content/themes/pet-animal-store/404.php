<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Pet Animal Store
 */
get_header(); ?>

<main id="main" role="main" class="content-aa">
	<div class="container">
        <div class="page-content text-center py-5">		
			<?php if(get_theme_mod('pet_animal_store_404_title','404 Not Found')){ ?>	
				<h1><?php echo esc_html( get_theme_mod('pet_animal_store_404_title',__('404 Not Found', 'pet-animal-store' )) ); ?></h1>
			<?php }?>
			<?php if(get_theme_mod('pet_animal_store_404_text','Looks like you have taken a wrong turn. Dont worry it happens to the best of us.')){ ?>
				<p class="text-404 mb-2"><?php echo esc_html( get_theme_mod('pet_animal_store_404_text',__('Looks like you have taken a wrong turn. Dont worry it happens to the best of us.', 'pet-animal-store' )) ); ?></p>
			<?php }?>
			<?php if(get_theme_mod('pet_animal_store_404_button_text','Return to Home Page')){ ?>
				<div class="read-moresec my-3">
	           		<a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right py-2 px-4"><?php echo esc_html( get_theme_mod('pet_animal_store_404_button_text',__('Return to Home Page', 'pet-animal-store' )) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('pet_animal_store_404_button_text',__('Return to Home Page', 'pet-animal-store' )) ); ?></span></a>
				</div>
				<div class="clearfix"></div>
			<?php }?>
        </div>
	</div>
</main>

<?php get_footer(); ?>