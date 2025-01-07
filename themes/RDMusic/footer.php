<footer id="site-footer">
    <div class="container">
        <div class="footer-widgets">
            <?php dynamic_sidebar('footer-widget-area'); ?>
        </div>
        <div class="site-info">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

