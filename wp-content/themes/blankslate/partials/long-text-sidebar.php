<?php
    $menu = wp_get_nav_menu_items(get_field('sidebar-menu-name'));
?>

<div class="info-fixed-column-wg">

    <h4 class="info-fixed-column-wg-title"><?php the_field('sidebar-title')?></h4>
    
    <?php if($menu): ?>
        <div class="info-fixed-column-list">
            <?php foreach ($menu as $item): ?>
                <div class="info-fixed-column-list-item">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/arrow.png" alt="" class="arrow-img">
                    <a class="info-fixed-column-list-item-text" href="<?=$item->url?>"><?=$item->title?></a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif ?>

    <?php require 'contact-sidebar.php'?>

</div> 