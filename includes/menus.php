<?php
/**
 * Menus code
 */

namespace Menus;

add_action( 'after_setup_theme', '\Menus\register_custom_nav_menus' );

function register_custom_nav_menus() 
{
	register_nav_menus( array(
        'main_menu'     => 'Main Menu',
        'header_menu'   => 'Header Menu',
        'secondary_menu'=> 'Secondary Menu',
        'mobile_menu'   => 'Mobile Menu',
        'departments_menu'   => 'Departments Menu',
        'work_menu'     => 'Work Menu'
	) );
}