<?php

/**
 * Template Name: SMM PAGE
 * Template Post Type: service-pages
 */

?>

<?php get_header(); ?>

<?php include 'partials/mega-banner.php'; ?>



<!-- Prices -->
<?php include 'partials/prices/smm.php'; ?>

<!-- Portfolio -->
<?php include 'partials/smm-portfolio.php'; ?>

<!-- Portfolio -->
<?php include 'partials/smm-portfolio_intro.php'; ?>

<!-- What's SMM -->
<?php include 'partials/block-image-text-smm.php'; ?>


<!-- stats -->
<div class="container text-center mrt-100">
    <h3><?php the_field('block-title') ?></h3>
    <div class="row mrt-50">
        <div class="col-md-6 col-lg-6 col-xl-3 text-left">
            <div class="counter google-smm__counter mrb-20"><img src="/wp-content/uploads/2022/02/counter_images4.png" alt=""></div>
            <p class="title google-adwords__title mrb-lg-30 mrb-80">
            <?php the_field('static-block-desc-1') ?>
                <!-- Сейчас на планете более 3,78 миллиарда пользователей соц.сетей -->
            </p>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3 text-left">
            <div class="counter google-smm__counter mrb-20"><img src="/wp-content/uploads/2022/02/counter_images3.png" alt=""></div>
            <p class="title google-adwords__title mrb-lg-30 mrb-80">
            <?php the_field('static-block-desc-2') ?>
                <!-- 77,6% компаний используют SMM для продвижения своего бизнеса, причем Facebook – самая популярная платформа -->
            </p>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3 text-left">
            <div class="counter google-smm__counter mrb-20"><img src="/wp-content/uploads/2022/02/counter_images2.png" alt=""></div>
            <p class="title google-adwords__title mrb-lg-30 mrb-80">
            <?php the_field('static-block-desc-3') ?>
                <!-- 49% потребителей доверяют бренду через  рекомендации в соц.сетях -->
            </p>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3 text-left">
            <div class="counter google-smm__counter mrb-20"><img src="/wp-content/uploads/2022/02/counter_images1.png" alt=""></div>
            <p class="title google-adwords__title mrb-lg-30 mrb-80">
            <?php the_field('static-block-desc-4') ?>
                <!-- 73% маркетологов считают SMM продвижение очень эффективным для своего бизнеса -->
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php the_field('after-stat-text') ?>
        </div>
    </div>
</div>

<!-- stats -->

<!-- 
<div class="container text-center mrt-100">
	<h3><?php the_field('block-title') ?></h3>
    <div class="row mrt-50">
        <?php $icons = [1 => 'flaticon-man-2', 'flaticon-like-3', 'flaticon-trophy-1', 'flaticon-briefcase-1']; ?>
        <?php for ($i = 1; $i < 5; $i++) : ?>
            <div class="col-md-6 col-lg-6 col-xl-3 text-left">
                <div class="funfact mrb-lg-30 mrb-60">
                    <div class="icon">
                        <span class="webexflaticon <?= $icons[$i] ?>"></span>
                    </div>
                    <h2 class="counter google-adwords__counter"><?php the_field("static-block-title-$i"); ?></h2>
                    <h5 class="title google-adwords__title"><?php the_field("static-block-desc-$i"); ?></h5>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php the_field('after-stat-text') ?>
		</div>
	</div>
</div> -->
<!-- Promo block: 3 years -->
<?php include 'partials/block-text-image-bg.php'; ?>


<?php include 'partials/skyscraper.php'; ?>

<?php get_footer(); ?>