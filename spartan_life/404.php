<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package spartan_life
 */

get_header(); ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <section class="error-404 not-found">
                <header class="page-header">
                    <h1 class="page-title">Whoops - that page doesn't exist!</h1>
                    <p>Looks like there's nothing here. Try returning to the <a href="<?php echo esc_url( home_url( '/' ) ); ?>">homepage</a> or using the search form below!</p>
                    <?php get_search_form(); ?>
                </header><!-- .page-header -->

            </section><!-- .error-404 -->

        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
