<p class="meta date"><?php the_time('F j, Y'); ?></p>
  <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
<p><?php the_excerpt();?></p>
<p class="meta"><?php the_tags('<p class="tags"><span class="tags-title">Tags:</span> ', ', ', '</p>'); ?></p>
<p class="meta categories">Categories: <?php the_category(',') ?></p>