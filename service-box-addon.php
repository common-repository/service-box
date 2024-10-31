<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

final class Service_Box_Addon {

	/**
	 * Plugin Version
	 *
	 * @since 1.0.0
	 *
	 * @var string The plugin version.
	 */
	const SERVICE_BOX_ADDON_VERSION = '1.0.0';

	/**
	 * Minimum Elementor Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum Elementor version required to run the plugin.
	 */
	const SERVICE_BOX_ADDON_MINIMUM_ELEMENTOR_VERSION = '2.0.0';

	/**
	 * Minimum PHP Version
	 *
	 * @since 1.0.0
	 *
	 * @var string Minimum PHP version required to run the plugin.
	 */
	const SERVICE_BOX_ADDON_MINIMUM_PHP_VERSION = '7.0';

	/**
	 * Instance
	 *
	 * @since 1.0.0
	 *
	 * @access private
	 * @static
	 *
	 * @var Testimonial_Builder_Addon The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 * @static
	 *
	 * @return Testimonial_Builder_Addon An instance of the class.
	 */
	public static function instance() {

		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;

	}

	/**
	 * Constructor
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function __construct() {

		add_action( 'plugins_loaded', [ $this, 'on_plugins_loaded' ] );

	}

	/**
	 * Load Textdomain
	 *
	 * Load plugin localization files.
	 *
	 * Fired by `init` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function i18n() {

		load_plugin_textdomain( 'wpshopmart_service_box_text_domain' );

	}

	/**
	 * On Plugins Loaded
	 *
	 * Checks if Elementor has loaded, and performs some compatibility checks.
	 * If All checks pass, inits the plugin.
	 *
	 * Fired by `plugins_loaded` action hook.
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function on_plugins_loaded() {
			add_action( 'elementor/init', [ $this, 'init' ] );
	}

	public function init() {
	
		$this->i18n();

		// Add Plugin actions
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'init_widgets' ] );
		
		add_action( 'elementor/elements/categories_registered',array($this,'add_elementor_widget_categories') );

		add_action('elementor/editor/before_enqueue_scripts', [$this, 'editor_enqueue_scripts']);

	}

	/**
	 * Init Widgets
	 *
	 * Include widgets files and register them
	 *
	 * @since 1.0.0
	 *
	 * @access public
	 */
	public function init_widgets() {

		// Include Widget files
        require_once (__DIR__ . '/service-box-elementor-addon/widgets/service-box-addon-widget.php');

        // Register widget
        \Elementor\Plugin::instance()
            ->widgets_manager
            ->register_widget_type(new \Service_Box_Widget());

	}

	public function add_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'wpshopmart',
		[
			'title' => __( 'WPSHOPMART', 'Service Box' ),
			'icon' => 'fa fa-laptop',
		]
		);
	}

	public function editor_enqueue_scripts()
    {
        
        // editor style
        wp_enqueue_style(
            'servicebox-editor',
            wpshopmart_service_box_directory_url . 'assets/css/editor.css',
            false
        );
    }
}

Service_Box_Addon::instance();