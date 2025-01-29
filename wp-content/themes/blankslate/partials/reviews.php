<?php $reviews_list = get_field('reviews-list-entities'); ?>

<section class="comments">
    <div class="container">
        <div class="comments-box">
            <div class="comments-title">
                <h2><?php the_field('reviews-list-title')?></h2>
            </div>
            <div class="comments-content-box">  
                <?php foreach($reviews_list as $review):?>
                    <div class="comments-grid">
                        <div class="comments-grid-content">
                            <?php the_field('full-version', $review) ?>
                        </div>
                        <div class="comments-author">
                            <div class="comments-author-wrapper">
                                <?=get_the_post_thumbnail($review, 'customer-review', [
                                    'class' => 'author-img',
                                ])?>
                                <p class="comments-text"><?=$review->post_title?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach?>
            </div>
        </div>
    </div>
</section>