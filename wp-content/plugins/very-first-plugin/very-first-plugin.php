<?php

/**
 * Plugin Name: Very First Plugin
 * Plugin URI: http://kristjankonsap.ikt.khk.ee/
 * Description: First plugin I ever created.
 * Version: 1.0
 * Author: Kristjan Konsap
 * Author URI: http://kristjankonsap.ikt.khk.ee/
**/
function dh_modify_read_more_link() {
 return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
}
add_filter( 'the_content_more_link', 'dh_modify_read_more_link' );