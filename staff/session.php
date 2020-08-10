<?php

session_start();
$time = $_SERVER['REQUEST_TIME'];
$timeout_duration = 1800;

if (isset($_SESSION['LAST_ACTIVITY']) && 
   ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
    session_unset();
    session_destroy();
    log_out();
    session_start();
}

$_SESSION['LAST_ACTIVITY'] = $time;

function logged_in(){
    return isset($_SESSION["SESSION_ID"]);
}

function confirm_logged_in(){
    if (!logged_in()){
        header("Location: /staff/login.php");
    }
}

function log_out(){
    header("Location: /staff/login.php");
    $_SESSION = [];
}



?>