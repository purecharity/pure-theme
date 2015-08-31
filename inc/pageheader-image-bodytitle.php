<div class="wide-container page-head">
  <?get_template_part('inc/nav','dark');?>
  <div class="wide-container page-header <?php the_field('darkened_overlay'); ?>" style="color:<?php the_field('page_header_text_color'); ?>;background-image: url(<?php if( get_post_meta($post->ID, "page_header", true) ): ?><?php the_field('page_header'); ?><?php else: ?><?php the_field('default_page_header', 'option'); ?><?php endif; ?>);">
    <div class="row nopadrow">
      
    </div>
  </div>
</div>  
