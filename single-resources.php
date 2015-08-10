<?php 
	get_header(); 
	get_template_part('inc/nav','nohead');
?>

<div class="wide-container">
  <div class="row nopadrow">
    <div class="col span_24 centered noheaderimage">
        <h1><a href="<?php echo site_url(); ?>/resources">Resources</a></h1>
    </div>
  </div>
</div>

<div class="wide-container">
	<div class="container">
		<div class="row">
			<?php get_template_part ('inc/resources','tags');?>
			<div class="page-content col span_18 single-article">
			  	<h1><?php the_title();?></h1>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<a target="_blank" class="resource button large" href="<?php the_field('resource_download');?>">Download</a>		
				<?php the_content('Read the rest of this entry &raquo;'); ?>
					<p><?php echo get_the_term_list( $post->ID, 'resource-tag', '<span class="ss-icon ss-pika">tag</span> ', ', ' ); ?>
				<?php endwhile; else: ?>
				<?php _e('Sorry, no posts matched your criteria.'); ?>
				<?php endif; ?>
			</div>

		</div><!-- end row-->
	</div> <!-- end container--> 
</div><!-- end wide container -->

<?php get_footer() ?>