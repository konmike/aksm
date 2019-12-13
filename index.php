<?php get_header(); ?>

<main>

    <header class="header header--search-and-nav">
        <a href="./"><img src="wp-content/uploads/2019/12/logo2.png" alt="AKSM" width="50px"></a>

		<?php wp_nav_menu(  array( 'theme_location' => 'primary-menu',
		                           'container' => 'nav',
		                           'container_class' => 'nav nav--block nav--primary menu-fixed',
		                           'container_id' => 'menu'));  ?>

    </header>

    <?php
        $introducePost = get_post(30);
        $title = $introducePost->post_title;
        $content = $introducePost->post_content;
    ?>
    <div class="article">
        <h1><?=$title?></h1>
        <p><?=$content?></p>
    </div>

</main>

	
<?php get_footer(); ?>
