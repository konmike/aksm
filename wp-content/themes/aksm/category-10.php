<?php get_header(); ?>
<main>
    <div id="content" class="page page--category">
        <header>
            <h1><?php single_cat_title('' , true); ?></h1>
        </header>

        <ul class="news">
            <?php $the_query = new WP_Query( array('cat' => '10', 'posts_per_page' => -1) );
                                if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li>
                <article>

                <h3>
                    <?php the_title() ?>
                </h3>

                <span class="date">
                    <?php echo get_the_date() ?>
                </span>

                <?php the_content() ?>
                <a class="button button--light" href="<?php the_permalink(); ?>">Více</a>

                </article>
            </li>    
            <?php

            endwhile;                 
            endif; ?>
        </ul>

    </div>
</main>
<?php get_footer(); ?>