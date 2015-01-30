<article>
	<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
  <p class="meta date"><?php the_time('F j, Y'); ?></p>
  <?php the_post_thumbnail( 'image-single' ); ?>    
	<?php wpe_excerpt('wpe_excerptlength_index', 'wpe_excerptmore'); ?>			
</article>	