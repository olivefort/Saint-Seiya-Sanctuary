<article class="actulist">    
    <div class="actuimg"><?php the_post_thumbnail('img-article2x'); ?></div>   
    <?php the_title('<p class="actutitle">','</p>');?>             
    <!-- <p><?php the_excerpt(); ?></p> -->
    <div class="actufoot">
        <p><span> publié le <?php echo get_the_date(); ?></span></p>
        <a class="lls" href="<?php the_permalink(); ?>">Lire l'article</a>
    </div>
</article>
