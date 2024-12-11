<?php
/**
 * The template for displaying home page.
 *
 * Template Name: Custom Home Page
 *
 * @package Pet Animal Store
 */
get_header(); ?>

<main id="main" role="main">
	<?php do_action( 'pet_animal_store_above_slider' ); ?>
	
	<?php if( get_theme_mod('pet_animal_store_slider_arrows') != '' || get_theme_mod( 'pet_animal_store_mobile_media_slider', true) != ''){ ?>
		<section id="slider">
		  	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod( 'pet_animal_store_slider_speed',3000)) ?>"> 
			    <?php $pet_animal_store_slider_pages = array();
			      	for ( $count = 1; $count <= 4; $count++ ) {
				        $mod = intval( get_theme_mod( 'pet_animal_store_slidersettings_page' . $count ));
				        if ( 'page-none-selected' != $mod ) {
				            $pet_animal_store_slider_pages[] = $mod;
				        }
			      	}
			      	if( !empty($pet_animal_store_slider_pages) ) :
			        $args = array(
			          	'post_type' => 'page',
			          	'post__in' => $pet_animal_store_slider_pages,
			          	'orderby' => 'post__in'
			        );
			        $query = new WP_Query( $args );
			        if ( $query->have_posts() ) :
			          $i = 1;
			    ?>     
			    <div class="carousel-inner" role="listbox">
			      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
			        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
			          	<a href="<?php echo esc_url( get_permalink() );?>"><?php if(has_post_thumbnail()){
		                  the_post_thumbnail();
		                } else{?>
		                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/banner-image.png" alt="" />
		                <?php } ?>
		                </a>
			          	<div class="carousel-caption">
				            <div class="inner_carousel">
				            	<?php if( get_theme_mod('pet_animal_store_slider_title',true) != ''){ ?>
				              		<h1><a href="<?php echo esc_url( get_permalink() );?>"><?php esc_html(the_title()); ?><span class="screen-reader-text"><?php esc_html(the_title()); ?></span></a></h1>
				              	<?php }?>
				              	<?php if( get_theme_mod('pet_animal_store_slider_content',true) != ''){ ?>
				                    <p><?php $pet_animal_store_excerpt = get_the_excerpt(); echo esc_html( pet_animal_store_string_limit_words( $pet_animal_store_excerpt,esc_attr(get_theme_mod('pet_animal_store_slider_excerpt','25')) ) ); ?></p>
				                <?php }?>
				                <?php if ( get_theme_mod('pet_animal_store_slider_button_text','READ MORE') != '' && get_theme_mod('pet_animal_store_slider_button',true) != '' || get_theme_mod('pet_animal_store_slider_button_responsive',true) != ''|| get_theme_mod('pet_animal_store_slider_button_link') != '') {?>
				              		<a class="read-more" href="<?php echo esc_url(get_theme_mod('pet_animal_store_slider_button_link')!= '') ? esc_url(get_theme_mod('pet_animal_store_slider_button_link')) : esc_url(get_permalink()); ?>"><?php echo esc_html( get_theme_mod('pet_animal_store_slider_button_text',__('READ MORE', 'pet-animal-store')) ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('pet_animal_store_slider_button_text',__('READ MORE', 'pet-animal-store')) ); ?></span></a>
				              	<?php }?>
				            </div>
			          	</div>
			        </div>
			      	<?php $i++; endwhile; 
			      	wp_reset_postdata();?>
			    </div>
			    <?php else : ?>
			    <div class="no-postfound"></div>
			      <?php endif;
			    endif;?>
				<?php if( get_theme_mod('pet_animal_store_slider_arrow',true) != ''){ ?>
			    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
			      <span class="carousel-control-prev-icon" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('pet_animal_store_slider_prev_icon','fas fa-chevron-left')); ?>"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Previous','pet-animal-store' );?></span>
			    </a>
			    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
			      <span class="carousel-control-next-icon" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('pet_animal_store_slider_next_icon','fas fa-chevron-right')); ?>"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Next','pet-animal-store' );?></span>
			    </a>
				<?php }?>
		  	</div>  
		  	<div class="clearfix"></div>
		</section> 
	<?php }?>

	<?php do_action( 'pet_animal_store_below_slider' ); ?>

	<?php if( get_theme_mod('pet_animal_store_sec1_title') != ''){ ?>
		<section id="our-products" class="py-5">
			<div class="container">
		        <?php if( get_theme_mod('pet_animal_store_sec1_title') != ''){ ?>     
		            <strong><?php echo esc_html(get_theme_mod('pet_animal_store_sec1_title','')); ?></strong>
		            <div class="border-image">
		    			<img  role="img" src="<?php echo esc_url(get_theme_mod('pet_animal_store_border_image',esc_url(get_template_directory_uri()).'/images/line.png')); ?>" alt="<?php esc_attr_e( 'Border Image','pet-animal-store' );?>">
		    		</div>
		        <?php }?>
				
				<?php $pet_animal_store_slider_pages = array();
					$mod = intval( get_theme_mod( 'pet_animal_store_product_page'));
					if ( 'page-none-selected' != $mod ) {
					  $pet_animal_store_slider_pages[] = $mod;
					}
					if( !empty($pet_animal_store_slider_pages) ) :
					  $args = array(
					    'post_type' => 'page',
					    'post__in' => $pet_animal_store_slider_pages,
					    'orderby' => 'post__in'
					  );
					  $query = new WP_Query( $args );
					  if ( $query->have_posts() ) :
					    $count = 0;
							while ( $query->have_posts() ) : $query->the_post(); ?>
							    <div class="box-image">
							        <p><?php the_content(); ?></p>
							        <div class="clearfix"></div>
							    </div>
							<?php $count++; endwhile; ?>
					  	<?php else : ?>
				      		<div class="no-postfound"></div>
					  	<?php endif;
					endif;
					wp_reset_postdata(); 
				?>
				<div class="clearfix"></div>	
			</div>
		</section>
	<?php }?>

	<?php do_action( 'pet_animal_store_above_product_section' ); ?>

	<div class="container">
	  <?php while ( have_posts() ) : the_post(); ?>
	        <?php the_content(); ?>
	    <?php endwhile; // end of the loop. ?>
	</div>
</main>

<?php get_footer(); ?>