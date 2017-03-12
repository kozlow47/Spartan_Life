<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package spartan_life
 */

get_header(); ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php
        if ( have_posts() ) : ?>

            <header class="page-header">
                <div class="contain_cat_search">
                    <?php
                        get_search_form();
                    ?>
                    <?php if (is_category('Recipes') or is_tag('Breakfast') or is_tag('Entrée') or is_tag('Dessert')) { ?>
                        <ul class="filter_archive_tags">
                            <li>Filter By:</li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/tag/breakfast">Breakfast</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/tag/entree">Entrée</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/tag/dessert">Dessert</a></li>
                            <!-- <li><a href="<?php #echo esc_url( home_url( '/' ) ); ?>/tag/snack">Snack</a></li> -->
                        </ul>
                    <?php } elseif (is_category('Travel') or is_tag('North America') or is_tag('Europe') or is_tag('Asia')) { ?>
                        <ul class="filter_archive_tags">
                            <li>Filter By:</li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/tag/north-america">North America</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/tag/europe">Europe</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>/tag/asia">Asia</a></li>
                        </ul>
                    <?php } else { ?>
                    <?php } ?>
                </div>
            </header><!-- .page-header -->

            <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();

                /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                get_template_part( 'template-parts/content', 'search' );

            endwhile;

            wpbeginner_numeric_posts_nav();

        else :

            get_template_part( 'template-parts/content', 'search' );

        endif; ?>

        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
