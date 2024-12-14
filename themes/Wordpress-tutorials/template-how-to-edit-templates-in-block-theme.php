<?php
// Template Name: How to Edit Templates in Block Theme
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>How to edit templates in block theme</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="edit-templates">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>First you need to edit the templates means how to add content in the templates.</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Next, we created our templates in a folder called "templates" in the theme. Like index.html,about-us.html,contact-us.html etc.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/edit-templates-in-block-theme-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Next, if we want to edit "about-us.html" templates as an example, we can edit direct that.</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>You will find your about-us template in the WordPress dashboard under Appearance->editor->templates.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/edit-templates-in-block-theme-image2.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/edit-templates-in-block-theme-image3.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>Next, we need to directly add blocks and patterns to our site in about-us templates in the Gutenberg editor.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/edit-templates-in-block-theme-image5.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:6 -> </h5>
										<p>Next, after we edit the "about-us" templates, we have to select simply templates in the "About" page.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/edit-pages-in-block-theme-image3.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:7 -> </h5>
										<p>Finally you will see the About Us page on the homepage your page will look perfect show.</p>
									</div>
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
