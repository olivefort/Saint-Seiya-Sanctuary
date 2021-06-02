<?php get_header(); ?>
SINGLE PERSO
<main id="main-content" class="post">
    <div class="container-perso">
        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();?>
                    <div class="h1cat"><?php
                        the_title('<h1>','</h1>');?>
                    </div>
                    <div class="trih1"></div>
                    <div class="global_perso">
                        <div class="perso-glob">
                            <div class="avatar_perso">
                                <?php 
                                $avatar = get_field('avatar');
                                    if($avatar){?>
                                        <?php echo wp_get_attachment_image( $avatar, 'medium_large');
                                    }?>
                            </div>
                            <div class="perso-detail">
                                <div class="perso_part1"><?php
                                    $height = get_field('taille');
                                    $height_suf = get_field_object('taille')['append'];
                                    if($height){?>
                                        <p><span>Taille</span> : <?php echo $height;?> <?php echo $height_suf; ?></p>
                                    <?php }
                                    
                                    $weight = get_field('poid');
                                    $weight_suf = get_field_object('poid')['append'];
                                    if($weight){?>
                                        <p><span>Poid</span> : <?php echo $weight; ?> <?php echo $weight_suf; ?></p>
                                    <?php }
                                    
                                    $gender = get_field('genre');
                                    if($gender){?>
                                        <p><span>Sexe</span> : <?php echo the_field('genre'); ?></p>
                                    <?php } 
                                    
                                    $land = get_field('pays');
                                    if($land){?>
                                        <p><span>Originaire de</span> : <?php echo $land; ?></p>
                                    <?php }?>
                                    
                                    <div class="birthday">
                                        <?php
                                        $dob = get_field('jdn');
                                        if($dob){?>
                                            <p><span>Né le</span> : <?php echo the_field('jdn'); ?> </p>
                                        <?php }else{?>
                                            <p><span>Né le</span> : ? </p>
                                        <?php }
                                        
                                        $mob = get_field('mdn');
                                        if($mob){?>
                                            <p>&nbsp<?php echo the_field('mdn'); ?></p>
                                        <?php } 
                                        ?>
                                    </div>
                                    
                                    <?php
                                    $sign = get_field('signe');
                                    if($sign){?>
                                        <p><span>Signe</span> : <?php echo the_field('signe'); ?></p>
                                    <?php }else{?>
                                        <p><span>Signe</span> : ? </p>
                                    <?php } ?>
                                    <div class="perso_family">
                                        <?php 
                                        $linkF = get_field('lien_f');
                                                
                                        $linkCF = get_field('choix_lien_f');
                                        if($linkCF && $linkF){?>
                                            <p><span><?php echo the_field('choix_lien_f'); ?></span></p>
                                        <?php }
                                        
                                        $linkPF = get_field('perso_lien_f');
                                        if($linkPF && $linkF){?>
                                            <ul>
                                            <?php foreach($linkPF as $plink):
                                                $name = get_the_title($plink->ID);
                                                $link = get_permalink($plink->ID);?>
                                                <li>
                                                <a href="<?php echo $link;?>"><?php echo $name; ?></a>
                                                </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="perso_partdesc">
                                    <?php 
                                    $desc = get_field('perso_desc');
                                    if($desc){?>
                                        <p><?php echo the_field('perso_desc');?></p>
                                    <?php }
                                    ?>
                                </div>
                                <div class="perso_part2">
                                    <div class="armure_perso">
                                        <?php
                                        $armor = get_field('perso_armor');
                                        if($armor){?>
                                            Armure : 
                                            <ul>
                                                <?php
                                                $name = get_the_title($armor->ID);
                                                $link = get_permalink($armor->ID);
                                                $avatar = get_field('avatar', $armor->ID); ?>
                                                <li>
                                                    <a href="<?php echo $link;?>"><?php echo $name; ?>
                                                        <?php echo wp_get_attachment_image( $avatar, 'thumbcustom'); ?>
                                                    </a>
                                                </li>
                                          
                                           </ul>
                                        <?php } ?>
                                    </div>
                                    <div class="link_perso">
                                        <div class="master">
                                            <?php
                                            $master = get_field('master');
                                            $master_link = get_field('master_link');
                                            if($master_link){?>
                                                Maitre de : 
                                                <ul class="eachstud">
                                                    <?php foreach($master_link as $masterlink):
                                                    $name = get_the_title($masterlink->ID);
                                                    $link = get_permalink($masterlink->ID);
                                                    $avatar = get_field('avatar', $masterlink->ID); ?>
                                                    <li>
                                                        <a href="<?php echo $link;?>"><?php echo $name; ?>
                                                            <?php echo wp_get_attachment_image( $avatar, 'thumbcustom'); ?> 
                                                        </a>
                                                    </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php } ?>
                                        </div>
                                        <div class="student">
                                            <?php
                                            $student = get_field('student');
                                            $stud_link = get_field('student_link');
                                            if($stud_link){?>
                                                Elève de :
                                                <ul> 
                                                    <?php foreach($stud_link as $studlink):
                                                    $name = get_the_title($studlink->ID);
                                                    $link = get_permalink($studlink->ID);
                                                    $avatar = get_field('avatar', $studlink->ID); ?>
                                                    <li>
                                                        <a href="<?php echo $link;?>"><?php echo $name; ?>
                                                            <?php echo wp_get_attachment_image( $avatar, 'thumbcustom'); ?>
                                                        </a>
                                                    </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trifoot"></div>
                        <!-- <div class="perso_foot glide">
                            <?php 
                                $images = get_field('galery');
                                if( $images ): ?>
                                    <div class="glide__track" data-glide-el="track">
                                        <ul class="gal glide__slides ">
                                            <?php foreach( $images as $image ): ?>
                                                <li class="galey glide__slide">
                                                    <a href="<?php echo esc_url($image['url']); ?>">
                                                        <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                                    </a>
                                                    <p><?php echo esc_html($image['caption']); ?></p>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <div class="glide__arrows" data-glide-el="controls">
                                        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
                                        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
                                    </div>
                                <?php endif; 
                            ?>
                        </div> -->
                        <div class="perso_foot">                            
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
                        <div class="buton_catarmor_perso">                            
                            <a href="http://localhost/SaintSeiyaWorld/personnage">
                                <img class='imgbut' src="<?= get_stylesheet_directory_uri();?>/pics/logoathena.png" alt="athenalogo" width="115" height="115"/>
                                <p>Personnages</p>
                            </a>
                        </div>
                    </div">                    
                    <?php
                };
            };
        ?>
    </div>
</main>

<?php get_footer(); ?>