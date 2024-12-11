<aside id="primary" class="sidebar-widget-area">
    <?php if (!is_active_sidebar('amberd_blog_sidebar')) { ?>
        <section id="search" class="widget widget_search">
            <h3 class="widget-title"><?php esc_html_e('Search', 'amberd-online-store'); ?></h3>
            <?php get_search_form(); ?>
        </section>
        <section id="tags" class="widget widget_tag_cloud">
            <h3 class="widget-title"><?php esc_html_e('Tag Cloud', 'amberd-online-store'); ?></h3>
            <?php wp_tag_cloud(); ?>
        </section>
        <section id="archives" class="widget widget_archive">
            <h3 class="widget-title"><?php esc_html_e('Archives', 'amberd-online-store'); ?></h3>
                <?php wp_get_archives(); ?>
        </section>
        <section id="login" class="widget widget_meta">
            <h3 class="widget-title"><?php esc_html_e('Login', 'amberd-online-store'); ?></h3>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
        </section>
    <?php } else { dynamic_sidebar( 'amberd_blog_sidebar' ); } ?>
</aside>