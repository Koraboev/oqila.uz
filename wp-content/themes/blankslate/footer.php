<?php

$footer_menu_col1 = wp_get_nav_menu_items('footer-menu-company-col1-' . pll_current_language());
$footer_menu_col2 = wp_get_nav_menu_items('footer-menu-company-col2-' . pll_current_language());


$asset_url = get_template_directory_uri() . '/assets';
$lang      = pll_current_language();

//////
if(file_exists(__DIR__. '/assets/js/mega-menu.js'))
    $mega_menu_js_version = filemtime(__DIR__. '/assets/js/mega-menu.js');
else
    $mega_menu_js_version = 0;

//////
if(file_exists(__DIR__. '/assets/js/main.js'))
    $main_js_version = filemtime(__DIR__. '/assets/js/main.js');
else
    $main_js_version = 0;

////
if(file_exists(__DIR__. '/assets/js/simplyscroll.js'))
    $simply_scroll_js_version = filemtime(__DIR__. '/assets/js/simplyscroll.js');
else
    $simply_scroll_js_version = 0;
if(file_exists(__DIR__. '/assets/radios-to-slider/css/radios-to-slider.min.css'))
        $radios_to_slider_css_version = filemtime(__DIR__. '/assets/radios-to-slider/css/radios-to-slider.min.css');
    else
        $radios_to_slider_css_version = 0;
