<?php
require_once dirname(__FILE__) . '/../../config.php';
require_once $conf->root_path . '/lib/smarty/libs/Smarty.class.php';

session_start();


// Pobranie roli użytkownika
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

if ( empty($role) ){
    include $conf->root_path."/app/security/login.php";
    exit();
}