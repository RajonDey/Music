<?php
/* Single Blog Post Template */
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
                
                <!-- Blog Post Details -->
                <div class="blog-posts single-post-box">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            ?>
                            <div class="post-content">
                                <h1><?php the_title(); ?></h1>
                                <div class="post-meta">
                                    <span class="post-date"><?php the_date(); ?></span>
                                    <span class="post-author">By <?php the_author(); ?></span>
                                </div>
                                <div class="post-body">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                            <?php
                        endwhile;
                    else :
                        ?>
                        <p>No post found.</p>
                    <?php endif; ?>
                </div>

                <!-- Newsletter Form -->
                <?php echo get_template_part( './template-parts/newsletter', 'part' ); ?>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
