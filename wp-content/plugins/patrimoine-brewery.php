<?php
/**
** Plugin Name: Patrimoine Brewery
** Plugin URI: http://www.patrimoine-brewery.com
** Description: Plugin pour le site Patrimoine Brewery
** Version: 1.0
** Author: Anthony Ladon
*/

function contenus_perso_patrimoine_bieres(){

         $labels = array(
            'name'                =>  __('Brasseries', 'patrimoine_bieres'),
            'singular_name'       => __('Brasserie', 'patrimoine_bieres'),
            'menu_name'           => __('Brasseries', 'patrimoine_bieres'),
            'all_items'           => __('Toutes les brasseries', 'patrimoine_bieres'),
            'view_item'           => __('Voir la brasserie', 'patrimoine_bieres'),
            'add_new_item'        => __('Ajouter une brasserie', 'patrimoine_bieres'),
            'add_new'             => __('Ajouter', 'patrimoine_bieres'),
            'edit_item'           => __('Modifer la brasserie', 'patrimoine_bieres'),
            'update_item'         => __('Mettre à jour la brasserie', 'patrimoine_bieres'),
            'search_items'        => __('Rechercher une brasserie', 'patrimoine_bieres'),
            'not_found'           => __('Aucune brasserie', 'patrimoine_bieres'),
            'not_found_in_trash'  => __('Aucune brasserie dans la corbeille', 'patrimoine_bieres'));

        $args = array (
            'label'               => __('Brasseries', 'patrimoine_bieres'),
            'description'         => __('Brasseries participantes', 'patrimoine_bieres'),
            'labels' => $labels,
            'supports' => array('title', 'editor', 'thumbnail'),
            // non-hiérarchique se comporte comme un Article (Post)
            'hierarchical' => false,
            'has_archive' => true,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'show_in_nav_menus' => true,
            'menu_position' => 21,
            'capability_type' => 'page',
            'show_in_rest' => false,
            'taxonomies' => array( 'category' )
        );

        register_post_type('brasseries', $args);
    }

 add_action('init', 'contenus_perso_patrimoine_bieres', 0);

?>