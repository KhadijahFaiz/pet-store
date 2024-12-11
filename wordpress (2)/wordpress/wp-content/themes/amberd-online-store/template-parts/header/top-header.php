<?php 
    if (get_theme_mod( 'amberd_top_header_layout') == 'phoneleft') {
    ?>
        <div class="amberd-top-header <?php if (empty(get_theme_mod( 'amberd_top_header_bg_gradient_color' ))) 
                    { echo esc_attr( 'amberd-top-header-bg-color' ); } 
                    else { echo esc_attr('amberd-top-header-gradient-color'); } ?>
                    <?php if (get_theme_mod( 'amberd_enable_top_header_border', '1' )) { } 
                    else { echo esc_attr( 'amberd-top-header-border' ); } ?>">

        <div class="amberd-top-header-section">
        <div class="amberd-top-header-left">
            <?php if ( get_theme_mod( 'amberd_top_header_phone_number' ) OR (get_theme_mod( 'amberd_top_header_phone_number' ) != '') ) { ?>
                    <span class="amberd-top-header-phone">
                        <span class="amberd-phone-email-icon"><i class="fa fa-phone top-header-icons"></i></span>
                        <span class="amberd-phone-email-text"><?php echo esc_html( get_theme_mod( 'amberd_top_header_phone_number' ) );  ?></span>
                    </span>
            <?php }   ?>
            <?php if ( get_theme_mod( 'amberd_top_header_email' ) OR (get_theme_mod( 'amberd_top_header_email' ) != '') ) { ?>
                    <span class="amberd-top-header-email">
                        <span class="amberd-phone-email-icon"><i class="fa fa-envelope top-header-icons"></i></span>
                        <span class="amberd-phone-email-text"><?php echo esc_html( get_theme_mod( 'amberd_top_header_email' ) );  ?></span>
                    </span>
            <?php }   ?>
        </div>
        <div class="amberd-top-header-right">
        <div class="amberd-top-header-right-content">
            <?php if (get_theme_mod( 'amberd_top_header_disable_twitter', '1' )) { } else { ?><span class="amberd-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'amberd_top_header_twitter_url' ) );  ?>" target="_blank"><i class="fa fa-twitter amberd-social-icons-color"></i></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'amberd_top_header_disable_facebook', '1' )) { } else { ?> <span class="amberd-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'amberd_top_header_facebook_url' ) );  ?>" target="_blank"><i class="fa fa-facebook-f amberd-social-icons-color"></i></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'amberd_top_header_disable_linkedin', '1' )) { } else { ?> <span class="amberd-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'amberd_top_header_linkedin_url' ) );  ?>" target="_blank"><i class="fa fa-linkedin amberd-social-icons-color"></i></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'amberd_top_header_disable_youtube', '1' )) { } else { ?> <span class="amberd-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'amberd_top_header_youtube_url' ) );  ?>" target="_blank"><i class="fa fa-youtube-play amberd-social-icons-color"></i></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'amberd_top_header_disable_instagram', '1' )) { } else { ?> <span class="amberd-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'amberd_top_header_instagram_url' ) );  ?>" target="_blank"><i class="fa fa-instagram amberd-social-icons-color"></i></a></span> <?php }; ?>
        </div>
        </div>
        </div>
        </div>
    <?php  
    }  
    else if (get_theme_mod( 'amberd_top_header_layout') == 'phonesocialcenter') {
    ?>
        <div class="amberd-top-header <?php if (empty(get_theme_mod( 'amberd_top_header_bg_gradient_color' ))) 
        { echo esc_attr( 'amberd-top-header-bg-color' ); } 
        else { echo esc_attr('amberd-top-header-gradient-color'); } ?>
        <?php if (get_theme_mod( 'amberd_enable_top_header_border', '1' )) { } 
        else { echo esc_attr( 'amberd-top-header-border' ); } ?>">
        <div class="amberd-top-header-section">
        <div class="amberd-top-header-left-content">
            <?php if ( get_theme_mod( 'amberd_top_header_phone_number' ) OR (get_theme_mod( 'amberd_top_header_phone_number' ) != '') ) { ?>
                    <span class="amberd-top-header-phone">
                        <span class="amberd-phone-email-icon"><i class="fa fa-phone top-header-icons"></i></span>
                        <span class="amberd-phone-email-text"><?php echo esc_html( get_theme_mod( 'amberd_top_header_phone_number' ) );  ?></span>
                    </span>
            <?php }   ?>
            <?php if ( get_theme_mod( 'amberd_top_header_email' ) OR (get_theme_mod( 'amberd_top_header_email' ) != '') ) { ?>
                    <span class="amberd-top-header-email">
                        <span class="amberd-phone-email-icon"><i class="fa fa-envelope top-header-icons"></i></span>
                        <span class="amberd-phone-email-text"><?php echo esc_html( get_theme_mod( 'amberd_top_header_email' ) );  ?></span>
                    </span>
            <?php }   ?>
        </div>
        <div class="amberd-top-header-right-content">
            <?php if (get_theme_mod( 'amberd_top_header_disable_twitter', '1' )) { } else { ?><span class="amberd-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'amberd_top_header_twitter_url' ) );  ?>" target="_blank"><i class="fa fa-twitter amberd-social-icons-color"></i></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'amberd_top_header_disable_facebook', '1' )) { } else { ?> <span class="amberd-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'amberd_top_header_facebook_url' ) );  ?>" target="_blank"><i class="fa fa-facebook-f amberd-social-icons-color"></i></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'amberd_top_header_disable_linkedin', '1' )) { } else { ?> <span class="amberd-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'amberd_top_header_linkedin_url' ) );  ?>" target="_blank"><i class="fa fa-linkedin amberd-social-icons-color"></i></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'amberd_top_header_disable_youtube', '1' )) { } else { ?> <span class="amberd-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'amberd_top_header_youtube_url' ) );  ?>" target="_blank"><i class="fa fa-youtube-play amberd-social-icons-color"></i></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'amberd_top_header_disable_instagram', '1' )) { } else { ?> <span class="amberd-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'amberd_top_header_instagram_url' ) );  ?>" target="_blank"><i class="fa fa-instagram amberd-social-icons-color"></i></a></span> <?php }; ?>
        </div>
        </div>
        </div>
    <?php  
    }  
    else if (get_theme_mod( 'amberd_top_header_layout') == 'phoneright') {
    ?>
        <div class="amberd-top-header <?php if (empty(get_theme_mod( 'amberd_top_header_bg_gradient_color' ))) 
        { echo esc_attr( 'amberd-top-header-bg-color' ); } 
        else { echo esc_attr('amberd-top-header-gradient-color'); } ?>
        <?php if (get_theme_mod( 'amberd_enable_top_header_border', '1' )) { } 
        else { echo esc_attr( 'amberd-top-header-border' ); } ?>">
        <div class="amberd-top-header-section">
        <div class="amberd-top-header-left-icons">
        <div class="amberd-top-header-left-icons-content">
            <?php if (get_theme_mod( 'amberd_top_header_disable_twitter', '1' )) { } else { ?><span class="amberd-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'amberd_top_header_twitter_url' ) );  ?>" target="_blank"><i class="fa fa-twitter amberd-social-icons-color"></i></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'amberd_top_header_disable_facebook', '1' )) { } else { ?> <span class="amberd-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'amberd_top_header_facebook_url' ) );  ?>" target="_blank"><i class="fa fa-facebook-f amberd-social-icons-color"></i></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'amberd_top_header_disable_linkedin', '1' )) { } else { ?> <span class="amberd-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'amberd_top_header_linkedin_url' ) );  ?>" target="_blank"><i class="fa fa-linkedin amberd-social-icons-color"></i></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'amberd_top_header_disable_youtube', '1' )) { } else { ?> <span class="amberd-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'amberd_top_header_youtube_url' ) );  ?>" target="_blank"><i class="fa fa-youtube-play amberd-social-icons-color"></i></a></span> <?php }; ?>
            <?php if (get_theme_mod( 'amberd_top_header_disable_instagram', '1' )) { } else { ?> <span class="amberd-social-icons"><a href="<?php echo esc_url( get_theme_mod( 'amberd_top_header_instagram_url' ) );  ?>" target="_blank"><i class="fa fa-instagram amberd-social-icons-color"></i></a></span> <?php }; ?>
        </div>
        </div>
        <div class="amberd-top-header-right-content">
            <?php if ( get_theme_mod( 'amberd_top_header_phone_number' ) OR (get_theme_mod( 'amberd_top_header_phone_number' ) != '') ) { ?>
                    <span class="amberd-top-header-phone">
                        <span class="amberd-phone-email-icon"><i class="fa fa-phone top-header-icons"></i></span>
                        <span class="amberd-phone-email-text"><?php echo esc_html( get_theme_mod( 'amberd_top_header_phone_number' ) );  ?></span>
                    </span>
            <?php }   ?>
            <?php if ( get_theme_mod( 'amberd_top_header_email' ) OR (get_theme_mod( 'amberd_top_header_email' ) != '') ) { ?>
                    <span class="amberd-top-header-email">
                        <span class="amberd-phone-email-icon"><i class="fa fa-envelope top-header-icons"></i></span>
                        <span class="amberd-phone-email-text"><?php echo esc_html( get_theme_mod( 'amberd_top_header_email' ) );  ?></span>
                    </span>
            <?php }   ?>
        </div>
        </div>
        </div>
    <?php  
    }  
?>