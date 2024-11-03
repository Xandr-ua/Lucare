<?php

function reviews_register_post_type() {

    $args = array(
        'label'  => esc_html__( 'Reviews', 'vestor'),
        'labels' => array(
            'name' => esc_html_x( 'Reviews', 'vestor'),
            'singular_name' => esc_html_x( 'Review', 'vestor'),
            'add_new' => esc_html__( 'Add New Review', 'vestor'),
            'add_new_item' => esc_html__( 'Add New Review', 'vestor'),
            'edit_item' => esc_html__( 'Edit Review', 'vestor'),
            'new_item' => esc_html__( 'New Review', 'vestor'),
            'view_item' => esc_html__( 'View Reviews', 'vestor'),
            'search_items' => esc_html__( 'Search Reviews', 'vestor'),
            'not_found' => esc_html__( 'No reviews found', 'vestor'),
            'not_found_in_trash' => esc_html__( 'No reviews found in trash', 'vestor'),
            'parent_item_colon' => esc_html__( 'Parent Reviews:', 'vestor' ),
            'menu_name' => esc_html_x( 'Reviews', 'vestor' ),
            'name_admin_bar' => esc_html_x( 'Review', 'vestor' ),
            'featured_image' => esc_html_x( 'Review Cover Image', 'vestor' ),
        ),
        'supports' => array('title', 'editor', 'thumbnail' ),
        'public' => true,
        'publicly_queryable' => false,
        'has_archive' => false,
        'rewrite' => false,
        'menu_icon' => 'dashicons-welcome-write-blog'
    );

    register_post_type('reviews', $args);
}

add_action('init', 'reviews_register_post_type');
