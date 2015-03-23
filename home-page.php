<?php
/*
Template Name: Home Page
*/
get_header();
?>

</head>

<body <?php body_class(); ?>>

<nav class="pushy pushy-right mobileshow">
 	<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'mobilemenu' ) ); ?>
</nav>
<div class="site-overlay"></div>

<div id="container">

<div class="wide-container home-head">
 
	<?get_template_part('inc/nav','dark');?>

	<?php while(the_flexible_field("home_banner_options")): ?>
  <?php if(get_row_layout() == "slider"): // layout: Main Content with bg image ?> 
		<div class="header-content">
		<ul class="bxslider slider-header">
			<?php if(get_sub_field('slider_images')): ?>
         <?php while(has_sub_field('slider_images')): ?>
            <li class="<?php the_sub_field('darkened_overlay'); ?>" style="background-image: url(<?php the_sub_field('image'); ?>);">	
							<div class="slide-content col span_18 centered">
							<h2><?php the_sub_field('slide_title');?> </h2>
							<p class="intro"><?php the_sub_field('slide_content');?> </p>
	 					</div>
						</li>    
          <?php endwhile; ?>
      <?php endif; ?>
		</ul>
		</div>
	<?php elseif(get_row_layout() == "single_image"): // layout: General Content with bg image ?> 
    <div class="header-content single-header-image <?php the_sub_field('darkened_overlay'); ?>" style="color:<?php the_sub_field('font_color'); ?>;background-image: url(<?php the_sub_field('image'); ?>);">
      <div class="container">
        <div class="row">
          <div class="col span_24 centered-section slide-content">
            <?php if( $general_title = get_sub_field('title') ){ ?>
                <h3 class="content-heading"><?php echo $general_title; ?></h3>
              <?php }?>
              <?php if( $general_content = get_sub_field('content') ){ ?>
                <p><?php echo $general_content; ?></p>
              <?php }?>
          </div>
        </div>
      </div>
    </div>
    
 	<?php endif; ?><!-- end flexible sections -->
	<?php endwhile; ?><!-- end flexible fields -->



	
</div>

<?php 
	get_template_part('inc/flexible','content');
	get_footer();
?>

<script>
	 $('.slider-header').bxSlider({
  		mode: 'fade',
		  minSlides: 1,
		  maxSlides: 1,
		  moveSlides: 0,
		  auto: true,
		  autoStart: true,
		  slideWidth: 0,
		  pager: true
	 }); 
</script>