<?php
/**
 * Template Name:Page with Right Sidebar
 */
get_header(); ?>

<?php do_action( 'pet_animal_store_header_pageright' ); ?>

<div class="container">
    <main id="main" role="main" class="middle-align py-4 row">       
		<div class="col-lg-8 col-md-8" class="content-aa" >
			<?php while ( have_posts() ) : the_post(); ?>
                <div class="feature-box">   
                    <?php the_post_thumbnail(); ?>
                </div>
                <h1><?php esc_html(the_title()); ?></h1>   
                <div class="entry-content"><?php the_content();?></div>
                <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'pet-animal-store' ),
                    'after'  => '</div>',
                ) );
                
                //If comments are open or we have at least one comment, load up the comment template
                    if ( comments_open() || '0' != get_comments_number() )
                        comments_template();
                ?>
            <?php endwhile; // end of the loop. ?>             
        </div>
        <div class="col-lg-4 col-md-4" id="sidebar">
			<?php dynamic_sidebar('sidebar-2'); ?>
		</div>
        <div class="clearfix"></div>
    </main>
</div>

<?php do_action( 'pet_animal_store_footer_pageright' ); ?>

<?php get_footer(); ?>