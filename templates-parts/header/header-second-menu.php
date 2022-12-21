<div id="second-menu">
    <div class="container">
        <div class="row">
            <?php
            if ( has_nav_menu( 'secundary_menu' ) ) {
            wp_nav_menu(array('theme_location'  => 'secundary_menu', ));
            }
            ?>
        </div>
    </div>
</div>
