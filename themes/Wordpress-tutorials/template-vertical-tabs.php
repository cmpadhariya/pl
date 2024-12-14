<?php
//Template Name: Vertical Tabs
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Vertical Tabs</h1>
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec neque nisi, dictum aliquet lectus.
                                        Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Donec sollicitudin molestie malesuada.
                                    </p>
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