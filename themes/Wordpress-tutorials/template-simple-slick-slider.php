<?php
// Template Name: Simple SlickSlider
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Simple Slick Slider</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="simple-slickslider">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>Open Google and Search Slick Slider.com</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>After open website and click the "Get Started" menu. And add the two css and js link for your website.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/simple-slick-slider-one.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Click the demo menu and select the demo for slick slider.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/simple-slick-slider-two.png">
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="maintitle">
					<h1>Example of Simple Slick Slider</h1>
				</div>
				<div class="demo-slider">
					<div class="demo-slider__inner row">
							<div class="box col-lg-4">
								<img src="<?php echo get_template_directory_uri(); ?>/image/image-one.jpg">
							</div>
							<div class="box col-lg-4">
								<img src="<?php echo get_template_directory_uri(); ?>/image/image-two.jpg">
							</div>
							<div class="box col-lg-4">
								<img src="<?php echo get_template_directory_uri(); ?>/image/image-three.jpg">
							</div>
							<div class="box col-lg-4">
								<img src="<?php echo get_template_directory_uri(); ?>/image/image-three.jpg">
							</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
the_content();
wp_footer();
?>
