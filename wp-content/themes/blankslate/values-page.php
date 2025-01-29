<?php 
/**
 * Template Name: VALUES PAGE
 */
?>
<?php get_header(); ?>
 <section class="section banner-section">
    <div class="container">
    
        <div class="mrt-20 text-center blog-page__banner-content">
            <h1 class="part1-title blog-page__banner-title"><?php the_field('banner_title');?></h1>

            <div class="blog-page__banner-desc">
                <?php the_field('banner_content');?>
            </div>

        </div>
            
    </div>
</section>


<section class="values-block">
	<div class="container">
		<div class="row values-content-box">
			<div class="col-md-12 values__title">
				<h2>
					<?php the_content();?>
				</h2>
			</div>
			<div class="col-md-6">
				<div class="values-icon-box">
					<i class="fas fa-balance-scale"></i>
				</div>
				<h4><?php the_field('our_values_title_1');?></h4>
				<p><?php the_field('our_values_content_1')?></p>
			</div>
			<div class="col-md-6">
				<div class="values-icon-box">
					<i class="fas fa-dove"></i>
				</div>
				<h4><?php the_field('our_values_title_2');?></h4>
				<p><?php the_field('our_values_content_2')?></p>
			</div>
			<div class="col-md-6">
				<div class="values-icon-box">
					<i class="far fa-handshake"></i>
				</div>
				<h4><?php the_field('our_values_title_3');?></h4>
				<p><?php the_field('our_values_content_3')?></p>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>