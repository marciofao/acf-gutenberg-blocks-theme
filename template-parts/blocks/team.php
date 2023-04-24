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
<!-- Team Start -->
<div class="container-xxl py-5 <?php echo esc_attr($className) ?>">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4"> <?php echo get_field('title') ?> </h6>
                    <h2 class="mt-2"><?php echo get_field('line') ?></h2>
                </div>
                <div class="row g-4">
                    <?php if(get_field('item')): ?>
                        <?php foreach(get_field('item') as $i): ?>
                            <?php $i = (object) $i ?>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="team-item">
                                    <div class="d-flex"> 
                                        <div class="flex-shrink-0 d-flex flex-column align-items-center mt-4 pt-5" style="width: 75px;">
                                            <a class="btn btn-square text-primary bg-white my-1" href="<?php echo $i->facebook ?>"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href="<?php echo $i->twitter ?>"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href="<?php echo $i->instagram ?>"><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square text-primary bg-white my-1" href="<?php echo $i->linkedin ?>"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                        <img class="img-fluid rounded w-100" src="<?php echo $i->picture ?>" alt="">
                                    </div>
                                    <div class="px-4 py-3">
                                        <h5 class="fw-bold m-0"><?php echo $i->name ?></h5>
                                        <small><?php echo $i->role ?></small>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <!-- Team End -->