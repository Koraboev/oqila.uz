<?php

$show_all = get_field('cases-entities-show-all');
if (!isset($_GET['filterby'])) {
    $orderby = '';
}
else{
    $orderby = $_GET['filterby'];
}
if($show_all)
{
    $cases = get_posts([
        'posts_per_page' => -1,
        'post_type' => 'case-pages',
        'meta_query'    => array(
            array(
                'key'       => 'maintained-service-names',
                'value'     => $orderby,
                'compare'   => 'LIKE'
            )
        ),
        'orderby' => 'menu_order meta_value',
        'order' => 'ASC'
    ]);
}
else
{
    $cases = get_field('cases-entities');
    $cases = empty($cases) ? [] : $cases;
}

if ($lang == 'uz') {
$filter_btn = [
    [
        'name' =>'Sayt',
        'url' => 'sayt'
    ],  
    [
        'name' =>"Internet do'kon",
        'url' => 'internet'
    ],
    /*[
        'name' =>"Logo",
        'url' => 'logo'
    ],*/
    [
        'name' =>"Dizayn",
        'url' => 'dizayn'
    ],
    [
        'name' =>"Seo",
        'url' => 'seo'
    ],
];

}
else{
    $filter_btn = [
    [
        'name' =>'Сайты',
        'url' => 'Сайт'
    ],  
    [
        'name' =>"Интернет магазины",
        'url' => 'Интернет'
    ],
    /*[
        'name' =>"Logo",
        'url' => 'Логотип'
    ],*/
    [
        'name' =>"Дизайн",
        'url' => 'Дизайн'
    ],
    [
        'name' =>"SEO",
        'url' => 'seo'
    ],
];

}
?>

<section class="section our-works-web-general" id="cases">
    <div class="container">
        <div class="our-works-title-content" style="padding-top: 0px">
            
            <div class="our-works-title-content__inner">
                <h2 class="our-works-title">

                    <?php the_field('cases-title')?>
                </h2>

                <?php if(!empty(get_field('cases-desc'))): ?>
                    <p class="mrt-15"><?php the_field('cases-desc')?></p>
                <?php endif ?>
                <?php if (is_page_template('portfolio-page.php')): ?> 
                <?php foreach ($filter_btn as $filter_name): ?>
                    <a rel="nofollow" href="<?php get_site_url()?>?filterby=<?=$filter_name['url']?>#cases" class="filter-btn"><?=$filter_name['name']?></a>
                <?php endforeach ?>
                <?php if ($lang == 'uz'): ?>
                    <a rel="nofollow" href="<?php get_site_url()?>?filterby#cases" class="filter-btn">Barchasi</a> 
                <?php endif ?>
                <?php if ($lang == 'ru'): ?>
                    <a rel="nofollow" href="<?php get_site_url()?>?filterby#cases" class="filter-btn">Все</a> 
                <?php endif ?>
                <?php endif ?>
            </div>
            
            <?php if(!$show_all): ?>
                <div class="our-works-btn-block">
                    <a class="cs-btn-one btn-gradient-color" href="<?php the_field('cases-show-all-btn-url')?>">
                        <?php the_field('cases-show-all-btn-label')?>
                    </a>
                </div>
            <?php endif ?>


        </div>
        <div class="our-works-content-web-general">
            <?php foreach ($cases as $case): ?>
                <div class="our-works-single-case">
                    <a href="<?=get_post_permalink($case)?>" class="our-works-single-case-web-general">
                        <?=get_the_post_thumbnail($case, 'orginal', [
                            'class' => 'case',
                            'alt'   => $case->post_title
                        ])?>
                        <div class="row tags-container">
                            <div class="maintained-service col-md-8">
                                <ul class="maintained-service-list list-on-service-pages">
                                    <?php $maintained_services = get_field('maintained-service-names', $case->ID);
                                     foreach ($maintained_services as $maintained_service): ?>
                                    <li class="maintained-service-list-item"><?php  echo $maintained_service?></li>
                                     <?php endforeach?>
                                </ul>
                            </div>
                            <div class="company-name company-name-on-service-page"><?php the_field('company_name', $case->ID);?></div>
                        </div>
                    </a>
                </div>
            <?php endforeach ?>
        </div>
    </div>

<!--
    <div class="ellipse">
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/bg_ellips.png" alt="" class="ellipse-img">
    </div>
    
        <img src="<?php echo get_template_directory_uri() ?>/assets/images/orn.png" alt="" class="orn-img">
 -->
 
</section>