<!--Traffic Light-->
<div class="container">
    <div class="panel">
        <div class="light <?= $trafficLight->red ? "red-light" : "" ?>"></div>
        <div class="light <?= $trafficLight->yellow ? "yellow-light" : "" ?> <?= $trafficLight->pause ? "yellow-light-blink" : "" ?>"></div>
        <div class="light <?= $trafficLight->green ? "green-light" : "" ?>"></div>
    </div>
</div>

<!--Traffic Light action btns-->
<div class="container">
    <a href="home.php?next">Next</a>
    <a href="home.php?pause" class="<?= $trafficLight->yellow ? "shake-horizontal" : "" ?>">Pause</a>
</div>
