<?php get_header(); ?>
<main>
    <div id="content" class="page page--forms">
<!--		--><?php //the_breadcrumb(); ?>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

				<?php if (has_post_thumbnail()){
					echo '<section class="section section--forms section--splitter"><h1>';
					the_title();
					echo '</h1>';
					the_content();
					echo '</section>';
					echo '<div class="illustrate-image" style="background-image: url('. get_the_post_thumbnail_url('','full') .')"></div>';
				}
				else{
					echo '<section class="section section--forms section--splitter" style="grid-column: 1/3"><h1>';
					the_title();
					echo '</h1>';
					the_content();
					echo '</section>';
				}
				?>

			<?php endwhile; ?>
		<?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>