<?php
/**
 * Plugin to add tools for WordPress Multisite debugging.
 */

/**
 * Plugin Name: MT Find Duplicate Titles
 * Plugin URI:  https://github.com/matt-t-tinkers/mt-find-duplicate-titles
 * Description: Produces and array of posts that have duplicate titles
 * Version:     0.1
 * Author:      Matt Taylor
 * Author URI:  https://github.com/matt-t-tinkers
 * License: GPL3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

require_once dirname( __FILE__ ) . '/lib/class-mt-find-duplicate-titles.php';
require_once dirname( __FILE__ ) . '/lib/class-mt-find-duplicate-titles-query.php';