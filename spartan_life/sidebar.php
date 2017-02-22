<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package spartan_life
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div>
            <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
            <input type="text" placeholder="Search Spartan Life" value="<?php echo get_search_query(); ?>" name="s" id="s" />
            <input type="submit" id="searchsubmit"
                value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
        </div>
    </form>

    <div class="aside_me">
        <a href="about" class="about_photo"></a>
        <p>I'm Natalie, a fitness enthusiast and food lover. I fill these pages with healthy plant-based recipes, tales of my travels around the world, and workout tips & inspiration!</p>
    </div>

    <div class="aside_recent">
        <h4>Recent Posts</h4>

        <div id="recent-posts">
            <div <?php post_class(); ?> id="featured-<?php the_ID(); ?>">
            <?php
                $args = array( 'numberposts' => '10', 'meta_key' => '_thumbnail_id', 'post_status' => 'publish' );
                $recent_posts = wp_get_recent_posts( $args );
                foreach ( $recent_posts as $recent ) {
                    if ( has_post_thumbnail( $recent["ID"] ) ) {
                        echo '<a class="aside_img" href="' . get_permalink( $recent["ID"] ) . '">';
                        echo get_the_post_thumbnail( $recent["ID"], 'archive_grid' );
                        echo '</a>';
                        echo '<a class="aside_title" href="' . get_permalink($recent["ID"]) . '">' .   ( __($recent["post_title"])).'</a>';
                    }
                }
            ?>
            </div>
        </div>
    <div class="aside_insta">
        <h4>Instagram</h4>
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
</aside><!-- #secondary -->