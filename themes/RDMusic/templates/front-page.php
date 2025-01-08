<?php
/*
Template Name: Home Screen
*/

// Get the header
get_header();
?>



<div id="page" class="site">
    <div id="content" class="site-content">
        <video autoplay muted loop id="myVideo">
            <source src="<?php echo get_template_directory_uri(); ?>/assets/video/rdmusic-banner.mp4" type="video/mp4">
        </video>
        <div class="overlay">
           NEWSLETTER + Blog<br/>
           Insta/Twitter/Facebook/
           Soundcloud/
        </div>
    </div>
</div>

<?php
// Get the footer
get_footer();
?>