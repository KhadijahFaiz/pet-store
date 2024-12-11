<footer class="<?php 
                    if (!get_theme_mod( 'amberd_footer_template' )) { echo esc_attr('amberd-footer-one'); }
                    $amberdFooterStyle = get_theme_mod( 'amberd_footer_template' ); echo esc_attr($amberdFooterStyle);
                ?>">

            <?php if ( ( is_active_sidebar( 'amberd_footer_large_widget' ) ) OR ( is_active_sidebar( 'amberd_footer_widget_01' ) ) OR ( is_active_sidebar( 'amberd_footer_widget_02' ) ) ) { ?>

                <div class="amberd-footer-container">

                        <div class="site-footer__col-two-three-group">
                            <div class="site-footer__col-two">
                            <div class="amberd-widgets-inner">
                            <?php        
                                    if ( is_active_sidebar( 'amberd_footer_widget_01' ) ) {
                                        dynamic_sidebar( 'amberd_footer_widget_01' ); 
                                    }
                            ?>
                            </div>
                            </div>

                            <div class="site-footer__col-three">
                            <div class="amberd-widgets-inner">
                            <?php
                                    if ( is_active_sidebar( 'amberd_footer_widget_02' ) ) {
                                        dynamic_sidebar( 'amberd_footer_widget_02' ); 
                                    } 
                            ?>    
                            </div>
                            </div>
                        </div>

                        <div class="site-footer__col-one">
                        <div class="amberd-widgets-inner">
                        <?php
                                if ( is_active_sidebar( 'amberd_footer_large_widget' ) ) {
                                    dynamic_sidebar( 'amberd_footer_large_widget' ); 
                                }
                        ?>
                        </div>
                        </div>
                        
                </div>

            <?php } ?>

            <div class="amberd-footer-copyright-text">
                <?php
                $amberdFooterOption = get_theme_mod( 'amberd_footer_copyright_text' );
                $amberdFooterWP = sprintf( esc_html__( ' %s Powered by WordPress.', 'amberd-online-store' ), '<a target="_blank" title="WordPress Online Store Theme" href="'. esc_url( 'https://wordpress.org/themes/amberd-online-store/' ) .'">AmBerd - Online Store</a>' );
                ?>
                <p><?php echo esc_html($amberdFooterOption); echo $amberdFooterWP; ?></p>
            </div>

</footer>