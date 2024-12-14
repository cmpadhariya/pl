<?php
/**
 * Template Name: Fix WPCS Errors.
 *
 * @package WordPress this page content in how to fix wpcs error steps.
 */

get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>How to Fix WPCS Errors</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="fix-wpcs-errors-steps">
							<ul>
								<li>
									<div class="row justify-content-center">
										<div class="col-lg-5 col-md-6 col-12">
											<div class="description">
												<h5>Error: -></h5>
												<p>Code should be escaped.</p>
											</div>
											<div class="description">
												<h5>Solution: -></h5>
												<p>Use esc_html, esc_attr, or esc_url functions.</p>
											</div>
											<div class="description">
												<h5>Example: -></h5>
												<p>echo esc_url( get_template_directory_uri() );</p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12">
											<div class="image">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/wpcs-errors-one-image.png">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row justify-content-center">
										<div class="col-lg-5 col-md-6 col-12">
											<div class="description">
												<h5>Error: -></h5>
												<p>Missing file doc comments.</p>
											</div>
											<div class="description">
												<h5>Solution: -></h5>
												<p>Add comments description for page.</p>
											</div>
											<div class="description">
												<h5>Example: -></h5>
												<p>/** <br>
													* Template Name: Homepage <br>
													* This Template display for site homepage.<br>
													*/
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12">
											<div class="image">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/wpcs-errors-two-image.png">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row justify-content-center">
										<div class="col-lg-5 col-md-6 col-12">
											<div class="description">
												<h5>Error: -></h5>
												<p>Missing @package tag in file comment.</p>
											</div>
											<div class="description">
												<h5>Solution: -></h5>
												<p>Add package tag to page doc comments inside.</p>
											</div>
											<div class="description">
												<h5>Example: -></h5>
												<p>/** <br>
													* The template for displaying all custom blog single post.<br>
													* <br>
													* @package Blog <br>
													*/
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12">
											<div class="image">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/wpcs-errors-three-image.png">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row justify-content-center">
										<div class="col-lg-5 col-md-6 col-12">
											<div class="description">
												<h5>Error: -></h5>
												<p>End of line character is invalid. expected "/n".</p>
											</div>
											<div class="description">
												<h5>Solution: -></h5>
												<p>Your vs code editor below taskbar click to "CRLF" option and change to "LF" option.</p>
											</div>
											<div class="description">
												<h5>Example: -></h5>
												<p> CRLF -> LF
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12">
											<div class="image">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/wpcs-errors-four-image.png">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row justify-content-center">
										<div class="col-lg-5 col-md-6 col-12">
											<div class="description">
												<h5>Error: -></h5>
												<p>You must use "/**" style comments for a file comment.</p>
											</div>
											<div class="description">
												<h5>Solution: -></h5>
												<p>All pages add comments in use this "/** */" symbol to add comments.</p>
											</div>
											<div class="description">
												<h5>Example: -></h5>
												<p>/** <br>
												* <br>
												*/ 
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12">
											<div class="image">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/wpcs-errors-five-image.png">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row justify-content-center">
										<div class="col-lg-5 col-md-6 col-12">
											<div class="description">
												<h5>Error: -></h5>
												<p>Overriding WordPress globals is prohibited.</p>
											</div>
											<div class="description">
												<h5>Solution: -></h5>
												<p>In this variable is WordPress global variable, this variable change name.</p>
											</div>
											<div class="description">
												<h5>Example: -></h5>
												<p> $paged -> $paging, $pages. $allpage
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12">
											<div class="image">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/wpcs-errors-six-image.png">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row justify-content-center">
										<div class="col-lg-5 col-md-6 col-12">
											<div class="description">
												<h5>Error: -></h5>
												<p>Inline comments must end in full-stops, exclamation marks, or question marks.</p>
											</div>
											<div class="description">
												<h5>Solution: -></h5>
												<p>This error single line comments end add sull-stop or exclamation marks.</p>
											</div>
											<div class="description">
												<h5>Example: -></h5>
												<p> // setup pagination.
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12">
											<div class="image">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/wpcs-errors-seven-image.png">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row justify-content-center">
										<div class="col-lg-5 col-md-6 col-12">
											<div class="description">
												<h5>Error: -></h5>
												<p>Missing doc comment for function theme_assets();</p>
											</div>
											<div class="description">
												<h5>Solution: -></h5>
												<p>function.php file all functions add top function related comment document.</p>
											</div>
											<div class="description">
												<h5>Example: -></h5>
												<p> /** custom theme menu. */ <br>
													function Customtheme_assets() {}
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12">
											<div class="image">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/wpcs-errors-eight-image.png">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row justify-content-center">
										<div class="col-lg-5 col-md-6 col-12">
											<div class="description">
												<h5>Error: -></h5>
												<p>Resource version not set in call to wp_enqueue_style().</p>
											</div>
											<div class="description">
												<h5>Solution: -></h5>
												<p>Add the wp_enqueue_style() and wp_enqueue_scripts() version.</p>
											</div>
											<div class="description">
												<h5>Example: -></h5>
												<p> wp_enqueue_style( 'Customtheme-style', get_stylesheet_uri(), array(), '4.6.1' );
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12">
											<div class="image">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/wpcs-errors-nine-image.png">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row justify-content-center">
										<div class="col-lg-5 col-md-6 col-12">
											<div class="description">
												<h5>Error: -></h5>
												<p>Doc comment for parameter "$form" missing.</p>
											</div>
											<div class="description">
												<h5>Solution: -></h5>
												<p>Add parameter to document comments.</p>
											</div>
											<div class="description">
												<h5>Example: -></h5>
												<p> /** <br>
													* @param object $form Description. <br>
													*/
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12">
											<div class="image">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/wpcs-errors-ten-image.png">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row justify-content-center">
										<div class="col-lg-5 col-md-6 col-12">
											<div class="description">
												<h5>Error: -></h5>
												<p>Filenames should be all lowercase with hyphens as word separators.</p>
											</div>
											<div class="description">
												<h5>Solution: -></h5>
												<p>Always give the template file name with lowercase and hyphen.</p>
											</div>
											<div class="description">
												<h5>Example: -></h5>
												<p> homepage.php, contact.php, about-us.php etc.
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12">
											<div class="image">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/wpcs-errors-elevan-image.png">
											</div>
										</div>
									</div>
								</li>
								<li>
									<div class="row justify-content-center">
										<div class="col-lg-5 col-md-6 col-12">
											<div class="description">
												<h5>Error: -></h5>
												<p>Stylesheets must be registered/enqueued via wp_enqueue_style</p>
											</div>
											<div class="description">
												<h5>Solution: -></h5>
												<p>Always give the style,script,slider etc link is functions.php file.</p>
											</div>
											<div class="description">
												<h5>Example: -></h5>
												<p> wp_enqueue_script( 'swiper-slider', get_template_directory_uri() . '/js/swiper-bundle.min.js', array( 'jquery' ), '1.0.2', true );
												</p>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-12">
											<div class="image">
												<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/image/wpcs-errors-twelw-image.png">
											</div>
										</div>
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
