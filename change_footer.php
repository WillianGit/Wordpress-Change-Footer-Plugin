<?php
/**
 * Plugin Name: Change Footer
 * Description: Altera rodapé do blog
 * Version: 1.0
 * Author: Willian Pereira
 * Requires PHP: 7.2
 */
 
 // Função que altera o rodapé
 function plg_change_footer()
 {
	 echo 'Este rodapé foi alterado por Change Footer Plugin';
 }
 
 // Action que executa a função
 add_action('wp_footer', 'plg_change_footer');