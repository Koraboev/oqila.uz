<?php $lang = pll_current_language(); ?>
<section class="banner-section pdt-20 pdb-100">
    <div class="container">
        <div class="banner-section-content">

            <div class="banner-section-content-part1">
                <h1 class="part1-title"><?php the_title()?></h1>
                <div class="part1-description skyscraper-text">
                    <?php the_field('banner-desc')?>
                </div>

                <?php if($lang == 'uz'): ?>
                     <img class="banner-section-oqilasmall-img" src="/wp-content/uploads/2021/03/Results-of-Clients-Circle-uz.png" alt="">
                <?php elseif($lang == 'ru'): ?>
                     <img class="banner-section-oqilasmall-img" src="/wp-content/uploads/2021/01/RSO.png" alt="">
                 <?php else: ?>
                     <img class="banner-section-oqilasmall-img" src="/wp-content/uploads/2021/06/results-of-clients.png">
                <?php endif ?>
                
                <div class="part1-order">
                    <a href="#" class="cs-btn-one btn-gradient-color btn-lg" data-toggle="modal" data-target="#get-quote">
                        <?php the_field('banner-get-quote-btn-label')?>
                    </a>

                    <?php if(!empty(get_field('banner-go-to-price-btn-label'))): ?>
                        <a href="#price-calculator-section" class="cs-btn-one btn-gradient-color btn-lg mr-lg-off mrl-40">
                            <?php the_field('banner-go-to-price-btn-label')?>
                        </a>
                    <?php else: ?>
                        <a class="banner-section__phone-link mr-lg-off mrl-40" href="tel:<?php the_site_setting_field('primary-phone-number')?>"><?php the_site_setting_field('primary-phone-number')?></a>
                    <?php endif; ?>
                </div>
                <?php if(!empty(get_field('banner-discount'))): ?>
                    <?php if ($lang == 'uz'): ?>
                        <div class="part1-description ">
                            <?php the_site_setting_field('web-discount-desc-uz')?>
                        </div>
                    <?php endif ?>
                    <?php if ($lang == 'ru'): ?>
                        <div class="part1-description ">
                            <?php the_site_setting_field('web-discount-desc-ru')?>
                        </div>
                    <?php endif ?>
                <?php else: ?>
                    <div class="part1-description ">
                        <?php the_site_setting_field('banner-discount')?>
                    </div>
                <?php endif; ?>
            </div>
            
            <div class="banner-section-content-part2">
                <div class="sect1">

                    <?php for($i=1; $i < 3; $i++): ?>
                        <?php if(!empty(get_field('banner-statistics-'.$i))): ?>
                            <div class="banner-block">
                                <?php the_field('banner-statistics-'.$i)?>
                            </div>
                        <?php endif ?>
                    <?php endfor ?>
                </div>
            
                <div class="sect2">

                <?php if($lang == 'uz'): ?>
                     <img class="rso" src="/wp-content/uploads/2021/03/Results-of-Clients-Circle-uz.png" alt="">
                <?php elseif($lang == 'ru'): ?>
                     <img class="rso" src="/wp-content/uploads/2021/01/RSO.png" alt="">
                 <?php else: ?>
                     <img class="rso" src="/wp-content/uploads/2021/06/results-of-clients.png">
                <?php endif ?>

                    <?php for($i=3; $i < 5; $i++): ?>
                        <?php if(!empty(get_field('banner-statistics-'.$i))): ?>
                            <div class="banner-block">
                                <?php the_field('banner-statistics-'.$i)?>
                            </div>
                        <?php endif ?>
                    <?php endfor ?>

                </div>
            </div>
        
            <div class="banner-section-content-part2-m">

                <?php for($i=1; $i < 5; $i++): ?>
                    <?php if(!empty(get_field('banner-statistics-'.$i))): ?>
                        <div class="banner-block">
                            <?php the_field('banner-statistics-'.$i)?>
                        </div>
                    <?php endif ?>
                <?php endfor ?>

            </div>
        </div>
    </div>
</section>