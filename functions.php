<?php

function register_my_menu() {
  register_nav_menu('main', __('Main Menu'));
}
add_action( 'init', 'register_my_menu' );

?>