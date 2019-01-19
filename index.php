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
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        Collapsible Group Item #1
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        Collapsible Group Item #2
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="more-less glyphicon glyphicon-plus"></i>
                        Collapsible Group Item #3
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
	</div><!-- END CATEGORY -->
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
