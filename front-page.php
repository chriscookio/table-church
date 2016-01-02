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

            <div class="fp_div">
                <h1>AUTHENTIC. THOUGHTFUL. ENGAGED.</h1>
                <span class="dashicons dashicons-twitter"></span>
                <span class="dashicons dashicons-facebook-alt"></span>
                <span class="dashicons dashicons-googleplus"></span>
            </div>
            <div class="fp_div" id='about'>
                <H1>WHO WE ARE</H1>
            </div>
            <div class="fp_div">
                <H1>H STREET / COLUMBIA HEIGHTS </H1>
            </div>
            <div class="fp_div">
                <H1>PILLARS</H1>
            </div>
            <div class="fp_div">
                <h1>TEACHING</h1>
                <div class="container">
                    <?php 
                    $args = [
                        'posts_per_page'   => 4,
                        'post_type'        => 'sermon',
                        'orderby'          => 'date',
                        'order'            => 'DESC',
                    ];
                    $postslist = get_posts(/*'numberposts=4&order=DESC&orderby=date'*/ $args );
                    foreach ($postslist as $post) :
                        setup_postdata($post); ?>   
                    <div class=col-md-3 style="background-image: url('<?php echo wp_get_attachment_image_src(get_post_thumbnail_id() ) [0]; ?>'); class="sermonthumb"">
                        <h2> <?php echo the_date(); ?> </h2>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="fp_div">
                <H1>WANT TO GIVE?</H1>
            </div>
            <div class="fp_div">
                <H1>KIDS & STUDENTS</h1>
            </div>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php // get_template_part( 'template-parts/content', 'page' ); ?>

                <?php endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
