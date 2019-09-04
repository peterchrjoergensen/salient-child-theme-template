<?php

/**
 * Enqueue scripts and styles for our theme.
 *
 * This must be done on wp_enqueue_scripts hook.
 */
add_action('wp_enqueue_scripts', function () {
    $version = nectar_get_theme_version();

    wp_enqueue_style('salient-child-style', get_stylesheet_directory_uri().'/style.css', '', $version);

    if (is_rtl()) {
        wp_enqueue_style('salient-rtl',  get_template_directory_uri().'/rtl.css', [], '1', 'screen');
    }
}, 100);

/**
 * Include your files here.
 */
$path = get_stylesheet_directory_uri();

// Classes.
require_once "{$path}/includes/class-ws-example.php";

// Functions.
require_once "{$path}/includes/ws-example-functions.php";

// Something else?

?>