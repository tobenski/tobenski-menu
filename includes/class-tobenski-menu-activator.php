<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/tobenski/
 * @since      1.0.0
 *
 * @package    Tobenski_Menu
 * @subpackage Tobenski_Menu/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Tobenski_Menu
 * @subpackage Tobenski_Menu/includes
 * @author     Knud Rishøj <tirdyr@tobenski.dk>
 */
class Tobenski_Menu_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		self::create_page();
	}

	/**
	 * Create a Menukort page if it doesnt all ready exist.
	 * 
	 * Check if a page with the slug menukort exists.
	 * If it does, do nothing if not create it.
	 * 
	 * @since 1.0.0
	 */
	public static function create_page() {
		$page = array(
			'post_title' => 'Menukort',
			'post_status' => 'publish',
			'post_author' => 1,
			'post_type' => 'page',
			'post_name' => 'menukort',
		); 

		$page_exists = get_page_by_path( '/' . $page['page_name'] . '/', ARRAY_A, 'page');
		if ($page_exists == null) : wp_insert_post( $page ); endif;
	}

 
}
