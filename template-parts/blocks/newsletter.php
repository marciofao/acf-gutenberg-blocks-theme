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
<!-- Newsletter Start -->
<div class="container-xxl bg-primary newsletter my-5 wow fadeInUp <?php echo esc_attr($className) ?>" data-wow-delay="0.1s">
            <div class="container px-lg-5">
                <div class="row align-items-center" style="height: 250px;">
                    <div class="col-12 col-md-6">
                        <h3 class="text-white"><?php echo(get_field('title')) ?></h3>
                        <small class="text-white"><?php echo(get_field('line')) ?></small>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="<?php echo(get_field('input_placeholder')) ?>" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                    <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                        <img class="img-fluid mt-5" style="height: 250px;" src="<?php echo  get_template_directory_uri() ?>/img/newsletter.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter End -->