<?php 
	$pet_animal_store_custom_css ='';

	/*----------------Width Layout -------------------*/
	$pet_animal_store_theme_lay = get_theme_mod( 'pet_animal_store_width_options','Full Layout');
    if($pet_animal_store_theme_lay == 'Full Layout'){
		$pet_animal_store_custom_css .='body{';
			$pet_animal_store_custom_css .='max-width: 100%;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_theme_lay == 'Contained Layout'){
		$pet_animal_store_custom_css .='body{';
			$pet_animal_store_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$pet_animal_store_custom_css .='}';
		$pet_animal_store_custom_css .='.page-template-custom-frontpage #header{';
			$pet_animal_store_custom_css .='right:0;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_theme_lay == 'Boxed Layout'){
		$pet_animal_store_custom_css .='body{';
			$pet_animal_store_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$pet_animal_store_custom_css .='}';
		$pet_animal_store_custom_css .='.page-template-custom-frontpage #header{';
			$pet_animal_store_custom_css .='left:0; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$pet_animal_store_custom_css .='}';
		$pet_animal_store_custom_css .='.page-template-custom-frontpage .header-slider{';
			$pet_animal_store_custom_css .='width:98%; margin: 0 auto;';
		$pet_animal_store_custom_css .='}';
		$pet_animal_store_custom_css .='
		@media screen and (max-width: 1024px) and (min-width: 320px){
		.page-template-custom-frontpage #header{';
		$pet_animal_store_custom_css .='width: 100%; padding:0;';
		$pet_animal_store_custom_css .='} }';
	}

	/*------------- Slider Opacity -------------------*/
	$pet_animal_store_slider_layout = get_theme_mod( 'pet_animal_store_slider_opacity','0.7');
	if($pet_animal_store_slider_layout == '0'){
		$pet_animal_store_custom_css .='#slider img{';
			$pet_animal_store_custom_css .='opacity:0';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_slider_layout == '0.1'){
		$pet_animal_store_custom_css .='#slider img{';
			$pet_animal_store_custom_css .='opacity:0.1';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_slider_layout == '0.2'){
		$pet_animal_store_custom_css .='#slider img{';
			$pet_animal_store_custom_css .='opacity:0.2';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_slider_layout == '0.3'){
		$pet_animal_store_custom_css .='#slider img{';
			$pet_animal_store_custom_css .='opacity:0.3';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_slider_layout == '0.4'){
		$pet_animal_store_custom_css .='#slider img{';
			$pet_animal_store_custom_css .='opacity:0.4';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_slider_layout == '0.5'){
		$pet_animal_store_custom_css .='#slider img{';
			$pet_animal_store_custom_css .='opacity:0.5';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_slider_layout == '0.6'){
		$pet_animal_store_custom_css .='#slider img{';
			$pet_animal_store_custom_css .='opacity:0.6';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_slider_layout == '0.7'){
		$pet_animal_store_custom_css .='#slider img{';
			$pet_animal_store_custom_css .='opacity:0.7';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_slider_layout == '0.8'){
		$pet_animal_store_custom_css .='#slider img{';
			$pet_animal_store_custom_css .='opacity:0.8';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_slider_layout == '0.9'){
		$pet_animal_store_custom_css .='#slider img{';
			$pet_animal_store_custom_css .='opacity:0.9';
		$pet_animal_store_custom_css .='}';
	}

	/*-------------Slider Content Layout ------------*/
	$pet_animal_store_slider_layout = get_theme_mod( 'pet_animal_store_slider_content_option','Left');
    if($pet_animal_store_slider_layout == 'Left'){
    	$pet_animal_store_custom_css .='@media screen and (min-width: 721px){';
		$pet_animal_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .read-btn{';
			$pet_animal_store_custom_css .='text-align:start;';
		$pet_animal_store_custom_css .='}';
		$pet_animal_store_custom_css .='#slider .carousel-caption{';
		$pet_animal_store_custom_css .='left:15%; right:40%;';
		$pet_animal_store_custom_css .='}}';
	}else if($pet_animal_store_slider_layout == 'Center'){
		$pet_animal_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .read-btn{';
			$pet_animal_store_custom_css .='text-align:center;';
		$pet_animal_store_custom_css .='}';
		$pet_animal_store_custom_css .='#slider .carousel-caption{';
		$pet_animal_store_custom_css .='left:25%; right:25%;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_slider_layout == 'Right'){
		$pet_animal_store_custom_css .='@media screen and (min-width: 721px){';
		$pet_animal_store_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .read-btn{';
			$pet_animal_store_custom_css .='text-align:end;';
		$pet_animal_store_custom_css .='}';
		$pet_animal_store_custom_css .='#slider .carousel-caption{';
			$pet_animal_store_custom_css .='left:40%; right:15%;';
		$pet_animal_store_custom_css .='}}';
	}

	/* Slider content spacing */
	$pet_animal_store_top_spacing = get_theme_mod('pet_animal_store_slider_top_spacing');
	$pet_animal_store_bottom_spacing = get_theme_mod('pet_animal_store_slider_bottom_spacing');
	$pet_animal_store_left_spacing = get_theme_mod('pet_animal_store_slider_left_spacing');
	$pet_animal_store_right_spacing = get_theme_mod('pet_animal_store_slider_right_spacing');
	if($pet_animal_store_top_spacing != false || $pet_animal_store_bottom_spacing != false || $pet_animal_store_left_spacing != false || $pet_animal_store_right_spacing != false){
		$pet_animal_store_custom_css .='#slider .carousel-caption{';
			$pet_animal_store_custom_css .='top: '.esc_attr($pet_animal_store_top_spacing).'%; bottom: '.esc_attr($pet_animal_store_bottom_spacing).'%; left: '.esc_attr($pet_animal_store_left_spacing).'%; right: '.esc_attr($pet_animal_store_right_spacing).'%;';
		$pet_animal_store_custom_css .='}';
	}

	/*------Slider height ---------*/
	$pet_animal_store_slider_height = get_theme_mod('pet_animal_store_slider_height');
	if($pet_animal_store_slider_height != false){
		$pet_animal_store_custom_css .='#slider img  {';
			$pet_animal_store_custom_css .='height: '.esc_attr($pet_animal_store_slider_height).'px;';
		$pet_animal_store_custom_css .='}';
		$pet_animal_store_custom_css .='@media screen and (max-width: 575px){		
			#slider img  {';
			$pet_animal_store_custom_css .='height: auto;';
		$pet_animal_store_custom_css .='} }';
	}

	/*------Shop page pagination ---------*/
	$pet_animal_store_shop_page_pagination = get_theme_mod('pet_animal_store_shop_page_pagination', true);
	if($pet_animal_store_shop_page_pagination == false){
		$pet_animal_store_custom_css .= '.woocommerce nav.woocommerce-pagination {';
			$pet_animal_store_custom_css .='display: none;';
		$pet_animal_store_custom_css .='}';
	}

	/*------- Post into blocks ------*/
	$pet_animal_store_post_blocks = get_theme_mod('pet_animal_store_post_blocks', 'Within box');
	if($pet_animal_store_post_blocks == 'Without box' ){
		$pet_animal_store_custom_css .='.services-box{';
			$pet_animal_store_custom_css .=' border: none;';
		$pet_animal_store_custom_css .='}';
	}

	/*------ Button Style -------*/
	$pet_animal_store_top_buttom_padding = get_theme_mod('pet_animal_store_top_button_padding');
	$pet_animal_store_left_right_padding = get_theme_mod('pet_animal_store_left_button_padding');
	if($pet_animal_store_top_buttom_padding != false || $pet_animal_store_left_right_padding != false ){
		$pet_animal_store_custom_css .='.service-btn a, #slider a.read-more, #our-products .woocommerce a.button, .woocommerce ul.products li.product .button, #comments input[type="submit"].submit{';
			$pet_animal_store_custom_css .='padding-top: '.esc_attr($pet_animal_store_top_buttom_padding).'px; padding-bottom: '.esc_attr($pet_animal_store_top_buttom_padding).'px; padding-left: '.esc_attr($pet_animal_store_left_right_padding).'px; padding-right: '.esc_attr($pet_animal_store_left_right_padding).'px;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_button_border_radius = get_theme_mod('pet_animal_store_button_border_radius');
	$pet_animal_store_custom_css .='.service-btn a, #slider a.read-more, #our-products .woocommerce a.button, .woocommerce ul.products li.product .button, #comments input[type="submit"].submit{';
		$pet_animal_store_custom_css .='border-radius: '.esc_attr($pet_animal_store_button_border_radius).'px;';
	$pet_animal_store_custom_css .='}';

	$pet_animal_store_btn_font_weight = get_theme_mod('pet_animal_store_btn_font_weight');{
	$pet_animal_store_custom_css .='.service-btn a, #slider a.read-more, #our-products .woocommerce a.button, .woocommerce ul.products li.product .button, #comments input[type="submit"].submit{';
	$pet_animal_store_custom_css .='font-weight: '.esc_attr($pet_animal_store_btn_font_weight).';';
	$pet_animal_store_custom_css .='}';
	}   		
	/*-------------- Woocommerce Button  -------------------*/
	$pet_animal_store_woocommerce_button_padding_top = get_theme_mod('pet_animal_store_woocommerce_button_padding_top');
	if($pet_animal_store_woocommerce_button_padding_top != false){
		$pet_animal_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce ul.products li.product .button{';
			$pet_animal_store_custom_css .='padding-top: '.esc_attr($pet_animal_store_woocommerce_button_padding_top).'px; padding-bottom: '.esc_attr($pet_animal_store_woocommerce_button_padding_top).'px;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_woocommerce_button_padding_right = get_theme_mod('pet_animal_store_woocommerce_button_padding_right');
	if($pet_animal_store_woocommerce_button_padding_right != false){
		$pet_animal_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce ul.products li.product .button{';
			$pet_animal_store_custom_css .='padding-left: '.esc_attr($pet_animal_store_woocommerce_button_padding_right).'px; padding-right: '.esc_attr($pet_animal_store_woocommerce_button_padding_right).'px;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_woocommerce_button_border_radius = get_theme_mod('pet_animal_store_woocommerce_button_border_radius');
	if($pet_animal_store_woocommerce_button_border_radius != false){
		$pet_animal_store_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce button.button.alt, a.button.wc-forward, .woocommerce .cart .button, .woocommerce .cart input.button, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled], .woocommerce ul.products li.product .button{';
			$pet_animal_store_custom_css .='border-radius: '.esc_attr($pet_animal_store_woocommerce_button_border_radius).'px;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_related_product = get_theme_mod('pet_animal_store_related_product',true);

	if($pet_animal_store_related_product == false){
		$pet_animal_store_custom_css .='.related.products{';
			$pet_animal_store_custom_css .='display: none;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_woocommerce_product_border = get_theme_mod('pet_animal_store_woocommerce_product_border');

	if($pet_animal_store_woocommerce_product_border == true){
		$pet_animal_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$pet_animal_store_custom_css .='border: 1px solid #aaa;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_woocommerce_product_padding_top = get_theme_mod('pet_animal_store_woocommerce_product_padding_top',10);
	{
		$pet_animal_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$pet_animal_store_custom_css .='padding-top: '.esc_attr($pet_animal_store_woocommerce_product_padding_top).'px !important; padding-bottom: '.esc_attr($pet_animal_store_woocommerce_product_padding_top).'px !important;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_woocommerce_product_padding_right = get_theme_mod('pet_animal_store_woocommerce_product_padding_right',10);
	{
		$pet_animal_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$pet_animal_store_custom_css .='padding-left: '.esc_attr($pet_animal_store_woocommerce_product_padding_right).'px !important; padding-right: '.esc_attr($pet_animal_store_woocommerce_product_padding_right).'px !important;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_woocommerce_product_border_radius = get_theme_mod('pet_animal_store_woocommerce_product_border_radius');
	if($pet_animal_store_woocommerce_product_border_radius != false){
		$pet_animal_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$pet_animal_store_custom_css .='border-radius: '.esc_attr($pet_animal_store_woocommerce_product_border_radius).'px;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_woocommerce_product_box_shadow = get_theme_mod('pet_animal_store_woocommerce_product_box_shadow');
	if($pet_animal_store_woocommerce_product_box_shadow != false){
		$pet_animal_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$pet_animal_store_custom_css .='box-shadow: '.esc_attr($pet_animal_store_woocommerce_product_box_shadow).'px '.esc_attr($pet_animal_store_woocommerce_product_box_shadow).'px '.esc_attr($pet_animal_store_woocommerce_product_box_shadow).'px #aaa;';
		$pet_animal_store_custom_css .='}';
	}

	/*------ Slider show/hide -------*/
	if(get_theme_mod('pet_animal_store_slider_arrows') == false){
		$pet_animal_store_custom_css .=' .page-template-custom-frontpage #header{';
			$pet_animal_store_custom_css .='position: static; margin: 0;';
		$pet_animal_store_custom_css .='}';
		$pet_animal_store_custom_css .=' #services .service-box{';
			$pet_animal_store_custom_css .='margin: 0;';
		$pet_animal_store_custom_css .='}';
		$pet_animal_store_custom_css .=' .page-template-custom-frontpage .request-btn a.blogbutton-small{';
			$pet_animal_store_custom_css .=' background:'.esc_attr($pet_animal_store_theme_color_second).'; color: '.esc_attr($pet_animal_store_theme_color_first).';';
		$pet_animal_store_custom_css .='}';
	}

	/*---- Preloader Color ----*/
	$pet_animal_store_preloader_color = get_theme_mod('pet_animal_store_preloader_color');
	$pet_animal_store_preloader_bg_color = get_theme_mod('pet_animal_store_preloader_bg_color');

	if($pet_animal_store_preloader_color != false){
		$pet_animal_store_custom_css .='.preloader-squares .square, .preloader-chasing-squares .square{';
			$pet_animal_store_custom_css .='background-color: '.esc_attr($pet_animal_store_preloader_color).';';
		$pet_animal_store_custom_css .='}';
	}
	if($pet_animal_store_preloader_bg_color != false){
		$pet_animal_store_custom_css .='.preloader{';
			$pet_animal_store_custom_css .='background-color: '.esc_attr($pet_animal_store_preloader_bg_color).';';
		$pet_animal_store_custom_css .='}';
	}

	/*-------- Scrollup icon css -------*/
	$pet_animal_store_scroll_icon_font_size = get_theme_mod('pet_animal_store_scroll_icon_font_size', 18);
	$pet_animal_store_custom_css .='.scrollup{';
		$pet_animal_store_custom_css .='font-size: '.esc_attr($pet_animal_store_scroll_icon_font_size).'px;';
	$pet_animal_store_custom_css .='}';

	$pet_animal_store_scroll_icon_color = get_theme_mod('pet_animal_store_scroll_icon_color');
	$pet_animal_store_custom_css .='.scrollup{';
		$pet_animal_store_custom_css .='color: '.esc_attr($pet_animal_store_scroll_icon_color).';';
	$pet_animal_store_custom_css .='}';

	/*---- Copyright css ----*/
	$pet_animal_store_copyright_color = get_theme_mod('pet_animal_store_copyright_color');
	$pet_animal_store_custom_css .='#footer p,#footer .copyright a{';
		$pet_animal_store_custom_css .='color: '.esc_attr($pet_animal_store_copyright_color).'!important;';
	$pet_animal_store_custom_css .='}';

	$pet_animal_store_copyright__hover_color = get_theme_mod('pet_animal_store_copyright__hover_color');
	$pet_animal_store_custom_css .='#footer p:hover,#footer .copyright a:hover{';
		$pet_animal_store_custom_css .='color: '.esc_attr($pet_animal_store_copyright__hover_color).'!important;';
	$pet_animal_store_custom_css .='}';

	$pet_animal_store_copyright_fontsize = get_theme_mod('pet_animal_store_copyright_fontsize',16);
	if($pet_animal_store_copyright_fontsize != false){
		$pet_animal_store_custom_css .='#footer p{';
			$pet_animal_store_custom_css .='font-size: '.esc_attr($pet_animal_store_copyright_fontsize).'px; ';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_copyright_top_bottom_padding = get_theme_mod('pet_animal_store_copyright_top_bottom_padding',15);
	if($pet_animal_store_copyright_top_bottom_padding != false){
		$pet_animal_store_custom_css .='#footer {';
			$pet_animal_store_custom_css .='padding-top:'.esc_attr($pet_animal_store_copyright_top_bottom_padding).'px; padding-bottom: '.esc_attr($pet_animal_store_copyright_top_bottom_padding).'px; ';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_copyright_alignment = get_theme_mod( 'pet_animal_store_copyright_alignment','Center');
    if($pet_animal_store_copyright_alignment == 'Left'){
		$pet_animal_store_custom_css .='#footer p{';
			$pet_animal_store_custom_css .='text-align:start;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_copyright_alignment == 'Center'){
		$pet_animal_store_custom_css .='#footer p{';
			$pet_animal_store_custom_css .='text-align:center;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_copyright_alignment == 'Right'){
		$pet_animal_store_custom_css .='#footer p{';
			$pet_animal_store_custom_css .='text-align:end;';
		$pet_animal_store_custom_css .='}';
	}
	
	//Footer Social Icon Font size
	$pet_animal_store_footer_icon_font_size = get_theme_mod('pet_animal_store_footer_icon_font_size');
	$pet_animal_store_custom_css .='#footer .socialicons i{';
	$pet_animal_store_custom_css .='font-size: '.esc_attr($pet_animal_store_footer_icon_font_size).'px;';
	$pet_animal_store_custom_css .='}';

	//Footer Social Icon Alignment
	$pet_animal_store_footer_icon_alignment = get_theme_mod( 'pet_animal_store_footer_icon_alignment','Center');
    if($pet_animal_store_footer_icon_alignment == 'Left'){
		$pet_animal_store_custom_css .='#footer .socialicons{';
			$pet_animal_store_custom_css .='text-align:start;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_footer_icon_alignment == 'Center'){
		$pet_animal_store_custom_css .='#footer .socialicons{';
			$pet_animal_store_custom_css .='text-align:center;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_footer_icon_alignment == 'Right'){
		$pet_animal_store_custom_css .='#footer .socialicons{';
			$pet_animal_store_custom_css .='text-align:end;';
		$pet_animal_store_custom_css .='}';
	}	

	/*------- Wocommerce sale css -----*/
	$pet_animal_store_woocommerce_sale_top_padding = get_theme_mod('pet_animal_store_woocommerce_sale_top_padding');
	$pet_animal_store_woocommerce_sale_left_padding = get_theme_mod('pet_animal_store_woocommerce_sale_left_padding');
	$pet_animal_store_custom_css .=' .woocommerce span.onsale{';
		$pet_animal_store_custom_css .='padding-top: '.esc_attr($pet_animal_store_woocommerce_sale_top_padding).'px; padding-bottom: '.esc_attr($pet_animal_store_woocommerce_sale_top_padding).'px; padding-left: '.esc_attr($pet_animal_store_woocommerce_sale_left_padding).'px; padding-right: '.esc_attr($pet_animal_store_woocommerce_sale_left_padding).'px;';
	$pet_animal_store_custom_css .='}';

	$pet_animal_store_woocommerce_sale_border_radius = get_theme_mod('pet_animal_store_woocommerce_sale_border_radius', 50);
	$pet_animal_store_custom_css .='.woocommerce span.onsale{';
		$pet_animal_store_custom_css .='border-radius: '.esc_attr($pet_animal_store_woocommerce_sale_border_radius).'px;';
	$pet_animal_store_custom_css .='}';

	$pet_animal_store_sale_position = get_theme_mod( 'pet_animal_store_sale_position','right');
    if($pet_animal_store_sale_position == 'left'){
		$pet_animal_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$pet_animal_store_custom_css .='left: -10px; right: auto;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_sale_position == 'right'){
		$pet_animal_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$pet_animal_store_custom_css .='left: auto; right: 0;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_product_sale_font_size = get_theme_mod('pet_animal_store_product_sale_font_size', 16);
	$pet_animal_store_custom_css .='.woocommerce span.onsale {';
		$pet_animal_store_custom_css .='font-size: '.esc_attr($pet_animal_store_product_sale_font_size).'px !important;';
	$pet_animal_store_custom_css .='}';

	// footer background css
	$pet_animal_store_footer_background_color = get_theme_mod('pet_animal_store_footer_background_color');
	$pet_animal_store_custom_css .='.footertown{';
		$pet_animal_store_custom_css .='background-color: '.esc_attr($pet_animal_store_footer_background_color).';';
	$pet_animal_store_custom_css .='}';

	$pet_animal_store_footer_background_img = get_theme_mod('pet_animal_store_footer_background_img');
	if($pet_animal_store_footer_background_img != false){
		$pet_animal_store_custom_css .='.footertown{';
			$pet_animal_store_custom_css .='background: url('.esc_attr($pet_animal_store_footer_background_img).') no-repeat; background-size: cover; background-attachment: fixed;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_theme_lay = get_theme_mod( 'pet_animal_store_img_footer','scroll');
	if($pet_animal_store_theme_lay == 'fixed'){
		$pet_animal_store_custom_css .='.footertown{';
			$pet_animal_store_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$pet_animal_store_custom_css .='}';
	}elseif ($pet_animal_store_theme_lay == 'scroll'){
		$pet_animal_store_custom_css .='.footertown{';
			$pet_animal_store_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_footer_img_position = get_theme_mod('pet_animal_store_footer_img_position','center center');
	if($pet_animal_store_footer_img_position != false){
		$pet_animal_store_custom_css .='.footertown{';
			$pet_animal_store_custom_css .='background-position: '.esc_attr($pet_animal_store_footer_img_position).'!important;';
		$pet_animal_store_custom_css .='}';
	}

	/*---- Comment form ----*/
	$pet_animal_store_comment_width = get_theme_mod('pet_animal_store_comment_width', '100');
	$pet_animal_store_custom_css .='#comments textarea{';
		$pet_animal_store_custom_css .=' width:'.esc_attr($pet_animal_store_comment_width).'%;';
	$pet_animal_store_custom_css .='}';

	$pet_animal_store_comment_submit_text = get_theme_mod('pet_animal_store_comment_submit_text', 'Post Comment');
	if($pet_animal_store_comment_submit_text == ''){
		$pet_animal_store_custom_css .='#comments p.form-submit {';
			$pet_animal_store_custom_css .='display: none;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_comment_title = get_theme_mod('pet_animal_store_comment_title', 'Leave a Reply');
	if($pet_animal_store_comment_title == ''){
		$pet_animal_store_custom_css .='#comments h2#reply-title {';
			$pet_animal_store_custom_css .='display: none;';
		$pet_animal_store_custom_css .='}';
	}

	// Sticky Header padding
	$pet_animal_store_sticky_header_padding = get_theme_mod('pet_animal_store_sticky_header_padding');
	$pet_animal_store_custom_css .='.fixed-header{';
		$pet_animal_store_custom_css .=' padding-top:'.esc_attr($pet_animal_store_sticky_header_padding).'px; padding-bottom:'.esc_attr($pet_animal_store_sticky_header_padding).'px;';
	$pet_animal_store_custom_css .='}';

	//Header Social Icon Font size
	$pet_animal_store_header_icon_font_size = get_theme_mod('pet_animal_store_header_icon_font_size');
	$pet_animal_store_custom_css .='.topbar .social-icon i {';
	$pet_animal_store_custom_css .='font-size: '.esc_attr($pet_animal_store_header_icon_font_size).'px;';
	$pet_animal_store_custom_css .='}';		

	// Navigation Font Size 
	$pet_animal_store_nav_font_size = get_theme_mod('pet_animal_store_nav_font_size');
	if($pet_animal_store_nav_font_size != false){
		$pet_animal_store_custom_css .='.primary-navigation ul li a{';
			$pet_animal_store_custom_css .='font-size: '.esc_attr($pet_animal_store_nav_font_size).'px;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_navigation_case = get_theme_mod('pet_animal_store_navigation_case', 'capitalize');
	if($pet_animal_store_navigation_case == 'uppercase' ){
		$pet_animal_store_custom_css .='.primary-navigation ul li a{';
			$pet_animal_store_custom_css .=' text-transform: uppercase;';
		$pet_animal_store_custom_css .='}';
	}elseif($pet_animal_store_navigation_case == 'capitalize' ){
		$pet_animal_store_custom_css .='.primary-navigation ul li a{';
			$pet_animal_store_custom_css .=' text-transform: capitalize;';
		$pet_animal_store_custom_css .='}';
	}

	// site title color option
	$pet_animal_store_site_title_color_setting = get_theme_mod('pet_animal_store_site_title_color_setting');
	$pet_animal_store_custom_css .=' .logo h1 a, .logo p a{';
		$pet_animal_store_custom_css .='color: '.esc_attr($pet_animal_store_site_title_color_setting).';';
	$pet_animal_store_custom_css .='} ';

	$pet_animal_store_tagline_color_setting = get_theme_mod('pet_animal_store_tagline_color_setting');
	$pet_animal_store_custom_css .=' .logo p.site-description{';
		$pet_animal_store_custom_css .='color: '.esc_attr($pet_animal_store_tagline_color_setting).';';
	$pet_animal_store_custom_css .='} ';
	
	//Site title Font size
	$pet_animal_store_site_title_fontsize = get_theme_mod('pet_animal_store_site_title_fontsize');
	$pet_animal_store_custom_css .='.logo h1, .logo p.site-title{';
		$pet_animal_store_custom_css .='font-size: '.esc_attr($pet_animal_store_site_title_fontsize).'px;';
	$pet_animal_store_custom_css .='}';

	$pet_animal_store_site_description_fontsize = get_theme_mod('pet_animal_store_site_description_fontsize');
	$pet_animal_store_custom_css .='.logo p.site-description{';
		$pet_animal_store_custom_css .='font-size: '.esc_attr($pet_animal_store_site_description_fontsize).'px;';
	$pet_animal_store_custom_css .='}';

	/*----- Featured image css -----*/
	$pet_animal_store_featured_image_border_radius = get_theme_mod('pet_animal_store_featured_image_border_radius');
	if($pet_animal_store_featured_image_border_radius != false){
		$pet_animal_store_custom_css .='.inner-service .service-image img, .inner-service .service-image{';
			$pet_animal_store_custom_css .='border-radius: '.esc_attr($pet_animal_store_featured_image_border_radius).'px;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_featured_image_box_shadow = get_theme_mod('pet_animal_store_featured_image_box_shadow');
	if($pet_animal_store_featured_image_box_shadow != false){
		$pet_animal_store_custom_css .='.inner-service .service-image img, .inner-service .service-image{';
			$pet_animal_store_custom_css .='box-shadow: 8px 8px '.esc_attr($pet_animal_store_featured_image_box_shadow).'px #aaa;';
		$pet_animal_store_custom_css .='}';
	}

	//  ------------ Mobile Media Options ----------
	
	$pet_animal_store_responsive_show_back_to_top = get_theme_mod('pet_animal_store_responsive_show_back_to_top',true);
	if($pet_animal_store_responsive_show_back_to_top == true && get_theme_mod('pet_animal_store_show_back_to_top',true) == false){
		$pet_animal_store_custom_css .='@media screen and (min-width:575px){
			.scrollup{';
			$pet_animal_store_custom_css .='visibility:hidden;';
		$pet_animal_store_custom_css .='} }';
	}

	if($pet_animal_store_responsive_show_back_to_top == false){
		$pet_animal_store_custom_css .='@media screen and (max-width:575px){
			.scrollup{';
			$pet_animal_store_custom_css .='visibility:hidden;';
		$pet_animal_store_custom_css .='} }';
	}

	$pet_animal_store_responsive_preloader_hide = get_theme_mod('pet_animal_store_responsive_preloader_hide',false);
	if($pet_animal_store_responsive_preloader_hide == true && get_theme_mod('pet_animal_store_preloader_hide',false) == false){
		$pet_animal_store_custom_css .='@media screen and (min-width:575px){
			.preloader{';
			$pet_animal_store_custom_css .='display:none !important;';
		$pet_animal_store_custom_css .='} }';
	}

	if($pet_animal_store_responsive_preloader_hide == false){
		$pet_animal_store_custom_css .='@media screen and (max-width:575px){
			.preloader{';
			$pet_animal_store_custom_css .='display:none !important;';
		$pet_animal_store_custom_css .='} }';
	}

	$pet_animal_store_responsive_sticky_header = get_theme_mod('pet_animal_store_responsive_sticky_header',false);
	if($pet_animal_store_responsive_sticky_header == true && get_theme_mod('pet_animal_store_sticky_header',false) == false){
		$pet_animal_store_custom_css .='@media screen and (min-width:575px){
			.fixed-header{';
			$pet_animal_store_custom_css .='position:static !important;';
		$pet_animal_store_custom_css .='} }';
	}

	if($pet_animal_store_responsive_sticky_header == false){
		$pet_animal_store_custom_css .='@media screen and (max-width:575px){
			.fixed-header{';
			$pet_animal_store_custom_css .='position:static !important;';
		$pet_animal_store_custom_css .='} }';
	}

	$pet_animal_store_slider = get_theme_mod( 'pet_animal_store_mobile_media_slider',true);
	if($pet_animal_store_slider == true && get_theme_mod( 'pet_animal_store_slider_arrows', false) == false){
    	$pet_animal_store_custom_css .='#slider{';
			$pet_animal_store_custom_css .='display:none;';
		$pet_animal_store_custom_css .='} ';
	}
    if($pet_animal_store_slider == true){
    	$pet_animal_store_custom_css .='@media screen and (max-width:575px) {';
		$pet_animal_store_custom_css .='#slider{';
			$pet_animal_store_custom_css .='display:block;';
		$pet_animal_store_custom_css .='} }';
	}else if($pet_animal_store_slider == false){
		$pet_animal_store_custom_css .='@media screen and (max-width:575px) {';
		$pet_animal_store_custom_css .='#slider{';
			$pet_animal_store_custom_css .='display:none;';
		$pet_animal_store_custom_css .='} }';
	}

	// slider button
	if (get_theme_mod('pet_animal_store_slider_button_responsive',true) == true && get_theme_mod('pet_animal_store_slider_button',true) == false) {
		$pet_animal_store_custom_css .='@media screen and (min-width: 575px){
			.read-more{';
			$pet_animal_store_custom_css .=' display: none !important;';
		$pet_animal_store_custom_css .='} }';
	}
	if (get_theme_mod('pet_animal_store_slider_button_responsive',true) == false) {
		$pet_animal_store_custom_css .='@media screen and (max-width: 575px){
			.read-more{';
			$pet_animal_store_custom_css .=' display: none !important;';
		$pet_animal_store_custom_css .='} }';
		$pet_animal_store_custom_css .='@media screen and (max-width: 575px){
			#slider .carousel-caption{';
			$pet_animal_store_custom_css .=' padding: 0px;';
		$pet_animal_store_custom_css .='} }';
	}

	// slider overlay
	$pet_animal_store_home_slider_overlay = get_theme_mod('pet_animal_store_home_slider_overlay', true);
	if($pet_animal_store_home_slider_overlay == false){
		$pet_animal_store_custom_css .='#slider img{';
			$pet_animal_store_custom_css .='opacity:1;';
		$pet_animal_store_custom_css .='}';
	} 
	$pet_animal_store_home_slider_overlay_color = get_theme_mod('pet_animal_store_home_slider_overlay_color', true);
	if($pet_animal_store_home_slider_overlay != false){
		$pet_animal_store_custom_css .='#slider{';
			$pet_animal_store_custom_css .='background-color: '.esc_attr($pet_animal_store_home_slider_overlay_color).';';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_resp_sidebar = get_theme_mod( 'pet_animal_store_sidebar_hide_show',true);
    if($pet_animal_store_resp_sidebar == true){
    	$pet_animal_store_custom_css .='@media screen and (max-width:575px) {';
		$pet_animal_store_custom_css .='#sidebar{';
			$pet_animal_store_custom_css .='display:block;';
		$pet_animal_store_custom_css .='} }';
	}else if($pet_animal_store_resp_sidebar == false){
		$pet_animal_store_custom_css .='@media screen and (max-width:575px) {';
		$pet_animal_store_custom_css .='#sidebar{';
			$pet_animal_store_custom_css .='display:none;';
		$pet_animal_store_custom_css .='} }';
	}

	// menu font weight
	$pet_animal_store_theme_lay = get_theme_mod( 'pet_animal_store_font_weight_menu_option','Default');
    if($pet_animal_store_theme_lay == '100'){
		$pet_animal_store_custom_css .='.primary-navigation ul li a{';
			$pet_animal_store_custom_css .='font-weight: 100;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_theme_lay == '200'){
		$pet_animal_store_custom_css .='.primary-navigation ul li a{';
			$pet_animal_store_custom_css .='font-weight: 200;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_theme_lay == 'Default'){
		$pet_animal_store_custom_css .='.primary-navigation ul li a{';
			$pet_animal_store_custom_css .='font-weight: 600;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_theme_lay == '300'){
		$pet_animal_store_custom_css .='.primary-navigation ul li a{';
			$pet_animal_store_custom_css .='font-weight: 300;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_theme_lay == '400'){
		$pet_animal_store_custom_css .='.primary-navigation ul li a{';
			$pet_animal_store_custom_css .='font-weight: 400;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_theme_lay == '500'){
		$pet_animal_store_custom_css .='.primary-navigation ul li a{';
			$pet_animal_store_custom_css .='font-weight: 500;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_theme_lay == '700'){
		$pet_animal_store_custom_css .='.primary-navigation ul li a{';
			$pet_animal_store_custom_css .='font-weight: 700;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_theme_lay == '800'){
		$pet_animal_store_custom_css .='.primary-navigation ul li a{';
			$pet_animal_store_custom_css .='font-weight: 800;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_theme_lay == '900'){
		$pet_animal_store_custom_css .='.primary-navigation ul li a{';
			$pet_animal_store_custom_css .='font-weight: 900;';
		$pet_animal_store_custom_css .='}';
	}

	// menu color
	$pet_animal_store_menu_color = get_theme_mod('pet_animal_store_menu_color');

	$pet_animal_store_custom_css .='.primary-navigation a,.primary-navigation .current_page_item > a, .primary-navigation .current-menu-item > a, .primary-navigation .current_page_ancestor > a{';
			$pet_animal_store_custom_css .='color: '.esc_attr($pet_animal_store_menu_color).'!important;';
	$pet_animal_store_custom_css .='}';

	// menu hover color
	$pet_animal_store_menu_hover_color = get_theme_mod('pet_animal_store_menu_hover_color');
	$pet_animal_store_custom_css .='.primary-navigation a:hover, .primary-navigation ul li a:hover{';
			$pet_animal_store_custom_css .='color: '.esc_attr($pet_animal_store_menu_hover_color).' !important;';
	$pet_animal_store_custom_css .='}';

	// Submenu color
	$pet_animal_store_submenu_menu_color = get_theme_mod('pet_animal_store_submenu_menu_color');
	$pet_animal_store_custom_css .='.primary-navigation ul.sub-menu a, .primary-navigation ul.sub-menu li a,.primary-navigation ul.children a, .primary-navigation ul.children li a{';
			$pet_animal_store_custom_css .='color: '.esc_attr($pet_animal_store_submenu_menu_color).' !important;';
	$pet_animal_store_custom_css .='}';

	// Submenu Hover Color Option
	$pet_animal_store_submenu_hover_color = get_theme_mod('pet_animal_store_submenu_hover_color');
	$pet_animal_store_custom_css .='.primary-navigation ul.sub-menu li a:hover,.primary-navigation ul.children li a:hover {';
	$pet_animal_store_custom_css .='color: '.esc_attr($pet_animal_store_submenu_hover_color).'!important;';
	$pet_animal_store_custom_css .='} ';

	// Breadcrumb color option
	$pet_animal_store_breadcrumb_color = get_theme_mod('pet_animal_store_breadcrumb_color');
	$pet_animal_store_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$pet_animal_store_custom_css .='color: '.esc_attr($pet_animal_store_breadcrumb_color).'!important;';
	$pet_animal_store_custom_css .='}';

	// Breadcrumb bg color option
	$pet_animal_store_breadcrumb_background_color = get_theme_mod('pet_animal_store_breadcrumb_background_color');
	$pet_animal_store_custom_css .='.bradcrumbs a,.bradcrumbs span{';
		$pet_animal_store_custom_css .='background-color: '.esc_attr($pet_animal_store_breadcrumb_background_color).'!important;';
	$pet_animal_store_custom_css .='}';

	// Breadcrumb hover color option
	$pet_animal_store_breadcrumb_hover_color = get_theme_mod('pet_animal_store_breadcrumb_hover_color');
	$pet_animal_store_custom_css .='.bradcrumbs a:hover{';
		$pet_animal_store_custom_css .='color: '.esc_attr($pet_animal_store_breadcrumb_hover_color).'!important;';
	$pet_animal_store_custom_css .='}';

	// Breadcrumb hover bg color option
	$pet_animal_store_breadcrumb_hover_bg_color = get_theme_mod('pet_animal_store_breadcrumb_hover_bg_color');
	$pet_animal_store_custom_css .='.bradcrumbs a:hover{';
		$pet_animal_store_custom_css .='background-color: '.esc_attr($pet_animal_store_breadcrumb_hover_bg_color).'!important;';
	$pet_animal_store_custom_css .='}';

	// Category color option
	$pet_animal_store_category_color = get_theme_mod('pet_animal_store_category_color');
	$pet_animal_store_custom_css .='.tc-single-category a{';
		$pet_animal_store_custom_css .='color: '.esc_attr($pet_animal_store_category_color).'!important;';
	$pet_animal_store_custom_css .='}';

	// Category bg color option
	$pet_animal_store_category_background_color = get_theme_mod('pet_animal_store_category_background_color');
	$pet_animal_store_custom_css .='.tc-single-category a{';
		$pet_animal_store_custom_css .='background-color: '.esc_attr($pet_animal_store_category_background_color).'!important;';
	$pet_animal_store_custom_css .='}';

	// Single post image border radious
	$pet_animal_store_single_post_img_border_radius = get_theme_mod('pet_animal_store_single_post_img_border_radius', 0);
	$pet_animal_store_custom_css .='.feature-box img{';
		$pet_animal_store_custom_css .='border-radius: '.esc_attr($pet_animal_store_single_post_img_border_radius).'px;';
	$pet_animal_store_custom_css .='}';

    //Copyright background css
	$pet_animal_store_copyright_background_color = get_theme_mod('pet_animal_store_copyright_background_color');
	$pet_animal_store_custom_css .='#footer{';
		$pet_animal_store_custom_css .='background-color: '.esc_attr($pet_animal_store_copyright_background_color).';';
	$pet_animal_store_custom_css .='}';
     
    // Logo padding
	$pet_animal_store_logo_padding = get_theme_mod('pet_animal_store_logo_padding');
	$pet_animal_store_custom_css .='.logo{';
		$pet_animal_store_custom_css .=' padding-top:'.esc_attr($pet_animal_store_logo_padding).'px; padding-bottom:'.esc_attr($pet_animal_store_logo_padding).'px;';
    $pet_animal_store_custom_css .=' padding-left:'.esc_attr($pet_animal_store_logo_padding).'px; padding-right:'.esc_attr($pet_animal_store_logo_padding).'px;';
	$pet_animal_store_custom_css .='}';

	// Logo margin
	$pet_animal_store_logo_margin = get_theme_mod('pet_animal_store_logo_margin');
	$pet_animal_store_custom_css .='.logo{';
		$pet_animal_store_custom_css .=' margin-top:'.esc_attr($pet_animal_store_logo_margin).'px; margin-bottom:'.esc_attr($pet_animal_store_logo_margin).'px;';
		$pet_animal_store_custom_css .=' margin-left:'.esc_attr($pet_animal_store_logo_margin).'px; margin-right:'.esc_attr($pet_animal_store_logo_margin).'px;';
	$pet_animal_store_custom_css .='}';

	// menu color option
	$pet_animal_store_menu_color_setting = get_theme_mod('pet_animal_store_menu_color_setting');
	$pet_animal_store_custom_css .='.toggle-menu i{';
		$pet_animal_store_custom_css .='color: '.esc_attr($pet_animal_store_menu_color_setting).';';
	$pet_animal_store_custom_css .='} ';

	// Single post image border radious
	$pet_animal_store_single_post_img_border_radius = get_theme_mod('pet_animal_store_single_post_img_border_radius', 0);
	$pet_animal_store_custom_css .='.feature-box img{';
		$pet_animal_store_custom_css .='border-radius: '.esc_attr($pet_animal_store_single_post_img_border_radius).'px;';
	$pet_animal_store_custom_css .='}';

	// Single post image box shadow
	$pet_animal_store_single_post_img_box_shadow = get_theme_mod('pet_animal_store_single_post_img_box_shadow',0);
	$pet_animal_store_custom_css .='.feature-box img{';
		$pet_animal_store_custom_css .='box-shadow: '.esc_attr($pet_animal_store_single_post_img_box_shadow).'px '.esc_attr($pet_animal_store_single_post_img_box_shadow).'px '.esc_attr($pet_animal_store_single_post_img_box_shadow).'px #ccc;';
	$pet_animal_store_custom_css .='}';

	// Metabox Seperator
	$pet_animal_store_metabox_seperator = get_theme_mod('pet_animal_store_metabox_seperator','|');
	if($pet_animal_store_metabox_seperator != '' ){
		$pet_animal_store_custom_css .='.service-text .me-2:after{';
			$pet_animal_store_custom_css .=' content: "'.esc_attr($pet_animal_store_metabox_seperator).'"; padding-left:10px;';
		$pet_animal_store_custom_css .='}';			
	}

	// Metabox Seperator
	$pet_animal_store_single_post_metabox_seperator = get_theme_mod('pet_animal_store_single_post_metabox_seperator','|');
	if($pet_animal_store_single_post_metabox_seperator != '' ){
		$pet_animal_store_custom_css .='.metabox .px-2:after{';
			$pet_animal_store_custom_css .=' content: "'.esc_attr($pet_animal_store_single_post_metabox_seperator).'"; padding-left:10px;';
		$pet_animal_store_custom_css .='}';		
		$pet_animal_store_custom_css .='.metabox span:last-child:after{';
			$pet_animal_store_custom_css .=' content: none;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_theme_lay = get_theme_mod( 'pet_animal_store_footer_text_transform','Capitalize');
	if($pet_animal_store_theme_lay == 'Capitalize'){
		$pet_animal_store_custom_css .='.footertown .widget h3, a.rsswidget.rss-widget-title{';
			$pet_animal_store_custom_css .='text-transform:Capitalize;';
		$pet_animal_store_custom_css .='}';
	}
	if($pet_animal_store_theme_lay == 'Lowercase'){
		$pet_animal_store_custom_css .='.footertown .widget h3, a.rsswidget.rss-widget-title{';
			$pet_animal_store_custom_css .='text-transform:Lowercase;';
		$pet_animal_store_custom_css .='}';
	}
	if($pet_animal_store_theme_lay == 'Uppercase'){
		$pet_animal_store_custom_css .='.footertown .widget h3, a.rsswidget.rss-widget-title{';
			$pet_animal_store_custom_css .='text-transform:Uppercase;';
		$pet_animal_store_custom_css .='}';
	}

	// widgets heading font size
	$pet_animal_store_widgets_heading_fontsize = get_theme_mod('pet_animal_store_widgets_heading_fontsize',25);
	if($pet_animal_store_widgets_heading_fontsize != false){
		$pet_animal_store_custom_css .='.footertown .widget h3{';
			$pet_animal_store_custom_css .='font-size: '.esc_attr($pet_animal_store_widgets_heading_fontsize).'px; ';
		$pet_animal_store_custom_css .='}';
	}

	// widgets heading font weight
	$pet_animal_store_widgets_heading_font_weight = get_theme_mod('pet_animal_store_widgets_heading_font_weight', '');
  	$pet_animal_store_custom_css .='.footertown .widget h3{';
    $pet_animal_store_custom_css .='font-weight: '.esc_attr($pet_animal_store_widgets_heading_font_weight).';';
  	$pet_animal_store_custom_css .='}';

	/*----------- Footer widgets heading alignment -----*/
	$pet_animal_store_footer_widgets_heading = get_theme_mod( 'pet_animal_store_footer_widgets_heading','Left');
    if($pet_animal_store_footer_widgets_heading == 'Left'){
		$pet_animal_store_custom_css .='footer h3{';
		$pet_animal_store_custom_css .='text-align: left;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_footer_widgets_heading == 'Center'){
		$pet_animal_store_custom_css .='footer h3{';
			$pet_animal_store_custom_css .='text-align: center;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_footer_widgets_heading == 'Right'){
		$pet_animal_store_custom_css .='footer h3{';
			$pet_animal_store_custom_css .='text-align: right;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_footer_widgets_content = get_theme_mod( 'pet_animal_store_footer_widgets_content','Left');
    if($pet_animal_store_footer_widgets_content == 'Left'){
		$pet_animal_store_custom_css .='footer ul,.widget_shopping_cart_content p,footer form,div#calendar_wrap,.footertown table,footer.gallery,aside#media_image-2,.tagcloud,footer figure.gallery-item,aside#block-7,.textwidget p,#calendar-2 caption,#calendar_wrap caption{';
		$pet_animal_store_custom_css .='text-align: left;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_footer_widgets_content == 'Center'){
		$pet_animal_store_custom_css .='footer ul,.widget_shopping_cart_content p,footer form,div#calendar_wrap,.footertown table,footer .gallery, aside#media_image-2,.tagcloud,footer figure.gallery-item,aside#block-7,.textwidget p,#calendar-2 caption,#calendar_wrap caption{';
			$pet_animal_store_custom_css .='text-align: center;';
		$pet_animal_store_custom_css .='}';
	}else if($pet_animal_store_footer_widgets_content == 'Right'){
		$pet_animal_store_custom_css .='footer ul,.widget_shopping_cart_content p,footer form,div#calendar_wrap,.footertown table,footer .gallery, aside#media_image-2,.tagcloud,footer figure.gallery-item,aside#block-7,.textwidget p,#calendar-2 caption,#calendar_wrap caption{';
			$pet_animal_store_custom_css .='text-align: right !important;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_show_hide_post_categories = get_theme_mod('pet_animal_store_show_hide_post_categories',true);
	if($pet_animal_store_show_hide_post_categories == false){
		$pet_animal_store_custom_css .='.tc-category{';
			$pet_animal_store_custom_css .='display: none;';
		$pet_animal_store_custom_css .='}';
	}

	/*-------- Blog Post Alignment ------*/
	$pet_animal_store_post_alignment = get_theme_mod('pet_animal_store_blog_post_alignment', 'left');
	if($pet_animal_store_post_alignment == 'center' ){
		$pet_animal_store_custom_css .='.services-box,.services-box h2,.services-box .read-btn{';
			$pet_animal_store_custom_css .=' text-align: '. $pet_animal_store_post_alignment .'!important;';
		$pet_animal_store_custom_css .='}';
	}elseif($pet_animal_store_post_alignment == 'right' ){
		$pet_animal_store_custom_css .='.services-box,.services-box h2,.services-box .read-btn{';
			$pet_animal_store_custom_css .='text-align: '. $pet_animal_store_post_alignment .'!important;';
		$pet_animal_store_custom_css .='}';
	}

		// Blog Post Button Font Size 
	$pet_animal_store_button_font_size = get_theme_mod('pet_animal_store_button_font_size');
	if($pet_animal_store_button_font_size != false){
		$pet_animal_store_custom_css .='.service-btn a{';
			$pet_animal_store_custom_css .='font-size: '.esc_attr($pet_animal_store_button_font_size).'px;';
		$pet_animal_store_custom_css .='}';
	}

	$pet_animal_store_button_text_transform = get_theme_mod( 'pet_animal_store_button_text_transform','Uppercase');
	if($pet_animal_store_button_text_transform == 'Capitalize'){
		$pet_animal_store_custom_css .='.service-text .service-btn a{';
			$pet_animal_store_custom_css .='text-transform:Capitalize;';
		$pet_animal_store_custom_css .='}';
	}
	if($pet_animal_store_button_text_transform == 'Lowercase'){
		$pet_animal_store_custom_css .='.service-text .service-btn a{';
			$pet_animal_store_custom_css .='text-transform:Lowercase;';
		$pet_animal_store_custom_css .='}';
	}
	if($pet_animal_store_button_text_transform == 'Uppercase'){
		$pet_animal_store_custom_css .='.service-text .service-btn a{';
			$pet_animal_store_custom_css .='text-transform:Uppercase;';
		$pet_animal_store_custom_css .='}';
	}
