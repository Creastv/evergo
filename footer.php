</div>
</main>
<footer id="footer" itemscope itemtype="http://schema.org/WPFooter">
    <?php get_template_part('templates-parts/footer/footer', 'social-media'); ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer__wraper">
                    <?php get_template_part('templates-parts/footer/footer', 'contact'); ?>
                    <?php get_template_part('templates-parts/footer/footer', 'menu'); ?>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('templates-parts/footer/footer', 'info'); ?>
</footer>
<span id="go-to-top"></span>
<?php wp_footer(); ?>
</body>

</html>
