<header role="banner" class="<?php  if (empty(get_theme_mod( 'amberd_header_bg_gradient_color' )))
                                        { echo esc_attr( 'amberd-main-header-bg' ); }
                                            else { echo esc_attr('amberd-main-header-bg-gradient'); } ?>">
   
    <?php if ( get_theme_mod( 'amberd_header_layout') == 'headerlayoutone') 
              { get_template_part( 'template-parts/header/header-layouts/header-layout-one' ); } 
                  else if ( get_theme_mod( 'amberd_header_layout') == 'headerlayouttwo') 
                      { get_template_part( 'template-parts/header/header-layouts/header-layout-two' ); }
                      else if ( get_theme_mod( 'amberd_header_layout') == 'headerlayoutthree') 
                          { get_template_part( 'template-parts/header/header-layouts/header-layout-three' ); } 
    ?>

</header>