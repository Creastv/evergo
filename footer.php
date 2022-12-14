</div>
</div>
<?php get_template_part('templates-parts/parts/footer', 'form'); ?>
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
<span id="go-to-top"></span>
<img class="header-bg" src="<?php echo get_template_directory_uri() ?>/src/img/header-bg.png" alt="Evergo - Better business throught IT.">
<?php wp_footer(); ?>
</body>

</html>
