<?php
//die(get_stylesheet_directory() . 'blocks/block-portfolio-item.php');

function agb_theme_setup() {
    wp_enqueue_style('favicon', get_template_directory_uri() . '/img/favicon.ico', false, '1.1', 'all');
    echo '    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">';
    /*
     * Load bootstrap and other css assets
     */
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, '1.1', 'all');
    wp_enqueue_style('font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css', false, '1.1', 'all');

    wp_enqueue_style('animate', get_template_directory_uri() . '/lib/animate/animate.min.css', false, '1.1', 'all');
    wp_enqueue_style('owl_carousel', get_template_directory_uri() . '/lib/owlcarousel/assets/owl.carousel.min.css', false, '1.1', 'all');
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/lib/lightbox/css/lightbox.min.css', false, '1.1', 'all');


    wp_enqueue_style('default_css', get_template_directory_uri() . '/css/style.css', false, '1.1', 'all');

   
    

}
add_action('wp_head', 'agb_theme_setup');

function agb_js_setup() {
    echo '<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>';

    wp_enqueue_script('wow', get_template_directory_uri() . '/lib/wow/wow.min.js', false, '1.1', 'true');
    wp_enqueue_script('eas', get_template_directory_uri() . '/lib/easing/easing.min.js', false, '1.1', 'true');
    wp_enqueue_script('way', get_template_directory_uri() . '/lib/waypoints/waypoints.min.js', false, '1.1', 'true');
    wp_enqueue_script('owl', get_template_directory_uri() . '/lib/owlcarousel/owl.carousel.min.js', false, '1.1', 'true');
    wp_enqueue_script('iso', get_template_directory_uri() . '/lib/isotope/isotope.pkgd.min.js', false, '1.1', 'true');
    wp_enqueue_script('light', get_template_directory_uri() . '/lib/lightbox/js/lightbox.min.js', false, '1.1', 'true');
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/main.js', false, '1.1', 'true');

}
add_action('wp_footer', 'agb_js_setup');


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

    acf_register_block_type(
        array(
            'name'            => 'Hero Header',
            'title'           => __('Hero Header'),
            'description'     => __('Hero header'),
            'render_template' => 'template-parts/blocks/hero_header.php',
            'icon'            => 'align-full-width',
            'keywords'        => array('top', 'header')

        )
    );

    acf_register_block_type(
        array(
            'name'            => 'About Section',
            'title'           => __('About section'),
            'description'     => __('About section'),
            'render_template' => 'template-parts/blocks/about.php',
            'icon'            => 'align-full-width',
            'keywords'        => array('about', 'header')

        )
    );

    acf_register_block_type(
        array(
            'name'            => 'Footer Section',
            'title'           => __('Footer Section'),
            'description'     => __('Footer Section'),
            'render_template' => 'template-parts/blocks/footer.php',
            'icon'            => 'align-full-width',
            'keywords'        => array('down', 'footer')

        )
    );

    acf_register_block_type(
        array(
            'name'            => 'Newsletter Section',
            'title'           => __('Newsletter Section'),
            'description'     => __('Newsletter Section'),
            'render_template' => 'template-parts/blocks/newsletter.php',
            'icon'            => 'align-full-width',
            'keywords'        => array('down', 'newsletter')

        )
    );

    acf_register_block_type(
        array(
            'name'            => 'portifolio Section',
            'title'           => __('portifolio Section'),
            'description'     => __('portifolio Section'),
            'render_template' => 'template-parts/blocks/portifolio.php',
            'icon'            => 'align-full-width',
            'keywords'        => array('down', 'portifolio')

        )
    );

    acf_register_block_type(
        array(
            'name'            => 'service Section',
            'title'           => __('service Section'),
            'description'     => __('service Section'),
            'render_template' => 'template-parts/blocks/service.php',
            'icon'            => 'align-full-width',
            'keywords'        => array('down', 'service')

        )
    );

    acf_register_block_type(
        array(
            'name'            => 'team Section',
            'title'           => __('team Section'),
            'description'     => __('team Section'),
            'render_template' => 'template-parts/blocks/team.php',
            'icon'            => 'align-full-width',
            'keywords'        => array('down', 'team')

        )
    );

    acf_register_block_type(
        array(
            'name'            => 'testimonial Section',
            'title'           => __('testimonial Section'),
            'description'     => __('testimonial Section'),
            'render_template' => 'template-parts/blocks/testimonial.php',
            'icon'            => 'align-full-width',
            'keywords'        => array('down', 'testimonial')

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