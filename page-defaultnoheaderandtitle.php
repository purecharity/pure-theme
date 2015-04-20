<?php 
	/*
		Template Name: Default Template - No Header
	*/
	get_header();
	get_template_part( 'head'); 
  get_template_part('inc/pageheader','noimage'); 
?>

	<div class="wide-container">
		<div class="container">
			<div class="row">
				<div class="page-content col span_24">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="post-body">
						<?php the_content('Read the rest of this entry &raquo;'); ?>
					</div>
					<?php endwhile; else: ?>
					<?php _e('Sorry, no posts matched your criteria.'); ?>
					<?php endif; ?>
				</div>
			</div><!-- end row-->
		</div> <!-- end container-->
	</div> 

<?php get_footer(); ?>