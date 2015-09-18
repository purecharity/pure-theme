<div class="wide-container footer">
	<div class="container">
		<div class="row">
			<div class="col span_6">
				<?php if ( !function_exists('dynamic_sidebar')
					|| !dynamic_sidebar('footer-left') ) : ?>
				<?php endif; ?>
			</div>
			<div class="col span_6">
				<?php if ( !function_exists('dynamic_sidebar')
					|| !dynamic_sidebar('footer-centerleft') ) : ?>
				<?php endif; ?>
			</div>
			<div class="col span_6">
				<?php if ( !function_exists('dynamic_sidebar')
					|| !dynamic_sidebar('footer-centerright') ) : ?>
				<?php endif; ?>
			</div>
			<div class="col span_6">
				<?php if ( !function_exists('dynamic_sidebar')
					|| !dynamic_sidebar('footer-right') ) : ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>

	<div class="wide-container footer-wide">
		<div class="container">
			<div class="row">
					<div class="col span_12">
						<p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> | Site Powered by <a href="http://www.purecharity.com">Pure Charity</a></p>
					</div>
					<div class="col span_12">
								<?php if(get_field('social_network_links', 'option')): ?>
									<ul class="social-icons">
										<?php while(has_sub_field('social_network_links', 'option')): ?>
											<li class="ss-icon ss-social-circle"><a href="<?php the_sub_field('social_network_link', 'option');?>"><?php the_sub_field('social_network_name', 'option');?></a></li>
										<?php endwhile; ?>
									</ul>
								<?php endif; ?>
					</div>
			</div><!-- end row -->
		</div><!-- end container -->
	</div>

</div>
	<?php wp_footer(); ?>
	</body>
</html>

<style type="text/css">
	
	a {color: <?php the_field('main_color','options'); ?> !important;}
	.bx-pager.bx-default-pager a {border-color: <?php the_field('main_color','options'); ?>;}

	a:hover {color: <?php the_field('secondary_color','options'); ?> !important;}
	a.fr-pure-button:hover {color: #e0e0e0 !important;}
	a.button,
	.pagination ul a:hover,
	.pagination ul span.current, 
	.bx-pager.bx-default-pager a:hover, 
	.bx-pager.bx-default-pager a.active  {border-color: <?php the_field('main_color','options'); ?>;background: <?php the_field('main_color','options'); ?> !important;}

	a.button {color: #fff !important;}
	a.button:hover {color: #fff !important;background:<?php the_field('secondary_color','options'); ?> !important; }
	.siteid h1 {
		background: url(<?php the_field('logo','options'); ?>);
		background-size: contain;
		background-repeat: no-repeat;
	}
	.pushy {background-color: <?php the_field('main_color','options'); ?>;}
	.pushy a {color: #fff !important;}
	.navigation ul.menu li a { color: <?php the_field('nav_color','options'); ?> !important; }
	ul.menu li:hover {background: <?php the_field('main_color','options'); ?> ;}
	ul.menu li ul li:hover {background: <?php the_field('main_color','options'); ?>;}
	.pin {background:<?php $nav_Bar = get_field('nav_bar_bg_question','option'); if ( $nav_Bar == "no" ) { echo "none"; } else { echo the_field('static_header_background_color','options'); } ?> ; }
	.pinned {background:<?php the_field('scrolling_header_background_color','options'); ?>;}

	<?php the_field('custom_css_styles','options'); ?>

</style>

<script> 
	  $('.general-slider').bxSlider({
		  minSlides: 1,
		  maxSlides: 1,
		  moveSlides: 0,
		  auto: false,
		  autoStart: false,
		  slideWidth: 0,
		  pager: true
	 }); 

	  if($(window).outerWidth() > 414){
    var options = {
      minSlides: 4,
      maxSlides: 20,
      slideWidth: 240,
      slideMargin: 5,
      pager: true,
      touchEnabled: false,
      autoStart: true
    }
  }else{
    var options = {
      minSlides: 1,
      maxSlides: 1,
      slideWidth: 240,
      slideMargin: 5,
      pager: true,
      touchEnabled: true,
      autoStart: true
    }
  }
  $('.featured-fundraisers-slider').bxSlider(options);

	 $(window).scroll(function(){
		  var sticky = $('.sticky'),
		      scroll = $(window).scrollTop();

		  if (scroll >= 100) sticky.addClass('fixed');
		  else sticky.removeClass('fixed');
		});
</script>