<?php
/**
 * Plugin Name: Lorem Ipsum
 * Plugin URI: https://github.com/Orivoir/lorem-plugin/
 * Description: WP Factory plugin test usage Codex Wordpress
 * Version: 0.1.0
 * Author: Samuel Gaborieau
 * Author URI: https://github.com/Orivoir/
 * License: ISC
 * License URI: https://www.mozilla.org/en-US/MPL/2.0/
 * Requires PHP: 7.0.0
 */

// fx prefix: "loremPlugin_"

// add top level menu
const LOREM_PLUGIN_MENU_POSITION = 5 ;

function loremPlugin_addMenu() {

    add_menu_page(
        "Lorem Plugin" ,
        "Lorem Plugin" ,
        "manage_options" ,
        "lorem-plugin" ,
        "" , // callback name or anon fx
        "dashicons-text" , // icon URL , from library: https://developer.wordpress.org/resource/dashicons/#text
        LOREM_PLUGIN_MENU_POSITION
    ) ;
}

add_action('admin_menu' , 'loremPlugin_addMenu' ) ;
