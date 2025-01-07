<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Open+Sans:wght@400;600&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>
<header id="masthead" class="site-header sticky top-0 bg-white shadow-md z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="site-branding">
            <?php
            the_custom_logo();
            if ( is_front_page() && is_home() ) :
                ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php
            else :
                ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php
            endif;
            $rajon_dey_music_description = get_bloginfo( 'description', 'display' );
            if ( $rajon_dey_music_description || is_customize_preview() ) :
                ?>
                <p class="site-description"><?php echo $rajon_dey_music_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
            <?php endif; ?>
        </div>

        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'flex space-x-4',
                )
            );
            ?>
        </nav>
    </div>
</header>

