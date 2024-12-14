<?php

class My_Elementor_zigzag_Widgets {

	protected static $instance = null;

	public static function get_instance() {
		if ( ! isset( static::$instance ) ) {
			static::$instance = new static();
		}

		return static::$instance;
	}

	protected function __construct() {
		require_once 'zigzag.php';
		add_action( 'elementor/widgets/widgets_registered', array( $this, 'register_widgets' ) );
	}

	public function register_widgets() {
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \Elementor\My_Widget_zigzag() );
	}

}

add_action( 'init', 'my_elementor_zigzag_init' );
function my_elementor_zigzag_init() {
	My_Elementor_zigzag_Widgets::get_instance();
}
