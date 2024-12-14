<?php
// Template Name: Custom Fields
get_header();
?>
	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Custom Fields</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="custom-fields">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>Installation and Activate plugin.</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Create a Custom Fields and Add Field Groups.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/create-custom-field.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Add new field group and add title. If select a page or post etc and other setting.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-title-select-page.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>After create a fields group and add field like this(header title,header text,header logo etc). After select the page and publish.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-field-header.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>after add multiple field and this fields show a home page header by adding a php code for header.php file.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/the-field-code.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:6 -> </h5>
										<p>After adding the code to the php file. add the dynamic content for page.click the pages field and select the homepage. <br> after clicking the homepage a page like this appears below.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/dynamic-content.png">
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="maintitle">
					<h1>Example of Custom Fields</h1>
				</div>
				<div class="row">
					<!-- header start -->
						<header>
							<div class="demoheader">
									<div class="demoheader__inner">
										<?php
											$logoimg = get_header_image();
										?>
										<div class="demoheader__inner--logo">
											<a href="<?php echo site_url(); ?>"><img src="<?php echo $logoimg; ?>" alt="headerlogo"></a>
										</div>
										<div class="demoheader__inner--icon">
											<ul>
												<li><a href="#"><img src="<?php the_field( 'header_search_image' ); ?>"></a></li>
												<li><a href="#"><img src="<?php the_field( 'header_cart_image' ); ?>"></a></li>
												<li><a href="#"><img src="<?php the_field( 'header_user_image' ); ?>"></a></li>
												<li><a href="#"><img src="<?php the_field( 'header_bars_image' ); ?>"></a></li>
											</ul>
										</div>
									</div>
							</div>
						</header>
					<!-- header end -->
				</div>
			</div>
		</div>
	</section>



<?php
the_content();
wp_footer();
?>
