<?php

/**
 *  Image code
 */

namespace Images;

\Images\register();

function register()
{
    add_theme_support( 'post-thumbnails', array( 'work', 'shop' ) );
    add_image_size( 'thumb-95x', 95, 95 );
    add_image_size( 'thumb-150x', 150, 150 );
    add_image_size( 'thumb-229x', 229, 229, TRUE );
    add_image_size( 'thumb-550x', 550, 550 );
}