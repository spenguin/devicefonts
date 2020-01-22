<?php
/**
 * Widgets code
 */

require_once CORE_INC . 'widgets/header-tagline.php';

register();

function register()
{
    add_action( 'widgets_init', 'register_header_Tagline_Widget' );
    register_sidebar( [
        'name'  => 'Header Tagline Area',
        'id'    => 'header-tagline-area',
        'before_widget' => '<div class="header-tagline-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="header-tagline-widget_heading">',
        'after_title'   => '</h2>'
    ]);
}





function register_header_Tagline_Widget()
{
    register_widget( 'header_Tagline_Widget' );
}

/*
function rh_widgets_init()
{
    register_sidebar( [
        'name'  => 'Header Tagline Area',
        'id'    => 'header-tagline-area',
        'before_widget' => '<div class="header-tagline-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="header-tagline-widget_heading">',
        'after_title'   => '</h2>'
    ]);
}*/