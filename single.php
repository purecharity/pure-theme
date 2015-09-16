<?php 
	get_header(); 
	get_template_part('inc/nav','nohead');
?>

<div class="wide-container">
  <div class="row nopadrow">
    <div class="col span_24 centered noheaderimage">
        <h1>Blog</h1>
    </div>
  </div>
</div>

<div class="wide-container">
	<div class="container">
		<div class="row">
			<div class="page-content col span_18 single-article">
				<p class="meta date"><span class="ss-icon ss-pika">date</span><?php the_time('F j, Y'); ?><span class="author"><span class="ss-icon ss-pika">user</span>Posted by: <?php the_author_posts_link(); ?></span></p>
			  <h1><?php the_title();?></h1>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_post_thumbnail( 'image-square' ); ?>    

				<?php the_content('Read the rest of this entry &raquo;'); ?>
				<?php the_tags('<span class="tags"><span class="tags-title"><span class="ss-icon ss-pika">tag</span>Tags:</span> ', ', ', '</p>'); ?>
				<p class="categories"><span class="ss-icon ss-pika">pushpin</span>Categories: <?php the_category(',') ?></p>

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