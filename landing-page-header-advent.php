<?php
/*
 * Template Name: Advent
 */
  
   ?>
<?php
/**
 * The Header
 *
 * Displays all of the <head> section and everything up till <main>
 *
 * @package Fluida
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php cryout_meta_hook(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php
	cryout_header_hook();
	wp_head();
?>
</head>

<body <?php body_class(); cryout_schema_microdata( 'body' );?>>
	<?php cryout_body_hook(); ?>

	<header id="masthead" class="cryout" <?php cryout_schema_microdata( 'header' ) ?> role="banner">

		<div id="site-header-main">
			<div id="site-header-main-inside">

				<nav id="mobile-menu">
					<span id="nav-cancel"><i class="blicon-cross3"></i></span>
					<?php cryout_mobilemenu_hook(); ?>
				</nav> <!-- #mobile-menu -->

				<div id="branding">
					<!--<?php cryout_branding_hook();?>-->
					<a href="http://www.norahelmer.no" ><div id="custom-site-title"><p>DOLLHOUSE</p></div></a>
					
				</div><!-- #branding -->
				<span id="branding-custom-quote"> 
					<!--<p>- Livet i et funkisdukkehus på beste vestkant</p>-->
					    <p>- Happiness is the little things in life</p>
				</span>

				<?php cryout_header_socials_hook();?>

				<a id="nav-toggle"><span>&nbsp;</span></a>
				<nav id="access" role="navigation"  aria-label="Primary Menu" <?php cryout_schema_microdata( 'menu' ); ?>>
					<?php cryout_access_hook();?>
				</nav><!-- #access -->

			</div><!-- #site-header-main-inside -->
			
		</div><!-- #site-header-main -->

		<div id="header-image-main">
			<div id="header-image-main-inside">
				<?php cryout_headerimage_hook(); ?>
			</div><!-- #header-image-main-inside -->
			<div id="header-image-div" >		
				<img id="header-image" class="aligncenter" src="http://www.norahelmer.no/wp-content/uploads/2017/11/IMG_7069.jpg">		
				<!--<div class="header-title-text-box">
					<h1> NORA HELMER </h1>
					<h6>Eksfrue</h6>
				</div>-->
                <div class="header-title-text-box-advent">
                    <h2>Noras julekalender</h2>
                    <h6>24 stalltips for å komme seg igjennom advent</h6>
                </div>
			</div>
			
		</div><!-- #header-image-main -->

	</header><!-- #masthead -->

	<?php cryout_breadcrumbs_hook();?>

	<div id="content" class="cryout">
		<?php cryout_main_hook(); ?>
