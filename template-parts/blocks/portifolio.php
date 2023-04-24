

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
<!-- Portfolio Start -->
<div class="container-xxl py-5 <?php echo esc_attr($className) ?>">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4"><?php echo(get_field('title')) ?></h6>
                    <h2 class="mt-2"><?php echo(get_field('line')) ?></h2>
                </div>
                <?php $items = get_field('items') ?>
                <?php $categs = [] ?>
                <?php 
                    foreach($items as $i){
                        if(!in_array($i['category'],$categs)){
                            $categs[]=$i['category'];
                        }
                    }
                ?>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="btn px-3 pe-4 active" data-filter="*">All</li>
                            <?php foreach($categs as $c): ?>
                            <li class="btn px-3 pe-4" data-filter=".<?php echo $c ?>"><?php echo $c ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <?php foreach($items as $i): ?>
                        <?php $i = (object) $i ?>
                        <div class="col-lg-4 col-md-6 portfolio-item <?php echo $i->category ?> wow zoomIn" data-wow-delay="0.1s">
                            <div class="position-relative rounded overflow-hidden">
                                <img class="img-fluid w-100" src="<?php echo( $i->picture['url']) ?>" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-light" href="<?php echo( $i->picture['url']) ?> " data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                                    <div class="mt-auto">
                                        <small class="text-white"><i class="fa fa-folder me-2"></i><?php echo  $i->category ?></small>
                                        <a class="h5 d-block text-white mt-1 mb-0" href=""><?php echo  $i->name ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?> 
                </div>
            </div>
        </div>
        <!-- Portfolio End -->