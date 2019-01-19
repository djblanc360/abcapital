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

		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		    <div class="panel panel-default">
		        <div class="panel-heading" role="tab" id="headingOne">
		             <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          Category Section #1
		        </a>
		      </h4>

		        </div>
		        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		            <div class="panel-body">
		            	<ul>
										<li><a href="<?php get_category_by_slug( test1 ); ?>">Test 1</a></li>
									</ul>
		            </div>
		        </div>
		    </div>
		    <div class="panel panel-default">
		        <div class="panel-heading" role="tab" id="headingTwo">
		             <h4 class="panel-title">
		        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          Category Section #2
		        </a>
		      </h4>

		        </div>
		        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
		            <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</div>
		        </div>
		    </div>
		    <div class="panel panel-default">
		        <div class="panel-heading" role="tab" id="headingThree">
		             <h4 class="panel-title">
		        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          Category Sectionm #3
		        </a>
		      </h4>

		        </div>
		        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
		            <div class="panel-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
		        </div>
		    </div>
		</div>
	</div><!-- END CATEGORY -->
	<div class="col-sm-8">
			<form action="" method="POST" id="post-sort-form">
				<select name="post-sort" form="post-sort-form" id="post-sort" onchange="this.form.submit()">
				  <option value="newest">Newest</option>
				  <option value="oldest">Oldest</option>
					<noscript><input type="submit" value="Submit"></noscript>
				</select>
			</form>

		<?php	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
		<?php
				$args = $_POST['post-sort'];
				echo $args;
				switch($args) {
				    case 'oldest':
								echo "this is the oldest";

				        $args = array(
								'paged' => $paged,
								'post_type'  => 'post',
								'posts_per_page' => 5,
								'orderby' => 'date',
								'order' => 'ASC',
								);
				        break;
				    default:
				    case 'newest':
								echo "this is the newest";
				        $args = array(
								'paged' => $paged,
								'post_type'  => 'post',
								'posts_per_page' => 5,
								'orderby' => 'date',
								'order' => 'DESC',
								);
				        break;
				}

		?>
		</form>


	<?php
			 query_posts($args);
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

				<?php endwhile; wp_reset_query() ?>

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
