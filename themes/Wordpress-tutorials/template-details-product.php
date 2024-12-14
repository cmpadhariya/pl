<?php
// Template Name: WooCommerce Details Product
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>WooCommerce Details Of Product</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="details-product">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>Add New Categories.Click on the Product fields and click the categories menu.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/woocommrece-detail-product-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>After that add categories title and click the button "add new category".</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/woocommerce-detail-product-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Add new product. Click the product fields and click the add new product.</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>After that add product title,description,short-description,product-image,product-gallery,add price,select category etc.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/woocommerce-detail-product-image3.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/woocommerce-detail-product-image4.png">
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
