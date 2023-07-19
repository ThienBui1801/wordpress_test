<?php
if (!function_exists('register_post_type_brand')) {
   // Register Custom Post Type
   function register_post_type_brand()
   {

      $labels = array(
         'name'                  => _x('Brands', 'Brand General Name', 'henry'),
         'singular_name'         => _x('Brand', 'Brand Singular Name', 'henry'),
         'menu_name'             => __('Brands', 'henry'),
         'name_admin_bar'        => __('Brand', 'henry'),
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
         'has_archive'           => true,
         'rewrite'               => ['slug' => 'brand'],
      );
      $args = array(
         'label'                 => __('Brand', 'henry'),
         'description'           => __('Brand Description', 'henry'),
         'labels'                => $labels,
         'supports'              => array('title', 'editor', 'thumbnail'),
         'taxonomies'            => array('brand_cat', 'post_tag'),
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
         'rewrite'           => array('slug' => 'brand'),
         'capability_type'       => 'page',
         'show_in_rest'          => true,
      );
      register_post_type('brand', $args);
   }
   add_action('init', 'register_post_type_brand', 0);
}

if (!function_exists('register_brand_cat')) {
   // Register Custom Taxonomy
   function register_brand_cat()
   {

      $labels = array(
         'name'                       => _x('Categories', 'Taxonomy General Name', 'henry'),
         'singular_name'              => _x('Category', 'Taxonomy Singular Name', 'henry'),
         'menu_name'                  => __('Category', 'henry'),
         'all_items'                  => __('All Items', 'henry'),
         'parent_item'                => __('Parent Item', 'henry'),
         'parent_item_colon'          => __('Parent Item:', 'henry'),
         'new_item_name'              => __('New Item Name', 'henry'),
         'add_new_item'               => __('Add New Item', 'henry'),
         'edit_item'                  => __('Edit Item', 'henry'),
         'update_item'                => __('Update Item', 'henry'),
         'view_item'                  => __('View Item', 'henry'),
         'separate_items_with_commas' => __('Separate items with commas', 'henry'),
         'add_or_remove_items'        => __('Add or remove items', 'henry'),
         'choose_from_most_used'      => __('Choose from the most used', 'henry'),
         'popular_items'              => __('Popular Items', 'henry'),
         'search_items'               => __('Search Items', 'henry'),
         'not_found'                  => __('Not Found', 'henry'),
         'no_terms'                   => __('No items', 'henry'),
         'items_list'                 => __('Items list', 'henry'),
         'items_list_navigation'      => __('Items list navigation', 'henry'),
      );
      $args = array(
         'labels'                     => $labels,
         'hierarchical'               => true,
         'public'                     => true,
         'show_ui'                    => true,
         'show_admin_column'          => true,
         'show_in_nav_menus'          => true,
         'show_tagcloud'              => true,
         'show_in_rest'               => true,
      );
      register_taxonomy('brand_cat', array('brand'), $args);
   }
   add_action('init', 'register_brand_cat', 0);
}
