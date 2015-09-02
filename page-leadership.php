<?php 
/*
Template Name: Leadership Template
*/
	get_header();
	get_template_part( 'head'); 
	get_template_part( 'inc/pageheader','image'); 
?>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/simplemodal.js"></script>


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
							<?php $counter = 1;  //this sets up the counter starting at 0 ?>
							<div class="row">
								<ul class="leader-container col span_24">
								<?php while( have_rows('leadership_group') ): the_row(); ?>
									<li class="leader col span_8">
									<?php if( $profile = get_sub_field('profile') ){ ?>
			               <a data-leader-id="lead1-<?php echo $counter; ?>" class="modal-link" href="#">
			             <?php }?>
											<h3><?php the_sub_field('name'); ?></h3>
											<img class="rounded-avatar" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('name'); ?>">
											<p><?php the_sub_field('position'); ?></p>
											<?php while( have_rows('connections') ): the_row();?>
                    	  <a class="leadercontact ss-icon ss-social-circle" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_name'); ?></a>
											<?php endwhile; ?>
											<?php if( $profile = get_sub_field('profile') ){ ?>
			               	</a>
			            	 <?php }?>
	            	 <!-- add the modal window within the loop -->
	            	<div id="basic-modal-content" class="modal" data-leader-id="lead1-<?php echo $counter; ?>">
									<div class="row nopadrow">
										<div class="col span_6">
											<img class="rounded-avatar" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('name'); ?>">
										</div>
										<div class="col span_18">
											<h3><?php the_sub_field('name'); ?></h3>
											<?php the_sub_field('profile'); ?>
										</div>
								</div>
								<!-- end modal window -->
									<?php $counter++; // add one per row ?> 
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
							<?php $counter2 = 10;  //this sets up the counter starting at 0 ?>
							<div class="row">
								<ul class="leader-container col span_24">
								<?php while( have_rows('leadership_group') ): the_row(); ?>
									<li class="leader secondary-leader col span_6">
										<?php if( $profile = get_sub_field('profile') ){ ?>
			               <a data-leader-id="lead2-<?php echo $counter2; ?>" class="modal-link" href="#">
			             <?php }?>
										<h4><?php the_sub_field('name'); ?></h4>
										<img class="rounded-avatar" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('name'); ?>">
										<p class="leader-position"><?php the_sub_field('position'); ?></p>
										<?php while( have_rows('connections') ): the_row();?>
                      <a class="leadercontact ss-icon ss-social-circle" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_name'); ?></a>
										<?php endwhile; ?>
										<?php if( $profile = get_sub_field('profile') ){ ?>
			               	</a>
			            	 <?php }?>
			            	  <!-- add the modal window within the loop -->
				            	<div id="basic-modal-content" class="modal" data-leader-id="lead2-<?php echo $counter2; ?>">
												<div class="row nopadrow">
													<div class="col span_6">
														<img class="rounded-avatar" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('name'); ?>">
													</div>
													<div class="col span_18">
														<h3><?php the_sub_field('name'); ?></h3>
														<?php the_sub_field('profile'); ?>
													</div>
											</div>
											<!-- end modal window -->
																	<?php $counter2++; // add one per row ?> 

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



<script>

jQuery(function ($) {
	// Load dialog on page load
	//$('#basic-modal-content').modal();

	// Load dialog on click
	$('.modal-link').click(function (e) {
		$('.modal[data-leader-id='+ $(this).attr('data-leader-id') +']').modal();

		return false;
	});
});

</script>


