<?php get_header(); ?>
<main class="home_page">
    <?php
        $introducePost = get_post(30);
        $title = $introducePost->post_title;
        $content = $introducePost->post_content;
    ?>
    <div class="article article--introduction">
        <header>
            <h1>Asociace křesťanských spolků mládeže, Z.S.</h1>
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
        <?php echo do_shortcode('[PGP id=75]') ?>
        <?php echo do_shortcode('[PGP id=59]') ?>

        <a href="/wordpress-aksm/akce-pro-mladez" class="link--button-all-projects">
            Všechny akce pro mládež
        </a>
    </div>

    <div class="section section--support">
        <div class="divider divider--top-support"></div>
        <h3 class="title">Podporují nás</h3>
        <div class="wrapper wrapper--logo">
            <img src="/wordpress-aksm/wp-content/uploads/2020/01/random-logo.png" alt="Logo">
            <img src="/wordpress-aksm/wp-content/uploads/2020/01/random-logo.png" alt="Logo">
            <img src="/wordpress-aksm/wp-content/uploads/2020/01/random-logo.png" alt="Logo">
            <img src="/wordpress-aksm/wp-content/uploads/2020/01/random-logo.png" alt="Logo">
        </div>
        <div class="divider divider--bottom-support"></div>
    </div>

    <div class="contact">
        <dl>
            <h3>Asociace křesťanských spolků mládeže</h3>
            <dt>Adresa</dt>
            <dd>Thákurova 676/3</dd>
            <dd>Praha 6-Dejvice</dd>
            <dd>16000</dd>
            <dd>
                <a href="/wordpress-aksm/kontakt/#google-map" title="maps.google.com" class="prefooter__link prefooter__link--map smooth-scroll">
                    Zde nás najdete
                </a>
            </dd>

            <dt>Telefonní číslo</dt>
            <dd>
                <a href="tel:+420000000000" class="prefooter__link prefooter__link--tel">
                    +420 000 000 000
                </a>
            </dd>

            <dt>Číslo účtu</dt>
            <dd class="prefooter__link prefooter__link--account">000000000/0300</dd>
        </dl>

		<?php echo do_shortcode('[contact-form-7 id="129" title="Kontaktní formulář"]'); ?>
    </div>


</main>


<?php get_footer(); ?>
