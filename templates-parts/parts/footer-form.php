<?php 
$form = get_field('f-form', 'options');
?>
<section id="f-form">
    <div class="container">
        <div class="row">
            <div class="t-section text-center">
                <div class="t-section__wraper">
                    <?php if($form['subtitle_f-_form']) { ?>
                    <span class="c-main"><?php echo $form['subtitle_f-_form']; ?></span>
                    <?php } ?>
                    <?php if($form['title_f_form']) { ?>
                    <h2 class="t-section-title h1"><?php echo $form['title_f_form']; ?></h2>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php echo do_shortcode('[contact-form-7 id="120" title="Footer form"]')?>
        </div>
    </div>
</section>
