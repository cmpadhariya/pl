<?php
// Template Name: Map Integration
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Google Map Integration</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="map-integration">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>Visit your google maps.</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Type in any street address and click the Search button.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/google-map-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Select Share and a popup will appear, as illustrated below.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/google-map-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Select Embed a map and copy the code from the box. The code will begin with <iframe.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/google-map-image3.png">
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="maintitle">
					<h1>Example of Google Map Integration</h1>
				</div>
				<div class="demo-map-integration">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.986557307705!2d70.7973056143203!3d22.278499049317126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cb940df750c9%3A0x8586ee4af39fc3ac!2sQrolic%20Technologies%20%7C%20Best%20Web%20Development%2C%20Web%20Design%2C%20Mobile%20App%20Development%20Company!5e0!3m2!1sen!2sin!4v1665486652777!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</section>
<?php
the_content();
wp_footer();
?>
