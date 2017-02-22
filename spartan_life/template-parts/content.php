<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package spartan_life
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php
        if ( is_single() ) :
            the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
        ?>
            <span class="article_meta_date"><?php the_time( 'M d, Y' ); echo "&nbsp;&nbsp;|&nbsp; "; ?></span>
            <span class="article_meta_cat"><?php the_category(', '); the_tags( '&nbsp;&nbsp;|&nbsp; ',' , ' ); ?></span>
        <?php
        else : ?>

            <span class="article_meta_date"><?php the_time( 'M d, Y' ); echo "&nbsp;&nbsp;|&nbsp; "; ?></span>
            <span class="article_meta_cat"><?php the_category(', '); ?></span>

            <?php
            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
           
           if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
            <?php endif;

        endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
            if ( is_single() ) {
                the_content( sprintf(
                /* translators: %s: Name of current post. */
                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'sb_blog_theme' ), array( 'span' => array( 'class' => array() ) ) ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
                ) );
                ?>
                <span class="article_meta_tags"><?php the_tags( 'Tags: ',' , ' ); ?></span>
            <?php
            } else {
                the_excerpt( sprintf(
                /* translators: %s: Name of current post. */
                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'sb_blog_theme' ), array( 'span' => array( 'class' => array() ) ) ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
                ) );
            }

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sb_blog_theme' ),
                'after'  => '</div>',
            ) );
        ?>
    </div><!-- .entry-content -->
</article><!-- #post-## -->
