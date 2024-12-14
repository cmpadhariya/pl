<?php
//Template Name: Newsletter SendBlue Plugin
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Newsletter SendBlue Plugin</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="newsletter-steps">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Install and activate the Sendinblue Plugin.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-sendblue-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>Next the Click SendinBlue plugin and Create Account.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-sendblue-image2.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-sendblue-image3.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>After create account and add api key.get the api key from SendinBlue dashboard.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-sendblue-image4.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-sendblue-image5.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:4 -> </h5>
                                        <p>Next Open SendInBlue plugin to click form.and Click "Add New Form" button.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-sendblue-image6.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:5 -> </h5>
                                        <p>Next add form name and add input, submit button etc.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-sendblue-image7.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:6 -> </h5>
                                        <p>Next add multiple setting to the form. for example field,subscription,captcha,style etc.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-sendblue-image8.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-sendblue-image9.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:7 -> </h5>
                                        <p>After that save form to copy shortcode and paste this shortcode your form display file.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-sendblue-image10.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/newsletter-sendblue-image11.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="maintitle">
                    <h1>Example of SendInBlue Newsletter</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="newsletter-demo">
                            <h5><strong>Sign up</strong> for email updates</h5>
                            <?php echo do_shortcode( '[sibwp_form id=2]' ); ?>
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