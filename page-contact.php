<?php
/**
 * Template Name: Contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AB_Capital
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section id="contactForm">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<h2>Contact AB Capital</h2>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
							<ul class="list-inline list-social">
								<li class="list-item"><a href=""><i class="fa fa-facebook"></i></a></li>
								<li class="list-item"><a href=""><i class="fa fa-facebook"></i></a></li>
								<li class="list-item"><a href=""><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
						<div class="col-sm-6">
							<p><em>This will be made using contactform7</em></p>
							<form action="" id="contactForm">
								<p><input type="text" placeholder="Name"></p>
								<p><input type="email" placeholder="Email"></p>
								<p><input type="tel" placeholder="Phone"></p>
								<p><textarea name="Message" id="" cols="30" rows="10" placeholder="Message"></textarea></p>
								<p><input class="text-center" type="submit" value="Send Message"></p>
							</form>
						</div>
					</div>
				</div>
			</section>

			<section id="officeMap">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3322.813465719946!2d-117.87818978444442!3d33.610144048344594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dce089bc862b7f%3A0xa97e64ba90aef52c!2s15+Corporate+Plaza+Dr%2C+Newport+Beach%2C+CA+92660!5e0!3m2!1sen!2sus!4v1547423504638" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</section>

			<section id="blogFeedHoriz">
				<div class="blogFeedHorizSlider">
					<div class="row">
						<div class="col-sm-2 p-0">
							<img src="https://placehold.it/400x600" alt="">
						</div>
						<div class="col-sm-2 p-0">
							<img src="https://placehold.it/400x600" alt="">
						</div>
						<div class="col-sm-2 p-0">
							<img src="https://placehold.it/400x600" alt="">
						</div>
						<div class="col-sm-2 p-0">
							<img src="https://placehold.it/400x600" alt="">
						</div>
						<div class="col-sm-2 p-0">
							<img src="https://placehold.it/400x600" alt="">
						</div>
						<div class="col-sm-2 p-0">
							<img src="https://placehold.it/400x600" alt="">
						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
