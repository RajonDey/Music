<?php
// 404.php - Error Page for Rajon Dey Music Theme
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
                <h1>Oops, Looks Like You’re Lost!</h1>
                <p>The page you're looking for doesn't exist. But don’t worry, there’s plenty of music to discover!</p>
                
                <!-- Button to go back to home -->
                <a href="<?php echo home_url(); ?>" class="btn-home">Take me home</a>

                <!-- Newsletter Form -->
                <?php echo get_template_part( './template-parts/newsletter', 'part' ); ?>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
