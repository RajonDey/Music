<?php
/**
 * Template for displaying all pages
 *
 * @package Rajon Dey Music
 */

get_header(); ?>

<div id="page" class="site">
    <div id="content" class="site-content">

        <!-- Background Video -->
        <?php echo get_template_part( './template-parts/background-video', 'part' ); ?>

        <!-- Overlay -->
        <div class="overlay">
            <!-- Social Media Links -->
            <?php echo get_template_part( './template-parts/social-menu', 'part' ); ?>

            <!-- Center Content -->
            <div class="center-content">
                <?php echo get_template_part( './template-parts/header-section', 'part' ); ?>
                
                <!-- Page Content -->
                <div class="blog-posts single-post-box">
                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            ?>
                            <div class="post-body">
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile;
                    else :
                        ?>
                        <p><?php _e( 'Sorry, no content found.' ); ?></p>
                    <?php endif; ?>
                </div>

                <!-- Newsletter Form -->
                <?php echo get_template_part( './template-parts/newsletter', 'part' ); ?>
            </div>

            
        </div>

    </div>
</div>

<?php get_footer(); ?>
