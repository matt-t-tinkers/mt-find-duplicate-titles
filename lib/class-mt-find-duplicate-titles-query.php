<?php
/**
 * Build a query to find duplicate pages that have been published and output the results
 */

if ( ! class_exists( 'FindDuplicateTitlesQuery' ) ) {

	class FindDuplicateTitlesQuery {

		public function __construct() {
			/**
			 * Adds an action hook to run the query
			 */
			add_action( 'dupesPageQuery', array( $this, 'get_duplicate_titles' ) );
		}

        /**
         * Using wpdb to query the database, find the title of posts where the post is published and the title appears more than once
         */
        public function get_duplicate_titles() {
            global $wpdb;

            // Get a list of postmeta tables.
            $post_dupes = $wpdb->get_results( "SELECT post_title FROM wp_posts WHERE post_status = 'publish' GROUP BY post_title HAVING count(*) >1");
            $titles = array();
            foreach($post_dupes as $post) {
                $titles[] = $post->post_title;
            }
            // Output the array.
            print_r ($titles);
        }

    }

    new FindDuplicateTitlesQuery();
}

