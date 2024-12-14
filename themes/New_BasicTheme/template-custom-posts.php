<?php
//Template Name: Custom Posts
get_header();
?>

    <section>
        <div class="custom-section">
            <div class="container">
                <div class="maintitle">
                    <h1>Custom Posts</h1>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="custom-posts">
                            <ul>
                                <li>
                                    <div class="description">
                                        <h5>Step:1 -> </h5>
                                        <p>Open the posts fields and click the categories.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/add-new-category.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:2 -> </h5>
                                        <p>Open the posts fields and click the add new posts.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:3 -> </h5>
                                        <p>After clicking the add new posts. add the posts title and description.and select the categories or publish posts.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/add-posts.png">
                                </li>
                                <li>
                                    <div class="description">
                                        <h5>Step:4 -> </h5>
                                        <p>Add this below code from your custom posts file.</p>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/image/custom-posts-code.png">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="maintitle">
                    <h1>Example of Custom Posts</h1>
                </div>
                <div class="custom-postsdemo">
                    <div class="row justify-content-center">
                    <?php $args = array(
                        'post_type' => 'post' ,
                        'orderby' => 'date' ,
                        'order' => 'DESC' ,
                        'category_name' => 'category-one',
                        'paged' => get_query_var('paged'),
                        // 'post_parent' => $parent
                    ); ?>
                    <?php $posts = new WP_Query( $args ) ?>
                    <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
                        <div class="col-lg-3 col-md-3 col-12">
                            <div class="custom-postsdemo--box">
                                <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                                <div class="discription">
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                    
                                <a href="<?php the_permalink(); ?>" class="knowmore">Know more</a>
                            </div>
                        </div>
                    <?php endwhile;
                        wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php
the_content();
wp_footer();
?>