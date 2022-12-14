<?php
$image    = get_field('image_no');
$header   = get_field('header_no');
$numbers  = get_field('numbers'); 

?>
<?php 
// echo $header['subtitle'];
// echo $header['title'];
// echo $header['description'];

// echo $numbers['number'];
// echo $numbers['description'];

?>

<section id="numbers">
    <div class="numbers__wraper">
        <div class="numbers__col">
            <div class="numbers__img" style="background-image: url(<?php echo $image; ?>)">
                <div class="numbers__bg"></div>
            </div>
        </div>
        <div class="numbers__col">
            <div class="t-section__wraper">
                <?php if($header['subtitle']) { ?>
                <span class="c-main"><?php echo $header['subtitle']; ?></span>
                <?php } ?>
                <?php if($header['title']) { ?>
                <h2 class="t-section-title h1"><?php echo $header['title']; ?></h2>
                <?php } ?>
                <?php if($header['description']) { ?>
                <p><?php echo $header['description']; ?></p>
                <?php } ?>
            </div>
            <?php if($numbers) { ?>
            <div class="nums">
                <?php foreach ($numbers as $num ) { ?>
                <div class="nums__item">
                    <p><b><?php echo $num['number']?></b></p>
                    <span><?php echo $num['description']?></span>
                </div>
                <?php } ?>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
