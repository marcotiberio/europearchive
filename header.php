<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package europe_archive
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link href="//db.onlinewebfonts.com/c/6fd7b3b855c698926b1fb22a720505ed?family=Berthold+Akzidenz+Grotesk+BE" rel="stylesheet" type="text/css"/>
	<link href="//db.onlinewebfonts.com/c/bc9fa02b4227255be2387a7e19a3e09b?family=Akkurat-Light" rel="stylesheet" type="text/css"/>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'europe-archive' ); ?></a> -->

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<img id="logoTitle" src="http://europearchive.eu/wp-content/uploads/2020/07/europearchive-logo-title.png" alt="" onclick="window.location.href='http://europearchive.eu'">
			<!-- <h1>Europe<br>Archive</h1> -->
		</div><!-- .site-branding -->
	</header><!-- #masthead -->
