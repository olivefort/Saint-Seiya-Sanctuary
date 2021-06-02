<?php get_header(); ?>
archive personnage
<main id="main-content" class="last-news">
    <div class="container-allperso">
        <h1 class="h1cat">PERSONNAGES</h1>
        <?php
            if(have_posts()){?>
                <div class='archiloop'>
                    <div class="allperso_loop">
                        <?php while(have_posts()){
                            the_post();
                            get_template_part('parts/post-loop-charac');
                        } ?>
                    </div>
                </div>
                <div class="trifootarch"></div>
                <div id="pagi">
                    <?php the_posts_pagination(
                        [
                        'prev_text'=> '&laquo',
                        'next_text'=> '&raquo'
                        ]
                    )?>
                </div>
            <?php } else { ?>
                <h1>Aucune news de moins de 6 mois</h1>
            <?php } ?>
    </div>
</main>

<?php get_footer(); ?>