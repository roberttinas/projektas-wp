<?php

// Įjungiame post thumbnail

add_theme_support( 'post-thumbnails' );

// Apsibrėžiame stiliaus failus ir skriptus

if( !defined('THEME_FOLDER') ) {
	define('THEME_FOLDER', get_bloginfo('template_url'));
}

function theme_scripts(){

    if ( !is_admin() ) {

    	//wp_register_script(handle, path, dependency, version, load_in_footer);

        //wp_deregister_script('jquery');
		//wp_register_script('jquery', THEME_FOLDER . '/assets/js/jquery-2.1.1.js', false, '2.1.1', true);

    	//Registration
        wp_register_script('js_main', THEME_FOLDER . '/assets/js/main.js', array('jquery'), '1.0', true);

		wp_register_script('fa', 'https://kit.fontawesome.com/8f49103de5.js', false, false, false);
		wp_deregister_script('jquery');
		wp_register_script('jquery', THEME_FOLDER . '/assets/scripts/jquery.js', array('fa'), false, true);
		wp_register_script('fancybox', THEME_FOLDER . '/assets/scripts/jquery.fancybox.min.js', array('jquery'), false, true);
		wp_register_script('slider', THEME_FOLDER . '/assets/scripts/tiny-slider.js', array('fancybox'), false, true);
		wp_register_script('main-js', THEME_FOLDER . '/assets/scripts/projektas.js', array('slider'), false, true);
        //Loading
        wp_enqueue_script('js_main');
		wp_enqueue_script('fa');
		wp_enqueue_script('jquery');
        wp_enqueue_script('fancybox');
        wp_enqueue_script('slider');
        wp_enqueue_script('main-js');
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_stylesheets(){

	if( defined('THEME_FOLDER') ) {
		//wp_register_style(handle, path, dependency, version, devices);	

		//Registration
		wp_register_style('main-css', THEME_FOLDER . '/assets/css/main.css', array(), false, 'all');

		//Loading
		wp_enqueue_style('main-css');
	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');

// Apibrėžiame navigacijas

function register_theme_menus() {
   
	register_nav_menus(array( 
        'primary-navigation' => __( 'Primary Navigation' ) 
    ));
}

add_action( 'init', 'register_theme_menus' );

// Apibrėžiame widgets juostas

#$sidebars = array( 'Footer Widgets', 'Blog Widgets' );

if( isset($sidebars) && !empty($sidebars) ) {

	foreach( $sidebars as $sidebar ) {

		if( empty($sidebar) ) continue;

		$id = sanitize_title($sidebar);

		register_sidebar(array(
			'name' => $sidebar,
			'id' => $id,
			'description' => $sidebar,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	}
}


