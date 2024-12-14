<?php
//Template Name: Custom Megamenu
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Custom Megamenu</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="custom-megamenu">
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
                                            'theme_location' => 'newbasictheme-create-custom-mega-menu'
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