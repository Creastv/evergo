<?php
$pos = get_field('position', 'options');
$name = get_field('name_and_surname', 'options');
$email = get_field('email', 'options');
$tel = get_field('phone', 'options');
$telLink = get_field('phone_link', 'options');
?>
<div class="footer__w__contact">
    <div class="g-title g-title--small">
        <span class="g-title__pref"><?php echo $pos; ?></span>
        <p class="g-title__title"><?php echo $name; ?></p>
    </div>
    <div class="g-buttons">
        <ul>
            <?php if(!empty($email)) { ?>
            <li>
                <a href="mailto: <?php echo $email; ?>" class="btn btn--small">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 43.3 35.4" style="enable-background:new 0 0 43.3 35.4;" xml:space="preserve">
                        <path fill="#FF0033" d="M35.1,35.4H8.2c-4.5,0-8.2-3.7-8.2-8.2V8.2C0,3.7,3.7,0,8.2,0h26.9c4.5,0,8.2,3.7,8.2,8.2v19.1
                        c0,0.7-0.5,1.2-1.2,1.2c-0.7,0-1.2-0.5-1.2-1.2V8.2c0-3.2-2.6-5.8-5.8-5.8H8.2C5,2.4,2.4,5,2.4,8.2v19.1C2.4,30.4,5,33,8.2,33
                        h26.9c0.7,0,1.2,0.5,1.2,1.2C36.3,34.9,35.8,35.4,35.1,35.4z" />
                        <path fill="#FF0033" d="M37.6,26.4c0-2.4-1.9-4.3-4.3-4.3C30.9,22,29,24,29,26.4c0,2.4,1.9,4.3,4.3,4.3
                        C35.7,30.7,37.6,28.8,37.6,26.4z" />
                        <path fill="#FF0033" d="M21.6,19.7c-2.1,0-4.2-0.8-5.8-2.4L5.7,7.2c-0.5-0.5-0.5-1.2,0-1.7C6.1,5,6.9,5,7.4,5.5l10.2,10.2
                        c2.3,2.3,5.9,2.3,8.2,0L35.9,5.5c0.5-0.5,1.2-0.5,1.7,0c0.5,0.5,0.5,1.2,0,1.7L27.4,17.4C25.8,19,23.7,19.7,21.6,19.7z" />
                    </svg>
                    <span>
                        <?php echo $email; ?>
                    </span>
                </a>
            </li>
            <?php } ?>
            <?php if(!empty($tel) && !empty($telLink)) { ?>
            <li>
                <a href="mailto:<?php echo $telLink; ?>" class="btn btn--small">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 34.4 54.4" style="enable-background:new 0 0 34.4 54.4;" xml:space="preserve">
                        <path fill="#FF0033" d="M28,54.4H5.1c-2.8,0-5.1-2.3-5.1-5.1V5.1C0,2.3,2.3,0,5.1,0h24.2c2.8,0,5.1,2.3,5.1,5.1v32
                        c0,0.8-0.7,1.5-1.5,1.5c-0.8,0-1.5-0.7-1.5-1.5v-32C31.4,4,30.5,3,29.3,3H5.1C4,3,3,4,3,5.1v44.2c0,1.2,0.9,2.1,2.1,2.1H28
                        c0.8,0,1.5,0.7,1.5,1.5C29.5,53.7,28.8,54.4,28,54.4z" />
                        <path fill="#FF0033" d="M30.4,46.8H4c-2.2,0-4-1.8-4-4V12.1c0-2.2,1.8-4,4-4h26.5c2.2,0,4,1.8,4,4c0,0.8-0.7,1.5-1.5,1.5
                        c-0.8,0-1.5-0.7-1.5-1.5c0-0.5-0.4-1-1-1H4c-0.5,0-1,0.4-1,1v30.7c0,0.5,0.4,1,1,1h26.5c0.8,0,1.5,0.7,1.5,1.5
                        C32,46.1,31.3,46.8,30.4,46.8z" />
                        <path fill="#FF0033" d="M22.8,6.7h-7.2c-1,0-1.7-0.8-1.7-1.7c0-1,0.8-1.7,1.7-1.7h7.2c1,0,1.7,0.8,1.7,1.7C24.5,6,23.8,6.7,22.8,6.7
                            z" />
                        <path fill="#FF0033" d="M12.2,6.7h-0.6c-1,0-1.7-0.8-1.7-1.7c0-1,0.8-1.7,1.7-1.7h0.6C13.2,3.3,14,4,14,5C14,6,13.2,6.7,12.2,6.7z" />
                        <path fill="#FF0033" d="M19.6,49c0-1.3-1.1-2.4-2.4-2.4s-2.4,1.1-2.4,2.4c0,1.3,1.1,2.4,2.4,2.4S19.6,50.4,19.6,49z" />
                    </svg>
                    <span>
                        <?php echo $tel; ?>
                    </span>
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>

</div>
