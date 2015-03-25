<p class="meta date"><span class="ss-icon ss-pika">date</span><?php the_time('F j, Y'); ?> <span class="author"><span class="ss-icon ss-pika">user</span>Posted by: <?php the_author_posts_link(); ?></span></p>
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<p class="meta"></p>
<?php the_post_thumbnail( 'image-square' ); ?>    
<p><?php the_excerpt();?></p>
<div class="row nopadrow">
  <div class="col span_24">
  <?php the_tags('<span class="meta"><span class="tags-title"><span class="ss-icon ss-pika">tag</span>Tags:</span> ', ', ', '</p>'); ?>
  <p class="meta"><span class="ss-icon ss-pika">pushpin</span>Categories: <?php the_category(',') ?></p>
  </div>
</div>