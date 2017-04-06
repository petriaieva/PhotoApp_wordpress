<?php

/**
 * Enqueue scripts and styles.
 */
function photoapp_scripts() {
    wp_enqueue_style( 'photoapp-bootstrap',"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
	wp_enqueue_style( 'photoapp-style', get_template_directory_uri().'/style.css' );
    
	wp_enqueue_script( 'photoapp-jquery',"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js", array(), '20151215', true );
    wp_enqueue_script( 'photoapp-navigation', get_template_directory_uri() . '/js/script.js', array(), '20151215', true );
  

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'photoapp_scripts' );

// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'Menu-1' => esc_html__( 'Primary' ),
	) );