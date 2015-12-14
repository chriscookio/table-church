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

            <div class="s1" class="page-content">

                <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                            <?php }
                    }
                ?>
                <div class="container">
                    <?php $postslist = get_posts('numberposts=4&order=DESC&orderby=date');
                    foreach ($postslist as $post) :
                        setup_postdata($post); ?>   
                    <div class=col-md-3 class="sermonthumb" style="background-image: url('<?php echo wp_get_attachment_image_src(get_post_thumbnail_id() ) [0]; ?>'); background-repeat: no-repeat;">
                    <?php echo the_date(); ?>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            
            <div class="s2">

                <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                            <?php }
                    }
                ?>
            </div>
            <div class="s3">

                <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                            <?php }
                    }
                ?>
            </div>
            <div class="s4">

                <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                            <?php }
                    }
                ?>
            </div>
            <div class="s5">

                <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                            <?php }
                    }
                ?>
            </div>
            <div class="s6">

                <?php
                    if ( have_posts() ) {
                        while ( have_posts() ) {
                            the_post(); ?>
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                            <?php }
                    }
                ?>
            </div>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php // get_template_part( 'template-parts/content', 'page' ); ?>

                <?php endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