?>
<?php if (pll_current_language() != 'en'): ?>
  <footer class="footer">
    <div class="container">
        <div class="footer-box">
            <div class="footer-first-part-box">
                <div class="first-part-block1">
                    <p class="first-part-block1-title">
                        <?php the_translation_field('row-1-left-title'); ?>
                    </p>
                    <p class="first-part-block1-subtitle">
                        <?php the_translation_field('row-1-left-desc'); ?>
                    </p>
                    <div class="first-part-btn">
                        <a class="cs-btn-one btn-gradient-color" href="#" data-toggle="modal" data-target="#get-quote">
                            <?php the_translation_field('row-1-left-btn-label'); ?>
                        </a>
                    </div>
                    
                </div>
                <div class="first-part-block2">
                    <p class="first-part-block2-title">
                        <?php the_translation_field('row-1-center-title'); ?>
                    </p>
                    <p class="first-part-block2-subtitle">
                        <?php the_translation_field('row-1-center-desc'); ?>
                    </p>
                    <div class="first-part-phones">
                        <div class="first-part-phone-block">
                            <img src="<?=$asset_url?>/images/footer-phone.png" class="footer-phone-img">
                            <a href="tel:<?php the_site_setting_field('primary-phone-number') ?>"><p class="phone"><?php the_site_setting_field('primary-phone-number') ?></p></a>
                        </div>
                        <div class="first-part-phone-block">
                            <img src="<?=$asset_url?>/images/footer-phone.png" alt="" class="footer-phone-img">
                            <a href="tel:<?php the_site_setting_field('secondary-phone-number') ?>"><p class="phone"><?php the_site_setting_field('secondary-phone-number') ?></p></a>
                        </div>
                        <div class="first-part-phone-block">
                            <img src="<?=$asset_url?>/images/footer-phone.png" alt="" class="footer-phone-img">
                            <a href="tel:<?php the_site_setting_field('third-phone-number') ?>"><p class="phone"><?php the_site_setting_field('third-phone-number') ?></p></a>
                        </div>
                        <?php if (the_site_setting_field('fourth-phone-number') ) : ?>
                        <div class="first-part-phone-block">
                            <img src="<?=$asset_url?>/images/footer-phone.png" alt="" class="footer-phone-img">
                            <a href="tel:<?php the_site_setting_field('fourth-phone-number') ?>"><p class="phone"><?php the_site_setting_field('fourth-phone-number') ?></p></a>
                        </div>
                        <?php endif; ?>
                        <?php if(the_site_setting_field('fifth-phone-number')) : ?>
                        <div class="first-part-phone-block">
                            <img src="<?=$asset_url?>/images/footer-phone.png" alt="" class="footer-phone-img">
                            <a href="tel:<?php the_site_setting_field('fifth-phone-number') ?>"><p class="phone"><?php the_site_setting_field('fifth-phone-number') ?></p></a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="first-part-block3">
                    <p class="first-part-block3-title">
                        <?php the_translation_field('row-1-right-title'); ?>
                    </p>
                    <div class="first-part-block2-subtitle-columns">
                        <?php the_translation_field('row-1-right-desc'); ?>
                    </div>
                    <div class="first-part-social-networks">
                        <p class="first-part-block3-title">
                            <?php the_translation_field('row-1-right-follow-us'); ?>
                        </p>
                        <div class="first-part-social-networks-content-box">
                            <div class="social-networks-facebook">
                                <a href="<?php echo the_site_setting_field('facebook-url'); ?>" target="_blank">
                                    <img src="<?=$asset_url?>/images/footer-facebook.png" alt="" class="facebook-img">
                                </a>
                            </div>
                            <div class="social-networks-instagram">
                                <a href="<?php echo the_site_setting_field('instagram-url'); ?>" target="_blank">
                                    <img src="<?=$asset_url?>/images/footer-instagram.png" alt="" class="instagram-img">
                                </a>
                            </div>
                            <div class="social-networks-telegram">
                                <a href="<?php echo the_site_setting_field('telegram-url'); ?>" target="_blank">
                                    <img src="<?=$asset_url?>/images/footer-telegram.png" alt="" class="telegram-img">
                                </a>
                            </div>
                            <div class="social-networks-linkedin">
                                <a href="<?php echo the_site_setting_field('linkedin-url'); ?>" target="_blank">
                                    <img src="<?=$asset_url?>/images/linkedin.png">
                                </a>
                            </div>
                            <div class="social-networks-youtube">
                                <a href="<?php echo the_site_setting_field('youtube-url'); ?>" target="_blank">
                                    <img src="<?=$asset_url?>/images/youtube.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="devide-line">
                <!-- <img src="<?=$asset_url?>/images/devide-line.png" alt="" class="devide-line-img"> -->
            </div>

            <div class="footer-second-part-box">

                <div class="second-part-block footer-logo-box">
                    <div class="footer-logo">
                        <img src="<?=$asset_url?>/images/footer-logo.png" alt="" class="footer-logo-img">
                    </div>
                    <div class="footer-copy">
                        <p class="footer-copy-text">© 2016-<?=date('Y')?> OQILA</p>
                    </div>
                </div>

                <div class="second-part-block">
                    <div class="second-part-block-title-box">
                        <p class="second-part-block-title"><?php the_translation_field('row-2-center-title'); ?></p>
                    </div>
                    <div class="second-part-block-subtitle-box2">
                        <?php foreach ($footer_menu_col1 as $item): ?>
                            <li>
                                <a class="second-part-block-subtitle" href="<?=$item->url?>"><?=$item->title?></a>
                            </li>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="second-part-block js-center">
                    <div class="second-part-block-title-box">
                        <p class="second-part-block-title"> </p>
                    </div>
                    <div class="second-part-block-subtitle-box2">
                        <?php foreach ($footer_menu_col2 as $item): ?>
                            <li>
                                <a class="second-part-block-subtitle" href="<?=$item->url?>"><?=$item->title?></a>
                            </li>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="second-part-block js-center">
                    <div class="second-part-block-title-box">
                        <p class="second-part-block-title"><?php the_translation_field('row-2-right-title'); ?></p>
                    </div>
                    <div class="second-part-block-contacts-box">
                        <div class="second-part-block-contact">
                            <img src="<?=$asset_url?>/images/footer-geo.png" alt="" class="footer-geo-img">
                            <p class="second-part-block-subtitle padl-10"><?php the_site_setting_field('address-'.$lang) ?></p>
                        </div>
                        <div class="second-part-block-contact atc">
                            <img src="<?=$asset_url?>/images/footer-mail.png" alt="" class="footer-mail-img">
                            <p class="second-part-block-subtitle padl-10"><?php the_site_setting_field('email') ?></p>
                        </div>
                        <div class="second-part-block-contact atc">
                            <img src="<?=$asset_url?>/images/footer-web.png" alt="" class="footer-web-img">
                            <p class="second-part-block-subtitle padl-10">https://oqila.uz</p>
                        </div>
                    </div>
                    <p class="footer-copy-text-m">© 2016-<?=date('Y')?> OQILA</p>
                </div>

            </div>
        </div>
    </div>
</footer>  

