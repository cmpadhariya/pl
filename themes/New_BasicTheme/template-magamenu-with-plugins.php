<?php
//Template Name: Megamenu With Plugin
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Mega Menu With Plugin</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="megamenu-with-plugin">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Installation Max Mega Menu plugins and Activate plugin.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>Open Appearance and click the Menus fields.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>Open a Function.php file and add below code.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/megamenu-plugin-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:4 -> </h5>
                                        <p>After add code.Add the following code from Show menu items.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/megamenu-plugin-image2.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:5 -> </h5>
                                        <p>Click the Menus field and create a new menu.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/mega-menu-create.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:6 -> </h5>
                                        <p>After create menu add multiple menu items</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/add-menu-items.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:7 -> </h5>
                                        <p>After that using plugin.Click the enable plugin and click megamenu option.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/megamenu-with-plugin-image7.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:8 -> </h5>
                                        <p>Open below box and click megamenu standard option and select image option and add image,title etc.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/megamenu-with-plugin-image8.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="maintitle">
                    <h1>Example Mega Menu With Plugin</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="megamenu-plugin">
                            <?php
                                $logoimg=get_header_image();
                            ?>
                            <div class="megamenu-plugin__logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logoimg; ?>" alt="header-logo"></a>
                            </div>
                                
                            <div class="megamenu-plugin__menu">
                                <?php 
                                    wp_nav_menu( 
                                        array(
                                            'theme_location' => 'newbasictheme-create-mega-menu-plugin'
                                        )    
                                    );
                                ?>
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