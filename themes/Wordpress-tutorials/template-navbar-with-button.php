<?php
// Template Name: Navbar With Button
get_header();
?>
   
	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Navbar With Button</h1>
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
								<div class="customnavbar__button">
									<a href="#">Contact</a>
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
