<?php
/*
Template Name: Home Screen
*/
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
                <!-- Newsletter Form -->
                <?php echo get_template_part( './template-parts/newsletter', 'part' ); ?>
            </div>

        </div>
    </div>

</div>

<?php
// Get the footer
get_footer();
?>