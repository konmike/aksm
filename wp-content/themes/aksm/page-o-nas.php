<?php get_header(); ?>
    <?php
        $creationPost = get_post(30);
        $title = $creationPost->post_title;
        $content = $creationPost->post_content;
        $image = get_the_post_thumbnail_url(30,'full');
    ?>
<main>
    <div class="article article--creation">
	    <?php
	    if ( ! empty($image) ){
		    echo '<div class="content">';
	    }
	    else
		    echo '<div class="content" style="grid-column: 1/3; padding: 0 15rem">';
	    ?>
            <h1>O nás</h1>
            <h2>Vznik</h2>
            <?=$content?>

            <a href="#focus" class="smooth-scroll link--next-article">
                Jaké je naše zaměření?
            </a>
        </div>

        <?php
            if ( ! empty($image) ){
                echo '<div class="illustration-image" style="background-image: url(' . $image . ')"></div>';
            }
        ?>
    </div>

	<?php
        $focusPost = get_post(34);
        $title = $focusPost->post_title;
        $content = $focusPost->post_content;
	    $image = get_the_post_thumbnail_url(34,'full');
	?>

    <div id="focus" class="article article--focus">
        <?php
            if ( ! empty($image) ){
	            echo '<div class="illustration-image" style="background-image: url(' . $image . ')"></div>';
                echo '<div class="content">';
            }
            else
	            echo '<div class="content" style="grid-column: 1/3; padding: 0 15rem">';
        ?>
            <h2>Zaměření</h2>
	        <?=$content?>

            <a href="#activity" class="smooth-scroll link--next-article">
                Jaký je charakter činnosti naší asociace?
            </a>
        </div>
    </div>

	<?php
        $activityPost = get_post(32);
        $title = $activityPost->post_title;
        $content = $activityPost->post_content;
	    $image = get_the_post_thumbnail_url(32,'full');
	?>

    <div id="activity" class="article article--activity" >
	    <?php
	    if ( ! empty($image) )
		    echo '<div class="content">';
	    else
		    echo '<div class="content" style="grid-column: 1/3; padding: 0 15rem">';
	    ?>

            <h2>Činnost</h2>
	        <?=$content?>
        </div>
	    <?php

	    if ( ! empty($image) )
		    echo '<div class="illustration-image" style="background-image: url(' . $image . ')"></div>';
	    ?>
    </div>

</main>


<?php get_footer(); ?>
