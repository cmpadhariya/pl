<?php
//Template Name: Edit Website wp_admin 
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Add CSS Via Customizer</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="add-css-customizer">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Open a Appearance menu and click the Customize.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/edit-via-css-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>After that click the additional css option and add the multiple css.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/edit-via-css-image2.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/edit-via-css-image3.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="maintitle">
                    <h1>Edit Theme via Appearance/Theme-Editor</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="add-css-customizer">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Open a Appearance menu and click the theme file editor.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/edit-theme-editer-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>After that changes and update the multiple file.(Ex. style.css,homepage,footer,header,function,multiple pages etc).</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/edit-theme-editer-image2.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="maintitle">
                    <h1>Edit Plugin Code Via Plugin-Editor</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="add-css-customizer">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Open a Plugins menu and click the plugin file editor.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/edit-plugin-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>After that select plugin and changes the plugins code and update file.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/edit-plugin-image2.png">
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