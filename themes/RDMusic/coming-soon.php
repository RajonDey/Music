<?php
/*
Template Name: Coming Soon
*/
get_header();
?>

<div id="page" class="site">
    <div id="content" class="site-content">
        
        <!-- Background Video -->
        <video autoplay muted loop id="myVideo">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/video/rdmusic-banner.mp4" type="video/mp4">
            Your browser does not support the video tag. Here’s a <a href="/static-image.jpg">static image</a> instead.
        </video>

        <!-- Overlay -->
        <div class="overlay">
            <!-- Social Media Links -->
            <?php echo get_template_part( './template-parts/social-menu', 'part' ); ?>

            <!-- Center Content -->
            <div class="center-content">
                <h1>We're Almost There!</h1>
                <p>Our music space is coming soon. Stay tuned for updates, and feel free to sign up for our newsletter!</p>
                
                <!-- Newsletter Form -->
                <?php echo get_template_part( './template-parts/newsletter', 'part' ); ?>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
