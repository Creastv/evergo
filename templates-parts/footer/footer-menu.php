<?php
    $subheader       = get_field('sub_header', 'options');
    $header          = get_field('header', 'options');
    $menuOne         = get_field('menu1', 'options');
    $menuTwo         = get_field('menu2', 'options');
?>
<div class="footer__w__menus">
    <div class="f__w__menu__wraper">
        <div class="f__w__menu__wraper-col-1">
            <div class="g-title g-title--small">
                <span class="g-title__pref c-main"><?php echo $subheader; ?></span>
                <p class="g-title__title"><?php echo $header; ?></p>
            </div>
        </div>
        <div class="f__w__menu__wraper-col-2">
            <?php echo $menuOne; ?>
        </div>
        <div class="f__w__menu__wraper-col-2">
            <?php echo $menuTwo; ?>
        </div>
    </div>
</div>
