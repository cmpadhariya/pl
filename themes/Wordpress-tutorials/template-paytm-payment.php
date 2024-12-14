<?php
// Template Name: Paytm Payment
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Paytm Payment Gateway</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="paytm-payment">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>Install and activate WooCommerce Paytm Payment Gateway plugin.</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>After install plugin create account for paytm.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/paytm-payment-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>After create paytm account display the below dashboard.Activate Account and generate the api keys.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/paytm0payment-image2.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/paytm-payment-image3.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Click the WooCommerce -> Settings -> Payment. Select Paytm payment method.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/paytm-payment-image4.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>After that add details.Description,production MID,Secret key,Enable webhook,Enable bank offer,Enable-emi,Enable-logo,paytm enable/disable etc.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/paytm-payment-image5.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/paytm-payment-image6.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/paytm-payment-image7.png">
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
