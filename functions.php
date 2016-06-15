<?php
  function custom_banner() {
    $labels = array(
      'name'               => _x( 'Banner', 'post type general name' ),
      'singular_name'      => _x( 'Banner', 'post type singular name' ),
      'add_new'            => _x( 'Add New', 'banner' ),
      'add_new_item'       => __( 'Add New Banner' ),
      'edit_item'          => __( 'Edit Banner' ),
      'new_item'           => __( 'New Banner' ),
      'all_items'          => __( 'All Banners' ),
      'view_item'          => '',
      'search_items'       => '',
      'not_found'          => '',
      'not_found_in_trash' => '',
      'parent_item_colon'  => '',
      'menu_name'          => 'Banners'
    );

    $args = array(
      'labels'        => $labels,
      'description'   => 'Home Page Super Oeste Banners',
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
      'has_archive'   => true,
    );
    register_post_type( 'banner', $args );
  }
  add_action( 'init', 'custom_banner' );


  function register_my_menus() {
    register_nav_menu('main-menu', __('Main Menu'));
  }
  add_action( 'init', 'register_my_menus' );

?>
