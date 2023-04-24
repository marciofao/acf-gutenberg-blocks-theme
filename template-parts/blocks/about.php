<?php //die( get_template_directory_uri()) ?>
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container px-lg-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="section-title position-relative mb-4 pb-2">
                    <h6 class="position-relative text-primary ps-4"><?php echo(get_field('about_title')) ?></h6>
                    <h2 class="mt-2"><?php echo(get_field('about_line')) ?></h2>
                </div>
                <p class="mb-4"><?php echo(get_field('about_text')) ?></p>
                <div class="row g-3">
                    <?php if(get_field('about_items')) : ?> 
                   
                        <?php foreach(get_field('about_items') as $i ): ?>
                            <?php $itm = (object) $i ?>
                           
                                <h6 class="col-6"><i class="fa fa-check text-primary me-2"></i> <?php echo $itm->label ?> </h6>
    
                        <?php endforeach ?> 
                          
                    <?php endif ?>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="<?php echo  get_template_directory_uri() ?>/img/about.jpg">
            </div>
        </div>
    </div>
</div>
<!-- About End -->