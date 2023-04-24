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
 <!-- Footer Start -->
 <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn  <?php echo esc_attr($className) ?>" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4"><?php echo get_field('contact_title') ?></h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i><?php echo get_field('address') ?></p>
                        <p><i class="fa fa-phone-alt me-3"></i><?php echo get_field('phone') ?></p>
                        <p><i class="fa fa-envelope me-3"></i><?php echo get_field('email') ?></p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="<?php echo get_field('twitter') ?>"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="<?php echo get_field('facebook') ?>"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="<?php echo get_field('youtube') ?>"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="<?php echo get_field('instagram') ?>"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="<?php echo get_field('linkedin') ?>"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4"><?php echo get_field('links_title') ?></h5>
                        <?php if(get_field('link_items')): ?>
                            <?php foreach(get_field('link_items') as $l): ?>
                                <?php $l = (object) $l ?>
                                <a class="btn btn-link" href="<?php echo $l->url ?>"><?php echo $l->label ?></a>
                            <?php endforeach ?>
                        <?php endif ?>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4"><?php echo get_field('gallery_title') ?></h5>
                        <div class="row g-2">
                            <?php if(get_field('gallery_items')): ?>
                                <?php foreach(get_field('gallery_items') as $i): ?>
                                    <?php $i = (object) $i ?>
                                    <div class="col-4">
                                        <img class="img-fluid" src="<?php echo  $i->picture ?>" alt="Image">
                                    </div>
                                <?php endforeach ?>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5 class="text-white mb-4"><?php echo get_field('newsletter_title') ?></h5>
                        <p><?php echo get_field('news_letter_text') ?></p>
                        <div class="position-relative w-100 mt-3">
                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="<?php echo get_field('field_placeholder') ?>" style="height: 48px;">
                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#"><?php  echo get_bloginfo('name') ?></a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <?php if(get_field('final_links')): ?>
                                    <?php foreach(get_field('final_links') as $f): ?>
                                        <?php $f = (object) $f ?>
                                        <a href="<?php echo $f->url ?>"><?php echo $f->label ?></a>
                                    <?php endforeach ?>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>