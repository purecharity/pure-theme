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
				<p class="meta comments"><a href="<?php comments_link(); ?>" class="comments"><?php comments_number('0 Comments', '1 Comment', '% Comments', 'number'); ?></a></p>
			</div>
		<div class="row nopadrow">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="post-body col span_24 clr">
							<?php the_post_thumbnail( 'image-single' ); ?>		
							<?php the_content('Read the rest of this entry &raquo;'); ?>
						</div>
						<footer>
						<?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?>
						<p class="meta categories">Categories: <?php the_category(',') ?></p>
						</footer>

						<?php comments_template( '', true ); ?>	
					<?php endwhile; else: ?>
					<?php _e('Sorry, no posts matched your criteria.'); ?>
					<?php endif; ?>
		</div>
			</article>
		</div><!-- end row-->
	</div> <!-- end container--> 
</div><!-- end wide container -->

<?php get_footer() ?>