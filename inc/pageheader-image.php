<?php get_template_part( 'inc/nav','dark'); ?>

<?php if(!isset($_GET['slug']) && !isset($_GET['event_id']) && !isset($_GET['child_id'])){ ?>
<div class="wide-container page-header">
  <div class="row nopadrow">
    <div class="col span_24 centered page-header" style="color:<?php the_field('page_header_text_color'); ?>;background-image: url(<?php if( get_post_meta($post->ID, "page_header", true) ): ?><?php the_field('page_header'); ?><?php else: ?><?php the_field('default_page_header', 'option'); ?><?php endif; ?>);">
      <header>
        <h1><?php the_title();?></h1>
      </header>     
    </div>
  </div>
</div>

<?php } ?>