<?php get_header(); ?>
<main>
    <div id="content" class="page page--report">
<!--		--><?php //the_breadcrumb(); ?>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
                <section class="section section--vyrocni-zpravy">
                    <h1> <?php the_title();?></h1>
                    <?php the_content(); ?>
                </section>
                <div class="report-image"></div>
			<?php endwhile; ?>
		<?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>