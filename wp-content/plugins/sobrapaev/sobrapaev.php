<?php

/**
 * Plugin Name: Sobrapaiv
 * Plugin URI: http://kristjankonsap.ikt.khk.ee/
 * Description: Las kallab!
 * Version: 1.0
 * Author: Kristjan Konsap
 * Author URI: http://kristjankonsap.ikt.khk.ee/
**/
function sobrapaev() {
	        if (!is_admin()) {
	                wp_enqueue_script('sobrapaev', WP_PLUGIN_URL . '/sobrapaev/' . 'sobrapaev.js', false, '1.41');
	        }
	}
	
	add_action('init', 'sobrapaev', 10);
	
	?>