<?php get_header(); ?>

<main id="primary" class="site-main">
    <section class="error-404 not-found">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'viod'); ?></h1>
        </header>

        <div class="page-content">
            <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'viod'); ?></p>

            <?php get_search_form(); ?>

            <div class="widget-area">
                <div class="widget widget_categories">
                    <h2 class="widget-title"><?php esc_html_e('Most Used Categories', 'viod'); ?></h2>
                    <ul>
                        <?php
                        wp_list_categories(array(
                            'orderby'    => 'count',
                            'order'      => 'DESC',
                            'show_count' => 1,
                            'title_li'   => '',
                            'number'     => 10,
                        ));
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer(); 