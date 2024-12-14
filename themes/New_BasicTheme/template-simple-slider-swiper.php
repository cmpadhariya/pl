<?php
//Template Name: Simple SwiperSlider
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Simple Swiper Slider</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="simple-swiperslider">
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
                                        <p>Click the demo menu and select the demo for swiper slider.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/simple-swiper-slider-link2.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:4 -> </h5>
                                        <p>After click the core menu select the swiper slider class and js code. And add the class and js code in your website.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/simple-swiper-slider-link3.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="maintitle">
                    <h1>Example of Simple Swiper Slider</h1>
                </div>
                <div class="demo-swiperslider swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="col-12 swiper-slide">
                            <div class="box">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/image-one.jpg">
                            </div>
                        </div>
                        <div class="col-12 swiper-slide">
                            <div class="box">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/image-two.jpg">
                            </div>
                        </div>
                        <div class="col-12 swiper-slide">
                            <div class="box">
                                <img src="<?php echo get_template_directory_uri(); ?>/image/image-three.jpg">
                            </div>
                        </div>
                    </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
the_content();
wp_footer();
?>