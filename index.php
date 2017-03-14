<?php

require_once 'models/DataBaseModel.php';
require_once 'controllers/RegistrationPageController.php';
require_once 'controllers/LoginPageController.php';
require_once 'controllers/ProfilePageController.php';
require_once 'controllers/ErrorPageController.php';
require_once 'libs/Smarty.class.php';
require_once 'config.php';

$dbController = new DataBaseModel(
        $GLOBALS['CONFIG']['dbHost'], $GLOBALS['CONFIG']['dbUser'], $GLOBALS['CONFIG']['dbPassword'], $GLOBALS['CONFIG']['dbName']
);

session_start();

if (isset($_GET["view"])) {
    $view = $_GET["view"];
} else {
    $view = "";
}

if (isset($_SESSION["lang"])) {
    $lang = $_SESSION["lang"];
} else {
    $lang = "ru";
}

require_once "local/{$lang}/login_local.php";
require_once "local/{$lang}/reg_local.php";
require_once "local/{$lang}/errors_local.php";
require_once "local/{$lang}/profile_local.php";


switch ($view) {
    case "auth":
        $page = new LoginPageController($dbController, $LOGIN_LOCAL);
        break;
    case "reg":
        $page = new RegistrationPageController($dbController, $REG_LOCAL);
        break;
    case "profile":
        $page = new ProfilePageController($dbController, $PROFILE_LOCAL);
        break;
    case "error":
        $page = new ErrorPageController($dbController, "");
        break;
    default :
        $page = new LoginPageController($dbController, $LOGIN_LOCAL);
        break;
}

$page->getContent();

