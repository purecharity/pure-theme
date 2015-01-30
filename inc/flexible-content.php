<?php while(the_flexible_field("content_sections")): ?>
  <?php if(get_row_layout() == "main_content"): // layout: Main Content with bg image ?> 
    <div class="wide-container content-section main-content-section">
      <div class="container">
        <div class="row">
          <div class="col centered span_24">
            <p><?php the_sub_field("content"); ?></p>
          </div>
        </div>
      </div>
    </div>
  <?php elseif(get_row_layout() == "general_content"): // layout: General Content with bg image ?> 
    <div class="wide-container content-section bgimage_content_section" style="color:<?php the_sub_field('font_color'); ?>;background-image: url(<?php the_sub_field('background_image'); ?>);">
      <div class="container">
        <div class="row">
          <div class="col centered span_24 centered-section">
            <?php if( $general_title = get_sub_field('title') ){ ?>
                <h3><?php echo $general_title; ?></h3>
              <?php }?>
              <?php if( $general_content = get_sub_field('content') ){ ?>
                <p><?php echo $general_content; ?></p>
              <?php }?>
          </div>
        </div>
      </div>
    </div>
  <?php elseif(get_row_layout() == "general_no_bg_image"): // layout: General Conent no image ?>
    <div class="wide-container content-section general_content_section_bgcolor" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
      <div class="container">
        <div class="row">
          <div class="col centered span_24 centered-section">
            <?php if( $noimage_title = get_sub_field('title') ){ ?>
              <h3><?php echo $noimage_title; ?></h3>
            <?php }?>
            <?php if( $noimage_content = get_sub_field('content') ){ ?>
              <p><?php echo $noimage_content; ?></p>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  <?php elseif(get_row_layout() == "three_column_content"): // layout: Three Columns ?>
    <div class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
      <div class="container">
        <div class="row">
            <?php if( $threecol_title = get_sub_field('section_title') ){ ?>
              <h3><?php echo $threecol_title; ?></h3>
            <?php }?>  
            <?php if( $threecol_intro = get_sub_field('section_intro') ){ ?>
              <p class="intro"><?php echo $threecol_intro; ?></p>
            <?php }?>  
        </div>
        <div class="row">
            <?php if(get_sub_field('columns')): ?>
              <?php while(has_sub_field('columns')): ?>
                <div class="col span_8">
                    <?php the_sub_field("column"); ?>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
  <?php elseif(get_row_layout() == "two_column_content"): // layout: Three Columns ?>
    <div class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
      <div class="container">
        <div class="row">
           <?php if( $twocol_title = get_sub_field('section_title') ){ ?>
              <h3><?php echo $twocol_title; ?></h3>
            <?php }?>  
            <?php if( $twocol_intro = get_sub_field('section_intro') ){ ?>
              <p class="intro"><?php echo $twocol_intro; ?></p>
            <?php }?>
        </div>
        <div class="row">
            <?php if(get_sub_field('columns')): ?>
              <?php while(has_sub_field('columns')): ?>
                <div class="col span_12">
                    <?php the_sub_field("column"); ?>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
  <?php elseif(get_row_layout() == "video_image_section"): // layout: Video Embed ?>
        <div class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
          <div class="container">  
            <div class="row">
              <?php if( $video_title = get_sub_field('title') ){ ?>
                <h3><?php echo $video_title; ?></h3>
              <?php }?>  
              <?php if( $video_intro = get_sub_field('intro') ){ ?>
                <p class="intro"><?php echo $video_intro; ?></p>
              <?php }?>
            </div>
            <div class="row">
              <div class="col videoembed span_12">
                <?php the_sub_field("video_embed"); ?>
              </div>
              <div class="col span_12">
                <?php 
                  $image = get_sub_field('image');
                  $size = 'videoembedsize'; // (thumbnail, medium, large, full or custom size)
                  if( $image ) { echo wp_get_attachment_image( $image, $size ); }
                ?>
              </div>
            </div> 
          </div>
        </div> 
      <?php elseif(get_row_layout() == "video_image_section_right"): // layout: Video Embed ?>
        <div class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
           <div class="container">  
            <div class="row">
               <?php if( $videoright_title = get_sub_field('title') ){ ?>
                <h3><?php echo $videoright_title; ?></h3>
              <?php }?>  
              <?php if( $videoright_intro = get_sub_field('intro') ){ ?>
                <p class="intro"><?php echo $videoright_intro; ?></p>
              <?php }?>
            </div> 
            <div class="row">
              <div class="col span_12">
                <?php 
                  $image = get_sub_field('image');
                  $size = 'videoembedsize'; // (thumbnail, medium, large, full or custom size)
                  if( $image ) { echo wp_get_attachment_image( $image, $size ); }
                ?>
              </div>
              <div class="col videoembed span_12">
                <?php the_sub_field("video_embed"); ?>
              </div>
            </div>
          </div>
        </div>  
      <?php elseif(get_row_layout() == "quotes_rotator"): // layout: Video Embed ?>
        <div class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
            <div class="row">
              <?php if( $quote_title = get_sub_field('title') ){ ?>
                <h3><?php echo $quote_title; ?></h3>
              <?php }?>
              <?php if( $quote_intro = get_sub_field('intro') ){ ?>
                <p class="intro"><?php echo $quote_intro; ?></p>
              <?php }?>
            </div>
            <div class="row nopadtop">
              <ul class="quotes-slider">
                <?php while(has_sub_field('quotes')): ?>
                  <div class="row nopadrow">
                  <li class="bx-quote col span_18 centered"><?php the_sub_field('quote'); ?> </li>
                  </div>
                <?php endwhile; ?>
              </ul>
            </div>
        </div>  
      <?php elseif(get_row_layout() == "blog_posts_section"): // layout: Video Embed ?>
        <div class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
          <div class="container">  
            <div class="row">
             <?php if( $posts_title = get_sub_field('title') ){ ?>
                <h3><?php echo $posts_title; ?></h3>
              <?php }?>
              <?php if( $posts_intro = get_sub_field('intro') ){ ?>
                <p class="intro"><?php echo $posts_intro; ?></p>
              <?php }?>
            </div>
            <div class="row">
              <?php query_posts( array('showposts' => '2') );?>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col span_12">
                  <article>
                    <?php the_post_thumbnail( 'image-medium' ); ?>   
                    <p class="meta date"><?php the_time('F j, Y'); ?></p>
                    <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                    <?php wpe_excerpt('wpe_excerptlength_short', 'wpe_excerptmore'); ?>     
                  </article>  
                </div>
              <?php endwhile; else: ?>
              <?php _e('Sorry, no posts matched your criteria.'); ?>
              <?php endif; ?>
              <?php wp_reset_query(); ?>
            </div>
            <p class="centered"><a class="button" href="<?php the_sub_field("articles_link"); ?>">More Articles</a>
          </div> 
        </div>                 
      <?php elseif(get_row_layout() == "three_photo_section"): // layout: Video Embed ?>
        <?php if(get_sub_field('small_photos')): ?>
          <div class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
            <div class="container">
              <div class="row">
                <?php while(has_sub_field('small_photos')): ?>
                  <div class="col span_12">
                    <?php 
                      $image = get_sub_field('photo');
                      $size = 'grid-sidebyside'; // (thumbnail, medium, large, full or custom size)
                      if( $image ) { echo wp_get_attachment_image( $image, $size ); }
                    ?>
                  </div>
                <?php endwhile; ?>
              </div>
            <?php endif; ?> 
            <?php if(get_sub_field('large_photo')): ?>
              <?php 
              $image = get_sub_field('large_photo');
              $size = 'grid-large'; // (thumbnail, medium, large, full or custom size)
              if( $image ) { echo wp_get_attachment_image( $image, $size ); }
              ?>
            <?php endif; ?>
          </div>
        </div>
         <?php elseif(get_row_layout() == "4_photo_section"): // layout: Video Embed ?>
          <?php if(get_sub_field('photo_row')): ?>
          <div class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
            <div class="container">    
              <div class="row nopadbottom">
                <?php while(has_sub_field('photo_row')): ?>
                  <?php if(get_sub_field('photos')): ?>
                    <div class="row">
                    <?php while(has_sub_field('photos')): ?>
                      <div class="col span_12">
                        <?php 
                          $image = get_sub_field('photos');
                          $size = 'grid-sidebyside'; // (thumbnail, medium, large, full or custom size)
                          if( $image ) { echo wp_get_attachment_image( $image, $size ); }
                        ?>
                      </div>
                    <?php endwhile; ?>    
                    </div>                
                  <?php endif; ?> 
                <?php endwhile; ?>
              </div>
              </div>
              </div>
            <?php endif; ?>
  <?php endif; ?><!-- end flexible sections -->
<?php endwhile; ?><!-- end flexible fields -->