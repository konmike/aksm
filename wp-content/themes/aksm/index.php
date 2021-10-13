<?php get_header(); ?>
<main class="site__content">
    <?php
        $introducePost = get_post(24);
        $title = $introducePost->post_title;
        $content = $introducePost->post_content;
        $image = get_the_post_thumbnail_url(24,'full');
    ?>
    <section class="section section--introduction" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo $image ?>)">
        <header>
            <h1>Asociace křesťanských spolků mládeže, z. s.</h1>
            <h2>
                Jde o dobrovolné seskupení spolků dětí a mládeže,<br />
                které ve své činnosti zohledňují křesťanské principy a zásady.
            </h2>
        </header>

        <div class="section__content">
            <h3>
                <?=$title?>
            </h3>
            <?=$content?>

            <a href="/?page_id=8" class="link link--more-info">Více</a>
        </div>

        <a href="#news" class="smooth-scroll link--double-down">
            <i class="fas fa-angle-double-down"></i>
        </a>

        <div class="divider divider--bottom-intro"></div>
    </section>

    <div id="news" class="section section--news">

    
    <h1>Aktuality</h1>
    
    <ul class="post-feed">
        
            <?php $the_query = new WP_Query( array('cat' => '10', 'posts_per_page' => 3) );
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

            <a href="https://aksm.cz/category/aktuality" class="button button--light button--big">Všechny aktuality</a>
        </ul>

    </div>

    <div class="article article--projects">


    
        <div class="projects">
    <?php $the_query = new WP_Query( array('cat' => '4') );
                  if ( $the_query->have_posts() ) { ?> 
                
                <div class="grid">

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="card preparing" style="background-image: url(<?php the_post_thumbnail_url('card-cover') ?>);">
                        <div class="cover">
                            <h2><?php the_title() ?></h2>
                            <button class="more-information">Podrobnosti</button>
                        </div>
                        <div class="content hidden">
                            <button class="hide-information">Skrýt</button>
                            <?php the_content() ?>
                        </div>
                    </div>  
            <?php endwhile; 
            wp_reset_postdata(); ?>
            
                </div>
                <?php } ?>

            <?php $cats = ["6","7", "8"]; ?>

            <div class="grid">
            <?php foreach($cats as $cat) : ?>

                <?php $the_query = new WP_Query( array('category__and' => array('5', $cat), 'posts_per_page' => 1) );
                  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                    <div class="card over" style="background-image: url(<?php the_post_thumbnail_url('card-cover') ?>);">
                        <div class="cover">
                            <h2><?php the_title() ?></h2>
                            <button class="more-information">Podrobnosti</button>
                        </div>
                        <div class="content hidden">
                            <button class="hide-information">Skrýt</button>
                            <?php the_content() ?>
                        </div>
                    </div>  
            <?php endwhile; 
                wp_reset_postdata(); 
                endif;
                endforeach;
            ?>
            
                </div>

        <a href="/?page_id=10" class="button button--light button--big">
            Všechny akce pro mládež
        </a>
            </div>
    </div>

    <div class="section section--support">
        <div class="divider divider--top-support"></div>
        <h3 class="title">Podporují nás</h3>
        <div class="wrapper wrapper--logo">
            <img src="https://aksm.cz/wp-content/uploads/2020/04/cbk.png" alt="Česká biskupská konference">
            <img src="https://aksm.cz/wp-content/uploads/2020/04/msmt.png" alt="Ministerstvo školství, mládeže a tělovýchovy">
            <img src="https://aksm.cz/wp-content/uploads/2020/04/mv.png" alt="Ministerstvo vnitra">
            <img src="https://aksm.cz/wp-content/uploads/2020/04/EU.png" alt="Evropská unie">
			<img src="https://aksm.cz/wp-content/uploads/2021/01/logo.png" alt="RVD">
        </div>
		
        <div class="divider divider--bottom-support"></div>
    </div>

	<?php
	$eubannerPost = get_post(202);
	$content = $eubannerPost->post_content;
	?>

    <div class="section section--eu-banner">
		<?=$content?>
    </div>



    <?php
	$contactPost = get_post(106);
	$content = $contactPost->post_content;
	?>

    <div class="section section--contact">
        <div class="divider divider--top-contact"></div>

	    <?=$content?>
		<?php echo do_shortcode('[contact-form-7 id="7" title="Kontaktní formulář"]'); ?>
    </div>


</main>


<?php get_footer(); ?>
