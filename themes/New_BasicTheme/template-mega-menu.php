<?php
//Template Name: Mega Menu
get_header();
?>


    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Mega Menu</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="custom-megamenu">
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/mega-menu-function.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:4 -> </h5>
                                        <p>After add code.Add the following code from Show menu items.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/menu-show-code.png">
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
                                        <p>add sub menu items andEnable to mega menu fields</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/menu-items.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="maintitle">
                    <h1>Example Mega Menu</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="demo-megamenu">
                            <?php
                                $logoimg=get_header_image();
                            ?>
                            <div class="logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $logoimg; ?>" alt="header-logo"></a>
                            </div>
                            <div class="menu">
                                <?php 
                                wp_nav_menu( 
                                    array(
                                        'theme_location' => 'newbasictheme-dropdown-mega-menu'
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