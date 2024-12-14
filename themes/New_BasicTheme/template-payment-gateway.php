<?php
//Template Name: Payment Gateway
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Payment Gateway Stripe</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="payment-paypal">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Install and activate WooCommerce Stripe Payment Gateway plugin.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/payment-gateway-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>After Click WooCommerce Settings and click to payment option and click "Account key" button. and click "Stripe Account" button.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/payment-gateway-image2.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/payment-gateway-image3.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>After that create stripe account and display below dashboard. Click the API keys menu and get 'Publishable key','Secret key'. <br> Click Webhooks menu and Create Webhook url and add events and Click 'Add Endpoint' button. </p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/payment-gateway-image4.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/payment-gateway-image6.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:4 -> </h5>
                                        <p>Paste the API keys from the click payment option and 'Publishable key' and 'Secret key' input fields. <br> After Create Webhook copy url and paste the url webhook field.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/payment-gateway-image5.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/payment-gateway-image7.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:5 -> </h5>
                                        <p>Generated Stripe Payment method.and click to setting option to set setting(General setting,account details,transaction etc).</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/payment-gateway-image8.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/payment-gateway-image9.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/payment-gateway-image10.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/payment-gateway-image11.png">
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