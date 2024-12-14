<?php
// Template Name: How to Setup AMP in WordPress Site
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>How to Setup AMP in WordPress Site <br> (accelerated mobile pages) </h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="setup-amp">
                            <ul>
                                <li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>First you need to install amp plugin to setup amp in site.</p>
									</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/setup-amp-in-wordpress-site-image1.png">
								</li>
                                <li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Next after installing the plugin, click on the Settings tab in the WordPress dashboard under the option named "AMP".</p>
									</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/setup-amp-in-wordpress-site-image2.png">
								</li>
                                <li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Next you need to select the “Transitional” option in the “Template Mode” section of the Settings menu.</p>
									</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/setup-amp-in-wordpress-site-image3.png">
								</li>
                                <li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Next go to Advanced Settings->Supported Templates. In these settings you need to select a template (the pages in which you want to setup the amp).</p>
									</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/setup-amp-in-wordpress-site-image4.png">
								</li>
                                <li>
                                    <div class="description">
                                        <h5>Step:5 -> </h5>
                                        <p>Next If you want to change the settings related to another plugin of Site, the following option named "Plugin Suppression" can be changes.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/setup-amp-in-wordpress-site-image5.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:6 -> </h5>
                                        <p>Next you need to select the second option "Moderate" in the menu called "Sandboxing".</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/setup-amp-in-wordpress-site-image6.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:7 -> </h5>
                                        <p>Next you need to set the url of amp page. You can set any url structure from below option.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/setup-amp-in-wordpress-site-image7.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:8 -> </h5>
                                        <p>Next under the "Other" menu you need to select the main three options from the following options.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/setup-amp-in-wordpress-site-image8.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:9 -> </h5>
                                        <p>Next you need to scan the site by clicking on the "Rescan Site" button in the menu called "Site Scan".</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/setup-amp-in-wordpress-site-image9.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:10 -> </h5>
                                        <p>Last you will check the page in which the amp is set, so you will see the amp url structure on the page url.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/setup-amp-in-wordpress-site-image10.png">
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
