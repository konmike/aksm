<?php get_header(); ?>
<main>
    <div id="content" class="page page--category">
        
        <h1><?php single_cat_title('' , true); ?></h1>
        

        <ul class="news">
            <?php $the_query = new WP_Query( array('cat' => '10', 'posts_per_page' => -1) );
                                if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li>
                <article>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-image" style="background-image: url(<?php the_post_thumbnail_url('card-cover') ?>);">
                    </div>
                <?php else : ?>
                    <div class="post-image" style="background-image: url(https://aksm.cz/wp-content/uploads/2021/10/universal-post.jpg)">
                    </div>
                <?php endif; ?>

                <div class="body">
                    <span class="date">
                        <?php echo get_the_date() ?>
                    </span>

                    <h3>
                        <?php the_title() ?>
                    </h3>

                    <?php the_excerpt() ?>

                </div>

                <!-- <a class="button button--light" href="<?php the_permalink(); ?>">Více</a> -->

                </article>
            </li>    
            <?php

            endwhile;                 
            endif; ?>
        </ul>

    </div>
</main>
<?php get_footer(); ?>