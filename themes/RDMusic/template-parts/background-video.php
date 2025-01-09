<!-- Background Video -->
<div id="videoBanner">
    <video autoplay muted loop id="myVideo">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/video/rdmusic-banner.mp4" type="video/mp4">
        Your browser does not support the video tag. Here’s a <a href="/static-image.jpg">static image</a> instead.
    </video>
    <img id="fallbackImage" src="<?php echo get_template_directory_uri(); ?>/assets/images/rdmusic-banner-fallback.jpg" alt="Fallback Banner" style="display: none; width: 100%; height: auto;">
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const video = document.getElementById("myVideo");
        const fallbackImage = document.getElementById("fallbackImage");

        // Check if the video can play
        video.onerror = function () {
            // Hide the video and show the fallback image
            video.style.display = "none";
            fallbackImage.style.display = "block";
        };
    });
</script>
