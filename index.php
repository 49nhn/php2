<?php

require_once "Controllers/BaseController.php";

//Default controller and action
$controller = "ProductController";
$action = "Index";

if (isset($_GET["controller"])) {
    $controller = ucfirst($_GET["controller"]) . "Controller";
    $action = isset($_GET["action"]) ? $_GET["action"] : "Index";
}

require_once "Controllers/$controller.php";
$obj = new $controller();
$obj->$action();