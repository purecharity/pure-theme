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
					<p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> | Site Powered by <a href="http://www.purecharity.com">Pure Charity</a></p>
			</div><!-- end row -->
		</div><!-- end container -->
	</div>
</div>
	<?php wp_footer(); ?>
	</body>
</html>

<style type="text/css">
	
	a {color: <?php the_field('main_color','options'); ?> !important;}

	a:hover {color: <?php the_field('secondary_color','options'); ?> !important;}
	a.fr-pure-button:hover {color: #e0e0e0 !important;}
	a.button,
	.pagination ul a:hover,
	.pagination ul span.current,
	.bx-pager.bx-default-pager a:hover, 
	.bx-pager.bx-default-pager a.active   {background: <?php the_field('main_color','options'); ?> !important;}

	a.button {color: #fff !important;}
	a.button:hover {color: #fff !important;background:<?php the_field('secondary_color','options'); ?> !important; }
	.siteid h1 {
		background: url(<?php the_field('logo','options'); ?>);
		background-size: contain;
		background-repeat: no-repeat;
	}
	.pushy {background-color: <?php the_field('main_color','options'); ?>;}
	.pushy a {color: #fff !important;}
	.navigation ul.menu li a { color: #fff !important; }
	.lightnav ul.menu li a {color: <?php the_field('main_color','options'); ?> !important;}
	.navigation ul.menu li a:hover { color: <?php the_field('main_color','options'); ?> !important;  }
	.navigation ul.menu li:hover {  background: #eeeeee; color: #000 !important;  }
	.navigation ul.menu li:hover a { color: #000 !important; }
	.navigation .menu ul ul li:hover > a { background: <?php the_field('main_color','options'); ?>  !important; color: #fff !important; }
	.navigation .menu ul ul ul li:hover > a { background: <?php the_field('main_color','options'); ?>   !important; color: #fff !important; }

	.pin, .pinned {background-color:<?php the_field('static_header_background_color','options'); ?> }

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

	 $(window).scroll(function(){
		  var sticky = $('.sticky'),
		      scroll = $(window).scrollTop();

		  if (scroll >= 100) sticky.addClass('fixed');
		  else sticky.removeClass('fixed');
		});
</script>