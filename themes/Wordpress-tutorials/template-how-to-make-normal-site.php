<?php
// Template Name: How To Make Normal Site
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>How To Make Normal Site</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="normal-site-steps">
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>Score the perfect domain name.You can buy a domain name from sites like "NameCheap" below image.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/ecommerce-site-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Sign up to a hosting provider.Like this Bluehost.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/ecommerce-site-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Install WordPress.Manually downloading WordPress, then uploading it to your hosting account.Create database <br> open "phpmyadmin" url and create database.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/ecommerce-site-image3.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/ecommerce-site-image4.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Pick a theme / design for your website.Go to Appearance → Themes from your WordPress dashboard and then click on “Add New.”</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/normal-site-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>Get plugins to extend your website’s abilities.Go To Plugins -> Add New to Choose plugin,install and activate.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/normal-site-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:6 -> </h5>
										<p>Next Create a Multiple page your site.For Example: Homepage,About,Contact,Blog,Privacy Policy,Portfolio,FAQs etc.</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:7 -> </h5>
										<p>Create basic pages.Go To Pages → Add New. Add title,description,permalink,select page etc.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/normal-site-image3.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/normal-site-image4.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:8 -> </h5>
										<p>Consider starting a blog.Create a Blog.Go To Posts -> Add New.add title,description,select category,add feature image etc.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/normal-site-image5.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/normal-site-image6.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:9 -> </h5>
										<p>To make your posts easily accessible Go To Pages -> Add New and  Call it “BLOG” – just to make things clear. <br>
											Next Go To Settings -> Reading and select your newly created Blog page as the “Posts page” like so.
										</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/normal-site-image7.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/normal-site-image8.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:10 -> </h5>
										<p>Adjust your site navigation.Set Menu Items Go To Appearance -> Menus.Add Custom Menu items.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/normal-site-image9.png">
									<img src="<?php echo get_template_directory_uri(); ?>/image/normal-site-image10.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:11 -> </h5>
										<p>Next Create a Widget.In simple terms, a widget is a small block of content that can be displayed in various places around <br> the website.go to Appearance → Widgets.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/normal-site-image11.png">
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
