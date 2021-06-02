<?php 
/*
Template Name: Champ Galerie
*/
get_header();
    if( have_posts() ){
        while( have_posts() ){
            the_post();
            $images = get_field('gallery');
                if( $images ){?>
                    <ul class="acf-gallery">
                    <?php foreach( $images as $image_id ): 
                        $size = 'gallery-thumb';
                        ?>
                        <li>
                            <a href="<?php echo wp_get_attachment_url( $image_id ); ?>">
                                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                <?php }
        };
    }
?>