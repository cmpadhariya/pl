<?php
// Template Name: How to Edit Pages in Block Theme
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>How to edit pages in block theme</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="edit-pages">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>First you need to edit the pages means how to add content in the pages in block theme.</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Next, if we want to edit the "about" page for example, we have to go to the about page in the pages menu in the dashboard.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/edit-pages-in-block-theme-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Next, we have to add the content that we want to display in the about page. Like we will add blocks and patterns in this site.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/edit-pages-in-block-theme-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Next, we have to select templates (which we have created in the templates folder of our theme) to show the data of the about page.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/edit-pages-in-block-theme-image3.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>Next, we can also select the "index.html"(Default template) templates (if "about-us.html" is not selected).</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/edit-pages-in-block-theme-image4.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:6 -> </h5>
										<p>Next, we've added a default block called "Post-Content" to the "about-us" template in the Gutenberg editor (this block will display the data from our pages on the frontend).</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/edit-pages-in-block-theme-image5.png">
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
