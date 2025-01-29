<div class="sidebar-widget bg-gradient-color text-center sticky-block" data-background="images/bg/abs-bg4.png" id="sticky-block-web-general">
    <div class="contact-information">
        <h3 class="text-white mrb-20"><?php the_translation_field('contact-us')?></h3>
        <p class="text-white"><?php the_translation_field('contact-us-text')?></p>
        <ul class="list-items text-white mrb-20">
            <li>
                <a class="text-white sidebar-widget__phone-title" href="tel:<?php the_site_setting_field('primary-phone-number')?>">
                    <span class="fas fa-phone alt mrr-10 text-white"></span>
                    <?php the_site_setting_field('primary-phone-number')?>
                </a>
            </li>
            <li>
                <a class="text-white sidebar-widget__phone-title" href="tel:<?php the_site_setting_field('secondary-phone-number')?>">
                    <span class="fas fa-phone alt mrr-10 text-white"></span>
                    <?php the_site_setting_field('secondary-phone-number')?>
                </a>
            </li>
            <li>
                <a class=" text-white sidebar-widget__mail-title" href="mailto:<?php the_site_setting_field('email')?>">
                <span class="far fa-envelope mrr-10 text-white"></span>
                <?php the_site_setting_field('email')?>
                </a>
            </li>
        </ul>
    </div>
</div>