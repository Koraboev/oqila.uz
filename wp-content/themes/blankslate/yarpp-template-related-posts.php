<?php 
/*
YARPP Template: Simple List
Description: This template returns posts in an unordered list.
Author: YARPP Team
*/
?>

<?php
/*
Templating in YARPP enables developers to uber-customize their YARPP display using PHP and template tags.

The tags we use in YARPP templates are the same as the template tags used in any WordPress template. In fact, any WordPress template tag will work in the YARPP Loop. You can use these template tags to display the excerpt, the post date, the comment count, or even some custom metadata. In addition, template tags from other plugins will also work.

If you've ever had to tweak or build a WordPress theme before, you’ll immediately feel at home.

// Special template tags which only work within a YARPP Loop:

1. the_score()		// this will print the YARPP match score of that particular related post
2. get_the_score()		// or return the YARPP match score of that particular related post

Notes:
1. If you would like Pinterest not to save an image, add `data-pin-nopin="true"` to the img tag.

*/
?>

<?php if ( have_posts() ) : ?>

    <div class="row">

        <?php while ( have_posts() ) : ?>

            <?php the_post(); ?>

            <div class="col-md-4 news-wrapper news-wrapper2">
                <div class="">

                    <?php if(has_post_thumbnail()): ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="news-thumb">
                                <img class="img-full" src="<?=get_the_post_thumbnail_url()?>" />
                            </div>
                        </a>
                    <?php endif ?>

                    <div class="news-details news-details--related-post">
                        <div class="news-description">
                            <a class="post-title-link__related" href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        <?php endwhile; ?>
                       
    </div>

<?php endif; ?>