<?php
add_action( 'vc_before_init', 'create_custom_element_in_vc' );

function create_custom_element_in_vc() {
	vc_map(
		array(
			'name'     => __( 'My Custom Element', 'cxc-codexcoach' ), // Element name
			'base'     => 'my_custom_element', // Element shortcode
			'category' => __( 'My Custom Elements' ),
			'params'   => array(
				array(
					'type'        => 'textfield',
					'holder'      => 'div',
					'class'       => '',
					'heading'     => __( 'Title', 'cxc-codexcoach' ),
					'param_name'  => 'my_custom_element_title',
					'value'       => __( '', 'cxc-codexcoach' ),
					'description' => __( 'Add a Main section\'s title.".', 'cxc-codexcoach' ),
				),
				array(
					'type'        => 'textarea',
					'holder'      => 'div',
					'class'       => '',
					'heading'     => __( 'Description', 'cxc-codexcoach' ),
					'param_name'  => 'my_custom_element_description',
					'value'       => __( '', 'cxc-codexcoach' ),
					'description' => __( 'Add a Main section\'s description.".', 'cxc-codexcoach' ),
				),
				array(
					'type'        => 'textfield',
					'holder'      => 'div',
					'class'       => '',
					'heading'     => __( 'Extra class name', 'cxc-codexcoach' ),
					'param_name'  => 'my_custom_element_extra_class',
					'value'       => __( '', 'cxc-codexcoach' ),
					'description' => __( 'Style particular content element differently - add a class name and refer to it in custom CSS.".', 'cxc-codexcoach' ),
				),
				array(
					'type'        => 'attach_image',
					'heading'     => __( 'First Image' ),
					'param_name'  => 'firstimage',
					'value'       => 'media_library',
					'description' => __( 'If you need use 2 image inside one "single image"', 'js_composer' ),
					'dependency'  => array(
						'element' => 'source',
						'value'   => 'media_library',
					),
					'admin_label' => true,
				),
			),
		)
	);
}



add_shortcode( 'my_custom_element', 'cxc_my_custom_element_func' );

function cxc_my_custom_element_func( $atts ) {
	ob_start();

	$atts = shortcode_atts(
		array(
			'my_custom_element_title'       => '',
			'my_custom_element_description' => '',
			'my_custom_element_extra_class' => '',
			'firstimage'                    => '',
		),
		$atts,
		'cxc_my_custom_element'
	);

	$title         = $atts['my_custom_element_title'];
	$description   = $atts['my_custom_element_description'];
	$class         = $atts['my_custom_element_extra_class'];
	$attachment_id = $atts['firstimage'];
	$firstimage    = wp_get_attachment_image( $attachment_id, $icon = false, $atts['firstimage'] );
	?>

	<div class="main_title <?php echo $class; ?>">
		<h2><?php echo $title; ?></h2>
		<p><?php echo $description; ?></p>
		<?php echo $firstimage; ?>
	</div>

	<?php
	$result = ob_get_clean();
	return $result;
}
?>
