<?php
/*
* Plugin Name: Network Menu Fallback
* Author: Russell Fair
* Version: 0.1
* Description: Uses the parent site's menu as the fallback for non-existant menus
*/

function nmf_network_menu($args){
    global $current_site, $current_blog;
    switch_to_blog($current_site->blog_id);
    wp_nav_menu(array('theme_location' =>$args['theme_location'], 'menu_class' => $args['menu_class']));
    restore_current_blog($current_blog->blog_id);
}

add_filter('wp_nav_menu_args', 'nmf_network_menu_args' );
function nmf_network_menu_args($args){
    global $current_site, $current_blog;
    $args['fallback_cb'] = ($current_blog->blog_id != $current_site->blog_id) ? 'nmf_network_menu' : 'wp_page_menu';
    return $args;
}
