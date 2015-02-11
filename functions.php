<?php

// Includes our custom taxonomies
require_once(__DIR__ . '/lib/taxonomies.php');

// Includes our custom post types
// require_once(__DIR__ . '/lib/post-types.php');

// Includes our custom widgets
require_once(__DIR__ . '/lib/widgets.php');

// Includes required plugins file
require_once dirname( __FILE__ ) . '/lib/plugins.php';

// Includes our meta boxes
//require_once(__DIR__ . '/lib/meta-boxes.php');

// Includes our admin funtions
require_once(__DIR__ . '/lib/admin.php');

function pure_enqueue_scripts() {
// Register some often used Scripts

    wp_register_style( 'ss-pika', get_template_directory_uri() . '/fonts/symbolset/ss-pika.css', array(), '', 'all' );
    wp_register_style( 'ss-social', get_template_directory_uri() . '/fonts/ss-social-circle/ss-social-circle.css', array(), '', 'all' );
   
   // register da scripts that we often use
      wp_deregister_script('jquery');
      wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js', false, '1.8.3');
      wp_register_script( 'modernizer', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', array(), true );
      wp_register_script( 'themejs', get_template_directory_uri() . '/js/theme.js', array(), true );
      wp_register_script( 'pin', get_template_directory_uri() . '/js/pin.js', array(), true,'1.0',true,true );
      wp_register_script( 'ss-social-circle-js', get_template_directory_uri() . '/fonts/ss-social-circle/ss-social.js', array(), true,'1.0',true,true );
      wp_register_script( 'ss-pika-js', get_template_directory_uri() . '/fonts/symbolset/ss-pika.js', array(), true,'1.0',true,true );
      wp_register_script( 'pushy', get_template_directory_uri() . '/js/pushy.js', array(), true,'1.0',true,true );
      wp_register_script( 'bxjs', get_template_directory_uri() . '/js/jquery.bxslider.js', array(), true,true );
 
   // enqueue da scripts
      wp_enqueue_style('ss-social');
      wp_enqueue_style('ss-pika');

      wp_enqueue_script( 'jquery' );
      wp_enqueue_script( 'modernizer' );
      wp_enqueue_script( 'themejs' );
      wp_enqueue_script( 'pin' );
      wp_enqueue_script( 'pushy' );
      wp_enqueue_script( 'bxjs' );
      wp_enqueue_script( 'ss-pika-js' );

      wp_enqueue_script( 'ss-social-circle' );
}

add_action('wp_enqueue_scripts', 'pure_enqueue_scripts');


// Add RSS links to the header
  add_theme_support('automatic-feed-links');

// Add a few different custom excerpt lengths

// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
  return '<p><a class="moretag" href="'. get_permalink($post->ID) . '"> Read More</a></p>';
}
add_filter('excerpt_more', 'new_excerpt_more');

 // Add some featured images and sizes

 if ( function_exists( 'add_theme_support' ) ) {
 add_theme_support( 'post-thumbnails' );
 set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

 // additional image sizes
 // delete the next line if you do not need additional image sizes
 add_image_size( 'image-small', 150, 9999 ); // 150 pixels wide (and unlimited height)
 add_image_size( 'image-blog', 200, 200, true ); // 400 pixels wide (and unlimited height)
 add_image_size( 'image-square', 200, 200, true ); // 400 pixels wide (and unlimited height)
 add_image_size( 'image-single', 400, 9999 ); // 400 pixels wide (and unlimited height)
 add_image_size( 'grid-sidebyside', 463, 300, array( 'middle', 'center' )  ); // for the side by side images in the grid layout
 add_image_size( 'grid-large', 950, 9999, true ); // For the large image in the grid
 add_image_size( 'grid-wide', 960, 300, array( 'middle', 'center' )  ); // For the three image block section
 add_image_size( 'header', 1299, 9999 ); // Sized to fit the headers
 add_image_size( 'videoembedsize', 460, 280, true ); // 460 wide 280 tall cropped / we use this next to size next to youtube videos

 }

 // Get rid of self-pings
 function no_self_ping( &$links ) {
     $home = get_option( 'home' );
     foreach ( $links as $l => $link )
         if ( 0 === strpos( $link, $home ) )
             unset($links[$l]);
 }
 add_action( 'pre_ping', 'no_self_ping' );

// LETS CREAT A FUNCTION FOR THE SUBNAV
if(!function_exists('get_post_top_ancestor_id')){
/**
 * Gets the id of the topmost ancestor of the current page. Returns the current
 * page's id if there is no parent.
 *
 * @uses object $post
 * @return int
 */
function get_post_top_ancestor_id(){
    global $post;

    if($post->post_parent){
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }

    return $post->ID;
}}

?>
