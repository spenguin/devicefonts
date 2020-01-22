<?php
/**
 * Enqueue scripts
 */
/*
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>*/

namespace Scripts;

\Scripts\register();

function register()
{
    add_action( 'wp_enqueue_scripts', 'Scripts\add_theme_scripts' );
}

function add_theme_scripts()
{
    wp_enqueue_style( 'jquery_ui_css', '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css' );
    wp_enqueue_script( 'jquery_ui_js', 'https://code.jquery.com/ui/1.12.1/jquery-ui.js', ['jquery'] );
    wp_enqueue_script( 'device.js', CORE_TEMPLATE_URL . '/js/device.js', ['jquery', 'jquery_ui_js'], NULL, TRUE );
}