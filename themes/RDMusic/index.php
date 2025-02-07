<?php
/* Home.php */
get_header();
?>

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
                
                <!-- Blog Posts Listing -->
                <div class="blog-posts">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            ?>
                            <div class="post-summary">
                                <h2><a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a></h2>
                            </div>
                            <?php
                        endwhile;
                    else :
                        ?>
                        <p>No posts found.</p>
                    <?php endif; ?>
                </div>

                <!-- Newsletter Form -->
                <?php echo get_template_part( './template-parts/newsletter', 'part' ); ?>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
