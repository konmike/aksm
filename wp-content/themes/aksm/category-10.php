<?php get_header(); ?>
<main class="site__content">
    <div id="content" class="page page--category">
        
        <h1><?php single_cat_title('' , true); ?></h1>
        

        <ul class="post-feed">
            <?php $the_query = new WP_Query( array('cat' => '10', 'posts_per_page' => -1) );
                                if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li class="item">
                <article class="post post--excerpt">

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post__image" style="background-image: url(<?php the_post_thumbnail_url('card-cover') ?>);">
                        </div>
                    <?php else : ?>
                        <div class="post__image" style="background-image: url(https://aksm.cz/wp-content/uploads/2021/10/universal-post.jpg)">
                        </div>
                    <?php endif; ?>
                    
                    <div class="post__container">
                        <a class="link" href="<?php the_permalink(); ?>">
                            <header class="post__header">
                                <span class="date"><?php the_date(); ?></span>
                                <h3 class="title">                
                                    <?php the_title() ?>
                                </h3>
                            </header>
                        </a>
                        <div class="post__content">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>

                </article>
            </li>    
            <?php

            endwhile;                 
            endif; ?>
        </ul>

    </div>
</main>
<?php get_footer(); ?>