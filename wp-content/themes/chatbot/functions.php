<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
    wp_enqueue_script('custom_javascript', get_stylesheet_directory_uri() . '/customElements.js');
    wp_enqueue_script_module('custom_module1', "https://rphamily.github.io/chatter/chat.js");
    wp_enqueue_script_module('custom_module2', "https://rphamily.github.io/chatter/fab.js");
}
//
// Your code goes below
//