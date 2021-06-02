<?php 

function chargementFiles(){
    wp_enqueue_style('base', get_stylesheet_directory_uri(  ) . '/css/base.css', array(), '1.0', 'all');
    wp_enqueue_style('main', get_stylesheet_directory_uri(  ) . '/css/main.css', array('base'), '1.0', 'all');
    wp_enqueue_style('main', get_stylesheet_directory_uri(  ) . '/css/main.scss', array('base'), '1.0', 'all');
    //wp_enqueue_style('glide.core.min', get_stylesheet_directory_uri(  ) . '/node_modules/@glidejs/glide/dist/css/glide.core.min.css', array('base'), '1.0', 'all');
    //wp_enqueue_style('glide.theme.min', get_stylesheet_directory_uri(  ) . '/node_modules/@glidejs/glide/dist/css/glide.theme.min.css', array('base'), '1.0', 'all');
    wp_enqueue_script('nav', get_stylesheet_directory_uri(  ) . '/js/nav.js', array(), '1.0', true);
    //wp_enqueue_script('glide.min', get_stylesheet_directory_uri(  ) . '/node_modules/@glidejs/glide/dist/glide.min.js', array(), '1.0', true);
    wp_enqueue_script('glide', get_stylesheet_directory_uri(  ) . '/js/glide.js', array('glide.min'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'chargementFiles');

add_theme_support( 'post-thumbnails' );

add_theme_support('title-tag');

add_image_size('img-article', 200, 200, true );
add_image_size('img-article2x', 400, 400, true );
add_image_size('custom', 300, 400, false );
add_image_size('thumbcustom', 150, 150, false );
add_image_size('gallery-thumb', 1200, 800, true );
add_image_size('galey_thumb', 0, 125, false );
add_image_size('avatar', 700, 0, false);
add_image_size('modale', 700,700, false);
//add_image_size('actu', 50, 50, false);
add_image_size('perso-list', 0, 200, false);
add_image_size('armor-list', 200, 200, false);
add_image_size('button', 50, 50, false);

register_nav_menus(
    array(
        'menu-du-header'=>'The menu of the header',
        'menu-du-footer'=>'The menu of the footer',
    )
);

function sss_post_type(){
    //CPT Catarmure
    $arg = [
        'public'        => true,
        'label'         =>'Catarmures',
        'show_in_rest'  => true,
        'supports'      => array('title', 'thumbnail', 'excerpt'),
        'has_archive'   => true,
        'menu_icon' => 'dashicons-universal-access-alt',
        'posts_per_page'=> 7,
    ];
    register_post_type('catarmure', $arg);   

    //CPT Armures
    $arg = [
        'public'        => true,
        'label'         =>'Armures',
        'show_in_rest'  => true,
        'supports'      => array('title', 'thumbnail'),
        'has_archive'   => true,
        'show_admin_column' => true,
        'menu_icon'     => 'dashicons-universal-access',
    
    ];
    register_post_type('armure', $arg);

    //Taxonomy
    register_taxonomy('type','armure', 
        array(
            'label' => 'Types',
            'labels' => array(
                'name' => 'Types',
                'singular_name' => 'Type',
                'all_items' => 'Toutes les types',
                'edit_item' => 'Éditer la type',
                'view_item' => 'Voir la type',
                'update_item' => 'Mettre à jour la type',
                'add_new_item' => 'Ajouter une type',
                'new_item_name' => 'Nouvelle type',
                'search_items' => 'Rechercher parmi les types',
                'popular_items' => 'types les plus utilisés'
            ),
            'hierarchical' => true
        )
    );

    //CPT Personnages
    $arg = [
        'public'        => true,
        'label'         =>'Personnages',
        'show_in_rest'  => true,
        'supports'      => array('title', 'thumbnail'),
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-groups',
    ];
    register_post_type('personnage', $arg);

    //CPT Histoires
    $arg = [
        'public'        => true,
        'label'         =>'Histoires',
        'show_in_rest'  => true,
        'supports'      => array('title', 'thumbnail'),
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-bank',
    ];
    register_post_type('histoire', $arg);
}

add_action('init', 'sss_post_type');

//fonction pour changer le sous menu des catégories d'armures (tous visible)
function be_change_event_posts_per_page( $query ) {
	//catarmures
	if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'catarmure' ) ) {
		$query->set( 'posts_per_page', '8');
	}
    if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'personnage' ) ) {
		$query->set( 'posts_per_page', '20');
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
	}
    // if( $query->is_main_query() && !is_admin() && $query->is_page('armure')){
    //     $query->set( 'posts_per_page', '4');
    //     $query->set( 'orderby', 'title' );
    //     $query->set( 'order', 'ASC' );
    // }
}
add_action( 'pre_get_posts', 'be_change_event_posts_per_page' );

//fonction pour enlever les balise <p> avant et après les exerpt de wysiwyg
remove_filter( 'the_excerpt', 'wpautop' );


function mytheme_custom_excerpt_length( $length ) {
    return 40;//Le nombre de mots
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );
