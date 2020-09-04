<!DOCTYPE html>

<?php

require_once('Classes/TrafficLight.php');

$trafficLight = new TrafficLight();
$state = isset($_GET["state"]) ? htmlspecialchars($_GET["state"]) : 0;
$trafficLight->getState($state);
?>

<html>

<head>
    <title>Traffic Light</title>

    <link rel="stylesheet" type="text/css" href="../../resources/css/stylesheet.css">
</head>
<body>

<div class="container">
    <div class="panel">
        <div class="light <?= $trafficLight->red ? "red-light" : "" ?>"></div>
        <div class="light <?= $trafficLight->yellow ? "yellow-light" : "" ?>"></div>
        <div class="light <?= $trafficLight->green ? "green-light" : "" ?>"></div>
    </div>
</div>
<div class="container">
    <a href="home.php?state=<?= $trafficLight->nextState($state); ?>">Next</a>
</div>
</body>
</html>
