<?php 
$disModal = get_field('display_modal', 'options');
$modal = get_field('modal', 'options');
$time = get_field('time', 'options');
?>
<?php if($disModal) { ?>
<!-- modal -->
<div class="mod-bg">
    <div class="mod-container">
        <div class="mod-wraper">
            <div class="close">x</div>
            <div class="row">
                <div class="col">
                    <?php echo $modal; ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- END modal -->
<script>
let modal = document.querySelector(".mod-bg");
let body = document.querySelector("body");
let btns = document.querySelectorAll(".mod-bg-open");
let blur = document.querySelectorAll("#header, main, footer");

// opening Modal
function modalDisplay(event) {
    // event.preventDefault();
    modal.style.display = "block";
    body.classList.add("mod-scroll-novisible");
    for (let i = 0; i < blur.length; i++) {
        blur[i].style.filter = "blur(5px)";
    }
}
// Closing modal
function modalClose() {
    if (
        event.target == document.querySelector(".mod-container") ||
        event.target == document.querySelector(".mod-bg .close")
    ) {
        modal.style.display = "none";
        modal.style.display = "none";
        body.classList.remove("mod-scroll-novisible");
        for (let i = 0; i < blur.length; i++) {
            blur[i].style.filter = "blur(0px)";
        }
    }
}

// display modal on mouseleve
jQuery(function($) {
    var LS_KEY = 'modal_shown';
    if (!sessionStorage.getItem(LS_KEY)) {
        setTimeout(function() {
            modalDisplay();
            sessionStorage.setItem(LS_KEY, '1');
        }, <?php echo $time; ?> * 1000);
    }
});
// release function open modal
for (let i = 0; i < btns.length; i++) {
    btns[i].onclick = modalDisplay;
}
// close modal
document.onclick = modalClose;
</script>
<?php } ?>