<?php else: ?>
      <footer class="footer">
    <div class="container">
        <div class="footer-box">
            <div class="footer-first-part-box">
                <div class="first-part-block1">
                    <p class="first-part-block1-title">
                        We made happy over than 1886 of our clients. Contact us now, to know how we can boost your business! 
                    </p>
                    <p class="first-part-block1-subtitle">
                        It’s better to talk than just reading about our services, isn’t it?
                    </p>
                    <div class="first-part-btn">
                        <a class="cs-btn-one btn-gradient-color" href="#" data-toggle="modal" data-target="#get-quote">
                            Ask an Expert
                        </a>
                    </div>
                    
                </div>
                <div class="first-part-block2">
                    <p class="first-part-block2-title">
                        Don't put off advertising your business  otherwise others will take YOUR chance.
                    </p>
                    <p class="first-part-block2-subtitle">
                        Call us now:
                    </p>
                    <div class="first-part-phones">
                        <div class="first-part-phone-block">
                            <img src="<?=$asset_url?>/images/footer-phone.png" class="footer-phone-img">
                            <a href="tel:<?php the_site_setting_field('primary-phone-number') ?>">
                                <p class="phone"><?php the_site_setting_field('primary-phone-number') ?></p>
                            </a>
                        </div>
                        <div class="first-part-phone-block">
                            <img src="<?=$asset_url?>/images/footer-phone.png" alt="" class="footer-phone-img">
                            <a href="tel:<?php the_site_setting_field('secondary-phone-number') ?>">
                                <p class="phone"><?php the_site_setting_field('secondary-phone-number') ?></p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="first-part-block3">
                    <p class="first-part-block3-title">
                        Our Clients by Regions:
                    </p>
                    <div class="first-part-block2-subtitle-columns">
                        <div class="column-block1">
                            <p class="column-part">Tashkent </p>
                            <p class="column-part">Namangan </p>
                            <p class="column-part">Andijan </p>
                            <p class="column-part">Khorezm</p>
                        </div>
                        <div class="column-block2">
                            <p class="column-part">Samarkand </p>
                            <p class="column-part">Surkhandarya </p>
                            <p class="column-part">Kashkadarya </p>
                            <p class="column-part">Syrdarya</p>
                        </div>
                        <div class="column-block3">
                            <p class="column-part">Jizzakh</p>
                            <p class="column-part">Bukhara </p>
                            <p class="column-part">Navoi </p>
                            <p class="column-part">Fergana</p>
                        </div>
                        <p class="column-part column-part-last">Karakalpakstan</p>
                    </div>
                    <div class="first-part-social-networks">
                        <p class="first-part-block3-title">
                            Follow Us:
                        </p>
                        <div class="first-part-social-networks-content-box">
                            <div class="social-networks-facebook">
                                <a href="<?php echo the_site_setting_field('facebook-url'); ?>" target="_blank">
                                    <img src="<?=$asset_url?>/images/footer-facebook.png" alt="" class="facebook-img">
                                </a>
                            </div>
                            <div class="social-networks-instagram">
                                <a href="<?php echo the_site_setting_field('instagram-url'); ?>" target="_blank">
                                    <img src="<?=$asset_url?>/images/footer-instagram.png" alt="" class="instagram-img">
                                </a>
                            </div>
                            <div class="social-networks-telegram">
                                <a href="<?php echo the_site_setting_field('telegram-url'); ?>" target="_blank">
                                    <img src="<?=$asset_url?>/images/footer-telegram.png" alt="" class="telegram-img">
                                </a>
                            </div>
                            <div class="social-networks-linkedin">
                                <a href="<?php echo the_site_setting_field('linkedin-url'); ?>" target="_blank">
                                    <img src="<?=$asset_url?>/images/linkedin.png">
                                </a>
                            </div>
                            <div class="social-networks-youtube">
                                <a href="<?php echo the_site_setting_field('youtube-url'); ?>" target="_blank">
                                    <img src="<?=$asset_url?>/images/youtube.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="devide-line">
                <!-- <img src="<?=$asset_url?>/images/devide-line.png" alt="" class="devide-line-img"> -->
            </div>

            <div class="footer-second-part-box">

                <div class="second-part-block footer-logo-box">
                    <div class="footer-logo">
                        <img src="<?=$asset_url?>/images/footer-logo.png" alt="" class="footer-logo-img">
                    </div>
                    <div class="footer-copy">
                        <p class="footer-copy-text">© 2016-<?=date('Y')?> OQILA</p>
                    </div>
                </div>

                <div class="second-part-block">
                    <div class="second-part-block-title-box">
                        <p class="second-part-block-title">Menu</p>
                    </div>
                    <div class="second-part-block-subtitle-box2">
                        <li><a class="second-part-block-subtitle" href="#services-title">Services</a></li>
                        <li><a class="second-part-block-subtitle" href="#our-works-how-to-title">Customer Reviews</a></li>
                        <li><a class="second-part-block-subtitle" href="#calculators-title">Price</a></li>
                        <li><a class="second-part-block-subtitle" href="">Blog</a></li>
                    </div>
                </div>

                <div class="second-part-block js-center">
                    <div class="second-part-block-title-box">
                        <p class="second-part-block-title"> </p>
                    </div>
                    <div class="second-part-block-subtitle-box2">
                        
                    </div>
                </div>

                <div class="second-part-block js-center">
                    <div class="second-part-block-title-box">
                        <p class="second-part-block-title">Contacts</p>
                    </div>
                    <div class="second-part-block-contacts-box">
                        <div class="second-part-block-contact">
                            <img src="<?=$asset_url?>/images/footer-geo.png" alt="" class="footer-geo-img">
                            <p class="second-part-block-subtitle padl-10">Mirzo Ulugbek st., 64, Tashkent city, Uzbekistan</p>
                        </div>
                        <div class="second-part-block-contact atc">
                            <img src="<?=$asset_url?>/images/footer-mail.png" alt="" class="footer-mail-img">
                            <p class="second-part-block-subtitle padl-10"><?php the_site_setting_field('email') ?></p>
                        </div>
                        <div class="second-part-block-contact atc">
                            <img src="<?=$asset_url?>/images/footer-web.png" alt="" class="footer-web-img">
                            <p class="second-part-block-subtitle padl-10">https://oqila.uz</p>
                        </div>
                    </div>
                    <p class="footer-copy-text-m">© 2016-<?=date('Y')?> OQILA</p>
                </div>

            </div>
        </div>
    </div>
