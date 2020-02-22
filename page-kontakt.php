<?php get_header(); ?>
<main>
    <div id="content" class="page page--contact">
<!--		--><?php //the_breadcrumb(); ?>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
                <section class="section section--kontakt">
                    <h1> <?php the_title();?></h1>
                    <?php the_content(); ?>
                </section>
			<?php endwhile; ?>
		<?php endif; ?>
    </div>
    <div class="contact">
        <dl>
            <h3>Asociace křesťanských spolků mládeže</h3>
            <dt>Adresa</dt>
            <dd>Thákurova 676/3</dd>
            <dd>Praha 6-Dejvice</dd>
            <dd>16000</dd>
            <dd>
                <a href="#google-map" title="maps.google.com" class="prefooter__link prefooter__link--map smooth-scroll">
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
    <div id="google-map" class="wrapper--google-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2559.14125991997!2d14.3846414153507!3d50.10236287942886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b953be09b8709%3A0xa96d8c71f22e9eff!2sUniverzita%20Karlova%20v%20Praze%20-%20Katolick%C3%A1%20teologick%C3%A1%20fakulta%2C%20Th%C3%A1kurova%20676%2F3%2C%20160%2000%20Praha%206-Dejvice!5e0!3m2!1scs!2scz!4v1582360151767!5m2!1scs!2scz" width="100%" height="400" frameborder="0" style="border:0;" marginwidth="0" marginheight="0" scrolling="no" allowfullscreen=""></iframe>
    </div>
</main>
<?php get_footer(); ?>