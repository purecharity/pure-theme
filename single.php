<?php 
	get_header(); 
	get_template_part( 'head'); 
	get_template_part( 'inc/nav','dark');
?>

<div class="wide-container">
	<div class="container">
		<div class="row">
			<div class="page-content col span_18 clr">
			  <h1><?php the_title();?></h1>
				<p class="meta date">Posted by: <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?></p>
				<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
				<p class="meta categories">Categories: <?php the_category(',') ?></p>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_post_thumbnail( 'header' ); ?>		
				<?php the_content('Read the rest of this entry &raquo;'); ?>
				<div class="comments-row">	
					<?php comments_template( '', true ); ?>	
				</div>
				<?php endwhile; else: ?>
				<?php _e('Sorry, no posts matched your criteria.'); ?>
				<?php endif; ?>
			</div>
			<?php get_sidebar();?>

		</div><!-- end row-->
	</div> <!-- end container--> 
</div><!-- end wide container -->

<?php get_footer() ?>