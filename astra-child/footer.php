<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

	<?php astra_content_bottom(); ?>

	</div> <!-- ast-container -->

	</div><!-- #content -->

	<?php astra_content_after(); ?>

	<?php astra_footer_before(); ?>

		<footer>
			<div class="footer__container">
				<div class="footer__top">
					<div class="footer__top--one footer__panel">
						<div class="footer__identity">
							<a href="https://linen.noemie-dufourd-portfolio.fr/"><img src="https://linen.noemie-dufourd-portfolio.fr/wp-content/uploads/2020/09/logo-linen-footer.png" /></a>
							<p class="footer__linen">LinEn</p>
						</div>
						<div class="footer__coordonates">
							<p class="footer-title">Coordonnées</p>
							<p>123, route des Bois Fleuris<br />27000 Évreux</p>
							<p>Téléphone : <a href="tel:02.35.50.50.50">02.35.50.50.50</a></p>
							<p>E-mail : <a href="mailto:noemie@noemie-dufourd-portfolio.fr">contact@linen.fr</a></p>
						</div>
					</div>
					<hr />
					<div class="footer__top--two footer__panel">
						<p class="footer-title">Informations pratiques</p>
						<p><a href="https://linen.noemie-dufourd-portfolio.fr/conditions-generales-d-utilisation">Mentions légales & CGU</a></p>
						<p><a href="https://linen.noemie-dufourd-portfolio.fr/conditions-generales-de-ventes">CGV</a></p>
						<p><a href="https://linen.noemie-dufourd-portfolio.fr/contact">Contact</a></p>
						<p><a href="https://linen.noemie-dufourd-portfolio.fr/plan-du-site">Plan du site</a></p>
					</div>
					<hr />
					<div class="footer__top--three footer__panel">
						<div class="footer__newsletter">
							<p>Recevez notre newsletter</p>
							<a href="https://linen.noemie-dufourd-portfolio.fr/#abonnement-newsletter"><button>Inscription</button></a>
						</div>
						<div class="footer__follow">
							<p>Suivez-nous sur les réseaux</p>
							<div class="follow-icons">
								<a href="#"><img src="https://linen.noemie-dufourd-portfolio.fr/wp-content/uploads/2020/09/logo-facebook.png" /></a>
								<a href="#"><img src="https://linen.noemie-dufourd-portfolio.fr/wp-content/uploads/2020/09/logo-twitter.png" /></a>
							</div>
						</div>
					</div>
				</div>
				<hr />
				<div class="footer__bottom">
					<p>Copyright &copy LinEn 2020 | Réalisé par Noémie Dufourd</p>
				</div>
			</div>
		</footer>

	<?php wp_footer(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178446923-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-178446923-1');
	</script>

	</body>
</html>
