<!--Traffic Light-->
<div class="container">
    <div class="panel">
        <div class="light <?= $red_light ?>"></div>
        <div class="light <?= $yellow_light ?> <?= $pause_light ?>"></div>
        <div class="light <?= $green_light ?>"></div>
    </div>
</div>

<!--Traffic Light action btns-->
<div class="container">
    <a href="home?next" class="btn">Next</a>
</div>
<?php if ($show_pause_light): ?>
<div class="container">
    <a href="home?pause" class="btn">Pause</a>
</div>
<?php endif; ?>