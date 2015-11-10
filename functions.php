<?php

//function register_my_menus() {
  //register_nav_menus(
    //  array(
      //  'main-menu' => __('Main Menu'),
		//'mobile-menu' => __('Mobile Menu'),
        //'footer-menu' => __('Footer Menu')
        //)
      //);
//}

//Register custom menus
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-menu' => 'Main Menu',
		  'mobile-menu' => 'Mobile Menu',
		  'footer-menu' => 'Footer Menu'
		)
	);
}

add_action( 'init', 'register_my_menus' );

?>