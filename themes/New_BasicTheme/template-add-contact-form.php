<?php
//Template Name: Add Contact Form 
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Add Contact Form</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="add-contact-form">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Install and activate the contact form 7 plugins.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/add-contact-form-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>After that open the contact form fields and click the add new fields.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/add-contact-form-image2.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>add new title for contact form and add multiple fields(name,email,subject,message,submit button etc.)</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/add-contact-form-image3.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/add-contact-form-image4.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:4 -> </h5>
                                        <p>Display The contact form your site in add the shortcode.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/add-contact-form-image5.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:5 -> </h5>
                                        <p>After that mail configuration.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/add-contact-form-image6.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/add-contact-form-image7.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="maintitle">
                    <h1>Example Of Contact Form</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="contact-form-demo">
                            <?php echo do_shortcode('[contact-form-7 id="141" title="New Contact Form"]'); ?>
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