<?php get_header(); ?>
archive histoire
<main id="main-content" class="post">
    <div class="container-story">
        <h1 class="h1cat">HISTOIRE</h1>
        <div>
            <p>Frise chronologique</p>
        </div>
        <?php
            if(have_posts()){?>
                <?php while(have_posts()){
                    the_post();
                    get_template_part('parts/post-loop-story');
                } ?>
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