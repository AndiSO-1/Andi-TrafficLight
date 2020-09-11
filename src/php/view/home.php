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
<div class="container">
    <a href="home?pause" class="btn" <?= $shake_pause_light ?>>Pause</a>
</div>
