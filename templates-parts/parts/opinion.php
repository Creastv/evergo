<?php
$leftcolumn = get_field('left_column');
$linkLeft   = $leftcolumn['button'];
if( $linkLeft ){
    $link_left_url = $linkLeft['url'];
    $link_left_title = $linkLeft['title'];
    $link_left_target = $linkLeft['target'] ? $linkLeft['target'] : '_self';
}
$opinion    = get_field('quick_opinion'); 
$linkRight  = $opinion['button'];
if( $linkRight ){
    $link_right_url = $linkRight['url'];
    $link_right_title = $linkRight['title'];
    $link_right_target = $linkRight['target'] ? $linkRight['target'] : '_self';
}
?>
<section id="opinion">
    <div class="opinion__wraper">
        <div class="opinion__wraper__col">
            <div class="t-section">
                <div class="t-section__wraper">
                    <?php if($leftcolumn['subtilte']) { ?>
                    <span class="c-main"><?php echo $leftcolumn['subtilte']; ?></span>
                    <?php } ?>
                    <?php if($leftcolumn['title']) { ?>
                    <p class="h3"><?php echo $leftcolumn['title']; ?></p>
                    <?php } ?>
                </div>
                <?php if($leftcolumn['description']) { ?>
                <?php echo $leftcolumn['description']; ?>
                <?php } ?>
                <div class="wraper-extra-col">
                    <?php if($leftcolumn['left']) { ?>
                    <div class="col">
                        <?php echo $leftcolumn['left']; ?>
                    </div>
                    <?php } ?>
                    <?php if($leftcolumn['right']) { ?>
                    <div class="col">
                        <?php echo $leftcolumn['right']; ?>
                    </div>
                    <?php } ?>
                </div>
                <?php if( $linkLeft){ ?>
                <br>
                <a class="btn" href="<?php echo esc_url( $link_left_url ); ?>" target="<?php echo esc_attr( $link_left_target ); ?>"><?php echo esc_html( $link_left_title ); ?></a>
                <?php } ?>
            </div>
        </div>
        <div class="opinion__wraper__col">
            <svg class="apostrof" xmlns="http://www.w3.org/2000/svg" width="73" height="160" viewBox="0 0 73 160">
                <text id="_" data-name="”" transform="translate(73 31) rotate(180)" fill="#37444a" font-size="145.153" font-family="TimesNewRomanPS-BoldMT, Times New Roman" font-weight="700" opacity="0.102">
                    <tspan x="0" y="0">”</tspan>
                </text>
            </svg>
            <div class="opinion__wraper__content">
                <div class="top">
                    <div class="img">
                        <?php echo wp_get_attachment_image(  $opinion['avatar'], 'person' ); ?>
                    </div>
                    <div class="name">
                        <p><b><?php echo $opinion['name'];?></b></p>
                        <span><?php echo $opinion['position']; ?></span>
                    </div>
                </div>
                <div class="bottom">
                    <img src="<?php echo get_template_directory_uri() ?>/src/img/stars-5.png" alt="stars-5" />
                    <p><?php echo $opinion['opinion']; ?></p>
                    <?php if( $linkRight ){ ?>
                    <br>
                    <a class="btn" href="<?php echo esc_url( $link_right_url ); ?>" target="<?php echo esc_attr( $link_right_target ); ?>"><?php echo esc_html( $link_right_title ); ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
