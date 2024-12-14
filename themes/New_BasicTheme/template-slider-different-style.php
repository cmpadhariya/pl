<?php
//Template Name: Slider Different Style
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Slider Different Style</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="slider-different-steps">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Open Google and Search Swiper Slider.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>After open website and click the "Get Started" menu. And add the two css and js link for your website.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/simple-swiper-slider-link.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>After add slider code to your file. below image to explain.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/slider-different-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:4 -> </h5>
                                        <p>Next the open your slider js file and add the slider js code.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/slider-different-image2.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="maintitle">
                    <h1>Example of Slider Different Style</h1>
                </div>
                <div class="row slider-arrow">
                    <div class="col-12">
                        <div class="slider-arrow-inner">
                            <div class="left">
                                <i class="fa-solid fa-chevron-left"></i>
                            </div>
                            <div class="right">
                                <i class="fa-solid fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row demo-different-slider swiper different">
                    <div class="swiper-wrapper">
                        <div class=" swiper-slide">
                            <div class="slider-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/slide3.jpg">
                            </div>
                        </div>
                        <div class=" swiper-slide">
                            <div class="slider-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/slide4.jpg">
                            </div>
                        </div>
                        <div class=" swiper-slide">
                            <div class="slider-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/slide3.jpg">
                            </div>
                        </div>
                        <div class=" swiper-slide">
                            <div class="slider-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/slide4.jpg">
                            </div>
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