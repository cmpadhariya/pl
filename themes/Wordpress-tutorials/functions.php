<?php
/**
 * WordPress Tutorials functions and definitions file.
 *
 * @package WordPress Tutorials
 * @since WordPress Tutorials 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */

add_action( 'wp_enqueue_scripts', 'wordpresstutorials_assets' );
function wordpresstutorials_assets() {
	// css.

	wp_enqueue_style( 'wordpresstutorials-style', get_stylesheet_uri() );
	wp_enqueue_style( 'wordpresstutorials-bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'newbasictheme-swiper-style', get_template_directory_uri() . '/css/swiper-bundle.min.css' );
	wp_enqueue_style( 'newbasictheme-slick-style', get_template_directory_uri() . '/css/slick-slider.css' );
	wp_enqueue_style( 'newbasictheme-slick-nav-style', get_template_directory_uri() . '/css/slicknav.min.css' );

	// js.
	wp_enqueue_script( 'wordpresstutorials-script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.2', true );
	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-3.6.1.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'swiper-slider', get_template_directory_uri() . '/js/swiper-bundle.min.js' );
	wp_enqueue_script( 'slicknav-slider', get_template_directory_uri() . '/js/slicknav.min.js' );
	wp_enqueue_script( 'slick-slider', get_template_directory_uri() . '/js/slick-slider.min.js' );

	if ( is_page( 'simple-navbar' ) ) {
		wp_enqueue_style( 'wordpresstutorials-navbar-style', get_template_directory_uri() . '/css/dest/modules/simple-navbar.css' );
		wp_enqueue_script( 'wordpresstutorials-navbar-script', get_template_directory_uri() . '/js/simple-navbar.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'social-icon-navbar' ) ) {
		wp_enqueue_style( 'wordpresstutorials-navbar-style', get_template_directory_uri() . '/css/dest/modules/social-icon-navbar.css' );
		wp_enqueue_script( 'wordpresstutorials-navbar-script', get_template_directory_uri() . '/js/social-icon-navbar.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'navbar-with-button' ) ) {
		wp_enqueue_style( 'wordpresstutorials-navbar-style', get_template_directory_uri() . '/css/dest/modules/navbar-with-button.css' );
		wp_enqueue_script( 'wordpresstutorials-navbar-script', get_template_directory_uri() . '/js/navbar-with-button.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'simple-tabs' ) ) {
		wp_enqueue_style( 'wordpresstutorials-tabs-style', get_template_directory_uri() . '/css/dest/modules/simple-tabs.css' );
		wp_enqueue_script( 'wordpresstutorials-tabs-script', get_template_directory_uri() . '/js/simple-tabs.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'vertical-tabs' ) ) {
		wp_enqueue_style( 'wordpresstutorials-tabs-style', get_template_directory_uri() . '/css/dest/modules/vertical-tabs.css' );
		wp_enqueue_script( 'wordpresstutorials-tabs-script', get_template_directory_uri() . '/js/vertical-tabs.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'drop-down-mega-menu' ) ) {
		wp_enqueue_style( 'wordpresstutorials-dropdown-menu-style', get_template_directory_uri() . '/css/dest/modules/mega-menu.css' );
		wp_enqueue_script( 'wordpresstutorials-dropdown-menu-script', get_template_directory_uri() . '/js/mega-menu.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'custom-megamenu' ) ) {
		wp_enqueue_style( 'wordpresstutorials-custom-mega-menu-style', get_template_directory_uri() . '/css/dest/modules/custom-megamenu.css' );
		wp_enqueue_script( 'wordpresstutorials-custom-mega-menu-script', get_template_directory_uri() . '/js/custom-megamenu.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'megamenu-with-plugin' ) ) {
		wp_enqueue_style( 'wordpresstutorials-mega-menu-plugin-style', get_template_directory_uri() . '/css/dest/modules/megamenu-with-plugins.css' );
		wp_enqueue_script( 'wordpresstutorials-mega-menu-plugin-script', get_template_directory_uri() . '/js/megamenu-with-plugins.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'accordion-arrow-sign' ) ) {
		wp_enqueue_style( 'wordpresstutorials-accordion-arrow-style', get_template_directory_uri() . '/css/dest/modules/accordion-arrow-sign.css' );
		wp_enqueue_script( 'wordpresstutorials-accordion-arrow-script', get_template_directory_uri() . '/js/accordion-arrow-sign.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'accordion-plus-minus' ) ) {
		wp_enqueue_style( 'wordpresstutorials-accordion-plus-minus-style', get_template_directory_uri() . '/css/dest/modules/accordion-plus-minus.css' );
		wp_enqueue_script( 'wordpresstutorials-accordion-plus-minus-script', get_template_directory_uri() . '/js/accordion-plus-minus.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'simple-modal-popup' ) ) {
		wp_enqueue_style( 'wordpresstutorials-modal-box-style', get_template_directory_uri() . '/css/dest/modules/simple-modalbox.css' );
		wp_enqueue_script( 'wordpresstutorials-modal-box-script', get_template_directory_uri() . '/js/simple-modalbox.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'simple-swiper-slider' ) ) {
		wp_enqueue_style( 'wordpresstutorials-swiper-slider-style', get_template_directory_uri() . '/css/dest/modules/simple-slider-swiper.css' );
		wp_enqueue_script( 'wordpresstutorials-swiper-slider-script', get_template_directory_uri() . '/js/simple-slider-swiper.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'simple-slick-slider' ) ) {
		wp_enqueue_style( 'wordpresstutorials-slick-slider-style', get_template_directory_uri() . '/css/dest/modules/simple-slick-slider.css' );
		wp_enqueue_script( 'wordpresstutorials-slick-slider-script', get_template_directory_uri() . '/js/simple-slick-slider.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'slider-different-style' ) ) {
		wp_enqueue_style( 'wordpresstutorials-slider-different-style', get_template_directory_uri() . '/css/dest/modules/slider-different-style.css' );
		wp_enqueue_script( 'wordpresstutorials-slider-different-script', get_template_directory_uri() . '/js/slider-different-style.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'simple-breadcrumbs' ) ) {
		wp_enqueue_style( 'wordpresstutorials-breadcrumbs-style', get_template_directory_uri() . '/css/dest/modules/simple-breadcrumbs.css' );
		wp_enqueue_script( 'wordpresstutorials-breadcrumbs-script', get_template_directory_uri() . '/js/simple-breadcrumbs.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'custom-fields' ) ) {
		wp_enqueue_style( 'wordpresstutorials-custom-fields-style', get_template_directory_uri() . '/css/dest/modules/custom-fields.css' );
		wp_enqueue_script( 'wordpresstutorials-custom-fields-script', get_template_directory_uri() . '/js/custom-fields.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'acf-option-page' ) ) {
		wp_enqueue_style( 'wordpresstutorials-option-page-style', get_template_directory_uri() . '/css/dest/modules/acf-option-page.css' );
		wp_enqueue_script( 'wordpresstutorials-option-page-script', get_template_directory_uri() . '/js/acf-option-page.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'create-page-with-elementor' ) ) {
		wp_enqueue_style( 'wordpresstutorials-page-with-elementor-plugin-style', get_template_directory_uri() . '/css/dest/modules/create-page-with-elementor.css' );
		wp_enqueue_script( 'wordpresstutorials-page-with-elementor-plugin-script', get_template_directory_uri() . '/js/create-page-with-elementor.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'divi-theme-page-builder' ) ) {
		wp_enqueue_style( 'wordpresstutorials-divi-theme-page-builder-style', get_template_directory_uri() . '/css/dest/modules/divi-theme-page-builder.css' );
		wp_enqueue_script( 'wordpresstutorials-divi-theme-page-builder-script', get_template_directory_uri() . '/js/divi-theme-page-builder.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'add-contact-form' ) ) {
		wp_enqueue_style( 'wordpresstutorials-add-contact-form-style', get_template_directory_uri() . '/css/dest/modules/add-contact-form.css' );
		wp_enqueue_script( 'wordpresstutorials-add-contact-form-script', get_template_directory_uri() . '/js/add-contact-from.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'add-gravity-form' ) ) {
		wp_enqueue_style( 'wordpresstutorials-add-gravity-form-style', get_template_directory_uri() . '/css/dest/modules/add-gravity-form.css' );
		wp_enqueue_script( 'wordpresstutorials-add-gravity-form-script', get_template_directory_uri() . '/js/add-gravity-form.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'create-newsletter' ) ) {
		wp_enqueue_style( 'wordpresstutorials-create-newsletter-style', get_template_directory_uri() . '/css/dest/modules/create-newsletter.css' );
		wp_enqueue_script( 'wordpresstutorials-create-newsletter-script', get_template_directory_uri() . '/js/create-newsletter.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'newsletter-sendblue-plugin' ) ) {
		wp_enqueue_style( 'wordpresstutorials-newsletter-sendblue-plugin-style', get_template_directory_uri() . '/css/dest/modules/newsletter-sendblue-plugin.css' );
		wp_enqueue_script( 'wordpresstutorials-newsletter-sendblue-plugin-script', get_template_directory_uri() . '/js/newsletter-sendblue-plugin.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'wordpress-plugins' ) ) {
		wp_enqueue_style( 'wordpresstutorials-wordpress-plugin-style', get_template_directory_uri() . '/css/dest/modules/wordpress-plugins.css' );
		wp_enqueue_script( 'wordpresstutorials-wordpress-plugin-script', get_template_directory_uri() . '/js/wordpress-plugins.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'create-widget' ) ) {
		wp_enqueue_style( 'wordpresstutorials-create-widget-style', get_template_directory_uri() . '/css/dest/modules/create-widget.css' );
		wp_enqueue_script( 'wordpresstutorials-create-widget-script', get_template_directory_uri() . '/js/create-widget.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'create-child-theme' ) ) {
		wp_enqueue_style( 'wordpresstutorials-create-child-theme-style', get_template_directory_uri() . '/css/dest/modules/create-child-theme.css' );
		wp_enqueue_script( 'wordpresstutorials-create-child-theme-script', get_template_directory_uri() . '/js/create-child-theme.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'how-to-import-export' ) ) {
		wp_enqueue_style( 'wordpresstutorials-import-export-style', get_template_directory_uri() . '/css/dest/modules/how-to-import-export.css' );
		wp_enqueue_script( 'wordpresstutorials-import-export-script', get_template_directory_uri() . '/js/how-to-import-export.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'how-to-make-ecommerce-site' ) ) {
		wp_enqueue_style( 'wordpresstutorials-ecommerce-site-style', get_template_directory_uri() . '/css/dest/modules/how-to-make-ecommerce-site.css' );
		wp_enqueue_script( 'wordpresstutorials-ecommerce-site-script', get_template_directory_uri() . '/js/how-to-make-ecommerce-site.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'how-to-make-normal-site' ) ) {
		wp_enqueue_style( 'wordpresstutorials-normal-site-style', get_template_directory_uri() . '/css/dest/modules/how-to-make-normal-site.css' );
		wp_enqueue_script( 'wordpresstutorials-normal-site-script', get_template_directory_uri() . '/js/how-to-make-normal-site.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'create-custom-meta-fields' ) ) {
		wp_enqueue_style( 'wordpresstutorials-custom-meta-fields-style', get_template_directory_uri() . '/css/dest/modules/add-custom-meta-fields.css' );
		wp_enqueue_script( 'wordpresstutorials-custom-meta-fields-script', get_template_directory_uri() . '/js/add-custom-meta-fields.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'custom-posts' ) ) {
		wp_enqueue_style( 'wordpresstutorials-custom-posts-style', get_template_directory_uri() . '/css/dest/modules/custom-posts.css' );
		wp_enqueue_script( 'wordpresstutorials-custom-posts-script', get_template_directory_uri() . '/js/custom-posts.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'custom-testimonials' ) ) {
		wp_enqueue_style( 'wordpresstutorials-custom-testimonials-style', get_template_directory_uri() . '/css/dest/modules/custom-testimonials.css' );
		wp_enqueue_script( 'wordpresstutorials-custom-testimonials-script', get_template_directory_uri() . '/js/custom-testimonials.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'custom-elements' ) ) {
		wp_enqueue_style( 'wordpresstutorials-visual-composer-custom-elements-style', get_template_directory_uri() . '/css/dest/modules/custom-elements.css' );
		wp_enqueue_script( 'wordpresstutorials-visual-composer-custom-elements-script', get_template_directory_uri() . '/js/custom-elements.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'custom-widget-elementor' ) ) {
		wp_enqueue_style( 'wordpresstutorials-elementor-custom-widget-style', get_template_directory_uri() . '/css/modules/custom-elementor-widget.css' );
		wp_enqueue_script( 'wordpresstutorials-elementor-custom-widget-script', get_template_directory_uri() . '/js/custom-elements.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'create-page-template' ) ) {
		wp_enqueue_style( 'wordpresstutorials-create-page-template-style', get_template_directory_uri() . '/css/dest/modules/create-page-template.css' );
		wp_enqueue_script( 'wordpresstutorials-create-page-template-script', get_template_directory_uri() . '/js/create-page-template.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'create-custom-post-type' ) ) {
		wp_enqueue_style( 'wordpresstutorials-create-custom-post-type-style', get_template_directory_uri() . '/css/dest/modules/create-custom-post-type.css' );
		wp_enqueue_script( 'wordpresstutorials-create-custom-post-type-script', get_template_directory_uri() . '/js/create-custom-post-type.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'edit-website-wp_admin' ) ) {
		wp_enqueue_style( 'wordpresstutorials-edit-website-wp-admin-style', get_template_directory_uri() . '/css/dest/modules/edit-website-wp-admin.css' );
		wp_enqueue_script( 'wordpresstutorials-edit-website-wp-admin-script', get_template_directory_uri() . '/js/edit-website-wp-admin.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'woocommerce-basic' ) ) {
		wp_enqueue_style( 'wordpresstutorials-woocommerce-basic-style', get_template_directory_uri() . '/css/dest/modules/woocommerce-basic.css' );
		wp_enqueue_script( 'wordpresstutorials-woocommerce-basic-script', get_template_directory_uri() . '/js/woocommerce-basic.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'woocommerce-details-product' ) ) {
		wp_enqueue_style( 'wordpresstutorials-woocommerce-details-product-style', get_template_directory_uri() . '/css/dest/modules/details-product.css' );
		wp_enqueue_script( 'wordpresstutorials-woocommerce-details-product-script', get_template_directory_uri() . '/js/details-product.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'edit-product-template' ) ) {
		wp_enqueue_style( 'wordpresstutorials-woocommerce-edit-product-template-style', get_template_directory_uri() . '/css/dest/modules/edit-product-template.css' );
		wp_enqueue_script( 'wordpresstutorials-woocommerce-edit-product-template-script', get_template_directory_uri() . '/js/edit-product-template.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'woocommerce-resources' ) ) {
		wp_enqueue_style( 'wordpresstutorials-woocommerce-resources-style', get_template_directory_uri() . '/css/dest/modules/woocommerce-resources.css' );
		wp_enqueue_script( 'wordpresstutorials-woocommerce-resources-script', get_template_directory_uri() . '/js/woocommerce-resources.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'how-to-wordpress-site-live' ) ) {
		wp_enqueue_style( 'wordpresstutorials-wordpress-site-live-style', get_template_directory_uri() . '/css/dest/modules/how-to-wordpress-site-live.css' );
		wp_enqueue_script( 'wordpresstutorials-wordpress-site-live-script', get_template_directory_uri() . '/js/how-to-wordpress-site-live.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'google-map-integration' ) ) {
		wp_enqueue_style( 'wordpresstutorials-map-integration-style', get_template_directory_uri() . '/css/dest/modules/google-map-integration.css' );
		wp_enqueue_script( 'wordpresstutorials-map-integration-script', get_template_directory_uri() . '/js/google-map-integration.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'google-analytics' ) ) {
		wp_enqueue_style( 'wordpresstutorials-google-analytics-style', get_template_directory_uri() . '/css/dest/modules/google-analytics.css' );
		wp_enqueue_script( 'wordpresstutorials-google-analytics-script', get_template_directory_uri() . '/js/google-analytics.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'facebook-pixels' ) ) {
		wp_enqueue_style( 'wordpresstutorials-facebook-pixel-style', get_template_directory_uri() . '/css/dest/modules/facebook-pixel.css' );
		wp_enqueue_script( 'wordpresstutorials-facebook-pixel-script', get_template_directory_uri() . '/js/facebook-pixel.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'google-advertise' ) ) {
		wp_enqueue_style( 'wordpresstutorials-google-advertise-style', get_template_directory_uri() . '/css/dest/modules/google-advertise.css' );
		wp_enqueue_script( 'wordpresstutorials-google-advertise-script', get_template_directory_uri() . '/js/google-advertise.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'create-custom-theme' ) ) {
		wp_enqueue_style( 'wordpresstutorials-custom-theme-style', get_template_directory_uri() . '/css/dest/modules/create-custom-theme.css' );
		wp_enqueue_script( 'wordpresstutorials-custom-theme-script', get_template_directory_uri() . '/js/create-custom-theme.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'payment-paypal' ) ) {
		wp_enqueue_style( 'wordpresstutorials-payment-stripe-style', get_template_directory_uri() . '/css/dest/modules/payment-stripe.css' );
		wp_enqueue_script( 'wordpresstutorials-payment-stripe-script', get_template_directory_uri() . '/js/payment-stripe.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'paytm-payment' ) ) {
		wp_enqueue_style( 'wordpresstutorials-paytm-payment-style', get_template_directory_uri() . '/css/dest/modules/paytm-payment.css' );
		wp_enqueue_script( 'wordpresstutorials-paytm-payment-script', get_template_directory_uri() . '/js/paytm-payment.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'razorpay-payment-gateway' ) ) {
		wp_enqueue_style( 'wordpresstutorials-payment-gateway-razorpay-style', get_template_directory_uri() . '/css/dest/modules/payment-gateway-razorpay.css' );
		wp_enqueue_script( 'wordpresstutorials-payment-gateway-razorpay-script', get_template_directory_uri() . '/js/payment-gateway-razorpay.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'braintree-payment-gateway' ) ) {
		wp_enqueue_style( 'wordpresstutorials-braintree-payment-style', get_template_directory_uri() . '/css/dest/modules/braintree-payment.css' );
		wp_enqueue_script( 'wordpresstutorials-braintree-payment-script', get_template_directory_uri() . '/js/braintree-payment.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'payumoney-payment' ) ) {
		wp_enqueue_style( 'wordpresstutorials-payumoney-payment-style', get_template_directory_uri() . '/css/dest/modules/payumoney.css' );
		wp_enqueue_script( 'wordpresstutorials-payumoney-payment-script', get_template_directory_uri() . '/js/payumoney.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'setup-wpcs-local-system' ) ) {
		wp_enqueue_style( 'wordpresstutorials-setup-wpcs-localsystem-style', get_template_directory_uri() . '/css/modules/setup-wpcs-local-system.css' );
		wp_enqueue_script( 'wordpresstutorials-setup-wpcs-localsystem-script', get_template_directory_uri() . '/js/setup-wpcs-local-system.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'how-to-fix-wpcs-errors' ) ) {
		wp_enqueue_style( 'wordpresstutorials-fix-wpcs-errors-style', get_template_directory_uri() . '/css/modules/how-to-fix-wpcs-errors.css' );
		wp_enqueue_script( 'wordpresstutorials-fix-wpcs-errors-script', get_template_directory_uri() . '/js/setup-wpcs-local-system.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'create-wordpress-block-theme' ) ) {
		wp_enqueue_style( 'wordpresstutorials-create-block-theme-style', get_template_directory_uri() . '/css/modules/create-wordpress-block-theme.css' );
		wp_enqueue_script( 'wordpresstutorials-create-block-theme-script', get_template_directory_uri() . '/js/create-wordpress-block-theme.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'create-wordpress-custom-block' ) ) {
		wp_enqueue_style( 'wordpresstutorials-create-custom-block-style', get_template_directory_uri() . '/css/modules/create-wordpress-custom-block.css' );
		wp_enqueue_script( 'wordpresstutorials-create-custom-block-script', get_template_directory_uri() . '/js/create-wordpress-custom-block.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'create-wordpress-custom-dynamic-block' ) ) {
		wp_enqueue_style( 'wordpresstutorials-create-custom-dynamic-block-style', get_template_directory_uri() . '/css/modules/create-custom-wordpress-dynamic-block.css' );
		wp_enqueue_script( 'wordpresstutorials-create-custom-dynamic-block-script', get_template_directory_uri() . '/js/create-custom-wordpress-dynamic-block.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'create-wordpress-custom-block-patterns' ) ) {
		wp_enqueue_style( 'wordpresstutorials-create-custom-block-patterns-style', get_template_directory_uri() . '/css/modules/create-wordpress-custom-block-patterns.css' );
		wp_enqueue_script( 'wordpresstutorials-create-custom-block-patterns-script', get_template_directory_uri() . '/js/create-wordpress-custom-block-patterns.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'how-to-edit-pages-in-block-theme' ) ) {
		wp_enqueue_style( 'wordpresstutorials-edit-pages-block-theme-style', get_template_directory_uri() . '/css/modules/how-to-edit-pages-in-block-theme.css' );
		wp_enqueue_script( 'wordpresstutorials-edit-pages-block-theme-script', get_template_directory_uri() . '/js/how-to-edit-pages-in-block-theme.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'how-to-edit-templates-in-block-theme' ) ) {
		wp_enqueue_style( 'wordpresstutorials-edit-templates-block-theme-style', get_template_directory_uri() . '/css/modules/how-to-edit-templates-in-block-theme.css' );
		wp_enqueue_script( 'wordpresstutorials-edit-templates-block-theme-script', get_template_directory_uri() . '/js/how-to-edit-templates-in-block-theme.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'how-to-create-header-in-block-theme' ) ) {
		wp_enqueue_style( 'wordpresstutorials-create-header-in-block-theme-style', get_template_directory_uri() . '/css/modules/How-to-create-header-in-block-theme.css' );
		wp_enqueue_script( 'wordpresstutorials-create-header-in-block-theme-script', get_template_directory_uri() . '/js/How-to-create-header-in-block-theme.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'how-to-create-footer-in-block-theme' ) ) {
		wp_enqueue_style( 'wordpresstutorials-create-footer-in-block-theme-style', get_template_directory_uri() . '/css/modules/how-to-create-footer-in-block-theme.css' );
		wp_enqueue_script( 'wordpresstutorials-create-footer-in-block-theme-script', get_template_directory_uri() . '/js/how-to-create-footer-in-block-theme.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'how-to-add-edit-blog-post-block-theme' ) ) {
		wp_enqueue_style( 'wordpresstutorials-add-edit-blog-post-block-theme-style', get_template_directory_uri() . '/css/modules/How-to-add-edit-blog-post-block-theme.css' );
		wp_enqueue_script( 'wordpresstutorials-add-edit-blog-post-block-theme-script', get_template_directory_uri() . '/js/How-to-add-edit-blog-post-block-theme.js', array( 'jquery' ), '1.0.2', true );
	}
	if ( is_page( 'how-to-setup-amp-in-wordpress-site' ) ) {
		wp_enqueue_style( 'wordpresstutorials-setup-amp-in-wordpress-site-style', get_template_directory_uri() . '/css/modules/How-to-setup-AMP-in-wordpress-site.css' );
		wp_enqueue_script( 'wordpresstutorials-setup-amp-in-wordpress-site-script', get_template_directory_uri() . '/js/How-to-setup-AMP-in-wordpress-site.js', array( 'jquery' ), '1.0.2', true );
	}
}
add_theme_support( 'custom-header' );

// Added this code for custom header menu.
function wordpresstutorials_custom_menu() {
	register_nav_menu( 'wordpresstutorials-header-menu', __( 'Header Menu' ) );

	// added below line code for simple mega menu
	register_nav_menu( 'wordpresstutorials-dropdown-mega-menu', __( 'Mega Menu' ) );

	// added below line code for custom mega menu
	register_nav_menu( 'wordpresstutorials-create-custom-mega-menu', __( 'Custom Mega Menu' ) );

	// added below line code for mega menu with plugins
	register_nav_menu( 'wordpresstutorials-create-mega-menu-plugin', __( 'Mega Menu Plugin' ) );
}
add_action( 'init', 'wordpresstutorials_custom_menu' );

add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
/** Added custom font awesome icon. */
function enqueue_load_fa() {
	wp_enqueue_style( 'load-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css', array(), '6.3.0' );
}

function include_jQuery() {
	if ( ! is_admin() ) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', false, '1.8.3' );
		wp_enqueue_script( 'jquery' );
	}
}
add_action( 'init', 'include_jQuery' );

// Added this code for custom Testimonials posts.
function wordpresstutorials_custom_post_testimonial() {
	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name' ),
		'singular_name'      => _x( 'Testimonial', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'book' ),
		'add_new_item'       => __( 'Add New Testimonial' ),
		'edit_item'          => __( 'Edit Testimonial' ),
		'new_item'           => __( 'New Testimonial' ),
		'all_items'          => __( 'All Testimonials' ),
		'view_item'          => __( 'View Testimonial' ),
		'search_items'       => __( 'Search Testimonials' ),
		'not_found'          => __( 'No Testimonials found' ),
		'not_found_in_trash' => __( 'No Testimonials found in the Trash' ),
		// 'parent_item_colon'  => ’,
		  'menu_name'        => 'Testimonials',
	);
	$args   = array(
		'labels'        => $labels,
		'description'   => 'Holds our Testimonials and Testimonial specific data',
		'public'        => true,
		'menu_position' => 5,
		'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		'has_archive'   => true,
	);
	register_post_type( 'testimonial', $args );
	add_theme_support( 'post-thumbnails', array( 'testimonial' ) );
}
  add_action( 'init', 'wordpresstutorials_custom_post_testimonial' );


function get_breadcrumb() {
	echo '<a href="' . home_url() . '" rel="nofollow">Home</a>';
	if ( is_category() || is_single() ) {
		echo '&nbsp;&nbsp;&#187;&nbsp;&nbsp;';
		the_category( ' &bull; ' );
		if ( is_single() ) {
			echo ' &nbsp;&nbsp;&#187;&nbsp;&nbsp; ';
			the_title();
		}
	} elseif ( is_page() ) {
		echo '&nbsp;&nbsp;&#187;&nbsp;&nbsp;';
		echo the_title();
	} elseif ( is_search() ) {
		echo '&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ';
		echo '"<em>';
		echo the_search_query();
		echo '</em>"';
	}
}


// Added this code for ACF Options Page
if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page(
		array(
			'page_title' => 'Theme General Settings',
			'menu_title' => 'Theme Settings',
			'menu_slug'  => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect'   => false,
		)
	);

	acf_add_options_sub_page(
		array(
			'page_title'  => 'zigzag',
			'menu_title'  => 'zigzag',
			'parent_slug' => 'theme-general-settings',
		)
	);
}

// Added this code for custom elements using visual composer
	require_once get_template_directory() . '/vc-components/custom-banner.php';
	require_once get_template_directory() . '/vc-components/custom-element.php';


// Added this code for Custom Post Types
function wordpresstutorials_custom_post_type() {
	// Set UI labels for Custom Post Type
		$labels = array(
			'name'               => _x( 'News', 'Post Type General Name' ),
			'singular_name'      => _x( 'News', 'Post Type Singular Name' ),
			'menu_name'          => __( 'News' ),
			'parent_item_colon'  => __( 'Parent News' ),
			'all_items'          => __( 'All News' ),
			'view_item'          => __( 'View News' ),
			'add_new_item'       => __( 'Add New News' ),
			'add_new'            => __( 'Add New', 'News' ),
			'edit_item'          => __( 'Edit News' ),
			'update_item'        => __( 'Update News' ),
			'search_items'       => __( 'Search News' ),
			'not_found'          => __( 'Not Found' ),
			'not_found_in_trash' => __( 'Not found in Trash' ),
		);
		// Set other options for Custom Post Type
		$args = array(
			'label'         => __( 'News' ),
			'description'   => __( 'News and reviews' ),
			'labels'        => $labels,
			'supports'      => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'custom-fields' ),
			'hierarchical'  => false,
			'public'        => true,
			'menu_position' => 6,
			'has_archive'   => true,
		);
		// Registering your Custom Post Type
		register_post_type( 'News', $args );
		add_theme_support( 'post-thumbnails', array( 'News' ) );
}
add_action( 'init', 'wordpresstutorials_custom_post_type', 0 );

// add this code for custom widget
register_sidebar(
	array(
		'name'          => __( 'Header Widget Area', 'rmccollin' ),
		'id'            => 'header-widget-area',
		'description'   => __( 'A widget area located to the right hand side of the header, next to the site title and description.', 'rmccollin' ),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	)
);

function portfolio_order_meta_boxx_markup( $object ) {
	wp_nonce_field( basename( __FILE__ ), 'portfolio-order-meta-box-nonce' );
	?>
		<div>
			<label for="meta-box-text">News Order No.</label>
			<input name="News-order-no" type="text" value="<?php echo get_post_meta( $object->ID, 'News-order-no', true ); ?>">
		</div>
	<?php
}

function save_portfolio_order_metabox_value( $post_id, $post, $update ) {
	if ( ! isset( $_POST['portfolio-order-meta-box-nonce'] ) || ! wp_verify_nonce( $_POST['portfolio-order-meta-box-nonce'], basename( __FILE__ ) ) ) {
		return $post_id;
	}

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}

	$slug = 'News';
	if ( $slug != $post->post_type ) {
		return $post_id;
	}

	$meta_box_text_value = '';

	if ( isset( $_POST['News-order-no'] ) ) {
		$meta_box_text_value = $_POST['News-order-no'];
	}
	update_post_meta( $post_id, 'News-order-no', $meta_box_text_value );
}

function portfolio_add_order_meta_box() {
	add_meta_box( 'portfolio-add-meta-box', 'News Order Box', 'portfolio_order_meta_boxx_markup', 'News', 'side', 'high', null );
}

	add_action( 'add_meta_boxes', 'portfolio_add_order_meta_box' );

	require_once 'elementor-widgets/my-zigzag.php';
?>