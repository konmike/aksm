<?php get_header(); ?>

	<?php
	$volunteerPost = get_post(93);
	$title = $volunteerPost->post_title;
	$content = $volunteerPost->post_content;
	?>
<main>
<div class="article article--volunteer">
	<div class="content">
<!--		--><?php //the_breadcrumb(); ?>
        <h1>Dobrovolnická služba AKSM</h1>

        <h2><?=$title?></h2>
        <?=$content?>


        <a href="#prepare" class="smooth-scroll link--next-article">
            Nechceš i Ty věnovat rok svého života práci pro druhé?
        </a>

	</div>

<!--	<div class="divider divider--vertical-center"></div>-->

	<div class="volunteer-image"></div>

<!--	<a href="#projects" class="smooth-scroll link--double-down">-->
<!--		<i class="fas fa-angle-double-down"></i>-->
<!--	</a>-->
</div>

	<?php
	$preparePost = get_post(131);
	$title = $preparePost->post_title;
	$content = $preparePost->post_content;
	?>

<div id="prepare" class="article article--prepare">
    <div class="prepare-image"></div>

<!--    <div class="divider divider--vertical-center"></div>-->
    
    <div class="content">
        <h2><?=$title?></h2>
        <?=$content?>

        <span class="mail_to_us">Napiš nám na&nbsp;
            <a href="mailto:aksm@signaly.cz?subject=feedback" class="">
                aksm@signaly.cz
            </a>
            &nbsp;nebo&nbsp;
            <a href="mailto:mladez@cirkev.cz?subject=feedback" class="">
                mladez@cirkev.cz
            </a>.
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
