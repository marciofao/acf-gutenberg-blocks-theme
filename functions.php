<?php
//die(get_stylesheet_directory() . 'blocks/block-portfolio-item.php');

function agb_theme_setup() {
    /*
     * Load bootstrap and other css assets
     */
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, '1.1', 'all');
    wp_enqueue_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', false, '1.1', 'all');

    wp_enqueue_style('default_css', get_template_directory_uri() . '/css/style.css', false, '1.1', 'all');



}
add_action('after_setup_theme', 'agb_theme_setup');

// check function exists
if (function_exists('acf_register_block_type')) {

    add_action('acf/init', 'register_acf_block_types');
    // register a portfolio item block
    //register_block_type(get_stylesheet_directory() . 'block-portifolio-item.json');
}


function register_acf_block_types() {
    acf_register_block_type(
        array(
            'name'            => 'SEO Header',
            'title'           => __('SEO Header'),
            'description'     => __('Site header'),
            'render_template' => 'template-parts/blocks/seo_header.php',
            'icon'            => 'align-full-width',
            'keywords'        => array('top', 'header')

        )
    );
}


add_theme_support('custom-logo');
function agb_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'agb_custom_logo_setup');