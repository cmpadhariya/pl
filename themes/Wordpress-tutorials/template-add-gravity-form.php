<?php
// Template Name: Add Gravity Form
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Add Gravity Form</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="add-gravity-form">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>Install and activate the gravity form plugins.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-gravity-form-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>open the forms fields and click the new forms.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-gravity-form-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>add multiple fields and add fields settings.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-gravity-form-image3.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>add multiple fields in one row to using a multiple gravity classes.like this <a href="https://www.gravityforms.com/blog/css-ready-classes/">Multiple Gravity Classes</a> </p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-gravity-form-image4.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>add form thank you message to click the settings and click the conformations options.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-gravity-form-image5.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-gravity-form-image6.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:6 -> </h5>
										<p>After that admin notification settings allow in click the settings and click notification options.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-gravity-form-image7.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-gravity-form-image8.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-gravity-form-image9.png">
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- <div class="maintitle">
					<h1>Example Of Gravity Form</h1>
				</div> -->
				<div class="row justify-content-center">
					<div class="col-lg-6 col-md-6 col-12">
						<div class="gravity-form-demo">

							<?php echo do_shortcode( '[gravityform id="1" title="true"]' ); ?>

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
