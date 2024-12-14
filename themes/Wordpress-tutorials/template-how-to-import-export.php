<?php
// Template Name: How To Import-Export
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>How To Import/Export</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="import-export-steps">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>First of the Export multiple items to WordPress.Go To WordPress dashboard and click Tools -> Export option.select items and download.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/import-export-image1.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/import-export-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Next import the items to WordPress.Go To WordPress dashboard and click Tools -> Import option.install "Run Importer" plugin,Choose file.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/import-export-image3.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/import-export-image4.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>After the Add user name and select the user,attachment file checkbox select and click "submit" button.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/import-export-image5.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Next Export/Import Custom fields.Go To WordPress dashboard click Custom Fields -> Tools.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/import-export-image6.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>Next select fields group and Click "Export File" button.Import file to Choose file and Click "Import File" button.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/import-export-image7.png">
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
