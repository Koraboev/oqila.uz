
<div class="container">
    <div class="row mrt-100 mrt-lg-90">
        
        <?php $icons = [1 => 'flaticon-man-2', 'flaticon-like-3', 'flaticon-trophy-1', 'flaticon-briefcase-1']; ?>
        <?php for($i = 1; $i < 5; $i++): ?>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="funfact mrb-lg-30 mrb-60">
                    <div class="icon">
                        <span class="webexflaticon <?=$icons[$i]?>"></span>
                    </div>
                    <h2 class="counter"><?php the_translation_field("stats-$i-number"); ?></h2>
                    <h5 class="title"><?php the_translation_field("stats-$i-desc"); ?></h5>
                </div>
            </div>
        <?php endfor; ?>

    </div>
</div>