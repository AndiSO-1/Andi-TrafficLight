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
$red_light = $trafficLight->red ? "red-light" : ""; // CSS class display red light
$yellow_light = $trafficLight->yellow ? "yellow-light" : ""; // CSS class display yellow light
$green_light = $trafficLight->green ? "green-light" : ""; // CSS class display green light
$pause_light = $trafficLight->pause ? "yellow-light-blink" : "";  // CSS class display yellow blink light
$show_restart_light = $trafficLight->pause ? true : false; // True -> display restart btn to continue traffic light
$show_pause_light = $trafficLight->yellow || $trafficLight->pause ? false : true; // True -> display pause btn to "broke" traffic light
$active_auto_next_page = !$trafficLight->pause ? true : false; // True -> active the auto refresh of the page to see next state
$path_next = "/home?next";
$path_wait_time = $trafficLight->wait_time;