<?php
/**
 *
 *  Template Name: Front Page
 * 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Table_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        
<?php
$url = site_url();
if (strpos($url, 'hstreet') !== false) {
    echo '<br><br><br>' . 'hstreet!';
    } else { 
        if (strpos($url, 'cohi') !== false) {
            echo '<br><br><br>' . 'cohi!';
        } else {
            require_once 'include-main.php';
        }
    }
?>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php // get_template_part( 'template-parts/content', 'page' ); ?>

        <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>