<?php
//about theme info
add_action( 'admin_menu', 'pet_animal_store_gettingstarted' );
function pet_animal_store_gettingstarted() {    	
	add_theme_page( esc_html__('Get Started', 'pet-animal-store'), esc_html__('Get Started', 'pet-animal-store'), 'edit_theme_options', 'pet_animal_store_guide', 'pet_animal_store_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function pet_animal_store_admin_theme_style() {
   wp_enqueue_style('pet-animal-store-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/getstart.css');
   wp_enqueue_script('tabs', esc_url(get_template_directory_uri()) . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'pet_animal_store_admin_theme_style');

//guidline for about theme
function pet_animal_store_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'pet-animal-store' );
?>

<div class="wrapper-info">  
    <div class="tab-sec">
		<div class="tab">
			<div class="logo">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/logo.png" alt="" />
			</div>
			<button role="tab" class="tablinks home" onclick="pet_animal_store_openCity(event, 'tc_index')"><?php esc_html_e( 'Free Theme Information', 'pet-animal-store' ); ?></button>
		  	<button role="tab" class="tablinks" onclick="pet_animal_store_openCity(event, 'tc_pro')"><?php esc_html_e( 'Premium Theme Information', 'pet-animal-store' ); ?></button>
		  	<button role="tab" class="tablinks" onclick="pet_animal_store_openCity(event, 'tc_create')"><?php esc_html_e( 'Theme Support', 'pet-animal-store' ); ?></button>				
		</div>

		<div  id="tc_index" class="tabcontent">
			<h2><?php esc_html_e( 'Welcome to Pets Theme', 'pet-animal-store' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
			<hr>
			<div class="info-link">
				<a href="<?php echo esc_url( PET_ANIMAL_STORE_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'pet-animal-store' ); ?></a>
				<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'pet-animal-store'); ?></a>
				<a class="get-pro" href="<?php echo esc_url( PET_ANIMAL_STORE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'pet-animal-store'); ?></a>
			</div>
			<div class="col-tc-6">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/screen.png" alt="" />
			</div>
			<div class="col-tc-6">
				<P><?php esc_html_e( 'A pet WordPress Theme for all the pet shop owners & dealers. This pet WordPress theme is for the people that are engaged in the business of dog grooming, hygiene, dog training, dog wash, puppy grooming, cat grooming, pet training and grooming services and so on. It is a suitable multipurpose WordPress theme for veterinary doctors, pet shops, lovers, horse, equestrian, dog grooming, walking and training websites You can be engaged in any sort of business thats segmented with pets, the theme will go well for you. It is built on Bootstrap 4 with a well built and structured layout. Its a highly responsive theme with a professional layout and design that is in sync with the meta WordPress versions. You can easily set up a good looking petshop website, store or anything that you wish.We do offer a long list of features with theme exclusive functionalities. Our customer support is best in the business; we will satisfy all your needs and requirements. Your website will work insanely fast, with a gorgeous well-structured layout.', 'pet-animal-store' ); ?></P>
			</div>
    	</div>

		<div id="tc_pro" class="tabcontent">
			<h3><?php esc_html_e( 'Pets Theme Information', 'pet-animal-store' ); ?></h3>
			<hr>
			<div class="pro-image">
				<img role="img" src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/dashboard/images/resize.png" alt="" />
			</div>
			<div class="info-link-pro">
				<p><a href="<?php echo esc_url( PET_ANIMAL_STORE_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Buy Now', 'pet-animal-store' ); ?></a></p>
				<p><a href="<?php echo esc_url( PET_ANIMAL_STORE_LIVE_DEMO ); ?>" target="_blank"> <?php esc_html_e( 'Live Demo', 'pet-animal-store' ); ?></a></p>
				<p><a href="<?php echo esc_url( PET_ANIMAL_STORE_PRO_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Pro Documentation', 'pet-animal-store' ); ?></a></p>
			</div>
			<div class="col-pro-5">
				<h4><?php esc_html_e( 'Pet Pro Theme', 'pet-animal-store' ); ?></h4>
				<P><?php esc_html_e( 'The Premium Pet WordPress theme is absolutely versatile that fits all kinds of pet related websites. The Animal WordPress theme is a perfect combo of useful features and strong functionalities. WooCommerce compatibility and user-friendly interface make it an ideal theme to create a pet online store. The completely mobile-friendly layout assures to form beautiful designs that appear great on different screen sizes. The theme comprises of different sections namely Service section, Gallery section, Testimonial section, Blog section, etc. A hoard of customization and personalization options lets you modify it quickly as per your requirements. Built up of secure and clean code, the theme provides faster page load time. The theme is SEO friendly, translation-ready, retina ready, multipurpose, and highly responsive. An online booking form is what makes this theme different from the others. So, get this theme to build a selling platform for pets goods and services. Furthermore, the Pet store WordPress theme has a Contact Form 7 and integrated Google map.', 'pet-animal-store' ); ?></P>		
			</div>
			<div class="col-pro-6">				
				<h4><?php esc_html_e( 'Product Description', 'pet-animal-store' ); ?></h4>
				<ul>
					<li><?php esc_html_e( 'Theme Options using Customizer API', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Responsive design', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Favicon, Logo, title and tagline customization', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Advanced Color options', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( '100+ Font Family Options', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Background Image Option', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Simple and Mega Menu Option', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Enable-Disable options on All sections', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Home Page setting for different sections', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Advance Slider with multiple effects and control options', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Pagination option', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Custom CSS option', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Translations Ready', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Parallax Image-Background Section', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Customizable Home Page', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Full-Width Template', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Footer Widgets & Editor Style', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Woo Commerce Compatible', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Multiple Inner Page Templates', 'pet-animal-store' ); ?></li>
					<li><?php esc_html_e( 'Advance Social Media Feature', 'pet-animal-store' ); ?></li>
				</ul>				
			</div>
		</div>	

		<div id="tc_create" class="tabcontent">
			<h3><?php esc_html_e( 'Support', 'pet-animal-store' ); ?></h3>
			<hr>
			<div class="tab-cont">
		  		<h4><?php esc_html_e( 'Need Support?', 'pet-animal-store' ); ?></h4>				
				<div class="info-link-support">
					<P><?php esc_html_e( 'Our team is obliged to help you in every way possible whenever you face any type of difficulties and doubts.', 'pet-animal-store' ); ?></P>
					<a href="<?php echo esc_url( PET_ANIMAL_STORE_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support Forum', 'pet-animal-store' ); ?></a>
				</div>
			</div>
			<div class="tab-cont">	
				<h4><?php esc_html_e('Reviews', 'pet-animal-store'); ?></h4>				
				<div class="info-link-support">
					<P><?php esc_html_e( 'It is commendable to have such a theme inculcated with amazing features and robust functionalities. I feel grateful to recommend this theme to one and all.', 'pet-animal-store' ); ?></P>
					<a href="<?php echo esc_url( PET_ANIMAL_STORE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'pet-animal-store'); ?></a>
				</div>
			</div>
			<div class="tab-cont">
				<h4><?php esc_html_e('About Child Theme', 'pet-animal-store'); ?></h4>				
				<div class="info-link-support">
					<P><?php esc_html_e( 'To customize theme files, you can do variations in child theme rather than in the main theme file.', 'pet-animal-store' ); ?></P>
					<a href="<?php echo esc_url( PET_ANIMAL_STORE_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('Child Theme', 'pet-animal-store'); ?></a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>