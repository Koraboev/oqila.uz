<?php
/**
 * Template Name: GET QUOTE THANK PAGE
 */

if(!session_id())
    session_start();

if(!empty($_SESSION['quote-successfully-sent']))
    unset($_SESSION['quote-successfully-sent']);
else
    header('Location: '.get_home_url());

?>

<?php get_header(); ?>

<section class="get-quote">
    <div class="container">
        <div class="alert alert-success" role="alert">
            <h2><?php the_content(); ?></h2>
        </div>
        <a href="<?=get_home_url()?>"><?php the_translation_field('goto-home-label') ?></a>
    </div>
</section>

<?php get_footer(); ?>