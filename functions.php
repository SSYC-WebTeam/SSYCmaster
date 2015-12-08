<?php

//function register_my_menu() {
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(array(
		  'main-menu' => 'Main Menu',
		  'toggle-menu' => 'Mobile Toggle Menu',
		  'footer-menu' => 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

if ( function_exists( 'register_sidebar') ) {
    register_sidebar(array(       
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>' ));

    register_sidebar (array(
        'name' => __( 'Login Widget', 'widgets_init' ),
        'id' => 'login-widgets',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>' ));

    register_sidebar (array(
        'name' => __( 'Event Widget', 'widgets_init' ),
        'id' => 'event-widgets',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>' ));

    register_sidebar (array(
        'name' => __( 'Calendar Widget', 'widgets_init' ),
        'id' => 'calendar-widgets',    
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>' ));
}
add_action( 'init', 'widgets_init' );

function the_breadcrumb() {
    global $post;   
    if (!is_home()) {
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo "</a> / ";
        
	if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo " / ";
				the_title();
			}

        } elseif (is_page()) {
            if ($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<a href="'. get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">
                    ' . get_the_title($ancestor) . '</a> / ';
                }
                echo $output;
                echo '<strong title="' . $title . '"> ' . $title . '</strong>';
            } else {
                echo '<strong> ' . get_the_title() . '</strong>';
            }
        }
    }
}

/*
 * Possible solution for Single Event page 404 errors where the WP_Query has an attachment set
 * IMPORTANT: Flush permalinks after pasting this code: http://tri.be/support/documentation/troubleshooting-404-errors/
 */
function tribe_attachment_404_fix () {
	if (class_exists('TribeEvents')) {
		remove_action( 'init', array( TribeEvents::instance(), 'init' ), 10 );
		add_action( 'init', array( TribeEvents::instance(), 'init' ), 1 );
	}
}
add_action( 'after_setup_theme', 'tribe_attachment_404_fix' );