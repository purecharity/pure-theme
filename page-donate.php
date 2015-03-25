<?php 
/*
Template Name: Donate Page Template
*/
	get_header();
	get_template_part( 'head'); 
?>


<div class="wide-container page-head donate-template">
  <?get_template_part('inc/nav','dark');?>
  <div class="wide-container page-header donate-page overlayon" style="color:<?php the_field('page_header_text_color'); ?>;background-image: url(<?php if( get_post_meta($post->ID, "page_header", true) ): ?><?php the_field('page_header'); ?><?php else: ?><?php the_field('default_page_header', 'option'); ?><?php endif; ?>);">
  	<div class="container donatebody">
	  	<div class="row">
	  		<div class="col span_24 centered">
	         <h1><?php the_title();?></h1>
	      </div>
	    </div>
	    <div class="row nopadrow">
	      <div class="title col span_14 donateintro">
	        <?php the_field('donate_intro');?>
	      </div>
	      <div class="col span_10 donatebuttons">
	        <?php if(get_field('additional_donate_options')): ?>
	              <ul class="generaldonation">
	                <li><a class="general-donaton button large" href="<?php the_field('main_donate_button_link');?>"><?php the_field('main_donate_link_text');?></a></li>
	              </ul>
	              <ul class="donate-options">
	              <?php while(has_sub_field('additional_donate_options')): ?>
	                <li><a class="button" href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></li>
	              <?php endwhile; ?>
	              </ul>
	          <?php endif; ?>
	      </div>
	  	</div>
  	</div>
  </div>
</div>  

<?php get_footer(); ?>
