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

            <div class="fp_div" id="splash">
                <h1 class="aligncenter">AUTHENTIC. THOUGHTFUL. ENGAGED.</h1>
                <span class="dashicons dashicons-twitter"></span>
                <span class="dashicons dashicons-facebook-alt"></span>
                <span class="dashicons dashicons-googleplus"></span>
            </div>
            <div class="fp_div" id='about'>
                <H1>WHO WE ARE</H1>
                <div class="col-md-4"></div>
                <p class="col-md-8"><?php echo $lorem_long; ?></p>
            </div>
            <div class="fp_div" id="parishes">
                <div class="col-md-6">
                    <a href="http://localhost/TableChurch/hstreet/"><h2 class="parish_text">H STREET</h2></a>
                    <p class ="parish_text">
                        <?php echo $lorem; ?>
                    </p>
                    <a href="http://localhost/TableChurch/hstreet/"><h3 class="parish_text">READ MORE</h3></a>
                </div>
                <div class="col-md-6">
                    <a href="http://localhost/TableChurch/cohi/"><h2 class="parish_text">COLUMBIA HEIGHTS</h2></a>
                    <p class ="parish_text">
                        <?php echo $lorem; ?>
                    </p>
                    <a href="http://localhost/TableChurch/hstreet/"><h3 class="parish_text">READ MORE</h3></a>
                </div>
            </div>
            <div class="fp_div" id="engaging">
                <div class="col-md-6" class="engaging_block">
                    <div class="shaded_box">
                        <a href="localhost/TableChurch/SERVING"><h1>SERVING</h1></a>
                        <p><?php echo $lorem_short; ?></p>
                        <a href="localhost/TableChurch/serving"><h3 class="parish_text">READ MORE</h3></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shaded_box">
                        <a href="localhost/TableChurch/GROWING"><h1>GROWING</h1></a>
                        <p><?php echo $lorem_short; ?></p>
                        <a href="localhost/TableChurch/GROWING"><h3 class="parish_text">READ MORE</h3></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shaded_box">
                        <a href="localhost/TableChurch/COMMUNITY"><h1>COMMUNITY</h1></a>
                        <p><?php echo $lorem_short; ?></p>
                        <a href="localhost/TableChurch/community"><h3 class="parish_text">READ MORE</h3></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shaded_box">
                        <a href="localhost/TableChurch/JUSTICE"><h1>JUSTICE</h1></a>
                        <p><?php echo $lorem_short; ?></p>
                        <a href="localhost/TableChurch/justice"><h3 class="parish_text">READ MORE</h3></a>
                    </div>
                </div>
            </div>
            <div class="fp_div" id="teaching">
                <h1>TEACHING</h1>
                <div class="container">
                    <?php 
                    $args = [
                        'posts_per_page'   => '4',
                        'post_type'        => 'sermon',
                        'orderby'          => 'date',
                        'order'            => 'DESC',
                    ];
                    $postslist = get_posts(/*'numberposts=4&order=DESC&orderby=date'*/ $args );
                    foreach ($postslist as $post) :
                        setup_postdata($post); ?>   
                    <div class="col-md-3" style="background-image: url('<?php echo wp_get_attachment_image_src(get_post_thumbnail_id() ) [0]; ?>');" class="sermonthumb">
                        <h2> <?php echo the_date(); ?> </h2>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="fp_div" id="giving">
                <H1>WANT TO GIVE?</H1>
            </div>
            <div class="fp_div" id="kids">
                <H1>KIDS & STUDENTS</h1>
            </div>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php // get_template_part( 'template-parts/content', 'page' ); ?>

                <?php endwhile; // End of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
