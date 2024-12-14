<?php
/**
 * Template Name: Set up WPCS.
 *
 * @package WordPress this page content in how to set up in wpcs in local system documentation and code.
 */

get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>How to Setup WPCS in Local System</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="setup-wpcs-steps">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>First of the download composer in chrome browser.</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Second step is install the php codesniffer. open command prompt and add this code to install codesniffer.</p>
									</div>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/setup-wpcs-step-two-image.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Third step is clone the wpcs repository or folder. Add this code to clone repository.</p>
									</div>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/setup-wpcs-step-three-image.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Four step is go to C:->Users -> Qrolic -> AppData -> Roaming -> Composer -> Vender -> bin and copy this path. After that this path to add in your computer system property.Go to System property -> Advance tab -> Click Environment Variable -> Click Path -> Click Edit Button -> Click New Button -> Paste the path and Click Ok Button.</p>
									</div>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/setup-wpcs-step-four-image.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>Next is install path and configuration. Add this line to install phpcs path.</p>
									</div>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/setup-wpcs-step-five-image.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:6 -> </h5>
										<p>Next step is open vs code and install the two extension. this name is phpcs and phpcbf.</p>
									</div>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/setup-wpcs-step-six-image.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:7 -> </h5>
										<p>Next step is open phpcbf extension and copy default setting and open vscode settings.json file and paste this settings.</p>
									</div>
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/setup-wpcs-step-seven-image.png">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/setup-wpcs-step-eight-image.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:8 -> </h5>
										<p>Next step is your settings.json file add multiple settings and path from wpcs file. Path url(C:\Users\Qrolic\wpcs\vendor\bin).</p>
									</div> 
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/setup-wpcs-step-nine-image.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:9 -> </h5>
										<p>Last step is test any php file and save this file to display wpcs all problem.</p>
									</div> 
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/setup-wpcs-step-ten-image.png">
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

