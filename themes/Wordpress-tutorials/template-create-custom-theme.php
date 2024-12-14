<?php
// Template Name: Create Custom Theme
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Create Custom Theme</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="custom-theme-steps">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>Create and Store the Template Files. Ex-(index.php,style.css,header.php,footer.php,functions.php,sidebar.php,single.php,page.php etc).</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/custom-theme-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Set Up the Initial CSS Stylesheet. Add theme name,description,author,author url etc.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/custom-theme-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>At this point, your theme will already be visible on your WordPress dashboard.Go to Appearance -> Themes.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/custom-theme-image3.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p> Make the WordPress Theme Functional. For example add custom header,add multiple stylesheets and scripts,featured images code etc.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/custom-theme-image4.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/custom-theme-image5.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>Build a Layout for Your Custom Theme. For Example WordPress theme by modifying the header.php, index.php, footer.php, <br> single.php, page.php, style.php files.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/custom-theme-image6.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:6 -> </h5>
										<p>Improve Your Design on the CSS Stylesheet. For Example Add the multiple css to improve the theme layout.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/custom-theme-image7.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:7 -> </h5>
										<p>Next add your theme front image.  your theme file add "screenshot.png" file. and showing the front image Go to Appearance -> Themes.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/custom-theme-image8.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/custom-theme-image9.png">
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
