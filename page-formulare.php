<?php get_header(); ?>
<main>
    <div id="content" class="page page--forms">
<!--		--><?php //the_breadcrumb(); ?>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
                <section class="section section--formulare">
                    <h1> <?php the_title();?></h1>
                    <?php the_content(); ?>
                </section>
                <div class="forms-image"></div>
			<?php endwhile; ?>
		<?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>