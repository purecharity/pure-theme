<?php 
/*
Template Name: Full Width Page Template - No Header 
*/
	get_header();
	get_template_part( 'head'); 
  get_template_part('inc/pageheader','noimage'); 
	get_template_part('inc/flexible','content'); 
	get_footer();
?>

<?php var_dump($sponsorships);?>
