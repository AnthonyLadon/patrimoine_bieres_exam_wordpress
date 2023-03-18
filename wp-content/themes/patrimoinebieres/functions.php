<?php

add_theme_support('menus');
add_theme_support('widgets');
add_theme_support('post-thumbnails');
add_theme_support( 'align-wide' );

register_nav_menus(['patrimoine_menu_principal' => 'menu de navigation principal']);


register_sidebar(
    array(
        'name' => __('footer left', 'my_theme_lang'),
        'id' => 'patrimoine_footer_gauche',
        'before_sidebar' => '<div id="f_left">',
        'after_sidebar' => '</div>',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
    )
);
register_sidebar(
    array(
        'name' => __('footer center', 'my_theme_lang'),
        'id' => 'patrimoine_footer_centre',
        'before_widget' => '<div id="f_center">',
        'after_widget' => '</div>',
    )
);
register_sidebar(
    array(
        'name' => __('footer right', 'my_theme_lang'),
        'id' => 'patrimoine_footer_droit',
        'before_widget' => '<div id="f_right">',
        'after_widget' => '</div>',
    )
);



// charger partout dans le site la feuille css/festival.css
function patrimoinebieres_load_css() {
    wp_register_style('patrimoinebieres',get_template_directory_uri().'/css/festival.css', null, '1.0', 'screen');
    wp_enqueue_style('patrimoinebieres');
    }
    add_action( 'wp_enqueue_scripts', 'patrimoinebieres_load_css' );

// charger le googleFonts
function patrimoinebieres_load_fonts() {
    wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Montserrat%3A300%2C600%7COpen+Sans%3A600&amp;display=swap', null, '1.0', 'screen');
    wp_enqueue_style('googleFonts');
    }
    add_action( 'wp_enqueue_scripts', 'patrimoinebieres_load_fonts' );


// recuperer le l'url de la page par son slug

function get_url_by_slug($slug) {
    $page_url_id = get_page_by_path($slug);
    $page_url_link = get_permalink($page_url_id);
    return $page_url_link;
}
