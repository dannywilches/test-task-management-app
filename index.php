<?php
require_once "config/global.php";

error_reporting(E_ALL);
ini_set('ignore_repeared_errors', TRUE);
// ini_set('display_errors', FALSE);
ini_set('log_errors', TRUE);
ini_set('error_log', SERVER_URL."php-error.log");

include "views/app.php";
    // error_log("Inicio App");

    // require_once "config/global.php";
    // include "views/app.php";
    // require_once "libs/controller.php";
    // require_once "libs/model.php";
    // require_once "libs/view.php";
    // require_once "libs/app.php";

    // $app = new App();
    

