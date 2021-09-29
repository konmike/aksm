<?php get_header(); ?>
<main>
<div class="page page--post-detail">
    
<?php
        // Start the loop.
        while ( have_posts() ) : the_post();
?>
        <?php the_breadcrumb() ?>
        <div class="content">
        <h3><?php the_title(); ?></h3>
        <span class="date"><?php the_date(); ?></span>
        
        <div><?php the_content(); ?></div>
        </div>

            
        <?php endwhile; ?>



</div>


</main>


<?php get_footer(); ?>