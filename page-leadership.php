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

	<?php if( have_rows('leadership') ): ?>
		<div class="leader-section">
		<?php while( have_rows('leadership') ): the_row(); ?>
			<div class="wide-container">
				<div class="container">
				<h2><?php the_sub_field('group_title'); ?></h2>
						<?php if( have_rows('leadership_group') ): ?>
							<div class="row">
								<ul class="leader-container col span_24">
								<?php while( have_rows('leadership_group') ): the_row(); ?>
									<li class="leader col span_8">
										<h3><?php the_sub_field('name'); ?></h3>
										<img class="rounded-avatar" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('name'); ?>">
										<p><?php the_sub_field('position'); ?></p>
										<?php while( have_rows('connections') ): the_row();?>
											<a class="ss-icon ss-social-circle" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_name'); ?></a>
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

	<?php if( have_rows('secondary_leadership_section') ): ?>
		<div class="leader-section secondary-leaders">
		<?php while( have_rows('secondary_leadership_section') ): the_row(); ?>
			<div class="wide-container">
				<div class="container">
					<h2><?php the_sub_field('group_title'); ?></h2>
						<?php if( have_rows('leadership_group') ): ?>
							<div class="row">
								<ul class="leader-container col span_24">
								<?php while( have_rows('leadership_group') ): the_row(); ?>
									<li class="leader secondary-leader col span_4">
										<h4><?php the_sub_field('name'); ?></h4>
										<img class="rounded-avatar" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('name'); ?>">
										<p class="leader-position"><?php the_sub_field('position'); ?></p>
										<?php while( have_rows('connections') ): the_row();?>
											<a class="ss-icon ss-social-circle" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_name'); ?></a>
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
	<?php endwhile; // end of the loop. ?>




				</div>
			</div><!-- end row-->
		</div> <!-- end container-->
	</div> 

<?php get_footer(); ?>