<script>
    window.addEventListener("load", function(event) {
        updateTrafficLight(<?= $active_state ?>);
    });
</script>

<!--Traffic Light-->
<div class="container">
    <div class="panel">
        <div class="light <?= $red_light ?>"></div>
        <div class="light <?= $yellow_light ?> <?= $pause_light ?>"></div>
        <div class="light <?= $green_light ?>"></div>
    </div>
</div>

<!--Traffic Light action btns-->
<?php if ($show_restart_light): ?>
<div class="container">
    <a href="home?next" class="btn">Restart</a>
</div>
<?php endif; ?>
<?php if ($show_pause_light): ?>
<div class="container">
    <a href="home?pause" class="btn">Pause</a>
</div>
<?php endif; ?>