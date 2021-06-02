<?php get_header(); ?>

<main id="main-content" class="post">
    SINGLE histoire
    <div class="container container-narrow">
        <?php
            if(have_posts()){
                while(have_posts()){
                    
                    the_post();
                    the_title('<h1>','</h1>');
                    the_post_thumbnail('large');
                    
                    $desc = get_field('champ_one');
                    if($desc){
                        echo $desc;
                    }

                    $desc = get_field('champ_two');
                    if($desc){
                        echo $desc;
                    }

                    $desc = get_field('champ_three');
                    if($desc){
                        echo $desc;
                    }
                };
            };
        ?>
    </div>
</main>

<?php get_footer(); ?>