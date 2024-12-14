<?php
// Template Name: Facebook Pixel
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>How To add Facebook Pixels</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="facebook-pixel">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>To get started, Create Your manually facebook account and sign up. and you can <a href="https://www.facebook.com/events_manager2/overview?act=833548321013104">go straight there by clicking this link.</a></p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>After that click the "Connect data sources" link. then select the "web" options and connect.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/facebook-pixel-image1.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/facebook-pixel-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Next step the open the popup window and add pixel name.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/facebook-pixel-image3.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Open the "data source" menu and click the "continue pixel setup" button. and choose option "Meta pixel only" and click Next button.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/facebook-pixel-image4.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/facebook-pixel-image5.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>After that click "Install Code Manually" button.and click "Copy Code" button and paste your website header.php page.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/facebook-pixel-image6.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/facebook-pixel-image7.png">
								</li>
							</ul>
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
