<?php
$headline = get_field('headline_inf', 'options');
$link = get_field('button_info', 'options');
if( $link ){
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
?>
<div class="f-contact">
    <div class="f-contact__wraper">
        <?php if($headline){ ?>
        <div class="f-contact__col f-contact__col--auto ">
            <p class="h2"><?php echo $headline; ?> </p>
        </div>
        <?php } ?>
        <?php if($link){ ?>
        <div class="f-contact__col">
            <a class="btn-revers" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        </div>
        <?php } ?>
    </div>
</div>
