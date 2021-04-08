<?php get_header(); ?>
	<div id="content" class="page page--general">
		<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
			<section class="section section--general">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</section>
		<?php endwhile; 
		endif;
		?>
		
	</div>
<?php get_footer(); ?>