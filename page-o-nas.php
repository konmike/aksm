<?php get_header(); ?>
    <?php
        $creationPost = get_post(144);
        $title = $creationPost->post_title;
        $content = $creationPost->post_content;
    ?>
<main>
    <div class="article article--creation">
        <div class="content">
            <h1>O nás</h1>
            <h2>Vznik</h2>
            <?=$content?>

            <a href="#focus" class="smooth-scroll link--next-article">
                Jaké je naše zaměření?
            </a>
        </div>
        <div class="creation-image"></div>
    </div>

	<?php
        $focusPost = get_post(148);
        $title = $focusPost->post_title;
        $content = $focusPost->post_content;
	?>

    <div id="focus" class="article article--focus">
        <div class="focus-image"></div>
        <div class="content">

            <h2>Zaměření</h2>
	        <?=$content?>

            <a href="#activity" class="smooth-scroll link--next-article">
                Jaký je charakter činnosti naší asociace?
            </a>
        </div>
    </div>

	<?php
        $activityPost = get_post(146);
        $title = $activityPost->post_title;
        $content = $activityPost->post_content;
	?>

    <div id="activity" class="article article--activity" >
        <div class="content">
            <h2>Činnost</h2>
	        <?=$content?>

<!--            <p>Charakter činnosti jednotlivých členů asociace se různí, je však zaměřen většinou na-->
<!--            neorganizovanou mládež, se snahou o účelné a společensky žádoucí využití volného času,-->
<!--            na výchovu a formaci dobrovolných spolupracovníků - animátorů a na vysílání dobrovolníků,-->
<!--            ochotných věnovat rok svého života dobrovolnické službě v oblasti volného času dětí a mládeže.</p>-->
<!---->
<!--            <p>AKSM je od roku 2004 držitelkou akreditace Ministerstva vnitra ČR vysílající organizace-->
<!--            v oblasti dobrovolnické služby.-->
<!--            AKSM získala také akreditaci MŠMT na školení hlavních vedoucích dětských letních táborů.</p>-->
<!---->
<!--            <p>AKSM ve spolupráci se Sekcí pro mládež České biskupské konference pořádá několik-->
<!--            studijních týdnů pro mladé pracovníky s dětmi a mládeží, tzv. Studijně-formační kurs,-->
<!--            kde probíhají různé přednášky a semináře na témata týkající se výchovy dětí a mládeže.-->
<!--            Projekt je zaměřen na formaci mladých tak, aby nebyli pouze dobrými organizátory či-->
<!--            vedoucími, ale především skutečnými osobnostmi.</p>-->
        </div>
        <div class="activity-image"></div>
    </div>

<!--        <a href="#prepare" class="smooth-scroll link--prepare">-->
<!--            Nechceš i Ty věnovat rok svého života práci pro druhé?-->
<!--        </a>-->


<!--	<div class="divider divider--vertical-center"></div>-->

<!--	<div class="volunteer-image"></div>-->

<!--	<a href="#projects" class="smooth-scroll link--double-down">-->
<!--		<i class="fas fa-angle-double-down"></i>-->
<!--	</a>-->

</main>


<?php get_footer(); ?>
