<?php
//Template Name: Payment Gateway Razorpay
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Payment Gateway Razorpay</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="payment-razorpay">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Install and activate Razorpay for WooCommerce plugin.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>Open WooCommerce -> settings -> Payment option and select the payment method.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/razorpay-payment-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>Then create a Razorpay Account.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/razorpay-payment-image2.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:4 -> </h5>
                                        <p>After open the woocommerce settings and payment option.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/razorpay-payment-image3.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:5 -> </h5>
                                        <p>Add setting. Enable & Disable Payment,title,description,key ID,secret key,payment action,activate mode etc.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/razorpay-payment-image4.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/razorpay-payment-image5.png">
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