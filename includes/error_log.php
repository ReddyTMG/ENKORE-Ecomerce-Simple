<?php
    require_once("functions.php");

    error_reporting(E_ALL);

    ini_set("display_errors", 0);

    customErrorHandler($errno, $errstr, $errfile, $errline);

    set_error_handler("customErrorHandler");