<?php 
/**
 * @see https://gist.github.com/1105126
 */

// Also some more hints and fixes

// WP functions for adding to the admin bar
// This will provide code completion for admin_bar functions like add_menu()
/** @var $wp_admin_bar WP_Admin_Bar */
global $wp_admin_bar;

// Fixing dynamic includes, also so they link properly in the editors environment
require_once(get_template_directory() . '/inc/base.php'); 
//As is the above require will show an error in phpStorm "Cant resolve target....."

//To fix this is easy, this fixes the error and also allows control click on the base.php and opens it
/** @define "get_template_directory()" "/var/www/wp-dev/wp-content/themes/tridium" This is just for the IDE */
require_once(get_template_directory() . '/inc/base.php'); 

// These same methods can be used to fix most errors and completion in phpStorm

