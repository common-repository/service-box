<?php
/**
 * Service_Box_Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Service_Box_Widget extends \Elementor\Widget_Base {
	
	public function __construct( $data = array(), $args = null ) {
		parent::__construct( $data, $args );
		//CSS
		wp_register_style( "service_box_addon_bootstrap-front",wpshopmart_service_box_directory_url."service-box-elementor-addon/assets/css/service-box-addon-bootstrap-front.css", array(), false, "all" );

		wp_register_style( "service_box_addon_carousel_css",wpshopmart_service_box_directory_url."service-box-elementor-addon/assets/css/owl.carousel.min.css", array(), false, "all" );

		//JS
		wp_enqueue_script('jquery');
		wp_register_script('service_box_addon_carousel_js',wpshopmart_service_box_directory_url ."service-box-elementor-addon/assets/js/owl.carousel.min.js",array ('jquery'), true);

	}
	public function get_style_depends() {
		return array( 'service_box_addon_bootstrap-front','service_box_addon_carousel_css');
	}

	public function get_script_depends() {
		return array('service_box_addon_carousel_js');
	}


	public function get_name() {
		return 'Service Box';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve oEmbed widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'Service Box', 'plugin-name' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve oEmbed widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-tools';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the oEmbed widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return array Widget categories.
	 */
	
	
	public function get_categories() {
		return [ 'wpshopmart' ];
	}

	/**
	 * Register oEmbed widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		require_once( wpshopmart_service_box_directory_path .'service-box-elementor-addon/includes/service-box-addon-controls.php' );
		
	}
	/**
	 * Render oEmbed widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {

		$settings = $this->get_settings_for_display();
		require_once( __DIR__ . '/render-template/index-'.$settings['service_box_select_design'].'.php' );	

	}

	protected function _content_template(){
		require_once( wpshopmart_service_box_directory_path .'service-box-elementor-addon/includes/service-box-addon-content.php' );
	}

	
}

