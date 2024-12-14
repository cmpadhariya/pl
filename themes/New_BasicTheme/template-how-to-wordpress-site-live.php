<?php
//Template Name: Wordpress Site Live
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Wordpress Site Live/Make the local changes live</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="wordpress-site-live">
                            <ul class="first-ul">
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Open your wordpress live site.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>Open the filezilla software and add hostname,username,password,port and quickconnect to click the connected.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/wordpress-live-site-image1.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>After that drag and drop the folder and files. Ex.(theme,plugins,template file,css etc).</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/wordpress-live-site-image2.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:4 -> </h5>
                                        <p>After that open the local site tools field and click the export menu and export all content <br>(posts,pages,landing page,my template,option page,fields,product etc).</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/wordpress-live-site-image3.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:5 -> </h5>
                                        <p>Open the live site and click the tools menu and after click the import menu and click the run importer plugin and choose the file and click <br> the upload file button.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/wordpress-live-site-image4.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/wordpress-live-site-image5.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:6 -> </h5>
                                        <p>A select the homepage as a front page. Click the settings menu and open reading menu. After a "static page" option checking and <br> select the homepage.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/wordpress-live-site-image6.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/wordpress-live-site-image7.png">
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