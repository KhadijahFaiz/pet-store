jQuery(function($){
	"use strict";
	jQuery('.main-menu-navigation > ul').superfish({
		delay: 500,                            
		animation: {opacity:'show',height:'show'},  
		speed: 'fast'                        
	});
});

function pet_animal_store_menu_open() {
	jQuery(".side-menu").addClass('open');
}
function pet_animal_store_menu_close() {
	jQuery(".side-menu").removeClass('open');
}

(function( $ ) {
	$(window).scroll(function(){
	  	var sticky = $('.sticky-header'),
      	scroll = $(window).scrollTop();

	  	if (scroll >= 100) sticky.addClass('fixed-header');
	  	else sticky.removeClass('fixed-header');
	});

	// Back to top
	jQuery(document).ready(function () {
	    jQuery(window).scroll(function () {
	      	if (jQuery(this).scrollTop() > 0) {
	          	jQuery('.scrollup').fadeIn();
	      	} else {
	         	jQuery('.scrollup').fadeOut();
	      	}
	    });
	    jQuery('.scrollup').click(function () {
      		jQuery("html, body").animate({
	          	scrollTop: 0
	      	}, 600);
	      	return false;
	    });
	});

	// Window load function
	window.addEventListener('load', (event) => {
		$(".preloader").delay(2000).fadeOut("slow");
	});
	  	
})( jQuery );

( function( window, document ) {
	function pet_animal_store_keepFocusInMenu() {
		document.addEventListener( 'keydown', function( e ) {
			const pet_animal_store_nav = document.querySelector( '.side-menu' );

			if ( ! pet_animal_store_nav || ! pet_animal_store_nav.classList.contains( 'open' ) ) {
				return;
			}

			const elements = [...pet_animal_store_nav.querySelectorAll( 'input, a, button' )],
				pet_animal_store_lastEl = elements[ elements.length - 1 ],
				pet_animal_store_firstEl = elements[0],
				pet_animal_store_activeEl = document.activeElement,
				tabKey = e.keyCode === 9,
				shiftKey = e.shiftKey;

			if ( ! shiftKey && tabKey && pet_animal_store_lastEl === pet_animal_store_activeEl ) {
				e.preventDefault();
				pet_animal_store_firstEl.focus();
			}

			if ( shiftKey && tabKey && pet_animal_store_firstEl === pet_animal_store_activeEl ) {
				e.preventDefault();
				pet_animal_store_lastEl.focus();
			}
		} );
	}

	pet_animal_store_keepFocusInMenu();
} )( window, document );