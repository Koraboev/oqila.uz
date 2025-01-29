<?php
$customer_review = get_field('banner-custom-review');
$service_names = get_field('maintained-service-names');
$service_pages = get_field('maintained-service-pages');
?>

<?php get_header(); ?>

<section class="page-title-section case-page__banner" style="background-color: <?=get_field('banner_bg')?>">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="page-title-content">

                    <h3 class="title text-white mrb-10"><?php the_field('title'); ?></h3>
                    
                    <?php the_field('banner-desc');?>
                </div>
                <?php if(!empty($customer_review)): ?>
                        <div class="our-works-how-to-description mrb-md-30" style="color: black;">

                            <p>
                                <?php
                                    if(!empty(get_field('case-page-version', $customer_review->ID)))
                                        echo get_field('case-page-version', $customer_review->ID);
                                    else
                                        echo get_field('full-version', $customer_review->ID);
                                ?>
                            </p>
                        
                            <div class="author">
                                <?=get_the_post_thumbnail($customer_review, 'customer-review', [
                                    'class' => 'author-img',
                                ])?>
                                <p class="author-text"><?=$customer_review->post_title?></p>
                            </div>
                        </div>
                    <?php endif ?>
            </div>
            <div class="col-xl-6 text-center">
                <?php the_post_thumbnail('full',['class' => 'case_img']); ?>    
            </div>
        </div>
    </div>
</section>

<section class="service-details-page pdt-110 pdb-90">
    <div class="container case-page__cantainer">
        <div class="row">
            <div class="col-md-8">
                <div class="service-detail-text">
                    <div class="mrb-40">
                        <?php the_field('long_description')?>
                    </div>
                </div>
            </div>
            <div class="col-md-4 sidebar-right">
                <div class="widget sidebar-widget widget-tags">
                        <h4 class="mrb-30 single-blog-widget-title"><?php the_translation_field('tags')?></h4>
                        <ul class="list">
                            <?php foreach ($service_names as $i => $service): ?>
                                <li><a href="<?=(!empty($service_pages[$i]) ? $service_pages[$i] : '' )?>"><?=$service ?></a></li>
                            <?php endforeach ?>
                        </ul>
                        <a href="<?php the_field('project-link')?>" target="blank" class="cs-btn-one btn-light mrt-15"><span class="fas fa-globe alt mrr-10"></span><?php the_translation_field('see-client-site')?></a>
                    </div>
                <!-- contact sidebar start -->
                <?php require 'partials/contact-sidebar.php'?>
                <!-- contact sidebar end -->
            </div>
        </div>
    </div>
</section>


<?php get_footer();?>