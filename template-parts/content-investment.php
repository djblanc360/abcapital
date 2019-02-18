<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AB_Capital
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				ab_capital_posted_on();
				ab_capital_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php ab_capital_post_thumbnail(); ?>

	<div class="entry-content">

		<div class="row">
			<div class="col-sm-8">
				<div class="investContent">
					<h1><?php the_title(); ?></h1>
					<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ab-capital' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ab-capital' ),
						'after'  => '</div>',
					) );
					?>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="investStatsCont">
					<div class="investStatsInner">
						<div class="investStatRow">
							<div class="row">
								<div class="col-6">
									<p>Investment Total</p>
								</div>
								<div class="col-6 text-right">
									<p>$4,000,000</p>
								</div>
							</div>
						</div>
						<div class="investStatRow">
							<div class="row">
								<div class="col-6">
									<p>Investment Type</p>
								</div>
								<div class="col-6 text-right">
									<p>Construction</p>
								</div>
							</div>
						</div>
						<div class="investStatRow">
							<div class="row">
								<div class="col-6">
									<p>Location</p>
								</div>
								<div class="col-6 text-right">
									<p>Los Angeles</p>
								</div>
							</div>
						</div>
						<div class="investStatRow">
							<div class="row">
								<div class="col-6">
									<p>Broker Agent</p>
								</div>
								<div class="col-6 text-right">
									<p>AB Capital</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php ab_capital_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
