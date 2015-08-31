<?php while(the_flexible_field("content_sections")): ?>
  <?php if(get_row_layout() == "main_content"): // layout: Main Content with bg image ?> 
    <div class="wide-container content-section main-content-section">
      <div class="container">
        <div class="row">
          <div class="col span_24">
            <p><?php the_sub_field("content"); ?></p>
          </div>
        </div>
      </div>
    </div>
  <?php elseif(get_row_layout() == "full_width_image"): // layout: General Content with bg image ?> 
    <div class="wide-container general_content content-section fullwidthimage">
      <?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'fullwidth'); ?>
      <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image')) ?>" />
    </div>
  <?php elseif(get_row_layout() == "general_content"): // layout: General Content with bg image ?> 
    <div class="wide-container general_content content-section bgimage_content_section <?php the_sub_field('darkened_overlay'); ?>" style="color:<?php the_sub_field('font_color'); ?>;background-image: url(<?php the_sub_field('background_image'); ?>);">
      <div class="container">
        <div class="row">
          <div class="col span_24 centered-section">
            <?php if( $general_title = get_sub_field('title') ){ ?>
                <h3 class="content-heading"><?php echo $general_title; ?></h3>
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
          <div class="col span_24 centered-section">
            <?php if( $noimage_title = get_sub_field('title') ){ ?>
              <h3 class="content-heading"><?php echo $noimage_title; ?></h3>
            <?php }?>
            <?php if( $noimage_content = get_sub_field('content') ){ ?>
              <p><?php echo $noimage_content; ?></p>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  <?php elseif(get_row_layout() == "four_column_content"): // layout: Three Columns ?>
    <div class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
      <div class="container">
        <div class="row">
            <?php if( $fourcol_title = get_sub_field('section_title') ){ ?>
              <h3 class="content-heading"><?php echo $fourcol_title; ?></h3>
            <?php }?>  
            <?php if( $fourcol_intro = get_sub_field('section_intro') ){ ?>
              <p class="intro"><?php echo $fourcol_intro; ?></p>
            <?php }?>  
        </div>
        <div class="row">
            <?php if(get_sub_field('columns')): ?>
              <?php while(has_sub_field('columns')): ?>
                <div class="col span_6">
                    <?php the_sub_field("column"); ?>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
        </div>
      </div>
    </div>
  <?php elseif(get_row_layout() == "three_column_content"): // layout: Three Columns ?>
    <div class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
      <div class="container">
        <div class="row">
            <?php if( $threecol_title = get_sub_field('section_title') ){ ?>
              <h3 class="content-heading"><?php echo $threecol_title; ?></h3>
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
              <h3 class="content-heading"><?php echo $twocol_title; ?></h3>
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
                <h3 class="content-heading"><?php echo $video_title; ?></h3>
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
                <h3 class="content-heading"><?php echo $videoright_title; ?></h3>
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
      <?php elseif(get_row_layout() == "general_rotator"): // layout: Video Embed ?>
        <div class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
            <div class="container">
              <div class="row">
                <?php if( $rotator_title = get_sub_field('title') ){ ?>
                  <h3 class="content-heading"><?php echo $rotator_title; ?></h3>
                <?php }?>
                <?php if( $rotator_intro = get_sub_field('intro') ){ ?>
                  <p class="intro"><?php echo $rotator_intro; ?></p>
                <?php }?>
              </div>
              <div class="row nopadtop">
                <ul class="general-slider">
                  <?php while(has_sub_field('rotator_content')): ?>
                    <div class="row nopadrow">
                    <li class="bx-general col span_18 centered"><?php the_sub_field('content'); ?> </li>
                    </div>
                  <?php endwhile; ?>
                </ul>
              </div>
            </div>
        </div>
      <?php elseif(get_row_layout() == "blog_posts_section"): // layout: Video Embed ?>
        <div class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
          <div class="container">  
            <div class="row">
             <?php if( $posts_title = get_sub_field('title') ){ ?>
                <h3 class="content-heading"><?php echo $posts_title; ?></h3>
              <?php }?>
              <?php if( $posts_intro = get_sub_field('intro') ){ ?>
                <p class="intro"><?php echo $posts_intro; ?></p>
              <?php }?>
            </div>
            <div class="row">
              <?php query_posts( array('showposts' => '2') );?>
              <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col span_12">
                  <div class="article">
                    <?php the_post_thumbnail( 'header' ); ?>    
                    <p class="meta date"><?php the_time('F j, Y'); ?></p>
                    <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                    <?php the_excerpt(); ?>     
                  </div>  
                </div>
              <?php endwhile; else: ?>
              <?php _e('Sorry, no posts matched your criteria.'); ?>
              <?php endif; ?>
              <?php wp_reset_query(); ?>
            </div>
            <p class="centered"><a class="button" href="<?php the_sub_field("articles_link"); ?>">More Articles</a>
          </div> 
        </div>   
        <?php elseif(get_row_layout() == "large_background_images"): // layout: Large Background Image ?>
          <div class="wide-container content-section">
          <?php if(get_sub_field('large_image_section')): ?>
            <?php while(has_sub_field('large_image_section')): ?>
              <style type="text/css"> 
                .feature<?php echo $counter; ?>:after { background-image: url(<?php the_sub_field('background_image'); ?>); }
              </style>
                <div class="container home-section cause-section feature<?php echo $counter; ?>" style="background-image: url(<?php the_sub_field('background_image'); ?>);">
                  <div class="row nopadrow">
                    <a href="<?php the_sub_field('link'); ?>">
                    <div class="col span_12 centered">
                      <h3 class="content-heading"><?php the_sub_field('title'); ?></h3>
                      <p class="intro"><?php the_sub_field('content'); ?></p>
                    </div>
                    </a>
                  </div>
                </div>
              <?php $counter++; // add one per row ?>
            <?php endwhile; ?>
          <?php endif; ?>
          </div>
        <?php elseif(get_row_layout() == "leadership_section"): // layout: Large Background Image ?>
          <div class="wide-container content-section">
            <?php if( have_rows('leadership_section') ): ?>
              <div class="leader-section">
              <?php while( have_rows('leadership_section') ): the_row(); ?>
                <div class="wide-container">
                  <div class="container">
                  <h2><?php the_sub_field('group_title'); ?></h2>
                      <?php if( have_rows('leadership_group') ): ?>
                        <div class="row">
                          <ul class="leader-container col span_24">
                          <?php while( have_rows('leadership_group') ): the_row(); ?>
                            <li class="leader col secondary-leader">
                              <h3><?php the_sub_field('name'); ?></h3>
                              <img class="rounded-avatar" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('name'); ?>">
                              <p><?php the_sub_field('title'); ?></p>
                              <?php while( have_rows('connections') ): the_row();?>
                                <a class="leadercontact ss-icon ss-social-circle" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_name'); ?></a>
                              <?php endwhile; ?>
                            </li>
                          <?php endwhile; ?>
                          </ul>
                        </div>
                      <?php endif; //if( get_sub_field('items') ): ?>
                  </div>
                <?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
              </div>
            <?php endif; // if( get_field('to-do_lists') ): ?>
          </div>
         <?php elseif(get_row_layout() == "4_photo_section"): // layout: Video Embed ?>

          <?php if(get_sub_field('photo_row')): ?>
          <div class="wide-container content-section" style="color:<?php the_sub_field('font_color'); ?>;background: <?php the_sub_field('background_color'); ?>;">
            <div class="container">    
              <div class="row">
              <?php if( $title = get_sub_field('title') ){ ?>
                <h3 class="content-heading"><?php echo $title; ?></h3>
              <?php }?>
              <?php if( $intro = get_sub_field('intro') ){ ?>
                <p class="intro"><?php echo $intro; ?></p>
              <?php }?>
            </div>
              <div class="row nopadbottom">
                <?php while(has_sub_field('photo_row')): ?>
                  <?php if(get_sub_field('photos')): ?>
                    <div class="row">
                    <?php while(has_sub_field('photos')): ?>
                      <div class="col span_12">
                        <a href="<?php the_sub_field('photo_link');?>">
                        <?php 
                          $image = get_sub_field('photos');
                          $size = 'grid-sidebyside'; // (thumbnail, medium, large, full or custom size)
                          if( $image ) { echo wp_get_attachment_image( $image, $size ); }
                        ?>
                        </a>
                      </div>
                    <?php endwhile; ?>    
                    </div>                
                  <?php endif; ?> 
                <?php endwhile; ?>
              </div>
              </div>
              </div>
            <?php endif; ?>

 <?php elseif(get_row_layout() == "boxes"): // layout: Boxes and Grid Layou ?>
  
    <div class="wide-container">
      <div class="container">
        <div class="row">
        <?php if( $info = get_sub_field('info_title') ){ ?>
          <p class="info"><?php echo $info; ?></p>
        <?php }?>

        <?php if( $title = get_sub_field('section_title') ){ ?>
          <h1><?php echo $title; ?></h1>
        <?php }?>

        </div> 

      <div class="row">
      <?php // check for rows (parent repeater)
        if( have_rows('boxes') ): ?>
          <?php // loop through rows (parent repeater)
          while( have_rows('boxes') ): the_row(); ?>
            <?php // check for rows (sub repeater)
            if( have_rows('box_row') ): ?>
                <div class="row">
                    <?php 
                    // loop through rows (sub repeater)
                    while( have_rows('box_row') ): the_row();
                        // display each item
                        ?>
                        <div class="col span_8 image-block">
                         
                           <?php $image = wp_get_attachment_image_src(get_sub_field('image'), 'image-grid'); ?>
                          

                         <a href="<?php the_sub_field('link');?>"><div class="image" style="background: url(<?php echo $image[0]; ?>);">
                          <h2><?php the_sub_field('title'); ?></h2>
                        </div>
                        <p><?php the_sub_field('content'); ?></p>
                        </a>
                        <br style="clear:both;" />
                      </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; //if( get_sub_field('box_row') ): ?>
          <?php endwhile; // while( has_sub_field('boxes') ): ?>
      <?php endif; // if( get_field('boxes') ): ?>

      <?php if( $after_box_text = get_sub_field('content_after_boxes') ){ ?>
        <?php echo $after_box_text; ?>
      <?php }?>
    </div>
      
   </div>

 <?php endif; ?><!-- end flexible sections -->
<?php endwhile; ?><!-- end flexible fields -->