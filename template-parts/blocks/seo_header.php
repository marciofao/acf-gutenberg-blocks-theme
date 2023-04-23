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
<?php // echo '<pre>'; var_dump(get_field('nav_link'));die; ?>
<?php // echo get_bloginfo('name') ?>



<!-- Spinner Start -->
<div id="spinner"
    class="bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- wp:group -->
<!-- Navbar & Hero Start -->
<div class="container-xxl position-relative p-0 <?php echo esc_attr($className) ?>">
    <!-- wp:group -->
    <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">

        <h1 class="m-0">
            <?php
             $custom_logo_id = get_theme_mod( 'custom_logo' );
            $image = wp_get_attachment_image_src( $custom_logo_id );
          
            ?>
            <img src="<?php echo $image[0] ?>" alt="">
        <!-- <i class="fa fa-search me-2"></i> -->
            <?php echo get_bloginfo('name') ?>
        </h1>

        

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <?php if(get_field('nav_link')): ?>
                    <?php foreach (get_field('nav_link') as $link):?>
                        
                        <?php if(sizeof($link['nav_link_label'])==1) :?>
                            <?php $l =  (object) $link['nav_link_label'][0] ?>
                            <?php// echo var_dump($l); die; ?>
                            <a href="<?php echo $l->url ?>" class="nav-item nav-link active"><?php echo $l->label ?></a>
                        <?php else: ?>
                            <?php $l =  $link['nav_link_label'] ?>
                            <?php // echo var_dump($l); die; ?>
                            <div class="nav-item dropdown">
                                <a href="<?php echo $l[0]['url'] ?>" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false"><?php echo $l[0]['label'] ?></a>
                                
                                <div class="dropdown-menu m-0">
                                <?php for($i=1;$i<sizeof($l);$i++) :?>
                                    <a href="<?php echo $l[$i]['url'] ?>" class="dropdown-item"><?php echo $l[$i]['label'] ?></a>
                                <?php endfor ?>
                                </div>
                            </div>
                        <?php endif ?>
                    
                    
                    <?php endforeach ?>
                <?php endif ?>
            </div>
            <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">
                <i class="fa fa-search"></i>
            </butaton>
            <?php if(get_field('nav_buttons')): ?>
                <?php foreach(get_field('nav_buttons') as $link): ?>
       
                        <?php $n =(object) $link ?>
                        
                            <a href="<?php echo $n->page ?>"
                            class="btn btn-secondary text-light rounded-pill py-2 px-4 ms-3"><?php echo $n->label ?></a>

                <?php endforeach ?>
            <?php endif ?>
        </div>
    </nav>
    <!-- /wp:group -->

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
</div>
<!-- /wp:group -->

<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
            <div class="modal-header border-0">
                <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex align-items-center justify-content-center">
                <div class="input-group" style="max-width: 600px;">
                    <input type="text" class="form-control bg-transparent border-light p-3"
                        placeholder="Type search keyword">
                    <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Full Screen Search End -->