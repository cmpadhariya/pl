<?php
// Template Name: Create WordPress Custom Dynamic Block
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Create WordPress Custom Dynamic Block</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="custom-dynamic-block">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>First npm, npx and node should be downloaded and installed in your system. Next system environment variable These three things should be setup.</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Next you need to store your custom dynamic blocks in a folder named blocks inside a folder named inc in your theme.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-dynamic-block-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Next you can create a dynamic block in your file using the following code.With the help of "npm start" code we can start the development server of the dynamic block and make changes in the dynamic block.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-dynamic-block-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Next After your dynamic block is created the file structure of the block will look something like this.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-dynamic-block-image3.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>Next we have to add the block related settings in the block.json file. Like block title, description, icon, category and attributes used in the block we have to add in this file.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-dynamic-block-image4.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:6 -> </h5>
										<p>Next we have to code the editor side in the edit.js file.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-dynamic-block-image5.png">
								</li>
								<li>
									<div class="description">
										<h5>Step: 7 -> </h5>
										<p>Next to design the editor side, we have to add the editor side design code in the editor.scss file.(If necessary, design in editor.js file only, then design in style.scss file only)</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-dynamic-block-image6.png">
								</li>
								<li>
									<div class="description">
										<h5>Step: 8 -> </h5>
										<p>Next we need to code the frontend side of the dynamic block in the php file.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-dynamic-block-image7.png">
								</li>
								<li>
									<div class="description">
										<h5>Step: 9 -> </h5>
										<p>Next, in the php file of our dynamic block, the main function has to be rendered into another function to make the block show in the frontend side.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-dynamic-block-image8.png">
								</li>
								<li>
									<div class="description">
										<h5>Step: 10 -> </h5>
										<p>Next to design the frontend side, we have to add the frontend side design code in the style.scss file.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-dynamic-block-image9.png">
								</li>
								<li>
									<div class="description">
										<h5>Step: 10 -> </h5>
										<p>Next, to add our dynamic block to the editor, we need to include the dynamic block in the functions.php file.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-dynamic-block-image10.png">
								</li>
								<li>
									<div class="description">
										<h5>Step: 11 -> </h5>
										<p>Next you can add your dynamic block in the editor side in WordPress and in any pages you want.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-dynamic-block-image11.png">
								</li>
								<li>
									<div class="description">
										<h5>Step: 12 -> </h5>
										<p>Last you can add, update the settings of the dynamic block after adding the block.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-wordpress-dynamic-block-image12.png">
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
