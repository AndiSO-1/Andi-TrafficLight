<?php
$arr_link = explode('?', $_SERVER['REQUEST_URI'], 2);

$basic_l = $arr_link[0];

ob_start();

switch($basic_l){
    case "/":case "":case "/home":
        require_once 'src/php/controller/home.php';
        require_once 'src/php/views/home.php';
        break;
}

$_VIEW = ob_get_clean();

require_once 'src/php/views/layout.php';

?>