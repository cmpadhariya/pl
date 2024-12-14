<?php
// Template Name: Simple Navbar
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Simple Navbar</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="custom-navbar-steps">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>first of the open function.php file and register the menu items.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/simple-navbar-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Next the display your menu in multiple file to add this code for display menu.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/simple-navbar-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Next the Add menu items for dynamic in WordPress dashboard. and click Appearance -> Menus.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/simple-navbar-image3.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>After that add Menu name and select the your menu name.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/simple-navbar-image4.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>Next the add menu items.click the "Custom Links" option and add menuitem link and name.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/simple-navbar-image5.png">
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="maintitle">
					<h1>Example Simple Navbar</h1>
				</div>
				<div class="custom-section__inner">
					<div class="custom-navbar">
								<?php
									$logoimg = get_header_image();
								?>
								<div class="custom-navbar__logo">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logoimg; ?>" alt="header-logo"></a>
								</div>
							
								<div class="custom-navbar__menu">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'wordpresstutorials-header-menu',
										)
									);
									?>
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
