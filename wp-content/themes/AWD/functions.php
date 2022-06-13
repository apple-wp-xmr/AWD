<?php
/*
* Theme Functions
*
*@package AWD
*/


// add_action( 'wp_body_open', 'metrics-analytics' );
// function metrics_analytics() {
//     //place for google analytics here (if you want)  
// }



function awd_add_scripts()
{
    wp_enqueue_style('style-sheet', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
}

add_action('wp_enqueue_scripts', 'awd_add_scripts');
