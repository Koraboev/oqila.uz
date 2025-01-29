<?php
$works = get_field('smm');
?>

<section class="request-a-call-back pdt-50 pdt-sm-50 pdb-110 pdb-lg-70" >
    <div class="section-content">
        <div class="customer-logos-title-box mrb-50">
            <h2>
                <?php the_field('portfolio_title_1'); ?>
            </h2>
        </div>
        <div class="container">
            <div class="row mb-40 ">
                <div class="col-md-6 mrb-30">
                    <img src="<?php the_field('smm_portfolio_image_1'); ?>" alt="">
                </div>
                <div class="col-md-6 mrb-30">
                    <img src="<?php the_field('smm_portfolio_image_2'); ?>" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mrb-30">
                    <img src="<?php the_field('smm_portfolio_image_3'); ?>" alt="">
                </div>
                <div class="col-md-6 mrb-30">
                    <img src="<?php the_field('smm_portfolio_image_4'); ?>" alt="">
                </div>
                <!-- <div class="owl-carousel testimonial-items-3col mrb-lg-40">
                    <?php foreach ($works as $work) : ?>
                        <div class="testimonial-item">
                            <span class="quote-icon fas fa-quote-right"></span>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 col-xl-6">
                                        <div class="about-image-block mrb-lg-60">
                                            <?php $image = get_the_post_thumbnail_url($work->ID); ?>
                                            <img class="img-full" src="<?php echo $image ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xl-6">
                                        <h2 class="title-under-line mrb-70"><?= $work->post_title ?></h2>
                                        <h5 class="mrb-30 text-primary-color"><?= $work->post_excerpt ?></h5>
                                        <p class="mrb-40"><?= $work->post_content ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div> -->
            </div>
        </div>
    </div>
</section>

<!-- <section class="request-a-call-back pdt-110 pdt-sm-50 pdb-110 pdb-lg-70" style="background-image: url(/wp-content/uploads/2021/08/abs-bg4.png);">
        <div class="section-content">
             <div class="customer-logos-title-box">
                <h2>
                    <?php the_field('smm-block-title') ?>
                </h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="owl-carousel testimonial-items-3col mrb-lg-40">
                     <?php foreach ($works as $work) : ?>
                    <div class="testimonial-item">
                        <span class="quote-icon fas fa-quote-right"></span>     
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-xl-6">
                                    <div class="about-image-block mrb-lg-60">
                                        <?php $image = get_the_post_thumbnail_url($work->ID); ?>
                                          <img class="img-full" src="<?php echo $image ?>">
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-6">
                                    <h2 class="title-under-line mrb-70"><?= $work->post_title ?></h2>
                                    <h5 class="mrb-30 text-primary-color"><?= $work->post_excerpt ?></h5>
                                    <p class="mrb-40"><?= $work->post_content ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section> -->