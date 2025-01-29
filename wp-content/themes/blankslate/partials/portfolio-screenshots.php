<?php
$screenshots = get_field('adword-portfolio');
?>
<section class="request-a-call-back pdt-110 pdt-sm-50 pdb-lg-70" style="background-image: url(/wp-content/uploads/2021/08/abs-bg5.png); background-repeat: no-repeat;">
		<div class="section-content">
<div class="container text-center mrt-100 text-center mrb-100" >
	<div class="customer-logos-title-box">
                <h2>
                    <?php the_field('adword-portfolio-title')?>
                </h2>
            </div>
<div class="row">
 
<?php foreach ($screenshots as $screenshot): ?>
	<div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
		<?=get_the_post_thumbnail($screenshot, 'orginal', [
            'class' => 'portfolio-screenshot-image',
            'alt'   => $screenshot->post_title
        ])?>
        <h4><?=$screenshot->post_title?></h4>
	</div>

<?php endforeach ?>
</div>
</div>
</div>
</section>



