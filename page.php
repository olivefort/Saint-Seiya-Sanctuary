<?php get_header(); ?>

<main id="main-content" class="post">
PAGE !
    <div class="container-page">
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    the_post_thumbnail('medium');?>
                    <div class="h1cat"><?php
                        the_title('<h1>','</h1>');?>
                    </div>
                    <div class="trirevh1"></div>
                    <div class="global_page">
                        <?php the_content(); ?>
                    </div>
                    <div class="trifootpage"></div>    
                    <?php
                };
            };
        ?>
    </div>
</main>

<?php get_footer(); ?>