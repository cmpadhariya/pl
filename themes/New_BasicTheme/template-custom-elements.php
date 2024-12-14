<?php
//Template Name: Custom Elements
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Visual Composer Custom Elements:</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="custom-elements">
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
                                        <p>Create a folder and store the element file ('like this custom-banner.php') inside the themes file.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>After create a file paste the below code.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/custom-banner-code1.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/custom-banner-code2.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/custom-banner-code3.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:4 -> </h5>
                                        <p>After paste the code and custom-banner.php file add to function.php file.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/custom-banner-code4.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:5 -> </h5>
                                        <p>Add the dynamic content.Open page and click the edit with visual composer.and click the add element field and show below page.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/custom-banner-code5.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:6 -> </h5>
                                        <p>Click the custom-banner and add multiple things.( like this title,description,image etc).</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/custom-banner-code6.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="maintitle">
                    <h1>Example of Custom Elements</h1>
                </div>
            </div>
        </div>
    </section>

<?php
the_content();
wp_footer();
?>