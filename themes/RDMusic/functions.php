<?php

// Include theme setup functions
require_once get_template_directory() . '/inc/theme-setup.php';


if (!function_exists('music_portfolio_post_thumbnail')) :
    function music_portfolio_post_thumbnail() {
        if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
            return;
        }

        if (is_singular()) :
            ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php else : ?>
            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php
                the_post_thumbnail('post-thumbnail', array(
                    'alt' => the_title_attribute(array(
                        'echo' => false,
                    )),
                ));
                ?>
            </a>
        <?php
        endif;
    }
endif;

// Menu Setup
function register_my_menus() {
    register_nav_menus(
        array(
            'menu-1' => __( 'Primary Menu' ),
            'menu-2' => __( 'Footer Menu' ),
        )
    );
}
add_action( 'after_setup_theme', 'register_my_menus' );
