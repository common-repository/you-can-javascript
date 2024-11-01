<?php
/*
Plugin Name: You Can Javascript
Description: Disables KSES HTML/XHTML filter so trusted users can use Javascript within any body content. Works for WordPress and WordPress MU.
Version: 0.1
Author: Daniel Bachhuber
Author URI: http://www.danielbachhuber.com/
*/

/* History
0.1 Initial release; disables malicious code filters for registered users
*/

// Settings
$min_user_level = 5; // Lowest user_level that can add Javascript. Check out http://codex.wordpress.org/Roles_and_Capabilities#User_Level_to_Role_Conversion for more

// These are the filters that must be removed so you can add your JS
function disable_content_filters() {
	global $current_user;
	get_currentuserinfo();
	
	// Makes sure that your user is at least halfway up the totem pole
	if ($current_user->user_level >= $min_user_level) {
		remove_filter('content_save_pre', 'wp_filter_post_kses');
		remove_filter('excerpt_save_pre', 'wp_filter_post_kses');
		remove_filter('content_filtered_save_pre', 'wp_filter_post_kses');
	}
}

add_action('init', 'disable_content_filters', 20);

?>
