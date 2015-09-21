<?php 
/*
Template Name: Donate Page Template with Inputs
*/
	get_header();
	get_template_part( 'head'); 
?>


<div class="wide-container page-head donate-template">
  <?get_template_part('inc/nav','dark');?>
  <div class="wide-container page-header donate-page <?php the_field('backround_overlay'); ?>" style="color:<?php the_field('page_header_text_color'); ?>;background-image: url(<?php if( get_post_meta($post->ID, "page_background", true) ): ?><?php the_field('page_background'); ?><?php else: ?><?php the_field('default_page_header', 'option'); ?><?php endif; ?>);">
  	<div class="container donatebody">
	  	<div class="row">
	  		<div class="col span_24 centered">
	         <h1><?php the_title();?></h1>
	      </div>
	    </div>
	    <div class="row nopadrow">
	      <div class="title col span_24 donateintro">
	        <?php the_field('donate_input_intro');?>
	      </div>
	    </div>
	    <div class="row">
	      <div class="col span_24">
	       <h3><?php the_field('main_box_title');?></h3>
          <p><?php the_field('main_box_intro');?></p>
          <form>
            <input class="donatefield" name="give" type="text" placeholder="$ USD" /><br/>
            <input class="donatesubmit" data-url="<?php the_field('recurring_link');?>/" name="donaterecurring" type="submit" value="Recurring" />
            <input class="donatesubmit" data-url="<?php the_field('one_time_link');?>/" name="donateonetime" type="submit" value="One-Time" />
          </form>
	      </div>
	  	</div>
	  	<div class="row">
	  		<div class="col span_24">
	  			<?php if(get_field('additional_donate_options')): ?>
            <ul class="donate-options">
            <?php while(has_sub_field('additional_donate_options')): ?>
              <li><a class="button" href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></li>
            <?php endwhile; ?>
            </ul>
        		<?php endif; ?>
	         </div>
	  	</div>
	  	
  	</div>
  </div>
</div>  

<?php get_footer(); ?>

 <script type="text/javascript">

     jQuery(document).ready(function(){
    jQuery(document).on('click', '.donatesubmit', function(){
      var redirect_to = jQuery(this).attr('data-url') + jQuery(this).parent().find('input[type=text]:first').val();
      location.href = redirect_to;
      return false;
    });

    jQuery('form').keypress(function(e){
      if (e.keyCode == 10 || e.keyCode == 13) 
        e.preventDefault();
    });
  });

    </script>
