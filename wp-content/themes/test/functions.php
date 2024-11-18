<?php
require_once('wp-bootstrap-navwalker.php');

// add Featured image
add_theme_support( 'post-thumbnails' );


function add_styles() {
	wp_enqueue_style('my_bootstrap_css',get_template_directory_uri() . './css/bootstrap.min.css');
	wp_enqueue_style('style',get_template_directory_uri() . './style.css');
	wp_enqueue_style('style',get_template_directory_uri() . './css/main.css');
	wp_enqueue_style('style_icone','https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');
}

function add_scripts() {
	// remove register script old jquery
	wp_deregister_script('jquery');
	// remove register script a new footer jquery
	wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true);
	// enqueue the new jquery
	wp_enqueue_script('jquery');

	wp_enqueue_script('my_bootstrap_js',get_template_directory_uri() . './js/bootstrap.min.js',array(), false, true);
	wp_enqueue_script('main_js',get_template_directory_uri() . './js/main.js', array('jquery'), false, true);

	wp_enqueue_script('html5shiv', get_template_directory_uri() . './js/html5shiv.js');
	wp_script_add_data('html5shiv','conditional', 'lt IE 9');
	wp_enqueue_script('respond', get_template_directory_uri() . './js/respond.js');
	wp_script_add_data('respond','conditional', 'lt IE 9');


}


// add custom menu 
function register_my_menu() {
  // register_nav_menu( 'bootstrap menu', __( 'Navigation Bar') );
	 register_nav_menus( array(
	 'bootstrap menu' => __( 'Navigation Bar'),
	 'footer menu' => __( 'Footer')
	) );

}
function menu_bootstrap(){
wp_nav_menu(
array(
	'theme_location' 	=> 'bootstrap menu',
	'menu_class' 		=> 'navbar-nav',
	'container' 		=> 'false',
	'depth'				=>'2',
	'walker'=>new wp_bootstrap_navwalker()
)
);
}


add_action('wp_enqueue_scripts', 'add_styles');
add_action('wp_enqueue_scripts', 'add_scripts');

add_action( 'init', 'register_my_menu');
 

?>