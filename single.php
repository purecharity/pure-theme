<?php 
	get_header(); 
	get_template_part( 'head'); 
	get_template_part( 'inc/pageheader','noimage'); 
?>

<div class="wide-container">
	<div class="container">
		<div class="row nopadbottom">
			<div class="page-content span_24 clr">
				<p class="meta date">Posted by: <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?></p>
				<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
				<p class="meta categories">Categories: <?php the_category(',') ?></p>
			</div>
			
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="row nopadtop">
					<div class="post-body clr">
						<?php the_post_thumbnail( 'image-single' ); ?>		
						<?php the_content('Read the rest of this entry &raquo;'); ?>
					</div>
				</div>
				<div class="row comments-row">	
					<?php comments_template( '', true ); ?>	
				</div>
				<?php endwhile; else: ?>
				<?php _e('Sorry, no posts matched your criteria.'); ?>
				<?php endif; ?>
			</div>
			</article>
		</div><!-- end row-->
	</div> <!-- end container--> 
</div><!-- end wide container -->

<?php get_footer() ?>