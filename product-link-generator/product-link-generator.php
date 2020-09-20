<?php

/**
* Plugin Name: Product Link CTA Generator
* Description: Pour afficher le texte + bouton menant à votre fiche produit, intégrer le shortcode [product-cta id="xxx"] sur la page / l'article souhaité. Remplacer xxx par l'identifiant de votre produit. Des informations détaillées sont fournies dans la notice techniques à la rubrique "Extension personnalisée"
* Version: 1.0.0
* Author: Noémie Dufourd
* Author URI: noemie-dufourd-portfolio.fr
* License: GPLv2
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) || die;

add_shortcode('product-cta','action_button_shortcode');

	function action_button_shortcode($atts){
		extract(shortcode_atts(array('title'=>'Aller à la page du produit','text'=>'Page Produit','id'=>''),$atts));
		$link = get_permalink($id);
		return '<div class="nono_shortcode_container"><p class="nono_shortcode_title">'.$title.'</p><button class="nono_shortcode_button"><a href="'.$link.'"><span class="nono_shortcode_text">'.$text.'</span></a></button></div>';
}
?>