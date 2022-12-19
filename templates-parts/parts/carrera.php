<?php
$baner = get_field('banner');
$jobs = get_field('job_offers');
?>
<div id="carrera">
    <div class="carrera__wraper">
        <?php if($baner) { ?>
        <aside>
            <div class="banner">
                <?php if($baner['address']) { ?>
                <div class="address">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="37" viewBox="0 0 24 37">
                        <image id="Layer_860" data-name="Layer 860" width="24" height="37" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAlCAYAAABYkymLAAAABHNCSVQICAgIfAhkiAAAA+BJREFUSEutlnmIV1UUgBs0jZBQyiyMVJSkkszlj2xQRNz30BZQYcBJdIwRB7MCNVLEFRG3CJdQXLI0ChNNQhGiFNO01EwqJycXNFxwR1G/T353eN7em/mN04GP9+59591z77nnnHsLHqpanuVzf+gNbaExFMBZ+BW2wGY4ljWMymnSlM5J8DbUgb/hAJyGO/AUvAQtcu3lPKfB8XiwNAMDUVoBj8MnsDQ3+K3oZw1rZCSMhQtQDBuTerGBEXxcBQdzyrtT1/ffzva5ifh01cuCStJALzq3wncwFC7mOXhQa8DLZ9APBsPXfggGnszNWh8XwqWUwZ+mz01XKuBkis6j9O2EVtAGTgQDC2m8Ax1gX/TjM7Sngu6rm/t2m+camAwGQFJeoHEI3PhiDTizclgHRZHy87S3gUb0q+4zirqBvj4DuvaX6L+Pc99bamAMLIF49o/Q5yY7uIP8FA1iXmj8HHSEK4nvYRVlGnAz3P1m4NKDDOFlA7wJn0eDh6ZJuAmGgy4L4ri/Q4Uvf8BvMCAaRJdoRBdezzDwMP1uttHnHiVlLY2uGrgMJtP4SMGEcWVma1Xihp6AnpHSXNolGrgGi2FCpDCPtvtj2dDPafIYnafgUzAKkzKbRqkGjsKf0CdS6ET7BzBEP8ww8B79M8Go2hHpuG+FGjA8u4PRciNSsmzo2zIw0sL3erwbpovgC3gj+s+9scLu1cAwWA2vwo+RoplpdJj6VkpXZB64uuZguTbK4sx/mb6fnYQGLL2mvtnsTGMJk7Bqmni2j4B+d4XJ0A7/TuflAycRSoW54KzMBTc9S0w+JSts/VYfDH0n0SMY6EvDk0lf6tPaSEg+K/LGYECrRtM/YDWtjVivXoSWcDV5Hphoxr6u2vWAFtrxn9XY49Z9qDwPfG8Elt7tYNQ8iFge/Lc5WGnvM2B7BrwPnrXeGmoirVF2YxfAuPBjfCYbsn+BG/56TUZH15B9C/S9YX9P0m4Vs+ifCPpzf55GzI/DYC6VJv9JM9AEBWuTe+EVJh9Zj9Ig8Cw2EislzYAfp8BH0Bm+r8aCp9kecOXu332SZcAybF6UwyvVGLCKenzq+/P5GlBvFHizew2+yjDindWCZw7NT9PJWoG6lmTvo5Ze7zhx/fG7FdP6ZOam1qeqDGjEW9o38C54BCbF+6jnwb2ak7HC1DCNdb+lw/LxHHjzU54Abw2ex12yBre/uhWo4/K9DK+EotxgXqxGg5cC3ZQp+Rjw5zngpcDLmb525hopqWrwfFegXkMwU8vhJnhzM3v//b8MOI6HkRmrFIEuq1bydVEY6EteDEtPwLzkLjBYxl87qGJ6AAAAAElFTkSuQmCC" />
                    </svg>
                    <span><?php echo $baner['address']; ?></span>
                </div>
                <?php } ?>
                <?php if($baner['email']) { ?>
                <div class="email">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="20" viewBox="0 0 30 20">
                        <image id="Layer_870" data-name="Layer 870" width="30" height="20" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAUCAYAAACaq43EAAAABHNCSVQICAgIfAhkiAAAAjRJREFUSEu11l9oTmEcwPF3KBJTa0goi3sptFCYUBZjN1Nq/oWQsHHBhTR/ruxiN2wSRimu7Apr2YSsae0KN1ukcaFWc8FGFt9vnVNnp/fde3Depz4773nP8zy/8/7O8/zOijKZzCkcxygmYQoK0caYVNPRUsSfL5iNVziDn5iacuQfzGesBmzAkCfv0YhajGA3PqQceB7ztWIuruK0gQdRiY+4hdU4igcpBd/KPM14E/yoaRw7w8A1nLwMAtVzvIgb3hl89v/SJjPoElxDpli2pWjLFtiL/uqbGMZevP3LyEvofxsLsA9PI+MnDGy/OfB5rIWr/l7C4Nvpdw19OAgfZbTlDRx2PsmHy8iXelNrvzqY1gs5bjRxYMevClJn6l3172KTLub8DuZjD7omyE6iwDOZoBifUBqksILjMYSp3xF838vxAD7D7fMdX7PcQN7AVrF2DOBQZAKft6m04PzCOphihe0KH1ygXrN4RFvewBaVXViD/tjgZZwfgeW1Bd2x6ws5d3s+gVlIHHg/PV2Z64MJYmMTnXpzL3AWTZEROX9xOZ2ew+p1PVGI3J12csm1sAkdQbesgd3wPbBcnvjPoOFwq+BhLIfvhXGBq/nCVelzcTVuhK+wtNpDJnLLrUAZHlkyfTlsg6WxCivhqzLNNovJXsOdYAYeG9gV6zPdDN+V8eKQ1g0sYqJn6ES5gYdQgvO4D/9DKETzXb8F7vFhA5+DBeIb3Jd+V4j2m0ktODNw9w+iAIzoP5jBggAAAABJRU5ErkJggg==" />
                    </svg>
                    <a href="mailto:<?php echo $baner['email']; ?>"><?php echo $baner['email']; ?></a>
                </div>
                <?php } ?>
            </div>
        </aside>
        <?php } ?>
        <div class="carrer__content">
            <?php foreach($jobs as $job) { ?>
            <div class="job-offer">
                <div class="header" style="background-image:url(<?php echo $job['header']['img']; ?>)">
                    <div class="bg">
                        <div class="bg__content">
                            <div class="left">
                                <p class="h2"> <?php echo $job['header']['title_job']; ?></p>
                                <span><?php echo $job['header']['subtitle_job'];?></span>
                            </div>
                            <?php if($job['header']['text_button']) { ?>
                            <div class="right">
                                <a href="#" data-job="<?php echo $job['header']['title_job']; ?>" class="btn display"><?php echo $job['header']['text_button']; ?></a>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <?php if($job['job_info']) { ?>
                <div class="content">
                    <?php echo $job['job_info']; ?>
                </div>
                <?php } ?>
                <div class="footer">
                    <?php if($job['footer']['button_text_-modal_opener']) { ?>
                    <div class="left">
                        <a href="#" class="btn display" data-job="<?php echo $job['header']['title_job']; ?>"><?php echo $job['footer']['button_text_-modal_opener'];?></a>
                    </div>
                    <?php } ?>
                    <?php if($job['footer']['address_email']) { ?>
                    <div class="right">
                        <span><b><?php echo $job['footer']['title_email_link'];?></b></span>
                        <a href="mailto:<?php echo $job['footer']['address_email'];?>"><?php echo $job['footer']['address_email'];?></a>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<div id="modal-form">
    <span class="modal-bg"></span>
    <div class="modal-content">
        <span class="stop">X</span>
        <p class="h1 name-job"></p>
        <?php echo do_shortcode('[contact-form-7 id="474" title="Carrer"]')?>
    </div>
</div>

<script>
const display = document.querySelectorAll('.display');
const close = document.querySelector('.stop');
let flag = false;


// let in = document.querySelector('.job-title');

function displayModal(e) {
    e.preventDefault();
    document.querySelector('.job-title').value = e.target.dataset.job
    document.querySelector('.name-job').textContent = e.target.dataset.job
    if (flag == false) {
        document.querySelector('#modal-form').style.display = "block";
        flag = true
    } else {
        document.querySelector('#modal-form').style.display = "none";
        flag = false
    }
}

for (let i = 0; i < display.length; i++) {
    display[i].addEventListener('click', displayModal);
};
// display.addEventListener('click', displayModal);
close.addEventListener('click', displayModal);
</script>
