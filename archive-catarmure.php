<?php get_header(); ?>
archive CATarmure
<main id="main-content" class="last-news">
    <div class="container-catarmor">
        <h1 class="h1cat">ARMURES</h1>
        <?php
            if(have_posts()){?>
                <div class='archiloop'>
                    <div class="catarmor_loop">
                        <?php while(have_posts()){
                            the_post();
                            get_template_part('parts/post-loop-catarmor');
                        } ?>
                    </div>
                </div>
                <div class="trifootarch"></div>
            <?php } ?>
    </div>
</main>

<?php get_footer(); ?>