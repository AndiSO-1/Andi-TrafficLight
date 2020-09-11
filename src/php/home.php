<?php
// Start session
session_start();

// Class TrafficLight
require_once('Classes/TrafficLight.php');

// Initilize traffic session state
$state = isset($_SESSION["state"]) ? htmlspecialchars($_SESSION["state"]) : 0;

// Obj traffic light
$trafficLight = new TrafficLight();

// Set the saved state in the traffic light obj
$trafficLight->setState($state);

// Change the traffic light state
if (isset($_GET["next"]))
    $trafficLight->next();
else if (isset($_GET["pause"]))
    $trafficLight->pause();

// Reset the state in the traffic light obj to have the wanted state
$trafficLight->setState($trafficLight->getState());

// Save the state
$_SESSION["state"] = $trafficLight->getState();


?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title>Traffic Light</title>

    <link rel="stylesheet" type="text/css" href="../../resources/css/stylesheet.css">
</head>
<body>

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
</body>
</html>
