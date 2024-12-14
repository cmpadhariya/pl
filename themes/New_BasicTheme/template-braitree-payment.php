<?php
//Template Name: Payment Gateway BrainTree
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Payment Gateway BrainTree</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="payment-gateway-paypal">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Install and activate Payment Plugins Braintree For WooCommerce.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>Open WooCommerce -> settings -> Payment option and select the payment method.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/braintree-payment-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>Open "Credit/Debit Cards" option. and add multiple settings.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/braintree-payment-image2.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/braintree-payment-image3.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/braintree-payment-image4.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/braintree-payment-image5.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:4 -> </h5>
                                        <p>Click "API Setting" option and add multiple settings.Create Sandbox/Production Account and get the multiple keys and webhook url.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/braintree-payment-image6.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/braintree-payment-image7.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:5 -> </h5>
                                        <p>Click "Paypal" option and making payment paypal through.and add multiple setting for paypal.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/braintree-payment-image8.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/braintree-payment-image9.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/braintree-payment-image10.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/braintree-payment-image11.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:6 -> </h5>
                                        <p>Display Multiple Payment option Choose your option.(Paypal,Google Pay,Apple Pay,Venmo,Local Gateway,Credit/Debit Cards ect).</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/braintree-payment-image12.png">
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