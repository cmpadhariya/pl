<?php
// Template Name: Create Widget
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Create Widget</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="widget-steps">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>First of the open function.php file and register_sidebar widget.and add widget title,description,id,custom code etc.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-widget-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Next Go To Appearance -> Widget menu and show the widgets.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-widget-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Next then add dynamic item like this(title,description,image,list etc).Click the plus icon and add dynamic item.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-widget-image3.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Next Display the custom widget your file to add the code for file.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-widget-image4.png">
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="maintitle">
					<h1>Example of Widget</h1>
				</div>
				<div class="row">
					<div class="col-12">
					<?php
					if ( is_active_sidebar( 'header-widget-area' ) ) {
						?>

						<aside class="in-header widget-area right" role="complementary">
							<?php dynamic_sidebar( 'header-widget-area' ); ?>
						</aside>

						<?php
					}
					?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
the_content();
wp_footer();
?>
