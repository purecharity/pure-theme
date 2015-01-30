<?php

// REGISTER TAXONOMY SAMPLE

  function be_register_sample_taxonomy() {
   $labels = array(
     'name' => 'Note Series',
     'singular_name' => 'Series',
     'search_items' =>  'Search Series',
     'all_items' => 'All Series',
     'parent_item' => 'Parent Series',
     'parent_item_colon' => 'Parent Series:',
     'edit_item' => 'Edit Series',
     'update_item' => 'Update Series',
     'add_new_item' => 'Add New Series',
     'new_item_name' => 'New Series Name',
     'menu_name' => 'Series'
   );  

   register_taxonomy( 'taxonomy-sample', array('sample'), 
     array(
       'hierarchical' => true,
       'labels' => $labels,
       'show_ui' => true,
       'query_var' => true,
       'rewrite' => array( 'slug' => 'taxonomy-sample' ),
     )
   );
 }
 add_action( 'init', 'be_register_sample_taxonomy' );

 ?>