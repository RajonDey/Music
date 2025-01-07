<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $music_portfolio_comment_count = get_comments_number();
            if ('1' === $music_portfolio_comment_count) {
                printf(
                    esc_html__('One thought on &ldquo;%1$s&rdquo;', 'music-portfolio'),
                    '<span>' . get_the_title() . '</span>'
                );
            } else {
                printf( 
                    esc_html(_nx('%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $music_portfolio_comment_count, 'comments title', 'music-portfolio')),
                    number_format_i18n($music_portfolio_comment_count),
                    '<span>' . get_the_title() . '</span>'
                );
            }
            ?>
        </h2>

        <?php the_comments_navigation(); ?>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
            ));
            ?>
        </ol>

        <?php
        the_comments_navigation();

        if (!comments_open()) :
            ?>
            <p class="no-comments"><?php esc_html_e('Comments are closed.', 'music-portfolio'); ?></p>
            <?php
        endif;

    endif;

    comment_form();
    ?>
</div>

