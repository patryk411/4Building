<?php

function building_post_type() {

    register_post_type('investments', array(
        'supports' => array('title','editor', 'excerpt', 'thumbnail'),
       'show_in_rest' => true,
       'rewrite' => array('slug' => 'investments'),
       'has_archive' => true,
       'public' => true,
       'labels' => array(
           'name' => 'Investments',
           'add_new_item' => 'Add New Investment',
           'edit_item' => 'Edit Investment',
           'all_items' => 'All Investments',
           'singular_name' => 'Investment'
       ),
        'menu_icon' => 'dashicons-format-image'
   ));
   
    register_post_type('complete_investments', array(
        'supports' => array('title','editor', 'excerpt', 'thumbnail'),
       'show_in_rest' => true,
       'rewrite' => array('slug' => 'complete_investments'),
       'has_archive' => true,
       'public' => true,
       'labels' => array(
           'name' => 'Complete Investments',
           'add_new_item' => 'Add New Complete Investment',
           'edit_item' => 'Edit Complete Investment',
           'all_items' => 'All Complete Investments',
           'singular_name' => 'Complete Investment'
       ),
        'menu_icon' => 'dashicons-building'
   ));

    register_post_type('apartment', array(
        'supports' => array('title','editor', 'excerpt', 'thumbnail'),
       'show_in_rest' => true,
       'rewrite' => array('slug' => 'apartments'),
       'has_archive' => true,
       'public' => true,
       'labels' => array(
           'name' => 'Apartments',
           'add_new_item' => 'Add New Apartment',
           'edit_item' => 'Edit Apartment',
           'all_items' => 'All Apartments',
           'singular_name' => 'Apartment'
       ),
        'menu_icon' => 'dashicons-editor-textcolor'
   ));
}

add_action('init', 'building_post_type');