<?php

function wpdevart_theme_backend_enqueue() {
    wp_enqueue_style( 'wpdevart-theme-getting-started', get_template_directory_uri() . '/inc/getting-started/notice.css' );
}
add_action( 'admin_enqueue_scripts', 'wpdevart_theme_backend_enqueue' );

function wpdevart_amberd_online_store_menu() {
	add_theme_page( esc_html__( 'About Theme', 'amberd-online-store' ), esc_html__( 'About Theme', 'amberd-online-store' ), 'edit_theme_options', 'amberd-online-store-about', 'wpdevart_amberd_online_store_about_display' );
}
add_action( 'admin_menu', 'wpdevart_amberd_online_store_menu' );

function wpdevart_amberd_online_store_about_display() {
	$wpdevart_amberd_online_store_theme = wp_get_theme();
	?>
	<div class="wrap about-wrap full-width-layout">
		<h1><?php echo esc_html( $wpdevart_amberd_online_store_theme ); ?></h1>
		<div class="wpdevart-about-theme">
			<div class="wpdevart-theme-description">
				<p class="about-text">Amberd is a versatile or multi-purpose WordPress online store theme ready for use with WooCommerce. By changing some parameters and styles, you can easily create any type of website, such as online store/shop, IT, medical, consulting, finance, interior design, insurance, construction, agriculture, industry, apps, etc. There are many useful and necessary options available in Amberd.</p>
				<p class="actions">
					<a target="_blank" href="<?php echo apply_filters( 'parent_amberd_premium_features_url', esc_url('https://wpdevart.com/amberd-wordpress-online-store-theme')); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Theme Info', 'amberd-online-store' ); ?></a>
					<a target="_blank" href="<?php echo apply_filters( 'parent_amberd_child_demo_url', esc_url('https://amberd.wpdevart.com')); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Demo', 'amberd-online-store' ); ?></a>
                    <a target="_blank" href="<?php echo apply_filters( 'parent_amberd_child_wordpress_support_url', esc_url('https://wordpress.org/support/theme/amberd-online-store')); ?>" class="button button-secondary" target="_blank"><?php esc_html_e( 'Support', 'amberd-online-store' ); ?></a>
					<a target="_blank" href="<?php echo apply_filters( 'parent_amberd_premium_features_url', esc_url('https://wpdevart.com/amberd-wordpress-online-store-theme')); ?>" class="green button button-secondary" target="_blank"><?php esc_html_e( 'Upgrade to Premium', 'amberd-online-store' ); ?></a>
                    <a target="_blank" href="<?php echo esc_url('https://wpdevart.com/hire-wordpress-developer-dedicated-experts-are-ready-to-help/'); ?>" class="green button button-secondary" target="_blank"><?php esc_html_e( 'Hire a Developer', 'amberd-online-store' ); ?></a>
				</p>
			</div>
			<div class="wpdevart-theme-screenshot">
				<img src="<?php echo esc_url( $wpdevart_amberd_online_store_theme->get_screenshot() ); ?>" />
			</div>
		</div>
		<nav class="nav-tab-wrapper wp-clearfix" aria-label="<?php esc_attr_e( 'Secondary menu', 'amberd-online-store' ); ?>">
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'amberd-online-store-about' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['page'] ) && 'amberd-online-store-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'About', 'amberd-online-store' ); ?></a>
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'amberd-online-store-about', 'tab' => 'free_vs_pro' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'Free Vs Pro', 'amberd-online-store' ); ?></a>
			<a href="<?php echo esc_url( admin_url( add_query_arg( array( 'page' => 'amberd-online-store-about', 'tab' => 'changelog' ), 'themes.php' ) ) ); ?>" class="nav-tab<?php echo ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) ?' nav-tab-active' : ''; ?>"><?php esc_html_e( 'FAQ', 'amberd-online-store' ); ?></a>
		</nav>
		<?php
			wpdevart_amberd_online_store_main_screen();
			wpdevart_amberd_online_store_changelog_screen();
			wpdevart_amberd_online_store_free_vs_pro();
		?>
	</div>
	<?php
}

function wpdevart_amberd_online_store_main_screen() {
	if ( isset( $_GET['page'] ) && 'amberd-online-store-about' === $_GET['page'] && ! isset( $_GET['tab'] ) ) {
	?>
		<div class="feature-section two-col">
			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Theme Customizer', 'amberd-online-store' ); ?></h2>
				<p><?php esc_html_e( 'You can edit and change theme options using the customizer. All theme options are available via Customize screen.', 'amberd-online-store' ) ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Customize', 'amberd-online-store' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Got theme support question?', 'amberd-online-store' ); ?></h2>
				<p><?php esc_html_e( 'If you have any questions regarding our theme, you can add a support ticket and get fast support from our team.', 'amberd-online-store' ) ?></p>
				<p><a target="_blank" href="<?php echo apply_filters( 'parent_amberd_child_wordpress_support_url', esc_url('https://wordpress.org/support/theme/amberd-online-store')); ?>" class="button button-primary"><?php esc_html_e( 'Support Forum', 'amberd-online-store' ); ?></a></p>
			</div>

			<div class="col card">
				<h2 class="title"><?php esc_html_e( 'Hire a Developer', 'amberd-online-store' ); ?></h2>
				<p><?php esc_html_e( 'Hire WordPress developers from WpDevArt and you will get a quick and flexible solution at cost-effective rates. Our WordPress experts will help you to solve any problem. We provide different services for WordPress – website customization and development, theme/plugin customization and development, SEO optimization, WordPress integration, website speed optimization, etc. Our experts have over 10 years of experience, so a high-quality job is guaranteed.', 'amberd-online-store' ) ?></p>
				<p><a target="_blank" href="<?php echo esc_url('https://wpdevart.com/hire-wordpress-developer-dedicated-experts-are-ready-to-help/'); ?>" class="button button-primary"><?php esc_html_e( 'Check Details', 'amberd-online-store' ); ?></a></p>
			</div>
		</div>
	<?php
	}
}

