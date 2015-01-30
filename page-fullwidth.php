<?php 
/*
Template Name: Full Width Page Template
*/
	get_header();
	get_template_part( 'head'); 
	get_template_part( 'inc/pageheader','image'); 
	get_template_part('inc/flexible','content'); 
	get_footer();
?>