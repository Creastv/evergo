<?php
$rightColumn   = get_field('right_column');

$leftc       = get_field('left_column_baner');

$icon         = $leftc['icon'];
$link = $leftB['button'];
if( $link ){
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
?>
<section id="about-us-ex">
    <div class="about-us__wraper">
        <div class="about-us__col">
            <div class="about-us__baner">
                <?php if($icon) { ?>
                <?php  echo wp_get_attachment_image( $icon, 'icon' ); ?>
                <br><br>
                <?php } ?>
                <?php foreach($leftc['info'] as $info) { ?>
                <div class="about-us__baner__content">
                    <?php if($info['span']) { ?>
                    <span><?php echo $info['span']; ?></span>
                    <?php } ?>
                    <?php if($info['number']) { ?>
                    <p><b><b><?php echo $info['number']; ?></b><?php echo $info['big_span']; ?></b></p>
                    <?php } ?>
                    <?php if($info['span_sec']) { ?>
                    <span><?php echo $info['span_sec']; ?></span>
                    <?php } ?>
                </div>
                <?php } ?>
                <?php if($link){?>
                <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php } ?>
            </div>
        </div>
        <div class="about-us__col">
            <?php echo $rightColumn; ?>
        </div>
    </div>
</section>
