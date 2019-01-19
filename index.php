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
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

<div class="row news-category-column">
	<div class="col-sm-2">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="heading-1">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
		          Item 1
		        </a>
		      </h4>
		    </div>
		    <div id="collapse-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-1">
		      <div class="panel-body">
		        Text 1
		      </div>
		    </div>
		  </div>
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="heading-2">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
		          Item 2
		        </a>
		      </h4>
		    </div>
		    <div id="collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-2">
		      <div class="panel-body">
		        Text 2
		      </div>
		    </div>
		  </div>
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="heading-3">
		      <h4 class="panel-title">
		        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
		          Item 3
		        </a>
		      </h4>
		    </div>
		    <div id="collapse-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-3">
		      <div class="panel-body">
		        Text 3
		      </div>
		    </div>
		  </div>
		</div>	</div><!-- END CATEGORY -->
	<div class="col-sm-8">

		<?php
			$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
			if ($_POST['select'] == 'newest') {
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
					'paged' => $paged,
					'order' => 'DESC'
				);
				query_posts($args);
			}
		  if ($_POST['select'] == 'oldest') {
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
					'paged' => $paged,
					'order' => 'ASC'
				);
				query_posts($args);
			}
		  if ($_POST['select'] == 'mcommented') {
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
					'paged' => $paged,
					'order' => 'DESC',
					'orderby' => 'comment_count',
				);
				query_posts($args);
			}
		  if ($_POST['select'] == 'lcommented') {
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 5,
					'paged' => $paged,
					'order' => 'ASC',
					'orderby' => 'comment_count',
				);
				query_posts($args);
			}

	?>
	<form method="post" id="order">
	  <select name="select" onchange='this.form.submit()'>
	    <option value="newest"<?php selected( $_POST['select'],'newest', 1 ); ?>>Newest</option>
	    <option value="oldest"<?php selected( $_POST['select'], 'oldest', 1 ); ?>>Oldest</option>
	    <option value="mcommented"<?php selected( $_POST['select'],'mcommented', 1 ); ?>>Most commented</option>
	    <option value="lcommented"<?php selected( $_POST['select'],'lcommented' , 1 ); ?>>least commented</option>
	  </select>
	</form>
	<?php
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
