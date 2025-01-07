<?php

function music_portfolio_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'music-portfolio'),
    ));
    
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'music_portfolio_setup');

function music_portfolio_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'music-portfolio'),
        'id'            => 'footer-widget-area',
        'description'   => __('Add widgets here to appear in your footer.', 'music-portfolio'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'music_portfolio_widgets_init');

function music_portfolio_scripts() {
    wp_enqueue_style('music-portfolio-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'music_portfolio_scripts');

// Custom post type for events
function music_portfolio_create_event_post_type() {
    register_post_type('event',
        array(
            'labels' => array(
                'name' => __('Events'),
                'singular_name' => __('Event')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
            'menu_icon' => 'dashicons-calendar-alt',
        )
    );
}
add_action('init', 'music_portfolio_create_event_post_type');

