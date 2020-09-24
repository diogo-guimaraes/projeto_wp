<?php

add_action('wp_enqueue_scripts', 'fatal_estilos');

function fatal_estilos(){

  wp_register_style('estilo', PASTA_TEMA . 'assets/css/estilo.css');
  wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

  wp_enqueue_style('bootstrap');
  wp_enqueue_style('estilo');

}