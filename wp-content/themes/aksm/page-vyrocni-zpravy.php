<?php get_header(); ?>
<main>
    <div id="content" class="page page--report">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
                <?php if (has_post_thumbnail()) : ?>

					<section class="section section--reports section--splitter">
						<h1><?php the_title(); ?></h1>
                    	<?php the_content(); ?>
					</section>
                    <div class="illustrate-image" style="background-image: url(<?php the_post_thumbnail_url('full') ?>);"></div>
                
                <?php else : ?>
	                
					<section class="section section--reports section--splitter" style="grid-column: 1/3">
						<h1><?php the_title(); ?></h1>
	                	<?php the_content(); ?>
	                </section>

                <?php endif; ?>
                
		<?php endwhile; 
			endif;
		?>
    </div>
</main>
<?php get_footer(); ?>