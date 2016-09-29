<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package inova_trims
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title>Welcome to Inova Trims! - inovatrims.com</title>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Kompaniju INOVA TRIMS je izašla na tržište sa nekolkiko originalnih proizvoda. To su uređaji za zidne krevete za izradu kreveta svih vrsta i veličina.">
<meta name="keywords" content="Zidni krevet, bračni krevet, krevet na sprat, stambeni krediti, prodaja stanova, cene automobila, najnovije vesti, današnje novine, kurs evra, vremenska prognoza, kuhinje po meri, televizori, mobilni telefoni, banje, turističke agencije, letovanja, dečiji kreveti, oprema za hotele, oprema za apartmane, mehanizam za zidni krevet, Beograd, Novi Sad, krevet u plakaru, spavaća soba, dušeci, madraci, Ikea, dareks, Iverica, medijapan, forma ideale, oprema za hostele,">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
		</div><!-- .site-branding -->
			<div class="wrap-head">
				<div class="slick">
					<div></div>
					<div></div>
					<div></div>
				</div>
			</div>
			<div class="mobile-bg"><h1><span>inova</span> trims</h1></div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle is-active" aria-controls="primary-menu" aria-expanded="false">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
