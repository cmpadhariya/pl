<?php
// Template Name: Create Newsletter
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Create Newsletter</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="newsletter-steps">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>Install and activate the Mailchimp Plugin.</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Open the your dashboard and click the mailchimp plugin option. Create account.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-image1.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>After the create account to add Mailchimp API Key.get the API key Mailchimp Dashboard.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-image3.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Next Add New Form. Go to MC4VP -> Form and add form name and click "Add New Form" button.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-image4.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>Next add form field for example input,button etc.and click "save" button.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-image5.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-image6.png">
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="maintitle">
					<h1>Example of Newsletter</h1>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="newsletter-demo">
							<h5><strong>Sign up</strong> for email updates</h5>
							<?php echo do_shortcode( '[mc4wp_form id="233"]' ); ?>
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
