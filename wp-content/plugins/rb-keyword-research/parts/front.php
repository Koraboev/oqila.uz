<script>
    function onSubmit(token) {
        document.getElementById('email-order-form').submit();
    }
/*
    let i=0;
    let placeholder = "";
    const txt ="example....";
    const speed=120;
    function type(){
        placeholder += txt.charAt(i);
        document.getElementById("keyword-input").setAttribute("placeholder",placeholder);
        i++;
        setTimeout(type,speed)
    }*/
</script>
<?php
$lang = pll_current_language();
$placeholder_uz = "Profil narxlari...";
$placeholder_ru = "Купить трубы в ташкенте... ";
$title_ru  = 'Введите нужные вашему бизнесу <span> ключевые слова </span>';
$title_uz = "Biznesingizni <span>kalit so'zlar </span> bilan tanishtiring";
$description_ru = "Введите слова благодаря которым вы хотите что бы потенциальные клиенты могли вас найти в случае чего мы всегда рады помочь вам и проконсультировать";
$description_uz = "Potentsial mijozlar sizni topa olishlarini istagan so'zlarni kiriting, biz har doim sizga yordam berishdan va maslahat berishdan mamnunmiz. ";
?>
<style>

.keyword_form {
    animation: mymove 2s cubic-bezier(0.45, 0.05, 0.55, 0.95) infinite;
}
@keyframes mymove {
    50% {box-shadow: 1px 2px 20px 1px #e37474;}
}
/*.keyword_form:before {
    content: "";
    position: absolute;
    left: 50%;
    top: 50%;
    display: block;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    -webkit-transform: translateX(-50%) translateY(-50%);
    -ms-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    background-color: var(--main-color);
}

.keyword_form:before {
    z-index: 0;
    -webkit-animation: pulse-border 1500ms ease-out infinite;
    animation: pulse-border 1500ms ease-out infinite;
}*/
</style>

<div class="row mb-5">
    <div class="col-lg-5">
        <div class="keywords_container">
            <h2>
                <?php
                if ($lang == "ru") {
                    echo $title_ru;
                } elseif ($lang == "uz") {
                    echo  $title_uz;
                }
                ?>
            </h2>
            <p>
                <?php
                if ($lang == "ru") {
                    echo $description_ru;
                } elseif ($lang == "uz") {
                    echo  $description_uz;
                }
                ?>
            </p>
            <div class="keyword_form">
                <input placeholder="<?php if ($lang == "ru") {
                                        echo $placeholder_ru;
                                    } elseif ($lang == "uz") {
                                        echo  $placeholder_uz;
                                    }
                                    ?>" type="text" class="keyword_input" name="" id="keyword-input">
                <button id="keyword-search-btn" class="keyword_btn"><?php
                if ($lang == "ru") {
                    echo 'Искать';
                } elseif ($lang == "uz") {
                    echo  'Qidirish';
                }
                ?></button>
            </div>
        </div>

    </div>
    <div class="col-lg-7 p-0  ">
        <div class="keywords_banner_container">
            <img src="https://oqila.uz/wp-content/uploads/2022/03/Seo-img.png" alt="banner">
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12 " id="keyword_wrapper">
            <div class="keywords_title">
                Ключевые слова
                <div class=" row send_keywords_banner">
                    <div class="col-md-7"></div>
                    <div class="col-md-5">
                        <div class="banner-background desktop-only">
                            <img class="circles-icon" src="https://oqila.uz/wp-content/uploads/2022/02/Group-18.png" alt="circles_icons">
                            <img class="snake-icon" src="https://oqila.uz/wp-content/uploads/2022/02/Vector.png" alt="snake_icon">
                            <h2>
                                Оставьте заявку и получите бесплатную консультацию
                            </h2>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="keyword_banner_form">
                                        <input placeholder="<?php the_quote_field('form-phone-number') ?>" value="" name="phone_no" type="text" class="email_input" id="email-input" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                        <a id="submit-keywords-modal" class="keyword__send_btn mrl-10 desktop-only navbar__btn" href="#" data-toggle="modal" data-target="#get-quote">Отправить</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="keys-list" data-counter="0" style="display:none;"></div>
    <!-- <a id="submit-keywords-modal" class="cs-btn-one btn-gradient-color mrl-10 desktop-only navbar__btn" href="#" data-toggle="modal" data-target="#get-quote">Buyurtma berish</a> -->
</div>


<!-- STATIC -->
<script type="text/javascript">
    var rbkeyword_google = '';

    var rbkeyword_letters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

</script>