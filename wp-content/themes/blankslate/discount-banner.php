<?php
$lang=pll_current_language();

?>



<section>
    <div class="container" style="display: flex; justify-content: center;">
        <div class="banner banner--christmas" data-name="christmas" data-state="" data-loaded="">
            <div class="banner__content">
                <div class="banner__icn" style="justify-content: center; display: flex">
                    <?php if ($lang == 'uz'): ?>
                        <p class="banner__text" style="color: #fff; font-size: 1.5rem; font-weight: bold; text-align: center; line-height: 1;">
                            🎉 Yangi 2025 yil chegirmalari
                            <span style="color: red; font-size: 2rem;">40%</span> gacha  barcha xizmatlarimiz uchun! 🎁
                        </p>
                    <?php elseif ($lang == 'ru'): ?>
                        <p class="banner__text" style="color: #fff; display: inline-block;  font-size: 1.5rem; font-weight: bold; text-align: center!important; line-height: 1;">
                            🎉 Новогодние скидки
                            До <span style="color: red; font-size: 2rem;">40%</span> для всех услуг! 🎁
                        </p>
                    <?php endif; ?>

                </div>
            </div>
        </div>
</section>

<style>
    .banner {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: #fff;
        font-size: 1.5rem;
        font-weight: bold;
        line-height: 1.5;
    }

    .banner--christmas {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        width: 100%;
        height: auto;
        padding: 20px;
    }

    /* Media Queries for Background Images */
    @media (max-width: 575.98px) {
        .banner--christmas {
            background-image: url('/wp-content/themes/blankslate/assets/images/400.webp');
            background-size: cover;
            background-position: center;
            height: auto;
        }

        .banner__text {
            font-size: 1rem;
            line-height: 1.2;
        }

        .banner__text span {
            font-size: 1.5rem;
        }
    }


    @media (min-width: 576px) and (max-width: 991.98px) {
        .banner--christmas {
            background-image:  url('/wp-content/themes/blankslate/assets/images/600.webp');
            height: 60px;
        }
    }

    @media (min-width: 992px) and (max-width: 1199.98px) {
        .banner--christmas {
            background-image:  url('/wp-content/themes/blankslate/assets/images/900.webp');
            height: 100px;
        }
    }

    @media (min-width: 1200px) {
        .banner--christmas {
            background-image: url('/wp-content/themes/blankslate/assets/images/1200.webp');
            height: 100px;
        }
    }

    @media (min-width: 1400px) {
        .banner--christmas {
            background-image:  url('/wp-content/themes/blankslate/assets/images/2024.webp');
            height: 100px;
        }
    }
</style>

