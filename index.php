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
		<form action="" method="GET">
		<select name="sort" id="sort">
		<option value="DESC" <?php selected( get_query_var( 'sort' ), 'DESC' ); ?>>Sort by Newest</option>
		<option value="ASC" <?php selected( get_query_var( 'sort' ), 'ASC' ); ?>>Sort by Oldest</option>
		<option value="views" <?php selected( get_query_var( 'sort' ), 'views' ); ?>>Sort by Most Viewed</option>
		</select>
		</form>

		<?php
		add_action( 'init', 'custom_rewrite_rules' );

		function custom_rewrite_rules() {
		// add a news query var
		add_rewrite_tag( '%sort%', '([^/]+)' );
		}
		?>

		<?php
		add_action( 'pre_get_posts', 'custom_pre_get_posts' );

		function custom_pre_get_posts( $query ) {

		// don't affect wp-admin screens
		if ( is_admin() )
		return;

		// vars
		$sort = get_query_var( 'sort' );

		/** change the order of posts in the main query */
		if ( $query->is_main_query() && $sort ) {
		// change 'order' (ASC or DESC)
		if ( in_array( $sort, array( 'ASC', 'DESC' ) ) ) {
		$query->set( 'order', $sort );
		// most views
		} else if ( 'views' == $sort ) {
		$query->set( 'orderby', 'meta_value_num' );
		$query->set( 'meta_key', $sort );
		}
		}
		}
		?>			
	</div><!--END NEWS -->
</div><!-- END MAIN ROW -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
