<?php
/**
 * Template Name: HomePage
 *
 * @package WordPress Home template page.
 */

get_header();
?>
	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Qrolic Multiple Custom Section</h1>
				</div>
				<div class="custom-section__inner">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="main">
								<div class="main-box">
										<h3>Navbar</h3>
										<div class="main-box__inner">
											<div class="link">
												<ul>
													<li>
														<div class="link-top">
															<p>Simple navbar:</p>
															<a href="<?php echo get_permalink( get_page_by_path( 'simple-navbar' ) ); ?>">Simple navbar</a>
															<button type="button" class="view">View</button>
														</div>
														<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/simple-navbar.png"></span>
													</li>

													<li>
														<div class="link-top">
															<p>Navbar With Social Icon:</p>
															<a href="<?php echo get_permalink( get_page_by_path( 'social-icon-navbar' ) ); ?>">navbar with social icon</a>
															<button type="button" class="view">View</button>
														</div>
														<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/Navbar-with-socialicon.png"></span>
													</li>

													<li>
														<div class="link-top">
															<p>Navbar With Button:</p>
															<a href="<?php echo get_permalink( get_page_by_path( 'navbar-with-button' ) ); ?>">navbar with button</a>
															<button type="button" class="view">View</button>
														</div>
														<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/navbar-with-button.png"></span>
													</li>
												</ul>
											</div>
										</div>
								</div>
								<div class="main-box">
									<h3>Tabs</h3>
									<div class="main-box__inner">
										<div class="link">
											<ul>
												<li>
													<div class="link-top">
														<p>Simple Tabs:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'simple-tabs' ) ); ?>">simple tabs</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/simple-tabs.png"></span>
												</li>

												<li>
													<div class="link-top">
														<p>Vertical Tabs:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'vertical-tabs' ) ); ?>">vertical tabs</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/vertical-tabs.png"></span>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="main-box">
									<h3>Mega Menu</h3>
									<div class="main-box__inner">
										<div class="link">
											<ul>
												<li>
													<div class="link-top">
														<p>Simple Mega Menu:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'drop-down-mega-menu' ) ); ?>">simple mega menu</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/demo-megamenu.png"></span>
												</li>

												<li>
													<div class="link-top">
														<p>Custom Mega Menu:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'custom-megamenu' ) ); ?>">custom mega menu</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/demo-custom-mega-menu.png"></span>
												</li>

												<li>
													<div class="link-top">
														<p>Create Mega Menu With plugin:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'megamenu-with-plugin' ) ); ?>">create mega menu with plugin</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/megamenu-plugin-demo.png"></span>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="main-box">
									<h3>Accordion</h3>
									<div class="main-box__inner">
										<div class="link">
											<ul>
												<li>
													<div class="link-top">
														<p>Simple Arrow Sign Accordion:</p> 
														<a href="<?php echo get_permalink( get_page_by_path( 'accordion-arrow-sign' ) ); ?>">simple arrow sing accordion</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/simple-accordion.png"></span>
												</li>

												<li>
													<div class="link-top">
														<p>Plus/Minus Sign Accordion:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'accordion-plus-minus' ) ); ?>">plus/minus sign accordion</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/accordion-plus-minus.png"></span>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="main-box">
									<h3>Modal/Popup</h3>
									<div class="main-box__inner">
										<div class="link">
											<ul>
												<li>
													<div class="link-top">
														<p>Simple Modal Box Popup:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'simple-modal-popup' ) ); ?>">simple modal box popup</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/simple-popup.png"></span>
												</li>

											</ul>
										</div>
									</div>
								</div>
								<div class="main-box">
									<h3>Slider</h3>
									<div class="main-box__inner">
										<div class="link">
											<ul>
												<li>
													<div class="link-top">
														<p>Simple Slider Using Swiper:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'simple-swiper-slider' ) ); ?>">simple slider using swiper</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/example-simple-swiper.png"></span>
												</li>

												<li>
													<div class="link-top">
														<p>Simple Slider Using Slick:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'simple-slick-slider' ) ); ?>">simple slider using slick</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/example-slick-slider.png"></span>
												</li>

												<li>
													<div class="link-top">
														<p>Slider Different Style:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'slider-different-style' ) ); ?>">slider different style</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/slider-different-image3.png"></span>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="main-box">
									<h3>WooCommerce Payments</h3>
									<div class="main-box__inner">
										<div class="link">
											<ul>
												<li>
													<div class="link-top">
														<p>Payment Gateway Stripe</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'payment-paypal' ) ); ?>">payment gateway stripe</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/payment-gateway-image4.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Payment Gateway Paytm</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'paytm-payment' ) ); ?>">payment gateway paytm</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/paytm-payment-image3.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Payment Gateway Razorpay</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'razorpay-payment-gateway' ) ); ?>">payment gateway razorpay</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/razorpay-payment-image2.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Payment Gateway BrainTree</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'braintree-payment-gateway' ) ); ?>">payment gateway braintree</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/braintree-payment-image13.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Payment Gateway PayUMoney</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'payumoney-payment' ) ); ?>">payment gateway payumoney</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/payumoney-image6.png"></span>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="main-box">
									<h3>WordPress Coding Standard</h3>
									<div class="main-box__inner">
										<div class="link">
											<ul>
												<li>
													<div class="link-top">
														<p>How to setup WPCS in local system</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'setup-wpcs-local-system' ) ); ?>">how to setup WPCS in local system</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/setup-wpcs-main-view-image.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>How to Fix WPCS Errors</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'how-to-fix-wpcs-errors' ) ); ?>">how to fix WPCS errors</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/wpcs-errors-main-image.png"></span>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="main-box">
									<h3>WordPress Block Theme</h3>
									<div class="main-box__inner">
										<div class="link">
											<ul>
												<li>
													<div class="link-top">
														<p>How to Create WordPress custom block theme</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'create-wordpress-block-theme' ) ); ?>">How to create WordPress custom block theme</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/How-to-Create-a-WordPress-Block-Theme.webp"></span>
												</li>
												<li>
													<div class="link-top">
														<p>How to Create custom WordPress block</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'create-wordpress-custom-block' ) ); ?>">How to Create custom WordPress block</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/how-to-create-custom-wordpress-block.webp"></span>
												</li>
												<li>
													<div class="link-top">
														<p>How to Create WordPress dynamic block</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'create-wordpress-custom-dynamic-block' ) ); ?>">How to Create WordPress dynamic block</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/how-to-create-wordpress-dynamic-block.webp"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Create WordPress Custom Block Patterns</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'create-wordpress-custom-block-patterns' ) ); ?>">Create WordPress Custom Block Patterns</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/how-to-create-wordpress-custom-block-patterns.webp"></span>
												</li>
												<li>
													<div class="link-top">
														<p>How to edit pages in block theme</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'how-to-edit-pages-in-block-theme' ) ); ?>">How to edit pages in block theme</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/how-to-edit-pages-in-block-theme.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>How to edit templates in block theme</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'how-to-edit-templates-in-block-theme' ) ); ?>">How to edit templates in block theme</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/how-to-edit-templates-in-block-theme.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>How to create header in block theme</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'how-to-create-header-in-block-theme' ) ); ?>">How to create header in block theme</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/create-header-in-block-theme.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>How to create footer in block theme</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'how-to-create-footer-in-block-theme' ) ); ?>">How to create footer in block theme</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/create-footer-in-block-theme.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>How to Add/Edit Blog Post block theme</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'how-to-add-edit-blog-post-block-theme' ) ); ?>">How to add/edit blog post block theme</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/add-edit-blog-post-block-theme.png"></span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-12">
							<div class="main">
								<div class="main-box">
									<h3>BreadCrumbs</h3>
									<div class="main-box__inner">
										<div class="link">
											<ul>
												<li>
													<div class="link-top">
														<p>Simple Breadcrumbs:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'simple-breadcrumbs' ) ); ?>">simple breadcrumbs</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/simple-breadcrumbs.png"></span>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="main-box">
									<h3>WordPress Plugins</h3>
									<div class="main-box__inner">
										<div class="link">
											<ul>
												<li>
													<div class="link-top">
														<p>Custom Fields:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'custom-fields' ) ); ?>">custom fields</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/custom-field-main-image.png"></span>
												</li>

												<li>
													<div class="link-top">
														<p>ACF Options Page:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'acf-option-page' ) ); ?>">acf option page</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/example-zigzag-image.png"></span>
												</li>

												<li>
													<div class="link-top">
														<p>Create Page With Elementor Pro Plugins:  </p>
														<a href="<?php echo get_permalink( get_page_by_path( 'create-page-with-elementor' ) ); ?>">create page elementor plugin</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/page-elementor-image8.png"></span>
												</li>

												<li>
													<div class="link-top">
														<p>Work With Divi Theme and Page Builder:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'divi-theme-page-builder' ) ); ?>">Divi theme and page builder</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/divi-theme-image5.png"></span>
												</li>

												<li>
													<div class="link-top">
														<p>How To Add Contact Form:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'add-contact-form' ) ); ?>">how to add contact form</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/add-contact-form-imagemain.png"></span>
												</li>

												<li>
													<div class="link-top">
														<p>How To Add Gravity Form:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'add-gravity-form' ) ); ?>">how to add gravity form</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/add-gravity-form-main.png"></span>
												</li>

												<li>
													<div class="link-top">
														<p>Create Newsletter:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'create-newsletter' ) ); ?>">create newsletter</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-image7.png"></span>
												</li>

												<li>
													<div class="link-top">
														<p>Newsletter SendBlue Plugin:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'newsletter-sendblue-plugin' ) ); ?>">newsletter sendblue plugin</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-sendblue-image12.png"></span>
												</li>

												<li>
													<div class="link-top">
														<p>How to setup AMP in WordPress site:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'how-to-setup-amp-in-wordpress-site' ) ); ?>">How to setup AMP in WordPress site</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/wordpress-plugins-image1.png"></span>
												</li>

												<li>
													<div class="link-top">
														<p>WordPress Plugin:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'wordpress-plugins' ) ); ?>">WordPress plugin</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/wordpress-plugins-image1.png"></span>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="main-box">
									<h3>Custom Sections</h3>
									<div class="main-box__inner">
										<div class="link">
											<ul>
												<li>
													<div class="link-top">
														<p>Create a Custom Meta Fields:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'create-custom-meta-fields' ) ); ?>">custom meta fields</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/add-custom-meta-fields-image5.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Create a Custom Posts:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'custom-posts' ) ); ?>">custom posts</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/create-custom-posts.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Create a Custom Testimonials:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'custom-testimonials' ) ); ?>">custom testimonials</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/example-testimonials.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Create a Custom Element <br>for Visual Composer:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'custom-elements' ) ); ?>">custom element</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/example-banner.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Create a Custom Widget <br>for Elementor:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'custom-widget-elementor' ) ); ?>">custom elementor widget</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/custom-elementor-widget-image9.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Create a Page Template:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'create-page-template' ) ); ?>">create a page template</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/page-template-image3.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Create a Custom Posts Type:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'create-custom-post-type' ) ); ?>">create custom posts type</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/custom-post-type-image2.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Edit Website From wp_admin:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'edit-website-wp_admin' ) ); ?>">edit website from wp_admin</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/edit-theme-editer-image2.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>How to make WordPress site live/or <br> make the local changes live.</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'how-to-wordpress-site-live' ) ); ?>">WordPress site live</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/wordpress-live-site-image1.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Google Map Integration</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'google-map-integration' ) ); ?>">google map integration</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/google-map-image4.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>How to add Google Analytics</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'google-analytics' ) ); ?>">add google analytics</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/google-analytics-image2.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>How to add Facebook Pixels</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'facebook-pixels' ) ); ?>">add facebook pixels</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/facebook-pixel-image7.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>How to add Google AdSense</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'google-advertise' ) ); ?>">add Google AdSense</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/google-adsense-image4.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Create Custom Theme</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'create-custom-theme' ) ); ?>">create custom theme</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/custom-theme-image10.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Create Widget:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'create-widget' ) ); ?>">create widget</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/create-widget-image5.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Create Child Theme:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'create-child-theme' ) ); ?>">create child theme</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/create-child-theme-image8.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>How To Import/Export:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'how-to-import-export' ) ); ?>">how to import/export</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/import-export-image8.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>How to Make eCommerce Site:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'how-to-make-ecommerce-site' ) ); ?>">eCommerce site</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/ecommerce-site-image10.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>How to Make Normal Site:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'how-to-make-normal-site' ) ); ?>">normal site</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/normal-site-image12.png"></span>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="main-box">
									<h3>WooCommerce Plugins</h3>
									<div class="main-box__inner">
										<div class="link">
											<ul>
												<li>
													<div class="link-top">
														<p>WooCommerce Basic:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'woocommerce-basic' ) ); ?>">woocommerce basic</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/woocommerce-basic-image4.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>WooCommerce Details Of Product:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'woocommerce-details-product' ) ); ?>">woocommerce details product</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/woocommerce-detail-product-image3.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>How to Edit with Product Template:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'edit-product-template' ) ); ?>">edit product template</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/edit-product-template-image4.png"></span>
												</li>
												<li>
													<div class="link-top">
														<p>Resources for the WooCommerce:</p>
														<a href="<?php echo get_permalink( get_page_by_path( 'woocommerce-resources' ) ); ?>">woocommerce resources</a>
														<button type="button" class="view">View</button>
													</div>
													<span class="hide"><img src="<?php echo get_template_directory_uri(); ?>/image/woocommerce-resources-main-image.png"></span>
												</li>
											</ul>
										</div>
									</div>
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
