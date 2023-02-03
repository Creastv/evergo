<?php
$leftColumn   = get_field('left_col');
$banner       = get_field('banner_as'); 

$leftB        = get_field('left_col_baner');
$icon         = $leftB['icon'];
$link = $leftB['button'];
if( $link ){
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
?>
<section id="about-us">
    <div class="about-us__wraper">
        <div class="about-us__col">
            <div class="about-us__baner">
                <?php if($icon) { ?>
                <?php  echo wp_get_attachment_image( $icon, 'icon' ); ?>
                <br><br>
                <?php } ?>
                <?php foreach($leftB['info'] as $info) { ?>
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
            <div class="about-us__cover" style="background-image: url(<?php echo $banner['image']; ?>)">
                <div class="about-us__cover__bg">
                    <div class="about-us__cover__content">
                        <div>
                            <p class="h2"><?php echo $banner['title']; ?></p>
                            <p><i><?php echo $banner['says']; ?></i></p>
                        </div>
                        <?php if($banner['link']) { ?>
                        <a href="<?php echo $banner['link']['url']; ?>#" class="btn" target="<?php echo $banner['link']['target'] ? $banner['link']['target'] : '_self'; ?>"><?php echo $banner['link']['title']; ?></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
