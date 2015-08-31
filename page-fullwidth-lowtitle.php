<?php 
/*
Template Name: Full Width Page Template - Title in Body
*/
	get_header();
	get_template_part( 'head'); 
	get_template_part( 'inc/pageheader','image-bodytitle' ); 
?>

<div class="wide-container">
	<div class="container">
	<div class="row centered">
		<h1><?php the_title();?></h1>
    <?php if( $head_subtext = get_field('header_subtext') ){ ?>
      <?php echo $head_subtext; ?>
    <?php }?>
	</div>
	</div>
</div>

<?php
	get_template_part('inc/flexible','content'); 
	get_footer();
?>