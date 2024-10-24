<?php

//Remove unnecessary WordPress scripts and styles
add_action('after_setup_theme', function () {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    add_action('wp_enqueue_scripts', function () {
        wp_dequeue_style('wp-block-library');
        wp_dequeue_style('classic-theme-styles');
        wp_dequeue_style('global-styles');
    });
});