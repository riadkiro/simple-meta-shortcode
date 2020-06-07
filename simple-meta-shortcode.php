<?php
/*
Plugin Name: Simple Meta shortcode
Plugin URI: http://wordpress.org/plugins/simple-post-meta/
Description: A light plugin that allows you to easly shorcode your post meta data.
Author: Riad Boukirou
Version: 0.1
Author URI: 
*/

function sm_shortcode( $atts ) {
	$a = shortcode_atts( array(
		'post-id' => get_the_ID() ,
		'key' => '',
		'single' => false,
    ), $atts );	
    
    return get_post_meta( $a["post-id"], $a["key"], $a["post-id"] ) ;

}

add_shortcode('sm', 'sm_shortcode');