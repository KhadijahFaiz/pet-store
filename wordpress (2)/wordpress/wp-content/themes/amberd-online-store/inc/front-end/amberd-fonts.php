<?php 
    function amberd_enqueue_fonts_url() {
        $amberdFontFamily = get_theme_mod( 'amberd_global_fonts' );
        $fonts_url = '';
        $fonts     = array();
        $subsets   = '';
        if (  $amberdFontFamily == "Roboto"  ) {
            $fonts[] = "Roboto:300,400,500,600,700";
        }
        if (  $amberdFontFamily == "Poppins"  ) {
            $fonts[] = "Poppins:300,400,500,600,700,800,900";
        }
        if (  $amberdFontFamily == "Open Sans"  ) {
            $fonts[] = "Open Sans:300,400,500,600,700,800,900";
        }
        if (  $amberdFontFamily == "Alegreya"  ) {
            $fonts[] = "Alegreya:300,400,500,600,700,800,900";
        }
        if (  $amberdFontFamily == "Alegreya Sans"  ) {
            $fonts[] = "Alegreya Sans:300,400,500,600,700,800,900";
        }
        if (  $amberdFontFamily == "Lato"  ) {
            $fonts[] = "Lato:300,400,500,600,700,800,900";
        }
        if (  $amberdFontFamily == "Montserrat"  ) {
            $fonts[] = "Montserrat:300,400,500,600,700,800,900";
        }
        if (  $amberdFontFamily == "Oswald"  ) {
            $fonts[] = "Oswald:300,400,500,600,700,800,900";
        }
        if (  $amberdFontFamily == "Raleway"  ) {
            $fonts[] = "Raleway:300,400,500,600,700,800,900";
        }
        if (  $amberdFontFamily == "Inknut Antiqua"  ) {
            $fonts[] = "Inknut Antiqua:300,400,500,600,700,800,900";
        };
        $is_ssl = is_ssl() ? 'https' : 'http';
    
        if (  $fonts  ) {
            $fonts_url = add_query_arg( array(
                'family' => urlencode( implode( '|', $fonts  ) ),
                'subset' => urlencode( $subsets ),
            ), "$is_ssl://fonts.googleapis.com/css" );
        }
        return esc_url($fonts_url);
}