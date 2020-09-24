<?php

define('PASTA_TEMA', get_bloginfo('template_url') . '/' );
define('NOME_SITE', get_bloginfo('name'));
define('URL', get_bloginfo('url'));

add_action('login_header', 'alterar_logo');

function alterar_logo(){
  echo '<style>
    body.login div#login h1 a {
      background-image: url("http://localhost/aula_wp/wp-content/uploads/2020/09/logopna.jpg.jpg");
    }
  </style>';
}

add_filter('login_headerurl', 'trocar_url');

function trocar_url(){
  return 'google.com';
}


require __DIR__ . '/inc/assets.php';
require __DIR__ . '/inc/gestao.php';
require __DIR__ . '/inc/menu.php';