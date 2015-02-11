<?php 
/*
Template Name: Leadership Template
*/
	get_header();
	get_template_part( 'head'); 
	get_template_part( 'inc/pageheader','image'); 
?>

	<div class="wide-container">
		<div class="container">
			<div class="row">
				<div class="page-content col span_24">
					
				<?php while ( have_posts() ) : the_post(); ?>
				
				<?php the_content(); ?>

				</div>
			</div>
		</div>
	</div>

				<?php 

				if( have_rows('leadership') ): ?>
					<div id="leader-section">
					<?php 

					// loop through rows (parent repeater)
					while( have_rows('leadership') ): the_row(); ?>
						<div class="wide-container">
							<div class="container">
								<h3><?php the_sub_field('group_title'); ?></h3>
							<?php 

							// check for rows (sub repeater)
							if( have_rows('leadership_group') ): ?>
								<div class="row">
									<div class="leader-container col span_24">

								<?php 

								// loop through rows (sub repeater)
								while( have_rows('leadership_group') ): the_row();

									// display each item as a list - with a class of completed ( if completed )
									?>
									<div class="col span_6">
										<h4><?php the_sub_field('name'); ?></h4>
										<p><?php the_sub_field('position'); ?></p>
										<?php while( have_rows('connections') ): the_row();?>
											<a class="ss-icon ss-social-circle" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_name'); ?></a>
											
										<?php endwhile; ?>
									</div>
								<?php endwhile; ?>
								</div>
								</div>
							<?php endif; //if( get_sub_field('items') ): ?>
						</div>

					<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>
					</div>
				<?php endif; // if( get_field('to-do_lists') ): ?>

			<?php endwhile; // end of the loop. ?>




				</div>
			</div><!-- end row-->
		</div> <!-- end container-->
	</div> 

<?php get_footer(); ?>