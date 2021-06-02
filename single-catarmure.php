<?php get_header(); ?>

<main id="main-content" class="post">
    SINGLE CATarmUres
    <div class="container-catarmor">
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post(); ?>
                    <div class="h1cat"><?php
                        the_title('<h1>','</h1>');?>
                    </div>
                    <?php
                    $likarmure = get_field('lien_armor');
                    if($likarmure){?>
                    <div  class="list_armor">
                        <ul class="armor_list">
                        <?php foreach($likarmure as $likarm):
                            $name = get_the_title($likarm->ID);
                            $link = get_permalink($likarm->ID);
                            $avatar = get_field('avatar', $likarm->ID);
                            ?>
                            <li class="eacharmor">
                                <a href="<?php echo $link;?>">
                                    <p><?php echo $name;?></p>
                                    <div class="imgeachlist">
                                        <div>
                                        <?php 
                                        if ($avatar){
                                            echo wp_get_attachment_image($avatar,'armor-list');
                                        }
                                        ?>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="trifoot"></div>                    
                    <?php }
                };
            };
        ?>
    </div>
    <div class="buton_catarmor_perso">                            
        <a href="http://localhost/SaintSeiyaWorld/armure">
            <img class='imgbut' src="<?= get_stylesheet_directory_uri();?>/pics/logoathena.png" alt="athenalogo" width="115" height="115"/>
            <p>Armures</p>
        </a>
    </div>
</main>

<?php get_footer(); ?>