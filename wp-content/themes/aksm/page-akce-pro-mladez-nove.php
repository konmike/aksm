<?php get_header(); ?>
<main>
    <div id="content" class="page page--projects">
    
        
        <section class="section section--projects">
            <h1><?php the_title(); ?></h1>

            <div class="sub-menu">
                <ul>
                    <li id="csm" class="item active">Celostátní setkání mládeže</li>
                    <li id="sdm" class="item">Světové dny mládeže</li>
                    <li id="csa" class="item">Celostátní setkání animátorů</li>
                    <li id="kom" class="item">Konference o mládeži</li>
                    <li id="cfm" class="item">Celostátní fóra mládeže</li>
                </ul>
            </div>

            <?php
                $id_posts = array(597,601,603,607,610);
                $cl = array('csm', 'sdm', 'csa', 'kom', 'cfm');
                
                for ($i=0; $i < 5; $i++): 
                    $introducePost = get_post($id_posts[$i]);
                    $content = $introducePost->post_content;
            ?>

                <div class="<?=$cl[$i]?> general">
                <?=$content?>
                </div>

            <?php endfor; ?>

            <div class="grid">
            <?php $the_query = new WP_Query( array('cat' => '3', 'posts_per_page' => -1) );
                    if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <?php $classes = "card";
                  $classes .= (has_category(4)) ? " preparing" : "";
                  $classes .= (has_category(5)) ? " over" : "";
                  $classes .= (has_category(6)) ? " csm" : "";
                  $classes .= (has_category(7)) ? " sdm" : "";
                  $classes .= (has_category(8)) ? " csa" : "";
                  $classes .= (has_category(9)) ? " kom" : "";  ?>

                    <div class="<?=$classes?>" style="background-image: url(<?php the_post_thumbnail_url('card-cover') ?>);">
                        <div class="cover">
                            <h2><?php the_title() ?></h2>
                            <button class="more-information">Podrobnosti</button>
                        </div>
                        <div class="content hidden">
                            <button class="hide-information">Skrýt</button>
                            <!-- <h2><?php //the_title() ?></h2> -->
                            <?php the_content() ?>
                        </div>
                    </div>  
                <?php

                endwhile;                 
                endif; ?>
            </div>
        
        </section>


    </div>
</main>
<?php get_footer(); ?>