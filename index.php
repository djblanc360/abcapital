<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AB_Capital
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">


					</div> 

			    <?php endwhile; ?>
			  <?php  else : ?>

			        <article class="no-posts">

			            <h1><?php _e('No posts were found.'); ?></h1>

			        </article>
			    <?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
