<?php
$email = get_field('email', 'options');
$tel = get_field('phone_no', 'options');
$telLink = get_field('phone_no_link', 'options');
?>
<?php if(!empty($email) && !empty($tel)) { ?>
<div class="inf-contact">
    <ul>
        <?php if(!empty($email)) { ?>
        <li>
            <a href="mailto: <?php echo $email; ?>">
                <span>
                    <?php echo $email; ?>
                </span>
            </a>
        </li>
        <?php } ?>
        <?php if(!empty($tel) && !empty($telLink)) { ?>
        <li>
            <a href="tel:<?php echo $telLink; ?>">
                <span>
                    <?php echo $tel; ?>
                </span>
            </a>
        </li>
        <?php } ?>
    </ul>
</div>
<?php } ?>
