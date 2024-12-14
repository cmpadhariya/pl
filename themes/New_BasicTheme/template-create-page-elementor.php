<?php
//Template Name: Create Page With Elementor
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Create Page With Elementor</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="page-elementor">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Install and activate Elementor Plugin.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>Open the text editor and create the template file. and add template name.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>Open the dashboard and click the page and add new page. and add title and select the page template and publish.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/page-elementor-image1.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/page-elementor-image2.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:4 -> </h5>
                                        <p>After the create template is open the dashboard and click the your page and click the Edit with Elementor.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/page-elementor-image3.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:5 -> </h5>
                                        <p>This Below image from elementor dashboard.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/page-elementor-image4.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:6 -> </h5>
                                        <p>Click the elementor dachboard plus sign and select the structure( section rows and column structure).</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/page-elementor-image5.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:7 -> </h5>
                                        <p>After click the multiple section and drag and drop.(heading,text,button,image etc).</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/page-elementor-image6.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:8 -> </h5>
                                        <p>This Below image is the simple zigzag section using elementor plugin.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/page-elementor-image7.png">
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