<?php
// Template Name: Simple Accordion
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Simple Accordion</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="accordion-steps">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>first of the create arrow sign accordion open your add accordion file and below image to explain arrow sign accordion.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/arrow-accordion-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Next activate accordion in open your css file and add the code.Below image to explain code.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/arrow-accordion-image2.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/arrow-accordion-image3.png">
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-lg-8 col-md-12 col-12">
						<div class="accordion">
							<div class="accordion-box">
								<input type="checkbox" id="chck1">
								<label class="label" for="chck1">Item 1</label>
								<div class="content">
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
								</div>
							</div>
							<div class="accordion-box">
								<input type="checkbox" id="chck2">
								<label class="label" for="chck2">Item 2</label>
								<div class="content">
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
								</div>
							</div>
							<div class="accordion-box">
								<input type="checkbox" id="chck3">
								<label class="label" for="chck3">Item 3</label>
								<div class="content">
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
								</div>
							</div>
							<div class="accordion-box">
								<input type="checkbox" id="chck4">
								<label class="label" for="chck4">Item 4</label>
								<div class="content">
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
								</div>
							</div>
							<div class="accordion-box">
								<input type="checkbox" id="chck5">
								<label class="label" for="chck5">Item 5</label>
								<div class="content">
									Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum, reiciendis!
								</div>
							</div>
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
