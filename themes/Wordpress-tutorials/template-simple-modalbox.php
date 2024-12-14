<?php
// Template Name: Simple ModalBox
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Simple ModalBox/Popup</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="modalbox-steps">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>first of the create simple modal-box popup open your modal-box file and below image to explain modal-box.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/simple-modal-box-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Next activate modal-box popup in open your js file and add the code.Below image to explain code.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/simple-modal-box-image2.png">
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="maintitle">
					<h1>Example Simple ModalBox/Popup</h1>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-10 col-md-12 col-12">
						<div class="newsletter-popup">
							<h4>Newsletter Pop-up</h4>
							<p>This is the main content. To display "Newsletter Popup" lightbox click the button below or this link here.</p>
							<div class="view">
								<a href="#" onclick="openpop()">View Popup</a>
							</div>
						</div>
						<div class="hide-popup" id="light">
							<h3>Newsletter Popup Title</h3>
							<p>Enter your email address below and press continue for instant access!</p>
							<a href="#" class="close-icon" onclick="closepop()"><i class="fa-solid fa-xmark"></i></a>
							<form accept-charset="UTF-8" action="#" method="post" target="_blank">
								<div>
									<input name="utf8" type="hidden" value="✓" />
								</div>
								<div class="field required">
									<input id="signup_email" name="email" type="text" data-required-field="This field is required" placeholder="Enter your email address" />
								</div>
								<div class="field">
									<input type="submit" class="submit" value="Send Mail " id="webform_submit_button" data-default-text="Send Mail " data-submitting-text="Sending..." data-invalid-text="↑ You forgot some required fields" data-choose-list="↑ Choose a list"
										data-thanks="Thank you!">
									</input>
								</div>
							</form>
						</div>
						<div id="fade" class="black_overlay"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php
the_content();
wp_footer();
?>
