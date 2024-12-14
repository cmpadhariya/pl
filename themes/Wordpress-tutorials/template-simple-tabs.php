<?php
//Template Name: Simple Tabs
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Simple Tabs</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="simple-tabs-steps">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>first of the create tab open your add tabs file and below image to explain tabs.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/simple-tabs-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>Next the open your js file and add the js code for tabs is activated.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/simple-tabs-image2.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="maintitle">
                    <h1>Example Simple Tabs</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="tabs">
                            <ul class="tabs-nav">
                                <li><a href="#tab-1">Features</a></li>
                                <li><a href="#tab-2">Details</a></li>
                                <li><a href="#tab-3">Services</a></li>
                            </ul>
                            <div class="tabs-stage">
                                <div id="tab-1" class="tab-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec neque nisi, dictum aliquet lectus.</p>
                                </div>
                                <div id="tab-2" class="tab-content">
                                    <p>Phasellus pharetra aliquet viverra. Donec scelerisque tincidunt diam, eu fringilla urna auctor at.</p>
                                </div>
                                <div id="tab-3" class="tab-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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