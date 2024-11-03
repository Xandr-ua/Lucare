<?php
//Add own configs, styles and scripts
add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');

    include get_template_directory() . '/inc/menu.php';

    add_action('wp_enqueue_scripts', function () {
        wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/assets/dist/css/style.min.css', [], wp_get_theme()->get('Version'));
        wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/assets/dist/js/bundle.min.js', [], wp_get_theme()->get('Version'), true);
    });

    add_filter('wpcf7_autop_or_not', '__return_false');
});
