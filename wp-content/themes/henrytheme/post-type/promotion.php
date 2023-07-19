<?php
if (!function_exists('register_post_type_promotion')) {
   // Register Custom Post Type
   function register_post_type_promotion()
   {

      $labels = array(
         'name'                  => _x('Promotions', 'Post Type General Name', 'henry'),
         'singular_name'         => _x('Promotion', 'Post Type Singular Name', 'henry'),
         'menu_name'             => __('Promotions', 'henry'),
         'name_admin_bar'        => __('Promotion', 'henry'),
         'archives'              => __('Item Archives', 'henry'),
         'attributes'            => __('Item Attributes', 'henry'),
         'parent_item_colon'     => __('Parent Item:', 'henry'),
         'all_items'             => __('All Items', 'henry'),
         'add_new_item'          => __('Add New Item', 'henry'),
         'add_new'               => __('Add New', 'henry'),
         'new_item'              => __('New Item', 'henry'),
         'edit_item'             => __('Edit Item', 'henry'),
         'update_item'           => __('Update Item', 'henry'),
         'view_item'             => __('View Item', 'henry'),
         'view_items'            => __('View Items', 'henry'),
         'search_items'          => __('Search Item', 'henry'),
         'not_found'             => __('Not found', 'henry'),
         'not_found_in_trash'    => __('Not found in Trash', 'henry'),
         'featured_image'        => __('Featured Image', 'henry'),
         'set_featured_image'    => __('Set featured image', 'henry'),
         'remove_featured_image' => __('Remove featured image', 'henry'),
         'use_featured_image'    => __('Use as featured image', 'henry'),
         'insert_into_item'      => __('Insert into item', 'henry'),
         'uploaded_to_this_item' => __('Uploaded to this item', 'henry'),
         'items_list'            => __('Items list', 'henry'),
         'items_list_navigation' => __('Items list navigation', 'henry'),
         'filter_items_list'     => __('Filter items list', 'henry'),
      );
      $args = array(
         'label'                 => __('Promotion', 'henry'),
         'description'           => __('Promotion Description', 'henry'),
         'labels'                => $labels,
         'supports'              => array('title', 'editor', 'thumbnail'),
         'taxonomies'            => array('category', 'post_tag'),
         'hierarchical'          => false,
         'public'                => true,
         'show_ui'               => true,
         'show_in_menu'          => true,
         'menu_position'         => 5,
         'show_in_admin_bar'     => true,
         'show_in_nav_menus'     => true,
         'can_export'            => true,
         'has_archive'           => true,
         'exclude_from_search'   => false,
         'publicly_queryable'    => true,
         'capability_type'       => 'page',
      );
      register_post_type('promotion', $args);
   }
   add_action('init', 'register_post_type_promotion', 0);
}
