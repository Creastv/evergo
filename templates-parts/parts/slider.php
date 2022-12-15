<?php
$slider    = get_field('quick_opinion'); 
?>

<section id="slider-hero">
    <div class="slider-hero__wraper">
        <div class="swiper slider-home">
            <div class="swiper-wrapper">
                <?php foreach ($slider as $slide ) { ?>
                <div class="swiper-slide">
                    <div class="slide">
                        <h1 class="h1 h1-slider">Make your digital<br>transformation a success</h1>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php if( is_single(array(4096, 24775, 6243, 6244, 6245, 6246, 8002))){ ?>
<!-- //Osiedle Dębowy Park -->
<div id="fastcall" data="osiedledebowypark"></div>
<script src="https://fastcall.3way.pl/fastcall-widget.min.js"></script>
<?php } else if( is_single(4366)) { ?>
<!-- Apartamenty Bacha -->
<div id="fastcall" data="apartamentybacha"></div>
<script src="https://fastcall.3way.pl/fastcall-widget.min.js"></script>
<?php } else if( is_single(array(4490, 4600, 4590, 4094, 6249))) { ?>
<!-- Osiedle Nowa Dąbrowa -->
<div id="fastcall" data="osiedlenowadabrowa"></div>
<script src="https://fastcall.3way.pl/fastcall-widget.min.js"></script>
<?php } else if( is_single(4097)) { ?>
<!-- Osiedle KASKADA -->
<div id="fastcall" data="osiedlakaskada"></div>
<script src="https://fastcall.3way.pl/fastcall-widget.min.js"></script>
<?php } else if( is_single(4095)) { ?>
<!-- Osiedle Zielona Podkowa -->
<div id="fastcall" data="osiedlezielonapodkowa"></div>
<script src="https://fastcall.3way.pl/fastcall-widget.min.js"></script>
<?php } else if( is_single(array(4045, 13552, 13543, 13544))) { ?>
<!-- Osiedle Gwiezdna -->
<div id="fastcall" data="osiedlegwiezdna"></div>
<script src="https://fastcall.3way.pl/fastcall-widget.min.js"></script>>
<?php } else  { ?>
<div id="fastcall" data="adatexpl"></div>
<!-- test -->
<script src="https://fastcall.3way.pl/fastcall-widget.min.js"></script>
<?php } ?>
