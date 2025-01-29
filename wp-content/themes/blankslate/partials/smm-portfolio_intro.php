<?php
$works = get_field('smm');
?>

<section class="request-a-call-back">
    <div class="section-content">
        <div class="container">
            <div class="row mb-40 ">
                <div class="col-md-6 mrb-30">
                    <img src="<?php the_field('project_achievment_banner') ?>" alt="phone">
                </div>
                <div class="col-md-6 mrb-30 pdl-lg-100">
                    <div class="row">
                        <div class="col-md-12 mrb-10">
                        <?php the_field('project_achievment_jobs_done') ?>
                            <!-- <div class="customer-logos-title-box mrb-50">
                                <h3 class="text-left mrb-15">
                                    Задачи
                                </h3>
                                <ul class="portfolio_intro_text">
                                    <li>Ведение официальных сообществ</li>
                                    <li>Сбор заявок на полис нового образца</li>
                                    <li>Вовлечение в коммуникацию</li>
                                    <li>Продвижение диспансеризации</li>
                                    <li>Выявление фактов нарушений в мед. учреждениях</li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="col-md-7 mrb-10">
                        <?php the_field('project_achievment_jobs_results') ?>
                            <!-- <div class="customer-logos-title-box mrb-50">
                                <h3 class="text-left mrb-15">
                                    Результаты
                                </h3>
                            </div>
                            <div class="progress-container">
                                <div role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="--value:86"></div>
                                <span>Живых подписчиков</span>
                                <div class="amount">
                                    <span class="arrow-up"></span>
                                    790
                                </div>
                            </div>
                            <div class="progress-container">
                                <div role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="--value:88"></div>
                                <span>Конверсия аккаунта</span>
                                <div class="amount">
                                    <span class="arrow-up"></span>
                                    82%
                                </div>
                            </div>
                            <div class="progress-container">
                                <div role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="--value:76"></div>
                                <span>Увеличение продаж</span>
                                <div class="amount">
                                    <span class="arrow-up"></span>
                                    36%
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
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