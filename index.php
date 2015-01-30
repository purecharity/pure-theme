<?php 
	get_header(); 
	get_template_part( 'head'); 
  get_template_part('inc/nav','dark');
?>

<div class="wide-container noheaderimage">    
  <div class="row nopadrow">
      <div class="col span_24 centered">
        <header>
        <h1>Blog</h1>
        </header>     
      </div>
    </div>
</div>

<div class="wide-container">
	<div class="container">
		<div class="row">
			<div class="page-content col span_18">
				<div class="articles-container">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'inc/content', 'article' ); ?>
					<?php endwhile; else: ?>
					<?php _e('Sorry, no posts matched your criteria.'); ?>
					<?php endif; ?>
				</div><!--end articles container -->
				<?php get_template_part( 'inc/feature', 'pagination' ); ?>
			</div>
			<?php get_sidebar()?>
		</div><!-- end row-->
	</div> <!-- end container--> 
</div>

<?php get_footer() ?>