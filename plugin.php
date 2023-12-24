<?php

/**
 * @package bootstrap_inside_wordpress_plugin
 * @version 5.0.2
 **/

/*
Plugin Name: Bootstrap Inside
Plugin URI: https://greoux.re/code/index.php/bootstrap-inside-wordpress-plugin/
Description: Add components from Bootstrap (5.0.2) to WordPress posts and pages.
Author: Gréoux Research
Version: 5.0.2
Author URI: https://greoux.re
 */

/* --- */

if (!function_exists("add_action")) {
    exit;
}

/* --- */

define("GREOUXRE_BOOTSTRAP_INSIDE_URL", plugin_dir_url(__FILE__));

/* --- */

function GREOUXRE_BOOTSTRAP_INSIDE_WP_ENQUEUE_SCRIPTS()
{
    wp_enqueue_script("jquery");
    wp_enqueue_script(
        "bootstrap-bundle",
        GREOUXRE_BOOTSTRAP_INSIDE_URL . "assets/bootstrap@5.0.2/js/bootstrap.bundle.min.js",
        array("jquery")
    );
    wp_enqueue_style(
        "bootstrap-inside",
        GREOUXRE_BOOTSTRAP_INSIDE_URL . "assets/bootstrap@5.0.2/css/bootstrap-inside.css"
    );
}

add_action("wp_enqueue_scripts", "GREOUXRE_BOOTSTRAP_INSIDE_WP_ENQUEUE_SCRIPTS");

/* --- */
