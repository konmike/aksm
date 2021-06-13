<?php get_header(); ?>
<main>
    <div id="content" class="page page--contact">
        <h1>Kontakt</h1>
    </div>

	<?php
	$contactPost = get_post(106);
	$content = $contactPost->post_content;
	?>

    <div class="section section--contact contact">
		<?=$content?>

		<?php echo do_shortcode('[contact-form-7 id="7" title="Kontaktní formulář"]'); ?>
    </div>
    <div id="google-map" class="wrapper--google-map">
        <iframe style="border:none" src="https://frame.mapy.cz/s/polunanebe" width="100%" height="400" frameborder="0" style="border:0;" marginwidth="0" marginheight="0" scrolling="no" allowfullscreen=""></iframe>
    </div>
</main>
<?php get_footer(); ?>