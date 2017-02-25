<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package spartan_life
 */

?>

<section class="no-results not-found">
    <header class="page-header">
        <?php get_search_form(); ?>
    </header><!-- .page-header -->

    <div class="page-content">
        <?php
        if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

            <p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'spartan_life' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

        <?php elseif ( is_search() ) : ?>

            <p class="none"><?php esc_html_e( 'Sorry, no content matched your criteria.', 'spartan_life' ); ?></p>
            <?php

        else : ?>

            <p class="none;"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'spartan_life' ); ?></p>
            <?php

        endif; ?>
    </div><!-- .page-content -->
</section><!-- .no-results -->
