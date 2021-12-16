<?php
/**
 * Set up the find duplicate titles plugin
 */

if ( ! class_exists( 'FindDuplicateTitles' ) ) {
	/**
	 * Class to add a tool to find duplicate post titles in a site
	 */
	class FindDuplicateTitles {

		public function __construct() {
			/**
			 * Set up a page in the dashboard
			 */
			add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
		}

		/**
		 * Add page to the Tools menu
		 */
		public function add_admin_pages() {
            add_management_page( 'Find duplicate titles', 'Find Duplicate Titles', 'install_plugins', 'find-dupe-titles', array( $this, 'display_dupes_page' ), 10 );
		}

		/**
		 * Displays duplicates list page
		 */
		public function display_dupes_page() {
			print( '<div class="wrap"><h2>Find Duplicated Post Titles</h2>' );
            print( '<pre>' );
            // Output query result.
            do_action('dupesPageQuery');
            print( '</pre>' );
			print( '</div>' );
		}

	}
	new FindDuplicateTitles();
}
