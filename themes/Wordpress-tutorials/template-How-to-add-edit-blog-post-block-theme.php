<?php
// Template Name: How to Add Edit Blog Post Block Theme
get_header();
?>

	<section>
		<div class="custom-section">
			<div class="container">
				<div class="maintitle">
					<h1>How to Add/Edit Blog Post Block Theme</h1>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="add-edit-blog-post">
							<h3>> Add Blog Post:</h3>
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>First we have registered a custom post type in the functions.php file for the blog post.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-edit-blog-post-block-theme-image1.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Next you can add a new blog post by clicking on the "Add New Blog" option in the blog post menu.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-edit-blog-post-block-theme-image2.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Next you will need to pass the title, content, short description, feature image etc. in the new blog post.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-edit-blog-post-block-theme-image3.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Next you have to select a template in New Blog Post, which you have created in your theme called "single.html" or "single-blog.html".</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-edit-blog-post-block-theme-image4.png">
								</li>
							</ul>
							<h3>> Edit Blog Post:</h3>
							<ul>
								<li>
									<div class="description">
										<h5>Step:1 -> </h5>
										<p>First you need to edit the post means how to add content in the post.</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:2 -> </h5>
										<p>Next go to Appearance->editor->templates->single. This is a blog-single template.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-edit-blog-post-block-theme-image5.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:3 -> </h5>
										<p>Now you can use Gutenberg's default block and custom block in this blog single template. Like post title, content, description etc.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-edit-blog-post-block-theme-image6.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:4 -> </h5>
										<p>Next, after you add content to the any blog post, update the post.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-edit-blog-post-block-theme-image7.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:5 -> </h5>
										<p>Next, to show the blog post in a single page you will need to add Gutenberg's default block named "post content" to the "single" or "single-blog" template in the Gutenberg editor.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-edit-blog-post-block-theme-image8.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:6 -> </h5>
										<p>Next you can use Gutenberg's default block to display feature image,post date, category etc.</p>
									</div>
									<img src="<?php echo get_template_directory_uri(); ?>/image/add-edit-blog-post-block-theme-image9.png">
								</li>
								<li>
									<div class="description">
										<h5>Step:7 -> </h5>
										<p>Next you can also add other items to display in the post. Like breadcrumbs, author, latest post etc. which you have to make custom.</p>
									</div>
								</li>
								<li>
									<div class="description">
										<h5>Step:8 -> </h5>
										<p>Finally when you view your post you will see perfect blog post title, content, image.</p>
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
?>
