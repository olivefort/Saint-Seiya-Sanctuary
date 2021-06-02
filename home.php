<?php get_header(); ?>
home
<main id="main-content" class="last-news">
    <div class="container-catnews">
    <h1 class="h1actu">NEWS</h1>
        <?php
            if(have_posts()){
                // wp_list_categories('title_li');
                while(have_posts()){
                    the_post();                    
                    get_template_part('parts/post-loop-actu');
                };
            };?>  
        <div id="precsuiv" class="pagination">
        <?php the_posts_pagination([
            'prev_text' => '<',
            'next_text' => '>'
        ]);?>
        </div>
    </div>

</main>

<?php get_footer(); ?>