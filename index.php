<?php

require ('config/autoload.php');

if (isset($_GET['route']) && $_GET['route'] !== "") {
    $route = $_GET["route"];
}
else {
    $route = null;
}

$router = new Router();
$router-> handleRequest($route);

?>