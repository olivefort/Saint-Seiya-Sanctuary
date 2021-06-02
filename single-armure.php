<?php get_header(); ?>

<main id="main-content" class="post">
    SINGLE ARMURes
    <div class="container-armor">
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();?>
                    <div class="h1cat"><?php
                        the_title('<h1>','</h1>');?>
                    </div>
                    <div class="trirevh1"></div>
                    <div class="global_armor">
                        <div class="armor_part1">
                            <div class="armor_desc">
                                <?php
                                $desc = get_field('description');
                                if($desc){
                                    echo $desc;
                                } ?>
                            </div>
                            <div class="armor_appear">
                                <?php
                                $apparitions = get_field('apparition');
                                if($apparitions){?>
                                    <ul class="app_armor">
                                        <span> Cette armure apparait dans :</span>
                                        <?php foreach($apparitions as $apparition):?>
                                            <li><?php echo $apparition; ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                    
                                <?php } ?>
                            </div>
                            <div class="armor_link">
                                <div class="armor_wear">
                                    <?php
                                    $wear = get_field('wearer');
                                    if($wear){?>
                                        <span>Porté par :</span>
                                        <ul class="eachwear">
                                        <?php foreach($wear as $weared):
                                            $name = get_the_title($weared->ID);
                                            $link = get_permalink($weared->ID);
                                            $avatar = get_field('avatar', $weared->ID);?>
                                            <li>
                                                <a href="<?php echo $link;?>"><?php echo $name; ?>
                                                <?php echo wp_get_attachment_image( $avatar, 'thumbcustom'); ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                    <?php } ?>
                                </div>
                                <div class="armor_version">
                                    <?php
                                        if (have_rows('version_link')){?>
                                        <span>Version de l'armure :</span>
                                        <ul class="list_version">
                                            <?php while (have_rows('version_link')){
                                                the_row(); 
                                                $img = get_sub_field('version_img'); 
                                                $size = 'thumbcustom';
                                                $sizemod = 'modale';?>
                                                <li>
                                                    <p><?php the_sub_field('version_type'); ?></p>
                                                    <?php
                                                    if ($img){?>
                                                        <div class="btn">
                                                            <?php
                                                            echo wp_get_attachment_image($img, $size);
                                                            ?>
                                                        </div>
                                                        <div class='modal'>
                                                            <div class='soumod'>
                                                                <?php
                                                                echo wp_get_attachment_image($img, $sizemod);
                                                                ?>
                                                                <div class='close'>
                                                                    <svg  class="closed" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px"  viewBox="0 0 94.926 94.926" style="enable-background:new 0 0 94.926 94.926;" xml:space="preserve"><g><path d="M55.931,47.463L94.306,9.09c0.826-0.827,0.826-2.167,0-2.994L88.833,0.62C88.436,0.224,87.896,0,87.335,0 c-0.562,0-1.101,0.224-1.498,0.62L47.463,38.994L9.089,0.62c-0.795-0.795-2.202-0.794-2.995,0L0.622,6.096
                                                                    c-0.827,0.827-0.827,2.167,0,2.994l38.374,38.373L0.622,85.836c-0.827,0.827-0.827,2.167,0,2.994l5.473,5.476
                                                                    c0.397,0.396,0.936,0.62,1.498,0.62s1.1-0.224,1.497-0.62l38.374-38.374l38.374,38.374c0.397,0.396,0.937,0.62,1.498,0.62
                                                                    s1.101-0.224,1.498-0.62l5.473-5.476c0.826-0.827,0.826-2.167,0-2.994L55.931,47.463z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="armor_part2">
                            <div id="armor" class="armor_avatar">
                                <?php 
                                $avatar = get_field('avatar');
                                    if($avatar){?>
                                        <?php echo wp_get_attachment_image( $avatar, 'avatar');
                                    }?>

                            </div>
                        </div>
                    </div>
                    <div class="trirevfoot"></div>                    
                    <div class="armor_foot">                            
                            <?php $images = get_field('galery');
                                if( $images ): ?>
                                <h2>Gallerie</h2>
                                <div class="car-main-col" id="masonry-wrap" data-columns>
                                <ul class="galey_contain">       
                                    <?php foreach( $images as $image ): 
                                        $content = '<li class="galey">';
                                        $content .= '<a class="gallery_image" href="'. $image['url'] .'">';
                                        $content .= '<img src="'. $image['sizes']['galey_thumb'] .'" alt="'. $image['alt'] .'" />';
                                        $content .= '</a>';
                                        $content .= '</li>';
                                    if ( function_exists('slb_activate') ){
                                    $content = slb_activate($content);
                                    }
                                    echo $content;?>
                                    <?php endforeach; ?>
                                </ul>
                                </div>
                                <?php endif; ?>
                    </div>
                    <div class="buton_armor">                            
                        <a href="http://localhost/SaintSeiyaWorld/armure">
                            <img class='imgbut' src="<?= get_stylesheet_directory_uri();?>/pics/logoathena.png" alt="athenalogo" width="115" height="115"/>
                            <p>Armures</p>
                        </a>
                        
                        <?php
                        $clickme = get_field('boutonlink');
                        if($clickme){?>
                        <?php 
                            //$pouet = get_the_category($clickme->ID);
                            $name = get_the_title($clickme->ID);
                            $link = get_permalink($clickme->ID);
                            $avatar = get_the_post_thumbnail($clickme->ID); ?>
                            <a href="<?php echo $link;?>"> 
                                <div class='imgbut'>
                                    <?php  echo $avatar ?>
                                </div>
                                Retour 
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