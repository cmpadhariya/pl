<?php
//Template Name: Simple Breadcrumbs
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Simple Breadcrumbs</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-steps">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>first of the create simple breadcrumbs open your function.php file and below image to explain breadcrumbs.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/simple-breadcrumbs-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>Next display the breadcrumb open your file and add the breadcrumbs function.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/simple-breadcrumbs-image2.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="maintitle">
                    <h1>Example Simple Breadcrumbs</h1>
                </div>
                <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
            </div>
        </div>
    </section>

<?php
the_content();
wp_footer();
?>