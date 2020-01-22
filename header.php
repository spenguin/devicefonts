<?php
/**
 *
 * @package WordPress
 * @subpackage Rian Hughes
 * @since Rian Hughes 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.min.css" />
    <!--<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--> 
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo site_url(); ?>/wp-content/themes/rianhughes/css/style.css" >
    
    <!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
    <![endif]-->
    <style>
        .subtitle span { float: left; }
        .tagline { display: none; float: left; }
        .logo-display {
            width: 75px;
            height: 75px;
            position: fixed;
            margin-left: -100px;
            margin-top: 30px;
        }
        .logo-display img {
            width: 100%;
            height: 100%;
        }
        header .container {
            position: relative;
        }
    </style>
    <script>
        var availableFontSets   = <?php echo json_encode( get_available_font_sets() ); ?>;
    </script>
    <?php get_available_font_sets(); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">
        <nav class="nav">
            <div class="container">
                <div class="menu-secondary">
                <?php wp_nav_menu( ['menu' => 'Secondary Menu'] ); ?>
                </div>
                <div class="menu-header">
    <!--                <a href="/" class="logo"><img src="<?php echo CORE_TEMPLATE_URL; ?>/assets/device-logo.svg" /></a>-->
                    <?php wp_nav_menu( ['menu' => 'Header Menu'] ); ?>
                </div>
                <div class="menu-mobile">
                    <a href="/" class="logo"><img src="<?php echo CORE_TEMPLATE_URL; ?>/assets/device-logo.svg" /></a>
                    <input class="menu-btn" type="checkbox" id="menu-btn" />
                    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                    <?php wp_nav_menu( ['menu' => 'Mobile Menu'] ); ?>
                </div>
            </div>
        </nav>
        <header>
            <div class="container">
                <div class="logo-display">
                    <a href="/" class="logo"><img src="<?php echo CORE_TEMPLATE_URL; ?>/assets/device-logo.svg" /></a>
                </div>
                <?php include( CORE_TEMPLATES . '/partials/taglines.php' ); ?>
            </div>
        </header>
        <main>