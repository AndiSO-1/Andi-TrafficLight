<?php
// Start session
session_start();

// Class TrafficLight
require_once('src/php/models/TrafficLight.php');

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