<?php 
/*
Template Name: Full Width Page Template - No Header, No Title
*/
	get_header();
	get_template_part( 'head'); 
  get_template_part('inc/pageheader','notitle'); 
	get_template_part('inc/flexible','content'); 
	get_footer();
?>
