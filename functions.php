<?php

function register_my_menus() {
  register_nav_menus(
      array(
        'main-menu' => __('Main Menu'),
		'mobile-menu' => __('Mobile Menu'),
        'footer-menu' => __('Footer Menu')
        )
      );
}
add_action( 'init', 'register_my_menus' );

?>