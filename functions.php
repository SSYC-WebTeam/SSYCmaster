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
		'name' => __( 'Top Sidebar', 'widgets_init' ),
		'id' => 'widget-top',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>' ));

	register_sidebar (array(
		'name' => __( 'Middle Sidebar', 'widgets_init' ),
		'id' => 'widget-middle',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>' ));

	register_sidebar (array(
		'name' => __( 'Bottom Sidebar', 'widgets_init' ),
		'id' => 'widget-bottom',	
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
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
				echo " » ";
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