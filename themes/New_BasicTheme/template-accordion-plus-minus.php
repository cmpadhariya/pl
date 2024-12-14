<?php
//Template Name: PlusMinus Accordion
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Plus/Minus Accordion</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="accordion-steps">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>first of the create plus/minus accordion open your add accordion file and below image to explain plus/minus accordion.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/plus-minus-accordion-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>Next activate accordion in open your js file and add the code.Below image to explain code.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/plus-minus-accordion-image2.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="maintitle">
                    <h1>Example Plus/Minus Accordion</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-12 col-12">
                        <div class="accordion-demo">
                            <div class="set">
                                <p> What is html? <i class="fa fa-plus"></i></p>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                </div>
                            </div>
                            <div class="set">
                                <p> What is css? <i class="fa fa-plus"></i></p>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                </div>
                            </div>
                            <div class="set">
                                <p> What is Bootstrap? <i class="fa fa-plus"></i></p>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                </div>
                            </div>
                            <div class="set">
                                <p> What is Javascript? <i class="fa fa-plus"></i></p>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                </div>
                            </div>
                            <div class="set">
                                <p> What is Jquery? <i class="fa fa-plus"></i></p>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                </div>
                            </div>
                            <div class="set">
                                <p> What is Scss? <i class="fa fa-plus"></i></p>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
                                </div>
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