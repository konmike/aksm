<?php get_header(); ?>

	<?php
	$volunteerPost = get_post(26);
	$title = $volunteerPost->post_title;
	$content = $volunteerPost->post_content;
	$image = get_the_post_thumbnail_url(26,'full');
	?>
<main>
	<div class="article article--volunteer">
	<?php if ( ! empty($image) ): ?>
		<div class="content">
	<?php else : ?>
		<div class="content" style="grid-column: 1/3; padding: 0 15rem">
	<?php endif; ?>
			<h1>Dobrovolnická služba AKSM</h1>

			<h2><?=$title?></h2>
			<?=$content?>

			<a href="#prepare" class="smooth-scroll link--next-article">
				Nechceš i Ty věnovat část svého života práci pro druhé?
			</a>
		</div>

	<?php if ( ! empty($image) ) : ?>
		<div class="illustration-image" style="background-image: url(<?=$image?>)"></div>
	<?php endif; ?>
	</div>

	<?php
	$preparePost = get_post(28);
	$title = $preparePost->post_title;
	$content = $preparePost->post_content;
	$image = get_the_post_thumbnail_url(28,'full');
	?>

	<div id="prepare" class="article article--prepare">
	<?php if ( ! empty($image) ): ?>
		<div class="illustration-image" style="background-image: url(<?=$image?>)"></div>
		<div class="content">
	<?php else : ?>
		<div class="content" style="grid-column: 1/3; padding: 0 15rem">
	<?php endif; ?>

			<h2><?=$title?></h2>
			<?=$content?>

			<span class="mail_to_us">Napiš nám na&nbsp;
				<a href="mailto:kancelar@aksm.cz?subject=Dobrovolnictvi" class="">
					kancelar@aksm.cz
				</a>
				&nbsp;nebo&nbsp;
				<a href="mailto:mladez@cirkev.cz?subject=Dobrovolnictvi" class="">
					mladez@cirkev.cz.
				</a>
			</span>

			<a href="#graf" class="smooth-scroll link--next-article">
				Podívej se, jak se naše služba vyvíjí v čase.
			</a>
		</div>
	</div>

	<div id="graf" class="article article--history">
		<h2>Průběh dobrovolnické služby rok po roce</h2>
		<?php echo do_shortcode('[th-slider design="design-2" arrows="true" dots="false" autoplay="false"]'); ?>
	</div>

</main>


<?php get_footer(); ?>
