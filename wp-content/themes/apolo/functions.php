<?php
add_theme_support('post-thumbnails');

function enregistre_mon_menu()
{
    register_nav_menu('menu_principal', __('Menu principal'));
}
add_action('init', 'enregistre_mon_menu');


function wpm_myme_types($mime_types)
{
    $mime_types['mp4'] = 'video/mp4';
}
return $mime_types;
add_filter('upload_mimes', 'wpm_myme_types', 1, 1);
