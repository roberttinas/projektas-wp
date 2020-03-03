<?php

add_image_size('logo', 50, 50, false);
add_image_size('clients', 500, 500, false);
add_image_size('fb-bg-img', 230, 120, false);
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

		wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Karla|Lora:400i|Open+Sans|PT+Sans|Raleway:400,500,700,800|Roboto+Slab&display=swap&subset=latin-ext', array(), false, 'all');
		wp_register_style('main-css', THEME_FOLDER . '/assets/css/style.css', array('google-fonts'), false, 'all');
		wp_register_style('slider', THEME_FOLDER . '/assets/css/tiny-slider.css', array('main-css'), false, 'all');
		//Loading
		wp_enqueue_style('google-fonts');
		wp_enqueue_style('main-css');
		wp_enqueue_style('slider');
	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');

// Apibrėžiame navigacijas

function register_theme_menus() {
   
	register_nav_menus(array( 
        'primary-navigation' => __( 'Primary Navigation' ) 
		'secondary-navigation' => __( 'Secondary Navigation' ),
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


class custom_navwalker extends Walker_Nav_Menu {

	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		$indent = ( $depth ) ? str_repeat( $t, $depth ) : '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
		//uzdedame klase ant li elemento
		$classes[] = 'contacts-phone';
		$classes[] = 'contacts-mail';
		// $classes[] = 'btn-style';

		/**
		 * Filters the arguments for a single nav menu item.
		 *
		 * @since 4.4.0
		 *
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param WP_Post  $item  Menu item data object.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );

		/**
		 * Filters the CSS class(es) applied to a menu item's list item element.
		 *
		 * @since 3.0.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		/**
		 * Filters the ID applied to a menu item's list item element.
		 *
		 * @since 3.0.1
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param string   $menu_id The ID that is applied to the menu item's `<li>` element.
		 * @param WP_Post  $item    The current menu item.
		 * @param stdClass $args    An object of wp_nav_menu() arguments.
		 * @param int      $depth   Depth of menu item. Used for padding.
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $class_names .'>';

		$atts = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target )     ? $item->target     : '';
		$atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
		$atts['href']   = ! empty( $item->url )        ? $item->url        : '';
		//Uzdeda klase ant <a> elemento
		$atts['class']  = 'nav-link js-scroll-trigger';

		/**
		 * Filters the HTML attributes applied to a menu item's anchor element.
		 *
		 * @since 3.6.0
		 * @since 4.1.0 The `$depth` parameter was added.
		 *
		 * @param array $atts {
		 *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
		 *
		 *     @type string $title  Title attribute.
		 *     @type string $target Target attribute.
		 *     @type string $rel    The rel attribute.
		 *     @type string $href   The href attribute.
		 * }
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		/** This filter is documented in wp-includes/post-template.php */
		$title = apply_filters( 'the_title', $item->title, $item->ID );

		/**
		 * Filters a menu item's title.
		 *
		 * @since 4.4.0
		 *
		 * @param string   $title The menu item's title.
		 * @param WP_Post  $item  The current menu item.
		 * @param stdClass $args  An object of wp_nav_menu() arguments.
		 * @param int      $depth Depth of menu item. Used for padding.
		 */
		$title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );

		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . $title . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		/**
		 * Filters a menu item's starting output.
		 *
		 * The menu item's starting output only includes `$args->before`, the opening `<a>`,
		 * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
		 * no filter for modifying the opening and closing `<li>` for a menu item.
		 *
		 * @since 3.0.0
		 *
		 * @param string   $item_output The menu item's starting HTML output.
		 * @param WP_Post  $item        Menu item data object.
		 * @param int      $depth       Depth of menu item. Used for padding.
		 * @param stdClass $args        An object of wp_nav_menu() arguments.
		 */
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
function dump($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

//CUSTOM IRASAS

add_action( 'init', 'testimonial_posts_init' );
/**
 * Register a project post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function testimonial_posts_init() {
	$labels = array(
		'name'               => _x( 'Testimonial', 'post type general name', 'vcs-starter' ),
		'singular_name'      => _x( 'Testimonials', 'post type singular name', 'vcs-starter' ),
		'menu_name'          => _x( 'Testimonial', 'admin menu', 'vcs-starter' ),
		'name_admin_bar'     => _x( 'Testimonials', 'add new on admin bar', 'vcs-starter' ),
		'add_new'            => _x( 'Add New', 'testimonial', 'vcs-starter' ),
		'add_new_item'       => __( 'Add New Testimonials', 'vcs-starter' ),
		'new_item'           => __( 'New Testimonials', 'vcs-starter' ),
		'edit_item'          => __( 'Edit Testimonials', 'vcs-starter' ),
		'view_item'          => __( 'View Testimonials', 'vcs-starter' ),
		'all_items'          => __( 'All Testimonial', 'vcs-starter' ),
		'search_items'       => __( 'Search Testimonial', 'vcs-starter' ),
		'parent_item_colon'  => __( 'Parent Testimonial:', 'vcs-starter' ),
		'not_found'          => __( 'No testimonials found.', 'vcs-starter' ),
		'not_found_in_trash' => __( 'No testimonials found in Trash.', 'vcs-starter' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'vcs-starter' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => __('testimonial') ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'testimonial', $args );
}