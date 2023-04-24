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
 <!-- Testimonial Start -->
 <div class="container-xxl bg-primary testimonial py-5 my-5 wow fadeInUp <?php echo esc_attr($className) ?>" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="owl-carousel testimonial-carousel">
                    <?php if(get_field('item')): ?>
                        <?php foreach(get_field('item') as $i) : ?>
                        <?php $i = (object) $i ?>
                            <div class="testimonial-item bg-transparent border rounded text-white p-4">
                                <i class="fa fa-quote-left fa-2x mb-3"></i>
                                <p> <?php echo $i->quote ?> </p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle" src="<?php echo $i->picture ?>" style="width: 50px; height: 50px;">
                                    <div class="ps-3">
                                        <h6 class="text-white mb-1"><?php echo $i->name ?></h6>
                                        <small><?php echo $i->profession ?></small>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                   <?php endif ?>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->