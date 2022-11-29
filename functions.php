<?php

function furmanczyk_files() {
    return wp_enqueue_style('furmanczyk_main_styles', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'furmanczyk_files');


add_action( 'init', 'register_acf_block_types' );

function register_acf_block_types() {

    if( function_exists('acf_register_block_type')) {
        // register services block

        acf_register_block_type(array(
            'name' => 'header',
            'title' => __('header'),
            'description' => __('Header'),
            'render_template' => 'template-parts/blocks/header/header.php',
            'category' => 'formatting',
            'icon' => 'admin-users',
            'keywords' => array('header'),
        ));

        acf_register_block_type(array(
            'name' => 'img-left-text-right',
            'title' => __('Img-left-text-right'),
            'description' => __('A custom block with an image and text'),
            'render_template' => 'template-parts/blocks/img-left-text-right/img-left-text-right.php',
            'category' => 'formatting',
            'icon' => 'admin-users',
            'keywords' => array('img-left-text-right'),
        ));

        acf_register_block_type(array(
            'name' => 'text-left-img-right',
            'title' => __('Text-left-img-right'),
            'description' => __('A custom block with a text and image'),
            'render_template' => 'template-parts/blocks/text-left-img-right/text-left-img-right.php',
            'category' => 'formatting',
            'icon' => 'admin-users',
            'keywords' => array('text-left-img-right'),
        ));

        acf_register_block_type(array(
            'name' => 'carousel',
            'title' => __('Carousel'),
            'description' => __('A custom block with a carousel and text'),
            'render_template' => 'template-parts/blocks/carousel/carousel.php',
            'category' => 'formatting',
            'icon' => 'admin-users',
            'keywords' => array('carousel'),
            'enqueue_style' => get_stylesheet_directory_uri() . 'template-parts/blocks/carousel/carousel.css'
        ));

        acf_register_block_type(array(
            'name' => 'text-line',
            'title' => __('Text-line'),
            'description' => __('A custom block with a text line'),
            'render_template' => 'template-parts/blocks/text-line/text-line.php',
            'category' => 'formatting',
            'icon' => 'admin-users',
            'keywords' => array('text-line'),
        ));
    }
}

//Hook the function into setup
    add_action('acf/init', 'register_acf_block_types');


function Usługi() {
    register_post_type('event', array(
        'public' => true,
        'labels' => array(
            'name' => 'Usługi'
        ),
        'menu_icon' => 'dashicons-admin-tools',
    ));
}


add_action('init', 'Usługi');

