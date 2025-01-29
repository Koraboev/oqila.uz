<?php
/**
 * Template Name: CONTACT PAGE
 */
?>

<?php get_header(); ?>
<section class="pdt-70 pdb-70">
	<div class="container">
		<div class="row">
			<div class="col-md-4 our-works-how-to-description">
				<h2 class="pdb-20"><?php the_translation_field('row-1-center-desc'); ?></h2>
				<p><?php the_translation_field('row-1-center-title'); ?></p>
				<a href="tel:<?php the_site_setting_field('primary-phone-number') ?>"><p><i class="fas fa-phone-alt"></i> <?php the_site_setting_field('primary-phone-number') ?></p></a>
				<a href="tel:<?php the_site_setting_field('secondary-phone-number') ?>"><p><i class="fas fa-phone-alt"></i> <?php the_site_setting_field('secondary-phone-number') ?></p></a>
				<a href="mail:<?php the_field('email')?>"><p><i class="fas fa-envelope"></i> <?php the_field('email')?></p></a>
			</div>
			<div class="col-md-8 map-box">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.1280188232463!2d69.32643251569071!3d41.327829507647635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8abf6559df73%3A0xa9983bb6581c5995!2sOQILA%20-%20WEB%20%26%20SEO%20Company!5e0!3m2!1sen!2s!4v1617007057793!5m2!1sen!2s" width="100%" height="454" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
		</div>
	</div>
</section>


					
<!-- </main> -->
<?php get_footer(); ?>