<?php get_header(); ?>
SINGLE (news)
<main id="main-content" class="post">
    <div class="container-actualite">
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>
                    <?php the_title('<h1 class="h1news">','</h1>');?>
                    <div class="trih1"></div>
                    <div class="newscontent">
                        <div class="newsimg">
                            <?php the_post_thumbnail('modale'); ?>
                        </div>
                        <div class="newstext">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="trifoot"></div>
                    <div class="buton_armor">                            
                        <a href="http://localhost/SaintSeiyaWorld/actualite">
                            <img class='imgbut' src="<?= get_stylesheet_directory_uri();?>/pics/logoathena.png" alt="athenalogo" width="115" height="115"/>
                            <p>News</p>
                        </a>
                        <?php
                        $clickme = get_field('boutonlink');
                        if($clickme){               
                            $name = $clickme->name;                            
                            $slug = $clickme->slug;
                            $link = "http://localhost/SaintSeiyaWorld/category/".$slug;                            
                            // $avatar = get_the_post_thumbnail($clickme->ID); 
                            ?>
                            <a href="<?php echo $link;?>"> 
                                <img class='imgbut' src="<?= get_stylesheet_directory_uri();?>/pics/logoathena.png" alt="athenalogo" width="115" height="115"/>
                                <?php echo $name;?>
                            </a>
                        
                        <?php }?>
                    </div>
                    <?php
                };
            };
        ?>
    </div>
</main>

<?php get_footer(); ?>

