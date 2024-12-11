      <div class="amberd-search-overlay" id="amberdModalContainer">
          <div class="amberd-search-overlay-layout">
            <form method="get" class="search-term" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <div class="amberd-search-container">
                <i class="fa fa-search amberd-search-overlay-icon" aria-hidden="true"></i>
                <label>
                  <input type="search" class="search-term" id="amberdfocusonoverlayinputwide"
                  placeholder="<?php echo esc_attr__( 'Enter a search term here...', 'amberd-online-store'); ?>"
                  value="<?php echo esc_attr(get_search_query()); ?>" name="s"
                  />
                </label>
                <button type="button" onClick="amberdToggleModal()" class="search-overlay-close-wide-button">
                  <i class="fa fa-close search-overlay-close-icon" aria-hidden="true"></i>
                </button>  
                </div>
                <div class="search-overlay-button">
                <button type="submit" class="amberd_hover_button_small <?php if (!get_theme_mod( 'amberd_search_overlay_page_button_style' )) { echo esc_attr('amberd_first_button_slide first_btn_slide_right'); } else { echo esc_attr( get_theme_mod( 'amberd_search_overlay_page_button_style' ) ); } ?>">
                  <?php echo esc_html__( 'Search', 'amberd-online-store'); ?>
                </button>
                </div>
            </form>
            <div tabIndex="0"></div>
          </div>
      </div>
 
      <div class="amberd-search-overlay" id="amberdModalContainerSmall">
          <div class="amberd-search-overlay-layout">
              <form method="get" class="search-term" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="amberd-search-container">
                    <i class="fa fa-search amberd-search-overlay-icon" aria-hidden="true"></i>
                    <label>
                      <input type="search" class="search-term" id="amberdfocusonoverlayinputsmall"
                      placeholder="<?php echo esc_attr__( 'Search term...', 'amberd-online-store'); ?>"
                      value="<?php echo esc_attr(get_search_query()); ?>" name="s"
                      />
                    </label>
                    <button type="button" onClick="amberdToggleModalSmall()" class="search-overlay-close-button">
                    <i class="fa fa-close search-overlay-close-icon" aria-hidden="true"></i>
                    </button>
                </div>
                    <div class="search-overlay-button">
                    <button type="submit" class="amberd_hover_button_small <?php if (!get_theme_mod( 'amberd_search_overlay_page_button_style' )) { echo esc_attr('amberd_first_button_slide first_btn_slide_right'); } else { echo esc_attr( get_theme_mod( 'amberd_search_overlay_page_button_style' ) ); } ?> search-overlay-fs">
                      <?php echo esc_html__( 'Search', 'amberd-online-store'); ?>
                    </button>
                    </div>
              </form>
              <div tabIndex="0"></div>
          </div>
      </div>