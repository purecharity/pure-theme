<?php 
	get_header(); 
	get_template_part( 'head'); 
?>

<div class="wide-container page-head">
  <?get_template_part('inc/nav','dark');?>
  <div class="wide-container page-header <?php the_field('blog_overlay', 'option'); ?>" style="color:<?php the_field('page_header_text_color'); ?>;background-image: url(<?php if( get_post_meta($post->ID, "page_header", true) ): ?><?php the_field('page_header'); ?><?php else: ?><?php the_field('blog_landing_header', 'option'); ?><?php endif; ?>);">
    <div class="row nopadrow">
      <div class="col span_24 centered page-header-content">
          <h1>Blog</h1>
      </div>
    </div>
  </div>
</div>  

<div class="wide-container">
	<div class="container">
		<div class="row nopadrow">
      <div class="page-content col span_18 articles-container">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="article">
           <?php get_template_part('inc/content','article'); ?> 
        </div>
				<?php endwhile; else: ?>
				<?php _e('Sorry, no posts matched your criteria.'); ?>
				<?php endif; ?>
        <div class="row">
  		    <?php get_template_part( 'inc/feature', 'pagination' ); ?>
        </div>
      </div>
      <?php get_sidebar();?>
    </div><!-- end row-->
	</div> <!-- end container--> 
</div>

<?php get_footer() ?>