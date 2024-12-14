<?php
namespace Elementor;

class My_Widget_zigzag extends Widget_Base {

	public function get_name() {
		return 'Zigzag';
	}

	public function get_title() {
		return 'Zigzag';
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return array( 'basic' );
	}

	protected function _register_controls() {

		$this->start_controls_section(
			'section_title',
			array(
				'label' => __( 'Zigzag', 'elementor' ),
			)
		);

		$this->add_control(
			'title',
			array(
				'label'       => __( 'Title', 'elementor' ),
				'label_block' => true,
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your title', 'elementor' ),
			)
		);

		$this->add_control(
			'subtitle',
			array(
				'label'       => __( 'Sub-title', 'elementor' ),
				'label_block' => true,
				'type'        => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your sub-title', 'elementor' ),
			)
		);

		$this->add_control(
			'link',
			array(
				'label'       => __( 'Link', 'elementor' ),
				'type'        => Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'elementor' ),
				'default'     => array(
					'url' => '',
				),
			)
		);

		$this->add_control(
			'image',
			array(
				'label'   => __( 'Choose Image', 'textdomain' ),
				'type'    => Controls_Manager::MEDIA,
				'default' => array(
					'url' => '',
				),
			)
		);

		$this->end_controls_section();
	}

	protected function render() {

		$settings = $this->get_settings_for_display();
		$url      = $settings['link']['url'];
		?>
		<div class="zigzag">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<h2><?php echo $settings['title']; ?></h2>
					<p><?php echo $settings['subtitle']; ?></p>
					<a href="<?php echo $url; ?>">Read More</a>
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<img src="<?php	echo $settings['image']['url']; ?>">
				</div>
			</div>
		</div>
		<?php
	}

}
