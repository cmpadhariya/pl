<?php
/** Template Name: Custom Widget Elementor
 *
 * @package widget
 */

get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Elementor Custom Widgets:</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="custom-elementor-widget">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>Installation and Activate elementor plugin.</p>
									</div>
								</li>
                                <li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Create a folder inside theme folder and store the two widgets file ('like this custom-banner.php') inside the themes file.</p>
									</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/custom-elementor-widget-image1.png">
								</li>
                                <li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>After create a file paste the below code in my-zigzag.php file for register simple widget.</p>
									</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/custom-elementor-widget-image2.png">
								</li>
                                <li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Next paste the below code in second file for name "zigzag.php" file for add widget controls.</p>
									</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/custom-elementor-widget-image3.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/custom-elementor-widget-image4.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/custom-elementor-widget-image5.png">
								</li>
                                <li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>Next is display your custom widget in widget area add below code in functions.php file.</p>
									</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/custom-elementor-widget-image6.png">
                                </li>
                                <li>
									<div class="description">
										<h5>Step:6 -> </h5>
										<p>Next add dynamic content, open elementor page click "Edit with Elementor" button to display your custom widget and click to drag and drop your widget.</p>
									</div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/custom-elementor-widget-image7.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/custom-elementor-widget-image8.png">
                                </li>
							</ul>
						</div>
					</div>
				</div>
                <div class="maintitle">
					<h1>Example of Custom Elementor Widgets</h1>
				</div>
			</div>
		</div>
	</section>
<?php
the_content();
wp_footer();

