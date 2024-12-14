<?php
// Template Name: Create Page Template
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Create a Page Template</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="create-page">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>Open the text editer and create a new file from page template.php</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>After that page-template.php file inside the first of added the template name.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/page-template-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Open the WordPress dashboard and click the page menu and open the add new page.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/page-template-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>After the click add new on open the below page. and add page title and select the page template.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/page-template-image3.png">
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
