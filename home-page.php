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
 
<div class="wide-container">
	<?php if(get_field('home_slider')): ?>
	<div class="header-content col span_24 centered">	
		<ul class="bxslider slider-header">
			<?php while(has_sub_field('home_slider')): ?>
				<li style="background-image: url(<?php the_sub_field('image'); ?>);">	
					<div class="slide-content col span_18 centered">
						<h2><?php the_field('slider_title');?> </h2>
						<p class="intro"><?php the_field('slider_subtitle');?> </p>
	 				</div>
				</li>
			<?php endwhile; ?>
		</ul>
	</div>
	<?php endif; ?>
</div>

<?php 
	get_template_part('inc/nav','dark');
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