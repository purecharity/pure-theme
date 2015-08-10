<?php

 
// Register Sample Post Type

  function be_register_resources_post_type() {
   $labels = array(
     'name' => 'Resource',
     'singular_name' => 'Resource',
     'add_new' => 'Add New Resource',
     'add_new_item' => 'Add New Resource',
     'edit_item' => 'Edit Resource',
     'new_item' => 'New Resource',
     'view_item' => 'View Resource',
     'search_items' => 'Search Resources',
     'not_found' =>  'No Resources found',
     'not_found_in_trash' => 'No Resources found in trash',
     'parent_item_colon' => '',
     'menu_name' => 'Resources'
   );
  
   $args = array(
     'labels' => $labels,
     'public' => true,
     'publicly_queryable' => true,
     'show_ui' => true, 
     'show_in_menu' => true, 
     'query_var' => true,
     'rewrite' => true,
     'capability_type' => 'post',
     // 'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
     //'menu_icon' => get_stylesheet_directory_uri() . '/library/images/custom-post-icon.png', /* the icon for the custom post type menu */
	 'rewrite'	=> array( 'slug' => 'resources', 'with_front' => false ), /* you can specify its url slug */   
	 'has_archive' => 'resources', /* you can rename the slug here */
     'hierarchical' => false,
     'menu_position' => null,
	 'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'sticky')
  ); 

   register_post_type( 'resources', $args );
 }
 add_action( 'init', 'be_register_resources_post_type' ); 


?>