<?php
// Template Name: Custom Testimonials
get_header();
?>

	<section?>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>Custom Testimonials</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="custom-testimonials">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>Added the below image code in function.php file.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/code-testimonials.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>After added code open the testimonials fields and click the add new.</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Add title and description.Add featured image and short description.Client position will showing custom fields.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/testimonials-one.png">
									<br>
									<br>
									<img src="<?php echo get_template_directory_uri(); ?>/image/testimonials-two.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Add client position will click custom fields menu and click new field. and add new field.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-custom-field-testimonials.png">
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="maintitle">
					<h1>Example of Custom Testimonials</h1>
				</div>
				<div class="testimonials-demo">
						<div class="row">
							<?php
							$paged     = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
							$the_query = new WP_Query(
								array(
									'post_type'      => 'testimonial',
									'paged'          => $paged,
									'orderby'        => 'ID',
									'order'          => 'asc',
									'posts_per_page' => 9,
								)
							);
							while ( $the_query->have_posts() ) :
								$the_query->the_post();
								?>
							<div class="col-lg-6 col-md-6 col-12">
								<div class="testimonials-demo__posts">
									<a href="#"><img src="<?php echo the_post_thumbnail_url(); ?>"></a>
									<p><?php echo get_the_content(); ?></p>
									<a href="#"><h4><?php echo get_the_title(); ?></h4></a>
									<span><?php the_field( 'client_position' ); ?></span>
								</div>
							</div>
							<?php endwhile; ?>
						</div>
				</div>
			</div>
		</div>
	</section>

<?php
// the_content();
wp_footer();
?>
