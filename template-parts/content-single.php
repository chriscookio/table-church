<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Table_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class='row'>
            <header class="entry-header">
                <?php 
                the_title( '<h1 class="entry-title" style="margin-bottom: 0;">', '</h1>' ); 
                echo '</row><row>';
                the_date("l, F j, Y",'<h3>','</h3>');
                ?>
            </header><!-- .entry-header -->
        </div>
        <div class="entry-header">
            <div class="row">
                <div class="col-md-offset-2 col-md-8 content-thumbnail"> 
                    <?php the_post_thumbnail(); ?> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-4 content-sermon">
                        <?php the_content(); ?>
                </div>
            </div>
            <row>
                <h3 style="margin-top: 3em;"><a href="<?php echo site_url() . '/blog/sermons/'; ?>">Listen to all sermons>></a></h3>
            </row>
    <?php
    wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'table-theme' ),
            'after'  => '</div>',
    ) );
    ?>

        </div><!-- .entry-content -->
    </div><!-- .container -->

    <footer class="entry-footer">
            <?php // table_theme_entry_footer(); //// just the "edit" link...no need //// ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
