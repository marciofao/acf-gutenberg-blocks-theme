<?php
//block alignment setup
$className = '';
if (!empty($block['className'])) {
    $className = ' ' . $block['className'];

}
if (!empty($block['align'])) {
    $className .= 'align' . $block['align'];
}
?>


<!-- Navbar & Hero Start -->
<!-- wp:group -->

<div class="container-xxl position-relative p-0 <?php echo esc_attr($className) ?>">
<div class="container-xxl py-5 bg-primary hero-header mb-5">
    <div class="container my-5 py-5 px-lg-5">
        <div class="row g-5 py-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="text-white mb-4 animated zoomIn"><?php echo(get_field('title')) ?></h1>
                <p class="text-white pb-3 animated zoomIn"><?php echo(get_field('catchphrase')) ?></p>
                <a href="<?php echo(get_field('cta_url')) ?>" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft"><?php echo(get_field('cta')) ?></a>
                <a href="<?php echo(get_field('contact_url')) ?>" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight"><?php echo(get_field('contact_label')) ?></a>
            </div>
            <div class="col-lg-6 text-center text-lg-start">
                <img class="img-fluid" src="<?php echo get_template_directory_uri() ?>/img/hero.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- /wp:group -->

</div>