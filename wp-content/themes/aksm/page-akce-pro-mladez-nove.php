<?php get_header(); ?>
<main>
    <div id="content" class="page page--projects">
    
        
        <section class="section section--projects">
            <h1><?php the_title(); ?></h1>

        <?php $cats = ["4","5"]; ?>
        <?php foreach($cats as $cat) : ?>

            <div class="grid">
            <?php $the_query = new WP_Query( array('cat' => $cat) );
                    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="card" style="background-image: url(<?php the_post_thumbnail_url('card-cover') ?>);">
                        <div class="cover">
                            <h2><?php the_title() ?></h2>
                            <button class="more-information">Podrobnosti</button>
                        </div>
                        <div class="content hidden">
                            <button class="hide-information">Skrýt</button>
                            <h2><?php the_title() ?></h2>
                            <?php the_content() ?>
                        </div>
                    </div>  
                <?php endwhile; 
                wp_reset_postdata();
                endif; ?>
            </div>
        <?php endforeach ?>    

        </section>


    </div>
</main>
<?php get_footer(); ?>