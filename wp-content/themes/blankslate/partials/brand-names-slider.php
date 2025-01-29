<?php
$names = get_field('brand-names');
?>

<section class="request-a-call-back pdt-110 pdt-sm-50 pdb-110 pdb-lg-70" style="background-image: url(/wp-content/uploads/2021/08/abs-bg4.png);">
		<div class="section-content">
			 <div class="customer-logos-title-box">
                <h2>
                    <?php the_field('brand-name-block-title')?>
                </h2>
            </div>
			<div class="container">
				<div class="row">
					<div class="owl-carousel testimonial-items-3col mrb-lg-40">
					 <?php foreach ($names as $name): ?>
							<div class="testimonial-item">
								<span class="quote-icon fas fa-quote-right"></span>		
								<div class="container">
									<div class="row">
										<div class="col-md-12 col-xl-6">
											<div class="about-image-block mrb-lg-60">
												<?php $image = get_the_post_thumbnail_url($name->ID);?>
												  <img class="img-full" src="<?php echo $image ?>">
											</div>
										</div>
										<div class="col-md-12 col-xl-6">
											<h2 class="title-under-line mrb-70"><?=$name->post_title?></h2>
											<h5 class="mrb-30 text-primary-color"><?=$name->post_excerpt?></h5>
											<p class="mrb-40"><?=$name->post_content?></p>
										</div>
									</div>
								</div>
							</div>
					 <?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</section>