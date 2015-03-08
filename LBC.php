<?php

/**
 * The main class that holds state and methods relating to the LBC
 * content editor plugin.
*/
class LBC {

	public function __construct() {

	}

	/**
	 * Register the menu items with Wordpress.
	 */
	public function register_menus() {

		// Add the news editor menu item
		add_action( 'admin_menu', function(){

			// Call the wordpress add menu
			add_menu_page(
				'News Editor',
				'News',
				'manage_options',
				'LBC-Editor/news.php',
				'',
				'',
				6
			);

		} );

		// Add the news editor menu item
		add_action( 'admin_menu', function(){

			// Call the wordpress add menu
			add_menu_page(
				'News Editor',
				'News',
				'manage_options',
				'LBC-Editor/news.php',
				'',
				'',
				6
			);

		} );
	}
}