</footer>
<?php endif ?>


<!-- BACK TO TOP SECTION -->
<div class="back-to-top bg-gradient-color">
    <i class="fab fa-angle-up"></i>
</div>

<script src="<?=$asset_url?>/js/jquery-3.5.1.min.js"></script>
 <script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
<script src="<?=$asset_url?>/js/bootstrap.bundle.min.js"></script>
<script src="<?=$asset_url?>/js/jquery-core-plugins.js"></script>
<script src="<?=$asset_url?>/radios-to-slider/js/jquery.radios-to-slider.js?v=<?=$mega_menu_js_version?>"></script>
<script src="<?=$asset_url?>/js/mega-menu.js?v=<?=$mega_menu_js_version?>"></script>
<script src="<?=$asset_url?>/js/main.js?v=<?=$main_js_version?>"></script>
<script src="<?=$asset_url?>/js/simplyscroll.js?v=<?=$simply_scroll_js_version?>"></script>

<link rel="stylesheet" href="<?=$asset_url?>/radios-to-slider/css/radios-to-slider.min.css?v<?=$radios_to_slider_css_version?>">

<!-- //////////////// site scripts /////////////// -->
<script>
    new WOW().init();
</script>

<script type="text/javascript">
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1 
            },
            1000:{
                items:1
            }
        }
    })
</script>

<script>
$(document).ready(function(){
  $(".second-part-block-subtitle").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      },1000, function(){
        window.location.hash = hash;
      });
    }
  });
});
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16618366654">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16618366654');
  gtag('event', 'conversion', {'send_to': 'AW-16618366654/6rFzCNS7yL0ZEL7NoPQ9'});
</script>

<!-- Google tag (gtag.js) -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11414743041">
</script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-11414743041');
</script> -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(74955673, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/74955673" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Email form phone number mask -->
<script src="https://unpkg.com/imask"></script>
<script type="text/javascript">
    var element = document.getElementById('phone-number');
    var maskOptions = {
    mask: Number
    };
    var mask = IMask(element, maskOptions);
</script>

<!-- //////////////// End of site scripts /////////////// -->


<?php print_footer_scripts(); ?>


<!-- //////////////// Google + Yandex scripts /////////////// -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-80238228-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-80238228-1');
    gtag('config', 'AW-10879342367');
</script>


<?php /*if (is_thank_you_page()): ?>
    <!-- Event snippet for Email buyurtma conversion page -->
    <script>
        gtag('event', 'conversion', {'send_to': 'AW-876369456/vfgmCI-fjI0CELCs8aED'});
    </script>
<?php endif*/ ?>

</body>
</html>
