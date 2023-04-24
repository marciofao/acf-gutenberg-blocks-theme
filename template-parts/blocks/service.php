
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
<!-- Service Start -->
 <div class="container-xxl py-5 <?php echo esc_attr($className) ?>">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6>
                    <h2 class="mt-2"><?php echo(get_field('title')) ?></h2>
                </div>
                <div class="row g-4">
                    <?php if(get_field('items')): ?>
                        <?php foreach(get_field('items') as $itm) : ?>
                            <?php $itm = (object) $itm ?>
                            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                                <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                    <div class="service-icon flex-shrink-0">
                                        <i class="fa fa-home fa-2x"></i>
                                    </div>
                                    <h5 class="mb-3"> <?php echo $itm->title ?> </h5>
                                    <p> <?php echo $itm->text ?></p>
                                    <a class="btn px-3 mt-auto mx-auto" href="<?php echo $itm->button_link ?>"><?php echo $itm->button_label ?></a>
                                </div>
                            </div>
                        <?php endforeach ?>
                   <?php endif ?>
                </div>
            </div>
        </div>
        <!-- Service End -->