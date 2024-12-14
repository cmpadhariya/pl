<?php
// Template Name: Create WordPress Custom Block Patterns
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Create WordPress Custom Block Patterns</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="custom-block-patterns">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>First you need to register a pattern category to create a custom block pattern.</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Next you need to create a file called "pattens.php" in a folder called inc.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-custom-block-patterns-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Next you need to register the patterns category in a file called "patterns.php".</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-custom-block-patterns-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Next you need to create a folder called "patterns" in the root folder of the theme and inside this folder we need to store all our custom block patterns.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-custom-block-patterns-image3.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>Next you need to create a pattern using the default Gutenberg block or a custom block you create in the WordPress editor side.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-custom-block-patterns-image4.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:6 -> </h5>
										<p>Next we need to take the code of this pattern after creating it in the simple patterns editor side. You will find this code from the option called "Code Editor" in this pattern page.</p>	
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-custom-block-patterns-image5.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-custom-block-patterns-image6.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:7 -> </h5>
										<p>Next, after copying the code of your pattern as mentioned in the above step, this code has to be pasted in a custom pattern file in the folder named "Pattern" in the part named Content in the function named Pattern Register.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-custom-block-patterns-image7.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:8 -> </h5>
										<p>Next you need to import your custom pattern into the functions.php file.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-custom-block-patterns-image8.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:9 -> </h5>
										<p>Next you can add your custom patterns in WordPress editor side templates or pages.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-custom-block-patterns-image9.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-custom-block-patterns-image10.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:10 -> </h5>
										<p>Finally, you can use the custom pattern you created anywhere in the template or pages.</p>
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
