<?php
/**
* Plugin Name: Ordering Pricing Tarification Display
* Plugin URI:
* Description: Plugin to reverse order from pricing and tarification displayed home_page
* Version: 1
* Author: LOUBEAU Alexandre
* Author URI:
**/

// Fonction pour charger les scripts
function load_custom_scripts() {
    // Enregistrement du script
    wp_enqueue_script('pricing-tarification-order', plugin_dir_url(__FILE__) . 'js/app.js', '0.1', 'defer');
}

// Hook pour charger les scripts
add_action('wp_enqueue_scripts', 'load_custom_scripts');
