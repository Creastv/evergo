<?php 
$logo    = get_field('logo', 'options');
$name    = get_field('company_name', 'options');
$address = get_field('address', 'options');
?>

<div class="footer__w__info">
    <?php if( $logo ) {
        echo wp_get_attachment_image( $logo );
    } ?>
    <p class="name"><?php echo $name;?></p>
    <p class="address"><?php echo $address;?></p>
    <div class="f__w__info__inf">
        <p>© 2022 devzone360 </p>
        <p>Impressum & Datenschutz</p>
    </div>
</div>
