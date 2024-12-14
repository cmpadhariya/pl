<?php
//Template Name: Edit Product Template 
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Edit Product Template</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="edit-product-template">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Open your main file and click the plugins folder like this(plugins-> woocommerce->) and <br> copy of woocommerce folder and paste the theme file.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/edit-product-template-image1.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/edit-product-template-image2.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>After that open woocommerce folder and override the content-single-product.php file.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/edit-product-template-image3.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>After that content-single-product.php file inside create custom product page code.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/edit-product-template-image4.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:4 -> </h5>
                                        <p>After that product page add gallery,slider,review,tabs etc code is woocommerce folder.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/edit-product-template-image5.png">
                                </li>

                                <li>
                                    <div class="description">
                                        <h5>Step:5 -> Edit Cart Template</h5>
                                        <p>Edit the cart template and change the design. like this(add css).</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/edit-cart-template-image2.png"> <br> <br>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/edit-cart-template-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:6 -> Edit Checkout Template</h5>
                                        <p>Checkout template and change the design. like this(add css).</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/edit-checkout-template-image2.png"> <br> <br>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/edit-checkout-template-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:7 -> Edit Multiple Template</h5>
                                        <p>edit multiple templates like this(shop page,account page,search page,cart,checkout,thankyou page etc) <br> add css to design.</p>
                                    </div>
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