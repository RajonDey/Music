<?php get_header(); ?>

<div class="container">
    <main id="main-content">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', 'page');
        endwhile;
        ?>
    </main>
</div>

<?php get_footer(); ?>

