<?php get_header(); ?>
<main>
    <div id="content" class="page page--projects">
<!--		--><?php //the_breadcrumb(); ?>
        <h1>Akce pro mládež</h1>

        <section class="section section--projects">
            <?php // echo do_shortcode('[PGP id=75]') ?>
            <?php // echo do_shortcode('[PGP id=59]') ?>

            <?php
            $the_query = new WP_Query( array( 'cat' => 5 ) );
 
            // The Loop
            if ( $the_query->have_posts() ) {
                echo '<ul>';
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    echo '<li>' . get_the_title() . '</li>';
                    echo '<li>' . the_post_thumbnail() . '</li>';
                }
                echo '</ul>';
            } else {
                // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
	         

        </section>


    </div>
</main>
<?php get_footer(); ?>