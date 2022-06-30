<?php

/**
 * @package Infos
 * @version 1.0.0
 */
/*
Plugin Name: Infos Plugin
Plugin URI: http://localhost/Coding/wordpress/
Description: PLugin d'affichage des information personnelles.
Author: Matthieu de Cournuaud
Version: 1.0
Author URI: localhost/Coding/wordpress
*/
add_action('wp_loaded', 'my_front_end_function');
function my_front_end_function()
{
    if (!is_admin()) {
        echo ('<div id="message-de-bienvenue">
        <p class="message-de-bienvenue">Bienvenue sur mon Portfolio, ici vous allez découvrir quelques projets que j\'ai réalisé. Bonne visite !</p>
        </div>');
    }
    //rajouter un champ coté admin pour rajouter texte dynamiquement
}

add_action('admin_menu', 'custom_backoffice');
function custom_backoffice()
{
    // global $menu;
    // $restricted = array(__('Comments'), __('Media'), __('Plugins'), __('Tools'), __('Users'));
    // end($menu);
    // while (prev($menu)) {
    //     $value = explode('', $menu[key($menu)][0]);
    //     if (in_array($value[0] != NULL ? $value[0] : '', $restricted)) {
    //         unset($menu[key($menu)]);
    //     }
    // }
    remove_menu_page('theme.php');
}
