<?php

//function register_my_menu() {
	if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(array(
		  'main-menu' => 'Main Menu',
		  'toggle-menu' => 'Mobile Toggle Menu',
		  'footer-menu' => 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

function widgets_init() {	
	register_sidebar (array(
		'name' => __( 'Left Sidebar', 'widgets_init' ),
		'id' => 'left-front',
		'class' => 'one-third-left',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>' ));

	register_sidebar (array(
		'name' => __( 'Main Sidebar', 'widgets_init' ),
		'id' => 'main-front',
		'class' => 'one-third-middle',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>' ));

	register_sidebar (array(
		'name' => __( 'Right Sidebar', 'widgets_init' ),
		'id' => 'right-front',
		'class' => 'one-third-right last',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>' ));

	register_sidebar (array(
		'name' => __( 'First Top Sidebar', 'widgets_init' ),
		'id' => 'left-widget-top',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>' ));

	register_sidebar (array(
		'name' => __( 'Second middle Sidebar', 'widgets_init' ),
		'id' => 'left-widget-middle',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>' ));

	register_sidebar (array(
		'name' => __( 'Third bottom Sidebar', 'widgets_init' ),
		'id' => 'left-widget-bottom',	
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>' ));

}
add_action( 'init', 'widgets_init' );
