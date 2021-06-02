<?php get_header(); ?>
archive (news)

<main id="main-content" class="last-news">
    <div class="container-catnews">
        <h1 class="h1actu"><?php single_cat_title();?></h1>
        <?php
            if(have_posts()){?>
                <?php while(have_posts()){
                    the_post();
                    get_template_part('parts/post-loop-actu');
                }} ?>
            <div id="precsuiv" class="pagination">
                <?php the_posts_pagination([
                    'prev_text' => '<',
                    'next_text' => '>'
                ]);?>
            </div>
            <div class="buton_catarmor_perso">                            
                <a href="http://localhost/SaintSeiyaWorld/actualites/">
                <img class='imgbut' src="<?= get_stylesheet_directory_uri();?>/pics/logoathena.png" alt="athenalogo" width="115" height="115"/>
            <p>News</p>
        </a>
    </div>
    </div>
</main>

<?php get_footer(); ?>