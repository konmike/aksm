<?php get_header(); ?>
<main>
    <div id="content" class="page page--projects">
<!--		--><?php //the_breadcrumb(); ?>
        <h1>Akce pro mládež</h1>

        <section class="section section--projects">
            <?php echo do_shortcode('[PGP id=75]') ?>
            <?php echo do_shortcode('[PGP id=59]') ?>

	        <?php if (have_posts()) : ?>
		        <?php while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
		        <?php endwhile; ?>
	        <?php endif; ?>

        </section>


    </div>
</main>
<?php get_footer(); ?>