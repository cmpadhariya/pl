<?php
// Template Name: Social icon navbar
get_header();
?>
   
	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Social Icon Navbar</h1>
				</div>
				<div class="custom-section__inner">
					<div class="customnavbar">
								<?php
									$logoimg = get_header_image();
								?>
								<div class="customnavbar__logo">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logoimg; ?>" alt="header-logo"></a>
								</div>
							
								<div class="customnavbar__menu">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'wordpresstutorials-header-menu',
										)
									);
									?>
								</div>
								<div class="customnavbar__icon">
									<ul>
										<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
										<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
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
