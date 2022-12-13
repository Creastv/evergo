<?php
    $menuOne       = get_field('menus_one', 'options');
    $menuTwo       = get_field('menus_two', 'options');
    $menuThree     = get_field('menus_three', 'options');
    $contact       = get_field('contact', 'options');
?>
<div class="f-main">
    <div class="f-main__wraper">
        <div class="f-main__col">
            <?php if($menuOne['menu_title']){ ?>
            <p class="h3"><?php echo $menuOne['menu_title']; ?></p>
            <?php } else { ?>
            <span class="spacer"></span>
            <?php } ?>
            <?php if( $menuOne['menu_one']){ ?>
            <?php  echo $menuOne['menu_one']; ?>
            <?php } ?>
        </div>
        <div class="f-main__col">
            <?php if($menuTwo['menu_title']){ ?>
            <p class="h3"><?php echo $menuTwo['menu_title']; ?></p>
            <?php } else { ?>
            <span class="spacer"></span>
            <?php } ?>
            <?php if( $menuTwo['menu']){ ?>
            <?php echo $menuTwo['menu']; ?>
            <?php } ?>
        </div>
        <div class="f-main__col f-main__col--auto">
            <?php if($menuThree['menu_title']){ ?>
            <p class="h3"><?php echo $menuThree['menu_title']; ?></p>
            <?php } else { ?>
            <span class="spacer"></span>
            <?php } ?>
            <?php if( $menuThree['menu']){ ?>
            <?php echo $menuThree['menu']; ?>
            <?php } ?>
        </div>
        <?php if($contact) { ?>
        <div class="f-main__col">
            <div class="f-main__contact">
                <?php if( $contact['first_line']){ ?>
                <p><b><?php echo $contact['first_line']; ?></b></p>
                <?php } ?>
                <?php if( $contact['second_line']){ ?>
                <p class="c-main"><b><?php echo $contact['second_line']; ?></b></p>
                <?php } ?>
                <?php if( $contact['third_line']){ ?>
                <p><b> <?php echo $contact['third_line']; ?></b></p>
                <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
