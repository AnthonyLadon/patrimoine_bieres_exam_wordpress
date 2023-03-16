<?php

add_theme_support('menus');
add_theme_support('widgets');

register_nav_menus(['patrimoine_menu_principal' => 'menu de navigation principal']);


register_sidebar(
    array(
        'name' => __('footer left', 'my_theme_lang'),
        'id' => 'patrimoine_footer_gauche',
        'before_widget' => '<div id="f_left">',
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

function patrimoine_load_css() {
    wp_enqueue_style('patrimoine-theme',get_template_directory_uri().'/cs 
    s/style.css');
    }