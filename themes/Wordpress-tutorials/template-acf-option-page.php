<?php
// Template Name: ACF Option Page
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>ACF Option Page</h1>
				</div>
				<div class="row justify-content-center">
					<div class="col-12">
						<div class="option-page">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>Installation and Activate plugin in Acf Options Page Admin.</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Add below code from function.php file and dashboard showing a 'theme settings' menu.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/option-page-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Two Section are same like this(homepage and product page inside zigzag section same). add below code for function.php file.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/option-page-imag2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Open the Custom Fields menu and add the field group and add multiple fields like this(title,description etc).</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/option-page-image3.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>Showing the section add this below code.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/option-page-image4.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:6 -> </h5>
										<p>Add dynamic code for the click theme settings option and click the zigzag menu and add multiple fields. like this(title,description,image).</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/option-page-image5.png">
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="maintitle">
					<h1>Example ACF Option Page</h1>
				</div>
				<div class="option-zigzag">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="option-zigzag-text">
								<h2><?php the_field( 'title', 'option' ); ?></h2>
								<p><?php the_field( 'description', 'option' ); ?></p>
								<a href="<?php the_field( 'zigzag_button_link', 'option' ); ?>"><?php the_field( 'zigzag_button_text', 'option' ); ?></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="option-zigzag-image">
								<img src="<?php the_field( 'zigzag-image', 'option' ); ?>">
							</div>
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
