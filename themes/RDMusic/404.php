<?php get_header(); ?>

<div class="container">
    <main id="main-content">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'music-portfolio'); ?></h1>
            </header>

            <div class="page-content">
                <p><?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'music-portfolio'); ?></p>
                <?php get_search_form(); ?>
            </div>
        </section>
    </main>
</div>

<?php get_footer(); ?>

