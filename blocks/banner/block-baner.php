<?php 
$banner = get_field('banner');
$link = $banner['button'];
if( $link ){ 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
?>

<section id="post-baner" style="background-image:url(<?php echo $banner['img'];?>)">
    <div class="bg">
        <div class="bg__wraper">
            <?php if($banner['title']) { ?>
            <div class="left">
                <p> <?php echo $banner['title']; ?></p>
            </div>
            <?php } ?>
            <?php if($link) { ?>
            <div class="right">
                <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
