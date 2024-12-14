<?php
/**
 * Template Name: Create Child Theme.
 *
 * @package WordPress this page content in how to create child theme documentation and code.
 */

get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Create Child Theme</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="child-theme-steps">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>First of the open file manager, click the wp-content and then click themes folder.</p>
									</div>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/create-child-theme-image1.png">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/create-child-theme-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Next the theme folder inside create a new folder and add name "-child".</p>
									</div>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/create-child-theme-image3.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Next the Create a stylesheet and index file for your child theme.For Example style.css,index.php,homepage.php etc.</p>
									</div>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/create-child-theme-image4.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Next open your child-theme style.css file, you can include other information, including a description, author name, version, and tags.</p>
									</div>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/create-child-theme-image5.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>Next create another file in your child theme’s directory. Name it “functions.php” and add the following code:</p>
									</div>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/create-child-theme-image6.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:6 -> </h5>
										<p>Next Display your child theme Go To Appearance -> Themes to display your child theme.</p>
									</div>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/create-child-theme-image7.png">
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
