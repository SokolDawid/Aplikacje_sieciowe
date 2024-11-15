<?php
require_once dirname(__FILE__) . '/../../config.php';
require_once $conf->root_path . '/lib/smarty/libs/Smarty.class.php';

session_start();
session_destroy();

// Przekierowanie do strony logowania
header("Location: " . $conf->app_url);
