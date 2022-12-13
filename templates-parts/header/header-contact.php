<?php
$button = get_field('link_h', 'options');
if($button){
    $button_url = $button['url'];
    $button_title = $button['title'];
    $button_target = $button['target'] ? $button['target'] : '_self';
}
$link = get_field('button_h', 'options');
if( $link ){
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
?>

<div class="navbar__contact">
    <ul>
        <?php if($button) {?>
        <li>
            <a href="<?php echo esc_url( $button_url ); ?>" target="<?php echo esc_attr( $button_target ); ?>"><?php echo esc_html( $button_title ); ?></a>
        </li>
        <?php } ?>
        <?php if($link) {?>
        <li>
            <a class="btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        </li>
        <?php } ?>
    </ul>
</div>
