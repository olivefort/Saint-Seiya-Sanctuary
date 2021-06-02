<?php get_header(); ?>

<section class="hero">
    <div class="container"> 
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    the_content();
                };
            };
        ?>
    </div> 
</section>
<section class="actu">
    <h2>Quelques armures</h2>
    <ul class="armure_list">
        <?php
            $option = [
                'post_type' => 'armure',
            ];
            $requete = new WP_Query($option);
            if($requete->have_posts()){
                while($requete->have_posts()){
                    $requete->the_post();?>
                    <li><a  href="<?php the_permalink(); ?>" title=""><?php the_post_thumbnail('thumbnail')?></a></li>
            <?php };}; wp_reset_postdata();?>
    </ul>
</section>
<section class="actu">
    <h2>Les Dernieres News du Sanctuaires</h2>
        <?php
            $args = [
                'post_type'     => 'post',
                'post_per_page' => 4,
                'orderby'       => 'date',
                'order'         => 'DESC'
            ];
            $requete = new WP_Query($args);
            if($requete->have_posts()){ ?>
                <div class="actu_front">
                    <?php while($requete->have_posts()){
                        $requete->the_post();
                        get_template_part('parts/post-loop-actu');
                    };?>
                </div>
            <?php }; wp_reset_postdata();?>
            
</section>
   


<?php get_footer(); ?>