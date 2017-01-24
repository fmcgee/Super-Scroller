<?php
/*
Plugin Name: Super Scroll
Plugin URI: https://github.com/fmcgee/Super-Scroller
Description: Instant scroll to top fuctionality for WordPress
Version: 1.0
Author: Francis Mcgee
Author URI: http://webinception.co.uk
License: MIT License
*/

function troller(){

wp_enqueue_style(
'trollerstyle',
WP_PLUGIN_URL.'/superscroll/scroll.css',
false );

wp_enqueue_script(
'scrollmin',
WP_PLUGIN_URL.'/superscroll/jquery.scrollToTop.min.js',
array( 'jquery' ),
"2.1.4",
1 );
wp_enqueue_script(
'jquery.scrollcustom',
WP_PLUGIN_URL.'/superscroll/scrollcustom.js',
array( 'jquery', 'scrollmin' ),
"1.0",
1 );

}


// Action our scripts
add_action( 'wp_enqueue_scripts', 'troller' ); 

function addscp() {
	echo '<a href="#top" id="toTop"></a>';
}



// Action our script
add_action('wp_footer', 'addscp');
  
  
?>