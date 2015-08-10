<?php

// REGISTER TAXONOMY SAMPLE

  function be_register_restag_taxonomy() {
   $labels = array(
     'name' => 'Tags',
     'singular_name' => 'Tag',
     'search_items' =>  'Search Tags',
     'all_items' => 'All Tags',
     'parent_item' => 'Parent Tag',
     'parent_item_colon' => 'Parent Tag:',
     'edit_item' => 'Edit Tag',
     'update_item' => 'Update Tag',
     'add_new_item' => 'Add New Tag',
     'new_item_name' => 'New Tag Name',
     'menu_name' => 'Tags'
   );  

   register_taxonomy( 'resource-tag', array('resources'), 
     array(
       'hierarchical' => true,
       'labels' => $labels,
       'show_ui' => true,
       'query_var' => true,
       'rewrite' => array( 'slug' => 'resource-tag' ),
     )
   );
 }
 add_action( 'init', 'be_register_restag_taxonomy' );

 ?>