function wpdevart_amberd_online_store_free_vs_pro() {
	if ( isset( $_GET['tab'] ) && 'free_vs_pro' === $_GET['tab'] ) {
	?>
		<div class="wrap about-wrap">
			<p class="about-description"><?php esc_html_e( 'Check out some of the differences between the free and premium versions below:', 'amberd-online-store' ); ?></p>
			<div class="wpdevart-vs-theme-table">
				<table>
					<thead>
						<tr><th scope="col"></th>
							<th class="head" scope="col"><?php esc_html_e( 'Free Version', 'amberd-online-store' ); ?></th>
							<th class="head" scope="col"><?php esc_html_e( 'Pro Version', 'amberd-online-store' ); ?></th>
						</tr>
					</thead>
					<tbody>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><span><?php esc_html_e( 'Homepage Premium Sections', 'amberd-online-store' ); ?></span></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( '+3 Homepage Banner Themes', 'amberd-online-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Animation Effects', 'amberd-online-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Sticky Header', 'amberd-online-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'WooCommerce Search Bar', 'amberd-online-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Customizable Mini Cart', 'amberd-online-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Banner Animations', 'amberd-online-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Preloader', 'amberd-online-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Wide and Full-width Layouts', 'amberd-online-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Breadcrumbs', 'amberd-online-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Priority Support', 'amberd-online-store' ); ?></td>
							<td><span class="dashicons dashicons-no-alt"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Fully Responsive Design', 'amberd-online-store' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Integrated with WooCommerce', 'amberd-online-store' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td headers="features" class="feature"><?php esc_html_e( 'Optimized PageSpeed and Clear Codding', 'amberd-online-store' ); ?></td>
							<td><span class="dashicons dashicons-saved"></span></td>
							<td><span class="dashicons dashicons-saved"></span></td>
						</tr>
						<tr class="odd" scope="row">
							<td class="feature feature--empty"></td>
							<td class="feature feature--empty"></td>
							<td headers="comp-2" class="td-btn-2"><a class="sidebar-button single-btn" href="<?php echo apply_filters( 'parent_amberd_premium_features_url', esc_url('https://wpdevart.com/amberd-wordpress-online-store-theme')); ?>" target="_blank"><?php esc_html_e( 'Go For Premium', 'amberd-online-store' ); ?></a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	<?php
	}
}

function wpdevart_amberd_online_store_changelog_screen() {
	if ( isset( $_GET['tab'] ) && 'changelog' === $_GET['tab'] ) {
		global $wp_filesystem;
	?>
			<p class="about-description"><?php esc_html_e( 'Check out some frequently asked questions below:', 'amberd-online-store' ); ?></p>
			<div class="feature-section two-col">			
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'How can I display the custom homepage instead of the latest posts on the main page?', 'amberd-online-store' ); ?></h2>
					<p><?php esc_html_e( 'Go to the theme customize page, then in the left menu, click the Custom Homepage section, go to the Enable Custom Homepage section, and enable the option. Important: You will need to make sure that on the theme Customize page under the Homepage Settings section, the “Your homepage displays” option is set to “Your latest posts.”', 'amberd-online-store' ) ?></p>
				</div>
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'How can I add widgets to the WooCommerce sidebar?', 'amberd-online-store' ); ?></h2>
					<p><?php esc_html_e( 'You need to go to Appearance > Widgets page, find the WooCommerce Sidebar widget and add the widgets you want.', 'amberd-online-store' ) ?></p>
				</div>
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'What is the difference between the Primary Button and the header/banner/search page and other buttons?', 'amberd-online-store' ); ?></h2>
					<p><?php esc_html_e( 'The Primary Button is the style of the widget search button and the comments submit button and you can set a custom color for it, while the other buttons are placed on different settings pages and you can choose the color for these buttons from the 10 available colors.', 'amberd-online-store' ) ?></p>
				</div>
				<div class="col card">
					<h2 class="title"><?php esc_html_e( 'What should I do if after successful payment I did not receive a link to download the premium version?', 'amberd-online-store' ); ?></h2>
					<p><?php esc_html_e( 'You need to contact us using the form on the Contact Us page of our website.', 'amberd-online-store' ) ?></p>
				</div>
			</div>
	<?php
	}
}