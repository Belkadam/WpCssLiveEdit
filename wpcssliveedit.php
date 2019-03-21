<?php
/**
 * Plugin Name: WP CSS Live Edit
 * Plugin URI: http://qarth.net/
 * Description: Wordpress plugin that let you add css properties via ftp live editor (like coda or PhpStorm)
 * Version: 1.0
 * Author: Adam Belkadi
 * Author URI: http://qarth.net/
 **/

function add_stylesheet_to_head() {
    echo "<link href='".plugins_url()."/wpccsslivedit/custom.css' rel='stylesheet' type='text/css'>";
}

add_action( 'wp_head', 'add_stylesheet_to_head' );

?>
