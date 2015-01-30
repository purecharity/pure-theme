<?php 
	get_header(); 
	get_template_part( 'head'); 
?>

<div  class="wide-container">
	<div class="container">
		<div class="row">
			<div class="page-content col span_16 clr">
				<?php if (have_posts()) : ?>
				
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				<?php /* If this is a category archive */ if (is_category()) { ?>				
					<header>
						<h1>Category: <?php echo single_cat_title(); ?></h1>
					</header>
		 		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
					<header>
						<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
					</header>
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					<header>
						<h1>Archive for <?php the_time('F, Y'); ?></h1>
					</header>
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					<header>
						<h1>Archive for <?php the_time('Y'); ?></h1>
					</header>	
			    <?php /* If this is a search */ } elseif (is_search()) { ?>
					<header>	
						<h1>Search Results</h1>
					</header>	
			    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
					<header>
						<h1>Author Archive</h1>
					</header>
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
					<header>
						<h1>Blog Archives</h1>
					</header>	
				<?php } ?>
				<?php while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'inc/content', 'article' ); ?>
				<?php endwhile; ?>
					<?php get_template_part( 'inc/feature', 'pagination' ); ?>
				<?php else : ?>
					<h2 class="center">Not Found</h2>
					<?php include (TEMPLATEPATH . '/searchform.php'); ?>
				<?php endif; ?>
			</div>	
			<?php get_sidebar()?>
		</div><!-- end row-->
	</div> <!-- end container-->
</div>

<?php get_footer() ?>