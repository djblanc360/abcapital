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

<div class="row news-category-column">
	<div class="col-sm-2">
<?php isset($_GET['category_name' => 'test1'] ?>

	</div><!-- END CATEGORY -->
	<div class="col-sm-8">
		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			query_posts(array(
			    'post_type'      => 'post',
			    'paged'          => $paged,
			    'posts_per_page' => 5
			));

			if (have_posts()) : while (have_posts()) : the_post();
		?>
			<div class="row">
				<div class=" col-sm-3">

					<?php echo the_post_thumbnail(); ?>
				</div>

				<div class=" col-sm-8">


					<h4 class="post-title"><a href="<?php the_permalink(); ?>" class="post-title-link"><?php the_title(); ?></a></h4>
					<p class="blogPostMeta">
							<?php $postLikes = wp_ulike_get_post_likes(get_the_ID());?>
							<?php the_author(); ?>  | <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?> | <?php echo get_comments_number(); ?> Comments | <?php echo get_the_date('Y.M.d'); ?>  |  <?php if($postLikes) { echo $postLikes ; } else { echo '<span>0</span>'; } ?> Likes | Share This Post
					</p>

			<div class="post-text"> <?php the_excerpt(); ?> </div>
			<a href="<?php the_permalink(); ?>" class="button read-more-button">Read More</a>
				</div>
				<div class="clearfix"></div>
			</div><!--end row-->

				<?php endwhile; ?>

				<?php numbered_pagination(); ?>

			<?php  else : ?>

						<article class="no-posts">

								<h1><?php _e('No posts were found.'); ?></h1>

						</article>
				<?php endif; ?>
	</div><!--END NEWS -->
</div><!-- END MAIN ROW -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
