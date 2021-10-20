<?php

/**
 * Plugin Name: MWE GLightbox
 * Description: Lightbox for Images and Videos
 * Plugin URI: https://github.com/biati-digital/glightbox
 * Author: Marco Michely
 * Author URL: https://www.michely-web-engineering.de
 * Domain Path: /languages
 * Text Domain: mweglightbox
 */
defined('ABSPATH') or die('No script kiddies please!');

// See https://oxygen4fun.supadezign.com/tutorials/how-to-add-a-lightbox-effect-to-your-images/

function mweglightbox_custom_css_file()
{
	wp_enqueue_style('mwe-glightbox-css', plugin_dir_url(__FILE__) . 'glightbox.min.css');
}
add_action('wp_enqueue_scripts', 'mweglightbox_custom_css_file');

function mweglightbox_custom_js_file()
{
	wp_enqueue_script('mwe-glightbox-js', plugin_dir_url(__FILE__) .  'glightbox.min.js', [], false, true);
  wp_enqueue_script('mwe-glightbox-init-js', plugin_dir_url(__FILE__) .  'mwe-glightbox.js', ['mwe-glightbox-js'], false, true);
}
add_action('wp_enqueue_scripts', 'mweglightbox_custom_js_file');