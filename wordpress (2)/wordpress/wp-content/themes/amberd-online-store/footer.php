<?php

      $footer_layout = get_theme_mod( 'amberd_footer_layout' );
      if ( $footer_layout == 'amberdthreewidgetsleft' )  {
        get_template_part( 'template-parts/footer/footer-layout-one' );
      } 
      elseif ( $footer_layout == 'amberdthreewidgetscenter') {
        get_template_part( 'template-parts/footer/footer-layout-two' );
      } 
      elseif ( $footer_layout == 'amberdthreewidgetsright') {
          get_template_part( 'template-parts/footer/footer-layout-three' );
      } 
      elseif ( $footer_layout == 'amberdfourwidgets') {
          get_template_part( 'template-parts/footer/footer-layout-four' );
      }
      ?>

    <?php get_template_part('template-parts/partials/popup-search'); ?>
  
<?php wp_footer(); ?>
</body>    
</html>





