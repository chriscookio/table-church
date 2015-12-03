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

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>
                                
                                <?php echo do_shortcode('[lptw_recentposts layout="grid-medium" post_type="post" link_target="self" fluid_images="true" min_height="0" space_hor="10" space_ver="10" columns="3" order="DESC" orderby="date" posts_per_page="10" post_offset="0" reverse_post_order="false" exclude_current_post="false" color_scheme="dark" override_colors="false" background_color="#4CAF50" text_color="#ffffff" excerpt_show="false" excerpt_lenght="35" ignore_more_tag="false" read_more_show="false" read_more_inline="false" read_more_content="Read more →" show_date_before_title="false" show_date="false" show_time="false" show_time_before="false" show_subtitle="false" date_format="d.m.Y" time_format="H:i" no_thumbnails="show"]'); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
