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

// define default value from config

// should be an string with min lengt: 3 and max length: 255 should normalize before check with trim function
$textIpsum = 'Lorem ipsum dolor sit amet, consectum couram victorma.' ;

// should be NULL or contains an valid email format
$email = NULL ;

// add top level menu
const LOREM_PLUGIN_MENU_POSITION = 5 ;

function loremPlugin_addMenu() {

    add_menu_page(
        "Lorem Plugin" ,
        "Lorem Plugin" ,
        "manage_options" , // roles user for read data
        "lorem-plugin" , // slug content page
        "" , // callback name or anon fx , show factory data
        "dashicons-text" , // icon URL , from library: https://developer.wordpress.org/resource/dashicons/#text
        LOREM_PLUGIN_MENU_POSITION
    ) ;

    add_submenu_page(
        "lorem-plugin", // parent menu slug
        "Settings" , // page title
        "Settings" , // menu title
        "manage_options" , // roles user for settings
        "settings-lorem-plugin" , // slug
        "" , // callback name or anon fx , show factory data
    ) ;

}

add_action('admin_menu' , 'loremPlugin_addMenu' ) ;
