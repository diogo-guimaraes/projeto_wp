<?php 

add_theme_support('menus');

function registrar_menu_principal(){
  register_nav_menu('menu_principal', 'Menu Principal');
}

function adicionar_class_li($classes, $item, $args){
  if (isset($args->add_li_class)){
    $classes[] = $args->add_li_class;
  }
  return $classes;
}

function adicionar_class_a($aclass){

  return preg_replace('/<a /', '<a class="nav-link"', $aclass);
}

add_filter('wp_nav_menu', 'adicionar_class_a');

add_filter('nav_menu_css_class', 'adicionar_class_li', 1, 3);

add_action('init', 'registrar_menu_principal');