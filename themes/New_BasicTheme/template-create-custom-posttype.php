<?php
//Template Name: Create Custom Posts type
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Create A Custom Posts Type</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="custom-posts-type">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Open the text editor and click the function.php file.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>After the add below code from your function.php file.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/custom-post-type-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Add Custom Fields in Custom Posts Type -> </h5>
                                        <p></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Open the dashboard and click the custom fields.and add new group fields.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/add-custom-fields-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>add the group fields title and add fields. and select the post type and post.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/add-custom-fields-image2.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>After the showing this fields in your new create post from like this(news) posts.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/add-custom-fields-image3.png">
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