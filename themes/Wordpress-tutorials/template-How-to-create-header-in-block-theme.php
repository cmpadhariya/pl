<?php
// Template Name: How to Create Header in Block Theme
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>How to Create Header in Block Theme</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="create-header">
                            <ul>
                                <li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>First you have to create a folder named parts in the theme folder and inside this folder you need to create a file named "header.html".</p>
									</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/create-header-in-block-theme-image1.png">
								</li>
                                <li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Next go to Appearance->Editor->Template parts you will see header template.</p>
									</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/create-header-in-block-theme-image2.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/create-header-in-block-theme-image3.png">
								</li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>Next you can customize the header as you want in this header template.(Like you can take Gutenberg's default block for logo and default navigation block for menu.)</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/create-header-in-block-theme-image4.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:4 -> </h5>
                                        <p>Next you need to copy the code of your customized header.Go to three dots->code editor. From here you can copy the header code.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/create-header-in-block-theme-image5.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/create-header-in-block-theme-image6.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:5 -> </h5>
                                        <p>After copying the header code this code needs to be pasted in the "header.html" file inside the parts folder in the theme file and save the file. <br>
                                        <strong>Note:</strong> The purpose of adding this code to header.html is so that when any clears the customization on the editor side, our header doesn't stop showing.
                                        </p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/create-header-in-block-theme-image7.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:6 -> </h5>
                                        <p>You can now make changes to the header template parts and check them on the frontend.</p>
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
