<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AB_Capital
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<p class="text-center"><em>these will be footer dynamic sidebar widgets</em></p>
		
		<div class="container">
			
			<div class="row">
				<div class="col-sm-4">
					<img src="https://placehold.it/200x75" alt="" class="footLogo">
					<p>15 Corporate Plaza Dr, Suite 200<br/>Newport Beach, CA 92660</p>
					<h3>More Information</h3>
					<p>Page list widget goes here.</p>
				</div>
				<div class="col-sm-4">
					<h3>Contact</h3>
					<div class="row">
						<div class="col-sm-6">
							<p>15 Corporate Plaza Dr, Suite 200<br/>Newport Beach, CA 92660</p>
						</div>
						<div class="col-sm-6">
							<p>Phone<br/>123-456-7890</p>
						</div>
					</div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3322.813465719946!2d-117.87818978444442!3d33.610144048344594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dce089bc862b7f%3A0xa97e64ba90aef52c!2s15+Corporate+Plaza+Dr%2C+Newport+Beach%2C+CA+92660!5e0!3m2!1sen!2sus!4v1547423504638" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-sm-4">
					<h3>Newsletter</h3>
					<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					<h3>Subscribe to our Newsletter</h3>
					<p><em>This will most likely come from MC</em></p>
					<input type="text" placeholder="Your Name">
					<input type="email" placeholder="Your Email">
					<input type="submit" class="text-center" placeholder="Subscribe">
				</div>
			</div>

		</div>

		<div id="footDisc">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<p>&copy; 2019 ABCapital.com. All Rights Reserved.</p>
					</div>
					<div class="col-sm-6 text-sm-right">
						<p class="bTT"><a href="#">Back to Top</a></p>
					</div>
				</div>
			</div>
		</div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
