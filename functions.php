<?php

 // --------------------------------------------------

	add_action('wp_enqueue_scripts', function(){
		$ver = filemtime(get_stylesheet_directory() . '/style.css');
		wp_enqueue_style('ifwp-theme-child', get_stylesheet_uri(), [], $ver);
	});

 // --------------------------------------------------
