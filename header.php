<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom/creativecommons.css">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/custom/ch.css">
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<header> 
		<div class="topbar">
			<div class="topbar-inner">
				<div class="container">
				<a id="skip-navigation" href="#main" title="Skip Navigation">Skip Navigation</a>
				<a href="http://creativecommons.org" title="Home"><span id="home-link">Home</span><span id="home-button"></span></a>
				<div id="logo"><span>Creative Commons</span></div>
					<ul id="short-menu" class="nav">
						<li class="dropdown">
							<a href="#about" class="dropdown-toggle">Menu</a>
								<ul class="menu-dropdown">
									<?php wp_list_pages('post_type=page&depth=1&sort_column=menu_order&title_li='); ?>
								</ul>
						</li>
					</ul>
					<ul id="wide-menu" class="nav">
						<?php wp_list_pages('post_type=page&depth=1&sort_column=menu_order&title_li='); ?>
					</ul>
					<form action="https://creativecommons.org" id="search_form">
						<input type="hidden" name="stype" value="site" id="find_site">
						<input type="text" name="q" placeholder="Site Search">
						<input type="submit" id="glass" title="Search" value="Submit">
					</form>
				</div>
			</div>
		</div>
		</header>

		<div id="main" class="site-main">
