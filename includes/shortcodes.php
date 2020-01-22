<?php

/**
 * Create the Shortcodes
*/

namespace Shortcodes;


\Shortcodes\register();

function register()
{
    // add_shortcode( 'fontseller-upload', 'createFontsellerUpload' );
    add_shortcode( 'bestsellers', '\Shortcodes\displayBestsellers' );
    add_shortcode( 'newfonts', '\Shortcodes\displayNewFonts' );
}

function displayBestsellers()
{

}

function displayNewFonts()
{

}