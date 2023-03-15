<?php

add_theme_support('menus');
add_theme_support('widgets');

register_nav_menus(['patrimoine_menu_principal' => 'menu de navigation principal']);


register_sidebar(
    array(
        'name' => __('footer principal', 'my_theme_lang'),
        'id' => 'footer_principal',
        'before_widget' => '<div class="wdgt_left">',
        'after_widget' => '</div>',
        'before-sidebar' => '<div class="zone_left">',
        'after_sidebar' => '</div>'
    )
);

function patrimoine_load_css() {
    wp_enqueue_style('patrimoine-theme',get_template_directory_uri().'/cs 
    s/style.css');
    }