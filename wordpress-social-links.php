<?php
/**
 * Plugin Name: Social Links
 * Description: Adds social icons with links to profiles
 * Version: 1.0
 * Author: Krzysztof Siciński
 * Author URI: https://www.fradnet.com
 **/

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Load scripts
require_once(plugin_dir_path(__FILE__).'/includes/social-links-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__).'/includes/social-links-class.php');

// Register Widget
function register_social_links(){
    register_widget('Social_Links_Widget');
}
add_action('widgets_init', 'register_social_links');