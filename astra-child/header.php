<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?><!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>
<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>
<div
	<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
	>
	<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?></a>
	<?php astra_header_before(); ?>
	<?php astra_header(); ?>
	<nav class="shop-nav">
		<ul class="nav__menu">
			<li><a href="https://linen.noemie-dufourd-portfolio.fr/boutique/">Boutique</a></li>
			<li><a href="https://linen.noemie-dufourd-portfolio.fr/categorie-produit/diy/"><img src="https://linen.noemie-dufourd-portfolio.fr/wp-content/uploads/2020/09/icone-new.png" />DIY</a></li>
			<li class="nav__menu--rotate"><a href="https://linen.noemie-dufourd-portfolio.fr/categorie-produit/la-literie/">La Literie <img class="menu-arrow" src="https://linen.noemie-dufourd-portfolio.fr/wp-content/uploads/2020/09/arrow-right.png" /></a>
				<ul class="nav__submenu">
					<li><a href="https://linen.noemie-dufourd-portfolio.fr/produit/housse-de-couette/">Housse de couette</a></li>
					<li><a href="https://linen.noemie-dufourd-portfolio.fr/produit/drap-housse/">Drap housse</a></li>
					<li><a href="https://linen.noemie-dufourd-portfolio.fr/produit/drap-plat/">Drap plat</a></li>
					<li><a href="https://linen.noemie-dufourd-portfolio.fr/produit/taie-doreiller/">Taie d'oreiller</a></li>
				</ul>
			</li>
			<li class="nav__menu--rotate"><a href="https://linen.noemie-dufourd-portfolio.fr/categorie-produit/le-linge-de-table/">Le Linge De Table <img class="menu-arrow" src="https://linen.noemie-dufourd-portfolio.fr/wp-content/uploads/2020/09/arrow-right.png" /></a>
				<ul class="nav__submenu">
					<li><a href="https://linen.noemie-dufourd-portfolio.fr/produit/nappes/">Nappe</a></li>
					<li><a href="https://linen.noemie-dufourd-portfolio.fr/produit/serviette-de-table/">Serviette</a></li>
					<li><a href="https://linen.noemie-dufourd-portfolio.fr/produit/set-de-table/">Set de Table</a></li>
				</ul>
			</li>
			<li class="nav__menu--rotate"><a href="https://linen.noemie-dufourd-portfolio.fr/categorie-produit/la-deco/">La Déco <img class="menu-arrow" src="https://linen.noemie-dufourd-portfolio.fr/wp-content/uploads/2020/09/arrow-right.png" /></a>
				<ul class="nav__submenu">
					<li><a href="https://linen.noemie-dufourd-portfolio.fr/produit/rideaux/">Rideaux</a></li>
					<li><a href="https://linen.noemie-dufourd-portfolio.fr/produit/tapis/">Tapis</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<?php astra_content_before(); ?>
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>
