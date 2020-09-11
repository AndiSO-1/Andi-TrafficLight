<?php
// Start session
session_start();

// Class TrafficLight
require_once('src/php/model/TrafficLight.php');

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


// Classes css à rajouter dans le view
$red_light = $trafficLight->red ? "red-light" : "";
$yellow_light = $trafficLight->yellow ? "yellow-light" : "";
$green_light = $trafficLight->green ? "green-light" : "";
$pause_light = $trafficLight->pause ? "yellow-light-blink" : "";
$shake_pause_light = $trafficLight->yellow || $trafficLight->pause ? "hidden" : "";