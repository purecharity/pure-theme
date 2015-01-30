<?php 
/*
Template Name: Donate Page Template
*/
	get_header();
	get_template_part( 'head'); 
	get_template_part('inc/nav','dark');
?>

	<div class="wide-container donatebody" style="background: url(<?php the_field('page_background');?>);background-repeat:no-repeat; background-size: cover;background-position: center;">			
		<div class="container">
			<div class="row">
				<h1>Donate</h1>
			</div>
			<div class="row nopadtop">
				<div class="title col span_14 donateintro">
					<?php the_field('donate_intro');?>
				</div>
				<div class="page-content col span_10 donatebuttons">
					<?php if(get_field('additional_donate_options')): ?>
							<ul class="generaldonation">
								<li><a class="general-donaton button large" href="<?php the_field('main_button_donate_link');?>"><?php the_field('main_donate_link_text');?></a></li>
							</ul>
							<ul class="donate-options">
							<?php while(has_sub_field('additional_donate_options')): ?>
								<li><a class="button medium" href="<?php the_sub_field('link');?>"><?php the_sub_field('title');?></a></li>
							<?php endwhile; ?>
							</ul>
					<?php endif; ?>
				</div>
			</div><!-- end row-->
		</div> <!-- end container-->
	</div> 

<?php get_footer(); ?>