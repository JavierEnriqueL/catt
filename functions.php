<?php
// Registrando Menu
if (function_exists('register_nav_menus')) {
    register_nav_menus( array('principal' => 'Principal') );
}

// Agregar Featured Image
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );   
 }



// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

function dcms_agregar_nueva_zona_widgets() {

    register_sidebar( array(
		'name'          => 'Blog Sidebar',
		'id'            => 'blog-sidebar',
        'description'   => 'Blog Sidebar',
        'before_widget' => '<div class="widget p-4 mb-5">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="py-3">',
        'after_title' => '</h4>'
    ) );
    register_sidebar( array(
		'name'          => 'Inmuebles Sidebar',
		'id'            => 'inmuebles-sidebar',
        'description'   => 'Inmuebles Sidebar',
        'before_widget' => '<div class="widget p-4 mb-5">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="py-3">',
        'after_title' => '</h4>'
    ) );
    register_sidebar( array(
		'name'          => 'Buscador',
		'id'            => 'buscador',
        'description'   => 'Buscador',
    ) );
    	
}
add_action( 'widgets_init', 'dcms_agregar_nueva_zona_widgets' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

add_filter( 'protected_title_format', 'bl_remove_protected_title' );

function bl_remove_protected_title( $title ) {
    // Return only the title portion as defined by %s, not the additional 
    // 'Protected: ' as added in core
    return "%s";
}


?>