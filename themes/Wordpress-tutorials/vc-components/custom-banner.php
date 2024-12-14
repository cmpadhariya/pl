<?php

class CustomBanner
{
    public function __construct()
    {
        add_action( 'init', array( $this, 'vcMap' ) );
        add_shortcode( 'vc_Custom_Banner', array( $this, 'render' ) );
    }

    public function vcMap()
    {
        if ( ! function_exists( 'vc_map' ) ) {
            return;
        }

        vc_map(array(
            "name" => "CustomBanner",
            "base" => "vc_Custom_Banner",
            "category" => 'Custom Elements',
            "allowed_container_element" => 'vc_row',
            "params" => array(
                array(
                    "type" => "textfield",
                    "heading" => "Title",
                    "param_name" => "title",
                    "admin_label" => true
                ),
                array(
                    "type" => "textarea",
                    "heading" => "Description",
                    "param_name" => "description",
                    "admin_label" => true
                ),
                array(
                    "type" => "textarea",
                    "heading" => "Button Text",
                    "param_name" => "buttontext",
                    "admin_label" => true
                ),
                array(
                    "type" => "attach_image",
                    "heading" => "Banner Main Image",
                    "holder" => "img",
                    "param_name" => "banner_main_image",
                    'value' => '',
                    'description' => __( 'Select image from media library.', 'js_composer' ),
                    'dependency' => array(
                        'element' => 'source',
                        'value' => 'media_library',
                    ),
                    "admin_label" => true
                ),
                array(
                    "type" => "attach_image",
                    "heading" => "Banner Second Image",
                    "param_name" => "banner_second_image",
                    'value' => 'media_library',
                    'description' => __( 'Select image from media library.', 'js_composer' ),
                    'dependency' => array(
                        'element' => 'source',
                        'value' => 'media_library',
                    ),
                    "admin_label" => true
                )
            )
        ));
    }

    public function render($atts, $content = null)
    {

        $atts = (shortcode_atts(array(
            'title'   => '',
            'description'   => '',
            'buttontext'    => '',
            'banner_main_image'   => '',
            'banner_second_image'   => '',
        ), $atts));


        $attachment_id = $atts['banner_main_image'];
        $image = wp_get_attachment_image( $attachment_id, $icon = false, $atts[ 'banner_main_image' ] );

        $attachment_id = $atts['banner_second_image'];
        $imagetwo = wp_get_attachment_image( $attachment_id,  $icon = false, $atts[ 'banner_second_image' ] );

        
        $html = '
                <div class="custom-banner">
                    <div class="custom-banner__inner">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-12 unic">
                                    <div class="custom-banner__inner--text">
                                        <h1>' . $atts[ 'title' ] . '</h1>
                                        <p>' . $atts[ 'description' ] . '</p>
                                        <a href="#">' . $atts[ 'buttontext' ] . '</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-12">
                                    <div class="custom-banner__inner--image">
                                    '. $image .'
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';


       return $html;
    }
}

new CustomBanner();