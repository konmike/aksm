<?php get_header(); ?>
        <main class="site__content">
                <?php the_breadcrumb() ?>
                <article class="post post--detail">
                
                <?php
                        // Start the loop.
                        while ( have_posts() ) : the_post();
                ?>
                        <?php if ( has_post_thumbnail() ) : ?>
                                <div class="post__image" style="background-image: url(<?php the_post_thumbnail_url('card-cover'); ?>)">
                                </div>
                        <?php else : ?>
                                <div class="post__image" style="background-image: url(https://aksm.cz/wp-content/uploads/2021/10/universal-post.jpg)">
                                </div>
                        <?php endif; ?>

                        <header class="post__header">
                                <span class="date"><?php the_date(); ?></span>
                                <h3 class="title"><?php the_title(); ?></h3>
                        </header>

                        <div class="post__content">
                                <?php the_content(); ?>
                        </div>
                
                        <?php endwhile; ?>

                </article>
        </main>
<?php get_footer(); ?>