<?php
//die(get_stylesheet_directory() . 'blocks/block-portfolio-item.php');

function myfirsttheme_setup() {
    /*
     * Load bootstrap and other css assets
     */
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, '1.1', 'all');

}
add_action('after_setup_theme', 'myfirsttheme_setup');

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