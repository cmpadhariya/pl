<?php
// Template Name: How to Create Footer in Block Theme
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>How to Create Footer in Block Theme</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="create-footer">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>First you have to create a folder named parts in the theme folder and inside this folder you need to create a file named "footer.html".</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-footer-in-block-theme-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Next go to Appearance->Editor->Template parts you will see footer template.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-header-in-block-theme-image2.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-footer-in-block-theme-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Next you can customize the footer as you want in this footer template.(Like you can take Gutenberg's default block for logo and default navigation block for menu and other default blocks.)</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-footer-in-block-theme-image3.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Next you need to copy the code of your customized footer.Go to three dots->code editor. From here you can copy the footer code.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-footer-in-block-theme-image4.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-footer-in-block-theme-image5.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>After copying the footer code this code needs to be pasted in the "footer.html" file inside the parts folder in the theme file and save the file. <br>
										<strong>Note:</strong> The purpose of adding this code to footer.html is so that when any clears the customization on the editor side, our footer doesn't stop showing.
										</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-footer-in-block-theme-image6.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:6 -> </h5>
										<p>You can now make changes to the footer template parts and check them on the frontend.</p>
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
