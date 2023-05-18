<?php 
/*
 * Plugin Name:       My plugin :)
 * Description:       Handle the basics with this plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Ahneaka
 */
// Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );

add_action( 'admin_menu', 'wporg_options_page' );
function wporg_options_page() {
    add_menu_page(
        'Ahneaka-Plugin',
        'Ahneaka-Plugin Options',
        'manage_options',
        plugin_dir_path(__FILE__) . 'admin/view.php',
        null,
        'dashicons-admin-plugins',
        20
    );
}