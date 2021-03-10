<?php
/*
Plugin Name: MinuPlugin
Plugin URI:  https://maurischults.ikt.khk.ee/
Description: lisab lehe ules tervitusteksti
Version:     1.0
Author:      Mauri Schults
Author URI:  http://link to your website
License:     GPL2 etc
License URI: https://maurischults.ikt.khk.ee/
*/

//Add bar after the opening body
add_action('wp_body_open', 'tb_head');

function get_user_or_websitename()
{
    if( !is_user_logged_in() )
    {
        return 'to ' . get_bloginfo('name');
    }
    else
    {
        $current_user = wp_get_current_user();
        return $current_user -> user_login;
    }
}

function tb_head()
{
    echo '<h3 class="tb">Tere tulemast ' . get_user_or_websitename() .  '!</h3>';
}

//Add CSS to the top bar
add_action('wp_print_styles', 'tb_css');

function tb_css()
{
    echo '
        <style>
        h3.tb {color: #fff; margin: 0; padding: 30px; text-align: center; background: #b3b3ff}
        </style>
    ';
}