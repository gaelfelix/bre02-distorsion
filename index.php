<?php

require ('config/Router.php');

if (isset($_GET['route']) && $_GET['route'] !== "") {
    $route = $_GET["route"];
}
else {
    $route = null;
}

?>