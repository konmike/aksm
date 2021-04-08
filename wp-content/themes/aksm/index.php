<?php get_header(); ?>
<main class="home_page">
    <?php
        $introducePost = get_post(24);
        $title = $introducePost->post_title;
        $content = $introducePost->post_content;
        $image = get_the_post_thumbnail_url(24,'full');
    ?>
    <div class="article article--introduction" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo $image ?>)">
        <header>
            <h1>Asociace křesťanských spolků mládeže, z. s.</h1>
            <h2>
                Jde o dobrovolné seskupení spolků dětí a mládeže,<br />
                které ve své činnosti zohledňují křesťanské principy a zásady.
            </h2>
        </header>

        <section class="section section--introduction">
            <h3>
                <?=$title?>
            </h3>
            <?=$content?>
        </section>

        <a href="#projects" class="smooth-scroll link--double-down">
            <i class="fas fa-angle-double-down"></i>
        </a>

        <div class="divider divider--bottom-intro"></div>
    </div>

    <div id="projects" class="article article--projects">
        <?php echo do_shortcode('[PGP id=88]') ?>
        <?php echo do_shortcode('[PGP id=44]') ?>

        <a href="/?page_id=10" class="link--button-all-projects">
            Všechny akce pro mládež
        </a>
    </div>

    <div class="section section--support">
        <div class="divider divider--top-support"></div>
        <h3 class="title">Podporují nás</h3>
        <div class="wrapper wrapper--logo">
            <img src="http://aksm.cz/wp-content/uploads/2020/04/cbk.png" alt="Česká biskupská konference">
            <img src="http://aksm.cz/wp-content/uploads/2020/04/msmt.png" alt="Ministerstvo školství, mládeže a tělovýchovy">
            <img src="http://aksm.cz/wp-content/uploads/2020/04/mv.png" alt="Ministerstvo vnitra">
            <img src="http://aksm.cz/wp-content/uploads/2020/04/EU.png" alt="Evropská unie">
			<img src="http://aksm.cz/wp-content/uploads/2021/01/logo.png" alt="RVD">
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
