<nav id="site-navigation" class="main-navigation main-menu">
    <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'flex space-x-4',
                'fallback_cb'    => false, 
            )
        );
    ?>
</nav>
<!-- <h1>Feel the Sound with Rajon!</h1> -->
<h1>Feel the Sound!</h1>
<p>Every masterpiece begins with a single note—It takes time to even play something recognizable!</p>