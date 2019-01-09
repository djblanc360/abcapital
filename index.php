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
				<div class="row">
			    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

						<?php echo the_post_thumbnail(); ?>
				  </div>

					<div class="col-xs-4 col-sm-6">


						<h6 class="post-title"><a href="<?php the_permalink(); ?>" class="post-title-link"><?php the_title(); ?></a></h6>
                <p>
                    <?php $postLikes = wp_ulike_get_post_likes(get_the_ID());?>
                     <i class="far fa-calendar-alt"></i> <?php echo get_the_date('M d, Y'); ?> | <i class="far fa-comments"></i> <?php echo get_comments_number(); ?> | <i class="far fa-heart"></i> <?php if($postLikes) { echo $postLikes ; } else { echo '<span>0</span>'; } ?>
                </p>

        <div class="post-text"> <?php the_excerpt(); ?> </div>
    		<a href="<?php the_permalink(); ?>" class="button read-more-button">Read More</a>
		    <div class="clearfix"></div>
            <p class="blogPostMeta">
                <?php the_author(); ?>  | <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>
            </p>



					</div>
					<div class="clearfix"></div>
				</div><!--end row-->

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
