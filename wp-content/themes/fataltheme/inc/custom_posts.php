<?php
add_action('init', 'criar_post_postagens');

function criar_post_postagens(){
  $labels = array(
    'name' => _x('Postagens', 'post type general name'),
    'singular_name' => _x('Postagem', 'post type singular name'),
    'add_new' => _x('Adicionar novo', 'Novo Post'),
    'add_new_item' => __('Novo Post'),
    'edit_item' => __('Editar Post'),
    'new_item' => __('Novo Post'),
    'search_items' => __('Procurar Post'),
    'not_found' => __('Nenhuma postagem encontrada'),
    'not_found_in_trash' => __('Nenhuma postagem na lixeira'),
    'menu_name' => 'Postagens'
  );

  $args = array(
    'label' => $labels,
    'public' => true,
    'public_queryable' => true,
    'show_ui'=> true,
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'has_archive' => true,
    'hierarchical' => false,
    'menu_position' => 'top',
    'register_meta_box_cb' => 'postagens_meta_box',
    'supports' => array('title', 'editor', 'thumbnail'),
    'show_in_rest' => true
  );

  register_post_type('postagens', $args);
  

}