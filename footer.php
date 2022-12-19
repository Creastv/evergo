<?php 
$form = get_field('display_form');
$article = get_field('display_articles');
?>
</div>
</div>
<?php if($form) { ?>
<?php get_template_part('templates-parts/parts/footer', 'form'); ?>
<?php } ?>
<?php if(is_singular('post') || $article) { ?>
<?php get_template_part( 'templates-parts/parts/articles' ); ?>
<?php } ?>
</main>
<footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
    <?php get_template_part('templates-parts/footer/footer', 'social-media'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer__wraper">
                    <?php get_template_part('templates-parts/footer/footer', 'contact'); ?>
                    <?php get_template_part('templates-parts/footer/footer', 'main'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('templates-parts/footer/footer', 'info'); ?>
</footer>
<span id="go-to-top">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path id="Icon_material-arrow-upward" data-name="Icon material-arrow-upward" d="M6,18l2.115,2.115,8.385-8.37V30h3V11.745l8.37,8.385L30,18,18,6Z" transform="translate(-6 -6)" />
    </svg>

</span>
<img class="header-bg" src="<?php echo get_template_directory_uri() ?>/src/img/header-bg.png" alt="Evergo - Better business throught IT.">
<?php wp_footer(); ?>
</body>

</html>
