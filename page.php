<?php get_header(); ?>
	<div id="content" class="page page--general">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post();
                echo '<section class="section section--general"><h1>';
                the_title();
                echo '</h1>';
                the_content();
                echo '</section>';
			endwhile; ?>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>