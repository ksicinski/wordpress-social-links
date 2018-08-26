<?php

/**
 * Add scripts
 */
function wsl_add_scripts()
{
    wp_enqueue_style('wsl-main-styles', plugins_url() . '/wordpress-social-link/css/styles.css');
    wp_enqueue_script('wsl-main-script', plugins_url() . '/wordpress-social-link/js/main.js');
}

add_action('wp_enqueue_scripts', 'wsl_add_scripts');