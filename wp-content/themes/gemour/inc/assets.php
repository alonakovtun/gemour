<?php

/**
 * Enqueue scripts and styles.
 *
 * @package gemour
 */

/**
 * Enqueue scripts and styles.
 */
function gemour_scripts()
{
    wp_enqueue_style('gemour-style', get_stylesheet_uri(), array(), _S_VERSION);

    wp_enqueue_style('gemour-main-style', get_template_directory_uri() . '/assets/css/main.min.css', array(), _S_VERSION);

    wp_enqueue_style('css-new_custom', get_template_directory_uri() . '/assets/css/new_custom.css', array(), _S_VERSION);

    wp_register_script('gemour-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), _S_VERSION, true);

    wp_enqueue_script('gemour-scripts');
}
add_action('wp_enqueue_scripts', 'gemour_scripts');
