<?php get_header(); ?>

<div class="container">
    <main id="main-content">
        <?php
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', 'single');

            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
        endwhile;
        ?>
    </main>
</div>

<?php get_footer(); ?>

