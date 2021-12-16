<?php
/**
 * Set up the find duplicate titles plugin
 */

if ( ! class_exists( 'FindDuplicateTitles' ) ) {
	/**
	 * Class to provide tools to set up pages in the network admin area
	 * of a Multisite minstall and load data via ajax.
	 */
	class FindDuplicateTitles {
		/**
		 * Constructor - add network settings page to accomodate tools
		 */
		public function __construct() {
			/**
			 * Adds the network settings page for the tools
			 */
			add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
		}

		/**
		 * Adds pages to the Network admin area and loads any supporting scripts.
		 */
		public function add_admin_pages() {
            add_management_page( 'Find duplicate titles', 'Find duplicate titles', 'install_plugins', 'find-dupe-titles', array( $this, 'display_dupes_page' ), 10 );
		}

		/**
		 * Displays duplicates list page
		 */
		public function display_dupes_page() {
			print( '<div class="wrap"><h2>Find Duplicated Post Titles</h2>' );
            // Output query result.
			print( '</div>' );
		}

	}
	new FindDuplicateTitles();
}
