<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Dolor is an independent design studio led by Jimi Filipovski. We focus on collaboration early on to help grow brands and craft compelling stories.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
     <script src="//use.typekit.net/nbx6ipn.js"></script>
     <script>try{Typekit.load();}catch(e){}</script>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="onepcssgrid-1200">
            <header class="group">
                <div class="onerow">
                    <div class="col4">
                        <h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Dolor</a></h1>
                    </div>
                    <div class="col2">
                        <nav class="mainNav">
                           <?php wp_nav_menu( array('menu' => 'Top_Nav', 'menu_id' => '', 'menu_class' => '', 'container' => '' )); ?>
                        </nav>
                    </div>
                    <div class="col6 last">
                           <?php dynamic_sidebar('Header widget'); ?>     </div>
                </div>
            </header>