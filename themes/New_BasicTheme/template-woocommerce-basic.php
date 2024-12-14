<?php
//Template Name: WooCommerce Basic 
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>WooCommerce Basic</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="woocommerce-basic">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Install and activate WooCommerce Plugin.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>After that Details of woocommerce menu.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/xoocommerce-basic-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>After that Details of woocommerce product menu.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/woocommrece-basic-image2.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>After that Details of woocommerce Analytics menu.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/woocommerce-basic-image3.png">
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