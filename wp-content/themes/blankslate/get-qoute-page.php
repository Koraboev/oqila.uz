<?php
session_start();
/**
 * Template Name: GET QUOTE PAGE
 */

////////////////////////////////
if(pll_current_language() == 'uz')
    $success_url  = '/get-quote-thank-you-uz';
else
    $success_url  = '/'.pll_current_language().'/get-quote-thank-you-'.pll_current_language();
if (isset($_COOKIE["google_adword"])) {
    $reference_adword = " Google adworddan kelgan klient";
}
else{
    $reference_adword = " ";
}
$utm_source = (isset($_SESSION['utm_source'])) ? $_SESSION['utm_source'] : '';

$_POST['first-name'] = strip_tags($_POST['first-name']);
$_POST['phone-number'] = strip_tags($_POST['phone-number']);
$_POST['company-name'] = strip_tags($_POST['company-name']);

$err = '';
$sending_result = true;

if(
    empty($_POST['first-name']) ||
    empty($_POST['phone-number'])
){
    $err = the_quote_field('form-error-required-msg', true);
}
elseif(!isset($_POST['g-recaptcha-response']))
{
    $err .= "Error: Google Captcha Code is not sent";
}
else
{
    $request = curl_init();

    curl_setopt($request, CURLOPT_URL,"https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($request, CURLOPT_POST, 1);
    curl_setopt($request, CURLOPT_POSTFIELDS, http_build_query([
        'secret' => SECRET_KEY,
        'response' => $_POST['g-recaptcha-response']
    ]));
    curl_setopt($request, CURLOPT_RETURNTRANSFER, true);

    if(! $result = curl_exec($request))
        $err .= "Error: Google server connection failed";
    else
    {
        $resultObj = json_decode($result);
        if(!$resultObj->success)
            $err .= "Error: You failed verification";
    }
    curl_close($request);
}

///////////////////////////////////
if(empty($err))
{

    $to = ['info@oqila.uz'];

    $subject = 'Email buyurtma: '.$_POST['phone-number'];

    $body  = 'Ism: '.$_POST['first-name'].'<br>';
    $body .= 'Telefon raqam: '.$_POST['phone-number'].'<br>';
    $body .= 'Kompaniya nomi: '.$_POST['company-name'].'<br>';

    if(isset($_POST['quote-details']))
    {
        $_POST['quote-details'] = strip_tags($_POST['quote-details']);
        $_POST['quote-details'] = str_replace("\n", "<br>", $_POST['quote-details']);
        $body .= "<hr>";
        $body .= $_POST['quote-details'];

        if(isset($_POST['price-calculator-result-msg']))
        {
            $_POST['price-calculator-result-msg'] = strip_tags($_POST['price-calculator-result-msg']);
            $body .= "<hr>";
            $body .= $_POST['price-calculator-result-msg'];
        }
    }

    $body .= '<hr>';
    $body .= 'Xizmat sahifasi: '.$_POST['service-url'].'<br>';
    $body .= 'Qaysi saytdan kelgan: '.get_referrer_url().'<br>';

    $headers = array('Content-Type: text/html; charset=UTF-8');

    $token = '1771352741:AAFcotcX585n9JYZ7auU_vmXDOqhbhFCuNE';
    $chat_id = '-1001340477778';
    $arr_msg = [
        'Email buyurtma: '        => $_POST['phone-number'],
        'Ism: '                   => $_POST['first-name'],
        'Telefon raqam: '         => $_POST['phone-number'],
        'Kompaniya nomi: '        => $_POST['company-name'],
        'Xizmat sahifasi: '       => $_POST['service-url'],
        'Google keywords: '      => isset($_POST['seo-keywords']) ? $_POST['seo-keywords'] : '',
        'Qaysi saytdan kelgan: '  => get_referrer_url(),
        'Google adword: '          => $reference_adword,
        'Ijtimoiy tarmoq: '      => $utm_source
    ];

    foreach ($arr_msg as $key => $value) {
        $txt .= '<b>' . $key . '</b>' . $value . '%0A';
    }
    
    if($sending_result = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r"))
    {
        $_SESSION['quote-successfully-sent'] = 1;
        header('Location: '.$success_url);
    }
    
    /*if($sending_result = wp_mail( $to, $subject, $body, $headers ))
    {
        $_SESSION['quote-successfully-sent'] = 1;
        header('Location: '.$success_url);
    }*/
}
?>

<?php get_header(); ?>

<section class="get-quote">
    <div class="container">

        <?php if(!$sending_result): ?>
            <div class="alert alert-danger" role="alert">
                <?php the_quote_field('form-error-email-sending-msg'); ?>: <b><?php the_site_setting_field('primary-phone-number'); ?>, <?php the_site_setting_field('secondary-phone-number'); ?></b>
            </div>
        <?php elseif(!empty($err)): ?>
            <div class="alert alert-danger" role="alert">
                <?=$err?>
            </div>
            <?php include 'partials/get-quote-form.php'; ?>
        <?php endif ?>

    </div>
</section>

<?php get_footer(); ?>
