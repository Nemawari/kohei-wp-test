<?php

function create_custom_post_type() {
    register_post_type('work',
        array(
            'labels'      => array(
                'name'          => __('Works'),
                'singular_name' => __('Work'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports'    => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'create_custom_post_type');

function my_theme_enqueue_scripts() {
    // jQueryの読み込み
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), null, true);

    // ScrollRevealの読み込み
    wp_enqueue_script('scrollreveal', 'https://unpkg.com/scrollreveal', array(), null, true);

    // カスタムスクリプトの読み込み
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/index.js', array('jquery', 'scrollreveal'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');
?>
