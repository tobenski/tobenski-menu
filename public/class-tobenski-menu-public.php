<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/tobenski/
 * @since      1.0.0
 *
 * @package    Tobenski_Menu
 * @subpackage Tobenski_Menu/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Tobenski_Menu
 * @subpackage Tobenski_Menu/public
 * @author     Knud Rishøj <tirdyr@tobenski.dk>
 */
class Tobenski_Menu_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/tobenski-menu-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Add a page-template to use with the menu slug.
	 *
	 * @since 1.0.0
	 * @param string $template [Template location]
	 * @return string [Template location]
	 */
	public function page_templates( $template ) {
		if (is_page('menukort')) :
			// has slug menukort
			return plugin_dir_path( __FILE__ ) . 'partials/page-menukort.php';
		elseif (is_singular( 'menu' )) :
			// is singular view of type menu
			return plugin_dir_path( __FILE__ ) . 'partials/single-menu.php';
		elseif (is_tax('menu_type', 'frokost')) : 
			// is taxonomy menu_type value frokost
			return plugin_dir_path( __FILE__ ) . 'partials/taxonomy-menu_type-frokost.php';
		elseif (is_tax('menu_type', 'aften')) : 
			// is taxonomy menu_type value frokost
			return plugin_dir_path( __FILE__ ) . 'partials/taxonomy-menu_type-aften.php';
		elseif (is_tax('menu_type', 'born')) : 
			// is taxonomy menu_type value frokost
			return plugin_dir_path( __FILE__ ) . 'partials/taxonomy-menu_type-born.php';
		elseif (is_tax('menu_type')) : 
			// is taxonomy menu_type value frokost
			return plugin_dir_path( __FILE__ ) . 'partials/taxonomy-menu_type.php';
		else :
			// is not menu
			return $template;
		endif;

	} 

}
