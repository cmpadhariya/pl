<?php
// Template Name: Create WordPress Block Theme
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Create WordPress Custom Block Theme</h1>
				</div>
                <div class="row">
					<div class="col-12">
						<div class="block_theme-steps">
							<ul>
                                <li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>First of the create new wordpress theme.</p>
									</div>
								</li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>Add this file and folder like this: functions.php,index.php,style.scss,theme.json</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/create-block-theme-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>Next you need to add theme support to the functions.php file for the WordPress block theme.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/create-block-theme-image2.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:4 -> </h5>
                                        <p>Next you have to add settings in theme.json file like color pallets, content width etc.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/create-block-theme-image3.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:5 -> </h5>
                                        <p>After all these steps you will see an option called "Editor" in your WordPress dashboard.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/create-block-theme-image4.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:6 -> </h5>
                                        <p>In the option called Editor you will find the following options like Templates, Templates Part, Patterns etc.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/create-block-theme-image5.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:7 -> </h5>
                                        <p>Next you can edit and update the template in the option called Templates. <br>
                                            You can edit and update the header and footer in the option called Templates Parts.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/create-block-theme-image6.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/create-block-theme-image7.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:8 -> </h5>
                                        <p>With the help of all the above steps we can create WordPress custom block theme and work in it.</p>
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
