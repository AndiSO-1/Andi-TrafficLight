<?php
$arr_link = explode('?', $_SERVER['REQUEST_URI'], 2);

$basic_link = $arr_link[0];

ob_start();

switch($basic_link){
    case "/":case "":case "/home":
        require_once 'src/php/controller/home.php';
        require_once 'src/php/view/home.php';
        break;
    default:
        http_response_code(404);
        break;
}

$_VIEW = ob_get_clean();

require_once 'src/php/view/layout.php';

?>