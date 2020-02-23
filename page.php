<?php get_header(); ?>
	<div id="content" class="page">
		<?php the_breadcrumb(); ?>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<h1> <?php the_title();?></h1>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>